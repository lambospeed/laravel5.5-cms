<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="am-logo"></div>
    <button class="navbar-toggler x collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Product</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Company</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Get in touch</a>
            </li>
        </ul>
        <div class="form-inline my-2 my-lg-0">
            <div class="am-social-container">
                @if(!empty(config('settings')->facebook))
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                @endif
                @if(!empty(config('settings')->facebook))
                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                @endif
                @if(!empty(config('settings')->facebook))
                    <a href="#"><i class="fab fa-instagram"></i></a>
                @endif
            </div>
            <div>
                <a href="#" class="am-white-button">Become a beta tester</a>
            </div>
        </div>
    </div>
</nav>
