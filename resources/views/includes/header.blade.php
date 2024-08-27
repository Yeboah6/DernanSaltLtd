 
 <!-- ***** Header Area Start ***** -->
 <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav" role="navigation">
                    <!-- ***** Logo Start ***** -->
                    <a href="/" class="logo">
                        <img src="../assets/images/Asset4@4x.png" style="width:4.5em" alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a wire:navigate href="/">Home</a></li>
                        <li class="scroll-to-section"><a wire:navigate href="/about-us">About</a></li>
                        <li class="scroll-to-section"><a wire:navigate href="/jobs">job</a></li>
                        <li><a wire:navigate href="/contact">Contact</a></li> 
                        <li class="scroll-to-section"><a wire:navigate href="/marketing">Marketing</a></li>
                        <li class="scroll-to-section"><a wire:navigate href="/sales">Sales</a></li>
                        <li class="scroll-to-section"><a wire:navigate href="/admin-login">Login</a></li>
                    </ul>        
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>

{{-- <div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close mt-3">
        <span class="icon-close2 js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div> --}}

{{-- <header class="site-navbar site-navbar-target py-4" role="banner">

    <div class="container">
      <div class="row align-items-center position-relative">

        <div class="col-3">
          <div class="site-logo">
            <a href="index.html" class="font-weight-bold text-white">Brand</a>
          </div>
        </div>

        <div class="col-9  text-right">
          

          <span class="d-inline-block d-lg-block"><a href="#" class="text-black site-menu-toggle js-menu-toggle py-5"><span class="icon-menu h3 text-white"></span></a></span>

          

          <nav class="site-navigation text-right ml-auto d-none d-lg-none" role="navigation">
            <ul class="site-menu main-menu js-clone-nav ml-auto ">
              <li class="active"><a href="index.html" class="nav-link">Home</a></li>
              <li><a href="about.html" class="nav-link">About</a></li>
              <li><a href="services.html" class="nav-link">Services</a></li>
              <li><a href="blog.html" class="nav-link">Blog</a></li>
              <li><a href="contact.html" class="nav-link">Contact</a></li>
            </ul>
          </nav>
        </div>

        
      </div>
    </div>

  </header> --}}

<!-- ***** Header Area Start ***** -->
{{-- <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav" role="navigation">
                    <!-- ***** Logo Start ***** -->
                    <a href="/" class="logo">
                        <img src="../assets/images/Asset4@4x.png" style="width:4.5em" alt="Logo">
                    </a>
                    <!-- ***** Logo End ***** -->

                    <!-- ***** Hamburger Menu Toggle ***** -->
                    <div id="menuToggle">
                        <input type="checkbox" />
                        <span></span>
                        <span></span>
                        <span></span>

                        <!-- ***** Mobile Menu ***** -->
                        <ul class="nav" id="menu">
                            <li class="scroll-to-section"><a wire:navigate href="/">Home</a></li>
                            <li class="scroll-to-section"><a wire:navigate href="/about-us">About</a></li>
                            <li class="scroll-to-section"><a wire:navigate href="/jobs">Jobs</a></li>
                            <li><a wire:navigate href="/contact">Contact</a></li> 
                            <li class="scroll-to-section"><a wire:navigate href="/marketing">Marketing</a></li>
                            <li class="scroll-to-section"><a wire:navigate href="/sales">Sales</a></li>
                            <li class="scroll-to-section"><a wire:navigate href="/admin-login">Login</a></li>
                        </ul>
                    </div>

                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>

{{-- <nav class="navbar bg-body-tertiary" style="position: absolute;z-index: 50;">
    <div class="container-fluid">
      <button data-mdb-button-init class="navbar-toggler ms-auto" type="button" data-mdb-collapse-init
        data-mdb-target="#navbarToggleExternalContent3" aria-controls="navbarToggleExternalContent3"
        aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
    </div>
  </nav>
  <div class="collapse" id="navbarToggleExternalContent3">
    <div class="bg-body-tertiary shadow-3 p-4">
      <button data-mdb-button-init data-mdb-ripple-init
        class="btn btn-link btn-block border-bottom m-0">Link 1</button>
      <button data-mdb-button-init data-mdb-ripple-init
        class="btn btn-link btn-block border-bottom m-0">Link 2</button>
      <button data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-block m-0">Link
        3</button>
    </div>
  </div> --}}


<style>

/* .site-mobile-menu {
  width: 300px;
  position: fixed;
  right: 0;
  z-index: 2000;
  padding-top: 20px;
  background: #fff;
  height: calc(100vh);
  -webkit-transform: translateX(110%);
  -ms-transform: translateX(110%);
  transform: translateX(110%);
  -webkit-box-shadow: -10px 0 20px -10px rgba(0, 0, 0, 0.1);
  box-shadow: -10px 0 20px -10px rgba(0, 0, 0, 0.1);
  -webkit-transition: .3s all ease-in-out;
  -o-transition: .3s all ease-in-out;
  transition: .3s all ease-in-out; }
  .offcanvas-menu .site-mobile-menu {
    -webkit-transform: translateX(0%);
    -ms-transform: translateX(0%);
    transform: translateX(0%); }
  .site-mobile-menu .site-mobile-menu-header {
    width: 100%;
    float: left;
    padding-left: 20px;
    padding-right: 20px; }
    .site-mobile-menu .site-mobile-menu-header .site-mobile-menu-close {
      float: right;
      margin-top: 8px; }
      .site-mobile-menu .site-mobile-menu-header .site-mobile-menu-close span {
        font-size: 30px;
        display: inline-block;
        padding-left: 10px;
        padding-right: 0px;
        line-height: 1;
        cursor: pointer;
        -webkit-transition: .3s all ease;
        -o-transition: .3s all ease;
        transition: .3s all ease; }
        .site-mobile-menu .site-mobile-menu-header .site-mobile-menu-close span:hover {
          color: #ced4da; }
    .site-mobile-menu .site-mobile-menu-header .site-mobile-menu-logo {
      float: left;
      margin-top: 10px;
      margin-left: 0px; }
      .site-mobile-menu .site-mobile-menu-header .site-mobile-menu-logo a {
        display: inline-block;
        text-transform: uppercase; }
        .site-mobile-menu .site-mobile-menu-header .site-mobile-menu-logo a img {
          max-width: 70px; }
        .site-mobile-menu .site-mobile-menu-header .site-mobile-menu-logo a:hover {
          text-decoration: none; }
  .site-mobile-menu .site-mobile-menu-body {
    overflow-y: scroll;
    -webkit-overflow-scrolling: touch;
    position: relative;
    padding: 0 20px 20px 20px;
    height: calc(100vh - 52px);
    padding-bottom: 150px; }
  .site-mobile-menu .site-nav-wrap {
    padding: 0;
    margin: 0;
    list-style: none;
    position: relative; }
    .site-mobile-menu .site-nav-wrap a {
      padding: 10px 20px;
      display: block;
      position: relative;
      color: #212529; }
      .site-mobile-menu .site-nav-wrap a:hover {
        color: #007bff; }
    .site-mobile-menu .site-nav-wrap li {
      position: relative;
      display: block; }
      .site-mobile-menu .site-nav-wrap li .nav-link.active {
        color: #007bff; }
      .site-mobile-menu .site-nav-wrap li.active > a {
        color: #007bff; }
    .site-mobile-menu .site-nav-wrap .arrow-collapse {
      position: absolute;
      right: 0px;
      top: 10px;
      z-index: 20;
      width: 36px;
      height: 36px;
      text-align: center;
      cursor: pointer;
      border-radius: 50%; }
      .site-mobile-menu .site-nav-wrap .arrow-collapse:hover {
        background: #f8f9fa; }
      .site-mobile-menu .site-nav-wrap .arrow-collapse:before {
        font-size: 12px;
        z-index: 20;
        font-family: "icomoon";
        content: "\f078";
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%) rotate(-180deg);
        -ms-transform: translate(-50%, -50%) rotate(-180deg);
        transform: translate(-50%, -50%) rotate(-180deg);
        -webkit-transition: .3s all ease;
        -o-transition: .3s all ease;
        transition: .3s all ease; }
      .site-mobile-menu .site-nav-wrap .arrow-collapse.collapsed:before {
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%); }
    .site-mobile-menu .site-nav-wrap > li {
      display: block;
      position: relative;
      float: left;
      width: 100%; }
      .site-mobile-menu .site-nav-wrap > li > a {
        padding-left: 20px;
        font-size: 20px; }
      .site-mobile-menu .site-nav-wrap > li > ul {
        padding: 0;
        margin: 0;
        list-style: none; }
        .site-mobile-menu .site-nav-wrap > li > ul > li {
          display: block; }
          .site-mobile-menu .site-nav-wrap > li > ul > li > a {
            padding-left: 40px;
            font-size: 16px; }
          .site-mobile-menu .site-nav-wrap > li > ul > li > ul {
            padding: 0;
            margin: 0; }
            .site-mobile-menu .site-nav-wrap > li > ul > li > ul > li {
              display: block; }
              .site-mobile-menu .site-nav-wrap > li > ul > li > ul > li > a {
                font-size: 16px;
                padding-left: 60px; }
    .site-mobile-menu .site-nav-wrap[data-class="social"] {
      float: left;
      width: 100%;
      margin-top: 30px;
      padding-bottom: 5em; }
      .site-mobile-menu .site-nav-wrap[data-class="social"] > li {
        width: auto; }
        .site-mobile-menu .site-nav-wrap[data-class="social"] > li:first-child a {
          padding-left: 15px !important; }

          .site-navbar {
  margin-bottom: 0px;
  z-index: 1999;
  position: relative;
  top: 0;
  width: 100%;
  padding: 1rem;
  position: absolute; }
  @media (max-width: 991.98px) {
    .site-navbar {
      padding-top: 3rem;
      padding-bottom: 3rem; } }
  .site-navbar .toggle-button {
    position: absolute;
    right: 0px; }
  .site-navbar .site-logo {
    margin: 0;
    padding: 0;
    font-size: 1rem; }
    .site-navbar .site-logo a {
      text-transform: uppercase;
      color: #000;
      font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"; }
    @media (max-width: 991.98px) {
      .site-navbar .site-logo {
        float: left;
        position: relative; } }
  .site-navbar .site-navigation.border-bottom {
    border-bottom: 1px solid white !important; }
  .site-navbar .site-navigation .site-menu {
    margin: 0;
    padding: 0;
    margin-bottom: 0; }
    .site-navbar .site-navigation .site-menu .active {
      color: #007bff !important; }
    .site-navbar .site-navigation .site-menu a {
      text-decoration: none !important;
      display: inline-block; }
    .site-navbar .site-navigation .site-menu > li {
      display: inline-block; }
      .site-navbar .site-navigation .site-menu > li > a {
        margin-left: 15px;
        margin-right: 15px;
        padding: 20px 0px;
        color: rgba(0, 0, 0, 0.7) !important;
        display: inline-block;
        text-decoration: none !important; }
        .site-navbar .site-navigation .site-menu > li > a:hover {
          color: #000 !important; }
      .site-navbar .site-navigation .site-menu > li.active > a {
        color: #000 !important; }
    .site-navbar .site-navigation .site-menu .has-children {
      position: relative; }
      .site-navbar .site-navigation .site-menu .has-children > a {
        position: relative;
        padding-right: 20px; }
        .site-navbar .site-navigation .site-menu .has-children > a:before {
          position: absolute;
          content: "\e313";
          font-size: 16px;
          top: 50%;
          right: 0;
          -webkit-transform: translateY(-50%);
          -ms-transform: translateY(-50%);
          transform: translateY(-50%);
          font-family: 'icomoon'; }
      .site-navbar .site-navigation .site-menu .has-children .dropdown {
        visibility: hidden;
        opacity: 0;
        top: 100%;
        position: absolute;
        text-align: left;
        border-top: 2px solid #007bff;
        -webkit-box-shadow: 0 2px 10px -2px rgba(0, 0, 0, 0.1);
        box-shadow: 0 2px 10px -2px rgba(0, 0, 0, 0.1);
        padding: 0px 0;
        margin-top: 20px;
        margin-left: 0px;
        background: #fff;
        -webkit-transition: 0.2s 0s;
        -o-transition: 0.2s 0s;
        transition: 0.2s 0s; }
        .site-navbar .site-navigation .site-menu .has-children .dropdown.arrow-top {
          position: absolute; }
          .site-navbar .site-navigation .site-menu .has-children .dropdown.arrow-top:before {
            display: none;
            bottom: 100%;
            left: 20%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none; }
          .site-navbar .site-navigation .site-menu .has-children .dropdown.arrow-top:before {
            border-color: rgba(136, 183, 213, 0);
            border-bottom-color: #fff;
            border-width: 10px;
            margin-left: -10px; }
        .site-navbar .site-navigation .site-menu .has-children .dropdown a {
          text-transform: none;
          letter-spacing: normal;
          -webkit-transition: 0s all;
          -o-transition: 0s all;
          transition: 0s all;
          color: #000 !important; }
          .site-navbar .site-navigation .site-menu .has-children .dropdown a.active {
            color: #007bff !important;
            background: #f8f9fa; }
        .site-navbar .site-navigation .site-menu .has-children .dropdown > li {
          list-style: none;
          padding: 0;
          margin: 0;
          min-width: 200px; }
          .site-navbar .site-navigation .site-menu .has-children .dropdown > li > a {
            padding: 9px 20px;
            display: block; }
            .site-navbar .site-navigation .site-menu .has-children .dropdown > li > a:hover {
              background: #f8f9fa;
              color: #ced4da; }
          .site-navbar .site-navigation .site-menu .has-children .dropdown > li.has-children > a:before {
            content: "\e315";
            right: 20px; }
          .site-navbar .site-navigation .site-menu .has-children .dropdown > li.has-children > .dropdown, .site-navbar .site-navigation .site-menu .has-children .dropdown > li.has-children > ul {
            left: 100%;
            top: 0; }
          .site-navbar .site-navigation .site-menu .has-children .dropdown > li.has-children:hover > a, .site-navbar .site-navigation .site-menu .has-children .dropdown > li.has-children:active > a, .site-navbar .site-navigation .site-menu .has-children .dropdown > li.has-children:focus > a {
            background: #f8f9fa;
            color: #ced4da; }
      .site-navbar .site-navigation .site-menu .has-children:hover > a, .site-navbar .site-navigation .site-menu .has-children:focus > a, .site-navbar .site-navigation .site-menu .has-children:active > a {
        color: #007bff; }
      .site-navbar .site-navigation .site-menu .has-children:hover, .site-navbar .site-navigation .site-menu .has-children:focus, .site-navbar .site-navigation .site-menu .has-children:active {
        cursor: pointer; }
        .site-navbar .site-navigation .site-menu .has-children:hover > .dropdown, .site-navbar .site-navigation .site-menu .has-children:focus > .dropdown, .site-navbar .site-navigation .site-menu .has-children:active > .dropdown {
          -webkit-transition-delay: 0s;
          -o-transition-delay: 0s;
          transition-delay: 0s;
          margin-top: 0px;
          visibility: visible;
          opacity: 1; } */

</style>


<!-- ***** Header Area End ***** -->