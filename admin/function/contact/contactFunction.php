<?php
require_once('../../../connect.php');

function insert()
{
    global $conn;
    if (isset($_POST['contact'])) {
        $nama_contact = $_POST['nama_contact'];
        $email_contact = $_POST['email_contact'];
        $service_contact = $_POST['service_contact'];
        $budget_contact = $_POST['budget_contact'];
        $message_contact = $_POST['message_contact'];

        // if ($nama_contact == "" || $email_contact == "" || $service_contact == "" || $budget_contact == "" || $message_contact == "") {
        //     header('location: ../../../portofolio.php');
        // } else {

            $query = "INSERT INTO contact (nama_contact, email_contact,  service_contact, budget_contact, message_contact) VALUES ('$nama_contact', '$email_contact','$service_contact','$budget_contact','$message_contact'    )";
            $result = mysqli_query($conn, $query);
            session_start();
            $_SESSION['message'] = "Pesan anda terkirim!";
            header('location: ../../../portofolio.php');
            exit;
        // }
    }
}
