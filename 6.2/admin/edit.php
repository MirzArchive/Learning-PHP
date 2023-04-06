<?php

session_start();
require('../app/app.php');
ensureAuthorization('../login.php');

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

    $term = Data::getTerm($key);

    if (empty($key)) {
        view('not_found');
        die();
    }

    view('admin/edit', $term);
}

if (isPost()) {
    $id = sanitize($_POST['id']);
    $term = sanitize($_POST['term']);
    $definition = sanitize($_POST['definition']);
    $summary = sanitize($_POST['summary']);

    if (empty($term) || empty($definition) || empty($summary) || empty($id)) {
        // TODO: display message
        redirect('index.php');
    }

    Data::updateTerm($id, $term, $definition, $summary);
    redirect('index.php');
}
