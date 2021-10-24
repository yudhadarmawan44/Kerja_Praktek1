<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Arsip Digital Dinsos DIY</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body{
	font-family: sans-serif;
	background:  #90EE90;
}
 
h1{
	text-align: center;
	/*ketebalan font*/
	font-weight: 300;
}
 
.tulisan_login{
	text-align: center;
	/*membuat semua huruf menjadi kapital*/
	text-transform: uppercase;
}
 
.kotak_login{
	width: 350px;
	background: white;
	/*meletakkan form ke tengah*/
	margin: 60px auto;
	padding: 30px 20px;
}
 
label{
	font-size: 11pt;
}
 
.form_login{
	/*membuat lebar form penuh*/
	box-sizing : border-box;
	width: 100%;
	padding: 10px;
	font-size: 11pt;
	margin-bottom: 20px;
}
 
.tombol_login{
	background: #46de4b;
	color: white;
	font-size: 11pt;
	width: 100%;
	border: none;
	border-radius: 3px;
	padding: 10px 20px;
}
 
.link{
	color: #232323;
	text-decoration: none;
	font-size: 10pt;
}
	</style>
</head>
<body>



<div style="text-align: center;">
<img src="gambar/logo_dinsos.png" height="130px" width="120px;">
<br>
<b>Dinas Sosial</b>
<br>
<b>Daerah Istimewa Yogyakarta</b>
<h1><b> ARSIP DIGITAL </b></h1>

<div class="kotak_login">
	<p class="tulisan_login">Silahkan login</p>
 
	<form action="" method="post">	
		<label>Username</label>
		<input type="text" name="username" class="form_login" placeholder="Masukkan Username ">
 
		<label>Password</label>
		<input type="text" name="password" class="form_login" placeholder="Masukkan Password ">
 
		<input type="submit" class="tombol_login" name= "Login" >
 
		<br/>
		<br/>
	</form>
	
</div>
<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>

</body>
</html>



