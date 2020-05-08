<?php
/**
 * UrlToPdfRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * convertapi
 *
 * Convert API lets you effortlessly convert file formats and types.
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * UrlToPdfRequest Class Doc Comment
 *
 * @category Class
 * @description Request to convert a URL to a PDF file
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UrlToPdfRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UrlToPdfRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'url' => 'string',
        'extra_loading_wait' => 'int',
        'include_background_graphics' => 'bool',
        'scale_factor' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'url' => null,
        'extra_loading_wait' => 'int32',
        'include_background_graphics' => null,
        'scale_factor' => 'int32'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'url' => 'Url',
        'extra_loading_wait' => 'ExtraLoadingWait',
        'include_background_graphics' => 'IncludeBackgroundGraphics',
        'scale_factor' => 'ScaleFactor'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'url' => 'setUrl',
        'extra_loading_wait' => 'setExtraLoadingWait',
        'include_background_graphics' => 'setIncludeBackgroundGraphics',
        'scale_factor' => 'setScaleFactor'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'url' => 'getUrl',
        'extra_loading_wait' => 'getExtraLoadingWait',
        'include_background_graphics' => 'getIncludeBackgroundGraphics',
        'scale_factor' => 'getScaleFactor'
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
        return self::$swaggerModelName;
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
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['extra_loading_wait'] = isset($data['extra_loading_wait']) ? $data['extra_loading_wait'] : null;
        $this->container['include_background_graphics'] = isset($data['include_background_graphics']) ? $data['include_background_graphics'] : null;
        $this->container['scale_factor'] = isset($data['scale_factor']) ? $data['scale_factor'] : null;
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

        return true;
    }


    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url URL address of the website to screenshot.  HTTP and HTTPS are both supported, as are custom ports.
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets extra_loading_wait
     *
     * @return int
     */
    public function getExtraLoadingWait()
    {
        return $this->container['extra_loading_wait'];
    }

    /**
     * Sets extra_loading_wait
     *
     * @param int $extra_loading_wait Optional: Additional number of milliseconds to wait once the web page has finished loading before taking the screenshot.  Can be helpful for highly asynchronous websites.  Provide a value of 0 for the default of 5000 milliseconds (5 seconds)
     *
     * @return $this
     */
    public function setExtraLoadingWait($extra_loading_wait)
    {
        $this->container['extra_loading_wait'] = $extra_loading_wait;

        return $this;
    }

    /**
     * Gets include_background_graphics
     *
     * @return bool
     */
    public function getIncludeBackgroundGraphics()
    {
        return $this->container['include_background_graphics'];
    }

    /**
     * Sets include_background_graphics
     *
     * @param bool $include_background_graphics Optional: Set to true to include background graphics in the PDF, or false to not include.  Default is true.
     *
     * @return $this
     */
    public function setIncludeBackgroundGraphics($include_background_graphics)
    {
        $this->container['include_background_graphics'] = $include_background_graphics;

        return $this;
    }

    /**
     * Gets scale_factor
     *
     * @return int
     */
    public function getScaleFactor()
    {
        return $this->container['scale_factor'];
    }

    /**
     * Sets scale_factor
     *
     * @param int $scale_factor Optional: Set to 100 to scale at 100%, set to 50% to scale down to 50% scale, set to 200% to scale up to 200% scale, etc.  Default is 100%
     *
     * @return $this
     */
    public function setScaleFactor($scale_factor)
    {
        $this->container['scale_factor'] = $scale_factor;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


