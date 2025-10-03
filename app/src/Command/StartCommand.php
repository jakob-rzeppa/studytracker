<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;

class StartCommand extends Command
{

    protected function configure(): void
    {
        $this
            ->setName('start')
            ->setDescription('Starts the Study Tracker application');
    }

    public function __invoke(): int
    {
        return Command::SUCCESS;
    }
}
