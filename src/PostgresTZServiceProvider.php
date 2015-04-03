<?php
namespace Bmatics\PostgresTZ;

use Illuminate\Support\ServiceProvider;
use Bmatics\PostgresTZ\Database\PostgresTZConnection;

class PostgresTZServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->resolving('db', function($db)
        {
            $db->extend('pgsql', function($config)
            {
                return new PostgresTZConnection($config);
            });
        });
	}
}