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

		  <?php if ($this->session->set_flashdata('message')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->set_flashdata('message'); ?>
				</div>
			<?php endif; ?>

			<div class="card">
				<div class="card-header">
				<h4>Table</h4>
				</div>
				<div class="card-body">
				
				<a href="<?php echo base_url('index.php/user/tambah'); ?>" class="btn btn-outline-primary">Tambah data</a>
		 
				<table class="table">
					<thead>
					<tr>
						<th scope="col">id</th>
						<th scope="col">username</th>
						<th scope="col">email</th>
						<th scope="col">jenis_kelamin</th>
						<th scope="col">name</th>
						<th scope="col">hapus</th>
						<th scope="col">edit</th>
					</tr>
					</thead>
					<tbody>
						<?php 
							foreach($user as $value):
						?>
							<tr>
								<th scope="row"><?= $value['id']; ?></th>
								<td><?php echo $value['username']; ?></td>
								<td><?php echo $value['email']; ?></td>
								<td><?php echo $value['jenis_kelamin']; ?></td>
								<td><?php echo $value['name']; ?></td>	
								<td><a href="<?php echo base_url(); ?>index.php/user/hapus/<?= $value['id']; ?>" class="btn btn-outline-danger">Hapus</button></a></td>	
								<td><a href="<?php echo base_url(); ?>index.php/user/edit/<?= $value['id']; ?>"  class="btn btn-outline-success">Edit</button></a></td>	
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
