<?php
@include 'config/koneksi.php';
session_start();
if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WISATA NGANJUK</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="user/html/home.html">
                        <span class="title">WISATA NGANJUK</span>
                    </a>
                </li>
                <li>
                    <a href="user/html/home.html">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Home</span>
                    </a>
                </li>
                <li>
                    <a href="user/html/about.html">
                        <span class="icon">
                            <ion-icon name="newspaper-outline"></ion-icon>
                        </span>
                        <span class="title">About</span>
                    </a>
                </li>
                <li>
                    <a href="user/php/profil.php">
                        <span class="icon">
                            <ion-icon name="person-circle-outline"></ion-icon>
                        </span>
                        <span class="title">Profile</span>
                    </a>-
                </li>
                <li>
                    <a href="user/php/gallery.php">
                        <span class="icon">
                            <ion-icon name="images-outline"></ion-icon>
                        </span>
                        <span class="title">Gallery</span>
                    </a>
                </li>
                <li>
                    <a href="user/html/contact.html">
                        <span class="icon">
                            <ion-icon name="id-card-outline"></ion-icon>
                        </span>
                        <span class="title">Contect</span>
                    </a>
                </li>

                <li>
                    <a href="logout.php">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- ========================= Main ==================== -->
    <div class="main">
        <div class="details">
            <div class="recentOrders">
                <div class="banner">
                    <h2>WELCOME TO WISATA NGANJUK</h2>
                </div>
            
                <!-- about -->
                <div class="info">
                    <h3>ABOUT</h3>
                    <div>Kabupaten Nganjuk adalah kota kecil yang memiliki tempat wisata yang menakjubkan.
                        <strong>Salah satunya adalah air terjun sedudo, air tejun ini sangat terkenal</strong>.
                        Selain itu, Kabupaten Nganjuk dikenal sebagai kota angin karena anginnya yang cukup kencang
                        saat musim kemarau membuat kabupaten ini di juluki sebagai Nganjuk Kota Angin.</div>
                    <div>Selain itu Kabupaten Nganjuk juga di juluki sebagai Nganjuk Ijo Royo-Royo yang artinya tumbuh
                        subur dan berkembang dangan daunnya hijau segar penuh keteduhan. Dan dapat membawa manfaat bagi insan lainnya.
                        Ijo Royo-Royo adalah sebuah kata kiasan tentang kondisi yang sesungguhnya. Dimana daerah tersebut memiliki kepesonaan tersendiri.</div>
                </div>
            </div>
        </div>
    </div>
   

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>