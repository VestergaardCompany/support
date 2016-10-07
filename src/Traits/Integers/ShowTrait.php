<?php
namespace VCAS\Support\Traits\Integers;

/**
 * Show Trait
 *
 * @see \VCAS\Support\Contracts\Integers\ShowAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Integers
 */
trait ShowTrait
{
    /**
     * Amount to be displayed or otherwise processed
     *
     * @var int|null
     */
    protected $show = null;

    /**
     * Set the given show
     *
     * @param int $amount Amount to be displayed or otherwise processed
     *
     * @return void
     */
    public function setShow($amount)
    {
        $this->show = $amount;
    }

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
    public function getShow()
    {
        if (!isset($this->show)) {
            $this->show = $this->getDefaultShow();
        }
        return $this->show;
    }

    /**
     * Get a default show value, if any is available
     *
     * @return int|null A default show value or Null if no default value is available
     */
    public function getDefaultShow()
    {
        return null;
    }

    /**
     * Check if show has been set
     *
     * @return bool True if show has been set, false if not
     */
    public function hasShow()
    {
        return isset($this->show);
    }

    /**
     * Check if a default show is available or not
     *
     * @return bool True of a default show is available, false if not
     */
    public function hasDefaultShow()
    {
        return false; //!is_null($this->getDefaultShow());
    }
}