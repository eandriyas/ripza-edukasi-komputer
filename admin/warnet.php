<?php 
include("_head.php");
include("_nav.php"); ?>
<div id="page-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <h1>Warnet <small>Komputer</small></h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active"><i class="fa fa-desktop"></i> Warnet</li>
      </ol>
    </div>
  </div><!-- /.row -->
  <div class="row">
    <div class="col-lg-12">
      <h1>sedang dibuat</h1>
    </div>
  </div>
</div><!-- /#page-wrapper -->
</div><!-- /#wrapper -->
<?php include("_modal.php"); ?>
<?php include("_js.php"); ?>

<script>
 $(document).ready(function () {
        $(".nav li").removeClass("active");//this will remove the active class from  
                                           //previously active menu item 
                                           $('#warnet-nav').addClass('active');
                                         });
</script>
<?php include("_footer.php"); ?>