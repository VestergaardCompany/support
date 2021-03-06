<?php
namespace VCAS\Support\Contracts\Strings;

/**
 * Description Aware
 *
 * Component is is able to specify and retrieve a description
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts\Strings
 */
interface DescriptionAware
{
    /**
     * Set the given description
     *
     * @param string $description Description
     *
     * @return void
     */
    public function setDescription($description);

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
    public function getDescription();

    /**
     * Get a default description value, if any is available
     *
     * @return string|null A default description value or Null if no default value is available
     */
    public function getDefaultDescription();

    /**
     * Check if description has been set
     *
     * @return bool True if description has been set, false if not
     */
    public function hasDescription();

    /**
     * Check if a default description is available or not
     *
     * @return bool True of a default description is available, false if not
     */
    public function hasDefaultDescription();
}