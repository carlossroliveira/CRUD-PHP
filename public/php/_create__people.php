<?php

include 'connection.php';

$fullName = $_POST['fullName'];
$fullDate = $_POST['fullDate'];
$fullRG =   $_POST['fullRG'];
$fullCPF =  $_POST['fullCPF'];


mysqli_query($con, "INSERT INTO `table_people`(`name_bank`, `date_back`, `rg_bank`, `cpf_bank`) VALUES ('$fullName','$fullDate', '$fullRG', '$fullCPF')");
?>
