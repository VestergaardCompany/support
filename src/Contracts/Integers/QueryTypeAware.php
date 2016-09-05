<?php
namespace VCAS\Support\Contracts\Integers;

/**
 * Query-Type Aware
 *
 * Component is aware of a query type.
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts\Integers
 */
interface QueryTypeAware
{
    /**
     * Set the given query type
     *
     * @param int $type Query Type
     *
     * @return void
     */
    public function setQueryType($type);

    /**
     * Get the given query type
     *
     * If no query type has been set, this method will
     * set and return a default query type, if any such
     * value is available
     *
     * @see getDefaultQueryType()
     *
     * @return int|null query type or null if none query type has been set
     */
    public function getQueryType();

    /**
     * Get a default query type value, if any is available
     *
     * @return int|null A default query type value or Null if no default value is available
     */
    public function getDefaultQueryType();

    /**
     * Check if query type has been set
     *
     * @return bool True if query type has been set, false if not
     */
    public function hasQueryType();

    /**
     * Check if a default query type is available or not
     *
     * @return bool True of a default query type is available, false if not
     */
    public function hasDefaultQueryType();
}