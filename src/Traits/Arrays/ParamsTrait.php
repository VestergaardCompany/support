<?php
namespace VCAS\Support\Traits\Arrays;

/**
 * Params Trait
 *
 * @see \VCAS\Support\Contracts\Arrays\ParamsAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Arrays
 */
trait ParamsTrait
{
    /**
     * Parameters
     *
     * @var array|null
     */
    protected $params = null;

    /**
     * Set the given params
     *
     * @param array $params Parameters
     *
     * @return void
     */
    public function setParams(array $params)
    {
        $this->params = $params;
    }

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
    public function getParams()
    {
        if (!isset($this->params)) {
            $this->params = $this->getDefaultParams();
        }
        return $this->params;
    }

    /**
     * Get a default params value, if any is available
     *
     * @return array|null A default params value or Null if no default value is available
     */
    public function getDefaultParams()
    {
        return null;
    }

    /**
     * Check if params has been set
     *
     * @return bool True if params has been set, false if not
     */
    public function hasParams()
    {
        return isset($this->params);
    }

    /**
     * Check if a default params is available or not
     *
     * @return bool True of a default params is available, false if not
     */
    public function hasDefaultParams()
    {
        return false; //!is_null($this->getDefaultParams());
    }
}