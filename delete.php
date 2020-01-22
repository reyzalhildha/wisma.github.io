<?php
include "conn/conn.php";
 $no = $_GET['no_ktp']; //get the no which will deleted
 
//query for update data in database
 $query = "DELETE from tb_tamu WHERE no_ktp = '$no'" ;
 $hasil = mysql_query($query);
 //see the result
 if ($hasil) {
    include "databook.php";
	echo "<script>alert('Delete data success')";
}
?>