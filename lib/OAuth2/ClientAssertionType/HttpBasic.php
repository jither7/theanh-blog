<?php

namespace OAuth2\ClientAssertionType;

use OAuth2\RequestInterface;
use OAuth2\ResponseInterface;

/**
 * Validate a client via Http Basic authentication
 * @package OAuth2\ClientAssertionType
 */
class HttpBasic implements ClientAssertionTypeInterface
{
    private $clientData;

    protected $storage;
    protected $config;

    public function __construct(ClientAssertionTypeInterface $storage, array $config = array())
    {
        $this->storage = $storage;
        $this->config = array_merge(array(
            'allow_credentials_in_request_body' => true,
            'allow_public_clients' => true
        ), $config);
    }

    /**
     * Validate the OAuth request
     *
     * @param RequestInterface $request
     * @param ResponseInterface $response
     * @return mixed
     */
    public function validateRequest(RequestInterface $request, ResponseInterface $response)
    {
        // TODO: Implement validateRequest() method.
    }

    /**
     * Get client id
     *
     * @return mixed
     */
    public function getClientId()
    {
        // TODO: Implement getClientId() method.
    }
}