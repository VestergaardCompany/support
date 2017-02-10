<?php
namespace VCAS\Support\Traits\Strings;

/**
 * Group Trait
 *
 * @see \VCAS\Support\Contracts\Strings\GroupAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Strings
 */
trait GroupTrait
{
    /**
     * Name of a group
     *
     * @var string|null
     */
    protected $group = null;

    /**
     * Set the given group
     *
     * @param string $name Name of a group
     *
     * @return void
     */
    public function setGroup($name)
    {
        $this->group = (string) $name;
    }

    /**
     * Get the given group
     *
     * If no group has been set, this method will
     * set and return a default group, if any such
     * value is available
     *
     * @see getDefaultGroup()
     *
     * @return string|null group or null if none group has been set
     */
    public function getGroup()
    {
        if (!isset($this->group)) {
            $this->group = $this->getDefaultGroup();
        }
        return $this->group;
    }

    /**
     * Get a default group value, if any is available
     *
     * @return string|null A default group value or Null if no default value is available
     */
    public function getDefaultGroup()
    {
        return null;
    }

    /**
     * Check if group has been set
     *
     * @return bool True if group has been set, false if not
     */
    public function hasGroup()
    {
        return isset($this->group);
    }

    /**
     * Check if a default group is available or not
     *
     * @return bool True of a default group is available, false if not
     */
    public function hasDefaultGroup()
    {
        return false; //!is_null($this->getDefaultGroup());
    }
}