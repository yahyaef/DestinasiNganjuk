<?php
  include('config/koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
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
    <style type="text/css">
    * {
        font-family: "Trebuchet MS";
    }
    h1 {
      text-transform: uppercase;
      color: #4b4276;
    }
    button {
      background-color: #4b4276;
      color: #fff;
      padding: 10px;
      text-decoration: none;
      font-size: 12px;
      border: 0px;
      margin-top: 20px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: #2a2185;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #ededed;
    }
  </style>
</head>
<body>
<div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a><span class="title">WISATA NGANJUK</span></a>
                </li>
                <li>
                    <a href="dashboard.php">
                        <span class="icon">
                            <ion-icon name="cube-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="data-destinasi.php">
                        <span class="icon">
                          <ion-icon name="file-tray-full-outline"></ion-icon>
                        </span>
                        <span class="title">Data Destinasi</span>
                    </a>
                </li>
                <li>
                    <a href="data_pengunjung.php">
                        <span class="icon">
                          <ion-icon name="file-tray-full-outline"></ion-icon>
                        </span>
                        <span class="title">Data Pengunjung</span>
                    </a>
                </li>
                <li>
                    <a href="logout.php">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Log Out</span>
                    </a>
                </li>
            </ul>
        </div>        
    </div>

            <!-- ================ Data ================= -->
    <div class="main">
        <div class="details">
            <div class="recentOrders">
                <div class="header">
                    <h4>Tambah Destinasi
                </div>
                <center><br>
                    <h1>Tambah Destinasi</h1>
                <center><br>
                <form method="POST" action="proses-tambah.php" enctype="multipart/form-data" >
                <section class="base">
                    <!-- menampung nilai id produk yang akan di edit -->
                    <div>
                        <label>Nama Destinasi</label>
                        <input type="text" name="nama_destinasi" autofocus="" required="" />
                    </div>
                    <div>
                        <label>Tempat Destinasi</label>
                        <input type="text" name="tp_destinasi" />
                    </div>
                    <div>
                        <label>Deskripsi</label>
                        <input type="text" name="deskripsi" />
                    </div>
                    <div>
                        <label>Gambar</label>
                        <input type="file" name="gambar" required="" />
                    </div>
                    <div>
                        <button type="submit">Simpan</button>
                    </div>
                    </section>
                </form>  
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