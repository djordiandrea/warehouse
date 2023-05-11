<?php

namespace App\Models;

use CodeIgniter\Model;

class MenuModel extends Model
{
    // protected $table = 'mst_user';

    public function getListVehicle()
    {
        // $db = db_connect();
        // $query = "SELECT * FROM mst_list_vehicle";
        // $getData = $db->query($query);
        // $db->close();
        // return $getData->getResult();

        $db = db_connect();
        $query = "CALL `getAllKendaraan`();";
        $getData = $db->query($query);
        $db->close();
        return $getData->getResult();
    }
}
