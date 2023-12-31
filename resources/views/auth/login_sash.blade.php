<?php
$page_attr = (object) [
    'title' => isset($page_attr['title']) ? $page_attr['title'] : '',
    'description' => isset($page_attr['description']) ? $page_attr['description'] : settings()->get(set_admin('meta.description')),
    'keywords' => isset($page_attr['keywords']) ? $page_attr['keywords'] : settings()->get(set_admin('meta.keyword')),
    'author' => isset($page_attr['author']) ? $page_attr['author'] : settings()->get(set_admin('meta.author')),
    'image' => isset($page_attr['image']) ? $page_attr['image'] : asset(settings()->get(set_admin('meta.image'))),
    'navigation' => isset($page_attr['navigation']) ? $page_attr['navigation'] : false,
    'loader' => isset($page_attr['loader']) ? $page_attr['loader'] : settings()->get(set_admin('app.preloader')),
    'breadcrumbs' => isset($page_attr['breadcrumbs']) ? (is_array($page_attr['breadcrumbs']) ? $page_attr['breadcrumbs'] : false) : false,
];
$page_attr_title = ($page_attr->title == '' ? '' : $page_attr->title . ' | ') . settings()->get(set_admin('app.title'), env('APP_NAME'));
?>
<!doctype html>
<html lang="en" dir="ltr">

<head>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('favicon/favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicon/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#fff">
    <meta name="theme-color" content="#0191D7">
    <meta name="msapplication-TileImage" content="{{ asset('favicon/icon-144x144.png') }}">

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- SEO -->
    <!-- Primary Meta Tags -->
    <title>{{ $page_attr_title }}</title>
    <meta name="description" content="{{ $page_attr->description }}">
    <meta name="author" content="{{ $page_attr->author }}">
    <meta name="keywords" content="{{ $page_attr->keywords }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:url" content="{{ url('') }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $page_attr_title }}">
    <meta property="og:description" content="{{ $page_attr->description }}">
    <meta property="og:image" content="{{ $page_attr->image }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url('') }}">
    <meta name="twitter:title" content="{{ $page_attr_title }}">
    <meta name="twitter:description" content="{{ $page_attr->description }}">
    <meta name="twitter:image" content="{{ $page_attr->image }}">

    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="{{ $page_attr_title }}">
    <meta itemprop="description" content="{{ $page_attr->description }}">
    <meta itemprop="image" content="{{ $page_attr->image }}">

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{ asset_admin('plugins/bootstrap/css/bootstrap.min.css', name: 'sash') }}"
        rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="{{ asset_admin('css/style.css', name: 'sash') }}" rel="stylesheet" />
    <link href="{{ asset_admin('css/dark-style.css', name: 'sash') }}" rel="stylesheet" />

    <link href="{{ asset_admin('css/skin-modes.css', name: 'sash') }}" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="{{ asset_admin('css/icons.css', name: 'sash') }}" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all"
        href="{{ asset_admin('colors/color1.css', name: 'sash') }}" />

    <link rel="stylesheet" href="{{ asset_admin('plugins/sweet-alert/sweetalert2.css', name: 'sash') }}">

    <link rel="stylesheet"
        href="{{ asset_admin('plugins/fontawesome-free-5.15.4-web/css/all.min.css', name: 'sash') }}">
    @foreach (json_decode(settings()->get(set_admin('meta_list'), '{}')) as $meta)
        <!-- custom {{ $meta->name }} -->
        {!! $meta->value !!}
    @endforeach

    <style>
        .loader-img {
            position: absolute;
            right: 0;
            bottom: 0;
            top: 43%;
            left: 0;
            margin: 0 auto;
            text-align: center;
            height: 150px;
        }

        #global-loader {
            position: fixed;
            z-index: 50000;
            background: #fff;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            height: 100%;
            width: 100%;
            margin: 0 auto;
            text-align: center
        }
    </style>
</head>

