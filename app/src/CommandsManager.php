<?php

namespace App;

use Symfony\Component\Console\Application;

class CommandsManager
{
    private static array $commands = [
        Command\StartCommand::class,
        Command\StopCommand::class,
    ];

    public static function registerCommands(Application $application): void
    {
        foreach (self::$commands as $commandClass) {
            $application->add(new $commandClass());
        }
    }
};
