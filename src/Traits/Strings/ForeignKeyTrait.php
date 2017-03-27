<?php

namespace VCAS\Support\Traits\Strings;

/**
 * Foreign Key Trait
 *
 * @see \VCAS\Support\Contracts\Strings\ForeignKeyAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Strings
 */
trait ForeignKeyTrait
{
    /**
     * Foreign Key
     *
     * @var string|null
     */
    protected $foreignKey = null;

    /**
     * Set the given foreign key
     *
     * @param string $value Foreign Key
     *
     * @return void
     */
    public function setForeignKey($value)
    {
        $this->foreignKey = (string) $value;
    }

    /**
     * Get the given foreign key
     *
     * If no foreign key has been set, this method will
     * set and return a default foreign key, if any such
     * value is available
     *
     * @see getDefaultForeignKey()
     *
     * @return string|null foreign key or null if none foreign key has been set
     */
    public function getForeignKey()
    {
        if (!isset($this->foreignKey)) {
            $this->foreignKey = $this->getDefaultForeignKey();
        }
        return $this->foreignKey;
    }

    /**
     * Get a default foreign key value, if any is available
     *
     * @return string|null A default foreign key value or Null if no default value is available
     */
    public function getDefaultForeignKey()
    {
        return null;
    }

    /**
     * Check if foreign key has been set
     *
     * @return bool True if foreign key has been set, false if not
     */
    public function hasForeignKey()
    {
        return isset($this->foreignKey);
    }

    /**
     * Check if a default foreign key is available or not
     *
     * @return bool True of a default foreign key is available, false if not
     */
    public function hasDefaultForeignKey()
    {
        return false; //!is_null($this->getDefaultForeignKey());
    }
}