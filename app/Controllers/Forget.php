<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Forget extends BaseController
{
    public function index()
    {
        //
        $data = [
            'THEMES_PAGE'   => $this->themesPage,
            'SITE_URL'      => site_url(),
            'BASE_URL'      => base_url()
        ];

        echo $this->parser->setData($data)->render($this->themes . '/layout/form/form_forget');
    }
}
