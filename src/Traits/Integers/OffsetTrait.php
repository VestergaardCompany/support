<?php
namespace VCAS\Support\Traits\Integers;

/**
 * Offset Trait
 *
 * @see \VCAS\Support\Contracts\Integers\OffsetAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Integers
 */
trait OffsetTrait
{
    /**
     * Offset
     *
     * @var int|null
     */
    protected $offset = null;

    /**
     * Set the given offset
     *
     * @param int $value Offset
     *
     * @return void
     */
    public function setOffset($value)
    {
        $this->offset = $value;
    }

    /**
     * Get the given offset
     *
     * If no offset has been set, this method will
     * set and return a default offset, if any such
     * value is available
     *
     * @see getDefaultOffset()
     *
     * @return int|null offset or null if none offset has been set
     */
    public function getOffset()
    {
        if (!isset($this->offset)) {
            $this->offset = $this->getDefaultOffset();
        }
        return $this->offset;
    }

    /**
     * Get a default offset value, if any is available
     *
     * @return int|null A default offset value or Null if no default value is available
     */
    public function getDefaultOffset()
    {
        return null;
    }

    /**
     * Check if offset has been set
     *
     * @return bool True if offset has been set, false if not
     */
    public function hasOffset()
    {
        return isset($this->offset);
    }

    /**
     * Check if a default offset is available or not
     *
     * @return bool True of a default offset is available, false if not
     */
    public function hasDefaultOffset()
    {
        return false; //!is_null($this->getDefaultOffset());
    }
}