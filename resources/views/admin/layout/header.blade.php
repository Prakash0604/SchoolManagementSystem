<!-- Global site tag (gtag.js) - Google Analytics -->
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-132063111-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-132063111-1');
</script>
<!--end analytics here--->
<title> EduTrack - {{ $title ?? 'Dashboard' }}</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="EduTrack.">
<!-- Favicon icon -->
@if ($institute && $institute->logo!=null)
<link rel="icon" href="{{ asset('storage/'. $institute->logo) }}" type="image/x-png">
@else
<link rel="icon" href="{{ asset('default/defaultlogo.png') }}" type="image/x-png">
@endif
<!------fa--------->
<link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/fontawesome/css/brands.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/fontawesome/css/solid.css') }}" />
{{-- <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/sharp-thin.css') }}" />
        	<link rel="stylesheet" href="{{ asset('assets/fontawesome/css/duotone-thin.css') }}" />
        	<link rel="stylesheet" href="{{ asset('assets/fontawesome/css/sharp-duotone-thin.css') }}" /> --}}

<!-- Google font-->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
<!-- Required Fremwork -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap/css/bootstrap.min.css') }}">
<!-- themify-icons line icon -->
{{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/themify-icons/themify-icons.css') }}"> --}}
{{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/font-awesome/css/font-awesome.min.css') }}"> --}}
<!-- ico font -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/icofont/css/icofont.css') }}">
<!-- Style.css -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.mCustomScrollbar.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/calendar/javascript-calendar.css') }}">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


@isset($extraCs)
    @foreach ($extraCs as $css)
        {{-- <script src="{{ asset($cs) }}?v=0.3.1"></script> --}}
        <link rel="stylesheet" href="{{ $css }}?v=0.3.1">
    @endforeach
@endisset
<style>
    @media (max-width: 720px) {
        #topmessage {
            display: none;
        }
    }

    .m-div {
        padding: 5px;
        border-radius: 25px !important;
        margin-top: 20px;
    }

    .m-field {
        border-radius: 25px !important;
    }

    .selectize-input,
    .selectize-input:focus {
        border-radius: 25px !important;
        margin-top: 4px;
        border: none !important;
        box-shadow: none !important;
        outline: none !important;
    }

    .m-label {
        margin-top: -14px;
        border: 1px solid #999;
        border-radius: 12px;
        font-size: 10px;
        padding-left: 10px;
        padding-right: 10px;
        margin-left: 10px;
    }

    .hide_field {
        display: none;
    }

    .text-blue {
        color: #3144de;
    }
</style>
