<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $a = 4;
        $b = 10;
        $c = 2;

        $dd = ($a + $b) / $c;

        echo $dd . "<br>";

        echo "코드이그나이터4d입니다.. git을 pull 하는 사람은 지워주시길 바랍니다.. ";

        return view('welcome_message');
    }
}
