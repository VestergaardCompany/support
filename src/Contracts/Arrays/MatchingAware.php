<?php
namespace VCAS\Support\Contracts\Arrays;

/**
 * Matching Aware
 *
 * Component is aware of SQL matching conditions
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts\Arrays
 */
interface MatchingAware
{
    /**
     * Set the given matching
     *
     * @param array $conditions SQL matching conditions
     *
     * @return void
     */
    public function setMatching($conditions);

    /**
     * Get the given matching
     *
     * If no matching has been set, this method will
     * set and return a default matching, if any such
     * value is available
     *
     * @see getDefaultMatching()
     *
     * @return array|null matching or null if none matching has been set
     */
    public function getMatching();

    /**
     * Get a default matching value, if any is available
     *
     * @return array|null A default matching value or Null if no default value is available
     */
    public function getDefaultMatching();

    /**
     * Check if matching has been set
     *
     * @return bool True if matching has been set, false if not
     */
    public function hasMatching();

    /**
     * Check if a default matching is available or not
     *
     * @return bool True of a default matching is available, false if not
     */
    public function hasDefaultMatching();
}