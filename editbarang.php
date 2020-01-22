<?php
include 'conn/connn.php';
$no_pesanan = $_GET['no_pesanan']; //get the no which will updated
$query = mysql_query("SELECT * FROM reservasi WHERE no_pesanan ='$no_pesanan'"); //get the data that will be updated
$data  = mysql_fetch_array($query);
?>
<form method="post" action="cedit.php">
<table width="500" border="0" cellpadding="2" cellspacing="2">
  <tr bgcolor="orange">
	<td height="21" colspan="3">
     <strong> Form Update</strong>
    </td>

  <tr>
  	<td width="23%"> no pesanan </td>
    <td width="2%">:</td>
    <td width="75%"> <input type="text" name="no_pesanan" disabled='disable' value="<?php echo $data['no_pesanan']; ?>"> </td>
  </tr>

  <tr>
  	<td>check in</td>
    <td>:</td>
    <td> <input type="date" name="check_in" value="<?php echo $data['check_in']; ?>"> </td>
  </tr>

  <tr>
  	<td>check out</td>
    <td>:</td>
    <td> <input type="date" name="check_out" value="<?php echo $data['check_out']; ?>"></td>
  </tr>
<tr>

  <tr>
    <td>jumlah</td>
    <td>:</td>
    <td> <input type="text" name="jumlah" value="<?php echo $data['jumlah']; ?>"></td>
  </tr>
<tr>

  <tr>
    <td>type kamar</td>
    <td>:</td>
    <td> <input type="date" name="type_kamar" value="<?php echo $data['type_kamar']; ?>"></td>
  </tr>
<tr>

  	<td></td> <td></td> <td> <input type="hidden" name="no_pesanan" value="<?php echo $data['no_pesanan']; ?>">
  	<input type="SUBMIT" name="SUBMIT" value="Save"></td>
  </tr>
</table>
</form>