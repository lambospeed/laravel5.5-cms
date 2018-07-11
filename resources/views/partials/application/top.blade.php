<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="am-logo" href="{{  route('root') }}"></a>
    <button class="navbar-toggler x collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="{{ Request::segment(1) === null ? 'nav-item active' : 'nav-item' }}">
                <a class="nav-link" href="{{  route('root') }}">Home</a>
            </li>
            <li class="{{ Request::segment(1) === 'product' ? 'nav-item active' : 'nav-item' }}">
                <a class="nav-link" href="{{  route('product') }}">Product</a>
            </li>
            <li class="{{ Request::segment(1) === 'company' ? 'nav-item active' : 'nav-item' }}">
                <a class="nav-link" href="{{  route('company') }}">Company</a>
            </li>
            <li class="{{ Request::segment(1) === 'blog' ? 'nav-item active' : 'nav-item' }}">
                <a class="nav-link" href="{{  route('blog') }}">Blog</a>
            </li>
            <li class="{{ Request::segment(1) === 'contact' ? 'nav-item active' : 'nav-item' }}">
                <a class="nav-link" href="{{  route('contact') }}">Get in touch</a>
            </li>
        </ul>
        <div class="form-inline my-2 my-lg-0">
            <div class="am-social-container">
                @if(!empty(config('settings')->facebook))
                    <a href="https://www.linkedin.com/company/augmentaagr/" target="_blank"><i class="fab fa-linkedin"></i></a>
                @endif
                @if(!empty(config('settings')->facebook))
                    <a href="https://www.facebook.com/augmentaagr" target="_blank"><i class="fab fa-facebook-square"></i></a>
                @endif
                @if(!empty(config('settings')->facebook))
                    <a href="https://www.instagram.com/augmentaag/" target="_blank"><i class="fab fa-instagram"></i></a>
                @endif
            </div>
            <div>
                <a href="{{ route('tester.show') }}" class="am-white-button" id="beta_tester">Become a beta tester</a>
            </div>
        </div>
    </div>
</nav>
