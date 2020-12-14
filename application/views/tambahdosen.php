		<div class="container">
			<div class="row-mt-3">
<h2>TAMBAH DOSEN</h2>
<?php if($this->session->flashdata('flash') ) : ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
  Data Dosen <strong>Berhasil</strong> di Tambahkan! <?php $this->session->flashdata('flash'); ?>.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php endif; ?>
<hr>
<form action="<?= base_url(); ?>dosen/tes" method="post">
	<span>MASUKAN NIP</span>
	<div class="input-group">
		<input type="text" name="nip" class="form-control" required="">
	</div>
	<span>MASUKAN NAMA</span>
	<div class="input-group">
		
		<input type="text" name="nama" class="form-control" required="">
	</div>
	<span>MASUKAN Tanggal Lahir</span>
	<div class="input-group">
		
		<input type="date" name="ttl" class="form-control" required="">
	</div>
	<span>MASUKAN Jenis Kelamin</span>
	<div class="input-group">
		
		<select class="form-control" name="jk" required="">
			<option>LAKI LAKI</option>
			<option>PEREMPUAN</option>
		</select>
	</div>
	<span>MASUKAN No Telpone</span>
	<div class="input-group">
		
		<input type="text" name="notelp" class="form-control" required="">
	</div>
	<span>MASUKAN ALAMAT</span>
	<div class="input-group">
		
		<input type="text" name="alamat" class="form-control" required="">
	</div>
	<span>MATA KULIAH</span>
	<div class="input-group">
		
		<select name="id_matakuliah" class="form-control">
			<option>PILIH MATKUL</option>
			<?php foreach ($array as $arr ): ?>
			<option value="<?= $arr['nama'];  ?>"><?= $arr['nama']; ?></option>	
			<?php endforeach ?>
			
		</select>
	</div>
	<br>
	<input type="submit" name="simpan" class="btn btn-primary" required="">
</form>
