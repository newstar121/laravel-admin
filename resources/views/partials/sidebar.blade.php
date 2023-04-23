<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">
        <div class="user-details">
            <div class="d-flex">
                <div class="me-2">
                    <img src="assets/images/users/avatar-4.jpg" alt="" class="avatar-md rounded-circle">
                </div>
                <div class="user-info w-100">
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Donald Johnson
                            <i class="mdi mdi-chevron-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="javascript:void(0)" class="dropdown-item"><i class="mdi mdi-account-circle text-muted me-2"></i>
                                    Profile<div class="ripple-wrapper me-2"></div>
                                </a></li>
                            <li><a href="javascript:void(0)" class="dropdown-item"><i class="mdi mdi-cog text-muted me-2"></i>
                                    Settings</a></li>
                            <li><a href="javascript:void(0)" class="dropdown-item"><i class="mdi mdi-lock-open-outline text-muted me-2"></i>
                                    Lock screen</a></li>
                            <li><a href="javascript:void(0)" class="dropdown-item"><i class="mdi mdi-power text-muted me-2"></i>
                                    Logout</a></li>
                        </ul>
                    </div>

                    <p class="text-white-50 m-0">Administrator</p>
                </div>
            </div>
        </div>


        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <li>
                <a href="index.html" class="waves-effect">
                    <i class="mdi mdi-home"></i>
                    <span>Home</span>

                </a>
            </li>
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">INVENTORY</li>
                <li>
                    <a href="/ingredientslibrary" class="waves-effect">
                        <i class="mdi mdi-home"></i><span class="badge bg-primary float-end">3</span>
                        <span>Ingredient Library</span>

                    </a>
                    <a href="/ingredients" class="waves-effect">
                        <i class="mdi mdi-home"></i>
                        <span>Ingredient</span>

                    </a>
                </li>
            </ul>
            <!-- <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Main</li>

                <li>
                    <a href="index.html" class="waves-effect">
                        <i class="mdi mdi-home"></i><span class="badge bg-primary float-end">3</span>
                        <span>Dashboard</span>

                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-email"></i>
                        <span>Email</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="email-inbox.html">Inbox</a></li>
                        <li><a href="email-read.html">Read Email</a></li>
                        <li><a href="email-compose.html">Email Compose</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-buffer"></i>
                        <span>UI Elements</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="ui-alerts.html">Alerts</a></li>
                        <li><a href="ui-buttons.html">Buttons</a></li>
                        <li><a href="ui-badge.html">Badge</a></li>
                        <li><a href="ui-cards.html">Cards</a></li>
                        <li><a href="ui-carousel.html">Carousel</a></li>
                        <li><a href="ui-dropdowns.html">Dropdowns</a></li>
                        <li><a href="ui-general.html">General</a></li>
                        <li><a href="ui-grid.html">Grid</a></li>
                        <li><a href="ui-images.html">Images</a></li>
                        <li><a href="ui-modals.html">Modals</a></li>
                        <li><a href="ui-pagination.html">Pagination</a></li>
                        <li><a href="ui-popover-tooltips.html">Popover & Tooltips</a></li>
                        <li><a href="ui-progressbars.html">Progress Bars</a></li>
                        <li><a href="ui-tabs-accordions.html">Tabs & Accordions</a></li>
                        <li><a href="ui-typography.html">Typography</a></li>
                        <li><a href="ui-video.html">Video</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-black-mesa"></i>
                        <span>Components</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="components-lightbox.html">Lightbox</a></li>
                        <li><a href="components-range-slider.html">Range Slider</a></li>
                        <li><a href="components-session-timeout.html">Session Timeout</a></li>
                        <li><a href="components-sweet-alert.html">Sweet-Alert</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="mdi mdi-clipboard"></i>
                        <span class="badge bg-success float-end">6</span>
                        <span>Forms</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="form-elements.html">Form Elements</a></li>
                        <li><a href="form-validation.html">Form Validation</a></li>
                        <li><a href="form-advanced.html">Form Advanced</a></li>
                        <li><a href="form-editors.html">Form Editors</a></li>
                        <li><a href="form-uploads.html">Form File Upload</a></li>
                        <li><a href="form-xeditable.html">Form Xeditable</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-finance"></i>
                        <span>Charts</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="charts-chartist.html">Chartist Chart</a></li>
                        <li><a href="charts-chartjs.html">Chartjs Chart</a></li>
                        <li><a href="charts-flot.html">Flot Chart</a></li>
                        <li><a href="charts-c3.html">C3 Charts</a></li>
                        <li><a href="charts-morris.html">Morris Charts</a></li>
                        <li><a href="charts-knob.html">Jquery Knob Chart</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-table-settings"></i>
                        <span>Tables</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="tables-basic.html">Basic Tables</a></li>
                        <li><a href="tables-datatable.html">Data Tables</a></li>
                        <li><a href="tables-responsive.html">Responsive Table</a></li>
                        <li><a href="tables-editable.html">Editable Table</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-album"></i>
                        <span>Icons</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="icons-materialdesign.html">Material Design</a></li>
                        <li><a href="icons-ion-icons.html">Ion Icons</a></li>
                        <li><a href="icons-fontawesome.html">Font Awesome</a></li>
                        <li><a href="icons-themify-icons.html">Themify Icons</a></li>
                        <li><a href="icons-dripicons.html">Dripicons</a></li>
                        <li><a href="icons-typicons.html">Typicons Icons</a></li>
                    </ul>
                </li>

                <li>
                    <a href="calendar.html" class="waves-effect">
                        <i class="mdi mdi-calendar-check"></i>
                        <span>Calendar</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-google-maps"></i>
                        <span>Maps</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="maps-google.html">Google Maps</a></li>
                        <li><a href="maps-vector.html">Vector Maps</a></li>
                    </ul>
                </li>

                <li class="menu-title text-uppercase">Extras</li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="mdi mdi-page-layout-sidebar-left"></i>
                        <span class="badge bg-warning float-end">New</span>
                        <span>Layouts</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="javascript: void(0);" class="has-arrow">Vertical</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="layouts-dark-sidebar.html">Dark Sidebar</a></li>
                                <li><a href="layouts-sidebar-user.html">Sidebar With User</a></li>
                                <li><a href="layouts-icon-sidebar.html">Icon Sidebar</a></li>
                                <li><a href="layouts-compact-sidebar.html">Compact Sidebar</a></li>
                                <li><a href="layouts-boxed.html">Boxed Layout</a></li>
                                <li><a href="layouts-page-title2.html">Page Title 2</a></li>
                            </ul>
                        </li>

                        <li><a href="javascript: void(0);" class="has-arrow">Horizontal</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="layouts-horizontal.html">Horizontal</a></li>
                                <li><a href="layouts-hori-topbarlight.html">Topbar Light</a></li>
                                <li><a href="layouts-hori-boxed.html">Boxed Layout</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-file-document-multiple"></i>
                        <span>Pages</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="pages-login.html">Login</a></li>
                        <li><a href="pages-register.html">Register</a></li>
                        <li><a href="pages-recoverpw.html">Recover Password</a></li>
                        <li><a href="pages-lock-screen.html">Lock Screen</a></li>
                        <li><a href="pages-timeline.html">Timeline</a></li>
                        <li><a href="pages-invoice.html">Invoice</a></li>
                        <li><a href="pages-directory.html">Directory</a></li>
                        <li><a href="pages-starter.html">Starter Page</a></li>
                        <li><a href="pages-pricing.html">Pricing <span class="badge bg-soft-warning text-warning float-end">New</span> </a></li>
                        <li><a href="pages-error404.html">Error 404</a></li>
                        <li><a href="pages-error500.html">Error 500</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-file-tree"></i>
                        <span>Multi Level</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="javascript: void(0);">Level 1.1</a></li>
                        <li><a href="javascript: void(0);" class="has-arrow">Level 1.2</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="javascript: void(0);">Level 2.1</a></li>
                                <li><a href="javascript: void(0);">Level 2.2</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

            </ul> -->
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->