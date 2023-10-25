                        <!--begin::Wrapper-->
                        <div class="card p-6 bg-body">
                            <div class="fs-2 text-dark fw-bolder">
                                Apply
                            </div>
                            <div class="fs-6 text-muted mb-6">
                                CV kamu sedang diproses status
                            </div>
                            <div id="kt_content_container" class=" ">
                                <!--begin::Post-->
                                <div class=" " id="kt_content">
                                    <!--begin::Card-->

                                    <!--begin::Card header-->

                                    <!--begin::Card toolbar-->
                                    <div class="card-toolbar">
                                        <!--begin::Modal - Adjust Balance-->
                                        <div class="modal fade" id="kt_modal_export_users" tabindex="-1"
                                            aria-hidden="true">
                                            <!--begin::Modal dialog-->
                                            <div class="modal-dialog modal-dialog-centered mw-650px">
                                                <!--begin::Modal content-->
                                                <div class="modal-content">
                                                    <!--begin::Modal header-->
                                                    <div class="modal-header">
                                                        <!--begin::Modal title-->
                                                        <h2 class="fw-bolder">Export Users</h2>
                                                        <!--end::Modal title-->
                                                        <!--begin::Close-->
                                                        <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                                            data-kt-users-modal-action="close">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                            <span class="svg-icon svg-icon-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <rect opacity="0.5" x="6" y="17.3137" width="16"
                                                                        height="2" rx="1"
                                                                        transform="rotate(-45 6 17.3137)"
                                                                        fill="black" />
                                                                    <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                                        transform="rotate(45 7.41422 6)" fill="black" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </div>
                                                        <!--end::Close-->
                                                    </div>
                                                    <!--end::Modal header-->
                                                    <!--begin::Modal body-->
                                                    <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                                        <!--begin::Form-->
                                                        <form id="kt_modal_export_users_form" class="form" action="#">
                                                            <!--begin::Input group-->
                                                            <div class="fv-row mb-10">
                                                                <!--begin::Label-->
                                                                <label class="fs-6 fw-bold form-label mb-2">Select
                                                                    Roles:</label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <select name="role" data-control="select2"
                                                                    data-placeholder="Select a role"
                                                                    data-hide-search="true"
                                                                    class="form-select form-select-solid fw-bolder">
                                                                    <option></option>
                                                                    <option value="Administrator">Administrator</option>
                                                                    <option value="Analyst">Analyst</option>
                                                                    <option value="Developer">Developer</option>
                                                                    <option value="Support">Support</option>
                                                                    <option value="Trial">Trial</option>
                                                                </select>
                                                                <!--end::Input-->
                                                            </div>
                                                            <!--end::Input group-->
                                                            <!--begin::Input group-->
                                                            <div class="fv-row mb-10">
                                                                <!--begin::Label-->
                                                                <label
                                                                    class="required fs-6 fw-bold form-label mb-2">Select
                                                                    Export Format:</label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <select name="format" data-control="select2"
                                                                    data-placeholder="Select a format"
                                                                    data-hide-search="true"
                                                                    class="form-select form-select-solid fw-bolder">
                                                                    <option></option>
                                                                    <option value="excel">Excel</option>
                                                                    <option value="pdf">PDF</option>
                                                                    <option value="cvs">CVS</option>
                                                                    <option value="zip">ZIP</option>
                                                                </select>
                                                                <!--end::Input-->
                                                            </div>
                                                            <!--end::Input group-->
                                                            <!--begin::Actions-->
                                                            <div class="text-center">
                                                                <button type="reset" class="btn btn-light me-3"
                                                                    data-kt-users-modal-action="cancel">Discard</button>
                                                                <button type="submit" class="btn btn-primary"
                                                                    data-kt-users-modal-action="submit">
                                                                    <span class="indicator-label">Submit</span>
                                                                    <span class="indicator-progress">Please wait...
                                                                        <span
                                                                            class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                                </button>
                                                            </div>
                                                            <!--end::Actions-->
                                                        </form>
                                                        <!--end::Form-->
                                                    </div>
                                                    <!--end::Modal body-->
                                                </div>
                                                <!--end::Modal content-->
                                            </div>
                                            <!--end::Modal dialog-->
                                        </div>
                                        <!--end::Modal - New Card-->
                                        <!--begin::Modal - Add task-->
                                        <div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
                                            <!--begin::Modal dialog-->
                                            <div class="modal-dialog modal-dialog-centered mw-650px">
                                                <!--begin::Modal content-->
                                                <div class="modal-content">
                                                    <!--begin::Modal header-->
                                                    <div class="modal-header" id="kt_modal_add_user_header">
                                                        <!--begin::Modal title-->
                                                        <h2 class="fw-bolder">Add User</h2>
                                                        <!--end::Modal title-->
                                                        <!--begin::Close-->
                                                        <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                                            data-kt-users-modal-action="close">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                            <span class="svg-icon svg-icon-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <rect opacity="0.5" x="6" y="17.3137" width="16"
                                                                        height="2" rx="1"
                                                                        transform="rotate(-45 6 17.3137)"
                                                                        fill="black" />
                                                                    <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                                        transform="rotate(45 7.41422 6)" fill="black" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </div>
                                                        <!--end::Close-->
                                                    </div>
                                                    <!--end::Modal header-->
                                                    <!--begin::Modal body-->
                                                    <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                                        <!--begin::Form-->
                                                        <form id="kt_modal_add_user_form" class="form" action="#">
                                                            <!--begin::Scroll-->
                                                            <div class="d-flex flex-column scroll-y me-n7 pe-7"
                                                                id="kt_modal_add_user_scroll" data-kt-scroll="true"
                                                                data-kt-scroll-activate="{default: false, lg: true}"
                                                                data-kt-scroll-max-height="auto"
                                                                data-kt-scroll-dependencies="#kt_modal_add_user_header"
                                                                data-kt-scroll-wrappers="#kt_modal_add_user_scroll"
                                                                data-kt-scroll-offset="300px">
                                                                <!--begin::Input group-->
                                                                <div class="fv-row mb-7">
                                                                    <!--begin::Label-->
                                                                    <label
                                                                        class="d-block fw-bold fs-6 mb-5">Avatar</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Image input-->
                                                                    <div class="image-input image-input-outline"
                                                                        data-kt-image-input="true"
                                                                        style="background-image: url({THEMES_PAGE}/assets/media/avatars/blank.png)">
                                                                        <!--begin::Preview existing avatar-->
                                                                        <div class="image-input-wrapper w-125px h-125px"
                                                                            style="background-image: url({THEMES_PAGE}/assets/media/avatars/150-1.jpg);">
                                                                        </div>
                                                                        <!--end::Preview existing avatar-->
                                                                        <!--begin::Label-->
                                                                        <label
                                                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                            data-kt-image-input-action="change"
                                                                            data-bs-toggle="tooltip"
                                                                            title="Change avatar">
                                                                            <i class="bi bi-pencil-fill fs-7"></i>
                                                                            <!--begin::Inputs-->
                                                                            <input type="file" name="avatar"
                                                                                accept=".png, .jpg, .jpeg" />
                                                                            <input type="hidden" name="avatar_remove" />
                                                                            <!--end::Inputs-->
                                                                        </label>
                                                                        <!--end::Label-->
                                                                        <!--begin::Cancel-->
                                                                        <span
                                                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                            data-kt-image-input-action="cancel"
                                                                            data-bs-toggle="tooltip"
                                                                            title="Cancel avatar">
                                                                            <i class="bi bi-x fs-2"></i>
                                                                        </span>
                                                                        <!--end::Cancel-->
                                                                        <!--begin::Remove-->
                                                                        <span
                                                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                            data-kt-image-input-action="remove"
                                                                            data-bs-toggle="tooltip"
                                                                            title="Remove avatar">
                                                                            <i class="bi bi-x fs-2"></i>
                                                                        </span>
                                                                        <!--end::Remove-->
                                                                    </div>
                                                                    <!--end::Image input-->
                                                                    <!--begin::Hint-->
                                                                    <div class="form-text">Allowed file types: png, jpg,
                                                                        jpeg.</div>
                                                                    <!--end::Hint-->
                                                                </div>
                                                                <!--end::Input group-->
                                                                <!--begin::Input group-->
                                                                <div class="fv-row mb-7">
                                                                    <!--begin::Label-->
                                                                    <label class="required fw-bold fs-6 mb-2">Full
                                                                        Name</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Input-->
                                                                    <input type="text" name="user_name"
                                                                        class="form-control form-control-solid mb-3 mb-lg-0"
                                                                        placeholder="Full name" value="Emma Smith" />
                                                                    <!--end::Input-->
                                                                </div>
                                                                <!--end::Input group-->
                                                                <!--begin::Input group-->
                                                                <div class="fv-row mb-7">
                                                                    <!--begin::Label-->
                                                                    <label
                                                                        class="required fw-bold fs-6 mb-2">Email</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Input-->
                                                                    <input type="email" name="user_email"
                                                                        class="form-control form-control-solid mb-3 mb-lg-0"
                                                                        placeholder="example@domain.com"
                                                                        value="e.smith@kpmg.com.au" />
                                                                    <!--end::Input-->
                                                                </div>
                                                                <!--end::Input group-->
                                                                <!--begin::Input group-->
                                                                <div class="mb-7">
                                                                    <!--begin::Label-->
                                                                    <label
                                                                        class="required fw-bold fs-6 mb-5">Role</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Roles-->
                                                                    <!--begin::Input row-->
                                                                    <div class="d-flex fv-row">
                                                                        <!--begin::Radio-->
                                                                        <div
                                                                            class="form-check form-check-custom form-check-solid">
                                                                            <!--begin::Input-->
                                                                            <input class="form-check-input me-3"
                                                                                name="user_role" type="radio" value="0"
                                                                                id="kt_modal_update_role_option_0"
                                                                                checked='checked' />
                                                                            <!--end::Input-->
                                                                            <!--begin::Label-->
                                                                            <label class="form-check-label"
                                                                                for="kt_modal_update_role_option_0">
                                                                                <div class="fw-bolder text-gray-800">
                                                                                    Administrator</div>
                                                                                <div class="text-gray-600">Best for
                                                                                    business owners and company
                                                                                    administrators</div>
                                                                            </label>
                                                                            <!--end::Label-->
                                                                        </div>
                                                                        <!--end::Radio-->
                                                                    </div>
                                                                    <!--end::Input row-->
                                                                    <div class='separator separator-dashed my-5'></div>
                                                                    <!--begin::Input row-->
                                                                    <div class="d-flex fv-row">
                                                                        <!--begin::Radio-->
                                                                        <div
                                                                            class="form-check form-check-custom form-check-solid">
                                                                            <!--begin::Input-->
                                                                            <input class="form-check-input me-3"
                                                                                name="user_role" type="radio" value="1"
                                                                                id="kt_modal_update_role_option_1" />
                                                                            <!--end::Input-->
                                                                            <!--begin::Label-->
                                                                            <label class="form-check-label"
                                                                                for="kt_modal_update_role_option_1">
                                                                                <div class="fw-bolder text-gray-800">
                                                                                    Developer</div>
                                                                                <div class="text-gray-600">Best for
                                                                                    developers or people primarily using
                                                                                    the API</div>
                                                                            </label>
                                                                            <!--end::Label-->
                                                                        </div>
                                                                        <!--end::Radio-->
                                                                    </div>
                                                                    <!--end::Input row-->
                                                                    <div class='separator separator-dashed my-5'></div>
                                                                    <!--begin::Input row-->
                                                                    <div class="d-flex fv-row">
                                                                        <!--begin::Radio-->
                                                                        <div
                                                                            class="form-check form-check-custom form-check-solid">
                                                                            <!--begin::Input-->
                                                                            <input class="form-check-input me-3"
                                                                                name="user_role" type="radio" value="2"
                                                                                id="kt_modal_update_role_option_2" />
                                                                            <!--end::Input-->
                                                                            <!--begin::Label-->
                                                                            <label class="form-check-label"
                                                                                for="kt_modal_update_role_option_2">
                                                                                <div class="fw-bolder text-gray-800">
                                                                                    Analyst</div>
                                                                                <div class="text-gray-600">Best for
                                                                                    people who need full access to
                                                                                    analytics data, but don't need to
                                                                                    update business settings</div>
                                                                            </label>
                                                                            <!--end::Label-->
                                                                        </div>
                                                                        <!--end::Radio-->
                                                                    </div>
                                                                    <!--end::Input row-->
                                                                    <div class='separator separator-dashed my-5'></div>
                                                                    <!--begin::Input row-->
                                                                    <div class="d-flex fv-row">
                                                                        <!--begin::Radio-->
                                                                        <div
                                                                            class="form-check form-check-custom form-check-solid">
                                                                            <!--begin::Input-->
                                                                            <input class="form-check-input me-3"
                                                                                name="user_role" type="radio" value="3"
                                                                                id="kt_modal_update_role_option_3" />
                                                                            <!--end::Input-->
                                                                            <!--begin::Label-->
                                                                            <label class="form-check-label"
                                                                                for="kt_modal_update_role_option_3">
                                                                                <div class="fw-bolder text-gray-800">
                                                                                    Support</div>
                                                                                <div class="text-gray-600">Best for
                                                                                    employees who regularly refund
                                                                                    payments and respond to disputes
                                                                                </div>
                                                                            </label>
                                                                            <!--end::Label-->
                                                                        </div>
                                                                        <!--end::Radio-->
                                                                    </div>
                                                                    <!--end::Input row-->
                                                                    <div class='separator separator-dashed my-5'></div>
                                                                    <!--begin::Input row-->
                                                                    <div class="d-flex fv-row">
                                                                        <!--begin::Radio-->
                                                                        <div
                                                                            class="form-check form-check-custom form-check-solid">
                                                                            <!--begin::Input-->
                                                                            <input class="form-check-input me-3"
                                                                                name="user_role" type="radio" value="4"
                                                                                id="kt_modal_update_role_option_4" />
                                                                            <!--end::Input-->
                                                                            <!--begin::Label-->
                                                                            <label class="form-check-label"
                                                                                for="kt_modal_update_role_option_4">
                                                                                <div class="fw-bolder text-gray-800">
                                                                                    Trial</div>
                                                                                <div class="text-gray-600">Best for
                                                                                    people who need to preview content
                                                                                    data, but don't need to make any
                                                                                    updates</div>
                                                                            </label>
                                                                            <!--end::Label-->
                                                                        </div>
                                                                        <!--end::Radio-->
                                                                    </div>
                                                                    <!--end::Input row-->
                                                                    <!--end::Roles-->
                                                                </div>
                                                                <!--end::Input group-->
                                                            </div>
                                                            <!--end::Scroll-->
                                                            <!--begin::Actions-->
                                                            <div class="text-center pt-15">
                                                                <button type="reset" class="btn btn-light me-3"
                                                                    data-kt-users-modal-action="cancel">Discard</button>
                                                                <button type="submit" class="btn btn-primary"
                                                                    data-kt-users-modal-action="submit">
                                                                    <span class="indicator-label">Submit</span>
                                                                    <span class="indicator-progress">Please wait...
                                                                        <span
                                                                            class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                                </button>
                                                            </div>
                                                            <!--end::Actions-->
                                                        </form>
                                                        <!--end::Form-->
                                                    </div>
                                                    <!--end::Modal body-->
                                                </div>
                                                <!--end::Modal content-->
                                            </div>
                                            <!--end::Modal dialog-->
                                        </div>
                                        <!--end::Modal - Add task-->
                                    </div>
                                    <!--end::Card toolbar-->
                                    <!--begin::Card datatable-->
                                    <div class="card-body pt-0">
                                        <!--begin::Table-->
                                        <table class="table table-row-bordered fs-6 gy-5" id="kt_datatable_example_1">
                                            <!--begin::Table head-->
                                            <thead>
                                                <!--begin::Table row-->
                                                <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                                    <th class="w-10px pe-2">
                                                        <div
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                            <input class="form-check-input" type="checkbox"
                                                                data-kt-check="true"
                                                                data-kt-check-target="#kt_table_users .form-check-input"
                                                                value="1" />
                                                        </div>
                                                    </th>
                                                    <th class="min-w-125px">User</th>
                                                    <th class="min-w-125px">Role</th>
                                                    <th class="min-w-125px">Two-step</th>
                                                    <th class="min-w-125px">Date</th>
                                                    <th class="text-end min-w-100px">Actions</th>
                                                </tr>
                                                <!--end::Table row-->
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody class="text-gray-600 fw-bold">
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Checkbox-->
                                                    <td>
                                                        <div
                                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="checkbox" value="1" />
                                                        </div>
                                                    </td>
                                                    <!--end::Checkbox-->
                                                    <!--begin::User=-->
                                                    <td class="d-flex align-items-center">
                                                        <!--begin:: Avatar -->
                                                        <div
                                                            class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                            <a
                                                                href="../../demo11/dist/apps/user-management/users/view.html">
                                                                <div class="symbol-label">
                                                                    <img src="{THEMES_PAGE}/assets/media/avatars/150-1.jpg"
                                                                        alt="Emma Smith" class="w-100" />
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::User details-->
                                                        <div class="d-flex flex-column">
                                                            <a href="../../demo11/dist/apps/user-management/users/view.html"
                                                                class="text-gray-800 text-hover-primary mb-1">Emma
                                                                Smith</a>
                                                            <span>e.smith@kpmg.com.au</span>
                                                        </div>
                                                        <!--begin::User details-->
                                                    </td>
                                                    <!--end::User=-->
                                                    <!--begin::Role=-->
                                                    <td>Administrator</td>
                                                    <!--end::Role=-->
                                                    <!--begin::Two step=-->
                                                    <td>
                                                        <div class="badge badge-light-success fw-bolder">Test</div>
                                                    </td>
                                                    <!--end::Two step=-->
                                                    <!--begin::Joined-->
                                                    <td>10 Mar 2021, 10:30 am</td>
                                                    <!--begin::Joined-->
                                                    <!--begin::Action=-->
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-light btn-active-light-primary btn-sm"
                                                            data-kt-menu-trigger="click"
                                                            data-kt-menu-placement="bottom-end">Actions
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                            <span class="svg-icon svg-icon-5 m-0">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path
                                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                        fill="black" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                        <!--begin::Menu-->
                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                                                            data-kt-menu="true">
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">Menyetujui</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3"
                                                                    data-kt-users-table-filter="delete_row">Hapus</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                        </div>
                                                        <!--end::Menu-->
                                                    </td>
                                                    <!--end::Action=-->
                                                </tr>
                                                <!--end::Table row-->
                                            </tbody>
                                            <!--end::Table body-->
                                            <!--begin::Table body-->
                                            <tbody class="text-gray-600 fw-bold">
                                                <!--begin::Table row-->
                                                <tr>
                                                    <!--begin::Checkbox-->
                                                    <td>
                                                        <div
                                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="checkbox" value="1" />
                                                        </div>
                                                    </td>
                                                    <!--end::Checkbox-->
                                                    <!--begin::User=-->
                                                    <td class="d-flex align-items-center">
                                                        <!--begin:: Avatar -->
                                                        <div
                                                            class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                            <a
                                                                href="../../demo11/dist/apps/user-management/users/view.html">
                                                                <div class="symbol-label">
                                                                    <img src="{THEMES_PAGE}/assets/media/avatars/150-1.jpg"
                                                                        alt="Emma Smith" class="w-100" />
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::User details-->
                                                        <div class="d-flex flex-column">
                                                            <a href="../../demo11/dist/apps/user-management/users/view.html"
                                                                class="text-gray-800 text-hover-primary mb-1">Emma
                                                                Smith</a>
                                                            <span>e.smith@kpmg.com.au</span>
                                                        </div>
                                                        <!--begin::User details-->
                                                    </td>
                                                    <!--end::User=-->
                                                    <!--begin::Role=-->
                                                    <td>Administrator</td>
                                                    <!--end::Role=-->
                                                    <!--begin::Two step=-->
                                                    <td>
                                                        <div class="badge badge-light-success fw-bolder active">Test
                                                        </div>
                                                    </td>
                                                    <!--end::Two step=-->
                                                    <!--begin::Joined-->
                                                    <td>10 Mar 2021, 10:30 am</td>
                                                    <!--begin::Joined-->
                                                    <!--begin::Action=-->
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-light btn-active-light-primary btn-sm"
                                                            data-kt-menu-trigger="click"
                                                            data-kt-menu-placement="bottom-end">Actions
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                            <span class="svg-icon svg-icon-5 m-0">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path
                                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                        fill="black" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                        <!--begin::Menu-->
                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                                                            data-kt-menu="true">
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">menyetujui</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3"
                                                                    data-kt-users-table-filter="delete_row">Hapus</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                        </div>
                                                        <!--end::Menu-->
                                                    </td>
                                                    <!--end::Action=-->
                                                </tr>
                                                <!--end::Table row-->
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Card body-->
                                    <!--end::Card-->
                                </div>
                                <!--end::Post-->
                            </div>
                            <!--end::Container-->
                        </div>
                        <!--end::Wrapper-->