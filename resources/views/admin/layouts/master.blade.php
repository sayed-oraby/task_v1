<!DOCTYPE html>

<html lang="en">
    <!-- begin::Head -->
    <head>
        <meta charset="utf-8" />
        <title>@yield('main_title')</title>
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" />

        @yield('meta')

       
		<link href="{{asset('Front_End')}}/admin/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
       
        <link href="{{asset('Front_End/admin/css/sweetalert.css')}}" rel="stylesheet" type="text/css" />

        <link href="{{asset('Front_End/admin/css')}}/datatables.bundle.min.css" rel="stylesheet" type="text/css" />

        <link href="{{asset('Front_End')}}/admin/css/style.bundle.min.css" rel="stylesheet" type="text/css" />
		 


        

        <style>

            body, html, h1, h2, h3, h4, h5, h6, p, a, li, .m-portlet__head-text, .btn-primary {
                font-family: 'Lato', sans-serif !important;
            }

            
            label {
                font-size: 18px !important;
                font-weight: 500 !important;
            }

            ::-webkit-input-placeholder {
                /* Chrome/Opera/Safari */
                font-family: 'Lato', sans-serif !important;
            }
            ::-moz-placeholder {
                /* Firefox 19+ */
                font-family: 'Lato', sans-serif !important;
            }
            :-ms-input-placeholder {
                /* IE 10+ */
                font-family: 'Lato', sans-serif !important;
            }
            :-moz-placeholder {
                /* Firefox 18- */
                font-family: 'Lato', sans-serif !important;
            }

            select option {
                font-family: 'Lato', sans-serif !important;
            }

            select {
                font-family: 'Lato', sans-serif !important;
                height: 48px !important;
            }

            .table-responsive {
                overflow-x: hidden;
            }

            .m-checkbox > span:after {
                -webkit-transform: rotate(45deg) !important;
                transform: rotate(45deg) !important;
            }

            .m-form .form-control-feedback { color:  red }
            
        </style>

        <link rel="shortcut icon" href="{{asset('Front_End')}}/admin/img/logo/ls.png" />

        @yield('header')

        <style>
            .m-aside-menu .m-menu__nav>.m-menu__item .m-menu__submenu .m-menu__item>.m-menu__heading .m-menu__link-text, 
            .m-aside-menu .m-menu__nav>.m-menu__item .m-menu__submenu .m-menu__item>.m-menu__link .m-menu__link-text {
                /*font-size: 15px*/
            }
        </style>

    </head>

    <!-- end::Head -->

    <!-- begin::Body -->
    <body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">
        <!-- begin:: Page -->
        <div class="m-grid m-grid--hor m-grid--root m-page">
            <!-- BEGIN: Header -->
            <header id="m_header" class="m-grid__item m-header" m-minimize-offset="200" m-minimize-mobile-offset="200">
                <div class="m-container m-container--fluid m-container--full-height">
                    <div class="m-stack m-stack--ver m-stack--desktop">
                        <!-- BEGIN: Brand -->
                        <div class="m-stack__item m-brand m-brand--skin-dark">
                            <div class="m-stack m-stack--ver m-stack--general">
                                <div class="m-stack__item m-stack__item--middle m-brand__logo">
                                    <a href="{{ url('/admin') }}" class="m-brand__logo-wrapper" style="font-size: 25px;color: #FFF;">
                                        Dashboard
                                    </a>
                                </div>
                                <div class="m-stack__item m-stack__item--middle m-brand__tools">
                                    <!-- BEGIN: Left Aside Minimize Toggle -->
                                    <a href="javascript:;" id="m_aside_left_minimize_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block">
                                        <span></span>
                                    </a>

                                    <!-- END -->

                                    <!-- BEGIN: Responsive Aside Left Menu Toggler -->
                                    <a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
                                        <span></span>
                                    </a>

                                    <!-- END -->

                                    <!-- BEGIN: Topbar Toggler -->
                                    <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
                                        <i class="flaticon-more"></i>
                                    </a>

                                    <!-- BEGIN: Topbar Toggler -->
                                </div>
                            </div>
                        </div>

                        <!-- END: Brand -->
                        <div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
                            <!-- BEGIN: Horizontal Menu -->
                            <button class="m-aside-header-menu-mobile-close m-aside-header-menu-mobile-close--skin-dark" id="m_aside_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
                            <div
                                id="m_header_menu"
                                class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-dark m-aside-header-menu-mobile--submenu-skin-dark"
                            ></div>

                            <!-- END: Horizontal Menu -->

                            <!-- BEGIN: Topbar -->
                            <div id="m_header_topbar" class="m-topbar m-stack m-stack--ver m-stack--general m-stack--fluid">
                                <div class="m-stack__item m-topbar__nav-wrapper">
                                    <ul class="m-topbar__nav m-nav m-nav--inline">
                                        <li
                                            class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light"
                                            m-dropdown-toggle="click"
                                        >
                                            <a href="#" class="m-nav__link m-dropdown__toggle">
                                                <span class="m-topbar__userpic">
                                                    <img src="{{asset('Front_End')}}/admin/img/ls.png" style="padding: 7px" class="m--img-rounded m--marginless" alt="" />
                                                </span>
                                                <span class="m-topbar__username m--hide">Nick</span>
                                            </a>

                                            <div class="m-dropdown__wrapper">
                                                <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                <div class="m-dropdown__inner">
                                                    <div class="m-dropdown__header m--align-center" style="background: url({{asset('Front_End')}}/admin/img/user_profile_bg.jpg); background-size: cover;">
                                                        <div class="m-card-user m-card-user--skin-dark">
                                                            <div class="m-card-user__pic">
                                                                <img src="{{asset('Front_End')}}/admin/img/ls.png" style="padding: 7px" class="m--img-rounded m--marginless" alt="" />
                                                            </div>
                                                            <div class="m-card-user__details">
                                                                <span class="m-card-user__name m--font-weight-500"> {{ Auth::guard('admin')->user()->name }} </span>
                                                                <a href="" class="m-card-user__email m--font-weight-300 m-link">
                                                                    {{ Auth::guard('admin')->user()->email }}
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="m-dropdown__body">
                                                        <div class="m-dropdown__content">
                                                            <ul class="m-nav m-nav--skin-light">
                                                                <li class="m-nav__item">
                                                                    <a href="{{ url('admin/logout') }}" class="btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">Logout</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- END: Topbar -->
                        </div>
                    </div>
                </div>
            </header>

            <!-- END: Header -->

            <!-- begin::Body -->
            <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
                <!-- BEGIN: Left Aside -->
                <button class="m-aside-left-close m-aside-left-close--skin-dark" id="m_aside_left_close_btn"><i class="la la-close"></i></button>
                <div id="m_aside_left" class="m-grid__item m-aside-left m-aside-left--skin-dark">
                    <!-- BEGIN: ---------------------- Aside Menu ---------------------- -->
                    @include('admin.layouts.inc')
                    <!-- END: ---------------------- Aside Menu ---------------------- -->
                </div>

                <!-- END: Left Aside -->
                <div class="m-grid__item m-grid__item--fluid m-wrapper">
                    <!-- BEGIN: Subheader -->
                    <div class="m-subheader">
                        <div class="d-flex align-items-center">
                            <div class="mr-auto">
                                <h3 class="m-subheader__title">
                                    @yield('sub_title')
                                </h3>
                            </div>
                        </div>
                    </div>

                    <!-- END: Subheader -->
                    <div class="m-content">
                        <div class="row">
                            <div class="col-xl-12">
                                <!-- Start: ------- Body -------------- -->

                                @yield('content')

                                <!-- END: ------- Body --------------- -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- end:: ---------------------- Body ---------------------- -->

            
        </div>

        <!-- end:: Page -->

        <!-- begin::Scroll Top -->
        <div id="m_scroll_top" class="m-scroll-top">
            <i class="la la-arrow-up"></i>
        </div>

        <!-- end::Scroll Top -->

        <!--begin:: Global Mandatory Vendors -->
        <script src="{{asset('Front_End/admin/js')}}/jquery.min.js" type="text/javascript"></script>
        <script src="{{asset('Front_End/admin/js')}}/popper.js" type="text/javascript"></script>
        <script src="{{asset('Front_End/admin/js')}}/bootstrap.min.js" type="text/javascript"></script>
        <script src="{{asset('Front_End/admin/js')}}/scripts.bundle.min.js" type="text/javascript"></script>

       
        <script src="{{asset('Front_End/admin/js')}}/sweetalert.min.js"></script>
        <script src="{{asset('Front_End/admin/js')}}/perfect-scrollbar.min.js"></script>
        <script src="{{asset('Front_End/admin/js')}}/datatables.bundle.min.js" type="text/javascript"></script>

        @yield('footer')

        <!--end::Global Theme Bundle -->
    </body>

    <!-- end::Body -->
</html>
