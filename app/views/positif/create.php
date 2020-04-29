<?php require_once("../../../auth.php"); ?>

<?php include("atas.php") ?>
<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Form Tambah Positif</h2>

                <div class="clearfix"></div>

            </div>
            <div class="col-md-12">
                <a href="read.php" class="btn btn-info btn-md"> <i class="fa fa-arrow-left"></i> Kembali </a>
            </div>
            <br>
            <div class="x_content">

                <form action="function_create.php" method="post">

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Nama <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input class="form-control" type="text" name="nama" required="">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Tempat Lahir <span
                                class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input name="tempat_lahir" class="form-control" type="text" required="">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal Lahir <span
                                class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input name="tanggal_lahir" class="form-control" type="date" required="">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Alamat <span
                                class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input name="alamat" class="form-control" type="text" required="">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Dirawat di <span
                                class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6">
                            <input name="dirawat_di" class="form-control" type="text" required="">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Disebabkan oleh <span
                                class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6">
                            <input name="disebabkan_oleh" class="form-control" type="text" required="">
                            <input name="status" value="positif" class="form-control" type="hidden" required="">
                    
                        </div>
                    </div>

                    <div class="ln_solid"></div>
                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                            <button class="btn btn-primary" type="reset">Reset</button>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<?php include("bawah.php") ?>