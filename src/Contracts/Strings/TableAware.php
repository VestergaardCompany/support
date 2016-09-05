<?php
namespace VCAS\Support\Contracts\Strings;

/**
 * Table Aware
 *
 * Component is aware of a table name
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts\Strings
 */
interface TableAware
{
    /**
     * Set the given table
     *
     * @param string $name Table name
     *
     * @return void
     */
    public function setTable($name);

    /**
     * Get the given table
     *
     * If no table has been set, this method will
     * set and return a default table, if any such
     * value is available
     *
     * @see getDefaultTable()
     *
     * @return string|null table or null if none table has been set
     */
    public function getTable();

    /**
     * Get a default table value, if any is available
     *
     * @return string|null A default table value or Null if no default value is available
     */
    public function getDefaultTable();

    /**
     * Check if table has been set
     *
     * @return bool True if table has been set, false if not
     */
    public function hasTable();

    /**
     * Check if a default table is available or not
     *
     * @return bool True of a default table is available, false if not
     */
    public function hasDefaultTable();
}