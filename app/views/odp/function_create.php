<?php
require("../../config/db.php");

if($_POST){
    $status       =trim($_POST['status']);
    $nama     =trim($_POST['nama']);
    $alamat       =trim($_POST['alamat']);
    $keterangan        =trim($_POST['keterangan']);
   
    
    try{
        $sql='INSERT INTO non_positif(status, nama, alamat, keterangan)
              VALUES(:status, :nama, :alamat, :keterangan)';
    
        $stmt =$db->prepare($sql);
        $stmt->bindParam(":status",$status);
        $stmt->bindParam(":nama",$nama);
        $stmt->bindParam(":alamat",$alamat);
        $stmt->bindParam(":keterangan",$keterangan);
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