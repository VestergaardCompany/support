<?php namespace VCAS\Support\Traits\Mixed;

/**
 * <h1>Model Trait</h1>
 *
 * @see \VCAS\Support\Contracts\Mixed\ModelAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Mixed
 */
trait ModelTrait
{
    /**
     * Some kind of model instance, e.g. database model, file model, ...etc
     *
     * @var mixed|null
     */
    protected $model = null;

    /**
     * Set model
     *
     * @param mixed $model Some kind of model instance, e.g. database model, file model, ...etc
     *
     * @return void
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

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
    public function getModel()
    {
        if (!$this->hasModel() && $this->hasDefaultModel()) {
            $this->setModel($this->getDefaultModel());
        }
        return $this->model;
    }

    /**
     * Get a default "model" value, if any is available
     *
     * @return mixed|null A default "model" value or null if no default value is available
     */
    public function getDefaultModel()
    {
        return null;
    }

    /**
     * Check if "model" has been set
     *
     * @return bool True if "model" value has been set, false if not
     */
    public function hasModel()
    {
        return isset($this->model);
    }

    /**
     * Check if a default "model" is available or not
     *
     * @return bool True of a default "model" value is available, false if not
     */
    public function hasDefaultModel()
    {
        $default = $this->getDefaultModel();
        return isset($default);
    }
}