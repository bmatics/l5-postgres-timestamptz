<?php
namespace Bmatics\PostgresTZ;

use Illuminate\Support\ServiceProvider;

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
		$this->app->bind('db.connection.pgsqltz', 'Bmatics\PostgresTZ\Database\PostgresTZConnection');
	}

}
