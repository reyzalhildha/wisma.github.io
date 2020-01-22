<?php 
//memanggil Koneksi
session_start();
mysql_connect("localhost", "root", "") or die (mysql_error());
mysql_select_db("db_wisma") or die (mysql_error());
//membuat variabel
$no_ktp             = $_POST['no_ktp'];
$no_pesanan         = $_POST['no_pesanan'];
$check_in           = $_POST['check_in'];
$check_out          = $_POST['check_out'];
$jumlah             = $_POST['jumlah'];
$type_kamar         = $_POST['type_kamar'];
//Kemudian dapat langsung kita simpan dengan query INSERT
$sql = mysql_query ("insert into reservasi (no_ktp,no_pesanan,check_in,check_out,jumlah,type_kamar) value ('$no_ktp','$no_pesanan','$check_in','$check_out','$jumlah','$type_kamar')") or die(mysql_error()); 
if($sql)
{
    ?>
        <script type="text/javascript">
        window.location.href="thx.html";
        </script>
    <?php
}else
{
        ?>
        <script type="text/javascript">
        alert("Gagal Menyimpan Data");
        window.location.href="reservasi.html";
        </script>
    <?php

}
?>