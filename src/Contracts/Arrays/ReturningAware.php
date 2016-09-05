<?php
namespace VCAS\Support\Contracts\Arrays;

/**
 * Returning Aware
 *
 * Component is aware of a SQL returning clause fields
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts\Arrays
 */
interface ReturningAware
{
    /**
     * Set the given returning
     *
     * @param array $fields Sql returning clause fields
     *
     * @return void
     */
    public function setReturning($fields);

    /**
     * Get the given returning
     *
     * If no returning has been set, this method will
     * set and return a default returning, if any such
     * value is available
     *
     * @see getDefaultReturning()
     *
     * @return array|null returning or null if none returning has been set
     */
    public function getReturning();

    /**
     * Get a default returning value, if any is available
     *
     * @return array|null A default returning value or Null if no default value is available
     */
    public function getDefaultReturning();

    /**
     * Check if returning has been set
     *
     * @return bool True if returning has been set, false if not
     */
    public function hasReturning();

    /**
     * Check if a default returning is available or not
     *
     * @return bool True of a default returning is available, false if not
     */
    public function hasDefaultReturning();
}