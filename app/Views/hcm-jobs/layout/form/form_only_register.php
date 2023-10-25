            <div class="pb-15">
                <!--begin::Container-->
                <div class="container-xxl mt-4">
                        <div class="d-flex flex-center flex-column flex-column-fluid p-0 pb-lg-10">
                            <div class="separator border-1 "st>
                                <img class="rounded" src="{THEMES_PAGE}/assets/media/BG-HEAD.png" class="img-fluid" alt="..." style="width: 100%; height: 300px;">
                            </div>
                            <div class="w-lg-800px w-sm-500px card shadow-sm bg-body pt-10 p-10 mt-6">
                                <!--start:Form-->
                                <form class="form w-100" novalidate="novalidate" id="kt_register_form" method="post" action="{URL_SAVE_REGISTER}">
                                    <!--begin::Heading-->
                                    <div class="mb-10 text-center">
                                        <!--begin::Title-->
                                        <h1 class="text-dark mb-3"> Daftar dan Melamar</h1>
                                        <!--end::Title-->
                                        <!--end::Link-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Input group-->
                                    <div class="row">
                                        <div class="fv-row mb-7 col-lg-6">
                                            <!--begin::Col-->
                                            <label class="form-label fw-bolder text-dark fs-6">Nama Depan</label>
                                            <input class="form-control form-control-sm form-control-solid" type="text"
                                                placeholder="" name="first-name" autocomplete="off" />
                                            <!--end::Col-->
                                        </div>
                                        <div class="fv-row mb-7 col-lg-6">
                                            <!--begin::Col-->
                                            <label class="form-label fw-bolder text-dark fs-6">Nama Belakang</label>
                                            <input class="form-control form-control-sm form-control-solid" type="text"
                                                placeholder="" name="last-name" autocomplete="off" />
                                            <!--end::Col-->
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Col-->
                                    <div class="fv-row mb-7">
                                        <label class="required form-label fw-bolder text-dark fs-6">Nomer tlp</label>
                                        <input class="form-control form-control-sm form-control-solid" type="Number"
                                            placeholder="" name="nomerTlp" autocomplete="off" />
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::input tanggal-->
                                    <div class="row">
                                        <div class="col-lg-4 fv-row mb-7 ">
                                            <label for="" class="required form-label fw-bolder text-dark fs-6">Tanggal Lahir</label>
                                            <div class="position-relative d-flex align-items-center">                                                
                                                <select nama="hari_lahir"
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
                                            <label for="" class="required form-label fw-bolder text-dark fs-6">Bulan Lahir</label>
                                            <div class="position-relative d-flex align-items-center">                                                
                                                <select nama="bulan_lahir"
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
                                            <label for="" class="required form-label fw-bolder text-dark fs-6">Tahun Lahir</label>
                                            <div class="position-relative d-flex align-items-center">                                                
                                                <select nama="tahun_lahir"
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
                                    <!--begin:input tanggal-->
                                    <div class="row">
                                        <div class="col-lg-6 fv-row mb-7 ">
                                            <label for="" class="required form-label fw-bolder text-dark fs-6">Pendidikan</label>
                                            <div class="position-relative d-flex align-items-center">                                                
                                                <select nama="pendidikan"
                                                    class="form-select form-select-sm form-select-solid"
                                                    data-placeholder="Pilih pendidikan..." aria-label="Select example">
                                                    <option>Pilih pendidikan</option>
                                                    {PENDIDIKAN_LIST}
                                                    <option value="{id}">{pendidikan}</option>
                                                    {/PENDIDIKAN_LIST}
                                                </select>
                                            </div>   
                                        </div>
                                        
                                    </div>
                                    <!--end:input tanggal-->
                                    
                                    <!--begin::Input group-->
                                    <div class="mb-7">
                                        <label for="required exampleFormControlTextarea1"
                                            class="form-label fw-bolder text-dark fs-6">Alamat Tempat tinggal</label>
                                        <textarea class="form-control form-control-solid"
                                            id="exampleFormControlTextarea1" name="alamat" rows="3"></textarea>
                                    </div>
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7 ">
                                            <label for="" class="form-label fw-bolder text-dark fs-6">Kota Asal</label>
                                            <input class="form-control form-control-sm form-control-solid ps-12"
                                                placeholder="Kota Tinggal" name="kota"
                                                 />
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
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-stack flex-grow-1">
                                            <!--begin::Content-->
                                            <div class="fw-bold">
                                                <h4 class="text-gray-900 fw-bolder">Perhatikan</h4>
                                                <div class="fs-6 text-gray-700">Patikan sandi yang anda buat sudah benar
                                                </div>
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::waring-->
                                    <div class="row">
                                        <div class="fv-row mb-7">
                                            <label class="required form-label fw-bolder text-dark fs-6">Email</label>
                                            <input class="form-control form-control-sm form-control-solid" type="email"
                                                placeholder="" name="email" autocomplete="off" />
                                        </div>
                                        <!--end::Input group-->
                                    </div>    
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
                                                        type="password" placeholder="" name="sandi" autocomplete="on" />
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
                                                        type="password" placeholder="" name="confrimsandi"
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
                        </div>
                        <!--end::Author-->
                    <!--end::Container-->
                </div>
                <!--end::Wrapper-->
            </div>
            