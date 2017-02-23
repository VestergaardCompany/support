<?php

namespace VCAS\Support\Traits\Strings;

/**
 * Username Trait
 *
 * @see \VCAS\Support\Contracts\Strings\UsernameAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Strings
 */
trait UsernameTrait
{
    /**
     * Username
     *
     * @var string|null
     */
    protected $username = null;

    /**
     * Set the given username
     *
     * @param string $username Username
     *
     * @return void
     */
    public function setUsername($username)
    {
        $this->username = (string) $username;
    }

    /**
     * Get the given username
     *
     * If no username has been set, this method will
     * set and return a default username, if any such
     * value is available
     *
     * @see getDefaultUsername()
     *
     * @return string|null username or null if none username has been set
     */
    public function getUsername()
    {
        if (!isset($this->username)) {
            $this->username = $this->getDefaultUsername();
        }
        return $this->username;
    }

    /**
     * Get a default username value, if any is available
     *
     * @return string|null A default username value or Null if no default value is available
     */
    public function getDefaultUsername()
    {
        return null;
    }

    /**
     * Check if username has been set
     *
     * @return bool True if username has been set, false if not
     */
    public function hasUsername()
    {
        return isset($this->username);
    }

    /**
     * Check if a default username is available or not
     *
     * @return bool True of a default username is available, false if not
     */
    public function hasDefaultUsername()
    {
        return false; //!is_null($this->getDefaultUsername());
    }
}