<?php
namespace VCAS\Support\Traits\Strings;

/**
 * Query-Type Trait
 *
 * @see \VCAS\Support\Contracts\Strings\QueryTypeAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Strings
 */
trait QueryTypeTrait
{
    /**
     * Query Type
     *
     * @var string|null
     */
    protected $queryType = null;

    /**
     * Set the given query type
     *
     * @param string $type Query Type
     *
     * @return void
     */
    public function setQueryType($type)
    {
        $this->queryType = (string) $type;
    }

    /**
     * Get the given query type
     *
     * If no query type has been set, this method will
     * set and return a default query type, if any such
     * value is available
     *
     * @see getDefaultQueryType()
     *
     * @return string|null query type or null if none query type has been set
     */
    public function getQueryType()
    {
        if (!isset($this->queryType)) {
            $this->queryType = $this->getDefaultQueryType();
        }
        return $this->queryType;
    }

    /**
     * Get a default query type value, if any is available
     *
     * @return string|null A default query type value or Null if no default value is available
     */
    public function getDefaultQueryType()
    {
        return null;
    }

    /**
     * Check if query type has been set
     *
     * @return bool True if query type has been set, false if not
     */
    public function hasQueryType()
    {
        return isset($this->queryType);
    }

    /**
     * Check if a default query type is available or not
     *
     * @return bool True of a default query type is available, false if not
     */
    public function hasDefaultQueryType()
    {
        return false; //!is_null($this->getDefaultQueryType());
    }
}