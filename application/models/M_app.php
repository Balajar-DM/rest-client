<?php

use GuzzleHttp\Client;

class M_app extends CI_Model
{
    public function get_siswa()
    {
        $client = new Client();

        $response = $response = $client->request(
            'GET',
            'http://localhost/rest-api/siswa',
            [
                'auth' => ['admin', '1234'],
                'query' => [
                    'dcim-key' => 'dcim123'
                ]
            ]
        );
        $result = json_decode($response->getBody()->getContents());
        return $result->data;
    }
}
