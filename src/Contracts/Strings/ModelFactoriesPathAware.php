<?php
namespace VCAS\Support\Contracts\Strings;

interface ModelFactoriesPathAware
{
    /**
     * Set the given model factories path
     *
     * @param string $path Path to model factories directory
     *
     * @return void
     */
    public function setModelFactoriesPath($path);

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
    public function getModelFactoriesPath();

    /**
     * Get a default model factories path value, if any is available
     *
     * @return string|null A default model factories path value or Null if no default value is available
     */
    public function getDefaultModelFactoriesPath();

    /**
     * Check if model factories path has been set
     *
     * @return bool True if model factories path has been set, false if not
     */
    public function hasModelFactoriesPath();

    /**
     * Check if a default model factories path is available or not
     *
     * @return bool True of a default model factories path is available, false if not
     */
    public function hasDefaultModelFactoriesPath();
}