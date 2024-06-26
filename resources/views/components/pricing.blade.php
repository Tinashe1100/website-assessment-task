<section class="pricing" id="pricing">
    <div class="container">
        <div class="row text-center justify-content-center py-5 g-4">
            <div class="mb-5 section-title">
                <span class="btn btn-outline-primary fw-semibold px-4 rounded-pill border-2">
                    Pricing
                </span>
            </div>
            @foreach ($packages as $package)
                <div class="col-lg-4">
                    <div class="card p-4 shadow-sm border-0">
                        <div class="text-center card-header bg-transparent border-0">
                            <span
                                class="btn btn-outline-primary rounded-pill px-4 border-2 fw-semibold">{{ $package->package_name }}</span>
                        </div>
                        <div class="card-body">
                            <p class="card-text text-secondary">
                                {{ $package->package_desc }}
                            </p>
                            <p class="fs-4 price">&dollar;<strong><span
                                        class="fs-2">{{ $package->package_price }}</span></strong>/mo</p>

                            <a href=""
                                class="btn btn-outline-primary px-4 fw-semibold my-3">{{ $package->package_cta }}</a>

                            <x-package-items :packageItems="$package_items" />

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
