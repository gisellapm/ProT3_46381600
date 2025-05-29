<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function principal()
    {
        echo view('head_view');
        echo view('navbar_view');
        echo view('principal_view');
        echo view('footer_view');
    }

    public function quienes_somos()
    {
        echo view('head_view');
        echo view('navbar_view');
        echo view('quienes_somos');
        echo view('footer_view');
    }

    public function acerca_de()
    {
        echo view('head_view');
        echo view('navbar_view');
        echo view('acerca_de');
        echo view('footer_view');
    }
    
    public function registro()
    {
        echo view('head_view');
        echo view('navbar_view');
        echo view('registro');
        echo view('footer_view');
    }

    public function login()
    {
        echo view('head_view');
        echo view('navbar_view');
        echo view('login');
        echo view('footer_view');
    }
}
