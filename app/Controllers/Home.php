<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function principal()
    {
        $data['titulo']='principal';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/principal_view');
        echo view('front/footer_view');
    }

    public function sobre_nosotros()
    {
        $data['titulo']='sobre nosotros';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/sobre_nosotros');
        echo view('front/footer_view');
    }

    public function acerca_de()
    {
        $data['titulo']='acerca de';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/acerca_de');
        echo view('front/footer_view');
    }

    public function registro()
    {
        $data['titulo']='registro';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('back/usuario/registro');
        echo view('front/footer_view');
    }

    public function login()
    {
        $data['titulo']='login';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('back/usuario/login');
        echo view('front/footer_view');
    }
}
