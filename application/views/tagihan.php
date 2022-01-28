<!DOCTYPE html>
<html lang="en">

<head>
    <title>TAGIHAN</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!-- Meta -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="Mega Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
      <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
      <meta name="author" content="codedthemes" />
      <!-- Favicon icon -->
      <link rel="icon" href="<?php echo base_url("assets/images/favicon.ico");?>" type="image/x-icon">
      <!-- Google font-->     <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
      <!-- waves.css -->
      <link rel="stylesheet" href="<?php echo base_url("assets/pages/waves/css/waves.min.css");?>" type="text/css" media="all">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/bootstrap/css/bootstrap.min.css");?>">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/icon/themify-icons/themify-icons.css");?>">
      <!-- Font Awesome -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/icon/font-awesome/css/font-awesome.min.css")?>">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/icon/icofont/css/icofont.css");?>">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/style.css")?>">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/jquery.mCustomScrollbar.css")?>">
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
  </head>
  <body>
    <!-- Pre-loader start -->
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                
                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                
                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                <div class="navbar-logo">
                      <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                          <i class="ti-menu"></i>
                      </a>
                      <div class="mobile-search waves-effect waves-light">
                          <div class="header-search">
                              <div class="main-search morphsearch-search">
                                  <div class="input-group">
                                      <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                      <input type="text" class="form-control" placeholder="Enter Keyword">
                                      <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <a href="index.html">
                          <img class="img-fluid" src="<?php echo base_url("assets/images/logo.png");?>" alt="Theme-Logo" />
                      </a>
                      <a class="mobile-options waves-effect waves-light">
                          <i class="ti-more"></i>
                      </a>
                  </div>
            
                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>
                            <li class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="user-profile header-notification">
                                <a href="#!" class="waves-effect waves-light">
                                    <img src="<?php echo base_url("assets/images/avatar-4.jpg");?>" class="img-radius" alt="User-Profile-Image">
                                    <span>John Doe</span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                                    <li class="waves-effect waves-light">
                                        <a href="#!">
                                            <i class="ti-settings"></i> Settings
                                        </a>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <a href="auth-normal-sign-in.html">
                                            <i class="ti-layout-sidebar-left"></i> Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
    
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                <nav class="pcoded-navbar">
                      <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                      <div class="pcoded-inner-navbar main-menu">
                          <div class="">
                              <div class="main-menu-header">
                                  <img class="img-80 img-radius" src="<?php echo base_url("assets/images/avatar-4.jpg");?>" alt="User-Profile-Image">
                                  <div class="user-details">
                                      <span id="more-details">John Doe</span>
                                  </div>
                              </div>
                          </div>
                          <div class="pcoded-navigation-label" data-i18n="nav.category.navigation">Layout</div>
                          <ul class="pcoded-item pcoded-left-item">
                              <li>
                                  <a href="<?=base_url("Ngadimin/home/")?>" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
                          </ul>
                          <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Kontak</div>
                          <ul class="pcoded-item pcoded-left-item">
                              <li>
                                  <a href="<?=base_url("Ngadimin/kontak/")?>" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-agenda"></i><b>FC</b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">Kontak</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
                              <li class="active">
                                  <a href="<?=base_url("Ngadimin/tagihan/")?>" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-receipt"></i><b>FC</b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">Tagihan</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
                              <li>
                                  <a href="<?=base_url("Ngadimin/pesan/")?>" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-comment"></i><b>FC</b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">Reminder</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
                          </ul>
                    </div>
                  </nav>
                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Tagihan</h5>
                                            <p class="m-b-0">Tagihan Berdasarkan Kontak</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb-title">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"> <i class="ti-receipt"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="<?php echo base_url("Ngadimin/tagihan")?>">Tagihan</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <!-- Hover table card start -->
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Tagihan</h5>
                                                <span>Monggo Dilihat</span>
                                                <div class="card-header-right">
                                                    <a href="<?=base_url("Ngadimin/tambahtagihan/")?>">
                                                        <button  class="btn btn-primary btn-round waves-effect waves-light">Tambah Reminder</button>
                                                    </a>
                                                </div> 
                                            </div>
                                            <div class="card-block table-border-style">
                                                <div class="table-responsive">
                                                    <table id="tagihan" class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>Id Tagihan</th>
                                                                <th>Nama Tagihan</th>
                                                                <th>Nomor Tagihan</th>
                                                                <th>Jenis Tagihan</th>
                                                                <th>Tanggal Reminder</th>
                                                                <th>Tanggal Tagihan</th>
                                                                <th>Nominal Tagihan</th>
                                                                <th>Aksi</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            
                                                            foreach ($queryalltagihan as $row) {
                                                                
                                                            ?>
                                                            <tr>
                                                                <th><?php echo $row->id_tagihan ?></th>
                                                                <td><?php echo $row->nama_tagihan ?></td>
                                                                <td><?php echo $row->nomor_tagihan ?></td>
                                                                <td><?php echo $row->jenis_tagihan ?></td>
                                                                <td><?php echo $row->tgl_reminder ?></td>
                                                                <td><?php echo $row->tgl_tagihan ?></td>
                                                                <td><?php echo $row->nominal_tagihan ?></td>
                                                                <td><a href="<?php echo base_url('/Ngadimin/edit_tagihan') ?>/<?php echo $row->nomor_tagihan ?>"><button class="btn waves-effect waves-light btn-success"><i class="ti-pencil-alt"></i></button></a>   
                                                                <a href="<?php echo base_url('/Ngadimin/fungsiDeletetagihan') ?>/<?php echo $row->nomor_tagihan ?>"><button class="btn waves-effect waves-light btn-danger"><i class="ti-trash"></i></button></a></td>
                                                            </tr>
                                                            <?php } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Hover table card end -->
                                    </div>
                                    <!-- Page-body end -->
                                </div>
                            </div>
                            <!-- Main-body end -->
                            <div id="styleSelector">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script type="text/javascript" src="<?php echo base_url("assets/js/jquery/jquery.min.js");?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/jquery-ui/jquery-ui.min.js ");?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/popper.js/popper.min.js");?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap/js/bootstrap.min.js ");?>"></script>

    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="<?php echo base_url("assets/js/jquery-slimscroll/jquery.slimscroll.js ");?>"></script>
    <!-- waves js -->

    <!-- modernizr js -->
    <script type="text/javascript" src="<?php echo base_url("assets/js/modernizr/modernizr.js ");?>"></script>
    <!-- Custom js -->
    <script src="<?php echo base_url("assets/js/pcoded.min.js");?>"></script>
    <script src="<?php echo base_url("assets/js/vertical-layout.min.js ");?>"></script>
    <script src="<?php echo base_url("assets/js/jquery.mCustomScrollbar.concat.min.js");?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/script.js");?>"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready( function () {
         $('#tagihan').DataTable();
        } );
    </script>
</body>

</html>
