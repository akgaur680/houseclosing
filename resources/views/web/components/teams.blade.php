<?php
use App\Http\Controllers\FrontEndController;
$teams = FrontEndController::teams();
?>
<section aria-label="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>{{@$teams['title']}}</h2>
                <div class="small-border"></div>
            </div>
            @foreach (@$teams['team_members'] as $team)
            <div class="col-lg-4 col-md-6 col-sm-6 mb30 wow fadeInRight" data-wow-delay=".2s">
                <div class="f-profile text-center">
                    <div class="fp-wrap f-invert">
                        <div class="fpw-overlay">
                            
                        </div>
                        <div class="fpw-overlay-btm"></div>
                        <img src="{{ asset(@$team['image']) }}" class="fp-image img-fluid"
                            alt="">
                    </div>
                    <h4>{{@$team['name']}}</h4>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>