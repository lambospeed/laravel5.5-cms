<div class="am-contact" id="contact_tester">
  <div class="container">
    <div class="row form-input">
      <div class="col-md-12 text-center">
        <h3>Want to become one<br> of our <span>premium beta testers?</span></h3>
        <span class="am-contact-subtitle">Reach out for more information</span>
      </div>
      @if(session('message'))
	<div class='alert alert-success'>
		{{ session('message') }}
	</div>
	@endif
      <div class="col-md-10 offset-md-1">
         <form id="am-form" action="{{ route('send') }}" method="POST">
           {{ csrf_field() }}
           <div class="container">
             <div class="row">
               <div class="col-md-6">
                 <div class="group form-group has-feedback">
                   <input class="inputMaterial" type="text" name="name" required>
                   <span class="highlight"></span>
                   <span class="bar"></span>
                   <label>Name</label>
                 </div>
               </div>
               <div class="col-md-6">
                 <div class="group form-group has-feedback">
                   <input class="inputMaterial" type="text" name="company" required>
                   <span class="highlight"></span>
                   <span class="bar"></span>
                   <label>Company</label>
                 </div>
               </div>
               <div class="col-md-6">
                 <div class="group form-group has-feedback">
                 <input class="inputMaterial" type="email" name="email" required>
                 <span class="highlight"></span>
                 <span class="bar"></span>
                 <label>Email</label>
               </div>
               </div>
               <div class="col-md-6">
                 <div class="group form-group has-feedback">
                   <input class="inputMaterial" type="text" name="phone" required>
                   <span class="highlight"></span>
                   <span class="bar"></span>
                   <label>Phone</label>
                 </div>
               </div>
               <div class="col-md-12">
                 <div class="group form-group has-feedback">
                   <textarea class="inputMaterial" rows="4" name="message" required></textarea>
                   <span class="highlight"></span>
                   <span class="bar"></span>
                   <label>Message</label>
                 </div>
               </div>
               <div class="col-md-12 text-center">
                 <button class="am-transp-button" id="buttonGet" type="submit">send message <i class="far fa-arrow-alt-circle-right"></i></button>
               </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="row form-thankyou">
      <div class="col-md-12 text-center">
        <h3>Thank you!</h3>
        <span>Your message has beed received. We’ll get back to you shortly.</span>
      </div>
    </div>
  </div>
</div>