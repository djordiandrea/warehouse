<?php

namespace App\Controllers;

use App\Models\LoginModel;

class Login extends BaseController
{
    // protected $loginModel;

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->route('login');
    }

    public function submitLogin()
    {
        $session = session();
        $data_login = [];

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // $this->loginModel = new LoginModel();
        // $loginModel = $this->loginModel->getLoginData($username, $password, $mac);

        $db = db_connect();
        // $query = "SELECT * FROM mst_user where mus_username = '" . $username . "' and mus_password = '" . $password . "' ";
        $query = "CALL `getUserLogin`('" . $username . "', '" . $password . "');";
        $login = $db->query($query);
        $db->close();
        $loginModel = $login->getResult();

        if (sizeof($loginModel) > 0) {
            $session = session();
            $login_session = [
                'username'  => $loginModel[0]->mus_username,
                'fullname'  => $loginModel[0]->mus_fullname,
                'logged_in' => true,
            ];

            $session->set($login_session);

            $data_login = [
                'logged_in' => true,
                'url' => '/home',
                'alert' => 'Login Success !'
            ];
        } else {

            $data_login = [
                'logged_in' => false,
                'url' => '/login',
                'alert' => 'Login Failed !'
            ];
        }

        return json_encode($data_login);
    }
}
