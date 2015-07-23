<?php
/**
 * ����� ������������ ���
 * @created   by PhpStorm
 * @package   InterfaceRouter.php
 * @version   1.0
 * @author    Alex Jurii <jurii@mail.ru>
 * @link      http://alex.od.ua
 * @copyright ��������� ����� (C) 2000-2015, Alex Jurii
 * @date:     23.07.2015
 * @time:     19:22
 * @license   MIT License: http://opensource.org/licenses/MIT
 */

namespace classes\Router;


/**
 * Interface InterfaceRouter
 * @package classes\Router
 */
interface InterfaceRouter
{
    /**
     *
     */
    public function __construct();
    /**
     * @param $route
     * @return mixed
     */
    public function setRoute($route);

    public function start();

}