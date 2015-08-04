<?php
/**
 *
 * @created   by PhpStorm
 * @package   config.php
 * @version   1.0
 * @author    Alex Jurii <jurii@mail.ru>
 * @link      http://alex.od.ua
 * @copyright ��������� ����� (C) 2000-2015, Alex Jurii
 * @date:     26.05.2015
 * @time:     0:25
 * @license   MIT License: http://opensource.org/licenses/MIT
 */

defined('PROTECT_PAGE') or define('PROTECT_PAGE', 1);

if (version_compare(phpversion(), '5.5.0', '<') === true) {
	die ('PHP5.5 Only');
}
// ���������:
if (!defined('PATH_SEPARATOR')) {
	define('PATH_SEPARATOR', getenv('COMSPEC') ? ';' : ':');
}
// ����������� ��� ����� � ������
define ('DS', DIRECTORY_SEPARATOR);
// ���� � �������� ����� �����
define ('SITE_PATH', realpath(__DIR__.DS.'..'.DS.'..'.DS).DS);

set_include_path(ini_get('include_path').PATH_SEPARATOR.__DIR__);
ini_set('session.auto_start', 1);

// ������������� ����
// ��� ��������
define('TBL_POSTS', 'gb_posts');  // ��� ������� � �����������
define('TBL_REPLIES', 'gb_replies'); // ��� ������� � ��������
define('TBL_USERS', 'gb_users'); // ��� ������� � ������������