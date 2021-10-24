<!DOCTYPE html>
<html lang="en">



<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

<?php
$price = 'Day: %d Month: %m Year: %Y ';
?>

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>
			
				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/products/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Nomor</th>
										<th>Bidang</th>
										<th>Seksi</th>
										<th>Uraian</th>
										<th>Tanggal Dokumen</th>
										<th>Keterangan 1</th>
										<th>Keterangan 2</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
								
									<?php foreach ($products as $product): ?>
									<tr>
									<td width="150">
											<?php echo $product->id ?>
										</td>
										<td width="150">
											<?php echo $product->bidang ?>
										</td>
										<td width="150">
											<?php echo $product->seksi ?>
										</td>
										<td width="150">
											<?php echo $product->name ?>
										</td>
										<td>
											<?php echo $product->price ?>
											
										</td>
								
										<td class="small">
											<?php echo  $product->description ?></td>
										<td class="small">
											<?php echo  $product->description2 ?></td>
										<td width="250">
										<a href="<?php echo site_url('admin/products/detail/'.$product->product_id) ?>"
										class="btn btn-small text-success"> <i class="fa fa-info"></i><font color=green> Detail</color></a>
											<a href="<?php echo site_url('admin/products/edit/'.$product->product_id) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('admin/products/delete/'.$product->product_id) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
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
	<?php $this->load->view("admin/_partials/modal.php") ?>

    <?php $this->load->view("admin/_partials/js.php") ?>
    
    <script>
function deleteConfirm(url){
	$('#btn-delete').attr('href', url);
	$('#deleteModal').modal();
}
</script>


</body>

</html>
