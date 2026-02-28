<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Users extends BaseController
{
    public function index(): string
    {
        return view('users/landingPage');
    }

    public function about(): string
    {
        return view('users/aboutPage');
    }
}
