<?php

if ( session_id() == '' )
	session_start();
header( 'Content-type: text/html; charset=windows-1251' );

/**
 * Class ajaxSite_EditTitle
 */
class ajaxSite_EditTitle {

	private $data;

	/**
	 * @param $par
	 */
	public function __construct( $par ) {

		if ( is_array( $par ) )
			$this->data = $par;
	}


	/**
	 * @return string
	 */
	public function __toString() {

		$ul = '<ul class="list-title">';
		foreach ( $this->data as $row ) {
			$ul .= self::new_li_title( $row );
		}
		$ul .= '</ul>';
		$ul .= if_admin( '<a id="addButton" class="support-hover" tabindex="1" title="�������� ������"><em>+</em></a>
		     <div id="dialog-confirm" title="������� ������?">
		     <span>������ ����� ������� �� ���� ������!</span>
		     </div>'
		);

		return $ul;
	}

	/**
	 * @param $li_data
	 *
	 * @return string
	 */
	public static function new_li_title( $li_data ) {

		return '
			<li id="head-' . $li_data['id'] . '">
				<a href="#tab-' . $li_data['id'] . '" class="navlink" ' .
		if_admin( 'title="������� ������ ��� ��������������."' ) . '>' . $li_data['name_head'] . '</a>' .
		if_admin( '<div class="actions">
							<a href="#" title="�������� ��� �������� ����� ����." class="edit">Edit</a>
							<a href="#" title="������� ������ �� ���� ������ ��� ����������� ��������������." class="delete">Delete</a>
						</div>' ) .
		'</li>';
	}


	/**
	 * @return object
	 */
	protected static function db() {
		return Mysqli_Db::getInstance( Mysqli_Db::get_param() );
	}

	/**
	 * @param $txt_err
	 *
	 * @throws Exception
	 */
	protected static function if_error( $txt_err ) {

		if ( self::db()->getLastError() != '&nbsp;&nbsp;' ) {
			throw new Exception( $txt_err . " " . self::db()->getLastError() );
		}

	}

	/**
	 * ��������������� ����������� ������ ��������
	 * ���������������, ��� ������������� �������� �������.
	 */

	/**
	 * @param $id
	 * @param $text
	 *
	 * @throws Exception
	 */
	public static function edit( $id, $text ) {

		$text = self::esc( $text );
		if ( !$text ) throw new Exception( "������������ ����������� �����!" );

		$value = [
			'name_head' => $text,
			'edit_id'    => isset( $_SESSION['id'] ) ? $_SESSION['id'] : 0
		];
		self::db()->where( "id", $id );
		self::db()->update( "index_menu", $value );

		self::if_error( "�� ���� �������� �����!" );
	}


	/**
	 * @param $id
	 *
	 * @throws Exception
	 */
	public static function delete( $id ) {

		self::db()->where( "id", $id );
		self::db()->delete( "index_menu" );

		self::if_error( "�� ���� ������� �����!" );
	}

	/**
	 * ����� ��������� ������� ����������, ����� ����������
	 *  ������������. ��������� �������� �������, �������
	 * �������� �������������� ������������ � ����� �������.
	 *
	 * @param $key_value
	 *
	 * @throws Exception
	 */
	public static function rearrange( $key_value ) {

		$strVals = [ ];
		foreach ( $key_value as $k => $v ) {
			$strVals[] = 'WHEN ' . (int) $v . ' THEN ' . ( (int) $k + 1 ) . PHP_EOL;
		}
		if ( !count( $strVals ) ) throw new Exception( "��� ������!" );

		// �� ���������� �������� CASE SQL ��� ��������� ���������� ������� ���������:

		/*mysql_query("	UPDATE index_menu SET position = CASE id
						".implode ($strVals)."
						ELSE position
						END");*/

		self::db()->rawQuery( "UPDATE index_menu SET position = CASE id " . implode( $strVals ) . " ELSE position END" );

		self::if_error( "������ ���������� �������!" );
	}


	/**
	 * ����� createNew ��������� ������ �����,
	 * ����� � Datab�se � ������� ����� ��������� �� ��������
	 * ������� � ������� AJAX.
	 *
	 * @param $text
	 *
	 * @throws Exception
	 */
	public static function createNew( $text ) {

		$text = self::esc( $text );
		if ( !$text ) throw new Exception( "������������ ���� ������!" );

//		$position = $db->rawQuery("SELECT MAX(position)+1 FROM index_menu");

		$position = self::db()->getOne( "index_menu", "MAX(position)+1 as maxPosition" );


		if ( !$position['maxPosition'] ) $position['maxPosition'] = 1;

		$values = [
			'name_head' => $text,
			'position'  => $position['maxPosition'],
			'edit_id'    => isset( $_SESSION['id'] ) ? $_SESSION['id'] : 0

		];
		self::db()->insert( "index_menu", $values );

		self::if_error( "������ ������� �����!" );

		echo( self::new_li_title(
			[
				'id'        => self::db()->getInsertId(),
				'name_head' => $text
			]
		)
		);

		exit;
	}


	/**
	 * A helper method to sanitize a string:
	 *
	 * @param $text
	 *
	 * @return mixed|string
	 */
	public static function esc( $text ) {

		$text = cp1251( preg_replace( '/[\n\t]{1,}/i', '', nl2br( cleanInput( $text ) ) ) );
		return $text;
	}

}