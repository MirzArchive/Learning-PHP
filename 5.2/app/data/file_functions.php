<?php


function getTerms()
{
    $data = getData();

    return json_decode($data);
}

function createTerm($term, $definition, $summary)
{
    $items = getTerms();

    $items[] = new GlossaryTerm($term, $definition, $summary);

    setData($items);
}

function updateTerm($original_term, $term, $definition, $summary)
{
    $terms = getTerms();

    foreach ($terms as $value) {
        if ($value->term == $original_term) {
            $value->term = $term;
            $value->definition = $definition;
            $value->summary = $summary;
        }
    }

    setData($terms);
}

function deleteTerm($term)
{
    $terms = getTerms();

    for ($i = 0; $i < count($terms); $i++) {
        if ($terms[$i]->term === $term) {
            unset($terms[$i]);
            break;
        }
    }

    $newArr = array_values($terms);

    setData($newArr);
}

function getTerm($term)
{
    $terms = getTerms();

    foreach ($terms as $value) {
        if ($value->term == $term) {
            return $value;
        }
    }

    return false;
}

function searchTerms($termSearch)
{
    $terms = getTerms();

    $values = array_filter($terms, fn ($item) => strpos($item->term, strtoupper($termSearch)) !== false
        || strpos($item->definition, $termSearch) !== false);

    return $values;
}

function setData($arr)
{
    $fileName = CONFIG['data_file'];

    $json = json_encode($arr);

    file_put_contents($fileName, $json);
}

function getData()
{
    $fileName = CONFIG['data_file'];

    $json = '';

    if (!file_exists($fileName)) {
        file_put_contents($fileName, '');
    } else {
        $json = file_get_contents($fileName);
    }

    return $json;
}
