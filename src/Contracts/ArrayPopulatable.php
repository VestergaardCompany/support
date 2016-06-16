<?php
namespace VCAS\Support\Contracts;

/**
 * Array Populatable
 *
 * Component is able to be populated via an array that
 * contains some kind of data
 * 
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts
 */
interface ArrayPopulatable
{
    /**
     * Populate component with data
     * 
     * If given data is empty, then this method will
     * NOT overwrite it's already populated data.
     * 
     * @param array $data [optional]
     * @return void
     */
    public function populate(array $data = []);
}