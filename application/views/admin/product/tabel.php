<html>
<head>
<title>|Data Perkreditan|</title>
<link type="text/css" rel="stylesheet" href="<? echo base_url(); ?>includes/css/bootstrap.css" />
</head>
<!--author : www.syamadav.com-->
<body>
<div class="row uppermost">
<div class="col-md-offset-1 col-md-10 boxing content-title"><center><h2>TABEL PERKREDITAN</h2></center></div>
</div>
//button
<a href="<? print $this->config->base_url() . 'Perkreditan/add' ?> " type="button" class="btn btn-primary" >Tambah data</a>

<div class="table-responsive lowermost">
//template table
<table class="table table-striped">
<thead>
<tr>
<th>No</th>
<th>Name</th>
<th>Alamat</th>
<th>Ktp</th>
<th>Jenis Kelamin</th>
<th>Ktp</th>
<th>Kota<th>
<th>Name<th>
<th>Pengajuan<th>
<th>Catatan Pembayaran<th>
<th>Aksi<th>
</tr>
</thead>
<?php
$no =1;
foreach ($k as $Perkreditan) {
print "<tr>";
print "<td>";
print $no;
print "<td>";
print $Perkreditan->Name;
print "<td>";
print $Perkreditan->Alamat;
print "<td>";
print $Perkreditan->Ktp;
print "<td>";
print $Perkreditan->jnskelamin;
print "<td>";
print $Perkreditan->Pengajuan;
print "<td>";
print $Perkreditan->CatatanPembayaran;
print "<td>";
print $Perkreditan->Kota . "/" . $Perkreditan->Name;
print "<td>";
print "<a type= 'button' class = 'btn btn-xs btn-warning' href=" . $this->config->base_url() . 'Perkreditan/edit/' . $Perkreditan->idpelanggan . " >update</a>
<a type= 'button' class = 'btn btn-xs btn-danger' href=" . $this->config->base_url() . 'Perkreditan/delete/' . $Perkreditan->idpelanggan . ">delete</a>";
print "</td>";
$no++;
}
?>
</table>
</div>
</body>
</html>
