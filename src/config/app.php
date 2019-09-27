<?php
namespace App;

use App\Providers\CarbonServiceProvider;
use App\Providers\ElementorServiceProvider;

return [
	'providers'     => [
		CarbonServiceProvider::class,
		ElementorServiceProvider::class,
	]
];
