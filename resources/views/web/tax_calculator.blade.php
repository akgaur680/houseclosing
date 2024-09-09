@extends('layouts.web')

@section('content')
<div class="banner-area banner-bg-2">
    <div class="container mw-1380">
        <div class="row">
            <div class="col-lg-7">
                <div class="banner-content style-two">
                    <h1>Land Transfer Tax Calculator</h1>
                    <p>The calculations provided by this Land Transfer Tax Calculator are intended for general informational purposes only and are not guaranteed to be accurate.</p>

                </div>
            </div>
            <div class="col-lg-5">
                <div class="calculate-form bg-gray2 position-relative">
                    <h3>Calculate your Tax</h3>
                    <form class="contact-us-form" id="taxForm">
                        <div class="form-group">
                            <label for="purchasePrice" class="label">Price</label>
                            <input type="text" class="form-control" name="purchasePrice" id="purchasePrice" style="background: none;" placeholder="$ Enter amount" required>

                        </div>
                        <div class="form-group">
                            <label for="location" class="label">Location</label>
                            <select class="form-select form-control"  id="location" name="location" required>
                                <!-- <option selected>08%</option>
                                <option value="1">09%</option>
                                <option value="2">10%</option>
                                <option value="3">15%</option> -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label>
                                <input type="checkbox" id="firstTimeBuyer" name="firstTimeBuyer" style="display: inline-block;width: max-content;">
                                I'm a first time home buyer
                            </label>
                            <div class="result" id="result">
                                <table>
                                    <tr>
                                        <th colspan="2">Determining your land transfer tax </th>
                                    </tr>
                                    <tr>
                                        <td style="width: 70%;">&nbsp;&nbsp;Provincial Tax</td>
                                        <td id="provincialTax">$0</td>
                                    </tr>
                                    <tr>
                                        <td style="width: 70%;">+ Municipal Tax</td>
                                        <td id="municipalTax">$0</td>
                                    </tr>
                                    <tr>
                                        <td style="width: 70%;">- Rebate</td>
                                        <td id="rebate">$0</td>
                                    </tr>
                                    <tr>
                                        <th>= Total Land Transfer Tax</th>
                                        <th id="totalTax">$0</th>
                                    </tr>
                                </table>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container mw-1570">
        <div class="banner-img">
            <img src="{{url('assets/images/banner-4.jpg')}}" alt="banner">
        </div>
    </div>
</div>
@endsection