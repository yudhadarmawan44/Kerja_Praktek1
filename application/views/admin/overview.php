<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body id="page-top">

<?php $this->load->view("admin/_partials/navbar.php") ?>

<div id="wrapper">

	<?php $this->load->view("admin/_partials/sidebar.php") ?>

	<div id="content-wrapper">

		<div class="container-fluid">

        <!-- 
        karena ini halaman overview (home), kita matikan partial breadcrumb.
        Jika anda ingin mengampilkan breadcrumb di halaman overview,
        silahkan hilangkan komentar (//) di tag PHP di bawah.
        -->
		<?php //$this->load->view("admin/_partials/breadcrumb.php") ?>

		

		<!-- Area Chart Example-->
		<div class="card mb-3">
			
			<div class="card-footer small text-muted">Login berhasil ! 
				Selamat Datang 
				<p>Hai, <?php echo $this->session->userdata('username') ?> </p></div>

				
		</div>
		
		</div>

		<br> 


		<div style="text-align: center;">
		<img src="<?php echo base_url('gambar/logo_dinsos.png') ?>" width="150" />
		<br> <br>
		<p><font size="6" face="Garamond">Dinas Sosial Daerah Istimewa Yogyakarta</font></p>
		<p><font size="4" face="Cambria"><i class="fa fa-map-marker" aria-hidden="true"></i>  Jalan Janti, Kecamatan Banguntapan, Modalan, Banguntapan, Bantul, Daerah Istimewa Yogyakarta 55198</font></p>
		<p><font size="4" face="Cambria"><i class="fa fa-phone" aria-hidden="true"></i>  (0274) 514932 - 563510</font></p>
		<p><font size="4" face="Cambria"><i class="fa fa-home" aria-hidden="true"></i> dinsos.jogjaprov.go.id</font></p>
		<p><font size="4" face="Cambria"><i class="fa fa-envelope" aria-hidden="true"></i>  dinsos@jogjaprov.go.id</font></p>

		</div>
		<!-- /.container-fluid -->

		<!-- Sticky Footer -->
		<?php $this->load->view("admin/_partials/footer.php") ?>

	</div>
	<!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->


<?php $this->load->view("admin/_partials/scrolltop.php") ?>
<?php $this->load->view("admin/_partials/modal.php") ?>
<?php $this->load->view("admin/_partials/js.php") ?>
    
</body>
</html>
