<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    // protected $table = 'mst_user';

    public function getLoginData($username, $pw, $mac)
    {
        $db = db_connect();
        $query = "SELECT * FROM mst_user where mus_username = '" . $username . "' and mus_password = '" . $pw . "' AND mus_mac = '" . $mac . "' ";
        $login = $db->query($query);
        $db->close();
        return $login->getResult();
    }
}
