<?php

namespace App\Controllers;

class Coba extends BaseController
{
    public function index()
    {
        echo 'ini controller coba method index';
    }

    public function about()
    {
        return view('pages/about');
    }
}
