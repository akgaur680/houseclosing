<div class="col-lg-6">
    <div class="contact-us-content">
        <h2>Contact with us for any help needed from our company</h2>
        <form class="contact-us-form" action="{{route('contact.store')}}" method="POST">
            @csrf
            <div class="mb-3 row align-items-center">
                <label class="col-sm-2 col-form-label label">Your email</label>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" value="" required>
                    @error('email')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row align-items-center">
                <label class="col-sm-2 col-form-label label">Your name</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" value="" required>
                    @error('name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row align-items-center">
                <label class="col-sm-2 col-form-label label">Phone</label>
                <div class="col-sm-10">
                    <input type="text" name="phone" class="form-control" value="">
                    @error('phone')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="mb-3 row align-items-center">
                <label class="col-sm-2 col-form-label label">Zip Code</label>
                <div class="col-sm-10">
                    <input type="text" name="zipcode" class="form-control" value="">
                    @error('zipcode')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <label class="col-sm-2 col-form-label label">Message</label>
                <div class="col-sm-10">
                    <textarea cols="30" rows="5" name="message" class="form-control" required></textarea>
                    @error('message')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="g-recaptcha" data-sitekey="6Lc4NBoqAAAAACD1FiX596PGkcmpPpcbhobQsDte" style="padding: 10px;
                                margin: 10px;">
                        <div style="width: 304px; height: 78px;">
                            <div><iframe title="reCAPTCHA" width="304" height="78" role="presentation" name="a-sh7okm7y41c0" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Lc4NBoqAAAAACD1FiX596PGkcmpPpcbhobQsDte&amp;co=aHR0cHM6Ly9ob3VzZWNsb3NpbmcuY2E6NDQz&amp;hl=en&amp;v=hfUfsXWZFeg83qqxrK27GB8P&amp;size=normal&amp;cb=6sv2zrd239ct"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                        </div><iframe style="display: none;"></iframe>
                    </div>
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