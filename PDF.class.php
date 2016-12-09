<?php

require_once ('dompdf\lib\dompdf\dompdf_config.inc.php');

class PDF{

	private $dompdf;

	public function PDF(){

		$this->dompdf = new DOMPDF();

	}

	public function generarPDF($htmlToRender){

		$this->dompdf->load_html($htmlToRender);

		$this->dompdf->render();

		$this->dompdf->stream(("lista.pdf"), array("Attachment" => 0));

	}

}


?>