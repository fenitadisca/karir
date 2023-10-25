<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class BlogmeConfig extends BaseConfig
{
    // site setting
    public $themesName      = 'hcm-jobs';
    //public $apiURL          = '';

    // development
    public $apiURL          = 'http://localhost/apiproject/public/';

    public $fileURL          = 'http://localhost/hcm-imageserver/public/';


    public $loginURL          ='https://api-dev.1011.co.id/';

    public $listLength      = 10;

}    