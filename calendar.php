<!DOCTYPE HTML>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Calender</title>
    <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
    <meta content="Themesbrand" name="author" />
    <link rel="shortcut icon" href="img/aulsmallimg.ico">
    <!-- datepicker -->
    <link href="../plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" rel="stylesheet">

    <!-- jvectormap -->
    <link href="../plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">
    <link href="../plugins/fullcalendar/css/fullcalendar.min.css" rel="stylesheet">
    <!-- datatables -->
    <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap4.min.css">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
</head>
<body class="left-side-menu-light">
    <!-- Top Bar Start-->
    <?php include('templates/header.php') ?>
    <!-- Top Bar End-->
    <div class="content">
    <div class="container-fluid">
        <div class="page-title-box">
            <div class="row align-items-center">
                
                <div class="col-sm-6">
                    <h4 class="page-title">Calendar</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Veltrix</a></li>
                        <li class="breadcrumb-item active">Calendar</li>
                    </ol>

                </div>
                <div class="col-sm-6">
                
                    <div class="float-right d-none d-md-block">
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle arrow-none waves-effect waves-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-settings mr-2"></i> Settings
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- end row -->
        <div class="content-page">
                <!-- Start content -->
         <div class="content">
         <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h4 class="page-title">Calendar</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);"><i class="mdi mdi-home-outline"></i></a></li>
                        <li class="breadcrumb-item active">Calendar</li>
                    </ol>
                </div>
                
            </div> <!-- end row -->
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div id='calendar'></div>
                        
                        <div style='clear:both'></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
</div>
</div>
    </div>
    <!-- container-fluid -->
    <?php include("templates/footer.php")?>

</div>

    <!-- Side Bar Start-->
    <?php include('templates/sidebar.php') ?>
    <!-- Side Bar End-->
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
    <!-- Calendar -->
    <script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="../plugins/moment/moment.js"></script>
    <script src='../plugins/fullcalendar/js/fullcalendar.min.js'></script>
    <script src="assets/pages/calendar-init.js"></script>
</body>
</html>