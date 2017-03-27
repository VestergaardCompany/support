<?php
namespace VCAS\Support\Contracts\Strings;

/**
 * Foreign Key Aware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts\Strings
 */
interface ForeignKeyAware
{
    /**
     * Set the given foreign key
     *
     * @param string $value Foreign Key
     *
     * @return void
     */
    public function setForeignKey($value);

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
    public function getForeignKey();

    /**
     * Get a default foreign key value, if any is available
     *
     * @return string|null A default foreign key value or Null if no default value is available
     */
    public function getDefaultForeignKey();

    /**
     * Check if foreign key has been set
     *
     * @return bool True if foreign key has been set, false if not
     */
    public function hasForeignKey();

    /**
     * Check if a default foreign key is available or not
     *
     * @return bool True of a default foreign key is available, false if not
     */
    public function hasDefaultForeignKey();
}