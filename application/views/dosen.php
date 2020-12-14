

		<div class="container"><br>
			<h2>Halaman Dosen</h2>
			<br>
				<div class="row">

	<div class="col-md-9">
		<a href="<?= base_url(); ?>dosen/tambah" class="btn btn-primary">TAMBAH</a>
			<?php if($this->session->flashdata('flash') ) : ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
  Data Dosen <strong>Berhasil</strong> di Hapus<?php $this->session->flashdata('flash'); ?>.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
	<?php endif; ?>
	<?php if($this->session->flashdata('ubah') ) : ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
  Data Dosen <strong>Berhasil</strong> di Ubah<?php $this->session->flashdata('ubah'); ?>.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
	<?php endif; ?>
		
	</div>
	<div class="col-md-3">
	
			
		
	</div>
<br>
<br>
<hr>

		<table class="table">
<tr>
		<th>NIP</th>
		<th>Nama</th>
		<th>Tempat Tanggal Lahir</th>
		<th>Jenis Kelamin</th>
		<th>No Tlp</th>
		<th>Alamat</th>
		<th>Matakuliah</th>
		<th>Keterangan</th>
	</tr>
<?php foreach( $dosen as $id_dosen ) : ?>
	<tr> 
		<td><?= $id_dosen['nip']; ?></td>
		<td><?= $id_dosen['nama']; ?></td>
		<td><?= $id_dosen['ttl']; ?></td>
		<td><?= $id_dosen['jk']; ?></td>
		<td><?= $id_dosen['notelp']; ?></td>
		<td><?= $id_dosen['alamat']; ?></td>
		<td><?= $id_dosen['id_matakuliah']; ?></td>
		<td><a href="<?= base_url(); ?>dosen/edit/<?= $id_dosen['id_dosen']; ?>" class="btn btn-primary">Edit</a>
			<a href="<?= base_url(); ?>dosen/hapus/<?= $id_dosen['id_dosen']; ?>" class="btn btn-warning">Hapus</a>
		</td>
		</tr>
	
<?php endforeach; ?>

</table>
</div>
</div>
