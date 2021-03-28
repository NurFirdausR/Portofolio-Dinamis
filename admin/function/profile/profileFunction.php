<?php
require_once('../../../connect.php');



function edit_ubah(){
      global $conn;

    $id = $_POST['id'];
    $username   = $_POST['username'];
    $password     = $_POST['password'];
    $nama_admin    = $_POST['nama_admin'];
    $job_admin    = $_POST['job_admin'];
    $foto_admin = $_FILES['foto_admin']['name'];
    //cek dulu jika merubah gambar produk jalankan coding ini
    if($foto_admin != "") {
      $ekstensi_diperbolehkan = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
      $x = explode('.', $foto_admin); //memisahkan nama file dengan ekstensi yang diupload
      $ekstensi = strtolower(end($x));
      $file_tmp = $_FILES['foto_admin']['tmp_name'];   
      $angka_acak     = rand(1,999);
      $nama_gambar_baru = $angka_acak.'-'.$ekstensi; //menggabungkan angka acak dengan nama file sebenarnya
      if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                    move_uploaded_file($file_tmp, '../../../img/'.$nama_gambar_baru); //memindah file gambar ke folder gambar
                        
                      // jalankan query UPDATE berdasarkan ID yang produknya kita edit
                     $query  = "UPDATE admin SET username = '$username', password = '$password', nama_admin = '$nama_admin', job_admin = '$job_admin', foto_admin = '$nama_gambar_baru'";
                      $query .= "WHERE id = '$id'";
                      $result = mysqli_query($conn, $query);
                      // periska query apakah ada error
                      if(!$result){
                          die ("Query gagal dijalankan: ".mysqli_errno($conn).
                               " - ".mysqli_error($conn));
                      } else {
                        //tampil alert dan akan redirect ke halaman index.php?halaman=profile
                        //silahkan ganti index.php?halaman=profile sesuai halaman yang akan dituju
                        // echo "<script>alert('Data berhasil diubah.');window.location='index.php?halaman=dashboard';</script>";
                        header('location:../../index.php?halaman=dashboard');
                      }
                } else {     
                 //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                    echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tambah_produk.php';</script>";
                }
      } else {
        // jalankan query UPDATE berdasarkan ID yang produknya kita edit
        $query  = "UPDATE admin SET username = '$username', password = '$password', nama_admin = '$nama_admin', job_admin = '$job_admin'";
        $query .= "WHERE id = '$id'";
        $result = mysqli_query($conn, $query);
        // periska query apakah ada error
        if(!$result){
              die ("Query gagal dijalankan: ".mysqli_errno($conn).
                               " - ".mysqli_error($conn));
        } else {
          //tampil alert dan akan redirect ke halaman index.php
          //silahkan ganti index.php sesuai halaman yang akan dituju
          header('location: ../../index.php?halaman=dashboard');
            // echo "<script>alert('Data berhasil diubah.');window.location='index.php?halaman=dashboard';</script>";
        }
    }
}

?>


