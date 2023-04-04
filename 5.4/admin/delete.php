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

    view('admin/delete', $term);
}

if (isPost()) {
    $term = sanitize($_POST['term']);

    if (empty($term)) {
        // TODO: display message
        redirect('index.php');
    }

    Data::deleteTerm($term);
    redirect('index.php');
}
