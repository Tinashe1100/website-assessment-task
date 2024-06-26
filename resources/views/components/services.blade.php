<section class="services" id="services">
    <div class="container">
        <div class="row justify-content-center py-5 g-4">
            <div class="mb-5 section-title text-center">
                <span class="btn btn-outline-primary fw-semibold px-4 rounded-pill border-2">
                    Services
                </span>
            </div>
            @foreach ($services as $service)
                <div class="col-lg-4">
                    <div class="item border py-4 px-4 rounded-3 shadow-sm">
                        <div class="icon ">
                            <i class="bi bi-capsule p-2 fs-2 text-primary"></i>
                        </div>
                        <h4>{{ $service->name }}</h4>
                        <p>{{ $service->details }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
