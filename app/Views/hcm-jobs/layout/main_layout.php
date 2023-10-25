<!DOCTYPE html>
<html lang="id">
<!--begin::Head-->

<head>
    <base href="{!BASE_URL!}">
    <title>{!PAGE_TITLE!}</title>
    <meta name="description" content="{!META_DESC!}" />
    <meta name="keywords" content="{!META_KEYWORDS!}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta property="og:locale" content="id_ID" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{!PAGE_TITLE!}" />
    <meta property="og:url" content="{!SITE_URL!}" />
    <meta property="og:site_name" content="Karir di 1011" />
    <link rel="canonical" href="{!CANONICAL_URL!}" />
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

<body id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu" data-bs-offset="200"
    class="bg-white position-relative">
    <!--begin::Main-->
    <!--begin:loding -->
    <div id="preloader">
        <div class="loading ">
            <img src="{THEMES_PAGE}/assets/media/loading.gif" width="80">
            <p>harap tunggu...</p>
        </div>
    </div>

    {!HEADER_SECTION!}

    {!BODY_SECTION!}

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
    <!--end::Page Custom Javascript-->
    <script src="{THEMES_PAGE}/assets/js/public_scripts.js"></script>
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>