<?php
namespace VCAS\Support\Traits\Strings;

/**
 * Table Trait
 *
 * @see \VCAS\Support\Contracts\Strings\TableAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Strings
 */
trait TableTrait
{
    /**
     * Table name
     *
     * @var string|null
     */
    protected $table = null;

    /**
     * Set the given table
     *
     * @param string $name Table name
     *
     * @return void
     */
    public function setTable($name)
    {
        $this->table = (string) $name;
    }

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
    public function getTable()
    {
        if (!isset($this->table)) {
            $this->table = $this->getDefaultTable();
        }
        return $this->table;
    }

    /**
     * Get a default table value, if any is available
     *
     * @return string|null A default table value or Null if no default value is available
     */
    public function getDefaultTable()
    {
        return null;
    }

    /**
     * Check if table has been set
     *
     * @return bool True if table has been set, false if not
     */
    public function hasTable()
    {
        return isset($this->table);
    }

    /**
     * Check if a default table is available or not
     *
     * @return bool True of a default table is available, false if not
     */
    public function hasDefaultTable()
    {
        return false; //!is_null($this->getDefaultTable());
    }
}