<?php

namespace App\Controllers;
use CodeIgniter\Pager\Pager;

class Home extends BaseController
{
    public function index($start=1)
    {
        $data = [
            'THEMES_PAGE'   => $this->themesPage,
            'SITE_URL'      => site_url(),
            'BASE_URL'      => base_url(),
            'PAGE_TITLE'    => 'Karir di 1011',
            'META_DESC'     => 'Berkarir dan Bekerja di Keluarga besar 1011 ',
            'META_KEYWORDS' => 'karir, sepuluh sebelas, bekerja, lowker, lowongan kerja, ',
            'CANONICAL_URL' => site_url()
        ];
        
        $data['HEADLINE_SECTION']   = $this->parser->setData($data)->render($this->themes . '/layout/content/headline');
        $data['HEADER_SECTION']     = $this->parser->setData($data)->render($this->themes . '/layout/header/header');
        $data['CONTENT_SECTION']    = $this->parser->setData($data)->render($this->themes . '/layout/content/jobs_home_favorite');
        
        
        if (!empty($page)) {
            $page = $start; 
        } else {
            $page = 1; 
        } 


        $params = [
            'start' => $page,
            'length'=> 9
        ];

        $joblistfavorite            = $this->getListFavorite(1); 
       
        $data['JOBS_LIST_FAVORITE'] = $joblistfavorite['list'];

        $jobslist                   = $this->getList(1, $params);
        
        $perPage                    = $params['length'];
        $total                      = $jobslist['total'];

        // echo "<pre>";
        // print_r($jobslist);
        // die;

        $data['JOBS_LIST']          = $jobslist['list'];
       

        $this->pager->setPath('karir/public/', 'group1');  
      


        $data['PAGINATION']         = $this->pager->makeLinks($page, $perPage, $total, 'hcm_pagi_full', 3, 'group1');
        
        
        $data['CONTENT_SECTION']    .= $this->parser->setData($data)->render($this->themes . '/layout/content/jobs_home_list');
        $data['BODY_SECTION']       = $this->parser->setData($data)->render($this->themes . '/layout/content/body_layout');
        $data['FOOTER_SECTION']     = $this->parser->setData($data)->render($this->themes . '/layout/footer/footer');
        
        echo $this->parser->setData($data)->render($this->themes . '/layout/main_layout'); 
    }

    public function web($alias) 
    {
        $data = [
            'THEMES_PAGE'   => $this->themesPage,
            'SITE_URL'      => site_url(),
            'BASE_URL'      => base_url(),
            'PAGE_TITLE'    => 'Karir di 1011 :: Tentang Karir di 1011',
            'META_DESC'     => 'Apa yang anda ketahui mengenai 1011 ',
            'META_KEYWORDS' => 'tentang kami, karir, sepuluh sebelas, bekerja, lowker, lowongan kerja',
            'CANONICAL_URL' => site_url('tentang-kami')
        ];
        
        $data['HEADER_SECTION']     = $this->parser->setData($data)->render($this->themes . '/layout/header/header');
        $data['CONTENT_SECTION']    = '';
        $data['BODY_SECTION']       = $this->parser->setData($data)->render($this->themes . '/layout/content/body_layout');
        $data['FOOTER_SECTION']     = $this->parser->setData($data)->render($this->themes . '/layout/footer/footer');
        echo $this->parser->setData($data)->render($this->themes . '/layout/main_layout');
    }

    function getList($companyid, $params_array)
    {
        // echo "<pre>";
        // print_r($params_array);
        // die;
        
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
        
        if (($result['status']==1) && (!empty($result['data']->list))) {
            $list = [];
            foreach($result['data']->list as $row){
                $jobs_image = base_url('themes/hcm-jobs/assets/media/illustrations/card.png');

                $list[] = [
                    'title'             => $row->title,
                    'jobs_type_name'    => $row->type_name, 
                    'jobs_category_name'=> $row->category_name,
                    'location'          => $row->location,
                    'jobs_image'        => $jobs_image, 
                    'jobs_link'         => site_url('search/'.$row->alias),
                    'jobs_link_apply'   => site_url('apply-and-signup/'.$row->alias),
                    'publish_date'      => $row->publish_date,
                    'expired_date'      => $row->expired_date 
                ];
            }
           
            $data = [
                'list'          => $list,
                'total'         => $result['data']->total,
                'totalFilter'   => $result['data']->totalFilter
            ];
        } else {
            $data = [
                'list'          => [], 
                'total'         => 0,
                'totalFilter'   => 0
            ];
        }  
        return $data;
    }

    function getListFavorite($companyid)
    {


        $config = config('BlogmeConfig');        
        
        $params = [
                'start'     => 0,
                'length'    => 4,
        ];
        
        $params['apiurl']   =  $config->apiURL . "jobs-posting/$companyid/list-data-favorite";
        
        //"jobs/$companyid/vacancies-publish/list-data-favorite"; 
    
         $params['order']   = [
              'hits'    => 'desc'
         ];
    

        $result = requestAPIPROJECT($companyid, $params); 

        // echo "<pre>";
        // print_r($result);
        // die;

        
        if (($result['status']==1) && (!empty($result['data']->list))) {  
            $list = [];
            foreach($result['data']->list as $row){
                $jobs_image = base_url('themes/hcm-jobs/assets/media/illustrations/card.png'); 

                $list[] = [
                    'jobs_favorite_title'           => $row->title,
                    'jobs_favorite_type_name'       => $row->type_name,
                    'jobs_favorite_category_name'   => $row->category_name,
                    'jobs_favorite_location'        => $row->location,
                    'jobs_favorite_image'           => $jobs_image,
                    'jobs_favorite_link'            => site_url('search/'.$row->alias), 
                    'jobs_favorite_link_apply'      => site_url('apply-and-signup/'. $companyid ."/".$row->alias),
                    'jobs_favorite_publish_date'    => $row->publish_date,
                    'jobs_favorite_expired_date'    => $row->expired_date
                ];
            }
           
            $data = [
                'list'          => $list,
                'total'         => $result['data']->total,
                'totalFilter'   => $result['data']->totalFilter
            ];
        } else {
            $data = [
                'list'          => [],
                'total'         => 0,
                'totalFilter'   => 0
            ];
        }  
        return $data;
    }
}