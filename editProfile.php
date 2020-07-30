<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>AUL || Edit Profile</title>
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
                                    <h4 class="page-title">Edit Profile</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);"><i class="mdi mdi-home-outline"></i></a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Staff</a></li>
                                        <li class="breadcrumb-item active">Edit Profile</li>
                                    </ol>
                                </div>
                                <div class="col-sm-6">
                                    <div class="float-right d-none d-md-block">
                                        <div>
                                           <a href="viewprofile.php" class="btn btn-primary dropdown-toggle arrow-none waves-effect waves-light">
                                           <i class="mdi mdi-square-edit-outline">View Profile</i> 
                                           </a>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end row -->
                        </div>
                        <!-- end page-title -->

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">My profile</h4>
                                        <p class="text-muted mb-4">Create a staff profile</p>
        
                                        <form id="form-horizontal" class="form-horizontal form-wizard-wrapper">
                                            <h3>Staff Information</h3>
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label for="txtFirstNameBilling" class="col-lg-3 col-form-label">First Name</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtFirstNameBilling" name="txtFirstNameBilling" type="text" class="form-control" required="required">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label for="txtLastNameBilling" class="col-lg-3 col-form-label">Last Name</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtLastNameBilling" name="txtLastNameBilling" type="text" class="form-control" required="required">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label for="txtCompanyBilling" class="col-lg-3 col-form-label">Other Names</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtCompanyBilling" name="txtCompanyBilling" type="text" class="form-control" required="required">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label for="txtEmailAddressBilling" class="col-lg-3 col-form-label">D.O.B</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtEmailAddressBilling" name="txtEmailAddressBilling" type="date" class="form-control" required="required">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label for="txtAddress1Billing" class="col-lg-3 col-form-label">Address</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtAddress1Billing" name="txtAddress1Billing" type="text" class="form-control" required="required">
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label for="txtAddress2Billing" class="col-lg-3 col-form-label">State</label>
                                                            <div class="col-lg-3">
                                                                <input id="txtEmailAddressBilling" name="txtEmailAddressBilling" type="text" class="form-control" required="required">
                                                            </div>
                                                            <label for="txtAddress2Billing" class="col-lg-3 col-form-label">ZIP code</label>
                                                            <div class="col-lg-3">
                                                                <input id="txtEmailAddressBilling" name="txtEmailAddressBilling" type="number" class="form-control" required="required">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label for="txtAddress2Billing" class="col-lg-3 col-form-label">Phone</label>
                                                            <div class="col-lg-3">
                                                                <input id="txtEmailAddressBilling" name="txtEmailAddressBilling" type="number" class="form-control" required="required">
                                                            </div>
                                                            <label for="txtAddress2Billing" class="col-lg-3 col-form-label">Gender</label>
                                                            <div class="col-lg-3">
                                                                <input id="txtEmailAddressBilling" name="txtEmailAddressBilling" type="text" class="form-control" required="required">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label for="txtAddress2Billing" class="col-lg-3 col-form-label">Email</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtEmailAddressBilling" name="txtEmailAddressBilling" type="email" class="form-control" required="required">
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label for="txtAddress2Billing" class="col-lg-3 col-form-label">Marital Status</label>
                                                            <div class="col-lg-9">
                                                                <select id="txtEmailAddressBilling" name="txtEmailAddressBilling" class="form-control">
                                                                    <option value="Single">Single</option>
                                                                    <option value="Married">Married</option>
                                                                    <option value="Divorced">Divorced</option>
                                                                    <option value="Separated">Separated</option>
                                                                    <option value="RNS">Rather Not Say</option>
                                                                </select>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label for="txtAddress2Billing" class="col-lg-3 col-form-label">Picture</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtEmailAddressBilling" name="txtEmailAddressBilling" type="file" class="form-control" required="required">
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                    
                                                </div>
        
                                                <div class="row">
                                                <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        
                                    </div>
                                </div>
                            </div>
                                                </div>
                                            </fieldset>
                                            
                                            <h3>Education</h3>
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label for="txtNameCard" class="col-lg-3 col-form-label">Highest education level</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtNameCard" name="txtNameCard" type="text" class="form-control" required="required">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label for="highestdegree" class="col-lg-3 col-form-label">Highest Degree and major</label>
                                                            <div class="col-lg-9">
                                                            <input id="highestdegree" name="highestdegree" type="text" class="form-control" required="required">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label for="txtCreditCardNumber" class="col-lg-3 col-form-label">Date Acquired</label>
                                                            <div class="col-lg-9">
                                                                <input id="txtCreditCardNumber" name="txtCreditCardNumber" type="text" class="form-control" required="required">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <label for="institutionname" class="col-lg-3 col-form-label">Institution Name</label>
                                                            <div class="col-lg-9">
                                                                <input id="institutionname" name="institutionname" type="text" class="form-control" required="required">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </fieldset>
                                            <h3>Confirm Detail</h3>
                                            <fieldset>
                                                <div class="p-3">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1" required="required">
                                                        <label class="custom-control-label" for="customCheck1">I certify that my answers are true and complete
                                                             to the best of my knowledge. If this application leads to employment, 
                                                             I understand that false or misleading information in my application or
                                                              interview may result in my release.</label>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
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