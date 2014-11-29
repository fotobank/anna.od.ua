<?php
defined('_SECUR') or die('������ ��������');
require_once (__DIR__. "/../inc/sitemap_generator.php");

// $minimized->logs(); // ���� ������������ css

if(DEBUG_MODE == false) {
echo
	"<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-49928883-2', 'auto');
		ga('send', 'pageview');
		ga('set', '&uid', {{$_COOKIE['PHPSESSID']}}); // ������� �������������� ������������ � ������� ��������� user_id (������� ������������).
	</script>";

}

echo "<footer>";
if(DEBUG_MODE == true) {
$bench->end();
echo "�����: ".$bench->getTime()." / ";
echo "������ �������: ".$bench->getMemoryPeak()." / ";
echo "������ ��������: ".$bench->getMemoryUsage()."<br>";
}
echo "
<span><strong>� ".auto_copyright('2011')." ��������� ����</strong><br>
������ <a target='_blank' href='http://www.aleks.od.ua' class='link-2'>Creative ls</a></span></footer>
</body>
</html>";
ob_end_flush();