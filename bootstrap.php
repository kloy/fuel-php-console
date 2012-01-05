<?php
/**
 * PHP Console package
 *
 * @package    PHP Console
 * @version    0.1
 * @author     Keith Loy
 * @license    MIT License
 * @copyright  2011-2012 Keith Loy
 */

Autoloader::add_core_namespace('PHP_Console');

Autoloader::add_classes(array(
    'PHP_Console\\PHP_Console' => __DIR__.'/classes/php_console.php',
));

/* End of file bootstrap.php */

