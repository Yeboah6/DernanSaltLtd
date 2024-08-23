@extends('layouts.main-layout')
@section('content')
@include('includes.header')

<style>
    
  .box-container {
      display: flex;
     
  }

  .box-container li {
      border: 1px solid #51B3E4;
      width: 200px;
      height: 150px;
      padding: 50px;
      margin: 20px;
      text-align: center;
      background-color: #51B3E4;
      border-radius: 20px;
      
  }

  li a {
      text-decoration: none;
      color: #000;
  }

  .box-wrapper {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
  }



</style>

<div class="box-wrapper" style="z-index: 50;">
  <h4 style="position: absolute;top: 150px;left:200px">We produce well refined <em>salts</em> to serve your needs</h4>
  
      <div style="position: absolute;top: 450px;left:200px">
          <div>
              <ul class="box-container">
                  <li><a href="/">Home</a></li>
                  <li><a href="/about-us">About</a></li>
                  <li><a href="/jobs">Job</a></li>
                  <li><a href="/contact">Contact</a></li>
                  <li><a href="/marketing">Marketing</a></li>
                  <li><a href="/sales">Sales</a></li>
              </ul>
          </div>
      </div>
  </div>

  <div class="swiper-container" id="top">
    <div class="swiper-wrapper">
      <h2 style="position: absolute; top: 100px">We produce well refined <em>salts</em><br> to serve your needs</h2>
        <div class="swiper-slide">
          
            <div class="slide-inner" style="background-image:url('assets/images/Dernan-logo.jpg')">
            </div>
        </div>
        <div class="swiper-slide">
            <div class="slide-inner" style="background-image:url('assets/images/BackGround2.jpg')">
            </div>
        </div>
        <div class="swiper-slide">
            <div class="slide-inner" style="background-image:url('assets/images/BackGround3.jpg')">
            </div>
        </div>
    </div>
</div>


  <!-- ***** Main Banner Area End ***** -->



  <section class="about-us" id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h4>About the company</h4>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="naccs">
            <div class="tabs">
              <div class="row">
                <div class="col-lg-12">
                  <div class="menu">
                    <img src="assets/images/salt.png" alt="">
                  </div>
                </div>
                <div class="col-lg-12">
                  <ul class="nacc">

                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="right-content">
            <h4>We are a trusted producers of salt.</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <b>Tristique duis purus enim est diam, libero.</b> A, magna facilisis tincidunt adipiscing. Blandit pellentesque eu, ultrices mi, enim, viverra facilisis viverra nunc.<br><br>Eu sociis neque consequat vestibulum tempor et malesuada blandit elementum.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  


<br>

  



  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/swiper.js"></script>

  <script src="../assets1/js/vendor-all.min.js"></script>
  <script src="../assets1/js/plugins/bootstrap.min.js"></script>

    <script>

      var swiper = new Swiper('.swiper-container', {
    slidesPerView: 1,
    spaceBetween: 0,
    autoplay: {
        delay: 5000, // Change slide every 5 seconds
        disableOnInteraction: false, // Continue autoplay after user interaction
    },
    loop: true, // Infinite loop
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
});
    </script>

@endsection