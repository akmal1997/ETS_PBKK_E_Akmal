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

				<!-- DataTables -->
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Nama</th>
										<th>RMK</th>
										<th>Proposal Skripsi</th>
										<th>Judul Skripsi</th>
										<th>Status</th>
										<th>Dosen Pembimbing 1</th>
										<th>Dosen Pembimbing 2</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($products as $product): ?>
									<tr>
										<td width="150">
											<?php echo $product->name ?>
										</td>
										<td>
											<?php echo $product->price ?>
										</td>
										<td>
											<a href="<?php echo base_url('upload/product/'.$product->image) ?>" class="btn btn-outline-secondary" role="button" aria-pressed="true">Proposal</a>
											<!-- <img src="<?php echo base_url('upload/product/'.$product->image) ?>" width="64" /> -->
										</td>
										<td class="small">
											<?php echo substr($product->description, 0, 120) ?>...</td>
										<td>
											<?php echo $product->status ?>
										</td>
										<td>
											<?php echo $product->dosbing1 ?>
										</td>
										<td>
											<?php echo $product->dosbing2 ?>
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
