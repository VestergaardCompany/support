<?php
namespace VCAS\Support\Contracts\Strings;

/**
 * Create Time Aware
 *
 * Component is aware of a creation time
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts\Strings
 */
interface CreateTimeAware
{
    /**
     * Set the given create time
     *
     * @param string $createTime Create Time
     *
     * @return void
     */
    public function setCreateTime($createTime);

    /**
     * Get the given create time
     *
     * If no create time has been set, this method will
     * set and return a default create time, if any such
     * value is available
     *
     * @see getDefaultCreateTime()
     *
     * @return string|null create time or null if none create time has been set
     */
    public function getCreateTime();

    /**
     * Get a default create time value, if any is available
     *
     * @return string|null A default create time value or Null if no default value is available
     */
    public function getDefaultCreateTime();

    /**
     * Check if create time has been set
     *
     * @return bool True if create time has been set, false if not
     */
    public function hasCreateTime();

    /**
     * Check if a default create time is available or not
     *
     * @return bool True of a default create time is available, false if not
     */
    public function hasDefaultCreateTime();
}