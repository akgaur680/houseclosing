<?php
use App\Http\Controllers\FrontEndController;
$testimonials = FrontEndController::testimonials();
?>

<style>
div
{
    color:black;
}
</style>
<section>
<div class="container-fluid p-0">
    <img src="{{asset('assets/images/testimonial-bg.jpg')}}" alt="testimonial-bg">
</div>
<div class="testimonials-area">
    <div class="container mw-1380">
        <div class="swiper testimonials-slide position-relative">
            <div class="swiper-wrapper">
                @foreach (@$testimonials as $testimonial )
                
                <div class="swiper-slide">
                    <div class="testimonials-single-item position-relative z-1">
                        <ul class="ps-0 list-unstyled d-flex justify-content-center gap-1">
                            <li>
                                <i class="ri-star-fill"></i>
                            </li>
                            <li>
                                <i class="ri-star-fill"></i>
                            </li>
                            <li>
                                <i class="ri-star-fill"></i>
                            </li>
                            <li>
                                <i class="ri-star-fill"></i>
                            </li>
                            <li>
                                <i class="ri-star-fill"></i>
                            </li>
                        </ul>  
                        <p>
                            {{@$testimonial['comment']}}
                        </p>
                        <div class="d-flex justify-content-center">
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="flex-shrink-0">
                                    @if (@$testimonial['img'])
                                    <img src="{{asset(@$testimonial['img'])}}" class="rounded-circle img" alt="testimonial" />
                                        @else
                                        <img src="{{asset('assets/images/default.webp')}}" class="rounded-circle img" alt="testimonial" />
                                    @endif
                                </div>
                                <div class="flex-grow-1 ms-3 text-start">
                                    <h3> {{@$testimonial['name']}} </h3>
                                    <!-- <span>05 days ago</span> -->
                                </div>
                            </div>
                        </div>
                        <img src="{{asset('assets/images/shape-1.png')}}" class="shape shape-1" alt="shape" />
                    </div>
                </div>
                @endforeach
                
            </div>
            <div class="testimonials-controller">
                <div class="controller-icon prev3">
                    <i class="flaticon-left-arrow"></i>
                </div>
                <div class="controller-icon next3">
                    <i class="flaticon-right-arrow"></i>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
