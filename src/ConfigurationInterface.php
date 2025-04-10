<?php

declare(strict_types=1);

/*
 * ApiB4CLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace ApiB4CLib;

use ApiB4CLib\Authentication\BasicAuthCredentialsBuilder;
use CoreInterfaces\Http\HttpConfigurations;

/**
 * An interface for all configuration parameters required by the SDK.
 */
interface ConfigurationInterface extends HttpConfigurations
{
    /**
     * Get current API environment
     */
    public function getEnvironment(): string;

    /**
     * Get the credentials to use with BasicAuth
     */
    public function getBasicAuthCredentials(): BasicAuthCredentials;

    /**
     * Get the credentials builder instance to update credentials for BasicAuth
     */
    public function getBasicAuthCredentialsBuilder(): ?BasicAuthCredentialsBuilder;

    /**
     * Get the base uri for a given server in the current environment.
     *
     * @param string $server Server name
     *
     * @return string Base URI
     */
    public function getBaseUri(string $server = Server::SERVER_1): string;
}
