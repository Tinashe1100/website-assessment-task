<x-dashboard>
    <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card shadow-sm h-100">
                <div class="card-header">Landing Page</div>
                <div class="card-body">
                    <div class="clearfix">
                        <h3 class="fw-semibold card-text float-start text-primary">Corporate website</h3>
                        <i class="float-end fas fa-calendar fa-2x text-gray-300"></i>
                    </div>

                </div>
                <div class="card-footer">
                    <a href="/dashboard/home-page" class="text-primary">See more</a>
                </div>
            </div>
        </div>
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card shadow-sm h-100">
                <div class="card-header">About</div>
                <div class="card-body">
                    <div class="clearfix">
                        <h3 class="fw-semibold card-text float-start text-primary">About us page</h3>
                        <i class="float-end fas fa-calendar fa-2x text-gray-300"></i>
                    </div>

                </div>
                <div class="card-footer">
                    <a href="/dashboard/about-page" class="text-primary">See more</a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card shadow-sm h-100">
                <div class="card-header">Services</div>
                <div class="card-body">
                    <div class="clearfix">
                        <h3 class="fw-semibold card-text float-start text-primary">Company services page</h3>
                        <i class="float-end fas fa-calendar fa-2x text-gray-300"></i>
                    </div>

                </div>
                <div class="card-footer">
                    <a href="/dashboard/services-page" class="text-primary">See more</a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card shadow-sm h-100">
                <div class="card-header">Pricing</div>
                <div class="card-body">
                    <div class="clearfix">
                        <h3 class="fw-semibold card-text float-start text-primary">Price packages</h3>
                        <i class="float-end fas fa-calendar fa-2x text-gray-300"></i>
                    </div>

                </div>
                <div class="card-footer">
                    <a href="/dashboard/pricing" class="text-primary">More info</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Call To Action</h6>
                </div>
                @foreach ($cta as $cta)
                    <div class="card-body">
                        <div class="text-center">
                            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                src={{ asset('assets/img/undraw_posting_photo.svg') }} alt="...">
                        </div>

                        <h4 class="card-title">
                            {{ $cta->heading }}
                        </h4>

                        <p class="card-text">{{ $cta->paragraph }}</p>
                        <button class="btn btn-primary">{{ $cta->cta_button }}</button>


                    </div>
                    <div class="card-footer">
                        <a href="/dashboard/edit-cta/{{ $cta->id }}" class="card-link link-primary">Edit Call To
                            Action</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-dashboard>
