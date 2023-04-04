<?php

require('glossaryterm.class.php');

class DataProvider
{
    public $source;

    function __construct(string $source)
    {
        $this->source = $source;
    }

    public function getTerms()
    {
    }

    public function createTerm($term, $definition, $summary)
    {
    }

    public function updateTerm($original_term, $term, $definition, $summary)
    {
    }

    public function deleteTerm($term)
    {
    }

    public function getTerm($term)
    {
    }

    public function searchTerms($termSearch)
    {
    }
}
