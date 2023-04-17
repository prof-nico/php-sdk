<?php
/**
 * PartnerProjectSettingsResponse
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Monite Partner API
 *
 * The Monite REST API, for Monite partners to integrate with our solution.
 *
 * The version of the OpenAPI document: 2023-03-14
 * Contact: developers@monite.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.5.0
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
 * PartnerProjectSettingsResponse Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PartnerProjectSettingsResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PartnerProjectSettingsResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'currency' => '\OpenAPI\Client\Model\PartnerProjectSettingsPayloadCurrency',
        'payable' => '\OpenAPI\Client\Model\PartnerProjectSettingsPayloadPayable',
        'receivable' => '\OpenAPI\Client\Model\PartnerProjectSettingsPayloadReceivable',
        'commercial_conditions' => 'string[]',
        'units' => '\OpenAPI\Client\Model\Unit[]',
        'website' => 'string',
        'default_role' => '\OpenAPI\Client\Model\PartnerProjectSettingsPayloadDefaultRole',
        'payments' => '\OpenAPI\Client\Model\PartnerProjectSettingsPayloadPayments'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'currency' => null,
        'payable' => null,
        'receivable' => null,
        'commercial_conditions' => null,
        'units' => null,
        'website' => null,
        'default_role' => null,
        'payments' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'currency' => false,
		'payable' => false,
		'receivable' => false,
		'commercial_conditions' => false,
		'units' => false,
		'website' => false,
		'default_role' => false,
		'payments' => false
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
        'currency' => 'currency',
        'payable' => 'payable',
        'receivable' => 'receivable',
        'commercial_conditions' => 'commercial_conditions',
        'units' => 'units',
        'website' => 'website',
        'default_role' => 'default_role',
        'payments' => 'payments'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'currency' => 'setCurrency',
        'payable' => 'setPayable',
        'receivable' => 'setReceivable',
        'commercial_conditions' => 'setCommercialConditions',
        'units' => 'setUnits',
        'website' => 'setWebsite',
        'default_role' => 'setDefaultRole',
        'payments' => 'setPayments'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'currency' => 'getCurrency',
        'payable' => 'getPayable',
        'receivable' => 'getReceivable',
        'commercial_conditions' => 'getCommercialConditions',
        'units' => 'getUnits',
        'website' => 'getWebsite',
        'default_role' => 'getDefaultRole',
        'payments' => 'getPayments'
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
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('payable', $data ?? [], null);
        $this->setIfExists('receivable', $data ?? [], null);
        $this->setIfExists('commercial_conditions', $data ?? [], null);
        $this->setIfExists('units', $data ?? [], null);
        $this->setIfExists('website', $data ?? [], null);
        $this->setIfExists('default_role', $data ?? [], null);
        $this->setIfExists('payments', $data ?? [], null);
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
     * Gets currency
     *
     * @return \OpenAPI\Client\Model\PartnerProjectSettingsPayloadCurrency|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \OpenAPI\Client\Model\PartnerProjectSettingsPayloadCurrency|null $currency currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            throw new \InvalidArgumentException('non-nullable currency cannot be null');
        }
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets payable
     *
     * @return \OpenAPI\Client\Model\PartnerProjectSettingsPayloadPayable|null
     */
    public function getPayable()
    {
        return $this->container['payable'];
    }

    /**
     * Sets payable
     *
     * @param \OpenAPI\Client\Model\PartnerProjectSettingsPayloadPayable|null $payable payable
     *
     * @return self
     */
    public function setPayable($payable)
    {
        if (is_null($payable)) {
            throw new \InvalidArgumentException('non-nullable payable cannot be null');
        }
        $this->container['payable'] = $payable;

        return $this;
    }

    /**
     * Gets receivable
     *
     * @return \OpenAPI\Client\Model\PartnerProjectSettingsPayloadReceivable|null
     */
    public function getReceivable()
    {
        return $this->container['receivable'];
    }

    /**
     * Sets receivable
     *
     * @param \OpenAPI\Client\Model\PartnerProjectSettingsPayloadReceivable|null $receivable receivable
     *
     * @return self
     */
    public function setReceivable($receivable)
    {
        if (is_null($receivable)) {
            throw new \InvalidArgumentException('non-nullable receivable cannot be null');
        }
        $this->container['receivable'] = $receivable;

        return $this;
    }

    /**
     * Gets commercial_conditions
     *
     * @return string[]|null
     */
    public function getCommercialConditions()
    {
        return $this->container['commercial_conditions'];
    }

    /**
     * Sets commercial_conditions
     *
     * @param string[]|null $commercial_conditions Commercial conditions for receivables.
     *
     * @return self
     */
    public function setCommercialConditions($commercial_conditions)
    {
        if (is_null($commercial_conditions)) {
            throw new \InvalidArgumentException('non-nullable commercial_conditions cannot be null');
        }
        $this->container['commercial_conditions'] = $commercial_conditions;

        return $this;
    }

    /**
     * Gets units
     *
     * @return \OpenAPI\Client\Model\Unit[]|null
     */
    public function getUnits()
    {
        return $this->container['units'];
    }

    /**
     * Sets units
     *
     * @param \OpenAPI\Client\Model\Unit[]|null $units Measurement units.
     *
     * @return self
     */
    public function setUnits($units)
    {
        if (is_null($units)) {
            throw new \InvalidArgumentException('non-nullable units cannot be null');
        }
        $this->container['units'] = $units;

        return $this;
    }

    /**
     * Gets website
     *
     * @return string|null
     */
    public function getWebsite()
    {
        return $this->container['website'];
    }

    /**
     * Sets website
     *
     * @param string|null $website website
     *
     * @return self
     */
    public function setWebsite($website)
    {
        if (is_null($website)) {
            throw new \InvalidArgumentException('non-nullable website cannot be null');
        }
        $this->container['website'] = $website;

        return $this;
    }

    /**
     * Gets default_role
     *
     * @return \OpenAPI\Client\Model\PartnerProjectSettingsPayloadDefaultRole|null
     */
    public function getDefaultRole()
    {
        return $this->container['default_role'];
    }

    /**
     * Sets default_role
     *
     * @param \OpenAPI\Client\Model\PartnerProjectSettingsPayloadDefaultRole|null $default_role default_role
     *
     * @return self
     */
    public function setDefaultRole($default_role)
    {
        if (is_null($default_role)) {
            throw new \InvalidArgumentException('non-nullable default_role cannot be null');
        }
        $this->container['default_role'] = $default_role;

        return $this;
    }

    /**
     * Gets payments
     *
     * @return \OpenAPI\Client\Model\PartnerProjectSettingsPayloadPayments|null
     */
    public function getPayments()
    {
        return $this->container['payments'];
    }

    /**
     * Sets payments
     *
     * @param \OpenAPI\Client\Model\PartnerProjectSettingsPayloadPayments|null $payments payments
     *
     * @return self
     */
    public function setPayments($payments)
    {
        if (is_null($payments)) {
            throw new \InvalidArgumentException('non-nullable payments cannot be null');
        }
        $this->container['payments'] = $payments;

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

