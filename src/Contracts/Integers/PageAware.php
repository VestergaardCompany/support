<?php
namespace VCAS\Support\Contracts\Integers;

/**
 * Page Aware
 *
 * Component is aware of a page number, which can also be specified
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts\Integers
 */
interface PageAware
{
    /**
     * Set the given page
     *
     * @param int $number The current or targeted page
     *
     * @return void
     */
    public function setPage($number);

    /**
     * Get the given page
     *
     * If no page has been set, this method will
     * set and return a default page, if any such
     * value is available
     *
     * @see getDefaultPage()
     *
     * @return int|null page or null if none page has been set
     */
    public function getPage();

    /**
     * Get a default page value, if any is available
     *
     * @return int|null A default page value or Null if no default value is available
     */
    public function getDefaultPage();

    /**
     * Check if page has been set
     *
     * @return bool True if page has been set, false if not
     */
    public function hasPage();

    /**
     * Check if a default page is available or not
     *
     * @return bool True of a default page is available, false if not
     */
    public function hasDefaultPage();
}