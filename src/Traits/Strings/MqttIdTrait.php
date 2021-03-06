<?php
namespace VCAS\Support\Traits\Strings;

/**
 * Mqtt Id Trait
 *
 * @see \VCAS\Support\Contracts\Strings\MqttIdAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Strings
 */
trait MqttIdTrait
{
    /**
     * MQTT Id
     *
     * @var string|null
     */
    protected $mqttId = null;

    /**
     * Set the given mqtt id
     *
     * @param string $identifier MQTT Id
     *
     * @return void
     */
    public function setMqttId($identifier)
    {
        $this->mqttId = (string) $identifier;
    }

    /**
     * Get the given mqtt id
     *
     * If no mqtt id has been set, this method will
     * set and return a default mqtt id, if any such
     * value is available
     *
     * @see getDefaultMqttId()
     *
     * @return string|null mqtt id or null if none mqtt id has been set
     */
    public function getMqttId()
    {
        if (!isset($this->mqttId)) {
            $this->mqttId = $this->getDefaultMqttId();
        }
        return $this->mqttId;
    }

    /**
     * Get a default mqtt id value, if any is available
     *
     * @return string|null A default mqtt id value or Null if no default value is available
     */
    public function getDefaultMqttId()
    {
        return null;
    }

    /**
     * Check if mqtt id has been set
     *
     * @return bool True if mqtt id has been set, false if not
     */
    public function hasMqttId()
    {
        return isset($this->mqttId);
    }

    /**
     * Check if a default mqtt id is available or not
     *
     * @return bool True of a default mqtt id is available, false if not
     */
    public function hasDefaultMqttId()
    {
        return false; //!is_null($this->getDefaultMqttId());
    }
}