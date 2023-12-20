<?php
// koneksi ke DBMS
$koneksi = mysqli_connect("localhost", "root", "", "dbbarang");

if(isset($_POST["submit"])){
  $nama = $_POST["nama"];
  $qty = $_POST["qty"];
  $harga = $_POST["harga"];

  $query = "INSERT INTO produk (nama, qty, harga) VALUES ('$nama', '$qty', '$harga')";
  mysqli_query($koneksi, $query);

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-9">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    .container{
        margin-top: 20px;
    }
    button > a{
        color: white;
    }
</style>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <form method="POST" action="">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Produk</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-cubes"></i>
          </div>
        </div> 
        <input id="nama" name="nama" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="qty" class="col-4 col-form-label">Qty</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-database"></i>
          </div>
        </div> 
        <input id="qty" name="qty" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="harga" class="col-4 col-form-label">Harga</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-money"></i>
          </div>
        </div> 
        <input id="harga" name="harga" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jenis" class="col-4 col-form-label">Jenis Produk</label> 
    <div class="col-8">
      <select id="jenis" name="jenis" class="custom-select">
        <option value="Elektronik">Elektronik</option>
        <option value="Furniture">Furniture</option>
      </select>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary" style="color-white">Submit</button>
      <button name="submit" type="submit" class="btn btn-secondary" style="color-white"><a style="text-decoration: none;" href="proses_produk.php">Table Produk</a></button>
    </div>
  </div>
        </form>
        </div>
    </div>
</div>


</body>
</html>