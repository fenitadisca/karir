<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Jobs extends BaseController
{
    public function index($alias = null)
    {
        //
        $data = [
          	'THEMES_PAGE'   => $this->themesPage,
            'SITE_URL'      => site_url(),
            'BASE_URL'      => base_url(),
            'PAGE_TITLE'    => 'Pencarian Lowongan Kerja di 1011',
            'META_DESC'     => 'Daftar dan Lowongan Kerja yang tersedia di 1011 ',
            'META_KEYWORDS' => 'karir, sepuluh sebelas, bekerja, lowker, lowongan kerja, cari kerja',
            'CANONICAL_URL' => site_url('search'),  
          	'isLoggedIn'	=> $this->session->get('isLoggedIn'),
        ];

        $params['start']    = 0;
        $params['length']   = 3;
        
        $jobs_list                  = $this->getList(1, $params);
        $data['JOBS_LIST']          = $jobs_list['LIST'];
        
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
        
        $data['HEADER_SECTION']     = $this->parser->setData($data)->render($this->themes . '/layout/header/header_detail');
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
            $params = [
                'start'     => $params_array['start'],
                'length'    => $params_array['length'],
            ];
        }
        
        $params['apiurl']   =  $config->apiURL . "jobs-posting/$companyid/list-data";
        
        //"jobs/$companyid/vacancies/list-data";

        if (!empty($params_array['search']['value'])) {
            $params['search']   = $params_array['search']['value'];
        }

        $result = requestAPI($companyid, $params);

        // echo "<pre>";
        // print_r( $result);
        // die;
        
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
        
        return $data;
    }

    public function getAlias($companyid, $alias)
    {
        $data = [];
        $config = config('BlogmeConfig');        
        
        $params['apiurl']   =  $config->apiURL . "jobs-posting/$companyid/detail/$alias";
       
        //"jobs/$companyid/vacancies/detail-data-alias";
        
        $params['data']     = [
            'alias'     => $alias
        ];

    //    echo "<pre>";
    //    print_r( $params);
    //    die;
        
        $result = requestPostAPI($companyid, $params);

        $no = 1;
        return $result;
    }
}