<?php  
require("../../config/db.php");

if($_POST){
    $id             =(int) $_POST['id'];
    $status       =trim($_POST['status']);
    $nama     =trim($_POST['nama']);
    $alamat       =trim($_POST['alamat']);
    $keterangan        =trim($_POST['keterangan']);
    
    try{
        $sql='UPDATE non_positif SET 
                status = :status,
                nama = :nama,
                alamat = :alamat,
                keterangan = :keterangan
            WHERE id = :id';
    
        $stmt =$db->prepare($sql);
        $stmt->bindParam(":status",$status);
        $stmt->bindParam(":nama",$nama);
        $stmt->bindParam(":alamat",$alamat);
        $stmt->bindParam(":keterangan",$keterangan);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        if($stmt->rowCount()){
            header("Location: read.php?id=".$id."&status=updated");
            exit();
            }
        else{
            header("Location: read.php?id=".$id."&status=fail_update");
            exit();
            }
         }
    catch(Exception $e){
            echo "Error " . $e->getMessage();
            exit();
            }
}
else{
    header("Location: read.php?id=".$id."&status=fail_update");
    exit();
}
?>