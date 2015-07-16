<?php
/**
 * ����� controllers\Error
 * @created   by PhpStorm
 * @package   Error.php
 * @version   1.0
 * @author    Alex Jurii <jurii@mail.ru>
 * @link      http://alex.od.ua
 * @copyright ��������� ����� (C) 2000-2015, Alex Jurii
 * @date:     05.06.2015
 * @time:     0:53
 * @license   MIT License: http://opensource.org/licenses/MIT
 */

namespace controllers\Error;

use controllers\Controller\Controller;


/**
 * Class Error
 * @package controllers\Error
 */
class Error extends Controller {

	/**
	 *
	 */
	public function __construct() {
		{
			parent::init();
		}
	}

	/**
	 * @internal param string $info
	 * @internal param int|string $err
	 */
	public function error404() {

		header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
		/** @noinspection PhpIncludeInspection */
		include(SITE_PATH.'404.php');
		exit();
	}

}