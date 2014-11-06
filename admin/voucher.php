<?php 
include("_head.php");
include("_nav.php"); ?>
<div id="page-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <h1>Voucher <small>Komputer</small></h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active"><i class="fa fa-file"></i> Voucher</li>
      </ol>
    </div>
  </div><!-- /.row -->
  <div class="row">
    <div class="col-md-6">
      <!-- Button trigger modal -->
      <button class="btn btn-primary right" data-toggle="modal" data-target="#addPemasukan">
        <i class="fa fa-plus-square"></i> Voucher Internet
      </button><br>
      <h2>Daftar Voucher Internet</h2>
      <div class="table-responsive">
        <table class="table table-bordered table-hover tablesorter">
          <thead>
            <tr>
              <th class="col-md-1">No <i class="fa fa-sort"></i></th>
              <th class="col-md-1">Voucher <i class="fa fa-sort"></i></th>
              <th class="col-md-1">Jumlah<i class="fa fa-sort"></i></th>
              <th class="col-md-3">Berlaku sampai <i class="fa fa-sort"></i></th>
              <th class="col-md-1">Aksi <i class="fa fa-sort"></i></th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $today = date("F j, Y, g:i a");
            for ($i=1; $i<10; $i++) { 
              echo <<<MULAI
              <tr>
                <td>$i</td>
                <td>Net-$i</td>
                <td>3</td>
                <td>$today</td>
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
        <i class="fa fa-plus-square"></i> Voucher Kursus
      </button><br>
      <h2>Daftar Voucher Kursus</h2>
      <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped tablesorter">
          <thead>
            <tr>
              <th class="col-md-1">No <i class="fa fa-sort"></i></th>
              <th class="col-md-1">Voucher <i class="fa fa-sort"></i></th>
              <th class="col-md-1">Jumlah <i class="fa fa-sort"></i></th>
              <th class="col-md-3">Berlaku sampai <i class="fa fa-sort"></i></th>
              <th class="col-md-1">Aksi <i class="fa fa-sort"></i></th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $today = date("F j, Y, g:i a");
            for ($i=1; $i<10; $i++) { 
              echo <<<MULAI
              <tr>
                <td>$i</td>
                <td>K-$i</td>
                <td>2$i</td>
                <td>$today</td>
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
<?php include("_footer.php"); ?>