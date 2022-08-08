<?php
/**
 * VerifyFactorSamlRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * OneLogin API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 3.0.0-alpha.1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * VerifyFactorSamlRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class VerifyFactorSamlRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'verifyFactorSaml_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'app_id' => 'string',
        'device_id' => 'string',
        'state_token' => 'string',
        'otp_token' => 'string',
        'do_not_notify' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'app_id' => null,
        'device_id' => null,
        'state_token' => null,
        'otp_token' => null,
        'do_not_notify' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'app_id' => 'app_id',
        'device_id' => 'device_id',
        'state_token' => 'state_token',
        'otp_token' => 'otp_token',
        'do_not_notify' => 'do_not_notify'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'app_id' => 'setAppId',
        'device_id' => 'setDeviceId',
        'state_token' => 'setStateToken',
        'otp_token' => 'setOtpToken',
        'do_not_notify' => 'setDoNotNotify'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'app_id' => 'getAppId',
        'device_id' => 'getDeviceId',
        'state_token' => 'getStateToken',
        'otp_token' => 'getOtpToken',
        'do_not_notify' => 'getDoNotNotify'
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
        $this->container['app_id'] = $data['app_id'] ?? null;
        $this->container['device_id'] = $data['device_id'] ?? null;
        $this->container['state_token'] = $data['state_token'] ?? null;
        $this->container['otp_token'] = $data['otp_token'] ?? null;
        $this->container['do_not_notify'] = $data['do_not_notify'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['app_id'] === null) {
            $invalidProperties[] = "'app_id' can't be null";
        }
        if ($this->container['device_id'] === null) {
            $invalidProperties[] = "'device_id' can't be null";
        }
        if ($this->container['state_token'] === null) {
            $invalidProperties[] = "'state_token' can't be null";
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
     * Gets app_id
     *
     * @return string
     */
    public function getAppId()
    {
        return $this->container['app_id'];
    }

    /**
     * Sets app_id
     *
     * @param string $app_id App ID of the app for which you want to generate a SAML token. This is the app ID in OneLogin.
     *
     * @return self
     */
    public function setAppId($app_id)
    {
        $this->container['app_id'] = $app_id;

        return $this;
    }

    /**
     * Gets device_id
     *
     * @return string
     */
    public function getDeviceId()
    {
        return $this->container['device_id'];
    }

    /**
     * Sets device_id
     *
     * @param string $device_id Provide the MFA device_id you are submitting for verification. The device_id is supplied by the Generate SAML Assertion API.
     *
     * @return self
     */
    public function setDeviceId($device_id)
    {
        $this->container['device_id'] = $device_id;

        return $this;
    }

    /**
     * Gets state_token
     *
     * @return string
     */
    public function getStateToken()
    {
        return $this->container['state_token'];
    }

    /**
     * Sets state_token
     *
     * @param string $state_token state_token associated with the MFA device_id you are submitting. The state_token is supplied by the Generate SAML Assertion API.
     *
     * @return self
     */
    public function setStateToken($state_token)
    {
        $this->container['state_token'] = $state_token;

        return $this;
    }

    /**
     * Gets otp_token
     *
     * @return string|null
     */
    public function getOtpToken()
    {
        return $this->container['otp_token'];
    }

    /**
     * Sets otp_token
     *
     * @param string|null $otp_token Provide the OTP value for the MFA factor you are submitting for verification.
     *
     * @return self
     */
    public function setOtpToken($otp_token)
    {
        $this->container['otp_token'] = $otp_token;

        return $this;
    }

    /**
     * Gets do_not_notify
     *
     * @return bool|null
     */
    public function getDoNotNotify()
    {
        return $this->container['do_not_notify'];
    }

    /**
     * Sets do_not_notify
     *
     * @param bool|null $do_not_notify When verifying MFA via Protect Push, set this to true to stop additional push notifications being sent to the OneLogin Protect device.
     *
     * @return self
     */
    public function setDoNotNotify($do_not_notify)
    {
        $this->container['do_not_notify'] = $do_not_notify;

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


