<?php
require('mysql_table.php');

class PDF extends PDF_MySQL_Table
{
function Header()
{
	//Title
	$this->SetFont('Arial','',22);
	$this->Cell(0,10,'MAKE Play',0,1,'C');
	$this->Ln(10);
	//Ensure table header is output
	parent::Header();
}
}

// Fazemos o include do arquivo com as config do banco de dados
include "mysqlconfig.php"; 
// Executa a cláusula SQL

$pdf= new PDF();
$pdf->AddPage();
//Second table: specify 3 columns
$pdf->Image('favicon.png' ,70,7,15,15, 'PNG', 'http://makeplay.com.br/');
$pdf->AddCol('id',10,'','C');
$pdf->AddCol('nome',60,'nome','C');
$pdf->AddCol('usuario',35,'','C');
$pdf->AddCol('email',65,'','C');
$pdf->AddCol('acesso',25,'','C');

$prop=array('HeaderColor'=>array(135,206,250),
			'color1'=>array(235,235,255),
			'color2'=>array(248,248,255),
			'padding'=>2);
$pdf->Table('select id,  nome, usuario, email, acesso from usuarios order by nome limit 0,10',$prop);


$pdf->Output($downloadfilename.".pdf"); 
header('Location: '.$downloadfilename.".pdf");
?>
