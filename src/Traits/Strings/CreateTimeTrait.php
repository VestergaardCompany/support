<?php
namespace VCAS\Support\Traits\Strings;

/**
 * Create Time Trait
 *
 * @see \VCAS\Support\Contracts\Strings\CreateTimeAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Strings
 */
trait CreateTimeTrait
{
    /**
     * Create Time
     *
     * @var string|null
     */
    protected $createTime = null;

    /**
     * Set the given create time
     *
     * @param string $createTime Create Time
     *
     * @return void
     */
    public function setCreateTime($createTime)
    {
        $this->createTime = (string) $createTime;
    }

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
    public function getCreateTime()
    {
        if (!isset($this->createTime)) {
            $this->createTime = $this->getDefaultCreateTime();
        }
        return $this->createTime;
    }

    /**
     * Get a default create time value, if any is available
     *
     * @return string|null A default create time value or Null if no default value is available
     */
    public function getDefaultCreateTime()
    {
        return null;
    }

    /**
     * Check if create time has been set
     *
     * @return bool True if create time has been set, false if not
     */
    public function hasCreateTime()
    {
        return isset($this->createTime);
    }

    /**
     * Check if a default create time is available or not
     *
     * @return bool True of a default create time is available, false if not
     */
    public function hasDefaultCreateTime()
    {
        return false; //!is_null($this->getDefaultCreateTime());
    }
}