<?php
namespace VCAS\Support\Contracts\Integers;

/**
 * Total Aware
 *
 * Component is aware of a total amount, which can also be specified
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts\Integers
 */
interface TotalAware
{
    /**
     * Set the given total
     *
     * @param int $amount The total amount
     *
     * @return void
     */
    public function setTotal($amount);

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
    public function getTotal();

    /**
     * Get a default total value, if any is available
     *
     * @return int|null A default total value or Null if no default value is available
     */
    public function getDefaultTotal();

    /**
     * Check if total has been set
     *
     * @return bool True if total has been set, false if not
     */
    public function hasTotal();

    /**
     * Check if a default total is available or not
     *
     * @return bool True of a default total is available, false if not
     */
    public function hasDefaultTotal();
}