<!--begin::Wrapper-->
<div class="pb-15">
        <!--begin::Container-->
        <div class="container-xxl mt-4">
            <div class="row" data-bs-spy="scroll" data-bs-target="" data-bs-offset="0" tabindex="0">
                <div class="col-lg-3 col-md-4 col-sm-3 mb-2 mt-2">
                    <div class="overflow-auto scroll  pe-2" data-kt-scroll="true" data-kt-scroll-height="{default: '300px', lg: '1000px'}">
                        {JOBS_LIST}
                            {!JOBS_DETAIL!}
                        {/JOBS_LIST}
                    </div>
                    
                    {!PAGINATION!}

                </div>
                <div class="col-lg-9 col-md-8 col-sm-9 mb-2 mt-2 ">
                    {!JOBS_DESC_DETAIL!}
                </div>
            </div>
            <!--end::Author-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Wrapper-->