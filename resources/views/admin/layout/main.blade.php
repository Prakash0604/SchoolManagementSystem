<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.layout.header')
</head>

<body>

    <body>
        <div class="theme-loader">
            <div class="loader-track">
                <div class="loader-bar"></div>
            </div>
        </div>
        <!-- Pre-loader end -->
        <div id="pcoded" class="pcoded">
            <div class="pcoded-overlay-box"></div>
            <div class="pcoded-container navbar-wrapper">

                <!--- header nav here--->
                @include('admin.layout.header-nav')

                <script type="text/javascript">
                    var theme = ["0", "0", "0", "0", "left", "left", "theme6", "theme6", "themelight1", "themelight1", "theme7",
                        "theme7", "en", "en"
                    ];
                </script>
                <!---language starting--->


                <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
                </script>
                <!---language ends here--->
                <div class="pcoded-main-container">
                    <div class="pcoded-wrapper">
                        <!--- sidebar nav here ---->
                        @include('admin.layout.sidebar')

                        <div class="pcoded-content">
                            <div class="pcoded-inner-content">
                                <div class="main-body">
                                    @yield('content')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @include('admin.layout.footer-js')

    </body>


</html>
