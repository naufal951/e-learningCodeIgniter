
		<div class="container"><br>
<h2>HALAMAN MATA KULIAH</h2>
<div class="row">
	<div class="col-md-9">
		<a href="<?= base_url(); ?>matakuliah/tambah" class="btn btn-primary">TAMBAH</a>
	</div>
	<div class="col-md-3">
		
	</div>
<br><br>
<?php if($this->session->flashdata('flash') ) : ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
  Data Matakuliah <strong>Berhasil</strong> di Hapus!<?php $this->session->flashdata('flash'); ?>.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php endif; ?>
<hr>
<table class="table">
	<tr>
		<th>NO</th>
		<th>MATA KULIAH</th>
		<th>SKS</th>
		<th>AKSI</th>
	</tr>
<?php foreach( $matakuliah as $id_matakuliah ) : $no = 1;
	?>
	
	<tr> 
		<td><?= $no++ ;?></td>
		<td><?= $id_matakuliah['nama']; ?></td>
		<td><?= $id_matakuliah['sks']; ?></td>
		<td>
			<a href="<?= base_url(); ?>matakuliah/hapus/<?= $id_matakuliah['id_matakuliah']; ?>" class="btn btn-warning">Hapus</a>
		</td>
		</tr>
	 
<?php endforeach; ?>
</table>
