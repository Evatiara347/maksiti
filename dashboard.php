<?php
session_start();

if(empty($_SESSION['login'])){
	header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <link rel="icon" href="asset/logonew.png">
    <title>Snack MakSiti</title>
</head>

<body>
    <nav class="navbar navbar-dark" style="background-color: #72302a;">
        <div class="container">
            <a class="navbar-brand" href="#"><img class="logo-nav" src="asset/logonew.png" alt="Error images">
                Snack MakSiti</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link " aria-current="page" href="#">Home</a>
                    <a class="nav-link " href="#tabmenu">Menu</a>
                    <a class= "nav-link" href="tentang.html">Tentang Kami</a>
                    <a class="nav-link" href="faq.html">FAQ</a>
                    <a class="nav-link" href="logout.php">Coba</a>
                    <li class="nav-item">
                        <button type="button" class="btn btn-light" onclick="setTheme(true)">Terang</button>
                        <button type="button" class="btn btn-light" onclick="setTheme(false)">Gelap</button>
                    </li>
                </div>
            </div>
        </div>
    </nav>
    <div class="jumbotron">
        <h1 class="display-4" id="titleHead">Selamat Datang di Snack MakSiti</h1>
        <a class="btn btn-primary btn-lg bg-warning" href="#tabmenu" role="button">Beli Sekarang</a>
    </div>
    <div>
        <div class="container pb-5 text-center" id="tabmenu">
            <div class="row">
                <div class="col-6 justify-content-center">
                    <img src="asset/honey.png" alt="Error images">
                </div>
                <div class="col-6 justify-content-center">
                    <img src="asset/chili.png" alt="Error images">
                </div>
            </div>
            <div class="row">
                <div class="col-6 justify-content-center">
                    <p class="fs-3 pt-3">Cemilan Manis</p>
                </div>
                <div class="col-6 justify-content-center">
                    <p class="fs-3 pt-3">Cemilan Pedas</p>
                </div>
            </div>
            <div class="row">
                <div class="col-6 justify-content-center">
                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                        <a href="#brf"><button type="button" class="btn btn-outline-light">Lihat</button></a>
                    </div>
                </div>
                <div class="col-6 justify-content-center">
                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                        <a href="#lnc"><button type="button" class="btn btn-outline-light">Lihat</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Daftar Menu -->
    <div class="container mb-3 pt-5s" id="brf">
        <br>
        <br>
        <h1>Cemilan Manis</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card">
                    <img src="asset/lidah kucing.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Lidah Kucing</h5>
                        <p class="card-text">Lidah kucing yang sangat gurih dan renyah, dibuat dengan bahan-bahan yang
                            berkualitas dan pilihan.</p>
                        <a href="#order"><button type="button" class="btn btn-warning"
                                onclick="setMenu('Menu Senin pagi')">Beli Sekarang</button></a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="asset/pisang.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Kripik Pisang Manis</h5>
                        <p class="card-text">Kripik pisang manis, yang dibuat dengan pisang pilihan yang telah bumbui.
                        </p>
                        <a href="#order"><button type="button" class="btn btn-warning"
                                onclick="setMenu('Menu Senin pagi')">Beli Sekarang</button></a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="asset/sus kering.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Sus Coklat</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <a href="#order"><button type="button" class="btn btn-warning"
                                onclick="setMenu('Menu Senin pagi')">Beli Sekarang</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5 mb-3 pt-5" id="lnc">
        <h1>Cemilan Pedas</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card">
                    <img src="asset/basreng.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Basreng</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <a
                            href="https://api.whatsapp.com/send?phone=6282244343786&text=Halo, saya%20pesan%20Basreng"><button
                                type="button" class=" btn btn-warning">Beli Sekarang</button></a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="asset/makaroni spiral.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Makaroni Spiral</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional
                            content.</p>
                        <a href="#https://api.whatsapp.com/send?phone=6282244343786&text=Halo, saya%20pesan%20Makaroni"><button
                                type="button" class="btn btn-warning" onclick="setMenu('Makaroni Spiral')">Beli
                                Sekarang</button></a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="asset/krupuk seblak.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Krupuk Seblak Pedas</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This card has even longer content than the first to show that equal
                            height action.</p>
                        <a href="#order"><button type="button" class="btn btn-warning"
                                onclick="setMenu('Krupuk Seblak Pedas')">Beli Sekarang</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="container mt-5" id="order">
        <h1>Silahkan diisi</h1>
        <form action="" method="">
            <div class="mb-3">
                <label for="" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" id="Fullname" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">No-Telp</label>
                <input type="number" name="phone" class="form-control" id="No-Telp">
            </div>
            <div class="mb-3">
                <label for="Select" class="form-label">Menu yang Dipilih</label>
                <input type="text" name="menu" class="form-control" id="select-menu">
            </div>
            <div class="mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                    <label class="form-check-label" for="flexRadioDefault1">
                        250 Gram
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDisabled" id="flexRadioDisabled"
                        disabled>
                    <label class="form-check-label" for="flexRadioDisabled">
                        500 Gram
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                    <label class="form-check-label" for="flexRadioDefault2">
                        1 Kilogram
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Alamat</label>
                <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <a href="https://api.whatsapp.com/send?phone=6282244343786&text=Halo, saya%20pesan%20atas%20nama"><button type="button" class=" btn btn-warning">Submit</button></a>
            <button type="reset" name="batal" class="btn btn-danger">Batal</button>
        </form>
    </div> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    <script src="app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
</body>

</html>