<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Register extends BaseController
{
    public function index()
    {
        //
        $data = [
            'THEMES_PAGE'       => $this->themesPage,
            'SITE_URL'          => site_url(),
            'BASE_URL'          => base_url(),
            'URL_SAVE_REGISTER' => site_url('register-save')
        ];
        $data['TAHUN_LAHIR_LIST']   = getTahunLahir();
        $data['BULAN_LAHIR_LIST']   = getBulan();
        $data['HARI_LAHIR_LIST']    = getHari();
        $data['PENDIDIKAN_LIST']    = getPendidikan();

        $data['HEADER_SECTION']             = $this->parser->setData($data)->render($this->themes . '/layout/header/apply_header');
        $data['BODY_SECTION']               = $this->parser->setData($data)->render($this->themes . '/layout/form/form_only_register');        
        $data['FOOTER_SECTION']             = $this->parser->setData($data)->render($this->themes . '/layout/footer/client_footer');
        
        echo $this->parser->setData($data)->render($this->themes . '/layout/form/form_applyandsignup_layout');
    }

    public function applySignUp($companyid ,$alias) 
    {
        //
        $data = [
            'THEMES_PAGE'   => $this->themesPage,
            'SITE_URL'      => site_url(),
            'BASE_URL'      => base_url(),
            'URL_APPLY_AND_SIGNUP'  => site_url('apply-and-register/' . $companyid. "/". $alias),
            'URL_REFF'     => site_url('apply-and-signup/'. $companyid. "/" . $alias),
            'URL_APPLY_AND_REGIST' => site_url('apply-register/' . $companyid. '/' . $alias)

        ];
        $jobs_detail    = $this->getAlias(1, $alias);

        

        // echo "<pre>";
        // print_r($jobs_detail);
        // die;
        $data['jobs_detail_id']             = $jobs_detail['data']->id;
        $data['jobs_detail_title']          = $jobs_detail['data']->title;
        $data['jobs_detail_type']           = $jobs_detail['data']->type;
        $data['jobs_detail_category']       = $jobs_detail['data']->name;
        $data['jobs_detail_description']    = $jobs_detail['data']->description;  
        $data['exp_desc']                   = $jobs_detail['data']->exp; 
        $data['spec_desc']                  = $jobs_detail['data']->skill; 
        $data['insentif_desc']              = $jobs_detail['data']->info;
        $data['benefit_desc']               = $jobs_detail['data']->info;   
        $data['last_update']               = $jobs_detail['data']->updated_at; 
        $data['jobs_detail_link']           = site_url('apply-and-signup/'.$jobs_detail['data']->alias);

        $data['APPLY_JOBS_DETAIL_SECTION']  = $this->parser->setData($data)->render($this->themes . '/layout/content/apply_jobs_detail');
        $data['APPLY_JOBS_DETAIL_SECTION']  .= $this->parser->setData($data)->render($this->themes . '/layout/content/apply_jobs_warning');  
        
        $data['APPLY_JOBS_LOGIN_AND_REGISTER_SECTION']  = '';
        $isLoggedin = $this->session->get('isLoggedIn'); 
        $session = $this->session->get();
        // echo "<pre>";
        // print_r($session);
        // die;
        $data['APPLY_JOBS_LOGIN_AND_REGISTER_SECTION']  = ''; 
        if ($isLoggedin){
            $data['HEADER_SECTION']             = $this->parser->setData($data)->render($this->themes . '/layout/header/apply_new_header');
            $data['job_id'] = $data['jobs_detail_id']; 
            $data['applicant_id'] = $session['applicant_id'];
            $data['my_applicants_fullname'] = $session['fullname'];  
            $data['my_applicants_hp'] = $session['hp']; 
            $data['my_applicants_education'] = $session['education']; 
            $data['my_applicants_address'] = $session['address']; 
            $data['my_applicants_city'] = $session['city']; 
            $data['my_applicants_title'] = $session['title']; 
            $data['my_applicants_source'] = $session['source']; 
            $data['APPLY_JOBS_LOGIN_AND_REGISTER_SECTION']  = $this->parser->setData($data)->render($this->themes . '/layout/content/application_apply');
        }else {
            $data['HEADER_SECTION']             = $this->parser->setData($data)->render($this->themes . '/layout/header/apply_header');
            $data['my_applicants_fullname'] = 'Guest';  
            $data['job_id'] = $data['jobs_detail_id']; 
            $data['APPLY_JOBS_LOGIN_AND_REGISTER_SECTION']  = $this->parser->setData($data)->render($this->themes . '/layout/form/form_apply_login');
            $data['APPLY_JOBS_LOGIN_AND_REGISTER_SECTION']  .= $this->parser->setData($data)->render($this->themes . '/layout/form/form_apply_register');
        }
        
      //  $data['APPLY_JOBS_LOGIN_AND_REGISTER_SECTION']  .= $this->parser->setData($data)->render($this->themes . '/layout/form/form_apply_login');
       // $data['APPLY_JOBS_LOGIN_AND_REGISTER_SECTION']  .= $this->parser->setData($data)->render($this->themes . '/layout/form/form_apply_register');
        
        $data['TAHUN_LAHIR_LIST']   = getTahunLahir();
        $data['BULAN_LAHIR_LIST']   = getBulan();
        $data['HARI_LAHIR_LIST']    = getHari();
        $data['PENDIDIKAN_LIST']    = getPendidikan(); 
        $data['GENDER_LIST']        = getGender(); 

        //data ada namun double

      //  $data['HEADER_SECTION']             = $this->parser->setData($data)->render($this->themes . '/layout/header/apply_header');
        $data['BODY_SECTION']               = $this->parser->setData($data)->render($this->themes . '/layout/content/body_apply_login_and_register');        
        $data['FOOTER_SECTION']             = $this->parser->setData($data)->render($this->themes . '/layout/footer/client_footer');
        echo $this->parser->setData($data)->render($this->themes . '/layout/form/form_applyandsignup_layout');
    }

  
    public function applyRegister($companyid, $alias)
    { 
        
        $params = $this->request->getPost();
        // echo "<pre>";
        //     print_r($params);
        //     die;
       


        // echo"<pre>";
        // print_r($params);

        // die;
       
        $data = [];
        $config = config('BlogmeConfig');   
       // $session = $this->session->get();
        // echo "<pre>";
        // print_r($session);
        // print_r($params);
        // die;

        // $source = [
        //     'title'  => 
        // ]

        if(!empty($params['upload_cv'])){
            $params['data'] = [
                'fullname'     => $params['fullname'],
                'hp'           => $params['hp'],
                'city'         => $params['city'],
                'address'      => $params['address'],
                'education'    => $params['education'],
                'source'       => $params['upload_cv']
            ];
            $params['apiurl']   =  $config->apiURL . "jobs-posting/$companyid/applylogin/$alias";
            $result = requestPostAPI($companyid, $params);  

        } else { 

            $params['data'] = [
                'job_id'           => $params['job_id'],
                'applicant_id'     => $params['applicant_id'],
                'fullname'         => $params['fullname'],
                'hp'               => $params['hp'],
                'city'             => $params['city'],
                'address'          => $params['address'],
                'education'        => $params['education'],
              //  'title'            => $params['title'],
                'source'           => $params['cv'],
                'applicants_value' => $params['cover_letter']
            ];

            // echo "<pre>";
            // print_r($params['data']);
            // die;
            
            $params['apiurl']   =  $config->apiURL . "jobs-posting/$companyid/applylogin/$alias";
            $result = requestPostAPI($companyid, $params); 

             echo "<pre>";
            print_r($result);
            die;


        }
        
        
        // $params['apiurl']   =  $config->apiURL . "jobs-posting/$companyid/applylogin/$alias";
        // $params['data']     = [
        //     'fullname'     => $params['fullname'],
        //     'hp'           => $params['hp'],
        //     'city'         => $params['city'],
        //     'address'      => $params['address'],
        //     'education'    => $params['education'],
        //     'source'        => $params['source'],
        // ];
        
        // $result = requestPostAPI($companyid, $params); 
        $no = 1;

        echo "<pre>";
        print_r($result);
        die;
        
    }

    public function registApply($companyid, $alias){ 
        $params = $this->request->getPost();
        $file = $this->request->getFile('upload_cv'); 
        $file_name =  $file->getName();
        $config = config('BlogmeConfig'); 
    

        $data['source'] = [
            'userfile'   => $file,
            'domain'     => '1011-karir',
            'folder'     => 'lamaran',
            'sizes'      => '', 
            'name'       =>  $file_name
        ];
        $data['fileurl']   =  $config->fileURL . "api";
        $result = requestPostFile($data); 


      //  $tanggal_lahir = date_create($params['tahun_lahir']."-".$params['bulan_lahir']."-".$params['hari_lahir']);

      $tahun = $params['tahun_lahir']."-".$params['bulan_lahir']."-".$params['hari_lahir'];


        $params['data'] = [
            'job_id'           => $params['job_id'],
            'fullname'         => $params['fullname'],
            'hp'               => $params['hp'],
            'dob'              => $tahun,
            'education'        => $params['education'],
            'gender'           => $params['gender'],
            'address'          => $params['address'],
            'rt'               => '',
            'rw'               => '',
            'zip_postal'       => '',
            'pob'              => '',
            'city'             => $params['city'],
            'title'            => $result['data']->name,
            'source'           => json_encode($result['data']),
            'applicants_value' => $params['cover_letter'],
            'email'            => $params['email'],
            'password'         => $params['password'], 

        ]; 

        // echo "<pre>";
        // print_r( $params['data']);
        // die;

        $params['apiurl'] = $config->apiURL . "jobs-posting/$companyid/applicant/$alias";
        $result = requestPostAPI($companyid, $params); 


        redirect('');

    

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

    public function save()
    {
        $params = $this->request->getPost();
        print_r($params);
        
    }


}