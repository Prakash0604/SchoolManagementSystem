<!-- Required Jquery -->
<script type="text/javascript" src="{{ asset('assets/js/jquery/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery-ui/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/popper.js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="{{ asset('assets/js/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
<!-- modernizr js -->
<script type="text/javascript" src="{{ asset('assets/js/modernizr/modernizr.js') }}"></script>
<!-- am chart -->
<script src="{{ asset('assets/pages/widget/amchart/amcharts.min.js') }}"></script>
<script src="{{ asset('assets/pages/widget/amchart/serial.min.js') }}"></script>
<!-- Chart js -->
<script type="text/javascript" src="{{ asset('assets/js/chart.js/Chart.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/mdb.js') }}"></script>
<!-- Todo js -->
<script type="text/javascript " src="{{ asset('assets/pages/todo/todo.js') }} "></script>
<!-- Custom js -->
{{-- <script type="text/javascript" src="{{ asset('assets/pages/dashboard/custom-dashboard.min.js') }}"></script> --}}
<script type="text/javascript" src="{{ asset('assets/js/script.js') }}"></script>
<script type="text/javascript " src="{{ asset('assets/js/SmoothScroll.js') }}"></script>
<script src="{{ asset('assets/js/pcoded.min.js') }}"></script>
<script src="{{ asset('assets/js/vartical-demo.js') }}"></script>
<script src="{{ asset('assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script src="{{ asset('assets/calendar/javascript-calendar.js') }}"></script>

@isset($extraJs)
    @foreach ($extraJs as $js)
        <script src="{{ $js }}"></script>
    @endforeach
@endisset


@php
    $path = Request::path();
    $dir_path = public_path() . '/js/' . $path;
    if (is_dir($dir_path)) {
        $directory = new DirectoryIterator($dir_path);
        // Loop runs while directory is valid
        while ($directory->valid()) {
            if (!$directory->isDir()) {
                $filename = url('js/' . $path . '/' . $directory->getFilename());
                echo '<script src="' . $filename . '?v=0.3.1"></script>';
            }
            // Move to the next element
            $directory->next();
            // dd($directory->next());
        }
    }
@endphp
