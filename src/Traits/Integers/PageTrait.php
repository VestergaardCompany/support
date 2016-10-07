<?php
namespace VCAS\Support\Traits\Integers;

/**
 * Class PageTrait
 *
 * @see \VCAS\Support\Contracts\Integers\PageAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Integers
 */
trait PageTrait
{
    /**
     * The current or targeted page
     *
     * @var int|null
     */
    protected $page = null;

    /**
     * Set the given page
     *
     * @param int $number The current or targeted page
     *
     * @return void
     */
    public function setPage($number)
    {
        $this->page = $number;
    }

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
    public function getPage()
    {
        if (!isset($this->page)) {
            $this->page = $this->getDefaultPage();
        }
        return $this->page;
    }

    /**
     * Get a default page value, if any is available
     *
     * @return int|null A default page value or Null if no default value is available
     */
    public function getDefaultPage()
    {
        return null;
    }

    /**
     * Check if page has been set
     *
     * @return bool True if page has been set, false if not
     */
    public function hasPage()
    {
        return isset($this->page);
    }

    /**
     * Check if a default page is available or not
     *
     * @return bool True of a default page is available, false if not
     */
    public function hasDefaultPage()
    {
        return false; //!is_null($this->getDefaultPage());
    }
}