<?php
namespace VCAS\Support\Traits\Arrays;

/**
 * Error Trait
 *
 * @see \VCAS\Support\Contracts\Arrays\ErrorAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Arrays
 */
trait ErrorTrait
{
    /**
     * Information about some kind of error
     *
     * @var array|null
     */
    protected $error = null;

    /**
     * Set the given error
     *
     * @param array $data Information about some kind of error
     *
     * @return void
     */
    public function setError(array $data)
    {
        $this->error = $data;
    }

    /**
     * Get the given error
     *
     * If no error has been set, this method will
     * set and return a default error, if any such
     * value is available
     *
     * @see getDefaultError()
     *
     * @return array|null error or null if none error has been set
     */
    public function getError()
    {
        if (!isset($this->error)) {
            $this->error = $this->getDefaultError();
        }
        return $this->error;
    }

    /**
     * Get a default error value, if any is available
     *
     * @return array|null A default error value or Null if no default value is available
     */
    public function getDefaultError()
    {
        return null;
    }

    /**
     * Check if error has been set
     *
     * @return bool True if error has been set, false if not
     */
    public function hasError()
    {
        return isset($this->error);
    }

    /**
     * Check if a default error is available or not
     *
     * @return bool True of a default error is available, false if not
     */
    public function hasDefaultError()
    {
        return false; //!is_null($this->getDefaultError());
    }
}