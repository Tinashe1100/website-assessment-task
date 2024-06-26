<x-dashboard>
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Pricing</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>
    <div class="row  text-center g-3">

        @foreach ($pricings as $item)
            <div class="col-lg-4">
                <div class="card p-4 shadow-sm border-0">
                    <div class="text-center card-header bg-transparent border-0">
                        <span
                            class="btn btn-outline-primary rounded-pill px-4 border-2 fw-semibold">{{ $item->package_name }}</span>
                    </div>
                    <div class="card-body">
                        <p class="card-text text-secondary">
                            {{ $item->package_desc }}
                        </p>
                        <p class="fs-4 price">&dollar;<strong><span
                                    class="fs-2">{{ $item->package_price }}</span></strong>/mo</p>

                        <a href=""
                            class="btn btn-outline-primary px-4 fw-semibold my-3">{{ $item->package_cta }}</a>

                        <x-package-items :packageItems="$package_items" />

                    </div>
                    <div class="card-footer bg-transparent">
                        <div class="clearfix">
                            <a href="dashboard/edit-package/" class="btn btn-success float-start">Edit</a>
                            <form action="">
                                <button class="btn btn-danger float-end">
                                    <i class="bi bi-trash"></i>
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>

    <a href="/dashboard/add-pricing" class="mt-4 btn btn-primary">Create new</a>

</x-dashboard>
