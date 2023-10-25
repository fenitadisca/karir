<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function index()
    {
        $data = [
            'THEMES_PAGE'   => $this->themesPage,
            'SITE_URL'      => site_url(),
            'BASE_URL'      => base_url()
        ];

        $data['HEADER_SECTION']             = $this->parser->setData($data)->render($this->themes . '/layout/header/apply_header');
        $data['FOOTER_SECTION']             = $this->parser->setData($data)->render($this->themes . '/layout/footer/client_footer');
        echo $this->parser->setData($data)->render($this->themes . '/layout/form/form_login');
    }

    public function checkLogin()
    {
        $loginVal = [
            'email' => [
                'label' => 'Email',
                'rules' => 'required|valid_email',
                'errors'    => [
                    'required'      => ' Email can not be blank',
                    'valid_email'   => ' Email address must be correct'  
                ]
            ],
            'password'  => [
                'label' => 'Password',
                'rules' => 'required|min_length[5]|max_length[15]',
                'errors'    => [
                    'required'      => 'Password can not be blank',
                    'min_length'=> ' Password Must have 5 digit minimun number',
                    'max_length'=> ' Password Must have 15 digit maximun number',
                ]
            ]
        ];

        if (! $this->validate($loginVal))
        {
            $data_error['email']        = $this->validation->getError('email');  
            $data_error['password']     = $this->validation->getError('password');
            echo json_encode($data_error);
        } else {
            $params = $this->request->getPost();

            $data = $this->sendLogin($params);
            $data_session = [
                'isLoggedIn'        => 1,
                "applicant_id"      => $data->data->applicant_id,
                "id"                => $data->data->id,
                "email"             => $data->data->email,
                "fullname"          => $data->data->fullname,
                "hp"                => $data->data->hp,
                "city"              => $data->data->city,
                "gender"            => $data->data->gender,
                "age"               => $data->data->age,
                "education"         => $data->data->education,
                "address"           => $data->data->address,
                "pob"               => $data->data->pob,
                "dob"               => $data->data->dob,
                "title"             => $data->data->title,
                "source"             => $data->data->source,

            ];
           
            $session =  $this->session->set($data_session);
            // echo "<pre>";
            // print_r( $session);
            // die;
            echo json_encode($data);
        }

    }

    function sendLogin($params)
    {
        $json_data['email']     = $params['email'];
        $json_data['password']  = $params['password'];
        $loginUrl                 = $this->config->apiURL . 'jobs/1/auth/login';  
        
        $client = \Config\Services::curlrequest();           
        try {            
            $response = $client->request('POST', $loginUrl,
            [
                'allow_redirects' => [
                    'max'       => 10,
                    'protocols' => ['http']
                ],
                'json'=>$json_data,                     
            ]);
            $login  = json_decode($response->getBody());
            $data   = $login;
        } catch (\Exception $e) {
            //die($e->getMessage());
            $this->session->setFlashdata('alert_msg', $e->getMessage());
            $data['status']     = 0;    
            $data['info']       = [];
            $data['isLoggedIn'] = 0;    
            $data['msg']        = $e->getMessage();
        }
        return $data;
    }
}