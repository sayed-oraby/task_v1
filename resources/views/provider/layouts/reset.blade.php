<!DOCTYPE html>

<html lang="en">

	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title> Reset Password </title>
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
		 
		<link href="{{asset('Front_End')}}/admin/css/style.bundle.rtl.min.css" rel="stylesheet" type="text/css" />

		<!--end::Global Theme Styles -->
		<link rel="shortcut icon" href="{{asset('Front_End')}}/admin/img/logo/ls.png" />
		
	</head>

<!-- end::Head -->

<!-- begin::Body -->

<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">


    <!-- begin:: Page -->
    <div class="m-grid m-grid--hor m-grid--root m-page">
        <div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-2" id="m_login" style="background-image: url({{asset('Front_End')}}/admin/img/logo/bg-3.jpg);">
            <div class="m-grid__item m-grid__item--fluid	m-login__wrapper">
                <div class="m-login__container">
                    

                    <div class="m-login__signin">

                        <div class="m-login__head">
                            
                            <h3 class="m-login__title">Reset Password</h3> 
                            
                            @include('flash-message') 
                            
                            @if( Session::has('status') )
                            <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-bottom: -40px;margin-top: 20px">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                                <strong>{{ Session::get('status') }}</strong>
                            </div>
                            @endif
                        </div>



                        <form method="POST" action="{{ route('provider.password.request') }}" class="m-login__form m-form">
                             @csrf
                         
                             <input type="hidden" name="token" value="{{ $token }}">
                             
                             <div class="form-group m-form__group">
                                 <input id="email" type="email" class="form-control m-input{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email" name="email" value="{{ $email ?? old('email') }}" required autofocus  autocomplete="off">
                                 @if ($errors->has('email'))
                                     <span class="invalid-feedback" role="alert">
                                         <strong>{{ $errors->first('email') }}</strong>
                                     </span>
                                 @endif
                             </div>
                             <div class="form-group m-form__group">
                                 <input id="password" type="password" class="form-control m-input m-login__form-input--last{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>
                                 @if ($errors->has('password'))
                                     <span class="invalid-feedback" role="alert">
                                         <strong>{{ $errors->first('password') }}</strong>
                                     </span>
                                 @endif
                             </div>
                         
                             <div class="form-group m-form__group">
                                 <input id="password-confirm" type="password" class="form-control m-input m-login__form-input--last" name="password_confirmation" placeholder="Repeat Password" required>
                             </div>
                         
                             <div class="m-login__form-action">
                                 <button type="submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn m-login__btn--primary">
                                     Reset Password
                                 </button>
                             </div>
                         
                         </form>
                        
                        
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