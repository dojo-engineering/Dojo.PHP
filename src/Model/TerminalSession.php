<?php
/**
 * TerminalSession
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
 * TerminalSession Class Doc Comment
 *
 * @category Class
 * @description This is the terminal session object, containing detailed information about the history of the terminal session, and its current status.
 * @package  Dojo_PHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TerminalSession implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TerminalSession';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'terminal_id' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'id' => 'string',
        'status' => '\Dojo_PHP\Model\TerminalSessionStatus',
        'expire_at' => '\DateTime',
        'notification_events' => '\Dojo_PHP\Model\TerminalSessionNotificationEvent[]',
        'status_events' => '\Dojo_PHP\Model\TerminalSessionStatusEvent[]',
        'customer_receipt' => '\Dojo_PHP\Model\TerminalSessionReceipt',
        'merchant_receipt' => '\Dojo_PHP\Model\TerminalSessionReceipt',
        'details' => '\Dojo_PHP\Model\TerminalSessionDetails'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'terminal_id' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'id' => null,
        'status' => null,
        'expire_at' => 'date-time',
        'notification_events' => null,
        'status_events' => null,
        'customer_receipt' => null,
        'merchant_receipt' => null,
        'details' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'terminal_id' => false,
		'created_at' => false,
		'updated_at' => false,
		'id' => false,
		'status' => false,
		'expire_at' => false,
		'notification_events' => false,
		'status_events' => false,
		'customer_receipt' => false,
		'merchant_receipt' => false,
		'details' => true
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
        'terminal_id' => 'terminalId',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'id' => 'id',
        'status' => 'status',
        'expire_at' => 'expireAt',
        'notification_events' => 'notificationEvents',
        'status_events' => 'statusEvents',
        'customer_receipt' => 'customerReceipt',
        'merchant_receipt' => 'merchantReceipt',
        'details' => 'details'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'terminal_id' => 'setTerminalId',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'id' => 'setId',
        'status' => 'setStatus',
        'expire_at' => 'setExpireAt',
        'notification_events' => 'setNotificationEvents',
        'status_events' => 'setStatusEvents',
        'customer_receipt' => 'setCustomerReceipt',
        'merchant_receipt' => 'setMerchantReceipt',
        'details' => 'setDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'terminal_id' => 'getTerminalId',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'id' => 'getId',
        'status' => 'getStatus',
        'expire_at' => 'getExpireAt',
        'notification_events' => 'getNotificationEvents',
        'status_events' => 'getStatusEvents',
        'customer_receipt' => 'getCustomerReceipt',
        'merchant_receipt' => 'getMerchantReceipt',
        'details' => 'getDetails'
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
        $this->setIfExists('terminal_id', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('expire_at', $data ?? [], null);
        $this->setIfExists('notification_events', $data ?? [], null);
        $this->setIfExists('status_events', $data ?? [], null);
        $this->setIfExists('customer_receipt', $data ?? [], null);
        $this->setIfExists('merchant_receipt', $data ?? [], null);
        $this->setIfExists('details', $data ?? [], null);
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

        if ($this->container['terminal_id'] === null) {
            $invalidProperties[] = "'terminal_id' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['updated_at'] === null) {
            $invalidProperties[] = "'updated_at' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['expire_at'] === null) {
            $invalidProperties[] = "'expire_at' can't be null";
        }
        if ($this->container['notification_events'] === null) {
            $invalidProperties[] = "'notification_events' can't be null";
        }
        if ($this->container['status_events'] === null) {
            $invalidProperties[] = "'status_events' can't be null";
        }
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
     * Gets terminal_id
     *
     * @return string
     */
    public function getTerminalId()
    {
        return $this->container['terminal_id'];
    }

    /**
     * Sets terminal_id
     *
     * @param string $terminal_id The unique identifier for the terminal.
     *
     * @return self
     */
    public function setTerminalId($terminal_id)
    {
        if (is_null($terminal_id)) {
            throw new \InvalidArgumentException('non-nullable terminal_id cannot be null');
        }
        $this->container['terminal_id'] = $terminal_id;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at This is when the terminal session was created, in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) UTC format.
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at The timestamp of the update date, in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) UTC format.
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        if (is_null($updated_at)) {
            throw new \InvalidArgumentException('non-nullable updated_at cannot be null');
        }
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id The unique identifier of the terminal session.
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Dojo_PHP\Model\TerminalSessionStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Dojo_PHP\Model\TerminalSessionStatus $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets expire_at
     *
     * @return \DateTime
     */
    public function getExpireAt()
    {
        return $this->container['expire_at'];
    }

    /**
     * Sets expire_at
     *
     * @param \DateTime $expire_at The timestamp and date of when a payment intent will be voided, in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) UTC format. This occurs when a payment intent is created and not yet authorized. If `null`, the payment intent is voided after 30 days.
     *
     * @return self
     */
    public function setExpireAt($expire_at)
    {
        if (is_null($expire_at)) {
            throw new \InvalidArgumentException('non-nullable expire_at cannot be null');
        }
        $this->container['expire_at'] = $expire_at;

        return $this;
    }

    /**
     * Gets notification_events
     *
     * @return \Dojo_PHP\Model\TerminalSessionNotificationEvent[]
     */
    public function getNotificationEvents()
    {
        return $this->container['notification_events'];
    }

    /**
     * Sets notification_events
     *
     * @param \Dojo_PHP\Model\TerminalSessionNotificationEvent[] $notification_events When a notification is issued, a notification event is created to record when it occurred.
     *
     * @return self
     */
    public function setNotificationEvents($notification_events)
    {
        if (is_null($notification_events)) {
            throw new \InvalidArgumentException('non-nullable notification_events cannot be null');
        }
        $this->container['notification_events'] = $notification_events;

        return $this;
    }

    /**
     * Gets status_events
     *
     * @return \Dojo_PHP\Model\TerminalSessionStatusEvent[]
     */
    public function getStatusEvents()
    {
        return $this->container['status_events'];
    }

    /**
     * Sets status_events
     *
     * @param \Dojo_PHP\Model\TerminalSessionStatusEvent[] $status_events Status events include the capture, cancellation, and refund of payments.
     *
     * @return self
     */
    public function setStatusEvents($status_events)
    {
        if (is_null($status_events)) {
            throw new \InvalidArgumentException('non-nullable status_events cannot be null');
        }
        $this->container['status_events'] = $status_events;

        return $this;
    }

    /**
     * Gets customer_receipt
     *
     * @return \Dojo_PHP\Model\TerminalSessionReceipt|null
     */
    public function getCustomerReceipt()
    {
        return $this->container['customer_receipt'];
    }

    /**
     * Sets customer_receipt
     *
     * @param \Dojo_PHP\Model\TerminalSessionReceipt|null $customer_receipt customer_receipt
     *
     * @return self
     */
    public function setCustomerReceipt($customer_receipt)
    {
        if (is_null($customer_receipt)) {
            throw new \InvalidArgumentException('non-nullable customer_receipt cannot be null');
        }
        $this->container['customer_receipt'] = $customer_receipt;

        return $this;
    }

    /**
     * Gets merchant_receipt
     *
     * @return \Dojo_PHP\Model\TerminalSessionReceipt|null
     */
    public function getMerchantReceipt()
    {
        return $this->container['merchant_receipt'];
    }

    /**
     * Sets merchant_receipt
     *
     * @param \Dojo_PHP\Model\TerminalSessionReceipt|null $merchant_receipt merchant_receipt
     *
     * @return self
     */
    public function setMerchantReceipt($merchant_receipt)
    {
        if (is_null($merchant_receipt)) {
            throw new \InvalidArgumentException('non-nullable merchant_receipt cannot be null');
        }
        $this->container['merchant_receipt'] = $merchant_receipt;

        return $this;
    }

    /**
     * Gets details
     *
     * @return \Dojo_PHP\Model\TerminalSessionDetails|null
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     *
     * @param \Dojo_PHP\Model\TerminalSessionDetails|null $details details
     *
     * @return self
     */
    public function setDetails($details)
    {
        if (is_null($details)) {
            array_push($this->openAPINullablesSetToNull, 'details');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('details', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['details'] = $details;

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


