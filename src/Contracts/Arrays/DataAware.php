<?php
namespace VCAS\Support\Contracts\Arrays;

/**
 * Data Aware
 *
 * Component is able to set and get some kind of data.
 * Depending upon context, the data attribute can contain
 * anything from a set of key value pairs or a set of arbitrary
 * values.
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts\Arrays
 */
interface DataAware
{
    /**
     * Set the given data
     *
     * @param array $data Data
     *
     * @return void
     */
    public function setData(array $data);

    /**
     * Get the given data
     *
     * If no data has been set, this method will
     * set and return a default data, if any such
     * value is available
     *
     * @see getDefaultData()
     *
     * @return array|null data or null if none data has been set
     */
    public function getData();

    /**
     * Get a default data value, if any is available
     *
     * @return array|null A default data value or Null if no default value is available
     */
    public function getDefaultData();

    /**
     * Check if data has been set
     *
     * @return bool True if data has been set, false if not
     */
    public function hasData();

    /**
     * Check if a default data is available or not
     *
     * @return bool True of a default data is available, false if not
     */
    public function hasDefaultData();
}