<?php

class GlossaryTerm {

    public $term;
    public $definition;
    public $summary;

    function __construct($term, $definition, $summary)
    {
        $this->term = $term;
        $this->definition = $definition;
        $this->summary = $summary;
    }
}