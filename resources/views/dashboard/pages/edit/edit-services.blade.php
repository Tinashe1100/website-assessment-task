<x-dashboard>
    <div class="row">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit service</h1>

        </div>
        <div class="col-lg-4">
            <form action="/update-service/{{ $service->id }}" method="post" class="row gy-3 form-group">
                @csrf
                @method('PUT')
                <div class="col-12">
                    <input type="text" class="form-control" name="name" value="{{ $service->name }}">
                </div>
                <div class="col-12">
                    <textarea name="details" id="" cols="30" rows="5" class="form-control">{{ $service->details }}</textarea>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-success">Save changes</button>
                </div>
            </form>
        </div>

        <a href="/dashboard/services-page" class="fs-5 link-danger">See services <i class="bi bi-arrow-right"></i></a>
    </div>
</x-dashboard>
