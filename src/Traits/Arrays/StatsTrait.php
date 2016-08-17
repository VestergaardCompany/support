<?php
namespace VCAS\Support\Traits\Arrays;

/**
 * Stats Trait
 *
 * @see \VCAS\Support\Contracts\Arrays\StatsAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Arrays
 */
trait StatsTrait
{
    /**
     * Stats
     *
     * @var array|null
     */
    protected $stats = null;

    /**
     * Set the given stats
     *
     * @param array $stats Stats
     *
     * @return void
     */
    public function setStats(array $stats)
    {
        $this->stats = $stats;
    }

    /**
     * Get the given stats
     *
     * If no stats has been set, this method will
     * set and return a default stats, if any such
     * value is available
     *
     * @see getDefaultStats()
     *
     * @return array|null stats or null if none stats has been set
     */
    public function getStats()
    {
        if (!isset($this->stats)) {
            $this->stats = $this->getDefaultStats();
        }
        return $this->stats;
    }

    /**
     * Get a default stats value, if any is available
     *
     * @return array|null A default stats value or Null if no default value is available
     */
    public function getDefaultStats()
    {
        return null;
    }

    /**
     * Check if stats has been set
     *
     * @return bool True if stats has been set, false if not
     */
    public function hasStats()
    {
        return isset($this->stats);
    }

    /**
     * Check if a default stats is available or not
     *
     * @return bool True of a default stats is available, false if not
     */
    public function hasDefaultStats()
    {
        return false; //!is_null($this->getDefaultStats());
    }
}