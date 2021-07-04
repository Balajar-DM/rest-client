<?php

use GuzzleHttp\Client;

class M_app extends CI_Model
{

    private $_client;


    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/rest-api',
            'auth' => ['admin', '1234'],
        ]);
    }


    public function get_siswa()
    {
        $response = $this->_client->request('GET','siswa',[
            'query' => [
                'dcim-key' => 'dcim123'
            ]
        ]
        );
        $result = json_decode($response->getBody()->getContents());
        return $result;
    }

    public function detail_siswa($id)
    {
        $response = $this->_client->request(
            'GET',
            'siswa',
            ['query' => ['dcim-key' => 'dcim123', 'id' => $id]]
        );
        $result = json_decode($response->getBody()->getContents());
        return $result;
    }
}
