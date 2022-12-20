<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message'); // mengembalikan respon dari file 'welcome_message.php' yang ada di folder App/Views 
    }

    public function coba()
    {
        echo $this->nama; // menampilkan properti/variabel nama yang dibuat di file 'BaseController.php' di folder App\Controllers
    }
}
