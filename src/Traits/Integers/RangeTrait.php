<?php
namespace VCAS\Support\Traits\Integers;


/**
 * Range Trait
 *
 * @see \VCAS\Support\Contracts\Integers\RangeAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Integers
 */
trait RangeTrait
{
    /**
     * The range of something, e.g. range limitation
     *
     * @var int|null
     */
    protected $range = null;

    /**
     * Set the given range
     *
     * @param int $range The range of something, e.g. range limitation
     *
     * @return void
     */
    public function setRange($range)
    {
        $this->range = $range;
    }

    /**
     * Get the given range
     *
     * If no range has been set, this method will
     * set and return a default range, if any such
     * value is available
     *
     * @see getDefaultRange()
     *
     * @return int|null range or null if none range has been set
     */
    public function getRange()
    {
        if (!isset($this->range)) {
            $this->range = $this->getDefaultRange();
        }
        return $this->range;
    }

    /**
     * Get a default range value, if any is available
     *
     * @return int|null A default range value or Null if no default value is available
     */
    public function getDefaultRange()
    {
        return null;
    }

    /**
     * Check if range has been set
     *
     * @return bool True if range has been set, false if not
     */
    public function hasRange()
    {
        return isset($this->range);
    }

    /**
     * Check if a default range is available or not
     *
     * @return bool True of a default range is available, false if not
     */
    public function hasDefaultRange()
    {
        return false; //!is_null($this->getDefaultRange());
    }
}