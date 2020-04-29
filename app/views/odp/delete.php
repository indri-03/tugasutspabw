<?php 

require("../../config/db.php");

if(isset($_GET['id'])){

        try{
            $sql='DELETE FROM non_positif WHERE id = :id  LIMIT 1';
            $stmt= $db->prepare($sql);
            $stmt->bindParam(":id",$_GET['id'], PDO::PARAM_INT);
            $stmt->execute();
            if($stmt->rowCount()){
                header("Location: read.php?status=deleted");
                exit();
            }
            header("Location: read.php?status=fail_delete");
            exit();
        }
        catch(Exception $e){
            echo "Error " . $e->getMessage();
            exit();
        }



}
else{
    header("Location: read.php?status=fail_delete");
    exit();
}




?>