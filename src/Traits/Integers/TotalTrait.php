<?php
namespace VCAS\Support\Traits\Integers;

/**
 * Total Trait
 *
 * @see \VCAS\Support\Contracts\Integers\TotalAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Integers
 */
trait TotalTrait
{
    /**
     * The total amount
     *
     * @var int|null
     */
    protected $total = null;

    /**
     * Set the given total
     *
     * @param int $amount The total amount
     *
     * @return void
     */
    public function setTotal($amount)
    {
        $this->total = $amount;
    }

    /**
     * Get the given total
     *
     * If no total has been set, this method will
     * set and return a default total, if any such
     * value is available
     *
     * @see getDefaultTotal()
     *
     * @return int|null total or null if none total has been set
     */
    public function getTotal()
    {
        if (!isset($this->total)) {
            $this->total = $this->getDefaultTotal();
        }
        return $this->total;
    }

    /**
     * Get a default total value, if any is available
     *
     * @return int|null A default total value or Null if no default value is available
     */
    public function getDefaultTotal()
    {
        return null;
    }

    /**
     * Check if total has been set
     *
     * @return bool True if total has been set, false if not
     */
    public function hasTotal()
    {
        return isset($this->total);
    }

    /**
     * Check if a default total is available or not
     *
     * @return bool True of a default total is available, false if not
     */
    public function hasDefaultTotal()
    {
        return false; //!is_null($this->getDefaultTotal());
    }
}