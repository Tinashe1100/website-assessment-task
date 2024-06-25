<x-dashboard>
    <div class="row">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Create new service</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
        </div>
        <div class="col-lg-4">
            <form action="/create-service" method="post" class="row gy-3 form-group">
                @csrf
                <div class="col-12">
                    <label for="name" class="form label">Service name</label>

                    <input type="text" class="form-control" name="name" id="name">
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="details" class="form label">Details</label>
                    <textarea name="details" id="details" cols="30" rows="5" class="form-control">{{ old('details') }}</textarea>
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-success">Create service</button>
                </div>
            </form>
        </div>
    </div>
</x-dashboard>
