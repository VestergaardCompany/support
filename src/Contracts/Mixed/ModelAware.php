<?php namespace VCAS\Support\Contracts\Mixed;

/**
 * <h1>Model Aware</h1>
 *
 * Component is aware of a mixed "model" value, which can
 * also be specified.
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts\Mixed
 */
interface ModelAware
{
    /**
     * Set model
     *
     * @param mixed $model Some kind of model instance, e.g. database model, file model, ...etc
     *
     * @return void
     */
    public function setModel($model);

    /**
     * Get model
     *
     * If no "model" value has been set, this method will
     * set and return a default "model" value,
     * if any such value is available
     *
     * @see getDefaultModel()
     *
     * @return mixed|null "model" value or null if no "model" value has been set
     */
    public function getModel();

    /**
     * Get a default "model" value, if any is available
     *
     * @return mixed|null A default "model" value or null if no default value is available
     */
    public function getDefaultModel();

    /**
     * Check if "model" has been set
     *
     * @return bool True if "model" value has been set, false if not
     */
    public function hasModel();

    /**
     * Check if a default "model" is available or not
     *
     * @return bool True of a default "model" value is available, false if not
     */
    public function hasDefaultModel();
}