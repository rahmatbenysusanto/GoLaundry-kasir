
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>Dashboard | GoLaundry Kasir</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Minimal Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- jsvectormap css -->
    <link href="{{ asset('assets/libs/jsvectormap/css/jsvectormap.min.css') }}" rel="stylesheet" type="text/css" />

    <!--Swiper slider css-->
    <link href="{{ asset('assets/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />

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

<!-- Begin page -->
<div id="layout-wrapper">
    <header id="page-topbar" style="top: 0px">
        <div class="layout-width">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box horizontal-logo">
                        <a href="index.html" class="logo logo-dark">
                                    <span class="logo-sm">
                                        <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="22">
                                    </span>
                            <span class="logo-lg">
                                        <img src="{{ asset('assets/images/logo-dark.png') }}" alt="" height="25">
                                    </span>
                        </a>

                        <a href="index.html" class="logo logo-light">
                                    <span class="logo-sm">
                                        <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="22">
                                    </span>
                            <span class="logo-lg">
                                        <img src="{{ asset('assets/images/logo-light.png') }}" alt="" height="25">
                                    </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger" id="topnav-hamburger-icon">
                                <span class="hamburger-icon">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                    </button>

                    <button type="button" class="btn btn-sm px-3 fs-15 text-muted header-item d-none d-md-block" data-bs-toggle="modal" data-bs-target="#searchModal">
                        <span class="bi bi-search me-2"></span> Search for hybrix...
                    </button>
                </div>

                <div class="d-flex align-items-center">

                    <div class="d-md-none topbar-head-dropdown header-item">
                        <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle" id="page-header-search-dropdown" data-bs-toggle="modal" data-bs-target="#searchModal">
                            <i class="bi bi-search fs-16"></i>
                        </button>
                    </div>

                    <div class="dropdown topbar-head-dropdown ms-1 header-item">
                        <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle" id="page-header-cart-dropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                            <i class='bi bi-bag fs-18'></i>
                            <span class="position-absolute topbar-badge cartitem-badge fs-10 translate-middle badge rounded-pill bg-info">5</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end p-0 dropdown-menu-cart" aria-labelledby="page-header-cart-dropdown">
                            <div class="p-3 border-top-0 border-start-0 border-end-0 border-dashed border">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="m-0 fs-16 fw-semibold"> My Cart</h6>
                                    </div>
                                    <div class="col-auto">
                                                <span class="badge badge-soft-warning fs-13"><span class="cartitem-badge">7</span>
                                                    items</span>
                                    </div>
                                </div>
                            </div>
                            <div data-simplebar style="max-height: 300px;">
                                <div class="p-2">
                                    <div class="text-center empty-cart" id="empty-cart">
                                        <div class="avatar-md mx-auto my-3">
                                            <div class="avatar-title bg-info-subtle text-info fs-36 rounded-circle">
                                                <i class='bx bx-cart'></i>
                                            </div>
                                        </div>
                                        <h5 class="mb-3">Your Cart is Empty!</h5>
                                        <a href="#!" class="btn btn-success w-md mb-3">Shop Now</a>
                                    </div>
                                    <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                                        <div class="d-flex align-items-center">
                                            <img src="assets/images/products/img-1.png" class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                                            <div class="flex-grow-1">
                                                <h6 class="mt-0 mb-1 fs-14">
                                                    <a href="#!" class="text-reset">Branded
                                                        T-Shirts</a>
                                                </h6>
                                                <p class="mb-0 fs-13 text-muted">
                                                    Quantity: <span>10 x $32</span>
                                                </p>
                                            </div>
                                            <div class="px-2">
                                                <h5 class="m-0 fw-normal">$<span class="cart-item-price">320</span></h5>
                                            </div>
                                            <div class="ps-2">
                                                <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i class="ri-close-fill fs-16"></i></button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                                        <div class="d-flex align-items-center">
                                            <img src="assets/images/products/img-2.png" class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                                            <div class="flex-grow-1">
                                                <h6 class="mt-0 mb-1 fs-14">
                                                    <a href="#!" class="text-reset">Bentwood Chair</a>
                                                </h6>
                                                <p class="mb-0 fs-13 text-muted">
                                                    Quantity: <span>5 x $18</span>
                                                </p>
                                            </div>
                                            <div class="px-2">
                                                <h5 class="m-0 fw-normal">$<span class="cart-item-price">89</span></h5>
                                            </div>
                                            <div class="ps-2">
                                                <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i class="ri-close-fill fs-16"></i></button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                                        <div class="d-flex align-items-center">
                                            <img src="assets/images/products/img-3.png" class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                                            <div class="flex-grow-1">
                                                <h6 class="mt-0 mb-1 fs-14">
                                                    <a href="#!" class="text-reset">
                                                        Borosil Paper Cup</a>
                                                </h6>
                                                <p class="mb-0 fs-13 text-muted">
                                                    Quantity: <span>3 x $250</span>
                                                </p>
                                            </div>
                                            <div class="px-2">
                                                <h5 class="m-0 fw-normal">$<span class="cart-item-price">750</span></h5>
                                            </div>
                                            <div class="ps-2">
                                                <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i class="ri-close-fill fs-16"></i></button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                                        <div class="d-flex align-items-center">
                                            <img src="assets/images/products/img-6.png" class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                                            <div class="flex-grow-1">
                                                <h6 class="mt-0 mb-1 fs-14">
                                                    <a href="#!" class="text-reset">Gray
                                                        Styled T-Shirt</a>
                                                </h6>
                                                <p class="mb-0 fs-13 text-muted">
                                                    Quantity: <span>1 x $1250</span>
                                                </p>
                                            </div>
                                            <div class="px-2">
                                                <h5 class="m-0 fw-normal">$ <span class="cart-item-price">1250</span></h5>
                                            </div>
                                            <div class="ps-2">
                                                <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i class="ri-close-fill fs-16"></i></button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                                        <div class="d-flex align-items-center">
                                            <img src="assets/images/products/img-5.png" class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                                            <div class="flex-grow-1">
                                                <h6 class="mt-0 mb-1 fs-14">
                                                    <a href="#!" class="text-reset">Stillbird Helmet</a>
                                                </h6>
                                                <p class="mb-0 fs-13 text-muted">
                                                    Quantity: <span>2 x $495</span>
                                                </p>
                                            </div>
                                            <div class="px-2">
                                                <h5 class="m-0 fw-normal">$<span class="cart-item-price">990</span></h5>
                                            </div>
                                            <div class="ps-2">
                                                <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i class="ri-close-fill fs-16"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 border-bottom-0 border-start-0 border-end-0 border-dashed border" id="checkout-elem">
                                <div class="d-flex justify-content-between align-items-center pb-3">
                                    <h5 class="m-0 text-muted">Total:</h5>
                                    <div class="px-2">
                                        <h5 class="m-0" id="cart-item-total">$1258.58</h5>
                                    </div>
                                </div>

                                <a href="#!" class="btn btn-success text-center w-100">
                                    Checkout
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="ms-1 header-item d-none d-sm-flex">
                        <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle" data-toggle="fullscreen">
                            <i class='bi bi-arrows-fullscreen fs-16'></i>
                        </button>
                    </div>

                    <div class="dropdown topbar-head-dropdown ms-1 header-item">
                        <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle mode-layout" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-sun align-middle fs-20"></i>
                        </button>
                        <div class="dropdown-menu p-2 dropdown-menu-end" id="light-dark-mode">
                            <a href="#!" class="dropdown-item" data-mode="light"><i class="bi bi-sun align-middle me-2"></i> Defualt (light mode)</a>
                            <a href="#!" class="dropdown-item" data-mode="dark"><i class="bi bi-moon align-middle me-2"></i> Dark</a>
                            <a href="#!" class="dropdown-item" data-mode="auto"><i class="bi bi-moon-stars align-middle me-2"></i> Auto (system defualt)</a>
                        </div>
                    </div>

                    <div class="dropdown topbar-head-dropdown ms-1 header-item" id="notificationDropdown">
                        <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle" id="page-header-notifications-dropdown" data-bs-toggle="dropdown"  data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                            <i class='bi bi-bell fs-18'></i>
                            <span class="position-absolute topbar-badge fs-10 translate-middle badge rounded-pill bg-danger"><span class="notification-badge">4</span><span class="visually-hidden">unread messages</span></span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">

                            <div class="dropdown-head rounded-top">
                                <div class="p-3 border-bottom border-bottom-dashed">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="mb-0 fs-16 fw-semibold"> Notifications <span class="badge badge-soft-danger fs-13 notification-badge"> 4</span></h6>
                                            <p class="fs-14 text-muted mt-1 mb-0">You have <span class="fw-semibold notification-unread">3</span> unread messages</p>
                                        </div>
                                        <div class="col-auto dropdown">
                                            <a href="javascript:void(0);" data-bs-toggle="dropdown" class="link-secondary fs-14"><i class="bi bi-three-dots-vertical"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">All Clear</a></li>
                                                <li><a class="dropdown-item" href="#">Mark all as read</a></li>
                                                <li><a class="dropdown-item" href="#">Archive All</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="py-2 ps-2" id="notificationItemsTabContent">
                                <div data-simplebar style="max-height: 300px;" class="pe-2">
                                    <h6 class="text-overflow text-muted fs-13 my-2 text-uppercase notification-title">New</h6>
                                    <div class="text-reset notification-item d-block dropdown-item position-relative unread-message">
                                        <div class="d-flex">
                                            <div class="avatar-xs me-3 flex-shrink-0">
                                                        <span class="avatar-title bg-info-subtle text-info rounded-circle fs-16">
                                                            <i class="bx bx-badge-check"></i>
                                                        </span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <a href="#!" class="stretched-link">
                                                    <h6 class="mt-0 fs-14 mb-2 lh-base">Your <b>Elite</b> author Graphic
                                                        Optimization <span class="text-secondary">reward</span> is ready!
                                                    </h6>
                                                </a>
                                                <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                    <span><i class="mdi mdi-clock-outline"></i> Just 30 sec ago</span>
                                                </p>
                                            </div>
                                            <div class="px-2 fs-15">
                                                <div class="form-check notification-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="all-notification-check01">
                                                    <label class="form-check-label" for="all-notification-check01"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-reset notification-item d-block dropdown-item position-relative unread-message">
                                        <div class="d-flex">
                                            <div class="position-relative me-3 flex-shrink-0">
                                                <img src="assets/images/users/avatar-2.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                                <span class="active-badge position-absolute start-100 translate-middle p-1 bg-success rounded-circle">
                                                            <span class="visually-hidden">New alerts</span>
                                                        </span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <a href="#!" class="stretched-link">
                                                    <h6 class="mt-0 mb-1 fs-14 fw-semibold">Angela Bernier</h6>
                                                </a>
                                                <div class="fs-13 text-muted">
                                                    <p class="mb-1">Answered to your comment on the cash flow forecast's graph 🔔.</p>
                                                </div>
                                                <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                    <span><i class="mdi mdi-clock-outline"></i> 48 min ago</span>
                                                </p>
                                            </div>
                                            <div class="px-2 fs-15">
                                                <div class="form-check notification-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="all-notification-check02">
                                                    <label class="form-check-label" for="all-notification-check02"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-reset notification-item d-block dropdown-item position-relative unread-message">
                                        <div class="d-flex">
                                            <div class="avatar-xs me-3 flex-shrink-0">
                                                        <span class="avatar-title bg-danger-subtle text-danger rounded-circle fs-16">
                                                            <i class='bx bx-message-square-dots'></i>
                                                        </span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <a href="#!" class="stretched-link">
                                                    <h6 class="mt-0 mb-2 fs-14 lh-base">You have received <b class="text-success">20</b> new messages in the conversation
                                                    </h6>
                                                </a>
                                                <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                    <span><i class="mdi mdi-clock-outline"></i> 2 hrs ago</span>
                                                </p>
                                            </div>
                                            <div class="px-2 fs-15">
                                                <div class="form-check notification-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="all-notification-check03">
                                                    <label class="form-check-label" for="all-notification-check03"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <h6 class="text-overflow text-muted fs-13 my-2 text-uppercase notification-title">Read Before</h6>

                                    <div class="text-reset notification-item d-block dropdown-item position-relative">
                                        <div class="d-flex">

                                            <div class="position-relative me-3 flex-shrink-0">
                                                <img src="assets/images/users/avatar-8.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                                <span class="active-badge position-absolute start-100 translate-middle p-1 bg-warning rounded-circle">
                                                            <span class="visually-hidden">New alerts</span>
                                                        </span>
                                            </div>

                                            <div class="flex-grow-1">
                                                <a href="#!" class="stretched-link">
                                                    <h6 class="mt-0 mb-1 fs-14 fw-semibold">Maureen Gibson</h6>
                                                </a>
                                                <div class="fs-13 text-muted">
                                                    <p class="mb-1">We talked about a project on linkedin.</p>
                                                </div>
                                                <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                    <span><i class="mdi mdi-clock-outline"></i> 4 hrs ago</span>
                                                </p>
                                            </div>
                                            <div class="px-2 fs-15">
                                                <div class="form-check notification-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="all-notification-check04">
                                                    <label class="form-check-label" for="all-notification-check04"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="notification-actions" id="notification-actions">
                                    <div class="d-flex text-muted justify-content-center align-items-center">
                                        Select <div id="select-content" class="text-body fw-semibold px-1">0</div> Result <button type="button" class="btn btn-link link-danger p-0 ms-2" data-bs-toggle="modal" data-bs-target="#removeNotificationModal">Remove</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown ms-sm-3 header-item topbar-user">
                        <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="d-flex align-items-center">
                                        <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-1.jpg" alt="Header Avatar">
                                        <span class="text-start ms-xl-2">
                                            <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">Edward Diana</span>
                                            <span class="d-none d-xl-block ms-1 fs-13 text-muted user-name-sub-text">Founder</span>
                                        </span>
                                    </span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <h6 class="dropdown-header">Welcome Diana!</h6>
                            <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Profile</span></a>
                            <a class="dropdown-item" href="#!"><i class="mdi mdi-message-text-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Messages</span></a>
                            <a class="dropdown-item" href="#!"><i class="mdi mdi-calendar-check-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Taskboard</span></a>
                            <a class="dropdown-item" href="pages-faqs.html"><i class="mdi mdi-lifebuoy text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Help</span></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-wallet text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Balance : <b>$8451.36</b></span></a>
                            <a class="dropdown-item" href="pages-profile-settings.html"><span class="badge bg-success-subtle text-success mt-1 float-end">New</span><i class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Settings</span></a>
                            <a class="dropdown-item" href="auth-lockscreen-basic.html"><i class="mdi mdi-lock text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Lock screen</span></a>
                            <a class="dropdown-item" href="auth-logout-basic.html"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Logout</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ========== App Menu ========== -->
    <div class="app-menu navbar-menu" style="top: 0px">
        <!-- LOGO -->
        <div class="navbar-brand-box">
            <a href="index.html" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm.png" alt="" height="26">
                        </span>
                <span class="logo-lg">
                            <img src="assets/images/logo-dark.png" alt="" height="26">
                        </span>
            </a>
            <a href="index.html" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm.png" alt="" height="26">
                        </span>
                <span class="logo-lg">
                            <img src="assets/images/logo-light.png" alt="" height="26">
                        </span>
            </a>
            <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                <i class="ri-record-circle-line"></i>
            </button>
        </div>

        <div id="scrollbar">
            <div class="container-fluid">

                <div id="two-column-menu">
                </div>
                <ul class="navbar-nav" id="navbar-nav">

                    <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                    <li class="nav-item">
                        <a href="index.html" class="nav-link menu-link"> <i class="bi bi-speedometer2"></i> <span data-key="t-dashboard">Dashboard</span> </a>
                    </li>

                    <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-pages">Pages</span></li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarAuth" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAuth">
                            <i class="bi bi-person-circle"></i> <span data-key="t-authentication">Authentication</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarAuth">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="#sidebarSignIn" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSignIn" data-key="t-signin"> Sign In
                                    </a>
                                    <div class="collapse menu-dropdown" id="sidebarSignIn">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="auth-signin-basic.html" class="nav-link" data-key="t-basic"> Basic </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="auth-signin-basic-2.html" class="nav-link" data-key="t-basic-2"> Basic 2 </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="auth-signin-cover.html" class="nav-link" data-key="t-cover"> Cover </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="#sidebarSignUp" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSignUp" data-key="t-signup"> Sign Up </a>
                                    <div class="collapse menu-dropdown" id="sidebarSignUp">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="auth-signup-basic.html" class="nav-link" data-key="t-basic"> Basic </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="auth-signup-basic-2.html" class="nav-link" data-key="t-basic-2"> Basic 2 </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="auth-signup-cover.html" class="nav-link" data-key="t-cover"> Cover </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li class="nav-item">
                                    <a href="#sidebarResetPass" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarResetPass" data-key="t-password-reset">
                                        Password Reset
                                    </a>
                                    <div class="collapse menu-dropdown" id="sidebarResetPass">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="auth-pass-reset-basic.html" class="nav-link" data-key="t-basic"> Basic </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="auth-pass-reset-basic-2.html" class="nav-link" data-key="t-basic-2"> Basic 2</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="auth-pass-reset-cover.html" class="nav-link" data-key="t-cover"> Cover </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li class="nav-item">
                                    <a href="#sidebarchangePass" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarchangePass" data-key="t-password-create">
                                        Password Create
                                    </a>
                                    <div class="collapse menu-dropdown" id="sidebarchangePass">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="auth-pass-change-basic.html" class="nav-link" data-key="t-basic"> Basic </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="auth-pass-change-basic-2.html" class="nav-link" data-key="t-basic-2"> Basic 2 </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="auth-pass-change-cover.html" class="nav-link" data-key="t-cover"> Cover </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li class="nav-item">
                                    <a href="#sidebarLockScreen" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLockScreen" data-key="t-lock-screen">
                                        Lock Screen
                                    </a>
                                    <div class="collapse menu-dropdown" id="sidebarLockScreen">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="auth-lockscreen-basic.html" class="nav-link" data-key="t-basic"> Basic </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="auth-lockscreen-basic-2.html" class="nav-link" data-key="t-basic-2"> Basic 2 </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="auth-lockscreen-cover.html" class="nav-link" data-key="t-cover"> Cover </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li class="nav-item">
                                    <a href="#sidebarLogout" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLogout" data-key="t-logout"> Logout
                                    </a>
                                    <div class="collapse menu-dropdown" id="sidebarLogout">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="auth-logout-basic.html" class="nav-link" data-key="t-basic"> Basic </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="auth-logout-basic-2.html" class="nav-link" data-key="t-basic-2"> Basic 2 </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="auth-logout-cover.html" class="nav-link" data-key="t-cover"> Cover </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="#sidebarSuccessMsg" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSuccessMsg" data-key="t-success-message"> Success Message
                                    </a>
                                    <div class="collapse menu-dropdown" id="sidebarSuccessMsg">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="auth-success-msg-basic.html" class="nav-link" data-key="t-basic"> Basic </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="auth-success-msg-basic-2.html" class="nav-link" data-key="t-basic-2"> Basic 2 </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="auth-success-msg-cover.html" class="nav-link" data-key="t-cover"> Cover </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="#sidebarTwoStep" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTwoStep" data-key="t-two-step-verification"> Two Step Verification
                                    </a>
                                    <div class="collapse menu-dropdown" id="sidebarTwoStep">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="auth-twostep-basic.html" class="nav-link" data-key="t-basic"> Basic </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="auth-twostep-basic-2.html" class="nav-link" data-key="t-basic-2"> Basic 2</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="auth-twostep-cover.html" class="nav-link" data-key="t-cover"> Cover </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="#sidebarErrors" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarErrors" data-key="t-errors"> Errors
                                    </a>
                                    <div class="collapse menu-dropdown" id="sidebarErrors">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="auth-404-basic.html" class="nav-link" data-key="t-404-basic"> 404 Basic </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="auth-404-cover.html" class="nav-link" data-key="t-404-cover"> 404 Cover </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="auth-404-alt.html" class="nav-link" data-key="t-404-alt"> 404 Alt </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="auth-500.html" class="nav-link" data-key="t-500"> 500 </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="auth-offline.html" class="nav-link" data-key="t-offline-page"> Offline Page </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarPages" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPages">
                            <i class="bi bi-journal-medical"></i> <span data-key="t-pages">Pages</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarPages">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="pages-starter.html" class="nav-link" data-key="t-starter"> Starter </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#sidebarProfile" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProfile" data-key="t-profile"> Profile
                                    </a>
                                    <div class="collapse menu-dropdown" id="sidebarProfile">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="pages-profile.html" class="nav-link" data-key="t-simple-page"> Simple Page </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="pages-profile-settings.html" class="nav-link" data-key="t-settings"> Settings </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="pages-team.html" class="nav-link" data-key="t-team"> Team </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages-timeline.html" class="nav-link" data-key="t-timeline"> Timeline </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages-faqs.html" class="nav-link" data-key="t-faqs"> FAQs </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages-pricing.html" class="nav-link" data-key="t-pricing"> Pricing </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages-maintenance.html" class="nav-link" data-key="t-maintenance"> Maintenance
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages-coming-soon.html" class="nav-link" data-key="t-coming-soon"> Coming Soon
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages-sitemap.html" class="nav-link" data-key="t-sitemap"> Sitemap </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages-search-results.html" class="nav-link" data-key="t-search-results"> Search Results </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="widgets.html">
                            <i class="bi bi-hdd-stack"></i> <span data-key="t-widgets">Widgets</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="components.html" target="_blank">
                            <i class="bi bi-layers"></i> <span data-key="t-components">Components</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="../docs/index.html" target="_blank">
                            <i class="bi bi-file-earmark-text"></i> <span data-key="t-documentation">Documentation</span> <span class="badge badge-pill bg-secondary" data-key="t-v1.0">v1.0</span>
                        </a>
                    </li>

                    <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-apps">Apps</span></li>

                    <li class="nav-item">
                        <a href="apps-calendar.html" class="nav-link menu-link"> <i class="bi bi-calendar3"></i> <span data-key="t-calendar">Calendar</span> </a>
                    </li>

                    <li class="nav-item">
                        <a href="apps-api-key.html" class="nav-link menu-link"> <i class="bi bi-key"></i> <span data-key="t-api-key">API Key</span> </a>
                    </li>

                    <li class="nav-item">
                        <a href="apps-contact.html" class="nav-link menu-link"> <i class="bi bi-person-square"></i> <span data-key="t-contact">Contact</span> </a>
                    </li>

                    <li class="nav-item">
                        <a href="apps-leaderboards.html" class="nav-link menu-link"> <i class="bi bi-gem"></i> <span data-key="t-leaderboard">LeaderBoard</span> </a>
                    </li>

                    <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-layouts">Layouts</span></li>
                    <li class="nav-item">
                        <a href="layouts-horizontal.html" class="nav-link menu-link" target="_blank"> <i class="bi bi-window"></i> <span data-key="t-horizontal">Horizontal</span> </a>
                    </li>
                    <li class="nav-item">
                        <a href="layouts-detached.html" class="nav-link menu-link" target="_blank"> <i class="bi bi-layout-sidebar-inset"></i> <span data-key="t-detached">Detached</span> </a>
                    </li>
                    <li class="nav-item">
                        <a href="layouts-two-column.html" class="nav-link menu-link" target="_blank"> <i class="bi bi-layout-three-columns"></i> <span data-key="t-two-column">Two Column</span> </a>
                    </li>
                    <li class="nav-item">
                        <a href="layouts-vertical-hovered.html" class="nav-link menu-link" target="_blank"> <i class="bi bi-layout-text-sidebar-reverse"></i> <span data-key="t-hovered">Hovered</span> </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarMultilevel" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMultilevel">
                            <i class="bi bi-share"></i> <span data-key="t-multi-level">Multi Level</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarMultilevel">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="#" class="nav-link" data-key="t-level-1.1"> Level 1.1 </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#sidebarAccount" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAccount" data-key="t-level-1.2"> Level
                                        1.2
                                    </a>
                                    <div class="collapse menu-dropdown" id="sidebarAccount">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="#" class="nav-link" data-key="t-level-2.1"> Level 2.1 </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#sidebarCrm" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCrm" data-key="t-level-2.2"> Level 2.2
                                                </a>
                                                <div class="collapse menu-dropdown" id="sidebarCrm">
                                                    <ul class="nav nav-sm flex-column">
                                                        <li class="nav-item">
                                                            <a href="#" class="nav-link" data-key="t-level-3.1"> Level 3.1
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="#" class="nav-link" data-key="t-level-3.2"> Level 3.2
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>

                </ul>
            </div>
            <!-- Sidebar -->
        </div>

        <div class="sidebar-background"></div>
    </div>
    <!-- Left Sidebar End -->
    <!-- Vertical Overlay-->
    <div class="vertical-overlay"></div>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">


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
                                                            <p class="text-uppercase fw-medium text-muted text-truncate fs-13">Total Earnings</p>
                                                            <h4 class="fs-22 fw-semibold mb-3">$<span class="counter-value" data-target="745.35">0</span></h4>
                                                            <div class="d-flex align-items-center gap-2">
                                                                <h5 class="text-success fs-12 mb-0">
                                                                    <i class="ri-arrow-right-up-line fs-13 align-middle"></i> +18.30 %
                                                                </h5>
                                                                <p class="text-muted mb-0">than last week</p>
                                                            </div>
                                                        </div>
                                                        <div class="avatar-sm flex-shrink-0">
                                                                    <span class="avatar-title bg-success-subtle rounded fs-3">
                                                                        <i class="bx bx-dollar-circle text-success"></i>
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
                                                            <p class="text-uppercase fw-medium text-muted text-truncate fs-13">Orders</p>
                                                            <h4 class="fs-22 fw-semibold mb-3"><span class="counter-value" data-target="698.36">0</span>k </h4>
                                                            <div class="d-flex align-items-center justify-content-end gap-2">
                                                                <h5 class="text-danger fs-12 mb-0">
                                                                    <i class="ri-arrow-right-down-line fs-13 align-middle"></i> -2.74 %
                                                                </h5>
                                                                <p class="text-muted mb-0">than last week</p>
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
                                                            <p class="text-uppercase fw-medium text-muted text-truncate fs-13">Customers</p>
                                                            <h4 class="fs-22 fw-semibold mb-3"><span class="counter-value" data-target="183.35">0</span>M </h4>
                                                            <div class="d-flex align-items-center gap-2">
                                                                <h5 class="text-success fs-12 mb-0">
                                                                    <i class="ri-arrow-right-up-line fs-13 align-middle"></i> +29.08 %
                                                                </h5>
                                                                <p class="text-muted mb-0">than last week</p>
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
                                        </div><!-- end col -->
                                    </div> <!-- end row-->
                                </div>
                                <div class="col-xl-8">
                                    <div class="card">
                                        <div class="card-header border-0 align-items-center d-flex">
                                            <h4 class="card-title mb-0 flex-grow-1">Revenue</h4>
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
                                                        <p class="text-muted mb-0">Orders</p>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-6 col-sm-3">
                                                    <div class="p-3 border border-dashed border-start-0">
                                                        <h5 class="mb-1">$<span class="counter-value" data-target="22.89">0</span>k</h5>
                                                        <p class="text-muted mb-0">Earnings</p>
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
                                    <!-- card -->
                                    <div class="card bg-info-subtle text-info border-0">
                                        <div class="card-body">
                                            <div class="row gy-3">
                                                <div class="col-sm">
                                                    <h5 class="card-title fs-17">Need More Sales?</h5>
                                                    <p class="mb-0">Upgrade to pro for added benefits.</p>
                                                </div>
                                                <div class="col-sm-auto">
                                                    <button type="button" class="btn btn-info btn-label rounded-pill"><i class="ri-markup-line label-icon align-middle rounded-pill fs-16 me-2"></i> Upgrade Account</button>
                                                </div>
                                            </div>
                                            <div class="position-absolute top-0 start-50 mt-2 opacity-25">
                                                <i class="bi bi-shop display-4"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!-- end col -->

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

                            <div class="row">
                                <div class="col-xl-8">
                                    <div class="swiper selling-product">
                                        <div class="d-flex pt-2 pb-4">
                                            <h5 class="card-title fs-16 mb-1">Best Selling Products</h5>
                                        </div>
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide" style="max-width: 280px;">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="bg-info-subtle rounded py-3">
                                                            <img src="assets/images/products/img-1.png" alt="" style="max-height: 215px;max-width: 100%;" class="mx-auto d-block">
                                                        </div>
                                                        <div class="pt-3">
                                                            <span class="float-end">4.7 <i class="ri-star-half-fill text-warning align-bottom"></i></span>
                                                            <h5 class="text-dark mb-3">$64.21</h5>
                                                            <a href="#!" class="stretched-link">
                                                                <h6 class="fs-15 lh-base text-truncate mb-0">Rockerz 550 Over Ear Bluetooth Headphones</h6>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide" style="max-width: 280px;">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="bg-warning-subtle rounded py-3">
                                                            <img src="assets/images/products/img-6.png" alt="" style="max-height: 215px;max-width: 100%;" class="mx-auto d-block">
                                                        </div>
                                                        <div class="pt-3">
                                                            <span class="float-end">4.9 <i class="ri-star-half-fill text-warning align-bottom"></i></span>
                                                            <h5 class="text-dark mb-3">$154.78</h5>
                                                            <a href="#!" class="stretched-link">
                                                                <h6 class="fs-15 lh-base text-truncate mb-0">Monte Carlo Sweaters</h6>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide" style="max-width: 280px;">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="bg-primary-subtle rounded py-3">
                                                            <img src="assets/images/products/img-8.png" alt="" style="max-height: 215px;max-width: 100%;" class="mx-auto d-block">
                                                        </div>
                                                        <div class="pt-3">
                                                            <span class="float-end">4.3 <i class="ri-star-half-fill text-warning align-bottom"></i></span>
                                                            <h5 class="text-dark mb-3">$36.97</h5>
                                                            <a href="#!" class="stretched-link">
                                                                <h6 class="fs-15 lh-base text-truncate mb-0">Men's Running Shoes Active Grip</h6>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide" style="max-width: 280px;">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="bg-success-subtle rounded py-3">
                                                            <img src="assets/images/products/img-5.png" alt="" style="max-height: 215px;max-width: 100%;" class="mx-auto d-block">
                                                        </div>
                                                        <div class="pt-3">
                                                            <span class="float-end">4.8 <i class="ri-star-half-fill text-warning align-bottom"></i></span>
                                                            <h5 class="text-dark mb-3">$71.34</h5>
                                                            <a href="#!" class="stretched-link">
                                                                <h6 class="fs-15 lh-base text-truncate mb-0">United Colors Of Benetton</h6>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="card">
                                        <div class="card-header d-flex">
                                            <h5 class="card-title flex-grow-1 mb-0">Product Delivery</h5>
                                            <a href="#!" class="flex-shrink-0">View All <i class="ri-arrow-right-line align-bottom ms-1"></i></a>
                                        </div>
                                        <div class="card-body px-0">
                                            <div data-simplebar style="max-height: 320px;">
                                                <div class="vstack gap-3 px-3">
                                                    <div class="p-3 border border-dashed rounded-3">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="avatar-sm bg-light rounded p-1 flex-shrink-0">
                                                                <img src="assets/images/products/img-8.png" alt="" class="img-fluid d-block">
                                                            </div>
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h6 class="text-truncate">Men's Running Shoes Activ... </h6>
                                                                <p class="text-truncate mb-0">by: <span class="text-info">Aaron Bauer</span></p>
                                                            </div>
                                                            <div class="flex-shrink-0">
                                                                <span class="badge badge-soft-warning">Shipping</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 border border-dashed rounded-3">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="avatar-sm bg-light rounded p-1 flex-shrink-0">
                                                                <img src="assets/images/products/img-4.png" alt="" class="img-fluid d-block">
                                                            </div>
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h6 class="text-truncate">Striped Baseball Cap</h6>
                                                                <p class="text-truncate mb-0">by: <span class="text-info">Jansh Brown</span></p>
                                                            </div>
                                                            <div class="flex-shrink-0">
                                                                <span class="badge badge-soft-success">Delivered</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 border border-dashed rounded-3">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="avatar-sm bg-light rounded p-1 flex-shrink-0">
                                                                <img src="assets/images/products/img-3.png" alt="" class="img-fluid d-block">
                                                            </div>
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h6 class="text-truncate">350 ml Glass Groce...</h6>
                                                                <p class="text-truncate mb-0">by: <span class="text-info">Scott Wilson</span></p>
                                                            </div>
                                                            <div class="flex-shrink-0">
                                                                <span class="badge badge-soft-danger">Out of Delivery</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 border border-dashed rounded-3">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="avatar-sm bg-light rounded p-1 flex-shrink-0">
                                                                <img src="assets/images/products/img-6.png" alt="" class="img-fluid d-block">
                                                            </div>
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h6 class="text-truncate">Monte Carlo Sweaters</h6>
                                                                <p class="text-truncate mb-0">by: <span class="text-info">Daniel Gonzalez</span></p>
                                                            </div>
                                                            <div class="flex-shrink-0">
                                                                <span class="badge badge-soft-success">Delivered</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="p-3 border border-dashed rounded-3">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div class="avatar-sm bg-light rounded p-1 flex-shrink-0">
                                                                <img src="assets/images/products/img-9.png" alt="" class="img-fluid d-block">
                                                            </div>
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h6 class="text-truncate">Ceramic Coffee Mug</h6>
                                                                <p class="text-truncate mb-0">by: <span class="text-info">Stephen Garrison</span></p>
                                                            </div>
                                                            <div class="flex-shrink-0">
                                                                <span class="badge badge-soft-warning">Shipping</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end row-->

                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="card card-height-100">
                                        <div class="card-header align-items-center d-flex">
                                            <h4 class="card-title mb-0 flex-grow-1">Sales by Category</h4>
                                            <div class="flex-shrink-0">
                                                <div class="dropdown card-header-dropdown">
                                                    <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="text-muted">Report<i class="mdi mdi-chevron-down ms-1"></i></span>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Download Report</a>
                                                        <a class="dropdown-item" href="#">Export</a>
                                                        <a class="dropdown-item" href="#">Import</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end card header -->

                                        <div class="card-body">
                                            <div id="multiple_radialbar" data-colors='["--tb-primary", "--tb-info", "--tb-success", "--tb-secondary"]' class="apex-charts" dir="ltr"></div>
                                        </div>
                                    </div> <!-- .card-->
                                </div> <!-- .col-->

                                <div class="col-xl-8">
                                    <div class="card">
                                        <div class="card-header align-items-center d-flex">
                                            <h4 class="card-title mb-0 flex-grow-1">Stock Report</h4>
                                            <div class="flex-shrink-0">
                                                <button type="button" class="btn btn-soft-info btn-sm">
                                                    <i class="ri-file-list-3-line align-middle"></i> Generate Report
                                                </button>
                                            </div>
                                        </div><!-- end card header -->

                                        <div class="card-body">
                                            <div class="table-responsive table-card">
                                                <table class="table table-borderless table-centered table-hover align-middle table-nowrap mb-0">
                                                    <thead class="text-muted table-light">
                                                    <tr>
                                                        <th scope="col">Product ID</th>
                                                        <th scope="col">Product Name</th>
                                                        <th scope="col">Updated Date</th>
                                                        <th scope="col">Amount</th>
                                                        <th scope="col">Stock Status</th>
                                                        <th scope="col">Quantity</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>
                                                            <a href="#!" class="fw-medium link-primary">#00541</a>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 me-2">
                                                                    <img src="assets/images/products/img-1.png" alt="" class="avatar-xs rounded-circle" />
                                                                </div>
                                                                <div class="flex-grow-1">Rockerz Ear Bluetooth Headphones</div>
                                                            </div>
                                                        </td>
                                                        <td>16 Aug, 2022</td>
                                                        <td>
                                                            <span class="text-secondary">$658.00</span>
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-soft-success">In Stock</span>
                                                        </td>
                                                        <td>15 PCS</td>
                                                    </tr><!-- end tr -->
                                                    <tr>
                                                        <td>
                                                            <a href="#!" class="fw-medium link-primary">#07484</a>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 me-2">
                                                                    <img src="assets/images/products/img-5.png" alt="" class="avatar-xs rounded-circle" />
                                                                </div>
                                                                <div class="flex-grow-1">United Colors Of Benetton</div>
                                                            </div>
                                                        </td>
                                                        <td>05 Sep, 2022</td>
                                                        <td>
                                                            <span class="text-secondary">$145.00</span>
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-soft-warning">Low Stock</span>
                                                        </td>
                                                        <td>05 PCS</td>
                                                    </tr><!-- end tr -->
                                                    <tr>
                                                        <td>
                                                            <a href="#!" class="fw-medium link-primary">#01641</a>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 me-2">
                                                                    <img src="assets/images/products/img-4.png" alt="" class="avatar-xs rounded-circle" />
                                                                </div>
                                                                <div class="flex-grow-1">Striped Baseball Cap</div>
                                                            </div>
                                                        </td>
                                                        <td>28 Sep, 2022</td>
                                                        <td>
                                                            <span class="text-secondary">$215.00</span>
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-soft-danger">Out of Stock</span>
                                                        </td>
                                                        <td>0 PCS</td>
                                                    </tr><!-- end tr -->
                                                    <tr>
                                                        <td>
                                                            <a href="#!" class="fw-medium link-primary">#00065</a>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 me-2">
                                                                    <img src="assets/images/products/img-3.png" alt="" class="avatar-xs rounded-circle" />
                                                                </div>
                                                                <div class="flex-grow-1">350 ml Glass Grocery Container</div>
                                                            </div>
                                                        </td>
                                                        <td>02 Oct, 2022</td>
                                                        <td>
                                                            <span class="text-secondary">$79.99</span>
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-soft-success">In Stock</span>
                                                        </td>
                                                        <td>37 PCS</td>
                                                    </tr><!-- end tr -->
                                                    <tr>
                                                        <td>
                                                            <a href="#!" class="fw-medium link-primary">#00156</a>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 me-2">
                                                                    <img src="assets/images/products/img-2.png" alt="" class="avatar-xs rounded-circle" />
                                                                </div>
                                                                <div class="flex-grow-1">One Seater Sofa</div>
                                                            </div>
                                                        </td>
                                                        <td>11 Oct, 2022</td>
                                                        <td>
                                                            <span class="text-secondary">$264.99</span>
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-soft-success">In Stock</span>
                                                        </td>
                                                        <td>23 PCS</td>
                                                    </tr><!-- end tr -->
                                                    <tr>
                                                        <td>
                                                            <a href="#!" class="fw-medium link-primary">#09102</a>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 me-2">
                                                                    <img src="assets/images/products/img-8.png" alt="" class="avatar-xs rounded-circle" />
                                                                </div>
                                                                <div class="flex-grow-1">Men's Running Shoes Active Grip</div>
                                                            </div>
                                                        </td>
                                                        <td>19 Nov, 2022</td>
                                                        <td>
                                                            <span class="text-secondary">$264.99</span>
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-soft-warning">Low Stock</span>
                                                        </td>
                                                        <td>23 PCS</td>
                                                    </tr><!-- end tr -->
                                                    </tbody><!-- end tbody -->
                                                </table><!-- end table -->
                                            </div>
                                        </div>
                                    </div> <!-- .card-->
                                </div> <!-- .col-->
                            </div> <!-- end row-->

                            <div class="row">
                                <div class="col-xl-12">
                                    <!-- card -->
                                    <div class="card card-height-100">
                                        <div class="card-header align-items-center d-flex">
                                            <h4 class="card-title mb-0 flex-grow-1">Top Retail Sales Location</h4>
                                            <div class="flex-shrink-0">
                                                <button type="button" class="btn btn-soft-primary btn-sm">
                                                    Export Report
                                                </button>
                                            </div>
                                        </div><!-- end card header -->

                                        <!-- card body -->
                                        <div class="card-body">

                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <div id="world-map-line-markers" data-colors='["--tb-light"]' style="height: 420px"></div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="mb-4">
                                                        <h6 class="text-muted mb-3 fw-medium fs-12 text-uppercase">All Users Statistics</h6>
                                                        <h4>1,87,42,102 <small class="text-muted fw-normal fs-13">users</small></h4>
                                                    </div>
                                                    <div>
                                                        <p class="mb-2 fw-medium">Current Activity</p>
                                                        <div class="progress mb-4">
                                                            <div class="progress-bar" role="progressbar" aria-label="Segment one" style="width: 8%" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-success" role="progressbar" aria-label="Segment two" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-info" role="progressbar" aria-label="Segment three" style="width: 14%" aria-valuenow="14" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-danger" role="progressbar" aria-label="Segment three" style="width: 7%" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-secondary" role="progressbar" aria-label="Segment three" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-dark" role="progressbar" aria-label="Segment three" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-warning" role="progressbar" aria-label="Segment three" style="width: 2%" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-light" role="progressbar" aria-label="Segment three" style="width: 14%" aria-valuenow="14" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>

                                                        <p><i class="ri-checkbox-blank-circle-fill text-primary align-bottom me-1"></i> Canada <span class="float-end">8%</span></p>
                                                        <p><i class="ri-checkbox-blank-circle-fill text-success align-bottom me-1"></i>Greenland <span class="float-end">20%</span></p>
                                                        <p><i class="ri-checkbox-blank-circle-fill text-info align-bottom me-1"></i>US <span class="float-end">14%</span></p>
                                                        <p><i class="ri-checkbox-blank-circle-fill text-secondary align-bottom me-1"></i>Russia <span class="float-end">25%</span></p>
                                                        <p><i class="ri-checkbox-blank-circle-fill text-danger align-bottom me-1"></i>Brazil <span class="float-end">7%</span></p>
                                                        <p><i class="ri-checkbox-blank-circle-fill text-dark align-bottom me-1"></i>Sydney <span class="float-end">10%</span></p>
                                                        <p><i class="ri-checkbox-blank-circle-fill text-warning align-bottom me-1"></i>Norway<span class="float-end">2%</span></p>
                                                        <p><i class="ri-checkbox-blank-circle-fill text-light align-bottom me-1"></i>China <span class="float-end">14%</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!-- end col -->
                            </div>

                        </div> <!-- end .h-100-->

                    </div> <!-- end col -->

                    <div class="col-auto layout-rightside-col">
                        <div class="overlay"></div>
                        <div class="layout-rightside">
                            <div class="card h-100 rounded-0">
                                <div class="widget-userlist" data-simplebar>
                                    <div class="card-body pb-0">
                                        <p class="text-muted text-uppercase fw-medium fs-13">Recent Chat</p>
                                        <ul class="hstack gap-2 chat-panel-list list-unstyled">
                                            <li>
                                                <a href="#!" class="text-center avatar-sm h-auto d-block">
                                                    <div class="chat-user-img online">
                                                        <img src="assets/images/users/avatar-1.jpg" class="avatar-sm rounded-circle chatlist-user-image" alt="">
                                                        <span class="user-status"></span>
                                                    </div>
                                                    <p class="text-muted mb-0 mt-2 text-truncate chatlist-user-name">Ashley Silva</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#!" class="text-center avatar-sm h-auto d-block">
                                                    <div class="chat-user-img online">
                                                        <img src="assets/images/users/avatar-2.jpg" class="avatar-sm rounded-circle chatlist-user-image" alt="">
                                                        <span class="user-status"></span>
                                                    </div>
                                                    <p class="text-muted mb-0 mt-2 text-truncate chatlist-user-name">Misty Taylor</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#!" class="text-center avatar-sm h-auto d-block">
                                                    <div class="chat-user-img away">
                                                        <img src="assets/images/users/avatar-3.jpg" class="avatar-sm rounded-circle chatlist-user-image" alt="">
                                                        <span class="user-status"></span>
                                                    </div>
                                                    <p class="text-muted mb-0 mt-2 text-truncate chatlist-user-name">Scott Wilson</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#!" class="text-center avatar-sm h-auto d-block">
                                                    <div class="chat-user-img online">
                                                        <img src="assets/images/users/avatar-4.jpg" class="avatar-sm rounded-circle chatlist-user-image" alt="">
                                                        <span class="user-status"></span>
                                                    </div>
                                                    <p class="text-muted mb-0 mt-2 text-truncate chatlist-user-name">Patricia Wilson</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#!" class="text-center avatar-sm h-auto d-block">
                                                    <div class="chat-user-img away">
                                                        <img src="assets/images/users/avatar-5.jpg" class="avatar-sm rounded-circle chatlist-user-image" alt="">
                                                        <span class="user-status"></span>
                                                    </div>
                                                    <p class="text-muted mb-0 mt-2 text-truncate chatlist-user-name">Allyson Wigfall</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="search-box flex-grow-1">
                                                <input type="text" class="form-control" id="searchResultList" autocomplete="off" placeholder="Search for ...">
                                                <i class="ri-search-line search-icon"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <ul class="chat-panel-list list-group list-group-flush mb-0 border-dashed">
                                            <li class="list-group-item">
                                                <div class="d-flex align-items-center gap-1">
                                                    <div class="flex-shrink-0 me-2">
                                                        <img src="assets/images/users/avatar-1.jpg" alt="" class="avatar-xs rounded-circle chatlist-user-image" />
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <a href="#!" class="stretched-link"><h6 class="mb-1 chatlist-user-name">Ashley Silva</h6></a>
                                                        <p class="chatlist-desc fs-13 text-info mb-0 text-truncate">Good Morning</p>
                                                    </div>
                                                    <div class="text-end">
                                                        <p class="mb-1 text-muted fs-12">04:32 PM</p>
                                                        <span class="badge badge-soft-info rounded-circle fs-10">4</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="d-flex align-items-center gap-1">
                                                    <div class="flex-shrink-0 me-2">
                                                        <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-xs rounded-circle chatlist-user-image" />
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <a href="#!" class="stretched-link"><h6 class="mb-1 chatlist-user-name">Misty Taylor</h6></a>
                                                        <p class="chatlist-desc fs-13 text-info mb-0 text-truncate">Okay, Byy</p>
                                                    </div>
                                                    <div class="text-end">
                                                        <p class="mb-1 text-muted fs-12">02:49 PM</p>
                                                        <span class="badge badge-soft-info rounded-circle fs-10">1</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="d-flex align-items-center gap-1">
                                                    <div class="flex-shrink-0 me-2">
                                                        <img src="assets/images/users/avatar-3.jpg" alt="" class="avatar-xs rounded-circle chatlist-user-image" />
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <a href="#!" class="stretched-link"><h6 class="mb-1 chatlist-user-name">Scott Wilson</h6></a>
                                                        <p class="chatlist-desc fs-13 text-info mb-0 text-truncate">Yeah everything is fine...</p>
                                                    </div>
                                                    <div class="text-end">
                                                        <p class="mb-1 text-muted fs-12">12:04 PM</p>
                                                        <span class="badge badge-soft-info rounded-circle fs-10">8</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="d-flex align-items-center gap-1">
                                                    <div class="flex-shrink-0 me-2">
                                                        <img src="assets/images/users/avatar-4.jpg" alt="" class="avatar-xs rounded-circle chatlist-user-image" />
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <a href="#!" class="stretched-link"><h6 class="mb-1 chatlist-user-name">Patricia Wilson</h6></a>
                                                        <p class="chatlist-desc fs-13 text-muted mb-0 text-truncate">Hey! there I'm available</p>
                                                    </div>
                                                    <div class="text-end align-self-start">
                                                        <p class="mb-1 text-muted fs-12">11:11 AM</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="d-flex align-items-center gap-1">
                                                    <div class="flex-shrink-0 me-2">
                                                        <img src="assets/images/users/avatar-5.jpg" alt="" class="avatar-xs rounded-circle chatlist-user-image" />
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <a href="#!" class="stretched-link"><h6 class="mb-1 chatlist-user-name">Allyson Wigfall</h6></a>
                                                        <p class="chatlist-desc fs-13 text-muted mb-0 text-truncate">I've finished it! See you so</p>
                                                    </div>
                                                    <div class="text-end align-self-start">
                                                        <p class="mb-1 text-muted fs-12">09:24 AM</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="d-flex align-items-center gap-1">
                                                    <div class="flex-shrink-0 me-2">
                                                        <img src="assets/images/users/avatar-6.jpg" alt="" class="avatar-xs rounded-circle chatlist-user-image" />
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <a href="#!" class="stretched-link"><h6 class="mb-1 chatlist-user-name">Martha Griffin</h6></a>
                                                        <p class="chatlist-desc fs-13 text-muted mb-0 text-truncate">Wow that's great</p>
                                                    </div>
                                                    <div class="text-end align-self-start">
                                                        <p class="mb-1 text-muted fs-12">16/11</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="d-flex align-items-center gap-1">
                                                    <div class="flex-shrink-0 me-2">
                                                        <img src="assets/images/users/avatar-7.jpg" alt="" class="avatar-xs rounded-circle chatlist-user-image" />
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <a href="#!" class="stretched-link"><h6 class="mb-1 chatlist-user-name">Mark Sargent</h6></a>
                                                        <p class="chatlist-desc fs-13 text-muted mb-0 text-truncate">Nice to meet you</p>
                                                    </div>
                                                    <div class="text-end align-self-start">
                                                        <p class="mb-1 text-muted fs-12">16/11</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="d-flex align-items-center gap-1">
                                                    <div class="flex-shrink-0 me-2">
                                                        <img src="assets/images/users/avatar-8.jpg" alt="" class="avatar-xs rounded-circle chatlist-user-image" />
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <a href="#!" class="stretched-link"><h6 class="mb-1 chatlist-user-name">Ray Stricklin</h6></a>
                                                        <p class="chatlist-desc fs-13 text-muted mb-0 text-truncate">Hey, Hi Ray Stricklin ...!</p>
                                                    </div>
                                                    <div class="text-end align-self-start">
                                                        <p class="mb-1 text-muted fs-12">16/11</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="d-flex align-items-center gap-1">
                                                    <div class="flex-shrink-0 me-2">
                                                        <img src="assets/images/users/avatar-9.jpg" alt="" class="avatar-xs rounded-circle chatlist-user-image" />
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <a href="#!" class="stretched-link"><h6 class="mb-1 chatlist-user-name">Frank Taylor</h6></a>
                                                        <p class="chatlist-desc fs-13 text-muted mb-0 text-truncate">Happy holiday 🙂</p>
                                                    </div>
                                                    <div class="text-end align-self-start">
                                                        <p class="mb-1 text-muted fs-12">15/11</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="d-flex align-items-center gap-1">
                                                    <div class="flex-shrink-0 me-2">
                                                        <img src="assets/images/users/avatar-10.jpg" alt="" class="avatar-xs rounded-circle chatlist-user-image" />
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <a href="#!" class="stretched-link"><h6 class="mb-1 chatlist-user-name">Karla Basso</h6></a>
                                                        <p class="chatlist-desc fs-13 text-muted mb-0 text-truncate">Okay, Sure.</p>
                                                    </div>
                                                    <div class="text-end align-self-start">
                                                        <p class="mb-1 text-muted fs-12">14/11</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="d-flex align-items-center gap-1">
                                                    <div class="flex-shrink-0 me-2">
                                                        <img src="assets/images/users/avatar-1.jpg" alt="" class="avatar-xs rounded-circle chatlist-user-image" />
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <a href="#!" class="stretched-link"><h6 class="mb-1 chatlist-user-name">Sally McPherson</h6></a>
                                                        <p class="chatlist-desc fs-13 text-muted mb-0 text-truncate">Thanks</p>
                                                    </div>
                                                    <div class="text-end align-self-start">
                                                        <p class="mb-1 text-muted fs-12">14/11</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="d-flex align-items-center gap-1">
                                                    <div class="flex-shrink-0 me-2">
                                                        <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-xs rounded-circle chatlist-user-image" />
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <a href="#!" class="stretched-link"><h6 class="mb-1 chatlist-user-name">Lizzie Beil</h6></a>
                                                        <p class="chatlist-desc fs-13 text-muted mb-0 text-truncate">Our next meeting tomorrow at 10.00 AM</p>
                                                    </div>
                                                    <div class="text-end align-self-start">
                                                        <p class="mb-1 text-muted fs-12">13/11</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="d-flex align-items-center gap-1">
                                                    <div class="flex-shrink-0 me-2">
                                                        <img src="assets/images/users/avatar-3.jpg" alt="" class="avatar-xs rounded-circle chatlist-user-image" />
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <a href="#!" class="stretched-link"><h6 class="mb-1 chatlist-user-name">Mark Williams</h6></a>
                                                        <p class="chatlist-desc fs-13 text-muted mb-0 text-truncate">See you tomorrow</p>
                                                    </div>
                                                    <div class="text-end align-self-start">
                                                        <p class="mb-1 text-muted fs-12">12/11</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="d-flex align-items-center gap-1">
                                                    <div class="flex-shrink-0 me-2">
                                                        <img src="assets/images/users/avatar-4.jpg" alt="" class="avatar-xs rounded-circle chatlist-user-image" />
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <a href="#!" class="stretched-link"><h6 class="mb-1 chatlist-user-name">Vina Scott</h6></a>
                                                        <p class="chatlist-desc fs-13 text-muted mb-0 text-truncate">Yeah everything is fine...</p>
                                                    </div>
                                                    <div class="text-end align-self-start">
                                                        <p class="mb-1 text-muted fs-12">11/11</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="d-flex align-items-center gap-1">
                                                    <div class="flex-shrink-0 me-2">
                                                        <img src="assets/images/users/avatar-5.jpg" alt="" class="avatar-xs rounded-circle chatlist-user-image" />
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <a href="#!" class="stretched-link"><h6 class="mb-1 chatlist-user-name">Keli Henry</h6></a>
                                                        <p class="chatlist-desc fs-13 text-muted mb-0 text-truncate">Good afternoon</p>
                                                    </div>
                                                    <div class="text-end align-self-start">
                                                        <p class="mb-1 text-muted fs-12">11/11</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="widget-user-chatlist">
                                    <div class="chat-topbar p-4 border-bottom border-bottom-dashed">
                                        <div class="align-items-center d-flex">
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-2">
                                                        <div class="flex-shrink-0 chat-user-img online align-self-center me-2 ms-0">
                                                            <div class="avatar-xs">
                                                                <img src="assets/images/users/avatar-1.jpg" class="rounded-circle img-fluid userprofile" alt="">
                                                                <span class="user-status"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h5 class="fs-14 mb-0 profile-username">Ashley Silva</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div class="d-flex align-items-start gap-2">
                                                    <div class="dropdown">
                                                        <a class="btn btn-ghost-secondary btn-sm fs-16" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="ri-more-2-fill"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#"><i class="bi bi-archive text-muted me-2"></i> Archive</a>
                                                            <a class="dropdown-item" href="#"><i class="bi bi-mic-mute text-muted me-2"></i> Muted</a>
                                                            <a class="dropdown-item" href="#"><i class="bi bi-trash3 text-muted me-2"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <button type="button" class="btn btn-soft-danger btn-sm fs-16" id="close-chatlist"><i class="ri-close-fill"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end chat-topbar -->
                                    <div class="card-body p-0">
                                        <div>
                                            <div id="users-chat">
                                                <div class="chat-conversation p-3" id="chat-conversation" data-simplebar>
                                                    <ul class="list-unstyled chat-conversation-list chat-sm" id="users-conversation">
                                                        <li class="chat-list left">
                                                            <div class="conversation-list">
                                                                <div class="chat-avatar">
                                                                    <img src="assets/images/users/avatar-1.jpg" alt="">
                                                                </div>
                                                                <div class="user-chat-content">
                                                                    <div class="ctext-wrap">
                                                                        <div class="ctext-wrap-content">
                                                                            <p class="mb-0 ctext-content">Good morning 😊</p>
                                                                        </div>
                                                                        <div class="dropdown align-self-start message-box-drop">
                                                                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                <i class="bi bi-three-dots-vertical"></i>
                                                                            </a>
                                                                            <div class="dropdown-menu">
                                                                                <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-reply me-2 text-muted align-bottom"></i>Reply</a>
                                                                                <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-share me-2 text-muted align-bottom"></i>Forward</a>
                                                                                <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-files me-2 text-muted align-bottom"></i>Copy</a>
                                                                                <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-bookmark me-2 text-muted align-bottom"></i>Bookmark</a>
                                                                                <a class="dropdown-item delete-item" href="javascript:void(0)"><i class="bi bi-trash3 me-2 text-muted align-bottom"></i>Delete</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="conversation-name"><small class="text-muted time">09:07 am</small> <span class="text-success check-message-icon"><i class="ri-check-double-line align-bottom"></i></span></div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <!-- chat-list -->

                                                        <li class="chat-list right">
                                                            <div class="conversation-list">
                                                                <div class="user-chat-content">
                                                                    <div class="ctext-wrap">
                                                                        <div class="ctext-wrap-content">
                                                                            <p class="mb-0 ctext-content">Good morning, How are you? What about our next meeting?</p>
                                                                        </div>
                                                                        <div class="dropdown align-self-start message-box-drop">
                                                                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                <i class="bi bi-three-dots-vertical"></i>
                                                                            </a>
                                                                            <div class="dropdown-menu">
                                                                                <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-reply me-2 text-muted align-bottom"></i>Reply</a>
                                                                                <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-share me-2 text-muted align-bottom"></i>Forward</a>
                                                                                <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-files me-2 text-muted align-bottom"></i>Copy</a>
                                                                                <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-bookmark me-2 text-muted align-bottom"></i>Bookmark</a>
                                                                                <a class="dropdown-item delete-item" href="javascript:void(0)"><i class="bi bi-trash3 me-2 text-muted align-bottom"></i>Delete</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="conversation-name"><small class="text-muted time">09:08 am</small> <span class="text-success check-message-icon"><i class="ri-check-double-line align-bottom"></i></span></div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <!-- chat-list -->

                                                        <li class="chat-list left">
                                                            <div class="conversation-list">
                                                                <div class="chat-avatar">
                                                                    <img src="assets/images/users/avatar-1.jpg" alt="">
                                                                </div>
                                                                <div class="user-chat-content">
                                                                    <div class="ctext-wrap">
                                                                        <div class="ctext-wrap-content">
                                                                            <p class="mb-0 ctext-content">Yeah everything is fine. Our next meeting tomorrow at 10.00 AM</p>
                                                                        </div>
                                                                        <div class="dropdown align-self-start message-box-drop">
                                                                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                <i class="bi bi-three-dots-vertical"></i>
                                                                            </a>
                                                                            <div class="dropdown-menu">
                                                                                <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-reply me-2 text-muted align-bottom"></i>Reply</a>
                                                                                <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-share me-2 text-muted align-bottom"></i>Forward</a>
                                                                                <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-files me-2 text-muted align-bottom"></i>Copy</a>
                                                                                <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-bookmark me-2 text-muted align-bottom"></i>Bookmark</a>
                                                                                <a class="dropdown-item delete-item" href="javascript:void(0)"><i class="bi bi-trash3 me-2 text-muted align-bottom"></i>Delete</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ctext-wrap">
                                                                        <div class="ctext-wrap-content">
                                                                            <p class="mb-0 ctext-content">Yeah everything is fine.</p>
                                                                        </div>
                                                                        <div class="dropdown align-self-start message-box-drop">
                                                                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                <i class="bi bi-three-dots-vertical"></i>
                                                                            </a>
                                                                            <div class="dropdown-menu">
                                                                                <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-reply me-2 text-muted align-bottom"></i>Reply</a>
                                                                                <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-share me-2 text-muted align-bottom"></i>Forward</a>
                                                                                <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-files me-2 text-muted align-bottom"></i>Copy</a>
                                                                                <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-bookmark me-2 text-muted align-bottom"></i>Bookmark</a>
                                                                                <a class="dropdown-item delete-item" href="javascript:void(0)"><i class="bi bi-trash3 me-2 text-muted align-bottom"></i>Delete</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ctext-wrap">
                                                                        <div class="ctext-wrap-content">
                                                                            <p class="mb-0 ctext-content">Hey, I'm going to meet a friend of mine at the department store. I have to buy some presents for my parents 🎁.</p>
                                                                        </div>
                                                                        <div class="dropdown align-self-start message-box-drop">
                                                                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                <i class="bi bi-three-dots-vertical"></i>
                                                                            </a>
                                                                            <div class="dropdown-menu">
                                                                                <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-reply me-2 text-muted align-bottom"></i>Reply</a>
                                                                                <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-share me-2 text-muted align-bottom"></i>Forward</a>
                                                                                <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-files me-2 text-muted align-bottom"></i>Copy</a>
                                                                                <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-bookmark me-2 text-muted align-bottom"></i>Bookmark</a>
                                                                                <a class="dropdown-item delete-item" href="javascript:void(0)"><i class="bi bi-trash3 me-2 text-muted align-bottom"></i>Delete</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="conversation-name"><small class="text-muted time">09:10 am</small> <span class="text-success check-message-icon"><i class="ri-check-double-line align-bottom"></i></span></div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <!-- chat-list -->

                                                        <li class="chat-list right">
                                                            <div class="conversation-list">
                                                                <div class="user-chat-content">
                                                                    <div class="ctext-wrap">
                                                                        <div class="ctext-wrap-content">
                                                                            <p class="mb-0 ctext-content">Wow that's great</p>
                                                                        </div>
                                                                        <div class="dropdown align-self-start message-box-drop">
                                                                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                <i class="bi bi-three-dots-vertical"></i>
                                                                            </a>
                                                                            <div class="dropdown-menu">
                                                                                <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-reply me-2 text-muted align-bottom"></i>Reply</a>
                                                                                <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-share me-2 text-muted align-bottom"></i>Forward</a>
                                                                                <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-files me-2 text-muted align-bottom"></i>Copy</a>
                                                                                <a class="dropdown-item" href="javascript:void(0)"><i class="bi bi-bookmark me-2 text-muted align-bottom"></i>Bookmark</a>
                                                                                <a class="dropdown-item delete-item" href="javascript:void(0)"><i class="bi bi-trash3 me-2 text-muted align-bottom"></i>Delete</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="conversation-name"><small class="text-muted time">09:12 am</small> <span class="text-success check-message-icon"><i class="ri-check-double-line align-bottom"></i></span></div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <!-- chat-list -->

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="position-relative p-4 border-top border-top-dashed">
                                        <form class="chat-form" autocomplete="off">
                                            <div class="row g-2">
                                                <div class="col">
                                                    <div class="position-relative">
                                                        <input type="text" id="chat-input" class="form-control border-light bg-light" placeholder="Enter Message...">
                                                        <div class="chat-input-feedback">
                                                            Please enter a message
                                                        </div>
                                                    </div>
                                                </div><!-- end col -->
                                                <div class="col-auto">
                                                    <button type="submit" class="btn btn-primary"><i class="bi bi-send-fill"></i></button>
                                                </div><!-- end col -->
                                            </div><!-- end row -->
                                        </form>
                                    </div>
                                </div>
                            </div> <!-- end card-->
                        </div> <!-- end .rightbar-->
                    </div> <!-- end col -->
                </div>

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>document.write(new Date().getFullYear())</script> © Hybrix.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Design & Develop by Themesbrand
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->



