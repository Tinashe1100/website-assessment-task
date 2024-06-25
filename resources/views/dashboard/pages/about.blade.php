<x-dashboard>
    <div class="row">
        <div class="col-lg-6">
            <div class="card mb-3">
                <div class="row g-0">
                    @foreach ($about as $item)
                        <div class="col-md-4">
                            <img src={{ $item->image }} class="img-fluid rounded-start" alt="about-page-image">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h4 class="fw-semibold card-title">{{ $item->heading }}</h4>
                                <p class="card-text">{{ $item->para1 }}</p>
                                <p class="card-text">{{ $item->para2 }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="card-footer bg-transparent">
                    <a href="/edit-about" class="link-primary float-end">Edit about page</a>
                </div>
            </div>
        </div>
    </div>
</x-dashboard>
