<?php
namespace VCAS\Support\Contracts\Strings;

/**
 * Method Aware
 *
 * Component is able to specify and retrieve a method name.
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts\Strings
 */
interface MethodAware
{
    /**
     * Set the given method
     *
     * @param string $name Name of a method or "function"
     *
     * @return void
     */
    public function setMethod($name);

    /**
     * Get the given method
     *
     * If no method has been set, this method will
     * set and return a default method, if any such
     * value is available
     *
     * @see getDefaultMethod()
     *
     * @return string|null method or null if none method has been set
     */
    public function getMethod();

    /**
     * Get a default method value, if any is available
     *
     * @return string|null A default method value or Null if no default value is available
     */
    public function getDefaultMethod();

    /**
     * Check if method has been set
     *
     * @return bool True if method has been set, false if not
     */
    public function hasMethod();

    /**
     * Check if a default method is available or not
     *
     * @return bool True of a default method is available, false if not
     */
    public function hasDefaultMethod();
}