
<form action="<?= base_url(); ?>dosen/dosenedit" method="post">
	<div class="input-group">
		<span>MASUKAN NIP</span>
		<input type="text" name="nip" class="form-control" required="" value="<?php echo $dosen['nip'] ?>">
	</div>
	<input type="hidden" name="id_dosen" value="<?= $dosen['id_dosen'] ?>">
	<div class="input-group">
		<span>MASUKAN NAMA</span>
		<input type="text" name="nama" class="form-control" required=""value="<?php echo $dosen['nama'] ?>">
	</div>
	<div class="input-group">
		<span>MASUKAN Tanggal Lahir</span>
		<input type="date" name="ttl" class="form-control" required="" value="<?php echo $dosen['ttl'] ?>">
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
		<input type="text" name="notelp" class="form-control" required="" value="<?php echo $dosen['notelp'] ?>">
	</div>
	<div class="input-group">
		<span>MASUKAN ALAMAT</span>
		<input type="text" name="alamat" class="form-control" required="" value="<?php echo $dosen['alamat'] ?>">
	</div>
	<div class="input-group">
		<span>MASUKAN MATA KULIAH</span>
		<input type="text" name="id_matakuliah" class="form-control" required="" value="<?php echo $dosen['id_matakuliah'] ?>">
	</div>
	<br>
	<input type="submit" name="simpan" class="btn btn-primary" required="">
</form>
