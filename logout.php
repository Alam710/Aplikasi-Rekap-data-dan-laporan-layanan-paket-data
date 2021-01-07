<?php  
session_start();

// $_SESSION['masuk'] = '';
// unset($_SESSION['masuk']);
// $_SESSION['sebagai'] = '';
// unset($_SESSION['sebagai']);

//session terdaftar, saatnya logout
//session_unset();
session_destroy();

//variabel session salah, user tidak seharusnya ada dihalaman ini. Kembalikan ke login
header('Location:index.php');

?>