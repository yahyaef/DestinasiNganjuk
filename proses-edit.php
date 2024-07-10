<?php
// memanggil file koneksi.php untuk melakukan koneksi database
# 1
include 'config/koneksi.php';
	// membuat variabel untuk menampung data dari form
  # 2
  $id = $_POST['id_destinasi'];
  # 3
  $nama   = $_POST['nama_destinasi'];
  # 4
  $tempat     = $_POST['tp_destinasi'];
  # 5
  $deskripsi     = $_POST['deskripsi'];
  # 6
  $gambar = $_FILES['gambar']['name'];
  //cek dulu jika merubah gambar produk jalankan coding ini
  # 7
  if($gambar != "") {
    # 8
    $ekstensi_diperbolehkan = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
    # 9
    $x = explode('.', $gambar); //memisahkan nama file dengan ekstensi yang diupload
    # 10
    $ekstensi = strtolower(end($x));
    # 11
    $file_tmp = $_FILES['gambar']['tmp_name'];
    # 12   
    $angka_acak     = rand(1,999);
    # 13
    $nama_gambar_baru = $angka_acak.'-'.$gambar; //menggabungkan angka acak dengan nama file sebenarnya
    # 14
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
      # 15
      move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru); //memindah file gambar ke folder gambar          
      // jalankan query UPDATE berdasarkan ID yang produknya kita edit
      # 16
      $query  = "UPDATE tb_destinasi SET nama_destinasi = '$nama', tp_destinasi = '$tempat', deskripsi = '$deskripsi', gambar = '$nama_gambar_baru'";
      # 17
      $query .= "WHERE id_destinasi = '$id'";
      # 18
      $result = mysqli_query($koneksi, $query);
      // periska query apakah ada error
      # 19
      if(!$result){
        # 20
        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
             " - ".mysqli_error($koneksi));
      # 21
      } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
        # 22
        echo "<script>alert('Data berhasil diubah.');window.location='data-destinasi.php';</script>";
      }
    # 23
    }else {     
      //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
      # 24
      echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tambah_destinasi.php';</script>";
    }
  # 25
  }else {
    // jalankan query UPDATE berdasarkan ID yang produknya kita edit
    # 26
    $query  = "UPDATE tb_destinasi SET nama_destinasi = '$nama', tp_destinasi = '$tempat', deskripsi = '$deskripsi'";
    # 27
    $query .= "WHERE id_destinasi = '$id'";
    # 28
    $result = mysqli_query($koneksi, $query);
    // periska query apakah ada error
    # 29
    if(!$result){
      # 30
      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
          " - ".mysqli_error($koneksi));
    # 31
    } else {
      //tampil alert dan akan redirect ke halaman index.php
      //silahkan ganti index.php sesuai halaman yang akan dituju
      # 32
      echo "<script>alert('Data berhasil diubah.');window.location='data-destinasi.php';</script>";
    }
}