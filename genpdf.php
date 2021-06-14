<?php
$pdf=$_POST['pdf'];


require 'fpdf/fpdf.php';


$servername="localhost";
$username="root";
$password="Jithu_root9";
$dbname="db_club_mang";
$conn=new mysqli($servername,$username,$password,$dbname);
    //check connection
    if($conn->connect_error)
    {
        die("error,could'nt connect".$conn->connect_error);
    }

    $sql="SELECT * FROM `tbl_event_reg` WHERE `item`='$pdf'";
    $result=$conn->query($sql);

class PDF extends FPDF
{
//Page header
function Header()
{
    //Logo
    // $this->Image('images/o2.png',10,8,33);
    //Arial bold 15
    $this->SetFont('Arial','B',14);
    //Move to the right
    $this->Cell(50);
    //Title
    $this->Cell(100,10,'CAPITOL ARTS & SPORTS CLUB ',1,0,'C');

    //Line break
    $this->Ln(10);
    $this->Ln();
    $this->SetFont('Arial','B',10);
    $this->Cell(65);
    $this->Cell(60,5,'Event Report',1,0,'C');
    
    $this->Ln();
    $this->Cell(65);
    $this->Cell(60,5,$_POST['pdf'],1,0,'C');
    $this->Ln(20);
}


//Page footer
function Footer()
{
    //Position at 1.5 cm from bottom
    $this->SetY(-15);
    //Arial italic 8
    $this->SetFont('Arial','I',8);
    //Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
   
}
}


//Instanciation of inherited class

$pdf=new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);

$pdf->Cell(50);
$pdf->Cell(20,10,'ID',1,0,'C');
$pdf->Cell(20,10,'NAME',1,0,'C');

$pdf->Cell(40,10,'PHONE NUMBER',1,0,'C');
$pdf->Ln();
if($result->num_rows > 0){
    $i=1;
    while($row = $result->fetch_assoc()){
        $pdf->Cell(50);
        //$pdf->Cell(20,10,$row["id"],1,0,'C');
        $pdf->Cell(20,10,$i,1,0,'C');
        $i++;
        $pdf->Cell(20,10,$row["name"],1,0,'C');
        
        $pdf->Cell(40,10,$row["phone_no"],1,0,'C');
        $pdf->Ln();
    }
}
$pdf->Ln(10);
$pdf->Cell(10,10,"---------------------------------------------------------------------------------------------------------------------------------------");
$pdf->Output();
?>