<?php
namespace VCAS\Support\Contracts\Arrays;

/**
 * Params Aware
 *
 * Component is aware of parameters, which can be specified
 * via an array
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts\Arrays
 */
interface ParamsAware
{
    /**
     * Set the given params
     *
     * @param array $params Parameters
     *
     * @return void
     */
    public function setParams(array $params);

    /**
     * Get the given params
     *
     * If no params has been set, this method will
     * set and return a default params, if any such
     * value is available
     *
     * @see getDefaultParams()
     *
     * @return array|null params or null if none params has been set
     */
    public function getParams();

    /**
     * Get a default params value, if any is available
     *
     * @return array|null A default params value or Null if no default value is available
     */
    public function getDefaultParams();

    /**
     * Check if params has been set
     *
     * @return bool True if params has been set, false if not
     */
    public function hasParams();

    /**
     * Check if a default params is available or not
     *
     * @return bool True of a default params is available, false if not
     */
    public function hasDefaultParams();
}