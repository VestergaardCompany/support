<?php
namespace VCAS\Support\Traits\Arrays;

/**
 * Bindings Trait
 *
 * @see \VCAS\Support\Contracts\Arrays\BindingsAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Arrays
 */
trait BindingsTrait
{
    /**
     * Values to be bound to something
     *
     * @var array|null
     */
    protected $bindings = null;

    /**
     * Set the given bindings
     *
     * @param array $values Values to be bound to something
     *
     * @return void
     */
    public function setBindings(array $values)
    {
        $this->bindings = $values;
    }

    /**
     * Get the given bindings
     *
     * If no bindings has been set, this method will
     * set and return a default bindings, if any such
     * value is available
     *
     * @see getDefaultBindings()
     *
     * @return array|null bindings or null if none bindings has been set
     */
    public function getBindings()
    {
        if (!isset($this->bindings)) {
            $this->bindings = $this->getDefaultBindings();
        }
        return $this->bindings;
    }

    /**
     * Get a default bindings value, if any is available
     *
     * @return array|null A default bindings value or Null if no default value is available
     */
    public function getDefaultBindings()
    {
        return null;
    }

    /**
     * Check if bindings has been set
     *
     * @return bool True if bindings has been set, false if not
     */
    public function hasBindings()
    {
        return isset($this->bindings);
    }

    /**
     * Check if a default bindings is available or not
     *
     * @return bool True of a default bindings is available, false if not
     */
    public function hasDefaultBindings()
    {
        return false; //!is_null($this->getDefaultBindings());
    }
}