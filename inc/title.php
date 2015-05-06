<?php
/**
 * Created by PhpStorm.
 * User: Jurii
 * Date: 16.07.14
 * Time: 9:54
 */
defined( '_SECUR' ) or die( '������ ��������' );
/**
 * @return array
 */
function title() {
	/** -----------------------------$razdel ��� �������� �������� ����----------------------------*/
	$razdel = isset( $_SERVER['PHP_SELF'] ) ? $_SERVER['PHP_SELF'] : "/index.php";


	switch ( $razdel ) {
		case '/index.php':
			$title       = '�������� � ������, ��������� ���������� | ���� ��������� ���������� ����';
			$keywords    = "��������� ����, ��������, ������, �������, ������, ��� �������, ���������, ��������";
			$description = "���������������� �������� � ������ ��������� ���� | ������ ������, ��������, ������������, ������ � ������. ������ � ������ �������� �  �������� ��������. �������������� ������ � �������� ��������.";
			break;

		case '/about.php':
			$title       = '�������� � ������, ��������� ���������� | ���������������� �������� ��������� ����';
			$keywords    = "��������� ����, ��������, ������, �������, ������, ��� �������";
			$description = "���������������� �������� � ������ ��������� ���� | ������� � ����, ������������, ������ � ��������";
			break;

		case '/portfolio.php':
			$title       = '��������� ���� | ���������';
			$keywords    = "��������� ����, ��������, ������, �������, ������, ��� �������";
			$description = "���������������� �������� � ������ ��������� ���� | ���������, �������, �������, ����, ��������� - ������ � ������";
			break;

		case '/services.php':
			$title       = '��������� ���� | ������';
			$keywords    = "��������� ����, ��������, ������, �������, ������, ��� �������";
			$description = "���������������� �������� � ������ ��������� ���� | ������, ����������� ������, ������� � ����, ���������� ����������";
			break;

		case '/news.php':
			$title       = '��������� ���� | �������';
			$keywords    = "��������� ����, ��������, ������, �������, ������, ��� �������";
			$description = "���������������� �������� � ������ ��������� ���� | �������, �������� ������ � �����, ���������� ����������";
			break;

		case '/comments.php':
			$title       = '��������� ���� | ��������';
			$keywords    = "��������� ����, ��������, ������, �������, ������, ��� �������";
			$description = "���������������� �������� � ������ ��������� ���� | ������ � ���� ������";
			break;

		default:
			$title       = '�������� � ������, ��������� ���������� | ���� ��������� ���������� ����';
			$keywords    = "��������� ����, ��������, ������, �������, ������, ��� �������, ���������, ��������";
			$description = "���������������� �������� � ������ ��������� ���� | ������ ������, ��������, ������������, ������ � ������. ������ � ������ �������� �  �������� ��������. �������������� ������ � �������� ��������.";
			break;

	}

	return [ $razdel, $title, $keywords, $description ];
}