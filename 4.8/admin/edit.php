<?php

require('../app/app.php');

$viewBag = [
    'title' => 'The Glossary',
    'heading' => 'Create Term'
];

if (isGet()) {
    $key = sanitize($_GET['key']);

    if (empty($key)) {
        view('not_found');
        die();
    }

    $term = getTerm($key);

    if (empty($key)) {
        view('not_found');
        die();
    }

    view('admin/edit', $term);
}

if (isPost()) {
    $term = sanitize($_POST['term']);
    $definition = sanitize($_POST['definition']);
    $summary = sanitize($_POST['summary']);
    $original = sanitize($_POST['original-term']);

    if (empty($term) || empty($definition) || empty($summary) || empty($original)) {
        // TODO: display message
        redirect('index.php');
    }

    updateTerm($original, $term, $definition, $summary);
    redirect('index.php');
}
