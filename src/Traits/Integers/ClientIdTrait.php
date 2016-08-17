<?php
namespace VCAS\Support\Traits\Integers;

/**
 * Client Id Trait
 *
 * @see \VCAS\Support\Contracts\Integers\ClientIdAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Integers
 */
trait ClientIdTrait
{
    /**
     * Client Id
     *
     * @var int|null
     */
    protected $clientId = null;

    /**
     * Set the given client id
     *
     * @param int $identifier Client Id
     *
     * @return void
     */
    public function setClientId($identifier)
    {
        $this->clientId = (int) $identifier;
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
     * @return int|null client id or null if none client id has been set
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
     * @return int|null A default client id value or Null if no default value is available
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