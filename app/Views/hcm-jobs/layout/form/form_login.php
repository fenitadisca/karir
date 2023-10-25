<!DOCTYPE html>
<!--
Author: Keenthemes
-->
<html lang="en">
<!--begin::Head-->

<head>
    <base href="../../../">
    <title> 1011 &amp; </title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="" />
    <meta charset="utf-8" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title"
        content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="{THEMES_PAGE}/assets/media/logos/favicon.ico" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{THEMES_PAGE}/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="{THEMES_PAGE}/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <link href="{THEMES_PAGE}/assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begain:loding -->
<div id="preloader">
    <div class="loading ">
        <img src="{THEMES_PAGE}/assets/media/loading.gif" width="80">
        <p>harap tunggu...</p>
    </div>
</div>
<!--end:loading-->


<!--begin::Body-->

<body id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu" data-bs-offset="200"
    class="bg-white position-relative">
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Header Section-->
        <div class="mb-0" id="home">

            {!HEADER_SECTION!}

            <!--begin::Container-->
            <div class="container-xxl">
                <div class="d-flex flex-center flex-column flex-column-fluid p-0 pb-lg-10">
                    <div class="separator border-1 " st>
                        <img class="rounded" src="{THEMES_PAGE}/assets/media/BG-HEAD.png" class="img-fluid" alt="..."
                            style="width: 100%; height: 300px;">
                    </div>
                    <div class="w-lg-500px w-sm-500px card shadow-sm bg-body pt-10 p-10 mt-6">
                        <!--start:Form-->
                        <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" action="#" method="post">
                            <!--begin::Heading-->
                            <div class="mb-10">
                                <!--begin::Title-->
                                <h1 class="text-dark mb-3"> Masuk dan Melamar
                                </h1>
                                <!--end::Title-->
                                <!--begin::Link-->
                                <div class="text-gray-400 fw-bold fs-4">Belum punya akun?
                                    <a href="{SITE_URL}register" class="link-primary fw-bolder">buat akun baru
                                        disini</a>
                                </div>
                                <!--end::Link-->
                            </div>
                            <!--begin::Heading-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-10">
                                <!--begin::Label-->
                                <label class="form-label fs-6 fw-bolder text-dark">Email</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input class="form-control form-control-sm form-control-solid" type="text" name="email"
                                    autocomplete="off" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-stack mb-2">
                                    <!--begin::Label-->
                                    <label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
                                    <!--end::Label-->
                                    <!--begin::Link-->
                                    <a href="{SITE_URL}forget" class="link-primary fs-6 fw-bolder">Lupa Password ?</a>
                                    <!--end::Link-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Input-->
                                <input class="form-control form-control-sm form-control-solid" type="password"
                                    name="password" autocomplete="off" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="text-center">
                                <!--begin::Submit button-->
                                <button href="user.html" type="submit" id="kt_sign_in_submit"
                                    class="btn btn-lg btn-primary w-100 mb-5">
                                    <span class="indicator-label">Masuk & Melamar</span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                                <!--end::Submit button-->
                            </div>
                            <!--end::Actions-->
                        </form>
                    </div>
                </div>
            </div>
            <!--end::Container-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Header Section-->
    <!--begin::How It Works Section-->
    <!--end::Main-->

    {!FOOTER_SECTION!}
    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
        <span class="svg-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)"
                    fill="black" />
                <path
                    d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                    fill="black" />
            </svg>
        </span>
        <!--end::Svg Icon-->
    </div>

    <!--begin::Curve bottom-->


    <script>
    var hostUrl = "{THEMES_PAGE}/assets/";
    </script>
    <!--begin::Javascript-->
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="{THEMES_PAGE}/assets/plugins/global/plugins.bundle.js"></script>
    <script src="{THEMES_PAGE}/assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Vendors Javascript(used by this page)-->
    <script src="{THEMES_PAGE}/assets/plugins/custom/fslightbox/fslightbox.bundle.js"></script>
    <script src="{THEMES_PAGE}/assets/plugins/custom/typedjs/typedjs.bundle.js"></script>
    <!--end::Page Vendors Javascript-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="{THEMES_PAGE}/assets/js/custom/landing.js"></script>
    <script src="{THEMES_PAGE}/assets/js/custom/authentication/sign-in/general.js"></script>
    <!--end::Page Custom Javascript-->
    <script src="{THEMES_PAGE}/assets/js/public_scripts.js"></script>
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>