<?php

namespace Como\Cms;

use Illuminate\Support\ServiceProvider;

class CmsServiceProvider extends ServiceProvider {
	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot() {
		$this->loadTranslationsFrom(__DIR__ . '/../../resources/lang', 'como\cms');

		$this->loadViewsFrom(__DIR__ . '/../../resources/views', 'como\cms');

		if(!$this->app->routesAreCached()) {
			require __DIR__ . ' /../../routes.php';
		}

		//发布配置文件
		$this->publishes([
			__DIR__ . '/../../config/como_cms.php' => config_path('como_cms.php'),
		], 'config');
		//发布公共资源
		$this->publishes([
			__DIR__ . '/../../../public' => public_path('como/cms')
		], 'public');
		//发布view/lang
		$this->publishes([
			__DIR__ . '/../../resources/views' => base_path('resources/views/vendor/como/cms'),
		], 'views');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register() {
		//
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides() {
		return [];
	}

}
