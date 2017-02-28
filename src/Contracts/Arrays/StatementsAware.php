<?php
namespace VCAS\Support\Contracts\Arrays;

/**
 * Statements Aware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts\Arrays
 */
interface StatementsAware
{
    /**
     * Set the given statements
     *
     * @param array $statements List of statements
     *
     * @return void
     */
    public function setStatements(array $statements);

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
    public function getStatements();

    /**
     * Get a default statements value, if any is available
     *
     * @return array|null A default statements value or Null if no default value is available
     */
    public function getDefaultStatements();

    /**
     * Check if statements has been set
     *
     * @return bool True if statements has been set, false if not
     */
    public function hasStatements();

    /**
     * Check if a default statements is available or not
     *
     * @return bool True of a default statements is available, false if not
     */
    public function hasDefaultStatements();
}