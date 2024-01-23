<?php
/**
 * Refund
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

use \ArrayAccess;
use \Dojo_PHP\ObjectSerializer;

/**
 * Refund Class Doc Comment
 *
 * @category Class
 * @description The refund response object.
 * @package  Dojo_PHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Refund implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Refund';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'payment_intent_id' => 'string',
        'refund_id' => 'string',
        'refund_reason' => 'string',
        'notes' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'payment_intent_id' => null,
        'refund_id' => null,
        'refund_reason' => null,
        'notes' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'payment_intent_id' => true,
		'refund_id' => true,
		'refund_reason' => true,
		'notes' => true
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'payment_intent_id' => 'paymentIntentId',
        'refund_id' => 'refundId',
        'refund_reason' => 'refundReason',
        'notes' => 'notes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'payment_intent_id' => 'setPaymentIntentId',
        'refund_id' => 'setRefundId',
        'refund_reason' => 'setRefundReason',
        'notes' => 'setNotes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'payment_intent_id' => 'getPaymentIntentId',
        'refund_id' => 'getRefundId',
        'refund_reason' => 'getRefundReason',
        'notes' => 'getNotes'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('payment_intent_id', $data ?? [], null);
        $this->setIfExists('refund_id', $data ?? [], null);
        $this->setIfExists('refund_reason', $data ?? [], null);
        $this->setIfExists('notes', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets payment_intent_id
     *
     * @return string|null
     */
    public function getPaymentIntentId()
    {
        return $this->container['payment_intent_id'];
    }

    /**
     * Sets payment_intent_id
     *
     * @param string|null $payment_intent_id The unique identifier for the payment intent.
     *
     * @return self
     */
    public function setPaymentIntentId($payment_intent_id)
    {
        if (is_null($payment_intent_id)) {
            array_push($this->openAPINullablesSetToNull, 'payment_intent_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('payment_intent_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['payment_intent_id'] = $payment_intent_id;

        return $this;
    }

    /**
     * Gets refund_id
     *
     * @return string|null
     */
    public function getRefundId()
    {
        return $this->container['refund_id'];
    }

    /**
     * Sets refund_id
     *
     * @param string|null $refund_id The unique identifier for the refund.
     *
     * @return self
     */
    public function setRefundId($refund_id)
    {
        if (is_null($refund_id)) {
            array_push($this->openAPINullablesSetToNull, 'refund_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('refund_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['refund_id'] = $refund_id;

        return $this;
    }

    /**
     * Gets refund_reason
     *
     * @return string|null
     */
    public function getRefundReason()
    {
        return $this->container['refund_reason'];
    }

    /**
     * Sets refund_reason
     *
     * @param string|null $refund_reason The reason for the refund.
     *
     * @return self
     */
    public function setRefundReason($refund_reason)
    {
        if (is_null($refund_reason)) {
            array_push($this->openAPINullablesSetToNull, 'refund_reason');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('refund_reason', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['refund_reason'] = $refund_reason;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return string|null
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string|null $notes A description for the refund, if applicable.
     *
     * @return self
     */
    public function setNotes($notes)
    {
        if (is_null($notes)) {
            array_push($this->openAPINullablesSetToNull, 'notes');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('notes', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['notes'] = $notes;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