<body class="app sidebar-mini ltr dark-mode">

    <!-- BACKGROUND-IMAGE -->
    <div class="login-img">

        @if ($page_attr->loader)
            <!-- GLOBAL-LOADER -->
            <div id="global-loader" style="background-color: #1a1a3c">
                <img src="{{ asset(settings()->get(set_admin('app.foto_light_mode'))) }}" class="loader-img"
                    alt="Loader">
            </div>
            <!-- /GLOBAL-LOADER -->
        @endif

        <!-- PAGE -->
        <div class="page" style="position: absolute; width: 100%; height: 100vh;">
            <div class="">
                <div class="container-login100">
                    <div class="wrap-login100 p-6" style="border-radius: 24px; box-shadow: none">
                        <div class="text-center">
                            <img style="max-height: 100px;"
                                src="{{ asset(settings()->get(set_admin('app.foto_light_landscape_mode'))) }}"
                                class="header-brand-img" alt="Logo" id="logo">
                        </div>
                        <div class="panel panel-primary mt-3">
                            <div class="panel-body tabs-menu-body p-0">
                                <div class="tab-content">
                                    <form action="javascript:void(0)" id="Loginform" name="Loginform" method="POST"
                                        enctype="multipart/form-data" autocomplete="false">
                                        <div class="wrap-input100 validate-input input-group"
                                            data-bs-validate="Valid email is required: ex@abc.xyz">
                                            <a href="javascript:void(0)" class="input-group-text bg-white text-muted"
                                                style="border-radius: 24px 0 0 24px;">
                                                <i class="zmdi zmdi-email text-muted ms-1" aria-hidden="true"></i>
                                            </a>
                                            <input class="input100 border-start-0 form-control ms-0 bg-white"
                                                type="email" placeholder="Email" id="email" required=""
                                                name="email" style="border-radius: 0 24px 24px 0;">
                                        </div>
                                        <div class="text-end">
                                            <a href="{{ url('forgot-password') }}" class="text-primary">
                                                Lupa Password
                                            </a>
                                        </div>
                                        <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                            <a href="javascript:void(0)" class="input-group-text bg-white text-muted"
                                                style="border-radius: 24px 0 0 24px;">
                                                <i class="zmdi zmdi-eye text-muted ms-1" aria-hidden="true"></i>
                                            </a>
                                            <input class="input100 border-start-0 form-control ms-0 bg-white"
                                                type="password" placeholder="Password" id="password" required=""
                                                name="password" style="border-radius: 0 24px 24px 0;">
                                        </div>
                                        <div class="container-login100-form-btn">
                                            <button type="submit" class="login100-form-btn btn-primary p-0"
                                                style="border: 0; border-radius: 24px">
                                                Masuk
                                            </button>

                                            {{-- <a href="{{ url('auth/google') }}"
                                                class="login100-form-btn btn-danger mt-2 p-0"
                                                style="border: 0; border-radius: 24px">
                                                <i class="fab fa-google me-2"></i> | Masuk Dengan Google
                                            </a> --}}
                                            {{-- <div class="text-center pt-4">
                                                <p class="mb-0">
                                                    <a href="{{ url('/') }}" class="text-primary ms-1"> Kembali
                                                    </a>
                                                </p>
                                            </div> --}}
                                        </div>
                                        {{-- <label class="login-social-icon"><span>Masuk Dengan Media Sosial</span></label>
                                        <div class="d-flex justify-content-center">
                                            <a href="javascript:void(0)">
                                                <div class="social-login me-4 text-center">
                                                    <i class="fab fa-google"></i>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)">
                                                <div class="social-login me-4 text-center">
                                                    <i class="fab fa-facebook"></i>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)">
                                                <div class="social-login text-center">
                                                    <i class="fab fa-twitter"></i>
                                                </div>
                                            </a>
                                        </div> --}}
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- CONTAINER CLOSED -->
                <div class="col col-login mx-auto">
                    <div class="text-center d-md-flex  justify-content-center"> {!! str_parse(settings()->get(set_admin('app.copyright'))) !!}</div>
                </div>
            </div>
        </div>

        <div id="particles-js" style="height: 100vh"> </div>
        <!-- End PAGE -->
    </div>
    <!-- BACKGROUND-IMAGE CLOSED -->

    <!-- JQUERY JS -->
    <script src="{{ asset_admin('js/jquery.min.js', name: 'sash') }}"></script>

    <!-- BOOTSTRAP JS -->
    <script src="{{ asset_admin('plugins/bootstrap/js/popper.min.js', name: 'sash') }}"></script>
    <script src="{{ asset_admin('plugins/bootstrap/js/bootstrap.min.js', name: 'sash') }}"></script>

    <!-- SHOW PASSWORD JS -->
    <script src="{{ asset_admin('js/show-password.min.js', name: 'sash') }}"></script>

    <!-- Color Theme js -->
    <script src="{{ asset_admin('js/themeColors.js', name: 'sash') }}"></script>

    <!-- CUSTOM JS -->
    <script src="{{ asset_admin('js/custom.js', name: 'sash') }}"></script>

    <script src="{{ asset_admin('plugins/sweet-alert/sweetalert2.all.js', name: 'sash') }}"></script>

    <script src="{{ asset_admin('plugins/particle/particles.js', name: 'sash') }}"></script>

    <script src="{{ asset_admin('plugins/fontawesome-free-5.15.4-web/js/all.min.js', name: 'sash') }}"></script>

    <script>
        {{-- if (localStorage.getItem('lightMode') || localStorage.getItem('darkMode') == null) {
            $('#logo').attr('src', "{{ asset(settings()->get(set_admin('app.foto_light_landscape_mode'))) }}");
        } --}}

        // auto darkmode
        $(window).on("load", function(e) {
            if (!(document.querySelector('body').classList.contains('dark-mode'))) {
                $('body').addClass('dark-mode');
            }
        })
    </script>

    <script src="{{ resource_loader('pages/admin/auth/login_sash.js', params: ['redirect' => $redirect]) }}"></script>

</body>

</html>
