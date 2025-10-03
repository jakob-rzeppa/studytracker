<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;

class StopCommand extends Command
{

    protected function configure(): void
    {
        $this
            ->setName('stop')
            ->setDescription('Stops the Study Tracker application');
    }

    public function __invoke(): int
    {
        return Command::SUCCESS;
    }
}
