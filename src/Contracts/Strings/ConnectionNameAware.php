<?php
namespace VCAS\Support\Contracts\Strings;

/**
 * Connection Name Aware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts\Strings
 */
interface ConnectionNameAware
{
    /**
     * Set the given connection name
     *
     * @param string $name Name of a connection
     *
     * @return void
     */
    public function setConnectionName($name);

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
    public function getConnectionName();

    /**
     * Get a default connection name value, if any is available
     *
     * @return string|null A default connection name value or Null if no default value is available
     */
    public function getDefaultConnectionName();

    /**
     * Check if connection name has been set
     *
     * @return bool True if connection name has been set, false if not
     */
    public function hasConnectionName();

    /**
     * Check if a default connection name is available or not
     *
     * @return bool True of a default connection name is available, false if not
     */
    public function hasDefaultConnectionName();
}