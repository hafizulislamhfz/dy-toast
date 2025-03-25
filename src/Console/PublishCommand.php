<?php

namespace Hafizulislamhfz\DyToast\Console;

use Illuminate\Console\Command;
use Symfony\Component\Console\Attribute\AsCommand;

#[AsCommand(name: 'dytoast:publish')]
class PublishCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dytoast:publish';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publish all of the DyToast resources';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Publishing DyToast assets...');

        // Run the 'vendor:publish' command to publish the package's assets
        // The '--force' flag is set dynamically based on the 'has_modified' configuration value
        // If 'has_modified' is true, '--force' will be set to false to avoid overwriting customized files
        // If 'has_modified' is false, '--force' will be set to true to allow overwriting
        $this->call('vendor:publish', [
            '--tag' => 'toast',
            '--force' => config('dytoast.has_modified', false) == true ? false : true,
        ]);

        $this->info('DyToast assets published successfully.');
        $this->line('');
        $this->line('Thanks for using DyToast! ❤️');
        $this->line('');
    }
}
