<?php
namespace VCAS\Support\Contracts\Arrays;

/**
 * Order-By Aware
 *
 * Component is aware of SQL order-by fields
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts\Arrays
 */
interface OrderByAware
{
    /**
     * Set the given order by
     *
     * @param array $fields Sql order-by fields
     *
     * @return void
     */
    public function setOrderBy(array $fields);

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
    public function getOrderBy();

    /**
     * Get a default order by value, if any is available
     *
     * @return array|null A default order by value or Null if no default value is available
     */
    public function getDefaultOrderBy();

    /**
     * Check if order by has been set
     *
     * @return bool True if order by has been set, false if not
     */
    public function hasOrderBy();

    /**
     * Check if a default order by is available or not
     *
     * @return bool True of a default order by is available, false if not
     */
    public function hasDefaultOrderBy();
}