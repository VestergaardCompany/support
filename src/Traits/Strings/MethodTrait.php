<?php
namespace VCAS\Support\Traits\Strings;

/**
 * Method Trait
 *
 * @see \VCAS\Support\Contracts\Strings\MethodAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Strings
 */
trait MethodTrait
{
    /**
     * Name of a method or "function"
     *
     * @var string|null
     */
    protected $method = null;

    /**
     * Set the given method
     *
     * @param string $name Name of a method or "function"
     *
     * @return void
     */
    public function setMethod($name)
    {
        $this->method = (string) $name;
    }

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
    public function getMethod()
    {
        if (!isset($this->method)) {
            $this->method = $this->getDefaultMethod();
        }
        return $this->method;
    }

    /**
     * Get a default method value, if any is available
     *
     * @return string|null A default method value or Null if no default value is available
     */
    public function getDefaultMethod()
    {
        return null;
    }

    /**
     * Check if method has been set
     *
     * @return bool True if method has been set, false if not
     */
    public function hasMethod()
    {
        return isset($this->method);
    }

    /**
     * Check if a default method is available or not
     *
     * @return bool True of a default method is available, false if not
     */
    public function hasDefaultMethod()
    {
        return false; //!is_null($this->getDefaultMethod());
    }
}