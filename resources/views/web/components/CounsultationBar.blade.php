
<?php
use App\Http\Controllers\FrontEndController;
$settings = FrontEndController::settings();
?>

<section class="pt40 pb40 bg-color text-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8 mb-sm-30 text-lg-left text-sm-center">
                <h3 class="no-bottom">{{@$settings['consultation_bar_text']}}</h3>
            </div>
            <div class="col-md-4 text-lg-right rtl-lg-left text-sm-center">
                <a href="{{url(@$settings['consultation_bar_button_link'])}}" class="btn-custom btn-black light">{{@$settings['consultation_bar_button_label']}}</a>
            </div>
        </div>
    </div>
</section>