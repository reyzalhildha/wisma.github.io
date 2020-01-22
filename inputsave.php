<?php 
//memanggil Koneksi
session_start();
mysql_connect("localhost", "root", "") or die (mysql_error());
mysql_select_db("db_wisma") or die (mysql_error());
//membuat variabel
$no_ktp         = $_POST['no_ktp'];
$nama           = $_POST['nama'];
$email          = $_POST['email'];
$telp           = $_POST['telp'];
$jenis_k        = $_POST['jenis_k'];
$alamat         = $_POST['alamat'];
//Kemudian dapat langsung kita simpan dengan query INSERT
$sql = mysql_query ("insert into tb_tamu (no_ktp,nama,email,telp,jenis_k,alamat) value ('$no_ktp','$nama','$email','$telp','$jenis_k','$alamat')") or die(mysql_error()); 
if($sql)
{
    ?>
        <script type="text/javascript">
        window.location.href="reservasi.html";
        </script>
    <?php
}else
{
        mysql_error();

}
?>