<?php

namespace OAuth2\Controller;

use OAuth2\AuthorizeControllerInterface;
use OAuth2\RequestInterface;
use OAuth2\ResponseInterface;
use OAuth2\Storage\ScopeInterface;
use OAuth2\Storage\ClientInterface;

class AuthorizeController implements AuthorizeControllerInterface
{

    /**
     * @var string
     */
    private $scope;

    /**
     * @var int
     */
    private $state;

    /**
     * @var mixed
     */
    private $client_id;

    /**
     * @var string
     */
    private $redirect_uri;

    /**
     * The response type
     *
     * @var string
     */
    private $response_type;

    /**
     * @var ClientInterface
     */
    protected $clientStorage;

    /**
     * @var array
     */
    protected $responseTypes;

    /**
     * @var array
     */
    protected $config;

    /**
     * @var ScopeInterface
     */
    protected $scopeUtil;

    public function __construct(ClientInterface $clientStorage, array $responseTypes = array(), array $config = array(), ScopeInterface $scopeUtil = null)
    {
        $this->clientStorage = $clientStorage;
        $this->responseTypes = $responseTypes;
        $this->config = array_merge(array(
            'allow_implicit' => false,
            'enforce_state' => true,
            'require_extract_redirect_uri' => true,
            'redirect_status_code' => 302
        ), $config);

        if (is_null($scopeUtil)) {
//            $scopeUtil = new Scope
        }

    }

    /**
     * Handle the OAuth request
     *
     * @param \OAuth2\RequestInterface $request
     * @param \OAuth2\ResponseInterface $response
     * @param $is_authorized
     * @param null $user_id
     * @return mixed
     */
    public function handleAuthorizeRequest(RequestInterface $request, ResponseInterface $response, $is_authorized, $user_id = null)
    {
        // TODO: Implement handleAuthorizeRequest() method.
    }

    /**
     * @param \OAuth2\RequestInterface $request
     * @param \OAuth2\ResponseInterface $response
     * @return bool
     */
    public function validateAuthorizeRequest(RequestInterface $request, ResponseInterface $response)
    {
        // TODO: Implement validateAuthorizeRequest() method.
    }
}