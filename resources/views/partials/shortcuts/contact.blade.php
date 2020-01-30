  <!-- CONTACT
      ============================== -->
      <div id="contact" class="p-top-90 p-bot-90">
        <div class="container">
          <div class="row">
            <div class="col-md-5 center-block wow fadeIn" data-wow-delay="0.30s">
              <div class="heading text-center">
                <h2 class="bold-font text-uppercase">Contact</h2>
                <div class="subheading">At vero eos et accusamus et iusto odio dignissimos accusamus et iusto odio dignissimos</div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 contactLeft wow fadeIn" data-wow-delay="0.35s">
              <!-- Alert message -->
              <div class="alert contact-form__alert" id="form_message" role="alert"></div>
              <!-- Contact form -->
              <!-- Please carefully read the Documentation
                in order to setup the PHP contact form properly -->
              <form class="contact__form" id="form_sendemail">
                <div class="row">
                  <!-- Name -->
                  <div class="form-group">
                    <label for="name" class="sr-only">Your name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Full Name">
                    <span class="help-block"></span>
                  </div>
                  <!-- Email -->
                  <div class="form-group">
                    <label for="email" class="sr-only">Your email address</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="E-mail">
                    <span class="help-block"></span>
                  </div>
                  <!-- Message -->
                  <div class="form-group">
                    <label for="message" class="sr-only">Your message</label>
                    <textarea name="message" class="form-control" rows="9" id="message" placeholder="Message"></textarea>
                    <span class="help-block"></span>
                  </div>
                  <!-- reCAPTCHA -->
                  <div class="form-group" id="form-captcha">
                    <div class="g-recaptcha" data-sitekey="YOUR_PUBLIC_KEY"></div>
                    <span class="help-block"></span>
                  </div>
                  <!-- /reCAPTCHA -->
                </div>
                <div class="text-center">
                  <button type="submit" class="submit"> Send message </button>
                  <div class="clearfix"></div>
                </div>
              </form>
            </div>
            <div class="col-md-6 contactRight wow fadeIn" data-wow-delay="0.40s">
              <div class="contacDetails">
                <div class="icon-map"></div>
                <h3>Contact details</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tincidunt, dui ac porta.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tincidunt, dui ac porta.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p> <i class="icon-pin"></i> 15-A Hendon Ave, Mount Albert Auckland, New Zealand</p>
                <p> <i class="icon-screen-smartphone"></i> +1800 1234 56789</p>
                <p> <i class="icon-envelope-open"></i> support@websitename.com</p>
                <p> <i class="icon-link"></i> www.websitename.com</p>
              </div>
            </div>
          </div>
        </div>
      </div>
