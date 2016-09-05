<?php
namespace VCAS\Support\Traits\Arrays;

/**
 * Vars Trait
 *
 * @see \VCAS\Support\Contracts\Arrays\VarsAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Arrays
 */
trait VarsTrait
{
    /**
     * List of various variables
     *
     * @var array|null
     */
    protected $vars = null;

    /**
     * Set the given vars
     *
     * @param array $list List of various variables
     *
     * @return void
     */
    public function setVars(array $list)
    {
        $this->vars = $list;
    }

    /**
     * Get the given vars
     *
     * If no vars has been set, this method will
     * set and return a default vars, if any such
     * value is available
     *
     * @see getDefaultVars()
     *
     * @return array|null vars or null if none vars has been set
     */
    public function getVars()
    {
        if (!isset($this->vars)) {
            $this->vars = $this->getDefaultVars();
        }
        return $this->vars;
    }

    /**
     * Get a default vars value, if any is available
     *
     * @return array|null A default vars value or Null if no default value is available
     */
    public function getDefaultVars()
    {
        return null;
    }

    /**
     * Check if vars has been set
     *
     * @return bool True if vars has been set, false if not
     */
    public function hasVars()
    {
        return isset($this->vars);
    }

    /**
     * Check if a default vars is available or not
     *
     * @return bool True of a default vars is available, false if not
     */
    public function hasDefaultVars()
    {
        return false; //!is_null($this->getDefaultVars());
    }
}