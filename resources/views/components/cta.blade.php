<section class="cta" id="cta">
    <div class="container">
        <div class="row justify-content-center text-center py-5">
            <div class="col-lg-5">
                @foreach ($ctas as $cta)
                    <h1 class="cta-header text-light">
                        {{ $cta->heading }}
                    </h1>
                    <p class="my-4 cta-text text-light">
                        {{ $cta->paragraph }}
                    </p>
                    <a href="" class="btn btn-outline-light cta-get-started fw-semibold px-3">
                        {{ $cta->cta_button }}</a>
                @endforeach
            </div>
        </div>
    </div>
</section>

<style>
    .cta {
        background-image: url('assets/img/cta.png');
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        background-color: #155bd5;
    }
</style>
