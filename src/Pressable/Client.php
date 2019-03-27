<?php

namespace Pressable;

use GuzzleHttp\Client;

class Client
{
    const API_AUTH_PATH = "https://my.pressable.com/auth/token";
    const API_BASE_PATH = "https://my.pressable.com/v1";

    private $email;
    private $password;
    private $headers;
    private $client;

    public function __construct($email, $password)
    {
        $this->authenticate();

        $this->client = new Client([
            'base_uri' => API_BASE_PATH . '/'
        ]);
    }

    /**
     * Authenticate and return access token
     *
     * @param $email string
     * @param $password string
     * @return string
    */
    private function authenticate()
    {
        $client = new Client();
        $response = $client->request('POST', API_AUTH_PATH, [
            'json' => [
                'email' => $this->email,
                'password' => $this->password
            ]
        ]);
    }

    /**
     * Set authorization token
     *
     * @param $token string
     * @return this
     */
    public function setToken($token)
    {
        $this->headers['Authorization'] = $token;
        return $this;
    }

    // get
    // post
    // put
    // delete
    // handle errors


}