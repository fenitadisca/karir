                    <div class="card bg-body card-flush p-6 mb-4 ">
                        <div class="mb-8">
                            <img src="{THEMES_PAGE}/assets/media/illustrations/bg.png" class="card-img-top" alt="..."
                                style="height: 200px;">
                        </div>
                        <p class="small fs-6 text-dark fw-bolder">{jobs_detail_title}
                        </p>
                        <div class="mb-4">
                            <span class="fs-4 badge badge-warning">Job Type: {jobs_detail_type}</span>
                        </div>
                        <div class="">
                            <p class="small fs-2 text-dark fw-bolder">Keterangan</p>
                            {jobs_detail_description}
                        </div>
                        <div class="">

                        </div>
                        <div class="">
                            <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x mb-5 fs-6">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab"
                                        href="#kt_tab_pane_4">Spesifikasi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_5">Tunjangan &
                                        Keuntungan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#kt_tab_pane_6">Kompensasi
                                        Insentif</a>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="kt_tab_pane_4" role="tabpanel">
                                {!spec_desc!}
                            </div>
                            <div class="tab-pane fade" id="kt_tab_pane_5" role="tabpanel">
                                {!benefit_desc!}
                            </div>
                            <div class="tab-pane fade" id="kt_tab_pane_6" role="tabpanel">
                                {!insentif_desc!}
                            </div>
                        </div>
                        <div class="mt-auto  mb-3 mt-2"><i class="fa-solid fa-laptop-file p-2"></i>{!exp_desc!}
                        </div>
                        <div class="mt-auto border-bottom pb-2 mb-3 mt-2"> <i class="fa-solid fa-briefcase p-2"></i>
                            {jobs_detail_category} <span class="badge badge-light text-danger">Diperbarui
                                {!last_updated!}</span>
                        </div>
                        <div class="text-end">
                            <a href="{jobs_detail_link}" class="col-4 mb-4 btn btn-primary">Apply</a>
                        </div>
                    </div>