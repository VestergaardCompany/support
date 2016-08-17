<?php
namespace VCAS\Support\Contracts\Arrays;

/**
 * Stats Aware
 *
 * Component is aware of a statistics list, containing either
 * values or key-value pairs, which provide some kind of
 * data / information about something.
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts\Arrays
 */
interface StatsAware
{
    /**
     * Set the given stats
     *
     * @param array $stats Stats
     *
     * @return void
     */
    public function setStats(array $stats);

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
    public function getStats();

    /**
     * Get a default stats value, if any is available
     *
     * @return array|null A default stats value or Null if no default value is available
     */
    public function getDefaultStats();

    /**
     * Check if stats has been set
     *
     * @return bool True if stats has been set, false if not
     */
    public function hasStats();

    /**
     * Check if a default stats is available or not
     *
     * @return bool True of a default stats is available, false if not
     */
    public function hasDefaultStats();
}