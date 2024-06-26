<section class="about" id="about">
    <div class="container">
        <div class="row justify-content-center py-5 g-4">
            @foreach ($about as $item)
                <div class="col-lg-6">
                    <img src={{ asset('storage/' . $item->image) }} alt="about-img" class="img-fluid p-2 ">
                </div>

                <div class="col-lg-6 my-auto">
                    <h3>Our Story</h3>
                    <h1>
                        {{ $item->heading }}
                    </h1>

                    <div class="my-3 p-3 fs-4 rounded-3" style="background-color: #f5f4f4">
                        <span class="badge text-bg-primary">Who We Are</span>
                        <span class="badge text-bg-primary">Our Vision</span>
                        <span class="badge text-bg-primary">Our History</span>
                    </div>

                    <p class="about-us">
                        {{ $item->para1 }}
                    <p class="about-us-2">
                        {{ $item->para2 }}
                    </p>
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</section>
