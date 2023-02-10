<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function login()
    {
        $session = session();
        $session->destroy();
        return view('login/index');
    }

    public function home()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->route('login');
        } else {
            $data = array(
                'title' => 'Dashboard | Warehouse',
                'heading' => 'Home,Dashboard',
                'h1Title' => 'Dashboard'
            );

            $dataJs = array(
                'active_menu' => 'nav-dashboard'
            );

            echo view('template/header', $data);
            echo view('home/index');
            echo view('template/footer', $dataJs);
        }
    }
}
