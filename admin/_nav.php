<body>
  <div id="wrapper">
    <!-- Sidebar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">REK Admin</a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul id="menuLeft" class="nav navbar-nav side-nav">
          <li id="dash" ><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
          <li id="keuangan-drop" class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-money"></i> Keuangan <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li id="pengeluaran-nav"><a class="p" href="pengeluaran.php"><i class="fa fa-share"></i> Pengeluaran</a></li>
              <li id="pemasukan-nav"><a href="pemasukan.php"><i class="fa fa-save"></i> Pemasukan</a></li>
            </ul>
          </li>
          <li id="kursus-drop" class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Kursus <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li id="kelas-nav" ><a class="p" href="k_kelas.php"><i class="fa fa-home"></i> Kelas</a></li>
              <li id="tutor-nav"><a href="k_tutor.php"><i class="fa fa-user"></i> Tutor</a></li>
              <li id="peserta-nav"><a href="k_peserta.php"><i class="fa fa-group"></i> Peserta</a></li>
            </ul>
          </li>
          <li id="voucher-drop" class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-file"></i> Voucher <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li id="voucherInternet-nav"><a class="p" href="v_internet.php"><i class="fa fa-globe"></i> Internet</a></li>
              <li id="voucherKursus-nav"><a href="v_kursus.php"><i class="fa fa-user"></i> Kursus</a></li>
            </ul>
          </li>
          <!-- <li><a class="p" href="pengeluaran.php"><i class="fa fa-share"></i> Pengeluaran</a></li>
          <li><a href="pemasukan.php"><i class="fa fa-save"></i> Pemasukan</a></li> -->
          <!-- <li><a href="kursus.php"><i class="fa fa-user"></i> Kursus</a></li> -->
          <!-- <li><a href="voucher.php"><i class="fa fa-file"></i> Voucher</a></li> -->
          <li id="warnet-nav"><a href="warnet.php"><i class="fa fa-desktop"></i> Warnet</a></li>
          <!-- <li><a href="charts.php"><i class="fa fa-bar-chart-o"></i> Charts</a></li> -->
           <!--  <li><a href="tables.php"><i class="fa fa-table"></i> Tables</a></li>
           <li><a href="forms.php"><i class="fa fa-edit"></i> Forms</a></li>
           <li><a href="typography.php"><i class="fa fa-font"></i> Typography</a></li>
           <li><a href="bootstrap-elements.php"><i class="fa fa-desktop"></i> Bootstrap Elements</a></li>
           <li><a href="bootstrap-grid.php"><i class="fa fa-wrench"></i> Bootstrap Grid</a></li>
           <li><a href="blank-page.php"><i class="fa fa-file"></i> Blank Page</a></li> -->
         </ul>
         <ul class="nav navbar-nav navbar-right navbar-user">
          <li class="dropdown messages-dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> Messages <span class="badge">7</span> <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li class="dropdown-header">7 New Messages</li>
              <li class="message-preview">
                <a href="#">
                  <span class="avatar"><img src="http://placehold.it/50x50"></span>
                  <span class="name">John Smith:</span>
                  <span class="message">Hey there, I wanted to ask you something...</span>
                  <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                </a>
              </li>
              <li class="divider"></li>
              <li class="message-preview">
                <a href="#">
                  <span class="avatar"><img src="http://placehold.it/50x50"></span>
                  <span class="name">John Smith:</span>
                  <span class="message">Hey there, I wanted to ask you something...</span>
                  <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                </a>
              </li>
              <li class="divider"></li>
              <li class="message-preview">
                <a href="#">
                  <span class="avatar"><img src="http://placehold.it/50x50"></span>
                  <span class="name">John Smith:</span>
                  <span class="message">Hey there, I wanted to ask you something...</span>
                  <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                </a>
              </li>
              <li class="divider"></li>
              <li><a href="#">View Inbox <span class="badge">7</span></a></li>
            </ul>
          </li>
          <li class="dropdown alerts-dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> Alerts <span class="badge">3</span> <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Default <span class="label label-default">Default</span></a></li>
              <li><a href="#">Primary <span class="label label-primary">Primary</span></a></li>
              <li><a href="#">Success <span class="label label-success">Success</span></a></li>
              <li><a href="#">Info <span class="label label-info">Info</span></a></li>
              <li><a href="#">Warning <span class="label label-warning">Warning</span></a></li>
              <li><a href="#">Danger <span class="label label-danger">Danger</span></a></li>
              <li class="divider"></li>
              <li><a href="#">View All</a></li>
            </ul>
          </li>
          <li class="dropdown user-dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
              <li><a href="#"><i class="fa fa-envelope"></i> Inbox <span class="badge">7</span></a></li>
              <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
              <li class="divider"></li>
              <li><a href="#"><i class="fa fa-power-off"></i> Log Out</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </nav>