<?php 
include("_head.php");
include("_nav.php"); ?>
<div id="page-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <h1>Pengeluaran <small>Urutkan Data</small></h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active"><i class="fa fa-money"></i> Keuangan</li>
        <li class="active"><i class="fa fa-share"></i> Pengeluaran</li>
      </ol>
    </div>
  </div><!-- /.row -->
  <div class="row">
    <div class="col-lg-12">
      <!-- Button trigger modal -->
      <button class="btn btn-primary right" data-toggle="modal" data-target="#addPengeluaran">
        <i class="fa fa-plus-square"></i> Pengeluaran
      </button><br>
      <h2>Daftar Pengeluaran</h2>
      <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped tablesorter">
          <thead>
            <tr>
              <th class="col-md-1" >No <i class="fa fa-sort"></i></th>
              <th class="col-md-3">Pengeluaran <i class="fa fa-sort"></i></th>
              <th class="col-md-2">Kategori <i class="fa fa-sort"></i></th>
              <th class="col-md-2">Waktu <i class="fa fa-sort"></i></th>
              <th class="col-md-2">Nilai <i class="fa fa-sort"></i></th>
              <th class="col-md-2">Aksi </th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $i=1;
            $day = date("j F, Y, g:i a");
            for ($i=1; $i<10; $i++) { 
              echo <<<END
              <tr>
                <td>$i</td>
                <td>Listrik</td>
                <td>Rutin</td>
                <td>$day</td>
                <td>Rp. 200.000</td>
                <td><a href="" data-toggle="modal" data-target="#editPengeluaran" title="Edit"><i class="fa fa-edit"></i></a> 
                  <a href="" data-toggle="modal" data-target="#deletePengeluaran" title="Hapus"><i class="fa fa-times"></i></a>
                </tr>
END;
              }
              ?>
              <tr>
                <th colspan="3"></th>
                <th>Total</th>
                <th colspan="3">Rp. 400.000,00</th>
              </tr>
              <tr>
                <th colspan="3"></th>
                <th>Rutin</th>
                <th colspan="3">Rp. 400.000,00</th>
              </tr>
              <tr>
                <th colspan="3"></th>
                <th>Tidak Rutin</th>
                <th colspan="3">Rp. 400.000,00</th>
              </tr>
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
  $('#keuangan-drop').addClass('open');
  $('#pengeluaran-nav').addClass('active-drop');
});</script>
<?php include("_footer.php"); ?>