<!--start back-to-top-->
<button onclick="topFunction()" id="back-to-top" class="btn btn-danger btn-icon" style="bottom: 25px">
    <i class="ri-arrow-up-line"></i>
</button>
<!--end back-to-top-->

<!--preloader-->
<div id="preloader">
    <div id="status">
        <div class="spinner-border text-primary avatar-sm" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
</div>

<!-- Theme Settings -->
<div class="offcanvas offcanvas-end border-0" tabindex="-1" id="theme-settings-offcanvas">
    <div class="d-flex align-items-center bg-primary bg-gradient p-3 offcanvas-header">
        <h5 class="m-0 me-2 text-white">Theme Customizer</h5>

        <button type="button" class="btn-close btn-close-white ms-auto" id="customizerclose-btn" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body p-0">
        <div data-simplebar class="h-100">
            <div class="p-4">
                <h6 class="fw-semibold fs-15">Layout</h6>
                <p class="text-muted fs-13">Choose your layout</p>

                <div class="row">
                    <div class="col-4">
                        <div class="form-check card-radio">
                            <input id="customizer-layout01" name="data-layout" type="radio" value="vertical" class="form-check-input">
                            <label class="form-check-label p-0 avatar-md w-100" for="customizer-layout01">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                            </label>
                        </div>
                        <h5 class="fs-13 text-center mt-2">Vertical</h5>
                    </div>
                    <div class="col-4">
                        <div class="form-check card-radio">
                            <input id="customizer-layout02" name="data-layout" type="radio" value="horizontal" class="form-check-input">
                            <label class="form-check-label p-0 avatar-md w-100" for="customizer-layout02">
                                        <span class="d-flex h-100 flex-column gap-1">
                                            <span class="bg-light d-flex p-1 gap-1 align-items-center">
                                                <span class="d-block p-1 bg-primary-subtle rounded me-1"></span>
                                                <span class="d-block p-1 pb-0 px-2 bg-primary-subtle ms-auto"></span>
                                                <span class="d-block p-1 pb-0 px-2 bg-primary-subtle"></span>
                                            </span>
                                            <span class="bg-light d-block p-1"></span>
                                            <span class="bg-light d-block p-1 mt-auto"></span>
                                        </span>
                            </label>
                        </div>
                        <h5 class="fs-13 text-center mt-2">Horizontal</h5>
                    </div>
                    <div class="col-4">
                        <div class="form-check card-radio">
                            <input id="customizer-layout03" name="data-layout" type="radio" value="twocolumn" class="form-check-input">
                            <label class="form-check-label p-0 avatar-md w-100" for="customizer-layout03">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1">
                                                    <span class="d-block p-1 bg-primary-subtle mb-2"></span>
                                                    <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                            </label>
                        </div>
                        <h5 class="fs-13 text-center mt-2">Two Column</h5>
                    </div>
                    <!-- end col -->
                </div>

                <h6 class="mt-4 fw-semibold">Color Scheme</h6>
                <p class="text-muted fs-13">Choose Light or Dark Scheme.</p>

                <div class="colorscheme-cardradio">
                    <div class="row">
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-bs-theme" id="layout-mode-light" value="light">
                                <label class="form-check-label p-0 avatar-md w-100" for="layout-mode-light">
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                </label>
                            </div>
                            <h5 class="fs-13 text-center mt-2">Light</h5>
                        </div>

                        <div class="col-4">
                            <div class="form-check card-radio dark">
                                <input class="form-check-input" type="radio" name="data-bs-theme" id="layout-mode-dark" value="dark">
                                <label class="form-check-label p-0 avatar-md w-100 bg-dark" for="layout-mode-dark">
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-soft-light d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 px-2 bg-soft-light rounded mb-2"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-soft-light d-block p-1"></span>
                                                        <span class="bg-soft-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                </label>
                            </div>
                            <h5 class="fs-13 text-center mt-2">Dark</h5>
                        </div>
                    </div>
                </div>

                <div id="layout-width">
                    <h6 class="mt-4 fw-semibold fs-15">Layout Width</h6>
                    <p class="text-muted fs-13">Choose Fluid or Boxed layout.</p>

                    <div class="row">
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-layout-width" id="layout-width-fluid" value="fluid">
                                <label class="form-check-label p-0 avatar-md w-100" for="layout-width-fluid">
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                </label>
                            </div>
                            <h5 class="fs-13 text-center mt-2">Fluid</h5>
                        </div>
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-layout-width" id="layout-width-boxed" value="boxed">
                                <label class="form-check-label p-0 avatar-md w-100 px-2" for="layout-width-boxed">
                                            <span class="d-flex gap-1 h-100 border-start border-end">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                </label>
                            </div>
                            <h5 class="fs-13 text-center mt-2">Boxed</h5>
                        </div>
                    </div>
                </div>

                <div id="layout-position">
                    <h6 class="mt-4 fw-semibold fs-15">Layout Position</h6>
                    <p class="text-muted fs-13">Choose Fixed or Scrollable Layout Position.</p>

                    <div class="btn-group radio" role="group">
                        <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-fixed" value="fixed">
                        <label class="btn btn-light w-sm" for="layout-position-fixed">Fixed</label>

                        <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-scrollable" value="scrollable">
                        <label class="btn btn-light w-sm ms-0" for="layout-position-scrollable">Scrollable</label>
                    </div>
                </div>
                <h6 class="mt-4 fw-semibold fs-13">Topbar Color</h6>
                <p class="text-muted">Choose Light or Dark Topbar Color.</p>

                <div class="row">
                    <div class="col-4">
                        <div class="form-check card-radio">
                            <input class="form-check-input" type="radio" name="data-topbar" id="topbar-color-light" value="light">
                            <label class="form-check-label p-0 avatar-md w-100" for="topbar-color-light">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                            </label>
                        </div>
                        <h5 class="fs-13 text-center mt-2">Light</h5>
                    </div>
                    <div class="col-4">
                        <div class="form-check card-radio">
                            <input class="form-check-input" type="radio" name="data-topbar" id="topbar-color-dark" value="dark">
                            <label class="form-check-label p-0 avatar-md w-100" for="topbar-color-dark">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-primary d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                            </label>
                        </div>
                        <h5 class="fs-13 text-center mt-2">Dark</h5>
                    </div>
                </div>

                <div id="sidebar-size">
                    <h6 class="mt-4 fw-semibold fs-15">Sidebar Size</h6>
                    <p class="text-muted fs-13">Choose a size of Sidebar.</p>

                    <div class="row">
                        <div class="col-4">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-default" value="lg">
                                <label class="form-check-label p-0 avatar-md w-100" for="sidebar-size-default">
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                </label>
                            </div>
                            <h5 class="fs-13 text-center mt-2">Default</h5>
                        </div>

                        <div class="col-4">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-compact" value="md">
                                <label class="form-check-label p-0 avatar-md w-100" for="sidebar-size-compact">
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 bg-primary-subtle rounded mb-2"></span>
                                                        <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                </label>
                            </div>
                            <h5 class="fs-13 text-center mt-2">Compact</h5>
                        </div>

                        <div class="col-4">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-small" value="sm">
                                <label class="form-check-label p-0 avatar-md w-100" for="sidebar-size-small">
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1">
                                                        <span class="d-block p-1 bg-primary-subtle mb-2"></span>
                                                        <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                </label>
                            </div>
                            <h5 class="fs-13 text-center mt-2">Small (Icon View)</h5>
                        </div>

                        <div class="col-4">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-small-hover" value="sm-hover">
                                <label class="form-check-label p-0 avatar-md w-100" for="sidebar-size-small-hover">
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1">
                                                        <span class="d-block p-1 bg-primary-subtle mb-2"></span>
                                                        <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                </label>
                            </div>
                            <h5 class="fs-13 text-center mt-2">Small Hover View</h5>
                        </div>
                    </div>
                </div>

                <div id="sidebar-view">
                    <h6 class="mt-4 fw-semibold fs-15">Sidebar View</h6>
                    <p class="text-muted fs-13">Choose Default or Detached Sidebar view.</p>

                    <div class="row">
                        <div class="col-4">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-layout-style" id="sidebar-view-default" value="default">
                                <label class="form-check-label p-0 avatar-md w-100" for="sidebar-view-default">
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                </label>
                            </div>
                            <h5 class="fs-13 text-center mt-2">Default</h5>
                        </div>
                        <div class="col-4">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-layout-style" id="sidebar-view-detached" value="detached">
                                <label class="form-check-label p-0 avatar-md w-100" for="sidebar-view-detached">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-flex p-1 gap-1 align-items-center px-2">
                                                    <span class="d-block p-1 bg-primary-subtle rounded me-1"></span>
                                                    <span class="d-block p-1 pb-0 px-2 bg-primary-subtle ms-auto"></span>
                                                    <span class="d-block p-1 pb-0 px-2 bg-primary-subtle"></span>
                                                </span>
                                                <span class="d-flex gap-1 h-100 p-1 px-2">
                                                    <span class="flex-shrink-0">
                                                        <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                            <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                            <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                            <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        </span>
                                                    </span>
                                                </span>
                                                <span class="bg-light d-block p-1 mt-auto px-2"></span>
                                            </span>
                                </label>
                            </div>
                            <h5 class="fs-13 text-center mt-2">Detached</h5>
                        </div>
                    </div>
                </div>
                <div id="sidebar-color">
                    <h6 class="mt-4 fw-semibold fs-15">Sidebar Color</h6>
                    <p class="text-muted fs-13">Choose a color of Sidebar.</p>

                    <div class="row">
                        <div class="col-4">
                            <div class="form-check sidebar-setting card-radio" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient.show">
                                <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-light" value="light">
                                <label class="form-check-label p-0 avatar-md w-100" for="sidebar-color-light">
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-white border-end d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                </label>
                            </div>
                            <h5 class="fs-13 text-center mt-2">Light</h5>
                        </div>
                        <div class="col-4">
                            <div class="form-check sidebar-setting card-radio" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient.show">
                                <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-dark" value="dark">
                                <label class="form-check-label p-0 avatar-md w-100" for="sidebar-color-dark">
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-primary d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 px-2 bg-soft-light rounded mb-2"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                </label>
                            </div>
                            <h5 class="fs-13 text-center mt-2">Dark</h5>
                        </div>
                        <div class="col-4">
                            <button class="btn btn-link avatar-md w-100 p-0 overflow-hidden border collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient" aria-expanded="false" aria-controls="collapseBgGradient">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-vertical-gradient d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-soft-light rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                            </button>
                            <h5 class="fs-13 text-center mt-2">Gradient</h5>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="collapse" id="collapseBgGradient">
                        <div class="d-flex gap-2 flex-wrap img-switch p-2 px-3 bg-light rounded">

                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient" value="gradient">
                                <label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient">
                                    <span class="avatar-title rounded-circle bg-vertical-gradient"></span>
                                </label>
                            </div>
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient-2" value="gradient-2">
                                <label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient-2">
                                    <span class="avatar-title rounded-circle bg-vertical-gradient-2"></span>
                                </label>
                            </div>
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient-3" value="gradient-3">
                                <label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient-3">
                                    <span class="avatar-title rounded-circle bg-vertical-gradient-3"></span>
                                </label>
                            </div>
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient-4" value="gradient-4">
                                <label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient-4">
                                    <span class="avatar-title rounded-circle bg-vertical-gradient-4"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="sidebar-img">
                    <h6 class="mt-4 fw-semibold fs-15">Sidebar Images</h6>
                    <p class="text-muted fs-13">Choose a image of Sidebar.</p>

                    <div class="d-flex gap-2 flex-wrap img-switch">
                        <div class="form-check sidebar-setting card-radio">
                            <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-none" value="none">
                            <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-none">
                                        <span class="avatar-md w-auto bg-light d-flex align-items-center justify-content-center">
                                            <i class="ri-close-fill fs-20"></i>
                                        </span>
                            </label>
                        </div>

                        <div class="form-check sidebar-setting card-radio">
                            <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-01" value="img-1">
                            <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-01">
                                <img src="assets/images/sidebar/img-1.jpg" alt="" class="avatar-md w-auto object-cover">
                            </label>
                        </div>

                        <div class="form-check sidebar-setting card-radio">
                            <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-02" value="img-2">
                            <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-02">
                                <img src="assets/images/sidebar/img-2.jpg" alt="" class="avatar-md w-auto object-cover">
                            </label>
                        </div>
                        <div class="form-check sidebar-setting card-radio">
                            <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-03" value="img-3">
                            <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-03">
                                <img src="assets/images/sidebar/img-3.jpg" alt="" class="avatar-md w-auto object-cover">
                            </label>
                        </div>
                        <div class="form-check sidebar-setting card-radio">
                            <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-04" value="img-4">
                            <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-04">
                                <img src="assets/images/sidebar/img-4.jpg" alt="" class="avatar-md w-auto object-cover">
                            </label>
                        </div>
                    </div>
                </div>

                <div id="preloader-menu">
                    <h6 class="mt-4 fw-semibold fs-15">Preloader</h6>
                    <p class="text-muted fs-13">Choose a preloader.</p>

                    <div class="row">
                        <div class="col-4">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-preloader" id="preloader-view-custom" value="enable">
                                <label class="form-check-label p-0 avatar-md w-100" for="preloader-view-custom">
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                    <!-- <div id="preloader"> -->
                                    <div id="status" class="d-flex align-items-center justify-content-center">
                                        <div class="spinner-border text-primary avatar-xxs m-auto" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                    </div>
                                    <!-- </div> -->
                                </label>
                            </div>
                            <h5 class="fs-13 text-center mt-2">Enable</h5>
                        </div>
                        <div class="col-4">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-preloader" id="preloader-view-none" value="disable">
                                <label class="form-check-label p-0 avatar-md w-100" for="preloader-view-none">
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                </label>
                            </div>
                            <h5 class="fs-13 text-center mt-2">Disable</h5>
                        </div>
                    </div>

                </div><!-- end preloader-menu -->
            </div>
        </div>

    </div>
    <div class="offcanvas-footer border-top p-3 text-center">
        <div class="row">
            <div class="col-6">
                <button type="button" class="btn btn-light w-100" id="reset-layout">Reset</button>
            </div>
            <div class="col-6">
                <a href="#!" target="_blank" class="btn btn-primary w-100">Buy Now</a>
            </div>
        </div>
    </div>
</div>

<!-- JAVASCRIPT -->
<script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
<script src="{{ asset('assets/js/plugins.js') }}"></script>

<!-- apexcharts -->
<script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>

<!-- Vector map-->
<script src="{{ asset('assets/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
<script src="{{ asset('assets/libs/jsvectormap/maps/world-merc.js') }}"></script>

<!--Swiper slider js-->
<script src="{{ asset('assets/libs/swiper/swiper-bundle.min.js') }}"></script>

<!-- Dashboard init -->
<script src="{{ asset('assets/js/pages/dashboard-ecommerce.init.js') }}"></script>

<!-- App js -->
<script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>
