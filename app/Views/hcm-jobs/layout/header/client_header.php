                    <div class="d-flex align-items-center justify-content-between">
                        <!--begin::Logo-->
                        <div class="d-flex align-items-center flex-equal">
                            <!--begin::Mobile menu toggle-->
                            </button>
                            <!--end::Mobile menu toggle-->
                            <!--begin::Logo image-->
                            <a href="{SITE_URL}applicants">
                                <img alt="Logo" src="{THEMES_PAGE}/assets/media/logos/logo_1011_black.png" class="logo-default h-30px h-lg-30px" />
                                <img alt="Logo" src="{THEMES_PAGE}/assets/media/logos/logo_1011_black.png" class="logo-sticky h-20px h-lg-25px" />
                            </a>
                            <!--end::Logo image-->
                        </div>
                        <!--end::Logo-->
                        <!--begin::Toolbar-->
                        <div class="px-2 text-end ms-1">
                            <!--begin::User-->
                            <div class="d-flex align-items-center ms-3 ms-lg-4" id="kt_header_user_menu_toggle">
                                <!--begin::Menu- wrapper-->
                                <!--begin::User icon(remove this button to use user avatar as menu toggle)-->
                                <div class=" shadow btn btn-icon bg-body btn-color-gray-300 btn-active-color-primary btn-outline btn-outline-secondary w-30px h-30px w-lg-40px h-lg-40px"
                                    data-kt-menu-trigger="click" data-kt-menu-attach="parent"
                                    data-kt-menu-placement="bottom-end">
                                    <!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
                                    <div class=" symbol symbol450px">
                                        <div class="shadow border border-white rounded-circle symbol-label"
                                            style="background-image:url('{THEMES_PAGE}/assets/media/avatars/150-7.jpg')">
                                        </div>
                                    </div>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--end::User icon-->
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content d-flex align-items-center px-3">
                                            <!--begin::Username-->
                                            <div class=" d-flex flex-column">
                                                <div class="mx-5 fw-bolder d-flex align-items-center fs-5">{my_applicants_fullname}</div>
                                                <!--end::Username-->
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator my-2"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-5">
                                            <a href="{SITE_URL}applicants/my-profile" class="menu-link px-5">Akun</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-5">
                                            <a href="{SITE_URL}applicants/my-apply" class="menu-link px-5">
                                                <span class="menu-text ">Lamaran Saya</span>
                                                <span class="menu-badge">
                                                    <span class="badge badge-light-danger badge-circle fw-bolder fs-7">0</span>
                                                </span>
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-5 ">
                                            <a href="{SITE_URL}logout"
                                                class="menu-link px-5">Sign Out</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                    <!--end::Menu wrapper-->
                                </div>
                                <!--end::User -->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Wrapper-->
                    </div>