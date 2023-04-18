<?php
require('User.php');

class FileDatabase
{
    private $source;

    public function __construct(string $source)
    {
        $this->source = dirname(__FILE__) . "\\$source";
    }

    private function setJSON($data)
    {
        $JSONData = json_encode($data);

        file_put_contents($this->source, $JSONData);
    }

    private function getJSON()
    {
        $JSONData = '';

        if (file_exists($this->source)) $JSONData = file_get_contents($this->source);
        else file_put_contents($this->source, '');

        return $JSONData;
    }

    private function getAllData()
    {
        return json_decode($this->getJSON());
    }

    private function getData(string $email)
    {
        $data = $this->getAllData();

        foreach ($data as $object) if ($object->email == $email) return $object;

        return null;
    }

    public function setData(string $email, string $password)
    {
        $data = $this->getAllData();

        $data[] = new User($email, $password);

        $this->setJSON($data);
    }

    public function checkData(string $email, string $password)
    {
        $user = $this->getData($email);

        if ($user === null) return false;

        if (password_verify($password, $user->password)) return true;

        return false;
    }
}
