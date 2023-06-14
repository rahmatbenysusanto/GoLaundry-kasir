@extends('layout')
@section('title', 'Dashboard')

@section('konten')

    <div class="row">
        <div class="col">

            <div class="h-100">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="row">
                            <div class="col-xl-12 col-md-6">
                                <!-- card -->
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="flex-grow-1">
                                                <p class="text-uppercase fw-medium text-muted text-truncate fs-13">Total Pendapatan</p>
                                                <h4 class="fs-22 fw-semibold mb-3">Rp.<span class="counter-value" data-target="18978000">0</span></h4>
                                                <div class="d-flex align-items-center gap-2">
                                                    <h5 class="text-success fs-12 mb-0">
                                                        <i class="ri-arrow-right-up-line fs-13 align-middle"></i> +18.30 %
                                                    </h5>
                                                    <p class="text-muted mb-0">dari minggu kemarin</p>
                                                </div>
                                            </div>
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-success-subtle rounded fs-3">
                                                    <i class="bx bx-money text-success"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                    <div class="animation-effect-6 text-success opacity-25 fs-18">
                                        <i class="bi bi-currency-dollar"></i>
                                    </div>
                                    <div class="animation-effect-4 text-success opacity-25 fs-18">
                                        <i class="bi bi-currency-pound"></i>
                                    </div>
                                    <div class="animation-effect-3 text-success opacity-25 fs-18">
                                        <i class="bi bi-currency-euro"></i>
                                    </div>
                                </div><!-- end card -->
                            </div><!-- end col -->

                            <div class="col-xl-12 col-md-6">
                                <!-- card -->
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-info-subtle rounded fs-3">
                                                            <i class="bx bx-shopping-bag text-info"></i>
                                                        </span>
                                            </div>
                                            <div class="text-end flex-grow-1">
                                                <p class="text-uppercase fw-medium text-muted text-truncate fs-13">Transaksi</p>
                                                <h4 class="fs-22 fw-semibold mb-3"><span class="counter-value" data-target="369">0</span></h4>
                                                <div class="d-flex align-items-center justify-content-end gap-2">
                                                    <h5 class="text-danger fs-12 mb-0">
                                                        <i class="ri-arrow-right-down-line fs-13 align-middle"></i> -2.74 %
                                                    </h5>
                                                    <p class="text-muted mb-0">dari minggu kemarin</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                    <div class="animation-effect-6 text-info opacity-25 left fs-18">
                                        <i class="bi bi-handbag"></i>
                                    </div>
                                    <div class="animation-effect-4 text-info opacity-25 left fs-18">
                                        <i class="bi bi-shop"></i>
                                    </div>
                                    <div class="animation-effect-3 text-info opacity-25 left fs-18">
                                        <i class="bi bi-bag-check"></i>
                                    </div>
                                </div><!-- end card -->
                            </div><!-- end col -->

                            <div class="col-xl-12 col-md-6">
                                <!-- card -->
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="flex-grow-1">
                                                <p class="text-uppercase fw-medium text-muted text-truncate fs-13">Client</p>
                                                <h4 class="fs-22 fw-semibold mb-3"><span class="counter-value" data-target="183">0</span></h4>
                                                <div class="d-flex align-items-center gap-2">
                                                    <h5 class="text-success fs-12 mb-0">
                                                        <i class="ri-arrow-right-up-line fs-13 align-middle"></i> +29.08 %
                                                    </h5>
                                                    <p class="text-muted mb-0">dari minggu kemarin</p>
                                                </div>
                                            </div>
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-warning-subtle rounded fs-3">
                                                    <i class="bx bx-user-circle text-warning"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                    <div class="animation-effect-6 text-warning opacity-25 fs-18">
                                        <i class="bi bi-person"></i>
                                    </div>
                                    <div class="animation-effect-4 text-warning opacity-25 fs-18">
                                        <i class="bi bi-person-fill"></i>
                                    </div>
                                    <div class="animation-effect-3 text-warning opacity-25 fs-18">
                                        <i class="bi bi-people"></i>
                                    </div>
                                </div><!-- end card -->
                            </div>
                            <div class="col-xl-12 col-md-6">
                                <div class="card card-primary border-0">
                                    <div class="card-body">
                                        <div class="row gy-3">
                                            <div class="col-sm">
                                                <h5 class="card-title fs-17">Ingin Akunmu Tetap Aktif?</h5>
                                                <p class="mb-2">Perpenjang lisensi sebelum</p>
                                                <p class="mb-0">17 Agustus 2023</p>
                                            </div>
                                            <div class="col-sm-auto pt-4">
                                                <button type="button" class="btn btn-darken-primary btn-label rounded-pill"><i class="ri-markup-line label-icon align-middle rounded-pill fs-16 me-2"></i> Perpanjang</button>
                                            </div>
                                        </div>
                                        <div class="position-absolute top-0 start-50 mt-4 opacity-25">
                                            <i class="bi bi-shop display-4"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <!-- card -->
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="flex-grow-1">
                                                <p class="text-uppercase fw-medium text-muted text-truncate fs-13">Laundry Baru</p>
                                                <h4 class="fs-22 fw-semibold mb-3"><span class="counter-value" data-target="23">0</span></h4>
                                                <div class="d-flex align-items-center gap-2">
                                                    <a href="#" class="text-decoration-underline">Lihat Detail</a>
                                                </div>
                                            </div>
                                            <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-primary-subtle rounded fs-3">
                                                <i class="bx bx-notepad text-primary"></i>
                                            </span>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                    <div class="animation-effect-6 text-success opacity-25">
                                        <i class="bi bi-currency-dollar"></i>
                                    </div>
                                    <div class="animation-effect-4 text-success opacity-25">
                                        <i class="bi bi-currency-pound"></i>
                                    </div>
                                    <div class="animation-effect-3 text-success opacity-25">
                                        <i class="bi bi-currency-euro"></i>
                                    </div>
                                </div><!-- end card -->
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <!-- card -->
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="flex-grow-1">
                                                <p class="text-uppercase fw-medium text-muted text-truncate fs-13">Laundry Diproses</p>
                                                <h4 class="fs-22 fw-semibold mb-3"><span class="counter-value" data-target="10">0</span></h4>
                                                <div class="d-flex align-items-center gap-2">
                                                    <a href="#" class="text-decoration-underline">Lihat Detail</a>
                                                </div>
                                            </div>
                                            <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-warning-subtle rounded fs-3">
                                                <i class="bx bx-time-five text-warning"></i>
                                            </span>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                    <div class="animation-effect-6 text-success opacity-25">
                                        <i class="bi bi-currency-dollar"></i>
                                    </div>
                                    <div class="animation-effect-4 text-success opacity-25">
                                        <i class="bi bi-currency-pound"></i>
                                    </div>
                                    <div class="animation-effect-3 text-success opacity-25">
                                        <i class="bi bi-currency-euro"></i>
                                    </div>
                                </div><!-- end card -->
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <!-- card -->
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="flex-grow-1">
                                                <p class="text-uppercase fw-medium text-muted text-truncate fs-13">Laundry Selesai</p>
                                                <h4 class="fs-22 fw-semibold mb-3"><span class="counter-value" data-target="4">0</span></h4>
                                                <div class="d-flex align-items-center gap-2">
                                                    <a href="#" class="text-decoration-underline">Lihat Detail</a>
                                                </div>
                                            </div>
                                            <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-success-subtle rounded fs-3">
                                                <i class="bx bx-task text-success"></i>
                                            </span>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                    <div class="animation-effect-6 text-success opacity-25">
                                        <i class="bi bi-currency-dollar"></i>
                                    </div>
                                    <div class="animation-effect-4 text-success opacity-25">
                                        <i class="bi bi-currency-pound"></i>
                                    </div>
                                    <div class="animation-effect-3 text-success opacity-25">
                                        <i class="bi bi-currency-euro"></i>
                                    </div>
                                </div><!-- end card -->
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <!-- card -->
                                <div class="card card-animate">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="flex-grow-1">
                                                <p class="text-uppercase fw-medium text-muted text-truncate fs-13">Laundry Diambil</p>
                                                <h4 class="fs-22 fw-semibold mb-3"><span class="counter-value" data-target="2">0</span></h4>
                                                <div class="d-flex align-items-center gap-2">
                                                    <a href="#" class="text-decoration-underline">Lihat Detail</a>
                                                </div>
                                            </div>
                                            <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-dark-subtle rounded fs-3">
                                                <i class="bx bx-happy-heart-eyes text-dark"></i>
                                            </span>
                                            </div>
                                        </div>
                                    </div><!-- end card body -->
                                    <div class="animation-effect-6 text-success opacity-25">
                                        <i class="bi bi-currency-dollar"></i>
                                    </div>
                                    <div class="animation-effect-4 text-success opacity-25">
                                        <i class="bi bi-currency-pound"></i>
                                    </div>
                                    <div class="animation-effect-3 text-success opacity-25">
                                        <i class="bi bi-currency-euro"></i>
                                    </div>
                                </div><!-- end card -->
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header border-0 align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Pendapatan</h4>
                                <div>
                                    <button type="button" class="btn btn-soft-secondary btn-sm">
                                        ALL
                                    </button>
                                    <button type="button" class="btn btn-soft-secondary btn-sm">
                                        1M
                                    </button>
                                    <button type="button" class="btn btn-soft-secondary btn-sm">
                                        6M
                                    </button>
                                    <button type="button" class="btn btn-secondary btn-sm">
                                        1Y
                                    </button>
                                </div>
                            </div><!-- end card header -->

                            <div class="card-header p-0 border-0 bg-soft-light">
                                <div class="row g-0 text-center">
                                    <div class="col-6 col-sm-3">
                                        <div class="p-3 border border-dashed border-start-0">
                                            <h5 class="mb-1"><span class="counter-value" data-target="7585">0</span></h5>
                                            <p class="text-muted mb-0">Transaksi</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-6 col-sm-3">
                                        <div class="p-3 border border-dashed border-start-0">
                                            <h5 class="mb-1">Rp. <span class="counter-value" data-target="13864000">0</span></h5>
                                            <p class="text-muted mb-0">Pendapatan</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-6 col-sm-3">
                                        <div class="p-3 border border-dashed border-start-0">
                                            <h5 class="mb-1"><span class="counter-value" data-target="367">0</span></h5>
                                            <p class="text-muted mb-0">Refunds</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-6 col-sm-3">
                                        <div class="p-3 border border-dashed border-start-0 border-end-0">
                                            <h5 class="mb-1 text-success"><span class="counter-value" data-target="18.92">0</span>%</h5>
                                            <p class="text-muted mb-0">Conversation Ratio</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                            </div><!-- end card header -->

                            <div class="card-body p-0 pb-2">
                                <div class="w-100">
                                    <div id="customer_impression_charts" data-colors='["--tb-dark", "--tb-primary", "--tb-secondary"]' class="apex-charts" dir="ltr"></div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div>

                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Recent Orders</h4>
                                <div class="flex-shrink-0">
                                    <div class="dropdown card-header-dropdown">
                                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="fw-semibold text-uppercase fs-12">Sort by:
                                                    </span><span class="text-muted">Today<i class="mdi mdi-chevron-down ms-1"></i></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Today</a>
                                            <a class="dropdown-item" href="#">Yesterday</a>
                                            <a class="dropdown-item" href="#">Last 7 Days</a>
                                            <a class="dropdown-item" href="#">Last 30 Days</a>
                                            <a class="dropdown-item" href="#">This Month</a>
                                            <a class="dropdown-item" href="#">Last Month</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div class="table-responsive table-card">
                                    <table class="table table-centered align-middle table-nowrap mb-0">
                                        <thead class="text-muted table-light">
                                        <tr>
                                            <th scope="col">Purchase ID</th>
                                            <th scope="col">Customer Name</th>
                                            <th scope="col">Product Name</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">OrderDate</th>
                                            <th scope="col">Vendor</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <a href="#!" class="fw-medium link-primary">#TB010331</a>
                                            </td>
                                            <td>
                                                Macbook Pro
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-2">
                                                        <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-xs rounded-circle" />
                                                    </div>
                                                    <div class="flex-grow-1">Terry White</div>
                                                </div>
                                            </td>
                                            <td>
                                                $658.00
                                            </td>
                                            <td>28 Oct, 2022</td>
                                            <td>Brazil</td>
                                            <td>
                                                <span class="badge badge-soft-success">Paid</span>
                                            </td>
                                        </tr><!-- end tr -->
                                        <tr>
                                            <td>
                                                <a href="#!" class="fw-medium link-primary">#TB010332</a>
                                            </td>
                                            <td>
                                                Borosil Paper Cup
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-2">
                                                        <img src="assets/images/users/avatar-4.jpg" alt="" class="avatar-xs rounded-circle" />
                                                    </div>
                                                    <div class="flex-grow-1">Daniel Gonzalez</div>
                                                </div>
                                            </td>
                                            <td>
                                                $345.00
                                            </td>
                                            <td>29 Oct, 2022</td>
                                            <td>Namibia</td>
                                            <td>
                                                <span class="badge badge-soft-danger">Unpaid</span>
                                            </td>
                                        </tr><!-- end tr -->
                                        <tr>
                                            <td>
                                                <a href="#!" class="fw-medium link-primary">#TB010333</a>
                                            </td>
                                            <td>
                                                Stillbird Helmet
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-2">
                                                        <img src="assets/images/users/avatar-3.jpg" alt="" class="avatar-xs rounded-circle" />
                                                    </div>
                                                    <div class="flex-grow-1">Stephen Bird</div>
                                                </div>
                                            </td>
                                            <td>
                                                $80.00
                                            </td>
                                            <td>30 Oct, 2022</td>
                                            <td>USA</td>
                                            <td>
                                                <span class="badge badge-soft-success">Paid</span>
                                            </td>
                                        </tr><!-- end tr -->
                                        <tr>
                                            <td>
                                                <a href="#!" class="fw-medium link-primary">#TB010334</a>
                                            </td>
                                            <td>
                                                Bentwood Chair
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-2">
                                                        <img src="assets/images/users/avatar-10.jpg" alt="" class="avatar-xs rounded-circle" />
                                                    </div>
                                                    <div class="flex-grow-1">Ashley Silva</div>
                                                </div>
                                            </td>
                                            <td>
                                                $349.99
                                            </td>
                                            <td>31 Oct, 2022</td>
                                            <td>Argentina</td>
                                            <td>
                                                <span class="badge badge-soft-warning">Pending</span>
                                            </td>
                                        </tr><!-- end tr -->
                                        <tr>
                                            <td>
                                                <a href="#!" class="fw-medium link-primary">#TB010335</a>
                                            </td>
                                            <td>
                                                Apple Headphone
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-2">
                                                        <img src="assets/images/users/avatar-9.jpg" alt="" class="avatar-xs rounded-circle" />
                                                    </div>
                                                    <div class="flex-grow-1">Scott Wilson</div>
                                                </div>
                                            </td>
                                            <td>
                                                $264.37
                                            </td>
                                            <td>01 Nov, 2022</td>
                                            <td>Jersey</td>
                                            <td>
                                                <span class="badge badge-soft-danger">Unpaid</span>
                                            </td>
                                        </tr><!-- end tr -->
                                        <tr>
                                            <td>
                                                <a href="#!" class="fw-medium link-primary">#TB010336</a>
                                            </td>
                                            <td>
                                                Smart Watch for Man's
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-2">
                                                        <img src="assets/images/users/avatar-8.jpg" alt="" class="avatar-xs rounded-circle" />
                                                    </div>
                                                    <div class="flex-grow-1">Heather Jimenez</div>
                                                </div>
                                            </td>
                                            <td>
                                                $741.98
                                            </td>
                                            <td>02 Nov, 2022</td>
                                            <td>Spain</td>
                                            <td>
                                                <span class="badge badge-soft-success">Paid</span>
                                            </td>
                                        </tr><!-- end tr -->
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row align-items-center mt-4 pt-2 gy-2 text-center text-sm-start">
                                    <div class="col-sm">
                                        <div class="text-muted">
                                            Showing <span class="fw-semibold">6</span> of <span class="fw-semibold">25</span> Results
                                        </div>
                                    </div>
                                    <div class="col-sm-auto">
                                        <ul class="pagination pagination-separated pagination-sm mb-0 justify-content-center justify-content-sm-start">
                                            <li class="page-item disabled">
                                                <a href="#" class="page-link">←</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="#" class="page-link">1</a>
                                            </li>
                                            <li class="page-item active">
                                                <a href="#" class="page-link">2</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="#" class="page-link">3</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="#" class="page-link">→</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- end .h-100-->

        </div> <!-- end col -->
    </div>

@endsection

