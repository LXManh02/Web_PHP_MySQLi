<?php
	require('../../tfpdf/tfpdf.php');
	require('../../config/config.php');
	$logo_path = '../../../images/logo.png';
	$logo_path2 = '../../../images/logo2.png';
    $pdf = new tFPDF();
	 $pdf->AddPage("0");
	// $pdf->SetFont('Arial','B',16);
	//Add a Unicode font (uses UTF-8)
	$pdf->AddFont('DejaVu','','DejaVuSansCondensed.ttf',true);
	$pdf->SetFont('DejaVu','',16);
	
	$pdf->SetFillColor(0,255,255);
	//set header 
	$code = $_GET['code'];
	$sql_lietke_dh = "SELECT * FROM tbl_cart_details,tbl_sanpham WHERE tbl_cart_details.id_sanpham=tbl_sanpham.id_sanpham AND tbl_cart_details.code_cart='".$code."' ORDER BY tbl_cart_details.id_cart_details DESC";
	$query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);
	$pdf->Image($logo_path, 10, 10, 30); 
	$pdf->Image($logo_path2, 100, 0,110, 80,);
	$pdf->Write(80,'Đơn hàng của bạn gồm có:');
	$pdf->Ln(50);

	$width_cell=array(10,40,150,25,30,30);

	$pdf->Cell($width_cell[0],10,'STT',1,0,'C',true);
	$pdf->Cell($width_cell[1],10,'Mã đơn hàng',1,0,'C',true);
	$pdf->Cell($width_cell[2],10,'Tên sản phẩm',1,0,'C',true);
	$pdf->Cell($width_cell[3],10,'Số lượng',1,0,'C',true); 
	$pdf->Cell($width_cell[4],10,'Giá',1,0,'C',true);
	$pdf->Cell($width_cell[5],10,'Thanh tiền',1,1,'C',true); 
	$pdf->SetFillColor(255,255,255); 
	$fill=false;
	$i = 0;
	$tongtien=0;
	while($row = mysqli_fetch_array($query_lietke_dh)){
		$i++;
		$thanhtien=$row['soluongmua']*$row['giasp'];
		$tongtien += $thanhtien;
	$pdf->Cell($width_cell[0],10,$i,1,0,'C',$fill);
	$pdf->Cell($width_cell[1],10,$row['code_cart'],1,0,'C',$fill);
	$pdf->Cell($width_cell[2],10,$row['tensp'],1,0,'C',$fill);
	$pdf->Cell($width_cell[3],10,$row['soluongmua'],1,0,'C',$fill);
	$pdf->Cell($width_cell[4],10,number_format($row['giasp']),1,0,'C',$fill);
	$pdf->Cell($width_cell[5],10,number_format($thanhtien),1,1,'C',$fill);
	$fill = !$fill;
	
	}
	$pdf->AddFont('DejaVu','','DejaVuSansCondensed.ttf',true);
	$pdf->SetFont('DejaVu','',16);
	
	$pdf->Write(10,'Tổng tiền:'. number_format($tongtien,0,',','.').' VNĐ' );
	$requiredWidth = $pdf->GetStringWidth('Cảm ơn quý khách đã mua hàng của chúng tôi');
	$pdf->Cell($requiredWidth + 60, 30, 'Cảm ơn quý khách đã mua hàng của chúng tôi', 0, 1, 'C');
	$pdf->Ln(20);

	$pdf->Output(); 
?>