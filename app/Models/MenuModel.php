<?php

namespace App\Models;

use CodeIgniter\Model;

class MenuModel extends Model
{
    // protected $table = 'mst_user';

    public function getListVehicle()
    {
        $db = db_connect();
        $query = "SELECT * FROM mst_list_vehicle";
        $login = $db->query($query);
        $db->close();
        return $login->getResult();
    }
}
