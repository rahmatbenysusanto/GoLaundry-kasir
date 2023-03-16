<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">
<head>

    <meta charset="utf-8" />
    <title>Coming Soon | Hybrix - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Minimal Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- Layout config Js -->
    <script src="{{ asset('assets/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />

</head>

<body>

<section class="auth-bg-cover min-vh-100 p-4 p-lg-5 d-flex align-items-center justify-content-center">
    <div class="bg-overlay"></div>
    <div class="container-fluid px-0">
        <div class="row g-0 justify-content-center">
            <div class="col-xl-4 col-lg-8">
                <div class="text-center mb-5">
{{--                    <img src="{{ asset('assets/images/logo-light-full.png') }}" alt="" height="32" />--}}
                </div>
                <div class="card mb-0">
                    <div class="card-body p-4 p-sm-4 m-lg-3 text-center">
                        <div class="mb-sm-5 pb-sm-0 pb-5">
                            <img src="{{ asset('assets/images/comingsoon.png') }}" alt="" height="110" class="move-animation">
                        </div>
                        <div class="mb-5">
                            <h1>Coming Soon</h1>
                        </div>
                        <div>
                            <div class="row justify-content-center mt-5">
                                <div class="col-lg-10">
                                    <div data-countdown="May 20, 2023" class="countdownlist"></div>
                                </div>
                            </div>

                            <div class="mt-5">
                                <h4>Get notified when we launch</h4>
                                <p class="text-muted">Don't worry we will not spam you 😊</p>
                            </div>

                            <form action="#!">
                                <div class="countdown-input-subscribe mx-auto my-4">
                                    <input type="email" class="form-control shadow" placeholder="Enter your email address" required />
                                    <button class="btn btn-primary" type="submit" id="button-email">Send<i class="ri-send-plane-2-fill align-bottom ms-2"></i></button>
                                </div>
                            </form>
                        </div>
                    </div><!-- end card body -->
                </div>
                <!-- end card -->
                <div class="text-white text-center mt-5">
                    <p class="mb-0">&copy;
                        <script>document.write(new Date().getFullYear())</script> GoLaundry APP
                    </p>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end conatiner-->
</section>

<!-- JAVASCRIPT -->
<script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
<script src="{{ asset('assets/js/plugins.js') }}"></script>

<!-- Countdown js -->
<script src="{{ asset('assets/js/pages/coming-soon.init.js') }}"></script>

</body>

</html>
