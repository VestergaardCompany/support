<?php
namespace VCAS\Support\Contracts\Strings;

/**
 * Password Aware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts\Strings
 */
interface PasswordAware
{
    /**
     * Set the given password
     *
     * @param string $password Password
     *
     * @return void
     */
    public function setPassword($password);

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
    public function getPassword();

    /**
     * Get a default password value, if any is available
     *
     * @return string|null A default password value or Null if no default value is available
     */
    public function getDefaultPassword();

    /**
     * Check if password has been set
     *
     * @return bool True if password has been set, false if not
     */
    public function hasPassword();

    /**
     * Check if a default password is available or not
     *
     * @return bool True of a default password is available, false if not
     */
    public function hasDefaultPassword();
}