<?php
require_once('../../../connect.php');



function edit_ubah(){
      global $conn;

    $id = $_POST['id'];
    $about_me   = $_POST['about_me'];
    $name_me     = $_POST['name_me'];
    $email_me    = $_POST['email_me'];
    $github_me    = $_POST['github_me'];
 
    $query  = "UPDATE about SET about_me = '$about_me', name_me = '$name_me', email_me = '$email_me', github_me = '$github_me' WHERE  id = '$id'";
    $result = mysqli_query($conn, $query);
if (!$result) {
    echo "<script>alert('gagal mengubah about)</script>";
    header('location:../../index.php?halaman=about');


}else{
    header('location:../../index.php?halaman=dashboard');

}
}

?>


