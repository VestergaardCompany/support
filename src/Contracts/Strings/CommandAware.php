<?php
namespace VCAS\Support\Contracts\Strings;

/**
 * Command Aware
 *
 * Component is aware of a command, e.g. CLI command, which
 * can also be specified.
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Contracts\Strings
 */
interface CommandAware
{
    /**
     * Set the given command
     *
     * @param string $command A command to be executed
     *
     * @return void
     */
    public function setCommand($command);

    /**
     * Get the given command
     *
     * If no command has been set, this method will
     * set and return a default command, if any such
     * value is available
     *
     * @see getDefaultCommand()
     *
     * @return string|null command or null if none command has been set
     */
    public function getCommand();

    /**
     * Get a default command value, if any is available
     *
     * @return string|null A default command value or Null if no default value is available
     */
    public function getDefaultCommand();

    /**
     * Check if command has been set
     *
     * @return bool True if command has been set, false if not
     */
    public function hasCommand();

    /**
     * Check if a default command is available or not
     *
     * @return bool True of a default command is available, false if not
     */
    public function hasDefaultCommand();
}