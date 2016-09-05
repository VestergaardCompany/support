<?php
namespace VCAS\Support\Traits\Arrays;

/**
 * Order-By Trait
 *
 * @see \VCAS\Support\Contracts\Arrays\OrderByAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Arrays
 */
trait OrderByTrait
{
    /**
     * Sql order-by fields
     *
     * @var array|null
     */
    protected $orderBy = null;

    /**
     * Set the given order by
     *
     * @param array $fields Sql order-by fields
     *
     * @return void
     */
    public function setOrderBy(array $fields)
    {
        $this->orderBy = $fields;
    }

    /**
     * Get the given order by
     *
     * If no order by has been set, this method will
     * set and return a default order by, if any such
     * value is available
     *
     * @see getDefaultOrderBy()
     *
     * @return array|null order by or null if none order by has been set
     */
    public function getOrderBy()
    {
        if (!isset($this->orderBy)) {
            $this->orderBy = $this->getDefaultOrderBy();
        }
        return $this->orderBy;
    }

    /**
     * Get a default order by value, if any is available
     *
     * @return array|null A default order by value or Null if no default value is available
     */
    public function getDefaultOrderBy()
    {
        return null;
    }

    /**
     * Check if order by has been set
     *
     * @return bool True if order by has been set, false if not
     */
    public function hasOrderBy()
    {
        return isset($this->orderBy);
    }

    /**
     * Check if a default order by is available or not
     *
     * @return bool True of a default order by is available, false if not
     */
    public function hasDefaultOrderBy()
    {
        return false; //!is_null($this->getDefaultOrderBy());
    }
}