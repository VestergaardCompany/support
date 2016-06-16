<?php
namespace VCAS\Support\Contracts\Strings;

/**
 * Config Path Aware
 *
 * Component is aware of - and able to specify - a path where
 * one or multiple configuration files are located
 * 
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts\Strings
 */
interface ConfigPathAware
{
    /**
     * Set the given config path
     *
     * @param string $path Path to where application or component's configuration files are stored
     *
     * @return void
     */
    public function setConfigPath($path);

    /**
     * Get the given config path
     *
     * If no config path has been set, this method will
     * set and return a default config path, if any such
     * value is available
     *
     * @see getDefaultConfigPath()
     *
     * @return string|null config path or null if none config path has been set
     */
    public function getConfigPath();

    /**
     * Get a default config path value, if any is available
     *
     * @return string|null A default config path value or Null if no default value is available
     */
    public function getDefaultConfigPath();

    /**
     * Check if config path has been set
     *
     * @return bool True if config path has been set, false if not
     */
    public function hasConfigPath();

    /**
     * Check if a default config path is available or not
     *
     * @return bool True of a default config path is available, false if not
     */
    public function hasDefaultConfigPath();
}