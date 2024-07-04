
# Basic Authentication



Documentation for accessing and setting credentials for httpBasic.

## Auth Credentials

| Name | Type | Description | Setter | Getter |
|  --- | --- | --- | --- | --- |
| username | `string` | - | `username` | `getUsername()` |
| passwprd | `string` | - | `passwprd` | `getPasswprd()` |



**Note:** Auth credentials can be set using `HttpBasicCredentialsBuilder::init()` in `httpBasicCredentials` method in the client builder and accessed through `getHttpBasicCredentials` method in the client instance.

## Usage Example

### Client Initialization

You must provide credentials in the client as shown in the following code snippet.

```php
$client = SwaggerPetstoreClientBuilder::init()
    ->httpBasicCredentials(
        HttpBasicCredentialsBuilder::init(
            'username',
            'passwprd'
        )
    )
    ->build();
```


