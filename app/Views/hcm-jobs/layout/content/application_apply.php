<div class="card card-flush px-10 py-10 mb-4">
    <!--start:Form-->
    <form class="form w-100" novalidate="novalidate" id="form_apply_and_signup" action="{URL_APPLY_AND_SIGNUP}"
        method="post">
        <!--begin::Heading-->
        <div class="mb-10 text-center">
            <!--begin::Title-->
            <h1 class="text-dark">Melamar </h1>
            <small class="text-gray-400">belum punya akun, silahkan daftar disini!</small>
            <!--end::Title-->
            <!--end::Link-->
        </div>
        <!--end::Heading-->
        <!--begin::Input group-->

        <input type="hidden" name="job_id" value="{job_id}">
        <input type="hidden" name="applicant_id" value="{applicant_id}">


        <div class="row">
            <div class="fv-row mb-7 col-lg">
                <!--begin::Col-->
                <label class="required form-label fw-bolder text-dark fs-6">Nama Lengkap</label>
                <input class="form-control form-control-sm form-control-solid" type="text" placeholder=""
                    name="fullname" autocomplete="off" value="{my_applicants_fullname}" />
                <!--end::Col-->
            </div>
        </div>
        <!--end::Input group-->

        <!--begin::Col-->
        <div class="fv-row mb-7">
            <label class="required form-label fw-bolder text-dark fs-6">Nomer Selular</label>
            <input class="form-control form-control-sm form-control-solid" type="Number" placeholder="" name="hp"
                autocomplete="off" value="{my_applicants_hp}" />
        </div>
        <!--end::Col-->

        <div class="row">
            <div class="col-lg-6 fv-row mb-7 ">
                <label for="" class="required form-label fw-bolder text-dark fs-6">Pendidikan</label>
                <div class="position-relative d-flex align-items-center">
                    <select name="education" class="form-select form-select-sm form-select-solid"
                        data-placeholder="Pilih pendidikan..." aria-label="Select example">
                        <option>{my_applicants_education}</option>
                        {PENDIDIKAN_LIST}
                        <option value="{id}">{education}</option>
                        {/PENDIDIKAN_LIST}
                    </select>
                </div>
            </div>

        </div>
        <!--begin::Input group-->
        <div class="mb-7">
            <label for="required address" class="form-label fw-bolder text-dark fs-6">Alamat Tempat tinggal</label>
            <textarea class="form-control form-control-solid" id="address" name="address"
                rows="3">{my_applicants_address}</textarea>
        </div>
        <!--begin::Input group-->
        <div class="mb-7">
            <label for="" class="required form-label fw-bolder text-dark fs-6">Kota Tinggal</label>
            <input class="form-control form-control-sm form-control-solid" type="Text" placeholder="" name="city"
                autocomplete="off" value="{my_applicants_city}" />
        </div>

        <div class="mb-7">
            <label for="" class="required form-label fw-bolder text-dark fs-6">CV</label>
            <input type="hidden" name="cv" value="{my_applicants_source}" />
            <input type="hidden" name="title" value="{my_applicants_title}" />
            <br>
            <a href="{my_applicants_source}">{my_applicants_title}</a>
            <!-- <embed src="http://localhost/hcm-imageserver/public/show/1011-karir/lamaran/file/1697514704.pdf"
                    width="475" height="700" type="application/pdf"> -->
        </div>

        <div class="col-sm-6">
            <!--begin::Input group-->
            <label for="upload_cv" class="form-label fw-bolder text-dark fs-6">Upload CV Terbaru</label>
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
            <label for="cover_letter" class=" form-label fw-bolder text-dark fs-6">Cover letter</label>
            <textarea class="form-control form-control-solid" id="cover_letter" name="cover_letter" rows="3"></textarea>
        </div>
        <!--end::Input group-->

        <!--begin::Form-->
        <!--begin::Actions-->
        <div class="text-center">
            <button type="Submit" id="kt_modal_new_address_submit" class="btn btn-lg btn-primary w-100 mb-5">
                <span class="indicator-label">Apply</span>
                <span class="indicator-progress">Please wait...
                    <input class="spinner-border spinner-border-sm align-middle ms-2">
            </button>
        </div>
        <!--end::Actions-->
    </form>
    <!--end::Form-->
</div>