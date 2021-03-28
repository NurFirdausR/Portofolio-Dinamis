<?php 
require_once('../../../connect.php');

function insert()
{
    global $conn;

    // membuat variabel untuk menampung data dari form
    //   $gambar_service   = $_POST['gambar_service'];
    $skill_service     = $_POST['skill_service'];
    $nama_service    = $_POST['nama_service'];
    $gambar_service = $_FILES['gambar_service']['name'];


    //cek dulu jika ada gambar produk jalankan coding ini
    if ($gambar_service != "") {
        $ekstensi_diperbolehkan = array('png', 'jpg'); //ekstensi file gambar yang bisa diupload 
        $x = explode('.', $gambar_service); //memisahkan nama file dengan ekstensi yang diupload
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['gambar_service']['tmp_name'];
        $angka_acak     = rand(1, 999);
        $nama_gambar_baru = $angka_acak . '-' . $gambar_service; //menggabungkan angka acak dengan nama file sebenarnya
        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            move_uploaded_file($file_tmp, '../../../imgservice/' . $nama_gambar_baru); //memindah file gambar ke folder gambar
            // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
            $query = "INSERT INTO icando (gambar_service, nama_service,  skill_service) VALUES ('$nama_gambar_baru', '$nama_service','$skill_service')";
            $result = mysqli_query($conn, $query);
            // periska query apakah ada error
            if (!$result) {
                die("Query gagal dijalankan: " . mysqli_errno($conn) .
                    " - " . mysqli_error($conn));
            } else {
                //tampil alert dan akan redirect ke halaman index.php
                //silahkan ganti index.php sesuai halaman yang akan dituju
                header('location:../../index.php?halaman=icando');

                // echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
            }
        } else {
            //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
            header('location:../../index.php?halaman=icando_tambah');

            // echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tambah_produk.php';</script>";
        }
    } else {
        $query = "INSERT INTO icando (, nama_service,  skill_service) VALUES (null, '$nama_service','$skill_service')";
        $result = mysqli_query($conn, $query);
        // periska query apakah ada error
        if (!$result) {
            die("Query gagal dijalankan: " . mysqli_errno($conn) .
                " - " . mysqli_error($conn));
        } else {
            //tampil alert dan akan redirect ke halaman index.php
            //silahkan ganti index.php sesuai halaman yang akan dituju
            header('location:../../index.php?halaman=icando');

            // echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
        }
    }
}



function edit_ubah(){
    global $conn;

  $id = $_POST['id'];
  $nama_service   = $_POST['nama_service'];
  $skill_service     = $_POST['skill_service'];
  $gambar_service = $_FILES['gambar_service']['name'];
  //cek dulu jika merubah gambar produk jalankan coding ini
  if($gambar_service != "") {
    $ekstensi_diperbolehkan = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
    $x = explode('.', $gambar_service); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['gambar_service']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $nama_gambar_baru = $angka_acak.'-'.$ekstensi; //menggabungkan angka acak dengan nama file sebenarnya
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                  move_uploaded_file($file_tmp, '../../../imgservice/'.$nama_gambar_baru); //memindah file gambar ke folder gambar
                      
                    // jalankan query UPDATE berdasarkan ID yang produknya kita edit
                    $query  = "UPDATE icando SET gambar_service ='$nama_gambar_baru',nama_service = '$nama_service', skill_service = '$skill_service'";
                    $query .= "WHERE id = '$id'";
                    $result = mysqli_query($conn,$query);
                    // periska query apakah ada error
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($conn).
                             " - ".mysqli_error($conn));
                    } else {
                      //tampil alert dan akan redirect ke halaman index.php?halaman=profile
                      //silahkan ganti index.php?halaman=profile sesuai halaman yang akan dituju
                      // echo "<script>alert('Data berhasil diubah.');window.location='index.php?halaman=dashboard';</script>";
                      header('location:../../index.php?halaman=icando');
                    }
              } else {     
               //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                  echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tambah_produk.php';</script>";
              }
    } else {
      // jalankan query UPDATE berdasarkan ID yang produknya kita edit
      $query  = "UPDATE icando SET nama_service = '$nama_service', skill_service = '$skill_service'";

      $query .= "WHERE id = '$id'";
      $result = mysqli_query($conn, $query);
      // periska query apakah ada error
      if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($conn).
                             " - ".mysqli_error($conn));
      } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
        header('location: ../../index.php?halaman=icando');
          // echo "<script>alert('Data berhasil diubah.');window.location='index.php?halaman=dashboard';</script>";
      }
  }
}


function hapus()
{
    global $conn;

    global $conn;
    $id = $_GET["id"];
    var_dump($id);
//mengambil id yang ingin dihapus

    //jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM icando WHERE id='$id' ";
    $hasil_query = mysqli_query($conn, $query);

    //periksa query, apakah ada kesalahan
    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_errno($conn).
       " - ".mysqli_error($conn));
    } else {
        header('location: ../../index.php?halaman=icando');

    //   echo "<script>alert('Data berhasil dihapus.');window.location='index.php';</script>";
    }
    
}