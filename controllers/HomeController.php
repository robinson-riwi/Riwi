<?php

class HomeController extends User
{
    public $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function index()
    {
        $users = $this->user->getAllUsers();
        require 'views/users/index.php';
    }
    public function show()
    {
        $user = $this->user->getFindUser($_GET['id']);
        var_dump($user);
    }

}