<?php
/**
 * PaymentIntentPaymentDetails
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
 * PaymentIntentPaymentDetails Class Doc Comment
 *
 * @category Class
 * @description Details about the payment.
 * @package  Dojo_PHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PaymentIntentPaymentDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentIntent_paymentDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'transaction_date_time' => 'string',
        'message' => 'string',
        'auth_code' => 'string',
        'card_number' => 'string',
        'card_name' => 'string',
        'expiry_date' => 'string',
        'card_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'transaction_date_time' => null,
        'message' => null,
        'auth_code' => null,
        'card_number' => null,
        'card_name' => null,
        'expiry_date' => null,
        'card_type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'transaction_date_time' => true,
		'message' => true,
		'auth_code' => true,
		'card_number' => true,
		'card_name' => true,
		'expiry_date' => true,
		'card_type' => true
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
        'transaction_date_time' => 'transactionDateTime',
        'message' => 'message',
        'auth_code' => 'authCode',
        'card_number' => 'cardNumber',
        'card_name' => 'cardName',
        'expiry_date' => 'expiryDate',
        'card_type' => 'cardType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'transaction_date_time' => 'setTransactionDateTime',
        'message' => 'setMessage',
        'auth_code' => 'setAuthCode',
        'card_number' => 'setCardNumber',
        'card_name' => 'setCardName',
        'expiry_date' => 'setExpiryDate',
        'card_type' => 'setCardType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'transaction_date_time' => 'getTransactionDateTime',
        'message' => 'getMessage',
        'auth_code' => 'getAuthCode',
        'card_number' => 'getCardNumber',
        'card_name' => 'getCardName',
        'expiry_date' => 'getExpiryDate',
        'card_type' => 'getCardType'
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
        $this->setIfExists('transaction_date_time', $data ?? [], null);
        $this->setIfExists('message', $data ?? [], null);
        $this->setIfExists('auth_code', $data ?? [], null);
        $this->setIfExists('card_number', $data ?? [], null);
        $this->setIfExists('card_name', $data ?? [], null);
        $this->setIfExists('expiry_date', $data ?? [], null);
        $this->setIfExists('card_type', $data ?? [], null);
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
     * Gets transaction_date_time
     *
     * @return string|null
     */
    public function getTransactionDateTime()
    {
        return $this->container['transaction_date_time'];
    }

    /**
     * Sets transaction_date_time
     *
     * @param string|null $transaction_date_time The date and time of the payment in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) UTC format.
     *
     * @return self
     */
    public function setTransactionDateTime($transaction_date_time)
    {
        if (is_null($transaction_date_time)) {
            array_push($this->openAPINullablesSetToNull, 'transaction_date_time');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('transaction_date_time', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['transaction_date_time'] = $transaction_date_time;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string|null $message The description of the operation.
     *
     * @return self
     */
    public function setMessage($message)
    {
        if (is_null($message)) {
            array_push($this->openAPINullablesSetToNull, 'message');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('message', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets auth_code
     *
     * @return string|null
     */
    public function getAuthCode()
    {
        return $this->container['auth_code'];
    }

    /**
     * Sets auth_code
     *
     * @param string|null $auth_code The acquirer's authorization code. This code is returned on a successful transaction.
     *
     * @return self
     */
    public function setAuthCode($auth_code)
    {
        if (is_null($auth_code)) {
            array_push($this->openAPINullablesSetToNull, 'auth_code');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('auth_code', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['auth_code'] = $auth_code;

        return $this;
    }

    /**
     * Gets card_number
     *
     * @return string|null
     */
    public function getCardNumber()
    {
        return $this->container['card_number'];
    }

    /**
     * Sets card_number
     *
     * @param string|null $card_number The card number.
     *
     * @return self
     */
    public function setCardNumber($card_number)
    {
        if (is_null($card_number)) {
            array_push($this->openAPINullablesSetToNull, 'card_number');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('card_number', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['card_number'] = $card_number;

        return $this;
    }

    /**
     * Gets card_name
     *
     * @return string|null
     */
    public function getCardName()
    {
        return $this->container['card_name'];
    }

    /**
     * Sets card_name
     *
     * @param string|null $card_name The name of the cardholder.
     *
     * @return self
     */
    public function setCardName($card_name)
    {
        if (is_null($card_name)) {
            array_push($this->openAPINullablesSetToNull, 'card_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('card_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['card_name'] = $card_name;

        return $this;
    }

    /**
     * Gets expiry_date
     *
     * @return string|null
     */
    public function getExpiryDate()
    {
        return $this->container['expiry_date'];
    }

    /**
     * Sets expiry_date
     *
     * @param string|null $expiry_date The expiry month and year in MM/YY format.
     *
     * @return self
     */
    public function setExpiryDate($expiry_date)
    {
        if (is_null($expiry_date)) {
            array_push($this->openAPINullablesSetToNull, 'expiry_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('expiry_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['expiry_date'] = $expiry_date;

        return $this;
    }

    /**
     * Gets card_type
     *
     * @return string|null
     */
    public function getCardType()
    {
        return $this->container['card_type'];
    }

    /**
     * Sets card_type
     *
     * @param string|null $card_type The card scheme.
     *
     * @return self
     */
    public function setCardType($card_type)
    {
        if (is_null($card_type)) {
            array_push($this->openAPINullablesSetToNull, 'card_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('card_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['card_type'] = $card_type;

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


