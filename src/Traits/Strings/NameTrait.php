<?php
namespace VCAS\Support\Traits\Strings;

/**
 * Name Trait
 *
 * @see \VCAS\Support\Contracts\Strings\NameAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Strings
 */
trait NameTrait
{
    /**
     * Name
     *
     * @var string|null
     */
    protected $name = null;

    /**
     * Set the given name
     *
     * @param string $name Name
     *
     * @return void
     */
    public function setName($name)
    {
        $this->name = (string) $name;
    }

    /**
     * Get the given name
     *
     * If no name has been set, this method will
     * set and return a default name, if any such
     * value is available
     *
     * @see getDefaultName()
     *
     * @return string|null name or null if none name has been set
     */
    public function getName()
    {
        if (!isset($this->name)) {
            $this->name = $this->getDefaultName();
        }
        return $this->name;
    }

    /**
     * Get a default name value, if any is available
     *
     * @return string|null A default name value or Null if no default value is available
     */
    public function getDefaultName()
    {
        return null;
    }

    /**
     * Check if name has been set
     *
     * @return bool True if name has been set, false if not
     */
    public function hasName()
    {
        return isset($this->name);
    }

    /**
     * Check if a default name is available or not
     *
     * @return bool True of a default name is available, false if not
     */
    public function hasDefaultName()
    {
        return false; //!is_null($this->getDefaultName());
    }
}