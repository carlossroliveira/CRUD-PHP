<?php

include './connection.php';

$id = $_POST['id'];

$fullName = $_POST['fullName'];
$fullDate = $_POST['fullDate'];
$fullRG =   $_POST['fullRG'];
$fullCPF =  $_POST['fullCPF'];



echo mysqli_query($con, "UPDATE `table_people` SET `name_bank`='$fullName',`date_back`='$fullDate',`rg_bank`='$fullRG',`cpf_bank`='$fullCPF' WHERE id_bank = $id");
