<!-- Modal pengeluaran -->
<div class="modal fade" id="addPengeluaran" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Tambah Pengeluaran</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Pengeluaran</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="inputEmail3" placeholder="Jenis Pengeluaran">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Kategori</label>
            <div class="col-sm-10">
              <select class="form-control">
                <option>Rutin</option>
                <option>Tidak Rutin</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Waktu</label>
            <div class="col-sm-10">
              <input type="email" class="form-control datepicker" id="inputEmail3" placeholder="Waktu Pengeluaran">
            </div>
          </div>
          <div class="form-group">
            <label for="inputNilai" class="col-sm-2 control-label">Nilai</label>
            <div class="col-sm-10">
              <div class="form-group input-group">
                <span class="input-group-addon">Rp.</span>
                <input type="text" class="form-control" id="inputNilai">
                <span class="input-group-addon">.00</span>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary">Tambah</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal edit Pengeluaran -->
<div class="modal fade" id="editPengeluaran" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Edit Pengeluaran</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Pengeluaran</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="inputEmail3" placeholder="Jenis Pengeluaran">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Kategori</label>
            <div class="col-sm-10">
              <select class="form-control">
                <option>Rutin</option>
                <option>Tidak Rutin</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Waktu</label>
            <div class="col-sm-10">
              <input type="email" class="form-control datepicker" id="inputEmail3" placeholder="Waktu Pengeluaran">
            </div>
          </div>
          <div class="form-group">
            <label for="inputNilai" class="col-sm-2 control-label">Nilai</label>
            <div class="col-sm-10">
              <div class="form-group input-group">
                <span class="input-group-addon">Rp.</span>
                <input type="text" class="form-control" id="inputNilai">
                <span class="input-group-addon">.00</span>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-warning">Ubah</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal delete Pengeluaran -->
<div class="modal fade" id="deletePengeluaran" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Delete Pengeluaran</h4>
      </div>
      <div class="modal-body">
        <h2>Apakah anda yakin menghapus pengeluaran ini?</h2>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-danger">Hapus</button>
      </div>
    </div>
  </div>
</div>