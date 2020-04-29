<?php require_once("../../../auth.php"); ?>

<?php include("atas.php") ?>
<?php 

$id = $_GET['id'] ? intval($_GET['id']) : 0;

try{
  $sql="SELECT * FROM positif WHERE id = :id LIMIT 1" ;
  $stmt=$db->prepare($sql);
  $stmt->bindParam(":id",$id, PDO::PARAM_INT);
  $stmt->execute();
}
catch(Exception $e){
  echo "Error " . $e->getMessage();
  exit(); 
}
if(!$stmt->rowCount()){
  header("Location: read.php");
  exit();
}
$positif=$stmt->fetch();


?>


<div class="container-fluid">


    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Detail Positif</h2>

                    <div class="clearfix"></div>

                </div>
                <div class="col-md-12">
                    <a href="read.php" class="btn btn-info btn-md"> <i class="fa fa-arrow-left"></i> Kembali </a>
                </div>
                <br>
                <div class="x_content">

                    <form action="function_edit.php" method="post">

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Nama <span
                                    class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input class="form-control" value="<?= $positif['nama'] ?>" type="text" name="nama"
                                    required="" readonly>
                                <input class="form-control" value="<?= $positif['id'] ?>" type="hidden" name="id"
                                    required="" readonly>

                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Tempat Lahir <span
                                    class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input name="tempat_lahir" value="<?= $positif['tempat_lahir'] ?>" class="form-control"
                                    type="text" required="" readonly>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal Lahir <span
                                    class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input name="tanggal_lahir" value="<?= $positif['tanggal_lahir'] ?>"
                                    class="form-control" type="date" required="" readonly>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Alamat <span
                                    class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input name="alamat" class="form-control" value="<?= $positif['alamat'] ?>" type="text"
                                    required="" readonly>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Dirawat di <span
                                    class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6">
                                <input name="dirawat_di" value="<?= $positif['dirawat_di'] ?>" class="form-control"
                                    type="text" required="" readonly>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Disebabkan oleh <span
                                    class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6">
                                <input name="disebabkan_oleh" value="<?= $positif['disebabkan_oleh'] ?>"
                                    class="form-control" type="text" required="" readonly>
                                <input name="status" value="positif" class="form-control" type="hidden" required="">

                            </div>
                        </div>

                        <div class="ln_solid"></div>
                      

                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<?php include("bawah.php") ?>