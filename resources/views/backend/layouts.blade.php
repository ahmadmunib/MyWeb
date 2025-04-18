<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="light" data-toggled="close">

<head>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="Description" content="">
    <meta name="Author" content="Othman Group DOO">
	<meta name="keywords" content="">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('themes/shash_b5'.'/assets/images/brand-logos/favicon.ico') }}" type="image/x-icon">

    <!-- Choices JS -->
    <script src="{{ asset('themes/shash_b5'.'/assets/libs/choices.js/public/assets/scripts/choices.min.js') }}"></script>

    <!-- Main Theme Js -->
    <script src="{{ asset('themes/shash_b5'.'/assets/js/main.js') }}"></script>

    <!-- Bootstrap Css -->
    <link id="style" href="{{ asset('themes/shash_b5'.'/assets/libs/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" >

    <!-- Style Css -->
    <link href="{{ asset('themes/shash_b5'.'/assets/css/styles.min.css') }}" rel="stylesheet" >

    <!-- Icons Css -->
    <link href="{{ asset('themes/shash_b5'.'/assets/css/icons.css') }}" rel="stylesheet" >

    <!-- Node Waves Css -->
    <link href="{{ asset('themes/shash_b5'.'/assets/libs/node-waves/waves.min.css') }}" rel="stylesheet" >

    <!-- Simplebar Css -->
    <link href="{{ asset('themes/shash_b5'.'/assets/libs/simplebar/simplebar.min.css') }}" rel="stylesheet" >

    <!-- Color Picker Css -->
    <link rel="stylesheet" href="{{ asset('themes/shash_b5'.'/assets/libs/flatpickr/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/shash_b5'.'/assets/libs/@simonwep/pickr/themes/nano.min.css') }}">

    <!-- Choices Css -->
    <link rel="stylesheet" href="{{ asset('themes/shash_b5'.'/assets/libs/choices.js/public/assets/styles/choices.min.css') }}">

    <!-- Jsvector Css -->
    <link rel="stylesheet" href="{{ asset('themes/shash_b5'.'/assets/libs/jsvectormap/css/jsvectormap.min.css') }}">

    <!-- Swiper Css -->
    <link rel="stylesheet" href="{{ asset('themes/shash_b5'.'/assets/libs/swiper/swiper-bundle.min.css') }}">

    <!-- Grid Css -->
    <link rel="stylesheet" href="{{ asset('themes/shash_b5'.'/assets/libs/gridjs/theme/mermaid.min.css') }}">

</head>

