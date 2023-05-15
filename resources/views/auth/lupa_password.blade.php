
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>Lupa Password | GoLaundry Kasir</title>
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
                            <div class="col-lg-7">
                                <div class="card mb-0 border-0 py-3 shadow-none">
                                    <div class="card-body px-0 p-sm-5 m-lg-4">
                                        <div class="text-center mt-2">
                                            <h5 class="text-primary fs-20">Lupa Password?</h5>
                                            <p class="text-muted mb-4">Reset password dengan mudah</p>
                                            <div class="display-5 mb-4 text-danger">
                                                <i class="bi bi-envelope"></i>
                                            </div>
                                        </div>

                                        <div class="alert alert-borderless alert-warning text-center mb-2 mx-2" role="alert">
                                            Masukan email atau no hp selanjutnya kami akan mengirimkan link untuk mereset password anda
                                        </div>
                                        <div class="p-2">
                                            <form>
                                                <div class="mb-4">
                                                    <label class="form-label">Email / No HP</label>
                                                    <input type="email" class="form-control" id="email" placeholder="Masukan email atau no hp" required />
                                                </div>

                                                <div class="text-center mt-4">
                                                    <button class="btn btn-primary w-100" type="submit">Kirim</button>
                                                </div>
                                            </form><!-- end form -->
                                        </div>
                                        <div class="mt-4 text-center">
                                            <p class="mb-0">Tunggu, Saya ingat password saya... <a href="{{ route('login') }}" class="fw-semibold text-primary text-decoration-underline"> Klik disini </a> </p>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!--end col-->
                        </div><!--end row-->
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section>

<!-- JAVASCRIPT -->
<script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
<script src="{{ asset('assets/js/plugins.js') }}"></script>

</body>

</html>
