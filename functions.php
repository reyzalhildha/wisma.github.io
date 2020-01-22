<?php
//koneksi ke database
$conn = mysqli_connect("localhost","root","","wisma");
	
function registrasi($data) {
	global $conn;
	//stripslashes = menghilangkan karakter back slash ('/')
	//strtolower = mengubah semua karakter menjadi kecil semua 
	$username = strtolower(stripslashes($data["username"]));
	$email = strtolower(stripslashes($data["email"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);
	
	//cek username sudah ada atau belum
	$result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
	
	if( mysqli_fetch_assoc($result) ) {
		echo "<script>
			alert('username sudah terdaftar!')
		</script>";
		return false;
	}
	
	//cek konfirmasi password
	if( $password !== $password2) {
		echo "<script>
				alert('konfirmasi password tidak sesuai!');
			</script>";
		return false;
	}
	
	//enkripsi password ("hash","MD5")
	$password = password_hash($password, PASSWORD_DEFAULT);
	$password2 = password_hash($password2, PASSWORD_DEFAULT);
	//PASSWORD_DEFAULT = algoritma yang dipilih secara default oleh  php dan akan terus berubah
	
	
	//tambahkan user baru ke database
	mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");
	
	return mysqli_affected_rows($conn);
}
?>