<x-dashboard>
    <div class="row">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Create new price package item</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
        </div>
        <div class="col-lg-4">
            <form action="create-package-item" method="post" class="row gy-3 form-group">
                @csrf
                <div class="col-12">
                    <select class="form-select" aria-label="Default select example" name="package_id">
                        <option selected>Select price package</option>
                        @foreach ($packages as $package)
                            <option value={{ $package->id }}>{{ $package->package_name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-12">
                    <label for="name" class="form label">Item name</label>
                    <input type="text" class="form-control" name="item_name" id="name">
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="col-12">
                    <select class="form-select" aria-label="Default select example" name="item_availability">
                        <option selected>Select item availability</option>
                        <option value=1>Available</option>
                        <option value=0>Not available</option>
                    </select>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-success">Create item</button>
                </div>
            </form>
        </div>
    </div>
</x-dashboard>
