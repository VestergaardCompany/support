<?php

namespace VCAS\Support\Traits\Strings;

/**
 * Model Factories Path Trait
 *
 * @see \VCAS\Support\Contracts\Strings\ModelFactoriesPathAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Strings
 */
trait ModelFactoriesPathTrait
{
    /**
     * Path to model factories directory
     *
     * @var string|null
     */
    protected $modelFactoriesPath = null;

    /**
     * Set the given model factories path
     *
     * @param string $path Path to model factories directory
     *
     * @return void
     */
    public function setModelFactoriesPath($path)
    {
        $this->modelFactoriesPath = (string) $path;
    }

    /**
     * Get the given model factories path
     *
     * If no model factories path has been set, this method will
     * set and return a default model factories path, if any such
     * value is available
     *
     * @see getDefaultModelFactoriesPath()
     *
     * @return string|null model factories path or null if none model factories path has been set
     */
    public function getModelFactoriesPath()
    {
        if (!isset($this->modelFactoriesPath)) {
            $this->modelFactoriesPath = $this->getDefaultModelFactoriesPath();
        }
        return $this->modelFactoriesPath;
    }

    /**
     * Get a default model factories path value, if any is available
     *
     * @return string|null A default model factories path value or Null if no default value is available
     */
    public function getDefaultModelFactoriesPath()
    {
        return null;
    }

    /**
     * Check if model factories path has been set
     *
     * @return bool True if model factories path has been set, false if not
     */
    public function hasModelFactoriesPath()
    {
        return isset($this->modelFactoriesPath);
    }

    /**
     * Check if a default model factories path is available or not
     *
     * @return bool True of a default model factories path is available, false if not
     */
    public function hasDefaultModelFactoriesPath()
    {
        return false; //!is_null($this->getDefaultModelFactoriesPath());
    }
}