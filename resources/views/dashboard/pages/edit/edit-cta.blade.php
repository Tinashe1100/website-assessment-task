<x-dashboard>
    <div class="row">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Call To Action</h1>
        </div>
        <div class="col-lg-4">

            <form action="/dashboard/update-cta/{{ $cta->id }}" method="POST" class="row gy-3 form-group">
                @csrf
                @method('PUT')

                <div class="col-12">
                    <label for="cta" class="form-label">CTA Heading</label>
                    <input type="text" name="heading" id="cta" value="{{ $cta->heading }}"
                        class="form-control">
                    @error('heading')
                        <p class="text-danger mt-1">{{ $message }}</p>
                    @enderror

                </div>

                <div class="col-12">
                    <label for="cta_para" class="form-label">CTA Heading</label>
                    <textarea name="paragraph" id="cta_para" cols="30" rows="7" class="form-control">{{ $cta->paragraph }}</textarea>
                    @error('paragraph')
                        <p class="text-danger mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="cta_btn" class="form-label">CTA Button</label>
                    <input type="text" class="form-control" id="cta_btn" name="cta_button"
                        value="{{ $cta->cta_button }}">
                    </textarea>
                    @error('cta_button')
                        <p class="text-danger mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-success">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</x-dashboard>
