<?php
require( __DIR__ . '/inc/config.php' ); // ����� ������, ����������, ����������� ����, ���������� ������, ���� �������
require( __DIR__ . '/inc/head.php' );
require( __DIR__ . '/inc/carosel.php');

/* ��� ����� - ����� ������ � �������� /files */
// showTree("./files", "");
// debugHC(SITE_PATH, 'test');
// Inter_Error::var_dump('Test'); // ����� ����� ����������


// preg_match('/\[(?P<err_num>[\d]+)\]\s*(?P<date>[\d-]+)\s(?P<time>[\d:]+)/', $str, $matches);


// Inter_Error::var_dump('str','matches');

// include __DIR__ . "/inc/sinonim.php";

//v_dump('config');



?>
	<!--==============================content================================-->
	<section id="content">

	<div class="page1-row1 pad-1">
		<div class="col-1">
			<div id="TimerDiv"></div>
			<h3 class="p2"></h3>
		</div>
		<div class="col-2">
			<h3 class="bb2 p2">������� � ��������:</h3>
		</div>
	</div>
		<?
		echo carousel ();
		?>
	<div class="page1-row1 pad-1 tabs">
		<div class="col-1">
			<h3 class="bb2 p2">���������:</h3>
			<ul class="list-1 nav">
				<li class="selected"><a href="#tab-1">�������</a></li>
				<li><a href="#tab-2">���������</a></li>
				<li><a href="#tab-3">�������</a></li>
				<li><a href="#tab-4">�����</a></li>
				<li><a href="#tab-5">����</a></li>
				<li><a href="#tab-6">��������</a></li>
				<li><a href="#tab-7">�����</a></li>
			</ul>
		</div>
		<div class="col-2">
			<h3 class="bb2 p2">������� � �������:</h3>

			<div id="tab-1" class="tab-content">

					 <p id="tab-1-1" class="col-txt bb3">������������ ������� � ���, ��� ��� ����� ������ �������� � ��������� ��������
						����� ������� �����. ������������ ������� ��� ������������ ����. ������� � ������ ������
						����� ����� ��������� ������� ������������ ��������� ��������, ����� ��������� ������������
						�� ���� ��������� �� ����� � ����� �����������, ������ ��������������� � � ������� � ������
						����. ��� ����, ��� ���������� ���������, ������� ������� � ��� ������� ���������������,
						������� ��� �������� ����������. �� ����� ���������� ������� � ��������� ��� �������������
						��� � ����������� ������.</p>
				<p id="tab-1-2">������������ ������� � ���, ��� ��� ����� ������ �������� � ��������� ��������
					����� ������� �����. ������������ ������� ��� ������������ ����. ������� � ������ ������
					����� ����� ��������� ������� ������������ ��������� ��������, ����� ��������� ������������
					�� ���� ��������� �� ����� � ����� �����������, ������ ��������������� � � ������� � ������
					����. ��� ����, ��� ���������� ���������, ������� ������� � ��� ������� ���������������,
					������� ��� �������� ����������. �� ����� ���������� ������� � ��������� ��� �������������
					��� � ����������� ������.</p>
			</div>
			<div id="tab-2"  class="tab-content col-txt">

					<p id="tab-2-1">��������� ��� �����������, ����� � ���������� ����������� � ���������� ��������. � �����
						������ � ����������� ������ ��������� �������� ��������: c��������, �������� (����������),
						�������(������, ��������, ��� ��������), ��������(�����,�����������) � ��. � ������� ��
						�������� �����������, ��������� �������� ����� �������������� � ��� ���������� ��������
						������� ������ ����������� � ����� ��� ������ ���� �������� ��� � ����� ������ ���������
						��������������, �������������� �� � ���������. �� ������ �������� � ���� ������������
						��������� � �� ����� �������� ����������. ��� ��� ����� ���������� ���� ������������ ��� ��
						� �������� ���� ��� � ���� ����������. </p>

			</div>
			<div id="tab-3"  class="tab-content col-txt">

					<p id="tab-3-1">����������� ������ � ��������, ������ � ������������. ������������ ���������� ������ ��������
						�� DVD.
						����� �������� ������������ ����� - ��� �� ��������� ���������� ����������. ��� ������
						������ ������ �� ������ ��������������� ���������� ������������.</p>

			</div>
			<div id="tab-4"  class="tab-content col-txt">

					<p id="tab-4-1">� ������� ��������������� ���������� � �������� � ������������ �� �������������� ����������,
						���������� � ������ ������� ������� � �� �������. ������� ���������� ���������� �����������
						��� ������ ������� ��� �� ��������.</p>

			</div>
			<div id="tab-5"  class="tab-content col-txt">

					<p id="tab-5-1">��������� �������� ������ �����. � �����, �� ���� ��� ������ � ��� ����. �������� ������ ��
						������ ����, ���� ���� ����� ���������� ����� ������ � ���� ����� ��������� ��� �� �������.
						������� � ������������� �� ����������. :) ��� �� � ������ ��������� � ������� ����� � �����
						�������� ��� ����������� �������� ����.</p>

			</div>
			<div id="tab-6"  class="tab-content col-txt">

					<p id="tab-6-1">���������� ������ �� ��������, ������� ��� � ������. ��� �������� ��� ������� � �� �������
						���� � ����������. ���������� ������ �������������� � �������������, ���������� �������,
						�������� � ������ ������, � ��� �� ���������� ����� ���������� � ������������ ��������������
						�������� ������. ����� ����� ���������� ��������, ����� ������� �� ����������� � �����������
						����������. ���� � ��� �� �������������� ���������� � �� �������� ��� ��� ������� ��������,
						���������� �� ���������� � �� "������ ����". � ���� ������ ������ ���������� ��������
						��������������, ������������� � ������. �������� �� ��������, ����� �� � ����������
						���-�-��� ���������� ������������ � ������� � ���-�� ��������� � ��������, � ��� ���
						�������� ��� ��������� ��� ������ ��������� � ����� �����.</p>

			</div>
			<div id="tab-7"  class="tab-content col-txt">

					<p id="tab-7-1">������ � ��������� ������� � ������� �������� ��������, ������ ��� ������ �������� ����������
						����� � �����, ��� ���������� ����� ������ ��� ���������� ��� � �� ���������. </p>

			</div>
		</div>
		<!--==============================�������================================-->
		<div class="col-3">
			<h3 class="bb2 p2">����� � �������:</h3>
			<?
			$news = ( file_exists( "news.txt" ) ) ? file_get_contents( "news.txt" ) : '';
			$news = explode( "||", replaceBBCode( $news ) );
			for ( $i = 0; $i < count( $news ); $i ++ ) {
				$new = explode( "[]", $news[$i] );
				if ( count( $new ) > 0 ) {
					?>
					<div class="adr">
						<p class="title"><?= $new[0]; ?></p>
						<span class="clr-2"><?= isset( $new[1] ) ? $new[1] : ''; ?></span>
						<a href="/news.php" class="link-1 link-2-pad">��������</a>
					</div>
				<?
				}
			}
			?>
		</div>
	</div>
	<!--==============================�������================================-->
	<div class="page1-row1 pad-1">
		<div class="col-1">
			<h3 class="p2"></h3>
		</div>
		<div class="col-2">
			<div class="bot-1 clear"></div>
			<h3 class="bb3">���������� � ��������:</h3>

			<div class="soc-icons">
				<a onclick="window.open('http://vk.com/share.php?url=http://www.annafoto.in.ua//index.php','mywindow','width=500,height=500')"
				   title="��������� ���������" rel="nofollow" style="cursor: pointer;">
					<img src="images/icon-1.png" alt="">
					<span></span>
				</a>
				<a onclick="window.open('http://www.odnoklassniki.ru/dk?st.cmd=addShare&st._surl=http://www.annafoto.in.ua/index.php','mywindow','width=500,height=500')"
				   title="�����" rel="nofollow" style="cursor: pointer;">
					<img src="images/icon-2.png" alt="">
					<span></span>
				</a>
				<a onclick="window.open('http://www.facebook.com/sharer.php?u=http://www.annafoto.in.ua/index.php','mywindow','width=500,height=500')"
				   title="���������� �� Facebook" rel="nofollow" style="cursor: pointer;">
					<span></span>
					<img src="images/icon-3.png" alt="">
				</a>
			</div>
			<!-- widget -->
			<div class="onlineWidget">
				<div class="panel"><img class="preloader" src="inc/who_is_online/img/preloader.gif" alt="Loading.." width="22" height="22" /></div>
				<div class="count"></div>
				<div class="label">online</div>

				<div class="arrow"></div>
			</div>

		</div>
	</div>
	</section>

<?
include_once( __DIR__ . '/inc/footer.php' );
?>