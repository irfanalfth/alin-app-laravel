<!DOCTYPE html>
<html>

<head>
    <title>Minia - Admin & Dashboard Template</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

    <link href="{{ asset('libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet"
        type="text/css" />

    <!-- preloader css -->
    <link rel="stylesheet" href="{{ asset('css/preloader.min.css') }}" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="{{ asset('css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
</head>

<body>
    <!-- Begin page -->
    <div id="layout-wrapper">

        {{-- navbar --}}
        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="index.php" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="{{ asset('images/logo-sm.svg') }}" alt="" height="24">
                            </span>
                            <span class="logo-lg">
                                <img src="{{ asset('images/logo-sm.svg') }}" alt="" height="24"> <span
                                    class="logo-txt">Minia</span>
                            </span>
                        </a>

                        <a href="index.php" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="{{ asset('images/logo-sm.svg') }}" alt="" height="24">
                            </span>
                            <span class="logo-lg">
                                <img src="{{ asset('images/logo-sm.svg') }}" alt="" height="24"> <span
                                    class="logo-txt">Minia</span>
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>

                    <!-- App Search-->
                    <form class="app-search d-none d-lg-block">
                        <div class="position-relative">
                            <input type="text" class="form-control" placeholder="<?php echo "Search" ?>">
                            <button class="btn btn-primary" type="button"><i
                                    class="bx bx-search-alt align-middle"></i></button>
                        </div>
                    </form>
                </div>

                <div class="d-flex">

                    <div class="dropdown d-inline-block d-lg-none ms-2">
                        <button type="button" class="btn header-item" id="page-header-search-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i data-feather="search" class="icon-lg"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                            aria-labelledby="page-header-search-dropdown">

                            <form class="p-3">
                                <div class="form-group m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control"
                                            placeholder="<?php echo "Search" ?>" aria-label="Search Result">

                                        <button class="btn btn-primary" type="submit"><i
                                                class="mdi mdi-magnify"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="dropdown d-none d-sm-inline-block">
                        <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <img class="me-2" src="{{ asset('images/flags/us.jpg') }}" alt="Header Language" height="16">
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">

                            <!-- item-->
                            <a href="?lang=en" class="dropdown-item notify-item language">
                                <img src="{{ asset('images/flags/us.jpg') }}" alt="user-image" class="me-1" height="12"> <span
                                    class="align-middle"> English </span>
                            </a>

                            <!-- item-->
                            <a href="?lang=de" class="dropdown-item notify-item language">
                                <img src="{{ asset('images/flags/germany.jpg') }}" alt="user-image" class="me-1" height="12">
                                <span class="align-middle"> German </span>
                            </a>

                            <!-- item-->
                            <a href="?lang=it" class="dropdown-item notify-item language">
                                <img src="{{ asset('images/flags/italy.jpg') }}" alt="user-image" class="me-1" height="12">
                                <span class="align-middle"> Italian </span>
                            </a>

                            <!-- item-->
                            <a href="?lang=es" class="dropdown-item notify-item language">
                                <img src="{{ asset('images/flags/spain.jpg') }}" alt="user-image" class="me-1" height="12">
                                <span class="align-middle"> Spanish </span>
                            </a>

                            <!-- item-->
                            <a href="?lang=ru" class="dropdown-item notify-item language">
                                <img src="{{ asset('images/flags/russia.jpg') }}" alt="user-image" class="me-1" height="12">
                                <span class="align-middle"> Russian </span>
                            </a>
                        </div>
                    </div>

                    <div class="dropdown d-none d-sm-inline-block">
                        <button type="button" class="btn header-item" id="mode-setting-btn">
                            <i data-feather="moon" class="icon-lg layout-mode-dark"></i>
                            <i data-feather="sun" class="icon-lg layout-mode-light"></i>
                        </button>
                    </div>

                    <div class="dropdown d-none d-lg-inline-block ms-1">
                        <button type="button" class="btn header-item" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i data-feather="grid" class="icon-lg"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                            <div class="p-2">
                                <div class="row g-0">
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="{{ asset('images/brands/github.png') }}" alt="Github">
                                            <span>GitHub</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="{{ asset('images/brands/bitbucket.png') }}" alt="bitbucket">
                                            <span>Bitbucket</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="{{ asset('images/brands/dribbble.png') }}" alt="dribbble">
                                            <span>Dribbble</span>
                                        </a>
                                    </div>
                                </div>

                                <div class="row g-0">
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="{{ asset('images/brands/dropbox.png') }}" alt="dropbox">
                                            <span>Dropbox</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="{{ asset('images/brands/mail_chimp.png') }}" alt="mail_chimp">
                                            <span>Mail Chimp</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="{{ asset('images/brands/slack.png') }}" alt="slack">
                                            <span>Slack</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon position-relative"
                            id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i data-feather="bell" class="icon-lg"></i>
                            <span class="badge bg-danger rounded-pill">5</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                            aria-labelledby="page-header-notifications-dropdown">
                            <div class="p-3">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="m-0"> <?php echo "Notifications" ?> </h6>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#!" class="small text-reset text-decoration-underline">
                                            <?php echo "Unread" ?> (3)</a>
                                    </div>
                                </div>
                            </div>
                            <div data-simplebar style="max-height: 230px;">
                                <a href="#!" class="text-reset notification-item">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <img src="{{ asset('images/users/avatar-3.jpg') }}" class="rounded-circle avatar-sm"
                                                alt="user-pic">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1"><?php echo "James_Lemire" ?></h6>
                                            <div class="font-size-13 text-muted">
                                                <p class="mb-1">
                                                    <?php echo "It_will_seem_like_simplified_English" ?>.
                                                </p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i>
                                                    <span><?php echo "1_hours_ago" ?></span></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#!" class="text-reset notification-item">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 avatar-sm me-3">
                                            <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                <i class="bx bx-cart"></i>
                                            </span>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1"><?php echo "Your_order_is_placed" ?></h6>
                                            <div class="font-size-13 text-muted">
                                                <p class="mb-1">
                                                    <?php echo "If_several_languages_coalesce_the_grammar" ?>
                                                </p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i>
                                                    <span><?php echo "3_min_ago" ?></span></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#!" class="text-reset notification-item">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 avatar-sm me-3">
                                            <span class="avatar-title bg-success rounded-circle font-size-16">
                                                <i class="bx bx-badge-check"></i>
                                            </span>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1"><?php echo "Your_item_is_shipped" ?></h6>
                                            <div class="font-size-13 text-muted">
                                                <p class="mb-1">
                                                    <?php echo "If_several_languages_coalesce_the_grammar" ?>
                                                </p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i>
                                                    <span><?php echo "3_min_ago" ?></span></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="#!" class="text-reset notification-item">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <img src="{{ asset('images/users/avatar-6.jpg') }}" class="rounded-circle avatar-sm"
                                                alt="user-pic">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1"><?php echo "Salena_Layfield" ?></h6>
                                            <div class="font-size-13 text-muted">
                                                <p class="mb-1">
                                                    <?php echo "As_a_skeptical_Cambridge_friend_of_mine_occidental" ?>.
                                                </p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i>
                                                    <span><?php echo "1_hours_ago" ?></span></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="p-2 border-top d-grid">
                                <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                                    <i class="mdi mdi-arrow-right-circle me-1"></i>
                                    <span><?php echo "View_More" ?></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item right-bar-toggle me-2">
                            <i data-feather="settings" class="icon-lg"></i>
                        </button>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item bg-soft-light border-start border-end"
                            id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="{{ asset('images/users/avatar-1.jpg') }}"
                                alt="Header Avatar">
                            <span
                                class="d-none d-xl-inline-block ms-1 fw-medium"><?php echo "Shawn_L" ?>.</span>
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a class="dropdown-item" href="apps-contacts-profile.php"><i
                                    class="mdi mdi-face-profile font-size-16 align-middle me-1"></i>
                                <?php echo "Profile" ?></a>
                            <a class="dropdown-item" href="auth-lock-screen.php"><i
                                    class="mdi mdi-lock font-size-16 align-middle me-1"></i>
                                <?php echo "Lock_screen" ?> </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="logout.php"><i
                                    class="mdi mdi-logout font-size-16 align-middle me-1"></i>
                                <?php echo "Logout" ?></a>
                        </div>
                    </div>

                </div>
            </div>
        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title" data-key="t-menu"><?php echo "Menu" ?></li>

                        <li>
                            <a href="index.php">
                                <i data-feather="home"></i>
                                <span data-key="t-dashboard"><?php echo "Dashboard" ?></span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i data-feather="grid"></i>
                                <span data-key="t-apps"><?php echo "Apps" ?></span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li>
                                    <a href="apps-calendar.php">
                                        <span data-key="t-calendar"><?php echo "Calendar" ?></span>
                                    </a>
                                </li>

                                <li>
                                    <a href="apps-chat.php">
                                        <span data-key="t-chat"><?php echo "Chat" ?></span>
                                    </a>
                                </li>

                                <li>
                                    <a href="javascript: void(0);" class="has-arrow">
                                        <span data-key="t-email"><?php echo "Email" ?></span>
                                    </a>
                                    <ul class="sub-menu" aria-expanded="false">
                                        <li><a href="apps-email-inbox.php"
                                                data-key="t-inbox"><?php echo "Inbox" ?></a></li>
                                        <li><a href="apps-email-read.php"
                                                data-key="t-read-email"><?php echo "Read_Email" ?></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript: void(0);" class="has-arrow">
                                        <span data-key="t-invoices"><?php echo "Invoices" ?></span>
                                    </a>
                                    <ul class="sub-menu" aria-expanded="false">
                                        <li><a href="apps-invoices-list.php"
                                                data-key="t-invoice-list"><?php echo "Invoice_List" ?></a>
                                        </li>
                                        <li><a href="apps-invoices-detail.php"
                                                data-key="t-invoice-detail"><?php echo "Invoice_Detail" ?></a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript: void(0);" class="has-arrow">
                                        <span data-key="t-contacts"><?php echo "Contacts" ?></span>
                                    </a>
                                    <ul class="sub-menu" aria-expanded="false">
                                        <li><a href="apps-contacts-grid.php"
                                                data-key="t-user-grid"><?php echo "User_Grid" ?></a></li>
                                        <li><a href="apps-contacts-list.php"
                                                data-key="t-user-list"><?php echo "User_List" ?></a></li>
                                        <li><a href="apps-contacts-profile.php"
                                                data-key="t-profile"><?php echo "Profile" ?></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i data-feather="users"></i>
                                <span data-key="t-authentication"><?php echo "Authentication" ?></span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="pages-login.php" data-key="t-login"><?php echo "Login" ?></a>
                                </li>
                                <li><a href="pages-register.php"
                                        data-key="t-register"><?php echo "Register" ?></a></li>
                                <li><a href="pages-recoverpw.php"
                                        data-key="t-recover-password"><?php echo "Recover_Password" ?></a>
                                </li>
                                <li><a href="auth-lock-screen.php"
                                        data-key="t-lock-screen"><?php echo "Lock_Screen" ?></a></li>
                                <li><a href="auth-confirm-mail.php"
                                        data-key="t-confirm-mail"><?php echo "Confirm_Mail" ?></a></li>
                                <li><a href="auth-email-verification.php"
                                        data-key="t-email-verification"><?php echo "Email_Verification" ?></a>
                                </li>
                                <li><a href="auth-two-step-verification.php"
                                        data-key="t-two-step-verification"><?php echo "Two_Step_Verification" ?></a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i data-feather="file-text"></i>
                                <span data-key="t-pages"><?php echo "Pages" ?></span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="pages-starter.php"
                                        data-key="t-starter-page"><?php echo "Starter_Page" ?> </a></li>
                                <li><a href="pages-maintenance.php"
                                        data-key="t-maintenance"><?php echo "Maintenance" ?></a></li>
                                <li><a href="pages-comingsoon.php"
                                        data-key="t-coming-soon"><?php echo "Coming_Soon" ?></a></li>
                                <li><a href="pages-timeline.php"
                                        data-key="t-timeline"><?php echo "Timeline" ?></a></li>
                                <li><a href="pages-faqs.php" data-key="t-faqs"><?php echo "FAQs" ?></a></li>
                                <li><a href="pages-pricing.php"
                                        data-key="t-pricing"><?php echo "Pricing" ?></a></li>
                                <li><a href="pages-404.php"
                                        data-key="t-error-404"><?php echo "Error_404" ?></a></li>
                                <li><a href="pages-500.php"
                                        data-key="t-error-500"><?php echo "Error_500" ?></a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="layouts-horizontal.php">
                                <i data-feather="layout"></i>
                                <span data-key="t-horizontal"><?php echo "Horizontal" ?></span>
                            </a>
                        </li>

                        <li class="menu-title mt-2" data-key="t-components"><?php echo "Elements" ?></li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i data-feather="briefcase"></i>
                                <span data-key="t-components"><?php echo "Components" ?></span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="ui-alerts.php" data-key="t-alerts"><?php echo "Alerts" ?></a>
                                </li>
                                <li><a href="ui-buttons.php"
                                        data-key="t-buttons"><?php echo "Buttons" ?></a></li>
                                <li><a href="ui-cards.php" data-key="t-cards"><?php echo "Cards" ?></a></li>
                                <li><a href="ui-carousel.php"
                                        data-key="t-carousel"><?php echo "Carousel" ?></a></li>
                                <li><a href="ui-dropdowns.php"
                                        data-key="t-dropdowns"><?php echo "Dropdowns" ?></a></li>
                                <li><a href="ui-grid.php" data-key="t-grid"><?php echo "Grid" ?></a></li>
                                <li><a href="ui-images.php" data-key="t-images"><?php echo "Images" ?></a>
                                </li>
                                <li><a href="ui-modals.php" data-key="t-modals"><?php echo "Modals" ?></a>
                                </li>
                                <li><a href="ui-offcanvas.php"
                                        data-key="t-offcanvas"><?php echo "Offcanvas" ?></a></li>
                                <li><a href="ui-progressbars.php"
                                        data-key="t-progress-bars"><?php echo "Progress_Bars" ?></a></li>
                                <li><a href="ui-tabs-accordions.php"
                                        data-key="t-tabs-accordions"><?php echo "Tabs_n_Accordions" ?></a>
                                </li>
                                <li><a href="ui-typography.php"
                                        data-key="t-typography"><?php echo "Typography" ?></a></li>
                                <li><a href="ui-video.php" data-key="t-video"><?php echo "Video" ?></a></li>
                                <li><a href="ui-general.php"
                                        data-key="t-general"><?php echo "General" ?></a></li>
                                <li><a href="ui-colors.php" data-key="t-colors"><?php echo "Colors" ?></a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i data-feather="gift"></i>
                                <span data-key="t-ui-elements"><?php echo "Extended" ?></span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="extended-lightbox.php"
                                        data-key="t-lightbox"><?php echo "Lightbox" ?></a></li>
                                <li><a href="extended-rangeslider.php"
                                        data-key="t-range-slider"><?php echo "Range_Slider" ?></a></li>
                                <li><a href="extended-sweet-alert.php"
                                        data-key="t-sweet-alert"><?php echo "SweetAlert_2" ?></a></li>
                                <li><a href="extended-session-timeout.php"
                                        data-key="t-session-timeout"><?php echo "Session_Timeout" ?></a>
                                </li>
                                <li><a href="extended-rating.php"
                                        data-key="t-rating"><?php echo "Rating" ?></a></li>
                                <li><a href="extended-notifications.php"
                                        data-key="t-notifications"><?php echo "Notifications" ?></a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);">
                                <i data-feather="box"></i>
                                <span class="badge rounded-pill bg-soft-danger text-danger float-end">7</span>
                                <span data-key="t-forms"><?php echo "Forms" ?></span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="form-elements.php"
                                        data-key="t-form-elements"><?php echo "Basic_Elements" ?></a></li>
                                <li><a href="form-validation.php"
                                        data-key="t-form-validation"><?php echo "Validation" ?></a></li>
                                <li><a href="form-advanced.php"
                                        data-key="t-form-advanced"><?php echo "Advanced_Plugins" ?></a></li>
                                <li><a href="form-editors.php"
                                        data-key="t-form-editors"><?php echo "Editors" ?></a></li>
                                <li><a href="form-uploads.php"
                                        data-key="t-form-upload"><?php echo "File_Upload" ?></a></li>
                                <li><a href="form-wizard.php"
                                        data-key="t-form-wizard"><?php echo "Wizard" ?></a></li>
                                <li><a href="form-mask.php" data-key="t-form-mask"><?php echo "Mask" ?></a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i data-feather="sliders"></i>
                                <span data-key="t-tables"><?php echo "Tables" ?></span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="tables-basic.php"
                                        data-key="t-basic-tables"><?php echo "Bootstrap_Basic" ?></a></li>
                                <li><a href="tables-datatable.php"
                                        data-key="t-data-tables"><?php echo "DataTables" ?></a></li>
                                <li><a href="tables-responsive.php"
                                        data-key="t-responsive-table"><?php echo "Responsive" ?></a></li>
                                <li><a href="tables-editable.php"
                                        data-key="t-editable-table"><?php echo "Editable" ?></a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i data-feather="pie-chart"></i>
                                <span data-key="t-charts"><?php echo "Charts" ?></span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="charts-apex.php"
                                        data-key="t-apex-charts"><?php echo "Apexcharts" ?></a></li>
                                <li><a href="charts-echart.php"
                                        data-key="t-e-charts"><?php echo "Echarts" ?></a></li>
                                <li><a href="charts-chartjs.php"
                                        data-key="t-chartjs-charts"><?php echo "Chartjs" ?></a></li>
                                <li><a href="charts-knob.php"
                                        data-key="t-knob-charts"><?php echo "Jquery_Knob" ?></a></li>
                                <li><a href="charts-sparkline.php"
                                        data-key="t-sparkline-charts"><?php echo "Sparkline" ?></a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i data-feather="cpu"></i>
                                <span data-key="t-icons"><?php echo "Icons" ?></span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="icons-boxicons.php"
                                        data-key="t-boxicons"><?php echo "Boxicons" ?></a></li>
                                <li><a href="icons-materialdesign.php"
                                        data-key="t-material-design"><?php echo "Material_Design" ?></a>
                                </li>
                                <li><a href="icons-dripicons.php"
                                        data-key="t-dripicons"><?php echo "Dripicons" ?></a></li>
                                <li><a href="icons-fontawesome.php"
                                        data-key="t-font-awesome"><?php echo "Font_Awesome_5" ?></a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i data-feather="map"></i>
                                <span data-key="t-maps"><?php echo "Maps" ?></span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="maps-google.php" data-key="t-g-maps"><?php echo "Google" ?></a>
                                </li>
                                <li><a href="maps-vector.php" data-key="t-v-maps"><?php echo "Vector" ?></a>
                                </li>
                                <li><a href="maps-leaflet.php"
                                        data-key="t-l-maps"><?php echo "Leaflet" ?></a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i data-feather="share-2"></i>
                                <span data-key="t-multi-level"><?php echo "Multi_Level" ?></span>
                            </a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="javascript: void(0);"
                                        data-key="t-level-1-1"><?php echo "Level_1_1" ?></a></li>
                                <li>
                                    <a href="javascript: void(0);" class="has-arrow"
                                        data-key="t-level-1-2"><?php echo "Level_1_2" ?></a>
                                    <ul class="sub-menu" aria-expanded="true">
                                        <li><a href="javascript: void(0);"
                                                data-key="t-level-2-1"><?php echo "Level_2_1" ?></a></li>
                                        <li><a href="javascript: void(0);"
                                                data-key="t-level-2-2"><?php echo "Level_2_2" ?></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                    </ul>

                    <!-- <div class="card sidebar-alert border-0 text-center mx-4 mb-0 mt-5">
                        <div class="card-body">
                            <img src="{{ asset('images/giftbox.png') }}" alt="">
                            <div class="mt-4">
                                <h5 class="alertcard-title font-size-16"><?php echo "Unlimited_Access" ?>
                                </h5>
                                <p class="font-size-13">
                                    <?php echo "Upgrade_your_plan_from_a_Free_trial,_to_select_‘Business_Plan’" ?>.
                                </p>
                                <a href="#!" class="btn btn-primary mt-2"><?php echo "Upgrade_Now" ?></a>
                            </div>
                        </div>
                    </div> -->
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->

        <div class="main-content">
            <div class="page-content">
                <!-- ============================================================== -->
                <!-- Start Content here -->
                <!-- ============================================================== -->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0 font-size-18">Dashboard</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Minia</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-h-100">
                                <!-- card body -->
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-6">
                                            <span class="text-muted mb-3 lh-1 d-block text-truncate">My Wallet</span>
                                            <h4 class="mb-3">
                                                $<span class="counter-value" data-target="865.2">0</span>k
                                            </h4>
                                        </div>

                                        <div class="col-6">
                                            <div id="mini-chart1" data-colors='["#5156be"]' class="apex-charts mb-2">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-nowrap">
                                        <span class="badge bg-soft-success text-success">+$20.9k</span>
                                        <span class="ms-1 text-muted font-size-13">Since last week</span>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-h-100">
                                <!-- card body -->
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-6">
                                            <span class="text-muted mb-3 lh-1 d-block text-truncate">Number of
                                                Trades</span>
                                            <h4 class="mb-3">
                                                <span class="counter-value" data-target="6258">0</span>
                                            </h4>
                                        </div>
                                        <div class="col-6">
                                            <div id="mini-chart2" data-colors='["#5156be"]' class="apex-charts mb-2">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-nowrap">
                                        <span class="badge bg-soft-danger text-danger">-29 Trades</span>
                                        <span class="ms-1 text-muted font-size-13">Since last week</span>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col-->

                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-h-100">
                                <!-- card body -->
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-6">
                                            <span class="text-muted mb-3 lh-1 d-block text-truncate">Invested
                                                Amount</span>
                                            <h4 class="mb-3">
                                                $<span class="counter-value" data-target="4.32">0</span>M
                                            </h4>
                                        </div>
                                        <div class="col-6">
                                            <div id="mini-chart3" data-colors='["#5156be"]' class="apex-charts mb-2">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-nowrap">
                                        <span class="badge bg-soft-success text-success">+ $2.8k</span>
                                        <span class="ms-1 text-muted font-size-13">Since last week</span>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-h-100">
                                <!-- card body -->
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-6">
                                            <span class="text-muted mb-3 lh-1 d-block text-truncate">Profit
                                                Ration</span>
                                            <h4 class="mb-3">
                                                <span class="counter-value" data-target="12.57">0</span>%
                                            </h4>
                                        </div>
                                        <div class="col-6">
                                            <div id="mini-chart4" data-colors='["#5156be"]' class="apex-charts mb-2">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-nowrap">
                                        <span class="badge bg-soft-success text-success">+2.95%</span>
                                        <span class="ms-1 text-muted font-size-13">Since last week</span>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                    </div><!-- end row-->

                    <div class="row">
                        <div class="col-xl-5">
                            <!-- card -->
                            <div class="card card-h-100">
                                <!-- card body -->
                                <div class="card-body">
                                    <div class="d-flex flex-wrap align-items-center mb-4">
                                        <h5 class="card-title me-2">Wallet Balance</h5>
                                        <div class="ms-auto">
                                            <div>
                                                <button type="button" class="btn btn-soft-secondary btn-sm">
                                                    ALL
                                                </button>
                                                <button type="button" class="btn btn-soft-primary btn-sm">
                                                    1M
                                                </button>
                                                <button type="button" class="btn btn-soft-secondary btn-sm">
                                                    6M
                                                </button>
                                                <button type="button" class="btn btn-soft-secondary btn-sm active">
                                                    1Y
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row align-items-center">
                                        <div class="col-sm">
                                            <div id="wallet-balance" data-colors='["#777aca", "#5156be", "#a8aada"]'
                                                class="apex-charts"></div>
                                        </div>
                                        <div class="col-sm align-self-center">
                                            <div class="mt-4 mt-sm-0">
                                                <div>
                                                    <p class="mb-2"><i
                                                            class="mdi mdi-circle align-middle font-size-10 me-2 text-success"></i>
                                                        Bitcoin</p>
                                                    <h6>0.4412 BTC = <span class="text-muted font-size-14 fw-normal">$
                                                            4025.32</span></h6>
                                                </div>

                                                <div class="mt-4 pt-2">
                                                    <p class="mb-2"><i
                                                            class="mdi mdi-circle align-middle font-size-10 me-2 text-primary"></i>
                                                        Ethereum</p>
                                                    <h6>4.5701 ETH = <span class="text-muted font-size-14 fw-normal">$
                                                            1123.64</span></h6>
                                                </div>

                                                <div class="mt-4 pt-2">
                                                    <p class="mb-2"><i
                                                            class="mdi mdi-circle align-middle font-size-10 me-2 text-info"></i>
                                                        Litecoin</p>
                                                    <h6>35.3811 LTC = <span class="text-muted font-size-14 fw-normal">$
                                                            2263.09</span></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                        <div class="col-xl-7">
                            <div class="row">
                                <div class="col-xl-8">
                                    <!-- card -->
                                    <div class="card card-h-100">
                                        <!-- card body -->
                                        <div class="card-body">
                                            <div class="d-flex flex-wrap align-items-center mb-4">
                                                <h5 class="card-title me-2">Invested Overview</h5>
                                                <div class="ms-auto">
                                                    <select class="form-select form-select-sm">
                                                        <option value="MAY" selected="">May</option>
                                                        <option value="AP">April</option>
                                                        <option value="MA">March</option>
                                                        <option value="FE">February</option>
                                                        <option value="JA">January</option>
                                                        <option value="DE">December</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row align-items-center">
                                                <div class="col-sm">
                                                    <div id="invested-overview" data-colors='["#5156be", "#34c38f"]'
                                                        class="apex-charts"></div>
                                                </div>
                                                <div class="col-sm align-self-center">
                                                    <div class="mt-4 mt-sm-0">
                                                        <p class="mb-1">Invested Amount</p>
                                                        <h4>$ 6134.39</h4>

                                                        <p class="text-muted mb-4"> + 0.0012.23 ( 0.2 % ) <i
                                                                class="mdi mdi-arrow-up ms-1 text-success"></i></p>

                                                        <div class="row g-0">
                                                            <div class="col-6">
                                                                <div>
                                                                    <p
                                                                        class="mb-2 text-muted text-uppercase font-size-11">
                                                                        Income</p>
                                                                    <h5 class="fw-medium">$ 2632.46</h5>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div>
                                                                    <p
                                                                        class="mb-2 text-muted text-uppercase font-size-11">
                                                                        Expenses</p>
                                                                    <h5 class="fw-medium">-$ 924.38</h5>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="mt-2">
                                                            <a href="#" class="btn btn-primary btn-sm">View more <i
                                                                    class="mdi mdi-arrow-right ms-1"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->

                                <div class="col-xl-4">
                                    <!-- card -->
                                    <div class="card bg-primary text-white shadow-primary card-h-100">
                                        <!-- card body -->
                                        <div class="card-body p-0">
                                            <div id="carouselExampleCaptions"
                                                class="carousel slide text-center widget-carousel"
                                                data-bs-ride="carousel">
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <div class="text-center p-4">
                                                            <i class="mdi mdi-bitcoin widget-box-1-icon"></i>
                                                            <div class="avatar-md m-auto">
                                                                <span
                                                                    class="avatar-title rounded-circle bg-soft-light text-white font-size-24">
                                                                    <i class="mdi mdi-currency-btc"></i>
                                                                </span>
                                                            </div>
                                                            <h4 class="mt-3 lh-base fw-normal text-white"><b>Bitcoin</b>
                                                                News</h4>
                                                            <p class="text-white-50 font-size-13"> Bitcoin prices fell
                                                                sharply amid the global sell-off in
                                                                equities. Negative news over the past week has dampened
                                                                sentiment for bitcoin. </p>
                                                            <button type="button" class="btn btn-light btn-sm">View
                                                                details
                                                                <i class="mdi mdi-arrow-right ms-1"></i></button>
                                                        </div>
                                                    </div>
                                                    <!-- end carousel-item -->
                                                    <div class="carousel-item">
                                                        <div class="text-center p-4">
                                                            <i class="mdi mdi-ethereum widget-box-1-icon"></i>
                                                            <div class="avatar-md m-auto">
                                                                <span
                                                                    class="avatar-title rounded-circle bg-soft-light text-white font-size-24">
                                                                    <i class="mdi mdi-ethereum"></i>
                                                                </span>
                                                            </div>
                                                            <h4 class="mt-3 lh-base fw-normal text-white"><b>ETH</b>
                                                                News
                                                            </h4>
                                                            <p class="text-white-50 font-size-13"> Bitcoin prices fell
                                                                sharply amid the global sell-off in
                                                                equities. Negative news over the past week has dampened
                                                                sentiment for bitcoin. </p>
                                                            <button type="button" class="btn btn-light btn-sm">View
                                                                details
                                                                <i class="mdi mdi-arrow-right ms-1"></i></button>
                                                        </div>
                                                    </div>
                                                    <!-- end carousel-item -->
                                                    <div class="carousel-item">
                                                        <div class="text-center p-4">
                                                            <i class="mdi mdi-litecoin widget-box-1-icon"></i>
                                                            <div class="avatar-md m-auto">
                                                                <span
                                                                    class="avatar-title rounded-circle bg-soft-light text-white font-size-24">
                                                                    <i class="mdi mdi-litecoin"></i>
                                                                </span>
                                                            </div>
                                                            <h4 class="mt-3 lh-base fw-normal text-white">
                                                                <b>Litecoin</b>
                                                                News</h4>
                                                            <p class="text-white-50 font-size-13"> Bitcoin prices fell
                                                                sharply amid the global sell-off in
                                                                equities. Negative news over the past week has dampened
                                                                sentiment for bitcoin. </p>
                                                            <button type="button" class="btn btn-light btn-sm">View
                                                                details
                                                                <i class="mdi mdi-arrow-right ms-1"></i></button>
                                                        </div>
                                                    </div>
                                                    <!-- end carousel-item -->
                                                </div>
                                                <!-- end carousel-inner -->

                                                <div class="carousel-indicators carousel-indicators-rounded">
                                                    <button type="button" data-bs-target="#carouselExampleCaptions"
                                                        data-bs-slide-to="0" class="active" aria-current="true"
                                                        aria-label="Slide 1"></button>
                                                    <button type="button" data-bs-target="#carouselExampleCaptions"
                                                        data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                    <button type="button" data-bs-target="#carouselExampleCaptions"
                                                        data-bs-slide-to="2" aria-label="Slide 3"></button>
                                                </div>
                                                <!-- end carousel-indicators -->
                                            </div>
                                            <!-- end carousel -->
                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end col -->
                    </div> <!-- end row-->

                    <div class="row">
                        <div class="col-xl-8">
                            <!-- card -->
                            <div class="card">
                                <!-- card body -->
                                <div class="card-body">
                                    <div class="d-flex flex-wrap align-items-center mb-4">
                                        <h5 class="card-title me-2">Market Overview</h5>
                                        <div class="ms-auto">
                                            <div>
                                                <button type="button" class="btn btn-soft-primary btn-sm">
                                                    ALL
                                                </button>
                                                <button type="button" class="btn btn-soft-secondary btn-sm">
                                                    1M
                                                </button>
                                                <button type="button" class="btn btn-soft-secondary btn-sm">
                                                    6M
                                                </button>
                                                <button type="button" class="btn btn-soft-secondary btn-sm active">
                                                    1Y
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row align-items-center">
                                        <div class="col-xl-8">
                                            <div>
                                                <div id="market-overview" data-colors='["#5156be", "#34c38f"]'
                                                    class="apex-charts"></div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="p-4">
                                                <div class="mt-0">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-sm m-auto">
                                                            <span
                                                                class="avatar-title rounded-circle bg-soft-light text-dark font-size-16">
                                                                1
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <span class="font-size-16">Coinmarketcap</span>
                                                        </div>

                                                        <div class="flex-shrink-0">
                                                            <span
                                                                class="badge rounded-pill badge-soft-success font-size-12 fw-medium">+2.5%</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mt-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-sm m-auto">
                                                            <span
                                                                class="avatar-title rounded-circle bg-soft-light text-dark font-size-16">
                                                                2
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <span class="font-size-16">Binance</span>
                                                        </div>

                                                        <div class="flex-shrink-0">
                                                            <span
                                                                class="badge rounded-pill badge-soft-success font-size-12 fw-medium">+8.3%</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mt-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-sm m-auto">
                                                            <span
                                                                class="avatar-title rounded-circle bg-soft-light text-dark font-size-16">
                                                                3
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <span class="font-size-16">Coinbase</span>
                                                        </div>

                                                        <div class="flex-shrink-0">
                                                            <span
                                                                class="badge rounded-pill badge-soft-danger font-size-12 fw-medium">-3.6%</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mt-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-sm m-auto">
                                                            <span
                                                                class="avatar-title rounded-circle bg-soft-light text-dark font-size-16">
                                                                4
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <span class="font-size-16">Yobit</span>
                                                        </div>

                                                        <div class="flex-shrink-0">
                                                            <span
                                                                class="badge rounded-pill badge-soft-success font-size-12 fw-medium">+7.1%</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mt-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-sm m-auto">
                                                            <span
                                                                class="avatar-title rounded-circle bg-soft-light text-dark font-size-16">
                                                                5
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <span class="font-size-16">Bitfinex</span>
                                                        </div>

                                                        <div class="flex-shrink-0">
                                                            <span
                                                                class="badge rounded-pill badge-soft-danger font-size-12 fw-medium">-0.9%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-4 pt-2">
                                                    <a href="" class="btn btn-primary w-100">See All Balances <i
                                                            class="mdi mdi-arrow-right ms-1"></i></a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row-->

                        <div class="col-xl-4">
                            <!-- card -->
                            <div class="card">
                                <!-- card body -->
                                <div class="card-body">
                                    <div class="d-flex flex-wrap align-items-center mb-4">
                                        <h5 class="card-title me-2">Sales by Locations</h5>
                                        <div class="ms-auto">
                                            <div class="dropdown">
                                                <a class="dropdown-toggle text-reset" href="#" id="dropdownMenuButton1"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <span class="text-muted font-size-12">Sort By:</span> <span
                                                        class="fw-medium">World<i
                                                            class="mdi mdi-chevron-down ms-1"></i></span>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-end"
                                                    aria-labelledby="dropdownMenuButton1">
                                                    <a class="dropdown-item" href="#">USA</a>
                                                    <a class="dropdown-item" href="#">Russia</a>
                                                    <a class="dropdown-item" href="#">Australia</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="sales-by-locations" data-colors='["#5156be"]' style="height: 250px"></div>

                                    <div class="px-2 py-2">
                                        <p class="mb-1">USA <span class="float-end">75%</span></p>
                                        <div class="progress mt-2" style="height: 6px;">
                                            <div class="progress-bar progress-bar-striped bg-primary" role="progressbar"
                                                style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                                                aria-valuemax="75">
                                            </div>
                                        </div>

                                        <p class="mt-3 mb-1">Russia <span class="float-end">55%</span></p>
                                        <div class="progress mt-2" style="height: 6px;">
                                            <div class="progress-bar progress-bar-striped bg-primary" role="progressbar"
                                                style="width: 55%" aria-valuenow="55" aria-valuemin="0"
                                                aria-valuemax="55">
                                            </div>
                                        </div>

                                        <p class="mt-3 mb-1">Australia <span class="float-end">85%</span></p>
                                        <div class="progress mt-2" style="height: 6px;">
                                            <div class="progress-bar progress-bar-striped bg-primary" role="progressbar"
                                                style="width: 85%" aria-valuenow="85" aria-valuemin="0"
                                                aria-valuemax="85">
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
                    <!-- end row-->

                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Trading</h4>
                                    <div class="flex-shrink-0">
                                        <ul class="nav nav-tabs-custom card-header-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#buy-tab"
                                                    role="tab">Buy</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#sell-tab"
                                                    role="tab">Sell</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="buy-tab" role="tabpanel">
                                            <div class="float-end ms-2">
                                                <h5 class="font-size-14"><i
                                                        class="bx bx-wallet text-primary font-size-16 align-middle me-1"></i>
                                                    <a href="#!"
                                                        class="text-reset text-decoration-underline">$4335.23</a>
                                                </h5>
                                            </div>
                                            <h5 class="font-size-14 mb-4">Buy Coins</h5>
                                            <div>
                                                <div class="form-group mb-3">
                                                    <label>Payment method :</label>
                                                    <select class="form-select">
                                                        <option>Direct Bank Payment</option>
                                                        <option>Credit / Debit Card</option>
                                                        <option>Paypal</option>
                                                        <option>Payoneer</option>
                                                        <option>Stripe</option>
                                                    </select>
                                                </div>

                                                <div>
                                                    <label>Add Amount :</label>
                                                    <div class="input-group mb-3">
                                                        <label class="input-group-text">Amount</label>
                                                        <select class="form-select" style="max-width: 90px;">
                                                            <option value="BT" selected>BTC</option>
                                                            <option value="ET">ETH</option>
                                                            <option value="LT">LTC</option>
                                                        </select>
                                                        <input type="text" class="form-control"
                                                            placeholder="0.00121255">
                                                    </div>

                                                    <div class="input-group mb-3">
                                                        <label class="input-group-text">Price</label>
                                                        <input type="text" class="form-control" placeholder="$58,245">
                                                        <label class="input-group-text">$</label>
                                                    </div>

                                                    <div class="input-group mb-3">
                                                        <label class="input-group-text">Total</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="$36,854.25">
                                                    </div>
                                                </div>

                                                <div class="text-center">
                                                    <button type="button" class="btn btn-success w-md">Buy Coin</button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end tab pane -->
                                        <div class="tab-pane" id="sell-tab" role="tabpanel">
                                            <div class="float-end ms-2">
                                                <h5 class="font-size-14"><i
                                                        class="bx bx-wallet text-primary font-size-16 align-middle me-1"></i>
                                                    <a href="#!"
                                                        class="text-reset text-decoration-underline">$4235.23</a>
                                                </h5>
                                            </div>
                                            <h5 class="font-size-14 mb-4">Sell Coins</h5>

                                            <div>

                                                <div class="form-group mb-3">
                                                    <label>Wallet ID :</label>
                                                    <input type="email" class="form-control"
                                                        placeholder="1cvb254ugxvfcd280ki">
                                                </div>

                                                <div>
                                                    <label>Add Amount :</label>
                                                    <div class="input-group mb-3">
                                                        <label class="input-group-text">Amount</label>

                                                        <select class="form-select" style="max-width: 90px;">
                                                            <option value="BT" selected>BTC</option>
                                                            <option value="ET">ETH</option>
                                                            <option value="LT">LTC</option>
                                                        </select>
                                                        <input type="text" class="form-control"
                                                            placeholder="0.00121255">
                                                    </div>

                                                    <div class="input-group mb-3">

                                                        <label class="input-group-text">Price</label>

                                                        <input type="text" class="form-control"
                                                            placeholder="$23,754.25">

                                                        <label class="input-group-text">$</label>
                                                    </div>

                                                    <div class="input-group mb-3">
                                                        <label class="input-group-text">Total</label>
                                                        <input type="text" class="form-control" placeholder="$6,852.41">
                                                    </div>
                                                </div>

                                                <div class="text-center">
                                                    <button type="button" class="btn btn-danger w-md">Sell Coin</button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end tab pane -->
                                    </div>
                                    <!-- end tab content -->
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Transactions</h4>
                                    <div class="flex-shrink-0">
                                        <ul class="nav justify-content-end nav-tabs-custom rounded card-header-tabs"
                                            role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="tab"
                                                    href="#transactions-all-tab" role="tab">
                                                    All
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#transactions-buy-tab"
                                                    role="tab">
                                                    Buy
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#transactions-sell-tab"
                                                    role="tab">
                                                    Sell
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- end nav tabs -->
                                    </div>
                                </div><!-- end card header -->

                                <div class="card-body px-0">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="transactions-all-tab" role="tabpanel">
                                            <div class="table-responsive px-3" data-simplebar
                                                style="max-height: 352px;">
                                                <table class="table align-middle table-nowrap table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td style="width: 50px;">
                                                                <div class="font-size-22 text-success">
                                                                    <i class="bx bx-down-arrow-circle d-block"></i>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div>
                                                                    <h5 class="font-size-14 mb-1">Buy BTC</h5>
                                                                    <p class="text-muted mb-0 font-size-12">14 Mar, 2021
                                                                    </p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 mb-0">0.016 BTC</h5>
                                                                    <p class="text-muted mb-0 font-size-12">Coin Value
                                                                    </p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 text-muted mb-0">$125.20
                                                                    </h5>
                                                                    <p class="text-muted mb-0 font-size-12">Amount</p>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <div class="font-size-22 text-danger">
                                                                    <i class="bx bx-up-arrow-circle d-block"></i>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div>
                                                                    <h5 class="font-size-14 mb-1">Sell ETH</h5>
                                                                    <p class="text-muted mb-0 font-size-12">15 Mar, 2021
                                                                    </p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 mb-0">0.56 ETH</h5>
                                                                    <p class="text-muted mb-0 font-size-12">Coin Value
                                                                    </p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 text-muted mb-0">$112.34
                                                                    </h5>
                                                                    <p class="text-muted mb-0 font-size-12">Amount</p>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <div class="font-size-22 text-success">
                                                                    <i class="bx bx-down-arrow-circle d-block"></i>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div>
                                                                    <h5 class="font-size-14 mb-1">Buy LTC</h5>
                                                                    <p class="text-muted mb-0 font-size-12">16 Mar, 2021
                                                                    </p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 mb-0">1.88 LTC</h5>
                                                                    <p class="text-muted mb-0 font-size-12">Coin Value
                                                                    </p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 text-muted mb-0">$94.22</h5>
                                                                    <p class="text-muted mb-0 font-size-12">Amount</p>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <div class="font-size-22 text-success">
                                                                    <i class="bx bx-down-arrow-circle d-block"></i>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div>
                                                                    <h5 class="font-size-14 mb-1">Buy ETH</h5>
                                                                    <p class="text-muted mb-0 font-size-12">17 Mar, 2021
                                                                    </p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 mb-0">0.42 ETH</h5>
                                                                    <p class="text-muted mb-0 font-size-12">Coin Value
                                                                    </p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 text-muted mb-0">$84.32</h5>
                                                                    <p class="text-muted mb-0 font-size-12">Amount</p>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <div class="font-size-22 text-danger">
                                                                    <i class="bx bx-up-arrow-circle d-block"></i>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div>
                                                                    <h5 class="font-size-14 mb-1">Sell BTC</h5>
                                                                    <p class="text-muted mb-0 font-size-12">18 Mar, 2021
                                                                    </p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 mb-0">0.018 BTC</h5>
                                                                    <p class="text-muted mb-0 font-size-12">Coin Value
                                                                    </p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 text-muted mb-0">$145.80
                                                                    </h5>
                                                                    <p class="text-muted mb-0 font-size-12">Amount</p>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="width: 50px;">
                                                                <div class="font-size-22 text-success">
                                                                    <i class="bx bx-down-arrow-circle d-block"></i>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div>
                                                                    <h5 class="font-size-14 mb-1">Buy BTC</h5>
                                                                    <p class="text-muted mb-0 font-size-12">14 Mar, 2021
                                                                    </p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 mb-0">0.016 BTC</h5>
                                                                    <p class="text-muted mb-0 font-size-12">Coin Value
                                                                    </p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 text-muted mb-0">$125.20
                                                                    </h5>
                                                                    <p class="text-muted mb-0 font-size-12">Amount</p>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <div class="font-size-22 text-danger">
                                                                    <i class="bx bx-up-arrow-circle d-block"></i>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div>
                                                                    <h5 class="font-size-14 mb-1">Sell ETH</h5>
                                                                    <p class="text-muted mb-0 font-size-12">15 Mar, 2021
                                                                    </p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 mb-0">0.56 ETH</h5>
                                                                    <p class="text-muted mb-0 font-size-12">Coin Value
                                                                    </p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 text-muted mb-0">$112.34
                                                                    </h5>
                                                                    <p class="text-muted mb-0 font-size-12">Amount</p>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- end tab pane -->
                                        <div class="tab-pane" id="transactions-buy-tab" role="tabpanel">
                                            <div class="table-responsive px-3" data-simplebar
                                                style="max-height: 352px;">
                                                <table class="table align-middle table-nowrap table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td style="width: 50px;">
                                                                <div class="font-size-22 text-success">
                                                                    <i class="bx bx-down-arrow-circle d-block"></i>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div>
                                                                    <h5 class="font-size-14 mb-1">Buy BTC</h5>
                                                                    <p class="text-muted mb-0 font-size-12">14 Mar, 2021
                                                                    </p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 mb-0">0.016 BTC</h5>
                                                                    <p class="text-muted mb-0 font-size-12">Coin Value
                                                                    </p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 text-muted mb-0">$125.20
                                                                    </h5>
                                                                    <p class="text-muted mb-0 font-size-12">Amount</p>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <div class="font-size-22 text-success">
                                                                    <i class="bx bx-down-arrow-circle d-block"></i>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div>
                                                                    <h5 class="font-size-14 mb-1">Buy BTC</h5>
                                                                    <p class="text-muted mb-0 font-size-12">18 Mar, 2021
                                                                    </p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 mb-0">0.018 BTC</h5>
                                                                    <p class="text-muted mb-0 font-size-12">Coin Value
                                                                    </p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 text-muted mb-0">$145.80
                                                                    </h5>
                                                                    <p class="text-muted mb-0 font-size-12">Amount</p>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <div class="font-size-22 text-success">
                                                                    <i class="bx bx-down-arrow-circle d-block"></i>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div>
                                                                    <h5 class="font-size-14 mb-1">Buy LTC</h5>
                                                                    <p class="text-muted mb-0 font-size-12">16 Mar, 2021
                                                                    </p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 mb-0">1.88 LTC</h5>
                                                                    <p class="text-muted mb-0 font-size-12">Coin Value
                                                                    </p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 text-muted mb-0">$94.22</h5>
                                                                    <p class="text-muted mb-0 font-size-12">Amount</p>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <div class="font-size-22 text-success">
                                                                    <i class="bx bx-down-arrow-circle d-block"></i>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div>
                                                                    <h5 class="font-size-14 mb-1">Buy ETH</h5>
                                                                    <p class="text-muted mb-0 font-size-12">15 Mar, 2021
                                                                    </p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 mb-0">0.56 ETH</h5>
                                                                    <p class="text-muted mb-0 font-size-12">Coin Value
                                                                    </p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 text-muted mb-0">$112.34
                                                                    </h5>
                                                                    <p class="text-muted mb-0 font-size-12">Amount</p>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <div class="font-size-22 text-success">
                                                                    <i class="bx bx-down-arrow-circle d-block"></i>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div>
                                                                    <h5 class="font-size-14 mb-1">Buy ETH</h5>
                                                                    <p class="text-muted mb-0 font-size-12">17 Mar, 2021
                                                                    </p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 mb-0">0.42 ETH</h5>
                                                                    <p class="text-muted mb-0 font-size-12">Coin Value
                                                                    </p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 text-muted mb-0">$84.32</h5>
                                                                    <p class="text-muted mb-0 font-size-12">Amount</p>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <div class="font-size-22 text-success">
                                                                    <i class="bx bx-down-arrow-circle d-block"></i>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div>
                                                                    <h5 class="font-size-14 mb-1">Buy ETH</h5>
                                                                    <p class="text-muted mb-0 font-size-12">15 Mar, 2021
                                                                    </p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 mb-0">0.56 ETH</h5>
                                                                    <p class="text-muted mb-0 font-size-12">Coin Value
                                                                    </p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 text-muted mb-0">$112.34
                                                                    </h5>
                                                                    <p class="text-muted mb-0 font-size-12">Amount</p>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="width: 50px;">
                                                                <div class="font-size-22 text-success">
                                                                    <i class="bx bx-down-arrow-circle d-block"></i>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div>
                                                                    <h5 class="font-size-14 mb-1">Buy BTC</h5>
                                                                    <p class="text-muted mb-0 font-size-12">14 Mar, 2021
                                                                    </p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 mb-0">0.016 BTC</h5>
                                                                    <p class="text-muted mb-0 font-size-12">Coin Value
                                                                    </p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 text-muted mb-0">$125.20
                                                                    </h5>
                                                                    <p class="text-muted mb-0 font-size-12">Amount</p>
                                                                </div>
                                                            </td>
                                                        </tr>


                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- end tab pane -->
                                        <div class="tab-pane" id="transactions-sell-tab" role="tabpanel">
                                            <div class="table-responsive px-3" data-simplebar
                                                style="max-height: 352px;">
                                                <table class="table align-middle table-nowrap table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="font-size-22 text-danger">
                                                                    <i class="bx bx-up-arrow-circle d-block"></i>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div>
                                                                    <h5 class="font-size-14 mb-1">Sell ETH</h5>
                                                                    <p class="text-muted mb-0 font-size-12">15 Mar, 2021
                                                                    </p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 mb-0">0.56 ETH</h5>
                                                                    <p class="text-muted mb-0 font-size-12">Coin Value
                                                                    </p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 text-muted mb-0">$112.34
                                                                    </h5>
                                                                    <p class="text-muted mb-0 font-size-12">Amount</p>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="width: 50px;">
                                                                <div class="font-size-22 text-danger">
                                                                    <i class="bx bx-up-arrow-circle d-block"></i>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div>
                                                                    <h5 class="font-size-14 mb-1">Sell BTC</h5>
                                                                    <p class="text-muted mb-0 font-size-12">14 Mar, 2021
                                                                    </p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 mb-0">0.016 BTC</h5>
                                                                    <p class="text-muted mb-0 font-size-12">Coin Value
                                                                    </p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 text-muted mb-0">$125.20
                                                                    </h5>
                                                                    <p class="text-muted mb-0 font-size-12">Amount</p>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <div class="font-size-22 text-danger">
                                                                    <i class="bx bx-up-arrow-circle d-block"></i>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div>
                                                                    <h5 class="font-size-14 mb-1">Sell BTC</h5>
                                                                    <p class="text-muted mb-0 font-size-12">18 Mar, 2021
                                                                    </p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 mb-0">0.018 BTC</h5>
                                                                    <p class="text-muted mb-0 font-size-12">Coin Value
                                                                    </p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 text-muted mb-0">$145.80
                                                                    </h5>
                                                                    <p class="text-muted mb-0 font-size-12">Amount</p>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <div class="font-size-22 text-danger">
                                                                    <i class="bx bx-up-arrow-circle d-block"></i>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div>
                                                                    <h5 class="font-size-14 mb-1">Sell ETH</h5>
                                                                    <p class="text-muted mb-0 font-size-12">15 Mar, 2021
                                                                    </p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 mb-0">0.56 ETH</h5>
                                                                    <p class="text-muted mb-0 font-size-12">Coin Value
                                                                    </p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 text-muted mb-0">$112.34
                                                                    </h5>
                                                                    <p class="text-muted mb-0 font-size-12">Amount</p>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <div class="font-size-22 text-danger">
                                                                    <i class="bx bx-up-arrow-circle d-block"></i>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div>
                                                                    <h5 class="font-size-14 mb-1">Sell LTC</h5>
                                                                    <p class="text-muted mb-0 font-size-12">16 Mar, 2021
                                                                    </p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 mb-0">1.88 LTC</h5>
                                                                    <p class="text-muted mb-0 font-size-12">Coin Value
                                                                    </p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 text-muted mb-0">$94.22</h5>
                                                                    <p class="text-muted mb-0 font-size-12">Amount</p>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <div class="font-size-22 text-danger">
                                                                    <i class="bx bx-up-arrow-circle d-block"></i>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div>
                                                                    <h5 class="font-size-14 mb-1">Sell ETH</h5>
                                                                    <p class="text-muted mb-0 font-size-12">17 Mar, 2021
                                                                    </p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 mb-0">0.42 ETH</h5>
                                                                    <p class="text-muted mb-0 font-size-12">Coin Value
                                                                    </p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 text-muted mb-0">$84.32</h5>
                                                                    <p class="text-muted mb-0 font-size-12">Amount</p>
                                                                </div>
                                                            </td>
                                                        </tr>



                                                        <tr>
                                                            <td style="width: 50px;">
                                                                <div class="font-size-22 text-danger">
                                                                    <i class="bx bx-up-arrow-circle d-block"></i>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div>
                                                                    <h5 class="font-size-14 mb-1">Sell BTC</h5>
                                                                    <p class="text-muted mb-0 font-size-12">14 Mar, 2021
                                                                    </p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 mb-0">0.016 BTC</h5>
                                                                    <p class="text-muted mb-0 font-size-12">Coin Value
                                                                    </p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 text-muted mb-0">$125.20
                                                                    </h5>
                                                                    <p class="text-muted mb-0 font-size-12">Amount</p>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- end tab pane -->
                                    </div>
                                    <!-- end tab content -->
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Recent Activity</h4>
                                    <div class="flex-shrink-0">
                                        <select class="form-select form-select-sm mb-0 my-n1">
                                            <option value="Today" selected="">Today</option>
                                            <option value="Yesterday">Yesterday</option>
                                            <option value="Week">Last Week</option>
                                            <option value="Month">Last Month</option>
                                        </select>
                                    </div>
                                </div><!-- end card header -->

                                <div class="card-body px-0">
                                    <div class="px-3" data-simplebar style="max-height: 352px;">
                                        <ul class="list-unstyled activity-wid mb-0">

                                            <li class="activity-list activity-border">
                                                <div class="activity-icon avatar-md">
                                                    <span
                                                        class="avatar-title bg-soft-warning text-warning rounded-circle">
                                                        <i class="bx bx-bitcoin font-size-24"></i>
                                                    </span>
                                                </div>
                                                <div class="timeline-list-item">
                                                    <div class="d-flex">
                                                        <div class="flex-grow-1 overflow-hidden me-4">
                                                            <h5 class="font-size-14 mb-1">24/05/2021, 18:24:56</h5>
                                                            <p class="text-truncate text-muted font-size-13">
                                                                0xb77ad0099e21d4fca87fa4ca92dda1a40af9e05d205e53f38bf026196fa2e431
                                                            </p>
                                                        </div>
                                                        <div class="flex-shrink-0 text-end me-3">
                                                            <h6 class="mb-1">+0.5 BTC</h6>
                                                            <div class="font-size-13">$178.53</div>
                                                        </div>

                                                        <div class="flex-shrink-0 text-end">
                                                            <div class="dropdown">
                                                                <a class="text-muted dropdown-toggle font-size-24"
                                                                    role="button" data-bs-toggle="dropdown"
                                                                    aria-haspopup="true">
                                                                    <i class="mdi mdi-dots-vertical"></i>
                                                                </a>

                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                    <a class="dropdown-item" href="#">Another action</a>
                                                                    <a class="dropdown-item" href="#">Something else
                                                                        here</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="activity-list activity-border">
                                                <div class="activity-icon avatar-md">
                                                    <span
                                                        class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                        <i class="mdi mdi-ethereum font-size-24"></i>
                                                    </span>
                                                </div>
                                                <div class="timeline-list-item">
                                                    <div class="d-flex">
                                                        <div class="flex-grow-1 overflow-hidden me-4">
                                                            <h5 class="font-size-14 mb-1">24/05/2021, 18:24:56</h5>
                                                            <p class="text-truncate text-muted font-size-13">
                                                                0xb77ad0099e21d4fca87fa4ca92dda1a40af9e05d205e53f38bf026196fa2e431
                                                            </p>
                                                        </div>
                                                        <div class="flex-shrink-0 text-end me-3">
                                                            <h6 class="mb-1">-20.5 ETH</h6>
                                                            <div class="font-size-13">$3541.45</div>
                                                        </div>

                                                        <div class="flex-shrink-0 text-end">
                                                            <div class="dropdown">
                                                                <a class="text-muted dropdown-toggle font-size-24"
                                                                    role="button" data-bs-toggle="dropdown"
                                                                    aria-haspopup="true">
                                                                    <i class="mdi mdi-dots-vertical"></i>
                                                                </a>

                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                    <a class="dropdown-item" href="#">Another action</a>
                                                                    <a class="dropdown-item" href="#">Something else
                                                                        here</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="activity-list activity-border">
                                                <div class="activity-icon avatar-md">
                                                    <span
                                                        class="avatar-title bg-soft-warning text-warning rounded-circle">
                                                        <i class="bx bx-bitcoin font-size-24"></i>
                                                    </span>
                                                </div>
                                                <div class="timeline-list-item">
                                                    <div class="d-flex">
                                                        <div class="flex-grow-1 overflow-hidden me-4">
                                                            <h5 class="font-size-14 mb-1">24/05/2021, 18:24:56</h5>
                                                            <p class="text-truncate text-muted font-size-13">
                                                                0xb77ad0099e21d4fca87fa4ca92dda1a40af9e05d205e53f38bf026196fa2e431
                                                            </p>
                                                        </div>
                                                        <div class="flex-shrink-0 text-end me-3">
                                                            <h6 class="mb-1">+0.5 BTC</h6>
                                                            <div class="font-size-13">$5791.45</div>
                                                        </div>

                                                        <div class="flex-shrink-0 text-end">
                                                            <div class="dropdown">
                                                                <a class="text-muted dropdown-toggle font-size-24"
                                                                    role="button" data-bs-toggle="dropdown"
                                                                    aria-haspopup="true">
                                                                    <i class="mdi mdi-dots-vertical"></i>
                                                                </a>

                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                    <a class="dropdown-item" href="#">Another action</a>
                                                                    <a class="dropdown-item" href="#">Something else
                                                                        here</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="activity-list activity-border">
                                                <div class="activity-icon avatar-md">
                                                    <span
                                                        class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                        <i class="mdi mdi-litecoin font-size-24"></i>
                                                    </span>
                                                </div>
                                                <div class="timeline-list-item">
                                                    <div class="d-flex">
                                                        <div class="flex-grow-1 overflow-hidden me-4">
                                                            <h5 class="font-size-14 mb-1">24/05/2021, 18:24:56</h5>
                                                            <p class="text-truncate text-muted font-size-13">
                                                                0xb77ad0099e21d4fca87fa4ca92dda1a40af9e05d205e53f38bf026196fa2e431
                                                            </p>
                                                        </div>
                                                        <div class="flex-shrink-0 text-end me-3">
                                                            <h6 class="mb-1">-1.5 LTC</h6>
                                                            <div class="font-size-13">$5791.45</div>
                                                        </div>

                                                        <div class="flex-shrink-0 text-end">
                                                            <div class="dropdown">
                                                                <a class="text-muted dropdown-toggle font-size-24"
                                                                    role="button" data-bs-toggle="dropdown"
                                                                    aria-haspopup="true">
                                                                    <i class="mdi mdi-dots-vertical"></i>
                                                                </a>

                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                    <a class="dropdown-item" href="#">Another action</a>
                                                                    <a class="dropdown-item" href="#">Something else
                                                                        here</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>


                                            <li class="activity-list activity-border">
                                                <div class="activity-icon avatar-md">
                                                    <span
                                                        class="avatar-title bg-soft-warning text-warning rounded-circle">
                                                        <i class="bx bx-bitcoin font-size-24"></i>
                                                    </span>
                                                </div>
                                                <div class="timeline-list-item">
                                                    <div class="d-flex">
                                                        <div class="flex-grow-1 overflow-hidden me-4">
                                                            <h5 class="font-size-14 mb-1">24/05/2021, 18:24:56</h5>
                                                            <p class="text-truncate text-muted font-size-13">
                                                                0xb77ad0099e21d4fca87fa4ca92dda1a40af9e05d205e53f38bf026196fa2e431
                                                            </p>
                                                        </div>
                                                        <div class="flex-shrink-0 text-end me-3">
                                                            <h6 class="mb-1">+0.5 BTC</h6>
                                                            <div class="font-size-13">$5791.45</div>
                                                        </div>

                                                        <div class="flex-shrink-0 text-end">
                                                            <div class="dropdown">
                                                                <a class="text-muted dropdown-toggle font-size-24"
                                                                    role="button" data-bs-toggle="dropdown"
                                                                    aria-haspopup="true">
                                                                    <i class="mdi mdi-dots-vertical"></i>
                                                                </a>

                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                    <a class="dropdown-item" href="#">Another action</a>
                                                                    <a class="dropdown-item" href="#">Something else
                                                                        here</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="activity-list">
                                                <div class="activity-icon avatar-md">
                                                    <span
                                                        class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                        <i class="mdi mdi-litecoin font-size-24"></i>
                                                    </span>
                                                </div>
                                                <div class="timeline-list-item">
                                                    <div class="d-flex">
                                                        <div class="flex-grow-1 overflow-hidden me-4">
                                                            <h5 class="font-size-14 mb-1">24/05/2021, 18:24:56</h5>
                                                            <p class="text-truncate text-muted font-size-13">
                                                                0xb77ad0099e21d4fca87fa4ca92dda1a40af9e05d205e53f38bf026196fa2e431
                                                            </p>
                                                        </div>
                                                        <div class="flex-shrink-0 text-end me-3">
                                                            <h6 class="mb-1">+.55 LTC</h6>
                                                            <div class="font-size-13">$91.45</div>
                                                        </div>

                                                        <div class="flex-shrink-0 text-end">
                                                            <div class="dropdown">
                                                                <a class="text-muted dropdown-toggle font-size-24"
                                                                    role="button" data-bs-toggle="dropdown"
                                                                    aria-haspopup="true">
                                                                    <i class="mdi mdi-dots-vertical"></i>
                                                                </a>

                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                    <a class="dropdown-item" href="#">Another action</a>
                                                                    <a class="dropdown-item" href="#">Something else
                                                                        here</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- ============================================================== -->
                <!-- End Content here -->
                <!-- ============================================================== -->v>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())

                            </script> © Minia.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by <a href="#!" class="text-decoration-underline">Themesbrand</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    <div class="right-bar">
        <div data-simplebar class="h-100">
            <div class="rightbar-title d-flex align-items-center bg-dark p-3">

                <h5 class="m-0 me-2 text-white">Theme Customizer</h5>

                <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                    <i class="mdi mdi-close noti-icon"></i>
                </a>
            </div>

            <!-- Settings -->
            <hr class="m-0" />

            <div class="p-4">
                <h6 class="mb-3">Layout</h6>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout" id="layout-vertical" value="vertical">
                    <label class="form-check-label" for="layout-vertical">Vertical</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout" id="layout-horizontal"
                        value="horizontal">
                    <label class="form-check-label" for="layout-horizontal">Horizontal</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2">Layout Mode</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-mode" id="layout-mode-light"
                        value="light">
                    <label class="form-check-label" for="layout-mode-light">Light</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-mode" id="layout-mode-dark" value="dark">
                    <label class="form-check-label" for="layout-mode-dark">Dark</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2">Layout Width</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-width" id="layout-width-fuild"
                        value="fuild" onchange="document.body.setAttribute('data-layout-size', 'fluid')">
                    <label class="form-check-label" for="layout-width-fuild">Fluid</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-width" id="layout-width-boxed"
                        value="boxed" onchange="document.body.setAttribute('data-layout-size', 'boxed')">
                    <label class="form-check-label" for="layout-width-boxed">Boxed</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2">Layout Position</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-position" id="layout-position-fixed"
                        value="fixed" onchange="document.body.setAttribute('data-layout-scrollable', 'false')">
                    <label class="form-check-label" for="layout-position-fixed">Fixed</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-position" id="layout-position-scrollable"
                        value="scrollable" onchange="document.body.setAttribute('data-layout-scrollable', 'true')">
                    <label class="form-check-label" for="layout-position-scrollable">Scrollable</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2">Topbar Color</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="topbar-color" id="topbar-color-light"
                        value="light" onchange="document.body.setAttribute('data-topbar', 'light')">
                    <label class="form-check-label" for="topbar-color-light">Light</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="topbar-color" id="topbar-color-dark" value="dark"
                        onchange="document.body.setAttribute('data-topbar', 'dark')">
                    <label class="form-check-label" for="topbar-color-dark">Dark</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Size</h6>

                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-default"
                        value="default" onchange="document.body.setAttribute('data-sidebar-size', 'lg')">
                    <label class="form-check-label" for="sidebar-size-default">Default</label>
                </div>
                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-compact"
                        value="compact" onchange="document.body.setAttribute('data-sidebar-size', 'md')">
                    <label class="form-check-label" for="sidebar-size-compact">Compact</label>
                </div>
                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-small"
                        value="small" onchange="document.body.setAttribute('data-sidebar-size', 'sm')">
                    <label class="form-check-label" for="sidebar-size-small">Small (Icon View)</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Color</h6>

                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-light"
                        value="light" onchange="document.body.setAttribute('data-sidebar', 'light')">
                    <label class="form-check-label" for="sidebar-color-light">Light</label>
                </div>
                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-dark"
                        value="dark" onchange="document.body.setAttribute('data-sidebar', 'dark')">
                    <label class="form-check-label" for="sidebar-color-dark">Dark</label>
                </div>
                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-brand"
                        value="brand" onchange="document.body.setAttribute('data-sidebar', 'brand')">
                    <label class="form-check-label" for="sidebar-color-brand">Brand</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2">Direction</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-direction" id="layout-direction-ltr"
                        value="ltr">
                    <label class="form-check-label" for="layout-direction-ltr">LTR</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-direction" id="layout-direction-rtl"
                        value="rtl">
                    <label class="form-check-label" for="layout-direction-rtl">RTL</label>
                </div>

            </div>

        </div> <!-- end slimscroll-menu-->
    </div>

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>
    <!-- /Right-bar -->

    <!-- JAVASCRIPT -->
    <!-- JAVASCRIPT -->
    <script src="{{ asset('libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('libs/feather-icons/feather.min.js') }}"></script>
    <!-- pace js -->
    <script src="{{ asset('libs/pace-js/pace.min.js') }}"></script>

    <!-- apexcharts -->
    <script src="{{ asset('libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- Plugins js-->
    <script src="{{ asset('libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js') }}"></script>

    <!-- dashboard init -->
    <script src="{{ asset('js/pages/dashboard.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>
