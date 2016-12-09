<?php 

session_start();

require_once ('dompdf\lib\dompdf\dompdf_config.inc.php');

$dompdf = new DOMPDF();

$table = $_SESSION['prints']['pdf'];

ob_start();

?>

<style>th, td {background-color: black; color: white; font-weight: bold; text-align: center; margin-left: 50px; margin-top: 50px;}</style>

<?php

echo $table;

$out = ob_get_contents();

ob_end_flush();

function generate_pdf($filename){

	global $dompdf;

	$dompdf->load_html(file_get_contents($filename));
	$dompdf->render();
	$dompdf->stream(($filename. ".pdf"), array("Attachment" => 0));

}

file_put_contents('reportePDFdef.html', $out);

generate_pdf('reportePDFdef.html');

?>