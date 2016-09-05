<?php
namespace VCAS\Support\Traits\Arrays;

/**
 * Class WhatTrait
 *
 * @see \VCAS\Support\Contracts\Arrays\WhatAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Arrays
 */
trait WhatTrait
{
    /**
     * Elements in question for processing
     *
     * @var array|null
     */
    protected $what = null;

    /**
     * Set the given what
     *
     * @param array $elements Elements in question for processing
     *
     * @return void
     */
    public function setWhat(array $elements)
    {
        $this->what = $elements;
    }

    /**
     * Get the given what
     *
     * If no what has been set, this method will
     * set and return a default what, if any such
     * value is available
     *
     * @see getDefaultWhat()
     *
     * @return array|null what or null if none what has been set
     */
    public function getWhat()
    {
        if (!isset($this->what)) {
            $this->what = $this->getDefaultWhat();
        }
        return $this->what;
    }

    /**
     * Get a default what value, if any is available
     *
     * @return array|null A default what value or Null if no default value is available
     */
    public function getDefaultWhat()
    {
        return null;
    }

    /**
     * Check if what has been set
     *
     * @return bool True if what has been set, false if not
     */
    public function hasWhat()
    {
        return isset($this->what);
    }

    /**
     * Check if a default what is available or not
     *
     * @return bool True of a default what is available, false if not
     */
    public function hasDefaultWhat()
    {
        return false; //!is_null($this->getDefaultWhat());
    }
}