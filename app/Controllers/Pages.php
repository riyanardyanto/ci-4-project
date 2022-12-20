<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Homepage | Riyanardyanto'
        ];
        echo view('layout/header', $data);
        echo view('pages/home');
        echo view('layout/footer');
    }

    public function about()
    {
        $data = [
            'title' => 'About Me | Riyanardyanto'
        ];
        echo view('layout/header', $data);
        echo view('pages/about');
        echo view('layout/footer');
    }

    // public function view($page = 'home')
    // {
    //     if (!is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
    //         // Whoops, we don't have a page for that!
    //         throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
    //     }

    //     $data['title'] = ucfirst($page); // Capitalize the first letter

    //     return view('templates/header', $data)
    //         . view('pages/' . $page)
    //         . view('templates/footer');
    // }
}
