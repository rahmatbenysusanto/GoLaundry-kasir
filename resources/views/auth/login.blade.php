
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>Login | GoLaundry Kasir</title>
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


<section class="auth-page-wrapper py-5 position-relative d-flex align-items-center justify-content-center min-vh-100 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row g-0">
                            <div class="col-lg-5">
                                <div class="card auth-card bg-primary h-100 border-0 shadow-none p-sm-3 overflow-hidden mb-0">
                                    <div class="card-body p-4 d-flex justify-content-between flex-column">
                                        <div class="auth-image mb-3">
                                            <img src="{{ asset('assets/images/logo-light-full.png') }}" alt="" height="26" />
                                            <img src="{{ asset('assets/images/effect-pattern/auth-effect-2.png') }}" alt="" class="auth-effect-2" />
                                            <img src="{{ asset('assets/images/effect-pattern/auth-effect.png') }}" alt="" class="auth-effect" />
                                            <img src="{{ asset('assets/images/effect-pattern/auth-effect.png') }}" alt="" class="auth-effect-3" />
                                        </div>

                                        <div>
                                            <h3 class="text-white">Mulai usaha laundry anda.</h3>
                                            <p class="text-white-75 fs-15">GoLaundry Kasir merupakan aplikasi kasir laundry terbaik dengan harga terjangkau dan ramah untuk usaha laundry kecil maupun besar</p>
                                        </div>
                                        <div class="text-center text-white-75">
                                            <p class="mb-0">&copy;
                                                <script>document.write(new Date().getFullYear())</script> GoLaundry Kasir.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-7">
                                <div class="card mb-0 border-0 shadow-none">
                                    <div class="card-body px-0 p-sm-5 m-lg-4">
                                        <div class="text-center mt-2">
                                            <h5 class="text-primary fs-20">Selamat Datang !</h5>
                                            <p class="text-muted">Login untuk menggunakan aplikasi GoLaundry kasir.</p>
                                        </div>
                                        <div class="p-2 mt-5">
                                            <form action="{{ route('loginPost') }}" method="POST">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="username" class="form-label">Email / No HP</label>
                                                    <input type="text" class="form-control" id="username" name="username" placeholder="Masukan email atau no hp">
                                                </div>

                                                <div class="mb-3">
                                                    <div class="float-end">
                                                        <a href="{{ route('lupaPassword') }}" class="text-muted">Lupa password?</a>
                                                    </div>
                                                    <label class="form-label" for="password-input">Password</label>
                                                    <div class="position-relative auth-pass-inputgroup mb-3">
                                                        <input type="password" class="form-control pe-5 password-input" name="password" placeholder="Masukan password" id="password-input">
                                                        <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                    </div>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="auth-remember-check">
                                                    <label class="form-check-label" for="auth-remember-check">Ingat saya</label>
                                                </div>

                                                <div class="mt-4">
                                                    <button class="btn btn-primary w-100" type="submit">Login</button>
                                                </div>

                                                <div class="mt-4 pt-2 text-center">
                                                    <div class="signin-other-title">
                                                        <h5 class="fs-13 mb-4 title">Login melalui</h5>
                                                    </div>
                                                    <div class="pt-2 hstack gap-2 justify-content-center">
                                                        <button type="button" class="btn btn-soft-primary btn-icon"><i class="ri-facebook-fill fs-16"></i></button>
                                                        <button type="button" class="btn btn-soft-danger btn-icon"><i class="ri-google-fill fs-16"></i></button>
                                                        <button type="button" class="btn btn-soft-dark btn-icon"><i class="ri-github-fill fs-16"></i></button>
                                                        <button type="button" class="btn btn-soft-info btn-icon"><i class="ri-twitter-fill fs-16"></i></button>
                                                    </div>
                                                </div>
                                            </form>

                                            <div class="text-center mt-5">
                                                <p class="mb-0">Belum punya akun ? <a href="{{ route('register') }}" class="fw-semibold text-secondary text-decoration-underline"> Daftar Sekarang</a> </p>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>

<!-- JAVASCRIPT -->
<script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
<script src="{{ asset('assets/js/plugins.js') }}"></script>

<script src="{{ asset('assets/js/pages/password-addon.init.js') }}"></script>

</body>

</html>
