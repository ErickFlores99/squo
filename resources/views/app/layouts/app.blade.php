<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>@yield('title','404')</title>

        @yield('css')
    </head>
    <body class="horizontal-menu">
        <div class="container-scroller">
            <div class="container-fluid page-body-wrapper">
                <div class="main-panel">
                    <div class="content-wrapper">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">@yield('title')</h4>
                                <h4 class="card-title">@yield('navegacion')</h4>
                                <div class="row">
                                    @yield('content')
                                </div>
                            </div>
                        </div>
                    </div>
                    <footer></footer>
                </div>
            </div>
        </div>

        @yield('script')
    </body>
</html>
