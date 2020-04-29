<?php require_once("../../../auth.php"); ?>

<?php include("atas.php") ?>
<div class="container-fluid">
    <?php if (isset($_GET['status']) && $_GET['status']=="deleted") : ?>
        <div class="alert alert-success alert-dismissible mt-5" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
        <strong>Berhasil Dihapus!</strong> 
    </div>
    <?php endif ?>
    <?php if (isset($_GET['status']) && $_GET['status']=="fail_delete") : ?>
        <div class="alert alert-danger alert-dismissible mt-5" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
        <strong>Tidak berhasil DIhapus!</strong> 
    </div>
    <?php endif ?>
    <?php if (isset($_GET['status']) && $_GET['status']=="updated") : ?>
        <div class="alert alert-danger alert-dismissible mt-5" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
        <strong>Berhasil DiUbah!</strong> 
    </div>
    <?php endif ?>
    <?php if (isset($_GET['status']) && $_GET['status']=="created") : ?>
    <div class="alert alert-info alert-dismissible mt-5" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
        <strong>Berhasil Ditambahkan!</strong> 
    </div>
    <?php endif ?>

    <?php if (isset($_GET['status']) && $_GET['status']=="fail_update") : ?>
        <div class="alert alert-danger alert-dismissible mt-5" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
        <strong>Tidak Berhasil DiUbah!</strong> 
    </div>
    <?php endif ?>
    <table class="table table-striped jambo_table bulk_action">
        <div class="row">
            <div class="col-md-12">
                <a href="create.php" class="btn btn-info btn-md"> <span class="fa fa-plus-square-o"></span> Tambahkan
                    Data </a>
            </div>

        </div>
        <thead>
            <tr class="headings">

                <th class="column-title" style="display: table-cell;">No. </th>
                <th class="column-title" style="display: table-cell;">Nama </th>
                <th class="column-title" style="display: table-cell;">Tempat, Tanggal Lahir </th>
                <th class="column-title" style="display: table-cell;">Alamat</th>
                <th class="column-title" style="display: table-cell;">Dirawat Di </th>
                <th class="column-title" style="display: table-cell;">Disebabkan Oleh </th>
                <th class="column-title no-link last text-center" style="display: table-cell;"><span class="nobr">Action</span>
                </th>

            </tr>
        </thead>

        <tbody>
            <?php  $i=1;
                        if($result->rowCount() > 0) : ?>
            <?php foreach($result as $positif) : ?>
            <tr class="even pointer">

                <td class=" "><?=$i++ ?></td>
                <td class=" "><?=$positif['nama'] ?></td>
                <td class=" "><?=$positif['tempat_lahir'] ?>, <?=$positif['tanggal_lahir'] ?></td>
                <td class=" "><?=$positif['alamat'] ?></td>
                <td class=" "><?=$positif['dirawat_di'] ?></td>
                <td class=" "><?=$positif['disebabkan_oleh'] ?></td>
                <td>
                    <a title="detail" class="btn btn-success" href="detail.php?id=<?=$positif['id']?>"><span
                            class="glyphicon glyphicon-th-list"></span></a>
                    <a title="edit" class="btn btn-info" href="edit.php?id=<?=$positif['id']?>"><span
                            class="glyphicon glyphicon-edit"></span></a>
                    <a type="button" class="btn btn-danger" data-toggle="modal" data-target=".bs-example-modal-sm-<?=$positif['id']?>">
                        <span class="glyphicon glyphicon-trash"></span></a>
                    <?php include("modal.php") ?>
                </td>
                </td>
            </tr>
            <?php endforeach ?>

            <?php endif ?>


        </tbody>
    </table>


</div>


<?php include("bawah.php") ?>