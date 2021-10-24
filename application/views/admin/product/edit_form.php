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

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('admin/products/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/product/edit') ?>" method="post" enctype="multipart/form-data">

							<input type="hidden" name="id" value="<?php echo $product->product_id?>" />

							<div class="form-group">
								<label for="name">Nomor Dokumen*</label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="text" name="name" placeholder="Nomor Dokumen" value="<?php echo $product->id ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>

							<div class="form-group">
									<label>Bidang</label>
									<select name="bidang" class="form-control">
										<option>Pilih Bidang</option>
										<option <?php if($product->bidang=='Sekretariat'){echo "selected"; } ?> value='Sekretariat'>1. SEKRETARIAT</option>
										<option <?php if($product->bidang=='Perlindungan dan Rehabilitasi Sosial'){echo "selected"; } ?> value='Perlindungan dan Rehabilitasi Sosial'>2. PERLINDUNGAN DAN REHABILITASI SOSIAL</option>
										<option <?php if($product->bidang=='Bantuan dan Jaminan Sosial'){echo "selected"; } ?> value='Bantuan dan Jaminan Sosial'>3. BANTUAN DAN JAMINAN SOSIAL</option>
										<option <?php if($product->bidang=='Pengembangan Sosial'){echo "selected"; } ?> value='Pengembangan Sosial'>4. PENGEMBANGAN SOSIAL</option>
										<option <?php if($product->bidang=='Partisipasi Sosial Masyarakat'){echo "selected"; } ?> value='Partisipasi Sosial Masyarakat'>5. PARTISIPASI SOSIAL MASYARAKAT</option>
									</select>
								</div>

								<div class="form-group">
									<label>Seksi</label>
									<select name="seksi" class="form-control">
										<option>Pilih Seksi</option>
										<option <?php if($product->seksi=='Sub Bagian Umum'){echo "selected"; } ?> value='Sub Bagian Umum'>1. SUB BAGIAN UMUM</option>
										<option <?php if($product->seksi=='Sub Bagian Keuangan'){echo "selected"; } ?> value='Sub Bagian Keuangan'>1. SUB BAGIAN KEUANGAN</option>
										<option <?php if($product->seksi=='Sub Bagian Program'){echo "selected"; } ?> value='Sub Bagian Program'>1. SUB BAGIAN PROGRAM</option>
										<option <?php if($product->seksi=='Rehabiliasi Sosial Penyandang Cacat'){echo "selected"; } ?> value='Rehabiliasi Sosial Penyandang Cacat'>2. SEKSI REHABILITASI SOSIAL PENYANDANG CACAT</option>
										<option <?php if($product->seksi=='Rehabilitasi Tuna Sosial dan Korban Napza'){echo "selected"; } ?> value='Rehabilitasi Tuna Sosial dan Korban Napza'>2. SEKSI REHABILITASI TUNA SOSIAL DAN KORBAN NAPZA</option>
										<option <?php if($product->seksi=='Perlindungan Anak'){echo "selected"; } ?> value='Perlindungan Anak'>2. SEKSI PERLINDUNGAN ANAK</option>
										<option <?php if($product->seksi=='Korban Tindak Kekerasan Migran dan Jaminan Sosial'){echo "selected"; } ?> value='Korban Tindak Kekerasan Migran dan Jaminan Sosial'>3. SEKSI KORBAN TINDAK KEKERASAN PEKERJA MIGRAN DAN JAMINAN SOSIAL</option>
										<option <?php if($product->seksi=='Kesejahteraan Sosial Lanjut Usia'){echo "selected"; } ?> value='Kesejahteraan Sosial Lanjut Usia'>3. SEKSI KESEJAHTERAAN SOSIAL LANJUT USIA</option>
										<option <?php if($product->seksi=='Bantuan Sosial Korban Bencana'){echo "selected"; } ?> value='Bantuan Sosial Korban Bencana'>3. SEKSI BANTUAN SOSIAL KORBAN BENCANA</option>
										<option <?php if($product->seksi=='Pemberdayaan Fakir Miskin'){echo "selected"; } ?> value='Pemberdayaan Fakir Miskin'>4. SEKSI PEMBERDAYAAN FAKIR MISKIN</option>
										<option <?php if($product->seksi=='Keluarga Bermasalah Sosial'){echo "selected"; } ?> value='Keluarga Bermasalah Sosial'>4. SEKSI KELUARGA BERMASALAH SOSIAL</option>
										<option <?php if($product->seksi=='Penyuluhan Sosial'){echo "selected"; } ?> value='Penyuluhan Sosial'>4. SEKSI PENYULUHAN SOSIAL</option>
										<option <?php if($product->seksi=='Orsos dan Sumbangan Sosial'){echo "selected"; } ?> value='Orsos dan Sumbangan Sosial'>5. SEKSI ORSOS DAN SUMBANGAN SOSIAL</option>
										<option <?php if($product->seksi=='Tenaga Kesejahteraan Sosial Masyarakat'){echo "selected"; } ?> value='Tenaga Kesejahteraan Sosial Masyarakat'>5. SEKSI TENAGA KESEJAHTERAAN SOSIAL MASYARAKAT</option>
										<option <?php if($product->seksi=='Kepahlawanan Keperintisan Kejuangan dan Kesetiakawanan Sosial'){echo "selected"; } ?> value='Kepahlawanan Keperintisan Kejuangan dan Kesetiakawanan Sosial'>5. SEKSI KEPAHLAWANAN KEPERINTISAN KEJUANGAN DAN KESETIAKAWANAN SOSIAL</option>
									</select>
								</div>

								<div class="form-group">
								<label for="name">Uraian*</label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="text" name="name" placeholder="Tulis Uraian" value="<?php echo $product->name ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>



							<div class="form-group">
								<label for="price">Tanggal Dokumen</label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="date" name="price"  placeholder="Tanggal Dokumen" value="<?php echo $product->price ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Vol*</label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="text" name="vol" placeholder="Tulis Volume" value="<?php echo $product->vol ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>


							<div class="form-group">
								<label for="name">Dokumen</label>
								<input class="form-control-file <?php echo form_error('image') ? 'is-invalid':'' ?>"
								 type="file" name="image" />
								<input type="hidden" name="old_image" value="<?php echo $product->image ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('image') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Keterangan*</label>
								<br>
								<td>
									<input type="radio" name="description" value="asli" <?php if ($product->description == 'asli') echo 'checked="checked"'; ?> /> Asli
									&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
									<input type="radio" name="description" value="tidak asli" <?php if ($product->description == 'tidak asli') echo 'checked="checked"'; ?> /> Tidak asli
								</td>
									<br><br>
								<td>
									<input type="radio" name="description2" value="tembusan" <?php if ($product->description2 == 'tembusan') echo 'checked="checked"'; ?> /> Tembusan
									&nbsp &nbsp
									<input type="radio" name="description2" value="non tembusan" <?php if ($product->description2 == 'non tembusan') echo 'checked="checked"'; ?> /> Non Tembusan
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

		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>
