<?php
defined( '_SECUR' ) or die( '������ ��������' );
require_once( __DIR__ . "/../inc/sitemap_generator.php" );
require( __DIR__ . '/social_icons.php' );
require( __DIR__ . '/online_widget.php' );


//������ �������� ����
?>
	<script type='text/javascript' src='/js/menu.js'></script>

<footer>
<!--==============================�������================================-->
<div class='social'>
				<div class="h-mod w100">
				<h3 class="bb1 fleft w100">���������� � ��������:</h3>
					<?
if ( DEBUG_MODE == true ) {
	$bench->end();
	echo "<span class='texno'>�����: " . $bench->getTime() . " / ";
	echo "������ �������: " . $bench->getMemoryPeak() . " / ";
	echo "������ ��������: " . $bench->getMemoryUsage() . "</span>";
}
?>
				</div>
		<?= social_icons() . online_widget() ?>
</div>

<!-- ==========================��������==================================-->
<div class='container'>

	<span class="copirait"><strong>� <?= auto_copyright( '2011' ) ?> ��������� ���� </strong></span><br>
	<span> c�����&nbsp;&nbsp; <a target='_blank' href='http://www.aleks.od.ua' class='link-2'>Creative ls</a></span>

</div>
</footer>
<?
if ( DEBUG_MODE == false ) { include (__DIR__ . "/inc.foter.google.php"); }
?>
</body>
</html>
<?
ob_end_flush();