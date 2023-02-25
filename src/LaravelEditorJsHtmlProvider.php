<?php

namespace Fxcjahid\LaravelEditorJsHtml;

use Illuminate\Support\ServiceProvider;

class LaravelEditorJsHtmlProvider extends ServiceProvider
{
	/**
	 * Bootstrap any package services.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->loadViewsFrom(__DIR__ . '/../resources/views', 'laravel-editor-js-html');

		$this->publishes([
			__DIR__ . '/../resources/views' => resource_path('views/laravel-editor-js-html'),
		], 'laravel-editor-js-html');

		$this->publishes([
			__DIR__ . '/../config/laravel-editor-js-html.php' => config_path('laravel-editor-js-html.php'),
		], 'laravel-editor-js-config');
	}

	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->mergeConfigFrom(
			__DIR__ . '/../config/laravel-editor-js-html.php',
			'laravel-editor-js-html'
		);
	}
}
