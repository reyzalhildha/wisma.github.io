<?php
mysql_connect("localhost", "root", "") or die (mysql_error());
mysql_select_db("db_wisma") or die (mysql_error());
$username = $_POST['username'];
$password = $_POST['password'];
$cek      = mysql_query("select * from login where username = '$username' and password = '$password'") or   die (mysql_error());
$result   = mysql_num_rows($cek);
$data = mysql_fetch_array($cek);
 
if($result>0){
    if ($data['level'] == 'admin') {
        session_start();
        $_SESSION['username'] = $data['username'];
        $_SESSION['level']    = $data['level'];
        echo "<script>alert('Selamat Datang, Admin.');document.location.href='admin.php'</script>";
 
    }elseif($data['level'] == 'user'){
        session_start();
        $_SESSION['username'] = $data['username'];
        $_SESSION['level']    = $data['level'];
        echo "<script>alert('Selamat Datang, User.');document.location.href='halamanuser.php'</script>";
    }
}else{
    echo "<script>alert('Username / Password yang di masukan salah!');document.location.href='login.php'</script>";
}
?>