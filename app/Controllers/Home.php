<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('landing_page/index.php');
    }

    public function login(): string
    {
        return view('login/index.php');
    }

    public function register(): string
    {
        return view('register/index.php');
    }

}
