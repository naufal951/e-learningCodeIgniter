		<div class="container">
			<div class="row-mt-3">
<h2>TAMBAH MAHASISWA</h2>
<br>
<?php if($this->session->flashdata('flash') ) : ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
  Data Mahasiswa <strong>Berhasil</strong> di Tambahkan! <?php $this->session->flashdata('flash'); ?>.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php endif; ?>
<hr>
<center>
<form action="" method="post">
	<?php if(validation_errors() ) : ?>
<div class="alert alert-danger" role="alert">
<?= validation_errors(); ?>
<?php endif ?>
	<div class="input-group">
  <div class="input-group-prepend">
		<span span class="input-group-text" id="inputGroup-sizing-default">MASUKAN NIM</span>
	</div>
		<input type="text" name="nim" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required="">
</div>
<br>
<div class="input-group mb-9">
  <div class="input-group-prepend">
		<span span class="input-group-text" id="inputGroup-sizing-default">MASUKAN NAMA</span>
	</div>
		<input type="text" name="nama" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required="">
</div>
<br>
	<div class="input-group mb-9">
  <div class="input-group-prepend">
		<span span class="input-group-text" id="inputGroup-sizing-default">MASUKAN Tanggal Lahir</span>
	</div>
		<input type="date" name="ttl" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required="">
	</div>
	<br>
<div class="input-group mb-9">
  <div class="input-group-prepend">
		<span span class="input-group-text" id="inputGroup-sizing-default">MASUKAN Jenis Kelamin</span>
	</div>
		<select class="form-control" name="jk" required="">
			<option>LAKI LAKI</option>
			<option>PEREMPUAN</option>
		</select>
	</div>
	<br>
		<div class="input-group mb-9">
  <div class="input-group-prepend">
		<span span class="input-group-text" id="inputGroup-sizing-default">MASUKAN No Telpone</span>
		</div>
		<input type="text" name="notelp" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required="">
	</div>
<br>
<div class="input-group mb-9">
  <div class="input-group-prepend">
		<span span class="input-group-text" id="inputGroup-sizing-default">MASUKAN ALAMAT</span>
		</div>
		<input type="text" name="alamat" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required="">
</div>
<br>
<div class="input-group mb-9">
  <div class="input-group-prepend">
		<span span class="input-group-text" id="inputGroup-sizing-default">MASUKAN ANGKATAN</span>
</div>
		<br>
		<input type="text" name="angkatan" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required="">
	</div>
	<br>
	<input type="submit" name="simpan" class="btn btn-primary" required="">
</form>
</center>

