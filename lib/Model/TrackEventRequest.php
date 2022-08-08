<?php
/**
 * TrackEventRequest
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
 * TrackEventRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TrackEventRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'trackEvent_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'verb' => 'string',
        'ip' => 'string',
        'user_agent' => 'string',
        'user' => '\OpenAPI\Client\Model\RiskUser',
        'source' => '\OpenAPI\Client\Model\Source',
        'session' => '\OpenAPI\Client\Model\Session',
        'device' => '\OpenAPI\Client\Model\RiskDevice',
        'fp' => 'string',
        'published' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'verb' => null,
        'ip' => null,
        'user_agent' => null,
        'user' => null,
        'source' => null,
        'session' => null,
        'device' => null,
        'fp' => null,
        'published' => null
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
        'verb' => 'verb',
        'ip' => 'ip',
        'user_agent' => 'user_agent',
        'user' => 'user',
        'source' => 'source',
        'session' => 'session',
        'device' => 'device',
        'fp' => 'fp',
        'published' => 'published'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'verb' => 'setVerb',
        'ip' => 'setIp',
        'user_agent' => 'setUserAgent',
        'user' => 'setUser',
        'source' => 'setSource',
        'session' => 'setSession',
        'device' => 'setDevice',
        'fp' => 'setFp',
        'published' => 'setPublished'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'verb' => 'getVerb',
        'ip' => 'getIp',
        'user_agent' => 'getUserAgent',
        'user' => 'getUser',
        'source' => 'getSource',
        'session' => 'getSession',
        'device' => 'getDevice',
        'fp' => 'getFp',
        'published' => 'getPublished'
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
        $this->container['verb'] = $data['verb'] ?? null;
        $this->container['ip'] = $data['ip'] ?? null;
        $this->container['user_agent'] = $data['user_agent'] ?? null;
        $this->container['user'] = $data['user'] ?? null;
        $this->container['source'] = $data['source'] ?? null;
        $this->container['session'] = $data['session'] ?? null;
        $this->container['device'] = $data['device'] ?? null;
        $this->container['fp'] = $data['fp'] ?? null;
        $this->container['published'] = $data['published'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['verb'] === null) {
            $invalidProperties[] = "'verb' can't be null";
        }
        if ($this->container['ip'] === null) {
            $invalidProperties[] = "'ip' can't be null";
        }
        if ($this->container['user_agent'] === null) {
            $invalidProperties[] = "'user_agent' can't be null";
        }
        if ($this->container['user'] === null) {
            $invalidProperties[] = "'user' can't be null";
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
     * Gets verb
     *
     * @return string
     */
    public function getVerb()
    {
        return $this->container['verb'];
    }

    /**
     * Sets verb
     *
     * @param string $verb Verbs are used to distinguish between different types of events.
     *
     * @return self
     */
    public function setVerb($verb)
    {
        $this->container['verb'] = $verb;

        return $this;
    }

    /**
     * Gets ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
     * Sets ip
     *
     * @param string $ip The IP address of the User's request.
     *
     * @return self
     */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;

        return $this;
    }

    /**
     * Gets user_agent
     *
     * @return string
     */
    public function getUserAgent()
    {
        return $this->container['user_agent'];
    }

    /**
     * Sets user_agent
     *
     * @param string $user_agent The user agent of the User's request.
     *
     * @return self
     */
    public function setUserAgent($user_agent)
    {
        $this->container['user_agent'] = $user_agent;

        return $this;
    }

    /**
     * Gets user
     *
     * @return \OpenAPI\Client\Model\RiskUser
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param \OpenAPI\Client\Model\RiskUser $user user
     *
     * @return self
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets source
     *
     * @return \OpenAPI\Client\Model\Source|null
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param \OpenAPI\Client\Model\Source|null $source source
     *
     * @return self
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets session
     *
     * @return \OpenAPI\Client\Model\Session|null
     */
    public function getSession()
    {
        return $this->container['session'];
    }

    /**
     * Sets session
     *
     * @param \OpenAPI\Client\Model\Session|null $session session
     *
     * @return self
     */
    public function setSession($session)
    {
        $this->container['session'] = $session;

        return $this;
    }

    /**
     * Gets device
     *
     * @return \OpenAPI\Client\Model\RiskDevice|null
     */
    public function getDevice()
    {
        return $this->container['device'];
    }

    /**
     * Sets device
     *
     * @param \OpenAPI\Client\Model\RiskDevice|null $device device
     *
     * @return self
     */
    public function setDevice($device)
    {
        $this->container['device'] = $device;

        return $this;
    }

    /**
     * Gets fp
     *
     * @return string|null
     */
    public function getFp()
    {
        return $this->container['fp'];
    }

    /**
     * Sets fp
     *
     * @param string|null $fp Set to the value of the __tdli_fp cookie.
     *
     * @return self
     */
    public function setFp($fp)
    {
        $this->container['fp'] = $fp;

        return $this;
    }

    /**
     * Gets published
     *
     * @return string|null
     */
    public function getPublished()
    {
        return $this->container['published'];
    }

    /**
     * Sets published
     *
     * @param string|null $published Date and time of the event in IS08601 format. Useful for preloading old events. Defaults to date time this API request is received.
     *
     * @return self
     */
    public function setPublished($published)
    {
        $this->container['published'] = $published;

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


