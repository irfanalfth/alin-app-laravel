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

            <div class="card sidebar-alert border-0 text-center mx-4 mb-0 mt-5">
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
            </div>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->

<div class="main-content">
    <div class="page-content">