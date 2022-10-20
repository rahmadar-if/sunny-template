
<!DOCTYPE html>
<html lang="en"  >
    <head>
        <meta charset="utf-8"/>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="3FMdjbpJJMfY148oq7VwJdj0AnH0S4tXFmPdXpeY">

        
        <title>Sunny Sidasi KPPU</title>

        
        {{-- <meta name="description" content=""/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/> --}}
        
        <link rel="shortcut icon" href="https://sunny-crm.bpmonline.asia/favicon.png" />
        
		<link rel="stylesheet" href="https://sunny-crm.bpmonline.asia/cloudme.fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">
		
        <link rel="stylesheet" type="text/css" href="https://sunny-crm.bpmonline.asia/css/app.css" >
        
        <link href="https://sunny-crm.bpmonline.asia/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
        <link href="https://sunny-crm.bpmonline.asia/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css"/>
        <link href="https://sunny-crm.bpmonline.asia/css/style.bundle.css" rel="stylesheet" type="text/css"/>

        <link href="https://sunny-crm.bpmonline.asia/css/themes/layout/header/base/light.css" rel="stylesheet" type="text/css"/>
        <link href="https://sunny-crm.bpmonline.asia/css/themes/layout/header/menu/light.css" rel="stylesheet" type="text/css"/>
        <link href="https://sunny-crm.bpmonline.asia/css/themes/layout/aside/sunny.css" rel="stylesheet" type="text/css"/>
        <link href="https://sunny-crm.bpmonline.asia/css/themes/layout/brand/sunny.css" rel="stylesheet" type="text/css"/>


            </head>

    <body class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading" id="kt_login">
        
        <div class="d-flex flex-column flex-root">
            <div class="login login-4 wizard d-flex flex-column flex-lg-row flex-column-fluid wizard" id="kt_login">
                <div class="login-container d-flex flex-center flex-row flex-row-fluid order-2 order-lg-1 flex-row-fluid bg-white py-lg-0 pb-lg-0 pt-15 pb-12">
                    <div class="login-content login-content-signup d-flex flex-column" style="margin-left: 20%">
                        <div class="login-logo pb-lg-4 pb-20">
                                <img src="assets/media/logos/logo-gray.png" class="max-h-60px" alt="" style="margin-left:25px"/>
                        </div>
                        <div class="login-form" style="width: ">
                            <form action="/login" method="post" class="form px-10" id="kt_sign_in_form" action="#">
                                @csrf
                                <!--begin::Heading-->
                                {{-- <div class="text-center mb-10">
                                    <!--begin::Title-->
                                    <h1 class="text-dark mb-3">Sunny System</h1>
                                    <!--end::Title-->
                                    <!--begin::Link-->
                                    <div class="text-gray-400 fw-bold fs-4">New Here?
                                    <a href="../../demo1/dist/authentication/flows/basic/sign-up.html" class="link-primary fw-bolder">Create an Account</a></div>
                                    <!--end::Link-->
                                </div> --}}
                                <!--begin::Heading-->
    
                                <!--begin::Input group-->
                                <div class="fv-row mb-10" style="width: 60%">
                                    <!--begin::Label-->
                                    <label
                                        class="font-size-h6 font-weight-bolder text-dark form-label fs-6 fw-bolder @error('email') is-invalid @enderror">Username</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input value="{{ old('email') }}" class="form-control form-control-lg form-control-solid"
                                        type="email" name="email" autocomplete="off" placeholder="example@Sunny" autofocus
                                        required />
                                    <!--end::Input-->
                                    @error('email')
                                        <h6 class="text-danger invalid-feedback">{{ $message }}</h6>
                                    @enderror
                                </div>
                                <!--end::Input group-->
    
                                <!--begin::Input group-->
                                <div class="fv-row mb-10" style="width: 60%">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-stack mb-2">
                                        <!--begin::Label-->
                                        <label class=" font-size-h6 font-weight-bolder text-darkform-label fw-bolder fs-6 mb-0">Password</label>
                                        <!--end::Label-->
                                        <!--begin::Link-->
                                        {{-- <a href="" class="link-primary fs-6 fw-bolder">Forgot Password ?</a> --}}
                                        <!--end::Link-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Input-->
                                    <input
                                        class="form-control form-control-lg form-control-solid @error('email') is-invalid @enderror"
                                        type="password" name="password" autocomplete="off" placeholder="insert Password"
                                        required />
                                    @error('password')
                                        <h6 class="text-danger invalid-feedback">{{ $message }}</h6>
                                    @enderror
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
    
                                <!--begin::Actions-->
                                <div class="text-center" style="width: 60%">
                                    <!--begin::Submit button-->
                                    <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 my-5">
                                        <span class="indicator-label">Continue</span>
                                    </button>
                                    <!--end::Submit button-->
                                </div>
                                <!--end::Actions-->
                            </form>
                        </div>
                    </div>
                </div>
         
                <div class="login-aside order-1 order-lg-2 bgi-no-repeat bgi-position-x-right" >
                    <div class="login-conteiner bgi-no-repeat bgi-position-x-right bgi-position-y-bottom" style="background-color: #FBA733;">
                        <div class="login-logo pb-lg-4 pb-20" style="text-align: center;">
                            {{-- <img src="assets/media/logos/logo.png" style="margin-top: 50%; width:60%" alt=""/> --}}
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>

        <script>
            const APP_URL = "https:\/\/sunny-crm.bpmonline.asia";
        </script>

        <script>
            var HOST_URL = "https://sunny-crm.bpmonline.asia/metronic/quick-search";
        </script>

        
        <script>
            var KTAppSettings = {
    "breakpoints": {
        "sm": 576,
        "md": 768,
        "lg": 992,
        "xl": 1200,
        "xxl": 1200
    },
    "colors": {
        "theme": {
            "base": {
                "white": "#ffffff",
                "primary": "#6993FF",
                "secondary": "#E5EAEE",
                "success": "#1BC5BD",
                "info": "#8950FC",
                "warning": "#FFA800",
                "danger": "#F64E60",
                "light": "#F3F6F9",
                "dark": "#212121"
            },
            "light": {
                "white": "#ffffff",
                "primary": "#E1E9FF",
                "secondary": "#ECF0F3",
                "success": "#C9F7F5",
                "info": "#EEE5FF",
                "warning": "#FFF4DE",
                "danger": "#FFE2E5",
                "light": "#F3F6F9",
                "dark": "#D6D6E0"
            },
            "inverse": {
                "white": "#ffffff",
                "primary": "#ffffff",
                "secondary": "#212121",
                "success": "#ffffff",
                "info": "#ffffff",
                "warning": "#ffffff",
                "danger": "#ffffff",
                "light": "#464E5F",
                "dark": "#ffffff"
            }
        },
        "gray": {
            "gray-100": "#F3F6F9",
            "gray-200": "#ECF0F3",
            "gray-300": "#E5EAEE",
            "gray-400": "#D6D6E0",
            "gray-500": "#B5B5C3",
            "gray-600": "#80808F",
            "gray-700": "#464E5F",
            "gray-800": "#1B283F",
            "gray-900": "#212121"
        }
    },
    "font-family": "Poppins"
};
        </script>

        
        <script src="https://sunny-crm.bpmonline.asia/plugins/global/plugins.bundle.js" type="text/javascript"></script>
        <script src="https://sunny-crm.bpmonline.asia/plugins/custom/prismjs/prismjs.bundle.js" type="text/javascript"></script>
        <script src="https://sunny-crm.bpmonline.asia/js/scripts.bundle.js" type="text/javascript"></script>
        <script src="https://sunny-crm.bpmonline.asia/js/app.js" type="text/javascript"></script>
				
		<script type="module" src="https://sunny-crm.bpmonline.asia/js/app/auth/login.js"></script>
        
    </body>
</html>


<!--begin::sweet alert-->
@include('sweetalert::alert')
<!--end::sweet alert-->