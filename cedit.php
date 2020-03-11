<?php
include "conn/connn.php";
//get the value from form update
 $check_in		= $_POST['check_in'];
 $check_out 	= $_POST['check_out'];
 $jumlah		= $_POST['jumlah'];
 $type_kamar	= $_POST['type_kamar'];
 $no_pesanan	= $_POST['no_pesanan'];

//query for update data in database
 $query = "UPDATE reservasi SET check_in = '$check_in', check_out = '$check_out' , jumlah = '$jumlah' , type_kamar = '$type_kamar' WHERE no_pesanan = '$no_pesanan'" ;
 $hasil = mysql_query($query);
 //see the result
 if ($hasil) {
    include "databook.php";
	
}
?>