            <!--begin::Container-->
            <div class="container">
                <div>
                    <!--begin::Intro-->
                    <div class="mb-15">
                        <!--begin::Title-->
                        <h4 class="fs-2x text-gray-800 w-bolder mb-6">Favorite jobs</h4>
                        <!--end::Title-->
                        <!--begin::Text-->
                        <p class="fw-bold fs-4 text-gray-600 mb-2">First, a disclaimer – the entire process of writing a
                            blog post often takes more than a couple of hours, even if you can type eighty words as per
                            minute and your writing skills are sharp.</p>
                        <!--end::Text-->
                    </div>
                    <!--end::Intro-->
                </div>
                <div class="row" id="slader">

                    {JOBS_LIST_FAVORITE}
                    <div class="col-lg-3 col-md-6 col-sm-6 mb-2 mt-2">
                        <div class="card ">
                            <div class="">
                                <img src="{jobs_favorite_image}" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <p class="small fs-2 text-dark fw-bolder">{jobs_favorite_title}</p>
                                <span class="badge mb-4 badge-warning mb">Job Type: {jobs_favorite_type_name}</span>
                                <div class=" mb-2"><i
                                        class="fa-solid fa-briefcase p-2"></i>{jobs_favorite_category_name}<span
                                        class="badge badge-white"><i class="fa-solid fa-clock p-2"></i>Diperbarui
                                        {jobs_favorite_expired_date}</span></div>
                                <div class=" mb-2"><i class="fa-solid fa-location-pin p-2"></i>{jobs_favorite_location}
                                </div>
                                <div class=" mb-2 text-danger"><i class="fa-solid fa-clock p-2 text-danger"></i>Berakhir
                                    {jobs_favorite_publish_date}</div>
                                <div class="row">
                                    <a href="{jobs_favorite_link_apply}" class="mb-4 btn btn-primary">Apply</a>
                                    <a href="{jobs_favorite_link}" class="btn btn-white">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {/JOBS_LIST_FAVORITE}

                </div>
            </div>
            <!--begin::Container-->