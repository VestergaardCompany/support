<?php
namespace VCAS\Support\Traits\Arrays;

/**
 * Matching Trait
 *
 * @see \VCAS\Support\Contracts\Arrays\MatchingAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Arrays
 */
trait MatchingTrait
{
    /**
     * SQL matching conditions
     *
     * @var array|null
     */
    protected $matching = null;

    /**
     * Set the given matching
     *
     * @param array $conditions SQL matching conditions
     *
     * @return void
     */
    public function setMatching($conditions)
    {
        $this->matching = $conditions;
    }

    /**
     * Get the given matching
     *
     * If no matching has been set, this method will
     * set and return a default matching, if any such
     * value is available
     *
     * @see getDefaultMatching()
     *
     * @return array|null matching or null if none matching has been set
     */
    public function getMatching()
    {
        if (!isset($this->matching)) {
            $this->matching = $this->getDefaultMatching();
        }
        return $this->matching;
    }

    /**
     * Get a default matching value, if any is available
     *
     * @return array|null A default matching value or Null if no default value is available
     */
    public function getDefaultMatching()
    {
        return null;
    }

    /**
     * Check if matching has been set
     *
     * @return bool True if matching has been set, false if not
     */
    public function hasMatching()
    {
        return isset($this->matching);
    }

    /**
     * Check if a default matching is available or not
     *
     * @return bool True of a default matching is available, false if not
     */
    public function hasDefaultMatching()
    {
        return false; //!is_null($this->getDefaultMatching());
    }
}