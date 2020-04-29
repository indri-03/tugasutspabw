
      <div class="modal fade bs-example-modal-sm-<?=$positif['id']?>" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">

                        <div class="modal-header">
                          <h4 class="modal-title" id="myModalLabel2">Hapus</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">
                        <p>Apakah Anda Yakin Ingin Menghapus Data Hari <strong><?= $positif['nama'] ?></strong> ini ?</p>
                         </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                         <a href="delete.php?id=<?= $positif['id']?>" class="btn btn-primary">Hapus</a>
    </div>

                      </div>
                    </div>
                  </div>
