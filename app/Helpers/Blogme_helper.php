<?php

if (!function_exists("requestAPI")){
    function requestAPI($companyid, $params)
    {
        $client     = \Config\Services::curlrequest();   
        $session    = \Config\Services::session();
        $token      = $session->get('token');

        $search     = '';
        $start      = 0;
        $length     = 10;

        if (array_key_exists('start', $params)) {
            $start = $params['start'];
        }
        if (array_key_exists('length', $params)) {
            $length = $params['length'];
        }

        if (array_key_exists('search', $params)) {
            $search = $params['search'];
        }

        try {
            $json_data = [
                'start'     => $start,
                'length'    => $length,
                'search'    => $search    
            ];

            $response   = $client->request('POST', $params['apiurl'], [
                'headers'    => [
                    'Authorization' => "Bearer $token" 
                ],
                'json'      =>  $json_data,            
            ]);                
            $list       = json_decode($response->getBody());
                        
            $status = $list->status;
            if ($status == 200){
                $data['status'] = 1; 
                $data['msg']    = $list->message;
                $data['data']   = $list->data; 
            } else {
                $data['status'] = 0; 
                $data['msg']    = 'Error::';
                $data['data']   = [];
            }       
        } catch (\Exception $e) {
            $data = [
                'status'    => 0,
                'msg'       => $e->getMessage(),
                'data'      => []
            ];
        }
        return $data;
    }
}

if (!function_exists("requestPostAPI")){
    function requestPostAPI($companyid, $params)
    {
        $client     = \Config\Services::curlrequest();   
        $session 	= \Config\Services::session();
       // $token      = $session->get('token'); 

        try {
            $json_data = $params['data'];
           
            $response   = $client->request('POST', $params['apiurl'], [
                // 'headers'    => [
                //     'Authorization' => "Bearer $token"
                // ],
                'json'      =>  $json_data,            
            ]);                
            $list       = json_decode($response->getBody());
          
           
            $status = $list->status;
            if ($status == 200){
                $data['status'] = 1;
                $data['msg']    = $list->message;
                $data['data']   = $list->data;
            } else {
                $data['status'] = 0; 
                $data['msg']    = 'Error::';
                $data['data']   = [];
            }       
        } catch (\Exception $e) {
            $data = [
                'status'    => 0,
                'msg'       => $e->getMessage(),
                'data'      => []
            ];
        }
       
        return $data;
    }
}

if (!function_exists("getTahunLahir")){
    function getTahunLahir()
    {
        $min = date('Y')-17;
        $max = date('Y')-60;
        $data = [];
        
        for($i=$min; $i>=$max; $i--){
            $data[] = [
                'id'        => $i,
                'tahun'     => $i
            ];
        }
        return $data;
    }
}

if (!function_exists("getBulan")){
    function getBulan()
    {
        $data[] = ['id'=> 1, 'bulan'=> 'Januari'];
        $data[] = ['id'=> 2, 'bulan'=> 'Februari'];
        $data[] = ['id'=> 3, 'bulan'=> 'Maret'];
        $data[] = ['id'=> 4, 'bulan'=> 'April'];
        $data[] = ['id'=> 5, 'bulan'=> 'Mei'];
        $data[] = ['id'=> 6, 'bulan'=> 'Juni'];
        $data[] = ['id'=> 7, 'bulan'=> 'Juli'];
        $data[] = ['id'=> 8, 'bulan'=> 'Agustus'];
        $data[] = ['id'=> 9, 'bulan'=> 'September'];
        $data[] = ['id'=> 10, 'bulan'=> 'Oktober'];
        $data[] = ['id'=> 11, 'bulan'=> 'Nopember'];
        $data[] = ['id'=> 12, 'bulan'=> 'Desember']; 
        
        return $data;
    }
}

if (!function_exists("getHari")){
    function getHari()
    {
        for($i=1;$i<=31;$i++){
            $data[] = [
                'id'    => $i,
                'hari'  => $i
            ];
        }
        return $data;
    }
}

if (!function_exists("getPendidikan")){
    function getPendidikan()
    {
        $data[] = ['id'=> 'SMP', 'education'=>'SMP'];
        $data[] = ['id'=> 'SMA', 'education'=>'SMA/SMK'];
        $data[] = ['id'=> 'DIPLOMA', 'education'=>'D1/D2/D3/D4']; 
        $data[] = ['id'=> 'S1', 'education'=>'S1'];
        $data[] = ['id'=> 'S2', 'education'=>'S2'];
        $data[] = ['id'=> 'Master', 'education'=>'Master'];        
        return $data;
    }
}    

if (!function_exists("getGender")){
    function getGender()
    {
        $data[] = ['id'=> 'Male', 'gender'=>'Male'];
        $data[] = ['id'=> 'Female', 'gender'=>'Female'];
        return $data;
    }
}  


if (!function_exists("requestAPIPROJECT")){
    function requestAPIPROJECT($companyid, $params)
    {
        $client     = \Config\Services::curlrequest();   
        $session    = \Config\Services::session();
       // $token      = $session->get('token');

        $search     = '';
        $start      = 0;
        $length     = 10;

        if (array_key_exists('start', $params)) {
            $start = $params['start'];
        }
        if (array_key_exists('length', $params)) {
            $length = $params['length'];
        }

        if (array_key_exists('search', $params)) {
            $search = $params['search'];
        }
        if (array_key_exists('order', $params)) {
            $order = $params['order'];
        }

        try {
            $json_data = [
                'start'     => $start,
                'length'    => $length,
                'search'    => $search,
                'order'     => $order,
            ];

            $response   = $client->request('POST', $params['apiurl'], [
                // 'headers'    => [
                //     'Authorization' => "Bearer $token"
                // ],
                'json'      =>  $json_data,            
            ]);                
            $list       = json_decode($response->getBody());

            // echo "<pre>";
            // print_r($list);
            // die;
                        
            $status = $list->status;
            if ($status == 200){
                $data['status'] = 1; 
                $data['msg']    = $list->message;
                $data['data']   = $list->data;
            } else {
                $data['status'] = 0; 
                $data['msg']    = 'Error::';
                $data['data']   = [];
            }       
        } catch (\Exception $e) {
            $data = [
                'status'    => 0,
                'msg'       => $e->getMessage(),
                'data'      => []
            ];
        }
        return $data;
    }
}

if (!function_exists("requestPostFile")){
    function requestPostFile($data)
    {
        $client     = \Config\Services::curlrequest();   
        $session 	= \Config\Services::session();
       // $token      = $session->get('token'); 

        try {
            $json_data = $data['source'];

            $file = new CURLFile($data['source']['userfile']);

            $json_data['userfile']= $file;


           
            $response   = $client->request('POST', $data['fileurl'], [
                // 'headers'    => [
                //     'Authorization' => "Bearer $token"
                // ],
                'multipart'      =>  $json_data,            
            ]);                
            $list       = json_decode($response->getBody());
          
           
            $status = $list->status;
            if ($status == 200){
                $data['status'] = 1;
                $data['msg']    = $list->message;
                $data['data']   = $list->data;
            } else {
                $data['status'] = 0; 
                $data['msg']    = 'Error::';
                $data['data']   = [];
            }       
        } catch (\Exception $e) {
            $data = [
                'status'    => 0,
                'msg'       => $e->getMessage(),
                'data'      => []
            ];
        }
       
        return $data;
    }
}