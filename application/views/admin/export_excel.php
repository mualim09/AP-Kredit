<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data historytransaksi.xls");
?>
			
			<table class="table">
					<thead>
						<tr>
							<th scope="col">id</th>
		
							<th scope="col">Cicilan ke</th>
							<th scope="col">Tanggal</th>
							<th scope="col">Name</th>
							<th scope="col">Status</th>
							<th scope="col">Action</th>
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
