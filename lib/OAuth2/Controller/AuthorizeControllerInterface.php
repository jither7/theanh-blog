<?php

namespace OAuth2;

use OAuth2\RequestInterface;
use OAuth2\ResponseInterface;

/**
 * This controller is called when a user should be authorized
 * by an authorization server. As OAuth2 does not handle
 * authorization directly, this controller ensures the request is valid, but
 * requires the application to determine the value of $is_authorized
 *
 * @code
 *      $user_id = $this->somehowDetermineUserId();
 *      $is_authorized = $this->somehowDetermineUserAuthorization();
 *      $response = new OAuth2\Response();
 *      $authorizeController->handleAuthorizeRequest(
 *          OAuth2\Request::createFromGlobals(),
 *          $response,
 *          $is_authorized,
 *          $user_id
 *      );
 *      $response->send();
 * @encode
 */
interface AuthorizeControllerInterface
{
    /**
     * List of possible authentication response types.
     * The "authorization_code" mechanism exclusively supports 'code'
     * and the "implicit" mechanism exclusively supports 'token'
     *
     * @var string
     *
     */
    const RESPONSE_TYPE_AUTHORIZATION_CODE = 'code';
    const RESPONSE_TYPE_ACCESS_TOKEN = 'token';

    /**
     * Handle the OAuth request
     *
     * @param \OAuth2\RequestInterface $request
     * @param \OAuth2\ResponseInterface $response
     * @param $is_authorized
     * @param null $user_id
     * @return mixed
     */
    public function handleAuthorizeRequest(RequestInterface $request, ResponseInterface $response, $is_authorized, $user_id = null);

    /**
     * @param \OAuth2\RequestInterface $request
     * @param \OAuth2\ResponseInterface $response
     * @return bool
     */
    public function validateAuthorizeRequest(RequestInterface $request, ResponseInterface $response);
}