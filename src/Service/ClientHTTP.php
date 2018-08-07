<?php

namespace App\Service;

use GuzzleHttp\Client;

class ClientHTTP
{
    protected $client;
    
    public function __construct()
    {
        $this->client = new Client(['base_uri' => 'http://cms.it-resume.local:8080/api_v2/', 'timeout' => 2.0]);
    }
}
