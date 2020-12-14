<form action="<?= base_url(); ?>mahasiswa/mahasiswaedit" method="post">
	<input type="hidden" name="id_mhs" value="<?= $mahasiswa['id_mhs'] ?>">
	<div class="input-group">
		<span>MASUKAN NIM</span>
		<input type="text" name="nim" class="form-control" required="" value="<?php echo $mahasiswa['nim'] ?>">
	</div>
	<div class="input-group">
		<span>MASUKAN NAMA</span>
		<input type="text" name="nama" class="form-control" required="" value="<?php echo $mahasiswa['nama'] ?>">
	</div>
	<div class="input-group">
		<span>MASUKAN Tanggal Lahir</span>
		<input type="date" name="ttl" class="form-control" required="" value="<?php echo $mahasiswa['ttl'] ?>">
	</div>
	<div class="input-group">
		<span>MASUKAN Jenis Kelamin</span>
		<select class="form-control" name="jk" required="">
	
			<option >LAKI LAKI</option>
			<option>PEREMPUAN</option>
		</select>
	</div>
	<div class="input-group">
		<span>MASUKAN No Telpone</span>
		<input type="text" name="notelp" class="form-control" required="" value="<?php echo $mahasiswa['notelp'] ?>">
	</div>
	<div class="input-group">
		<span>MASUKAN ALAMAT</span>
		<input type="text" name="alamat" class="form-control" required="" value="<?php echo $mahasiswa['alamat'] ?>">
	</div>
	<div class="input-group">
		<span>MASUKAN angkatan</span>
		<input type="text" name="angkatan" class="form-control" required="" value="<?php echo $mahasiswa['angkatan'] ?>">
	</div>
	<br>
	<input type="submit" name="simpan" class="btn btn-primary" required="">
</form>