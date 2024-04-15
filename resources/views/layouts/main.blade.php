<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="Charts Panel for advisors.">
    <meta name="msapplication-tap-highlight" content="no">

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <title>@yield('title', 'Charts Panel')</title>

    @yield('head')
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header closed-sidebar"
        id="servicewrapper">
        <div class="app-main">
            <progress id="main-progress-bar" class="pure-material-progress-linear"
                style="position:fixed; left:0; z-index:100; width:100%; display:none;"></progress>
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="app-page-title">
                        @yield('main')
                    </div>
                </div>
            </div>
        </div>
    </div>
    @yield('scripts')
</body>

</html>
