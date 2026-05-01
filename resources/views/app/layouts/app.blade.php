<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->

<head>
    <title>@yield('title','404')</title>

        
    <!-- [Meta] -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- [Favicon] icon -->
    <link rel="icon" href="{{ asset('squo/images/favicon.svg') }}" type="image/x-icon"> <!-- [Google Font] Family -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap" id="main-font-link">
    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="{{ asset('squo/fonts/tabler-icons.min.css') }}" >
    <!-- [Feather Icons] https://feathericons.com -->
    <link rel="stylesheet" href="{{asset('squo/fonts/feather.css')}}" >
    <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
    <link rel="stylesheet" href="{{ asset('squo/fonts/fontawesome.css')}}" >
    <!-- [Material Icons] https://fonts.google.com/icons -->
    <link rel="stylesheet" href="{{ asset('squo/fonts/material.css')}}" >
    <!-- [Template CSS Files] -->
    <link rel="stylesheet" href="{{ asset('squo/css/style.css')}}" id="main-style-link" >
    <link rel="stylesheet" href="{{ asset('squo/css/style-preset.css')}}" >
    
    @yield('css')

</head>
<!-- [Head] end -->

<!-- [Body] Start -->
<body data-pc-preset="preset-1" data-pc-direction="ltr" data-pc-theme="light">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->

    <!-- [ Sidebar Menu ] -->
    @include('app.layouts.sidebar')

    <!-- [ Header Topbar ] start -->
    @include('app.layouts.header_topbar')

    <div class="pc-container">
        <div class="pc-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('appIndex') }}">Home</a></li>
                                @yield('breadcrumbs')
                                <li class="breadcrumb-item" aria-current="page">@yield('title','404')</li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="mb-0">@yield('title','404')</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] -->
            @yield('content')
        </div>
    </div>
  
    <footer class="pc-footer">
        <div class="footer-wrapper container-fluid">
            <div class="row">
                <div class="col-auto my-1">
                    <ul class="list-inline footer-link mb-0">
                        <li class="list-inline-item"><a href="{{ route('appIndex') }}">Home</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- [Page Specific JS] start -->
    <script src="{{ asset('squo/js/plugins/apexcharts.min.js')}}"></script>
    <script src="{{ asset('squo/js/pages/dashboard-default.js')}}"></script>
    <!-- [Page Specific JS] end -->
    <!-- Required Js -->
    <script src="{{ asset('squo/js/plugins/popper.min.js')}}"></script>
    <script src="{{ asset('squo/js/plugins/simplebar.min.js')}}"></script>
    <script src="{{ asset('squo/js/plugins/bootstrap.min.js')}}"></script>
    <script src="{{ asset('squo/js/fonts/custom-font.js')}}"></script>
    <script src="{{ asset('squo/js/fonts/custom-ant-icon.js')}}"></script>
    <script src="{{ asset('squo/js/pcoded.js')}}"></script>
    <script src="{{ asset('squo/js/plugins/feather.min.js')}}"></script>
        
    <script>
    layout_change('light');
    </script>
        
    <script>
    change_box_container('false');
    </script>

    <script>
    layout_rtl_change('false');
    </script>

    <script>
    preset_change('preset-1');
    </script>

    <script>
    font_change('Public-Sans');
    </script>
  
    @yield('script')
</body>
<!-- [Body] end -->

</html>