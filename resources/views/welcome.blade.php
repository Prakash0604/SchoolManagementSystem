
<!DOCTYPE html>
<html lang="en">

<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
	        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-132063111-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-132063111-1');
        </script>
    <!--end analytics here--->
        <title>eSkooly - Free School Management System</title>
          <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="" />
      <meta name="keywords" content="" />
      <meta name="author" content="eSkooly Inc.">
      <!-- Favicon icon -->
            <link rel="icon" href="assets/images/favicon.png" type="image/x-png">
      <!------fa--------->
        <link rel="stylesheet" href="./assets/fontawesome/css/all.css" />
    	<link rel="stylesheet" href="./assets/fontawesome/css/sharp-solid.css" />
    	<link rel="stylesheet" href="./assets/fontawesome/css/sharp-regular.css" />
    	<link rel="stylesheet" href="./assets/fontawesome/css/sharp-light.css" />

          <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="assets/icon/font-awesome/css/font-awesome.min.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
    <style>
        .m-div{
            padding:5px;
            border-radius:25px !important;
            margin-top:20px;
        }
        .m-field{
            border-radius:25px !important;
        }
        .m-label{
            margin-top:-14px;
            border:1px solid #999;
            border-radius:12px;
            font-size:10px;
            padding-left:10px;
            padding-right:10px;
            margin-left:10px;
        }
        .text-blue{
            color:#3144de;
    		text-align:left;
    		margin:0px;
    		border:none;
    		box-shadow:none;
    		padding:0px;
    		background:none;
        }
    </style>
</head>

