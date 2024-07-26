@extends('layouts.master')

@section('calculate-mortage-section')


<div class="page-banner-area bg-gray2">
<div class="container mw-1380">
<div class="row align-items-center">
<div class="col-lg-6">
<div class="page-banner-content">
<ul class="ps-0 list-unstyled breadcrumbs">
<li>
<a href="index.html">Home</a>
</li>
<li>
<span>Calculate Mortgage</span>
</li>
</ul>
<h2>Mortgage Miracles: Transforming Dreams into Dwellings in the Real Estate Universe</h2>
<p>We truly care about what is best for you! From pre-approval to closing, our goal is to provide you with the best service while saving you money. We provide a completely customized experience, and will find the right loan program and best terms for you.</p>
<a href="loan-programs.html" class="read-more text-primary">
View All Program Loans
<i class="flaticon-right-arrow"></i>
</a>
</div>
</div>
<div class="col-lg-6">
<div class="page-banner-img text-center text-lg-end position-relative z-1">
<img src="assets/images/banner-img-5.jpg" class="img" alt="banner-img">
<img src="assets/images/shape-7.png" class="shape shape-7" alt="shape">
<img src="assets/images/shape-8.png" class="shape shape-8" alt="shape">
</div>
</div>
</div>
</div>
</div>


<div class="calculate-area ptb-130">
<div class="container mw-1380">
<div class="row justify-content-center">
<div class="col-lg-6 ps-lg-0">
<div class="calculate-form bg-gray2">
<h3>Calculate your Mortgage</h3>
<form>
<div class="form-group">
<label class="label">Total Amount</label>
<select class="form-select form-control" aria-label="Default select example">
<option selected>$45,000</option>
<option value="1">$48,000</option>
<option value="2">$51,000</option>
<option value="3">$55,000</option>
</select>
</div>
<div class="form-group">
<label class="label">Interest Rate</label>
<select class="form-select form-control" aria-label="Default select example">
<option selected>08%</option>
<option value="1">09%</option>
<option value="2">10%</option>
<option value="3">15%</option>
</select>
</div>
<div class="form-group">
<label class="label">Down Payment</label>
<select class="form-select form-control" aria-label="Default select example">
<option selected>$12,000</option>
<option value="1">$14,000</option>
<option value="2">$16,000</option>
<option value="3">$18,000</option>
</select>
</div>
<div class="form-group">
<label class="label">Mortgage Period</label>
<select class="form-select form-control" aria-label="Default select example">
<option selected>08 Years</option>
<option value="1">07 Years</option>
<option value="2">09 Years</option>
<option value="3">10 Years</option>
</select>
</div>
<div class="form-group">
<button type="submit" class="btn border-0">
Calculate Mortgage
</button>
</div>
</form>
</div>
</div>
</div>
<div class="table-responsive calculate-table">
<table class="table table-dark">
<thead>
<tr>
<th scope="col">Principal Amount</th>
<th scope="col">Years</th>
<th scope="col">Monthly Payment</th>
<th scope="col">Balance Payable With Interest</th>
<th scope="col">Total With Down Payment</th>
</tr>
</thead>
<tbody>
<tr>
<td>$24,000.00</td>
<td>08</td>
<td>$234.20</td>
<td>$33,725.38</td>
<td>$39,725.38</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>


@endsection