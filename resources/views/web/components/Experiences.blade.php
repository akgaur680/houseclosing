<?php
use App\Http\Controllers\FrontEndController;
$experience = FrontEndController::experience();
?>

<section data-bgcolor="#f2f2f2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 offset-lg-7">
                <span class="p-title">{{ $experience['label'] }}</span><br>
                <h2>{{ $experience['title'] }}</h2>

                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    @foreach ($experience['experience_categories'] as $index => $category)
                        <li class="nav-item">
                            <a class="nav-link {{ $index == 0 ? 'active' : '' }}" id="pills-tab-{{ $category['id'] }}" data-toggle="pill" href="#tab-content-{{ $category['id'] }}" role="tab" aria-controls="tab-content-{{ $category['id'] }}" aria-selected="{{ $index == 0 ? 'true' : 'false' }}">
                                {{ $category['label'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>

                <div class="tab-content" id="pills-tabContent">
                    @foreach ($experience['experience_categories'] as $index => $category)
                        <div class="tab-pane fade {{ $index == 0 ? 'show active' : '' }}" id="tab-content-{{ $category['id'] }}" role="tabpanel" aria-labelledby="pills-tab-{{ $category['id'] }}">
                            <p>{{ $category['description'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="image-container col-md-6 pull-right" data-bgimage="linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)) 0% 0% / cover,
    url('{{ @$experience['image'] }}') center">
    </div>
</section>
