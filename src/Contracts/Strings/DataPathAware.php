<?php
namespace VCAS\Support\Contracts\Strings;

/**
 * Data Path Aware
 *
 * Component is able to set and retrieve a path where "data"
 * is stored.
 *
 * Data can virtually mean anything from log files, file uploads,
 * to flat file databases
 * 
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts\Strings
 */
interface DataPathAware
{
    /**
     * Set the given data path
     *
     * @param string $path Path to where "data" is stored. In this context, data
     * can mean anything from file uploads, cache files, log
     * files, etc.
     *
     * @return void
     */
    public function setDataPath($path);

    /**
     * Get the given data path
     *
     * If no data path has been set, this method will
     * set and return a default data path, if any such
     * value is available
     *
     * @see getDefaultDataPath()
     *
     * @return string|null data path or null if none data path has been set
     */
    public function getDataPath();

    /**
     * Get a default data path value, if any is available
     *
     * @return string|null A default data path value or Null if no default value is available
     */
    public function getDefaultDataPath();

    /**
     * Check if data path has been set
     *
     * @return bool True if data path has been set, false if not
     */
    public function hasDataPath();

    /**
     * Check if a default data path is available or not
     *
     * @return bool True of a default data path is available, false if not
     */
    public function hasDefaultDataPath();
}