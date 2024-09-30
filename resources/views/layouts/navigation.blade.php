<nav x-data="{ open: false }" >
    <div class="offcanvas offcanvas-end" tabindex="-1" id="switcher-canvas" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header border-bottom">
        <h5 class="offcanvas-title text-default" id="offcanvasRightLabel">Switcher</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <nav class="border-bottom border-block-end-dashed">
            <div class="nav nav-tabs nav-justified" id="switcher-main-tab" role="tablist">
                <button class="nav-link active" id="switcher-home-tab" data-bs-toggle="tab"
                    data-bs-target="#switcher-home" type="button" role="tab" aria-controls="switcher-home"
                    aria-selected="true">Theme Styles</button>
                <button class="nav-link" id="switcher-profile-tab" data-bs-toggle="tab"
                    data-bs-target="#switcher-profile" type="button" role="tab" aria-controls="switcher-profile"
                    aria-selected="false">Theme Colors</button>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active border-0" id="switcher-home" role="tabpanel"
                aria-labelledby="switcher-home-tab" tabindex="0">
                <div class="">
                    <p class="switcher-style-head">Theme Color Mode:</p>
                    <div class="row switcher-style gx-0">
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-light-theme">
                                    Light
                                </label>
                                <input class="form-check-input" type="radio" name="theme-style"
                                    id="switcher-light-theme" checked>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-dark-theme">
                                    Dark
                                </label>
                                <input class="form-check-input" type="radio" name="theme-style"
                                    id="switcher-dark-theme">
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
                                <input class="form-check-input" type="radio" name="direction" id="switcher-ltr"
                                    checked>
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
                                <input class="form-check-input" type="radio" name="navigation-style"
                                    id="switcher-vertical" checked>
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
                                <input class="form-check-input" type="radio" name="page-styles"
                                    id="switcher-regular" checked>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-classic">
                                    Classic
                                </label>
                                <input class="form-check-input" type="radio" name="page-styles"
                                    id="switcher-classic">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-modern">
                                    Modern
                                </label>
                                <input class="form-check-input" type="radio" name="page-styles"
                                    id="switcher-modern">
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
                                <input class="form-check-input" type="radio" name="layout-width"
                                    id="switcher-full-width" checked>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-boxed">
                                    Boxed
                                </label>
                                <input class="form-check-input" type="radio" name="layout-width"
                                    id="switcher-boxed">
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
                                <input class="form-check-input" type="radio" name="menu-positions"
                                    id="switcher-menu-fixed" checked>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-menu-scroll">
                                    Scrollable
                                </label>
                                <input class="form-check-input" type="radio" name="menu-positions"
                                    id="switcher-menu-scroll">
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
                                    id="switcher-loader-enable" checked>
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
            <div class="tab-pane fade border-0" id="switcher-profile" role="tabpanel"
                aria-labelledby="switcher-profile-tab" tabindex="0">
                <div>
                    <div class="theme-colors">
                        <p class="switcher-style-head">Menu Colors:</p>
                        <div class="d-flex switcher-style pb-2">
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-white" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Light Menu" type="radio" name="menu-colors"
                                    id="switcher-menu-light" checked>
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-dark" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Dark Menu" type="radio" name="menu-colors"
                                    id="switcher-menu-dark">
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
                                <input class="form-check-input color-input color-transparent" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Transparent Menu" type="radio"
                                    name="menu-colors" id="switcher-menu-transparent">
                            </div>
                        </div>
                        <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Menu dynamically
                            change from below Theme Primary color picker</div>
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
                                    data-bs-placement="top" title="Gradient Header" type="radio"
                                    name="header-colors" id="switcher-header-gradient">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-transparent" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Transparent Header" type="radio"
                                    name="header-colors" id="switcher-header-transparent">
                            </div>
                        </div>
                        <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Header dynamically
                            change from below Theme Primary color picker</div>
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
                                <input class="form-check-input color-input color-primary-3" type="radio"
                                    name="theme-primary" id="switcher-primary2">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-primary-4" type="radio"
                                    name="theme-primary" id="switcher-primary3">
                            </div>
                            <div class="form-check switch-select me-3">
                                <input class="form-check-input color-input color-primary-5" type="radio"
                                    name="theme-primary" id="switcher-primary4">
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
                                <input class="form-check-input color-input color-bg-3" type="radio"
                                    name="theme-background" id="switcher-background2">
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
                                <input class="form-check-input bgimage-input bg-img3" type="radio"
                                    name="theme-background" id="switcher-bg-img2">
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
            <div class="d-flex justify-content-between canvas-footer flex-wrap">
                <a href="javascript:void(0);" id="reset-all" class="btn btn-danger w-100 m-1">Reset</a>
            </div>
        </div>
    </div>
</div>
<!-- End Switcher -->


<!-- Loader -->
<div id="loader">
    <img src="../assets/images/media/loader.svg" alt="">
</div>
<!-- Loader -->

