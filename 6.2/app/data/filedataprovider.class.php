<?php

require('glossaryterm.class.php');

class FileDataProvider
{
    public $filePath;

    function __construct(string $filePath)
    {
        $this->filePath = $filePath;
    }

    public function getTerms()
    {
        $data = $this->getData();

        return json_decode($data);
    }

    public function createTerm($term, $definition, $summary)
    {
        $items = $this->getTerms();

        $items[] = new GlossaryTerm($term, $definition, $summary);

        $this->setData($items);
    }

    public function updateTerm($original_term, $term, $definition, $summary)
    {
        $terms = $this->getTerms();

        foreach ($terms as $value) {
            if ($value->term == $original_term) {
                $value->term = $term;
                $value->definition = $definition;
                $value->summary = $summary;
            }
        }

        $this->setData($terms);
    }

    public function deleteTerm($term)
    {
        $terms = $this->getTerms();

        for ($i = 0; $i < count($terms); $i++) {
            if ($terms[$i]->term === $term) {
                unset($terms[$i]);
                break;
            }
        }

        $newArr = array_values($terms);

        $this->setData($newArr);
    }

    public function getTerm($term)
    {
        $terms = $this->getTerms();

        foreach ($terms as $value) {
            if ($value->term == $term) {
                return $value;
            }
        }

        return false;
    }

    public function searchTerms($termSearch)
    {
        $terms = $this->getTerms();

        $values = array_filter($terms, fn ($item) => strpos($item->term, strtoupper($termSearch)) !== false
            || strpos($item->definition, $termSearch) !== false);

        return $values;
    }

    private function setData($arr)
    {
        $json = json_encode($arr);

        file_put_contents($this->filePath, $json);
    }

    private function getData()
    {
        $fileName = $this->filePath;

        $json = '';

        if (!file_exists($fileName)) {
            file_put_contents($fileName, '');
        } else {
            $json = file_get_contents($fileName);
        }

        return $json;
    }
}
