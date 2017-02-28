<?php

namespace VCAS\Support\Traits\Strings;

/**
 * Connection Name Trait
 *
 * @see \VCAS\Support\Contracts\Strings\ConnectionNameAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Strings
 */
trait ConnectionNameTrait
{
    /**
     * Name of a connection
     *
     * @var string|null
     */
    protected $connectionName = null;

    /**
     * Set the given connection name
     *
     * @param string $name Name of a connection
     *
     * @return void
     */
    public function setConnectionName($name)
    {
        $this->connectionName = (string) $name;
    }

    /**
     * Get the given connection name
     *
     * If no connection name has been set, this method will
     * set and return a default connection name, if any such
     * value is available
     *
     * @see getDefaultConnectionName()
     *
     * @return string|null connection name or null if none connection name has been set
     */
    public function getConnectionName()
    {
        if (!isset($this->connectionName)) {
            $this->connectionName = $this->getDefaultConnectionName();
        }
        return $this->connectionName;
    }

    /**
     * Get a default connection name value, if any is available
     *
     * @return string|null A default connection name value or Null if no default value is available
     */
    public function getDefaultConnectionName()
    {
        return null;
    }

    /**
     * Check if connection name has been set
     *
     * @return bool True if connection name has been set, false if not
     */
    public function hasConnectionName()
    {
        return isset($this->connectionName);
    }

    /**
     * Check if a default connection name is available or not
     *
     * @return bool True of a default connection name is available, false if not
     */
    public function hasDefaultConnectionName()
    {
        return false; //!is_null($this->getDefaultConnectionName());
    }
}