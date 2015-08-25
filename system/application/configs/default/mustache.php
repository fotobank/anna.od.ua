<?php
/**
 * ����� ������������ ���
 *
 * @created   by PhpStorm
 * @package   mustacheConfig.php
 * @version   1.0
 * @author    Alex Jurii <jurii@mail.ru>
 * @link      http://alex.od.ua
 * @copyright ��������� ����� (C) 2000-2015, Alex Jurii
 * @date:     26.08.2015
 * @time:     1:00
 * @license   MIT License: http://opensource.org/licenses/MIT
 */

use controllers\Controller\Controller;
use Mustache_Loader_FilesystemLoader as Loader;
use Mustache_Logger_StreamLogger as Logger;
use Mustache_Engine as Mustache;

return [
    // 'template_class_prefix' => '__MyTemplates_',
    'cache'                  => (SITE_PATH . Controller::MUSTACHE_CACHE),
    'cache_file_mode'        => 0666,
    // Please, configure your umask instead of doing this :)
    'cache_lambda_templates' => true, 'loader' => new Loader(SITE_PATH
                                                             . Controller::MUSTACHE_TEMPLATES),
    'partials_loader'        => new Loader(SITE_PATH
                                           . Controller::MUSTACHE_PARTIALS),
    // 'helpers' => [ 'i18n' => function($text) {  } ],
    'escape'                 => function ($value)
    {
        return htmlspecialchars($value, ENT_COMPAT, 'windows-1251');
    },
    'charset'                => 'windows-1251',
    'logger'                 => new Logger(SITE_PATH . Controller::MUSTACHE_LOG),
    'strict_callables'       => true, 'pragmas' => [Mustache::PRAGMA_FILTERS],
];