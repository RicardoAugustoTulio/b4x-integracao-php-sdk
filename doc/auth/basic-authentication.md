
# Basic Authentication



Documentation for accessing and setting credentials for basic.

## Auth Credentials

| Name | Type | Description | Setter | Getter |
|  --- | --- | --- | --- | --- |
| username | `string` | - | `username` | `getUsername()` |
| password | `string` | - | `password` | `getPassword()` |



**Note:** Auth credentials can be set using `BasicAuthCredentialsBuilder::init()` in `basicAuthCredentials` method in the client builder and accessed through `getBasicAuthCredentials` method in the client instance.

## Usage Example

### Client Initialization

You must provide credentials in the client as shown in the following code snippet.

```php
$client = ApiB4CClientBuilder::init()
    ->basicAuthCredentials(
        BasicAuthCredentialsBuilder::init(
            'username',
            'password'
        )
    )
    ->build();
```


