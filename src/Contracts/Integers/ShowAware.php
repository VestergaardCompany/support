<?php
namespace VCAS\Support\Contracts\Integers;

/**
 * Show Aware
 *
 * Component is aware of an amount to be displayed or processed,
 * which can also be specified
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts\Integers
 */
interface ShowAware
{
    /**
     * Set the given show
     *
     * @param int $amount Amount to be displayed or otherwise processed
     *
     * @return void
     */
    public function setShow($amount);

    /**
     * Get the given show
     *
     * If no show has been set, this method will
     * set and return a default show, if any such
     * value is available
     *
     * @see getDefaultShow()
     *
     * @return int|null show or null if none show has been set
     */
    public function getShow();

    /**
     * Get a default show value, if any is available
     *
     * @return int|null A default show value or Null if no default value is available
     */
    public function getDefaultShow();

    /**
     * Check if show has been set
     *
     * @return bool True if show has been set, false if not
     */
    public function hasShow();

    /**
     * Check if a default show is available or not
     *
     * @return bool True of a default show is available, false if not
     */
    public function hasDefaultShow();
}