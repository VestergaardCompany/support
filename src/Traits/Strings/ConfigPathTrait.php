<?php
namespace VCAS\Support\Traits\Strings;

/**
 * Config Path Trait
 *
 * @see \VCAS\Support\Contracts\Strings\ConfigPathAware
 * 
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Strings
 */
trait ConfigPathTrait
{
    /**
     * Path to where application or component's configuration files are stored
     *
     * @var string|null
     */
    protected $configPath = null;

    /**
     * Set the given config path
     *
     * @param string $path Path to where application or component's configuration files are stored
     *
     * @return void
     */
    public function setConfigPath($path)
    {
        $this->configPath = (string) $path;
    }

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
    public function getConfigPath()
    {
        if (!isset($this->configPath)) {
            $this->configPath = $this->getDefaultConfigPath();
        }
        return $this->configPath;
    }

    /**
     * Get a default config path value, if any is available
     *
     * @return string|null A default config path value or Null if no default value is available
     */
    public function getDefaultConfigPath()
    {
        return null;
    }

    /**
     * Check if config path has been set
     *
     * @return bool True if config path has been set, false if not
     */
    public function hasConfigPath()
    {
        return isset($this->configPath);
    }

    /**
     * Check if a default config path is available or not
     *
     * @return bool True of a default config path is available, false if not
     */
    public function hasDefaultConfigPath()
    {
        return false; //!is_null($this->getDefaultConfigPath());
    }
}