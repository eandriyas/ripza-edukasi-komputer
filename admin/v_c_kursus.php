<?php 
include("_head.php");
include("_nav.php"); ?>
<div id="page-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <h1>Cetak <small>Voucher Kursus</small></h1>
      <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><i class="fa fa-file"></i> Voucher</li>
        <li><i class="fa fa-user"></i> Kursus</li>
        <li class="active"><i class="fa fa-print"></i> Cetak Voucher Kursus</li>
      </ol>
    </div>
  </div><!-- /.row -->
  <!-- voucher kursus-->
  <?php 
  $i=1;
  $ii=2;
  for ($a=1; $a<10; $a++) { 
    $i+=123;
    $ii+=123;
    echo <<<START


    <div class="row">
      <div class="col-lg-12">
        <table class="table table-bordered">
          <tbody>
            <tr>
              <td class="col-md-6">
                <div class="voucher">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="col-md-5">

                        <h3>Voucher-$i</h3>
                      </div>
                      <div class="col-md-7">
                        <h4>Ripza Edukasi komputer</h4>

                      </div>

                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="col-md-5">
                        <img src="img/bunga.png" class="img-voucher" alt="">
                      </div>
                      <div class="col-md-7">
                        <h5 class="text-left"><strong>Voucher Kursus</strong> bernilai <strong>50%</strong></h5>
                        <p class="text-left">Berlaku untuk 1 orang untuk pendaftaran biaya awal kursus.</p>
                        <p class="text-left">Batas masa berlaku 
                          <br>
                          <strong>Senin, 24 Agustus 2014 17.00</strong></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>

                <td class="col-md-6">
                  <div class="voucher">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="col-md-5">

                          <h3>Voucher-$ii</h3>
                        </div>
                        <div class="col-md-7">
                          <h4>Ripza Edukasi komputer</h4>

                        </div>

                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="col-md-5">
                          <img src="img/bunga.png" class="img-voucher" alt="">
                        </div>
                        <div class="col-md-7">
                          <h5 class="text-left"><strong>Voucher Kursus</strong> bernilai <strong>50%</strong></h5>
                          <p class="text-left">Berlaku untuk 1 orang untuk pendaftaran biaya awal kursus.</p>
                          <p class="text-left">Batas masa berlaku 
                            <br>
                            <strong>Senin, 24 Agustus 2014 17.00</strong></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>

                </tr>
              </tbody>
            </table>
          </div>
        </div>

START;
      }
      ?>
    </div><!-- /#page-wrapper -->
  </div><!-- /#wrapper -->
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