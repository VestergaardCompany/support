<?php
namespace VCAS\Support\Contracts\Strings;

/**
 * Session Id Aware
 *
 * Component is aware of a session id
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts\Strings
 */
interface SessionIdAware
{
    /**
     * Set the given session id
     *
     * @param string $identifier Session Id
     *
     * @return void
     */
    public function setSessionId($identifier);

    /**
     * Get the given session id
     *
     * If no session id has been set, this method will
     * set and return a default session id, if any such
     * value is available
     *
     * @see getDefaultSessionId()
     *
     * @return string|null session id or null if none session id has been set
     */
    public function getSessionId();

    /**
     * Get a default session id value, if any is available
     *
     * @return string|null A default session id value or Null if no default value is available
     */
    public function getDefaultSessionId();

    /**
     * Check if session id has been set
     *
     * @return bool True if session id has been set, false if not
     */
    public function hasSessionId();

    /**
     * Check if a default session id is available or not
     *
     * @return bool True of a default session id is available, false if not
     */
    public function hasDefaultSessionId();
}