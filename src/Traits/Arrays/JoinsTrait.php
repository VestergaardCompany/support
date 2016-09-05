<?php
namespace VCAS\Support\Traits\Arrays;

/**
 * Joins Trait
 *
 * @see \VCAS\Support\Contracts\Arrays\JoinsAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Arrays
 */
trait JoinsTrait
{
    /**
     * SQL joins clauses
     *
     * @var array|null
     */
    protected $joins = null;

    /**
     * Set the given joins
     *
     * @param array $joins SQL joins clauses
     *
     * @return void
     */
    public function setJoins(array $joins)
    {
        $this->joins = $joins;
    }

    /**
     * Get the given joins
     *
     * If no joins has been set, this method will
     * set and return a default joins, if any such
     * value is available
     *
     * @see getDefaultJoins()
     *
     * @return array|null joins or null if none joins has been set
     */
    public function getJoins()
    {
        if (!isset($this->joins)) {
            $this->joins = $this->getDefaultJoins();
        }
        return $this->joins;
    }

    /**
     * Get a default joins value, if any is available
     *
     * @return array|null A default joins value or Null if no default value is available
     */
    public function getDefaultJoins()
    {
        return null;
    }

    /**
     * Check if joins has been set
     *
     * @return bool True if joins has been set, false if not
     */
    public function hasJoins()
    {
        return isset($this->joins);
    }

    /**
     * Check if a default joins is available or not
     *
     * @return bool True of a default joins is available, false if not
     */
    public function hasDefaultJoins()
    {
        return false; //!is_null($this->getDefaultJoins());
    }
}