<div class="page">
    <!-- app-header -->
    <div class="app-header">

        <!-- Start::main-header-container -->
        <div class="main-header-container container-fluid">

            <!-- Start::header-content-left -->
            <div class="header-content-left">

                <!-- Start::header-element -->
                <!--
                <div class="header-element">



                </div>
                 -->
                <!-- End::header-element -->

                <!-- Start::header-element -->
                <div class="header-element">
                    <!-- Start::header-link -->
                    <a aria-label="Hide Sidebar"
                        class="sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle"
                        data-bs-toggle="sidebar" href="javascript:void(0);">
                        <i class="header-icon fe fe-align-left"></i>
                    </a>
                    <div class="main-header-center d-none d-lg-block">
                        <input class="form-control" placeholder="Search for anything..." type="search"> <button
                            class="btn"><i class="fa fa-search d-none d-md-block"></i></button>
                    </div>
                    <!-- End::header-link -->
                </div>
                <!-- End::header-element -->

            </div>
            <!-- End::header-content-left -->

            <!-- Start::header-content-right -->
            <div class="header-content-right">



                <!-- Start::header-element -->
                <div class="header-element country-selector">
                    <!-- Start::header-link|dropdown-toggle -->
                    <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-auto-close="outside"
                        data-bs-toggle="dropdown">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="flag-icon1">
                            <circle cx="256" cy="256" r="256" fill="#f0f0f0"></circle>
                            <g fill="#0052b4">
                                <path
                                    d="M52.92 100.142c-20.109 26.163-35.272 56.318-44.101 89.077h133.178L52.92 100.142zM503.181 189.219c-8.829-32.758-23.993-62.913-44.101-89.076l-89.075 89.076h133.176zM8.819 322.784c8.83 32.758 23.993 62.913 44.101 89.075l89.074-89.075H8.819zM411.858 52.921c-26.163-20.109-56.317-35.272-89.076-44.102v133.177l89.076-89.075zM100.142 459.079c26.163 20.109 56.318 35.272 89.076 44.102V370.005l-89.076 89.074zM189.217 8.819c-32.758 8.83-62.913 23.993-89.075 44.101l89.075 89.075V8.819zM322.783 503.181c32.758-8.83 62.913-23.993 89.075-44.101l-89.075-89.075v133.176zM370.005 322.784l89.075 89.076c20.108-26.162 35.272-56.318 44.101-89.076H370.005z">
                                </path>
                            </g>
                            <g fill="#d80027">
                                <path
                                    d="M509.833 222.609H289.392V2.167A258.556 258.556 0 00256 0c-11.319 0-22.461.744-33.391 2.167v220.441H2.167A258.556 258.556 0 000 256c0 11.319.744 22.461 2.167 33.391h220.441v220.442a258.35 258.35 0 0066.783 0V289.392h220.442A258.533 258.533 0 00512 256c0-11.317-.744-22.461-2.167-33.391z">
                                </path>
                                <path
                                    d="M322.783 322.784L437.019 437.02a256.636 256.636 0 0015.048-16.435l-97.802-97.802h-31.482v.001zM189.217 322.784h-.002L74.98 437.019a256.636 256.636 0 0016.435 15.048l97.802-97.804v-31.479zM189.217 189.219v-.002L74.981 74.98a256.636 256.636 0 00-15.048 16.435l97.803 97.803h31.481zM322.783 189.219L437.02 74.981a256.328 256.328 0 00-16.435-15.047l-97.802 97.803v31.482z">
                                </path>
                            </g>
                        </svg>
                    </a>
                    <!-- End::header-link|dropdown-toggle -->
                    <ul class="main-header-dropdown dropdown-menu dropdown-menu-end country-dropdown"
                        data-popper-placement="none">
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                <span>
                                    <img src="../assets/images/flags/french_flag.jpg" alt="img"
                                        class="avatar avatar-xs lh-1 me-2">
                                </span>
                                French
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                <span>
                                    <img src="../assets/images/flags/germany_flag.jpg" alt="img"
                                        class="avatar avatar-xs lh-1 me-2">
                                </span>
                                German
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                <span>
                                    <img src="../assets/images/flags/italy_flag.jpg" alt="img"
                                        class="avatar avatar-xs lh-1 me-2">
                                </span>
                                Italian
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                <span>
                                    <img src="../assets/images/flags/russia_flag.jpg" alt="img"
                                        class="avatar avatar-xs lh-1 me-2">
                                </span>
                                Russian
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                <span>
                                    <img src="../assets/images/flags/spain_flag.jpg" alt="img"
                                        class="avatar avatar-xs lh-1 me-2">
                                </span>
                                Spanish
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- End::header-element -->

                <!-- Start::header-element -->
                <div class="header-element header-theme-mode">
                    <!-- Start::header-link|layout-setting -->
                    <a href="javascript:void(0);" class="header-link layout-setting">
                        <span class="light-layout">
                            <!-- Start::header-link-icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" height="24"
                                viewBox="0 -960 960 960" width="24">
                                <path
                                    d="M480-120q-150 0-255-105T120-480q0-150 105-255t255-105q14 0 27.5 1t26.5 3q-41 29-65.5 75.5T444-660q0 90 63 153t153 63q55 0 101-24.5t75-65.5q2 13 3 26.5t1 27.5q0 150-105 255T480-120Zm0-80q88 0 158-48.5T740-375q-20 5-40 8t-40 3q-123 0-209.5-86.5T364-660q0-20 3-40t8-40q-78 32-126.5 102T200-480q0 116 82 198t198 82Zm-10-270Z" />
                            </svg>
                            <!-- End::header-link-icon -->
                        </span>
                        <span class="dark-layout">
                            <!-- Start::header-link-icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" fill="currentColor"
                                height="24" viewBox="0 -960 960 960" width="24">
                                <path
                                    d="M480-360q50 0 85-35t35-85q0-50-35-85t-85-35q-50 0-85 35t-35 85q0 50 35 85t85 35Zm0 80q-83 0-141.5-58.5T280-480q0-83 58.5-141.5T480-680q83 0 141.5 58.5T680-480q0 83-58.5 141.5T480-280ZM200-440H40v-80h160v80Zm720 0H760v-80h160v80ZM440-760v-160h80v160h-80Zm0 720v-160h80v160h-80ZM256-650l-101-97 57-59 96 100-52 56Zm492 496-97-101 53-55 101 97-57 59Zm-98-550 97-101 59 57-100 96-56-52ZM154-212l101-97 55 53-97 101-59-57Zm326-268Z" />
                            </svg>
                            <!-- End::header-link-icon -->
                        </span>
                    </a>
                    <!-- End::header-link|layout-setting -->
                </div>
                <!-- End::header-element -->

                <!-- Start::header-element -->

                <!-- End::header-element -->

                <!-- Start::header-element -->

                <!-- End::header-element -->

                <!-- Start::header-element -->
                <div class="header-element header-fullscreen">
                    <!-- Start::header-link -->
                    <a onclick="openFullscreen();" href="javascript:void(0);" class="header-link">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="full-screen-open full-screen-icon header-link-icon" height="24px"
                            viewBox="0 0 24 24" width="24px" fill="currentColor">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path d="M7 14H5v5h5v-2H7v-3zm-2-4h2V7h3V5H5v5zm12 7h-3v2h5v-5h-2v3zM14 5v2h3v3h2V5h-5z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="full-screen-close full-screen-icon header-link-icon d-none" fill="currentColor"
                            height="24" viewBox="0 -960 960 960" width="24">
                            <path
                                d="M320-200v-120H200v-80h200v200h-80Zm240 0v-200h200v80H640v120h-80ZM200-560v-80h120v-120h80v200H200Zm360 0v-200h80v120h120v80H560Z" />
                        </svg>
                    </a>
                    <!-- End::header-link -->
                </div>
                <!-- End::header-element -->

                <!-- Start::header-element -->
                <div class="header-element headerProfile-dropdown">
                    <!-- Start::header-link-->
                    <a href="javascript:void(0);" class="header-link" data-bs-toggle="offcanvas"
                        data-bs-target="#header-sidebar">
                        <svg xmlns="http://www.w3.org/2000/svg" class="header-link-icon" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <line x1="3" y1="12" x2="21" y2="12"></line>
                            <line x1="3" y1="6" x2="21" y2="6"></line>
                            <line x1="3" y1="18" x2="21" y2="18"></line>
                        </svg>
                    </a>
                    <!-- End::header-link-->
                </div>
                <!-- End::header-element -->

                <!-- Start::header-element -->
                <div class="header-element headerProfile-dropdown">
                    <!-- Start::header-link|dropdown-toggle -->
                    <a href="javascript:void(0);" class="header-link dropdown-toggle" id="mainHeaderProfile"
                        data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                        <img src="../assets/images/faces/6.jpg" alt="img" width="37" height="37"
                            class="rounded-circle">
                    </a>
                    <!-- End::header-link|dropdown-toggle -->
                    <ul class="main-header-dropdown dropdown-menu pt-0 header-profile-dropdown dropdown-menu-end main-profile-menu"
                        aria-labelledby="mainHeaderProfile">
                        <li>
                            <div class="main-header-profile bg-primary menu-header-content text-fixed-white">
                                <div class="my-auto">


                                    <h6 class="mb-0 lh-1 text-fixed-white">{{ Auth::user()->name }}</h6>
                                    <span class="fs-11 op-7 lh-1">{{ Auth::user()->email }}</span>
                                </div>
                            </div>
                        </li>

                        <li>
                            <a class="dropdown-item d-flex" href="{{ route('profile.edit') }}">
                                <span class="dropdown-item d-flex">
                                    <i class="bx bx-user-circle fs-18 me-2 op-7"></i>Profile</a>
                            </span>
                        </li>


                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-responsive-nav-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();"
                                    class="dropdown-item d-flex">
                                    <span class="dropdown-item d-flex">
                                        <i class="bx bx-log-out fs-18 me-2 op-7"></i> {{ __('Log Out') }}
                                    </span>
                                </x-responsive-nav-link>
                            </form>
                        </li>
                    </ul>
                </div>
                <!-- End::header-element -->

                <!-- Start::header-element -->
                <div class="header-element">
                    <!-- Start::header-link|switcher-icon -->

                    <!-- End::header-link|switcher-icon -->
                </div>
                <!-- End::header-element -->

            </div>
            <!-- End::header-content-right -->

        </div>
        <!-- End::main-header-container -->

    </div>
    <!-- /app-header -->

    <!-- Start::Off-canvas sidebar-->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="header-sidebar" aria-labelledby="sidebarLabel">
        <div class="offcanvas-header rounded-0">
            <h5 class="fs-14 text-uppercase mb-0 fw-semibold" id="sidebarLabel">{{ _('Wiki') }}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body rounded-0 p-0">

            <div class="tab-content">
                <div class="tab-pane border-start-0 border-end-0 rounded-0 p-0" id="chat" role="tabpanel">
                    <div class="list d-flex align-items-center border-bottom p-3">
                        <div class="">
                            <span class="avatar bg-primary rounded-circle avatar-md">CH</span>
                        </div>
                        <a class="wrapper w-100 ms-3" href="javascript:void(0);">
                            <p class="mb-0 d-flex ">
                                <b>New Websites is Created</b>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <i class="fa-regular fa-clock text-muted me-1 fs-11"></i>
                                    <small class="text-muted ms-auto">30 mins ago</small>
                                    <p class="mb-0"></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="list d-flex align-items-center border-bottom p-3">
                        <div class="">
                            <span class="avatar bg-danger rounded-circle avatar-md">N</span>
                        </div>
                        <a class="wrapper w-100 ms-3" href="javascript:void(0);">
                            <p class="mb-0 d-flex ">
                                <b>Prepare For the Next Project</b>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <i class="fa-regular fa-clock text-muted me-1 fs-11"></i>
                                    <small class="text-muted ms-auto">2 hours ago</small>
                                    <p class="mb-0"></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="list d-flex align-items-center border-bottom p-3">
                        <div class="">
                            <span class="avatar bg-info rounded-circle avatar-md">S</span>
                        </div>
                        <a class="wrapper w-100 ms-3" href="javascript:void(0);">
                            <p class="mb-0 d-flex ">
                                <b>Decide the live Discussion</b>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <i class="fa-regular fa-clock text-muted me-1 fs-11"></i>
                                    <small class="text-muted ms-auto">3 hours ago</small>
                                    <p class="mb-0"></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="list d-flex align-items-center border-bottom p-3">
                        <div class="">
                            <span class="avatar bg-warning rounded-circle avatar-md">K</span>
                        </div>
                        <a class="wrapper w-100 ms-3" href="javascript:void(0);">
                            <p class="mb-0 d-flex ">
                                <b>Meeting at 3:00 pm</b>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <i class="fa-regular fa-clock text-muted me-1 fs-11"></i>
                                    <small class="text-muted ms-auto">4 hours ago</small>
                                    <p class="mb-0"></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="list d-flex align-items-center border-bottom p-3">
                        <div class="">
                            <span class="avatar bg-success rounded-circle avatar-md">R</span>
                        </div>
                        <a class="wrapper w-100 ms-3" href="javascript:void(0);">
                            <p class="mb-0 d-flex ">
                                <b>Prepare for Presentation</b>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <i class="fa-regular fa-clock text-muted me-1 fs-11"></i>
                                    <small class="text-muted ms-auto">1 day ago</small>
                                    <p class="mb-0"></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="list d-flex align-items-center border-bottom p-3">
                        <div class="">
                            <span class="avatar bg-pink rounded-circle avatar-md">MS</span>
                        </div>
                        <a class="wrapper w-100 ms-3" href="javascript:void(0);">
                            <p class="mb-0 d-flex ">
                                <b>Prepare for Presentation</b>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <i class="fa-regular fa-clock text-muted me-1 fs-11"></i>
                                    <small class="text-muted ms-auto">1 day ago</small>
                                    <p class="mb-0"></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="list d-flex align-items-center border-bottom p-3">
                        <div class="">
                            <span class="avatar bg-purple rounded-circle avatar-md">L</span>
                        </div>
                        <a class="wrapper w-100 ms-3" href="javascript:void(0);">
                            <p class="mb-0 d-flex ">
                                <b>Prepare for Presentation</b>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <i class="fa-regular fa-clock text-muted me-1 fs-11"></i>
                                    <small class="text-muted ms-auto">45 minutes ago</small>
                                    <p class="mb-0"></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="list d-flex align-items-center p-3">
                        <div class="">
                            <span class="avatar bg-blue rounded-circle avatar-md">U</span>
                        </div>
                        <a class="wrapper w-100 ms-3" href="javascript:void(0);">
                            <p class="mb-0 d-flex ">
                                <b>Prepare for Presentation</b>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <i class="fa-regular fa-clock text-muted me-1 fs-11"></i>
                                    <small class="text-muted ms-auto">2 days ago</small>
                                    <p class="mb-0"></p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="tab-pane border-start-0 border-end-0 rounded-0 p-0" id="notifications" role="tabpanel">
                    <div class="list-group list-group-flush ">
                        <div class="list-group-item d-flex  align-items-center">
                            <span class="avatar avatar-lg online avatar-rounded flex-shrink-0">
                                <img src="../assets/images/faces/1.jpg" alt="img">
                            </span>
                            <div class="ms-3">
                                <strong>Madeleine</strong> Hey! there I' am available....
                                <div class="small text-muted">
                                    3 hours ago
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <span class="avatar avatar-lg online avatar-rounded flex-shrink-0">
                                <img src="../assets/images/faces/2.jpg" alt="img">
                            </span>
                            <div class="ms-3">
                                <strong>Anthony</strong> New product Launching...
                                <div class="small text-muted">
                                    5 hour ago
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <span class="avatar avatar-lg avatar-rounded flex-shrink-0">
                                <img src="../assets/images/faces/3.jpg" alt="img">
                            </span>
                            <div class="ms-3">
                                <strong>Olivia</strong> New Schedule Realease......
                                <div class="small text-muted">
                                    45 minutes ago
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <span class="avatar avatar-lg avatar-rounded flex-shrink-0">
                                <img src="../assets/images/faces/4.jpg" alt="img">
                            </span>
                            <div class="ms-3">
                                <strong>Madeleine</strong> Hey! there I' am available....
                                <div class="small text-muted">
                                    3 hours ago
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <span class="avatar avatar-lg avatar-rounded flex-shrink-0">
                                <img src="../assets/images/faces/5.jpg" alt="img">
                            </span>
                            <div class="ms-3">
                                <strong>Anthony</strong> New product Launching...
                                <div class="small text-muted">
                                    5 hour ago
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <span class="avatar avatar-lg avatar-rounded flex-shrink-0">
                                <img src="../assets/images/faces/6.jpg" alt="img">
                            </span>
                            <div class="ms-3">
                                <strong>Olivia</strong> New Schedule Realease......
                                <div class="small text-muted">
                                    45 minutes ago
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <span class="avatar avatar-lg avatar-rounded flex-shrink-0">
                                <img src="../assets/images/faces/7.jpg" alt="img">
                            </span>
                            <div class="ms-3">
                                <strong>Olivia</strong> Hey! there I' am available....
                                <div class="small text-muted">
                                    12 minutes ago
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane border-start-0 border-end-0 rounded-0 p-0 active show" id="friends"
                    role="tabpanel">
                    <div class="list-group list-group-flush ">
                        <div class="list-group-item d-flex  align-items-center">
                            <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                                <img src="../assets/images/faces/1.jpg" alt="img">
                            </span>
                            <div class="ms-2">
                                <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Mozelle
                                    Belt</div>
                            </div>
                            <div class="ms-auto">
                                <a href="javascript:void(0);" class="btn btn-sm btn-light" data-bs-toggle="modal"
                                    data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <span class="avatar avatar-md avatar-rounded flex-shrink-0">
                                <img src="../assets/images/faces/2.jpg" alt="img">
                            </span>
                            <div class="ms-2">
                                <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Florinda
                                    Carasco</div>
                            </div>
                            <div class="ms-auto">
                                <a href="javascript:void(0);" class="btn btn-sm btn-light" data-bs-toggle="modal"
                                    data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <span class="avatar avatar-md avatar-rounded flex-shrink-0">
                                <img src="../assets/images/faces/5.jpg" alt="img">
                            </span>
                            <div class="ms-2">
                                <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Alina
                                    Bernier</div>
                            </div>
                            <div class="ms-auto">
                                <a href="javascript:void(0);" class="btn btn-sm btn-light" data-bs-toggle="modal"
                                    data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                                <img src="../assets/images/faces/6.jpg" alt="img">
                            </span>
                            <div class="ms-2">
                                <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Zula
                                    Mclaughin</div>
                            </div>
                            <div class="ms-auto">
                                <a href="javascript:void(0);" class="btn btn-sm btn-light" data-bs-toggle="modal"
                                    data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                                <img src="../assets/images/faces/8.jpg" alt="img">
                            </span>
                            <div class="ms-2">
                                <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Isidro
                                    Heide</div>
                            </div>
                            <div class="ms-auto">
                                <a href="javascript:void(0);" class="btn btn-sm btn-light" data-bs-toggle="modal"
                                    data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                                <img src="../assets/images/faces/8.jpg" alt="img">
                            </span>
                            <div class="ms-2">
                                <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Mozelle
                                    Belt</div>
                            </div>
                            <div class="ms-auto">
                                <a href="javascript:void(0);" class="btn btn-sm btn-light"><i
                                        class="fab fa-facebook-messenger"></i></a>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                                <img src="../assets/images/faces/9.jpg" alt="img">
                            </span>
                            <div class="ms-2">
                                <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Florinda
                                    Carasco</div>
                            </div>
                            <div class="ms-auto">
                                <a href="javascript:void(0);" class="btn btn-sm btn-light" data-bs-toggle="modal"
                                    data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                                <img src="../assets/images/faces/10.jpg" alt="img">
                            </span>
                            <div class="ms-2">
                                <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Alina
                                    Bernier</div>
                            </div>
                            <div class="ms-auto">
                                <a href="javascript:void(0);" class="btn btn-sm btn-light"><i
                                        class="fab fa-facebook-messenger"></i></a>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <span class="avatar avatar-md avatar-rounded flex-shrink-0">
                                <img src="../assets/images/faces/11.jpg" alt="img">
                            </span>
                            <div class="ms-2">
                                <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Zula
                                    Mclaughin</div>
                            </div>
                            <div class="ms-auto">
                                <a href="javascript:void(0);" class="btn btn-sm btn-light" data-bs-toggle="modal"
                                    data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                                <img src="../assets/images/faces/12.jpg" alt="img">
                            </span>
                            <div class="ms-2">
                                <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Isidro
                                    Heide</div>
                            </div>
                            <div class="ms-auto">
                                <a href="javascript:void(0);" class="btn btn-sm btn-light"><i
                                        class="fab fa-facebook-messenger"></i></a>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                                <img src="../assets/images/faces/2.jpg" alt="img">
                            </span>
                            <div class="ms-2">
                                <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Florinda
                                    Carasco</div>
                            </div>
                            <div class="ms-auto">
                                <a href="javascript:void(0);" class="btn btn-sm btn-light" data-bs-toggle="modal"
                                    data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                                <img src="../assets/images/faces/2.jpg" alt="img">
                            </span>
                            <div class="ms-2">
                                <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Alina
                                    Bernier</div>
                            </div>
                            <div class="ms-auto">
                                <a href="javascript:void(0);" class="btn btn-sm btn-light" data-bs-toggle="modal"
                                    data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                                <img src="../assets/images/faces/3.jpg" alt="img">
                            </span>
                            <div class="ms-2">
                                <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Zula
                                    Mclaughin</div>
                            </div>
                            <div class="ms-auto">
                                <a href="javascript:void(0);" class="btn btn-sm btn-light" data-bs-toggle="modal"
                                    data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <span class="avatar avatar-md online avatar-rounded flex-shrink-0">
                                <img src="../assets/images/faces/4.jpg" alt="img">
                            </span>
                            <div class="ms-2">
                                <div class="fw-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Isidro
                                    Heide</div>
                            </div>
                            <div class="ms-auto">
                                <a href="javascript:void(0);" class="btn btn-sm btn-light" data-bs-toggle="modal"
                                    data-bs-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End::Off-canvas sidebar-->

    <!-- Message Modal -->
    <div class="modal fade" id="chatmodel" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-right chatbox" role="document">
            <div class="modal-content chat border-0">
                <div class="card overflow-hidden mb-0 border-0 shadow-none">
                    <!-- action-header -->
                    <div class="action-header clearfix">
                        <div class="float-start hidden-xs d-flex">
                            <div class="avatar avatar-lg rounded-circle me-3">
                                <img src="../assets/images/faces/6.jpg" class="rounded-circle user_img"
                                    alt="img">
                            </div>
                            <div class="align-items-center mt-2">
                                <h5 class="text-fixed-white mb-0">Daneil Scott</h5>
                                <span class="dot-label bg-success"></span><span
                                    class="me-3 text-fixed-white">online</span>
                            </div>
                        </div>
                        <ul class="ah-actions actions align-items-center float-end">
                            <li class="call-icon">
                                <a href="" class="d-done d-md-block phone-button" data-bs-toggle="modal"
                                    data-bs-target="#audiomodal">
                                    <i class="fe fe-phone"></i>
                                </a>
                            </li>
                            <li class="video-icon">
                                <a href="" class="d-done d-md-block phone-button" data-bs-toggle="modal"
                                    data-bs-target="#videomodal">
                                    <i class="fe fe-video"></i>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="" data-bs-toggle="dropdown" aria-expanded="true">
                                    <i class="fe fe-more-vertical"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li class="dropdown-item"><i class="fa fa-user-circle"></i> View profile</li>
                                    <li class="dropdown-item"><i class="fa fa-users"></i>Add friends</li>
                                    <li class="dropdown-item"><i class="fa fa-plus"></i> Add to group</li>
                                    <li class="dropdown-item"><i class="fa fa-ban"></i> Block</li>
                                </ul>
                            </li>
                            <li>
                                <a href="" class="" data-bs-dismiss="modal" aria-label="Close">
                                    <i class="fe fe-x-circle text-fixed-white"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- action-header end -->

                    <!-- msg_card_body -->
                    <div class="card-body msg_card_body">
                        <div class="chat-box-single-line">
                            <abbr class="timestamp">February 1st, 2019</abbr>
                        </div>
                        <div class="d-flex justify-content-start">
                            <div class="img_cont_msg">
                                <img src="../assets/images/faces/6.jpg" class="rounded-circle user_img_msg"
                                    alt="img">
                            </div>
                            <div class="msg_cotainer">
                                Hi, how are you Jenna Side?
                                <span class="msg_time">8:40 AM, Today</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end ">
                            <div class="msg_cotainer_send">
                                Hi Connor Paige i am good tnx how about you?
                                <span class="msg_time_send">8:55 AM, Today</span>
                            </div>
                            <div class="img_cont_msg">
                                <img src="../assets/images/faces/9.jpg" class="rounded-circle user_img_msg"
                                    alt="img">
                            </div>
                        </div>
                        <div class="d-flex justify-content-start ">
                            <div class="img_cont_msg">
                                <img src="../assets/images/faces/6.jpg" class="rounded-circle user_img_msg"
                                    alt="img">
                            </div>
                            <div class="msg_cotainer">
                                I am good too, thank you for your chat template
                                <span class="msg_time">9:00 AM, Today</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end ">
                            <div class="msg_cotainer_send">
                                You welcome Connor Paige
                                <span class="msg_time_send">9:05 AM, Today</span>
                            </div>
                            <div class="img_cont_msg">
                                <img src="../assets/images/faces/9.jpg" class="rounded-circle user_img_msg"
                                    alt="img">
                            </div>
                        </div>
                        <div class="d-flex justify-content-start ">
                            <div class="img_cont_msg">
                                <img src="../assets/images/faces/6.jpg" class="rounded-circle user_img_msg"
                                    alt="img">
                            </div>
                            <div class="msg_cotainer">
                                Yo, Can you update Views?
                                <span class="msg_time">9:07 AM, Today</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mb-4">
                            <div class="msg_cotainer_send">
                                But I must explain to you how all this mistaken born and I will give
                                <span class="msg_time_send">9:10 AM, Today</span>
                            </div>
                            <div class="img_cont_msg">
                                <img src="../assets/images/faces/9.jpg" class="rounded-circle user_img_msg"
                                    alt="img">
                            </div>
                        </div>
                        <div class="d-flex justify-content-start ">
                            <div class="img_cont_msg">
                                <img src="../assets/images/faces/6.jpg" class="rounded-circle user_img_msg"
                                    alt="img">
                            </div>
                            <div class="msg_cotainer">
                                Yo, Can you update Views?
                                <span class="msg_time">9:07 AM, Today</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mb-4">
                            <div class="msg_cotainer_send">
                                But I must explain to you how all this mistaken born and I will give
                                <span class="msg_time_send">9:10 AM, Today</span>
                            </div>
                            <div class="img_cont_msg">
                                <img src="../assets/images/faces/9.jpg" class="rounded-circle user_img_msg"
                                    alt="img">
                            </div>
                        </div>
                        <div class="d-flex justify-content-start ">
                            <div class="img_cont_msg">
                                <img src="../assets/images/faces/6.jpg" class="rounded-circle user_img_msg"
                                    alt="img">
                            </div>
                            <div class="msg_cotainer">
                                Yo, Can you update Views?
                                <span class="msg_time">9:07 AM, Today</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mb-4">
                            <div class="msg_cotainer_send">
                                But I must explain to you how all this mistaken born and I will give
                                <span class="msg_time_send">9:10 AM, Today</span>
                            </div>
                            <div class="img_cont_msg">
                                <img src="../assets/images/faces/9.jpg" class="rounded-circle user_img_msg"
                                    alt="img">
                            </div>
                        </div>
                        <div class="d-flex justify-content-start">
                            <div class="img_cont_msg">
                                <img src="../assets/images/faces/6.jpg" class="rounded-circle user_img_msg"
                                    alt="img">
                            </div>
                            <div class="msg_cotainer">
                                Okay Bye, text you later..
                                <span class="msg_time">9:12 AM, Today</span>
                            </div>
                        </div>
                    </div>
                    <!-- msg_card_body end -->
                    <!-- card-footer -->
                    <div class="card-footer border-top">
                        <div class="msb-reply d-flex">
                            <div class="input-group">
                                <input type="text" class="form-control " placeholder="Typing....">
                                <button type="button" class="btn btn-primary ">
                                    <i class="far fa-paper-plane" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                    </div><!-- card-footer end -->
                </div>
            </div>
        </div>
    </div>
    <!--End modal -->

    <!--Video Modal -->
    <div id="videomodal" class="modal fade">
        <div class="modal-dialog" role="document">
            <div class="modal-content bg-fixed-dark border-0">
                <div class="modal-body mx-auto text-center p-5">
                    <h5 class="text-fixed-white">Valex Video call</h5>
                    <img src="../assets/images/faces/6.jpg" class="rounded-circle user-img-circle h-8 w-8 mt-4 mb-3"
                        alt="img">
                    <h4 class="mb-1 fw-semibold text-fixed-white">Daneil Scott</h4>
                    <h6 class="loading text-fixed-white">Calling...</h6>
                    <div class="mt-5">
                        <div class="row">
                            <div class="col-4">
                                <a class="icon icon-shape rounded-circle mb-0" href="javascript:void(0);">
                                    <i class="fas fa-video-slash"></i>
                                </a>
                            </div>
                            <div class="col-4">
                                <a class="icon icon-shape rounded-circle text-fixed-white mb-0"
                                    href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close">
                                    <i class="fas fa-phone bg-danger text-fixed-white"></i>
                                </a>
                            </div>
                            <div class="col-4">
                                <a class="icon icon-shape rounded-circle mb-0" href="javascript:void(0);">
                                    <i class="fas fa-microphone-slash"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!-- modal-body -->
            </div>
        </div><!-- modal-dialog -->
    </div>
    <!--End modal -->

    <!-- Audio Modal -->
    <div id="audiomodal" class="modal fade">
        <div class="modal-dialog" role="document">
            <div class="modal-content border-0">
                <div class="modal-body mx-auto text-center p-5">
                    <h6>Valex Voice call</h6>
                    <img src="../assets/images/faces/6.jpg" class="rounded-circle user-img-circle h-8 w-8 mt-4 mb-3"
                        alt="img">
                    <h5 class="mb-1 fw-medium">Daneil Scott</h5>
                    <h6 class="loading">Calling...</h6>
                    <div class="mt-5">
                        <div class="row">
                            <div class="col-4">
                                <a class="icon icon-shape rounded-circle mb-0" href="javascript:void(0);">
                                    <i class="fas fa-volume-up bg-light text-dark"></i>
                                </a>
                            </div>
                            <div class="col-4">
                                <a class="icon icon-shape rounded-circle text-fixed-white mb-0"
                                    href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close">
                                    <i class="fas fa-phone text-fixed-white bg-success"></i>
                                </a>
                            </div>
                            <div class="col-4">
                                <a class="icon icon-shape  rounded-circle mb-0" href="javascript:void(0);">
                                    <i class="fas fa-microphone-slash bg-light text-dark"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!-- modal-body -->
            </div>
        </div><!-- modal-dialog -->
    </div>
    <!--End modal -->
    <!-- Start::app-sidebar -->
    <aside class="app-sidebar sticky" id="sidebar">

        <!-- Start::main-sidebar-header -->

        <!-- End::main-sidebar-header -->

        <!-- Start::main-sidebar -->
        <div class="main-sidebar" id="sidebar-scroll">

            <!-- Start::nav -->
            <nav class="main-menu-container nav nav-pills flex-column sub-open">
                <div class="slide-left" id="slide-left">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24"
                        viewBox="0 0 24 24">
                        <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                    </svg>
                </div>
                <ul class="main-menu">
                    <!-- Start::slide__category -->
                    <li class="slide__category"><span class="category-name">Main</span></li>
                    <!-- End::slide__category -->

                    <!-- Start::slide -->
                    <li class="slide">
                        <a href="index.html" class="side-menu__item">
                            <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                                <path d="M0 0h24v24H0V0z" fill="none" />
                                <path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3" />
                                <path
                                    d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z" />
                            </svg>
                            <span class="side-menu__label">Index</span>
                            <span class="badge bg-success ms-auto menu-badge">1</span>
                        </a>
                    </li>
                    <!-- End::slide -->

                    <!-- Start::slide__category -->
                    <li class="slide__category"><span class="category-name">General</span></li>
                    <!-- End::slide__category -->

                    <!-- Start::slide -->
                    <li class="slide">
                        <a href="icons.html" class="side-menu__item">
                            <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                                <path d="M0 0h24v24H0V0z" fill="none" />
                                <path
                                    d="M12 4c-4.42 0-8 3.58-8 8s3.58 8 8 8 8-3.58 8-8-3.58-8-8-8zm3.5 4c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5zm-7 0c.83 0 1.5.67 1.5 1.5S9.33 11 8.5 11 7 10.33 7 9.5 7.67 8 8.5 8zm3.5 9.5c-2.33 0-4.32-1.45-5.12-3.5h1.67c.7 1.19 1.97 2 3.45 2s2.76-.81 3.45-2h1.67c-.8 2.05-2.79 3.5-5.12 3.5z"
                                    opacity=".3" />
                                <circle cx="15.5" cy="9.5" r="1.5" />
                                <circle cx="8.5" cy="9.5" r="1.5" />
                                <path
                                    d="M12 16c-1.48 0-2.75-.81-3.45-2H6.88c.8 2.05 2.79 3.5 5.12 3.5s4.32-1.45 5.12-3.5h-1.67c-.69 1.19-1.97 2-3.45 2zm-.01-14C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z" />
                            </svg>
                            <span class="side-menu__label">Icons</span>
                        </a>
                    </li>
                    <!-- End::slide -->

                    <!-- Start::slide -->
                    <li class="slide has-sub">
                        <a href="javascript:void(0);" class="side-menu__item">
                            <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                                <path d="M0 0h24v24H0V0z" fill="none" />
                                <path d="M19 5H5v14h14V5zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z"
                                    opacity=".3" />
                                <path
                                    d="M3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2zm2 0h14v14H5V5zm2 5h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z" />
                            </svg>
                            <span class="side-menu__label">Charts</span>
                            <i class="fe fe-chevron-right side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide side-menu__label1">
                                <a href="javascript:void(0);">Charts</a>
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
                                        <a href="apex-rangearea-charts.html" class="side-menu__item">Range Area
                                            Charts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="apex-timeline-charts.html" class="side-menu__item">Timeline
                                            Charts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="apex-candlestick-charts.html" class="side-menu__item">CandleStick
                                            Charts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="apex-boxplot-charts.html" class="side-menu__item">Boxplot
                                            Charts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="apex-bubble-charts.html" class="side-menu__item">Bubble Charts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="apex-scatter-charts.html" class="side-menu__item">Scatter
                                            Charts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="apex-heatmap-charts.html" class="side-menu__item">Heatmap
                                            Charts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="apex-treemap-charts.html" class="side-menu__item">Treemap
                                            Charts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="apex-pie-charts.html" class="side-menu__item">Pie Charts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="apex-radialbar-charts.html" class="side-menu__item">Radialbar
                                            Charts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="apex-radar-charts.html" class="side-menu__item">Radar Charts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="apex-polararea-charts.html" class="side-menu__item">Polararea
                                            Charts</a>
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





                </ul>
                <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                        width="24" height="24" viewBox="0 0 24 24">
                        <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                    </svg></div>
            </nav>
        </div>
    </aside>

