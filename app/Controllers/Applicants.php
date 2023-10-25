<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Applicants extends BaseController
{
    public function index()
    {
        //
        $session_info = $this->session->get();
        
        $data = [
            'THEMES_PAGE'   => $this->themesPage,
            'SITE_URL'      => site_url(),
            'BASE_URL'      => base_url(),
            'my_applicants_fullname'    => $session_info['fullname'],
            'my_applicants_email'       => $session_info['email'],
            'my_applicants_hp'          => $session_info['hp']
        ];
        
        $data['CLIENT_MENU_DESKTOP']    = $this->parser->setData($data)->render($this->themes . '/layout/menu/client_menu_desktop');        
        $data['CLIENT_APPLY_LIST']    = $this->parser->setData($data)->render($this->themes . '/layout/list/client_apply_list');    
        $data['CLIENT_HEADER_SECTION']         = $this->parser->setData($data)->render($this->themes . '/layout/header/client_header');        
        $data['FOOTER_SECTION']         = $this->parser->setData($data)->render($this->themes . '/layout/footer/client_footer');        
        
        echo $this->parser->setData($data)->render($this->themes . '/layout/content/client_layout');
    }

    public function myProfile()
    {
        $session_info = $this->session->get();

    //    echo "<pre>";
    //     print_r($session_info);
    //     die;
        
        $data = [
            'THEMES_PAGE'   => $this->themesPage,
            'SITE_URL'      => site_url(),
            'BASE_URL'      => base_url(),
            'my_applicants_fullname'    => $session_info['fullname'],
            'my_applicants_email'       => $session_info['email'],
            'my_applicants_hp'          => $session_info['hp'],
            'my_applicants_city'        => $session_info['city'],
            'my_applicants_gender'        => $session_info['gender'],
            'my_applicants_age'        => $session_info['age'],
            'menu_my_profile_active'    => 'hover show',
            'menu_my_apply_active'      => ''
        ];

        $params = [
            'data'      => ['id'=>$session_info['id'] ],
            'apiurl'    => $this->config->apiURL . 'jobs/1/applicants/detail-data-applicant'
        ];

        $detail = requestPostAPI(1, $params);

        // echo "<pre>";
        // print_r($detail);
        // die;
        
        $data['CLIENT_MENU_DESKTOP']    = $this->parser->setData($data)->render($this->themes . '/layout/menu/client_menu_desktop');   
        $data['CLIENT_APPLY_LIST']      = $this->parser->setData($data)->render($this->themes . '/layout/content/client_profile');     
        
        $data['CLIENT_HEADER_SECTION']         = $this->parser->setData($data)->render($this->themes . '/layout/header/client_header');        
        $data['FOOTER_SECTION']         = $this->parser->setData($data)->render($this->themes . '/layout/footer/client_footer');        
        
        echo $this->parser->setData($data)->render($this->themes . '/layout/content/client_layout');
    }

    public function myApply()
    {
        $session_info = $this->session->get();
        $data = [
            'THEMES_PAGE'   => $this->themesPage,
            'SITE_URL'      => site_url(),
            'BASE_URL'      => base_url(),
            'my_applicants_fullname'    => $session_info['fullname'],
            'my_applicants_email'       => $session_info['email'],
            'my_applicants_hp'          => $session_info['hp'],
            'menu_my_profile_active'    => '',
            'menu_my_apply_active'      => 'hover show',
            'sub_menu_my_apply_active'   => 'active'
        ];
        
        $data['CLIENT_MENU_DESKTOP']    = $this->parser->setData($data)->render($this->themes . '/layout/menu/client_menu_desktop');
        $data['CLIENT_APPLY_LIST']      = $this->parser->setData($data)->render($this->themes . '/layout/content/client_apply'); 
            
        
        $data['CLIENT_HEADER_SECTION']         = $this->parser->setData($data)->render($this->themes . '/layout/header/client_header');        
        $data['FOOTER_SECTION']         = $this->parser->setData($data)->render($this->themes . '/layout/footer/client_footer');        
        
        echo $this->parser->setData($data)->render($this->themes . '/layout/content/client_layout');
    }

    public function myInterview()
    {
        $session_info = $this->session->get();
        $data = [
            'THEMES_PAGE'   => $this->themesPage,
            'SITE_URL'      => site_url(),
            'BASE_URL'      => base_url(),
            'my_applicants_fullname'    => $session_info['fullname'],
            'my_applicants_email'       => $session_info['email'],
            'my_applicants_hp'          => $session_info['hp'],
            'menu_my_profile_active'    => '',
            'menu_my_apply_active'      => 'hover show',
            'sub_menu_my_interview_active'   => 'active'
        ];

        $data['CLIENT_MENU_DESKTOP']    = $this->parser->setData($data)->render($this->themes . '/layout/menu/client_menu_desktop');
        $data['CLIENT_APPLY_LIST']      = $this->parser->setData($data)->render($this->themes . '/layout/content/client_interview');     
        
        $data['CLIENT_HEADER_SECTION']         = $this->parser->setData($data)->render($this->themes . '/layout/header/client_header');        
        $data['FOOTER_SECTION']         = $this->parser->setData($data)->render($this->themes . '/layout/footer/client_footer');        
        
        echo $this->parser->setData($data)->render($this->themes . '/layout/content/client_layout');
    }

    public function myTest()
    {
        $session_info = $this->session->get();
        $data = [
            'THEMES_PAGE'   => $this->themesPage,
            'SITE_URL'      => site_url(),
            'BASE_URL'      => base_url(),
            'my_applicants_fullname'    => $session_info['fullname'],
            'my_applicants_email'       => $session_info['email'],
            'my_applicants_hp'          => $session_info['hp'],

            'menu_my_profile_active'    => '',
            'menu_my_apply_active'      => 'hover show',
            'sub_menu_my_test_active'   => 'active'
        ];

        $data['CLIENT_MENU_DESKTOP']    = $this->parser->setData($data)->render($this->themes . '/layout/menu/client_menu_desktop');
        $data['CLIENT_APPLY_LIST']      = $this->parser->setData($data)->render($this->themes . '/layout/content/client_test');

        $data['CLIENT_HEADER_SECTION']         = $this->parser->setData($data)->render($this->themes . '/layout/header/client_header');        
        $data['FOOTER_SECTION']         = $this->parser->setData($data)->render($this->themes . '/layout/footer/client_footer');        
        echo $this->parser->setData($data)->render($this->themes . '/layout/content/client_layout');
    }


    public function apply($alias){

        $session_info = $this->session->get();
        $data = [
            'THEMES_PAGE'   => $this->themesPage,
            'SITE_URL'      => site_url(),
            'BASE_URL'      => base_url(),
            'my_applicants_fullname'    => $session_info['fullname'],
            'my_applicants_email'       => $session_info['email'],
            'my_applicants_hp'          => $session_info['hp'],

            'menu_my_profile_active'    => '',
            'menu_my_apply_active'      => 'hover show',
            'sub_menu_my_test_active'   => 'active'
        ];

        $jobs_detail    = $this->getAlias(1, $alias);
        $data['jobs_detail_title']          = $jobs_detail['data']->title;
        $data['jobs_detail_type']           = $jobs_detail['data']->type;
        $data['jobs_detail_category']       = $jobs_detail['data']->name;
        $data['jobs_detail_description']    = $jobs_detail['data']->description;   
        $data['jobs_detail_link']           = site_url('apply-and-signup/'.$jobs_detail['data']->alias);

        $data['CLIENT_MENU_DESKTOP']    = $this->parser->setData($data)->render($this->themes . '/layout/menu/client_menu_desktop');
        $data['CLIENT_APPLY_LIST']    = $this->parser->setData($data)->render($this->themes . '/layout/list/client_apply_list'); 
        
        $data['JOBS_DETAIL_SECTION']  = $this->parser->setData($data)->render($this->themes . '/layout/content/apply_jobs_detail');
        $data['CLIENT_APPLY']      = $this->parser->setData($data)->render($this->themes . '/layout/content/application_apply');
        

        $data['CLIENT_HEADER_SECTION']         = $this->parser->setData($data)->render($this->themes . '/layout/header/client_header');        
        $data['FOOTER_SECTION']         = $this->parser->setData($data)->render($this->themes . '/layout/footer/client_footer');        
        echo $this->parser->setData($data)->render($this->themes . '/layout/content/apply_layout');

    }


    public function getAlias($companyid, $alias)
    {
        $data = [];
        $config = config('BlogmeConfig');        
        
        $params['apiurl']   =  $config->apiURL . "jobs-posting/$companyid/detail/$alias";
        $params['data']     = [
            'alias'     => $alias
        ];
        
        $result = requestPostAPI($companyid, $params);
        $no = 1;
        return $result;
    }
}