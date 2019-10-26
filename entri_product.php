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
		<h1>Entri Product</h1><br>
			<form method="post" action="">
	<div class="form-group row">
	   	<label class="col-sm-2 col-form-label">Nama</label>
	    	<div class="col-sm-5">
	     		<input type="text" name="nama"  class="form-control" id="inputnama"  required="">
	     	</div>
	</div>


	<div class="form-group row">
	   	<label class="col-sm-2 col-form-label">price</label>
	    	<div class="col-sm-5">
	     		<input type="number" name="price"  class="form-control"   required="">
	     	</div>
	</div>

	<div class="form-group row">
	   	<label class="col-sm-2 col-form-label">id_category</label>
	    	<div class="col-sm-5">
	     		<input type="number" name="category"  class="form-control"   required="">
	     	</div>
	</div>

		<div class="form-group row">
	   	<label class="col-sm-2 col-form-label">id_cashier</label>
	    	<div class="col-sm-5">
	     		<input type="number" name="cashier"  class="form-control"   required="">
	     	</div>
	</div>

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
		  	$q=mysqli_query($db, "INSERT INTO product(nama,price,id_category,id_cashier)VALUES('$_POST[nama]','$_POST[price]','$_POST[category]','$_POST[cashier]')");
		  if ($q)
		    echo ("<SCRIPT>
        window.alert('Data Berhasil Disimpan')
        </SCRIPT>");
        echo "<script>window.location='?p=home'</script>";
		}
	?>
</div>
</div>
</body>
</html>