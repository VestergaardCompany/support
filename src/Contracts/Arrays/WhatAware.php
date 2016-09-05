<?php
namespace VCAS\Support\Contracts\Arrays;

/**
 * What Aware
 *
 * Component is aware of elements that need some kind of
 * processing.
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts\Arrays
 */
interface WhatAware
{
    /**
     * Set the given what
     *
     * @param array $elements Elements in question for processing
     *
     * @return void
     */
    public function setWhat(array $elements);

    /**
     * Get the given what
     *
     * If no what has been set, this method will
     * set and return a default what, if any such
     * value is available
     *
     * @see getDefaultWhat()
     *
     * @return array|null what or null if none what has been set
     */
    public function getWhat();

    /**
     * Get a default what value, if any is available
     *
     * @return array|null A default what value or Null if no default value is available
     */
    public function getDefaultWhat();

    /**
     * Check if what has been set
     *
     * @return bool True if what has been set, false if not
     */
    public function hasWhat();

    /**
     * Check if a default what is available or not
     *
     * @return bool True of a default what is available, false if not
     */
    public function hasDefaultWhat();
}