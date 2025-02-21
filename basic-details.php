<?php
include("db.php");
$sql = "SELECT * FROM academic_details";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>MIC</title>
    <!-- Custom CSS -->
    <link href="assets/libs/flot/css/float-chart.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon p-l-10" style="padding-left:0px; border-left:0px;">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="assets/images/logo2.png" width="50px" alt="homepage" class="light-logo" />
                           
                        </b>
                        <!--End Logo icon -->
                         <!-- Logo text -->
                        <span class="logo-text">
                             <!-- dark Logo text -->
                             <img src="assets/images/logo-text.png" alt="homepage" class="light-logo" />
                            
                        </span>
                        <!-- Logo icon -->
                        <!-- <b class="logo-icon"> -->
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <!-- <img src="assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->
                            
                        <!-- </b> -->
                        <!--End Logo icon -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                    </ul>  
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-bell font-24"></i>
                            </a>
                             <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Notifications</a>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="font-24 mdi mdi-comment-processing"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown" aria-labelledby="2">
                                <ul class="list-style-none">
                                    <li>
                                        <div class="">
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-danger btn-circle"><i class="fa fa-link"></i></span>
                                                    <div class="m-l-10">
                                                        <h5 class="m-b-0">Report Error</h5> 
                                                        <span class="mail-desc">Contact Support</span> 
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-settings m-r-5 m-l-5"></i> Account Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.html" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="profile.html" aria-expanded="false"><i class="mdi mdi-account"></i><span class="hide-menu">Profile</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="edit-profile.html" aria-expanded="false"><i class="mdi mdi-account-edit"></i><span class="hide-menu">Edit Profile</span></a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item"><a href="basic-details.php" class="sidebar-link"><i class="mdi mdi-account-settings-variant"></i><span class="hide-menu"> Basic Details </span></a></li>
                            <li class="sidebar-item"><a href="academic-details.html" class="sidebar-link"><i class="mdi mdi-book-multiple"></i><span class="hide-menu"> Academic Details </span></a></li>
                            <li class="sidebar-item"><a href="examdetails.php" class="sidebar-link"><i class="mdi mdi-book-open"></i><span class="hide-menu"> Exams Details </span></a></li>
                        </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="bus.html" aria-expanded="false"><i class="mdi mdi-bus"></i><span class="hide-menu">Bus Booking</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="password.php" aria-expanded="false"><i class="mdi mdi-account-key"></i><span class="hide-menu">Change password</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="https://www.camsmkce.in/index.aspx" aria-expanded="false"><i class="mdi mdi-vector-arrange-above"></i><span class="hide-menu">Cams</span></a>

                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Edit Profile</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Profile Information</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <form class="zmdi-format-valign-top">
                                <div class="card-body">
                                    <h4 class="card-title">Profile Information</h4>
                                    <div class="card">
                                        <ul class="nav nav-tabs mb-3" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active show" data-toggle="tab" href="#home" role="tab" aria-selected="true"><span class="hidden-sm-up"></span> <span class="hidden-xs-down"><i class="bi-person"></i><b> Basic</b></span></a> </li>
                                            <li class="nav-item"> 
                                                <a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-selected="false"><span class="hidden-sm-up"></span> <span class="hidden-xs-down"><i class="bi bi-book"></i><b> Academic Information</b></span></a> </li>
                                            <li class="nav-item"> 
                                                <a class="nav-link" data-toggle="tab" href="#messages" role="tab" aria-selected="false"><span class="hidden-sm-up"></span> <span class="hidden-xs-down"><i class="bi bi-people-fill"></i><b> Family Details</b></span></a> </li>
                                            <li class="nav-item"> 
                                                <a class="nav-link" data-toggle="tab" href="#parents" role="tab" aria-selected="false"><span class="hidden-sm-up"></span> <span class="hidden-xs-down"><i class="bi bi-house-door-fill"></i><b> Parents Meeting</b></span></a> </li>
                                            <li class="nav-item"> 
                                                <a class="nav-link" data-toggle="tab" href="#nominee" role="tab" aria-selected="false"><span class="hidden-sm-up"></span> <span class="hidden-xs-down"><i class="bi bi-card-checklist"></i><b> Counselling Details</b></span></a> </li>
                                            <li class="nav-item"> 
                                                <a class="nav-link" data-toggle="tab" href="#medical" role="tab" aria-selected="false"><span class="hidden-sm-up"></span> <span class="hidden-xs-down"><i class="bi bi-card-checklist"></i><b> Medical Leave</b></span></a> </li>
                                            <li class="nav-item"> 
                                                <a class="nav-link" data-toggle="tab" href="#swot" role="tab" aria-selected="false"><span class="hidden-sm-up"></span> <span class="hidden-xs-down"><i class="bi bi-card-checklist"></i><b> SWOT Analysis</b></span></a> </li>
                                        </ul>
                                        <div class="tab-content tabcontent-border">
                                        <div class="tab-pane active show" id="home" role="tabpanel">
                                                <form id="basic" class="needs-validation" novalidate="">
                                                    <div id="errorbasic" class="alert alert-warning d-none"></div>
                                                <div class="card-header">
                                                    <h4>Personal Information </h4>
                                                </div>
                                            <div class="form-row">
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom03">First name *</label>
                                                    <input type="text" name="fname" class="form-control" id="validationCustom03" placeholder="First Name" required="">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom04">Last name *</label>
                                                    <input type="text" class="form-control" name="lname" id="validationCustom04" placeholder="Last Name" required="">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom01">Gender *</label>
                                                    <select class="select form-control custom-select form-control" name="gender" id="validationCustom01" placeholder="First name" required="">
                                                    <option value="">Select</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                        <option value="Transgender">Transgender</option>
                                                    </select>
                                                <div class="valid-feedback">
                                                Looks good!
                                                </div>
                                                <div class="invalid-feedback">
                                                    Please select gender.
                                                </div>
                                                </div>

                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom02">Register number *</label>
                                                        <input type="text" class="form-control" name="id" id="validationCustom02" placeholder="Enter your Register number" required="">
                                            </div>
                                        
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustomUsername">Programme *</label>
                                                    <div class="input-group">
                                                        <select class="select form-control custom-select" name="programme" style="width: 100%; height:36px;" required="">
                                                            <option value="">Select</option>
                                                            <option value="Bachelor of Engineering(BE)">Bachelor of Engineering(BE)</option>
                                                            <option value="Bachelor of Technology(B.Tech)">Bachelor of Technology(B.Tech)</option>
                                                            <option value="Master of Business Administration(MBA)">Master of Business Administration(MBA)</option>
                                                            <option value="Master of Computer Apllications(MCA)">Master of Computer Apllications(MCA)"</option>
                                                        </select>
                                                    </div>
                                                </div>
                                        
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustomUsername">Department *</label>
                                                    <div class="input-group">
                                                    <select class="select form-control custom-select" name="department" style="width: 100%; height:36px;" required="">
                                                        <option value="">Select</option>
                                                            <option value="Artificial Intelligence and Data Science">Artificial Intelligence and Data Science</option>
                                                            <option value="Artificial Intelligence and Machine Learning">Artificial Intelligence and Machine Learning</option>
                                                            <option value="Civil Engineering">Civil Engineering</option>
                                                            <option value="Computer Science and Business Systems">Computer Science and Business Systems</option>
                                                            <option value="Computer Science and Engineering">Computer Science and Engineering</option>
                                                            <option value="Electrical and Electronics Engineering">Electrical and Electronics Engineering</option>
                                                            <option value="Electronics Engineering (VLSI Design)">Electronics Engineering (VLSI Design)</option>
                                                            <option value="Electronics and Communication Engineering">Electronics and Communication Engineering</option>
                                                            <option value="Information Technology">Information Technology</option>
                                                            <option value="Mechanical Engineering">Mechanical Engineering</option>
                                                            <option value="Master of Business Administration">Master of Business Administration</option>
                                                            <option value="Master of Computer Applications">Master of Computer Applications</option>
                                                    </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                        
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom02">Batch *</label>
                                                    <input type="text" class="form-control" name="batch" id="validationCustom02" placeholder="" required="">
                                                </div>
                                        
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom02">DOB *</label>
                                                    <input type="date" class="form-control" name="dob" id="validationCustom02" placeholder="DOB" required="">
                                                </div>
                                        
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom01">Blood Group *</label>
                                                    <select class="select form-control custom-select form-control" name="blood" id="validationCustom01" placeholder="Blood Group" required="">
                                                        <option value="">Select Blood Group</option>
                                                        <option value="A+VE">A+VE</option>
                                                        <option value="A-VE">A-VE</option>
                                                        <option value="B+VE">B+VE</option>
                                                        <option value="B-VE">B-VE</option>
                                                        <option value="O+VE">O+VE</option>
                                                        <option value="O-VE">O-VE</option>
                                                        <option value="AB+VE">AB+VE</option>
                                                        <option value="AB-VE">AB-VE</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom01">Mobile Number *</label>
                                                    <input type="text" class="form-control" name="mobile" id="validationCustom01" placeholder="Enter Mobile Number" required="">
                                            </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom01">Email ID* </label>
                                                    <div class="input-group">
                                                    <input type="text" class="form-control" name="email" id="validationCustom01"  placeholder="Enter Email ID" required="">
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom01">Parent Mobile Number *</label>
                                                    <input type="text" class="form-control" name="pmobile" id="validationCustom01" placeholder="Enter Mobile Number" required="">
                                                </div>
                                        
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="validationCustom01">Languages known *</label>
                                                    <input type="text" class="form-control" name="language" id="validationCustom01"  placeholder="Enter Languages known" required="">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="validationCustom01">Aadhar Number *</label>
                                                    <input type="text" class="form-control" name="aadhar" id="validationCustom01" placeholder="Enter Aadhar Number" required="">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom01">Hosteller/Dayscholar *</label>
                                                    <select class="form-control custom-select form-control" name="hosday" id="validationCustom01" onchange="if (!window.__cfRLUnblockHandlers) return false; if(this.value=='Hosteller'){this.form['room'].style.visibility='visible'; this.form['stay'].style.visibility='hidden';} else { this.form['room'].style.visibility='hidden'; this.form['stay'].style.visibility='visible';}" required="">
                                                    <option value="">Select</option>
                                                    <option value="Hosteller">Hosteller</option>
                                                    <option value="Dayscholar">Dayscholar</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                <label for="validationCustom01">Room number</label>
                                                <input type="text" name="room" id="input1" value="" class="textbox form-control" placeholder="Enter">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                <label for="validationCustom01">Place of stay</label>
                                                <input type="text" name="stay" id="input2" class="textbox form-control" placeholder="Enter ">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6 mb-3">
                                                <label for="validationCustom03">Permanent Address *</label>
                                                <input type="text" class="form-control" name="paddress" id="validationCustom03"  placeholder="Permanent Address" required="">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                <label for="validationCustom04">Temporary Address *</label>
                                                <input type="text" class="form-control" name="taddress" id="validationCustom04" placeholder="Temporary Address" required="">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-3 mb-3">
                                                    <label for="validationCustom04">State *</label>
                                                    <select class="select form-control custom-select" name="state" id="inputState" required="">
                                                    <option value="">Select State</option>
                                                    <option value="Andra Pradesh">Andra Pradesh</option>
                                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                    <option value="Assam">Assam</option>
                                                    <option value="Bihar">Bihar</option>
                                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                                    <option value="Goa">Goa</option>
                                                    <option value="Gujarat">Gujarat</option>
                                                    <option value="Haryana">Haryana</option>
                                                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                                    <option value="Jharkhand">Jharkhand</option>
                                                    <option value="Karnataka">Karnataka</option>
                                                    <option value="Kerala">Kerala</option>
                                                    <option value="Madya Pradesh">Madya Pradesh</option>
                                                    <option value="Maharashtra">Maharashtra</option>
                                                    <option value="Manipur">Manipur</option>
                                                    <option value="Meghalaya">Meghalaya</option>
                                                    <option value="Mizoram">Mizoram</option>
                                                    <option value="Nagaland">Nagaland</option>
                                                    <option value="Orissa">Orissa</option>
                                                    <option value="Punjab">Punjab</option>
                                                    <option value="Rajasthan">Rajasthan</option>
                                                    <option value="Sikkim">Sikkim</option>
                                                    <option value="Tamil Nadu">Tamil Nadu</option>
                                                    <option value="Telangana">Telangana</option>
                                                    <option value="Tripura">Tripura</option>
                                                    <option value="Uttaranchal">Uttaranchal</option>
                                                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                    <option value="West Bengal">West Bengal</option>
                                                    <option disabled="" style="background-color:#aaa; color:#fff">UNION Territories</option>
                                                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                                    <option value="Chandigarh">Chandigarh</option>
                                                    <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                                    <option value="Daman and Diu">Daman and Diu</option>
                                                    <option value="Delhi">Delhi</option>
                                                    <option value="Lakshadeep">Lakshadeep</option>
                                                    <option value="Pondicherry">Pondicherry</option>
                                                    </select>
                                                    </div>
                                                <div class="col-md-3 mb-3">
                                                    <label for="validationCustom04">City *</label>
                                                    <select class="select form-control custom-select" name="city" id="inputDistrict" required="">
                                                    <option value="">-- select one -- </option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                    <label for="validationCustom05">Zip *</label>
                                                    <input type="text" class="form-control" name="zip" id="validationCustom05" placeholder="Zip" required="">
                                                    </div>
                                                    <div class="col-md-3 mb-3">
                                                        <label for="validationCustom05">Country *</label>
                                                        <select class="select form-control custom-select" id="country" name="country" required="">
                                                        <option value="">Select</option>
                                                        <option value="Afghanistan">Afghanistan</option>
                                                        <option value="Åland Islands">Åland Islands</option>
                                                        <option value="Albania">Albania</option>
                                                        <option value="Algeria">Algeria</option>
                                                        <option value="American Samoa">American Samoa</option>
                                                        <option value="Andorra">Andorra</option>
                                                        <option value="Angola">Angola</option>
                                                        <option value="Anguilla">Anguilla</option>
                                                        <option value="Antarctica">Antarctica</option>
                                                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                        <option value="Argentina">Argentina</option>
                                                        <option value="Armenia">Armenia</option>
                                                        <option value="Aruba">Aruba</option>
                                                        <option value="Australia">Australia</option>
                                                        <option value="Austria">Austria</option>
                                                        <option value="Azerbaijan">Azerbaijan</option>
                                                        <option value="Bahamas">Bahamas</option>
                                                        <option value="Bahrain">Bahrain</option>
                                                        <option value="Bangladesh">Bangladesh</option>
                                                        <option value="Barbados">Barbados</option>
                                                        <option value="Belarus">Belarus</option>
                                                        <option value="Belgium">Belgium</option>
                                                        <option value="Belize">Belize</option>
                                                        <option value="Benin">Benin</option>
                                                        <option value="Bermuda">Bermuda</option>
                                                        <option value="Bhutan">Bhutan</option>
                                                        <option value="Bolivia">Bolivia</option>
                                                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                        <option value="Botswana">Botswana</option>
                                                        <option value="Bouvet Island">Bouvet Island</option>
                                                        <option value="Brazil">Brazil</option>
                                                        <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                        <option value="Bulgaria">Bulgaria</option>
                                                        <option value="Burkina Faso">Burkina Faso</option>
                                                        <option value="Burundi">Burundi</option>
                                                        <option value="Cambodia">Cambodia</option>
                                                        <option value="Cameroon">Cameroon</option>
                                                        <option value="Canada">Canada</option>
                                                        <option value="Cape Verde">Cape Verde</option>
                                                        <option value="Cayman Islands">Cayman Islands</option>
                                                        <option value="Central African Republic">Central African Republic</option>
                                                        <option value="Chad">Chad</option>
                                                        <option value="Chile">Chile</option>
                                                        <option value="China">China</option>
                                                        <option value="Christmas Island">Christmas Island</option>
                                                        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                        <option value="Colombia">Colombia</option>
                                                        <option value="Comoros">Comoros</option>
                                                        <option value="Congo">Congo</option>
                                                        <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                                        <option value="Cook Islands">Cook Islands</option>
                                                        <option value="Costa Rica">Costa Rica</option>
                                                        <option value="Cote D'ivoire">Cote D'ivoire</option>
                                                        <option value="Croatia">Croatia</option>
                                                        <option value="Cuba">Cuba</option>
                                                        <option value="Cyprus">Cyprus</option>
                                                        <option value="Czech Republic">Czech Republic</option>
                                                        <option value="Denmark">Denmark</option>
                                                        <option value="Djibouti">Djibouti</option>
                                                        <option value="Dominica">Dominica</option>
                                                        <option value="Dominican Republic">Dominican Republic</option>
                                                        <option value="Ecuador">Ecuador</option>
                                                        <option value="Egypt">Egypt</option>
                                                        <option value="El Salvador">El Salvador</option>
                                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                        <option value="Eritrea">Eritrea</option>
                                                        <option value="Estonia">Estonia</option>
                                                        <option value="Ethiopia">Ethiopia</option>
                                                        <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                        <option value="Faroe Islands">Faroe Islands</option>
                                                        <option value="Fiji">Fiji</option>
                                                        <option value="Finland">Finland</option>
                                                        <option value="France">France</option>
                                                        <option value="French Guiana">French Guiana</option>
                                                        <option value="French Polynesia">French Polynesia</option>
                                                        <option value="French Southern Territories">French Southern Territories</option>
                                                        <option value="Gabon">Gabon</option>
                                                        <option value="Gambia">Gambia</option>
                                                        <option value="Georgia">Georgia</option>
                                                        <option value="Germany">Germany</option>
                                                        <option value="Ghana">Ghana</option>
                                                        <option value="Gibraltar">Gibraltar</option>
                                                        <option value="Greece">Greece</option>
                                                        <option value="Greenland">Greenland</option>
                                                        <option value="Grenada">Grenada</option>
                                                        <option value="Guadeloupe">Guadeloupe</option>
                                                        <option value="Guam">Guam</option>
                                                        <option value="Guatemala">Guatemala</option>
                                                        <option value="Guernsey">Guernsey</option>
                                                        <option value="Guinea">Guinea</option>
                                                        <option value="Guinea-bissau">Guinea-bissau</option>
                                                        <option value="Guyana">Guyana</option>
                                                        <option value="Haiti">Haiti</option>
                                                        <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                                        <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                                        <option value="Honduras">Honduras</option>
                                                        <option value="Hong Kong">Hong Kong</option>
                                                        <option value="Hungary">Hungary</option>
                                                        <option value="Iceland">Iceland</option>
                                                        <option value="India">India</option>
                                                        <option value="Indonesia">Indonesia</option>
                                                        <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                                        <option value="Iraq">Iraq</option>
                                                        <option value="Ireland">Ireland</option>
                                                        <option value="Isle of Man">Isle of Man</option>
                                                        <option value="Israel">Israel</option>
                                                        <option value="Italy">Italy</option>
                                                        <option value="Jamaica">Jamaica</option>
                                                        <option value="Japan">Japan</option>
                                                        <option value="Jersey">Jersey</option>
                                                        <option value="Jordan">Jordan</option>
                                                        <option value="Kazakhstan">Kazakhstan</option>
                                                        <option value="Kenya">Kenya</option>
                                                        <option value="Kiribati">Kiribati</option>
                                                        <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                                        <option value="Korea, Republic of">Korea, Republic of</option>
                                                        <option value="Kuwait">Kuwait</option>
                                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                        <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                                        <option value="Latvia">Latvia</option>
                                                        <option value="Lebanon">Lebanon</option>
                                                        <option value="Lesotho">Lesotho</option>
                                                        <option value="Liberia">Liberia</option>
                                                        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                        <option value="Liechtenstein">Liechtenstein</option>
                                                        <option value="Lithuania">Lithuania</option>
                                                        <option value="Luxembourg">Luxembourg</option>
                                                        <option value="Macao">Macao</option>
                                                        <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                                        <option value="Madagascar">Madagascar</option>
                                                        <option value="Malawi">Malawi</option>
                                                        <option value="Malaysia">Malaysia</option>
                                                        <option value="Maldives">Maldives</option>
                                                        <option value="Mali">Mali</option>
                                                        <option value="Malta">Malta</option>
                                                        <option value="Marshall Islands">Marshall Islands</option>
                                                        <option value="Martinique">Martinique</option>
                                                        <option value="Mauritania">Mauritania</option>
                                                        <option value="Mauritius">Mauritius</option>
                                                        <option value="Mayotte">Mayotte</option>
                                                        <option value="Mexico">Mexico</option>
                                                        <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                        <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                        <option value="Monaco">Monaco</option>
                                                        <option value="Mongolia">Mongolia</option>
                                                        <option value="Montenegro">Montenegro</option>
                                                        <option value="Montserrat">Montserrat</option>
                                                        <option value="Morocco">Morocco</option>
                                                        <option value="Mozambique">Mozambique</option>
                                                        <option value="Myanmar">Myanmar</option>
                                                        <option value="Namibia">Namibia</option>
                                                        <option value="Nauru">Nauru</option>
                                                        <option value="Nepal">Nepal</option>
                                                        <option value="Netherlands">Netherlands</option>
                                                        <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                        <option value="New Caledonia">New Caledonia</option>
                                                        <option value="New Zealand">New Zealand</option>
                                                        <option value="Nicaragua">Nicaragua</option>
                                                        <option value="Niger">Niger</option>
                                                        <option value="Nigeria">Nigeria</option>
                                                        <option value="Niue">Niue</option>
                                                        <option value="Norfolk Island">Norfolk Island</option>
                                                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                        <option value="Norway">Norway</option>
                                                        <option value="Oman">Oman</option>
                                                        <option value="Pakistan">Pakistan</option>
                                                        <option value="Palau">Palau</option>
                                                        <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                                        <option value="Panama">Panama</option>
                                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                                        <option value="Paraguay">Paraguay</option>
                                                        <option value="Peru">Peru</option>
                                                        <option value="Philippines">Philippines</option>
                                                        <option value="Pitcairn">Pitcairn</option>
                                                        <option value="Poland">Poland</option>
                                                        <option value="Portugal">Portugal</option>
                                                        <option value="Puerto Rico">Puerto Rico</option>
                                                        <option value="Qatar">Qatar</option>
                                                        <option value="Reunion">Reunion</option>
                                                        <option value="Romania">Romania</option>
                                                        <option value="Russian Federation">Russian Federation</option>
                                                        <option value="Rwanda">Rwanda</option>
                                                        <option value="Saint Helena">Saint Helena</option>
                                                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                        <option value="Saint Lucia">Saint Lucia</option>
                                                        <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                                        <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                                        <option value="Samoa">Samoa</option>
                                                        <option value="San Marino">San Marino</option>
                                                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                                        <option value="Senegal">Senegal</option>
                                                        <option value="Serbia">Serbia</option>
                                                        <option value="Seychelles">Seychelles</option>
                                                        <option value="Sierra Leone">Sierra Leone</option>
                                                        <option value="Singapore">Singapore</option>
                                                        <option value="Slovakia">Slovakia</option>
                                                        <option value="Slovenia">Slovenia</option>
                                                        <option value="Solomon Islands">Solomon Islands</option>
                                                        <option value="Somalia">Somalia</option>
                                                        <option value="South Africa">South Africa</option>
                                                        <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                                        <option value="Spain">Spain</option>
                                                        <option value="Sri Lanka">Sri Lanka</option>
                                                        <option value="Sudan">Sudan</option>
                                                        <option value="Suriname">Suriname</option>
                                                        <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                                        <option value="Swaziland">Swaziland</option>
                                                        <option value="Sweden">Sweden</option>
                                                        <option value="Switzerland">Switzerland</option>
                                                        <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                        <option value="Taiwan">Taiwan</option>
                                                        <option value="Tajikistan">Tajikistan</option>
                                                        <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                                        <option value="Thailand">Thailand</option>
                                                        <option value="Timor-leste">Timor-leste</option>
                                                        <option value="Togo">Togo</option>
                                                        <option value="Tokelau">Tokelau</option>
                                                        <option value="Tonga">Tonga</option>
                                                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                        <option value="Tunisia">Tunisia</option>
                                                        <option value="Turkey">Turkey</option>
                                                        <option value="Turkmenistan">Turkmenistan</option>
                                                        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                        <option value="Tuvalu">Tuvalu</option>
                                                        <option value="Uganda">Uganda</option>
                                                        <option value="Ukraine">Ukraine</option>
                                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="United States">United States</option>
                                                        <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                        <option value="Uruguay">Uruguay</option>
                                                        <option value="Uzbekistan">Uzbekistan</option>
                                                        <option value="Vanuatu">Vanuatu</option>
                                                        <option value="Venezuela">Venezuela</option>
                                                        <option value="Viet Nam">Viet Nam</option>
                                                        <option value="Virgin Islands, British">Virgin Islands, British</option>
                                                        <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                                        <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                        <option value="Western Sahara">Western Sahara</option>
                                                        <option value="Yemen">Yemen</option>
                                                        <option value="Zambia">Zambia</option>
                                                        <option value="Zimbabwe">Zimbabwe</option>
                                                        </select>
                                                    </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-4 mb-3">
                                                <label for="validationCustomUsername">Profile Photo *</label>
                                                <div class="input-group">
                                                <input type="file" class="form-control custom-file-input" name="pphoto" id="validationCustomUsername" onchange="if (!window.__cfRLUnblockHandlers) return false; return fileValidation()" placeholder="Username" aria-describedby="inputGroupPrepend" required="">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                                </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                <label for="validationCustomUsername2">Father's Photo *</label>
                                                <div class="input-group">
                                                <input type="file" class="form-control custom-file-input" name="fphoto" id="validationCustomUsername2" onchange="if (!window.__cfRLUnblockHandlers) return false; return fileValidation3()" placeholder="Username" aria-describedby="inputGroupPrepend" required="">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                                </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                <label for="validationCustomUsername3">Mother's Photo *</label>
                                                <div class="input-group">
                                                <input type="file" class="form-control custom-file-input" name="mphoto" id="validationCustomUsername3" onchange="if (!window.__cfRLUnblockHandlers) return false; return fileValidation4()" placeholder="Username" aria-describedby="inputGroupPrepend" required="">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                                </div>
                                                </div>
                                            </div>
                                            <br>
                                            <a href="#" class="btn btn-primary disabled" tabindex="-1" role="button" aria-disabled="true">Submit</a>
                                            </form>
                                            </div>
                                        
                                        <div class="tab-pane p-20" id="profile" role="tabpanel">
                                            <div class="modal fade" id="studentAcademic" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Add Academic Details</h5>
                                                                <button type="button" class="btn" data-dismiss="modal" aria-label="Close">
                                                                <i class="mdi mdi-close"></i> 
                                                                </button>
                                                        </div>
                                                        <form id="sacademic">
                                                        <div class="modal-body">
                                                        <div id="errorsacademic" class="alert alert-warning d-none"></div>
                                                        <div class="mb-3">
                                                        <label for="">Course *</label>
                                                        <select class="form-control" name="course" id="course" onchange="if (!window.__cfRLUnblockHandlers) return false; toggleDivVisibility()" required="">
                                                        <option value="">Select Course</option>
                                                        <option value="SSLC">SSLC</option>
                                                        <option value="HSC">HSC</option>
                                                        <option value="ITI">ITI</option>
                                                        <option value="DIPLOMA">DIPLOMA</option>
                                                        <option value="UG">UG</option>
                                                        </select>
                                                        </div>
                                                        <div class="mb-3">
                                                        <label for="validationCustom03">Degree *</label>
                                                        <select class="form-control" name="degree" id="degree" required="">
                                                        <option value="">Select Degree</option>
                                                        <option value="B.Tech">B.Tech</option>
                                                        <option value="B.E">B.E</option>
                                                        <option value="M.E">M.E</option>
                                                        </select>
                                                        </div>
                                                        <div class="mb-3" id="spec">
                                                        <label for="">Specialization / Branch *</label>
                                                        <input type="text" name="branch" id="branch" class="form-control" placeholder="Enter Specilization">
                                                        </div>
                                                        <div class="mb-3">
                                                        <label for="">Institution Name *</label>
                                                        <input type="text" name="iname" class="form-control" placeholder="Enter Institution Name">
                                                        </div>
                                                        <div class="mb-3">
                                                        <label for="">Board/University *</label>
                                                        <input type="text" name="univ" class="form-control" placeholder="Enter Board/University Name">
                                                        </div>
                                                        <div class="mb-3">
                                                        <label for="">Year of Completion *</label>
                                                        <input type="text" name="yc" class="form-control">
                                                        </div>
                                                        <div class="mb-3">
                                                        <label for="">Percentage (%)/CGPA*</label>
                                                        <input type="text" name="score" class="form-control">
                                                        </div>
                                                        <div class="mb-3">
                                                        <label for="">Certificate*</label>
                                                        <label for="">(upload less than 2 mb)</label>
                                                        <div class="input-group">
                                                        <input type="file" class="form-control custom-file-input" name="cert" id="uploadFile2" onchange="if (!window.__cfRLUnblockHandlers) return false; return fileValidationcert()" aria-describedby="inputGroupPrepend" required="">
                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                        </div>
                                                        <p style="color:red;" id="tutorial"></p>
                                                        </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save details</button>
                                                        </div>
                                                        <div id="test"> </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal fade" id="studentEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Edit details</h5>
                                                                <button type="button" class="btn" data-dismiss="modal" aria-label="Close">
                                                                <i class="mdi mdi-close"></i> 
                                                                </button>
                                                        </div>
                                                        <form id="updateStudent">
                                                        <div class="modal-body">
                                                            <div id="errorMessageUpdate" class="alert alert-warning d-none"></div>
                                                            <input type="hidden" name="student_id" id="student_id">
                                                            <div class="mb-3">
                                                            <label for="">Course *</label>
                                                            <select class="form-control" name="course" id="course2" onchange="if (!window.__cfRLUnblockHandlers) return false; toggleDivVisibility1()" required="">
                                                                <option value="">Select Course</option>
                                                                <option value="SSLC">SSLC</option>
                                                                <option value="HSC">HSC</option>
                                                                <option value="ITI">ITI</option>
                                                                <option value="DIPLOMA">DIPLOMA</option>
                                                                <option value="UG">UG</option>
                                                                <option value="PG">PG</option>
                                                                <option value="PHD">PHD</option>
                                                            </select>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="validationCustom03">Degree *</label>
                                                                    <select class="form-control" name="degree" id="degree2" required="">
                                                                    <option value="">Select Degree</option>
                                                                    </select>
                                                                </div>
                                                            <div class="mb-3" id="spec2">
                                                                <label for="">Specialization / Branch *</label>
                                                                <input type="text" name="branch" id="branch" class="form-control">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="">Institution Name *</label>
                                                                <input type="text" name="name" id="name" class="form-control">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="">Board/University *</label>
                                                                <input type="text" name="univ" id="univ" class="form-control">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="">Year of Completion *</label>
                                                                <input type="text" name="yc" id="yc" class="form-control">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="">Percentage (%)/CGPA*</label>
                                                                <input type="text" name="score" id="score" class="form-control">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="">Certificate*</label>
                                                                <label for="">(upload less than 2 mb)</label>
                                                                <div class="input-group">
                                                                    <input type="file" class="form-control custom-file-input" name="cert" id="uploadFile3" onchange="if (!window.__cfRLUnblockHandlers) return false; return fileValidationucert()" aria-describedby="inputGroupPrepend" required="">
                                                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                                                </div>
                                                                <p style="color:red;" id="tutorial"></p>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Update details</button>
                                                        </div>
                                                    </form>
                                                    </div>
                                                </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h4>Academic Details
                                                                    <button type="button" style="float:right;" class="btn btn-primary" data-toggle="modal" data-target="#studentAcademic">
                                                                    Add details
                                                                    </button>
                                                                </h4>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="table-responsive">
                                                                    <table id="myTable" class="table table-bordered table-striped">
                                                                    <thead>
                                                                    <tr>
                                                                        <th><b>S.No</b></th>
                                                                        <th><b>Course</b></th>
                                                                        <th><b>Institution Name</b></th>
                                                                        <th><b>Board/University</b></th>
                                                                        <th><b>Year of Passing</b></th>
                                                                        <th><b>Percentage/CGPA</b></th>
                                                                        <th><b>Certificate </b></th>
                                                                        <th><b>Action</b></th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php
                                                                        $id = 1;
                                                                        while ($row = mysqli_fetch_assoc($result)){ 
                                                                        ?>
                                                                        <tr>
                                                                            <td><?php echo $id; ?></td>
                                                                            <td><?php echo $row['Course']; ?></td>
                                                                            <td><?php echo $row['Institution Name']; ?></td>
                                                                            <td><?php echo $row['Board/University']; ?></td>
                                                                            <td><?php echo $row['Year of Passing']; ?></td>
                                                                            <td><?php echo $row['Percentage/CGPA']; ?></td>
                                                                            <td>
                                                                                <button type="button" value="<?php echo $row['id']; ?>" class="btn btn-success btncertificate">Certificate</button>
                                                                                
                                                                            </td>
                                                                            <td>
                                                                                <button type="button" value="<?php echo $row['id']; ?>" class="btn btn-warning btnuseredit" data-target="#studentEditModal">Edit</button>
                                                                                <button type="button" value="<?php echo $row['id']; ?>" class="btn btn-danger btnuserdelete">Delete</button>
                                                                            </td>
                                                                        </tr>
                                                                        <?php
                                                                        $id++;
                                                                        }
                                                                        ?>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="tab-pane p-20" id="messages" role="tabpanel">
                                            <div class="modal fade" id="familyadd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add family Details</h5>
                                            <button type="button" class="btn" data-dismiss="modal" aria-label="Close">
                                            <i class="mdi mdi-close"></i> 
                                            </button>
                                            </div>
                                            <form id="familyadd2">
                                            <div class="modal-body">
                                            <div id="errorMessage" class="alert alert-warning d-none"></div>
                                            <div class="mb-3">
                                            <label for="">Name *</label>
                                            <input type="text" name="name" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                            <label for="">Gender *</label>
                                            <select class="form-control" name="gender" required="">
                                            <option value="">Select Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Transgender">Transgender</option>
                                            </select>
                                            </div>
                                            <div class="mb-3">Relationship *
                                            <select class="form-control" name="relationship">
                                            <option value="">Select Relationship</option>
                                            <option value="Brother">Brother</option>
                                            <option value="Brother-in-Law">Brother-in-Law</option>
                                            <option value="Daughter">Daughter</option>
                                            <option value="Daughter-in-Law">Daughter-in-Law</option>
                                            <option value="Father">Father</option>
                                            <option value="Father-in-Law">Father-in-Law</option>
                                            <option value="Grand-Daughter">Grand-Daughter</option>
                                            <option value="Grand-Father">Grand-Father</option>
                                            <option value="Grand-Mother">Grand-Mother</option>
                                            <option value="Grand-Son">Grand-Son</option>
                                            <option value="Husband">Husband</option>
                                            <option value="Mother">Mother</option>
                                            <option value="Mother-in-Law">Mother-in-Law</option>
                                            <option value="Others">Others</option>
                                            <option value="Sister">Sister</option>
                                            <option value="Sister-in-Law">Sister-in-Law</option>
                                            <option value="Son">Son</option>
                                            <option value="Son-in-Law">Son-in-Law</option>
                                            <option value="Uncle">Uncle</option>
                                            <option value="Wife">Wife</option>
                                            </select>
                                            </div>
                                            <div class="mb-3">
                                            <label for="">Occupation *</label>
                                            <input type="text" name="occu" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                            <label for="">Organization *</label>
                                            <input type="text" name="org" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                            <label for="">Mobile *</label>
                                            <input type="text" name="mobile" class="form-control">
                                            </div>
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Add member</button>
                                            </div>
                                            </form>
                                            </div>
                                            </div>
                                            </div>
                                            
                                            <div class="modal fade" id="studentEditModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Student</h5>
                                            <button type="button" class="btn" data-dismiss="modal" aria-label="Close">
                                            <i class="mdi mdi-close"></i> 
                                            </button>
                                            </div>
                                            <form id="updatefamily">
                                            <div class="modal-body">
                                            <div id="errorMessageUpdate" class="alert alert-warning d-none"></div>
                                            <input type="hidden" name="student_id2" id="student_id2">
                                            <div class="mb-3">
                                            <label for="">Name *</label>
                                            <input type="text" name="name" id="name2" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                            <label for="">Gender *</label>
                                            <select class="form-control" name="gender" id="gender" required="">
                                            <option value="">Select Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Transgender">Transgender</option>
                                            </select>
                                            </div>
                                            <div class="mb-3">Relationship *
                                            <select class="form-control" name="relationship" id="relationship">
                                            <option value="">Select Relationship</option>
                                            <option value="Brother">Brother</option>
                                            <option value="Brother-in-Law">Brother-in-Law</option>
                                            <option value="Daughter">Daughter</option>
                                            <option value="Daughter-in-Law">Daughter-in-Law</option>
                                            <option value="Father">Father</option>
                                            <option value="Father-in-Law">Father-in-Law</option>
                                            <option value="Grand-Daughter">Grand-Daughter</option>
                                            <option value="Grand-Father">Grand-Father</option>
                                            <option value="Grand-Mother">Grand-Mother</option>
                                            <option value="Grand-Son">Grand-Son</option>
                                            <option value="Husband">Husband</option>
                                            <option value="Mother">Mother</option>
                                            <option value="Mother-in-Law">Mother-in-Law</option>
                                            <option value="Others">Others</option>
                                            <option value="Sister">Sister</option>
                                            <option value="Sister-in-Law">Sister-in-Law</option>
                                            <option value="Son">Son</option>
                                            <option value="Son-in-Law">Son-in-Law</option>
                                            <option value="Uncle">Uncle</option>
                                            <option value="Wife">Wife</option>
                                            </select>
                                            </div>
                                            <div class="mb-3">
                                            <label for="">Occupation *</label>
                                            <input type="text" name="occu" id="occu" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                            <label for="">Organization *</label>
                                            <input type="text" name="org" id="org" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                            <label for="">Mobile *</label>
                                            <input type="text" name="mobile" id="mobile" class="form-control">
                                            </div>
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Update Member</button>
                                            </div>
                                            </form>
                                            </div>
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-md-12">
                                            <div class="card">
                                            <div class="card-header">
                                            <h4>Family Details
                                            <button type="button" style="float: right;" class="btn btn-primary" data-toggle="modal" data-target="#familyadd">
                                            Add Family Members
                                            </button>
                                            </h4>
                                            </div>
                                            <div class="card-body">
                                            <div class="table-responsive">
                                            <table id="myTable1" class="table table-bordered table-striped">
                                            <thead>
                                            <tr>
                                            <th><b>S.No</b></th>
                                            <th><b>Name</b></th>
                                            <th><b>Relationship</b></th>
                                            <th><b>Occupation</b></th>
                                            <th><b>Organization</b></th>
                                            <th><b>Mobile Number</b></th>
                                            <th align="center"><b>Action</b></th>
                                            </tr>
                                            </thead>
                                            </table>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                            
                                        <div class="tab-pane p-20" id="parents" role="tabpanel">
                                                <div class="modal fade" id="studentAddParentMeetingDetails" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Add Parents-Meeting Details</h5>
                                                <button type="button" class="btn" data-dismiss="modal" aria-label="Close">
                                                <i class="mdi mdi-close"></i> 
                                                </button>
                                                </div>
                                                <form id="saveparentsmeetingdetails">
                                                <div class="modal-body">
                                                <div id="errorparentsMessage" class="alert alert-warning d-none"></div>
                                                <div class="mb-3">
                                                <label for="date">Date* : </label>
                                                <input type="date" name="pmdate" id="pmdate" class="form-control" required="">
                                                </div>
                                                <div class="mb-3">
                                                <label for="purpose-meeting">Purpose of Meeting* : </label>
                                                <input type="text" name="purpose" id="purpose-meeting" class="form-control" required="">
                                                </div>
                                                
                                                </div>
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save details</button>
                                                </div>
                                                </form>
                                                </div>
                                                </div>
                                                </div>
                                                <div class="modal fade" id="parenteditmodel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Meeting</h5>
                                                <button type="button" class="btn" data-dismiss="modal" aria-label="Close">
                                                <i class="mdi mdi-close"></i> 
                                                </button>
                                                </div>
                                                <form id="updparent">
                                                <div class="modal-body">
                                                <div id="errorMessageUpdate" class="alert alert-warning d-none"></div>
                                                <input type="hidden" name="student_id3" id="student_id3">
                                                <div class="mb-3">
                                                <label for="date">Date* : </label>
                                                <input type="date" name="pmdate2" id="pmdate2" class="form-control" required="">
                                                </div>
                                                <div class="mb-3">
                                                <label for="purpose-meeting">Purpose of Meeting* : </label>
                                                <br>
                                                <input type="text" name="purpose-meeting2" id="purpose-meeting2" class="form-control" required="">
                                                </div>
                                                
                                                <input type="hidden" name="status2" id="status2">
                                                </div>
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary btn-md" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary btn-md">Update details</button>
                                                </div>
                                                </form>
                                                </div>
                                                </div>
                                                </div>
                                                <div class="row">
                                                <div class="col-md-12">
                                                <div class="card">
                                                <div class="card-header">
                                                <h4>Parents-Meeting Details
                                                <button type="button" style="float: right;" class="btn btn-primary" data-toggle="modal" data-target="#studentAddParentMeetingDetails">
                                                Add details
                                                </button>
                                                </h4>
                                                </div>
                                                <div class="card-body">
                                                <div class="table-responsive">
                                                <table id="myTable30" class="table table-bordered table-striped">
                                                <thead>
                                                <tr>
                                                <th><b>Date</b></th>
                                                <th><b>Purpose of Meeting</b></th>
                                                <th><b>Points Discussed</b></th>
                                                <th><b>Action</b></th>
                                                <th><b>Status</b></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                                </table>
                                                </div>
                                                </div>
                                                </div>
                                                </div>
                                                </div>
                                                </div>
                                        
                                        <div class="tab-pane p-20" id="nominee" role="tabpanel">
                                            <div class="modal fade" id="mod" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add Counselling Details</h5>
                                            <button type="button" class="btn" data-dismiss="modal" aria-label="Close">
                                            <i class="mdi mdi-close"></i> 
                                            </button>
                                            </div>
                                            <form id="cform">
                                            <div class="modal-body">
                                            <div id="errorMessagec" class="alert alert-warning d-none"></div>
                                            <div class="mb-3">
                                            <label for="">Date *</label>
                                            <input type="Date" name="datee" class="form-control" required="">
                                            </div>
                                            <div class="mb-3">
                                            <label for="">Point Discussed *</label>
                                            <textarea type="text" name="feedback" class="form-control" required=""></textarea>
                                            </div>
                                            
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" name="cform" id="cform" class=" cform btn btn-primary">Add</button>
                                            </div>
                                            </form>
                                            </div>
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-md-12">
                                            <div class="card">
                                            <div class="card-header">
                                            <h4>Counselling Details
                                            <button type="button" style="float: right;" class="btn btn-primary" data-toggle="modal" data-target="#mod">
                                            Add Counselling Details
                                            </button>
                                            </h4>
                                            </div>
                                            <div class="card-body">
                                            <div class="table-responsive">
                                            <table id="myTablec" class="table table-bordered table-striped">
                                            <thead>
                                            <tr>
                                            <th><b>S.No</b></th>
                                            <th><b>Date</b></th>
                                            <th><b>Point Discussed</b></th>
                                            <th><b>Suggestion Given</b></th>
                                            <th><b>Action</b></th>
                                            <th><b>Status</b></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                            
                                            </table>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                        <div class="tab-pane p-20" id="medical" role="tabpanel">
                                            <div class="modal fade" id="studentViewModalms" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">View Certificate</h5>
                                            <button type="button" class="btn" data-dismiss="modal" aria-label="Close">
                                            <i class="mdi mdi-close"></i> 
                                            </button>
                                            </div>
                                            <div class="modal-body">
                                            <img id="imagems" src="" alt="Co-Curricular" class="center" style="width:80%;height:80%;">
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                            <div class="modal fade" id="smmedical" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add Medical Leave Details</h5>
                                            <button type="button" class="btn" data-dismiss="modal" aria-label="Close">
                                            <i class="mdi mdi-close"></i> 
                                            </button>
                                            </div>
                                            <form id="smedical">
                                            <div class="modal-body">
                                            <div id="smedimsg" class="alert alert-warning d-none"></div>
                                            <div class="mb-3">
                                            <label for="">From Date *</label>
                                            <input type="Date" name="fdatee" id="fromDate" class="form-control" required="">
                                            </div>
                                            <div class="mb-3">
                                            <label for="">To Date *</label>
                                            <input type="Date" name="tdatee" id="toDate" class="form-control" required="">
                                            </div>
                                            <div class="mb-3">
                                            <label for="">Total Days*</label>
                                            <input type="text" name="tdays" id="totalDays" class="form-control" required="">
                                            </div>
                                            <div class="mb-3">
                                            <label for="">Reason *</label>
                                            <textarea type="text" name="reason" class="form-control" required=""></textarea>
                                            </div>
                                            <div class="mb-3">
                                            <label for="">Medical Certificate*</label>
                                            <label for="">(upload less than 2 mb)</label> <br>
                                            <div class="input-group">
                                            <input type="file" class="form-control custom-file-input" name="mcert" id="uploadFile" onchange="if (!window.__cfRLUnblockHandlers) return false; return fileValidation2()" aria-describedby="inputGroupPrepend" required="">
                                            <label class="custom-file-label" for="customFile">Choose file(Image)</label>
                                            </div>
                                            <p style="color:red;" id="tutorial"></p>
                                            </div>
                                            
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" name="cform" id="cform" class=" cform btn btn-primary">Add</button>
                                            </div>
                                            </form>
                                            </div>
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-md-12">
                                            <div class="card">
                                            <div class="card-header">
                                            <h4>Medical Leave Details
                                            <button type="button" style="float: right;" class="btn btn-primary" data-toggle="modal" data-target="#smmedical">
                                            Add Medical Leave Details
                                            </button>
                                            </h4>
                                            </div>
                                            <div class="card-body">
                                            <div class="table-responsive">
                                            <table id="smedic" class="table table-bordered table-striped">
                                            <thead>
                                            <tr>
                                            <th><b>S.No</b></th>
                                            <th><b>From</b></th>
                                            <th><b>To</b></th>
                                            <th><b>Total Days</b></th>
                                            <th><b>Reason</b></th>
                                            <th><b>View</b></th>
                                            <th><b>Action</b></th>
                                            <th><b>Status</b></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                            
                                            </table>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                        <div class="tab-pane p-20" id="swot" role="tabpanel">
                                            <form id="swot" class="needs-validation" novalidate="">
                                            <div id="swotmsg" class="alert alert-warning d-none"></div>
                                            <div class="card-header">
                                            <h4> SWOT Analysis </h4>
                                            </div>
                                            <div class="form-row">
                                            <div class="col-md-6 mb-1">
                                            <label for="validationCustom01">Strengths</label>
                                            <input type="text" name="Strengths" class="form-control" id="validationCustom01" placeholder="Strengths" value="">
                                            <div class="valid-feedback">
                                            Looks good!
                                            </div>
                                            </div>
                                            <div class="col-md-6 mb-1">
                                            <label for="validationCustom02">Weaknesses</label>
                                            <input type="text" class="form-control" name="Weaknesses" id="validationCustom02" placeholder="Weaknesses" value="">
                                            <div class="valid-feedback">
                                            Looks good!
                                            </div>
                                            </div>
                                            </div>
                                            <div class="form-row">
                                            <div class="col-md-6 mb-1">
                                            <label for="validationCustom02">Opportunities</label>
                                            <input type="text" class="form-control" name="Opportunities" id="validationCustom02" placeholder="Opportunities" value="">
                                            <div class="valid-feedback">
                                            Looks good!
                                            </div>
                                            </div>
                                            <div class="col-md-6 mb-1">
                                            <label for="validationCustom02">Threats</label>
                                            <input type="text" class="form-control" name="Threats" id="validationCustom02" placeholder="Threats" value="">
                                            <div class="valid-feedback">
                                            Looks good!
                                            </div>
                                            </div>
                                            </div>
                                            <div class="form-row">
                                            <button class="btn btn-primary" type="submit">Submit</button>
                                            </div>
                                            </form>
                                            </div>
                                            <div class="tab-pane p-20" id="swot" role="tabpanel">
                                            <form id="swot" class="needs-validation" novalidate="">
                                            <div id="swotmsg" class="alert alert-warning d-none"></div>
                                            <div class="card-header">
                                            <h4> SWOT Analysis </h4>
                                            </div>
                                            <div class="form-row">
                                            <div class="col-md-6 mb-1">
                                            <label for="validationCustom01">Strengths</label>
                                            <input type="text" name="Strengths" class="form-control" id="validationCustom01" placeholder="Strengths" value="">
                                            <div class="valid-feedback">
                                            Looks good!
                                            </div>
                                            </div>
                                            <div class="col-md-6 mb-1">
                                            <label for="validationCustom02">Weaknesses</label>
                                            <input type="text" class="form-control" name="Weaknesses" id="validationCustom02" placeholder="Weaknesses" value="">
                                            <div class="valid-feedback">
                                            Looks good!
                                            </div>
                                            </div>
                                            </div>
                                            <div class="form-row">
                                            <div class="col-md-6 mb-1">
                                            <label for="validationCustom02">Opportunities</label>
                                            <input type="text" class="form-control" name="Opportunities" id="validationCustom02" placeholder="Opportunities" value="">
                                            <div class="valid-feedback">
                                            Looks good!
                                            </div>
                                            </div>
                                            <div class="col-md-6 mb-1">
                                            <label for="validationCustom02">Threats</label>
                                            <input type="text" class="form-control" name="Threats" id="validationCustom02" placeholder="Threats" value="">
                                            <div class="valid-feedback">
                                            Looks good!
                                            </div>
                                            </div>
                                            </div>
                                            <div class="form-row">
                                            <button class="btn btn-primary" type="submit">Submit</button>
                                            </div>
                                            </form>
                                            </div>
                                            </div>
                                            </div>
                                    
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                2024 © M.Kumarasamy College of Engineering All Rights Reserved.<br>Developed and Maintained by Technology Innovation Hub</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!-- This Page JS -->
    <script src="assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <script src="dist/js/pages/mask/mask.init.js"></script>
    <script src="assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="assets/libs/select2/dist/js/select2.min.js"></script>
    <script src="assets/libs/jquery-asColor/dist/jquery-asColor.min.js"></script>
    <script src="assets/libs/jquery-asGradient/dist/jquery-asGradient.js"></script>
    <script src="assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js"></script>
    <script src="assets/libs/jquery-minicolors/jquery.minicolors.min.js"></script>
    <script src="assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/libs/quill/dist/quill.min.js"></script>
    <script>
        //***********************************//
        // For select 2
        //***********************************//
        $(".select2").select2();

        /*colorpicker*/
        $('.demo').each(function() {
        //
        // Dear reader, it's actually very easy to initialize MiniColors. For example:
        //
        //  $(selector).minicolors();
        //
        // The way I've done it below is just for the demo, so don't get confused
        // by it. Also, data- attributes aren't supported at this time...they're
        // only used for this demo.
        //
        $(this).minicolors({
                control: $(this).attr('data-control') || 'hue',
                position: $(this).attr('data-position') || 'bottom left',

                change: function(value, opacity) {
                    if (!value) return;
                    if (opacity) value += ', ' + opacity;
                    if (typeof console === 'object') {
                        console.log(value);
                    }
                },
                theme: 'bootstrap'
            });

        });
        /*datwpicker*/
        jQuery('.mydatepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        var quill = new Quill('#editor', {
            theme: 'snow'
        });

    </script>
</body>

</html>