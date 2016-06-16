<?php
namespace VCAS\Support\Traits\Strings;

/**
 * Description Trait
 *
 * @see \VCAS\Support\Contracts\Strings\DescriptionAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Strings
 */
trait DescriptionTrait
{
    /**
     * Description
     *
     * @var string|null
     */
    protected $description = null;

    /**
     * Set the given description
     *
     * @param string $description Description
     *
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = (string) $description;
    }

    /**
     * Get the given description
     *
     * If no description has been set, this method will
     * set and return a default description, if any such
     * value is available
     *
     * @see getDefaultDescription()
     *
     * @return string|null description or null if none description has been set
     */
    public function getDescription()
    {
        if (!isset($this->description)) {
            $this->description = $this->getDefaultDescription();
        }
        return $this->description;
    }

    /**
     * Get a default description value, if any is available
     *
     * @return string|null A default description value or Null if no default value is available
     */
    public function getDefaultDescription()
    {
        return null;
    }

    /**
     * Check if description has been set
     *
     * @return bool True if description has been set, false if not
     */
    public function hasDescription()
    {
        return isset($this->description);
    }

    /**
     * Check if a default description is available or not
     *
     * @return bool True of a default description is available, false if not
     */
    public function hasDefaultDescription()
    {
        return false; //!is_null($this->getDefaultDescription());
    }
}