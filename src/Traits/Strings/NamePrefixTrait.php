<?php namespace VCAS\Support\Traits\Strings;

/**
 * <h1>Name Prefix Trait</h1>
 *
 * @see \VCAS\Support\Contracts\Strings\NamePrefixAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Strings
 */
trait NamePrefixTrait
{
    /**
     * Prefix for a name
     *
     * @var string|null
     */
    protected $namePrefix = null;

    /**
     * Set name prefix
     *
     * @param string $prefix Prefix for a name
     *
     * @return void
     */
    public function setNamePrefix($prefix)
    {
        $this->namePrefix = (string) $prefix;
    }

    /**
     * Get name prefix
     *
     * If no "name prefix" value has been set, this method will
     * set and return a default "name prefix" value,
     * if any such value is available
     *
     * @see getDefaultNamePrefix()
     *
     * @return string|null "name prefix" value or null if no "name prefix" value has been set
     */
    public function getNamePrefix()
    {
        if (!$this->hasNamePrefix() && $this->hasDefaultNamePrefix()) {
            $this->setNamePrefix($this->getDefaultNamePrefix());
        }
        return $this->namePrefix;
    }

    /**
     * Get a default "name prefix" value, if any is available
     *
     * @return string|null A default "name prefix" value or null if no default value is available
     */
    public function getDefaultNamePrefix()
    {
        return null;
    }

    /**
     * Check if "name prefix" has been set
     *
     * @return bool True if "name prefix" value has been set, false if not
     */
    public function hasNamePrefix()
    {
        return isset($this->namePrefix);
    }

    /**
     * Check if a default "name prefix" is available or not
     *
     * @return bool True of a default "name prefix" value is available, false if not
     */
    public function hasDefaultNamePrefix()
    {
        $default = $this->getDefaultNamePrefix();
        return isset($default);
    }
}