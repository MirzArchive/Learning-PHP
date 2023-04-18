<?php
require_once('User.php');

class Employee extends User
{
    private $title;

    public function __construct($name, $password, $title)
    {
        parent::__construct($name, $password);
        $this->title = $title;
    }

    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }
}
