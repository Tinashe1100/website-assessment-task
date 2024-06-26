<x-dashboard>
    <div class="row">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Create new service</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
        </div>
        <div class="col-lg-4">
            <form action="/dashboard/create-package" method="post" class="row gy-3 form-group">
                @csrf
                <div class="col-12">
                    <label for="name" class="form label">Package name</label>
                    <input type="text" class="form-control" name="package_name" id="name">
                    @error('package_name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="name" class="form label">Package Price</label>
                    <input type="text" class="form-control" name="package_price" id="name">
                    @error('package_price')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="name" class="form label">Package Call To Action</label>
                    <input type="text" class="form-control" name="package_cta" id="name">
                    @error('package_cta')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="details" class="form label">Package description</label>
                    <textarea name="package_desc" id="details" cols="30" rows="3" class="form-control">{{ old('details') }}</textarea>
                    @error('package_desc')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-success">Create package</button>
                </div>
            </form>
        </div>
    </div>
</x-dashboard>
