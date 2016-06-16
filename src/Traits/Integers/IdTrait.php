<?php
namespace VCAS\Support\Traits\Integers;


/**
 * Id Trait
 *
 * @see \VCAS\Support\Contracts\Integers\IdAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Integers
 */
trait IdTrait
{
    /**
     * Unique Identifier
     *
     * @var integer|null
     */
    protected $id = null;

    /**
     * Set the given id
     *
     * @param integer $identifier Unique Identifier
     *
     * @return void
     */
    public function setId($identifier)
    {
        $this->id = (int) $identifier;
    }

    /**
     * Get the given id
     *
     * If no id has been set, this method will
     * set and return a default id, if any such
     * value is available
     *
     * @see getDefaultId()
     *
     * @return integer|null id or null if none id has been set
     */
    public function getId()
    {
        if (!isset($this->id)) {
            $this->id = $this->getDefaultId();
        }
        return $this->id;
    }

    /**
     * Get a default id value, if any is available
     *
     * @return integer|null A default id value or Null if no default value is available
     */
    public function getDefaultId()
    {
        return null;
    }

    /**
     * Check if id has been set
     *
     * @return bool True if id has been set, false if not
     */
    public function hasId()
    {
        return isset($this->id);
    }

    /**
     * Check if a default id is available or not
     *
     * @return bool True of a default id is available, false if not
     */
    public function hasDefaultId()
    {
        return false; //!is_null($this->getDefaultId());
    }
}