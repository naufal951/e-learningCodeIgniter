
		<div class="container">
			<br>
<div class="row">
	<div class="col-md-8">
		<a href="<?= base_url(); ?>materi/tambah" class="btn btn-primary">TAMBAH MATERI</a>
	</div><br><br>
	<div class="col-md-4">
		<form method="post">
			<div class="input-group">
				<input type="text" name="cari" placeholder="Masukan Judul Buku" class="form-control">
			</div>
		</form>
	</div>

<br>
<table class="table">
	<tr>
		<th>NO</th>
		<th>NAMA FILE</th>
		<th>TANGGAL</th>
		<th>DOWNLOAD</th>
		<th>AKSI</th>
	</tr>
<?php foreach( $materi as $id_materi ) : 
	$no = 1; ?>
	<tr> 
		<td><?= $no++ ?></td>
		<td><?= $id_materi['nama_file']; ?></td>
		<td><?= $id_materi['tanggal']; ?></td>
		<td><
			<a target="_blank" href="#" class="btn btn-primary">DOWNLOAD</a>
		</td>
		<td>
			<a href="#" class="btn btn-danger">HAPUS</a>
		</td>
		</tr>
	
<?php endforeach; ?>

</table>
</div>