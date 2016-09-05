<?php
namespace VCAS\Support\Traits\Integers;

/**
 * Limit Trait
 *
 * @see \VCAS\Support\Contracts\Integers\LimitAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Integers
 */
trait LimitTrait
{
    /**
     * Limit
     *
     * @var int|null
     */
    protected $limit = null;

    /**
     * Set the given limit
     *
     * @param int $value Limit
     *
     * @return void
     */
    public function setLimit($value)
    {
        $this->limit = (int) $value;
    }

    /**
     * Get the given limit
     *
     * If no limit has been set, this method will
     * set and return a default limit, if any such
     * value is available
     *
     * @see getDefaultLimit()
     *
     * @return int|null limit or null if none limit has been set
     */
    public function getLimit()
    {
        if (!isset($this->limit)) {
            $this->limit = $this->getDefaultLimit();
        }
        return $this->limit;
    }

    /**
     * Get a default limit value, if any is available
     *
     * @return int|null A default limit value or Null if no default value is available
     */
    public function getDefaultLimit()
    {
        return null;
    }

    /**
     * Check if limit has been set
     *
     * @return bool True if limit has been set, false if not
     */
    public function hasLimit()
    {
        return isset($this->limit);
    }

    /**
     * Check if a default limit is available or not
     *
     * @return bool True of a default limit is available, false if not
     */
    public function hasDefaultLimit()
    {
        return false; //!is_null($this->getDefaultLimit());
    }
}