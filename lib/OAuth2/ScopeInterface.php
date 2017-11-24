<?php

namespace OAuth2;

use OAuth2\Storage\ScopeInterface as ScopeStorageInterface;

interface ScopeInterface extends ScopeStorageInterface
{
    /**
     * Check if everything in required scope is contained in available scope.
     *
     * @param string $required_scope - A space-separated string of scope.
     * @param $available_scope       - A space-separated string of scopes
     * @return boolean               - True if everything in required scope is contained in available scope and FALSE
     *                                 if it isn't
     */
    public function checkScope($required_scope, $available_scope);

    /**
     * Return scope info from request
     *
     * @param RequestInterface $request - Request object to check
     * @return string                   - representation of requested scope
     */
    public function getScopeFromRequest(RequestInterface $request);
}