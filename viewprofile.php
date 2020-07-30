<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>AUL || View Profile</title>
        <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
        <meta content="Themesbrand" name="author" />
        <link rel="shortcut icon" href="img/aulsmallimg.ico">

        <!--Jquery steps CSS -->
        <link rel="stylesheet" href="../plugins/jquery-steps/jquery.steps.css">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    </head>

    <body class="left-side-menu-light">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="index.html" class="logo">
                        <span class="logo-light">
                            <img src="assets/images/logo-light.png" alt="" height="16">
                        </span>
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm.png" alt="" height="22">
                        </span>
                    </a>
                </div>

                <?php include('templates/header.php') ?>

            </div>
            <!-- Top Bar End -->

            <!-- ========== Left Sidebar Start ========== -->
            <?php include('templates/sidebar.php') ?>
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
                                    <h4 class="page-title">View Profile</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);"><i class="mdi mdi-home-outline"></i></a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Staff</a></li>
                                        <li class="breadcrumb-item active">View Profile</li>
                                    </ol>
                                </div>
                                <div class="col-sm-6">
                                    <div class="float-right d-none d-md-block">
                                        <div>
                                           <a href="editProfile.php" class="btn btn-primary dropdown-toggle arrow-none waves-effect waves-light">
                                           <i class="mdi mdi-square-edit-outline">Edit Profile</i>
                                           </a>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end row -->
                        </div>
                    <div class="container-fluid">
                        
                        <!-- end page-title -->
                        <table class="table table-bordered table-hover">
                            <tr>
                                <th>Full Name</th>
                                <td>Akiode Timothy Adewale</td>
                            </tr>
                            <tr>
                                <th>Image</th>
                                <td><img src="test.jpg" alt="Image"></td>
                               
                            </tr>
                            <tr>
                                <th>Date of Birth</th>
                                <td>4th July 1998</td>
                            </tr>
                            <tr>
                                <th>Email Address</th>
                                <td>staff@aul.edu.ng</td>
                            </tr>
                            <tr>
                                <th>Phone Number</th>
                                <td>+234 81 3559 5335 </td>
                            </tr>
                            <tr>
                                <th>Gender</th>
                                <td>Male</td>
                            </tr>
                            <tr>
                                <th>Home Address</th>
                                <td>Ayobo Ipaja</td>
                            </tr>
                            <tr>
                                <th>State</th>
                                <td>Lagos State</td>
                            </tr>
                            <tr>
                                <th>Zip Code</th>
                                <td>100001</td>
                            </tr>
                            <tr>
                                <th>Marital Status</th>
                                <td>Married</td>
                            </tr>
                            <tr>
                                <th>Highest education level</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Highest Degree and major</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Date Aquired</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Institution Name</th>
                                <td></td>
                            </tr>
                            
                        </table>
                       
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

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/metismenu.min.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/waves.min.js"></script>

        <!-- form wizard -->
        <script src="../plugins/jquery-steps/jquery.steps.min.js"></script>

        <!-- form wizard init -->
        <script src="assets/pages/form-wizard.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>
        
    </body>

</html>