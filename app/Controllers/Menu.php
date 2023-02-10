<?php

namespace App\Controllers;

use App\Models\MenuModel;

class Menu extends BaseController
{

    public function index()
    {
        return view('welcome_message');
    }

    public function listKendaraan()
    {
        $data = array(
            'title' => 'List Kendaraan | Warehouse',
            'heading' => 'Menu,List Kendaraan',
            'h1Title' => 'List Kendaraan'
        );

        $dataJs = array(
            'active_menu' => 'nav-list-kendaraan'
        );

        $this->menuModel = new MenuModel();
        $menuModel = $this->menuModel->getListVehicle();

        $list['data_kendaraan'] = $menuModel;

        echo view('template/header', $data);
        echo view('menu/list-kendaraan', $list);
        echo view('template/footer', $dataJs);
    }
}
