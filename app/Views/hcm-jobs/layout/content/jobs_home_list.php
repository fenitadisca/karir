            <!--begin::Container-->
            <div class="container">
                <!--begin::Heading-->
                <div class="text-center mt-6 mb-18" id="achievements" data-kt-scroll-offset="{default: 100, lg: 150}">
                    <!--begin::Title-->
                    <h3 class="fs-2hx text-dark fw-bolder mb-5">Temukan kerjaan impian anda</h3>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="fs-5 text-gray-700 fw-bold">Save thousands to millions of bucks by using single tool
                        for different amazing and great useful admin</div>
                    <!--end::Description-->
                </div>
                <!--end::Heading-->
                <div class="row">
                    {JOBS_LIST}
                    <!-- begin::JOBS List -->
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-2 mt-2">
                        <!-- begin::Card List -->
                        <div class="card ">
                            <div class="">
                                <img src="{jobs_image}" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <p class="small fs-2 text-dark fw-bolder">{title}</p>
                                <span class="badge mb-4 badge-warning mb">Job Type: {jobs_type_name}</span>
                                <div class="row">
                                    <div class="col-6 mt-4 pb-2 mb-3"><i
                                            class="fa-solid fa-briefcase p-2"></i>{jobs_category_name}</div>
                                    <div class="col-6 mt-4 pb-2 mb-3"><i
                                            class="fa-solid fa-location-dot p-2"></i></i>{location}
                                    </div>
                                    <div class="col-6 mt-auto border-bottom pb-2 mb-6">
                                        <small class="text-dark"><i class="fa-solid fa-clock p-2"></i>Publish
                                            {publish_date}</small>
                                    </div>
                                    <div class="col-6 mt-auto border-bottom pb-2 mb-6">
                                        <small class="text-danger"><i class="fa-solid fa-clock p-2"></i>Berakhir
                                            {expired_date}</small>
                                    </div>
                                </div>
                                <div class="row">

                                    <a href="{jobs_link_apply}" class="mb-4 btn btn-primary">Apply</a>
                                    <a href="{jobs_link}" class="btn btn-white">Details</a>
                                </div>
                            </div>
                        </div>
                        <!-- end::Card List -->
                    </div>
                    <!-- end::JOBS List -->
                    {/JOBS_LIST}

                    {!PAGINATION!}
                </div>
                <!--end::Author-->
            </div>
            <!--end::Container-->