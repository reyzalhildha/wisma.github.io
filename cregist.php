<?php 
//memanggil Koneksi
session_start();
mysql_connect("localhost", "root", "") or die (mysql_error());
mysql_select_db("db_wisma") or die (mysql_error());
//membuat variabel
$nama               = $_POST['nama'];
$username           = $_POST['username'];
$password           = $_POST['password'];
//Kemudian dapat langsung kita simpan dengan query INSERT
$sql = mysql_query ("insert into login (nama,username,password) value ('$nama','$username','$password')") or die(mysql_error()); 
if($sql)
{
    ?>
        <script type="text/javascript">
        window.location.href="dataregist.php";
        </script>
    <?php
}else
{
        ?>
        <script type="text/javascript">
        alert("Gagal Menyimpan Data");
        window.location.href="regis.php";
        </script>
    <?php

}
?>