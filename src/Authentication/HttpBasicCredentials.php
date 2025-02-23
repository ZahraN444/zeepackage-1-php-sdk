<?php

declare(strict_types=1);

/*
 * SwaggerPetstoreLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SwaggerPetstoreLib\Authentication;

/**
 * Interface for defining the behavior of Authentication.
 */
interface HttpBasicCredentials
{
    /**
     * String value for username.
     */
    public function getUsername(): string;

    /**
     * String value for passwprd.
     */
    public function getPasswprd(): string;

    /**
     * Checks if provided credentials match with existing ones.
     *
     * @param string $username
     * @param string $passwprd
     */
    public function equals(string $username, string $passwprd): bool;
}
