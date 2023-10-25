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
    <link rel="shortcut icon" href="front_end/assets/media/logos/favicon.ico" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{THEMES_PAGE}/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="{THEMES_PAGE}/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <link href="{THEMES_PAGE}/assets/css/main.css" rel="stylesheet">
    <link href="{THEMES_PAGE}/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

    <!--end::Global Stylesheets Bundle-->
</head>


<body id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu" data-bs-offset="200"
    class="bg-white position-relative">
    <!--begain:loding -->
    <div id="preloader">
        <div class="loading ">
            <img src="{THEMES_PAGE}/assets/media/loading.gif" width="80">
            <p>harap tunggu...</p>
        </div>
    </div>
    <!--begin::Body-->
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Header Section-->
        <div class="mb-2 " id="home">
            <!--begin::Wrapper-->
            <div class="" style="background-color: #161936">
                <div class="container">
                    <div class=" px-3 py-3 text-end">
                        <a href="#" class="fab fs-4 fa-facebook-square px-3"></a>
                        <a href="#" class="fab fs-4 fa-twitter px-3"></a>
                        <a href="#" class="fab fs-4 fa-pinterest-p px-3"></a>
                        <a href="#" class="fab fs-4 fa-instagram px-3"></a>
                    </div><!-- /.topbar__right -->
                </div>

            </div>
            <!--begin::Header-->
            <div class="landing-header " data-kt-sticky="true" data-kt-sticky-name="landing-header" data-kt-sticky-offset="{default: '200px', lg: '100px'}">
                <!--begin::Container-->
                <div class="container-xxl ">
                    <!--begin::Wrapper-->
                    {!CLIENT_HEADER_SECTION!}
                    <!--end::Container-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Landing hero-->
            <!--end::Wrapper-->
            <!--end::Header Section-->
        </div>
        <!--begin::How It Works Section-->
        <!--Begain::spactor-->
        <div class="separator border-1" st>
            <img src="{THEMES_PAGE}/assets/media/BG-HEAD.png" class="img-fluid" alt="..." style="width: 100%; height: 310px;">
        </div>
        <!--end::spactor-->
        <div class="pb-15">
            <!--begin::Container-->
            <div class="container-xxl mt-4">
                <div class="row" data-bs-spy="scroll" data-bs-target="" data-bs-offset="0" tabindex="0">
                    <div class="col-lg-3 col-md-4 col-sm-3 mb-4">
                        
                        {!CLIENT_MENU_DESKTOP!}

                    </div>

                    <div class="col-lg-9 col-md-8 col-sm-9">
                        {!CLIENT_APPLY_LIST!}
                    </div>
                    <!--end::Page-->

                </div>
            </div>

            <!--end::Author-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Menu-->
    
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

    <!--end-->
    </div>
    <!--end::Main-->
    <script>var hostUrl = "{THEMES_PAGE}/assets/";</script>
    <!--begin::Javascript-->
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="{THEMES_PAGE}/assets/plugins/global/plugins.bundle.js"></script>
    <script src="{THEMES_PAGE}/assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Vendors Javascript(used by this page)-->
    <script src="{THEMES_PAGE}/assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <!--end::Page Vendors Javascript-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="{THEMES_PAGE}/assets/js/public_scripts.js"></script>
    <script src="{THEMES_PAGE}/assets/js/custom/documentation/documentation.js"></script>
    <script src="{THEMES_PAGE}/assets/js/custom/documentation/search.js"></script>
    <script src="{THEMES_PAGE}/assets/js/public_scripts.js"></script>
    <!--end::Page Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>