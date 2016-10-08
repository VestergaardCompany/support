<?php
namespace VCAS\Support\Contracts\Arrays;

/**
 * Query Params Aware
 *
 * Component is aware of a set of query parameters, which can
 * also be specified
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts\Arrays
 */
interface QueryParamsAware
{
    /**
     * Set the given query params
     *
     * @param array $params List of query parameters (key value pair)
     *
     * @return void
     */
    public function setQueryParams(array $params);

    /**
     * Get the given query params
     *
     * If no query params has been set, this method will
     * set and return a default query params, if any such
     * value is available
     *
     * @see getDefaultQueryParams()
     *
     * @return array|null query params or null if none query params has been set
     */
    public function getQueryParams();

    /**
     * Get a default query params value, if any is available
     *
     * @return array|null A default query params value or Null if no default value is available
     */
    public function getDefaultQueryParams();

    /**
     * Check if query params has been set
     *
     * @return bool True if query params has been set, false if not
     */
    public function hasQueryParams();

    /**
     * Check if a default query params is available or not
     *
     * @return bool True of a default query params is available, false if not
     */
    public function hasDefaultQueryParams();
}