<?php
namespace VCAS\Support\Traits\Strings;

/**
 * PkName Trait
 *
 * @see \VCAS\Support\Contracts\Strings\PkNameAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Strings
 */
trait PkNameTrait
{
    /**
     * Primary Key Name
     *
     * @var string|null
     */
    protected $pkName = null;

    /**
     * Set the given pk name
     *
     * @param string $name Primary Key Name
     *
     * @return void
     */
    public function setPkName($name)
    {
        $this->pkName = $name;
    }

    /**
     * Get the given pk name
     *
     * If no pk name has been set, this method will
     * set and return a default pk name, if any such
     * value is available
     *
     * @see getDefaultPkName()
     *
     * @return string|null pk name or null if none pk name has been set
     */
    public function getPkName()
    {
        if (!isset($this->pkName)) {
            $this->pkName = $this->getDefaultPkName();
        }
        return $this->pkName;
    }

    /**
     * Get a default pk name value, if any is available
     *
     * @return string|null A default pk name value or Null if no default value is available
     */
    public function getDefaultPkName()
    {
        return null;
    }

    /**
     * Check if pk name has been set
     *
     * @return bool True if pk name has been set, false if not
     */
    public function hasPkName()
    {
        return isset($this->pkName);
    }

    /**
     * Check if a default pk name is available or not
     *
     * @return bool True of a default pk name is available, false if not
     */
    public function hasDefaultPkName()
    {
        return false; //!is_null($this->getDefaultPkName());
    }
}