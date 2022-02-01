<!-- Main Content -->

<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Data User</h1>
			<div class="section-header-breadcrumb">
				<div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
				<div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
				<div class="breadcrumb-item">Data User</div>
			</div>
		</div>
		
		
		
			  <?php if ($this->session->set_flashdata('message')) : ?>
				  <div class="alert alert-success" role="alert">
					  <?php echo $this->session->set_flashdata('message'); ?>
				  </div>
			  <?php endif; ?>
      		<div class="card">
      			<div class="card-header">
      				<!-- <div style="float: right;">	 -->
      				<h4>Data Pembayaran </h4>
      			</div>
      			<div>
      			</div>

      			<div class="card-body">

      				<div class="alert alert-danger" role="alert">
      					<?php echo validation_errors(); ?>
      				</div>

      				<form action="<?php echo base_url('index.php/' . $form_action); ?>" method="post">
      					
      					<div class="form-group">
      						<label>cicilan ke</label>
      						<div class="input-group">
      							<div class="glyphicon glyphicon-envelope">
      								<div class="glyphicon glyphicon-envelope">
      									<i cclass="glyphicon glyphicon-envelope"></i>
      								</div>
      							</div>
      							<input id="cicilan_ke" type="text" class="form-control" name='cicilan_ke' value="<?php echo !empty($_POST['cicilan_ke']) ? set_value('cicilan_ke') :   ""; ?>">
      						</div>
      					</div>
      					<div class="form-group">
      						<label>nominal bayar </label>
      						<div class="input-group">
      							<div class="input-group-prepend">
      								<div class="input-group-text">
      									<i class="fas fa-lock"></i>
      								</div>
      							</div>
      							<input id="nominal_bayar" type="nominal_bayar" class="form-control pwstrength" data-indicator="pwindicator" name="nominal_bayar" value="<?php echo set_value('nominal_bayar'); ?>">
      						</div>
      						<div id="pwindicator" class="pwindicator">
      							<div class="bar"></div>
      							<div class="label"></div>
      						</div>
      					</div>
      					<div class="form-group">
      						<label>tanggal</label>
      						<div class="input-group">
      							<div class="input-group-prepend">

      							</div>
      							<input id="tanggal" type="text" class="form-control currency" name="tanggal" value="<?php echo !empty($_POST['tanggal']) ? set_value('tanggal') :  ""; ?>">
      						</div>
      					</div>

      					<div class="form-group">
      						<label>status</label>
							 

							  <select name="status" id="status" class="form-control">
								  <option value="Lunas">Lunas</option>
								  <option value="Belum Lunas">Belum lunas</option>
								 
						</select>
      						

      						<button class="btn btn-outline-primary">Simpan</button>
      						<!-- <button a href="php/user/" class="btn btn-primary">Kembali</button> -->

      				</form>

      			</div>
      		</div>
		
			  <div class="card-body">
				<h4>Table</h4>
		
			
		
				<table class="table">
					<thead>
						<tr>
							<th scope="col">id</th>
		
							<th scope="col">cicilan_ke</th>
							<th scope="col">tanggal</th>
							<th scope="col">name</th>
							<th scope="col">status</th>
							<th scope="col">hapus</th>
							<!-- <th scope="col">edit</th> -->
						</tr>
					</thead>
					<tbody>
						<?php
							foreach ($history as $value) :
							?>
							<tr>
								<th scope="row"><?= $value['id']; ?></th>
		
								<td><?php echo $value['cicilan_ke']; ?></td>
								<td><?php echo $value['tanggal']; ?></td>
								<td><?php echo $value['kredit_id']; ?></td>
								<td><?php echo $value['status']; ?></td>
								<td><a href="<?php echo base_url(); ?>index.php/history/hapus/<?= $value['id']; ?>" class="btn btn-outline-danger">Hapus</button></a></td>
							<!-- 	<td><a href="<?php echo base_url(); ?>index.php/history/edit/<?= $value['id']; ?>" class="btn btn-outline-success">Edit</button></a></td> -->
							</tr>
						<?php
							endforeach;
							?>
		
					</tbody>
				</table>
				</section>
			</div>
      	</section>
      	<section>

      <!-- Main Content -->



      </div>

      <div class="modal fade" id="delete_confirmation_modal" role="dialog" style="display: none;">
      	<div class="modal-dialog" style="margin-top: 260.5px;">
      		<div class="modal-content">
      			<div class="modal-header">
      				<button type="button" class="close" data-dismiss="modal">×</button>
      				<h4 class="modal-title">Do you really want to delete this Category? <?php echo $dt['id']; ?></h4>
      			</div>
      			<form role="form" method="post" id="delete_data" action="<?php echo base_url('admin/hapus') ?>">
      				<input type="hidden" id="delete_item_id" name="id" value="<?php echo $dt['id']; ?>">
      				<div class="modal-footer">
      					<button type="submit" class="btn btn-danger">Yes</button>
      					<button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
      				</div>
      			</form>
      		</div>

      	</div>
      </div>
