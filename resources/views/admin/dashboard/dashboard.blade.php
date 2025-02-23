@extends('admin.layout.main')

@section('content')
    <div class="container-fluid">
        <div class="page-wrapper">

            <div class="page-body">
                <div class="row">

                    <!-- order-card start -->
                    <div class="col-md-6 col-xl-3">
                        <a href="allstudents.php">
                            <div class="card bg-m-dblue order-card m-round">
                                <div class="card-block ">
                                    <h6 class="m-b-20">Total Students</h6>
                                    <h2 class="text-right"><i class="fa-solid fa-user-tie f-left"></i><span>1</span></h2>
                                    <p class="m-b-0">This Month<span class="f-right">0</span></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <a href="allemployees.php">
                            <div class="card bg-m-gray m-round order-card">
                                <div class="card-block">
                                    <h6 class="m-b-20">Total Employees</h6>
                                    <h2 class="text-right"><i class="fa-solid fa-briefcase f-left"></i><span>1</span></h2>
                                    <p class="m-b-0">This Month<span class="f-right">0</span></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <a href="balance.php">
                            <div class="card bg-m-orange m-round order-card">
                                <div class="card-block">
                                    <h6 class="m-b-20">Revenue</h6>
                                    <h2 class="text-right"><span class="f-left"
                                            style="font-weight:300;vertical-align:top;">$</span><span>22,000</span></h2>
                                    <p class="m-b-0">This Month<span class="f-right"><b>$</b> 1,000</span></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <a href="balance.php">
                            <div class="card bg-m-blue1 m-round order-card">
                                <div class="card-block">
                                    <h6 class="m-b-20">Total Profit</h6>
                                    <h2 class="text-right"><span class="f-left"
                                            style="font-weight:300;vertical-align:top;">$</span><span>18,000</span></h2>
                                    <p class="m-b-0">This Month<span class="f-right"><b>$</b> -1,000</span></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- order-card end -->

                    <!-- statustic and process start -->
                    <div class="col-lg-8 col-md-12">
                        <div class="m-main row">
                            <div class="m-container order-card">
                                <img src="{{ asset('assets/images/admin-message.png') }}" class="img-1" />
                                <h6 class="m-b-5 m-orange">Welcome to Admin Dashboard</h6>
                                <p style="color:#777;">Your Account is not Verified yet!<br> Please Verify your email
                                    address. <a href="sendVerificationLink.php" class="m-blue1">Verify now!</a></p>
                            </div>
                        </div>
                        <div class="card m-round">
                            <div class="card-header">
                                <h5 class="m-gray">Statistics</h5>
                                <div class="card-header-right">
                                    <ul class="list-unstyled card-option">
                                        <li><i class="fa fa-chevron-left"></i></li>
                                        <li><i class="fa fa-window-maximize full-card"></i></li>
                                        <li><i class="fa fa-minus minimize-card"></i></li>
                                        <li><i class="fa fa-refresh reload-card"></i></li>
                                        <li><i class="fa fa-times close-card"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-block">
                                <canvas id="lineChart"></canvas>
                            </div>
                        </div>
                        <div class="card m-round">
                            <div class="card-header">
                                <h5 class="m-gray">Statistics</h5>
                                <div class="card-header-right">
                                    <ul class="list-unstyled card-option">
                                        <li><i class="fa fa-chevron-left"></i></li>
                                        <li><i class="fa fa-window-maximize full-card"></i></li>
                                        <li><i class="fa fa-minus minimize-card"></i></li>
                                        <li><i class="fa fa-refresh reload-card"></i></li>
                                        <li><i class="fa fa-times close-card"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-block">
                                <canvas id="horizontalBar"></canvas>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="m-orange">Today Absent Students</h5>
                                <div class="card-header-right">
                                    <ul class="list-unstyled card-option">
                                        <li><i class="fa fa-chevron-left"></i></li>
                                        <li><i class="fa fa-window-maximize full-card"></i></li>
                                        <li><i class="fa fa-minus minimize-card"></i></li>
                                        <li><i class="fa fa-refresh reload-card"></i></li>
                                        <li><i class="fa fa-times close-card"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-block">
                                <p class="m-orange text-center"><i class="fa-regular fa-face-frown"></i><br> Attendance Not
                                    Marked Yet !</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="m-blue1">Today Present Employees</h5>
                                <div class="card-header-right">
                                    <ul class="list-unstyled card-option">
                                        <li><i class="fa fa-chevron-left"></i></li>
                                        <li><i class="fa fa-window-maximize full-card"></i></li>
                                        <li><i class="fa fa-minus minimize-card"></i></li>
                                        <li><i class="fa fa-refresh reload-card"></i></li>
                                        <li><i class="fa fa-times close-card"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-block">
                                <p class="m-orange text-center"><i class="fa-regular fa-face-frown"></i><br> Attendance Not
                                    Marked Yet !</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="m-gray">New Admissions</h5>
                                <div class="card-header-right">
                                    <ul class="list-unstyled card-option">
                                        <li><i class="fa fa-chevron-left"></i></li>
                                        <li><i class="fa fa-window-maximize full-card"></i></li>
                                        <li><i class="fa fa-minus minimize-card"></i></li>
                                        <li><i class="fa fa-refresh reload-card"></i></li>
                                        <li><i class="fa fa-times close-card"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-block">
                                <p class="m-orange text-center"><i class="fa-regular fa-face-frown"></i><br>No New
                                    Admissions This Month</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card m-round">
                            <div class="card-header">
                                <h5>Estimated Fee This Month</h5>
                            </div>
                            <div class="card-block">
                                <p class="text-center m-orange m-b-0"><i class="ti-target m-r-5"></i>Estimation</p>
                                <span class="d-block m-orange f-24 f-w-600 text-center" id="estimated"><i
                                        class="fa fa-circle-o-notch fa-spin" style="font-size:24px"></i>
                                    <font style="font-size:12px;color:#Cacccd;"> Calculating..</font>
                                </span>
                                <canvas id="feedback-chartm" height="100"></canvas>
                                <div class="row justify-content-center m-t-15">
                                    <div class="col-auto b-r-default m-t-5 m-b-5">
                                        <h4 id="collection"><i class="fa fa-circle-o-notch fa-spin"
                                                style="font-size:24px"></i>
                                            <font style="font-size:12px;color:#Cacccd;"> Calculating..</font>
                                        </h4>
                                        <p class="text-success m-b-0"><i class="ti-wallet m-r-5"></i>Collections</p>
                                    </div>
                                    <div class="col-auto m-t-5 m-b-5">
                                        <h4 id="remainings"><i class="fa fa-circle-o-notch fa-spin"
                                                style="font-size:24px"></i>
                                            <font style="font-size:12px;color:#Cacccd;"> Calculating..</font>
                                        </h4>
                                        <p class="text-danger m-b-0"><i class="ti-hand-point-down m-r-5"></i>Remainings
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ms-main row">
                            <a href="smsSettings.php" class="w-100">
                                <div class="ms-container order-card bg-m-dblue w-100">
                                    <img src="assets/images/msg1.png" />
                                    <h6 class="m-b-5">Free SMS Gateway</h6>
                                    <p style="color:silver;font-size:12px;">Send Unlimited Free SMS<br>on Mobile Numbers.
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="card m-round">

                            <div class="card-block">
                                <p style="line-height:5px;color:#777;">Today Present Students<b
                                        class="f-right m-blue1">0%</b></p>
                                <div class="progress" style="height:5px;">

                                    <div class="progress-bar bg-m-blue1" role="progressbar" aria-valuenow="0"
                                        aria-valuemin="0" aria-valuemax="100" style="width:0%;">

                                    </div>
                                </div>
                                <p style="margin-top:20px;line-height:5px;color:#777;">Today Present Employees<b
                                        class="f-right m-orange">0%</b></p>
                                <div class="progress" style="height:5px;">

                                    <div class="progress-bar bg-m-orange" role="progressbar" aria-valuenow="0"
                                        aria-valuemin="0" aria-valuemax="100" style="width:0%;">

                                    </div>
                                </div>
                                <p style="margin-top:20px;line-height:5px;color:#777;">This Month Fee Collection<b
                                        class="f-right m-blue1">100%</b></p>
                                <div class="progress" style="height:5px;">

                                    <div class="progress-bar bg-m-blue1" role="progressbar" aria-valuenow="0"
                                        aria-valuemin="0" aria-valuemax="100" style="width:100%;">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ms-main row">
                            <a href="https://desktop.eskooly.com" class="w-100">
                                <div class="ms1-container order-card bg-m-orange">
                                    <img src="assets/images/desktop.png" />
                                    <h6 class="m-b-5" style="line-height:12px;">Desktop Version</h6>
                                    <p style="color:#555;font-size:10px;margin-bottom:4px;line-height:10px;">*Download &
                                        install eSkooly<br>on your PC.</p>
                                    <a href="https://desktop.eskooly.com"><button class="btn btn-sm"
                                            style="background:#673de5;color:#fff;font-size:8px;line-height:8px;padding:6px;">
                                            <table>
                                                <tr>
                                                    <td><i class="fa fa-windows" style="font-size:15px;"></i></td>
                                                    <td><strong>Download</strong><br><span style="font-size:6px;">For
                                                            Windows</span></td>
                                                </tr>
                                            </table>
                                        </button></a>
                                    <a href="https://desktop.eskooly.com">
                                        <button class="btn btn-sm"
                                            style="background:#333;color:#fff;font-size:8px;line-height:8px;margin-left:3px;padding:6px;">
                                            <table>
                                                <tr>
                                                    <td><i class="fa fa-apple" style="font-size:15px;"></i></td>
                                                    <td><strong>Download</strong><br><span style="font-size:6px;">For MacOS
                                                        </span></td>
                                                </tr>
                                            </table>
                                        </button></a>
                                </div>
                            </a>
                        </div>

                        <div class="card user-card m-round">


                            <div class="icalendar">
                                <div class="icalendar__month">
                                    <div class="icalendar__prev" onclick="moveDate('prev')">
                                        <span>&#10094</span>
                                    </div>
                                    <div class="icalendar__current-date">
                                        <h2 id="icalendarMonth"></h2>
                                        <div>
                                            <div id="icalendarDateStr"></div>
                                        </div>

                                    </div>
                                    <div class="icalendar__next" onclick="moveDate('next')">
                                        <span>&#10095</span>
                                    </div>
                                </div>
                                <div class="icalendar__week-days">
                                    <div>Sun</div>
                                    <div>Mon</div>
                                    <div>Tue</div>
                                    <div>Wed</div>
                                    <div>Thu</div>
                                    <div>Fri</div>
                                    <div>Sat</div>
                                </div>
                                <div class="icalendar__days"></div>



                            </div>

                        </div>

                    </div>
                    <!-- statustic and process end -->
                    <!-- tabs card start -->

                    <!-- tabs card end -->



                    <!-- users visite and profile start -->
                    <div class="col-md-4">



                    </div>
                    <div class="col-md-8">

                    </div>
                    <!-- users visite and profile end -->

                </div>
            </div>
        </div>
    </div>
@endsection
