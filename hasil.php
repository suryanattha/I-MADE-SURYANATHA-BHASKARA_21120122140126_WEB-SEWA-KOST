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
    </header>
    <section class="hasil" id="hasil">
    <h1 class="heading">
        <span>s</span>
        <span>e</span>
        <span>l</span>
        <span>a</span>
        <span>m</span>
        <span>a</span>
        <span>t</span>
    </h1>
    <div class="box-container">
        <div class="box">
        <?php 
            require_once 'sewa.php'; 
            $sewakamar = new Sewa(); 
            ?>
        <?php $sewakamar->setName($_POST['nama']); ?>
                <h3>Permintaan Sewa Kamar Berhasil</h3>
                    <p>Atas Nama : <?php echo $sewakamar->getName(); ?></p><br>
                    <p><?php
                        if(isset($_POST['submit'])){
                            $email = $_POST['email'];
                            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                echo "Email : ".$email;
                            } else {
                                echo "Alamat email tidak valid, silahkan mengulang";
                            }
                        }
                        ?></p><br>
                    <p>Nomor Handhone : <?php echo $handphone = $_POST["handphone"]; ?></p><br>
                    <p><?php $tipekamar = $_POST["tipekamar"];
                      if ($tipekamar == "Single") {
                        echo 'Kamar yang Anda Pilih adalah Tipe Single Bed';
                        } else {
                        echo 'Kamar yang Anda Pilih adalah Tipe Double Bed'; 
                        }       
                      ?></p><br>
                    <p>Tanggal Masuk  : <?php echo $tanggalmasuk = $_POST["tanggalmasuk"]; ?></P>
                    
        </div>
    </div>
    <h1 class="heading">
        <span>t</span>
        <span>e</span>
        <span>r</span>
        <span>i</span>
        <span>m</span>
        <span>a</span>
        <span class="space"></span>
        <span>k</span>
        <span>a</span>
        <span>s</span>
        <span>i</span>
        <span>h</span>
    </h1>
</section>