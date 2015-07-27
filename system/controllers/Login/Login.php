<?php
/**
 * ����� ������������ ���
 * @created   by PhpStorm
 * @package   Login.php
 * @version   1.0
 * @author    Alex Jurii <jurii@mail.ru>
 * @link      http://alex.od.ua
 * @copyright ��������� ����� (C) 2000-2015, Alex Jurii
 * @date:     26.07.2015
 * @time:     0:46
 * @license   MIT License: http://opensource.org/licenses/MIT
 */

namespace controllers\Login;

use controllers\Controller\Controller;
use models\Login as model;


/**
 * Class Login
 * @package controllers\Login
 */
class Login extends Controller
{

    /**
     * ������������� ������� Mustache
     */
    public function __construct()
    {
        parent::init();
    }

    /**
     * �����
     */
    public function login() {
        $model = new model\Login();
        echo $this->mustache->render('login/login', $model);
    }

}