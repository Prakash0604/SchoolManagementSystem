@extends('admin.layout.main')
@section('content')
    <div class="container-fluid">
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

            #pi,
            #fd,
            #hidefi {
                display: none;
            }

            canvas {
                width: 100% !important;
                height: auto !important;

                text-align: center !important;
            }

            .block1,
            .block2,
            .block3 {
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
            .box2,
            .box3 {
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

            .box1::before,
            .box2::before,
            .box3::before {
                position: absolute;
                content: '';
                width: calc(100% + 18px);
                height: calc(100% + 18px);
                border-radius: 50%;
                border: 1px solid silver;
            }

            .box1 .number1 span,
            .box2 .number2 span,
            .box3 .number3 span {
                color: #e9e9e9;
                line-height: 12px;
            }

            .box1 .number1 .num1,
            .box2 .number2 .num2,
            .box3 .number3 .num3 {
                font-size: 20px;
                font-weight: bold;
                line-height: 12px;
            }

            .box1 .number1 .sub1,
            .box2 .number2 .sub2,
            .box3 .number3 .sub3 {
                font-size: 14px;
                line-height: 12px;
            }

            .box1 .title1,
            .box2 .title2,
            .box3 .title3 {
                font-size: 10px;
                color: #fff;
                line-height: 12px;
            }

            .dots1,
            .dots2,
            .dots3 {
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

            .svg1,
            .svg2,
            .svg3 {
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

            .tooltip>.tooltip-inner {
                background-color: #eebf3f;
                padding: 2px 7px;
                color: rgb(23, 44, 66);
                font-weight: bold;
                font-size: 11px;
            }

            .popOver+.tooltip>.tooltip-arrow {
                border-left: 5px solid transparent !important;
                border-right: 5px solid transparent !important;
                border-top: 5px solid #eebf3f !important;
            }

            section {
                margin: 100px auto;
                height: 1000px;
            }

            .progress {
                border-radius: 0;
                overflow: visible;
            }

            .progress-bar {
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
        <div class="page-wrapper">
            <!-- Page-body start -->
            <div class="page-body">
                <!-- Row start -->
                <div class="row">
                    <div class="col-12 p-10 f-14" style="border-radius:10px;background:#fff;box-shadow:0px 0px 1px 0px gray;">
                        <strong style="border-right:1px solid #777;padding-right:10px;margin-right:10px;">Students</strong>
                        <i class="ti-home"></i> - Student Report
                        <button class="btn btn-sm f-right p-t-5 p-b-5 bg-gradient-blue m-white" style="border-radius:15px;"
                            data-toggle="tooltip" title="This option is available in the Desktop version only." disabled><i
                                class="ti-file"></i> Get PDF</button>
                    </div>
                </div>
                <div class="row m-round canvas_div_pdf m-t-15" style="">

                    <div class="col-lg-3 col-md-12 text-center m-round m-b-20"
                        style="background:#fff;box-shadow:0px 0px 1px 0px gray;">
                        <div style="padding-top:15px;">
                            <img src="uploads/students/no-image.png" class="img-circle"
                                style="width:140px; height:140px;border:6px solid #f6f7fb;box-shadow:0px 0px 3px 8px #f6f7fb;padding:1px;">
                        </div>
                        <div style="padding-top:15px;padding-bottom:15px;">
                            <h4 style="margin:0px;line-height:22px;" class="gradient-blue">Elisa sakya</h4>

                        </div>
                        <div class="text-left p-15"
                            style="background:#f6f7fb;border-radius:5px;border-top-left-radius: 15px;border-bottom-right-radius:25px;">
                            <div style="position:relative;line-height:15px;min-height:30px;">
                                <img src="{{ asset('assets/arrow-down.png') }}"
                                    style="position:absolute;left:0px;top:15px;height:14px;">
                                <span class="f-10 m-gray" style="border-bottom:1.5px solid #999;">Registration No</span><br>
                                <strong class="f-12 m-l-20 text-blue">REG0101</strong>
                            </div>
                            <div style="position:relative;line-height:15px;min-height:30px;">
                                <img src="{{ asset('assets/arrow-down.png') }}"
                                    style="position:absolute;left:0px;top:15px;height:14px;">
                                <span class="f-10 m-gray" style="border-bottom:1.5px solid #999;">Date of
                                    Admission</span><br>
                                <strong class="f-12 m-l-20 text-blue">07 January, 2025</strong>
                            </div>
                            <div style="position:relative;line-height:15px;min-height:30px;">
                                <img src="{{ asset('assets/arrow-down.png') }}"
                                    style="position:absolute;left:0px;top:15px;height:14px;">
                                <span class="f-10 m-gray" style="border-bottom:1.5px solid #999;">Class</span><br>
                                <strong class="f-12 m-l-20 text-blue">One</strong>
                            </div>
                            <div style="position:relative;line-height:15px;min-height:30px;">
                                <img src="{{ asset('assets/arrow-down.png') }}"
                                    style="position:absolute;left:0px;top:15px;height:14px;">
                                <span class="f-10 m-gray" style="border-bottom:1.5px solid #999;">Family</span><br>
                                <strong class="f-12 m-l-20 text-blue"></strong>
                            </div>
                            <div style="position:relative;line-height:15px;min-height:30px;">
                                <img src="{{ asset('assets/arrow-down.png') }}"
                                    style="position:absolute;left:0px;top:15px;height:14px;">
                                <span class="f-10 m-gray" style="border-bottom:1.5px solid #999;">Discount in Fee</span><br>
                                <strong class="f-12 m-l-20 text-blue">10 %</strong>
                            </div>

                        </div>
                        <div class="text-left p-10">
                            <div style="position:relative;line-height:16px;min-height:30px;" class="">
                                <img src="{{ asset('assets/arrow-down.png') }}"
                                    style="position:absolute;left:0px;top:16px;height:14px;">
                                <span class="f-10 m-gray" style="border-bottom:1.5px solid #999;">Date Of Birth</span><br>
                                <strong class="f-12 m-l-20 text-blue"></strong>
                            </div>
                            <div style="position:relative;line-height:16px;min-height:30px;" class="">
                                <img src="{{ asset('assets/arrow-down.png') }}"
                                    style="position:absolute;left:0px;top:16px;height:14px;">
                                <span class="f-10 m-gray" style="border-bottom:1.5px solid #999;">Gender</span><br>
                                <strong class="f-12 m-l-20 text-blue"></strong>
                            </div>
                            <div style="position:relative;line-height:16px;min-height:30px;" class="">
                                <img src="{{ asset('assets/arrow-down.png') }}"
                                    style="position:absolute;left:0px;top:16px;height:14px;">
                                <span class="f-10 m-gray" style="border-bottom:1.5px solid #999;">Any Identification
                                    Mark?</span><br>
                                <strong class="f-12 m-l-20 text-blue"></strong>
                            </div>
                            <div style="position:relative;line-height:16px;min-height:30px;" class="">
                                <img src="{{ asset('assets/arrow-down.png') }}"
                                    style="position:absolute;left:0px;top:16px;height:14px;">
                                <span class="f-10 m-gray" style="border-bottom:1.5px solid #999;">Blood Group</span><br>
                                <strong class="f-12 m-l-20 text-blue"></strong>
                            </div>
                            <div style="position:relative;line-height:16px;min-height:30px;" class="">
                                <img src="{{ asset('assets/arrow-down.png') }}"
                                    style="position:absolute;left:0px;top:16px;height:14px;">
                                <span class="f-10 m-gray" style="border-bottom:1.5px solid #999;">Disease If Any?</span><br>
                                <strong class="f-12 m-l-20 text-blue"></strong>
                            </div>
                            <div style="position:relative;line-height:16px;min-height:30px;" class="">
                                <img src="{{ asset('assets/arrow-down.png') }}"
                                    style="position:absolute;left:0px;top:16px;height:14px;">
                                <span class="f-10 m-gray" style="border-bottom:1.5px solid #999;">Student Birth Form ID /
                                    NIC</span><br>
                                <strong class="f-12 m-l-20 text-blue"></strong>
                            </div>
                            <div style="position:relative;line-height:16px;min-height:30px;" class="">
                                <img src="{{ asset('assets/arrow-down.png') }}"
                                    style="position:absolute;left:0px;top:16px;height:14px;">
                                <span class="f-10 m-gray" style="border-bottom:1.5px solid #999;">Cast</span><br>
                                <strong class="f-12 m-l-20 text-blue"></strong>
                            </div>
                            <div style="position:relative;line-height:16px;min-height:30px;" class="">
                                <img src="{{ asset('assets/arrow-down.png') }}"
                                    style="position:absolute;left:0px;top:16px;height:14px;">
                                <span class="f-10 m-gray" style="border-bottom:1.5px solid #999;">Previous
                                    School</span><br>
                                <strong class="f-12 m-l-20 text-blue"></strong>
                            </div>
                            <div style="position:relative;line-height:16px;min-height:30px;" class="">
                                <img src="{{ asset('assets/arrow-down.png') }}"
                                    style="position:absolute;left:0px;top:16px;height:14px;">
                                <span class="f-10 m-gray" style="border-bottom:1.5px solid #999;">Previous ID / Board Roll
                                    No</span><br>
                                <strong class="f-12 m-l-20 text-blue"></strong>
                            </div>
                            <div style="position:relative;line-height:16px;min-height:30px;" class="">
                                <img src="{{ asset('assets/arrow-down.png') }}"
                                    style="position:absolute;left:0px;top:16px;height:14px;">
                                <span class="f-10 m-gray" style="border-bottom:1.5px solid #999;">Any Additional
                                    Note</span><br>
                                <strong class="f-12 m-l-20 text-blue"></strong>
                            </div>
                            <div style="position:relative;line-height:16px;min-height:30px;" class="">
                                <img src="{{ asset('assets/arrow-down.png') }}"
                                    style="position:absolute;left:0px;top:16px;height:14px;">
                                <span class="f-10 m-gray" style="border-bottom:1.5px solid #999;">Orphan
                                    Student</span><br>
                                <strong class="f-12 m-l-20 text-blue"></strong>
                            </div>
                            <div style="position:relative;line-height:16px;min-height:30px;" class="">
                                <img src="{{ asset('assets/arrow-down.png') }}"
                                    style="position:absolute;left:0px;top:16px;height:14px;">
                                <span class="f-10 m-gray" style="border-bottom:1.5px solid #999;">OSC</span><br>
                                <strong class="f-12 m-l-20 text-blue"></strong>
                            </div>
                            <div style="position:relative;line-height:16px;min-height:30px;" class="">
                                <img src="{{ asset('assets/arrow-down.png') }}"
                                    style="position:absolute;left:0px;top:16px;height:14px;">
                                <span class="f-10 m-gray" style="border-bottom:1.5px solid #999;">Religion</span><br>
                                <strong class="f-12 m-l-20 text-blue"></strong>
                            </div>
                            <div style="position:relative;line-height:16px;min-height:30px;" class="">
                                <img src="{{ asset('assets/arrow-down.png') }}"
                                    style="position:absolute;left:0px;top:16px;height:14px;">
                                <span class="f-10 m-gray" style="border-bottom:1.5px solid #999;">Total
                                    Siblings</span><br>
                                <strong class="f-12 m-l-20 text-blue">0</strong>
                            </div>

                        </div>
                        <div class="text-left p-15 m-b-10"
                            style="background:#f6f7fb;border-radius:5px;border-top-left-radius: 15px;border-bottom-right-radius:25px;">
                            <div style="position:relative;line-height:16px;min-height:30px;" class="">
                                <img src="{{ asset('assets/arrow-down.png') }}"
                                    style="position:absolute;left:0px;top:16px;height:14px;">
                                <span class="f-10 m-gray" style="border-bottom:1.5px solid #999;">Father Name</span><br>
                                <strong class="f-12 m-l-20 text-blue"></strong>
                            </div>
                            <div style="position:relative;line-height:16px;min-height:30px;" class="">
                                <img src="{{ asset('assets/arrow-down.png') }}"
                                    style="position:absolute;left:0px;top:16px;height:14px;">
                                <span class="f-10 m-gray" style="border-bottom:1.5px solid #999;">Mother Name</span><br>
                                <strong class="f-12 m-l-20 text-blue"></strong>
                            </div>
                            <div style="position:relative;line-height:16px;min-height:30px;" class="">
                                <img src="{{ asset('assets/arrow-down.png') }}"
                                    style="position:absolute;left:0px;top:16px;height:14px;">
                                <span class="f-10 m-gray" style="border-bottom:1.5px solid #999;">Address</span><br>
                                <strong class="f-12 m-l-20 text-blue"></strong>
                            </div>

                        </div>

                    </div>
                    <div class="col-lg-9 col-md-12 m-round" style="background:none;margin-bottom:0px;">
                        <div class="row">
                            <div class="col-lg-6">
                                <h6 class="w-100">
                                    <div class="bg-gradient-blue m-white"
                                        style="width:20px;height:20px;border-radius:10px;display:inline-block;padding-top:3px;padding-left:7px;">
                                        1</div> <strong class="gradient-blue f-16">Attendance Report </strong><span
                                        style="font-size:12px;" class="f-right"></span>
                                </h6>
                                <div class="row m-round m-b-20"
                                    style="border-radius:5px;padding-bottom:10px;background:#FFF;margin-left:5px;padding:5px;box-shadow:0px 0px 1px 0px gray;">

                                    <div class="col-5 p-0" style="padding:0px !important;color:#fff;"><canvas
                                            id="pieChart" width="100%" height="100%"></canvas></div>
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
                                        <button class="btn btn-sm"
                                            style="border:1px solid #999;border-radius:15px;width:100%;text-align:center;padding:3px;font-size:10px;position:relative;padding-top:5px;background:#FFFFF7;">
                                            <font style="font-size:10px;font-weight:bold;" class="m-gray">NOT MARKED
                                            </font>
                                            <span class="m-gray"
                                                style="position:absolute;top:-7px;left:5px;background:#fff;font-size:9px;padding:none;padding-left:4px; padding-right:4px;border-radius:10px;line-height:12px;border:1px solid #999;"><span
                                                    class="bg-m-gray badge" style="padding:3px;"></span> Today</span>
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
                                        <button class="btn btn-sm m-l-10"
                                            style="border:1px solid #999;border-radius:15px;width:100%;text-align:center;padding:3px;font-size:10px;position:relative;padding-top:5px;background:#FFFFF7;">
                                            <font style="font-size:10px;font-weight:bold;" class="m-gray">NOT MARKED
                                            </font>
                                            <span class="m-gray"
                                                style="position:absolute;top:-7px;left:5px;background:#fff;font-size:9px;padding:none;padding-left:4px; padding-right:4px;border-radius:10px;line-height:12px;border:1px solid #999;"><span
                                                    class="bg-m-gray badge" style="padding:3px;"></span> Yesterday</span>
                                        </button>
                                    </div>
                                    <div class="col-12" style="margin-top:8px;margin-bottom:10px;">
                                        <div class="row" style="padding-left:4px;padding-right:4px;">
                                            <div class="col-4" style="padding:4px;">
                                                <div class="bg-m-blue1" style="border-radius:6px;">
                                                    <div class="m-white"
                                                        style="padding:8px;padding-left:10px;padding-right:10px;">
                                                        <h6 class="f-12"style="margin-bottom:0px;">PRESENTS</h6>
                                                        <h3 class="f-16 m-t-0 m-b-0" style="line-height:20px;">
                                                            <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                                                            <lord-icon src="https://cdn.lordicon.com/zmkotitn.json"
                                                                trigger="loop" delay="2000" colors="primary:#ffffff"
                                                                style="width:20px;height:20px;display:inline-block;">
                                                            </lord-icon>
                                                            <span style="display:inline-block;float:right;">2</span>
                                                        </h3>
                                                        <p class="m-b-0 m-t-0" style="font-size:9px;">This Month<span
                                                                class="f-right">0</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4" style="padding:4px;">
                                                <div class="bg-m-gray" style="border-radius:6px;">
                                                    <div class="m-white"
                                                        style="padding:8px;padding-left:10px;padding-right:10px;">
                                                        <h6 class="f-12"style="margin-bottom:0px;">LEAVES</h6>
                                                        <h3 class="f-16 m-t-0 m-b-0" style="line-height:20px;">
                                                            <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                                                            <lord-icon src="https://cdn.lordicon.com/zmkotitn.json"
                                                                trigger="loop" delay="2100" colors="primary:#ffffff"
                                                                style="width:20px;height:20px;display:inline-block;">
                                                            </lord-icon>
                                                            <span style="display:inline-block;float:right;">0</span>
                                                        </h3>
                                                        <p class="m-b-0 m-t-0" style="font-size:9px;">This Month<span
                                                                class="f-right">0</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4" style="padding:4px;">
                                                <div class="bg-m-orange" style="border-radius:6px;">
                                                    <div class="m-white"
                                                        style="padding:8px;padding-left:10px;padding-right:10px;">
                                                        <h6 class="f-12"style="margin-bottom:0px;">ABSENTS</h6>
                                                        <h3 class="f-16 m-t-0 m-b-0" style="line-height:20px;">
                                                            <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                                                            <lord-icon src="https://cdn.lordicon.com/zmkotitn.json"
                                                                trigger="loop" delay="2200" colors="primary:#ffffff"
                                                                style="width:20px;height:20px;display:inline-block;">
                                                            </lord-icon>
                                                            <span style="display:inline-block;float:right;">0</span>
                                                        </h3>
                                                        <p class="m-b-0 m-t-0" style="font-size:9px;">This Month<span
                                                                class="f-right">0</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="w-100">
                                    <div class="bg-gradient-blue m-white"
                                        style="width:20px;height:20px;border-radius:10px;display:inline-block;padding-top:3px;padding-left:6px;">
                                        2</div> <strong class="gradient-blue f-16">Class Tests Report </strong><span
                                        style="font-size:12px;" class="f-right"></span>
                                </h6>
                                <div class="row m-t-10 m-b-20 m-round"
                                    style="padding-bottom:10px;padding:5px;background:#FFF;margin-left:5px;box-shadow:0px 0px 1px 0px gray;">

                                    <div class="col-12 p-0">
                                        <div class="row m-10 p-10 p-b-0 m-round" style="background:#fff;">
                                            <div class="col-8 m-gray p-0 f-10" style="line-height:15px;">
                                                <strong class="m-dblue f-16"><i class="ti-book"></i> English</strong><br>
                                                <div style="margin-top:5px;margin-bottom:5px;">
                                                    <strong class="f-14 " style="display:inline-block;">0%</strong>
                                                    <div class="progress"
                                                        style="height:8px;border-radius:5px;width:90px;display:inline-block;">

                                                        <div class="progress-bar  f-left" role="progressbar"
                                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                                            style="width:0%;border-radius:5px;">

                                                        </div>

                                                    </div>
                                                </div>
                                                <span class="bg-m-orange badge" style="padding:5px;"></span> TOTAL
                                                <b>CLASS TESTS</b> (<strong class="m-orange f-12">0</strong>)<br>
                                                <span class="bg-m-gray badge" style="padding:5px;"></span> TOTAL
                                                <b>MARKS</b> (<strong class="m-gray f-12">0</strong>)<br>
                                                <span class="bg-m-blue1 badge" style="padding:5px;"></span> OBTAINED
                                                <b>MARKS</b> (<strong class="m-blue1 f-12">0</strong>)
                                            </div>
                                            <div class="col-4 p-0">
                                                <input type="hidden" value="0" id="perval0">
                                                <div id="progress0">
                                                    <svg viewbox="0 0 110 100">
                                                        <linearGradient id="gradient0" x1="0" y1="0"
                                                            x2="0" y2="100%">
                                                            <stop offset="0%" stop-color="#f5365c" />
                                                            <stop offset="100%" stop-color="#f56036" />
                                                        </linearGradient>
                                                        <path class="grey" d="M30,90 A40,40 0 1,1 80,90"
                                                            fill='none' />
                                                        <path id="blue" fill='none' class="blue"
                                                            d="M30,90 A40,40 0 1,1 80,90"
                                                            style="stroke: url(#gradient0);" />

                                                        <text x="50%" y="60%" dominant-baseline="middle"
                                                            text-anchor="middle"
                                                            style="font-size:18px;font-weight:900;">0%</text>
                                                        <text x="50%" y="90%" dominant-baseline="middle"
                                                            text-anchor="middle" style="font-size:12px;">score</text>
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
                                                    <div class="progress"
                                                        style="height:8px;border-radius:5px;width:90px;display:inline-block;">

                                                        <div class="progress-bar  f-left" role="progressbar"
                                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                                            style="width:0%;border-radius:5px;">

                                                        </div>

                                                    </div>
                                                </div>
                                                <span class="bg-m-orange badge" style="padding:5px;"></span> TOTAL
                                                <b>CLASS TESTS</b> (<strong class="m-orange f-12">0</strong>)<br>
                                                <span class="bg-m-gray badge" style="padding:5px;"></span> TOTAL
                                                <b>MARKS</b> (<strong class="m-gray f-12">0</strong>)<br>
                                                <span class="bg-m-blue1 badge" style="padding:5px;"></span> OBTAINED
                                                <b>MARKS</b> (<strong class="m-blue1 f-12">0</strong>)
                                            </div>
                                            <div class="col-4 p-0">
                                                <input type="hidden" value="0" id="perval1">
                                                <div id="progress1">
                                                    <svg viewbox="0 0 110 100">
                                                        <linearGradient id="gradient1" x1="0" y1="0"
                                                            x2="0" y2="100%">
                                                            <stop offset="0%" stop-color="#f5365c" />
                                                            <stop offset="100%" stop-color="#f56036" />
                                                        </linearGradient>
                                                        <path class="grey" d="M30,90 A40,40 0 1,1 80,90"
                                                            fill='none' />
                                                        <path id="blue" fill='none' class="blue"
                                                            d="M30,90 A40,40 0 1,1 80,90"
                                                            style="stroke: url(#gradient1);" />

                                                        <text x="50%" y="60%" dominant-baseline="middle"
                                                            text-anchor="middle"
                                                            style="font-size:18px;font-weight:900;">0%</text>
                                                        <text x="50%" y="90%" dominant-baseline="middle"
                                                            text-anchor="middle" style="font-size:12px;">score</text>
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
                                                    <div class="progress"
                                                        style="height:8px;border-radius:5px;width:90px;display:inline-block;">

                                                        <div class="progress-bar  f-left" role="progressbar"
                                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                                            style="width:0%;border-radius:5px;">

                                                        </div>

                                                    </div>
                                                </div>
                                                <span class="bg-m-orange badge" style="padding:5px;"></span> TOTAL
                                                <b>CLASS TESTS</b> (<strong class="m-orange f-12">0</strong>)<br>
                                                <span class="bg-m-gray badge" style="padding:5px;"></span> TOTAL
                                                <b>MARKS</b> (<strong class="m-gray f-12">0</strong>)<br>
                                                <span class="bg-m-blue1 badge" style="padding:5px;"></span> OBTAINED
                                                <b>MARKS</b> (<strong class="m-blue1 f-12">0</strong>)
                                            </div>
                                            <div class="col-4 p-0">
                                                <input type="hidden" value="0" id="perval2">
                                                <div id="progress2">
                                                    <svg viewbox="0 0 110 100">
                                                        <linearGradient id="gradient2" x1="0" y1="0"
                                                            x2="0" y2="100%">
                                                            <stop offset="0%" stop-color="#f5365c" />
                                                            <stop offset="100%" stop-color="#f56036" />
                                                        </linearGradient>
                                                        <path class="grey" d="M30,90 A40,40 0 1,1 80,90"
                                                            fill='none' />
                                                        <path id="blue" fill='none' class="blue"
                                                            d="M30,90 A40,40 0 1,1 80,90"
                                                            style="stroke: url(#gradient2);" />

                                                        <text x="50%" y="60%" dominant-baseline="middle"
                                                            text-anchor="middle"
                                                            style="font-size:18px;font-weight:900;">0%</text>
                                                        <text x="50%" y="90%" dominant-baseline="middle"
                                                            text-anchor="middle" style="font-size:12px;">score</text>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </div>
                            <div class="col-lg-6">
                                <h6 class="w-100">
                                    <div class="bg-gradient-blue m-white"
                                        style="width:20px;height:20px;border-radius:10px;display:inline-block;padding-top:3px;padding-left:6px;">
                                        3</div> <strong class="gradient-blue f-16">Examination Report </strong><span
                                        style="font-size:12px;" class="f-right"></span>
                                </h6>
                                <div class="row m-round m-t-10 m-b-20"
                                    style="padding:5px;background:#fff;margin-left:5px;padding-top:15px;box-shadow:0px 0px 1px 0px gray;">
                                    <div class="col-12">
                                        <div class="barWrapper m-t-20">
                                            <div class="progress text-right m-round" style="height:8px;">
                                                <div class="progress-bar bg-m-dblue" role="progressbar"
                                                    aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"
                                                    style="border-top-left-radius:10px;border-bottom-left-radius:10px;">
                                                    <span class="popOver f-right tiptool" data-toggle="tooltip"
                                                        data-placement="top" title="67%"> </span>
                                                </div>
                                            </div>
                                            <span class="progressText f-12 m-gray" style=""><B>First terminal</B>
                                                <font style="float:right;"><strong class="m-dblue">200</strong>/300</font>
                                            </span>
                                        </div>

                                    </div>
                                    <div class="col-12" style="margin-top:0px;margin-bottom:0px;padding-bottom:0px;">
                                        <div class="row" style="padding-left:4px;padding-right:4px;">
                                            <div class="col-4" style="padding:4px;padding-top:20px;">
                                                <div class="bg-m-dblue" style="border-radius:6px;">
                                                    <div class="m-white"
                                                        style="padding:8px;padding-left:10px;padding-right:10px;">
                                                        <h6 class="f-12"style="margin-bottom:0px;">OBTAINED</h6>
                                                        <h3 class="f-16 m-t-0 m-b-0" style="line-height:20px;">
                                                            <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                                                            <lord-icon src="https://cdn.lordicon.com/zmkotitn.json"
                                                                trigger="loop" delay="2300" colors="primary:#ffffff"
                                                                style="width:20px;height:20px;display:inline-block;">
                                                            </lord-icon>
                                                            <span style="display:inline-block;float:right;">200</span>
                                                        </h3>
                                                        <p class="m-b-0 m-t-0" style="font-size:9px;">IN ALL EXAMS</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4" style="padding:4px;padding-top:20px;">
                                                <div class="bg-m-gray" style="border-radius:6px;">
                                                    <div class="m-white"
                                                        style="padding:8px;padding-left:10px;padding-right:10px;">
                                                        <h6 class="f-12"style="margin-bottom:0px;">TOTAL</h6>
                                                        <h3 class="f-16 m-t-0 m-b-0" style="line-height:20px;">
                                                            <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                                                            <lord-icon src="https://cdn.lordicon.com/zmkotitn.json"
                                                                trigger="loop" delay="2400" colors="primary:#ffffff"
                                                                style="width:20px;height:20px;display:inline-block;">
                                                            </lord-icon>
                                                            <span style="display:inline-block;float:right;">300</span>
                                                        </h3>
                                                        <p class="m-b-0 m-t-0" style="font-size:9px;">IN ALL EXAMS</span>
                                                        </p>
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
                                                    <style>
                                                        .dots3::after {
                                                            background-color: #5e81f4;
                                                        }
                                                    </style>
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
                                <h6 class="w-100">
                                    <div class="bg-gradient-blue m-white"
                                        style="width:20px;height:20px;border-radius:10px;display:inline-block;padding-top:2px;padding-left:5px;">
                                        4</div> <strong class="gradient-blue f-16">Fee Report </strong><span
                                        style="font-size:12px;" class="f-right"></span>
                                </h6>
                                <div class="row m-t-10 m-round"
                                    style="padding:5px;background:#fff;margin-left:5px;box-shadow:0px 0px 1px 0px gray;">
                                    <div class="col-12 p-0">
                                        <div class="row p-10 p-t-20 p-b-20 showfd"
                                            style="background:#fff;margin:15px;border-bottom:4px solid #f6f7fb;">
                                            <div class="col-2 p-0">
                                                <i class="fa fa-money f-14 bg-m-dblue m-white"
                                                    style="border-radius:50%;padding:5px;"></i>
                                            </div>
                                            <div class="col-8 p-0 p-r-10">
                                                <strong class="m-dblue f-20 m-b-10"
                                                    style="font-weight:900;line-height:20px;"><span
                                                        id="symbol">$</span> 10,650 <span
                                                        class="bg-gradient-green m-white badge f-right f-10 m-r-10"
                                                        style="padding:5px;"><i class="fa fa-check"></i> PAID</span>
                                                </strong><br>
                                                <span class="f-12 m-dblue" style="line-height:12px;"> Fees of <b>
                                                        March, 2025 </b>
                                                </span>
                                            </div>
                                            <div class="col-2 p-0 text-center">
                                                <span id="showfi" class="m-blue1 f-10">
                                                    <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
                                                    <lord-icon src="https://cdn.lordicon.com/rxufjlal.json" trigger="loop"
                                                        delay="3000" colors="primary:#e7e7e8" state="intro"
                                                        style="width:35px;height:35px">
                                                    </lord-icon>
                                                </span>
                                                <span id="hidefi" class="m-gray">
                                                    <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
                                                    <lord-icon src="https://cdn.lordicon.com/xsdtfyne.json" trigger="loop"
                                                        delay="2000" colors="primary:#e7e7e8"
                                                        style="width:35px;height:35px">
                                                    </lord-icon>
                                                </span>
                                            </div>
                                            <div class="col-12 m-dblue p-t-10 p-0 f-10" id="fd"
                                                style="border-top:1px solid #4d4cac;line-height:12px;">
                                                <span class="p-l-10">Submission Date<strong class="f-right m-r-10">05
                                                        March, 2025</strong></span><br>
                                                <span class="p-l-10">Total Amount<strong class="f-right m-r-10"><span
                                                            id="symbol">$</span> 10650</strong></span><br>
                                                <span class="p-l-10">Paid Amount<strong class="f-right m-r-10"><span
                                                            id="symbol">$</span> 10650</strong></span>
                                                <hr class="m-0 p-0"
                                                    style="border:none;background-color:#4d4cac;height:1px;margin-top:5px !important;margin-bottom:5px !important;">
                                                <span class="p-l-10">Remaining Balance<strong class="f-right m-r-10"><span
                                                            id="symbol">$</span> 0</strong></span>
                                            </div>
                                        </div>
                                        <div class="row p-10 p-t-20 p-b-20 showfd"
                                            style="background:#fff;margin:15px;border-bottom:4px solid #f6f7fb;">
                                            <div class="col-2 p-0">
                                                <i class="fa fa-money f-14 bg-m-dblue m-white"
                                                    style="border-radius:50%;padding:5px;"></i>
                                            </div>
                                            <div class="col-8 p-0 p-r-10">
                                                <strong class="m-dblue f-20 m-b-10"
                                                    style="font-weight:900;line-height:20px;"><span
                                                        id="symbol">$</span> 20,300 <span
                                                        class="bg-c-yellow m-white badge f-10 f-right m-r-10"
                                                        style="padding:5px;">PARTIALLY PAID</span>
                                                </strong><br>
                                                <span class="f-12 m-dblue" style="line-height:12px;"> Fees of <b>
                                                        February, 2025 </b>
                                                </span>
                                            </div>
                                            <div class="col-2 p-0 text-center">
                                                <span id="showfi" class="m-blue1 f-10">
                                                    <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
                                                    <lord-icon src="https://cdn.lordicon.com/rxufjlal.json" trigger="loop"
                                                        delay="3000" colors="primary:#e7e7e8" state="intro"
                                                        style="width:35px;height:35px">
                                                    </lord-icon>
                                                </span>
                                                <span id="hidefi" class="m-gray">
                                                    <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
                                                    <lord-icon src="https://cdn.lordicon.com/xsdtfyne.json" trigger="loop"
                                                        delay="2000" colors="primary:#e7e7e8"
                                                        style="width:35px;height:35px">
                                                    </lord-icon>
                                                </span>
                                            </div>
                                            <div class="col-12 m-dblue p-t-10 p-0 f-10" id="fd"
                                                style="border-top:1px solid #4d4cac;line-height:12px;">
                                                <span class="p-l-10">Submission Date<strong class="f-right m-r-10">12
                                                        February, 2025</strong></span><br>
                                                <span class="p-l-10">Total Amount<strong class="f-right m-r-10"><span
                                                            id="symbol">$</span> 20300</strong></span><br>
                                                <span class="p-l-10">Paid Amount<strong class="f-right m-r-10"><span
                                                            id="symbol">$</span> 1000</strong></span>
                                                <hr class="m-0 p-0"
                                                    style="border:none;background-color:#4d4cac;height:1px;margin-top:5px !important;margin-bottom:5px !important;">
                                                <span class="p-l-10">Remaining Balance<strong class="f-right m-r-10"><span
                                                            id="symbol">$</span> 19300</strong></span>
                                            </div>
                                        </div>
                                        <div class="row p-10 p-t-20 p-b-20 showfd"
                                            style="background:#fff;margin:15px;border-bottom:4px solid #f6f7fb;">
                                            <div class="col-2 p-0">
                                                <i class="fa fa-money f-14 bg-m-dblue m-white"
                                                    style="border-radius:50%;padding:5px;"></i>
                                            </div>
                                            <div class="col-8 p-0 p-r-10">
                                                <strong class="m-dblue f-20 m-b-10"
                                                    style="font-weight:900;line-height:20px;"><span
                                                        id="symbol">$</span> 10,650 <span
                                                        class="bg-c-yellow m-white badge f-10 f-right m-r-10"
                                                        style="padding:5px;">PARTIALLY PAID</span>
                                                </strong><br>
                                                <span class="f-12 m-dblue" style="line-height:12px;"> Fees of <b>
                                                        January, 0007 </b>
                                                </span>
                                            </div>
                                            <div class="col-2 p-0 text-center">
                                                <span id="showfi" class="m-blue1 f-10">
                                                    <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
                                                    <lord-icon src="https://cdn.lordicon.com/rxufjlal.json" trigger="loop"
                                                        delay="3000" colors="primary:#e7e7e8" state="intro"
                                                        style="width:35px;height:35px">
                                                    </lord-icon>
                                                </span>
                                                <span id="hidefi" class="m-gray">
                                                    <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
                                                    <lord-icon src="https://cdn.lordicon.com/xsdtfyne.json" trigger="loop"
                                                        delay="2000" colors="primary:#e7e7e8"
                                                        style="width:35px;height:35px">
                                                    </lord-icon>
                                                </span>
                                            </div>
                                            <div class="col-12 m-dblue p-t-10 p-0 f-10" id="fd"
                                                style="border-top:1px solid #4d4cac;line-height:12px;">
                                                <span class="p-l-10">Submission Date<strong class="f-right m-r-10">07
                                                        January, 2025</strong></span><br>
                                                <span class="p-l-10">Total Amount<strong class="f-right m-r-10"><span
                                                            id="symbol">$</span> 10650</strong></span><br>
                                                <span class="p-l-10">Paid Amount<strong class="f-right m-r-10"><span
                                                            id="symbol">$</span> 1000</strong></span>
                                                <hr class="m-0 p-0"
                                                    style="border:none;background-color:#4d4cac;height:1px;margin-top:5px !important;margin-bottom:5px !important;">
                                                <span class="p-l-10">Remaining Balance<strong class="f-right m-r-10"><span
                                                            id="symbol">$</span> 9650</strong></span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <script>
                    $(document).ready(function() {
                        $('#showpi').click(function() {
                            $("#showpi").toggle();
                            $(".hidepi").toggle();
                            $("#pi").toggle('slow');
                        });
                        $('.hidepi').click(function() {
                            $(".hidepi").toggle();
                            $("#showpi").toggle();
                            $("#pi").toggle('slow');
                        });
                    });

                    $(".showfd").on('click', function() {
                        $(this).find("#fd").toggle('slow');
                        $(this).find("#showfi").toggle();
                        $(this).find("#hidefi").toggle();
                    });
                </script>
            </div>
            <!-- Page-body end -->
        </div>
    </div>
    
@endsection
