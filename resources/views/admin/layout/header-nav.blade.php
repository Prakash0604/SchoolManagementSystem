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
            @if ( $institute && $institute->logo!=null)
            <a href="https://eskooly.com">
                <img class="img-fluid m-l-30" id="headerimg" style="max-height:45px;" src="{{ asset('/storage/'.$institute->logo) }}" alt="EduTrack-logo" />
            </a>
            @else
            <a href="https://eskooly.com">
                <img class="img-fluid m-l-30" id="headerimg" style="max-height:45px;" src="{{ asset('default/defaultlogo.png') }}" alt="EduTrack-logo" />
            </a>
            @endif
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
                            <button type="submit" name="dashboard"  class="input-group-addon search-btn1"><i class="fa-solid fa-house"></i></button>
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
                        <img src="{{ asset('assets/images/apple.png') }}" style="width:120px;">
                    </a>

                </li>
                <li class="header-notification">
                    <a href="https://play.google.com/store/apps/details?id=com.eskooly.app">
                        <img src="{{ asset('assets/images/google.png') }}" style="width:120px;">
                    </a>

                </li>
                <li class="header-notification">
                    <a href="marketplace.php" data-toggle="tooltip" title="Marketplace">
                        <img src="{{ asset('assets/marketplace1.png') }}" style="width:35px;">
                    </a>

                </li>
                                           <li class="header-notification">
                    <a href="MessageBox.php">
                     <i class="fa-solid fa-comments"></i>
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
                        @if ($institute && $institute->logo!=null)
                        <img src="{{ asset('/storage/'.$institute->logo) }}" class="img-radius">
                        @else
                        <img src="{{ asset('default/defaultlogo.png') }}" class="img-radius">
                        @endif
                     <i class="ti-angle-down"></i>
                    </a>
                    <ul class="show-notification profile-notification">
                        <li>
                            <a href="account.php">
                             <i class="fa-solid fa-gear"></i> Account Settings
                            </a>
                        </li>
                        <li>
                            <a href="schoolinfo.php">
                                <i class="fa fa-bank"></i> Profile
                            </a>
                        </li>


                        <li>
                            <a href="{{ route('logout') }}">
                             <i class="fa-solid fa-lock"></i>Logout
                        </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