<body>

        <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="loader-bar"></div>
        </div>
    </div>
    <!-- Pre-loader end -->

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
               <div class="navbar-wrapper" >
                   <div class="navbar-logo">
                       <a class="mobile-menu" id="mobile-collapse" href="#!">
                           <i class="fa-duotone fa-solid fa-bars"></i>
                       </a>
                       <div class="mobile-search">
                           <div class="header-search">
                               <div class="main-search morphsearch-search">
                                   <div class="input-group">
                                       <span class="input-group-addon search-close"><i class="fa-duotone fa-solid fa-xmark"></i></span>
                                       <input type="text" class="form-control" placeholder="Enter Keyword">
                                       <span class="input-group-addon search-btn"><i class="fa-duotone fa-solid fa-magnifying-glass"></i></span>
                                   </div>
                               </div>
                           </div>
                       </div>
                                              <a href="https://eskooly.com">
                           <img class="img-fluid m-l-30" id="headerimg" style="max-height:45px;" src="assets/images/logo1.png" alt="eSkooly-Logo" />
                       </a>
                                              <a class="mobile-options">
                           <i class="fa-duotone fa-solid fa-ellipsis"></i>
                       </a>

                   </div>

                   <div class="navbar-container container-fluid">
                       <ul class="nav-left">
                           <li>
                               <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="fa-duotone fa-solid fa-ellipsis"></i></a></div>
                           </li>

                           <li class="header-search">
                               <div class="main-search morphsearch-search">
                                   <div class="input-group">

                                       <span class="input-group-addon search-close"><i class="fa-duotone fa-solid fa-xmark"></i></span>
                                       <input type="text" class="form-control" id="tags" placeholder="Search Student"><form action="requestmanager.php" method="post">
									   <input type="text" id="tags_code" style="display:none;" name="id">
                                       <span  class="input-group-addon search-btn"><i class="fa-duotone fa-solid fa-magnifying-glass"></i></span>
									   <button type="submit" name="dashboard"  class="input-group-addon search-btn1"><i class="fa-duotone fa-solid fa-magnifying-glass"></i></button>
									   </form>

                                   </div>
                               </div>
                           </li>

                           <li>
                               <a href="#!" onclick="javascript:toggleFullScreen()">
                                   <i class="fa-duotone fa-solid fa-expand"></i>
                               </a>
                           </li>
                       </ul>
                       <ul class="nav-right">
                                                       <li class="header-notification">
                               <a href="https://apps.apple.com/pk/app/eskooly/id6448073356">
                                   <img src="assets/images/apple.png" style="width:120px;">
                               </a>

                           </li>
                           <li class="header-notification">
                               <a href="https://play.google.com/store/apps/details?id=com.eskooly.app">
                                   <img src="assets/images/google.png" style="width:120px;">
                               </a>

                           </li>
                           <li class="header-notification">
                               <a href="marketplace.php" data-toggle="tooltip" title="Marketplace">
                                   <img src="assets/marketplace1.png" style="width:35px;">
                               </a>

                           </li>
                                                      <li class="header-notification">
                               <a href="MessageBox.php">
                                   <i class="fa-duotone fa-solid fa-messages"></i>
                                   <span id="msgaya" class="badge bg-c-green f-10"></span>
                               </a>

                           </li>
                           <li class="header-notification">
                               <a href="#!">
                                   <i class="fa-sharp-duotone fa-solid fa-bell"></i>
                                   <span class="badge bg-m-orange f-10">

                                   </span>
                               </a>
                               <ul class="show-notification profile-notification">

                               </ul>

                           </li>
                                                      <li class="header-notification">
                               <a href="#!">
                                   <i class="fa-duotone fa-solid fa-cart-shopping"></i>
                                   <span class="badge bg-c-yellow f-10" style="color:#000;"></span>
                               </a>
                               <ul class="show-notification profile-notification">
                                                                   </ul>
                           </li>

                           <li class="user-profile header-notification" style="float:right;">
                               <a href="#!">
							    								<img src="logos/1740212976.png" style="width:40px; height:40px;" class="img-radius">
								<span title="Radiant Readers Academy">Radiant Readers</span>
								<i class="ti-angle-down"></i>

							   <!---
                                   <img src="assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                                   <span>John Doe</span>
                                   <i class="ti-angle-down"></i>

								----->
                               </a>
                               <ul class="show-notification profile-notification">
                                   <li>
                                       <a href="account.php">
                                           <i class="ti-settings"></i> Account Settings
                                       </a>
                                   </li>
                                   <li>
                                       <a href="schoolinfo.php">
                                           <i class="fa fa-bank"></i> Profile
                                       </a>
                                   </li>


                                   <li>
                                       <a href="logout.php">
                                       <i class="ti-lock"></i> Logout
                                   </a>
                                   </li>
                               </ul>
                           </li>
                       </ul>
                   </div>
               </div>
           </nav>
		  <script type="text/javascript">var theme = ["0","0","0","0","left","left","theme6","theme6","themelight1","themelight1","theme7","theme7","en","en"];</script>
		  <!---language starting--->

	<div id="google_translate_element" style="display: none !important;"></div>
	<script type="text/javascript">
            function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
            }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
	<!---language ends here--->
	            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <!--- sidebar nav here ---->
					<nav class="pcoded-navbar" style="background:#f6f7fb;">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">

                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">menu</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="active" id="dashboard">
                                    <a href="dashboard.php">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="pcoded-hasmenu" id="generalsettings">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-settings"></i></span>
                                        <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">General Settings</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" " id="schoolinfo">
                                            <a href="schoolinfo.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Institute Profile</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="feeparticulars">
                                            <a href="feeparticulars.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Fees Particulars</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="discounttype">
                                            <a href="#" data-toggle="tooltip" title="This option is available in Desktop Version only.">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs" style="opacity:0.6;">Fees Structure <i class="fa fa-lock m-orange f-right"></i></span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="discounttype">
                                            <a href="#" data-toggle="tooltip" title="This option is available in Desktop Version only.">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs" style="opacity:0.6;">Discount Type <i class="fa fa-lock m-orange f-right"></i></span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
										<li class=" " id="challan">
                                            <a href="bankdetails.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Accounts For Fees Invoice</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="rules">
                                            <a href="rules.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Rules & Regulations</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="grading">
                                            <a href="grading.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Marks Grading</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="themesettings">
                                            <a href="themesettings.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Theme & Language</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>

                                        <li class=" " id="account">
                                            <a href="account.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Account Settings</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="logout.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Log out</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>


                                    </ul>
                                </li>

                            </ul>

                            <ul class="pcoded-item pcoded-left-item">
                               <li class="pcoded-hasmenu" id="classes">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-ruler-pencil"></i></span>
                                        <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Classes</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" " id="allclasses">
                                            <a href="classes.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">All Classes</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="newclass">
                                            <a href="addnewclass.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">New Class</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu" id="subjects">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-book"></i></span>
                                        <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Subjects</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" " id="showsubjects">
                                            <a href="showsubjects.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Classes With Subjects</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="assignsubjects">
                                            <a href="subjects.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Assign Subjects</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                            </ul>


                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu" id="students">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-user"></i></span>
                                        <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Students</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" " id="allstudents">
                                            <a href="allstudents.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">All Students</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="addnewstudent">
                                            <a href="admission.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Add New</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="families">
                                            <a href="#" data-toggle="tooltip" title="This option is available in Desktop Version only.">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs" style="opacity:0.6;">Manage Families <i class="fa fa-lock m-orange f-right"></i></span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="aina">
                                            <a href="#" data-toggle="tooltip" title="This option is available in Desktop Version only.">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs" style="opacity:0.6;">Active / Inactive <i class="fa fa-lock m-orange f-right"></i></span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
										<li class=" " id="searchadmissionletter">
                                            <a href="stdregal.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Admission Letter</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
										<li class=" " id="idcard">
                                            <a href="studentcards.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Student ID Cards</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
										<li class=" " id="printinfo">
                                            <a href="printinfo.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Print Basic List</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="slogin">
                                            <a href="studentLogin.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Manage Login</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
										<li class=" " id="promotions">
                                            <a href="promotions.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Promote Students</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
								<li class="pcoded-hasmenu" id="employees">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-briefcase"></i></span>
                                        <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Employees</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" " id="allemployees">
                                            <a href="allemployees.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">All Employees</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="addnewteacher">
                                            <a href="addnewteacher.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Add New</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="eidcard">
                                            <a href="#" data-toggle="tooltip" title="This option is available in Desktop Version only.">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs" style="opacity:0.6;">Staff ID Cards <i class="fa fa-lock m-orange f-right"></i></span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
										<li class=" " id="jobletter">
                                            <a href="empregal.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Job Letter</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="elogin">
                                            <a href="staffLogin.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Manage Login</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>



                            </ul>

                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu" id="accounts">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-wallet"></i></span>
                                        <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Accounts</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" " id="heads">
                                            <a href="chartofaccounts.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Chart Of Account</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="addincome">
                                            <a href="income.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Add Income</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
										<li class=" " id="addexpense">
                                            <a href="expense.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Add Expense</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="statement">
                                            <a href="balance.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Account Statement</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
								<li class="pcoded-hasmenu" id="fees">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="fa fa-money"></i></span>
                                        <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Fees</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
									    <li class=" " id="getchallan">
                                            <a href="getchallan.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Generate Fees Invoice</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="submitfee">
                                            <a href="submitfees.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Collect Fees</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="feeslip">
                                            <a href="stdregfs.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Fees Paid Slip</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
										<li class=" " id="defualter">
                                            <a href="defualter.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Fees Defaulters</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="feereport">
                                            <a href="#" data-toggle="tooltip" title="This option is available in Desktop Version only.">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs" style="opacity:0.6;">Fees Report <i class="fa fa-lock m-orange f-right"></i></span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="deletefee">
                                            <a href="#" data-toggle="tooltip" title="This option is available in Desktop Version only.">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs" style="opacity:0.6;">Delete Fees <i class="fa fa-lock m-orange f-right"></i></span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
								<li class="pcoded-hasmenu" id="salary">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-credit-card"></i></span>
                                        <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Salary</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" " id="submitsalary">
                                            <a href="submitsalary.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Pay Salary</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="salaryslip">
                                            <a href="empregfs.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Salary Paid Slip</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="salarysheet">
                                            <a href="#" data-toggle="tooltip" title="This option is available in Desktop Version only.">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs" style="opacity:0.6;">Salary Sheet <i class="fa fa-lock m-orange f-right"></i></span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>

                                        <li class=" " id="salaryrecord">
                                            <a href="#" data-toggle="tooltip" title="This option is available in Desktop Version only.">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs" style="opacity:0.6;">Salary Report <i class="fa fa-lock m-orange f-right"></i></span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>



                            </ul>

                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu" id="attandance">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-hand-open"></i></span>
                                        <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Attendance</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" " id="studentsattandance">
                                            <a href="markatt.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Students Attendance</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="employeesattandance">
                                            <a href="chooseeattend.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Employees Attendance</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
										<li class=" " id="classwise">
                                            <a href="attreport.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Class wise Report</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
										<li class=" " id="studentattendancereport">
                                            <a href="allatt.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Students Attendance Report</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
										<li class=" " id="employeeattendancereport">
                                            <a href="alleatt.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Employees Attendance Report</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu" id="timetable">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-calendar"></i></span>
                                        <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Timetable</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" " id="weekdays">
                                            <a href="#" data-toggle="tooltip" title="This option is available in Desktop Version only.">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs" style="opacity:0.6;">Weekdays <i class="fa fa-lock m-orange f-right"></i></span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="periods">
                                            <a href="#" data-toggle="tooltip" title="This option is available in Desktop Version only.">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs" style="opacity:0.6;">Time Periods <i class="fa fa-lock m-orange f-right"></i></span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
										<li class=" " id="classrooms">
                                            <a href="#" data-toggle="tooltip" title="This option is available in Desktop Version only.">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs" style="opacity:0.6;">Class Rooms <i class="fa fa-lock m-orange f-right"></i></span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="createtimetable">
                                            <a href="#" data-toggle="tooltip" title="This option is available in Desktop Version only.">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs" style="opacity:0.6;">Create Timetable <i class="fa fa-lock m-orange f-right"></i></span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
										<li class=" " id="classview">
                                            <a href="#" data-toggle="tooltip" title="This option is available in Desktop Version only.">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs" style="opacity:0.6;">Generate For Class <i class="fa fa-lock m-orange f-right"></i></span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
										<li class=" " id="teacherview">
                                            <a href="#" data-toggle="tooltip" title="This option is available in Desktop Version only.">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs" style="opacity:0.6;">Generate For Teacher <i class="fa fa-lock m-orange f-right"></i></span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=" " id="homeworklink">
                                    <a href="homework.php">
                                        <span class="pcoded-micon"><i class="ti-slice"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Homework</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="pcoded-hasmenu" id="behaviour">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-eye"></i></span>
                                        <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Behaviour & Skills</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" " id="ratebehaviours">
                                            <a href="#" data-toggle="tooltip" title="This option is available in Desktop Version only.">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs" style="opacity:0.6;">Rate Behaviours <i class="fa fa-lock m-orange f-right"></i></span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="rateskills">
                                            <a href="#" data-toggle="tooltip" title="This option is available in Desktop Version only.">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs" style="opacity:0.6;">Rate Skills <i class="fa fa-lock m-orange f-right"></i></span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
										<li class=" " id="observations">
                                            <a href="#" data-toggle="tooltip" title="This option is available in Desktop Version only.">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs" style="opacity:0.6;">Observations <i class="fa fa-lock m-orange f-right"></i></span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="behaviourreport">
                                            <a href="#" data-toggle="tooltip" title="This option is available in Desktop Version only.">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs" style="opacity:0.6;">Affective Domain Rating Report <i class="fa fa-lock m-orange f-right"></i></span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="skillreport">
                                            <a href="#" data-toggle="tooltip" title="This option is available in Desktop Version only.">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs" style="opacity:0.6;">Psycomotor Domain Rating Report <i class="fa fa-lock m-orange f-right"></i></span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>



                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu" id="pos">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-shopping-cart"></i></span>
                                        <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Online Store & POS</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" " id="analytics">
                                            <a href="#" data-toggle="tooltip" title="This option is available in Desktop Version only.">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs" style="opacity:0.6;">Store Analytics <i class="fa fa-lock m-orange f-right"></i></span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="catagories">
                                            <a href="#" data-toggle="tooltip" title="This option is available in Desktop Version only.">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs" style="opacity:0.6;">Product Catagories <i class="fa fa-lock m-orange f-right"></i></span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
										<li class=" " id="tax">
                                            <a href="#" data-toggle="tooltip" title="This option is available in Desktop Version only.">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs" style="opacity:0.6;">Product Tax <i class="fa fa-lock m-orange f-right"></i></span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="products">
                                            <a href="#" data-toggle="tooltip" title="This option is available in Desktop Version only.">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs" style="opacity:0.6;">Products <i class="fa fa-lock m-orange f-right"></i></span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="addorder">
                                            <a href="#" data-toggle="tooltip" title="This option is available in Desktop Version only.">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs" style="opacity:0.6;">New Order <i class="fa fa-lock m-orange f-right"></i></span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="orders">
                                            <a href="#" data-toggle="tooltip" title="This option is available in Desktop Version only.">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs" style="opacity:0.6;">All Orders <i class="fa fa-lock m-orange f-right"></i></span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>



                                    </ul>
                                </li>
                                <li class=" " id="whatsapp">
                                    <a href="#" data-toggle="tooltip" title="This option is available in Desktop Version only.">
                                        <span class="pcoded-micon"><i class="fa fa-whatsapp"></i></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main" style="opacity:0.6;"> WhatsApp</span>
                                        <i class="fa fa-lock m-orange f-right m-t-10" style="opacity:0.6;"></i>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
								<li class=" " id="messages">
                                    <a href="MessageBox.php">
                                        <span class="pcoded-micon"><i class="ti-comment-alt"></i></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Messaging</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="pcoded-hasmenu" id="sms">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-email"></i></span>
                                        <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">SMS Services</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" " id="smsgateway">
                                            <a href="smsSettings.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Free SMS Gateway</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="brandedsms">
                                            <a href="#" data-toggle="tooltip" title="This option is available in Desktop Version only.">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs" style="opacity:0.6;">Branded SMS <i class="fa fa-lock m-orange f-right"></i></span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
										<li class=" " id="smstemplates">
                                            <a href="#" data-toggle="tooltip" title="This option is available in Desktop Version only.">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs" style="opacity:0.6;">SMS Templates <i class="fa fa-lock m-orange f-right"></i></span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>



                                    </ul>
                                </li>

								<li class=" " id="liveclass">
                                    <a href="liveclass.php">
                                        <span class="pcoded-micon"><i class="ti-video-camera"></i></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Live Class</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>

                            </ul>

                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu" id="questionpaper">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-files"></i></span>
                                        <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Question Paper</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" " id="addchapters">
                                            <a href="#" data-toggle="tooltip" title="This option is available in Desktop Version only.">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs" style="opacity:0.6;">Subject Chapters <i class="fa fa-lock m-orange f-right"></i></span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="questionbank">
                                            <a href="#" data-toggle="tooltip" title="This option is available in Desktop Version only.">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs" style="opacity:0.6;">Question Bank <i class="fa fa-lock m-orange f-right"></i></span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
										<li class=" " id="createpaper">
                                            <a href="#" data-toggle="tooltip" title="This option is available in Desktop Version only.">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs" style="opacity:0.6;">Create Question Paper <i class="fa fa-lock m-orange f-right"></i></span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>



                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu" id="exams">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-write"></i></span>
                                        <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Exams</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" " id="createexam">
                                            <a href="addexam.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Create New Exam</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="editexamdetail">
                                            <a href="editexamdetail.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Edit or delete</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="addexammarks">
                                            <a href="selectexam.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Add / update Exam Marks</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>

										<li class=" " id="resultcard">
                                            <a href="searchexamresult.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Result Card</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="awardlist">
                                            <a href="#" data-toggle="tooltip" title="This option is available in Desktop Version only.">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs" style="opacity:0.6;">Blank Award List <i class="fa fa-lock m-orange f-right"></i></span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>


                                    </ul>
                                </li>
								<li class="pcoded-hasmenu" id="tests">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-files"></i></span>
                                        <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Class Tests</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" " id="createtest">
                                            <a href="classtest.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Create New Test</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="testreport">
                                            <a href="alltest.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Test Result</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>




                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu" id="reports">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-files"></i></span>
                                        <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Reports</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" " id="reportcard">
                                            <a href="reportcardfor.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Students report Card</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="report1">
                                            <a href="report1.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Students info report</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="report2">
                                            <a href="report2.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Parents info report</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="report3">
                                            <a href="#" data-toggle="tooltip" title="This option is available in Desktop Version only.">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs" style="opacity:0.6;">Students Monthly Attendance Report <i class="fa fa-lock m-orange f-right"></i></span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
										<li class=" " id="report4">
                                            <a href="#" data-toggle="tooltip" title="This option is available in Desktop Version only.">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs" style="opacity:0.6;">Staff Monthly Attendance Report <i class="fa fa-lock m-orange f-right"></i></span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="report5">
                                            <a href="#" data-toggle="tooltip" title="This option is available in Desktop Version only.">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs" style="opacity:0.6;">Fee Collection Report <i class="fa fa-lock m-orange f-right"></i></span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="report6">
                                            <a href="#" data-toggle="tooltip" title="This option is available in Desktop Version only.">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs" style="opacity:0.6;">Student Progress Report <i class="fa fa-lock m-orange f-right"></i></span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="report7">
                                            <a href="#" data-toggle="tooltip" title="This option is available in Desktop Version only.">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs" style="opacity:0.6;">Accounts Report <i class="fa fa-lock m-orange f-right"></i></span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="report8">
                                            <a href="#" data-toggle="tooltip" title="This option is available in Desktop Version only.">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs" style="opacity:0.6;">Customised Reports <i class="fa fa-lock m-orange f-right"></i></span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>



                                    </ul>
                                </li>
								<li class="pcoded-hasmenu" id="certificates">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-medall"></i></span>
                                        <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Certificates</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" " id="lc">
                                            <a href="leavecertificate.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Leave Certificate</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="cc">
                                            <a href="charactercertificate.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Character Certificate</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
										<li class=" " id="cltemplates">
                                            <a href="#" data-toggle="tooltip" title="This option is available in Desktop Version only.">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs" style="opacity:0.6;">Certificate Templates <i class="fa fa-lock m-orange f-right"></i></span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>



                                    </ul>
                                </li>





                            </ul>

                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.other"></div>

							<div style="margin:0 auto;width:90%;text-align:center;background:white;" class="m-round p-10">
							<i class="ti-search f-20 bold"></i><br style="margin:2px;padding:0px;">
							<strong>Need More Advance ?</strong><br>
							<span style="font-size:12px;">Check our PRO version. An ultimate education management ERP with all advance features.</span><br>
							<a href="https://pro.eskooly.com" target="_blank"><button class="btn btn-sm m-t-10 bg-m-orange m-white m-round">Try Demo</button></a>

							</div>

                        </div>
                    </nav>

                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">


                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <!-- Row start -->
										<div class="row">
                                            <div class="col-12 p-10 f-14" style="border-radius:10px;background:#fff;box-shadow:0px 0px 1px 0px gray;"><strong style="border-right:1px solid #777;padding-right:10px;margin-right:10px;">Salary</strong>
										    <i class="ti-home"></i> - Pay Salary
										    </div>
                                        </div>
                                        <div class="row m-t-30">
										<div class="col-md-1 col-xl-2"></div>
										<div class="col-md-10 col-xl-8" style="border-radius:10px;background:#fff;box-shadow:0px 0px 1px 0px gray;padding:30px;">
										<h4 class="f-20 text-center text-gray" style="line-height:16px;">Pay Employee Salary<br>
									    <div class="bg-gradient-blue" style="width:15px;height:6px;border-radius:10px;display:inline-block;"></div> <span class="f-10 m-dblue" style="display:inline-block;font-weight:100;">Required*</span>
									    <div class="bg-gradient-gray m-l-10" style="width:20px;height:7px;border-radius:10px;display:inline-block;"></div> <span class="f-12 gradient-gray" style="display:inline-block;font-weight:100;">Optional</span>
									    </h4>
											<form action="depositsalary.php" method="post" id="myform">
											    <div class="row text-left p-t-20 ">
											        <div class="col-lg-2">
    											        <div style="position:relative;" class="">
        											    <img src="assets/arrow-down.png" style="position:absolute;left:0px;top:20px;height:16px;">
        											    <span class="f-12 m-gray" style="border-bottom:1.5px solid #999;">Employee ID</span><br>
        											    <strong class="f-14 m-l-20"><input type="text" value="140518" name="registration" class="text-blue"></strong>
        											    </div>
    											   </div>
    											   <div class="col-lg-5">
    											        <div style="position:relative;" class="">
        											    <img src="assets/arrow-down.png" style="position:absolute;left:0px;top:20px;height:16px;">
        											    <span class="f-12 m-gray" style="border-bottom:1.5px solid #999;">Employee Role</span><br>
        											    <strong class="f-14 m-l-20"><input type="text" value="Teacher" name="class" class="text-blue" ></strong>
        											    </div>
    											   </div>
    											   <div class="col-lg-5">
    											        <div style="position:relative;" class="">
        											    <img src="assets/arrow-down.png" style="position:absolute;left:0px;top:20px;height:16px;">
        											    <span class="f-12 m-gray" style="border-bottom:1.5px solid #999;">Employee Name</span><br>
        											    <strong class="f-14 m-l-20"><input type="text" value="Ramita kc" name="sname" class="text-blue"></strong>
        											    </div>
        											    <input type="hidden" value="" name="fname">
    											   </div>
											    </div>
											   <div class="row text-left m-t-10">
    											   <div class="col-lg-6">
    											       <div class="m-div">
    											           <label class="m-label bg-gradient-blue m-white">Salary Month*</label>
    											           <input type="month" class="form-control m-field" name="month" onchange="changeMonth()" id="month" required>
    											       </div>
    											   </div>

    											   <div class="col-lg-6">
    											       <div class="m-div">
    											           <label class="m-label bg-gradient-blue m-white">Date*</label>
    											           <input type="date" class="form-control m-field" value="2025-02-24" name="feedate" required>
    											       </div>
    											   </div>
											   </div>
                                               <div class="row text-left m-t-10">
                                                   <div class="col-lg-4">
    											       <div class="m-div">
    											           <label class="m-label bg-gradient-blue m-white">Fixed Salary*</label>
    											           <input type="number" class="form-control m-field" value="2000" name="fees" id="netsalary" required>
    											       </div>
    											   </div>
    											   <div class="col-lg-4">
    											       <div class="m-div">
    											           <label class="m-label bg-gradient-gray m-white">Any Bouns</label>
    											           <input type="number" class="form-control m-field" placeholder="Bouns amount" name="bouns" >
    											       </div>
    											   </div>
    											   <div class="col-lg-4">
    											       <div class="m-div">
    											           <label class="m-label bg-gradient-gray m-white">Any Deduction</label>
    											           <input type="number" class="form-control m-field" placeholder="Deduction amount" name="fine" >
    											       </div>
    											   </div>
                                                </div>
											   <p class="text-center m-t-40">
        										<button type="submit" id="submitBtn" class="btn bg-c-yellow" style="border-radius:25px;"><i class="fa-solid fa-check"></i> Submit Salary</button>
        										</p>
                                               </form>
                                               </div>
                                               <div class="col-md-1 col-xl-2"></div>
                                               </div>


										</div>
										<!-- Row end -->
										<!-- Row start -->

												<!-- Row end -->
									</div>
                                    <!-- Page-body end -->
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- Main-body end -->

