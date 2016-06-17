<?php
namespace VCAS\Support\Traits\Arrays;

/**
 * Data Trait
 *
 * @see \VCAS\Support\Contracts\Arrays\DataAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Arrays
 */
trait DataTrait
{
    /**
     * Data
     *
     * @var array|null
     */
    protected $data = null;

    /**
     * Set the given data
     *
     * @param array $data Data
     *
     * @return void
     */
    public function setData(array $data)
    {
        $this->data = $data;
    }

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
    public function getData()
    {
        if (!isset($this->data)) {
            $this->data = $this->getDefaultData();
        }
        return $this->data;
    }

    /**
     * Get a default data value, if any is available
     *
     * @return array|null A default data value or Null if no default value is available
     */
    public function getDefaultData()
    {
        return null;
    }

    /**
     * Check if data has been set
     *
     * @return bool True if data has been set, false if not
     */
    public function hasData()
    {
        return isset($this->data);
    }

    /**
     * Check if a default data is available or not
     *
     * @return bool True of a default data is available, false if not
     */
    public function hasDefaultData()
    {
        return false; //!is_null($this->getDefaultData());
    }
}