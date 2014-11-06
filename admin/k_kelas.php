<?php 
include("_head.php");
include("_nav.php"); ?>
<div id="page-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <h1>Kursus <small>Kelas Kursus Komputer</small></h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active"><i class="fa fa-table"></i> Kursus</li>
        <li class="active"><i class="fa fa-home"></i> Kelas</li>
      </ol>
    </div>
  </div><!-- /.row -->
  <div class="row">
    <div class="col-lg-12">
      <!-- Button trigger modal -->
      <button class="btn btn-primary right" data-toggle="modal" data-target="#addKelas">
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
  </div><!-- /.row -->
</div><!-- /#page-wrapper -->
</div><!-- /#wrapper -->
<?php include("_modal.php"); ?>
<?php include("_js.php"); ?>
<script>
 $(document).ready(function () {
  $(".nav li").removeClass("active");//this will remove the active class from  
                                           //previously active menu item 
  $('#kursus-drop').addClass('open');
  $('li').removeClass('active-drop');
  $('#kelas-nav').addClass('active-drop');
});</script>
<?php include("_footer.php"); ?>