<!-- Required Jquery -->
<script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="assets/js/modernizr/modernizr.js"></script>
<script type="text/javascript" src="assets/js/modernizr/css-scrollbars.js"></script>

<!-- Accordion js -->
<script type="text/javascript" src="assets/pages/accordion/accordion.js"></script>
<!-- Custom js -->
<script type="text/javascript" src="assets/js/script.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/vartical-demo.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script>

// navigator activator
document.getElementById("dashboard").classList.remove('active');
document.getElementById("submitsalary").classList.add('active');
document.getElementById("salary").classList.add('active');
document.getElementById("salary").classList.add('pcoded-trigger');
//----------end-----------------

// search students api
var availableTags = ["REG0101 - Elisa sakya - One"];
var availableTagsCode = ["REG0101"];
$( "#tags" ).autocomplete({
	source: availableTags,
	select: function (event, ui) {
		var index = availableTags.indexOf(ui.item.value);
		$("#tags_code").val(availableTagsCode[index]);
	}
});

//---------end------------------
function changeMonth(){
	var ereg=$('[name="registration"]').val();
	var emon=$("#month").val();
	$.ajax({
    type:'post',
        url:'checkfees.php',// put your real file name
        data:{ereg: ereg, emonth:emon},
        success:function(msg){
            if(msg=="YES"){
				alert("Salary Of This Employee is Already Added for This Month!");
				$("#netsalary").val(0);
            }
        }
	});
}
$(document).ready(function () {
    $("#myform").submit(function () {
        $("#submitBtn").html("<i class='fa fa-circle-o-notch fa-spin'></i> Please Wait");
        return true;
        $("#submitBtn").attr("disabled", true);
    });
});
</script>
</body>
</html>
