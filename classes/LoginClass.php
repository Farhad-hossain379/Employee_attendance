<?php
require_once 'DatabaseConnection.php';

class LoginClass
{
    public function __construct()
    {
        new DatabaseConnection();
    }

    public function loginAction($data)
    {

    }

}