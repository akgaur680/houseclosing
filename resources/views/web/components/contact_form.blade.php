<div class="col-lg-6">
    <div class="contact-us-content">
        <h2>Contact with us for any help needed from our company</h2>
        @if ($errors->any())
                            <div class="alert alert-danger" id="contact_form">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if (session('success'))
                            <div class="alert alert-success" id="contact_form">
                                {{ session('success') }}
                            </div>
                        @endif
                        
        <form class="contact-us-form" action="{{route('contact.store')}}" method="POST">
            @csrf
            <div class="mb-3 row align-items-center">
                <label class="col-sm-2 col-form-label label">Your email</label>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" value="{{old('email')}}" required>
                    @error('email')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row align-items-center">
                <label class="col-sm-2 col-form-label label">Your name</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" value="{{old('name')}}" required>
                    @error('name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row align-items-center">
                <label class="col-sm-2 col-form-label label">Phone</label>
                <div class="col-sm-10">
                    <input type="text" name="phone" class="form-control" value="{{old('phone')}}">
                    @error('phone')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="mb-3 row align-items-center">
                <label class="col-sm-2 col-form-label label">Zip Code</label>
                <div class="col-sm-10">
                    <input type="text" name="zipcode" class="form-control" value="{{old('zipcode')}}">
                    @error('zipcode')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <label class="col-sm-2 col-form-label label">Message</label>
                <div class="col-sm-10">
                    <textarea cols="30" rows="5" name="message" class="form-control" required> {{old('message')}} </textarea>
                    @error('message')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="g-recaptcha" data-sitekey="6Lc4NBoqAAAAACD1FiX596PGkcmpPpcbhobQsDte" style="padding: 10px;
                                margin: 10px;"></div>
                    @if ($errors->has('g-recaptcha-response'))
                    <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                    @endif

                </div>
            </div>
            <div class="pt-lg-3 mb-3 row">
                <label class="col-sm-2 col-form-label label"></label>
                <div class="col-sm-10">
                    <button class="btn btn-dark border-0" type="submit">
                        Submit Your Message
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script type="text/javascript">
    jQuery("html").animate({
        scrollTop:jQuery("#contact_form").offset().top - 150
    });

    
</script>
