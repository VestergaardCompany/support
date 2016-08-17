<?php
namespace VCAS\Support\Traits\Strings;

/**
 * Status Trait
 *
 * @see \VCAS\Support\Contracts\Strings\StatusAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Strings
 */
trait StatusTrait
{
    /**
     * Status
     *
     * @var string|null
     */
    protected $status = null;

    /**
     * Set the given status
     *
     * @param string $status Status
     *
     * @return void
     */
    public function setStatus($status)
    {
        $this->status = (string) $status;
    }

    /**
     * Get the given status
     *
     * If no status has been set, this method will
     * set and return a default status, if any such
     * value is available
     *
     * @see getDefaultStatus()
     *
     * @return string|null status or null if none status has been set
     */
    public function getStatus()
    {
        if (!isset($this->status)) {
            $this->status = $this->getDefaultStatus();
        }
        return $this->status;
    }

    /**
     * Get a default status value, if any is available
     *
     * @return string|null A default status value or Null if no default value is available
     */
    public function getDefaultStatus()
    {
        return null;
    }

    /**
     * Check if status has been set
     *
     * @return bool True if status has been set, false if not
     */
    public function hasStatus()
    {
        return isset($this->status);
    }

    /**
     * Check if a default status is available or not
     *
     * @return bool True of a default status is available, false if not
     */
    public function hasDefaultStatus()
    {
        return false; //!is_null($this->getDefaultStatus());
    }
}