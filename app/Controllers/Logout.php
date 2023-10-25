<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Logout extends BaseController
{
    public function index()
    {
        //
        $data_session = [
            'isLoggedIn'        => 0,
            "id"                => '',
            "email"             => '',
            "fullname"          => '',
            "hp"                => '',
            "gender"            => ''
        ];
        
        $this->session->remove($data_session);
        $this->session->destroy();
        return redirect()->to( site_url('login') ); 
    }
}
