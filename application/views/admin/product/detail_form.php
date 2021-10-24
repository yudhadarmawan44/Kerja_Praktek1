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
								<label for="name">Nomor Dokumen</label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="text" name="name" placeholder="Nomor Dokumen" value="<?php echo $product->id ?>" disabled="disabled" />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Bidang</label>
								<textarea class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>"
								 name="bidang" placeholder="Bidang..." disabled="disabled"><?php echo $product->bidang ?></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('description') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Seksi</label>
								<textarea class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>"
								 name="seksi" placeholder="Seksi..." disabled="disabled"><?php echo $product->seksi ?></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('description') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Uraian</label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="text" name="name" placeholder="Nomor Dokumen" value="<?php echo $product->name ?>" disabled="disabled" />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="price">Tanggal Dokumen</label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="date" name="price"  placeholder="Tanggal Dokumen" value="<?php echo $product->price ?>" disabled="disabled" />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="price">Volume</label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="text" name="vol"  placeholder="Tanggal Dokumen" value="<?php echo $product->vol ?>" disabled="disabled" />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Keterangan 1</label>
								<textarea class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>"
								 name="description" placeholder="Keterangan..." disabled="disabled"><?php echo $product->description ?></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('description') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="name">Keterangan 2</label>
								<textarea class="form-control <?php echo form_error('description2') ? 'is-invalid':'' ?>"
								 name="description2" placeholder="Keterangan..." disabled="disabled"><?php echo $product->description2 ?></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('description2') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Dokumen</label>
								<br>
							<td>
								<img src="<?php echo base_url('upload/product/'.$product->image) ?>" width="250" />
							</td>
							</div>
							

                            <a href="<?php echo base_url().'index.php/admin/products/lakukan_download' ?>" class="btn btn-lg">
                            <i class="fa fa-download"></i> Download file</a></h1>
							
						</form>

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
