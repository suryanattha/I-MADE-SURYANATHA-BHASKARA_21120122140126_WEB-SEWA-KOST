<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KOST HARMONI </title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <a href="#" class="logo"><span>K</span>ost<span> H</span>armoni</a>
        <nav class="navbar">
             <a href="#packages">Tipe Kamar</a>
             <a href="#services">Fasilitas</a>
             <a href="#gallery">Foto</a>
             <a href="#book">Sewa Kamar</a>
        </nav>
    </header>
<section class="packages" id="packages">
    <h1 class="heading">
        <span>t</span>
        <span>i</span>
        <span>p</span>
        <span>e</span>
        <span class="space"></span>
        <span>k</span>
        <span>a</span>
        <span>m</span>
        <span>a</span>
        <span>r</span>
    </h1>
    <div class="box-container">
        <div class="box">
            <img decoding="async" src="img/single.jpeg" alt="Gambar Kamar Tipe Single">
            <div class="content">
                <h3>Tipe Kamar Single Bed</h3>
                <p>3 x 4 meter</p>
                <div class="price"> Rp1.400.000/Bulan</div>
                <a href="#book" class="btn">Sewa Kamar</a>
            </div>
        </div>
        <div class="box">
            <img decoding="async" src="img/double.jpeg" alt="Gambar Kamar Tipe Double">
            <div class="content">
                <h3>Tipe Kamar Double Bed</h3>
                <p>3 x 5 meter</p>
                <div class="price"> Rp1.800.000/Bulan</div>
                <a href="#book" class="btn">Sewa Kamar</a>
            </div>
        </div>
</section>
<section class="services" id="services">
    <h1 class="heading">
        <span>f</span>
        <span>a</span>
        <span>s</span>
        <span>i</span>
        <span>l</span>
        <span>i</span>
        <span>t</span>
        <span>a</span>
        <span>s</span>
    </h1>
    <div class="box-container">
        <div class="box">
                <h3>Fasilitas Bersama</h3>
                <p>Lobby, Receptionist, Ruang Tamu, Meeting Room, Lift, Wifi, Parkir Basement, dan Dapur (Kulkas, Air Galon, Kompor, dan Gas)  </p>
        </div>
        <div class="box">
                <h3>Fasilitas Kamar</h3>
                <p>AC, TV, Furnitur (Meja, Kursi, Kasur, dan Lemari), Kamar Mandi Dalam (Water Heater, WC Duduk, Shower, Wastafel, dan Cermin)</p>
        </div>
        <div class="box">
                <h3>Keamanan</h3>
                <p>Satpam dan CCTV 24 jam, Pintu Sidik Jari, Genset, Alat Pemadam Api Ringan</p>
        </div>
    </div>
</section>
<section class="gallery" id="gallery">
    <h1 class="heading">
        <span>f</span>
        <span>o</span>
        <span>t</span>
        <span>o</span>
    </h1>
<div class="box-container">
    <div class="box">
        <img decoding="async" src="img/lorong.jpeg" alt="Gambar Luar Kamar">
        <div class="content"></div>
    </div>
    <div class="box">
        <img decoding="async" src="img/lobby.jpeg" alt="Gambar Lobby dan Resepsionis">
        <div class="content"></div>
    </div>
    <div class="box">
        <img decoding="async" src="img/km.jpeg" alt="Gambar Kamar Mandi">
        <div class="content"></div>
    </div>
</div>
</section>
<section class="book" id="book">
    <h1 class="heading">
        <span>s</span>
        <span>e</span>
        <span>w</span>
        <span>a</span>
        <span class="space"></span>
        <span>k</span>
        <span>a</span>
        <span>m</span>
        <span>a</span>
        <span>r</span>
    </h1>
    <div class="row">
        <form action="hasil.php" method="post">
        <?php 
            require_once 'sewa.php'; 
            $sewakamar = new Sewa(); 
            ?> 

            <div class="inputBox">
                <h3>Nama</h3>
                <input type="text" placeholder="Masukkan Nama Anda" name="nama" required>
                
            </div>
            <div class="inputBox">
                <h3>Email</h3>
                <input type="text" placeholder="Masukkan Alamat Email Anda" name="email">
                
            </div>
            <div class="inputBox">
                <h3>Nomor Handphone</h3>
                <input type="text" pattern="[0-9]+" maxlength="12" placeholder="Masukkan Nomor Handphone Anda" name="handphone" required>
                
            </div>
            <div class="form-group form-book">
            <h3>Tipe Kamar</h3>
            <select class="form-select" aria-label="Default select example" name="tipekamar" required>
                <option value="Single">Single</option>
                <option value="Double">Double</option>
            </select>

            </div>
            <div class="inputBox">
                <h3>Tanggal Masuk</h3>
                <input type="date" name="tanggalmasuk" required>
                
            </div>
            <input type="submit" class="btn" value="Sewa Kamar" name=submit>
        </form>
    </div>
</section>
</body>
</html>

