<?php namespace Molotov\CanpostValidator;

use Illuminate\Support\ServiceProvider;
use Validator;

class CanpostValidatorServiceProvider extends ServiceProvider {

	protected $defer = false;

	public function boot() {
		Validator::extend('canadian_postal_code', 'Molotov\CanpostValidator\PostalCodeValidator@validate');
	}

  public function register() {}

}
