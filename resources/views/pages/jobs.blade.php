@extends('layouts.main-layout')
@section('content')

    <style>
        div.gallery {
          margin: 5px;
          border: 1px solid #ccc;
          float: left;
          /* width: 180px; */
          border-radius: 20px;
        }
        
        div.gallery:hover {
          border: 1px solid #777;
        }
        
        div.gallery img {
          width: 100%;
          height: auto;
        }
        
        div.desc {
          padding: 15px 20px;
          text-align: center;
          background-color: #000000BD;
          border-radius: 0 0 20px 20px;
        }
        div.desc > button{
          font-size: 14px;
          width: 100px;
          height: 40px;
        }
        .owl-item{
          display: flex;
          justify-content: center;
          align-items: center;
          /* margin: auto; */
        }
        .footer-text{
          font-size: 20px;
        }
        footerLinks-section > p{
          font-size: 14px;
          color: #F5F7FA;
        }
        .footer-input{
          font-size: 14px;
          outline: 0;
          border: 0;
          background-color: #FFFFFF48;
          color: #D9DBE1;
        }
        .footer-input::placeholder{
          color: #FFFFFF7A;
        }
        /* .plane-icon{
          filter: invert(1);
        } */
        .footerInput-container{
          width: fit-content;
        }
        .nav-btn {
          font-size: 42px;
          font-weight: 800;
          color: rgba(0 0 0 / 0.43);
          /* background-color: #333; */
          /* padding: 10px; */
          border-radius: 50%;
          cursor: pointer;
          width: 50px;
          height: 50px;
          /* border: 1px solid; */
        }

        .prev-slide {
          position: absolute;
          left: 45%;
          bottom: -25px;
          transform: translateY(-50%);
        }

        .next-slide {
          position: absolute;
          right: 45%;
          bottom: -25px;
          transform: translateY(-50%);
        }
        
        @media(max-width:992px){
          .prev-slide {
            left: 30%;
            bottom: -25px;
            transform: translateY(-50%);
          }
  
          .next-slide {
            right: 30%;
            bottom: -25px;
            transform: translateY(-50%);
          }
          
        }
        @media(max-width:400px){
          .prev-slide {
            left: 50px;
            bottom: -25px;
            transform: translateY(-50%);
          }
  
          .next-slide {
            right: 50px;
            bottom: -25px;
            transform: translateY(-50%);
          }
          
        }
        .prev-slide:hover {
          color: black;
        }
        
        .next-slide:hover {
          color: black;
          
        }

        .item{
          width: 100% !important;
          border-radius: 20px;
        }
        .item img{
          border-radius: 20px;
        }
        </style>



<!--TemplateMo 574 Mexant

https://templatemo.com/tm-574-mexant

-->

  @include('includes.header')

  <!-- ***** Main Banner Area Start ***** -->
  <div class="swiper-container main-swiper" id="top">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="slide-inner" style="background-image:url(assets/images/BackGround4.jpg)">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <div class="header-text">
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
        <div class="slide-inner" style="background-image:url(assets/images/BackGround5.jpg)">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
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
              <div class="col-lg-8">
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
            <h4>Available Positions</h4>
          </div>
        </div>
        <div>
          <div class="myowl-carousel owl-carousel" style="position: relative; z-index: 5;">
            @foreach ($jobPosting as $position)
              <div class="item">
              <div class="gallery position-relative">
                <a href="{{ url('/job-description/'.$position -> id) }}">
                  <img src="assets/images/HR MANAGER.png" alt="Cinque Terre" width="600" height="400">
                </a>
                <div class="desc position-absolute bottom-0 start-0 end-0 d-flex justify-content-between align-items-center">
                  <p class="text-white">{{$position -> position}}</p>
                </div>
              </div>
            </div>
            @endforeach
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
						<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
          </div>
        </div>
          
      </div>
    </div>
  </section>  

<br>
  

<script src="assets/js/owl-carousel.js"></script>
<script src="assets/js/swiper.js"></script>
 

    <script>
        var interleaveOffset = 0.5;

      var swiperOptions = {
        slidesPerView: 1,
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
        on: {
          progress: function() {
            var swiper = this;
            for (var i = 0; i < swiper.slides.length; i++) {
              var slideProgress = swiper.slides[i].progress;
              var innerOffset = swiper.width * interleaveOffset;
              var innerTranslate = slideProgress * innerOffset;
              swiper.slides[i].querySelector(".slide-inner").style.transform =
                "translate3d(" + innerTranslate + "px, 0, 0)";
            }      
          },
          touchStart: function() {
            var swiper = this;
            for (var i = 0; i < swiper.slides.length; i++) {
              swiper.slides[i].style.transition = "";
            }
          },
          setTransition: function(speed) {
            var swiper = this;
            for (var i = 0; i < swiper.slides.length; i++) {
              swiper.slides[i].style.transition = speed + "ms";
              swiper.slides[i].querySelector(".slide-inner").style.transition =
                speed + "ms";
            }
          }
        }
      };

      var swiper = new Swiper(".main-swiper", swiperOptions);


    </script>
  @endsection