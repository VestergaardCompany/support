<?php
namespace VCAS\Support\Traits\Arrays;

/**
 * Where Trait
 *
 * @see \VCAS\Support\Contracts\Arrays\WhereAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Arrays
 */
trait WhereTrait
{
    /**
     * Sql where conditions
     *
     * @var array|null
     */
    protected $where = null;

    /**
     * Set the given where
     *
     * @param array $conditions Sql where conditions
     *
     * @return void
     */
    public function setWhere(array $conditions)
    {
        $this->where = $conditions;
    }

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
    public function getWhere()
    {
        if (!isset($this->where)) {
            $this->where = $this->getDefaultWhere();
        }
        return $this->where;
    }

    /**
     * Get a default where value, if any is available
     *
     * @return array|null A default where value or Null if no default value is available
     */
    public function getDefaultWhere()
    {
        return null;
    }

    /**
     * Check if where has been set
     *
     * @return bool True if where has been set, false if not
     */
    public function hasWhere()
    {
        return isset($this->where);
    }

    /**
     * Check if a default where is available or not
     *
     * @return bool True of a default where is available, false if not
     */
    public function hasDefaultWhere()
    {
        return false; //!is_null($this->getDefaultWhere());
    }
}