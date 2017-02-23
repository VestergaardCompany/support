<?php

namespace VCAS\Support\Traits\Strings;

/**
 * Password Trait
 *
 * @see \VCAS\Support\Contracts\Strings\PasswordAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Strings
 */
trait PasswordTrait
{
    /**
     * Password
     *
     * @var string|null
     */
    protected $password = null;

    /**
     * Set the given password
     *
     * @param string $password Password
     *
     * @return void
     */
    public function setPassword($password)
    {
        $this->password = (string) $password;
    }

    /**
     * Get the given password
     *
     * If no password has been set, this method will
     * set and return a default password, if any such
     * value is available
     *
     * @see getDefaultPassword()
     *
     * @return string|null password or null if none password has been set
     */
    public function getPassword()
    {
        if (!isset($this->password)) {
            $this->password = $this->getDefaultPassword();
        }
        return $this->password;
    }

    /**
     * Get a default password value, if any is available
     *
     * @return string|null A default password value or Null if no default value is available
     */
    public function getDefaultPassword()
    {
        return null;
    }

    /**
     * Check if password has been set
     *
     * @return bool True if password has been set, false if not
     */
    public function hasPassword()
    {
        return isset($this->password);
    }

    /**
     * Check if a default password is available or not
     *
     * @return bool True of a default password is available, false if not
     */
    public function hasDefaultPassword()
    {
        return false; //!is_null($this->getDefaultPassword());
    }
}