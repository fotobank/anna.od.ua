<?php
/**
 * Created by PhpStorm.
 * User: Jurii
 * Date: 05.08.14
 * Time: 22:39
 */

function social_icons() {

	$ret = '<div class="soc-icons">';
	$ret .= '<a onclick="window.open(\'http://vk.com/share.php?url=http://www.annafoto.in.ua//index.php\',\'mywindow\',\'width=500,height=500\')" ';
	$ret .= 'title="��������� ���������" rel="nofollow" style="cursor: pointer;">';
	$ret .= '<img src="/images/icon-1.png" alt=""><span></span></a>';
	$ret .= '<a onclick="window.open(\'http://www.odnoklassniki.ru/dk?st.cmd=addShare&amp;st.';
	$ret .= '_surl=http://www.annafoto.in.ua/index.php\',\'mywindow\',\'width=500,height=500\')" ';
	$ret .= 'title="���������� � ��������������" rel="nofollow" style="cursor: pointer;"><img src="/images/icon-2.png" alt=""><span></span></a> ';
	$ret .= '<a onclick="window.open(\'http://www.facebook.com/sharer.php?u=http://www.annafoto.in.ua/index.php\',\'mywindow\',\'width=500,height=500\')" ';
	$ret .= 'title="���������� �� Facebook" rel="nofollow" style="cursor: pointer;"><span></span>';
	$ret .= '<img src="/images/icon-3.png" alt=""></a></div>';

	return $ret;

}