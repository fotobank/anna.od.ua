<?php
require( __DIR__ . '/inc/config.php' ); // ����� ������, ����������, ����������� ����, ���������� ������, ���� �������
require( __DIR__ . '/inc/head.php' );
require( __DIR__ . '/inc/carosel.php' );
require( __DIR__ . '/inc/file_news.php' );


$db->orderBy( 'position', 'ASC' );
$categorii = $db->get( 'index_menu', Null, [ 'id', 'name_head' ] );

?>

	<!--==============================content================================-->
<section>
<div class="tabs clearfix">
		<table class="text-head-laitbox">
			<tbody>
			<tr>
				<td class="header" style="text-align: right;">
					<span class="phone"><a onclick="goog_report_conversion('tel: 067-76-84-086')" href="#">(067)-76-84-086</a></span><br>
					<a href="<?=$_SERVER['HTTP_HOST']?>/portfolio.php#tab-1">��������� ����������</a>,
					<a href="<?=$_SERVER['HTTP_HOST']?>/portfolio.php#tab-3">��������� ����������</a>, ������, ��������� ����
				</td>
			</tr>
			<tr>
				<td>
					<div id="slide">
						<?
						/** �������� �� ������� � ����� */
						if ( $razdel == '/index.php' ) {
							$slides = glob( 'files/slides/*.jpg' ); // ������������ ��� �������������
							$items  = '<div id = "owl-head" class="owl-carousel owl-theme">';
							$pags   = "<div class='owl-head-pags-hide'><div class='owl-head-pags'>";
							$i      = 1;
							foreach ( $slides as $key => $slide ) {
								$items .= "<div class='item'><img src='/" . $slide . "'
								alt='��������� �������� ��������� ����, ��������� ���������� � ������'></div>";
								$pags .= "<div class='owl-dot' ><strong>0</strong>{$i}</div>";
								$i ++;
							}
							$items .= '</div>';
							$pags .= '</div></div>';
							echo( $items );
							echo( $pags );
						}
						?>
					</div>
				</td>
			</tr>
			</tbody>
		</table>

			<div class="col-1">

				<div class="h-mod">
				<h2 class="bb1">�������:</h2>
				</div>
				<?= new ajaxSite_EditTitle( $categorii ) ?>


			</div>

			<div class="col-2">
				<div class="h-mod">
				<h3 class="bb1">������� � �������:</h3>
				</div>
				<div id="list-content"></div>

				<!--<div class="block_wrapper_body">
					<div class="block_wrap block_rounded">
						<h4>� ��������</h4>
						<img src="files/slides/slide-3.jpg">
						<p id="tab-1-1" class="edit-txt">������������ ������� � ���, ��� ��� ����� ������ �������� � ��������� ��������
							����� ������� �����. ������������ ������� ��� ������������ ����. ������� � ������ ������
							����� ����� ��������� ������� ������������ ��������� ��������, ����� ��������� ������������
							�� ���� ��������� �� ����� � ����� �����������, ������ ��������������� � � ������� � ������
							����. ��� ����, ��� ���������� ���������, ������� ������� � ��� ������� ���������������,
							������� ��� �������� ����������. �� ����� ���������� ������� � ��������� ��� �������������
							��� � ����������� ������.</p>
						<br />
						<a href="http://www.aleks.od.ua">aleks.od.ua</a>
					</div>
				</div>-->
				<?

				?>
				<div class="block_wrapper_body">
					<ul>
						<li class="block_body">

							<ul class="block_wrap block_rounded">
								<li>
									<h4>� ��������</h4>
								</li>
								<li>
									<div class="focal-point border">
										<div><img src="files/slides/slide-3.jpg" alt=""></div>
									</div>
								</li>
								<li>
									<p id="tab-1-1" class="edit-txt">���� ����� ��������� ����, � ���������������� ��������, ���� � ������� � ������. � ��������������� �� ���������� ��������� ���������� � ������, � � �������� ���������� ��������� ������� ��� ����� 10 ���. ������� ����� ������� � ��������� ������������, ��������, ������� ����������, ��������� � ����������� ����������. ��������������� ������ � ������, �� ������� � �� �������.
										��� ��������� ��������� ���������� � ������ ���������� ������� 067-76-84-086. � �������� ������ �� ��� ���� �������, ��������������� �� ������������ � ����������� ����������, ������ ��� ���������� ������� � ��������� ����������, ������������ ���������� ��� � ��������� ����������, ������ ���������� ��� ��������� ����������.
									</p>
								</li>
								<li class="bb1 mbm">
								</li>
								<li>
									<a href="http://www.aleks.od.ua">aleks.od.ua</a>
								</li>
							</ul>
						</li>
						<li class="block_body">
							<ul>
								<li>
									<div class="focal-point border">
										<?= if_admin( '<div class="actions">
							<a href="#" title="�������� ��� �������� ����� ����." class="edit">Edit</a>
							<a href="#" title="������� ������ �� ���� ������ ��� ����������� ��������������." class="delete">Delete</a>
							</div>' ) ?>
										<div><img src="files/slides/slide-2.jpg" alt=""></div>
									</div>
								</li>
								<li>
									<div class="focal-point border">
										<?= if_admin( '<div class="actions">
							<a href="#" title="�������� ��� �������� ����� ����." class="edit">Edit</a>
							<a href="#" title="������� ������ �� ���� ������ ��� ����������� ��������������." class="delete">Delete</a>
							</div>' ) ?>
										<div><img src="files/portfolio/06_��������/002.jpg" alt=""></div>
									</div>
								</li>
								<li>
									<div class="focal-point border">
										<div><img src="files/slides/slide-3.jpg" alt=""></div>
									</div>
								</li>
								<li>
									<div class="focal-point border">
										<div><img src="files/slides/slide-3.jpg" alt=""></div>
									</div>
								</li>
								<li>
									<div class="focal-point border">
										<div><img src="files/slides/slide-2.jpg" alt=""></div>
									</div>
								</li>
							</ul>
						</li>
						<li class="block_body">
							<ul class="block_wrap block_rounded">
								<li><h4>� ��������</h4></li>
								<li>
									<div class="focal-point border">
										<div><img src="files/slides/slide-1.jpg" alt=""></div>
									</div>
								</li>
								<li>
									<p id="tab-1-2" class="edit-txt">������������ ������� � ���, ��� ��� ����� ������ �������� � ��������� �������� ����� ������� �����. ������������ ������� ��� ������������ ����. ������� � ������ ������ ����� ����� ��������� ������� ������������ ��������� ��������, ����� ��������� ������������ �� ���� ��������� �� ����� � ����� �����������, ������ ��������������� � � ������� � ������ ����.

										��� ����, ��� ���������� ���������, ������� ������� � ��� ������� ���������������, ������� ��� �������� ����������. �� ����� ���������� ������� � ��������� ��� ������������� ��� � ����������� ������.</p><br/></li>
								<li><a href="http://www.aleks.od.ua">aleks.od.ua</a></li>
							</ul>
						</li>
					</ul>
				</div>


				<div id="tab-1" class="tab-content">

					<p id="tab-1-1" class="edit-txt bb1">������������ ������� � ���, ��� ��� ����� ������ �������� � ��������� ��������
						����� ������� �����. ������������ ������� ��� ������������ ����. ������� � ������ ������
						����� ����� ��������� ������� ������������ ��������� ��������, ����� ��������� ������������
						�� ���� ��������� �� ����� � ����� �����������, ������ ��������������� � � ������� � ������
						����. ��� ����, ��� ���������� ���������, ������� ������� � ��� ������� ���������������,
						������� ��� �������� ����������. �� ����� ���������� ������� � ��������� ��� �������������
						��� � ����������� ������.</p>

				</div>
				<div id="tab-2" class="tab-content">

					<p id="tab-2-1" class="edit-txt bb1">��������� ��� �����������, ����� � ���������� ����������� � ���������� ��������. � �����
						������ � ����������� ������ ��������� �������� ��������: c��������, �������� (����������),
						�������(������, ��������, ��� ��������), ��������(�����,�����������) � ��. � ������� ��
						�������� �����������, ��������� �������� ����� �������������� � ��� ���������� ��������
						������� ������ ����������� � ����� ��� ������ ���� �������� ��� � ����� ������ ���������
						��������������, �������������� �� � ���������. �� ������ �������� � ���� ������������
						��������� � �� ����� �������� ����������. ��� ��� ����� ���������� ���� ������������ ��� ��
						� �������� ���� ��� � ���� ����������. </p>

				</div>
				<div id="tab-3" class="tab-content">

					<p id="tab-3-1" class="edit-txt bb1">����������� ������ � ��������, ������ � ������������. ������������ ���������� ������ ��������
						�� DVD.
						����� �������� ������������ ����� - ��� �� ��������� ���������� ����������. ��� ������
						������ ������ �� ������ ��������������� ���������� ������������.</p>

				</div>
				<div id="tab-4" class="tab-content">

					<p id="tab-4-1" class="edit-txt bb1">� ������� ��������������� ���������� � �������� � ������������ �� �������������� ����������,
						���������� � ������ ������� ������� � �� �������. ������� ���������� ���������� �����������
						��� ������ ������� ��� �� ��������.</p>

				</div>
				<div id="tab-5" class="tab-content">

					<p id="tab-5-1" class="edit-txt bb1">��������� �������� ������ �����. � �����, �� ���� ��� ������ � ��� ����. �������� ������ ��
						������ ����, ���� ���� ����� ���������� ����� ������ � ���� ����� ��������� ��� �� �������.
						������� � ������������� �� ����������. :) ��� �� � ������ ��������� � ������� ����� � �����
						�������� ��� ����������� �������� ����.</p>

				</div>
				<div id="tab-6" class="tab-content">

					<p id="tab-6-1" class="edit-txt bb1">���������� ������ �� ��������, ������� ��� � ������. ��� �������� ��� ������� � �� �������
						���� � ����������. ���������� ������ �������������� � �������������, ���������� �������,
						�������� � ������ ������, � ��� �� ���������� ����� ���������� � ������������ ��������������
						�������� ������. ����� ����� ���������� ��������, ����� ������� �� ����������� � �����������
						����������. ���� � ��� �� �������������� ���������� � �� �������� ��� ��� ������� ��������,
						���������� �� ���������� � �� "������ ����". � ���� ������ ������ ���������� ��������
						��������������, ������������� � ������. �������� �� ��������, ����� �� � ����������
						���-�-��� ���������� ������������ � ������� � ���-�� ��������� � ��������, � ��� ���
						�������� ��� ��������� ��� ������ ��������� � ����� �����.</p>

				</div>
				<div id="tab-7" class="tab-content">

					<p id="tab-7-1" class="edit-txt bb1">������ � ��������� ������� � ������� �������� ��������, ������ ��� ������ �������� ����������
						����� � �����, ��� ���������� ����� ������ ��� ���������� ��� � �� ���������. </p>

				</div>

			</div>

			<!--==============================�������================================-->
			<div class="col-3">

				<div class="h-mod">
				   <h3 class="bb1">����� � �������:</h3>
				</div>
				<div class="clock-container">
					<div class="clock">
						<div id="Date"></div>
						<ul>
							<li id="hours"> </li>
							<li id="point">:</li>
							<li id="min"> </li>
							<li id="point">:</li>
							<li id="sec"> </li>
						</ul>

					</div>
				</div>
				<?= get_filenews( "news.txt" ) ?>

			</div>

        <div class="clear"></div>
		<div id='new-gal'><?= carousel() ?></div>

	<!--<script>
		$(document).ready(function () {

			 $('.list-categorii li').mouseup('li',function(){
			 $('.actions').attr('display', 'block');
			 });
		});
	</script>-->
</div>
	</section>

<? include_once( __DIR__ . '/inc/footer.php' ); ?>