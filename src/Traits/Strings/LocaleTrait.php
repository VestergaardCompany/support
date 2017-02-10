<?php

namespace VCAS\Support\Traits\Strings;

/**
 * Locale Trait
 *
 * @see use VCAS\Support\Contracts\Strings\LocaleAware;
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Strings
 */
trait LocaleTrait
{
    /**
     * Locale identifier
     *
     * @var string|null
     */
    protected $locale = null;

    /**
     * Set the given locale
     *
     * @param string $identifier Locale identifier
     *
     * @return void
     */
    public function setLocale($identifier)
    {
        $this->locale = (string) $identifier;
    }

    /**
     * Get the given locale
     *
     * If no locale has been set, this method will
     * set and return a default locale, if any such
     * value is available
     *
     * @see getDefaultLocale()
     *
     * @return string|null locale or null if none locale has been set
     */
    public function getLocale()
    {
        if (!isset($this->locale)) {
            $this->locale = $this->getDefaultLocale();
        }
        return $this->locale;
    }

    /**
     * Get a default locale value, if any is available
     *
     * @return string|null A default locale value or Null if no default value is available
     */
    public function getDefaultLocale()
    {
        return null;
    }

    /**
     * Check if locale has been set
     *
     * @return bool True if locale has been set, false if not
     */
    public function hasLocale()
    {
        return isset($this->locale);
    }

    /**
     * Check if a default locale is available or not
     *
     * @return bool True of a default locale is available, false if not
     */
    public function hasDefaultLocale()
    {
        return false; //!is_null($this->getDefaultLocale());
    }
}