<?php
use App\Http\Controllers\FrontEndController;
$testimonials = FrontEndController::testimonials();
$settings = FrontEndController::settings();
?>

<style>
div
{
    color:black;
}
</style>
<section aria-label="section" class="text-light" data-bgimage="linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)) 0% -32px / cover,
url('{{ asset(@$settings['testimonial_bg_image']) }}') top"
    data-stellar-background-ratio=".2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center text-light">
                    <h2>Testimonials</h2>
                    <div class="small-border"></div>
                </div>
                <div class="owl-carousel owl-theme" id="testimonial-carousel">
                    @foreach ($testimonials as $testimonial)
                        <div class="item">
                            <div class="de_testi opt-2 review">
                                <blockquote>
                                    <i class="fa fa-quote-left id-color"></i>
                                    <h3>{{ $testimonial['name'] }}</h3>
                                    <p>{{ $testimonial['review_text'] }}</p>
                                    <div class="de_testi_by">
                                        <span>{{ $testimonial['position'] }}</span>
                                    </div>
                                    <div class="de_testi_img">
                                        <img src="{{ asset($testimonial['image']) }}" alt="{{ $testimonial['name'] }}"
                                            style="display: block;width: 100%;height: 50px;width: auto;border-radius: 50%;">
                                    </div>
                                </blockquote>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
