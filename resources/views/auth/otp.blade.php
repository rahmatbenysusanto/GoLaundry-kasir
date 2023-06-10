<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>
    <meta charset="utf-8" />
    <title>OTP | GoLaundry Kasir</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Minimal Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- Sweet Alert css-->
    <link href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />

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
                                <div class="card auth-card bg-primary h-100 border-0 shadow-none p-sm-3 overflow-hidden">
                                    <div class="card-body p-4 d-flex justify-content-between flex-column">
                                        <div class="auth-image">
                                            <img src="assets/images/logo-light-full.png" alt="" height="26" />
                                            <img src="assets/images/effect-pattern/auth-effect-2.png" alt="" class="auth-effect-2" />
                                            <img src="assets/images/effect-pattern/auth-effect.png" alt="" class="auth-effect" />
                                            <img src="assets/images/effect-pattern/auth-effect.png" alt="" class="auth-effect-3" />
                                        </div>

                                        <div>
                                            <h3 class="text-white">Start your journey with us.</h3>
                                            <p class="text-white-75 fs-15">It brings together your tasks, projects, timelines, files and more</p>
                                        </div>
                                        <div class="text-center text-white-75">
                                            <p class="mb-0">&copy;
                                                <script>document.write(new Date().getFullYear())</script> Hybrix. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-7">
                                <div class="card mb-0 border-0 py-3 shadow-none">
                                    <div class="card-body px-0 p-sm-5 m-lg-4 text-center">
                                        <div class="mb-4">
                                            <lord-icon src="https://cdn.lordicon.com/diihvcfp.json" trigger="loop" class="avatar-md"> </lord-icon>
                                        </div>

                                        <div class="p-2 mt-4">
                                            <div class="text-muted text-center mb-4 mx-lg-3">
                                                <h4>Verify Your Email</h4>
                                                <p>Please enter the 4 digit code sent to <span class="fw-semibold">example@abc.com</span></p>
                                            </div>

                                            <form autocomplete="off" action="{{ route('sendOTP') }}" method="POST" id="submit">
                                                @csrf
                                                <input type="hidden" name="no" value="{{ Session::get('no') }}">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="mb-3">
                                                            <label for="digit1-input" class="visually-hidden">Digit 1</label>
                                                            <input type="number" class="form-control form-control-lg bg-light border-light text-center" name="angka1" onkeyup="moveToNext(1, event)" maxLength="1" id="digit1-input">
                                                        </div>
                                                    </div><!-- end col -->

                                                    <div class="col-3">
                                                        <div class="mb-3">
                                                            <label for="digit2-input" class="visually-hidden">Digit 2</label>
                                                            <input type="number" class="form-control form-control-lg bg-light border-light text-center" name="angka2" onkeyup="moveToNext(2, event)" maxLength="1" id="digit2-input">
                                                        </div>
                                                    </div><!-- end col -->

                                                    <div class="col-3">
                                                        <div class="mb-3">
                                                            <label for="digit3-input" class="visually-hidden">Digit 3</label>
                                                            <input type="number" class="form-control form-control-lg bg-light border-light text-center" name="angka3" onkeyup="moveToNext(3, event)" maxLength="1" id="digit3-input">
                                                        </div>
                                                    </div><!-- end col -->

                                                    <div class="col-3">
                                                        <div class="mb-3">
                                                            <label for="digit4-input" class="visually-hidden">Digit 4</label>
                                                            <input type="number" class="form-control form-control-lg bg-light border-light text-center" name="angka4" onkeyup="moveToNext(4, event)" maxLength="1" id="digit4-input">
                                                        </div>
                                                    </div><!-- end col -->
                                                </div>
                                            </form><!-- end form -->

                                            <div class="mt-3">
                                                <button type="button" class="btn btn-primary w-100" onclick="submitOTP()">Confirm</button>
                                            </div>
                                        </div>
                                        <div class="mt-4 text-center">
                                            <p class="mb-0">Didn't receive a code ? <a href="auth-pass-reset-basic.html" class="fw-semibold text-primary text-decoration-underline">Resend</a> </p>
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

{{--@if(Session::get('otp') != true)--}}
{{--    <script>--}}
{{--        window.location.href = "/login";--}}
{{--    </script>--}}
{{--@endif--}}

<!-- JAVASCRIPT -->
<script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
<script src="{{ asset('assets/js/plugins.js') }}"></script>

<script src="{{ asset('assets/js/pages/password-addon.init.js') }}"></script>
<script src="{{ asset('assets/js/pages/two-step-verification.init.js') }}"></script>

<!-- Sweet Alerts js -->
<script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>

<!-- Sweet alert init js-->
<script src="{{ asset('assets/js/pages/sweetalerts.init.js') }}"></script>


<script>
    function submitOTP() {
        let angka1 = document.getElementById('digit1-input').value;
        let angka2 = document.getElementById('digit2-input').value;
        let angka3 = document.getElementById('digit3-input').value;
        let angka4 = document.getElementById('digit4-input').value;

        if (angka1 != null && angka2 != null && angka3 != null && angka4 != null) {
            document.getElementById('submit').submit();
        }
    }
</script>

@if ($message = Session::get('success'))
    <script>
        Swal.fire({
            html:'<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Berhasil !</h4><p class="text-muted mx-4 mb-0">{{ $message }}</p></div></div>',
            showCancelButton:!0,
            showConfirmButton:!1,
            cancelButtonClass:"btn btn-primary w-xs mb-1",
            cancelButtonText:"OK",
            buttonsStyling:!1,
            showCloseButton:!0
        }).then(function (e) {
            let url = 'login'
            window.location.href = url;
        });
    </script>
@endif

@if($message = Session::get('error'))
    <script>
        Swal.fire({
            html:'<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Gagal !</h4><p class="text-muted mx-4 mb-0">{{ $message }}</p></div></div>',
            showCancelButton:!0,
            showConfirmButton:!1,
            cancelButtonClass:"btn btn-primary w-xs mb-1",
            cancelButtonText:"OK",
            buttonsStyling:!1,
            showCloseButton:!0
        });
    </script>
@endif

</body>

</html>
