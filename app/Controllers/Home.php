<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo "다시 커밋";
        return view('welcome_message');
    }
}
