<?php
namespace VCAS\Support\Traits\Arrays;

/**
 * Options Trait
 *
 * @see \VCAS\Support\Contracts\Arrays\OptionsAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Arrays
 */
trait OptionsTrait
{
    /**
     * Options
     *
     * @var array|null
     */
    protected $options = null;

    /**
     * Set the given options
     *
     * @param array $options Options
     *
     * @return void
     */
    public function setOptions(array $options)
    {
        $this->options = $options;
    }

    /**
     * Get the given options
     *
     * If no options has been set, this method will
     * set and return a default options, if any such
     * value is available
     *
     * @see getDefaultOptions()
     *
     * @return array|null options or null if none options has been set
     */
    public function getOptions()
    {
        if (!isset($this->options)) {
            $this->options = $this->getDefaultOptions();
        }
        return $this->options;
    }

    /**
     * Get a default options value, if any is available
     *
     * @return array|null A default options value or Null if no default value is available
     */
    public function getDefaultOptions()
    {
        return null;
    }

    /**
     * Check if options has been set
     *
     * @return bool True if options has been set, false if not
     */
    public function hasOptions()
    {
        return isset($this->options);
    }

    /**
     * Check if a default options is available or not
     *
     * @return bool True of a default options is available, false if not
     */
    public function hasDefaultOptions()
    {
        return false; //!is_null($this->getDefaultOptions());
    }
}