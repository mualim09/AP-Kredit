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

	<!--   	<div class="card mt-4">
        <div class="row">
            <div class="col card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Input Data</h6>
            </div>
            
            <div class="col card-header text-right">
                <button type="button" class="btn btn-primary plus float-right" data-bs-toggle="modal" data-bs-target="#tambahdata">
                    <span data-feather="plus"></span>
                    Tambah Data
                </button>
            </div>
        </div> -->
<!-- 
		<input type="button" value="Click Me" style="float: right;"> -->

	
		  




			<div class="card">
			<div class="card-header" > 
			<!-- <div style="float: right;">	 -->
			<h4>Input Data </h4>
			</div>
			<div>
			</div>

			<div class="card-body">

			<div>
					<?php echo validation_errors(); ?>
			</div>
			
			<form action="<?php echo base_url('index.php/'.$form_action); ?>" method="post">
				<div class="form-group">
					<label>Username</label>
					<input id ='username' autocomplete="off"  value="<?php echo !empty($_POST['username']) ? set_value('username') : (!empty($user) ? $user['username'] : ""); ?>" type="text" class="form-control" name="username">
				</div>
				<div class="form-group">
					<label>Email</label>
					<div class="input-group">
					<div class="glyphicon glyphicon-envelope">
						<div class="glyphicon glyphicon-envelope">
						<i cclass="glyphicon glyphicon-envelope"></i>
						</div>
					</div>
				<input id="email" type="text" class="form-control" name = 'email'  value="<?php echo !empty($_POST['email']) ? set_value('email') : (!empty($user) ? $user['email'] : ""); ?>">
					</div>
				</div>
				<div class="form-group">
					<label>Password </label>
					<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text">
						<i class="fas fa-lock"></i>
						</div>
					</div>
					<input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password"  value="<?php echo set_value('password'); ?>">
					</div>
					<div id="pwindicator" class="pwindicator">
					<div class="bar"></div>
					<div class="label"></div>
					</div>
				</div>
				<div class="form-group">
					<label>Jenis Kelamin</label>
					<div class="input-group">
					<div class="input-group-prepend">
					<select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
						<option <?php echo !empty($_POST['jenis_kelamin']) ? ($_POST['jenis_kelamin'] == 'Laki - laki' ? "selected" : "") : (!empty($user) ? ($user['jenis_kelamin'] == 'Laki - Laki' ? "selected" : "") : ""); ?> value="Laki - Laki">Laki - Laki</option>
						<option <?php echo !empty($_POST['jenis_kelamin']) ? ($_POST['jenis_kelamin'] == 'Perempuan' ? "selected" : "") : (!empty($user) ? ($user['jenis_kelamin'] == 'Perempuan' ? "selected" : "") : ""); ?> value="Perempuan">Perempuan</option>
					</select>	
					</div>
						<!-- <input id="jenis_kelamin" type="text" class="form-control currency" name="jenis_kelamin"  value="<?php echo !empty($_POST['jenis_kelamin']) ? set_value('jenis_kelamin') : (!empty($user) ? $user['jenis_kelamin'] : ""); ?>"> -->
					</div>
					
					
				</div>
				<div class="form-group">
					<label>Alamat</label>
					<input id="alamat" type="text" class="form-control purchase-code" placeholder="Tulis alamat yang benar" name="alamat"  value="<?php echo !empty($_POST['alamat']) ? set_value('alamat') : (!empty($user) ? $user['alamat'] : ""); ?>">
				</div>
				<div class="form-group">
					<label>KTP</label>
					<input id="ktp" type="text" class="form-control invoice-input" name="ktp"  value="<?php echo !empty($_POST['ktp']) ? set_value('ktp') : (!empty($user) ? $user['ktp'] : ""); ?>">
				</div>
				<div class="form-group">
					<label>Kota</label>
					<input id="kota" type="text" class="form-control datemask" placeholder="Tulis nama kota yang benar" name="kota" value="<?php echo !empty($_POST['kota']) ? set_value('kota') : (!empty($user) ? $user['kota'] : ""); ?>">
				</div>
				<div class="form-group">
					<label>Name</label>
					<input id="name" type="text" class="form-control creditcard" name="name"  value="<?php echo !empty($_POST['name']) ? set_value('name') : (!empty($user) ? $user['name'] : ""); ?>">
				</div>

				<button class="btn btn-outline-primary">Simpan</button>
				<!-- <button a href="php/user/" class="btn btn-primary">Kembali</button> -->
				
			</form>
	  		
			</div>
			</div>
		</section>
	  </div>

	 
