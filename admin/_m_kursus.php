<!-- Modal tampil jadwal -->
<div class="modal fade" id="tampilJadwal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Jadwal</h4>
      </div>
      <div class="modal-body">
        <h3><?php $today = date("F j, Y, g:i a"); echo $today; ?></h3>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal tampil jadwal tutor-->
<div class="modal fade" id="jadwalTutor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Jadwal tutor Mengajar</h4>
      </div>
      <div class="modal-body">
        <h3><?php $today = date("F j, Y, g:i a"); echo $today; ?></h3>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal delete kelas -->
<div class="modal fade" id="deleteKelas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Delete Kelas</h4>
      </div>
      <div class="modal-body">
        <h2>Apakah anda yakin menghapus Kelas ini?</h2>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-danger">Hapus</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal delete tutor -->
<div class="modal fade" id="deleteTutor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Delete Tutor</h4>
      </div>
      <div class="modal-body">
        <h2>Apakah anda yakin menghapus Tutor ini?</h2>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-danger">Hapus</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal delete peserta kursus -->
<div class="modal fade" id="deletePeserta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Delete Peserta kursus</h4>
      </div>
      <div class="modal-body">
        <h2>Apakah anda yakin menghapus Peserta ini?</h2>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-danger">Hapus</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal edit Kelas -->
<div class="modal fade" id="editKelas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Ubah Kelas</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-4 control-label">Nama Kelas</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="inputEmail3" placeholder="Nama Kelas">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-4 control-label">Jadwal Kelas</label>
            <div class="col-sm-8">
              <input type="text" class="form-control datepicker" id="inputEmail3" placeholder="Jadwal Kelas">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-4 control-label">Waktu</label>
            <div class="col-sm-8">
              <div id="editWaktuKelas" class="input-append">
                <input class="form-control tombol" data-format="hh:mm:ss" type="text" placeholder="Waktu Kursus"></input>
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
<!-- Modal edit Tutor -->
<div class="modal fade" id="editTutor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Ubah Tutor</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-4 control-label">Nama Tutor</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="inputEmail3" placeholder="Nama Tutor">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-4 control-label">Jadwal Tutor</label>
            <div class="col-sm-8">
              <input type="text" class="form-control datepicker" id="inputEmail3" placeholder="Jadwal Tutor">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-4 control-label">Waktu</label>
            <div class="col-sm-8">
              <div id="editWaktuTutor" class="input-append">
                <input class="form-control tombol" data-format="hh:mm:ss" type="text" placeholder="Waktu Tutor"></input>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-4 control-label">No.Hp Tutor</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="inputEmail3" placeholder="No.Hp Tutor">
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
<!-- Modal edit Peserta -->
<div class="modal fade" id="editPeserta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Ubah Peserta</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-4 control-label">Nama Peserta</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="inputEmail3" placeholder="Nama Peserta">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-4 control-label">Alamat Peserta</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="inputEmail3" placeholder="Alamat Peserta">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-4 control-label">No.Hp Peserta</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="inputEmail3" placeholder="No.Hp Tutor">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Status</label>
            <div class="col-sm-8">
              <select class="form-control">
                <option>Aktif</option>
                <option>Tidak Aktif</option>
              </select>
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
<!-- Modal tambah Kelas -->
<div class="modal fade" id="addKelas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Tambah Kelas</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-4 control-label">Nama Kelas</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="inputEmail3" placeholder="Nama Kelas">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-4 control-label">Jadwal Kelas</label>
            <div class="col-sm-8">
              <input type="text" class="form-control datepicker" id="inputEmail3" placeholder="Jadwal Kelas">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-4 control-label">Waktu</label>
            <div class="col-sm-8">
              <div id="waktuKelas" class="input-append">
                <input class="form-control tombol" data-format="hh:mm:ss" type="text" placeholder="Waktu Kursus"></input>
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
<!-- Modal tambah Tutor -->
<div class="modal fade" id="addTutor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Tambah Tutor</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-4 control-label">Nama Tutor</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="inputEmail3" placeholder="Nama Tutor">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-4 control-label">Jadwal Tutor</label>
            <div class="col-sm-8">
              <input type="text" class="form-control datepicker" id="inputEmail3" placeholder="Jadwal Tutor">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-4 control-label">Waktu</label>
            <div class="col-sm-8">
              <div id="waktuTutor" class="input-append">
                <input class="form-control tombol" data-format="hh:mm:ss" type="text" placeholder="Waktu Kursus"></input>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-4 control-label">No.Hp Tutor</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="inputEmail3" placeholder="No.Hp Tutor">
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
<!-- Modal tambah Peserta -->
<div class="modal fade" id="addPeserta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Tambah Peserta</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-4 control-label">Nama Peserta</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="inputEmail3" placeholder="Nama Peserta">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-4 control-label">Alamat Peserta</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="inputEmail3" placeholder="Alamat Peserta">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-4 control-label">No.Hp Peserta</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="inputEmail3" placeholder="No.Hp Tutor">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Status</label>
            <div class="col-sm-8">
              <select class="form-control">
                <option>Aktif</option>
                <option>Tidak Aktif</option>
              </select>
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