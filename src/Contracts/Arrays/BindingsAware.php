<?php
namespace VCAS\Support\Contracts\Arrays;

/**
 * Bindings Aware
 *
 * Component is aware of one or several values to be bound to
 * something else.
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts\Arrays
 */
interface BindingsAware
{
    /**
     * Set the given bindings
     *
     * @param array $values Values to be bound to something
     *
     * @return void
     */
    public function setBindings(array $values);

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
    public function getBindings();

    /**
     * Get a default bindings value, if any is available
     *
     * @return array|null A default bindings value or Null if no default value is available
     */
    public function getDefaultBindings();

    /**
     * Check if bindings has been set
     *
     * @return bool True if bindings has been set, false if not
     */
    public function hasBindings();

    /**
     * Check if a default bindings is available or not
     *
     * @return bool True of a default bindings is available, false if not
     */
    public function hasDefaultBindings();
}