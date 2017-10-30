<?php

namespace pdffiller\LibLaravelEnvToConsul\Console\Commands;
use pdffiller\LibLaravelEnvToConsul\ConsulConfigNotFoundException;
use Illuminate\Console\Command;
use Symfony\Component\Console\Tests\Input\InputArgumentTest;
class ConsulConfig extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'consul:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Moves the env variables to consul';

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
        if(!$filePath = realpath(__DIR__."/../../../../../../.env.consul")) {
            throw new ConsulConfigNotFoundException(("The consul config file was not found by path '" . realpath(__DIR__."/../../../../../../") . "/.env.consul'"));
        }
        $fileResource = fopen($filePath, 'r');
        $config = [];
        $sf = new \SensioLabs\Consul\ServiceFactory();
        $kv = $sf->get('kv'); //TODO TEST THIS???
        $errorsCount = 0;
        while(false !== ($row = fgets($fileResource))) {
            if (strpos($row, "=") === false) {
                continue;
            }
            if(!$row) {
                continue;
            }
            list($key, $value) = explode("=", $row);
            $config[] = ['key' => trim($key), 'value' => trim($value)];
            try{
                $kv->put(env('REGION','us-east-1').'/apps/' . env('CONSUL_SERVICE_NAME', 'test') . '/'. env('SERVICE_ENV', 'dev') .'/'.strtolower(trim($key)), trim($value));
            } catch (\Exception $e) {
                $errorsCount++;
                echo "[".strtolower(trim($key)). "] - error, skipped".PHP_EOL.$e->getMessage().PHP_EOL;
                continue;
            }
        }
        echo "Finished with $errorsCount errors!";
    }
}
