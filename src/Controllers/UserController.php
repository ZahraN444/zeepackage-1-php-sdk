<?php

declare(strict_types=1);

/*
 * SwaggerPetstoreLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SwaggerPetstoreLib\Controllers;

use Core\Request\Parameters\BodyParam;
use Core\Request\Parameters\HeaderParam;
use Core\Request\Parameters\QueryParam;
use Core\Request\Parameters\TemplateParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;
use SwaggerPetstoreLib\Exceptions\ApiException;
use SwaggerPetstoreLib\Models\User;
use SwaggerPetstoreLib\Models\UserRequest;

class UserController extends BaseController
{
    /**
     * Creates list of users with given input array
     *
     * @param User[] $body List of user object
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createUsersWithArrayInput(array $body): void
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/user/createWithArray')
            ->parameters(HeaderParam::init('Content-Type', 'application/json'), BodyParam::init($body));

        $this->execute($_reqBuilder);
    }

    /**
     * This can only be done by the logged in user.
     *
     * @param string $username name that need to be updated
     * @param UserRequest $body Updated user object
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function updateUser(string $username, UserRequest $body): void
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PUT, '/user/{username}')
            ->parameters(
                TemplateParam::init('username', $username),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Invalid user supplied'))
            ->throwErrorOn('404', ErrorType::init('User not found'));

        $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Creates list of users with given input array
     *
     * @param User[] $body List of user object
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createUsersWithListInput(array $body): void
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/user/createWithList')
            ->parameters(HeaderParam::init('Content-Type', 'application/json'), BodyParam::init($body));

        $this->execute($_reqBuilder);
    }

    /**
     * Logs out current logged in user session
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function logoutUser(): void
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/user/logout');

        $this->execute($_reqBuilder);
    }

    /**
     * Logs user into the system
     *
     * @param string $username The user name for login
     * @param string $password The password for login in clear text
     *
     * @return string Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function loginUser(string $username, string $password): string
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/user/login')
            ->parameters(QueryParam::init('username', $username), QueryParam::init('password', $password));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Invalid username/password supplied'));

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Get user by user name
     *
     * @param string $username The name that needs to be fetched. Use user1 for testing.
     *
     * @return User Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function getUserByName(string $username): User
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/user/{username}')
            ->parameters(TemplateParam::init('username', $username));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Invalid username supplied'))
            ->throwErrorOn('404', ErrorType::init('User not found'))
            ->type(User::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This can only be done by the logged in user.
     *
     * @param UserRequest $body Created user object
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createUser(UserRequest $body): void
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/user')
            ->parameters(HeaderParam::init('Content-Type', 'application/json'), BodyParam::init($body));

        $this->execute($_reqBuilder);
    }

    /**
     * This can only be done by the logged in user.
     *
     * @param string $username The name that needs to be deleted
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function deleteUser(string $username): void
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::DELETE, '/user/{username}')
            ->parameters(TemplateParam::init('username', $username));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Invalid username supplied'))
            ->throwErrorOn('404', ErrorType::init('User not found'));

        $this->execute($_reqBuilder, $_resHandler);
    }
}
