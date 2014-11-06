<?php 
include("_head.php");
include("_nav.php"); ?>
<div id="page-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <h1>Voucher <small>Kursus</small></h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active"><i class="fa fa-file"></i> Voucher</li>
        <li class="active"><i class="fa fa-user"></i> Kursus</li>
      </ol>
    </div>
  </div><!-- /.row -->
  <div class="row">

    <div class="col-lg-8">
      <!-- Button trigger modal -->
      <button class="btn btn-primary right" data-toggle="modal" data-target="#addVoucherKursus">
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
              <th class="col-md-2">Nilai (%) <i class="fa fa-sort"></i></th>
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
                <td>3$i%</td>
                <td>$today</td>
                <td>
                  <a href="" data-toggle="modal" data-target="#editVoucherKursus" title="Edit"><i class="fa fa-edit"></i></a> 
                  <a href="v_c_kursus.php" title="Cetak"><i class="fa fa-print"></i></a>
                  <a href="" data-toggle="modal" data-target="#deleteVoucherKursus" title="Hapus"><i class="fa fa-times"></i></a>
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
  $('#voucher-drop').addClass('open');
  $('li').removeClass('active-drop');
  $('#voucherKursus-nav').addClass('active-drop');
});</script>
<?php include("_footer.php"); ?>