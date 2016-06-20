<?php
namespace VCAS\Support\Contracts\Strings;

/**
 * Address Aware
 *
 * Component is able to set and retrieve an address or some
 * kind. This can be anything from a physical address to
 * perhaps a network address.
 * 
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts\Strings
 */
interface AddressAware
{
    /**
     * Set the given address
     *
     * @param string $address Address
     *
     * @return void
     */
    public function setAddress($address);

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
    public function getAddress();

    /**
     * Get a default address value, if any is available
     *
     * @return string|null A default address value or Null if no default value is available
     */
    public function getDefaultAddress();

    /**
     * Check if address has been set
     *
     * @return bool True if address has been set, false if not
     */
    public function hasAddress();

    /**
     * Check if a default address is available or not
     *
     * @return bool True of a default address is available, false if not
     */
    public function hasDefaultAddress();
}