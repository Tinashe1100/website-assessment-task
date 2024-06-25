<x-dashboard>
    <div class="row">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                @foreach ($landing as $item)
                    <div class="col-md-4">
                        <img src={{ $item->image }} class="img-fluid rounded-start" alt="landing-page-image">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h4 class="fw-semibold card-title">{{ $item->heading }}</h4>
                            <p class="card-text">{{ $item->para }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="card-footer bg-transparent">
                <a href="/edit-home" class="link-primary float-end">Edit home page</a>
            </div>
        </div>
    </div>
</x-dashboard>
