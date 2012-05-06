<?php
/**
 * MobileCMS
 *
 * Open source content management system for mobile sites
 *
 * @author MobileCMS Team <support@mobilecms.ru>
 * @copyright Copyright (c) 2011, MobileCMS Team
 * @link http://mobilecms.ru Official site
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 */

/**
 * Статический класс registry
 */
abstract class Registry
{
	/**
	 * Статическое хранилище для данных
	 */
	static $store = array();
     
     
	/**
	 * Проверяет существуют ли данные по ключу
	 *
	 * @param string $name
	 * @return bool
	 */
	public static function exists($name) 
	{
		return isset(self::$store[$name]);
	}
     
	/**
	 * Возвращает данные по ключу или null, если не данных нет
	 *
	 * @param string $name
	 * @return unknown
	 */
	public static function get($name) 
	{
		return (isset(self::$store[$name])) ? self::$store[$name] : null;
	}
     
	/**
	 * Сохраняет данные по ключу в статическом хранилище
	 *
	 * @param string $name
	 * @param mixed $data
	 * @return unknown
	 */
	public static function set($name, $data) 
	{
		return self::$store[$name] = $data;
	}
}
?>