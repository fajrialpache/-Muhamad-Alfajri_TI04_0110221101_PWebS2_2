<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="d-flex bd-highlight">
  <div class="p-2 flex-fill bd-highlight">
      <h5>Belanja Online</h5><hr>
      <form action="form_belanja.php" method="POST">
  <div class="form-group row">
    <label for="customer" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"> 
        <label for="produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas"> 
        <label for="produk_1" class="custom-control-label">KULKAS</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci"> 
        <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" type="submit" class="btn btn-primary">Kirim</button>
    </div>
  </div>
</form>
  </div>
  <div class="p-1 flex-fill bd-highlight">
    <div class="d-grid gap-3">
  <div class="p-2 bg-primary border">Daftar Harga</div>
  <div class="p-2 border">TV: 4.200.000</div>
  <div class="p-2 border">Kulkas: 3.100.000</div>
  <div class="p-2 border">Mesin Cuci: 3.800.000</div>
  <div class="p-2 bg-primary border">Harga Dapat Berubah Setiap Saat</div>
</div>
</div>
</div>




<?php 
        $nama = $_POST['customer'];
        $produk = $_POST['produk'];
        $jumlah = $_POST['jumlah'];

        if ($produk == "TV") {
            $total = $jumlah * 4200000;
        }elseif($produk == "Kulkas"){
            $total = $jumlah * 3100000;
        }elseif($produk == "Mesin Cuci"){
            $total = $jumlah * 3800000;
        }else{
            0 ;
        }

        echo "Nama Customer : $nama";
        echo "<br>Produk Pilihan : $produk";
        echo "<br>Jumlah Beli : $jumlah";
        echo "<br>Total Belanja : Rp. " . number_format($total) . ".-"; 

        ?>
</body>
</html>