<section class="landing" id="landing">
    <div class="container">
        <div class="row justify-content-center py-5">
            @foreach ($landing as $item)
                <div class="col-lg-6 my-auto order-sm-last order-md-first">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="landing-head">{{ $item->heading }}</h1>
                            <p class="landing-text">{{ $item->para }}</p>
                        </div>
                        <div class="col-12">
                            <a href=""
                                class="btn btn-light get-started-btn text-primary px-4 py-2 fw-semibold">Get
                                Started</a>

                            <a href=""
                                class="d-inline-flex align-items-center btn btn-transparent watch-intro-btn text-light px-4 py-2"><i
                                    class="bi bi-play-circle-fill text-light fs-3 me-2"></i>Watch Intro</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-md-last">
                    <img src={{ asset('storage/' . $item->image) }} alt="hero-img" class="img-fluid p-2 rounded-4">
                </div>
            @endforeach
        </div>
    </div>
</section>
