<?php 
include("_head.php");
include("_nav.php"); ?>
<div id="page-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <h1>Kursus <small>Komputer</small></h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active"><i class="fa fa-table"></i> Kursus</li>
      </ol>
    </div>
  </div><!-- /.row -->
  <div class="row">
    <div class="col-lg-6">
      <!-- Button trigger modal -->
      <button class="btn btn-primary right" data-toggle="modal" data-target="#addPemasukan">
        <i class="fa fa-plus-square"></i> Kelas
      </button><br>
      <h2>Daftar Kelas Kursus</h2>
      <div class="table-responsive">
        <table class="table table-bordered table-hover tablesorter">
          <thead>
            <tr>
              <th class="col-md-1">No <i class="fa fa-sort"></i></th>
              <th class="col-md-2">Nama Kelas <i class="fa fa-sort"></i></th>
              <th class="col-md-2">Jumlah Siswa <i class="fa fa-sort"></i></th>
              <th class="col-md-1">Jadwal <i class="fa fa-sort"></i></th>
              <th class="col-md-1">Aksi <i class="fa fa-sort"></i></th>
            </tr>
          </thead>
          <tbody>
            <?php 
            for ($i=1; $i<10; $i++) { 
              echo <<<MULAI
              <tr>
                <td>$i</td>
                <td>Kom-$i</td>
                <td>3$i</td>
                <td><a href="" data-toggle="modal" data-target="#tampilJadwal">Senin</a></td>
                <td>
                  <a href="" data-toggle="modal" data-target="#editKelas" title="Edit"><i class="fa fa-edit"></i></a> 
                  <a href="" data-toggle="modal" data-target="#deleteKelas" title="Hapus"><i class="fa fa-times"></i></a>
                </td>
              </tr>
MULAI;
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
    <div class="col-lg-6">
      <!-- Button trigger modal -->
      <button class="btn btn-primary right" data-toggle="modal" data-target="#addPemasukan">
        <i class="fa fa-plus-square"></i> Tutor
      </button><br>
      <h2>Daftar Tutor Kursus</h2>
      <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped tablesorter">
          <thead>
            <tr>
              <th class="col-md-1">No <i class="fa fa-sort"></i></th>
              <th class="col-md-2">Nama Tutor <i class="fa fa-sort"></i></th>
              <th class="col-md-2">No.Hp <i class="fa fa-sort"></i></th>
              <th class="col-md-1">Jadwal <i class="fa fa-sort"></i></th>
              <th class="col-md-1">Aksi <i class="fa fa-sort"></i></th>
            </tr>
          </thead>
          <tbody>
            <?php 
            for ($i=1; $i<10; $i++) { 
              echo <<<MULAI
              <tr>
                <td>$i</td>
                <td>andriyas</td>
                <td>085271443804</td>
                <td><a href="" data-toggle="modal" data-target="#jadwalTutor">Selasa</a></td>
                <td>
                  <a href="" data-toggle="modal" data-target="#editTutor" title="Edit"><i class="fa fa-edit"></i></a> 
                  <a href="" data-toggle="modal" data-target="#deleteTutor" title="Hapus"><i class="fa fa-times"></i></a>
                </td>
              </tr>
              MULAI;
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div><!-- /.row -->
  <div class="row">
    <div class="col-lg-10">
      <!-- Button trigger modal -->
      <button class="btn btn-primary right" data-toggle="modal" data-target="#addPemasukan">
        <i class="fa fa-plus-square"></i> Peserta
      </button><br>
      <h2>Daftar Peserta Kursus komputer</h2>
      <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped tablesorter">
          <thead>
            <tr>
              <th class="col-md-1">No <i class="fa fa-sort"></i></th>
              <th class="col-md-3">Nama<i class="fa fa-sort"></i></th>
              <th class="col-md-3">Alamat<i class="fa fa-sort"></i></th>
              <th class="col-md-2">No.Hp <i class="fa fa-sort"></i></th>
              <th class="col-md-1">Status <i class="fa fa-sort"></i></th>
              <th class="col-md-1">Aksi <i class="fa fa-sort"></i></th>
            </tr>
          </thead>
          <tbody>
            <?php 
            for ($i=1; $i<10; $i++) { 
              echo <<<MULAI
              <tr>
                <td>$i</td>
                <td>andriyas efendi</td>
                <td>sungai kuning</td>
                <td>085728399383</td>
                <td>Aktif</td>
                <td>
                  <a href="" data-toggle="modal" data-target="#editPeserta" title="Edit"><i class="fa fa-edit"></i></a> 
                  <a href="" data-toggle="modal" data-target="#deletePeserta" title="Hapus"><i class="fa fa-times"></i></a>
                </td>
              </tr>
              MULAI;
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div><!-- /.row -->
</div><!-- /#page-wrapper -->
</div><!-- /#wrapper -->
<?php include("_modal.php"); ?>
<?php include("_js.php"); ?>
<?php include("_footer.php"); ?>