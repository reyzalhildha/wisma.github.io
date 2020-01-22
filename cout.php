<?php 
//memanggil Koneksi
mysql_connect("localhost", "root", "") or die (mysql_error());
mysql_select_db("db_wisma") or die (mysql_error());
//membuat variabel
$no_pesanan         = $_POST['no_pesanan'];
$stock              = $_POST['stock'];
//Kemudian dapat langsung kita simpan dengan query INSERT
$sql = mysql_query ("insert into keluar (no_pesanan,stock) value ('$no_pesanan','$stock')") or die(mysql_error()); 
if($sql)
{
    ?>
        <script type="text/javascript">
        window.location.href="admin.php";
        </script>
    <?php
}else
{
        ?>
        <script type="text/javascript">
        alert("Gagal Menyimpan Data");
        window.location.href="checkout.php";
        </script>
    <?php

}
?>