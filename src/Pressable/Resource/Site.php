<?php

namespace Pressable\Resource;

use Pressable\Contracts\ApiCrudContract;

class Site implements ApiCrudContract
{

    private $client;
    private $endpoint = 'sites';

    public function __construct($client)
    {
        $this->client = $client;
    }

    /**
     * Get all sites from api
     *
     * @return string
     */
    public function getAll()
    {
        $response = $this->client
            ->request
            ->('GET', $this->endpoint);

        return $response->getBody();
    }
}