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

        $menuModel = new MenuModel();
        $menuModel->getListVehicle();
        // $menuModel = $this->menuModel->getListVehicle();

        // $db = db_connect();
        // $query = "CALL `getAllKendaraan`();";
        // $login = $db->query($query);
        // $db->close();
        // $menuModel = $login->getResult();

        $list['data_kendaraan'] = $menuModel->getListVehicle();

        echo view('template/header', $data);
        echo view('menu/list-kendaraan', $list);
        echo view('template/footer', $dataJs);
    }
}
