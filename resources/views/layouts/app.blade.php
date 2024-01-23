<!doctype html>

<!--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" {{ $app = App\Models\general_settings::latest()->first() }}>-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
<title>WASTE TO WEALTH</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Metas -->
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{ $app ? config('app.url') . 'storage/' . $app->favicon_path : config("app.url").'images/fevicon.ico.png'}} " type="image/x-icon" />

    <link rel="apple-touch-icon"
        href="{{ $app ? config('app.url') . 'storage/' . $app->favicon_path :  config("app.url").'images/favicon.png' }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ config('app.url') }}css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{  config('app.url') }}css/style.css">
    <!-- Colors CSS -->
    <link rel="stylesheet" href="{{  config('app.url') }}css/colors.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="{{  config('app.url') }}css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{  config('app.url') }}css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{  config('app.url') }}css/custom.css">
    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>
    <!-- [if lt IE 9] -->
    @livewireStyles
    @livewireScripts
</head>

<body class="clinic_version">

        <div class="header-bottom wow fadeIn" style="background:#2A1F3F;">
            <div class="container-fluid">
                <nav class="main-menu">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i class="fa fa-bars"
                                aria-hidden="true"></i></button>
                    </div>

                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li onclick="check_active('Home')"><a id="Home" href="{{ url('/') }}">Home</a></li>
                            
                            <li onclick="check_active('About')"><a id="About" data-scroll
                                    href="{{ url('/about') }}">About us</a></li>
                              <li onclick="check_active('Contact')"><a id="Contact" data-scroll
                                    href="{{ url('contact') }}">Market</a></li>
                                    <li onclick="check_active('pay')"><a id="Contact" data-scroll
                                    href="{{ url('pay') }}">Pay</a></li>

                                    <li onclick="check_active('Contact')"><a id="Contact" data-scroll
                                    href="{{ url('contact') }}">Contact</a></li>
                                    <li onclick="check_active('log_in')"><a id="Contact" data-scroll
                                    href="{{ url('log_in') }}">Log in</a></li>
                            @auth
                                @if (auth()->user()->is_super_admin)
                                    <li onclick="check_active('admin-area')"><a id="admin-area" data-scroll
                                            href="{{ route('admin_settings') }}">Admin Area</a></li>
                                @endif
                            @endauth
                        </ul>
                    </div>
                </nav>
                @livewire('search')
            </div>
        </div>
    </header>
    <main id="main">
        @yield('content')
    </main>
    <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
    <footer id="footer" class="footer-area wow fadeIn" >
                <div class="col-md-4">
                    <div class="footer-info padding">
                        <h3>CONTACT US</h3>
                        <p><i class="fa fa-map-marker"
                                aria-hidden="true"></i>{{ $app ? $app->address : 'Kigali. Rwanda' }}
                        </p>
                        <p><i class="fa fa-paper-plane"
                                aria-hidden="true"></i>{{ $app ? $app->business_email : 'waste2wealth.com' }}
                        </p>
                        <p><i class="fa fa-phone"
                                aria-hidden="true"></i>{{ $app ? $app->business_phone : '0788855442' }}</p>
                    </div>
                </div>
                @livewire('subscribe')
            </div>
        </div>
    </footer>
    <div class="copyright-area wow fadeIn" style="background:#2A1F3F;">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="footer-text">
                        <p>© {{ date('Y') }} <a id="tw" href="{{ url('') }}"
                                target="_blank">{{' Waste2Wealth' }}</a></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="social">
                        <ul class="social-links">
                    <li><a href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-gmail"></i></a></li>
                            <li><a href=""><i class="fa fa-instagram"></i></a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <script src="js/all.js"></script> --}}
    <script src="{{ asset('js/all-in-one.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script>
        function check_active(d) {
            document.getElementById(d).addAttribute('class', 'active');
        }

    </script>
</body>

</html>
