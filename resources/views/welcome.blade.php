
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
	  <link rel="stylesheet" type="text/css" href="assets/calendar/javascript-calendar.css">
	  <style>
	  .hide_field{
	          display:none;
	      }
	      .gradient-blue{

              -webkit-background-clip: text;
              -webkit-text-fill-color: transparent;
              background-image: -webkit-gradient(linear, left top, right top, from(#501e9c), color-stop(30%, #8169f1), color-stop(30%, #8169f1), color-stop(73%, #a44cee), to(#ff847f));
              background-image: -o-linear-gradient(left, #501e9c 0%, #8169f1 30%, #8169f1 30%, #a44cee 73%, #ff847f 100%);
              background-image: linear-gradient(to right, #501e9c 0%, #8169f1 30%, #8169f1 30%, #a44cee 73%, #ff847f 100%);
	      }
	      .text-blue{
	          color:#3144de;
	      }
    	.hidepi{
    		display:none;
    	}
        .titlecell{
            color:#999;
            font-size:12px;
        }
        .datacell{
            font-weight:bold;
            padding-left:20px;
            font-size:13px;
            color:#777;
        }
        #pi,#fd,#hidefi{
            display:none;
        }
        canvas {
        width: 100% !important;
        height: auto !important;

        text-align:center !important;
        }

        .block1 , .block2 , .block3 {
        	position: relative;
        	display: flex;
        	align-items: center;
        	justify-content: center;
        	width: 110px;
        	height: 110px;
        	border-radius: 50%;
        	padding:0px;
        	margin:0px;
        }

        .box1 , .box2 , .box3 {
        	position: relative;
        	display: flex;
        	align-items: center;
        	justify-content: center;
        	flex-direction: column;
        	width: calc(100% - 50px);
        	height: calc(100% - 50px);
        	border-radius: 50%;
        	/*background-color: #292929;*/
        	box-shadow: 0 0 0px 0px #9698d6;

        }

        .box1::before , .box2::before , .box3::before{
        	position: absolute;
        	content: '';
        	width: calc(100% + 18px);
        	height: calc(100% + 18px);
        	border-radius: 50%;
        	border: 1px solid silver;
        }

        .box1 .number1 span , .box2 .number2 span , .box3 .number3 span{
        	color: #e9e9e9;
        	line-height:12px;
        }

        .box1 .number1 .num1 , .box2 .number2 .num2 , .box3 .number3 .num3{
        	font-size: 20px;
        	font-weight: bold;
        	line-height:12px;
        }

        .box1 .number1 .sub1 , .box2 .number2 .sub2 , .box3 .number3 .sub3{
        	font-size: 14px;
        	line-height:12px;
        }

        .box1 .title1 , .box2 .title2 , .box3 .title3{
        	font-size: 10px;
        	color: #fff;
        	line-height:12px;
        }

        .dots1 , .dots2 , .dots3 {
        	display: block;
        	position: absolute;
        	z-index: 2;
        	width: 100%;
        	height: 100%;
        	border-radius: 50%;
        	transition: 2s transform, 2s opacity ease;
        }

        .dots1::after {
        	position: absolute;
        	content: '';
        	width: 10px;
        	height: 10px;
        	top: 11px;
        	left: 50%;
        	border-radius: 50%;
        	background-color: #5e81f4;
        	transform: translateX(-50%);

        }
        .dots2::after {
        	position: absolute;
        	content: '';
        	width: 10px;
        	height: 10px;
        	top: 11px;
        	left: 50%;
        	border-radius: 50%;
        	background-color: #ff808b;

        	transform: translateX(-50%);
        }
        .dots3::after {
        	position: absolute;
        	content: '';
        	width: 10px;
        	height: 10px;
        	top: 11px;
        	left: 50%;
        	border-radius: 50%;

        	transform: translateX(-50%);
        }
        .svg1 , .svg2 , .svg3 {
        	position: absolute;
        	width: 100%;
        	height: 100%;
        	fill: none;
        	transform: rotate(-90deg);
        }

        .circle1 {
        	stroke: url(#gradientStyle);
        	stroke-width: 5px;
        	stroke-dasharray: 245;
        	stroke-dashoffset: 245;
        	animation-duration: 2s;
        	animation-timing-function: linear;
        	animation-fill-mode: forwards;
        	transition: 2s stroke-dashoffset;
        }
        .circle2 {
        	stroke: url(#gradientStyle2);
        	stroke-width: 5px;
        	stroke-dasharray: 245;
        	stroke-dashoffset: 245;
        	animation-duration: 2s;
        	animation-timing-function: linear;
        	animation-fill-mode: forwards;
        	transition: 2s stroke-dashoffset;
        }
        .circle3 {
        	stroke: url(#gradientStyle3);
        	stroke-width: 5px;
        	stroke-dasharray: 245;
        	stroke-dashoffset: 245;
        	animation-duration: 2s;
        	animation-timing-function: linear;
        	animation-fill-mode: forwards;
        	transition: 2s stroke-dashoffset;
        }

        .tooltip > .tooltip-inner {background-color: #eebf3f; padding:2px 7px; color:rgb(23,44,66); font-weight:bold; font-size:11px;}
        .popOver + .tooltip > .tooltip-arrow {	border-left: 5px solid transparent !important; border-right: 5px solid transparent !important; border-top: 5px solid #eebf3f !important;}

        section{
          margin:100px auto;
          height:1000px;
        }
        .progress{
          border-radius:0;
          overflow:visible;
        }
        .progress-bar{
          -webkit-transition: width 5.5s ease-in-out;
          transition: width 5.5s ease-in-out !important;
        }
        svg {
          height: 14vh;
          margin: auto;
          display: block;
        }

        path {
          stroke-linecap: round;
          stroke-width: 6;
        }

        path.grey {
          stroke: #e7e7e8;
        }

        path.blue {
          stroke-dasharray: 200;
          stroke-dashoffset: 200;
          animation: dash 5s ease-out backwords;

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
                                            <div class="col-12 p-10 f-14" style="border-radius:10px;background:#fff;box-shadow:0px 0px 1px 0px gray;"><strong style="border-right:1px solid #777;padding-right:10px;margin-right:10px;">Students</strong>
										    <i class="ti-home"></i> - Student Report
										    										    <button class="btn btn-sm f-right p-t-5 p-b-5 bg-gradient-blue m-white" style="border-radius:15px;" data-toggle="tooltip" title="This option is available in the Desktop version only." disabled><i class="ti-file"></i> Get PDF</button>
										    										    </div>
                                        </div>
										<div class="row m-round canvas_div_pdf m-t-15" style="" >

											   											   <div class="col-lg-3 col-md-12 text-center m-round m-b-20" style="background:#fff;box-shadow:0px 0px 1px 0px gray;">
												 <div style="padding-top:15px;">
												 <img src="uploads/students/no-image.png" class="img-circle" style="width:140px; height:140px;border:6px solid #f6f7fb;box-shadow:0px 0px 3px 8px #f6f7fb;padding:1px;">
												 </div>
												 <div style="padding-top:15px;padding-bottom:15px;">
												 <h4 style="margin:0px;line-height:22px;" class="gradient-blue">Elisa sakya</h4>

												 </div>
												 <div class="text-left p-15" style="background:#f6f7fb;border-radius:5px;border-top-left-radius: 15px;border-bottom-right-radius:25px;">
												     <div style="position:relative;line-height:15px;min-height:30px;">
												     <img src="assets/arrow-down.png" style="position:absolute;left:0px;top:15px;height:14px;">
												     <span class="f-10 m-gray" style="border-bottom:1.5px solid #999;">Registration No</span><br>
												     <strong class="f-12 m-l-20 text-blue">REG0101</strong>
												     </div>
												     <div style="position:relative;line-height:15px;min-height:30px;">
												     <img src="assets/arrow-down.png" style="position:absolute;left:0px;top:15px;height:14px;">
												     <span class="f-10 m-gray" style="border-bottom:1.5px solid #999;">Date of Admission</span><br>
												     <strong class="f-12 m-l-20 text-blue">07 January, 2025</strong>
												     </div>
												     <div style="position:relative;line-height:15px;min-height:30px;">
												     <img src="assets/arrow-down.png" style="position:absolute;left:0px;top:15px;height:14px;">
												     <span class="f-10 m-gray" style="border-bottom:1.5px solid #999;">Class</span><br>
												     <strong class="f-12 m-l-20 text-blue">One</strong>
												     </div>
												     <div style="position:relative;line-height:15px;min-height:30px;">
												     <img src="assets/arrow-down.png" style="position:absolute;left:0px;top:15px;height:14px;">
												     <span class="f-10 m-gray" style="border-bottom:1.5px solid #999;">Family</span><br>
												     <strong class="f-12 m-l-20 text-blue"></strong>
												     </div>
												     <div style="position:relative;line-height:15px;min-height:30px;">
												     <img src="assets/arrow-down.png" style="position:absolute;left:0px;top:15px;height:14px;">
												     <span class="f-10 m-gray" style="border-bottom:1.5px solid #999;">Discount in Fee</span><br>
												     <strong class="f-12 m-l-20 text-blue">10 %</strong>
												     </div>

												 </div>
												 <div class="text-left p-10">
												     <div style="position:relative;line-height:16px;min-height:30px;" class="" >
												     <img src="assets/arrow-down.png" style="position:absolute;left:0px;top:16px;height:14px;">
												     <span class="f-10 m-gray" style="border-bottom:1.5px solid #999;">Date Of Birth</span><br>
												     <strong class="f-12 m-l-20 text-blue"></strong>
												     </div>
												     <div style="position:relative;line-height:16px;min-height:30px;" class="" >
												     <img src="assets/arrow-down.png" style="position:absolute;left:0px;top:16px;height:14px;">
												     <span class="f-10 m-gray" style="border-bottom:1.5px solid #999;">Gender</span><br>
												     <strong class="f-12 m-l-20 text-blue"></strong>
												     </div>
												     <div style="position:relative;line-height:16px;min-height:30px;" class="" >
												     <img src="assets/arrow-down.png" style="position:absolute;left:0px;top:16px;height:14px;">
												     <span class="f-10 m-gray" style="border-bottom:1.5px solid #999;">Any Identification Mark?</span><br>
												     <strong class="f-12 m-l-20 text-blue"></strong>
												     </div>
												     <div style="position:relative;line-height:16px;min-height:30px;" class="" >
												     <img src="assets/arrow-down.png" style="position:absolute;left:0px;top:16px;height:14px;">
												     <span class="f-10 m-gray" style="border-bottom:1.5px solid #999;">Blood Group</span><br>
												     <strong class="f-12 m-l-20 text-blue"></strong>
												     </div>
												     <div style="position:relative;line-height:16px;min-height:30px;" class="" >
												     <img src="assets/arrow-down.png" style="position:absolute;left:0px;top:16px;height:14px;">
												     <span class="f-10 m-gray" style="border-bottom:1.5px solid #999;">Disease If Any?</span><br>
												     <strong class="f-12 m-l-20 text-blue"></strong>
												     </div>
												     <div style="position:relative;line-height:16px;min-height:30px;" class="" >
												     <img src="assets/arrow-down.png" style="position:absolute;left:0px;top:16px;height:14px;">
												     <span class="f-10 m-gray" style="border-bottom:1.5px solid #999;">Student Birth Form ID / NIC</span><br>
												     <strong class="f-12 m-l-20 text-blue"></strong>
												     </div>
												     <div style="position:relative;line-height:16px;min-height:30px;" class="" >
												     <img src="assets/arrow-down.png" style="position:absolute;left:0px;top:16px;height:14px;">
												     <span class="f-10 m-gray" style="border-bottom:1.5px solid #999;">Cast</span><br>
												     <strong class="f-12 m-l-20 text-blue"></strong>
												     </div>
												     <div style="position:relative;line-height:16px;min-height:30px;" class="" >
												     <img src="assets/arrow-down.png" style="position:absolute;left:0px;top:16px;height:14px;">
												     <span class="f-10 m-gray" style="border-bottom:1.5px solid #999;">Previous School</span><br>
												     <strong class="f-12 m-l-20 text-blue"></strong>
												     </div>
												     <div style="position:relative;line-height:16px;min-height:30px;" class="" >
												     <img src="assets/arrow-down.png" style="position:absolute;left:0px;top:16px;height:14px;">
												     <span class="f-10 m-gray" style="border-bottom:1.5px solid #999;">Previous ID / Board Roll No</span><br>
												     <strong class="f-12 m-l-20 text-blue"></strong>
												     </div>
												     <div style="position:relative;line-height:16px;min-height:30px;" class="" >
												     <img src="assets/arrow-down.png" style="position:absolute;left:0px;top:16px;height:14px;">
												     <span class="f-10 m-gray" style="border-bottom:1.5px solid #999;">Any Additional Note</span><br>
												     <strong class="f-12 m-l-20 text-blue"></strong>
												     </div>
												     <div style="position:relative;line-height:16px;min-height:30px;" class="" >
												     <img src="assets/arrow-down.png" style="position:absolute;left:0px;top:16px;height:14px;">
												     <span class="f-10 m-gray" style="border-bottom:1.5px solid #999;">Orphan Student</span><br>
												     <strong class="f-12 m-l-20 text-blue"></strong>
												     </div>
												     <div style="position:relative;line-height:16px;min-height:30px;" class="" >
												     <img src="assets/arrow-down.png" style="position:absolute;left:0px;top:16px;height:14px;">
												     <span class="f-10 m-gray" style="border-bottom:1.5px solid #999;">OSC</span><br>
												     <strong class="f-12 m-l-20 text-blue"></strong>
												     </div>
												     <div style="position:relative;line-height:16px;min-height:30px;" class="" >
												     <img src="assets/arrow-down.png" style="position:absolute;left:0px;top:16px;height:14px;">
												     <span class="f-10 m-gray" style="border-bottom:1.5px solid #999;">Religion</span><br>
												     <strong class="f-12 m-l-20 text-blue"></strong>
												     </div>
												     <div style="position:relative;line-height:16px;min-height:30px;" class="" >
												     <img src="assets/arrow-down.png" style="position:absolute;left:0px;top:16px;height:14px;">
												     <span class="f-10 m-gray" style="border-bottom:1.5px solid #999;">Total Siblings</span><br>
												     <strong class="f-12 m-l-20 text-blue">0</strong>
												     </div>

												 </div>
												 <div class="text-left p-15 m-b-10" style="background:#f6f7fb;border-radius:5px;border-top-left-radius: 15px;border-bottom-right-radius:25px;">
												     <div style="position:relative;line-height:16px;min-height:30px;" class="" >
												     <img src="assets/arrow-down.png" style="position:absolute;left:0px;top:16px;height:14px;">
												     <span class="f-10 m-gray" style="border-bottom:1.5px solid #999;">Father Name</span><br>
												     <strong class="f-12 m-l-20 text-blue"></strong>
												     </div>
												     <div style="position:relative;line-height:16px;min-height:30px;" class="" >
												     <img src="assets/arrow-down.png" style="position:absolute;left:0px;top:16px;height:14px;">
												     <span class="f-10 m-gray" style="border-bottom:1.5px solid #999;">Mother Name</span><br>
												     <strong class="f-12 m-l-20 text-blue"></strong>
												     </div>
												     <div style="position:relative;line-height:16px;min-height:30px;" class="" >
												     <img src="assets/arrow-down.png" style="position:absolute;left:0px;top:16px;height:14px;">
												     <span class="f-10 m-gray" style="border-bottom:1.5px solid #999;">Address</span><br>
												     <strong class="f-12 m-l-20 text-blue"></strong>
												     </div>

												 </div>

											   </div>
											   <div class="col-lg-9 col-md-12 m-round" style="background:none;margin-bottom:0px;">
												    <div class="row">
												        <div class="col-lg-6">
												            <h6 class="w-100"><div class="bg-gradient-blue m-white" style="width:20px;height:20px;border-radius:10px;display:inline-block;padding-top:3px;padding-left:7px;">1</div> <strong class="gradient-blue f-16">Attendance Report </strong><span style="font-size:12px;" class="f-right"></span></h6>
												            <div class="row m-round m-b-20" style="border-radius:5px;padding-bottom:10px;background:#FFF;margin-left:5px;padding:5px;box-shadow:0px 0px 1px 0px gray;">

                										    <div class="col-5 p-0" style="padding:0px !important;color:#fff;"><canvas id="pieChart" width="100%" height="100%"></canvas></div>
                										    <div class="col-3 p-0 text-center">
                										        <div class="block1">
                                                        		<div class="box1" style="background:#5e81f4;">
                                                        			<p class="number1 p-0 m-0">
                                                        				<span class="num1">100</span>
                                                        				<span class="sub1">%</span>
                                                        			</p>
                                                        			<p class="title1 p-0 m-0">Overall</p>
                                                        		</div>
                                                        		<span class="dots1"></span>
                                                        		<svg class="svg1">
                                                        			<defs>
                                                        				<linearGradient id="gradientStyle">
                                                        					<stop offset="0%" stop-color="#5e81f4" />
                                                        					<stop offset="100%" stop-color="#9698d6" />
                                                        				</linearGradient>
                                                        			</defs>
                                                        			<circle class="circle1" cx="55" cy="55" r="39" />
                                                        		</svg>
                                                        	    </div>
                                                        	                        											  <button class="btn btn-sm" style="border:1px solid #999;border-radius:15px;width:100%;text-align:center;padding:3px;font-size:10px;position:relative;padding-top:5px;background:#FFFFF7;">
                    											  <font style="font-size:10px;font-weight:bold;" class="m-gray">NOT MARKED</font>
                    											  <span class="m-gray" style="position:absolute;top:-7px;left:5px;background:#fff;font-size:9px;padding:none;padding-left:4px; padding-right:4px;border-radius:10px;line-height:12px;border:1px solid #999;"><span class="bg-m-gray badge" style="padding:3px;"></span> Today</span>
                    											  </button>

                										    </div>
                										    <div class="col-3 p-0" style="">
                										        <div class="block2">
                                                        		<div class="box2" style="background:#ff808b;">
                                                        			<p class="number2 p-0 m-0">
                                                        				<span class="num2">0</span>
                                                        				<span class="sub2">%</span>
                                                        			</p>
                                                        			<p class="title2 p-0 m-0">Mar 2025</p>
                                                        		</div>
                                                        		<span class="dots2"></span>
                                                        		<svg class="svg2">
                                                        			<defs>
                                                        				<linearGradient id="gradientStyle2">
                                                        					<stop offset="0%" stop-color="#ff808b" />
                                                        					<stop offset="100%" stop-color="#9698d6" />
                                                        				</linearGradient>
                                                        			</defs>
                                                        			<circle class="circle2" cx="55" cy="55" r="39" />
                                                        		</svg>
                                                        	    </div>
                                                        	                        											  <button class="btn btn-sm m-l-10" style="border:1px solid #999;border-radius:15px;width:100%;text-align:center;padding:3px;font-size:10px;position:relative;padding-top:5px;background:#FFFFF7;">
                    											  <font style="font-size:10px;font-weight:bold;" class="m-gray">NOT MARKED</font>
                    											  <span class="m-gray" style="position:absolute;top:-7px;left:5px;background:#fff;font-size:9px;padding:none;padding-left:4px; padding-right:4px;border-radius:10px;line-height:12px;border:1px solid #999;"><span class="bg-m-gray badge" style="padding:3px;"></span> Yesterday</span>
                    											  </button>
                    											                  										    </div>
                										    <div class="col-12" style="margin-top:8px;margin-bottom:10px;">
                										        <div class="row" style="padding-left:4px;padding-right:4px;">
                										            <div class="col-4" style="padding:4px;">
                                                                        <div class="bg-m-blue1" style="border-radius:6px;">
                                                                            <div class="m-white" style="padding:8px;padding-left:10px;padding-right:10px;">
                                                                                <h6 class="f-12"style="margin-bottom:0px;">PRESENTS</h6>
                                                                                <h3 class="f-16 m-t-0 m-b-0" style="line-height:20px;">
                                                                                <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                                                                                <lord-icon
                                                                                    src="https://cdn.lordicon.com/zmkotitn.json"
                                                                                    trigger="loop"
                                                                                    delay="2000"
                                                                                    colors="primary:#ffffff"
                                                                                    style="width:20px;height:20px;display:inline-block;">
                                                                                </lord-icon>
                                                                                <span  style="display:inline-block;float:right;">2</span></h3>
                                                                                <p class="m-b-0 m-t-0" style="font-size:9px;">This Month<span class="f-right">0</span></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                        <div class="col-4" style="padding:4px;">
                                                                        <div class="bg-m-gray" style="border-radius:6px;">
                                                                            <div class="m-white" style="padding:8px;padding-left:10px;padding-right:10px;">
                                                                                <h6 class="f-12"style="margin-bottom:0px;">LEAVES</h6>
                                                                                <h3 class="f-16 m-t-0 m-b-0" style="line-height:20px;">
                                                                                <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                                                                                <lord-icon
                                                                                    src="https://cdn.lordicon.com/zmkotitn.json"
                                                                                    trigger="loop"
                                                                                    delay="2100"
                                                                                    colors="primary:#ffffff"
                                                                                    style="width:20px;height:20px;display:inline-block;">
                                                                                </lord-icon>
                                                                                <span  style="display:inline-block;float:right;">0</span></h3>
                                                                                <p class="m-b-0 m-t-0" style="font-size:9px;">This Month<span class="f-right">0</span></p>
                                                                            </div>
                                                                        </div>
                                                                        </div>
                                                                        <div class="col-4" style="padding:4px;">
                                                                        <div class="bg-m-orange" style="border-radius:6px;">
                                                                            <div class="m-white" style="padding:8px;padding-left:10px;padding-right:10px;">
                                                                                <h6 class="f-12"style="margin-bottom:0px;">ABSENTS</h6>
                                                                                <h3 class="f-16 m-t-0 m-b-0" style="line-height:20px;">
                                                                                <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                                                                                <lord-icon
                                                                                    src="https://cdn.lordicon.com/zmkotitn.json"
                                                                                    trigger="loop"
                                                                                    delay="2200"
                                                                                    colors="primary:#ffffff"
                                                                                    style="width:20px;height:20px;display:inline-block;">
                                                                                </lord-icon>
                                                                                <span  style="display:inline-block;float:right;">0</span></h3>
                                                                                <p class="m-b-0 m-t-0" style="font-size:9px;">This Month<span class="f-right">0</span></p>
                                                                            </div>
                                                                        </div>
                                                                        </div>
                                                                    </div>
                										        </div>
                										    </div>
                										    <h6 class="w-100"><div class="bg-gradient-blue m-white" style="width:20px;height:20px;border-radius:10px;display:inline-block;padding-top:3px;padding-left:6px;">2</div> <strong class="gradient-blue f-16">Class Tests Report </strong><span style="font-size:12px;" class="f-right"></span></h6>
                										    <div class="row m-t-10 m-b-20 m-round" style="padding-bottom:10px;padding:5px;background:#FFF;margin-left:5px;box-shadow:0px 0px 1px 0px gray;">

                    										                   														<div class="col-12 p-0">
                														    <div class="row m-10 p-10 p-b-0 m-round" style="background:#fff;">
                														        <div class="col-8 m-gray p-0 f-10" style="line-height:15px;">
                														            <strong class="m-dblue f-16"><i class="ti-book"></i> English</strong><br>
                														            <div style="margin-top:5px;margin-bottom:5px;">
                														            <strong class="f-14 " style="display:inline-block;">0%</strong>
                														            <div class="progress" style="height:8px;border-radius:5px;width:90px;display:inline-block;">

                            														  <div class="progress-bar  f-left" role="progressbar" aria-valuenow="0"
                            														  aria-valuemin="0" aria-valuemax="100" style="width:0%;border-radius:5px;">

                            														  </div>

                            														</div>
                            														</div>
                														            <span class="bg-m-orange badge" style="padding:5px;"></span> TOTAL <b>CLASS TESTS</b> (<strong class="m-orange f-12">0</strong>)<br>
                														            <span class="bg-m-gray badge" style="padding:5px;"></span> TOTAL <b>MARKS</b> (<strong class="m-gray f-12">0</strong>)<br>
                														            <span class="bg-m-blue1 badge" style="padding:5px;"></span> OBTAINED <b>MARKS</b> (<strong class="m-blue1 f-12">0</strong>)
                														        </div>
                														        <div class="col-4 p-0">
                														                            														            <input type="hidden" value="0" id="perval0">
                														            <div id="progress0">
                                                                                      <svg viewbox="0 0 110 100">
                                                                                        <linearGradient id="gradient0" x1="0" y1="0" x2="0" y2="100%">
                                                                                          <stop offset="0%" stop-color="#f5365c" />
                                                                                          <stop offset="100%" stop-color="#f56036" />
                                                                                        </linearGradient>
                                                                                        <path class="grey" d="M30,90 A40,40 0 1,1 80,90" fill='none' />
                                                                                        <path id="blue" fill='none'  class="blue" d="M30,90 A40,40 0 1,1 80,90" style="stroke: url(#gradient0);"/>

                                                                                        <text x="50%" y="60%"  dominant-baseline="middle" text-anchor="middle" style="font-size:18px;font-weight:900;">0%</text>
                                                                                        <text x="50%" y="90%" dominant-baseline="middle" text-anchor="middle" style="font-size:12px;">score</text>
                                                                                      </svg>
                                                                                    </div>
                														        </div>
                														    </div>
                														</div>

                														                														<div class="col-12 p-0">
                														    <div class="row m-10 p-10 p-b-0 m-round" style="background:#fff;">
                														        <div class="col-8 m-gray p-0 f-10" style="line-height:15px;">
                														            <strong class="m-dblue f-16"><i class="ti-book"></i> Nepali</strong><br>
                														            <div style="margin-top:5px;margin-bottom:5px;">
                														            <strong class="f-14 " style="display:inline-block;">0%</strong>
                														            <div class="progress" style="height:8px;border-radius:5px;width:90px;display:inline-block;">

                            														  <div class="progress-bar  f-left" role="progressbar" aria-valuenow="0"
                            														  aria-valuemin="0" aria-valuemax="100" style="width:0%;border-radius:5px;">

                            														  </div>

                            														</div>
                            														</div>
                														            <span class="bg-m-orange badge" style="padding:5px;"></span> TOTAL <b>CLASS TESTS</b> (<strong class="m-orange f-12">0</strong>)<br>
                														            <span class="bg-m-gray badge" style="padding:5px;"></span> TOTAL <b>MARKS</b> (<strong class="m-gray f-12">0</strong>)<br>
                														            <span class="bg-m-blue1 badge" style="padding:5px;"></span> OBTAINED <b>MARKS</b> (<strong class="m-blue1 f-12">0</strong>)
                														        </div>
                														        <div class="col-4 p-0">
                														                            														            <input type="hidden" value="0" id="perval1">
                														            <div id="progress1">
                                                                                      <svg viewbox="0 0 110 100">
                                                                                        <linearGradient id="gradient1" x1="0" y1="0" x2="0" y2="100%">
                                                                                          <stop offset="0%" stop-color="#f5365c" />
                                                                                          <stop offset="100%" stop-color="#f56036" />
                                                                                        </linearGradient>
                                                                                        <path class="grey" d="M30,90 A40,40 0 1,1 80,90" fill='none' />
                                                                                        <path id="blue" fill='none'  class="blue" d="M30,90 A40,40 0 1,1 80,90" style="stroke: url(#gradient1);"/>

                                                                                        <text x="50%" y="60%"  dominant-baseline="middle" text-anchor="middle" style="font-size:18px;font-weight:900;">0%</text>
                                                                                        <text x="50%" y="90%" dominant-baseline="middle" text-anchor="middle" style="font-size:12px;">score</text>
                                                                                      </svg>
                                                                                    </div>
                														        </div>
                														    </div>
                														</div>

                														                														<div class="col-12 p-0">
                														    <div class="row m-10 p-10 p-b-0 m-round" style="background:#fff;">
                														        <div class="col-8 m-gray p-0 f-10" style="line-height:15px;">
                														            <strong class="m-dblue f-16"><i class="ti-book"></i> Science</strong><br>
                														            <div style="margin-top:5px;margin-bottom:5px;">
                														            <strong class="f-14 " style="display:inline-block;">0%</strong>
                														            <div class="progress" style="height:8px;border-radius:5px;width:90px;display:inline-block;">

                            														  <div class="progress-bar  f-left" role="progressbar" aria-valuenow="0"
                            														  aria-valuemin="0" aria-valuemax="100" style="width:0%;border-radius:5px;">

                            														  </div>

                            														</div>
                            														</div>
                														            <span class="bg-m-orange badge" style="padding:5px;"></span> TOTAL <b>CLASS TESTS</b> (<strong class="m-orange f-12">0</strong>)<br>
                														            <span class="bg-m-gray badge" style="padding:5px;"></span> TOTAL <b>MARKS</b> (<strong class="m-gray f-12">0</strong>)<br>
                														            <span class="bg-m-blue1 badge" style="padding:5px;"></span> OBTAINED <b>MARKS</b> (<strong class="m-blue1 f-12">0</strong>)
                														        </div>
                														        <div class="col-4 p-0">
                														                            														            <input type="hidden" value="0" id="perval2">
                														            <div id="progress2">
                                                                                      <svg viewbox="0 0 110 100">
                                                                                        <linearGradient id="gradient2" x1="0" y1="0" x2="0" y2="100%">
                                                                                          <stop offset="0%" stop-color="#f5365c" />
                                                                                          <stop offset="100%" stop-color="#f56036" />
                                                                                        </linearGradient>
                                                                                        <path class="grey" d="M30,90 A40,40 0 1,1 80,90" fill='none' />
                                                                                        <path id="blue" fill='none'  class="blue" d="M30,90 A40,40 0 1,1 80,90" style="stroke: url(#gradient2);"/>

                                                                                        <text x="50%" y="60%"  dominant-baseline="middle" text-anchor="middle" style="font-size:18px;font-weight:900;">0%</text>
                                                                                        <text x="50%" y="90%" dominant-baseline="middle" text-anchor="middle" style="font-size:12px;">score</text>
                                                                                      </svg>
                                                                                    </div>
                														        </div>
                														    </div>
                														</div>


                    										</div>

												        </div>
												        <div class="col-lg-6">
												            <h6 class="w-100"><div class="bg-gradient-blue m-white" style="width:20px;height:20px;border-radius:10px;display:inline-block;padding-top:3px;padding-left:6px;">3</div> <strong class="gradient-blue f-16">Examination Report </strong><span style="font-size:12px;" class="f-right"></span></h6>
												            <div class="row m-round m-t-10 m-b-20" style="padding:5px;background:#fff;margin-left:5px;padding-top:15px;box-shadow:0px 0px 1px 0px gray;">
                    										                 											 <div  class="col-12">
            												             												    <div class="barWrapper m-t-20">
                                                                <div class="progress text-right m-round" style="height:8px;">
                                                                  <div class="progress-bar bg-m-dblue" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100" style="border-top-left-radius:10px;border-bottom-left-radius:10px;">
                                                                     <span  class="popOver f-right tiptool" data-toggle="tooltip" data-placement="top" title="67%"> </span>
                                                                  </div>
                                                                </div>
                                                                <span class="progressText f-12 m-gray" style=""><B>First terminal</B><font style="float:right;"><strong class="m-dblue">200</strong>/300</font></span>
                                                                </div>

            												             												 </div>
            												 <div class="col-12" style="margin-top:0px;margin-bottom:0px;padding-bottom:0px;">
            										        <div class="row" style="padding-left:4px;padding-right:4px;">
            										            <div class="col-4" style="padding:4px;padding-top:20px;">
                                                                    <div class="bg-m-dblue" style="border-radius:6px;">
                                                                        <div class="m-white" style="padding:8px;padding-left:10px;padding-right:10px;">
                                                                            <h6 class="f-12"style="margin-bottom:0px;">OBTAINED</h6>
                                                                            <h3 class="f-16 m-t-0 m-b-0" style="line-height:20px;">
                                                                            <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                                                                            <lord-icon
                                                                                src="https://cdn.lordicon.com/zmkotitn.json"
                                                                                trigger="loop"
                                                                                delay="2300"
                                                                                colors="primary:#ffffff"
                                                                                style="width:20px;height:20px;display:inline-block;">
                                                                            </lord-icon>
                                                                            <span  style="display:inline-block;float:right;">200</span></h3>
                                                                            <p class="m-b-0 m-t-0" style="font-size:9px;">IN ALL EXAMS</span></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                    <div class="col-4" style="padding:4px;padding-top:20px;">
                                                                    <div class="bg-m-gray" style="border-radius:6px;">
                                                                        <div class="m-white" style="padding:8px;padding-left:10px;padding-right:10px;">
                                                                            <h6 class="f-12"style="margin-bottom:0px;">TOTAL</h6>
                                                                            <h3 class="f-16 m-t-0 m-b-0" style="line-height:20px;">
                                                                            <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                                                                            <lord-icon
                                                                                src="https://cdn.lordicon.com/zmkotitn.json"
                                                                                trigger="loop"
                                                                                delay="2400"
                                                                                colors="primary:#ffffff"
                                                                                style="width:20px;height:20px;display:inline-block;">
                                                                            </lord-icon>
                                                                            <span  style="display:inline-block;float:right;">300</span></h3>
                                                                            <p class="m-b-0 m-t-0" style="font-size:9px;">IN ALL EXAMS</span></p>
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                    <div class="col-4" style="padding:4px;padding-top:0px;padding-bottom:0px;">
                                                                    <div class="block3">
                                                            		<div class="box3" style="background:#5e81f4;">
                                                            			<p class="number3 p-0 m-0">
                                                            				<span class="num3">67</span>
                                                            				<span class="sub3">%</span>
                                                            			</p>
                                                            			<p class="title3 p-0 m-0">Overall</p>
                                                            		</div>
                                                            		<style>.dots3::after{background-color:#5e81f4;}</style>
                                                            		<span class="dots3"></span>
                                                            		<svg class="svg3">
                                                            			<defs>
                                                            				<linearGradient id="gradientStyle3">
                                                            					<stop offset="0%" stop-color="#5e81f4" />
                                                            					<stop offset="100%" stop-color="#9698d6" />
                                                            				</linearGradient>
                                                            			</defs>
                                                            			<circle class="circle3" cx="55" cy="55" r="39" />
                                                            		</svg>
                                                            	    </div>
                                                                    </div>
                                                                </div>
            										        </div>
                											                 									        </div>
                									        <h6 class="w-100"><div class="bg-gradient-blue m-white" style="width:20px;height:20px;border-radius:10px;display:inline-block;padding-top:2px;padding-left:5px;">4</div> <strong class="gradient-blue f-16">Fee Report </strong><span style="font-size:12px;" class="f-right"></span></h6>
                									        <div class="row m-t-10 m-round" style="padding:5px;background:#fff;margin-left:5px;box-shadow:0px 0px 1px 0px gray;">
                										    <div class="col-12 p-0">
                										                     										        <div class="row p-10 p-t-20 p-b-20 showfd" style="background:#fff;margin:15px;border-bottom:4px solid #f6f7fb;">
                										            <div class="col-2 p-0">
                										               <i class="fa fa-money f-14 bg-m-dblue m-white" style="border-radius:50%;padding:5px;"></i>
                										            </div>
                										            <div class="col-8 p-0 p-r-10">
                										                <strong class="m-dblue f-20 m-b-10" style="font-weight:900;line-height:20px;"><span id="symbol">$</span> 10,650                										                                										                    <span class="bg-gradient-green m-white badge f-right f-10 m-r-10" style="padding:5px;"><i class="fa fa-check"></i> PAID</span>
                										                                										                </strong><br>
                										                <span class="f-12 m-dblue"  style="line-height:12px;"> Fees of <b>
                										                March, 2025                        												 </b>
                        												 </span>
                										            </div>
                										            <div class="col-2 p-0 text-center">
                										                <span id="showfi" class="m-blue1 f-10">
                            									       <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
                                                                        <lord-icon
                                                                            src="https://cdn.lordicon.com/rxufjlal.json"
                                                                            trigger="loop"
                                                                            delay="3000"
                                                                            colors="primary:#e7e7e8"
                                                                            state="intro"
                                                                            style="width:35px;height:35px">
                                                                        </lord-icon>
                            									       </span>
                            									       <span id="hidefi" class="m-gray">
                            									       <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
                                                                        <lord-icon
                                                                            src="https://cdn.lordicon.com/xsdtfyne.json"
                                                                            trigger="loop"
                                                                            delay="2000"
                                                                            colors="primary:#e7e7e8"
                                                                            style="width:35px;height:35px">
                                                                        </lord-icon>
                            									       </span>
                										            </div>
                										            <div class="col-12 m-dblue p-t-10 p-0 f-10" id="fd" style="border-top:1px solid #4d4cac;line-height:12px;">
                										                <span class="p-l-10">Submission Date<strong class="f-right m-r-10">05 March, 2025</strong></span><br>
                										                <span class="p-l-10">Total Amount<strong class="f-right m-r-10"><span id="symbol">$</span> 10650</strong></span><br>
                										                <span class="p-l-10">Paid Amount<strong class="f-right m-r-10"><span id="symbol">$</span> 10650</strong></span>
                										                <hr class="m-0 p-0" style="border:none;background-color:#4d4cac;height:1px;margin-top:5px !important;margin-bottom:5px !important;">
                										                <span class="p-l-10">Remaining Balance<strong class="f-right m-r-10"><span id="symbol">$</span> 0</strong></span>
                										            </div>
                										        </div>
                										                    										        <div class="row p-10 p-t-20 p-b-20 showfd" style="background:#fff;margin:15px;border-bottom:4px solid #f6f7fb;">
                										            <div class="col-2 p-0">
                										               <i class="fa fa-money f-14 bg-m-dblue m-white" style="border-radius:50%;padding:5px;"></i>
                										            </div>
                										            <div class="col-8 p-0 p-r-10">
                										                <strong class="m-dblue f-20 m-b-10" style="font-weight:900;line-height:20px;"><span id="symbol">$</span> 20,300                										                                										                    <span class="bg-c-yellow m-white badge f-10 f-right m-r-10" style="padding:5px;">PARTIALLY PAID</span>
                										                                										                </strong><br>
                										                <span class="f-12 m-dblue"  style="line-height:12px;"> Fees of <b>
                										                February, 2025                        												 </b>
                        												 </span>
                										            </div>
                										            <div class="col-2 p-0 text-center">
                										                <span id="showfi" class="m-blue1 f-10">
                            									       <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
                                                                        <lord-icon
                                                                            src="https://cdn.lordicon.com/rxufjlal.json"
                                                                            trigger="loop"
                                                                            delay="3000"
                                                                            colors="primary:#e7e7e8"
                                                                            state="intro"
                                                                            style="width:35px;height:35px">
                                                                        </lord-icon>
                            									       </span>
                            									       <span id="hidefi" class="m-gray">
                            									       <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
                                                                        <lord-icon
                                                                            src="https://cdn.lordicon.com/xsdtfyne.json"
                                                                            trigger="loop"
                                                                            delay="2000"
                                                                            colors="primary:#e7e7e8"
                                                                            style="width:35px;height:35px">
                                                                        </lord-icon>
                            									       </span>
                										            </div>
                										            <div class="col-12 m-dblue p-t-10 p-0 f-10" id="fd" style="border-top:1px solid #4d4cac;line-height:12px;">
                										                <span class="p-l-10">Submission Date<strong class="f-right m-r-10">12 February, 2025</strong></span><br>
                										                <span class="p-l-10">Total Amount<strong class="f-right m-r-10"><span id="symbol">$</span> 20300</strong></span><br>
                										                <span class="p-l-10">Paid Amount<strong class="f-right m-r-10"><span id="symbol">$</span> 1000</strong></span>
                										                <hr class="m-0 p-0" style="border:none;background-color:#4d4cac;height:1px;margin-top:5px !important;margin-bottom:5px !important;">
                										                <span class="p-l-10">Remaining Balance<strong class="f-right m-r-10"><span id="symbol">$</span> 19300</strong></span>
                										            </div>
                										        </div>
                										                    										        <div class="row p-10 p-t-20 p-b-20 showfd" style="background:#fff;margin:15px;border-bottom:4px solid #f6f7fb;">
                										            <div class="col-2 p-0">
                										               <i class="fa fa-money f-14 bg-m-dblue m-white" style="border-radius:50%;padding:5px;"></i>
                										            </div>
                										            <div class="col-8 p-0 p-r-10">
                										                <strong class="m-dblue f-20 m-b-10" style="font-weight:900;line-height:20px;"><span id="symbol">$</span> 10,650                										                                										                    <span class="bg-c-yellow m-white badge f-10 f-right m-r-10" style="padding:5px;">PARTIALLY PAID</span>
                										                                										                </strong><br>
                										                <span class="f-12 m-dblue"  style="line-height:12px;"> Fees of <b>
                										                January, 0007                        												 </b>
                        												 </span>
                										            </div>
                										            <div class="col-2 p-0 text-center">
                										                <span id="showfi" class="m-blue1 f-10">
                            									       <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
                                                                        <lord-icon
                                                                            src="https://cdn.lordicon.com/rxufjlal.json"
                                                                            trigger="loop"
                                                                            delay="3000"
                                                                            colors="primary:#e7e7e8"
                                                                            state="intro"
                                                                            style="width:35px;height:35px">
                                                                        </lord-icon>
                            									       </span>
                            									       <span id="hidefi" class="m-gray">
                            									       <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
                                                                        <lord-icon
                                                                            src="https://cdn.lordicon.com/xsdtfyne.json"
                                                                            trigger="loop"
                                                                            delay="2000"
                                                                            colors="primary:#e7e7e8"
                                                                            style="width:35px;height:35px">
                                                                        </lord-icon>
                            									       </span>
                										            </div>
                										            <div class="col-12 m-dblue p-t-10 p-0 f-10" id="fd" style="border-top:1px solid #4d4cac;line-height:12px;">
                										                <span class="p-l-10">Submission Date<strong class="f-right m-r-10">07 January, 2025</strong></span><br>
                										                <span class="p-l-10">Total Amount<strong class="f-right m-r-10"><span id="symbol">$</span> 10650</strong></span><br>
                										                <span class="p-l-10">Paid Amount<strong class="f-right m-r-10"><span id="symbol">$</span> 1000</strong></span>
                										                <hr class="m-0 p-0" style="border:none;background-color:#4d4cac;height:1px;margin-top:5px !important;margin-bottom:5px !important;">
                										                <span class="p-l-10">Remaining Balance<strong class="f-right m-r-10"><span id="symbol">$</span> 9650</strong></span>
                										            </div>
                										        </div>
                										                												                										    </div>

                										</div>
												        </div>
												    </div>
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
<!-- am chart -->
<script src="assets/pages/widget/amchart/amcharts.min.js"></script>
<script src="assets/pages/widget/amchart/serial.min.js"></script>
<!-- Chart js -->
<script type="text/javascript" src="assets/js/chart.js/Chart.js"></script>
<script type="text/javascript" src="assets/js/mdb.js"></script>
<!-- Todo js -->
<script type="text/javascript " src="assets/pages/todo/todo.js "></script>
<!-- Custom js -->
<script type="text/javascript" src="assets/pages/dashboard/custom-dashboard.min.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>
<script type="text/javascript " src="assets/js/SmoothScroll.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/vartical-demo.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="assets/calendar/javascript-calendar.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.3/jspdf.min.js"></script>
<script src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
<script>

// navigator activator
document.getElementById("dashboard").classList.remove('active');
document.getElementById("allstudents").classList.add('active');
document.getElementById("students").classList.add('active');
document.getElementById("students").classList.add('pcoded-trigger');
//----------end-----------------

var tsublen=3;
for(var i=0;i<tsublen;i++){
var progress =$('#perval'+i).val();
$('#progress'+i).find('#blue').animate({'stroke-dashoffset': 200 - 2 * progress}, 5000)
}
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
$(document).ready(function(){
$('#showpi').click(function(){
	$("#showpi").toggle();
	$(".hidepi").toggle();
	$("#pi").toggle('slow');
});
$('.hidepi').click(function(){
	$(".hidepi").toggle();
	$("#showpi").toggle();
	$("#pi").toggle('slow');
});
});
//---------end------------------
//pie
var ctxP = document.getElementById("pieChart").getContext('2d');
var p=2;
var l=0;
var a=0;
var myPieChart = new Chart(ctxP, {
    type: 'pie',
    data: {
        labels: ["P", "L", "A"],
        datasets: [
            {
                borderWidth: 2,
                data: [p, l, a],
                backgroundColor: ["#5e81f4", "#9698d6", "#ff808b"],
                hoverBackgroundColor: ["#5e81f4", "#9698d6","#ff808b"]
            }
        ]
    },
    options: {
        responsive: true,
        legend: {
            labels: {
              usePointStyle: true,
              boxWidth: 6,
              fontSize: 10
            },
            border: 0
          }
    }
});
//number animate
$('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 2000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});
//------------end----------------------
const block = document.querySelectorAll('.block1');
window.addEventListener('load', function(){
  block.forEach(item => {
    let numElement = item.querySelector('.num1');
    let num = parseInt(numElement.innerText);
    let count = 0;
    let time = 2000 / num;
    let circle = item.querySelector('.circle1');
    setInterval(() => {
      if(count == num){
        clearInterval();
      } else {
        count += 1;
        numElement.innerText = count;
      }
    }, time)
    circle.style.strokeDashoffset
      = 245 - ( 245 * ( num / 100 ));
    let dots = item.querySelector('.dots1');
    dots.style.transform =
      `rotate(${360 * (num / 100)}deg)`;
    if(num == 100){
      dots.style.opacity = 0;
    }
  })
});
const block2 = document.querySelectorAll('.block2');
window.addEventListener('load', function(){
  block2.forEach(item => {
    let numElement = item.querySelector('.num2');
    let num2 = parseInt(numElement.innerText);
    let count = 0;
    let time = 2000 / num2;
    let circle = item.querySelector('.circle2');
    setInterval(() => {
      if(count == num2){
        clearInterval();
      } else {
        count += 1;
        numElement.innerText = count;
      }
    }, time)
    circle.style.strokeDashoffset
      = 245 - ( 245 * ( num2 / 100 ));
    let dots = item.querySelector('.dots2');
    dots.style.transform =
      `rotate(${360 * (num2 / 100)}deg)`;
    if(num2 == 100){
      dots.style.opacity = 0;
    }
  })
});
const block3 = document.querySelectorAll('.block3');
window.addEventListener('load', function(){
  block3.forEach(item => {
    let numElement = item.querySelector('.num3');
    let num3 = parseInt(numElement.innerText);
    let count = 0;
    let time = 2000 / num3;
    let circle = item.querySelector('.circle3');
    setInterval(() => {
      if(count == num3){
        clearInterval();
      } else {
        count += 1;
        numElement.innerText = count;
      }
    }, time)
    circle.style.strokeDashoffset
      = 245 - ( 245 * ( num3 / 100 ));
    let dots = item.querySelector('.dots3');
    dots.style.transform =
      `rotate(${360 * (num3 / 100)}deg)`;
    if(num3 == 100){
      dots.style.opacity = 0;
    }
  })
});
//------progress bar-----------------
$(function () {
  $('.tiptool').tooltip({trigger: 'manual'}).tooltip('show');
});

// $( window ).scroll(function() {
 // if($( window ).scrollTop() > 10){  // scroll down abit and get the action
  $(".progress-bar").each(function(){
    each_bar_width = $(this).attr('aria-valuenow');
    $(this).width(each_bar_width + '%');
  });

 //  }
// });
$(".showfd").on('click',function(){
   $(this).find("#fd").toggle('slow');
   $(this).find("#showfi").toggle();
   $(this).find("#hidefi").toggle();
});
//Create PDf from HTML...
	function getPDF(){

		var HTML_Width = $(".canvas_div_pdf").width();
		var HTML_Height = $(".canvas_div_pdf").height();
		var top_left_margin = 15;
		var PDF_Width = HTML_Width+(top_left_margin*2);
		var PDF_Height = (PDF_Width*1.5)+(top_left_margin*2);
		var canvas_image_width = HTML_Width;
		var canvas_image_height = HTML_Height;

		var totalPDFPages = Math.ceil(HTML_Height/PDF_Height)-1;


		html2canvas($(".canvas_div_pdf")[0],{allowTaint:true}).then(function(canvas) {
			canvas.getContext('2d');

			console.log(canvas.height+"  "+canvas.width);


			var imgData = canvas.toDataURL("image/jpeg", 1.0);
			var pdf = new jsPDF('p', 'pt',  [PDF_Width, PDF_Height]);
		    pdf.addImage(imgData, 'JPG', top_left_margin, top_left_margin,canvas_image_width,canvas_image_height);


			for (var i = 1; i <= totalPDFPages; i++) {
				pdf.addPage(PDF_Width, PDF_Height);
				pdf.addImage(imgData, 'JPG', top_left_margin, -(PDF_Height*i)+(top_left_margin*4),canvas_image_width,canvas_image_height);
			}

		    pdf.save("Elisa sakya.pdf");
        });
	};

</script>
</body>
</html>
