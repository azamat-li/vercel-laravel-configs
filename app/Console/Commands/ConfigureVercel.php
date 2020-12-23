<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ConfigureVercel extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'vercel:config';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Configure for serverless hosting on Vercel';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Configuring Vercel');
        File::copy('vendor/serverless/vercel_laravel/vercel.json', 'vercel.json');
        File::makeDirectory('api');
        File::copy('vendor/serverless/vercel_laravel/api/index.php', 'api/index.php');
    }
}
