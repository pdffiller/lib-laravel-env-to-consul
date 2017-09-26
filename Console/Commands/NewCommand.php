<?php

namespace vagrant\mypackage\Console\Commands;

    use Illuminate\Console\Command;
    use Symfony\Component\Console\Tests\Input\InputArgumentTest;

    class NewCommand extends Command
    {
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'newcommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'It is a new command';

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
     * @return mixed
     */
    public function handle()
    {
        $this->info("Done!");
    }
}
