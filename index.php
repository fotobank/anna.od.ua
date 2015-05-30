<?php
/**
 * ����� ������������ ���
 * @created   by PhpStorm
 * @package   index.php
 * @version   1.0
 * @author    Alex Jurii <jurii@mail.ru>
 * @link      http://alex.od.ua
 * @copyright ��������� ����� (C) 2000-2015, Alex Jurii
 * @date      :     26.05.2015
 * @time      :     0:52
 * @license   MIT License: http://opensource.org/licenses/MIT
 */

ob_start();

/** @noinspection PhpIncludeInspection */
include(__DIR__ . DIRECTORY_SEPARATOR . 'system' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'config.php');

// ���������� ���� �����
/** @noinspection PhpIncludeInspection */
include(SITE_PATH . 'system' . DS . 'core' . DS . 'core.php');

/** @noinspection PhpIncludeInspection */
$site_routes = include(SITE_PATH.'system/classes/Router/routes.php');
// ��������� router
$router = new Router();
// ������ ���� �� ����� ������������.
$router->setPath(SITE_PATH . 'system' . DS . 'controllers');
// ��������� �������������
$router->start($site_routes);

ob_end_flush();