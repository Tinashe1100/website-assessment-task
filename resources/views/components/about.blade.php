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
                    <a href="" class="btn btn-primary about-link-1">Who We Are</a>
                    <a href="" class="btn btn-primary about-link-2">Our Vision</a>
                    <a href="" class="btn btn-primary about-link-3">Our History</a>

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
