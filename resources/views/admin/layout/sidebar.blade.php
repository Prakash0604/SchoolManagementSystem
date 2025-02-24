<nav class="pcoded-navbar" style="background:#f6f7fb;">
    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
    <div class="pcoded-inner-navbar main-menu">

        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">menu</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="active" id="dashboard">
                <a href="dashboard.php">
                    <span class="pcoded-micon"><i class="fa-solid fa-house"></i><b>D</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="pcoded-hasmenu" id="generalsettings">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="fa-solid fa-gear"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.basic-components.main">General Settings</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" " id="schoolinfo">
                        <a href="{{ route('admin.institute') }}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Institute Profile</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" " id="feeparticulars">
                        <a href="feeparticulars.php">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Fees
                                Particulars</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" " id="discounttype">
                        <a href="#" data-toggle="tooltip"
                            title="This option is available in Desktop Version only.">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs"
                                style="opacity:0.6;">Fees Structure <i class="fa fa-lock m-orange f-right"></i></span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" " id="discounttype">
                        <a href="#" data-toggle="tooltip"
                            title="This option is available in Desktop Version only.">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs"
                                style="opacity:0.6;">Discount Type <i class="fa fa-lock m-orange f-right"></i></span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" " id="challan">
                        <a href="bankdetails.php">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Accounts For Fees
                                Invoice</span>
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
                            <span class="pcoded-micon"><i class="fa-solid fa-gear"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Account Settings</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="logout.php">
                            <span class="pcoded-micon"><i class="fa-solid fa-right-from-bracket"></i></span>
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
                    <span class="pcoded-micon"><i class="fa-solid fa-pen-ruler"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Classes</span>
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
                    <span class="pcoded-micon"><i class="fa-solid fa-book-open"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Subjects</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" " id="showsubjects">
                        <a href="showsubjects.php">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Classes With
                                Subjects</span>
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
                    <span class="pcoded-micon"><i class="fa-solid fa-user-tie"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Students</span>
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
                        <a href="#" data-toggle="tooltip"
                            title="This option is available in Desktop Version only.">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs"
                                style="opacity:0.6;">Manage Families <i
                                    class="fa fa-lock m-orange f-right"></i></span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" " id="aina">
                        <a href="#" data-toggle="tooltip"
                            title="This option is available in Desktop Version only.">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs"
                                style="opacity:0.6;">Active / Inactive <i
                                    class="fa fa-lock m-orange f-right"></i></span>
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
                    <span class="pcoded-micon"><i class="fa-solid fa-briefcase"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Employees</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" " id="allemployees">
                        <a href="{{ route('employee.index') }}">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert"> Employees</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                    <li class=" " id="eidcard">
                        <a href="#" data-toggle="tooltip"
                            title="This option is available in Desktop Version only.">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs"
                                style="opacity:0.6;">Staff ID Cards <i class="fa fa-lock m-orange f-right"></i></span>
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
                </ul>
            </li>



        </ul>

        <ul class="pcoded-item pcoded-left-item">
            <li class="pcoded-hasmenu" id="accounts">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="fa-solid fa-wallet"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Accounts</span>
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
                    <span class="pcoded-micon"><i class="fa-solid fa-money-bills"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Fees</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" " id="getchallan">
                        <a href="getchallan.php">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Generate Fees
                                Invoice</span>
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
                        <a href="#" data-toggle="tooltip"
                            title="This option is available in Desktop Version only.">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs"
                                style="opacity:0.6;">Fees Report <i class="fa fa-lock m-orange f-right"></i></span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" " id="deletefee">
                        <a href="#" data-toggle="tooltip"
                            title="This option is available in Desktop Version only.">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs"
                                style="opacity:0.6;">Delete Fees <i class="fa fa-lock m-orange f-right"></i></span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="pcoded-hasmenu" id="salary">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="fa-solid fa-credit-card"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Salary</span>
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
                        <a href="#" data-toggle="tooltip"
                            title="This option is available in Desktop Version only.">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs"
                                style="opacity:0.6;">Salary Sheet <i class="fa fa-lock m-orange f-right"></i></span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                    <li class=" " id="salaryrecord">
                        <a href="#" data-toggle="tooltip"
                            title="This option is available in Desktop Version only.">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs"
                                style="opacity:0.6;">Salary Report <i class="fa fa-lock m-orange f-right"></i></span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                </ul>
            </li>



        </ul>

        <ul class="pcoded-item pcoded-left-item">
            <li class="pcoded-hasmenu" id="attandance">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="fa-solid fa-hand"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Attendance</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" " id="studentsattandance">
                        <a href="markatt.php">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Students
                                Attendance</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" " id="employeesattandance">
                        <a href="chooseeattend.php">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Employees
                                Attendance</span>
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
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Students Attendance
                                Report</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" " id="employeeattendancereport">
                        <a href="alleatt.php">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Employees Attendance
                                Report</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="pcoded-hasmenu" id="timetable">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="fa-solid fa-calendar-days"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Timetable</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" " id="weekdays">
                        <a href="#" data-toggle="tooltip"
                            title="This option is available in Desktop Version only.">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs"
                                style="opacity:0.6;">Weekdays <i class="fa fa-lock m-orange f-right"></i></span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" " id="periods">
                        <a href="#" data-toggle="tooltip"
                            title="This option is available in Desktop Version only.">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs"
                                style="opacity:0.6;">Time Periods <i class="fa fa-lock m-orange f-right"></i></span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" " id="classrooms">
                        <a href="#" data-toggle="tooltip"
                            title="This option is available in Desktop Version only.">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs"
                                style="opacity:0.6;">Class Rooms <i class="fa fa-lock m-orange f-right"></i></span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" " id="createtimetable">
                        <a href="#" data-toggle="tooltip"
                            title="This option is available in Desktop Version only.">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs"
                                style="opacity:0.6;">Create Timetable <i
                                    class="fa fa-lock m-orange f-right"></i></span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" " id="classview">
                        <a href="#" data-toggle="tooltip"
                            title="This option is available in Desktop Version only.">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs"
                                style="opacity:0.6;">Generate For Class <i
                                    class="fa fa-lock m-orange f-right"></i></span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" " id="teacherview">
                        <a href="#" data-toggle="tooltip"
                            title="This option is available in Desktop Version only.">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs"
                                style="opacity:0.6;">Generate For Teacher <i
                                    class="fa fa-lock m-orange f-right"></i></span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class=" " id="homeworklink">
                <a href="homework.php">
                    <span class="pcoded-micon"><i class="fa-solid fa-file-pen"></i><b>D</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Homework</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="pcoded-hasmenu" id="behaviour">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="fa-solid fa-eye"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Behaviour & Skills</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" " id="ratebehaviours">
                        <a href="#" data-toggle="tooltip"
                            title="This option is available in Desktop Version only.">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs"
                                style="opacity:0.6;">Rate Behaviours <i
                                    class="fa fa-lock m-orange f-right"></i></span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" " id="rateskills">
                        <a href="#" data-toggle="tooltip"
                            title="This option is available in Desktop Version only.">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs"
                                style="opacity:0.6;">Rate Skills <i class="fa fa-lock m-orange f-right"></i></span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" " id="observations">
                        <a href="#" data-toggle="tooltip"
                            title="This option is available in Desktop Version only.">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs"
                                style="opacity:0.6;">Observations <i class="fa fa-lock m-orange f-right"></i></span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" " id="behaviourreport">
                        <a href="#" data-toggle="tooltip"
                            title="This option is available in Desktop Version only.">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs"
                                style="opacity:0.6;">Affective Domain Rating Report <i
                                    class="fa fa-lock m-orange f-right"></i></span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" " id="skillreport">
                        <a href="#" data-toggle="tooltip"
                            title="This option is available in Desktop Version only.">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs"
                                style="opacity:0.6;">Psycomotor Domain Rating Report <i
                                    class="fa fa-lock m-orange f-right"></i></span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>



                </ul>
            </li>
            <li class="pcoded-hasmenu" id="pos">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="fa-solid fa-cart-shopping"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Online Store & POS</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" " id="analytics">
                        <a href="#" data-toggle="tooltip"
                            title="This option is available in Desktop Version only.">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs"
                                style="opacity:0.6;">Store Analytics <i
                                    class="fa fa-lock m-orange f-right"></i></span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" " id="catagories">
                        <a href="#" data-toggle="tooltip"
                            title="This option is available in Desktop Version only.">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs"
                                style="opacity:0.6;">Product Catagories <i
                                    class="fa fa-lock m-orange f-right"></i></span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" " id="tax">
                        <a href="#" data-toggle="tooltip"
                            title="This option is available in Desktop Version only.">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs"
                                style="opacity:0.6;">Product Tax <i class="fa fa-lock m-orange f-right"></i></span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" " id="products">
                        <a href="#" data-toggle="tooltip"
                            title="This option is available in Desktop Version only.">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs"
                                style="opacity:0.6;">Products <i class="fa fa-lock m-orange f-right"></i></span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" " id="addorder">
                        <a href="#" data-toggle="tooltip"
                            title="This option is available in Desktop Version only.">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs"
                                style="opacity:0.6;">New Order <i class="fa fa-lock m-orange f-right"></i></span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" " id="orders">
                        <a href="#" data-toggle="tooltip"
                            title="This option is available in Desktop Version only.">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs"
                                style="opacity:0.6;">All Orders <i class="fa fa-lock m-orange f-right"></i></span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>



                </ul>
            </li>
            <li class=" " id="whatsapp">
                <a href="#" data-toggle="tooltip" title="This option is available in Desktop Version only.">
                    <span class="pcoded-micon"><i class="fa-brands fa-square-whatsapp"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.form-components.main" style="opacity:0.6;">
                        WhatsApp</span>
                    <i class="fa fa-lock m-orange f-right m-t-10" style="opacity:0.6;"></i>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class=" " id="messages">
                <a href="MessageBox.php">
                    <span class="pcoded-micon"><i class="fa-solid fa-message"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">Messaging</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="pcoded-hasmenu" id="sms">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="fa-solid fa-envelope"></i> </span>
                    <span class="pcoded-mtext" data-i18n="nav.basic-components.main">SMS Services</span>
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
                        <a href="#" data-toggle="tooltip"
                            title="This option is available in Desktop Version only.">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs"
                                style="opacity:0.6;">Branded SMS <i class="fa fa-lock m-orange f-right"></i></span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" " id="smstemplates">
                        <a href="#" data-toggle="tooltip"
                            title="This option is available in Desktop Version only.">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs"
                                style="opacity:0.6;">SMS Templates <i class="fa fa-lock m-orange f-right"></i></span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>



                </ul>
            </li>

            <li class=" " id="liveclass">
                <a href="liveclass.php">
                    <span class="pcoded-micon"><i class="fa-solid fa-video"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">Live Class</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>

        </ul>

        <ul class="pcoded-item pcoded-left-item">
            <li class="pcoded-hasmenu" id="questionpaper">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="fa-solid fa-copy"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Question Paper</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" " id="addchapters">
                        <a href="#" data-toggle="tooltip"
                            title="This option is available in Desktop Version only.">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs"
                                style="opacity:0.6;">Subject Chapters <i
                                    class="fa fa-lock m-orange f-right"></i></span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" " id="questionbank">
                        <a href="#" data-toggle="tooltip"
                            title="This option is available in Desktop Version only.">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs"
                                style="opacity:0.6;">Question Bank <i class="fa fa-lock m-orange f-right"></i></span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" " id="createpaper">
                        <a href="#" data-toggle="tooltip"
                            title="This option is available in Desktop Version only.">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs"
                                style="opacity:0.6;">Create Question Paper <i
                                    class="fa fa-lock m-orange f-right"></i></span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>



                </ul>
            </li>
            <li class="pcoded-hasmenu" id="exams">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="fa-solid fa-file-pen"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Exams</span>
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
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Add / update Exam
                                Marks</span>
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
                        <a href="#" data-toggle="tooltip"
                            title="This option is available in Desktop Version only.">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs"
                                style="opacity:0.6;">Blank Award List <i
                                    class="fa fa-lock m-orange f-right"></i></span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>


                </ul>
            </li>
            <li class="pcoded-hasmenu" id="tests">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="fa-solid fa-file"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Class Tests</span>
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
                    <span class="pcoded-micon"><i class="fa-solid fa-file-lines"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Reports</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" " id="reportcard">
                        <a href="reportcardfor.php">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Students report
                                Card</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" " id="report1">
                        <a href="report1.php">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Students info
                                report</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" " id="report2">
                        <a href="report2.php">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Parents info
                                report</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" " id="report3">
                        <a href="#" data-toggle="tooltip"
                            title="This option is available in Desktop Version only.">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs"
                                style="opacity:0.6;">Students Monthly Attendance Report <i
                                    class="fa fa-lock m-orange f-right"></i></span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" " id="report4">
                        <a href="#" data-toggle="tooltip"
                            title="This option is available in Desktop Version only.">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs"
                                style="opacity:0.6;">Staff Monthly Attendance Report <i
                                    class="fa fa-lock m-orange f-right"></i></span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" " id="report5">
                        <a href="#" data-toggle="tooltip"
                            title="This option is available in Desktop Version only.">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs"
                                style="opacity:0.6;">Fee Collection Report <i
                                    class="fa fa-lock m-orange f-right"></i></span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" " id="report6">
                        <a href="#" data-toggle="tooltip"
                            title="This option is available in Desktop Version only.">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs"
                                style="opacity:0.6;">Student Progress Report <i
                                    class="fa fa-lock m-orange f-right"></i></span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" " id="report7">
                        <a href="#" data-toggle="tooltip"
                            title="This option is available in Desktop Version only.">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs"
                                style="opacity:0.6;">Accounts Report <i
                                    class="fa fa-lock m-orange f-right"></i></span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" " id="report8">
                        <a href="#" data-toggle="tooltip"
                            title="This option is available in Desktop Version only.">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs"
                                style="opacity:0.6;">Customised Reports <i
                                    class="fa fa-lock m-orange f-right"></i></span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>



                </ul>
            </li>
            <li class="pcoded-hasmenu" id="certificates">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="fa-solid fa-award"></i></span>
                    <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Certificates</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" " id="lc">
                        <a href="leavecertificate.php">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Leave
                                Certificate</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" " id="cc">
                        <a href="charactercertificate.php">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Character
                                Certificate</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" " id="cltemplates">
                        <a href="#" data-toggle="tooltip"
                            title="This option is available in Desktop Version only.">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs"
                                style="opacity:0.6;">Certificate Templates <i
                                    class="fa fa-lock m-orange f-right"></i></span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>

        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.other"></div>

    </div>
</nav>
