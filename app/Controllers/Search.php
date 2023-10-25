<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Search extends BaseController
{
    public function index($page = 0, $alias ='')
    {
        $info_sess = $this->session->get();
        //
        $data = [
            'THEMES_PAGE'   => $this->themesPage,
            'SITE_URL'      => site_url(),
            'BASE_URL'      => base_url(),
            'PAGE_TITLE'    => 'Pencarian Lowongan Kerja di 1011',
            'META_DESC'     => 'Daftar dan Lowongan Kerja yang tersedia di 1011 ',
            'META_KEYWORDS' => 'karir, sepuluh sebelas, bekerja, lowker, lowongan kerja, cari kerja',
            'CANONICAL_URL' => site_url('search')
        ];

        if (!empty($info_sess['email'])) {
            $data['isLoggedIn']             = 1;
            $data['HEADER_SECTION']         = $this->parser->setData($data)->render($this->themes . '/layout/header/header_detail_for_client');
            $data['my_applicants_fullname'] = $info_sess['fullname'];  
           
        } else {
            $data['isLoggedIn']               = 0;
            $data['HEADER_SECTION']         = $this->parser->setData($data)->render($this->themes . '/layout/header/header_detail_for_client');
            $data['my_applicants_fullname'] = 'Guest';
        }  

        if ($page>0){
            $params['start'] = $page;
        } else {
            $params['start'] = 1;
        }
       
        $params['length'] = 3;

        $jobs_list                  = $this->getList(1, $params);

        //  echo "<pre>";
        // print_r($jobs_list);
        // die;

        if ($jobs_list['TOTAL']>0){
            $data['PAGINATION'] = $this->pager->makeLinks($params['start'], $params['length'], $jobs_list['TOTAL'], 'hcm_pagi_full', 3, 'group1');
            $data['JOBS_LIST']  = $jobs_list['LIST'];
            
            if (empty($alias)) {
                $detail         = $jobs_list['LIST'][0]['DETAIL'];
                $alias          = $detail['jobs_alias'];
                $jobs_detail    = $this->getAlias(1, $alias);
            } else {
                $jobs_detail    = $this->getAlias(1, $alias);
            }

            $data['jobs_detail_title']          = $jobs_detail['data']->title;
            $data['jobs_detail_type']           = $jobs_detail['data']->type;
            $data['jobs_detail_category']       = $jobs_detail['data']->name;
            $data['jobs_detail_description']    = $jobs_detail['data']->description;   
            $data['jobs_detail_link']           = site_url('apply-and-signup/'.$jobs_detail['data']->alias);
            $data['JOBS_DESC_DETAIL']   = $this->parser->setData($data)->render($this->themes . '/layout/content/jobs_desc');
        } else {
            $data['PAGINATION']         = ''; 
            $data['JOBS_LIST']          = [];
            $data['JOBS_DESC_DETAIL']   = '';
        }
        
        $data['BODY_SECTION']       = $this->parser->setData($data)->render($this->themes . '/layout/content/jobs_detail');
        $data['FOOTER_SECTION']     = $this->parser->setData($data)->render($this->themes . '/layout/footer/footer');
        
        echo $this->parser->setData($data)->render($this->themes . '/layout/main_layout');
    }

    
    public function getList($companyid, $params_array) 
    {
        $config = config('BlogmeConfig');        
        
        if (empty($params_array)) {
            $params = [
                'start'     => 0,
                'length'    => $config->listLength,
            ];
        } else {
            if ($params_array['start'] == 1){
                $params_array['start'] = 0;
            }
            $params = [
                'start'     => $params_array['start'],
                'length'    => $params_array['length'],
            ];
        }
        
        $params['apiurl']   =  $config->apiURL . "jobs-posting/$companyid/list-data";

        if (!empty($params_array['search']['value'])) {
            $params['search']   = $params_array['search']['value'];
        }

        $params['order']   = [
            'id'    => 'desc'
       ];

        $result = requestAPIPROJECT($companyid, $params);

        // echo "<pre>";
        // print_r( $result);
        // die;
       
        $data['TOTAL'] = 0;
        $data['LIST'] =  [];
        if ($result['status']){
            $total          = $result['data']->total;
            $totalFilter    = $result['data']->totalFilter;
            $data['TOTAL']  = $total;
            $no = 1;
            foreach($result['data']->list as $row){
                
                $date           = date_create($row->publish_date);
                $publish_date   = date_format($date,"d-m-Y");
                $date           = date_create($row->expired_date);
                $expired_date   = date_format($date,"d-m-Y");

                $data_array = [
                        'no'                => $no,
                        'code'              => $row->upload_code.'<br>'.$row->title,
                        'publish'           => $publish_date .' s/d '. $expired_date,
                        'jobs_title'        => $row->title,
                        'jobs_alias'        => $row->alias,
                        'location'          => $row->location,
                        'jobs_type_name'    => $row->type_name,
                        'jobs_category_name'=> $row->category_name,
                        'jobs_link'         => site_url('search/'.$row->alias)
                ];

                $data['LIST'][] = [
                    'JOBS_DETAIL'   => $this->parser->setData($data_array)->render($this->themes . '/layout/content/jobs_card_detail'),
                    'DETAIL'        => $data_array
                ]; 
                $no++;
            }
        }

        return $data;
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