<x-dashboard>
    <div class="row">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Home</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
        </div>
        <div class="col-lg-4">
            <form action="/dashboard/update-home/{{ $landing->id }}" method="post" class="row gy-3 form-group"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="col-12">
                    <div class="row">
                        <div class="col-8">
                            <img src={{ asset('storage/' . $landing->image) }} class="img-thumbnail"
                                alt="home-page-image">
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <input type="file" name="image" id="" class="form-control">
                </div>
                <div class="col-12">
                    <input type="text" class="form-control" name="heading" value={{ $landing->heading }}>
                </div>
                <div class="col-12">
                    <textarea name="para" id="" cols="30" rows="5" class="form-control">{{ $landing->para }}</textarea>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-success">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</x-dashboard>
