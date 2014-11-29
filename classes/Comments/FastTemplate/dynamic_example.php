<?

// Example FastTemplate Dynamic Demo
// The dynamic example from the man page

Header("Content-type: text/plain");

include("class.FastTemplate.php3");
$tpl = new FastTemplate("./templates");
$start = $tpl->utime();

$tpl->define(
	array(
		main    => "main.tpl",
		table   => "dynamic.tpl"
	)
);

$tpl->define_dynamic ( "row", "table" );
$tpl->assign( array( TITLE => "FastTemplate Dynamic Test") );

for ($n=1; $n <= 3; $n++)
{
	$Number = $n;
	$BigNum = $n*10;

	$tpl->assign(
		array(
			NUMBER		=>	$Number,
			BIG_NUMBER	=>	$BigNum
		)
	);
	$tpl->parse(ROWS,".row");
}

$tpl->parse(MAIN, array("table","main"));
$tpl->FastPrint();
$end = $tpl->utime();
$run = $end - $start;
echo "Runtime [$run] seconds<BR>\n";
exit;
?>