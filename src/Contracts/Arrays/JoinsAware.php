<?php
namespace VCAS\Support\Contracts\Arrays;

/**
 * Joins Aware
 *
 * Component is aware of one or several SQL join clauses
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts\Arrays
 */
interface JoinsAware
{
    /**
     * Set the given joins
     *
     * @param array $joins SQL joins clauses
     *
     * @return void
     */
    public function setJoins(array $joins);

    /**
     * Get the given joins
     *
     * If no joins has been set, this method will
     * set and return a default joins, if any such
     * value is available
     *
     * @see getDefaultJoins()
     *
     * @return array|null joins or null if none joins has been set
     */
    public function getJoins();

    /**
     * Get a default joins value, if any is available
     *
     * @return array|null A default joins value or Null if no default value is available
     */
    public function getDefaultJoins();

    /**
     * Check if joins has been set
     *
     * @return bool True if joins has been set, false if not
     */
    public function hasJoins();

    /**
     * Check if a default joins is available or not
     *
     * @return bool True of a default joins is available, false if not
     */
    public function hasDefaultJoins();
}