<?php
include "conn/conn.php";
 $username = $_GET['username']; //get the no which will deleted
 
//query for update data in database
 $query = "DELETE from login WHERE username = '$username'" ;
 $hasil = mysql_query($query);
 //see the result
 if ($hasil) {
    include "dataregist.php";
	echo "<script>alert('Delete data success')";
}
?>