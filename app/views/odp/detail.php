<?php include("atas.php") ?>
<?php 

$id = $_GET['id'] ? intval($_GET['id']) : 0;

try{
  $sql="SELECT * FROM non_positif WHERE id = :id LIMIT 1" ;
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
$npositif=$stmt->fetch();


?>


<div class="container-fluid">
 

    <div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Detail Non-Positif</h2>

                <div class="clearfix"></div>

            </div>
            <div class="col-md-12">
                <a href="read.php" class="btn btn-info btn-md"> <i class="fa fa-arrow-left"></i> Kembali </a>
            </div>
            <br>
            <div class="x_content">

                <form action="function_edit.php" method="post">

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Nama <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input class="form-control" type="text" name="nama" value="<?= $npositif['nama'] ?>"required="" readonly>
                            <input class="form-control" type="hidden" name="id" value="<?= $npositif['id'] ?>"required=""readonly>
                     
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Alamat <span
                                class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input name="alamat" class="form-control" value="<?= $npositif['alamat'] ?>"type="text" required=""readonly>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Keterangan <span
                                class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6">
                            <input name="keterangan" class="form-control"value="<?= $npositif['keterangan'] ?>" type="text" required=""readonly>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Status <span
                                class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                            <select id="heard" name="status" class="form-control" required=""readonly>
                                <option value="" disable>--Pilih--</option>
                                <option <?php if($npositif['status']=="ODP")?>selected >ODP</option>
                                <option <?php if($npositif['status']=="PDP") ?>selected >PDP</option>
                            </select>

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