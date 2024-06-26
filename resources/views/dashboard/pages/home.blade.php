<x-dashboard>
    <div class="row">
        @include('dashboard.components.flash-message')
        <div class="col-lg-6">
            <div class="card mb-3">
                @foreach ($landing as $item)
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src={{ asset('storage/' . $item->image) }} class="img-fluid rounded-end"
                                alt="landing-page-image">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h4 class="fw-semibold card-title">{{ $item->heading }}</h4>
                                <p class="card-text">{{ $item->para }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent">
                        <a href="edit-home/{{ $item->id }}" class="card-link link-primary float-end">Edit home
                            page</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-dashboard>
