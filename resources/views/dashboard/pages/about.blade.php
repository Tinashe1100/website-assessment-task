<x-dashboard>
    <div class="row">
        @include('dashboard.components.flash-message')
        <div class="col-lg-8">
            <div class="card mb-3">
                @foreach ($about as $item)
                    <div class="row g-0">

                        <div class="col-md-4">
                            <img src={{ asset('storage/' . $item->image) }} class="img-fluid" alt="about-page-image">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h4 class="fw-semibold card-title">{{ $item->heading }}</h4>
                                <p class="card-text">{{ $item->para1 }}</p>
                                <p class="card-text">{{ $item->para2 }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent">
                        <a href="/dashboard/edit-about/{{ $item->id }}" class="link-primary float-end">Edit about
                            page</a>
                    </div>
            </div>
            @endforeach
        </div>
    </div>
</x-dashboard>
