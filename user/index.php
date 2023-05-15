<?php
require '../function/home.php';
$judul = home()['judul'];
$produk = home()['produk'];

//keranjang
if (isset($_POST['cart'])) {
    if (cekLogin() === true) {
        tambahCart($_POST);
    } else {
        $_SESSION['pesan'] = "Anda belum masuk!! Silahkan masuk terlebih dahulu!";
    }
}


require 'templates/header.php';
?>

<div id="carouselExampleIndicators" class="carousel slide mt-5" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?= url ?>assets/images/pages/car-1.jpeg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?= url ?>assets/images/pages/car-2.jpeg" class="d-block w-100" alt="...">
        </div>
    </div>
</div>


<!-- Produk Baru -->
<div class="mt-5">
    <h5 class="text-uppercase">Produk Baru</h5>
    <div class="produk-front border-top bg-light">
        <?php foreach ($produk as $value) : ?>
            <div class="col-md-2 card-produk shadow-sm m-1  bg-white">
                <div class="card-img" style=" height:50%;">
                    <img src="<?= url ?>assets/images/produk/<?= $value->gambar ?>" class="img-fluid " style="width: 100%;" alt="...">
                </div>
                <div class="card-body" style="height: 25%;">
                    <h6 class=""><?= $value->nama ?></h6>
                    <p>Rp<?= number_format($value->harga, 0) ?></p>
                </div>
                <div class="d-flex justify-content-around p-2 w-75 border-top m-auto">
                    <a href="<?= url ?>user/detail.php/?id=<?= $value->id_produk ?>" class="btn btn-sm btn-info mr-1 ">Detail</a>
                    <form method="POST" action="">
                        <input type="hidden" name="id_produk" value="<?= $value->id_produk ?>">
                        <input type="hidden" name="nama" value="<?= $value->nama ?>">
                        <input type="hidden" name="harga" value="<?= $value->harga ?>">
                        <input type="hidden" name="kuantiti" value="1">
                        <input type="hidden" name="gambar" value="<?= $value->gambar ?>">
                        <input type="hidden" name="kategori" value="<?= $value->kategori ?>">
                        <button name="cart" class="btn btn-sm btn-success">Beli</button>
                    </form>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<div class="row bg-light my-5 p-3" style="margin: 0 -50px">
    <div class="col">
        <div class="row">

        </div>
        <div class="row bg-white border p-2 mt-5">
    <div class="col-md ml-3">
        <h1>Tentang Kami</h1>
        <p class="lead">Kami menjual berbagai  perangkat elektronik dan meja dan Trender Market baru dibuka pada tahun 2023  
            
        </p>
        <hr>
        <div class="row ml-1">
            <div class="w-100">
                <h3><i class="fa fa-map-marker"></i>Alamat</h3>
                <p>Jl. Merpati 1 B2 no 5 Griya Cinere 1</p>
            </div>
            <!-- /.col-sm-4-->
            <div class="">
                <h3><i class="fa fa-phone"></i> Hubungi Kami</h3>
                <p class="text-muted">Anda dapat menghubungi kami dinomer yang tertera dibawah ini</p>
                <p><strong>+6285311348872</strong></p>
            </div>
        </div>
    </div>
</div>
    </div>
</div>

<!-- Produk Baru -->
<div class="mt-5">
    <h5 class="text-uppercase">Produk Baru</h5>
    <div class="produk-front border-top bg-light">
        <?php foreach ($produk as $value) : ?>
            <div class="col-md-2 card-produk shadow-sm m-1  bg-white">
                <div class="card-img" style=" height:50%;">
                    <img src="<?= url ?>assets/images/produk/<?= $value->gambar ?>" class="img-fluid " style="width: 100%;" alt="...">
                </div>
                <div class="card-body" style="height: 25%;">
                    <h6 class=""><?= $value->nama ?></h6>
                    <p>Rp<?= number_format($value->harga, 0) ?></p>
                </div>
                <div class="d-flex justify-content-around p-2 w-75 border-top m-auto">
                    <a href="<?= url ?>user/detail.php/?id=<?= $value->id_produk ?>" class="btn btn-sm btn-info mr-1 ">Detail</a>
                    <form method="POST" action="">
                        <input type="hidden" name="id_produk" value="<?= $value->id_produk ?>">
                        <input type="hidden" name="nama" value="<?= $value->nama ?>">
                        <input type="hidden" name="harga" value="<?= $value->harga ?>">
                        <input type="hidden" name="kuantiti" value="1">
                        <input type="hidden" name="gambar" value="<?= $value->gambar ?>">
                        <input type="hidden" name="kategori" value="<?= $value->kategori ?>">
                        <button name="cart" class="btn btn-sm btn-success">Beli</button>
                    </form>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?= require 'templates/footer.php'; ?>