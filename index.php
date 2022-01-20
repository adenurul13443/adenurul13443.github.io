<?php
session_start();
//koneksi ke database
$koneksi = new mysqli ("localhost", "root", "", "nyayur.com");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stylefor_index.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <title>Masar.com</title>
</head>
<body>
     <!--Navigasi-->
     <div class="topnav">  
        <a href="#">Hallo, User <i class="fi fi-rr-user" style="margin-left: 10px;"></i></a>
        <a><i class="fi fi-rr-bookmark"></i></a>
        <a><i class="fi fi-rr-shopping-cart-add"></i></a>
        <a href="#">Promo</a>
        <a href="#">Contact</a>
        <a href="#">Kategori</a>
        <a class="tbl_home" href="#">Home</a>
        <div class="logo"><p><i class="fi fi-rr-shopping-bag" style="margin-left: 5px;"></i>Masar.com</p></div>
    </div>
    <!--Header-->
    <section>
        <div class="header">
            <h1>Selamat Datang di Masar.com<br>Belanja kebutuhan Anda <br> hanya di sini</h1>
        </div>
        <img src="a-removebg-preview.png" width="500px" height="350px">
    </section>

    <!-- Content -->
    <!-- Kategori Produk-->
    <h2 style="margin-left: 50px;">Kategori</h2>
    <div class="kategori">
        <div class="kotak">
            <div class="isi">
                <img src="carrot.png"><br><br><p style="margin-top: 0px;">Sayur</p>
            </div>
        </div>
        <div class="kotak">
            <div class="isi">
                <img src="apple(2).png"><br><br><p style="margin-top: 0px;">Buah</p>
            </div>
        </div>
        <div class="kotak">
            <div class="isi">
                <img src="egg.png"><br><p >Sembako</p>
            </div>
        </div>
        <div class="kotak">
            <div class="isi">
                <img src="fish.png"><br><p>Daging & Ikan</p>
            </div>
        </div>
        <div class="kotak">
            <div class="isi">
                <img src="hamburger-soda.png"><br><br><p style="margin-top: 0px;">Makanan & Minuman</p>
            </div>
        </div>
   
    </div>

    <!--Produk-->
    <div class="content">
        <div class="baris">
        <p style="margin-left: 100px; margin-bottom: 12px; margin-top: 50px; font-size: 25px;"><b>Sayur</b>
        <a class="tbl_produk" href="#">Kategori</a>
        </p>
            <?php $ambil = $koneksi->query("SELECT * FROM detail_produk"); ?>
            <?php while($perproduk = $ambil->fetch_assoc()){;?>
            <div class="kolom">
                <div class="kartu">
                    <img src="foto_produk/<?php echo $perproduk['foto_produk'];?>" alt="gambar_produk" >
                    <div class="kontainer">
                        <h4><b><?php echo $perproduk['nama_produk'];?></b></h4>
                        <p style="line-height: 20px;"><?php echo $perproduk['berat_produk'];?></p>
                        <p style="line-height: 3px;"><?php echo $perproduk['harga_produk'];?></p>
                        <a class="tbl_pesan" href="#"> Pesan </a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
       
    </div>
        

    <div class="info">
        <img src="sayuran1.jpg" style="margin-left: 0px; margin-top: 20px;">
        <h2>Tahukah kamu?</h2>
        <p>Mengonsumsi sayuran hijau dapat memberikan dampak yang baik bagi kesehatan tubuh kita. Apa saja dampaknya? Yuk cari tahu! </p>
        <p> <a href="https://www.grid.id/read/04124628/infografis-5-alasan-kenapa-kamu-harus-konsumsi-sayur-hijau-alasan-ke-5-berguna-banget?page=all" class="tbl1">Klik di sini!</a></p>
    </div>

    
    <img src="fotosayur.png" alt="foto" style="width: 1100px; height: 600px; margin-left: 120px;">
    
    <a class="tbl2" href="#">Klik Disini</a>

     <!--Jam dan Tanggal-->
     <h3 id="tanggal"></h3>

     <!--Footer-->
     <div class="footer">
        <a style="font-size: 20px;"><b>Contact</b></a><br>
        <i class='bx bxl-facebook'></i>
        <a>Masar.com</a>
        <br>
        <i class='bx bxl-instagram'></i>
        <a>@masarcom</a>
        <br>
        <i class='bx bxl-whatsapp' ></i>
        <a>08951345678</a>
        <br>
        <i class='bx bxl-gmail'></i>
        <a>masar@gmail.com</a>
        
    </div>

    <p id="copyright" align="center"><b>Copyright @2021 Masar.com</b></p>

    <!--Script JavaScript-->
    <script>
        var tgl = new Date();
       document.getElementById("tanggal").innerHTML = "Waktu akses " + tgl;
   </script>
</body>
</html>