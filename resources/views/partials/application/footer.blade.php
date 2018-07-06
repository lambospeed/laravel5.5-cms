<div class="container-fluid am-partners">
<div class="row">
<div class="col-md-12"><h3>OUR PARTNERS</h3></div>
<div class="col-md-12 am-partners-container">
<a href="#" class="am-partners-item"><img src="img/aetna-logo.png" alt=""></a>
<a href="#" class="am-partners-item"><img src="img/nvidia-logo.png" alt=""></a>
<a href="#" class="am-partners-item"><img src="img/biagio-logo.png" alt=""></a>
</div>
</div>
</div>

<div class="container-fluid am-footer">
<img class="am-footer-shape" src="img/footer-shape.png" alt="">
<img class="am-footer-logo" src="img/white-logo.svg" alt="">
<div class="row">
<div class="col-md-12">
  <h3>stay informed</h3>
  <p class="am-footer-subtitle">Join our mailing list</p>
  <div class="d-flex w-100 align-items-center q-posr">
    <form id="am-subscribe-form" action="#" method="GET">
    <input class="inputMaterial" type="email" name="EMAIL" required>
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
    <a href="#"><i class="fab fa-linkedin"></i></a>
    <a href="#"><i class="fab fa-twitter"></i></a>
    <a href="#"><i class="fab fa-youtube"></i></a>
    <a href="#"><i class="fab fa-facebook-square"></i></a>
    <a href="#"><i class="fab fa-instagram"></i></a>
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
