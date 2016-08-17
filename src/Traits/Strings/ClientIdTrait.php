<?php
namespace VCAS\Support\Traits\Strings;

/**
 * Client Id Trait
 *
 * @see \VCAS\Support\Contracts\Strings\ClientIdAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Strings
 */
trait ClientIdTrait
{
    /**
     * Client Id
     *
     * @var string|null
     */
    protected $clientId = null;

    /**
     * Set the given client id
     *
     * @param string $identifier Client Id
     *
     * @return void
     */
    public function setClientId($identifier)
    {
        $this->clientId = (string) $identifier;
    }

    /**
     * Get the given client id
     *
     * If no client id has been set, this method will
     * set and return a default client id, if any such
     * value is available
     *
     * @see getDefaultClientId()
     *
     * @return string|null client id or null if none client id has been set
     */
    public function getClientId()
    {
        if (!isset($this->clientId)) {
            $this->clientId = $this->getDefaultClientId();
        }
        return $this->clientId;
    }

    /**
     * Get a default client id value, if any is available
     *
     * @return string|null A default client id value or Null if no default value is available
     */
    public function getDefaultClientId()
    {
        return null;
    }

    /**
     * Check if client id has been set
     *
     * @return bool True if client id has been set, false if not
     */
    public function hasClientId()
    {
        return isset($this->clientId);
    }

    /**
     * Check if a default client id is available or not
     *
     * @return bool True of a default client id is available, false if not
     */
    public function hasDefaultClientId()
    {
        return false; //!is_null($this->getDefaultClientId());
    }
}