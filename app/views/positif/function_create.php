<?php
require("../../config/db.php");

if($_POST){
    $status       =trim($_POST['status']);
    $nama     =trim($_POST['nama']);
    $tempat_lahir       =trim($_POST['tempat_lahir']);
    $tanggal_lahir        =date($_POST['tanggal_lahir']);
    $alamat        =trim($_POST['alamat']);
    $dirawat_di        =trim($_POST['dirawat_di']);
    $disebabkan_oleh        =trim($_POST['disebabkan_oleh']);
   
    
    try{
        $sql='INSERT INTO positif(status, nama, tempat_lahir, tanggal_lahir, alamat,dirawat_di,disebabkan_oleh)
              VALUES(:status, :nama, :tempat_lahir, :tanggal_lahir, :alamat, :dirawat_di, :disebabkan_oleh)';
    
        $stmt =$db->prepare($sql);
        $stmt->bindParam(":status",$status);
        $stmt->bindParam(":nama",$nama);
        $stmt->bindParam(":tempat_lahir",$tempat_lahir);
        $stmt->bindParam(":tanggal_lahir",$tanggal_lahir);
        $stmt->bindParam(":alamat",$alamat);
        $stmt->bindParam(":dirawat_di",$dirawat_di);
        $stmt->bindParam(":disebabkan_oleh",$disebabkan_oleh);
        $stmt->execute();
        if($stmt->rowCount()){
            header("Location: read.php?status=created");
            exit();
            }
        else{
            header("Location: read.php?status=fail_create");
            exit();
            }
         }
    catch(Exception $e){
            echo "Error " . $e->getMessage();
            exit();
            }
}
else{
    header("Location: read.php?status=fail_create");
    exit();
}
?>