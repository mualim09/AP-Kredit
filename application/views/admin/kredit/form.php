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
			<h4>Masukan Data </h4>
			</div>
			<div>
			</div>

			<div class="card-body">

			<div >
					<?php echo validation_errors(); ?>
			</div>
			
			<form action="<?php echo base_url('index.php/'.$form_action); ?>" method="post">
				<div class="form-group">
					<label>Nomor kredit</label>
					<input id ='nomor_kredit' autocomplete="off"  value="<?php echo !empty($_POST['nomor_kredit']) ? set_value('nomor_kredit') : (!empty($kredit) ? $kredit['nomor_kredit'] : ""); ?>" type="text" class="form-control" name="nomor_kredit">
				</div>
				<div class="form-group">
					<label>Nama nasabah</label>
					<div class="input-group">
					<div class="glyphicon glyphicon-envelope">
						<div class="glyphicon glyphicon-envelope">
						<i cclass="glyphicon glyphicon-envelope"></i>
						</div>
					</div>
							<!-- <input id="nama_nasabah" type="text" class="form-control" name = 'nama_nasabah'  value="<?php echo !empty($_POST['nama_nasabah']) ? set_value('nama_nasabah') : (!empty($kredit) ? $kredit['nama_nasabah'] : ""); ?>"> -->
	  						<select name="nama_nasabah" id="nama_nasabah" class="form-control">
	  						     <?php foreach ($user as $value): ?>
							 	 	<option <?php echo !empty($_POST['nama_nasabah']) ? ($_POST['nama_nasabah'] == $value['name'] ? "selected" : "") : (!empty($kredit) ? ($kredit['nama_nasabah'] == $value['name'] ? "selected" : "") : ""); ?> value="<?= $value['name']; ?>"><?= ucfirst($value['name']); ?></option>
								 <?php endforeach; ?>
							</select>
						</div>
				</div>
				<div class="form-group">
					<label>Alamat </label>
					<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text">
						<i class="fas fa-lock"></i>
						</div>
					</div>
					<input id="alamat" type="alamat" class="form-control pwstrength" data-indicator="pwindicator" name="alamat"  value="<?php echo !empty($_POST['alamat']) ? set_value('alamat') : (!empty($kredit) ? $kredit['alamat'] : ""); ?>">
					</div>
					<div id="pwindicator" class="pwindicator">
					<div class="bar"></div>
					<div class="label"></div>
					</div>
				</div>
				<div class="form-group">
					<label>Ktp</label>
					<div class="input-group">
					<div class="input-group-prepend">
						
					</div>
						<input id="ktp" type="text" class="form-control currency" name="ktp"  value="<?php echo !empty($_POST['ktp']) ? set_value('ktp') : (!empty($kredit) ? $kredit['ktp'] : ""); ?>">
					</div>
				</div>
				<div class="form-group">
					<label>Nominal</label>
					<input id="nominal" type="text" class="form-control datemask" placeholder="Tulis nama nominal yang benar" name="nominal" value="<?php echo !empty($_POST['nominal']) ? set_value('nominal') : (!empty($kredit) ? $kredit['nominal'] : ""); ?>">
				</div>
				<div class="form-group">
					<label>Dp</label>
					<input id="dp" type="text" class="form-control datemask" placeholder="Tulis nama dp yang benar" name="dp" value="<?php echo !empty($_POST['dp']) ? set_value('dp') : (!empty($kredit) ? $kredit['dp'] : ""); ?>">
				</div>
				<div class="form-group">
					<label>Lama Cicilan</label>
					<input id="lama_cicilan" type="text" class="form-control datemask" placeholder="Tulis nama lama_cicilan yang benar" name="lama_cicilan" value="<?php echo !empty($_POST['lama_cicilan']) ? set_value('lama_cicilan') : (!empty($kredit) ? $kredit['lama_cicilan'] : ""); ?>">
				</div>
				<div class="form-group">
					<label>Barang</label>
					<input id="barang" type="text" class="form-control datemask" placeholder="Tulis nama barang yang benar" name="barang" value="<?php echo !empty($_POST['barang']) ? set_value('barang') : (!empty($kredit) ? $kredit['barang'] : ""); ?>">
				</div>
				<div class="form-group">
					<label>Harga Cash</label>
					<input id="harga_cash" type="text" class="form-control datemask" placeholder="Tulis harga cash yang benar" name="harga_kredit" value="<?php echo !empty($_POST['harga_kredit']) ? set_value('harga_kredit') : (!empty($kredit) ? $kredit['harga_kredit'] : ""); ?>">
				</div>
				<div class="form-group">
					<label>Harga Kredit</label>
					<input id="harga_kredit" type="text" class="form-control datemask" placeholder="Tulis harga kredit yang benar" name="harga_kredit" value="<?php echo !empty($_POST['harga_kredit']) ? set_value('harga_kredit') : (!empty($kredit) ? $kredit['harga_kredit'] : ""); ?>">
				</div>
				

				<button class="btn btn-primary">Simpan</button>
				
			</form>
	  		
			</div>
			</div>
		</section>
	  </div>

	 
