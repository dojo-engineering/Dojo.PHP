<?php
/**
 * CreatePaymentIntentRequestBillingAddress
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Dojo_PHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Payment Service
 *
 * # Introduction  The Dojo API is RESTful. It returns HTTP response codes to indicate errors. It also accepts and returns JSON in the HTTP body.  ## Base URLs  Use the following base URL when making requests to the API:  https://api.dojo.tech/  ## Looking for no-code solutions?  Try one of our [pre-built solutions](../docs/plugins/) for your site.  # Authentication  The Dojo API uses [Basic HTTP auth](https://en.wikipedia.org/wiki/Basic_access_authentication). You can generate API keys in [Developer Portal](https://developer.dojo.tech). Secret keys for the test environment have the prefix `sk_sandbox_` and for production have the prefix `sk_prod_`.  You must include your secret API key in the header of all requests, for example:  ```curl curl   --header 'content-type: application/json' \\   --header 'Authorization: Basic sk_prod_your_key' \\ ... ```  API requests without authentication will fail.  # HTTP Responses  The API returns standard HTTP response codes [RFC 7231](https://tools.ietf.org/html/rfc7231#section-6) on each request to indicate the success or otherwise of API requests. HTTP status codes summary are listed below:  * `200 OK`—The request was successful.  * `201 Created`—The request was successful, and a new resource was created as a result.  * `204 No Content`—The request was successful, but there is no content to send.  * `400 Bad Request`—Bad request, probably due to a syntax error.  * `401 Unauthorized`—Authentication required.  * `403 Forbidden`—The API key doesn't have permissions.  * `404 Not Found`—The resource doesn't exist.  * `405 Method Not Allowed`—The request method is known by the server but isn't supported by the target resource.  * `409 Conflict`—The request couldn't be completed because it conflicted with another request or the server's configuration.  * `500`, `502`, `503`, `504` `Server Errors`—An error occurred with our API.  # Errors  Dojo follows the error response format proposed in [RFC 7807](https://tools.ietf.org/html/rfc7807) also known as Problem Details for HTTP APIs. All errors are returned in the form of JSON.  ## Error Schema  In case of an error, the response object contains the following fields:  * `errors` [object]—A human-readable explanation of errors.  * `type` [string]— A URI reference RFC 3986 that identifies the problem type.  * `title` [string]—A short, human-readable summary of the error.  * `status` [integer]—The HTTP status code.  * `detail` [string]—A human-readable message giving more details about the error. Not always present.  * `traceId` [string]—The unique identifier of the failing request.  The following example shows a possible error response:  ```json {     \"errors\": {         \"Reference\": [             \"The Reference field is required.\"         ]     },     \"type\": \"https://tools.ietf.org/html/rfc7231#section-6.5.1\",     \"title\": \"One or more validation errors occurred.\",     \"status\": 400,     \"traceId\": \"00-a405f077df056a498323ffbcec05923f-aa63e6f4dbbc734a-01\", } ```  # Versioning  Dojo API uses the yyyy-mm-dd API version-naming scheme. You have to pass the version as the `version` header in all API calls, for example:  ``` curl curl   --header 'content-type: application/json' \\   --header 'Authorization: Basic sk_prod_your_key' \\   --header 'version: 2022-04-07' \\ ```  When we make [breaking changes](../docs/development-resources/versioning-overview#breaking-changes) to the API, we release new dated versions.  The current version is `2022-04-07`.  # Postman collection  You can run the API collection in Postman:   [![Run in Postman](https://run.pstmn.io/button.svg)](https://god.gw.postman.com/run-collection/16735701-b218f555-a7ad-46c4-8ad8-1f11c0aee443?action=collection%2Ffork&collection-url=entityId%3D16735701-b218f555-a7ad-46c4-8ad8-1f11c0aee443%26entityType%3Dcollection%26workspaceId%3Dfdd152df-0154-428c-aeb4-1b90e46b8523)
 *
 * The version of the OpenAPI document: 2022-04-07
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0-SNAPSHOT
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
 * CreatePaymentIntentRequestBillingAddress Class Doc Comment
 *
 * @category Class
 * @description The address where to send the invoice.
 * @package  Dojo_PHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CreatePaymentIntentRequestBillingAddress implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreatePaymentIntentRequest_billingAddress';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'address1' => 'string',
        'address2' => 'string',
        'address3' => 'string',
        'address4' => 'string',
        'city' => 'string',
        'state' => 'string',
        'postcode' => 'string',
        'country_code' => 'string',
        'locality' => 'string',
        'county' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'address1' => null,
        'address2' => null,
        'address3' => null,
        'address4' => null,
        'city' => null,
        'state' => null,
        'postcode' => null,
        'country_code' => null,
        'locality' => null,
        'county' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'address1' => true,
		'address2' => true,
		'address3' => true,
		'address4' => true,
		'city' => true,
		'state' => true,
		'postcode' => true,
		'country_code' => true,
		'locality' => true,
		'county' => true
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
        'address1' => 'address1',
        'address2' => 'address2',
        'address3' => 'address3',
        'address4' => 'address4',
        'city' => 'city',
        'state' => 'state',
        'postcode' => 'postcode',
        'country_code' => 'countryCode',
        'locality' => 'locality',
        'county' => 'county'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address1' => 'setAddress1',
        'address2' => 'setAddress2',
        'address3' => 'setAddress3',
        'address4' => 'setAddress4',
        'city' => 'setCity',
        'state' => 'setState',
        'postcode' => 'setPostcode',
        'country_code' => 'setCountryCode',
        'locality' => 'setLocality',
        'county' => 'setCounty'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address1' => 'getAddress1',
        'address2' => 'getAddress2',
        'address3' => 'getAddress3',
        'address4' => 'getAddress4',
        'city' => 'getCity',
        'state' => 'getState',
        'postcode' => 'getPostcode',
        'country_code' => 'getCountryCode',
        'locality' => 'getLocality',
        'county' => 'getCounty'
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
        $this->setIfExists('address1', $data ?? [], null);
        $this->setIfExists('address2', $data ?? [], null);
        $this->setIfExists('address3', $data ?? [], null);
        $this->setIfExists('address4', $data ?? [], null);
        $this->setIfExists('city', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('postcode', $data ?? [], null);
        $this->setIfExists('country_code', $data ?? [], null);
        $this->setIfExists('locality', $data ?? [], null);
        $this->setIfExists('county', $data ?? [], null);
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
     * Gets address1
     *
     * @return string|null
     */
    public function getAddress1()
    {
        return $this->container['address1'];
    }

    /**
     * Sets address1
     *
     * @param string|null $address1 Address line 1 (for example, company name).
     *
     * @return self
     */
    public function setAddress1($address1)
    {
        if (is_null($address1)) {
            array_push($this->openAPINullablesSetToNull, 'address1');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('address1', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['address1'] = $address1;

        return $this;
    }

    /**
     * Gets address2
     *
     * @return string|null
     */
    public function getAddress2()
    {
        return $this->container['address2'];
    }

    /**
     * Sets address2
     *
     * @param string|null $address2 Address line 2 (for example, street, apartment, or suite).
     *
     * @return self
     */
    public function setAddress2($address2)
    {
        if (is_null($address2)) {
            array_push($this->openAPINullablesSetToNull, 'address2');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('address2', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['address2'] = $address2;

        return $this;
    }

    /**
     * Gets address3
     *
     * @return string|null
     */
    public function getAddress3()
    {
        return $this->container['address3'];
    }

    /**
     * Sets address3
     *
     * @param string|null $address3 Address line 3.
     *
     * @return self
     */
    public function setAddress3($address3)
    {
        if (is_null($address3)) {
            array_push($this->openAPINullablesSetToNull, 'address3');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('address3', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['address3'] = $address3;

        return $this;
    }

    /**
     * Gets address4
     *
     * @return string|null
     */
    public function getAddress4()
    {
        return $this->container['address4'];
    }

    /**
     * Sets address4
     *
     * @param string|null $address4 Address line 4.
     *
     * @return self
     */
    public function setAddress4($address4)
    {
        if (is_null($address4)) {
            array_push($this->openAPINullablesSetToNull, 'address4');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('address4', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['address4'] = $address4;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city City, town, district, suburb, or village.
     *
     * @return self
     */
    public function setCity($city)
    {
        if (is_null($city)) {
            array_push($this->openAPINullablesSetToNull, 'city');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('city', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state State, province, or region.
     *
     * @return self
     */
    public function setState($state)
    {
        if (is_null($state)) {
            array_push($this->openAPINullablesSetToNull, 'state');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('state', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets postcode
     *
     * @return string|null
     */
    public function getPostcode()
    {
        return $this->container['postcode'];
    }

    /**
     * Sets postcode
     *
     * @param string|null $postcode ZIP or postal code.
     *
     * @return self
     */
    public function setPostcode($postcode)
    {
        if (is_null($postcode)) {
            array_push($this->openAPINullablesSetToNull, 'postcode');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('postcode', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['postcode'] = $postcode;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string|null $country_code Two-letter country code in [ISO 3166–1-alpha-2 format](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2).
     *
     * @return self
     */
    public function setCountryCode($country_code)
    {
        if (is_null($country_code)) {
            array_push($this->openAPINullablesSetToNull, 'country_code');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('country_code', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets locality
     *
     * @return string|null
     */
    public function getLocality()
    {
        return $this->container['locality'];
    }

    /**
     * Sets locality
     *
     * @param string|null $locality Locality, can use in addition to city.
     *
     * @return self
     */
    public function setLocality($locality)
    {
        if (is_null($locality)) {
            array_push($this->openAPINullablesSetToNull, 'locality');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('locality', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['locality'] = $locality;

        return $this;
    }

    /**
     * Gets county
     *
     * @return string|null
     */
    public function getCounty()
    {
        return $this->container['county'];
    }

    /**
     * Sets county
     *
     * @param string|null $county County or zone.
     *
     * @return self
     */
    public function setCounty($county)
    {
        if (is_null($county)) {
            array_push($this->openAPINullablesSetToNull, 'county');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('county', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['county'] = $county;

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

