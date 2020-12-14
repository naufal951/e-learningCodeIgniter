<div class="container">
	<div class="row-mt-3">
		<br>
<h2>TAMBAH MATERI</h2>
<div class="alert alert-secondary" role="alert">
	<center><p>UPLOAD FILE DENGAN EKSTENSI PDF,DOC,PPT ONLY</p></center>
</div>
<div class="row-mt-3">
	<div class="col-md-6">		
<?php if(validation_errors() ) : ?>
<div class="alert alert-danger" role="alert">
<?= validation_errors(); ?>
</div>
<?php endif ?>
</div>
</div>
<form action="" method="post" enctype="multipart/form-data">
	<span>MASUKAN NAMA FILE</span>
	<div class="input-group">
		

		<input type="text" name="nama" class="form-control" style="width: 360px">
	</div>
	<span>PILIH FILE</span>
	<div class="input-group">

		<input type="file" name="file" class="form-control">
	</div>
	<br>
	<div class="input-group">
		<input type="submit" name="simpan" class="btn btn-primary">
	</div>
</form>
</div>
</div>