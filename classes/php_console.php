<?php
/**
 * PHP Console class
 *
 * @version    1.0
 * @author     Keith Loy
 * @license    MIT License
 * @copyright  2011-2012 Keith Loy
 */

namespace PHP_Console;

require_once(__DIR__.DS.'..'.DS.'vendor/PhpConsole.php');

class PHP_Console {

	private static $_inited = false;
	protected static $_dev = null;

	public static function log($message, $tags = 'debug')
	{
		if ( ! static::_is_dev())
		{
			return;
		}
		if ( ! static::_is_inited())
		{
			\PhpConsole::start();
			static::$_inited = true;
		}

		if (is_array($message))
		{
			$message = \Format::forge( $message )->to_json();
		}

		return debug($message, $tags);
	}

	protected static function _is_dev()
	{
		if (static::$_dev === null)
		{
			if (\FUEL::$env === 'development')
			{
				static::$_dev = true;
			}
			else
			{
				static::$_dev = false;
			}
		}

		return static::$_dev;
	}

	protected static function _is_inited()
	{
		return static::$_inited;
	}
}
