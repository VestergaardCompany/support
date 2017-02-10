<?php

namespace VCAS\Support\Traits\Integers;

/**
 * Company Id Trait
 *
 * @see \VCAS\Support\Contracts\Integers\CompanyIdAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Integers
 */
trait CompanyIdTrait
{
    /**
     * Company Id
     *
     * @var int|null
     */
    protected $companyId = null;

    /**
     * Set the given company id
     *
     * @param int $identifier Company Id
     *
     * @return void
     */
    public function setCompanyId($identifier)
    {
        $this->companyId = (int) $identifier;
    }

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
    public function getCompanyId()
    {
        if (!isset($this->companyId)) {
            $this->companyId = $this->getDefaultCompanyId();
        }
        return $this->companyId;
    }

    /**
     * Get a default company id value, if any is available
     *
     * @return int|null A default company id value or Null if no default value is available
     */
    public function getDefaultCompanyId()
    {
        return null;
    }

    /**
     * Check if company id has been set
     *
     * @return bool True if company id has been set, false if not
     */
    public function hasCompanyId()
    {
        return isset($this->companyId);
    }

    /**
     * Check if a default company id is available or not
     *
     * @return bool True of a default company id is available, false if not
     */
    public function hasDefaultCompanyId()
    {
        return false; //!is_null($this->getDefaultCompanyId());
    }
}