<?php

namespace VCAS\Support\Traits\Arrays;

/**
 * Statements Trait
 *
 * @see \VCAS\Support\Contracts\Arrays\StatementsAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Arrays
 */
trait StatementsTrait
{
    /**
     * List of statements
     *
     * @var array|null
     */
    protected $statements = null;

    /**
     * Set the given statements
     *
     * @param array $statements List of statements
     *
     * @return void
     */
    public function setStatements(array $statements)
    {
        $this->statements = $statements;
    }

    /**
     * Get the given statements
     *
     * If no statements has been set, this method will
     * set and return a default statements, if any such
     * value is available
     *
     * @see getDefaultStatements()
     *
     * @return array|null statements or null if none statements has been set
     */
    public function getStatements()
    {
        if (!isset($this->statements)) {
            $this->statements = $this->getDefaultStatements();
        }
        return $this->statements;
    }

    /**
     * Get a default statements value, if any is available
     *
     * @return array|null A default statements value or Null if no default value is available
     */
    public function getDefaultStatements()
    {
        return null;
    }

    /**
     * Check if statements has been set
     *
     * @return bool True if statements has been set, false if not
     */
    public function hasStatements()
    {
        return isset($this->statements);
    }

    /**
     * Check if a default statements is available or not
     *
     * @return bool True of a default statements is available, false if not
     */
    public function hasDefaultStatements()
    {
        return false; //!is_null($this->getDefaultStatements());
    }
}