<body>

    <!-- Start Switcher -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="switcher-canvas" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title text-default" id="offcanvasRightLabel">Switcher</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <nav class="border-bottom border-block-end-dashed">
                <div class="nav nav-tabs nav-justified" id="switcher-main-tab" role="tablist">
                    <button class="nav-link active" id="switcher-home-tab" data-bs-toggle="tab" data-bs-target="#switcher-home"
                        type="button" role="tab" aria-controls="switcher-home" aria-selected="true">Theme Styles</button>
                    <button class="nav-link" id="switcher-profile-tab" data-bs-toggle="tab" data-bs-target="#switcher-profile"
                        type="button" role="tab" aria-controls="switcher-profile" aria-selected="false">Theme Colors</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active border-0" id="switcher-home" role="tabpanel" aria-labelledby="switcher-home-tab"
                    tabindex="0">
                    <div class="">
                        <p class="switcher-style-head">Theme Color Mode:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-light-theme">
                                        Light
                                    </label>
                                    <input class="form-check-input" type="radio" name="theme-style" id="switcher-light-theme"
                                        checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-dark-theme">
                                        Dark
                                    </label>
                                    <input class="form-check-input" type="radio" name="theme-style" id="switcher-dark-theme">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Directions:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-ltr">
                                        LTR
                                    </label>
                                    <input class="form-check-input" type="radio" name="direction" id="switcher-ltr" checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-rtl">
                                        RTL
                                    </label>
                                    <input class="form-check-input" type="radio" name="direction" id="switcher-rtl">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Navigation Styles:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-vertical">
                                        Vertical
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-style" id="switcher-vertical"
                                        checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-horizontal">
                                        Horizontal
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-style"
                                        id="switcher-horizontal">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navigation-menu-styles">
                        <p class="switcher-style-head">Vertical & Horizontal Menu Styles:</p>
                        <div class="row switcher-style gx-0 pb-2 gy-2">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-menu-click">
                                        Menu Click
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                        id="switcher-menu-click">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-menu-hover">
                                        Menu Hover
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                        id="switcher-menu-hover">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-icon-click">
                                        Icon Click
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                        id="switcher-icon-click">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-icon-hover">
                                        Icon Hover
                                    </label>
                                    <input class="form-check-input" type="radio" name="navigation-menu-styles"
                                        id="switcher-icon-hover">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidemenu-layout-styles">
                        <p class="switcher-style-head">Sidemenu Layout Styles:</p>
                        <div class="row switcher-style gx-0 pb-2 gy-2">
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-default-menu">
                                        Default Menu
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-default-menu" checked>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-closed-menu">
                                        Closed Menu
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-closed-menu">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-icontext-menu">
                                        Icon Text
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-icontext-menu">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-icon-overlay">
                                        Icon Overlay
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-icon-overlay">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-detached">
                                        Detached
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-detached">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-double-menu">
                                        Double Menu
                                    </label>
                                    <input class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-double-menu">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Page Styles:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-regular">
                                        Regular
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-styles" id="switcher-regular"
                                        checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-classic">
                                        Classic
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-styles" id="switcher-classic">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Layout Width Styles:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-full-width">
                                        Full Width
                                    </label>
                                    <input class="form-check-input" type="radio" name="layout-width" id="switcher-full-width"
                                        checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-boxed">
                                        Boxed
                                    </label>
                                    <input class="form-check-input" type="radio" name="layout-width" id="switcher-boxed">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Menu Positions:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-menu-fixed">
                                        Fixed
                                    </label>
                                    <input class="form-check-input" type="radio" name="menu-positions" id="switcher-menu-fixed"
                                        checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-menu-scroll">
                                        Scrollable
                                    </label>
                                    <input class="form-check-input" type="radio" name="menu-positions" id="switcher-menu-scroll">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Header Positions:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-header-fixed">
                                        Fixed
                                    </label>
                                    <input class="form-check-input" type="radio" name="header-positions"
                                        id="switcher-header-fixed" checked>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-header-scroll">
                                        Scrollable
                                    </label>
                                    <input class="form-check-input" type="radio" name="header-positions"
                                        id="switcher-header-scroll">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Loader:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-loader-enable">
                                        Enable
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-loader"
                                        id="switcher-loader-enable">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select">
                                    <label class="form-check-label" for="switcher-loader-disable">
                                        Disable
                                    </label>
                                    <input class="form-check-input" type="radio" name="page-loader"
                                        id="switcher-loader-disable" checked>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade border-0" id="switcher-profile" role="tabpanel" aria-labelledby="switcher-profile-tab" tabindex="0">
                    <div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Menu Colors:</p>
                            <div class="d-flex switcher-style pb-2">
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-white" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Light Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-light">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-dark" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Dark Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-dark" checked>
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Color Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-primary">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-gradient" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Gradient Menu" type="radio" name="menu-colors"
                                        id="switcher-menu-gradient">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-transparent"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Transparent Menu"
                                        type="radio" name="menu-colors" id="switcher-menu-transparent">
                                </div>
                            </div>
                            <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Menu dynamically change from below Theme Primary color picker</div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Header Colors:</p>
                            <div class="d-flex switcher-style pb-2">
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-white" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Light Header" type="radio" name="header-colors"
                                        id="switcher-header-light" checked>
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-dark" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Dark Header" type="radio" name="header-colors"
                                        id="switcher-header-dark">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Color Header" type="radio" name="header-colors"
                                        id="switcher-header-primary">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-gradient" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Gradient Header" type="radio" name="header-colors"
                                        id="switcher-header-gradient">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-transparent" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Transparent Header" type="radio" name="header-colors"
                                        id="switcher-header-transparent">
                                </div>
                            </div>
                            <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Header dynamically change from below Theme Primary color picker</div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Theme Primary:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-1" type="radio"
                                        name="theme-primary" id="switcher-primary">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-2" type="radio"
                                        name="theme-primary" id="switcher-primary1">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-3" type="radio" name="theme-primary"
                                        id="switcher-primary2">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-4" type="radio" name="theme-primary"
                                        id="switcher-primary3">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-primary-5" type="radio" name="theme-primary"
                                        id="switcher-primary4">
                                </div>
                                <div class="form-check switch-select ps-0 mt-1 color-primary-light">
                                    <div class="theme-container-primary"></div>
                                    <div class="pickr-container-primary"></div>
                                </div>
                            </div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Theme Background:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-1" type="radio"
                                        name="theme-background" id="switcher-background">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-2" type="radio"
                                        name="theme-background" id="switcher-background1">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-3" type="radio" name="theme-background"
                                        id="switcher-background2">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-4" type="radio"
                                        name="theme-background" id="switcher-background3">
                                </div>
                                <div class="form-check switch-select me-3">
                                    <input class="form-check-input color-input color-bg-5" type="radio"
                                        name="theme-background" id="switcher-background4">
                                </div>
                                <div class="form-check switch-select ps-0 mt-1 tooltip-static-demo color-bg-transparent">
                                    <div class="theme-container-background"></div>
                                    <div class="pickr-container-background"></div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-image mb-3">
                            <p class="switcher-style-head">Menu With Background Image:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img1" type="radio"
                                        name="theme-background" id="switcher-bg-img">
                                </div>
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img2" type="radio"
                                        name="theme-background" id="switcher-bg-img1">
                                </div>
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img3" type="radio" name="theme-background"
                                        id="switcher-bg-img2">
                                </div>
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img4" type="radio"
                                        name="theme-background" id="switcher-bg-img3">
                                </div>
                                <div class="form-check switch-select m-2">
                                    <input class="form-check-input bgimage-input bg-img5" type="radio"
                                        name="theme-background" id="switcher-bg-img4">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center canvas-footer flex-wrap px-0 px-sm-5">
                    <a href="javascript:void(0);" id="reset-all" class="btn btn-danger m-1">Reset</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Switcher -->


    <!-- Loader -->
    <div id="loader" >
        <img src="{{ asset('themes/shash_b5/assets/images/media/loader.svg') }}" alt="">
    </div>
    <!-- Loader -->

    <div class="page">
         <!-- app-header -->
         <header class="app-header">

            <!-- Start::main-header-container -->
            <div class="main-header-container container-fluid">

                <!-- Start::header-content-left -->
                <div class="header-content-left">

                    <!-- Start::header-element -->
                    <div class="header-element">
                        <div class="horizontal-logo">
                            <a href="index.html" class="header-logo">
                                <img src="{{ asset('themes/shash_b5/assets/images/brand-logos/desktop-logo.png') }}" alt="logo" class="desktop-logo">
                                <img src="{{ asset('themes/shash_b5/assets/images/brand-logos/toggle-logo.png') }}" alt="logo" class="toggle-logo">
                                <img src="{{ asset('themes/shash_b5/assets/images/brand-logos/desktop-dark.png') }}" alt="logo" class="desktop-dark">
                                <img src="{{ asset('themes/shash_b5/assets/images/brand-logos/toggle-dark.png') }}" alt="logo" class="toggle-dark">
                                <img src="{{ asset('themes/shash_b5/assets/images/brand-logos/desktop-white.png') }}" alt="logo" class="desktop-white">
                                <img src="{{ asset('themes/shash_b5/assets/images/brand-logos/toggle-white.png') }}" alt="logo" class="toggle-white">
                            </a>
                        </div>
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element">
                        <!-- Start::header-link -->
                        <a aria-label="Hide Sidebar" class="sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle" data-bs-toggle="sidebar" href="javascript:void(0);"><span></span></a>
                        <!-- End::header-link -->
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="main-header-center  d-none d-lg-block header-link">
                        <input type="text" class="form-control" id="typehead" placeholder="Search for results..."
                            autocomplete="off">
                        <button type="button"  aria-label="button" class="btn pe-1"><i class="fe fe-search" aria-hidden="true"></i></button>
                        <div id="headersearch" class="header-search">
                            <div class="p-3">
                                <div class="">
                                    <p class="fw-semibold text-muted mb-2 fs-13">Recent Searches</p>
                                    <div class="ps-0">
                                        <a  href="javascript:void(0)" class="search-tags"><i class="fe fe-search me-2"></i>People<span></span></a>
                                        <a  href="javascript:void(0)" class="search-tags"><i class="fe fe-search me-2"></i>Pages<span></span></a>
                                        <a  href="javascript:void(0)" class="search-tags"><i class="fe fe-search me-2"></i>Articles<span></span></a>
                                    </div>
                                </div>
                                 <div class="mt-3">
                                    <p class="fw-semibold text-muted mb-3 fs-13">Apps and pages</p>
                                    <ul class="ps-0">
                                        <li class="p-1 d-flex align-items-center text-muted mb-3 search-app">
                                            <a class="d-inline-flex align-items-center" href="full-calendar.html"><i class="fe fe-calendar me-2 fs-14 bg-primary-transparent p-2 rounded-circle"></i><span>Calendar</span></a>
                                        </li>
                                        <li class="p-1 d-flex align-items-center text-muted mb-3 search-app">
                                            <a class="d-inline-flex align-items-center" href="mail.html"><i class="fe fe-mail me-2 fs-14 bg-primary-transparent p-2 rounded-circle"></i><span>Mail</span></a>
                                        </li>
                                        <li class="p-1 d-flex align-items-center text-muted mb-3 search-app">
                                            <a class="d-inline-flex align-items-center" href="buttons.html"><i class="fe fe-globe me-2 fs-14 bg-primary-transparent p-2 rounded-circle"></i><span>Buttons</span></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mt-3">
                                   <p class="fw-semibold text-muted mb-2 fs-13">Links</p>
                                   <ul class="ps-0 list-unstyled mb-0">
                                        <li class="p-1 align-items-center text-muted mb-1 search-app">
                                                <a href="javascript:void(0)" class="text-primary"><u>http://spruko/spruko.com</u></a>
                                        </li>
                                        <li class="p-1 align-items-center text-muted mb-0 pb-0 search-app">
                                                <a href="javascript:void(0)" class="text-primary"><u>http://spruko/spruko.com</u></a>
                                        </li>
                                    </ul>
                               </div>
                            </div>
                            <div class="py-3 border-top px-0">
                                <div class="text-center">
                                    <a href="javascript:void(0)" class="text-primary text-decoration-underline fs-15">View all</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::header-element -->

                </div>
                <!-- End::header-content-left -->

                <!-- Start::header-content-right -->
                <div class="header-content-right">

                    <!-- Start::header-element -->
                    <div class="header-element header-search d-lg-none d-block">
                        <!-- Start::header-link -->
                        <a aria-label="anchor" href="javascript:void(0);" class="header-link" data-bs-toggle="modal" data-bs-target="#searchModal">
                            <i class="fe fe-search header-link-icon"></i>
                        </a>
                        <!-- End::header-link -->
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element country-selector">
                        <!-- Start::header-link|dropdown-toggle -->
                        <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-auto-close="outside" data-bs-toggle="dropdown">
                            <img src="{{ asset('themes/shash_b5/assets/images/flags/us_flag.jpg') }}" alt="img" class="rounded-circle">
                        </a>
                        <!-- End::header-link|dropdown-toggle -->
                        <ul class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                    <span class="avatar avatar-xs lh-1 me-2">
                                        <img src="{{ asset('themes/shash_b5/assets/images/flags/us_flag.jpg') }}" alt="img">
                                    </span>
                                    English
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                    <span class="avatar avatar-xs lh-1 me-2">
                                        <img src="{{ asset('themes/shash_b5/assets/images/flags/spain_flag.jpg') }}" alt="img" >
                                    </span>
                                    Spanish
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                    <span class="avatar avatar-xs lh-1 me-2">
                                        <img src="{{ asset('themes/shash_b5/assets/images/flags/french_flag.jpg') }}" alt="img" >
                                    </span>
                                    French
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                    <span class="avatar avatar-xs lh-1 me-2">
                                        <img src="{{ asset('themes/shash_b5/assets/images/flags/germany_flag.jpg') }}" alt="img" >
                                    </span>
                                    German
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                    <span class="avatar avatar-xs lh-1 me-2">
                                        <img src="{{ asset('themes/shash_b5/assets/images/flags/italy_flag.jpg') }}" alt="img" >
                                    </span>
                                    Italian
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                    <span class="avatar avatar-xs lh-1 me-2">
                                        <img src="{{ asset('themes/shash_b5/assets/images/flags/russia_flag.jpg') }}" alt="img" >
                                    </span>
                                    Russian
                                </a>
                            </li>
                        </ul>
                                    </span>
                                    Russian
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element header-theme-mode">
                        <!-- Start::header-link|layout-setting -->
                        <a aria-label="anchor" href="javascript:void(0);" class="header-link layout-setting">
                            <span class="light-layout">
                                <!-- Start::header-link-icon -->
                            <i class="fe fe-moon header-link-icon"></i>
                                <!-- End::header-link-icon -->
                            </span>
                            <span class="dark-layout">
                                <!-- Start::header-link-icon -->
                            <i class="fe fe-sun header-link-icon"></i>
                                <!-- End::header-link-icon -->
                            </span>
                        </a>
                        <!-- End::header-link|layout-setting -->
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element cart-dropdown">
                        <!-- Start::header-link|dropdown-toggle -->
                        <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-auto-close="outside" data-bs-toggle="dropdown">
                            <i class="fe fe-shopping-cart header-link-icon"></i>
                            <span class="badge bg-secondary rounded-pill header-icon-badge" id="cart-icon-badge">4</span>
                        </a>
                        <!-- End::header-link|dropdown-toggle -->
                        <!-- Start::main-header-dropdown -->
                        <div class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                            <div class="p-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="mb-0 fs-16 fw-semibold">My Shopping Cart</p>
                                    <span class="badge bg-danger-transparent fs-14" id="cart-data">Hurry Up!</span>
                                </div>
                            </div>
                            <div><hr class="dropdown-divider"></div>
                            <ul class="list-unstyled mb-0" id="header-cart-items-scroll">
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start cart-dropdown-item">
                                        <img src="{{ asset('themes/shash_b5/assets/images/ecommerce/orders/11.jpg') }}" alt="img" class="avatar avatar-xl br-5 me-3">
                                        <div class="flex-grow-1">
                                            <div class="d-flex align-items-start mb-0">
                                                <div>
                                                    <a class="mb-0 fs-13 text-dark fw-semibold" href="cart.html">Flower Pot for Home Decor</a>
                                                    <div class="min-w-fit-content">
                                                        <span>Status: <span class="text-success">In Stock</span></span>
                                                        <p class="fs-13 text-muted mb-0">Quantity: 01</p>
                                                    </div>
                                                </div>
                                                <div class="ms-auto text-end d-flex fs-16">
                                                    <span class="fs-16 text-dark mb-1">$438</span>
                                                    <a aria-label="anchor" href="javascript:void(0);" class="header-cart-remove dropdown-item-close btn"><i class="ti ti-trash"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start cart-dropdown-item">
                                        <img src="{{ asset('themes/shash_b5/assets/images/ecommerce/orders/1.jpg') }}" alt="img" class="avatar avatar-xl br-5 me-3">
                                        <div class="flex-grow-1">
                                            <div class="d-flex align-items-start mb-0">
                                                <div>
                                                    <a class="mb-0 fs-13 text-dark fw-semibold" href="cart.html">Black Digital Camera</a>
                                                    <div class="min-w-fit-content">
                                                        <span>Status: <span class="text-danger">Out Stock</span></span>
                                                        <p class="fs-13 text-muted mb-0">Quantity: 06</p>
                                                    </div>
                                                </div>
                                                <div class="ms-auto text-end d-flex fs-16">
                                                    <span class="fs-16 text-dark mb-1">$867</span>
                                                    <a aria-label="anchor" href="javascript:void(0);" class="header-cart-remove dropdown-item-close btn"><i class="ti ti-trash"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start cart-dropdown-item">
                                        <img src="{{ asset('themes/shash_b5/assets/images/ecommerce/orders/15.jpg') }}" alt="img" class="avatar avatar-xl br-5 me-3">
                                        <div class="flex-grow-1">
                                            <div class="d-flex align-items-start mb-0">
                                                <div>
                                                    <a class="mb-0 fs-13 text-dark fw-semibold" href="cart.html">Stylish Rockerz 255 Ear Pods</a>
                                                    <div class="min-w-fit-content">
                                                        <span>Status: <span class="text-success">In Stock</span></span>
                                                        <p class="fs-13 text-muted mb-0">Quantity: 05</p>
                                                    </div>
                                                </div>
                                                <div class="ms-auto text-end d-flex fs-16">
                                                    <span class="fs-16 text-dark mb-1">$323</span>
                                                    <a aria-label="anchor" href="javascript:void(0);" class="header-cart-remove dropdown-item-close btn"><i class="ti ti-trash"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start cart-dropdown-item">
                                        <img src="{{ asset('themes/shash_b5/assets/images/ecommerce/orders/12.jpg') }}" alt="img" class="avatar avatar-xl br-5 me-3">
                                        <div class="flex-grow-1">
                                            <div class="d-flex align-items-start mb-0">
                                                <div>
                                                    <a class="mb-0 fs-13 text-dark fw-semibold" href="cart.html">Women Party Wear Dress</a>
                                                    <div class="min-w-fit-content">
                                                        <span>Status: <span class="text-success">In Stock</span></span>
                                                        <p class="fs-13 text-muted mb-0">Quantity: 05</p>
                                                    </div>
                                                </div>
                                                <div class="ms-auto text-end d-flex fs-16">
                                                    <span class="fs-16 text-dark mb-1">$867</span>
                                                    <a aria-label="anchor" href="javascript:void(0);" class="header-cart-remove dropdown-item-close btn"><i class="ti ti-trash"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="p-3 empty-header-item border-top d-flex">
                                <a href="checkout.html" class="btn btn-primary btn-pill w-sm btn-sm  fs-16"><i class="fe fe-check-circle me-2 d-inline-flex"></i>checkout</a>
                                <h6 class="ms-auto fs-17 fw-semibold my-auto">Total: $6789</h6>
                            </div>
                            <div class="p-5 empty-item d-none">
                                <div class="text-center">
                                    <span class="avatar avatar-xl avatar-rounded bg-warning-transparent">
                                        <i class="ri-shopping-cart-2-line fs-2"></i>
                                    </span>
                                    <h6 class="fw-bold mb-1 mt-3">Your Cart is Empty</h6>
                                    <span class="mb-3 fw-normal fs-13 d-block">Add some items to make me happy :)</span>
                                    <a href="products.html" class="btn btn-primary btn-wave m-1" data-abc="true">continue shopping <i class="bi bi-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End::main-header-dropdown -->
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element notifications-dropdown">
                        <!-- Start::header-link|dropdown-toggle -->
                        <a aria-label="anchor" href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" id="messageDropdown" aria-expanded="false">
                            <i class="fe fe-bell header-link-icon"></i>
                            <span class="w-9 h-9 p-0 bg-success rounded-pill header-icon-badge pulse pulse-success" id="notification-icon-badge"></span>
                        </a>
                        <!-- End::header-link|dropdown-toggle -->
                        <!-- Start::main-header-dropdown -->
                        <div class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                            <div class="p-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="mb-0 fs-17 fw-semibold">Notifications</p>
                                    <span class="badge bg-secondary-transparent" id="notifiation-data">5 Unread</span>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <ul class="list-unstyled mb-0" id="header-notification-scroll">
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                         <div class="pe-2">
                                             <span class="avatar avatar-md bg-primary avatar-rounded"><i class="fe fe-mail fs-18"></i></span>
                                         </div>
                                         <div class="flex-grow-1 d-flex align-items-center my-auto">
                                            <div>
                                                <p class="mb-0 fw-semibold"><a href="notifications.html">New Application received</a></p>
                                                <span class="text-muted fw-normal fs-12 header-notification-text">3 days ago</span>
                                            </div>
                                            <div class="ms-auto my-auto">
                                                <a aria-label="anchor" href="javascript:void(0);" class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i class="ti ti-x fs-16"></i></a>
                                            </div>
                                         </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                         <div class="pe-2">
                                             <span class="avatar avatar-md bg-secondary avatar-rounded"><i class="fe fe-check-circle fs-18"></i></span>
                                         </div>
                                         <div class="flex-grow-1 d-flex align-items-center my-auto">
                                            <div>
                                                <p class="mb-0 fw-semibold"><a href="notifications.html">Project has been approved</a></p>
                                                <span class="text-muted fw-normal fs-12 header-notification-text">2 hours ago</span>
                                            </div>
                                            <div class="ms-auto my-auto">
                                                <a aria-label="anchor" href="javascript:void(0);" class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i class="ti ti-x fs-16"></i></a>
                                            </div>
                                         </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                         <div class="pe-2">
                                             <span class="avatar avatar-md bg-success avatar-rounded"><i class="fe fe-shopping-cart fs-18"></i></span>
                                         </div>
                                         <div class="flex-grow-1 d-flex align-items-center my-auto">
                                            <div>
                                                <p class="mb-0 fw-semibold"><a href="notifications.html">Your Product Delivered</a></p>
                                                <span class="text-muted fw-normal fs-12 header-notification-text">30 min ago</span>
                                            </div>
                                            <div class="ms-auto my-auto">
                                                <a aria-label="anchor" href="javascript:void(0);" class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i class="ti ti-x fs-16"></i></a>
                                            </div>
                                         </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                         <div class="pe-2">
                                             <span class="avatar avatar-md bg-pink avatar-rounded"><i class="fe fe-shopping-cart fs-18"></i></span>
                                         </div>
                                         <div class="flex-grow-1 d-flex align-items-center my-auto">
                                            <div>
                                                <p class="mb-0 fw-semibold"><a href="notifications.html">Friend Requests</a></p>
                                                <span class="text-muted fw-normal fs-12 header-notification-text">10 min ago</span>
                                            </div>
                                            <div class="ms-auto my-auto">
                                                <a aria-label="anchor" href="javascript:void(0);" class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i class="ti ti-x fs-16"></i></a>
                                            </div>
                                         </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="p-3 empty-header-item1 border-top text-center">
                                <a href="notifications.html" class="">View All Notifications</a>
                            </div>
                            <div class="p-5 empty-item1 d-none">
                                <div class="text-center">
                                    <span class="avatar avatar-xl avatar-rounded bg-secondary-transparent">
                                        <i class="ri-notification-off-line fs-2"></i>
                                    </span>
                                    <h6 class="fw-semibold mt-3">No New Notifications</h6>
                                </div>
                            </div>
                        </div>
                        <!-- End::main-header-dropdown -->
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element message-dropdown">
                        <!-- Start::header-link|dropdown-toggle -->
                        <a aria-label="anchor" href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" id="messageDropdown2" aria-expanded="false">
                            <i class="fe fe-message-square header-link-icon"></i>
                            <span class="w-9 h-9 p-0 bg-danger rounded-pill header-icon-badge pulse pulse-danger" id="message-icon-badge"></span>
                        </a>
                        <!-- End::header-link|dropdown-toggle -->
                        <!-- Start::main-header-dropdown -->
                        <div class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">
                            <div class="p-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="mb-0 fs-17 fw-semibold">Messages</p>
                                    <span class="badge bg-secondary-transparent" id="message-data">5 Unread</span>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <ul class="list-unstyled mb-0" id="header-message-scroll">
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                         <div class="pe-2">
                                            <img src="{{ asset('themes/shash_b5/assets/images/faces/1.jpg') }}" alt="img" class="avatar avatar-md avatar-rounded">
                                         </div>
                                         <div class="w-100">
                                            <div class="flex-grow-1 d-flex align-items-centermy-auto">
                                                <div>
                                                    <h6 class="mb-0 fw-semibold fs-14"><a href="chat.html">Peter Theil</a></h6>
                                                </div>
                                                <div class="ms-auto text-end">
                                                    <p class="text-muted mb-0">
                                                        6:45am
                                                    </p>
                                                </div>
                                             </div>
                                             <div class="flex-grow-1 d-flex align-items-centermy-auto">
                                                <div>
                                                    <span class="text-muted fw-normal fs-12">Commented on file Guest list....</span>
                                                </div>
                                                <div class="ms-auto text-end">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="min-w-fit-content text-muted me-1 dropdown-item-close2"><i class="ti ti-x fs-16"></i></a>
                                                </div>
                                             </div>
                                         </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                         <div class="pe-2">
                                            <img src="{{ asset('themes/shash_b5/assets/images/faces/15.jpg') }}" alt="img" class="avatar avatar-md avatar-rounded">
                                         </div>
                                         <div class="w-100">
                                            <div class="flex-grow-1 d-flex align-items-centermy-auto">
                                                <div>
                                                    <h6 class="mb-0 fw-semibold fs-14"><a href="chat.html">Abagael Luth</a></h6>
                                                </div>
                                                <div class="ms-auto text-end">
                                                    <p class="text-muted mb-0">10:35am</p>
                                                </div>
                                             </div>
                                             <div class="flex-grow-1 d-flex align-items-centermy-auto">
                                                <div>
                                                    <span class="text-muted fw-normal fs-12">New Meetup Started......</span>
                                                </div>
                                                <div class="ms-auto text-end">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="min-w-fit-content text-muted me-1 dropdown-item-close2"><i class="ti ti-x fs-16"></i></a>
                                                </div>
                                             </div>
                                         </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                         <div class="pe-2">
                                            <img src="{{ asset('themes/shash_b5/assets/images/faces/12.jpg') }}" alt="img" class="avatar avatar-md avatar-rounded">
                                         </div>
                                         <div class="w-100">
                                            <div class="flex-grow-1 d-flex align-items-centermy-auto">
                                                <div>
                                                    <h6 class="mb-0 fw-semibold fs-14"><a href="chat.html">Brizid Dawson</a></h6>
                                                </div>
                                                <div class="ms-auto text-end">
                                                    <p class="text-muted mb-0">02:17am</p>
                                                </div>
                                             </div>
                                             <div class="flex-grow-1 d-flex align-items-centermy-auto">
                                                <div>
                                                    <span class="text-muted fw-normal fs-12">Brizid is in the Warehouse...</span>
                                                </div>
                                                <div class="ms-auto text-end">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="min-w-fit-content text-muted me-1 dropdown-item-close2"><i class="ti ti-x fs-16"></i></a>
                                                </div>
                                             </div>
                                         </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                         <div class="pe-2">
                                            <img src="{{ asset('themes/shash_b5/assets/images/faces/4.jpg') }}" alt="img" class="avatar avatar-md avatar-rounded">
                                         </div>
                                         <div class="w-100">
                                            <div class="flex-grow-1 d-flex align-items-centermy-auto">
                                                <div>
                                                    <h6 class="mb-0 fw-semibold fs-14"><a href="chat.html">Shannon Shaw</a></h6>
                                                </div>
                                                <div class="ms-auto text-end">
                                                    <p class="text-muted mb-0">7:55pm</p>
                                                </div>
                                             </div>
                                             <div class="flex-grow-1 d-flex align-items-centermy-auto">
                                                <div>
                                                    <span class="text-muted fw-normal fs-12">New Product Realease......</span>
                                                </div>
                                                <div class="ms-auto text-end">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="min-w-fit-content text-muted me-1 dropdown-item-close2"><i class="ti ti-x fs-16"></i></a>
                                                </div>
                                             </div>
                                         </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-start">
                                         <div class="pe-2">
                                            <img src="{{ asset('themes/shash_b5/assets/images/faces/3.jpg') }}" alt="img" class="avatar avatar-md avatar-rounded">
                                         </div>
                                         <div class="w-100">
                                            <div class="flex-grow-1 d-flex align-items-centermy-auto">
                                                <div>
                                                    <h6 class="mb-0 fw-semibold fs-14"><a href="chat.html">Cherry Blossom</a></h6>
                                                </div>
                                                <div class="ms-auto text-end">
                                                    <p class="text-muted mb-0">7:55pm</p>
                                                </div>
                                             </div>
                                             <div class="flex-grow-1 d-flex align-items-centermy-auto">
                                                <div>
                                                    <span class="text-muted fw-normal fs-12">You have appointment on......</span>
                                                </div>
                                                <div class="ms-auto text-end">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="min-w-fit-content text-muted me-1 dropdown-item-close2"><i class="ti ti-x fs-16"></i></a>
                                                </div>
                                             </div>
                                         </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="p-3 empty-header-item2 border-top text-center">
                                <a href="chat.html" class="">View All Messages</a>
                            </div>
                            <div class="p-5 empty-item2 d-none">
                                <div class="text-center">
                                    <span class="avatar avatar-xl avatar-rounded bg-danger-transparent">
                                        <i class="ri-message-2-line fs-2"></i>
                                    </span>
                                    <h6 class="fw-semibold mt-3">No New Messages</h6>
                                </div>
                            </div>
                        </div>
                        <!-- End::main-header-dropdown -->
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element header-fullscreen">
                        <!-- Start::header-link -->
                        <a aria-label="anchor" onclick="openFullscreen();" href="#" class="header-link">
                            <i class="fe fe-minimize full-screen-open header-link-icon"></i>
                            <i class="fe fe-minimize-2 full-screen-close header-link-icon d-none"></i>
                        </a>
                        <!-- End::header-link -->
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element">
                        <!-- Start::header-link|dropdown-toggle -->
                        <a aria-label="anchor" href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-toggle="offcanvas" data-bs-target="#sidebar-right">
                            <i class="fe fe-align-right header-link-icon"></i>
                        </a>
                        <!-- End::header-link|dropdown-toggle -->
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element main-profile-user">
                        <!-- Start::header-link|dropdown-toggle -->
                        <a href="#" class="header-link dropdown-toggle" id="mainHeaderProfile" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <div class="me-xxl-2 me-0">
                                    <img src="{{ asset('themes/shash_b5/assets/images/faces/9.jpg') }}" alt="img" width="32" height="32" class="rounded-circle">
                                </div>
                                <div class="d-xxl-block d-none my-auto">
                                    <h6 class="fw-semibold mb-0 lh-1 fs-14">Json Taylor</h6>
                                    <span class="op-7 fw-normal d-block fs-11 text-muted">Web Designer</span>
                                </div>
                            </div>
                        </a>
                        <!-- End::header-link|dropdown-toggle -->
                        <ul class="main-header-dropdown dropdown-menu pt-0 header-profile-dropdown dropdown-menu-end" aria-labelledby="mainHeaderProfile">
                            <li class="drop-heading d-xxl-none d-block">
                                 <div class="text-center">
                                    <h5 class="text-dark mb-0 fs-14 fw-semibold">Json Taylor</h5>
                                    <small class="text-muted">Web Designer</small>
                                </div>
                            </li>
                            <li class="dropdown-item"><a class="d-flex w-100" href="profile.html"><i class="fe fe-user fs-18 me-2 text-primary"></i>Profile</a></li>
                            <li class="dropdown-item"><a class="d-flex w-100" href="mail.html"><i class="fe fe-mail fs-18 me-2 text-primary"></i>Inbox <span class="badge bg-danger ms-auto">25</span></a></li>
                            <li class="dropdown-item"><a class="d-flex w-100" href="mail-settings.html"><i class="fe fe-settings fs-18 me-2 text-primary"></i>Settings</a></li>
                            <li class="dropdown-item"><a class="d-flex w-100" href="chat.html"><i class="fe fe-headphones fs-18 me-2 text-primary"></i>Support</a></li>
                            <li class="dropdown-item"><a class="d-flex w-100" href="lockscreen.html"><i class="fe fe-lock fs-18 me-2 text-primary"></i>Lockscreen</a></li>
                            <li class="dropdown-item"><a class="d-flex w-100" href="sign-in.html"><i class="fe fe-info fs-18 me-2 text-primary"></i>Log Out</a></li>
                        </ul>
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element">
                        <!-- Start::header-link|switcher-icon -->
                        <a aria-label="anchor" href="#" class="header-link switcher-icon" data-bs-toggle="offcanvas" data-bs-target="#switcher-canvas">
                            <i class="bx bx-cog header-link-icon"></i>
                        </a>
                        <!-- End::header-link|switcher-icon -->
                    </div>
                    <!-- End::header-element -->

                </div>
                <!-- End::header-content-right -->

            </div>
            <!-- End::main-header-container -->

        </header>
        <!-- /app-header -->
        <!-- Start::app-sidebar -->
        <aside class="app-sidebar sticky" id="sidebar">

            <!-- Start::main-sidebar-header -->
            <div class="main-sidebar-header">
                <a href="index.html" class="header-logo">
                    <img src="{{ asset('themes/shash_b5/assets/images/brand-logos/desktop-logo.png') }}" alt="logo" class="desktop-logo">
                    <img src="{{ asset('themes/shash_b5/assets/images/brand-logos/toggle-logo.png') }}" alt="logo" class="toggle-logo">
                    <img src="{{ asset('themes/shash_b5/assets/images/brand-logos/desktop-dark.png') }}" alt="logo" class="desktop-dark">
                    <img src="{{ asset('themes/shash_b5/assets/images/brand-logos/toggle-dark.png') }}" alt="logo" class="toggle-dark">
                    <img src="{{ asset('themes/shash_b5/assets/images/brand-logos/desktop-white.png') }}" alt="logo" class="desktop-white">
                    <img src="{{ asset('themes/shash_b5/assets/images/brand-logos/toggle-white.png') }}" alt="logo" class="toggle-white">
                </a>
            </div>
            <!-- End::main-sidebar-header -->

            <!-- Start::main-sidebar -->
            <div class="main-sidebar" id="sidebar-scroll">

                <!-- Start::nav -->
                <nav class="main-menu-container nav nav-pills flex-column sub-open">
                    <div class="slide-left" id="slide-left">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path> </svg>
                    </div>
                    <ul class="main-menu">
                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">Main</span></li>
                        <!-- End::slide__category -->

                        <!-- Start::slide -->
                        <li class="slide">
                            <a href="index.html" class="side-menu__item">
                                <i class="fe fe-home side-menu__icon"></i>
                                <span class="side-menu__label">Dashboard</span>
                            </a>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">Ui Kit</span></li>
                        <!-- End::slide__category -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="fe fe-slack side-menu__icon"></i>
                                <span class="side-menu__label">Apps</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Apps</a>
                                </li>
                                <li class="slide">
                                    <a href="full-calendar.html" class="side-menu__item">Full Calendar</a>
                                </li>
                                <li class="slide">
                                    <a href="gallery.html" class="side-menu__item">Gallery</a>
                                </li>
                                <li class="slide">
                                    <a href="sweet_alerts.html" class="side-menu__item">Sweet Alerts</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="fe fe-package side-menu__icon"></i>
                                <span class="side-menu__label">UI Elements</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1 mega-menu">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Ui Elements</a>
                                </li>
                                <li class="slide">
                                    <a href="alerts.html" class="side-menu__item">Alerts</a>
                                </li>
                                <li class="slide">
                                    <a href="badge.html" class="side-menu__item">Badge</a>
                                </li>
                                <li class="slide">
                                    <a href="breadcrumb.html" class="side-menu__item">Breadcrumb</a>
                                </li>
                                <li class="slide">
                                    <a href="buttons.html" class="side-menu__item">Buttons</a>
                                </li>
                                <li class="slide">
                                    <a href="buttongroup.html" class="side-menu__item">Button Group</a>
                                </li>
                                <li class="slide">
                                    <a href="cards.html" class="side-menu__item">Cards</a>
                                </li>
                                <li class="slide">
                                    <a href="dropdowns.html" class="side-menu__item">Dropdowns</a>
                                </li>
                                <li class="slide">
                                    <a href="images_figures.html" class="side-menu__item">Images &amp; Figures</a>
                                </li>
                                <li class="slide">
                                    <a href="listgroup.html" class="side-menu__item">List Group</a>
                                </li>
                                <li class="slide">
                                    <a href="navs_tabs.html" class="side-menu__item">Navs &amp; Tabs</a>
                                </li>
                                <li class="slide">
                                    <a href="object-fit.html" class="side-menu__item">Object Fit</a>
                                </li>
                                <li class="slide">
                                    <a href="pagination.html" class="side-menu__item">Pagination</a>
                                </li>
                                <li class="slide">
                                    <a href="popovers.html" class="side-menu__item">Popovers</a>
                                </li>
                                <li class="slide">
                                    <a href="progress.html" class="side-menu__item">Progress</a>
                                </li>
                                <li class="slide">
                                    <a href="spinners.html" class="side-menu__item">Spinners</a>
                                </li>
                                <li class="slide">
                                    <a href="toasts.html" class="side-menu__item">Toasts</a>
                                </li>
                                <li class="slide">
                                    <a href="tooltips.html" class="side-menu__item">Tooltips</a>
                                </li>
                                <li class="slide">
                                    <a href="typography.html" class="side-menu__item">Typography</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="fe fe-zap side-menu__icon"></i>
                                <span class="side-menu__label">Utilities</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Utilities</a>
                                </li>
                                <li class="slide">
                                    <a href="avatars.html" class="side-menu__item">Avatars</a>
                                </li>
                                <li class="slide">
                                    <a href="borders.html" class="side-menu__item">Borders</a>
                                </li>
                                <li class="slide">
                                    <a href="breakpoints.html" class="side-menu__item">Breakpoints</a>
                                </li>
                                <li class="slide">
                                    <a href="colors.html" class="side-menu__item">Colors</a>
                                </li>
                                <li class="slide">
                                    <a href="columns.html" class="side-menu__item">Columns</a>
                                </li>
                                <li class="slide">
                                    <a href="flex.html" class="side-menu__item">Flex</a>
                                </li>
                                <li class="slide">
                                    <a href="gutters.html" class="side-menu__item">Gutters</a>
                                </li>
                                <li class="slide">
                                    <a href="helpers.html" class="side-menu__item">Helpers</a>
                                </li>
                                <li class="slide">
                                    <a href="position.html" class="side-menu__item">Position</a>
                                </li>
                                <li class="slide">
                                    <a href="more.html" class="side-menu__item">Additional Content</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">PRE-BUILD PAGES</span></li>
                        <!-- End::slide__category -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="fe fe-layers side-menu__icon"></i>
                                <span class="side-menu__label">Pages</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Pages</a>
                                </li>
                                <li class="slide">
                                    <a href="about-us.html" class="side-menu__item">About Us</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Blog
                                        <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="blog.html" class="side-menu__item">Blog</a>
                                        </li>
                                        <li class="slide">
                                            <a href="blog-details.html" class="side-menu__item">Blog Details</a>
                                        </li>
                                        <li class="slide">
                                            <a href="blog-create.html" class="side-menu__item">Create Blog</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a href="chat.html" class="side-menu__item">Chat</a>
                                </li>
                                <li class="slide">
                                    <a href="contacts.html" class="side-menu__item">Contacts</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Ecommerce
                                        <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="add-products.html" class="side-menu__item">Add Products</a>
                                        </li>
                                        <li class="slide">
                                            <a href="cart.html" class="side-menu__item">Cart</a>
                                        </li>
                                        <li class="slide">
                                            <a href="checkout.html" class="side-menu__item">Checkout</a>
                                        </li>
                                        <li class="slide">
                                            <a href="edit-products.html" class="side-menu__item">Edit Products</a>
                                        </li>
                                        <li class="slide">
                                            <a href="order-details.html" class="side-menu__item">Order Details</a>
                                        </li>
                                        <li class="slide">
                                            <a href="orders.html" class="side-menu__item">Orders</a>
                                        </li>
                                        <li class="slide">
                                            <a href="products.html" class="side-menu__item">Products</a>
                                        </li>
                                        <li class="slide">
                                            <a href="product-details.html" class="side-menu__item">Product Details</a>
                                        </li>
                                        <li class="slide">
                                            <a href="products-list.html" class="side-menu__item">Products List</a>
                                        </li>
                                        <li class="slide">
                                            <a href="wishlist.html" class="side-menu__item">Wishlist</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Email
                                        <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="mail.html" class="side-menu__item">Mail Inbox</a>
                                        </li>
                                        <li class="slide">
                                            <a href="mail-read.html" class="side-menu__item">Mail Read</a>
                                        </li>
                                        <li class="slide">
                                            <a href="mail-settings.html" class="side-menu__item">Mail Settings</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a href="empty.html" class="side-menu__item">Empty</a>
                                </li>
                                <li class="slide">
                                    <a href="faq's.html" class="side-menu__item">FAQ's</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">File Manager
                                        <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="file-manager.html" class="side-menu__item">File Manager</a>
                                        </li>
                                        <li class="slide">
                                            <a href="filemanager-list.html" class="side-menu__item"> File Manager List</a>
                                        </li>
                                        <li class="slide">
                                            <a href="filemanager-details.html" class="side-menu__item"> File Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Invoice
                                        <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="invoice-create.html" class="side-menu__item">Create Invoice</a>
                                        </li>
                                        <li class="slide">
                                            <a href="invoice-details.html" class="side-menu__item">Invoice Details</a>
                                        </li>
                                        <li class="slide">
                                            <a href="invoice-list.html" class="side-menu__item">Invoice List</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a href="landing.html" class="side-menu__item">Landing</a>
                                </li>
                                <li class="slide">
                                    <a href="notifications.html" class="side-menu__item">Notifications</a>
                                </li>
                                <li class="slide">
                                    <a href="pricing.html" class="side-menu__item">Pricing</a>
                                </li>
                                <li class="slide">
                                    <a href="profile.html" class="side-menu__item">Profile</a>
                                </li>
                                <li class="slide">
                                    <a href="reviews.html" class="side-menu__item">Reviews</a>
                                </li>
                                <li class="slide">
                                    <a href="team.html" class="side-menu__item">Team</a>
                                </li>
                                <li class="slide">
                                    <a href="terms_conditions.html" class="side-menu__item">Terms &amp; Conditions</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Timeline
                                        <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="timeline.html" class="side-menu__item">Timeline-1</a>
                                        </li>
                                        <li class="slide">
                                            <a href="timeline2.html" class="side-menu__item">Timeline-2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a href="to-do-list.html" class="side-menu__item">To Do List</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="fe fe-users side-menu__icon"></i>
                                <span class="side-menu__label">Authentication</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Authentication</a>
                                </li>
                                <li class="slide">
                                    <a href="coming-soon.html" class="side-menu__item">Coming Soon</a>
                                </li>
                                <li class="slide">
                                    <a href="create-password.html" class="side-menu__item">Create Password</a>
                                </li>
                                <li class="slide">
                                    <a href="lockscreen.html" class="side-menu__item">Lock Screen</a>
                                </li>
                                <li class="slide">
                                    <a href="reset-password.html" class="side-menu__item">Reset Password</a>
                                </li>
                                <li class="slide">
                                    <a href="sign-up.html" class="side-menu__item">Sign Up</a>
                                </li>
                                <li class="slide">
                                    <a href="sign-in.html" class="side-menu__item">Sign In</a>
                                </li>
                                <li class="slide">
                                    <a href="two-step-verification.html" class="side-menu__item">Two Step Verification</a>
                                </li>
                                <li class="slide">
                                    <a href="under-maintenance.html" class="side-menu__item">Under Maintenance</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="fe fe-alert-triangle side-menu__icon"></i>
                                <span class="side-menu__label">Error Pages</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Error Pages</a>
                                </li>
                                <li class="slide">
                                    <a href="400.html" class="side-menu__item">400 </a>
                                </li>
                                <li class="slide">
                                    <a href="401.html" class="side-menu__item">401</a>
                                </li>
                                <li class="slide">
                                    <a href="403.html" class="side-menu__item">403</a>
                                </li>
                                <li class="slide">
                                    <a href="404.html" class="side-menu__item">404 </a>
                                </li>
                                <li class="slide">
                                    <a href="500.html" class="side-menu__item">500</a>
                                </li>
                                <li class="slide">
                                    <a href="503.html" class="side-menu__item">503</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">General</span></li>
                        <!-- End::slide__category -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="fe fe-file-text side-menu__icon"></i>
                                <span class="side-menu__label">Forms</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Forms</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Form Elements
                                        <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="form_inputs.html" class="side-menu__item">Inputs</a>
                                        </li>
                                        <li class="slide">
                                            <a href="form_check_radios.html" class="side-menu__item">Checks &amp; Radios</a>
                                        </li>
                                        <li class="slide">
                                            <a href="form_input_group.html" class="side-menu__item">Input Group</a>
                                        </li>
                                        <li class="slide">
                                            <a href="form_select.html" class="side-menu__item">Form Select</a>
                                        </li>
                                        <li class="slide">
                                            <a href="form_range.html" class="side-menu__item">Range Slider</a>
                                        </li>
                                        <li class="slide">
                                            <a href="form_input_masks.html" class="side-menu__item">Input Masks</a>
                                        </li>
                                        <li class="slide">
                                            <a href="form_file_uploads.html" class="side-menu__item">File Uploads</a>
                                        </li>
                                        <li class="slide">
                                            <a href="form_dateTime_pickers.html" class="side-menu__item">Date,Time Picker</a>
                                        </li>
                                        <li class="slide">
                                            <a href="form_color_pickers.html" class="side-menu__item">Color Pickers</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a href="floating_labels.html" class="side-menu__item">Floating Labels</a>
                                </li>
                                <li class="slide">
                                    <a href="form_layout.html" class="side-menu__item">Form Layouts</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Form Editors
                                        <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="quill_editor.html" class="side-menu__item">Quill Editor</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a href="form_validation.html" class="side-menu__item">Validation</a>
                                </li>
                                <li class="slide">
                                    <a href="form_select2.html" class="side-menu__item">Select2</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="fe fe-cpu side-menu__icon"></i>
                                <span class="side-menu__label">Advanced Ui</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Advanced Ui</a>
                                </li>
                                <li class="slide">
                                    <a href="accordions_collpase.html" class="side-menu__item">Accordions &amp; Collapse</a>
                                </li>
                                <li class="slide">
                                    <a href="carousel.html" class="side-menu__item">Carousel</a>
                                </li>
                                <li class="slide">
                                    <a href="draggable-cards.html" class="side-menu__item">Draggable Cards</a>
                                </li>
                                <li class="slide">
                                    <a href="modals_closes.html" class="side-menu__item">Modals &amp; Closes</a>
                                </li>
                                <li class="slide">
                                    <a href="navbar.html" class="side-menu__item">Navbar</a>
                                </li>
                                <li class="slide">
                                    <a href="offcanvas.html" class="side-menu__item">Offcanvas</a>
                                </li>
                                <li class="slide">
                                    <a href="placeholders.html" class="side-menu__item">Placeholders</a>
                                </li>
                                <li class="slide">
                                    <a href="ratings.html" class="side-menu__item">Ratings</a>
                                </li>
                                <li class="slide">
                                    <a href="scrollspy.html" class="side-menu__item">Scrollspy</a>
                                </li>
                                <li class="slide">
                                    <a href="swiperjs.html" class="side-menu__item">Swiper JS</a>
                                </li>
                                <li class="slide">
                                    <a href="treeview.html" class="side-menu__item">Treeview</a>
                                </li>
                                <li class="slide">
                                    <a href="ribbons.html" class="side-menu__item">Ribbons</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide">
                            <a href="widgets.html" class="side-menu__item">
                                <i class="fe fe-aperture side-menu__icon"></i>
                                <span class="side-menu__label">Widgets<span class="badge bg-danger-transparent ms-2">Hot</span></span>
                            </a>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">Web Apps</span></li>
                        <!-- End::slide__category -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="fe fe-grid side-menu__icon"></i>
                                <span class="side-menu__label">Nested Menu</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Nested Menu</a>
                                </li>
                                <li class="slide">
                                    <a href="javascript:void(0);" class="side-menu__item">Nested-1</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Nested-2
                                        <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="javascript:void(0);" class="side-menu__item">Nested-2-1</a>
                                        </li>
                                        <li class="slide has-sub">
                                            <a href="javascript:void(0);" class="side-menu__item">Nested-2-2
                                                <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                            <ul class="slide-menu child3">
                                                <li class="slide">
                                                    <a href="javascript:void(0);" class="side-menu__item">Nested-2-2-1</a>
                                                </li>
                                                <li class="slide">
                                                    <a href="javascript:void(0);" class="side-menu__item">Nested-2-2-2</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">Tables &amp; Charts</span></li>
                        <!-- End::slide__category -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="fe fe-layout side-menu__icon"></i>
                                <span class="side-menu__label">Tables</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Tables</a>
                                </li>
                                <li class="slide">
                                    <a href="tables.html" class="side-menu__item">Tables</a>
                                </li>
                                <li class="slide">
                                    <a href="grid-tables.html" class="side-menu__item">Grid JS Tables</a>
                                </li>
                                <li class="slide">
                                    <a href="data-tables.html" class="side-menu__item">Data Tables</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="fe fe-bar-chart-2 side-menu__icon"></i>
                                <span class="side-menu__label">Charts</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Charts</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Apex Charts
                                        <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child2">
                                        <li class="slide">
                                            <a href="apex-line-charts.html" class="side-menu__item">Line Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-area-charts.html" class="side-menu__item">Area Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-column-charts.html" class="side-menu__item">Column Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-bar-charts.html" class="side-menu__item">Bar Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-mixed-charts.html" class="side-menu__item">Mixed Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-rangearea-charts.html" class="side-menu__item">Range Area Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-timeline-charts.html" class="side-menu__item">Timeline Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-candlestick-charts.html" class="side-menu__item">CandleStick
                                                Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-boxplot-charts.html" class="side-menu__item">Boxplot Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-bubble-charts.html" class="side-menu__item">Bubble Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-scatter-charts.html" class="side-menu__item">Scatter Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-heatmap-charts.html" class="side-menu__item">Heatmap Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-treemap-charts.html" class="side-menu__item">Treemap Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-pie-charts.html" class="side-menu__item">Pie Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-radialbar-charts.html" class="side-menu__item">Radialbar Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-radar-charts.html" class="side-menu__item">Radar Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apex-polararea-charts.html" class="side-menu__item">Polararea Charts</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a href="chartjs-charts.html" class="side-menu__item">Chartjs Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="echarts.html" class="side-menu__item">Echart Charts</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">Maps &amp; Icons</span></li>
                        <!-- End::slide__category -->

                        <!-- Start::slide -->
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">
                                <i class="fe fe-map-pin side-menu__icon"></i>
                                <span class="side-menu__label">Maps</span>
                                <i class="fe fe-chevron-right side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu child1">
                                <li class="slide side-menu__label1">
                                    <a href="javascript:void(0)">Maps</a>
                                </li>
                                <li class="slide">
                                    <a href="google-maps.html" class="side-menu__item">Google Maps</a>
                                </li>
                                <li class="slide">
                                    <a href="leaflet-maps.html" class="side-menu__item">Leaflet Maps</a>
                                </li>
                                <li class="slide">
                                    <a href="vector-maps.html" class="side-menu__item">Vector Maps</a>
                                </li>
                            </ul>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide -->
                        <li class="slide">
                            <a href="icons.html" class="side-menu__item">
                                <i class="fe fe-wind side-menu__icon"></i>
                                <span class="side-menu__label">Icons</span>
                            </a>
                        </li>
                        <!-- End::slide -->
                    </ul>
                    <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path> </svg></div>
                </nav>
                <!-- End::nav -->

            </div>
            <!-- End::main-sidebar -->

        </aside>
        <!-- End::app-sidebar -->

        <!-- Start::app-content -->
        <div class="main-content app-content">
            <div class="container-fluid">


                <!-- PAGE-HEADER -->
                <div class="page-header">
                  <h1 class="page-title my-auto">Dashboard 01</h1>
                  <div>
                    <ol class="breadcrumb mb-0">
                      <li class="breadcrumb-item">
                        <a href="javascript:void(0)">Home</a>
                      </li>
                      <li class="breadcrumb-item active" aria-current="page">Dashboard 01</li>
                    </ol>
                  </div>
                </div>
                <!-- PAGE-HEADER END -->


                <!-- ROW-1 -->
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xxl-3">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="mt-2">
                                        <h6 class="fw-normal">Total Users</h6>
                                        <h2 class="mb-0 text-dark fw-semibold">44,278</h2>
                                    </div>
                                    <div class="ms-auto">
                                        <div class="chart-wrapper mt-1">
                                            <canvas id="saleschart" class="chart-dropshadow"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <span class="text-muted fs-12"><span class="text-secondary"><i
                                            class="fe fe-arrow-up-circle text-secondary"></i> 5%</span>
                                    Last week</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xxl-3">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="mt-2">
                                        <h6 class="fw-normal">Total Profit</h6>
                                        <h2 class="mb-0 text-dark fw-semibold">67,987</h2>
                                    </div>
                                    <div class="ms-auto">
                                        <div class="chart-wrapper mt-1">
                                            <canvas id="leadschart"
                                                class="chart-dropshadow"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <span class="text-muted fs-12"><span class="text-pink"><i
                                            class="fe fe-arrow-down-circle text-pink"></i> 0.75%</span>
                                    Last 6 days</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xxl-3">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="mt-2">
                                        <h6 class="fw-normal">Total Expenses</h6>
                                        <h2 class="mb-0 text-dark fw-semibold">$76,965</h2>
                                    </div>
                                    <div class="ms-auto">
                                        <div class="chart-wrapper mt-1">
                                            <canvas id="profitchart"
                                                class="chart-dropshadow"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <span class="text-muted fs-12"><span class="text-green"><i
                                            class="fe fe-arrow-up-circle text-green"></i> 0.9%</span>
                                    Last 9 days</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xxl-3">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="mt-2">
                                        <h6 class="fw-normal">Total Cost</h6>
                                        <h2 class="mb-0 text-dark fw-semibold">$59,765</h2>
                                    </div>
                                    <div class="ms-auto">
                                        <div class="chart-wrapper mt-1">
                                            <canvas id="costchart"
                                                class="chart-dropshadow"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <span class="text-muted fs-12"><span class="text-warning"><i
                                            class="fe fe-arrow-up-circle text-warning"></i> 0.6%</span>
                                    Last year</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ROW-1 END -->

                <!-- ROW-2 -->
                <div class="row">
                    <div class="col-xxl-9">
                        <div class="card overflow-hidden">
                            <div class="card-header">
                                <h3 class="card-title">Sales Analytics</h3>
                            </div>
                            <div class="card-body">
                                <div class="d-flex mx-auto text-center justify-content-center mb-4">
                                    <div class="d-flex text-center justify-content-center me-3"><span
                                            class="dot-label bg-primary my-auto"></span>Total Sales</div>
                                    <div class="d-flex text-center justify-content-center"><span
                                            class="dot-label bg-secondary my-auto"></span>Total Orders</div>
                                </div>
                                <div class="chartjs-wrapper-demo w-100">
                                    <canvas id="transactions" class="chart-dropshadow w-100"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- COL END -->
                    <div class="col-xxl-3">
                        <div class="card overflow-hidden">
                            <div class="card-body pb-0 bg-recentorder">
                                <h3 class="card-title text-fixed-white mb-4">Recent Orders</h3>
                                <div class="chartjs-wrapper-demo">
                                    <canvas id="recentorders" class="chart-dropshadow"></canvas>
                                </div>
                            </div>
                            <div id="back-chart"></div>
                            <div class="card-body">
                                <div class="d-flex mb-4 mt-3">
                                    <div class="avatar avatar-md bg-secondary-transparent text-secondary bradius me-3">
                                        <i class="fe fe-check"></i>
                                    </div>
                                    <div class="">
                                        <h6 class="mb-1 fw-semibold fs-14">Delivered Orders</h6>
                                        <p class="fw-normal fs-12 mb-1"> <span class="text-success">3.5%</span>
                                            increased </p>
                                    </div>
                                    <div class=" ms-auto mb-auto">
                                        <p class="fw-bold fs-20 mb-0"> 1,768 </p>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="avatar  avatar-md bg-pink-transparent text-pink bradius me-3">
                                        <i class="fe fe-x"></i>
                                    </div>
                                    <div class="">
                                        <h6 class="mb-1 fw-semibold fs-14">Cancelled Orders</h6>
                                        <p class="fw-normal fs-12 mb-1"> <span class="text-success">1.2%</span>
                                            increased </p>
                                    </div>
                                    <div class=" ms-auto mb-auto">
                                        <p class="fw-bold fs-20 mb-0"> 3,675 </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- COL END -->
                </div>
                <!-- ROW-2 END -->

                <!-- ROW-3 -->
                <div class="row">
                    <div class="col-xxl-4 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title fw-semibold">Daily Activity</h4>
                            </div>
                            <div class="card-body pb-0">
                                <ul class="task-list">
                                    <li class="d-sm-flex">
                                        <div>
                                            <i class="task-icon bg-primary"></i>
                                            <h6 class="fw-semibold">Task Finished<span
                                                    class="text-muted fs-11 mx-2 fw-normal">09 July 2023</span>
                                            </h6>
                                            <p class="text-muted fs-12 mb-0">Adam Berry finished task on<a href="javascript:void(0)"
                                                    class="fw-semibold text-primary"> Project Management</a></p>
                                        </div>
                                        <div class="ms-auto d-md-flex">
                                            <a href="javascript:void(0)" class="text-muted me-2" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Edit" aria-label="Edit"><span
                                                    class="fe fe-edit"></span></a>
                                            <a aria-label="anchor" href="javascript:void(0)" class="text-muted"><span
                                                    class="fe fe-trash-2"></span></a>
                                        </div>
                                    </li>
                                    <li class="d-sm-flex">
                                        <div>
                                            <i class="task-icon bg-secondary"></i>
                                            <h6 class="fw-semibold">New Comment<span
                                                    class="text-muted fs-11 mx-2 fw-normal">05 July 2023</span>
                                            </h6>
                                            <p class="text-muted fs-12 mb-0">Victoria commented on Project <a
                                                    href="javascript:void(0)" class="fw-semibold text-primary"> AngularJS Template</a></p>
                                        </div>
                                        <div class="ms-auto d-md-flex">
                                            <a href="javascript:void(0)" class="text-muted me-2" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Edit" aria-label="Edit"><span
                                                    class="fe fe-edit"></span></a>
                                            <a aria-label="anchor" href="javascript:void(0)" class="text-muted"><span
                                                    class="fe fe-trash-2"></span></a>
                                        </div>
                                    </li>
                                    <li class="d-sm-flex">
                                        <div>
                                            <i class="task-icon bg-success"></i>
                                            <h6 class="fw-semibold">New Comment<span
                                                    class="text-muted fs-11 mx-2 fw-normal">25 June 2023</span>
                                            </h6>
                                            <p class="text-muted fs-12 mb-0">Victoria commented on Project <a
                                                    href="javascript:void(0)" class="fw-semibold text-primary"> AngularJS Template</a></p>
                                        </div>
                                        <div class="ms-auto d-md-flex">
                                            <a href="javascript:void(0)" class="text-muted me-2" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Edit" aria-label="Edit"><span
                                                    class="fe fe-edit"></span></a>
                                            <a aria-label="anchor" href="javascript:void(0)" class="text-muted"><span
                                                    class="fe fe-trash-2"></span></a>
                                        </div>
                                    </li>
                                    <li class="d-sm-flex">
                                        <div>
                                            <i class="task-icon bg-warning"></i>
                                            <h6 class="fw-semibold">Task Overdue<span
                                                    class="text-muted fs-11 mx-2 fw-normal">14 June 2023</span>
                                            </h6>
                                            <p class="text-muted mb-0 fs-12">Petey Cruiser finished task <a
                                                    href="javascript:void(0)" class="fw-semibold text-primary"> Integrated management</a></p>
                                        </div>
                                        <div class="ms-auto d-md-flex">
                                            <a href="javascript:void(0)" class="text-muted me-2" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Edit" aria-label="Edit"><span
                                                    class="fe fe-edit"></span></a>
                                            <a aria-label="anchor" href="javascript:void(0)" class="text-muted"><span
                                                    class="fe fe-trash-2"></span></a>
                                        </div>
                                    </li>
                                    <li class="d-sm-flex">
                                        <div>
                                            <i class="task-icon bg-danger"></i>
                                            <h6 class="fw-semibold">Task Overdue<span
                                                    class="text-muted fs-11 mx-2 fw-normal">29 June 2023</span>
                                            </h6>
                                            <p class="text-muted mb-0 fs-12">Petey Cruiser finished task <a
                                                    href="javascript:void(0)" class="fw-semibold text-primary"> Integrated management</a></p>
                                        </div>
                                        <div class="ms-auto d-md-flex">
                                            <a href="javascript:void(0)" class="text-muted me-2" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Edit" aria-label="Edit"><span
                                                    class="fe fe-edit"></span></a>
                                            <a aria-label="anchor" href="javascript:void(0)" class="text-muted"><span
                                                    class="fe fe-trash-2"></span></a>
                                        </div>
                                    </li>
                                    <li class="d-sm-flex">
                                        <div>
                                            <i class="task-icon bg-info"></i>
                                            <h6 class="fw-semibold">Task Finished<span
                                                    class="text-muted fs-11 mx-2 fw-normal">09 July 2023</span>
                                            </h6>
                                            <p class="text-muted fs-12 mb-0">Adam Berry finished task on<a href="javascript:void(0)"
                                                    class="fw-semibold text-primary"> Project Management</a></p>
                                        </div>
                                        <div class="ms-auto d-md-flex">
                                            <a href="javascript:void(0)" class="text-muted me-2" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Edit" aria-label="Edit"><span
                                                    class="fe fe-edit"></span></a>
                                            <a aria-label="anchor" href="javascript:void(0)" class="text-muted"><span
                                                    class="fe fe-trash-2"></span></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-lg-6 col-md-12">
                        <div class="card overflow-hidden">
                            <div class="card-header">
                                <div>
                                    <h3 class="card-title">Sales Report by Locations with Devices</h3>
                                </div>
                            </div>
                            <div class="card-body p-0 mt-2">
                                <div class="">
                                    <div id="visitors-countries" class="worldh world-map h-250"></div>
                                </div>
                                <div class="table-responsive mt-2 text-center">
                                    <table class="table text-nowrap border-dashed mb-0">
                                        <thead class="text-uppercase">
                                            <tr>
                                                <th scope="col" class="text-start">Device</th>
                                                <th scope="col" class="">USA</th>
                                                <th scope="col" class="">India</th>
                                                <th scope="col" class="">Bahrain</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-start p-3 d-flex align-items-center"><span class="sales-icon text-primary bg-primary-transparent"><i class="bi bi-phone"></i></span>Mobiles</td>
                                                <td class="p-3">17%</td>
                                                <td class="p-3">22%</td>
                                                <td class="p-3">11%</td>
                                            </tr>
                                            <tr>
                                                <td class="text-start p-3 d-flex align-items-center"><span class="sales-icon text-secondary bg-secondary-transparent "><i class="bi bi-display"></i></span>Desktops</td>
                                                <td class="p-3">34%</td>
                                                <td class="p-3">76%</td>
                                                <td class="p-3">58%</td>
                                            </tr>
                                            <tr>
                                                <td class="border-bottom-0 text-start p-3 d-flex align-items-center"><span class="sales-icon text-danger bg-danger-transparent"><i class="bi bi-tablet"></i></span>Tablets</td>
                                                <td class="border-bottom-0 p-3">56%</td>
                                                <td class="border-bottom-0 p-3">83%</td>
                                                <td class="border-bottom-0 p-3">66%</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!--end /table-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-lg-6 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title fw-semibold">Browser Usage</h4>
                            </div>
                            <div class="card-body">
                                <div class="browser-stats">
                                    <div class="row mb-3">
                                        <div class="col-sm-2 col-lg-3 col-xl-3 col-xxl-2 mb-sm-0 mb-3">
                                            <img src="{{ asset('themes/shash_b5/assets/images/browsers/chrome.svg') }}" class="img-fluid"
                                                alt="img">
                                        </div>
                                        <div class="col-sm-10 col-lg-9 col-xl-9 col-xxl-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between mb-1">
                                                <h6 class="mb-1">Chrome</h6>
                                                <h6 class="fw-semibold mb-1">35,502 <span
                                                        class="text-success fs-11">(<i
                                                            class="fe fe-arrow-up"></i>12.75%)</span></h6>
                                            </div>
                                            <div class="progress progress-sm mb-3">
                                                <div class="progress-bar bg-primary" style="width: 70%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-2 col-lg-3 col-xl-3 col-xxl-2 mb-sm-0 mb-3">
                                            <img src="{{ asset('themes/shash_b5/assets/images/browsers/opera.svg') }}" class="img-fluid"
                                                alt="img">
                                        </div>
                                        <div class="col-sm-10 col-lg-9 col-xl-9 col-xxl-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between mb-1">
                                                <h6 class="mb-1">Opera</h6>
                                                <h6 class="fw-semibold mb-1">12,563 <span
                                                        class="text-danger fs-11">(<i
                                                            class="fe fe-arrow-down"></i>15.12%)</span></h6>
                                            </div>
                                            <div class="progress progress-sm mb-3">
                                                <div class="progress-bar bg-secondary" style="width: 40%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-2 col-lg-3 col-xl-3 col-xxl-2 mb-sm-0 mb-3">
                                            <img src="{{ asset('themes/shash_b5/assets/images/browsers/ie.svg') }}" class="img-fluid"
                                                alt="img">
                                        </div>
                                        <div class="col-sm-10 col-lg-9 col-xl-9 col-xxl-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between mb-1">
                                                <h6 class="mb-1">IE</h6>
                                                <h6 class="fw-semibold mb-1">25,364 <span
                                                        class="text-success fs-11">(<i
                                                            class="fe fe-arrow-down"></i>24.37%)</span></h6>
                                            </div>
                                            <div class="progress progress-sm mb-3">
                                                <div class="progress-bar bg-success" style="width: 50%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-2 col-lg-3 col-xl-3 col-xxl-2 mb-sm-0 mb-3">
                                            <img src="{{ asset('themes/shash_b5/assets/images/browsers/firefox.svg') }}" class="img-fluid"
                                                alt="img">
                                        </div>
                                        <div class="col-sm-10 col-lg-9 col-xl-9 col-xxl-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between mb-1">
                                                <h6 class="mb-1">Firefox</h6>
                                                <h6 class="fw-semibold mb-1">14,635 <span
                                                        class="text-success fs-11">(<i
                                                            class="fe fe-arrow-down"></i>15.63%)</span></h6>
                                            </div>
                                            <div class="progress progress-sm mb-3">
                                                <div class="progress-bar bg-danger" style="width: 50%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-2 col-lg-3 col-xl-3 col-xxl-2 mb-sm-0 mb-3">
                                            <img src="{{ asset('themes/shash_b5/assets/images/browsers/edge.svg') }}" class="img-fluid"
                                                alt="img">
                                        </div>
                                        <div class="col-sm-10 col-lg-9 col-xl-9 col-xxl-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between mb-1">
                                                <h6 class="mb-1">Edge</h6>
                                                <h6 class="fw-semibold mb-1">15,453 <span
                                                        class="text-danger fs-11">(<i
                                                            class="fe fe-arrow-down"></i>23.70%)</span></h6>
                                            </div>
                                            <div class="progress progress-sm mb-3">
                                                <div class="progress-bar bg-warning" style="width: 10%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-2 col-lg-3 col-xl-3 col-xxl-2 mb-sm-0 mb-3">
                                            <img src="{{ asset('themes/shash_b5/assets/images/browsers/safari.svg') }}" class="img-fluid"
                                                alt="img">
                                        </div>
                                        <div class="col-sm-10 col-lg-9 col-xl-9 col-xxl-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between mb-1">
                                                <h6 class="mb-1">Safari</h6>
                                                <h6 class="fw-semibold mb-1">10,054 <span
                                                        class="text-success fs-11">(<i
                                                            class="fe fe-arrow-up"></i>11.04%)</span></h6>
                                            </div>
                                            <div class="progress progress-sm mb-3">
                                                <div class="progress-bar bg-info" style="width: 40%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2 col-lg-3 col-xl-3 col-xxl-2 mb-sm-0 mb-3">
                                            <img src="{{ asset('themes/shash_b5/assets/images/browsers/netscape.svg') }}" class="img-fluid"
                                                alt="img">
                                        </div>
                                        <div class="col-sm-10 col-lg-9 col-xl-9 col-xxl-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between mb-1">
                                                <h6 class="mb-1">Netscape</h6>
                                                <h6 class="fw-semibold mb-1">35,502 <span
                                                        class="text-success fs-11">(<i
                                                            class="fe fe-arrow-up"></i>12.75%)</span></h6>
                                            </div>
                                            <div class="progress progress-sm mb-3">
                                                <div class="progress-bar bg-green" style="width: 30%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ROW-3 END -->

                <!-- ROW-4 -->
                <div class="row">
                    <div class="col-12 col-sm-12">
                        <div class="card">
                            <div class="card-header d-lg-flex">
                                <h3 class="card-title mb-lg-0 mb-3">Product Sales</h3>
                                <div class="tabs-menu1 ms-auto border-0 p-0">
                                    <!-- Tabs -->
                                    <ul class="nav panel-tabs product-sale">
                                        <li><a href="#tab5" class="active" data-bs-toggle="tab">All products</a></li>
                                        <li><a href="#tab6" data-bs-toggle="tab">Shipped</a></li>
                                        <li><a href="#tab7" data-bs-toggle="tab">Pending</a></li>
                                        <li><a href="#tab8" data-bs-toggle="tab">Cancelled</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body product-table">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <label class="mb-3">
                                            Show
                                            <select class="form-control" data-trigger>
                                                <option value="Choice 1">10</option>
                                                <option value="Choice 2">25</option>
                                                <option value="Choice 3">50</option>
                                                <option value="Choice 3">100</option>
                                            </select>
                                            Entries
                                        </label>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <label class="mb-3 justify-content-end">
                                            <input type="search" class="form-control" placeholder="Search...">
                                        </label>
                                    </div>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane border-0 p-0 active" id="tab5">
                                        <div class="table-responsive">
                                            <table class="table table-bordered text-nowrap mb-0">
                                                <thead class="border-top">
                                                    <tr>
                                                        <th scope="col" class="">Tracking Id</th>
                                                        <th scope="col" class="">Product</th>
                                                        <th scope="col" class="">Customer</th>
                                                        <th scope="col" class="">Date</th>
                                                        <th scope="col" class="">Amount</th>
                                                        <th scope="col" class="">Payment Mode</th>
                                                        <th scope="col" class="">Status</th>
                                                        <th scope="col" class="">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> #98765490</h6></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <span class="avatar cover-image avatar-sm" data-bs-image-src="{{ asset('themes/shash_b5/assets/images/ecommerce/orders/9.jpg') }}"></span>
                                                                <h6 class="ms-3 my-auto fs-14 fw-semibold">Headsets</h6>
                                                            </div>
                                                        </td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Cherry Blossom</h6></td>
                                                        <td>30 Aug 2023</td>
                                                        <td><span class="fw-semibold">$6.721.5</span></td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> Online Payment</h6></td>
                                                        <td><span class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Shipped</span></td>
                                                        <td>
                                                            <div class="g-2">
                                                                <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                                <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> #76348798</h6></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <span class="avatar cover-image avatar-sm" data-bs-image-src="{{ asset('themes/shash_b5/assets/images/ecommerce/orders/11.jpg') }}"></span>
                                                                <h6 class="ms-3 my-auto fs-14 fw-semibold">Flower Pot</h6>
                                                            </div>
                                                        </td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Simon Sais</h6></td>
                                                        <td>15 Nov 2023</td>
                                                        <td><span class="fw-semibold">$35,7863</span></td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> Online Payment</h6></td>
                                                        <td><span class="badge bg-danger-transparent rounded-pill text-danger p-2 px-3">Cancelled</span></td>
                                                        <td>
                                                            <div class="g-2">
                                                                <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                                <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> #23986456</h6></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <span class="avatar cover-image avatar-sm" data-bs-image-src="{{ asset('themes/shash_b5/assets/images/ecommerce/orders/4.jpg') }}"></span>
                                                                <h6 class="ms-3 my-auto fs-14 fw-semibold">Pen Drive</h6>
                                                            </div>
                                                        </td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Manny Jah</h6></td>
                                                        <td>27 Jan  2023</td>
                                                        <td><span class="fw-semibold">$5,89,6437</span></td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Cash on Delivery</h6></td>
                                                        <td><span class="badge bg-warning-transparent rounded-pill text-warning p-2 px-3">Pending</span></td>
                                                        <td>
                                                            <div class="g-2">
                                                                <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                                <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> #87456325</h6></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <span class="avatar cover-image avatar-sm" data-bs-image-src="{{ asset('themes/shash_b5/assets/images/ecommerce/orders/8.jpg') }}"></span>
                                                                <h6 class="ms-3 my-auto fs-14 fw-semibold">New Bowl</h6>
                                                            </div>
                                                        </td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Florinda Carasco</h6></td>
                                                        <td>19 Sep 2023</td>
                                                        <td><span class="fw-semibold">$17.98</span></td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Online Payment</h6></td>
                                                        <td><span class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Shipped</span></td>
                                                        <td>
                                                            <div class="g-2">
                                                                <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                                <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> #65783926</h6></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <span class="avatar cover-image avatar-sm" data-bs-image-src="{{ asset('themes/shash_b5/assets/images/ecommerce/orders/6.jpg') }}"></span>
                                                                <h6 class="ms-3 my-auto fs-14 fw-semibold">Leather Watch</h6>
                                                            </div>
                                                        </td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Ivan Notheridiya</h6></td>
                                                        <td>06 Oct 2023</td>
                                                        <td><span class="fw-semibold">$8.654.4</span></td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Cash on Delivery</h6></td>
                                                        <td><span class="badge bg-danger-transparent rounded-pill text-danger p-2 px-3">Cancelled</span></td>
                                                        <td>
                                                            <div class="g-2">
                                                                <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                                <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> #34654895</h6></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <span class="avatar cover-image avatar-sm" data-bs-image-src="{{ asset('themes/shash_b5/assets/images/ecommerce/orders/1.jpg') }}"></span>
                                                                <h6 class="ms-3 my-auto fs-14 fw-semibold">Digital Camera</h6>
                                                            </div>
                                                        </td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Willie Findit</h6></td>
                                                        <td>10 Jul 2023</td>
                                                        <td><span class="fw-semibold">$8.654.4</span></td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Cash on Delivery</h6></td>
                                                        <td><span class="badge bg-warning-transparent rounded-pill text-warning p-2 px-3">Pending</span></td>
                                                        <td>
                                                            <div class="g-2">
                                                                <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                                <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> #98765345</h6></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <span class="avatar cover-image avatar-sm" data-bs-image-src="{{ asset('themes/shash_b5/assets/images/ecommerce/orders/10.jpg') }}"></span>
                                                                <h6 class="ms-3 my-auto fs-14 fw-semibold">Earphones</h6>
                                                            </div>
                                                        </td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Addie Minstra</h6></td>
                                                        <td>25 Jun 2023</td>
                                                        <td><span class="fw-semibold">$7,34,9768</span></td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Online Payment</h6></td>
                                                        <td><span class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Shipped</span></td>
                                                        <td>
                                                            <div class="g-2">
                                                                <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                                <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> #67546577</h6></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <span class="avatar cover-image avatar-sm" data-bs-image-src="{{ asset('themes/shash_b5/assets/images/ecommerce/orders/2.jpg') }}"></span>
                                                                <h6 class="ms-3 my-auto fs-14 fw-semibold">Shoes</h6>
                                                            </div>
                                                        </td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Laura Biding</h6></td>
                                                        <td>22 Feb 2023</td>
                                                        <td><span class="fw-semibold">$7.76.654</span></td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Cash on Delivery</h6></td>
                                                        <td><span class="badge bg-warning-transparent rounded-pill text-warning p-2 px-3">Pending</span></td>
                                                        <td>
                                                            <div class="g-2">
                                                                <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                                <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane border-0 p-0" id="tab6">
                                        <div class="table-responsive">
                                            <table class="table table-bordered text-nowrap mb-0">
                                                <thead class="border-top">
                                                    <tr>
                                                        <th scope="col" class="">Tracking Id</th>
                                                        <th scope="col" class="">Product</th>
                                                        <th scope="col" class="">Customer</th>
                                                        <th scope="col" class="">Date</th>
                                                        <th scope="col" class="">Amount</th>
                                                        <th scope="col" class="">Payment Mode</th>
                                                        <th scope="col" class="">Status</th>
                                                        <th scope="col" class="">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> #98765490</h6></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <span class="avatar cover-image avatar-sm" data-bs-image-src="{{ asset('themes/shash_b5/assets/images/ecommerce/orders/9.jpg') }}"></span>
                                                                <h6 class="ms-3 my-auto fs-14 fw-semibold">Headsets</h6>
                                                            </div>
                                                        </td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Cherry Blossom</h6></td>
                                                        <td>30 Aug 2023</td>
                                                        <td><span class="fw-semibold">$6.721.5</span></td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> Online Payment</h6></td>
                                                        <td><span class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Shipped</span></td>
                                                        <td>
                                                            <div class="g-2">
                                                                <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                                <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> #76348798</h6></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <span class="avatar cover-image avatar-sm" data-bs-image-src="{{ asset('themes/shash_b5/assets/images/ecommerce/orders/11.jpg') }}"></span>
                                                                <h6 class="ms-3 my-auto fs-14 fw-semibold">Flower Pot</h6>
                                                            </div>
                                                        </td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Simon Sais</h6></td>
                                                        <td>15 Nov 2023</td>
                                                        <td><span class="fw-semibold">$35,7863</span></td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> Online Payment</h6></td>
                                                        <td><span class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Shipped</span></td>
                                                        <td>
                                                            <div class="g-2">
                                                                <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                                <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> #23986456</h6></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <span class="avatar cover-image avatar-sm" data-bs-image-src="{{ asset('themes/shash_b5/assets/images/ecommerce/orders/4.jpg') }}"></span>
                                                                <h6 class="ms-3 my-auto fs-14 fw-semibold">Pen Drive</h6>
                                                            </div>
                                                        </td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Manny Jah</h6></td>
                                                        <td>27 Jan  2023</td>
                                                        <td><span class="fw-semibold">$5,89,6437</span></td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Cash on Delivery</h6></td>
                                                        <td><span class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Shipped</span></td>
                                                        <td>
                                                            <div class="g-2">
                                                                <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                                <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> #87456325</h6></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <span class="avatar cover-image avatar-sm" data-bs-image-src="{{ asset('themes/shash_b5/assets/images/ecommerce/orders/8.jpg') }}"></span>
                                                                <h6 class="ms-3 my-auto fs-14 fw-semibold">New Bowl</h6>
                                                            </div>
                                                        </td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Florinda Carasco</h6></td>
                                                        <td>19 Sep 2023</td>
                                                        <td><span class="fw-semibold">$17.98</span></td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Online Payment</h6></td>
                                                        <td><span class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Shipped</span></td>
                                                        <td>
                                                            <div class="g-2">
                                                                <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                                <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> #65783926</h6></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <span class="avatar cover-image avatar-sm" data-bs-image-src="{{ asset('themes/shash_b5/assets/images/ecommerce/orders/6.jpg') }}"></span>
                                                                <h6 class="ms-3 my-auto fs-14 fw-semibold">Leather Watch</h6>
                                                            </div>
                                                        </td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Ivan Notheridiya</h6></td>
                                                        <td>06 Oct 2023</td>
                                                        <td><span class="fw-semibold">$8.654.4</span></td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Cash on Delivery</h6></td>
                                                        <td><span class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Shipped</span></td>
                                                        <td>
                                                            <div class="g-2">
                                                                <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                                <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> #34654895</h6></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <span class="avatar cover-image avatar-sm" data-bs-image-src="{{ asset('themes/shash_b5/assets/images/ecommerce/orders/1.jpg') }}"></span>
                                                                <h6 class="ms-3 my-auto fs-14 fw-semibold">Digital Camera</h6>
                                                            </div>
                                                        </td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Willie Findit</h6></td>
                                                        <td>10 Jul 2023</td>
                                                        <td><span class="fw-semibold">$8.654.4</span></td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Cash on Delivery</h6></td>
                                                        <td><span class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Shipped</span></td>
                                                        <td>
                                                            <div class="g-2">
                                                                <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                                <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> #98765345</h6></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <span class="avatar cover-image avatar-sm" data-bs-image-src="{{ asset('themes/shash_b5/assets/images/ecommerce/orders/10.jpg') }}"></span>
                                                                <h6 class="ms-3 my-auto fs-14 fw-semibold">Earphones</h6>
                                                            </div>
                                                        </td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Addie Minstra</h6></td>
                                                        <td>25 Jun 2023</td>
                                                        <td><span class="fw-semibold">$7,34,9768</span></td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Online Payment</h6></td>
                                                        <td><span class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Shipped</span></td>
                                                        <td>
                                                            <div class="g-2">
                                                                <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                                <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> #67546577</h6></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <span class="avatar cover-image avatar-sm" data-bs-image-src="{{ asset('themes/shash_b5/assets/images/ecommerce/orders/2.jpg') }}"></span>
                                                                <h6 class="ms-3 my-auto fs-14 fw-semibold">Shoes</h6>
                                                            </div>
                                                        </td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Laura Biding</h6></td>
                                                        <td>22 Feb 2023</td>
                                                        <td><span class="fw-semibold">$7.76.654</span></td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Cash on Delivery</h6></td>
                                                        <td><span class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Shipped</span></td>
                                                        <td>
                                                            <div class="g-2">
                                                                <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                                <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane border-0 p-0" id="tab7">
                                        <div class="table-responsive">
                                            <table class="table table-bordered text-nowrap mb-0">
                                                <thead class="border-top">
                                                    <tr>
                                                        <th scope="col" class="">Tracking Id</th>
                                                        <th scope="col" class="">Product</th>
                                                        <th scope="col" class="">Customer</th>
                                                        <th scope="col" class="">Date</th>
                                                        <th scope="col" class="">Amount</th>
                                                        <th scope="col" class="">Payment Mode</th>
                                                        <th scope="col" class="">Status</th>
                                                        <th scope="col" class="">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> #98765490</h6></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <span class="avatar cover-image avatar-sm" data-bs-image-src="{{ asset('themes/shash_b5/assets/images/ecommerce/orders/9.jpg') }}"></span>
                                                                <h6 class="ms-3 my-auto fs-14 fw-semibold">Headsets</h6>
                                                            </div>
                                                        </td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Cherry Blossom</h6></td>
                                                        <td>30 Aug 2023</td>
                                                        <td><span class="fw-semibold">$6.721.5</span></td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> Online Payment</h6></td>
                                                        <td><span class="badge bg-warning-transparent rounded-pill text-warning p-2 px-3">Pending</span></td>
                                                        <td>
                                                            <div class="g-2">
                                                                <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                                <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> #76348798</h6></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <span class="avatar cover-image avatar-sm" data-bs-image-src="{{ asset('themes/shash_b5/assets/images/ecommerce/orders/11.jpg') }}"></span>
                                                                <h6 class="ms-3 my-auto fs-14 fw-semibold">Flower Pot</h6>
                                                            </div>
                                                        </td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Simon Sais</h6></td>
                                                        <td>15 Nov 2023</td>
                                                        <td><span class="fw-semibold">$35,7863</span></td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> Online Payment</h6></td>
                                                        <td><span class="badge bg-warning-transparent rounded-pill text-warning p-2 px-3">Pending</span></td>
                                                        <td>
                                                            <div class="g-2">
                                                                <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                                <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> #23986456</h6></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <span class="avatar cover-image avatar-sm" data-bs-image-src="{{ asset('themes/shash_b5/assets/images/ecommerce/orders/4.jpg') }}"></span>
                                                                <h6 class="ms-3 my-auto fs-14 fw-semibold">Pen Drive</h6>
                                                            </div>
                                                        </td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Manny Jah</h6></td>
                                                        <td>27 Jan  2023</td>
                                                        <td><span class="fw-semibold">$5,89,6437</span></td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Cash on Delivery</h6></td>
                                                        <td><span class="badge bg-warning-transparent rounded-pill text-warning p-2 px-3">Pending</span></td>
                                                        <td>
                                                            <div class="g-2">
                                                                <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                                <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> #87456325</h6></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <span class="avatar cover-image avatar-sm" data-bs-image-src="{{ asset('themes/shash_b5/assets/images/ecommerce/orders/8.jpg') }}"></span>
                                                                <h6 class="ms-3 my-auto fs-14 fw-semibold">New Bowl</h6>
                                                            </div>
                                                        </td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Florinda Carasco</h6></td>
                                                        <td>19 Sep 2023</td>
                                                        <td><span class="fw-semibold">$17.98</span></td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Online Payment</h6></td>
                                                        <td><span class="badge bg-warning-transparent rounded-pill text-warning p-2 px-3">Pending</span></td>
                                                        <td>
                                                            <div class="g-2">
                                                                <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                                <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> #65783926</h6></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <span class="avatar cover-image avatar-sm" data-bs-image-src="{{ asset('themes/shash_b5/assets/images/ecommerce/orders/6.jpg') }}"></span>
                                                                <h6 class="ms-3 my-auto fs-14 fw-semibold">Leather Watch</h6>
                                                            </div>
                                                        </td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Ivan Notheridiya</h6></td>
                                                        <td>06 Oct 2023</td>
                                                        <td><span class="fw-semibold">$8.654.4</span></td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Cash on Delivery</h6></td>
                                                        <td><span class="badge bg-warning-transparent rounded-pill text-warning p-2 px-3">Pending</span></td>
                                                        <td>
                                                            <div class="g-2">
                                                                <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                                <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> #34654895</h6></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <span class="avatar cover-image avatar-sm" data-bs-image-src="{{ asset('themes/shash_b5/assets/images/ecommerce/orders/1.jpg') }}"></span>
                                                                <h6 class="ms-3 my-auto fs-14 fw-semibold">Digital Camera</h6>
                                                            </div>
                                                        </td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Willie Findit</h6></td>
                                                        <td>10 Jul 2023</td>
                                                        <td><span class="fw-semibold">$8.654.4</span></td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Cash on Delivery</h6></td>
                                                        <td><span class="badge bg-warning-transparent rounded-pill text-warning p-2 px-3">Pending</span></td>
                                                        <td>
                                                            <div class="g-2">
                                                                <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                                <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> #98765345</h6></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <span class="avatar cover-image avatar-sm" data-bs-image-src="{{ asset('themes/shash_b5/assets/images/ecommerce/orders/10.jpg') }}"></span>
                                                                <h6 class="ms-3 my-auto fs-14 fw-semibold">Earphones</h6>
                                                            </div>
                                                        </td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Addie Minstra</h6></td>
                                                        <td>25 Jun 2023</td>
                                                        <td><span class="fw-semibold">$7,34,9768</span></td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Online Payment</h6></td>
                                                        <td><span class="badge bg-warning-transparent rounded-pill text-warning p-2 px-3">Pending</span></td>
                                                        <td>
                                                            <div class="g-2">
                                                                <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                                <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> #67546577</h6></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <span class="avatar cover-image avatar-sm" data-bs-image-src="{{ asset('themes/shash_b5/assets/images/ecommerce/orders/2.jpg') }}"></span>
                                                                <h6 class="ms-3 my-auto fs-14 fw-semibold">Shoes</h6>
                                                            </div>
                                                        </td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Laura Biding</h6></td>
                                                        <td>22 Feb 2023</td>
                                                        <td><span class="fw-semibold">$7.76.654</span></td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Cash on Delivery</h6></td>
                                                        <td><span class="badge bg-warning-transparent rounded-pill text-warning p-2 px-3">Pending</span></td>
                                                        <td>
                                                            <div class="g-2">
                                                                <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                                <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane border-0 p-0" id="tab8">
                                        <div class="table-responsive">
                                            <table class="table table-bordered text-nowrap mb-0">
                                                <thead class="border-top">
                                                    <tr>
                                                        <th scope="col" class="">Tracking Id</th>
                                                        <th scope="col" class="">Product</th>
                                                        <th scope="col" class="">Customer</th>
                                                        <th scope="col" class="">Date</th>
                                                        <th scope="col" class="">Amount</th>
                                                        <th scope="col" class="">Payment Mode</th>
                                                        <th scope="col" class="">Status</th>
                                                        <th scope="col" class="">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> #98765490</h6></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <span class="avatar cover-image avatar-sm" data-bs-image-src="{{ asset('themes/shash_b5/assets/images/ecommerce/orders/9.jpg') }}"></span>
                                                                <h6 class="ms-3 my-auto fs-14 fw-semibold">Headsets</h6>
                                                            </div>
                                                        </td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Cherry Blossom</h6></td>
                                                        <td>30 Aug 2023</td>
                                                        <td><span class="fw-semibold">$6.721.5</span></td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> Online Payment</h6></td>
                                                        <td><span class="badge bg-danger-transparent rounded-pill text-danger p-2 px-3">Cancelled</span></td>
                                                        <td>
                                                            <div class="g-2">
                                                                <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                                <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> #76348798</h6></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <span class="avatar cover-image avatar-sm" data-bs-image-src="{{ asset('themes/shash_b5/assets/images/ecommerce/orders/11.jpg') }}"></span>
                                                                <h6 class="ms-3 my-auto fs-14 fw-semibold">Flower Pot</h6>
                                                            </div>
                                                        </td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Simon Sais</h6></td>
                                                        <td>15 Nov 2023</td>
                                                        <td><span class="fw-semibold">$35,7863</span></td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> Online Payment</h6></td>
                                                        <td><span class="badge bg-danger-transparent rounded-pill text-danger p-2 px-3">Cancelled</span></td>
                                                        <td>
                                                            <div class="g-2">
                                                                <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                                <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> #23986456</h6></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <span class="avatar cover-image avatar-sm" data-bs-image-src="{{ asset('themes/shash_b5/assets/images/ecommerce/orders/4.jpg') }}"></span>
                                                                <h6 class="ms-3 my-auto fs-14 fw-semibold">Pen Drive</h6>
                                                            </div>
                                                        </td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Manny Jah</h6></td>
                                                        <td>27 Jan  2023</td>
                                                        <td><span class="fw-semibold">$5,89,6437</span></td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Cash on Delivery</h6></td>
                                                        <td><span class="badge bg-danger-transparent rounded-pill text-danger p-2 px-3">Cancelled</span></td>
                                                        <td>
                                                            <div class="g-2">
                                                                <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                                <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> #87456325</h6></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <span class="avatar cover-image avatar-sm" data-bs-image-src="{{ asset('themes/shash_b5/assets/images/ecommerce/orders/8.jpg') }}"></span>
                                                                <h6 class="ms-3 my-auto fs-14 fw-semibold">New Bowl</h6>
                                                            </div>
                                                        </td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Florinda Carasco</h6></td>
                                                        <td>19 Sep 2023</td>
                                                        <td><span class="fw-semibold">$17.98</span></td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Online Payment</h6></td>
                                                        <td><span class="badge bg-danger-transparent rounded-pill text-danger p-2 px-3">Cancelled</span></td>
                                                        <td>
                                                            <div class="g-2">
                                                                <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                                <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> #65783926</h6></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <span class="avatar cover-image avatar-sm" data-bs-image-src="{{ asset('themes/shash_b5/assets/images/ecommerce/orders/6.jpg') }}"></span>
                                                                <h6 class="ms-3 my-auto fs-14 fw-semibold">Leather Watch</h6>
                                                            </div>
                                                        </td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Ivan Notheridiya</h6></td>
                                                        <td>06 Oct 2023</td>
                                                        <td><span class="fw-semibold">$8.654.4</span></td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Cash on Delivery</h6></td>
                                                        <td><span class="badge bg-danger-transparent rounded-pill text-danger p-2 px-3">Cancelled</span></td>
                                                        <td>
                                                            <div class="g-2">
                                                                <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                                <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> #34654895</h6></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <span class="avatar cover-image avatar-sm" data-bs-image-src="{{ asset('themes/shash_b5/assets/images/ecommerce/orders/1.jpg') }}"></span>
                                                                <h6 class="ms-3 my-auto fs-14 fw-semibold">Digital Camera</h6>
                                                            </div>
                                                        </td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Willie Findit</h6></td>
                                                        <td>10 Jul 2023</td>
                                                        <td><span class="fw-semibold">$8.654.4</span></td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Cash on Delivery</h6></td>
                                                        <td><span class="badge bg-danger-transparent rounded-pill text-danger p-2 px-3">Cancelled</span></td>
                                                        <td>
                                                            <div class="g-2">
                                                                <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                                <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> #98765345</h6></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <span class="avatar cover-image avatar-sm" data-bs-image-src="{{ asset('themes/shash_b5/assets/images/ecommerce/orders/10.jpg') }}"></span>
                                                                <h6 class="ms-3 my-auto fs-14 fw-semibold">Earphones</h6>
                                                            </div>
                                                        </td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Addie Minstra</h6></td>
                                                        <td>25 Jun 2023</td>
                                                        <td><span class="fw-semibold">$7,34,9768</span></td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Online Payment</h6></td>
                                                        <td><span class="badge bg-danger-transparent rounded-pill text-danger p-2 px-3">Cancelled</span></td>
                                                        <td>
                                                            <div class="g-2">
                                                                <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                                <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold"> #67546577</h6></td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <span class="avatar cover-image avatar-sm" data-bs-image-src="{{ asset('themes/shash_b5/assets/images/ecommerce/orders/2.jpg') }}"></span>
                                                                <h6 class="ms-3 my-auto fs-14 fw-semibold">Shoes</h6>
                                                            </div>
                                                        </td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Laura Biding</h6></td>
                                                        <td>22 Feb 2023</td>
                                                        <td><span class="fw-semibold">$7.76.654</span></td>
                                                        <td><h6 class="mb-0 fs-14 fw-semibold">Cash on Delivery</h6></td>
                                                        <td><span class="badge bg-danger-transparent rounded-pill text-danger p-2 px-3">Cancelled</span></td>
                                                        <td>
                                                            <div class="g-2">
                                                                <a class="btn text-primary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                                <a class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm-12 col-md-6 my-auto">
                                        <span>Showing 1 to 8 of 8 entries</span>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <nav aria-label="Page navigation">
                                            <ul class="pagination justify-content-end mb-0">
                                                <li class="page-item disabled"><a class="page-link" href="javascript:void(0);">Previous</a></li>
                                                <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ROW-4 END -->

            </div>
        </div>
        <!-- End::app-content -->

        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModal" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <div class="input-group">
                    <a href="javascript:void(0);" class="input-group-text" id="Search-Grid"><i class="fe fe-search header-link-icon fs-18"></i></a>
                    <input type="search" class="form-control border-0 px-2" placeholder="Search" aria-label="Username">
                    <a href="javascript:void(0);" class="input-group-text" id="voice-search"><i class="fe fe-mic header-link-icon"></i></a>
                    <a href="javascript:void(0);" class="btn btn-light btn-icon" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fe fe-more-vertical"></i>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Separated link</a></li>
                    </ul>
                  </div>
                  <div class="mt-4">
                    <p class="font-weight-semibold text-muted mb-2">Are You Looking For...</p>
                    <span class="search-tags"><i class="fe fe-user me-2"></i>People<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a></span>
                    <span class="search-tags"><i class="fe fe-file-text me-2"></i>Pages<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a></span>
                    <span class="search-tags"><i class="fe fe-align-left me-2"></i>Articles<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a></span>
                    <span class="search-tags"><i class="fe fe-server me-2"></i>Tags<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a></span>
                  </div>
                  <div class="my-4">
                    <p class="font-weight-semibold text-muted mb-2">Recent Search :</p>
                    <div class="p-2 border br-5 d-flex align-items-center text-muted mb-2 alert">
                      <a href="notifications.html"><span>Notifications</span></a>
                      <a class="ms-auto lh-1" href="javascript:void(0);" data-bs-dismiss="alert" aria-label="Close"><i class="fe fe-x text-muted"></i></a>
                    </div>
                    <div class="p-2 border br-5 d-flex align-items-center text-muted mb-2 alert">
                      <a href="alerts.html"><span>Alerts</span></a>
                      <a class="ms-auto lh-1" href="javascript:void(0);" data-bs-dismiss="alert" aria-label="Close"><i class="fe fe-x text-muted"></i></a>
                    </div>
                    <div class="p-2 border br-5 d-flex align-items-center text-muted mb-0 alert">
                      <a href="mail.html"><span>Mail</span></a>
                      <a class="ms-auto lh-1" href="javascript:void(0);" data-bs-dismiss="alert" aria-label="Close"><i class="fe fe-x text-muted"></i></a>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <div class="btn-group ms-auto">
                    <button class="btn btn-sm btn-primary-light">Search</button>
                    <button class="btn btn-sm btn-primary">Clear Recents</button>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <!-- Start Switcher -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="sidebar-right" aria-labelledby="offcanvasRightLabel2">
            <div class="offcanvas-header border-bottom bg-primary text-fixed-white">
                <h6 class="offcanvas-title d-inline-flex text-fixed-white" id="offcanvasRightLabel2">
                    <span class=" me-2 d-inline-flex">
                        <i class="fe fe-bell my-auto"></i> <span class=" pulse w-9 h-9 bg-success rounded-circle"></span>
                    </span>
                    Notifications
                </h6>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body p-0">
                <nav class="nav nav-tabs nav-justified" role="tablist">
                    <button class="nav-link active" id="sidebar-side1" data-bs-toggle="tab" data-bs-target="#sidebar-slidepane-1"
                        type="button" role="tab" aria-controls="sidebar-slidepane-1" aria-selected="true"><i class="d-inline-flex fe fe-settings me-1"></i> Feeds</button>
                    <button class="nav-link" id="sidebar-side2" data-bs-toggle="tab" data-bs-target="#sidebar-slidepane-2"
                        type="button" role="tab" aria-controls="sidebar-slidepane-2" aria-selected="false"><i class="d-inline-flex fe fe-message-circle me-1"></i>Chat</button>
                    <button class="nav-link" id="sidebar-side3" data-bs-toggle="tab" data-bs-target="#sidebar-slidepane-3"
                        type="button" role="tab" aria-controls="sidebar-slidepane-3" aria-selected="false"><i class="d-inline-flex fe fe-anchor me-1"></i>Timeline</button>
                </nav>
                <div class="tab-content">
                    <div class="tab-pane fade show active border-0 p-0" id="sidebar-slidepane-1" role="tabpanel" aria-labelledby="sidebar-side1" tabindex="0">
                        <div class="p-3 fw-semibold">Feeds</div>
                        <div class="py-3 px-4 pt-0">
                            <div class="row mb-3">
                                <div class="col-sm-2 mb-sm-0 mb-3">
                                    <span class="feeds avatar avatar-sm avatar-rounded bg-primary-transparent"><i class="fe fe-user text-primary"></i></span>
                                </div>
                                <div class="col-sm-10 ps-sm-0 my-auto">
                                    <div class="d-flex align-items-end justify-content-between ms-2">
                                        <h6 class="mb-0 fw-normal fs-14">New user registered</h6>
                                        <div>
                                            <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i class="fe fe-settings me-1"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i class="fe fe-x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-2 mb-sm-0 mb-3">
                                    <span class="feeds avatar avatar-sm avatar-rounded bg-secondary-transparent"><i class="fe fe-shopping-cart text-secondary"></i></span>
                                </div>
                                <div class="col-sm-10 ps-sm-0 my-auto">
                                    <div class="d-flex align-items-end justify-content-between ms-2">
                                        <h6 class="mb-0 fw-normal fs-14">New order delivered</h6>
                                        <div>
                                            <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i class="fe fe-settings me-1"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i class="fe fe-x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-2 mb-sm-0 mb-3">
                                    <span class="feeds avatar avatar-sm avatar-rounded bg-danger-transparent"><i class="fe fe-bell text-danger"></i></span>
                                </div>
                                <div class="col-sm-10 ps-sm-0 my-auto">
                                    <div class="d-flex align-items-end justify-content-between ms-2">
                                        <h6 class="mb-0 fw-normal fs-14">You have pending tasks</h6>
                                        <div>
                                            <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i class="fe fe-settings me-1"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i class="fe fe-x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-2 mb-sm-0 mb-3">
                                    <span class="feeds avatar avatar-sm avatar-rounded bg-warning-transparent"><i class="fe fe-gitlab text-warning"></i></span>
                                </div>
                                <div class="col-sm-10 ps-sm-0 my-auto">
                                    <div class="d-flex align-items-end justify-content-between ms-2">
                                        <h6 class="mb-0 fw-normal fs-14">New version arrived</h6>
                                        <div>
                                            <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i class="fe fe-settings me-1"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i class="fe fe-x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-2 mb-sm-0 mb-3">
                                    <span class="feeds avatar avatar-sm avatar-rounded bg-pink-transparent"><i class="fe fe-database text-pink"></i></span>
                                </div>
                                <div class="col-sm-10 ps-sm-0 my-auto">
                                    <div class="d-flex align-items-end justify-content-between ms-2">
                                        <h6 class="mb-0 fw-normal fs-14">Server #1 overloaded</h6>
                                        <div>
                                            <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i class="fe fe-settings me-1"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i class="fe fe-x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2 mb-sm-0 mb-3">
                                    <span class="feeds avatar avatar-sm avatar-rounded bg-info-transparent"><i class="fe fe-check-circle text-info"></i></span>
                                </div>
                                <div class="col-sm-10 ps-sm-0 my-auto">
                                    <div class="d-flex align-items-end justify-content-between ms-2">
                                        <h6 class="mb-0 fw-normal fs-14">New project launched</h6>
                                        <div>
                                            <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i class="fe fe-settings me-1"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i class="fe fe-x"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-3 fw-semibold">Settings</div>
                        <div class="py-3 px-4 pt-0">
                            <div class="row mb-3">
                                <div class="col-sm-2 mb-sm-0 mb-3">
                                    <span class="feeds avatar avatar-sm avatar-rounded bg-primary-transparent"><i class="fe fe-settings text-primary"></i></span>
                                </div>
                                <div class="col-sm-10 ps-sm-0 my-auto">
                                    <div class="d-flex align-items-end justify-content-between ms-2">
                                        <h6 class="mb-0 fw-normal fs-14">General Settings</h6>
                                        <div>
                                            <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i class="fe fe-settings"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-2 mb-sm-0 mb-3">
                                    <span class="feeds avatar avatar-sm avatar-rounded bg-secondary-transparent"><i class="fe fe-map-pin text-secondary"></i></span>
                                </div>
                                <div class="col-sm-10 ps-sm-0 my-auto">
                                    <div class="d-flex align-items-end justify-content-between ms-2">
                                        <h6 class="mb-0 fw-normal fs-14">Map Settings</h6>
                                        <div>
                                            <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i class="fe fe-settings"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-2 mb-sm-0 mb-3">
                                    <span class="feeds avatar avatar-sm avatar-rounded bg-danger-transparent"><i class="fe fe-headphones text-danger"></i></span>
                                </div>
                                <div class="col-sm-10 ps-sm-0 my-auto">
                                    <div class="d-flex align-items-end justify-content-between ms-2">
                                        <h6 class="mb-0 fw-normal fs-14">Support Settings</h6>
                                        <div>
                                            <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i class="fe fe-settings"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-2 mb-sm-0 mb-3">
                                    <span class="feeds avatar avatar-sm avatar-rounded bg-warning-transparent"><i class="fe fe-credit-card text-warning"></i></span>
                                </div>
                                <div class="col-sm-10 ps-sm-0 my-auto">
                                    <div class="d-flex align-items-end justify-content-between ms-2">
                                        <h6 class="mb-0 fw-normal fs-14">Payment  Settings</h6>
                                        <div>
                                            <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i class="fe fe-settings"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2 mb-sm-0 mb-3">
                                    <span class="feeds avatar avatar-sm avatar-rounded bg-pink-transparent"><i class="fe fe-bell text-pink"></i></span>
                                </div>
                                <div class="col-sm-10 ps-sm-0 my-auto">
                                    <div class="d-flex align-items-end justify-content-between ms-2">
                                        <h6 class="mb-0 fw-normal fs-14">Notification Settings</h6>
                                        <div>
                                            <a aria-label="anchor" href="javascript:void(0)" class="text-primary"><i class="fe fe-settings"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade border-0 p-0" id="sidebar-slidepane-2" role="tabpanel" aria-labelledby="sidebar-side2" tabindex="0">
                        <div class="p-3 fw-semibold">Today</div>
                        <div class="d-flex align-items-center py-3 px-3 pt-0">
                            <div class="me-2">
                                <span class="avatar avatar-md avatar-rounded cover-image"  data-bs-image-src="{{ asset('themes/shash_b5/assets/images/faces/2.jpg') }}"></span>
                            </div>
                            <div class="">
                                <a href="chat.html">
                                    <div class="fw-semibold text-dark" >Addie Minstra</div>
                                    <p class="mb-0 fs-12 text-muted"> Hey! there I' am available.... </p>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center py-3 px-3 pt-0">
                            <div class="me-2">
                                <span class="avatar avatar-md online avatar-rounded cover-image"  data-bs-image-src="{{ asset('themes/shash_b5/assets/images/faces/11.jpg') }}"></span>
                            </div>
                            <div class="">
                                <a href="chat.html">
                                    <div class="fw-semibold text-dark">Rose Bush</div>
                                    <p class="mb-0 fs-12 text-muted"> Okay...I will be waiting for you </p>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center py-3 px-3 pt-0">
                            <div class="me-2">
                                <span class="avatar avatar-md avatar-rounded cover-image"  data-bs-image-src="{{ asset('themes/shash_b5/assets/images/faces/10.jpg') }}"></span>
                            </div>
                            <div class="">
                                <a href="chat.html">
                                    <div class="fw-semibold text-dark">Claude Strophobia</div>
                                    <p class="mb-0 fs-12 text-muted"> Hi we can explain our new project......</p>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center py-3 px-3 pt-0">
                            <div class="me-2">
                                <span class="avatar avatar-md avatar-rounded cover-image"  data-bs-image-src="{{ asset('themes/shash_b5/assets/images/faces/13.jpg') }}"></span>
                            </div>
                            <div class="">
                                <a href="chat.html">
                                    <div class="fw-semibold text-dark">Eileen Dover</div>
                                    <p class="mb-0 fs-12 text-muted"> New product Launching...</p>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center py-3 px-3 pt-0">
                            <div class="me-2">
                                <span class="avatar avatar-md online avatar-rounded cover-image"  data-bs-image-src="{{ asset('themes/shash_b5/assets/images/faces/12.jpg') }}"></span>
                            </div>
                            <div class="">
                                <a href="chat.html">
                                    <div class="fw-semibold text-dark">Willie Findit</div>
                                    <p class="mb-0 fs-12 text-muted"> Okay...I will be waiting for you </p>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center py-3 px-3 pt-0">
                            <div class="me-2">
                                <span class="avatar avatar-md avatar-rounded cover-image"  data-bs-image-src="{{ asset('themes/shash_b5/assets/images/faces/15.jpg') }}"></span>
                            </div>
                            <div class="">
                                <a href="chat.html">
                                    <div class="fw-semibold text-dark">Manny Jah</div>
                                    <p class="mb-0 fs-12 text-muted">  Hi we can explain our new project......</p>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center py-0 px-3">
                            <div class="me-2">
                                <span class="avatar avatar-md avatar-rounded cover-image"  data-bs-image-src="{{ asset('themes/shash_b5/assets/images/faces/4.jpg') }}"></span>
                            </div>
                            <div class="">
                                <a href="chat.html">
                                    <div class="fw-semibold text-dark">Cherry Blossom</div>
                                    <p class="mb-0 fs-12 text-muted"> Hey! there I' am available....</p>
                                </a>
                            </div>
                        </div>
                        <div class="p-3 fw-semibold">Yesterday</div>
                        <div class="d-flex align-items-center py-3 px-3 pt-0">
                            <div class="me-2">
                                <span class="avatar avatar-md online avatar-rounded cover-image"  data-bs-image-src="{{ asset('themes/shash_b5/assets/images/faces/7.jpg') }}"></span>
                            </div>
                            <div class="">
                                <a href="chat.html">
                                    <div class="fw-semibold text-dark">Simon Sais</div>
                                    <p class="mb-0 fs-12 text-muted">Schedule Realease...... </p>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center py-3 px-3 pt-0">
                            <div class="me-2">
                                <span class="avatar avatar-md avatar-rounded cover-image"  data-bs-image-src="{{ asset('themes/shash_b5/assets/images/faces/9.jpg') }}"></span>
                            </div>
                            <div class="">
                                <a href="chat.html">
                                    <div class="fw-semibold text-dark">Laura Biding</div>
                                    <p class="mb-0 fs-12 text-muted">Hi we can explain our new project...... </p>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center py-3 px-3 pt-0">
                            <div class="me-2">
                                <span class="avatar avatar-md online avatar-rounded cover-image"  data-bs-image-src="{{ asset('themes/shash_b5/assets/images/faces/2.jpg') }}"></span>
                            </div>
                            <div class="">
                                <a href="chat.html">
                                    <div class="fw-semibold text-dark">Addie Minstra</div>
                                    <p class="mb-0 fs-12 text-muted">Contact me for details....</p>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center py-3 px-3 pt-0">
                            <div class="me-2">
                                <span class="avatar avatar-md avatar-rounded cover-image"  data-bs-image-src="{{ asset('themes/shash_b5/assets/images/faces/9.jpg') }}"></span>
                            </div>
                            <div class="">
                                <a href="chat.html">
                                    <div class="fw-semibold text-dark">Ivan Notheridiya</div>
                                    <p class="mb-0 fs-12 text-muted">Hi we can explain our new project......</p>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center py-3 px-3 pt-0">
                            <div class="me-2">
                                <span class="avatar avatar-md avatar-rounded cover-image"  data-bs-image-src="{{ asset('themes/shash_b5/assets/images/faces/14.jpg') }}"></span>
                            </div>
                            <div class="">
                                <a href="chat.html">
                                    <div class="fw-semibold text-dark">Dulcie Veeta</div>
                                    <p class="mb-0 fs-12 text-muted"> Okay...I will be waiting for you</p>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center py-3 px-3 pt-0">
                            <div class="me-2">
                                <span class="avatar avatar-md avatar-rounded cover-image"  data-bs-image-src="{{ asset('themes/shash_b5/assets/images/faces/11.jpg') }}"></span>
                            </div>
                            <div class="">
                                <a href="chat.html">
                                    <div class="fw-semibold text-dark">Florinda Carasco</div>
                                    <p class="mb-0 fs-12 text-muted">New product Launching...</p>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center py-3 px-3 pt-0">
                            <div class="me-2">
                                <span class="avatar avatar-md online avatar-rounded cover-image"  data-bs-image-src="{{ asset('themes/shash_b5/assets/images/faces/11.jpg') }}"></span>
                            </div>
                            <div class="">
                                <a href="chat.html">
                                    <div class="fw-semibold text-dark">Cherry Blossom</div>
                                    <p class="mb-0 fs-12 text-muted">cherryblossom@gmail.com</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade border-0 p-3" id="sidebar-slidepane-3" role="tabpanel" aria-labelledby="sidebar-side3" tabindex="0">
                        <ul class="task-list timeline-task">
                            <li class="d-sm-flex">
                                <div>
                                    <i class="task-icon1"></i>
                                    <h6 class="fw-semibold fs-14">Task Finished<span
                                            class="text-muted fs-11 mx-2 fw-normal">09 July 2021</span></h6>
                                    <p class="text-muted fs-12 mb-0">Adam Berry finished task on<a href="javascript:void(0)" class="fw-semibold text-primary"> Project Management</a></p>
                                </div>
                                <div class="ms-auto d-md-flex task-icon-link">
                                    <a aria-label="anchor" href="javascript:void(0)" class="text-muted me-2"><i class="fe fe-edit"></i></a>
                                    <a aria-label="anchor" href="javascript:void(0)" class="text-muted"><i class="fe fe-trash-2 fs-12"></i></a>
                                </div>
                            </li>
                            <li class="d-sm-flex">
                                <div>
                                    <i class="task-icon1"></i>
                                    <h6 class="fw-semibold fs-14">New Comment<span
                                            class="text-muted fs-11 mx-2 fw-normal">05 July 2021</span></h6>
                                    <p class="text-muted fs-12 mb-0">Victoria commented on Project <a href="javascript:void(0)"
                                            class="fw-semibold text-primary"> AngularJS Template</a></p>
                                </div>
                                <div class="ms-auto d-md-flex task-icon-link">
                                    <a aria-label="anchor" href="javascript:void(0)" class="text-muted me-2"><i class="fe fe-edit"></i></a>
                                    <a aria-label="anchor" href="javascript:void(0)" class="text-muted"><i class="fe fe-trash-2 fs-12"></i></a>
                                </div>
                            </li>
                            <li class="d-sm-flex">
                                <div>
                                    <i class="task-icon1"></i>
                                    <h6 class="fw-semibold fs-14">New Comment<span
                                            class="text-muted fs-11 mx-2 fw-normal">25 June 2021</span></h6>
                                    <p class="text-muted fs-12 mb-0">Victoria commented on Project <a href="javascript:void(0)"
                                            class="fw-semibold text-primary"> AngularJS Template</a></p>
                                </div>
                                <div class="ms-auto d-md-flex task-icon-link">
                                    <a aria-label="anchor" href="javascript:void(0)" class="text-muted me-2"><i class="fe fe-edit"></i></a>
                                    <a aria-label="anchor" href="javascript:void(0)" class="text-muted"><i class="fe fe-trash-2 fs-12"></i></a>
                                </div>
                            </li>
                            <li class="d-sm-flex">
                                <div>
                                    <i class="task-icon1"></i>
                                    <h6 class="fw-semibold fs-14">Task Overdue<span
                                            class="text-muted fs-11 mx-2 fw-normal">14 June 2021</span></h6>
                                    <p class="text-muted mb-0 fs-12">Petey Cruiser finished task <a href="javascript:void(0)"
                                            class="fw-semibold text-primary"> Integrated management</a></p>
                                </div>
                                <div class="ms-auto d-md-flex task-icon-link">
                                    <a aria-label="anchor" href="javascript:void(0)" class="text-muted me-2"><i class="fe fe-edit"></i></a>
                                    <a aria-label="anchor" href="javascript:void(0)" class="text-muted"><i class="fe fe-trash-2 fs-12"></i></a>
                                </div>
                            </li>
                            <li class="d-sm-flex">
                                <div>
                                    <i class="task-icon1"></i>
                                    <h6 class="fw-semibold fs-14">Task Overdue<span
                                            class="text-muted fs-11 mx-2 fw-normal">29 June 2021</span></h6>
                                    <p class="text-muted mb-0 fs-12">Petey Cruiser finished task <a href="javascript:void(0)"
                                            class="fw-semibold text-primary"> Integrated management</a></p>
                                </div>
                                <div class="ms-auto d-md-flex task-icon-link">
                                    <a aria-label="anchor" href="javascript:void(0)" class="text-muted me-2"><i class="fe fe-edit"></i></a>
                                    <a aria-label="anchor" href="javascript:void(0)" class="text-muted"><i class="fe fe-trash-2 fs-12"></i></a>
                                </div>
                            </li>
                            <li class="d-sm-flex">
                                <div>
                                    <i class="task-icon1"></i>
                                    <h6 class="fw-semibold fs-14">Task Finished<span
                                            class="text-muted fs-11 mx-2 fw-normal">09 July 2021</span></h6>
                                    <p class="text-muted fs-12 mb-0">Adam Berry finished task on<a href="javascript:void(0)"
                                            class="fw-semibold text-primary"> Project Management</a></p>
                                </div>
                                <div class="ms-auto d-md-flex task-icon-link">
                                    <a aria-label="anchor" href="javascript:void(0)" class="text-muted me-2"><i class="fe fe-edit"></i></a>
                                    <a aria-label="anchor" href="javascript:void(0)" class="text-muted"><i class="fe fe-trash-2 fs-12"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Switcher -->


        <!-- Footer Start -->
        <footer class="footer mt-auto py-3 text-center">
            <div class="container">
                <span class=""> Copyright © <span id="year"></span> <a
                        href="javascript:void(0);" class="text-primary">Sash</a>.
                    Designed with <span class="bi bi-heart-fill text-danger"></span> by <a href="javascript:void(0);">
                        <span class="text-primary">Spruko</span>
                    </a> All
                    rights
                    reserved
                </span>
            </div>
        </footer>
        <!-- Footer End -->

    </div>


    <!-- Scroll To Top -->
    <div class="scrollToTop">
        <span class="arrow"><i class="ri-arrow-up-s-fill fs-20"></i></span>
    </div>
    <div id="responsive-overlay"></div>
    <!-- Scroll To Top -->
    <!-- Popper JS -->
    <script src="{{ asset('themes/shash_b5/assets/libs/@popperjs/core/umd/popper.min.js') }}"></script>

    <!-- Bootstrap JS -->
    <script src="{{ asset('themes/shash_b5/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Defaultmenu JS -->
    <script src="{{ asset('themes/shash_b5/assets/js/defaultmenu.min.js') }}"></script>

    <!-- Node Waves JS-->
    <script src="{{ asset('themes/shash_b5/assets/libs/node-waves/waves.min.js') }}"></script>

    <!-- Sticky JS -->
    <script src="{{ asset('themes/shash_b5/assets/js/sticky.js') }}"></script>

    <!-- Simplebar JS -->
    <script src="{{ asset('themes/shash_b5/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('themes/shash_b5/assets/js/simplebar.js') }}"></script>

    <!-- Color Picker JS -->
    <script src="{{ asset('themes/shash_b5/assets/libs/@simonwep/pickr/pickr.es5.min.js') }}"></script>

    <!-- JSVector Maps JS -->
    <script src="{{ asset('themes/shash_b5/assets/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>

    <!-- JSVector Maps MapsJS -->
    <script src="{{ asset('themes/shash_b5/assets/libs/jsvectormap/maps/world-merc.js') }}"></script>

    <!-- Apex Charts JS -->
    <script src="{{ asset('themes/shash_b5/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- Chartjs Chart JS -->
    <script src="{{ asset('themes/shash_b5/assets/libs/chart.js/chart.min.js') }}"></script>

    <!-- index -->
    <script src="{{ asset('themes/shash_b5/assets/js/index.js') }}"></script>

    <!-- Custom-Switcher JS -->
    <script src="{{ asset('themes/shash_b5/assets/js/custom-switcher.min.js') }}"></script>

    <!-- Custom JS -->
    <script src="{{ asset('themes/shash_b5/assets/js/custom.js') }}"></script>

</body>

</html>
