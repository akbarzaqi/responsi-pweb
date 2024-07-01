<?php 
    $name = $_POST["name"];
    $email = $_POST["email"];
    $no_tlp = $_POST["no_tlp"];
    $tgl = $_POST["tgl"];
    $jam = $_POST["jam"];

    $open = fopen("data.txt", "a+");
    $fill = fgets($open, 80);
   
    $split = explode(";", $temp);

    fputs($open, "$name|$email|$no_tlp|$tgl|$jam\n");
    fclose($open);

    header("location:jadwal.php");
?>