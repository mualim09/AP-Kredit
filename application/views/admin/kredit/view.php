      <!-- Main Content -->
     
	  <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Kredit</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
              <div class="breadcrumb-item">Kredit</div>
            </div>
          </div>


			<div class="card">
				<div class="card-header">
				<h4>Table Kredit</h4>
				</div>
				<div class="card-body">
				<?php if ($this->session->set_flashdata('message')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->set_flashdata('message'); ?>
				</div>
			<?php endif; ?>


			
				<a href="<?php echo base_url('index.php/kredit/tambah'); ?>" class="btn btn-outline-primary">Tambah data</a>
				<br />
				<br />
		 
				<table class="table">
					<thead>
					<tr>
						<th scope="col">Nomor kredit</th>
						<th scope="col">Nama nasabah</th>
						<th scope="col">Alamat</th>
						<th scope="col">Ktp</th>
						<th scope="col">Nominal</th>
						<th scope="col">Dp</th>
						<th scope="col">Lama cicilan</th>
						<th scope="col">Hapus</th>
						<th scope="col">Edit</th>
						<th scope="col">History</th>
					</tr>
					</thead>
					<tbody>
						<?php 
							foreach($kredit as $value):
						?>
							<tr>
								<th scope="row"><?= $value['nomor_kredit']; ?></th>
								<td><?php echo $value['nama_nasabah']; ?></td>
								<td><?php echo $value['alamat']; ?></td>
								<td><?php echo $value['ktp']; ?></td>
								<td><?php echo $value['nominal']; ?></td>	
								<td><?php echo $value['dp']; ?></td>	
								<td><?php echo $value['lama_cicilan']; ?></td>	
								<td><a href="<?php echo base_url(); ?>index.php/kredit/hapus/<?= $value['id']; ?>" class="btn btn-outline-danger">Hapus</button></a></td>	
								<td><a href="<?php echo base_url(); ?>index.php/kredit/edit/<?= $value['id']; ?>"  class="btn btn-outline-success">Edit</button></a></td>	
								<td><a href="<?php echo base_url(); ?>index.php/history/index/<?= $value['id']; ?>"  class="btn btn-outline-warning">History</button></a></td>	
							</tr>
						<?php
							endforeach;
						?>
						
					
					</tbody>
				</table>
				</div>
			</div>

		</section>
	  </div>
	  

	  <div class="modal fade" id="delete_confirmation_modal" role="dialog" style="display: none;">
	    <div class="modal-dialog" style="margin-top: 260.5px;">
	                <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal">×</button>
	                <h4 class="modal-title">Do you really want to delete this Category? <?php echo $dt['id'];?></h4>
	            </div>
	            <form role="form" method="post"  id="delete_data" action="<?php echo base_url('admin/hapus')?>" >
	                <input type="hidden" id="delete_item_id" name="id" value="<?php echo $dt['id'];?>">
	                <div class="modal-footer">
	                    <button type="submit" class="btn btn-danger">Yes</button>
	                    <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
	                </div>
	            </form>
	        </div>

	    </div>
	</div> 
