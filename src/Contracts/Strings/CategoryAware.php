<?php
namespace VCAS\Support\Contracts\Strings;

/**
 * Category Aware
 *
 * Component is aware of a category (name), which can also
 * be specified.
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts\Strings
 */
interface CategoryAware
{
    /**
     * Set the given category
     *
     * @param string $name Name of a category
     *
     * @return void
     */
    public function setCategory($name);

    /**
     * Get the given category
     *
     * If no category has been set, this method will
     * set and return a default category, if any such
     * value is available
     *
     * @see getDefaultCategory()
     *
     * @return string|null category or null if none category has been set
     */
    public function getCategory();

    /**
     * Get a default category value, if any is available
     *
     * @return string|null A default category value or Null if no default value is available
     */
    public function getDefaultCategory();

    /**
     * Check if category has been set
     *
     * @return bool True if category has been set, false if not
     */
    public function hasCategory();

    /**
     * Check if a default category is available or not
     *
     * @return bool True of a default category is available, false if not
     */
    public function hasDefaultCategory();
}