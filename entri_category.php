<!DOCTYPE html>
<html>
<head>
	<title>Minang Mart</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="">
<style>body{
padding-top:25px;
	}
</style>
</head>
<body>
	<div class="container">
		<h1>Entri Category</h1><br>
<form method="post" action="">
	  <div class="form-group row">
	    <label class="col-sm-2 col-form-label">Nama Category</label>
	    	<div class="col-sm-5">
	      		<input type="text" name="nama_category"  class="form-control" id="inputcategory"  required="">
	    	</div>
	  </div>
	 	

  </fieldset>
  <div class="form-group row">
	    <label for="ttinggal" class="col-sm-2 col-form-label"></label>
	    	<div class="col-sm-10">
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" name="simpan" class="btn btn-danger">Simpan</button>
      <button type="reset" name="reset" class="btn btn-secondary">Reset</button>
      </div>
  </div>
</div>
</form>

	<?php
		if (isset($_POST['simpan'])){
		  include 'koneksi.php';//menyisipkan file lain
		  $q=mysqli_query($db, "INSERT INTO category(name)VALUES('$_POST[nama_category]')");
		  if ($q)
		    echo ("<SCRIPT>
        window.alert('Data Berhasil Disimpan')
        </SCRIPT>");
        echo "<script>window.location='?p=home'</script>";
		}
	?>
</div>
</body>
</html>