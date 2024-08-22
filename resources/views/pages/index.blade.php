@extends('layouts.main-layout')
@section('content')
@include('includes.header')
 

  <!-- ***** Main Banner Area Start ***** -->
  <div class="swiper-container" id="top">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="slide-inner" style="background-image:url(assets/images/Dernan-logo.jpg)">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="header-text">
                  <h2 style="font-size: 5rem">We produce well refined  <em>salts</em><br> to serve your needs</h2>
                  {{-- <p>Lorem ipsum dolor sit amet consectetur. Id dui augue aliquam non sed. Eu erat curabitur.</p> --}}
                  <div class="buttons">
                    <div class="green-button">
                      <a href="/about-us">Read More</a>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="slide-inner" style="background-image:url(assets/images/BackGround2.jpg)">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="header-text">
                  {{-- <h2>Lorem ipsum dolor<br>sit amet consectetur <em>slide2</em></h2> --}}
                  {{-- <p>Lorem ipsum dolor sit amet consectetur. Id dui augue aliquam non sed. Eu erat curabitur.</p> --}}
                  <div class="buttons">
                    <div class="green-button">
                      {{-- <a href="#">Read More</a> --}}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="slide-inner" style="background-image:url(assets/images/BackGround3.jpg)">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="header-text">
                  {{-- <h2>Lorem ipsum dolor<br>sit amet consectetur <em>AliquamSlide3</em></h2> --}}
                  {{-- <p>Lorem ipsum dolor sit amet consectetur. Id dui augue aliquam non sed. Eu erat curabitur.</p> --}}
                  <div class="buttons">
                    <div class="green-button">
                      {{-- <a href="#">Read More</a> --}}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-button-next swiper-button-white"></div>
    <div class="swiper-button-prev swiper-button-white"></div>
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
  
  <section class="simple-cta">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <h4 style="text-shadow: 2px 2px 25px rgba(0 0 0 / 0.34);">Salt <em>Harvesting, Processing,</em> and <strong>Distribution</strong> Services</h4>
        </div>
        <div class="col-lg-7">
          <div class="buttons">
            <div class="green-button">
              {{-- <a href="our-services.html">Discover More</a> --}}
            </div>
            <div class="orange-button">
              <a href="/contact">Contact Us</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  
  <section class="calculator">
    <div class="container">
      <div class="row">
        {{-- <div class="col-lg-7">
          <div class="left-image">
            <img src="assets/images/calculator-image.png" alt="">
          </div>
        </div> --}}
        <div class="col-lg-7">
          <div class="section-heading">
            <h4>Sign Up For News Letter</h4>
          </div>
          <form id="calculate" action="" method="get">
            <div class="row">
              <div class="col-lg-6">
                <fieldset>
                  <label for="name">Your Name</label>
                  <input type="name" name="name" id="name" placeholder="" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <label for="email">Your Email</label>
                  <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="" required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label for="subject">Subject</label>
                  <input type="subject" name="subject" id="subject" placeholder="" autocomplete="on" >
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label for="chooseOption" class="form-label">Your Reason</label>
                  <textarea name="Category" class="form-control" id="chooseOption" cols="30" rows="10" style="background-color:#626D80;border:1px solid #626D80;margin-bottom: 30px; "></textarea>
                  {{-- <select name="Category" class="form-select" aria-label="Default select example" id="chooseOption" onchange="this.form.click()">
                      <option selected>Choose an Option</option>
                      <option type="checkbox" name="option1" value="Online Banking">Online Banking</option>
                      <option value="Financial Control">Financial Control</option>
                      <option value="Yearly Profit">Yearly Profit</option>
                      <option value="Crypto Investment">Crypto Investment</option>
                  </select> --}}
              </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="orange-button">Submit Now</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>


  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/swiper.js"></script>

    <script>
        var interleaveOffset = 0.5;

      var swiperOptions = {
        loop: true,
        speed: 1000,
        grabCursor: true,
        watchSlidesProgress: true,
        mousewheelControl: true,
        keyboardControl: true,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev"
        },
      };

      var swiper = new Swiper(".swiper-container", swiperOptions);
    </script>

@endsection