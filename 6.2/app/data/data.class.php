<?php

class Data
{
    static private $dataStore;

    static public function initialize($dataProvider)
    {
        return self::$dataStore = $dataProvider;
    }

    static public function getTerms()
    {
        return self::$dataStore->getTerms();
    }

    static public function getTerm($term)
    {
        return self::$dataStore->getTerm($term);
    }

    static public function createTerm($term, $definition, $summary)
    {
        return self::$dataStore->createTerm($term, $definition, $summary);
    }

    static public function updateTerm($original_term, $term, $definition, $summary)
    {
        return self::$dataStore->updateTerm($original_term, $term, $definition, $summary);
    }

    static public function deleteTerm($term)
    {
        return self::$dataStore->deleteTerm($term);
    }


    static public function searchTerms($termSearch)
    {
        return self::$dataStore->searchTerms($termSearch);
    }
}
