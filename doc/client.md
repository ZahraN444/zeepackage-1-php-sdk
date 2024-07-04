
# Client Class Documentation

The following parameters are configurable for the API Client:

| Parameter | Type | Description |
|  --- | --- | --- |
| `testHeader` | `string` | This is a test header<br>*Default*: `'TestHeaderDefaultValue'` |
| `environment` | `Environment` | The API environment. <br> **Default: `Environment.PRODUCTION`** |
| `timeout` | `int` | Timeout for API calls in seconds.<br>*Default*: `0` |
| `enableRetries` | `bool` | Whether to enable retries and backoff feature.<br>*Default*: `false` |
| `numberOfRetries` | `int` | The number of retries to make.<br>*Default*: `0` |
| `retryInterval` | `float` | The retry time interval between the endpoint calls.<br>*Default*: `1` |
| `backOffFactor` | `float` | Exponential backoff factor to increase interval between retries.<br>*Default*: `2` |
| `maximumRetryWaitTime` | `int` | The maximum wait time in seconds for overall retrying requests.<br>*Default*: `0` |
| `retryOnTimeout` | `bool` | Whether to retry on request timeout.<br>*Default*: `true` |
| `httpStatusCodesToRetry` | `array` | Http status codes to retry against.<br>*Default*: `408, 413, 429, 500, 502, 503, 504, 521, 522, 524` |
| `httpMethodsToRetry` | `array` | Http methods to retry against.<br>*Default*: `'GET', 'PUT'` |
| `apiKeyCredentials` | [`ApiKeyCredentials`]($a/custom-header-signature.md) | The Credentials Setter for Custom Header Signature |
| `httpBasicCredentials` | [`HttpBasicCredentials`]($a/basic-authentication.md) | The Credentials Setter for Basic Authentication |
| `petstoreAuthCredentials` | [`PetstoreAuthCredentials`]($a/oauth-2-implicit-grant.md) | The Credentials Setter for OAuth 2 Implicit Grant |

The API client can be initialized as follows:

```php
$client = SwaggerPetstoreClientBuilder::init()
    ->apiKeyCredentials(
        ApiKeyCredentialsBuilder::init(
            'api_key'
        )
    )
    ->httpBasicCredentials(
        HttpBasicCredentialsBuilder::init(
            'username',
            'passwprd'
        )
    )
    ->petstoreAuthCredentials(
        PetstoreAuthCredentialsBuilder::init(
            'OAuthClientId',
            'OAuthRedirectUri'
        )
            ->oAuthScopes(
                [
                    OAuthScopePetstoreAuthEnum::READPETS,
                    OAuthScopePetstoreAuthEnum::WRITEPETS
                ]
            )
    )
    ->testHeader('TestHeaderDefaultValue')
    ->environment('production')
    ->build();
```

## Swagger Petstore Client

The gateway for the SDK. This class acts as a factory for the Controllers and also holds the configuration of the SDK.

## Controllers

| Name | Description |
|  --- | --- |
| getPetController() | Gets PetController |
| getStoreController() | Gets StoreController |
| getUserController() | Gets UserController |

