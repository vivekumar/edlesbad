 <!-- ========== Left Sidebar Start ========== -->
 <div class="vertical-menu">

<div data-simplebar class="h-100">

    <!--- Sidemenu -->
    <div id="sidebar-menu">
        <!-- Left Menu Start -->
        <ul class="metismenu list-unstyled" id="side-menu">
            <!-- <li class="menu-title">Main</li> -->

            @if (Auth::guard('websadmin')->check())
            <li>
                <a href="{{route('admin')}}" class="waves-effect @yield('admin_dashboard')" >
                    <!-- <span class="badge rounded-pill bg-primary float-end">20+</span> -->
                    <i class="mdi mdi-view-dashboard"></i>
                    <!-- <span> Dashboard </span> -->
                    <span> @lang('backendmsg.admin_sidbar_01') </span>
                </a>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="mdi mdi-account"></i>
                    <!-- <span>Manage users</span> -->
                    <span> @lang('backendmsg.admin_sidbar_06') </span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{route('admin.users.index')}}">@lang('backendmsg.admin_sidbar_07')</a></li>
                    <li><a href="{{route('admin.roles.index')}}">@lang('backendmsg.admin_sidbar_08')</a></li>
                    <li><a href="{{route('admin.permission.index')}}">@lang('backendmsg.admin_sidbar_09')</a></li>
                    <li><a href="{{route('admin.rolepermission.index')}}">Assign Role to Permission</a></li>
                </ul>
            </li>

            <!-- <li>
                <a href="{{route('admin.language.index')}}" class="waves-effect @yield('country_lang')">
                    <i class="mdi mdi-flag-variant"></i>
                    <span>Language</span>
                </a>
            </li> -->

            <li>
                <a href="{{route('admin.category.index')}}" class="waves-effect @yield('category')">
                    <i class="mdi mdi-menu"></i>
                    <!-- <span>Category</span> -->
                    <span>@lang('backendmsg.admin_sidbar_19')</span>
                </a>
            </li>


            <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-menu"></i>
                        <!-- <span> Home page </span> -->
                        <span>@lang('backendmsg.admin_sidbar_17') </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('admin.home.image')}}">@lang('backendmsg.admin_sidbar_18')</a></li>
                        <li><a href="{{route('admin.home.footerimage')}}">@lang('backendmsg.admin_sidbar_20')</a></li>
                        <li><a href="{{route('admin.home.section')}}">@lang('backendmsg.admin_sidbar_21')</a></li>
                        <li><a href="{{route('admin.clientsays.index')}}">Client testimonial</a></li>
                    </ul>
                </li>


            <?php /* 
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-menu"></i>
                        <!-- <span> Pages content </span> -->
                        <span> @lang('backendmsg.admin_sidbar_10') </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{-- route('admin.home.content') --}}">@lang('backendmsg.admin_sidbar_11')</a></li> <!-- Home -->
                        <li><a href="javascript:void(0);">@lang('backendmsg.admin_sidbar_12')</a></li> <!-- Comparisan -->
                        <li><a href="javascript:void(0);">@lang('backendmsg.admin_sidbar_13')</a></li> <!-- About Us -->
                        <li><a href="javascript:void(0);">@lang('backendmsg.admin_sidbar_14')</a></li> <!-- Contact us -->
                        <li><a href="javascript:void(0);">@lang('backendmsg.admin_sidbar_15')</a></li> <!-- all page images us -->
                        <li><a href="javascript:void(0);">@lang('backendmsg.admin_sidbar_16')</a></li> <!-- Others page content -->
                    </ul>
                </li>
            */ ?>
            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="mdi mdi-account"></i>
                    <!-- <span> Profile </span> -->
                    <span> @lang('backendmsg.admin_sidbar_02') </span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><!--<i class="fas fa-user"></i>--><a href="{{route('admin.profile')}}">@lang('backendmsg.admin_sidbar_02')</a></li>
                    <li><!--<i class="fas fa-user-edit"></i>--><a href="{{route('admin.edit.profile')}}">@lang('backendmsg.admin_sidbar_03')</a></li>
                    <li><!--<i class="fas fa-user-plus"></i>--><a href="{{route('admin.edit.password')}}">@lang('backendmsg.admin_sidbar_04')</a></li>
                </ul>
            </li>

            <li>
                <a href="{{route('admin.logout')}}" class="waves-effect">
                    <i class="mdi mdi-logout"></i>
                    <!-- <span>Logout</span> -->
                    <span> @lang('backendmsg.admin_sidbar_05') </span>
                </a>
            </li>
            @endif
            @if (Auth::guard('web')->check())
                <li>
                    <a href="{{route('user.dashboard')}}" class="waves-effect @yield('user_dashboard')" >
                        <!-- <span class="badge rounded-pill bg-primary float-end">20+</span> -->
                        <i class="mdi mdi-view-dashboard"></i>
                        <span> User Dashboard </span>
                    
                    </a>
                </li>
                @if(!empty($per_list))
                    @if(!empty($per_list->permission))
                        @foreach($per_list->permission as $list)
                            <li>
                                <a href="javascript:void(0)" class="waves-effect">
                                    <!-- <i class="mdi mdi-logout"></i> -->
                                    <!-- <span>Logout</span> -->
                                    <span> {{ $list->per_name }}</span>
                                </a>
                            </li>
                        @endforeach
                    @endif
                @endif
            
                <li>
                    <a href="{{route('user.logout')}}" class="waves-effect">
                        <i class="mdi mdi-logout"></i>
                        <!-- <span>Logout</span> -->
                        <span> @lang('backendmsg.admin_sidbar_05') </span>
                    </a>
                </li>
            @endif
            <!-- <li class="menu-title">Components</li> -->

            <!-- <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="mdi mdi-buffer"></i>
                    <span>User Interface </span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="ui-buttons.html">Buttons</a></li>
                    <li><a href="ui-colors.html">Colors</a></li>
                    <li><a href="ui-cards.html">Cards</a></li>
                    <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a></li>
                    <li><a href="ui-modals.html">Modals</a></li>
                    <li><a href="ui-images.html">Images</a></li>
                    <li><a href="ui-alerts.html">Alerts</a></li>
                    <li><a href="ui-progressbars.html">Progress Bars</a></li>
                    <li><a href="ui-dropdowns.html">Dropdowns</a></li>
                    <li><a href="ui-lightbox.html">Lightbox</a></li>
                    <li><a href="ui-navs.html">Navs</a></li>
                    <li><a href="ui-pagination.html">Pagination</a></li>
                    <li><a href="ui-popover-tooltips.html">Popover &amp; Tooltips</a></li>
                    <li><a href="ui-badge.html">Badge</a></li>
                    <li><a href="ui-carousel.html">Carousel</a></li>
                    <li><a href="ui-video.html">Video</a></li>
                    <li><a href="ui-typography.html">Typography</a></li>
                    <li><a href="ui-sweet-alert.html">Sweet-Alert</a></li>
                    <li><a href="ui-grid.html">Grid</a></li>
                    <li><a href="ui-animation.html">Animation</a></li>
                    <li><a href="ui-highlight.html">Highlight</a></li>
                    <li><a href="ui-rating.html">Rating</a></li>
                    <li><a href="ui-nestable.html">Nestable</a></li>
                    <li><a href="ui-alertify.html">Alertify</a></li>
                    <li><a href="ui-rangeslider.html">Range Slider</a></li>
                    <li><a href="ui-sessiontimeout.html">Session Timeout</a></li>
                </ul>
            </li> -->

            <!-- <li>
                <a href="javascript: void(0);" class="waves-effect">
                    <span class="badge rounded-pill bg-success float-end">9</span>
                    <i class="mdi mdi-clipboard-outline"></i>
                    <span>Forms</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="form-elements.html">Form Elements</a></li>
                    <li><a href="form-validation.html">Form Validation</a></li>
                    <li><a href="form-advanced.html">Form Advanced</a></li>
                    <li><a href="form-wizard.html">Form Wizard</a></li>
                    <li><a href="form-editors.html">Form Editors</a></li>
                    <li><a href="form-uploads.html">Form File Upload</a></li>
                    <li><a href="form-mask.html">Form Mask</a></li>
                    <li><a href="form-xeditable.html">Form Xeditable</a></li>
                </ul>
            </li> -->

            <!-- <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="mdi mdi-chart-line"></i>
                    <span>Charts</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="charts-morris.html">Morris Chart</a></li>
                    <li><a href="charts-chartist.html">Chartist Chart</a></li>
                    <li><a href="charts-chartjs.html">Chartjs Chart</a></li>
                    <li><a href="charts-flot.html">Flot Chart</a></li>
                    <li><a href="charts-c3.html">C3 Chart</a></li>
                    <li><a href="charts-sparkline.html">Sparkline Chart</a></li>
                    <li><a href="charts-other.html">Jquery Knob Chart</a></li>
                    <li><a href="charts-peity.html">Peity Chart</a></li>
                </ul>
            </li> -->

            <!-- <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="mdi mdi-format-list-bulleted-type"></i>
                    <span>Tables</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="tables-basic.html">Basic Tables</a></li>
                    <li><a href="tables-datatable.html">Data Table</a></li>
                    <li><a href="tables-responsive.html">Responsive Table</a></li>
                    <li><a href="tables-editable.html">Editable Table</a></li>
                </ul>
            </li> -->

            <!-- <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="mdi mdi-album"></i>
                    <span>Icons</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="icons-material.html">Material Design</a></li>
                    <li><a href="icons-ion.html">Ion Icons</a></li>
                    <li><a href="icons-fontawesome.html">Font Awesome</a></li>
                    <li><a href="icons-themify.html">Themify Icons</a></li>
                    <li><a href="icons-dripicons.html">Dripicons</a></li>
                    <li><a href="icons-typicons.html">Typicons Icons</a></li>
                    <li><a href="icons-weather.html">Weather Icons</a></li>
                    <li><a href="icons-mobirise.html">Mobirise Icons</a></li>
                </ul>
            </li> -->

            <!-- <li>
                <a href="javascript: void(0);" class="waves-effect">
                    <span class="badge rounded-pill bg-danger float-end">2</span>
                    <i class="mdi mdi-google-maps"></i>
                    <span>Maps</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="maps-google.html">Google Map</a></li>
                    <li><a href="maps-vector.html">Vector Map</a></li>
                </ul>
            </li> -->

            <!-- <li class="menu-title">Extras</li> -->
            <!-- <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="mdi mdi-movie-filter-outline"></i>
                    <span>Layouts</span>
                </a>
                <ul class="sub-menu" aria-expanded="true">
                    <li>
                        <a href="javascript: void(0);" class="has-arrow">Vertical</a>
                        <ul class="sub-menu" aria-expanded="true">
                            <li><a href="layouts-light-sidebar.html">Light Sidebar</a></li>
                            <li><a href="layouts-compact-sidebar.html">Compact Sidebar</a></li>
                            <li><a href="layouts-icon-sidebar.html">Icon Sidebar</a></li>
                            <li><a href="layouts-boxed.html">Boxed Layout</a></li>
                            <li><a href="layouts-colored-sidebar.html">Colored Sidebar</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow">Horizontal</a>
                        <ul class="sub-menu" aria-expanded="true">
                            <li><a href="layouts-horizontal.html">Horizontal</a></li>
                            <li><a href="layouts-hori-topbar-light.html">Light Topbar</a></li>
                            <li><a href="layouts-hori-boxed.html">Boxed Layout</a></li>
                        </ul>
                    </li>
                </ul>
            </li> -->

            <!-- <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="mdi mdi-account-box"></i>
                    <span>Authentication</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="pages-login.html">Login</a></li>
                    <li><a href="pages-register.html">Register</a></li>
                    <li><a href="pages-recoverpw.html">Recover Password</a></li>
                    <li><a href="pages-lock-screen.html">Lock Screen</a></li>
                    <li><a href="pages-login-2.html">Login 2</a></li>
                    <li><a href="pages-register-2.html">Register 2</a></li>
                    <li><a href="pages-recoverpw-2.html">Recover Password 2</a></li>
                    <li><a href="pages-lock-screen-2.html">Lock Screen 2</a></li>
                </ul>
            </li> -->

            <!-- <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="mdi mdi-book-multiple-outline"></i>
                    <span>Extra Pages</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="pages-timeline.html">Timeline</a></li>
                    <li><a href="pages-invoice.html">Invoice</a></li>
                    <li><a href="pages-directory.html">Directory</a></li>
                    <li><a href="pages-blank.html">Blank Page</a></li>
                    <li><a href="pages-404.html">Error 404</a></li>
                    <li><a href="pages-500.html">Error 500</a></li>
                    <li><a href="pages-pricing.html">Pricing</a></li>
                    <li><a href="pages-gallery.html">Gallery</a></li>
                    <li><a href="pages-maintenance.html">Maintenance</a></li>
                    <li><a href="pages-coming-soon.html">Coming Soon</a></li>
                </ul>
            </li> -->

            <!-- <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="mdi mdi-cart-outline"></i>
                    <span>Ecommerce </span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="ecommerce-product-list.html">Product List</a></li>
                    <li><a href="ecommerce-product-grid.html">Product Grid</a></li>
                    <li><a href="ecommerce-order-history.html">Order History</a></li>
                    <li><a href="ecommerce-customers.html">Customers</a></li>
                    <li><a href="ecommerce-product-edit.html">Product Edit</a></li>
                </ul>
            </li> -->

            <!-- <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="mdi mdi-flask-outline"></i>
                    <span> Email Templates </span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="email-templates-basic.html">Basic Action Email</a></li>
                    <li><a href="email-templates-alert.html">Alert Email</a></li>
                    <li><a href="email-templates-billing.html">Billing Email</a></li>
                </ul>
            </li> -->

            <!-- <li class="menu-title">Help & Support</li> -->

            <!-- <li>
                <a href="faq.html" class="waves-effect">
                    <i class="mdi mdi-help-circle"></i>
                    <span> FAQ </span>
                </a>
            </li> -->

            <!-- <li>
                <a href="contact.html" class="waves-effect">
                    <span class="badge rounded-pill bg-warning float-end">3</span>
                    <i class="mdi mdi-face-agent"></i>
                    <span>   Contact  </span>
                </a>
            </li> -->

            <!-- <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="dripicons-network-1"></i>
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
            </li> -->

        </ul>
    </div>
    <!-- Sidebar -->
</div>
</div>
<!-- Left Sidebar End -->