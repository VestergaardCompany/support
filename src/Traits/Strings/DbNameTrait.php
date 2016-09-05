<?php
namespace VCAS\Support\Traits\Strings;

/**
 * Db-Name Trait
 *
 * @see \VCAS\Support\Contracts\Strings\DbNameAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Strings
 */
trait DbNameTrait
{
    /**
     * Name of a database
     *
     * @var string|null
     */
    protected $dbName = null;

    /**
     * Set the given db name
     *
     * @param string $name Name of a database
     *
     * @return void
     */
    public function setDbName($name)
    {
        $this->dbName = (string) $name;
    }

    /**
     * Get the given db name
     *
     * If no db name has been set, this method will
     * set and return a default db name, if any such
     * value is available
     *
     * @see getDefaultDbName()
     *
     * @return string|null db name or null if none db name has been set
     */
    public function getDbName()
    {
        if (!isset($this->dbName)) {
            $this->dbName = $this->getDefaultDbName();
        }
        return $this->dbName;
    }

    /**
     * Get a default db name value, if any is available
     *
     * @return string|null A default db name value or Null if no default value is available
     */
    public function getDefaultDbName()
    {
        return null;
    }

    /**
     * Check if db name has been set
     *
     * @return bool True if db name has been set, false if not
     */
    public function hasDbName()
    {
        return isset($this->dbName);
    }

    /**
     * Check if a default db name is available or not
     *
     * @return bool True of a default db name is available, false if not
     */
    public function hasDefaultDbName()
    {
        return false; //!is_null($this->getDefaultDbName());
    }
}