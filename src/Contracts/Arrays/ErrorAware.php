<?php
namespace VCAS\Support\Contracts\Arrays;

/**
 * Error Aware
 *
 * Component is able to set and get information about some
 * kind of error.
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts\Arrays
 */
interface ErrorAware
{
    /**
     * Set the given error
     *
     * @param array $data Information about some kind of error
     *
     * @return void
     */
    public function setError(array $data);

    /**
     * Get the given error
     *
     * If no error has been set, this method will
     * set and return a default error, if any such
     * value is available
     *
     * @see getDefaultError()
     *
     * @return array|null error or null if none error has been set
     */
    public function getError();

    /**
     * Get a default error value, if any is available
     *
     * @return array|null A default error value or Null if no default value is available
     */
    public function getDefaultError();

    /**
     * Check if error has been set
     *
     * @return bool True if error has been set, false if not
     */
    public function hasError();

    /**
     * Check if a default error is available or not
     *
     * @return bool True of a default error is available, false if not
     */
    public function hasDefaultError();
}