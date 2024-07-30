@extends('layouts.web')


@section('content')

<section>
<div class="container">
<div class="modal fade" id="sendQuoteModal" tabindex="-1" aria-labelledby="sendQuoteModal" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Email Quote</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<form method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
<div class="modal-body">
<input type="hidden" name="ServiceType">
<input type="hidden" name="PromoCode">
<input type="hidden" name="BuyHomeModelPrice">
<input type="hidden" name="BuyHomeModelHeadPrice">
<input type="hidden" name="BuyHomeModelHst">
<input type="hidden" name="SellHomeModelPrice">
<input type="hidden" name="SellHomeModelHeadPrice">
<input type="hidden" name="SellHomeModelHst">
<input type="hidden" name="BuyHomeModelFirstTimeHomeBuyer">
<input type="hidden" name="BuyHomeModelLocation">
<input type="hidden" name="BuyHomeModelOntarioTransferTax">
<input type="hidden" name="BuyHomeModelLessOntarioTransferTax">
<input type="hidden" name="BuyHomeModelTorontoTransferTax">
<input type="hidden" name="BuyHomeModelLessTorontoTransferTax">
<input type="hidden" name="BuyHomeModelTorontoAdminFee">
<input type="hidden" name="BuyHomeModelFee">
<input type="hidden" name="BuyHomeModelTotal">
<input type="hidden" name="BuyInsurancePrem">
<input type="hidden" name="MortInsurancePrem">
<input type="hidden" name="MortInsuranceAmt">
<input type="hidden" name="PromoCodeValue">
<input type="hidden" name="PromoCodeText">
<input type="hidden" name="PromoBuyerCodeValue">
<input type="hidden" name="PromoSellerCodeValue">
<div class="form-group">
<input type="email" class="form-control" name="email" placeholder="Enter email address">
</div>
<div class="form-group">
<input type="email" class="form-control" name="otheremail" placeholder="Other Email Address?" autocomplete="off">
</div>
<div class="form-group">
<input type="email" class="form-control" name="otheremails" placeholder="Other Email Address?" autocomplete="off">
</div>
<div class="form-group">
<div class="g-recaptcha" data-sitekey="6LemLFsfAAAAAOpU9Yo64DPldlYcqCnim7vfCjAK"></div>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary close-modal" data-dismiss="modal">Close</button>
<button type="button" data-action="submit" class="btn btn-primary email-quote">Email Quote</button>
<div id="loader" style="display:none;height: 20px;">
<img decoding="async" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAeAAAAHaAQMAAADi+wgdAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAADJJREFUGBntwYEAAAAAw6D7Uw/gCtUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAATnDyAAEx2Zv4AAAAAElFTkSuQmCC" width="20" alt="Please wait.." data-src="/linked-files/loading_gray.gif" class="lazyload" data-eio-rwidth="480" data-eio-rheight="474" /><noscript><img decoding="async" src="/linked-files/loading_gray.gif" width="20" alt="Please wait.." data-eio="l" /></noscript>
</div>
</div>
</form>
</div>
</div>
</div>
<section class="quote-quote-section my-5">
<div class="container-fluid">
    <h1>Get Quote</h1>
    <h3>Laks.ca LLP</h3>
