<?php
namespace VCAS\Support\Contracts\Integers;

/**
 * Client Id Aware
 *
 * Component is aware of a int client id
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts\Integers
 */
interface ClientIdAware
{
    /**
     * Set the given client id
     *
     * @param int $identifier Client Id
     *
     * @return void
     */
    public function setClientId($identifier);

    /**
     * Get the given client id
     *
     * If no client id has been set, this method will
     * set and return a default client id, if any such
     * value is available
     *
     * @see getDefaultClientId()
     *
     * @return int|null client id or null if none client id has been set
     */
    public function getClientId();

    /**
     * Get a default client id value, if any is available
     *
     * @return int|null A default client id value or Null if no default value is available
     */
    public function getDefaultClientId();

    /**
     * Check if client id has been set
     *
     * @return bool True if client id has been set, false if not
     */
    public function hasClientId();

    /**
     * Check if a default client id is available or not
     *
     * @return bool True of a default client id is available, false if not
     */
    public function hasDefaultClientId();
}