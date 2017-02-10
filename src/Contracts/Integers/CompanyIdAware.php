<?php
namespace VCAS\Support\Contracts\Integers;

/**
 * Company Id Aware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts\Integers
 */
interface CompanyIdAware
{
    /**
     * Set the given company id
     *
     * @param int $identifier Company Id
     *
     * @return void
     */
    public function setCompanyId($identifier);

    /**
     * Get the given company id
     *
     * If no company id has been set, this method will
     * set and return a default company id, if any such
     * value is available
     *
     * @see getDefaultCompanyId()
     *
     * @return int|null company id or null if none company id has been set
     */
    public function getCompanyId();

    /**
     * Get a default company id value, if any is available
     *
     * @return int|null A default company id value or Null if no default value is available
     */
    public function getDefaultCompanyId();

    /**
     * Check if company id has been set
     *
     * @return bool True if company id has been set, false if not
     */
    public function hasCompanyId();

    /**
     * Check if a default company id is available or not
     *
     * @return bool True of a default company id is available, false if not
     */
    public function hasDefaultCompanyId();
}