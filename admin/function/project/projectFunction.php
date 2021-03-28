

<?php
require_once('../../../connect.php');



function insert()
{
    global $conn;

    // membuat variabel untuk menampung data dari form
    //   $gambar_project   = $_POST['gambar_project'];
    $judul_project     = $_POST['judul_project'];
    $deskripsi_project    = $_POST['deskripsi_project'];
    $gambar_project = $_FILES['gambar_project']['name'];


    //cek dulu jika ada gambar produk jalankan coding ini
    if ($gambar_project != "") {
        $ekstensi_diperbolehkan = array('png', 'jpg'); //ekstensi file gambar yang bisa diupload 
        $x = explode('.', $gambar_project); //memisahkan nama file dengan ekstensi yang diupload
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['gambar_project']['tmp_name'];
        $angka_acak     = rand(1, 999);
        $nama_gambar_baru = $angka_acak . '-' . $gambar_project; //menggabungkan angka acak dengan nama file sebenarnya
        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            move_uploaded_file($file_tmp, '../../../imgproject/' . $nama_gambar_baru); //memindah file gambar ke folder gambar
            // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
            $query = "INSERT INTO project (judul_project, deskripsi_project,  gambar_project) VALUES ('$judul_project', '$deskripsi_project','$nama_gambar_baru')";
            $result = mysqli_query($conn, $query);
            // periska query apakah ada error
            if (!$result) {
                die("Query gagal dijalankan: " . mysqli_errno($conn) .
                    " - " . mysqli_error($conn));
            } else {
                //tampil alert dan akan redirect ke halaman index.php
                //silahkan ganti index.php sesuai halaman yang akan dituju
                header('location:../../index.php?halaman=project');

                // echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
            }
        } else {
            //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
            header('location:../../index.php?halaman=project_tambah');

            // echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tambah_produk.php';</script>";
        }
    } else {
        $query = "INSERT INTO project (judul_project, deskripsi_project,  gambar_project) VALUES ('$judul_project', '$deskripsi_project',null)";
        $result = mysqli_query($conn, $query);
        // periska query apakah ada error
        if (!$result) {
            die("Query gagal dijalankan: " . mysqli_errno($conn) .
                " - " . mysqli_error($conn));
        } else {
            //tampil alert dan akan redirect ke halaman index.php
            //silahkan ganti index.php sesuai halaman yang akan dituju
            header('location:../../index.php?halaman=dashboard');

            // echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
        }
    }
}




function edit_ubah(){
    global $conn;

  $id = $_POST['id'];
//   $gambar_project   = $_POST['gambar_project'];
  $judul_project     = $_POST['judul_project'];
  $deskripsi_project    = $_POST['deskripsi_project'];
//   $job_admin    = $_POST['job_admin'];
  $gambar_project = $_FILES['gambar_project']['name'];
  //cek dulu jika merubah gambar produk jalankan coding ini
  if($gambar_project != "") {
    $ekstensi_diperbolehkan = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
    $x = explode('.', $gambar_project); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['gambar_project']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $nama_gambar_baru = $angka_acak.'-'.$ekstensi; //menggabungkan angka acak dengan nama file sebenarnya
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                  move_uploaded_file($file_tmp, '../../imgproject/'.$nama_gambar_baru); //memindah file gambar ke folder gambar
                      
                    // jalankan query UPDATE berdasarkan ID yang produknya kita edit
                   $query  = "UPDATE project SET judul_project = '$judul_project', deskripsi_project = '$deskripsi_project',  gambar_project = '$nama_gambar_baru'";
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
                      header('location: ../../index.php?halaman=project');
                    }
              } else {     
               //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                  echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tambah_produk.php';</script>";
              }
    } else {
      // jalankan query UPDATE berdasarkan ID yang produknya kita edit
      $query  = "UPDATE project SET judul_project = '$judul_project', deskripsi_project = '$deskripsi_project'";
    //   $query  = "UPDATE admin SET username = '$username', password = '$password', nama_admin = '$nama_admin', job_admin = '$job_admin'";
      $query .= "WHERE id = '$id'";
      $result = mysqli_query($conn, $query);
      // periska query apakah ada error
      if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($conn).
                             " - ".mysqli_error($conn));
      } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
        header('location: ../../index.php?halaman=project');
          // echo "<script>alert('Data berhasil diubah.');window.location='index.php?halaman=dashboard';</script>";
      }
  }
}

 function hapus()
{
    global $conn;
    $id = $_GET["id"];
    var_dump($id);
//mengambil id yang ingin dihapus

    //jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM project WHERE id='$id' ";
    $hasil_query = mysqli_query($conn, $query);

    //periksa query, apakah ada kesalahan
    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_errno($conn).
       " - ".mysqli_error($conn));
    } else {
        header('location: ../../index.php?halaman=project');

    //   echo "<script>alert('Data berhasil dihapus.');window.location='index.php';</script>";
    }
}


?>


