<div class="container-fluid am-partners">
<div class="row">
<div class="col-md-12"><h3 class="am-entry-1">OUR PARTNERS</h3></div>
<div class="col-md-12 am-partners-container am-entry-2">
<a href="http://www.nvidia.com/page/home.html" class="am-partners-item"><img src="/img/nvidia-logo.png" alt=""></a>
</div>
</div>
</div>

<div class="container-fluid am-footer">
<img class="am-footer-shape" src="img/footer-shape.png" alt="">
<img class="am-footer-logo" src="img/white-logo.svg" alt="">
<div class="row">
<div class="col-md-12">
  <h3 class="am-entry-3">stay informed</h3>
  <p class="am-footer-subtitle am-entry-3">Join our mailing list</p>
  <div class="d-flex w-100 align-items-center q-posr am-entry-4">
    <form action="{{ route('subscribe')}}" method="POST">
    {{ csrf_field() }}
    <input class="inputMaterial" type="email" name="email" required>
    <span class="highlight"></span>
    <span class="bar"></span>
    <label>Your email here</label>
    <button class="am-btn-footer ml-auto" id="buttonSubscribe" type="submit">signup <i class="far fa-arrow-alt-circle-right"></i></button>
    </form>
  <div class="am-form-thankyou">
      <h3>Thank you!</h3>
      <span>Your subscription has been activated.</span>
  </div>
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-12 am-footer-social">
    <a href="https://www.linkedin.com/company/augmentaagr/" target="_blank"><i class="fab fa-linkedin"></i></a>
    <a href="https://twitter.com/AugmentaAg?lang=en" target="_blank"><i class="fab fa-twitter"></i></a>
    <a href="https://www.youtube.com/channel/UCeVzuupJBPI39a2G7yxZ0Lg" target="_blank"><i class="fab fa-youtube"></i></a>
    <a href="https://www.facebook.com/augmentaagr" target="_blank"><i class="fab fa-facebook-square"></i></a>
    <a href="https://www.instagram.com/augmentaag/" target="_blank"><i class="fab fa-instagram"></i></a>
  </div>
</div>
</div>



<script>
    @if(!empty(Config::get('settings')->analytics_id))
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', '{{ Config::get('settings')->analytics_id }}', 'auto');
        ga('send', 'pageview');
    @endif
    @if(!empty(Config::get('settings')->disqus_shortname))
        var disqus_shortname = '{{ Config::get('settings')->disqus_shortname }}',
            disqus_config = function () {
                this.language = "{{ session('language_code') }}";
            };
        (function() {
            var d = document, s = d.createElement('script');
            s.src = '//'+ disqus_shortname + '.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();
    @endif
</script>
