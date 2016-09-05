<?php
namespace VCAS\Support\Traits\Arrays;

/**
 * Returning Trait
 *
 * @see \VCAS\Support\Contracts\Arrays\ReturningAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Arrays
 */
trait ReturningTrait
{
    /**
     * Sql returning clause fields
     *
     * @var array|null
     */
    protected $returning = null;

    /**
     * Set the given returning
     *
     * @param array $fields Sql returning clause fields
     *
     * @return void
     */
    public function setReturning($fields)
    {
        $this->returning = $fields;
    }

    /**
     * Get the given returning
     *
     * If no returning has been set, this method will
     * set and return a default returning, if any such
     * value is available
     *
     * @see getDefaultReturning()
     *
     * @return array|null returning or null if none returning has been set
     */
    public function getReturning()
    {
        if (!isset($this->returning)) {
            $this->returning = $this->getDefaultReturning();
        }
        return $this->returning;
    }

    /**
     * Get a default returning value, if any is available
     *
     * @return array|null A default returning value or Null if no default value is available
     */
    public function getDefaultReturning()
    {
        return null;
    }

    /**
     * Check if returning has been set
     *
     * @return bool True if returning has been set, false if not
     */
    public function hasReturning()
    {
        return isset($this->returning);
    }

    /**
     * Check if a default returning is available or not
     *
     * @return bool True of a default returning is available, false if not
     */
    public function hasDefaultReturning()
    {
        return false; //!is_null($this->getDefaultReturning());
    }
}