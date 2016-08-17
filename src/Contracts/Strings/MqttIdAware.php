<?php
namespace VCAS\Support\Contracts\Strings;

/**
 * Mqtt Id Aware
 *
 * Component is aware of a MQTT Id
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts\Strings
 */
interface MqttIdAware
{
    /**
     * Set the given mqtt id
     *
     * @param string $identifier MQTT Id
     *
     * @return void
     */
    public function setMqttId($identifier);

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
    public function getMqttId();

    /**
     * Get a default mqtt id value, if any is available
     *
     * @return string|null A default mqtt id value or Null if no default value is available
     */
    public function getDefaultMqttId();

    /**
     * Check if mqtt id has been set
     *
     * @return bool True if mqtt id has been set, false if not
     */
    public function hasMqttId();

    /**
     * Check if a default mqtt id is available or not
     *
     * @return bool True of a default mqtt id is available, false if not
     */
    public function hasDefaultMqttId();
}