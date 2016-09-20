<?php
namespace VCAS\Support\Traits\Strings;

/**
 * Category Trait
 *
 * @see \VCAS\Support\Contracts\Strings\CategoryAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Strings
 */
trait CategoryTrait
{
    /**
     * Name of a category
     *
     * @var string|null
     */
    protected $category = null;

    /**
     * Set the given category
     *
     * @param string $name Name of a category
     *
     * @return void
     */
    public function setCategory($name)
    {
        $this->category = $name;
    }

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
    public function getCategory()
    {
        if (!isset($this->category)) {
            $this->category = $this->getDefaultCategory();
        }
        return $this->category;
    }

    /**
     * Get a default category value, if any is available
     *
     * @return string|null A default category value or Null if no default value is available
     */
    public function getDefaultCategory()
    {
        return null;
    }

    /**
     * Check if category has been set
     *
     * @return bool True if category has been set, false if not
     */
    public function hasCategory()
    {
        return isset($this->category);
    }

    /**
     * Check if a default category is available or not
     *
     * @return bool True of a default category is available, false if not
     */
    public function hasDefaultCategory()
    {
        return false; //!is_null($this->getDefaultCategory());
    }
}