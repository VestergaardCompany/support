<?php

namespace VCAS\Support\Traits\Strings;

/**
 * Fallback Locale Trait
 *
 * @see \VCAS\Support\Contracts\Strings\FallbackLocaleAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Strings
 */
trait FallbackLocaleTrait
{
    /**
     * Fallback Locale identifier
     *
     * @var string|null
     */
    protected $fallbackLocale = null;

    /**
     * Set the given fallback locale
     *
     * @param string $identifier Fallback Locale identifier
     *
     * @return void
     */
    public function setFallbackLocale($identifier)
    {
        $this->fallbackLocale = (string) $identifier;
    }

    /**
     * Get the given fallback locale
     *
     * If no fallback locale has been set, this method will
     * set and return a default fallback locale, if any such
     * value is available
     *
     * @see getDefaultFallbackLocale()
     *
     * @return string|null fallback locale or null if none fallback locale has been set
     */
    public function getFallbackLocale()
    {
        if (!isset($this->fallbackLocale)) {
            $this->fallbackLocale = $this->getDefaultFallbackLocale();
        }
        return $this->fallbackLocale;
    }

    /**
     * Get a default fallback locale value, if any is available
     *
     * @return string|null A default fallback locale value or Null if no default value is available
     */
    public function getDefaultFallbackLocale()
    {
        return null;
    }

    /**
     * Check if fallback locale has been set
     *
     * @return bool True if fallback locale has been set, false if not
     */
    public function hasFallbackLocale()
    {
        return isset($this->fallbackLocale);
    }

    /**
     * Check if a default fallback locale is available or not
     *
     * @return bool True of a default fallback locale is available, false if not
     */
    public function hasDefaultFallbackLocale()
    {
        return false; //!is_null($this->getDefaultFallbackLocale());
    }
}