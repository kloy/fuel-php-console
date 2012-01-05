## Fuel PHP Console

Enables the use of [php-console](http://code.google.com/p/php-console/) with [Fuel](http://fuelphp.com).

## Installation

Clone the repo to your Fuel packages directory.

	git clone git://github.com/keith-loy/fuel-php-console.git fuel/packages/php-console

Enabled the package in app/config/config.php

		'packages'  => array(
			'orm',
			'parser',
			'php-console',
		),

Download [PHP Console for Chrome](https://chrome.google.com/webstore/detail/nfhmhhlpfleoednkpnnnkolmclajemef).

## How to use

Called the function `\PHP_Console::log($message, $tags)`. This function is a proxy for
[php-console's debug function.](http://code.google.com/p/php-console/)

## Credits

[PHP-Console Team](http://code.google.com/p/php-console/)
