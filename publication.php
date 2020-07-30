<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>AUL || Upload Publications</title>
        <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
        <meta content="Themesbrand" name="author" />
        <link rel="shortcut icon" href="img/aulsmallimg.ico">

        <!-- datepicker -->
        <link href="../plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" rel="stylesheet">

        <!-- jvectormap -->
        <link href="../plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">

        <!-- datatables -->
        <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap4.min.css">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    </head>

    <body class="left-side-menu-light">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <?php include("templates/header.php") ?>
            <!-- Top Bar End -->

            <!-- ========== Left Sidebar Start ========== -->
            <?php include("templates/sidebar.php") ?>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-sm-6">
                                    <h4 class="page-title">Upload Publications</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);"><i class="mdi mdi-home-outline"></i></a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Upload</a></li>
                                        <li class="breadcrumb-item active">Publications</li>
                                    </ol>
                                </div>
                                
                            </div> <!-- end row -->
                        </div>
                        <!-- end page-title -->

                        <div class="row">
                            <div class="col-8">
                                <div class="card">
                                    <div class="card-body">
                                    <style>
                                        .pad{
                                            padding-top:10px;
                                        }
                                    </style>
                                        <h4 class="mt-0 header-title">Upload Publications</h4>
                                        <p class="text-muted mb-4">Enter the URL of your Publications</p>
        
                                        
                                        <div class="form-group row">
                                            <label for="example-url-input" class="col-sm-3 col-form-label">Enter URL</label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="url" placeholder="https://example.com" id="example-url-input">
                                                    <div class="col col-sm-8 pad">
                                                        <button class="btn btn-primary" >Upload</button>
                                                    </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                        
                        <!-- end row -->

                        
                        <!-- end row -->
                    </div>
                    <!-- container-fluid -->

                </div>
                <!-- content -->

                <?php include("templates/footer.php")?>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        <div class="right-sidebar d-none d-xl-block">
            <div class="slimscroll-menu">
                <div class="px-4 pt-4">
                    <div class="card user-wid text-center overflow-hidden">
                        <div class="p-4 bg-lighten-danger"></div>
                        <div class="mx-3">
                            <div class="bg-white user-wid-content p-1 rounded">
                                <div class="user-img">
                                    <img src="assets/images/users/user-1.jpg" alt="user-img" title="" class="rounded-circle thumb-md img-fluid">
                                </div>
                                <h5 class="font-14 mb-1"><a href="javascript: void(0);">James Heine</a> </h5>
                                <p class="text-muted mb-2"><small>Admin Head</small></p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-4">
                        <h5 class="font-14">Calender</h5>

                        <div class="dashboard-date-pick" id="date-pick-widget" data-provide="datepicker-inline"></div>
                    </div>

                    <div>
                        <h5 class="font-14">Clients</h5>

                        <div id="world-map-markers" class="dashboard-map-wid"></div>
                    </div>

                </div>
            </div>
        </div>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/metismenu.min.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/waves.min.js"></script>

        <!-- datepicker -->
        <script src="../plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <!-- vector map  -->
        <script src="../plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

        <!-- apexcharts -->
        <script src="../plugins/apexcharts/apexcharts.min.js"></script>

        <!-- Peity JS -->
        <script src="../plugins/peity-chart/jquery.peity.min.js"></script>

        <script src="assets/pages/dashboard.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>
        
    </body>

</html>