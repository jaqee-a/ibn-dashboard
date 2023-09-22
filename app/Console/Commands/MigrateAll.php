<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Config;

class MigrateAll extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
	protected $signature = 'migrate:all {--option=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
		$option = $this->option ( 'option' );
		foreach ( Config::get ( 'database.connections' ) as $name => $details ){
            $this->info ( 'Running migration for "' . $name . '"' );
			if ($option) {
				$this->call ( "migrate:$option", array (
						'--database' => $name,
						'--path' => 'database/migrations/' . $name
				) );
			} else {
				$this->call ( 'migrate', array (
						'--database' => $name,
						'--path' => 'database/migrations/' . $name
				) );
			}
        }
    }
}
