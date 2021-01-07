<?php
	session_start();

	require_once 'koneksi.php';

	$vusername = $_POST['username'];
	$vpassword = $_POST['pass'];

	$sql="SELECT * FROM user WHERE username='$vusername' AND password='$vpassword'";
	 
	$hasil=mysqli_query($conn, $sql);
	
	$ctkhsl = mysqli_fetch_assoc($hasil);

	if ($vusername==$ctkhsl['username'] && $vpassword==$ctkhsl['password']) {
	//	echo "sama";
		echo "<script>
					
					document.location.href = 'pelanggan.php';
				  </script>";
	} else {
	//	echo "beda";
		echo "<script>
					alert('gagal login');
					document.location.href = 'index.php';
				  </script>";
	}
	

 
  
?>