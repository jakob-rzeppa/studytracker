<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\CommandsManager;
use Symfony\Component\Console\Application;

$application = new Application();

CommandsManager::registerCommands($application);

$application->run();
