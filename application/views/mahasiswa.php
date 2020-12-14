
		<div class="container"><br>
			<h2>HALAMAN MAHASISWA</h2><br>
<div class="row">
	<div class="col-md-9">
		<a href="<?= base_url(); ?>mahasiswa/tambah" class="btn btn-primary">TAMBAH</a>
	</div>
	<div class="col-md-3">
	</div>
<br><?php if($this->session->flashdata('flash') ) : ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
  Data Mahasiswa <strong>Berhasil</strong> di Hapus<?php $this->session->flashdata('flash'); ?>.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php endif; ?>
<?php if($this->session->flashdata('ubah') ) : ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
  Data Mahasiswa <strong>Berhasil</strong> di Ubah<?php $this->session->flashdata('ubah'); ?>.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php endif; ?>
<br>
<hr>
<table class="table">
	<tr>
		<th>NIM</th>
		<th>Nama</th>
		<th>Tanggal Lahir</th>
		<th>Jenis Kelamin</th>
		<th>No Telp</th>
		<th>Alamat</th>
		<th>ANGKATAN</th>
		<th>aksi</th>
	</tr>
	<?php foreach( $mahasiswa as $id_mhs ) : ?>
	<tr> 
		<td><?= $id_mhs['nim']; ?></td>
		<td><?= $id_mhs['nama']; ?></td>
		<td><?= $id_mhs['ttl']; ?></td>
		<td><?= $id_mhs['jk']; ?></td>
		<td><?= $id_mhs['notelp']; ?></td>
		<td><?= $id_mhs['alamat']; ?></td>
		<td><?= $id_mhs['angkatan']; ?></td>
		<td><a href="<?= base_url(); ?>mahasiswa/edit/<?= $id_mhs['id_mhs']; ?>" class="btn btn-primary">Edit</a>
			<a href="<?= base_url(); ?>mahasiswa/hapus/<?= $id_mhs['id_mhs']; ?>" class="btn btn-warning">Hapus</a>
		</td>
		</tr>
	
<?php endforeach; ?>

</table>
</div>
</div>
