<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pdfs extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('pdfs_m');
    }

    public function index() {
        //$data['provincias'] llena el select con las provincias españolas
        $data['provincias'] = $this->pdfs_m->getProvincias();
        //cargamos la vista y pasamos el array $data['provincias'] para su uso
        $this->load->view('pdfs_view', $data);
    }

//Función para generar el PDF   
    public function generar() {
        $this->load->library('Pdf');
        $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
        $pdf->SetProtection(array('print', 'copy', 'modify'), 'password', 'superpass', 0, null);
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Diego Sanchez');
        $pdf->SetTitle('Ejemplo de provincías con TCPDF');
        $pdf->SetSubject('Crear PDF con TCPDF');
        $pdf->SetKeywords('TCPDF, PDF, example, test, guide');

//Ponemos lo que va a ir en el header y footer        
        $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE . ' 001', PDF_HEADER_STRING, array(0, 64, 255), array(0, 64, 128));
        $pdf->setFooterData($tc = array(0, 64, 0), $lc = array(0, 64, 128));

        $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);


//Establecer el modo de fuente por defecto
        $pdf->setFontSubsetting(true);

//Tipo de letra
        $pdf->SetFont('freemono', '', 14, '', true);

// Añadir una página
        $pdf->AddPage();

//Un efecto de sombra al texto
        $pdf->setTextShadow(array('enabled' => true, 'depth_w' => 0.2, 'depth_h' => 0.2, 'color' => array(196, 196, 196), 'opacity' => 1, 'blend_mode' => 'Normal'));

//Mandamos a llamar todo lo que vamos a imprimir
        $provincia = $this->input->post('provincia');
        $provincias = $this->pdfs_m->getProvinciasSeleccionadas($provincia);
        foreach ($provincias as $fila) {
            $prov = $fila['p.provincia'];
        }

        $html = '';
        $html .= "<style type=text/css>";
        $html .= "table{width: 100%; font-size: 11pt; align-content: center;}";
        $html .= "table, th, td{border: 3px groove #cecece; border-collapse: collapse; text-align: center;}";
        //$html .= "th{color: #fff; font-weight: bold; background-color: #aaa}";
        //$html .= "td{background-color: #000; color: #fff}";
        $html .= "</style>";
        $html .= "<h2>Localidades de " . $prov . "</h2><h4>Actualmente: " . count($provincias) . " localidades</h4>";
        $html .= "<table width='100%'>";
        $html .= "<tr><th>Id localidad</th><th>Localidades</th></tr>";

        foreach ($provincias as $fila) {
            $id = $fila['l.id'];
            $localidad = $fila['l.localidad'];

            $html .= "<tr><td class='id'>" . $id . "</td><td class='localidad'>" . $localidad . "</td></tr>";
        }
        $html .= "</table>";

$pdf->SetLineWidth(2);



// draw jpeg image
$pdf->Image('images/faro.jpg', 90, 100, 60, 60, '', 'http://www.tcpdf.org', '', true, 72);

// restore full opacity
$pdf->SetAlpha(1);
        
//Imprimimos el texto con writeHTMLCell()
        
       
        //$pdf->Image('images/Imagen1.png', 50, 50, 100, '', '', 'www.invirtualweb.com', '', true, 300);
        $pdf->writeHTMLCell($w = 0, $h = 0, $x = '', $y = '', $html, $border = 0, $ln = 1, $fill = 0, $reseth = true, $align = '', $autopadding = true);
        


//Terminamos el documento PDF para su descarga
        $nombre_archivo = utf8_decode("Localidades de " . $prov . ".pdf");
        $pdf->Output($nombre_archivo, 'I');
    }

//Función para subir el archivo seleccionado    
    public function upload() {
        $target_path = 'sources/fonts/';
        $target_path = $target_path . basename($_FILES['uploadedfile']['name']);
        if ($_FILES['uploadedfile']['type'] == "image/jpeg" || $_FILES['uploadedfile']['type'] == "application/pdf" 
                && $_FILES['uploadedfile']['size']<5000) {
            if (move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
                echo "El archivo " . basename($_FILES['uploadedfile']['name']) . " ha sido subido";
            } else {
                echo "Ha ocurrido un error, trate de nuevo!";
            }
        } else {
            echo"Tipo de archivo no aceptado o excedio el limite del tamaño del archivo";
        }
    }
    
    public function generarmpdf(){
        $mpdf = new \Mpdf\Mpdf();

       $mpdf->SetProtection(array('copy', 'print', 'modify'), 'password', 'superpass');

       $mpdf->WriteHTML('www.invirtualweb.com');
       $mpdf->WriteHTML('<b>Me puedo copiar?</b>');

       // Output a PDF file directly to the browser
       $mpdf->Output();
    }

}
