                            <div class="card card-flush px-10 py-10 mb-4">
                                <!--start:Form-->
                                <form class="form w-100" novalidate="novalidate" id="form_apply_and_signup"
                                    action="{URL_APPLY_AND_REGIST}" method="post" enctype="multipart/form-data">
                                    <!--begin::Heading-->
                                    <div class="mb-10 text-center">
                                        <!--begin::Title-->
                                        <h1 class="text-dark"> Daftar dan Melamar </h1>
                                        <small class="text-gray-400">belum punya akun, silahkan daftar disini!</small>
                                        <!--end::Title-->
                                        <!--end::Link-->
                                    </div>
                                    <!--end::Heading-->
                                    <input type="hidden" name="job_id" value="{job_id}">
                                    <!--begin::Input group-->
                                    <div class="row">
                                        <div class="fv-row mb-7 col-lg">
                                            <!--begin::Col-->
                                            <label class="required form-label fw-bolder text-dark fs-6">Nama
                                                Lengkap</label>
                                            <input class="form-control form-control-sm form-control-solid" type="text"
                                                placeholder="" name="fullname" autocomplete="off" />
                                            <!--end::Col-->
                                        </div>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Col-->
                                    <div class="fv-row mb-7">
                                        <label class="required form-label fw-bolder text-dark fs-6">Nomer
                                            Selular</label>
                                        <input class="form-control form-control-sm form-control-solid" type="Number"
                                            placeholder="" name="hp" autocomplete="off" />
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::input tanggal-->
                                    <div class="row">
                                        <div class="col-lg-4 fv-row mb-7 ">
                                            <label for="" class="required form-label fw-bolder text-dark fs-6">Tanggal
                                                Lahir</label>
                                            <div class="position-relative d-flex align-items-center">
                                                <select name="hari_lahir"
                                                    class="form-select form-select-sm form-select-solid"
                                                    data-placeholder="Pilih hari..." aria-label="Select example">
                                                    <option>Pilih hari</option>
                                                    {HARI_LAHIR_LIST}
                                                    <option value="{id}">{hari}</option>
                                                    {/HARI_LAHIR_LIST}
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 fv-row mb-7 ">
                                            <label for="" class="required form-label fw-bolder text-dark fs-6">Bulan
                                                Lahir</label>
                                            <div class="position-relative d-flex align-items-center">
                                                <select name="bulan_lahir"
                                                    class="form-select form-select-sm form-select-solid"
                                                    data-placeholder="Pilih bulan..." aria-label="Select example">
                                                    <option>Pilih bulan</option>
                                                    {BULAN_LAHIR_LIST}
                                                    <option value="{id}">{bulan}</option>
                                                    {/BULAN_LAHIR_LIST}
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 fv-row mb-7 ">
                                            <label for="" class="required form-label fw-bolder text-dark fs-6">Tahun
                                                Lahir</label>
                                            <div class="position-relative d-flex align-items-center">
                                                <select name="tahun_lahir"
                                                    class="form-select form-select-sm form-select-solid"
                                                    data-placeholder="Pilih tahun..." aria-label="Select example">
                                                    <option>Pilih tahun</option>
                                                    {TAHUN_LAHIR_LIST}
                                                    <option value="{id}">{tahun}</option>
                                                    {/TAHUN_LAHIR_LIST}
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <!--end:input tanggal-->
                                    <div class="row">
                                        <div class="col-lg-6 fv-row mb-7 ">
                                            <label for=""
                                                class="required form-label fw-bolder text-dark fs-6">Gender</label>
                                            <div class="position-relative d-flex align-items-center">
                                                <select name="gender"
                                                    class="form-select form-select-sm form-select-solid"
                                                    data-placeholder="Pilih Gender..." aria-label="Select example">
                                                    <option>Pilih gender</option>
                                                    {GENDER_LIST}
                                                    <option value="{gender}">{gender}</option>
                                                    {/GENDER_LIST}
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 fv-row mb-7 ">
                                            <label for=""
                                                class="required form-label fw-bolder text-dark fs-6">Pendidikan</label>
                                            <div class="position-relative d-flex align-items-center">
                                                <select name="education"
                                                    class="form-select form-select-sm form-select-solid"
                                                    data-placeholder="Pilih pendidikan..." aria-label="Select example">
                                                    <option>Pilih pendidikan</option>
                                                    {PENDIDIKAN_LIST}
                                                    <option value="{education}">{education}</option>
                                                    {/PENDIDIKAN_LIST}
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <!--begin::Input group-->
                                    <div class="mb-7">
                                        <label for="required address" class="form-label fw-bolder text-dark fs-6">Alamat
                                            Tempat tinggal</label>
                                        <textarea class="form-control form-control-solid" id="address" name="address"
                                            rows="3"></textarea>
                                    </div>
                                    <!--begin::Input group-->
                                    <div class="mb-7">
                                        <label for="" class="required form-label fw-bolder text-dark fs-6">Kota
                                            Tinggal</label>
                                        <input class="form-control form-control-sm form-control-solid" type="Text"
                                            placeholder="" name="city" autocomplete="off" />
                                    </div>

                                    <div class="col-sm-6">
                                        <!--begin::Input group-->
                                        <label for="upload_cv"
                                            class="required form-label fw-bolder text-dark fs-6">Upload CV</label>
                                        <div class="fv-row mb-10">
                                            <!--begin::Dropzone-->
                                            <div class="dropzone" id="kt_dropzonejs_example_1">
                                                <!--begin::Message-->
                                                <input type="file" id="upload_cv" name="upload_cv">
                                            </div>
                                            <!--end::Dropzone-->
                                        </div>
                                        <!--end::Form-->
                                    </div>
                                    <div class="mb-7">
                                        <label for="cover_letter" class=" form-label fw-bolder text-dark fs-6">Cover
                                            letter</label>
                                        <textarea class="form-control form-control-solid" id="cover_letter"
                                            name="cover_letter" rows="3"></textarea>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::label warning-->
                                    <div
                                        class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-9 p-6">
                                        <!--begin::Icon-->
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
                                        <span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                                    fill="black" />
                                                <rect x="11" y="14" width="7" height="2" rx="1"
                                                    transform="rotate(-90 11 14)" fill="black" />
                                                <rect x="11" y="17" width="2" height="2" rx="1"
                                                    transform="rotate(-90 11 17)" fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <!--end::Icon-->
                                        <hr>
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-stack flex-grow-1">
                                            <!--begin::Content-->
                                            <div class="fw-bold">
                                                <h4 class="text-gray-900 fw-bolder">Perhatikan</h4>
                                                <div class="fs-6 text-gray-700">Pastikan sandi yang anda buat sudah
                                                    benar
                                                </div>
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::waring-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7">
                                        <label class="required form-label fw-bolder text-dark fs-6">Email</label>
                                        <input class="form-control form-control-sm form-control-solid" type="email"
                                            placeholder="" name="email" autocomplete="off" />
                                    </div>
                                    <!--end::Input group-->
                                    <div class="row">
                                        <!--begin::Pasword-->
                                        <div class="mb-7 fv-row col-lg-6" data-kt-password-meter="true">
                                            <!--begin::Wrapper-->
                                            <div class="mb-1">
                                                <!--begin::Label-->
                                                <label class="form-label fw-bolder text-dark fs-6">Sandi</label>
                                                <!--end::Label-->
                                                <!--begin::Input wrapper-->
                                                <div class="position-relative mb-3">
                                                    <input class="form-control form-control-sm form-control-solid"
                                                        type="password" placeholder="" name="password" id="password"
                                                        autocomplete="on" />
                                                    <span
                                                        class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                                        data-kt-password-meter-control="visibility">
                                                        <i class="bi bi-eye-slash fs-2"></i>
                                                        <i class="bi bi-eye fs-2 d-none"></i>
                                                    </span>
                                                </div>
                                                <!--end::Input wrapper-->
                                            </div>
                                            <!--end::Wrapper-->
                                            <!--begin::Hint-->
                                            <div class="text-muted">Gunakan 8 karakter atau lebih dengan campuran huruf,
                                                angka
                                                &amp; symbols.</div>
                                            <!--end::Hint-->
                                        </div>
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7 col-lg-6" data-kt-password-meter="true">
                                            <div class="position-relative mb-3">
                                                <label class="form-label fw-bolder text-dark fs-6">Confirm
                                                    Sandi</label>
                                                <div class="position-relative mb-3">
                                                    <input class="form-control form-control-sm form-control-solid"
                                                        type="password" placeholder="" name="repassword" id="repassword"
                                                        autocomplete="on" />
                                                    <span
                                                        class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                                        data-kt-password-meter-control="visibility">
                                                        <i class="bi bi-eye-slash fs-2"></i>
                                                        <i class="bi bi-eye fs-2 d-none"></i>
                                                    </span>
                                                </div>
                                                <div class="text-muted">Gunakan 8 karakter atau lebih dengan campuran
                                                    huruf, angka
                                                    &amp; symbols.</div>
                                            </div>
                                        </div>
                                        <!--End::Pasword-->
                                    </div>
                                    <!--begin::Form-->
                                    <!--begin::Actions-->
                                    <div class="text-center">
                                        <button type="Submit" id="kt_modal_new_address_submit"
                                            class="btn btn-lg btn-primary w-100 mb-5">
                                            <span class="indicator-label">Daftar & Melamar</span>
                                            <span class="indicator-progress">Please wait...
                                                <input class="spinner-border spinner-border-sm align-middle ms-2">
                                        </button>
                                    </div>
                                    <!--end::Actions-->
                                </form>
                                <!--end::Form-->
                            </div>