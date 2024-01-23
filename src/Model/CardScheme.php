<?php
/**
 * CardScheme
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Dojo_PHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Unified Payments API
 *
 * # Introduction  The Dojo Universal Payments API (UPAPI) is RESTful. It returns HTTP response codes to indicate errors. It also accepts and returns JSON in the HTTP body.  ## Base URLs  Use the following base URL when making requests to the API: [https://staging-api.dojo.dev/master](https://staging-api.dojo.dev/master)  ## Authentication  The API uses [Basic HTTP auth](https://en.wikipedia.org/wiki/Basic_access_authentication). You can generate API keys in [Developer Portal](https://developer.dojo.tech). Secret keys for the test environment have the prefix `sk_sandbox_` and for production have the prefix `sk_prod_`.  You must include your secret API key in the header of all requests, for example:  ```curl curl   --header 'content-type: application/json' \\   --header 'Authorization: Basic sk_prod_your_key' \\ ... ```  API requests without authentication will fail.  ## Additional Required Headers  The following headers are required on all API requests, requests without them will fail.  `reseller-id` - Identifies the reseller who sells software on behalf of the EPOS company. This value will be unique and provided by Dojo to each reseller.   `software-house-id` - Identifies the EPOS company whose software is generating the request. This value shouldn't be configurable as it will remain the same for all customers using particular EPOS software. This value will be provided by Dojo.  ## HTTP Responses  The API returns standard HTTP response codes [RFC 7231](https://tools.ietf.org/html/rfc7231#section-6) on each request to indicate the success or otherwise of API requests. HTTP status codes summary are listed below:  * `200 OK` — The request was successful.  * `201 Created` — The request was successful, and a new resource was created as a result.  * `204 No Content` — The request was successful, but there is no content to send.  * `400 Bad Request` — Bad request, probably due to a syntax error.  * `401 Unauthorized` — Authentication required.  * `403 Forbidden` — The API key doesn't have permissions.  * `404 Not Found` — The resource doesn't exist.  * `405 Method Not Allowed` — The request method is known by the server but isn't supported by the target resource.  * `409 Conflict`—The request couldn't be completed because it conflicted with another request or the server's configuration.  * `500`, `502`, `503`, `504` `Server Errors` — An unexpected error occurred with our API, please reach out to support.  ## Errors   The API follows the error response format proposed in [RFC 7807](https://tools.ietf.org/html/rfc7807) also known as Problem Details for HTTP APIs. All errors are returned in the form of JSON.  ### Error Schema  In case of an error, the response object contains the following fields: The error object contains the following fields: * `type` [string] — A URI reference RFC 3986 that identifies the problem type.  * `code` [ErrorCode] — A short, machine-readable description of the error.  * `title` [string] — A short, human-readable summary of the error.  * `detail` [string] — A human-readable message giving more details about the error. Not always present.  * `status` [integer] — The HTTP status code.  * `traceId` [string] — The unique identifier of the failing request.  The following example shows a possible error response:  ```json {     \"type\": \"https://tools.ietf.org/html/rfc7231#section-6.5.1\",     \"code\": \"INVALID_REQUEST\",     \"title\": \"One or more validation errors occurred.\",     \"detail\": \"amount missing\",     \"status\": 400,     \"traceId\": \"00-a405f077df056a498323ffbcec05923f-aa63e6f4dbbc734a-01\", } ```  ## Versioning  Dojo API uses the yyyy-mm-dd API version-naming scheme. You have to pass the version as the `version` header in all API calls, for example:  ``` curl curl   --header 'content-type: application/json' \\   --header 'Authorization: Basic sk_prod_your_key' \\   --header 'version: Pre-release' \\ ```  When [breaking changes](../payments/development-resources/versioning-overview#breaking-changes) are made to the API, the current version listed below will be updated.   The current version is `Pre-release`.
 *
 * The version of the OpenAPI document: 2023-12-15
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Dojo_PHP\Model;
use \Dojo_PHP\ObjectSerializer;

/**
 * CardScheme Class Doc Comment
 *
 * @category Class
 * @description Supported card schemes.
 * @package  Dojo_PHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CardScheme
{
    /**
     * Possible values of this enum
     */
    public const VISA = 'VISA';

    public const MASTERCARD = 'MASTERCARD';

    public const MAESTRO = 'MAESTRO';

    public const DISCOVER = 'DISCOVER';

    public const DCI = 'DCI';

    public const AMEX = 'AMEX';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::VISA,
            self::MASTERCARD,
            self::MAESTRO,
            self::DISCOVER,
            self::DCI,
            self::AMEX
        ];
    }
}


