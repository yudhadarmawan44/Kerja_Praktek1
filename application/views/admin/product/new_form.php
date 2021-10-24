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

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/products/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/product/add') ?>" method="post" enctype="multipart/form-data" >

						
								<div class="form-group">
									<label>Bidang</label>
									<select name="bidang" class="form-control">
										<option>Pilih Bidang</option>
										<option name="bidang" value="Sekretariat">1. SEKRETARIAT</option>
										<option name="bidang" value="Perlindungan dan Rehabilitasi Sosial">2. PERLINDUNGAN DAN REHABILITASI SOSIAL</option>
										<option name="bidang" value="Bantuan dan Jaminan Sosial">3. BANTUAN DAN JAMINAN SOSIAL</option>
										<option name="bidang" value="Pengembangan Sosial">4. PENGEMBANGAN SOSIAL</option>
										<option name="bidang" value="Partisipasi Sosial Masyarakat">5. PARTISIPASI SOSIAL MASYARAKAT</option>
									</select>
								</div>

								<div class="form-group">
									<label>Seksi</label>
									<select name="seksi" class="form-control">
										<option>Pilih Seksi</option>
										<option name="seksi" value="Sub Bagian Umum">1. SUB BAGIAN UMUM</option>
										<option name="seksi" value="Sub Bagian Keuangan">1. SUB BAGIAN KEUANGAN</option>
										<option name="seksi" value="Sub Bagian Program">1. SUB BAGIAN PROGRAM</option>
										<option name="seksi" value="Rehabiliasi Sosial Penyandang Cacat">2. SEKSI REHABILITASI SOSIAL PENYANDANG CACAT</option>
										<option name="seksi" value="Rehabilitasi Tuna Sosial dan Korban Napza">2. SEKSI REHABILITASI TUNA SOSIAL DAN KORBAN NAPZA</option>
										<option name="seksi" value="Perlindungan Anak">2. SEKSI PERLINDUNGAN ANAK</option>
										<option name="seksi" value="Korban Tindak Kekerasan Migran dan Jaminan Sosial">3. SEKSI KORBAN TINDAK KEKERASAN PEKERJA MIGRAN DAN JAMINAN SOSIAL</option>
										<option name="seksi" value="Kesejahteraan Sosial Lanjut Usia">3. SEKSI KESEJAHTERAAN SOSIAL LANJUT USIA</option>
										<option name="seksi" value="Bantuan Sosial Korban Bencana">3. SEKSI BANTUAN SOSIAL KORBAN BENCANA</option>
										<option name="seksi" value="Pemberdayaan Fakir Miskin">4. SEKSI PEMBERDAYAAN FAKIR MISKIN</option>
										<option name="seksi" value="Keluarga Bermasalah Sosial">4. SEKSI KELUARGA BERMASALAH SOSIAL</option>
										<option name="seksi" value="Penyuluhan Sosial">4. SEKSI PENYULUHAN SOSIAL</option>
										<option name="seksi" value="Orsos dan Sumbangan Sosial">5. SEKSI ORSOS DAN SUMBANGAN SOSIAL</option>
										<option name="seksi" value="Tenaga Kesejahteraan Sosial Masyarakat">5. SEKSI TENAGA KESEJAHTERAAN SOSIAL MASYARAKAT</option>
										<option name="seksi" value="Kepahlawanan Keperintisan Kejuangan dan Kesetiakawanan Sosial">5. SEKSI KEPAHLAWANAN KEPERINTISAN KEJUANGAN DAN KESETIAKAWANAN SOSIAL</option>
									</select>
								</div>


							<div class="form-group">
								<label for="name">Uraian*</label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="text" name="name" placeholder="Tulis Uraian" />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>


							
							<div class="form-group">
								<label for="price">Tanggal Dokumen*</label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="date" name="price"  placeholder="Tanggal Dokumen"  />
								 
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Vol*</label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="text" name="vol" placeholder="Tulis Volume" />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>


							<div class="form-group">
								<label for="name">Unggah Dokumen</label>
								<input class="form-control-file <?php echo form_error('price') ? 'is-invalid':'' ?>"
								 type="file" name="image" />
								<div class="invalid-feedback">
									<?php echo form_error('image') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Keterangan*</label>
								<br>
								<td>
									<input type="radio" name="description" value="asli" <?PHP if(!empty($description) && $description == "Asli") echo 'checked'; ?> /> Asli
									&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
									<input type="radio" name="description" value="tidak asli" <?PHP if(!empty($description) && $description == "Tidak Asli") echo 'checked'; ?> /> Tidak Asli
								</td>
									<br><br>
								<td>
									<input type="radio" name="description2" value="tembusan" <?PHP if(!empty($description2) && $description2 == "Tembusan") echo 'checked'; ?> /> Tembusan
									&nbsp &nbsp
									<input type="radio" name="description2" value="non tembusan" <?PHP if(!empty($description2) && $description2 == "Non Tembusan") echo 'checked'; ?> /> Non Tembusan
								</td>
								<div class="invalid-feedback">
									<?php echo form_error('description') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view("admin/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->


		<!-- jquery -->
		<script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
		<!-- ajax -->
		<script type="text/javascript">
			$('select[name="id_kabupaten"]').on('change', function(){
				$.ajax({
					type : 'POST', 
					url  : '<?php echo site_url('main/kota'); ?>', 
					data : {
						id_kabupaten : $(this).val()
					}, 
					success : function(option){
						$('select[name="kota"]').html(option); 
					}
				}); 
			});
		</script>

</body>

</html>
