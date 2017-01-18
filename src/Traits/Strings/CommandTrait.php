<?php

namespace VCAS\Support\Traits\Strings;

/**
 * Command Trait
 *
 * @see \VCAS\Support\Contracts\Strings\CommandAware
 *
 * @author Alin Eugen Deac <ade@vestergaardcompany.com>
 * @package VCAS\Support\Traits\Strings
 */
trait CommandTrait
{
    /**
     * A command to be executed
     *
     * @var string|null
     */
    protected $command = null;

    /**
     * Set the given command
     *
     * @param string $command A command to be executed
     *
     * @return void
     */
    public function setCommand($command)
    {
        $this->command = $command;
    }

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
    public function getCommand()
    {
        if (!isset($this->command)) {
            $this->command = $this->getDefaultCommand();
        }
        return $this->command;
    }

    /**
     * Get a default command value, if any is available
     *
     * @return string|null A default command value or Null if no default value is available
     */
    public function getDefaultCommand()
    {
        return null;
    }

    /**
     * Check if command has been set
     *
     * @return bool True if command has been set, false if not
     */
    public function hasCommand()
    {
        return isset($this->command);
    }

    /**
     * Check if a default command is available or not
     *
     * @return bool True of a default command is available, false if not
     */
    public function hasDefaultCommand()
    {
        return false; //!is_null($this->getDefaultCommand());
    }
}