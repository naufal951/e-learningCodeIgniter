<div class="container">
	<div class="row-mt-3">
<h2>TAMBAH MATAKULIAH</h2>
<?php if($this->session->flashdata('flash') ) : ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
  Matakuliah <strong>Berhasil</strong> di Tambahkan!<?php $this->session->flashdata('flash'); ?>.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php endif; ?>
<hr>

<form action="" method="post">
	<?php if(validation_errors() ) : ?>
<div class="alert alert-danger" role="alert">
<?= validation_errors(); ?>
</div>
<?php endif ?>
<span>MASUKAN MATA KULIAH</span><br>
	<div class="input-group">
		
		<input type="text" name="nama" class="form-control" >
	</div><span>MASUKAN SKS</span><br>
	<div class="input-group">
		
		<input type="text" name="sks" class="form-control" >
	</div>
	<br>
	<input type="submit" name="simpan" class="btn btn-primary">
</form>
