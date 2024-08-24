@extends('layouts.main-layout')
@section('content')

    <style>
      
        .footer-text + *{
          font-size: 14px;
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
    </style>

  @include('includes.header')

  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="header-text">
            <h2>About Us</h2>
            <div class="div-dec"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ***** Main Banner Area End ***** -->

  <section class="top-section" style="margin-bottom: 50px">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="left-image">
            <img src="assets/images/salt.png " alt="">
          </div>
        </div>
        <div class="col-lg-6 align-self-center">
          <div class="accordions is-first-expanded">
            <article class="accordion">
              <div class="accordion-head">
                  <span>Mexant Financial Planning</span>
                  <span class="icon">
                      <i class="icon fa fa-chevron-right"></i>
                  </span>
              </div>
              <div class="accordion-body">
                  <div class="content">
                      <p>You will see a bunch of free CSS templates when you search on Google. TemplateMo website is probably the best one because it is 100% free. 
                      <br><br>We do not ask you anything in return. You are free to use our templates for any purpose.</p>
                  </div>
              </div>
          </article>
          <article class="accordion">
            <div class="accordion-head">
                <span>Mexant Crypto Investing</span>
                <span class="icon">
                    <i class="icon fa fa-chevron-right"></i>
                </span>
            </div>
            <div class="accordion-body">
                <div class="content">
                    <p>Mexant HTML5 Template is available to download 100% free of charge. This CSS layout is based on Boostrap 5 framework. 
                    <br><br>Anyone can edit and use this layout for all professional websites. Thank you for visiting TemplateMo website.</p>
                </div>
            </div>
          </article>
          <article class="accordion">
            <div class="accordion-head">
                <span>Cryptocurrency Investments</span>
                <span class="icon">
                    <i class="icon fa fa-chevron-right"></i>
                </span>
            </div>
            <div class="accordion-body">
                <div class="content">
                    <p>Ut dictum vehicula massa, ac pharetra leo tincidunt eu. Phasellus in tristique magna, ac gravida leo.<br><br>
                    Integer sed lorem sapien. Ut viverra mauris sed lobortis commodo. Mauris scelerisque venenatis justo, sed interdum sem.</p>
                </div>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>  

  {{-- <section class="simple-cta">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <h4>Business <em>Solutions</em> and <strong>Crypto</strong> Investments</h4>
        </div>
        <div class="col-lg-7">
          <div class="buttons">
            <div class="green-button">
              <a href="#">Discover More</a>
            </div>
            <div class="orange-button">
              <a href="#">Contact Us</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}

  {{-- <section class="what-we-do">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="left-content">
            <h4>Please tell us about your idea and how you want it to be</h4>
            <p>If you need more HTML templates, you can try visiting TooCSS blog and Tooplate websites. You can get many good templates on those websites.<br><br>Nulla non placerat neque, a gravida elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Morbi sed dolor condimentum tellus commodo volutpat non malesuada turpis.</p>
            <div class="green-button">
              <a href="contact-us.html">Discover More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="right-items">
            <div class="row">
              <div class="col-lg-6">
                <div class="item">
                  <em>01</em>
                  <h4>First Step</h4>
                  <p>Pellentesque ipsum elit, congue a sapien laoreet, pellentesque ultricies risus.</p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item">
                  <em>02</em>
                  <h4>Second Step</h4>
                  <p>Pellentesque ipsum elit, congue a sapien laoreet, pellentesque ultricies risus.</p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item">
                  <em>03</em>
                  <h4>Third Step</h4>
                  <p>Pellentesque ipsum elit, congue a sapien laoreet, pellentesque ultricies risus.</p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item">
                  <em>04</em>
                  <h4>Fourth Step</h4>
                  <p>Pellentesque ipsum elit, congue a sapien laoreet, pellentesque ultricies risus.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}


    
    @endsection