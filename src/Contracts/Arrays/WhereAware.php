<?php
namespace VCAS\Support\Contracts\Arrays;

/**
 * Where Aware
 *
 * Component is aware of one or several SQL where conditions
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts\Arrays
 */
interface WhereAware
{
    /**
     * Set the given where
     *
     * @param array $conditions Sql where conditions
     *
     * @return void
     */
    public function setWhere(array $conditions);

    /**
     * Get the given where
     *
     * If no where has been set, this method will
     * set and return a default where, if any such
     * value is available
     *
     * @see getDefaultWhere()
     *
     * @return array|null where or null if none where has been set
     */
    public function getWhere();

    /**
     * Get a default where value, if any is available
     *
     * @return array|null A default where value or Null if no default value is available
     */
    public function getDefaultWhere();

    /**
     * Check if where has been set
     *
     * @return bool True if where has been set, false if not
     */
    public function hasWhere();

    /**
     * Check if a default where is available or not
     *
     * @return bool True of a default where is available, false if not
     */
    public function hasDefaultWhere();
}