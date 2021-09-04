<!DOCTYPE html>

<html lang="en">

	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title> Login </title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

     	<!--begin:: Global Optional Vendors -->
		
		<link href="{{asset('Front_End')}}/admin/css/animate.min.css" rel="stylesheet" type="text/css" />
		<link href="{{asset('Front_End')}}/admin/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
		<link href="{{asset('Front_End')}}/admin/flaticon/css/flaticon.css" rel="stylesheet" type="text/css" />
		<link href="{{asset('Front_End')}}/admin/metronic/css/styles.css" rel="stylesheet" type="text/css" />
		<link href="{{asset('Front_End')}}/admin/fontawesome5/css/all.min.css" rel="stylesheet" type="text/css" />

		<!--end:: Global Optional Vendors -->

		
		<!--RTL version:
		     <link href="{{asset('Front_End')}}/admin/css/style.bundle.css" rel="stylesheet" type="text/css" />
		-->
		 
		<link href="{{asset('Front_End')}}/admin/css/style.bundle.min.css" rel="stylesheet" type="text/css" />

		<!--end::Global Theme Styles -->
        <link rel="shortcut icon" href="{{asset('Front_End')}}/admin/img/logo/ls.png" />
        
        <link href="{{asset('Front_End/admin/css')}}/droidarabickufi.css" rel="stylesheet" type="text/css" />


    <style>
        body,html,h1,h2,h3,h4,h5,h6,p,a, span,li,.m-portlet__head-text,.btn-primary,label {
                font-family: 'DroidArabicKufiRegular', sans-serif !important;
                font-size: 15px;
            }

            label {
                
                font-weight: 500 !important;
            }

            ::-webkit-input-placeholder {
                /* Chrome/Opera/Safari */
                font-family: 'DroidArabicKufiRegular', sans-serif !important;
            }
            ::-moz-placeholder {
                /* Firefox 19+ */
                font-family: 'DroidArabicKufiRegular', sans-serif !important;
            }
            :-ms-input-placeholder {
                /* IE 10+ */
                font-family: 'DroidArabicKufiRegular', sans-serif !important;
            }
            :-moz-placeholder {
                /* Firefox 18- */
                font-family: 'DroidArabicKufiRegular', sans-serif !important;
            }

            select option {
                font-family: 'DroidArabicKufiRegular', sans-serif !important;
            }

            select {
                font-family: 'DroidArabicKufiRegular', sans-serif !important;
                height: 48px !important;
            }


          .table-responsive { overflow-x:hidden }

          .m-checkbox>span:after {
            -webkit-transform: rotate(45deg) !important;
            transform: rotate(45deg) !important;
            }
          
            .m-checkbox>span:after {
                -webkit-transform: rotate(45deg) !important;
                transform: rotate(45deg) !important;
                }
        </style>
		
	</head>

<!-- end::Head -->

<!-- begin::Body -->

<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

    <!-- begin:: Page -->
    <div class="m-grid m-grid--hor m-grid--root m-page">
        <div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-2" id="m_login" style="background-image: url({{asset('Front_End')}}/admin/img/logo/bg-3.jpg);">
            <div class="m-grid__item m-grid__item--fluid	m-login__wrapper">
                <div class="m-login__container">
                   
                    @include('flash-message') 
                       
                       
                    @if ($message = Session::get('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                            <strong>{{ $message }}</strong>
                    </div>
                    @endif
                            

                    <div class="m-login__signin" style="margin-top: 100px">

                        <div class="m-login__head">
                            <h3 class="m-login__title">Welcome To Dashboard</h3>
                        </div>

                        {!! Form::open(array('url' => 'provider/login', 'class'=> 'm-login__form m-form','role'=>'form','id'=>'form')) !!}

                        <div class="form-group m-form__group">
                            <input class="form-control m-input" type="email" placeholder="please enter email ... " name="email" autocomplete="true" value="{{ old('email') }}" required="required">
                        </div>
                        <div class="form-group m-form__group">
                            <input class="form-control m-input m-login__form-input--last" type="password" placeholder="please enter password ..." name="password" required="required">
                        </div>

                        <div class="row m-login__form-sub">
                            <div class="col m--align-left">
                                <label class="m-checkbox m-checkbox--focus">
                                    <input type="checkbox" name="remember"> Remember Me
                                    <span></span>
                                </label>
                            </div>
                            
                        </div>

                        <div class="m-login__form-action">
                            <button class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air" type="submit">Login</button>
                        </div>

                        {!! Form::close() !!}

                    </div>

                    

                </div>
            </div>
        </div>
    </div>

    <!-- end:: Page -->

    <!--begin:: Global Mandatory Vendors -->
		<script src="{{asset('Front_End')}}/admin/js/jquery.min.js" type="text/javascript"></script>
		
		<script src="{{asset('Front_End')}}/admin/js/bootstrap.min.js" type="text/javascript"></script>
		
		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		
		<script src="{{asset('Front_End')}}/admin/js/jquery.form.min.js" type="text/javascript"></script>
		<script src="{{asset('Front_End')}}/admin/js/jquery.validate.min.js" type="text/javascript"></script>
		<script src="{{asset('Front_End')}}/admin/js/additional-methods.js" type="text/javascript"></script>
		<script src="{{asset('Front_End')}}/admin/js/jquery-validation.init.js" type="text/javascript"></script>
		
		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Bundle -->
		<script src="{{asset('Front_End')}}/admin/js/scripts.bundle.min.js" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->

		<!--begin::Page Scripts -->
		<script src="{{asset('Front_End')}}/admin/js/login.min.js" type="text/javascript"></script>

		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>