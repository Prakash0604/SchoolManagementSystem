@extends('admin.layout.main')
@section('content')
    <div class="container-fluid">
        <div class="page-wrapper">
            <style>
                .hide_field {
                    display: none;
                }

                .gradient-blue {

                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;
                    background-image: -webkit-gradient(linear, left top, right top, from(#501e9c), color-stop(30%, #8169f1), color-stop(30%, #8169f1), color-stop(73%, #a44cee), to(#ff847f));
                    background-image: -o-linear-gradient(left, #501e9c 0%, #8169f1 30%, #8169f1 30%, #a44cee 73%, #ff847f 100%);
                    background-image: linear-gradient(to right, #501e9c 0%, #8169f1 30%, #8169f1 30%, #a44cee 73%, #ff847f 100%);
                }

                .text-blue {
                    color: #3144de;
                }

                .hidepi {
                    display: none;
                }

                .titlecell {
                    color: #999;
                    font-size: 12px;
                }

                .datacell {
                    font-weight: bold;
                    padding-left: 20px;
                    font-size: 13px;
                    color: #777;
                }

                #pi {
                    display: none;
                }

                canvas {
                    width: 100% !important;
                    height: auto !important;

                    text-align: center !important;
                }

                .block1,
                .block2 {
                    position: relative;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    width: 110px;
                    height: 110px;
                    border-radius: 50%;
                    padding: 0px;
                    margin: 0px;
                }

                .box1,
                .box2 {
                    position: relative;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    flex-direction: column;
                    width: calc(100% - 50px);
                    height: calc(100% - 50px);
                    border-radius: 50%;
                    /*background-color: #292929;*/
                    box-shadow: 0 0 2px 2px #9698d6;

                }

                .box1::before,
                .box2::before {
                    position: absolute;
                    content: '';
                    width: calc(100% + 18px);
                    height: calc(100% + 18px);
                    border-radius: 50%;
                    border: 1px solid silver;
                }

                .box1 .number1 span,
                .box2 .number2 span {
                    color: #e9e9e9;
                    line-height: 12px;
                }

                .box1 .number1 .num1,
                .box2 .number2 .num2 {
                    font-size: 20px;
                    font-weight: bold;
                    line-height: 12px;
                }

                .box1 .number1 .sub1,
                .box2 .number2 .sub2 {
                    font-size: 14px;
                    line-height: 12px;
                }

                .box1 .title1,
                .box2 .title2 {
                    font-size: 10px;
                    color: #fff;
                    line-height: 12px;
                }

                .dots1,
                .dots2 {
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
                    background-color: #ff808b;
                    box-shadow: 0 0 3px 2px #9698d6;
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
                    box-shadow: 0 0 3px 2px #9698d6;
                    transform: translateX(-50%);
                }

                .svg1,
                .svg2 {
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
            </style>
            <!-- Page-body start -->
            <div class="page-body">
                <div class="row">
                    <div class="col-12 p-10 f-14" style="border-radius:10px;background:#fff;"><strong
                            style="border-right:1px solid #777;padding-right:10px;margin-right:10px;">Employees</strong>
                        <i class="ti-home"></i> - Employee Report
                        <button class="btn btn-sm f-right p-t-5 p-b-5 bg-gradient-blue m-white" style="border-radius:15px;"
                            data-toggle="tooltip" title="This option is available in the Desktop version only." disabled><i
                                class="ti-file"></i> Get PDF</button>
                    </div>
                </div>
                <!-- Row start -->
                <div class="canvas_div_pdf">
                    <div class="row m-round m-t-20" style="">
                        <div class="col-lg-3 col-md-12 text-center m-round m-b-20" style="background:#fff;">
                            <div style="padding-top:25px;">
                                @if ($employee && $employee->image != null)
                                    <img src="/storage/{{ $employee->image }}" class="img-circle"
                                        style="width:140px; height:140px;border:6px solid #f6f7fb;box-shadow:0px 0px 3px 8px #f6f7fb;padding:1px;">
                                @else
                                    <img src="{{ asset('default/avatar-5.webp') }}" class="img-circle"
                                        style="width:140px; height:140px;border:6px solid #f6f7fb;box-shadow:0px 0px 3px 8px #f6f7fb;padding:1px;">
                                @endif
                            </div>
                            <div style="padding-top:15px;">
                                <h4 style="margin:0px;line-height:25px;" class="gradient-blue f-24">{{ $employee->name }}
                                </h4>

                            </div>
                            <div style="padding:15px;background:#f6f7fb;" class="m-round text-left m-t-10">
                                <div style="position:relative;line-height:15px;min-height:30px;">
                                    <img src="{{ asset('assets/arrow-down.png') }}"
                                        style="position:absolute;left:0px;top:15px;height:14px;">
                                    <span class="f-10 m-gray" style="border-bottom:1.5px solid #999;">Registration
                                        No</span><br>
                                    <strong class="f-12 m-l-20 text-blue">{{ $employee->registration_id }}</strong>
                                </div>
                                <div style="position:relative;line-height:15px;min-height:30px;">
                                    <img src="{{ asset('assets/arrow-down.png') }}"
                                        style="position:absolute;left:0px;top:15px;height:14px;">
                                    <span class="f-10 m-gray" style="border-bottom:1.5px solid #999;">Employee
                                        Role</span><br>
                                    <strong class="f-12 m-l-20 text-blue">{{ $employee->role->title }}</strong>
                                </div>
                                <div style="position:relative;line-height:15px;min-height:30px;">
                                    <img src="{{ asset('assets/arrow-down.png') }}"
                                        style="position:absolute;left:0px;top:15px;height:14px;">
                                    <span class="f-10 m-gray" style="border-bottom:1.5px solid #999;">Monthly
                                        Salary</span><br>
                                    <strong class="f-12 m-l-20 text-blue"><span class="m-gray" id="symbol">Rs</span>
                                        {{ $employee->monthly_salary }}</strong>
                                </div>
                                <div style="position:relative;line-height:15px;min-height:30px;">
                                    <img src="{{ asset('assets/arrow-down.png') }}"
                                        style="position:absolute;left:0px;top:15px;height:14px;">
                                    <span class="f-10 m-gray" style="border-bottom:1.5px solid #999;">Username</span><br>
                                    <strong class="f-12 m-l-20 text-blue">{{ $employee->username }}</strong>
                                </div>
                                <div style="position:relative;line-height:15px;min-height:30px;">
                                    <img src="{{ asset('assets/arrow-down.png') }}"
                                        style="position:absolute;left:0px;top:15px;height:14px;">
                                    <span class="f-10 m-gray" style="border-bottom:1.5px solid #999;">Password</span><br>
                                    <strong class="f-12 m-l-20 text-blue">121212</strong>
                                </div>
                            </div>
                            <div style="padding:10px;" class="text-left m-gray">
                                <div style="position:relative;line-height:15px;min-height:30px;" class="">
                                    <img src="{{ asset('assets/arrow-down.png') }}"
                                        style="position:absolute;left:0px;top:15px;height:14px;">
                                    <span class="f-10 m-gray" style="border-bottom:1.5px solid #999;">Father / Husband
                                        Name</span><br>
                                    <strong class="f-12 m-l-20 text-blue">{{ $employee->guardains }}</strong>
                                </div>

                                <div style="position:relative;line-height:15px;min-height:30px;">
                                    <img src="{{ asset('assets/arrow-down.png') }}"
                                        style="position:absolute;left:0px;top:15px;height:14px;">
                                    <span class="f-10 m-gray" style="border-bottom:1.5px solid #999;">Mobile No</span><br>
                                    <strong class="f-12 m-l-20 text-blue">{{ $employee->contact }}</strong>
                                </div>
                                <div style="position:relative;line-height:15px;min-height:30px;" class="">
                                    <img src="{{ asset('assets/arrow-down.png') }}"
                                        style="position:absolute;left:0px;top:15px;height:14px;">
                                    <span class="f-10 m-gray" style="border-bottom:1.5px solid #999;">Email
                                        Address</span><br>
                                    <strong class="f-12 m-l-20 text-blue">{{ $employee->email }}</strong>
                                </div>
                                <div style="position:relative;line-height:15px;min-height:30px;" class="">
                                    <img src="{{ asset('assets/arrow-down.png') }}"
                                        style="position:absolute;left:0px;top:15px;height:14px;">
                                    <span class="f-10 m-gray" style="border-bottom:1.5px solid #999;">Home
                                        Address</span><br>
                                    <strong class="f-12 m-l-20 text-blue">{{ $employee->home_address }}</strong>
                                </div>

                            </div>
                            <div style="padding:15px;background:#f6f7fb;" class="m-round text-left">
                                <div style="position:relative;line-height:15px;min-height:30px;" class="">
                                    <img src="{{ asset('assets/arrow-down.png') }}"
                                        style="position:absolute;left:0px;top:15px;height:14px;">
                                    <span class="f-10 m-gray" style="border-bottom:1.5px solid #999;">National ID</span><br>
                                    <strong class="f-12 m-l-20 text-blue">{{ $employee->national_id }}</strong>
                                </div>
                                <div style="position:relative;line-height:15px;min-height:30px;" class="">
                                    <img src="{{ asset('assets/arrow-down.png') }}"
                                        style="position:absolute;left:0px;top:15px;height:14px;">
                                    <span class="f-10 m-gray" style="border-bottom:1.5px solid #999;">Education</span><br>
                                    <strong class="f-12 m-l-20 text-blue">{{ $employee->education }}</strong>
                                </div>
                            </div>
                            <div style="padding:10px;" class="text-left m-gray">
                                <div style="position:relative;line-height:15px;min-height:30px;" class="">
                                    <img src="{{ asset('assets/arrow-down.png') }}"
                                        style="position:absolute;left:0px;top:15px;height:14px;">
                                    <span class="f-10 m-gray" style="border-bottom:1.5px solid #999;">Gender</span><br>
                                    <strong class="f-12 m-l-20 text-blue">{{ $employee->gender }}</strong>
                                </div>
                                <div style="position:relative;line-height:15px;min-height:30px;" class="">
                                    <img src="{{ asset('assets/arrow-down.png') }}"
                                        style="position:absolute;left:0px;top:15px;height:14px;">
                                    <span class="f-10 m-gray" style="border-bottom:1.5px solid #999;">Religion</span><br>
                                    <strong class="f-12 m-l-20 text-blue">{{ $employee?->religion?->title }}</strong>
                                </div>
                                <div style="position:relative;line-height:15px;min-height:30px;" class="">
                                    <img src="{{ asset('assets/arrow-down.png') }}"
                                        style="position:absolute;left:0px;top:15px;height:14px;">
                                    <span class="f-10 m-gray" style="border-bottom:1.5px solid #999;">Blood
                                        Group</span><br>
                                    <strong class="f-12 m-l-20 text-blue">{{ $employee?->blood_group?->title }}</strong>
                                </div>
                                <div style="position:relative;line-height:15px;min-height:30px;" class="">
                                    <img src="{{ asset('assets/arrow-down.png') }}"
                                        style="position:absolute;left:0px;top:15px;height:14px;">
                                    <span class="f-10 m-gray" style="border-bottom:1.5px solid #999;">Date of
                                        Birth</span><br>
                                    <strong class="f-12 m-l-20 text-blue">{{ $employee->dob }}</strong>
                                </div>
                                <div style="position:relative;line-height:15px;min-height:30px;">
                                    <img src="{{ asset('assets/arrow-down.png') }}"
                                        style="position:absolute;left:0px;top:15px;height:14px;">
                                    <span class="f-10 m-gray" style="border-bottom:1.5px solid #999;">Date of
                                        Joining</span><br>
                                    <strong class="f-12 m-l-20 text-blue">{{ $employee->join_date ?? '' }}</strong>
                                </div>
                                <div style="position:relative;line-height:15px;min-height:30px;" class="">
                                    <img src="{{ asset('assets/arrow-down.png') }}"
                                        style="position:absolute;left:0px;top:15px;height:14px;">
                                    <span class="f-10 m-gray"
                                        style="border-bottom:1.5px solid #999;">Experience</span><br>
                                    <strong class="f-12 m-l-20 text-blue">{{ $employee->experience ?? '' }}</strong>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="row p-10 p-t-0">
                                <div class="col-lg-12">
                                    <h6 class="w-100">
                                        <div class="bg-gradient-blue m-white"
                                            style="width:20px;height:20px;border-radius:10px;display:inline-block;padding-top:3px;padding-left:7px;">
                                            1</div> <strong class="gradient-blue f-16">Attendance Report </strong><span
                                            style="font-size:12px;" class="f-right"></span>
                                    </h6>
                                    <div class="row p-b-20 p-t-20"
                                        style="border-radius:5px;padding-bottom:20px;padding-left:4px;padding-right:0px;background:#FFF;border:1px solid white;border-top-left-radius: 15px;border-bottom-right-radius:25px;">
                                        <div class="col-12 " style="margin-top:8px;margin-bottom:10px;">
                                            <div class="row p-l-15 p-r-15">
                                                <div class="col-4" style="padding:4px;">
                                                    <div class="bg-m-blue1" style="border-radius:6px;">
                                                        <div class="m-white"
                                                            style="padding:8px;padding-left:10px;padding-right:10px;">
                                                            <h6 class="f-12"style="margin-bottom:0px;">PRESENTS</h6>
                                                            <h3 class="f-16 m-t-0 m-b-0" style="line-height:12px;">
                                                                <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                                                                <lord-icon src="https://cdn.lordicon.com/zmkotitn.json"
                                                                    trigger="loop" delay="2000"
                                                                    colors="primary:#ffffff"
                                                                    style="width:20px;height:20px;display:inline-block;">
                                                                </lord-icon>
                                                                <span style="display:inline-block;float:right;">{{ $present }}</span>
                                                            </h3>
                                                            <p class="m-b-0 m-t-0" style="font-size:9px;">This Month<span
                                                                    class="f-right">{{ $daysInMonth }}</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4" style="padding:4px;">
                                                    <div class="bg-m-gray" style="border-radius:6px;">
                                                        <div class="m-white"
                                                            style="padding:8px;padding-left:10px;padding-right:10px;">
                                                            <h6 class="f-12"style="margin-bottom:0px;">Late In</h6>
                                                            <h3 class="f-16 m-t-0 m-b-0" style="line-height:12px;">
                                                                <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                                                                <lord-icon src="https://cdn.lordicon.com/zmkotitn.json"
                                                                    trigger="loop" delay="2100"
                                                                    colors="primary:#ffffff"
                                                                    style="width:20px;height:20px;display:inline-block;">
                                                                </lord-icon>
                                                                <span style="display:inline-block;float:right;">{{ $lateIn }}</span>
                                                            </h3>
                                                            <p class="m-b-0 m-t-0" style="font-size:9px;">This Month<span
                                                                    class="f-right">{{ $daysInMonth }}</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4" style="padding:4px;">
                                                    <div class="bg-m-orange" style="border-radius:6px;">
                                                        <div class="m-white"
                                                            style="padding:8px;padding-left:10px;padding-right:10px;">
                                                            <h6 class="f-12"style="margin-bottom:0px;">ABSENTS</h6>
                                                            <h3 class="f-16 m-t-0 m-b-0" style="line-height:12px;">
                                                                <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                                                                <lord-icon src="https://cdn.lordicon.com/zmkotitn.json"
                                                                    trigger="loop" delay="2200"
                                                                    colors="primary:#ffffff"
                                                                    style="width:20px;height:20px;display:inline-block;">
                                                                </lord-icon>
                                                                <span style="display:inline-block;float:right;">{{ $absent }}</span>
                                                            </h3>
                                                            <p class="m-b-0 m-t-0" style="font-size:9px;">This Month<span
                                                                    class="f-right">{{ $daysInMonth }}</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 m-t-20">
                                    <h6 class="w-100">
                                        <div class="bg-gradient-blue m-white"
                                            style="width:20px;height:20px;border-radius:10px;display:inline-block;padding-top:3px;padding-left:5px;">
                                            2</div> <strong class="gradient-blue f-16">Salary Report </strong> <span
                                            style="font-size:12px;" class="f-right"></span>
                                    </h6>
                                    <div class="row p-20 p-t-20 p-b-20"
                                        style="border-radius:5px;padding-bottom:10px;padding-left:4px;padding-right:4px;background:#FFF;border:1px solid white;border-top-left-radius: 15px;border-bottom-right-radius:25px;">

                                        <div class="col-6">
                                            <button class="btn btn-sm m-l-10 f-right"
                                                style="border:1px solid #999;border-radius:15px;width:100%;text-align:center;padding:3px;font-size:10px;position:relative;padding-top:6px;background:#FFFFF7;">
                                                <font style="font-size:10px;font-weight:bold;" class="m-blue1"><i
                                                        class="ti-wallet"></i> <span id="symbol">Rs</span>
                                                    {{ $employee->monthly_salary ?? '' }} </font>
                                                <span class="m-gray"
                                                    style="position:absolute;top:-7px;left:5px;background:#fff;font-size:9px;padding:none;padding-left:4px; padding-right:4px;border-radius:10px;line-height:12px;border:1px solid #999;"><span
                                                        class="bg-m-blue1 badge" style="padding:3px;"></span> Current
                                                    Salary</span>
                                            </button>
                                        </div>
                                        <div class="col-6">
                                            <button class="btn btn-sm m-l-10 f-right"
                                                style="border:1px solid #999;border-radius:15px;width:100%;text-align:center;padding:3px;font-size:10px;position:relative;padding-top:6px;background:#FFFFF7;">
                                                <font style="font-size:10px;font-weight:bold;" class="m-green"><i
                                                        class="fa fa-check"></i> <span id="symbol">$</span>
                                                    RECIEVED</font>
                                                <span class="m-gray"
                                                    style="position:absolute;top:-7px;left:5px;background:#fff;font-size:9px;padding:none;padding-left:4px; padding-right:4px;border-radius:10px;line-height:12px;border:1px solid #999;"><span
                                                        class="bg-c-green badge" style="padding:3px;"></span> This
                                                    Month</span>
                                            </button>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-3 p-0">
                                                    <hr>
                                                </div>
                                                <div class="col-6 text-center" style="padding-top:4px;">
                                                    <span class="m-gray f-12"><span class="bg-m-gray badge"
                                                            style="padding:3px;"></span> Latest salary record <span
                                                            class="bg-m-gray badge" style="padding:3px;"></span></span>
                                                </div>
                                                <div class="col-3 p-0">
                                                    <hr>
                                                </div>
                                            </div>
                                            @foreach ($salaries as $salary)
                                                <div class="row p-10" style="border-bottom:1px solid #999;">
                                                    <div class="col-6">
                                                        <strong
                                                            class="m-blue1">{{ optional(\Carbon\Carbon::createFromFormat('Y-m', $salary->month))->format('F Y') ?? '-' }}
                                                        </strong><br>
                                                        <span class="f-12 m-gray"> {{ $salary->salary_date }}</span>
                                                    </div>
                                                    <div class="col-6 text-right" style="line-height:8px;">
                                                        <strong class="m-blue1 f-12 text-center"
                                                            style="display:inline;"><i class="fas fa-plus"
                                                                style="font-size:8px;"></i> <span
                                                                id="symbol">Rs</span> {{ $salary->bonus ?? '0' }}</strong>
                                                        <strong class="m-orange f-12 text-center m-l-10 m-r-20"
                                                            style="display:inline;"><i class="fas fa-minus"
                                                                style="font-size:8px;"></i> <span
                                                                id="symbol">Rs</span> {{ $salary->fine ?? '0' }}</strong>
                                                        <button class="btn btn-sm bg-gradient-green m-white"
                                                            style="padding-top:5px;padding-bottom:5px;margin-top:5px;border-radius:20px;">PAID
                                                            <strong><span id="symbol">Rs</span> {{ $salary->total_salary }}</strong> <i
                                                                class="fa fa-check"></i> </button>
                                                    </div>
                                                </div>
                                            @endforeach
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
@endsection