<div class="rows-container position-relative">
<div class="first-row mt-2">
<div class="d-flex align-items-center mb-3 title">
<span class="num rounded-circle text-center text-white mr-4">1</span>
<h2 class="h5 font-weight-900">Choose your Legal Service</h2>
</div>
<div class="row mb-2 mb-lg-5 px-4 px-xl-5">
<div class="col-6 col-sm text-center box-item pointer" data-f-row="1">
<div class="inner-box-item h-100 p-2">
<div class="icon text-white px-2 py-4">
<img decoding="async" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAA2AQMAAAC/YFjkAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAA1JREFUGBljGAVDCgAAAbAAAYMdq+kAAAAASUVORK5CYII=" alt="icon" data-src="/linked-files/3.png" class="lazyload ewww_webp_lazy_load" data-eio-rwidth="50" data-eio-rheight="54" data-src-webp="/linked-files/3.png.webp"><noscript><img decoding="async" src=" /linked-files/3.png" alt="icon" data-eio="l"></noscript>
</div>
<h3 class="h6 font-weight-normal box-title">Real Estate Transaction</h3>
</div>
</div>
<div class="col-6 col-sm text-center box-item pointer" data-f-row="2">
<div class="inner-box-item h-100 p-2">
<div class="icon text-white px-2 py-4">
<img decoding="async" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADMAAAAyAQMAAADLM3HMAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAA1JREFUGBljGAWDCgAAAZAAAcH2qj4AAAAASUVORK5CYII=" alt="icon" data-src="/linked-files/7.png" class="lazyload ewww_webp_lazy_load" data-eio-rwidth="51" data-eio-rheight="50" data-src-webp="/linked-files/7.png.webp"><noscript><img decoding="async" src=" /linked-files/7.png" alt="icon" data-eio="l"></noscript>
</div>
<h3 class="h6 font-weight-normal box-title">Wills, Probate & Power of Attorney</h3>
</div>
</div>
<div class="col-6 col-sm text-center box-item pointer" data-f-row="3">
<div class="inner-box-item h-100 p-2">
<div class="icon text-white px-2 py-4">
<img decoding="async" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADcAAAA3AQMAAACSFUAFAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAA1JREFUGBljGAVDEgAAAbgAAdk/KPgAAAAASUVORK5CYII=" alt="icon" data-src="/linked-files/11.png" class="lazyload ewww_webp_lazy_load" data-eio-rwidth="55" data-eio-rheight="55" data-src-webp="/linked-files/11.png.webp"><noscript><img decoding="async" src=" /linked-files/11.png" alt="icon" data-eio="l"></noscript>
</div>
<h3 class="h6 font-weight-normal box-title">Corporate & Commercial</h3>
</div>
</div>
<div class="col-6 col-sm text-center box-item pointer" data-f-row="4">
<div class="inner-box-item h-100 p-2">
<div class="icon text-white px-2 py-4">
<img decoding="async" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADQAAAAzAQMAAADis7kQAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAA1JREFUGBljGAWDEgAAAZgAAZvUKS8AAAAASUVORK5CYII=" alt="icon" data-src="/linked-files/12.png" class="lazyload ewww_webp_lazy_load" data-eio-rwidth="52" data-eio-rheight="51" data-src-webp="/linked-files/12.png.webp"><noscript><img decoding="async" src=" /linked-files/12.png" alt="icon" data-eio="l"></noscript>
</div>
<h3 class="h6 font-weight-normal box-title">Notarizing & Commission</h3>
</div>
</div>
<div class="offset-sm-2"></div>
</div>
</div>
<div class="second-row mt-2 position-relative">
<div class="d-flex align-items-center title mb-4">
<span class="num rounded-circle text-center text-white mr-4">2</span>
<h2 class="h5 font-weight-900">Choose your type of transaction</h2>
</div>
<div class="overlay"></div>
<div class="px-4 px-xl-5">
<div class="second-row-box second-row-box_1">
<div class="row mb-5">
<div class="col-6 col-sm text-center box-item pointer" data-s-row="1">
<div class="inner-box-item h-100 p-2">
<div class="icon text-white pointer px-2 py-4">
<img decoding="async" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADEAAAA0AQMAAAAZn0LsAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAA1JREFUGBljGAWDGgAAAaAAAYJD02AAAAAASUVORK5CYII=" alt="icon" data-src="/linked-files/1.png" class="lazyload ewww_webp_lazy_load" data-eio-rwidth="49" data-eio-rheight="52" data-src-webp="/linked-files/1.png.webp"><noscript><img decoding="async" src=" /linked-files/1.png" alt="icon" data-eio="l"></noscript>
</div>
<h3 class="h6 font-weight-normal box-title">Buying Real Estate</h3>
</div>
</div>
<div class="col-6 col-sm text-center box-item pointer" data-s-row="2">
<div class="inner-box-item h-100 p-2">
<div class="icon text-white pointer px-2 py-4">
<img decoding="async" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADYAAAA1AQMAAAAwH4owAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAA1JREFUGBljGAVDAgAAAagAAaLHF0YAAAAASUVORK5CYII=" alt="icon" data-src="/linked-files/2.png" class="lazyload ewww_webp_lazy_load" data-eio-rwidth="54" data-eio-rheight="53" data-src-webp="/linked-files/2.png.webp"><noscript><img decoding="async" src=" /linked-files/2.png" alt="icon" data-eio="l"></noscript>
</div>
<h3 class="h6 font-weight-normal box-title">Selling Real Estate</h3>
</div>
</div>
<div class="col-6 col-sm text-center box-item pointer" data-s-row="3">
<div class="inner-box-item h-100 p-2">
<div class="icon text-white pointer px-2 py-4">
<img decoding="async" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA7AQMAAAAdN3uJAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAA5JREFUGBljGAWjABUAAAITAAFvIDXvAAAAAElFTkSuQmCC" alt="icon" data-src="/linked-files/6.png" class="lazyload ewww_webp_lazy_load" data-eio-rwidth="60" data-eio-rheight="59" data-src-webp="/linked-files/6.png.webp"><noscript><img decoding="async" src=" /linked-files/6.png" alt="icon" data-eio="l"></noscript>
</div>
<h3 class="h6 font-weight-normal box-title">Buying/Selling Real Estate</h3>
</div>
</div>
<div class="col-6 col-sm text-center box-item pointer" data-s-row="4">
<div class="inner-box-item h-100 p-2">
<div class="icon text-white pointer px-2 py-4">
<img decoding="async" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADwAAAA9AQMAAADLbpiUAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAA5JREFUGBljGAWjgBAAAAIlAAFOxQawAAAAAElFTkSuQmCC" alt="icon" data-src="/linked-files/5.png" class="lazyload ewww_webp_lazy_load" data-eio-rwidth="60" data-eio-rheight="61" data-src-webp="/linked-files/5.png.webp"><noscript><img decoding="async" src=" /linked-files/5.png" alt="icon" data-eio="l"></noscript>
</div>
<h3 class="h6 font-weight-normal box-title">Mortgage Transactions</h3>
</div>
</div>
<div class="col-6 col-sm text-center box-item pointer" data-s-row="5">
<div class="inner-box-item h-100 p-2">
<div class="icon text-white pointer px-2 py-4">
<img decoding="async" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADcAAAA3AQMAAACSFUAFAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAA1JREFUGBljGAVDEgAAAbgAAdk/KPgAAAAASUVORK5CYII=" alt="icon" data-src="/linked-files/4.png" class="lazyload ewww_webp_lazy_load" data-eio-rwidth="55" data-eio-rheight="55" data-src-webp="/linked-files/4.png.webp"><noscript><img decoding="async" src=" /linked-files/4.png" alt="icon" data-eio="l"></noscript>
</div>
<h3 class="h6 font-weight-normal box-title">Transfer of Ownership / Title</h3>
</div>
</div>
</div>
</div>
<div class="second-row-box second-row-box_2">
<div class="row mb-5">
<div class="col-6 col-sm text-center box-item pointer" data-s-row="1">
<div class="inner-box-item h-100 p-2">
<div class="icon text-white pointer px-2 py-4">
<img decoding="async" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACsAAAA0AQMAAAApE1PNAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAAxJREFUGBljGAV0AwABbAAB4P41HAAAAABJRU5ErkJggg==" alt="icon" data-src="/linked-files/quote-2-1.png" class="lazyload ewww_webp_lazy_load" data-eio-rwidth="43" data-eio-rheight="52" data-src-webp="/linked-files/quote-2-1.png.webp"><noscript><img decoding="async" src=" /linked-files/quote-2-1.png" alt="icon" data-eio="l"></noscript>
</div>
<h3 class="h6 font-weight-normal box-title">Individual Will</h3>
</div>
</div>
<div class="col-6 col-sm text-center box-item pointer" data-s-row="2">
<div class="inner-box-item h-100 p-2">
<div class="icon text-white pointer px-2 py-4">
<img decoding="async" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADoAAAA1AQMAAAAqI2q+AAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAA1JREFUGBljGAXDFwAAAd0AAZYgi04AAAAASUVORK5CYII=" alt="icon" data-src="/linked-files/quote-2-2.png" class="lazyload ewww_webp_lazy_load" data-eio-rwidth="58" data-eio-rheight="53" data-src-webp="/linked-files/quote-2-2.png.webp"><noscript><img decoding="async" src=" /linked-files/quote-2-2.png" alt="icon" data-eio="l"></noscript>
</div>
<h3 class="h6 font-weight-normal box-title">Couples Will</h3>
</div>
</div>
<div class="col-6 col-sm text-center box-item pointer" data-s-row="3">
<div class="inner-box-item h-100 p-2">
<div class="icon text-white pointer px-2 py-4">
<img decoding="async" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwAQMAAABtzGvEAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAAxJREFUGBljGAVUBQABUAAB1GvzaQAAAABJRU5ErkJggg==" alt="icon" data-src="/linked-files/quote-2-3.png" class="lazyload ewww_webp_lazy_load" data-eio-rwidth="48" data-eio-rheight="48" data-src-webp="/linked-files/quote-2-3.png.webp"><noscript><img decoding="async" src=" /linked-files/quote-2-3.png" alt="icon" data-eio="l"></noscript>
</div>
<h3 class="h6 font-weight-normal box-title">Power Of Attorney</h3>
</div>
</div>
<div class="col-6 col-sm text-center box-item pointer" data-s-row="4">
<div class="inner-box-item h-100 p-2">
<div class="icon text-white pointer px-2 py-4">
<img decoding="async" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADUAAAAwAQMAAACL5aCAAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAAxJREFUGBljGAUDCgABgAABTsajtQAAAABJRU5ErkJggg==" alt="icon" data-src="/linked-files/quote-2-4.png" class="lazyload ewww_webp_lazy_load" data-eio-rwidth="53" data-eio-rheight="48" data-src-webp="/linked-files/quote-2-4.png.webp"><noscript><img decoding="async" src=" /linked-files/quote-2-4.png" alt="icon" data-eio="l"></noscript>
</div>
<h3 class="h6 font-weight-normal box-title">Estates & Probate</h3>
</div>
</div>
<div class="offset-sm-2"></div>
</div>
</div>
<div class="second-row-box second-row-box_3">
<div class="row mb-5">
<div class="col-6 col-sm text-center box-item pointer" data-s-row="1">
<div class="inner-box-item h-100 p-2">
<div class="icon text-white pointer px-2 py-4">
<img decoding="async" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADYAAAA1AQMAAAAwH4owAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAA1JREFUGBljGAVDAgAAAagAAaLHF0YAAAAASUVORK5CYII=" alt="icon" data-src="/linked-files/9.png" class="lazyload ewww_webp_lazy_load" data-eio-rwidth="54" data-eio-rheight="53" data-src-webp="/linked-files/9.png.webp"><noscript><img decoding="async" src=" /linked-files/9.png" alt="icon" data-eio="l"></noscript>
</div>
<h3 class="h6 font-weight-normal box-title">Incorporation</h3>
</div>
</div>
<div class="col-6 col-sm text-center box-item pointer" data-s-row="2">
<div class="inner-box-item h-100 p-2">
<div class="icon text-white pointer px-2 py-4">
<img decoding="async" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADcAAAA3AQMAAACSFUAFAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAA1JREFUGBljGAVDEgAAAbgAAdk/KPgAAAAASUVORK5CYII=" alt="icon" data-src="/linked-files/quote-3-2.png" class="lazyload ewww_webp_lazy_load" data-eio-rwidth="55" data-eio-rheight="55" data-src-webp="/linked-files/quote-3-2.png.webp"><noscript><img decoding="async" src=" /linked-files/quote-3-2.png" alt="icon" data-eio="l"></noscript>
</div>
<h3 class="h6 font-weight-normal box-title">Leases</h3>
</div>
</div>
<div class="col-6 col-sm text-center box-item pointer" data-s-row="3">
<div class="inner-box-item h-100 p-2">
<div class="icon text-white pointer px-2 py-4">
<img decoding="async" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADUAAAA2AQMAAABdvEOdAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAA1JREFUGBljGAVDCgAAAbAAAYMdq+kAAAAASUVORK5CYII=" alt="icon" data-src="/linked-files/10.png" class="lazyload ewww_webp_lazy_load" data-eio-rwidth="53" data-eio-rheight="54" data-src-webp="/linked-files/10.png.webp"><noscript><img decoding="async" src=" /linked-files/10.png" alt="icon" data-eio="l"></noscript>
</div>
<h3 class="h6 font-weight-normal box-title">Share or Asset Transactions</h3>
</div>
</div>
<div class="offset-sm-4"></div>
</div>
</div>
<div class="second-row-box second-row-box_4">
<div class="row mb-5">
<div class="col-6 col-sm text-center box-item pointer" data-s-row="1">
<div class="inner-box-item h-100 p-2">
<div class="icon text-white pointer px-2 py-4">
<img decoding="async" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACkAAAA1AQMAAADmulBVAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAAxJREFUGBljGAX0BgABcwABL1+qEAAAAABJRU5ErkJggg==" alt="icon" data-src="/linked-files/quote-4-1.png" class="lazyload ewww_webp_lazy_load" data-eio-rwidth="41" data-eio-rheight="53" data-src-webp="/linked-files/quote-4-1.png.webp"><noscript><img decoding="async" src=" /linked-files/quote-4-1.png" alt="icon" data-eio="l"></noscript>
</div>
<h3 class="h6 font-weight-normal box-title">Notarizing</h3>
</div>
</div>
<div class="col-6 col-sm text-center box-item pointer" data-s-row="2">
<div class="inner-box-item h-100 p-2">
<div class="icon text-white pointer px-2 py-4">
<img decoding="async" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACsAAAAyAQMAAAD/SrDQAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAAxJREFUGBljGAU0BAABXgABnh9BIwAAAABJRU5ErkJggg==" alt="icon" data-src="/linked-files/quote-4-2.png" class="lazyload ewww_webp_lazy_load" data-eio-rwidth="43" data-eio-rheight="50" data-src-webp="/linked-files/quote-4-2.png.webp"><noscript><img decoding="async" src=" /linked-files/quote-4-2.png" alt="icon" data-eio="l"></noscript>
</div>
<h3 class="h6 font-weight-normal box-title">Commissioning</h3>
</div>
</div>
<div class="offset-sm-7"></div>
</div>
</div>
</div>
</div>
<div class="inner-content">
<div class="inner-box content_11">
<div class="row">
<div class="col-md-6">
<div class="mb-3">
<div class="d-flex align-items-center title mb-3">
<span class="num rounded-circle text-center text-white mr-4">3</span>
<h2 class="h5 font-weight-900">Enter the purchase price of your home</h2>
</div>
<div class="mx-5 price-input buying-input">
<input class="form-control pl-3 input-fill-prog" type="text" placeholder=" Enter Purchase Price Here" id="buy-purchase-price" data-progress="20">
</div>
</div>
<div class="mb-3">
<div class="d-flex align-items-center title mb-3">
<span class="num rounded-circle text-center text-white mr-4">4</span>
<h2 class="h5 font-weight-900">Are you a First Time Homebuyer</h2>
</div>
<div class="px-5">
<div class="mr-3">
<span class="hint text-muted">(i.e. Never owned a property anywhere in the
world)</span>
</div>
<div class="btns mt-2" data-progress="15">
<button class="btn fill-prog first-time-btn mb-2 font-weight-bold px-4 mr-3" data-ft="yes">Yes</button>
<button class="btn fill-prog first-time-btn mb-2 font-weight-bold px-4" id="first-time-No" data-ft="no">No</button>
</div>
</div>
</div>
<div class="mb-3">
<div class="d-flex align-items-center title mb-3">
<span class="num rounded-circle text-center text-white mr-4">5</span>
<h2 class="h5 mb-1 font-weight-900">Where is the Property Located?</h2>
</div>
<div class="px-5">
<div class="mr-3">
<span class="hint text-muted">Not Sure?</span>
<a class="red-text font-weight-500 text-underline" href="#">Click here</a>
</div>
<div class="btns mt-3" data-progress="15">
<button class="btn fill-prog buy-location-btn mb-2 font-weight-bold mr-3" data-location="in">In
Toronto</button>
<button class="btn fill-prog buy-location-btn mb-2 font-weight-bold" id="buy-location-Rest" data-location="rest">Rest of
Ontario</button>
</div>
</div>
</div>
<div class="mb-3">
<div class="d-flex align-items-center title mb-3">
<span class="num rounded-circle text-center text-white mr-4">6</span>
<h2 class="h5 mb-1 font-weight-900">Have a promo code?</h2>
</div>
<div class="px-5 promo-buying-input">
<input class="form-control pl-3 input-fill-prog" name="PromoCode" type="text" placeholder="Enter Promo Code Here">
</div>
</div>
</div>
</div>
</div>
<div class="inner-box content_12">
<div class="row">
<div class="col-md-6">
<div class="mb-3">
<div class="d-flex align-items-center title mb-3">
<span class="num rounded-circle text-center text-white mr-4">3</span>
<h2 class="h5 font-weight-900">Enter the selling price of your home</h2>
</div>
<div class="mx-5 price-input selling-input">
<input class="form-control pl-3 input-fill-prog" type="text" placeholder=" Enter Selling Price Here" data-progress="50">
</div>
</div>
<div class="mb-3">
<div class="d-flex align-items-center title mb-3">
<span class="num rounded-circle text-center text-white mr-4">4</span>
<h2 class="h5 mb-1 font-weight-900">Have a promo code?</h2>
</div>
<div class="px-5 promo-selling-input">
<input class="form-control pl-3 input-fill-prog" name="PromoCode" type="text" placeholder="Enter Promo Code Here">
</div>
</div>
</div>
</div>
</div>
<div class="inner-box content_13">
<div class="row">
<div class="col-md-6">
<div class="mb-3">
<div class="d-flex align-items-center title mb-3">
<span class="num rounded-circle text-center text-white mr-4">3</span>
<h2 class="h5 font-weight-900">Enter the selling price of your home</h2>
</div>
<div class="mx-5 price-input selling-input">
<input class="form-control pl-3 input-fill-prog" type="text" placeholder=" Enter Selling Price Here" id="buysell-selling-price" data-progress="15">
</div>
</div>
<div class="mb-3">
<div class="d-flex align-items-center title mb-3">
<span class="num rounded-circle text-center text-white mr-4">4</span>
<h2 class="h5 font-weight-900 input-fill-prog">Enter the purchase price of your home</h2>
</div>
<div class="mx-5 price-input buying-input">
<input class="form-control pl-3 input-fill-prog" type="text" placeholder=" Enter Purchase Price Here" id="buysell-purchase-price" data-progress="15">
</div>
</div>
<div class="mb-3">
<div class="d-flex align-items-center title mb-3">
<span class="num rounded-circle text-center text-white mr-4">5</span>
<h2 class="h5 font-weight-900">Are you a First Time Homebuyer</h2>
</div>
<div class="px-5">
<div class="mr-3">
<span class="hint text-muted">(i.e. Never owned a property anywhere in the
world)</span>
</div>
<div class="btns mt-2" data-progress="20">
<button class="btn fill-prog first-time-btn mb-2 font-weight-bold px-4 mr-3" data-ft="yes">Yes</button>
<button class="btn fill-prog first-time-btn mb-2 font-weight-bold px-4" id="first-time-No-buy-sell" data-ft="no">No</button>
</div>
</div>
</div>
<div class="mb-3">
<div class="d-flex align-items-center title mb-3">
<span class="num rounded-circle text-center text-white mr-4">6</span>
<h2 class="h5 mb-1 font-weight-900">Where is the Property Located?</h2>
</div>
<div class="px-5">
<div class="mr-3">
<span class="hint text-muted">Not Sure?</span>
<a class="red-text font-weight-500 text-underline" href="#">Click here</a>
</div>
<div class="btns mt-3" data-progress="25">
<button class="btn fill-prog buy-location-btn mb-2 font-weight-bold mr-3" data-location="in">In
Toronto</button>
<button class="btn fill-prog buy-location-btn mb-2 font-weight-bold" id="buy-location-Rest-buy-sell" data-location="rest">Rest of
Ontario</button>
</div>
</div>
</div>
<div class="mb-3">
<div class="d-flex align-items-center title mb-3">
<span class="num rounded-circle text-center text-white mr-4">7</span>
<h2 class="h5 mb-1 font-weight-900">Have a promo code?</h2>
</div>
<div class="px-5 promo-buy-sell-input">
<input class="form-control pl-3 input-fill-prog" name="PromoCode" type="text" placeholder="Enter Promo Code Here">
</div>
</div>
</div>
</div>
</div>
<div class="inner-box content_14">
<div class="row">
<div class="col-md-6">
<div class="mb-3">
<div class="d-flex align-items-center title mb-3">
<span class="num rounded-circle text-center text-white mr-4">3</span>
<h2 class="h5 font-weight-900">Enter the value of your Mortgage
</h2>
</div>
<div class="mx-5 price-input mortage-input">
<input class="form-control pl-3 input-fill-prog" type="text" placeholder=" Enter Mortgage Principle Here" id="mortgage-principle" data-progress="50">
</div>
</div>
<div class="mb-3">
<div class="d-flex align-items-center title mb-3">
<span class="num rounded-circle text-center text-white mr-4">4</span>
<h2 class="h5 mb-1 font-weight-900">Have a promo code?</h2>
</div>
<div class="px-5 promo-mortgage-input">
<input class="form-control pl-3 input-fill-prog" name="PromoCode" type="text" placeholder="Enter Promo Code Here">
</div>
</div>
</div>
</div>
</div>
<div class="inner-box content_15">
<div class="row">
<div class="col-md-6">
<div class="mb-3">
<div class="d-flex align-items-center title mb-3">
<span class="num rounded-circle text-center text-white mr-4">3</span>
<h2 class="h5 mb-1 font-weight-900">Have a promo code?</h2>
</div>
<div class="px-5 promo-transfer-input">
<input class="form-control pl-3 input-fill-prog" name="PromoCode" type="text" placeholder="Enter Promo Code Here">
</div>
</div>
</div>
</div>
</div>
<div class="inner-box content_21">
<div class="row">
<div class="col-md-6">
<div class="mb-3">
<div class="d-flex align-items-center title mb-3">
<span class="num rounded-circle text-center text-white mr-4">3</span>
<h2 class="h5 mb-1 font-weight-900">Have a promo code?</h2>
</div>
<div class="px-5 promo-input">
<input class="form-control pl-3 input-fill-prog" name="PromoCode" type="text" placeholder="Enter Promo Code Here">
</div>
</div>
</div>
</div>
</div>
<div class="inner-box content_22">
<div class="row">
<div class="col-md-6">
<div class="mb-3">
<div class="d-flex align-items-center title mb-3">
<span class="num rounded-circle text-center text-white mr-4">3</span>
<h2 class="h5 mb-1 font-weight-900">Have a promo code?</h2>
</div>
<div class="px-5 promo-input">
<input class="form-control pl-3 input-fill-prog" name="PromoCode" type="text" placeholder="Enter Promo Code Here">
</div>
</div>
</div>
</div>
</div>
<div class="inner-box content_23">
<div class="row">
<div class="col-md-6">
<div class="mb-3">
<div class="d-flex align-items-center title mb-3">
<span class="num rounded-circle text-center text-white mr-4">3</span>
<h2 class="h5 mb-1 font-weight-900">Have a promo code?</h2>
</div>
<div class="px-5 promo-input">
<input class="form-control pl-3 input-fill-prog" name="PromoCode" type="text" placeholder="Enter Promo Code Here">
</div>
</div>
</div>
</div>
</div>
<div class="inner-box content_24">
<div class="row">
<div class="col-md-6">
<div class="mb-3">
<div class="d-flex align-items-center title mb-3">
<span class="num rounded-circle text-center text-white mr-4">3</span>
<h2 class="h5 mb-1 font-weight-900">Have a promo code?</h2>
</div>
<div class="px-5 promo-input">
<input class="form-control pl-3 input-fill-prog" name="PromoCode" type="text" placeholder="Enter Promo Code Here">
</div>
</div>
</div>
</div>
</div>
<div class="inner-box content_31">
<div class="row">
<div class="col-md-6">
<div class="mb-3">
<div class="d-flex align-items-center title mb-3">
<span class="num rounded-circle text-center text-white mr-4">3</span>
<h2 class="h5 mb-1 font-weight-900">Have a promo code?</h2>
</div>
<div class="px-5 promo-input">
<input class="form-control pl-3 input-fill-prog" name="PromoCode" type="text" placeholder="Enter Promo Code Here">
</div>
</div>
</div>
</div>
</div>
<div class="inner-box content_32">
<div class="row">
<div class="col-md-6">
<div class="mb-3">
<div class="d-flex align-items-center title mb-3">
<span class="num rounded-circle text-center text-white mr-4">3</span>
<h2 class="h5 mb-1 font-weight-900">Have a promo code?</h2>
</div>
<div class="px-5 promo-input">
<input class="form-control pl-3 input-fill-prog" name="PromoCode" type="text" placeholder="Enter Promo Code Here">
</div>
</div>
</div>
</div>
</div>
<div class="inner-box content_33">
<div class="row">
<div class="col-md-6">
<div class="mb-3">
<div class="d-flex align-items-center title mb-3">
<span class="num rounded-circle text-center text-white mr-4">3</span>
<h2 class="h5 mb-1 font-weight-900">Have a promo code?</h2>
</div>
<div class="px-5 promo-input">
<input class="form-control pl-3 input-fill-prog" name="PromoCode" type="text" placeholder="Enter Promo Code Here">
</div>
</div>
</div>
</div>
</div>
<div class="inner-box content_41">
<div class="row">
<div class="col-md-6">
<div class="mb-3">
<div class="d-flex align-items-center title mb-3">
<span class="num rounded-circle text-center text-white mr-4">3</span>
<h2 class="h5 mb-1 font-weight-900">Have a promo code?</h2>
</div>
<div class="px-5 promo-input">
<input class="form-control pl-3 input-fill-prog" name="PromoCode" type="text" placeholder="Enter Promo Code Here">
</div>
</div>
</div>
</div>
</div>
<div class="inner-box content_42">
<div class="row">
<div class="col-md-6">
<div class="mb-3">
<div class="d-flex align-items-center title mb-3">
<span class="num rounded-circle text-center text-white mr-4">3</span>
<h2 class="h5 mb-1 font-weight-900">Have a promo code?</h2>
</div>
<div class="px-5 promo-input">
<input class="form-control pl-3 input-fill-prog" name="PromoCode" type="text" placeholder="Enter Promo Code Here">
</div>
</div>
</div>
</div>
</div>
</div>
<p class="bottom-text text-muted bg-white px-4 mt-5">
*Real Estate Lawyers.ca LLP (aka Parnes Rothman LLP) is proud to offer its clients a 100%
legal price match guarantee. We will match any law firm’s quote of the exact kind of service
as quoted by our online legal fee quotation provided their legal fee pricing complies with
LSO Rule 4.2-2.1. Real Estate Lawyers.ca LLP will honour our quote provided within 30 days
of the date such quote was provided to you and prior to the closing date. Please contact us
if you have any further questions
<br><br>
<strong>WARNING:</strong> The flat rate legal fee of Real Estate Lawyers.ca LLP only includes one (1) remote signing appointment and the payout of one (1) mortgage or line of credit. You are responsible for any legal fees beyond the flat rate such as bridge loans or additional payouts PLUS disbursements (only if applicable) such as govt. document registration fees, fees charged by govt., Teranet fees, costs of condo status certificate, lawyers creditor's letters as noted above.
<br><br>
<strong>If a third party is paying your legal fees for you - please note that you will still be responsible for ALL applicable disbursements and additional legal fees as noted above that are not specifically included in our flat rate legal fee.</strong>
</p>
</div>
<div class="loading text-center py-4">
<img decoding="async" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFkAAABgAQMAAABMsEyJAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAABFJREFUGBljGAWjYBSMgmEKAATgAAGddTVLAAAAAElFTkSuQmCC" alt="loading" data-src="/linked-files/loading.png" class="lazyload ewww_webp_lazy_load" data-eio-rwidth="89" data-eio-rheight="96" data-src-webp="/linked-files/loading.png.webp"><noscript><img decoding="async" src="/linked-files/loading.png" alt="loading" data-eio="l"></noscript>
</div>
<div class="tabs-container">
<div class="tab-container selling-tabs my-5"></div>
<div class="tab-container buying-tabs my-5"></div>
<div class="other-tabs"></div>
</div>
</div>
</section>
</div>
</section>


@endsection