<?php
namespace VCAS\Support\Contracts\Strings;

/**
 * Fallback Locale Aware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts\Strings
 */
interface FallbackLocaleAware
{
    /**
     * Set the given fallback locale
     *
     * @param string $identifier Fallback Locale identifier
     *
     * @return void
     */
    public function setFallbackLocale($identifier);

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
    public function getFallbackLocale();

    /**
     * Get a default fallback locale value, if any is available
     *
     * @return string|null A default fallback locale value or Null if no default value is available
     */
    public function getDefaultFallbackLocale();

    /**
     * Check if fallback locale has been set
     *
     * @return bool True if fallback locale has been set, false if not
     */
    public function hasFallbackLocale();

    /**
     * Check if a default fallback locale is available or not
     *
     * @return bool True of a default fallback locale is available, false if not
     */
    public function hasDefaultFallbackLocale();
}