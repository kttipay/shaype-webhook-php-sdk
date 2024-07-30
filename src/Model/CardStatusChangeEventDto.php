<?php
/**
 * CardStatusChangeEventDto
 *
 * PHP version 8.1
 *
 * @package  Shaype\Webhook
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Notification Webhooks
 *
 * Definition of the webhooks API for client callbacks
 *
 * The version of the OpenAPI document: 1.0.0
 * @generated Generated by: https://openapi-generator.tech
 * Generator version: 7.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Shaype\Webhook\Model;

use ArrayAccess;
use JsonSerializable;
use InvalidArgumentException;
use ReturnTypeWillChange;
use Shaype\Webhook\ObjectSerializer;

/**
 * CardStatusChangeEventDto Class Doc Comment
 *
 * @description Details of the **Card Status Change** event; provided when the type is &#x60;CARD_STATUS_CHANGE&#x60;.
 * @package  Shaype\Webhook
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class CardStatusChangeEventDto implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'CardStatusChangeEventDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'card_hay_id' => 'string',
        'account_hay_id' => 'string',
        'card_status' => 'string',
        'card_last_four_digits' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'card_hay_id' => 'uuid',
        'account_hay_id' => 'uuid',
        'card_status' => null,
        'card_last_four_digits' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'card_hay_id' => false,
        'account_hay_id' => false,
        'card_status' => false,
        'card_last_four_digits' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var array<string, bool>
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPITypes(): array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPIFormats(): array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array<string, bool>
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return array<string, bool>
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param array<string, bool> $openAPINullablesSetToNull
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
     * @var array<string, string>
     */
    protected static array $attributeMap = [
        'card_hay_id' => 'cardHayId',
        'account_hay_id' => 'accountHayId',
        'card_status' => 'cardStatus',
        'card_last_four_digits' => 'cardLastFourDigits'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'card_hay_id' => 'setCardHayId',
        'account_hay_id' => 'setAccountHayId',
        'card_status' => 'setCardStatus',
        'card_last_four_digits' => 'setCardLastFourDigits'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'card_hay_id' => 'getCardHayId',
        'account_hay_id' => 'getAccountHayId',
        'card_status' => 'getCardStatus',
        'card_last_four_digits' => 'getCardLastFourDigits'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array<string, string>
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array<string, string>
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array<string, string>
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName(): string
    {
        return self::$openAPIModelName;
    }

    public const CARD_STATUS_ACTIVE = 'ACTIVE';
    public const CARD_STATUS_BLOCKED = 'BLOCKED';
    public const CARD_STATUS_EXPIRED = 'EXPIRED';
    public const CARD_STATUS_INACTIVE = 'INACTIVE';
    public const CARD_STATUS_AWAITING_ACTIVATION = 'AWAITING_ACTIVATION';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCardStatusAllowableValues()
    {
        return [
            self::CARD_STATUS_ACTIVE,
            self::CARD_STATUS_BLOCKED,
            self::CARD_STATUS_EXPIRED,
            self::CARD_STATUS_INACTIVE,
            self::CARD_STATUS_AWAITING_ACTIVATION,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var array
     */
    protected array $container = [];

    /**
     * Constructor
     *
     * @param array $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('card_hay_id', $data ?? [], null);
        $this->setIfExists('account_hay_id', $data ?? [], null);
        $this->setIfExists('card_status', $data ?? [], null);
        $this->setIfExists('card_last_four_digits', $data ?? [], null);
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
    private function setIfExists(string $variableName, array $fields, mixed $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return string[] invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];

        $allowedValues = $this->getCardStatusAllowableValues();
        if (!is_null($this->container['card_status']) && !in_array($this->container['card_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'card_status', must be one of '%s'",
                $this->container['card_status'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets card_hay_id
     *
     * @return string|null
     */
    public function getCardHayId(): ?string
    {
        return $this->container['card_hay_id'];
    }

    /**
     * Sets card_hay_id
     *
     * @param string|null $card_hay_id Unique identifier (UUID) of the Card associated with the event
     *
     * @return $this
     */
    public function setCardHayId(?string $card_hay_id): static
    {
        if (is_null($card_hay_id)) {
            throw new InvalidArgumentException('non-nullable card_hay_id cannot be null');
        }
        $this->container['card_hay_id'] = $card_hay_id;

        return $this;
    }

    /**
     * Gets account_hay_id
     *
     * @return string|null
     */
    public function getAccountHayId(): ?string
    {
        return $this->container['account_hay_id'];
    }

    /**
     * Sets account_hay_id
     *
     * @param string|null $account_hay_id Unique identifier (UUID) of the Account associated with the event
     *
     * @return $this
     */
    public function setAccountHayId(?string $account_hay_id): static
    {
        if (is_null($account_hay_id)) {
            throw new InvalidArgumentException('non-nullable account_hay_id cannot be null');
        }
        $this->container['account_hay_id'] = $account_hay_id;

        return $this;
    }

    /**
     * Gets card_status
     *
     * @return string|null
     */
    public function getCardStatus(): ?string
    {
        return $this->container['card_status'];
    }

    /**
     * Sets card_status
     *
     * @param string|null $card_status New card status:  * **ACTIVE**: Card has been activated  * **BLOCKED**: Card has been blocked  * **EXPIRED**: Card has been expired\"  * **INACTIVE**: Card has been cancelled  * **AWAITING_ACTIVATION**: Card is awaiting activation
     *
     * @return $this
     */
    public function setCardStatus(?string $card_status): static
    {
        if (is_null($card_status)) {
            throw new InvalidArgumentException('non-nullable card_status cannot be null');
        }
        $allowedValues = $this->getCardStatusAllowableValues();
        if (!in_array($card_status, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'card_status', must be one of '%s'",
                    $card_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['card_status'] = $card_status;

        return $this;
    }

    /**
     * Gets card_last_four_digits
     *
     * @return string|null
     */
    public function getCardLastFourDigits(): ?string
    {
        return $this->container['card_last_four_digits'];
    }

    /**
     * Sets card_last_four_digits
     *
     * @param string|null $card_last_four_digits Last four card digits
     *
     * @return $this
     */
    public function setCardLastFourDigits(?string $card_last_four_digits): static
    {
        if (is_null($card_last_four_digits)) {
            throw new InvalidArgumentException('non-nullable card_last_four_digits cannot be null');
        }
        $this->container['card_last_four_digits'] = $card_last_four_digits;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists(mixed $offset): bool
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
    #[ReturnTypeWillChange]
    public function offsetGet(mixed $offset): mixed
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
    public function offsetSet(mixed $offset, mixed $value): void
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
    public function offsetUnset(mixed $offset): void
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
    #[ReturnTypeWillChange]
    public function jsonSerialize(): mixed
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString(): string
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
    public function toHeaderValue(): string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


