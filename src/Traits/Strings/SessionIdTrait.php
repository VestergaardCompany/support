<?php
namespace VCAS\Support\Traits\Strings;

/**
 * Session Id Trait
 *
 * @see \VCAS\Support\Contracts\Strings\SessionIdAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Strings
 */
trait SessionIdTrait
{
    /**
     * Session Id
     *
     * @var string|null
     */
    protected $sessionId = null;

    /**
     * Set the given session id
     *
     * @param string $identifier Session Id
     *
     * @return void
     */
    public function setSessionId($identifier)
    {
        $this->sessionId = (string) $identifier;
    }

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
    public function getSessionId()
    {
        if (!$this->hasSessionId() && $this->hasDefaultSessionId()) {
            $this->setSessionId($this->getDefaultSessionId());
        }
        return $this->sessionId;
    }

    /**
     * Get a default session id value, if any is available
     *
     * @return string|null A default session id value or Null if no default value is available
     */
    public function getDefaultSessionId()
    {
        return null;
    }

    /**
     * Check if session id has been set
     *
     * @return bool True if session id has been set, false if not
     */
    public function hasSessionId()
    {
        return !is_null($this->sessionId);
    }

    /**
     * Check if a default session id is available or not
     *
     * @return bool True of a default session id is available, false if not
     */
    public function hasDefaultSessionId()
    {
        return !is_null($this->getDefaultSessionId());
    }
}