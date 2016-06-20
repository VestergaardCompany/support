<?php
namespace VCAS\Support\Traits\Strings;

/**
 * Address Trait
 *
 * @see \VCAS\Support\Contracts\Strings\AddressAware
 * 
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Strings
 */
trait AddressTrait
{
    /**
     * Address
     *
     * @var string|null
     */
    protected $address = null;

    /**
     * Set the given address
     *
     * @param string $address Address
     *
     * @return void
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * Get the given address
     *
     * If no address has been set, this method will
     * set and return a default address, if any such
     * value is available
     *
     * @see getDefaultAddress()
     *
     * @return string|null address or null if none address has been set
     */
    public function getAddress()
    {
        if (!isset($this->address)) {
            $this->address = $this->getDefaultAddress();
        }
        return $this->address;
    }

    /**
     * Get a default address value, if any is available
     *
     * @return string|null A default address value or Null if no default value is available
     */
    public function getDefaultAddress()
    {
        return null;
    }

    /**
     * Check if address has been set
     *
     * @return bool True if address has been set, false if not
     */
    public function hasAddress()
    {
        return isset($this->address);
    }

    /**
     * Check if a default address is available or not
     *
     * @return bool True of a default address is available, false if not
     */
    public function hasDefaultAddress()
    {
        return false; //!is_null($this->getDefaultAddress());
    }
}