<?php
ob_start();

if (isset($_POST['btn'])) {
    $name           = $_POST['name'];
    $email          = $_POST['email'];
    $phone          = $_POST['phone'];
    $Institute      = $_POST['Institute'];
    $Institute_type = $_POST['Institute_type'];
    $country        = $_POST['country'];
    $destinations   = $_POST['destinations'];
    $message        = $_POST['message'];


    echo "<pre>";
    print_r($_POST);
    echo "<pre>";
  
}


ob_end_clean();


?>