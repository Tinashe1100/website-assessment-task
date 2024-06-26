<x-dashboard>
    <div class="row">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit About</h1>
        </div>
        <div class="col-lg-4">
            <form action="/update-about/{{ $about->id }}" method="post" class="row gy-3 form-group"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="col-6">
                    <img src={{ asset('storage/' . $about->image) }} class="img-thumbnail" alt="about-page-image">
                </div>
                <div class="col-12">
                    <label for="about-image" class="form-lable">Change about image</label>
                    <input type="file" name="image" id="about-image" class="form-control">
                </div>
                <div class="col-12">
                    <label for="">About us heading</label>
                    <input type="text" class="form-control" name="heading" value={{ $about->heading }}>
                </div>
                <div class="col-12">
                    <label for="">First Paragraph</label>
                    <textarea name="para1" id="" cols="30" rows="5" class="form-control">{{ $about->para1 }}</textarea>
                </div>
                <div class="col-12">
                    <label for="">Second Paragraph</label>
                    <textarea name="para2" id="" cols="30" rows="5" class="form-control">{{ $about->para1 }}</textarea>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-success">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</x-dashboard>
