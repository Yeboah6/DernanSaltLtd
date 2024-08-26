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
            <h2>Sales</h2>
            <div class="div-dec"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ***** Main Banner Area End ***** -->

  <section class="top-section">
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
                  <span>Bulk Orders</span>
                  <span class="icon">
                      <i class="icon fa fa-chevron-right"></i>
                  </span>
              </div>
              <div class="accordion-body">
                  <div class="content">
                      <p>Dernan Salt Limited specializes in supplying bulk salt to meet the demands of various industries. Whether you are in food production, agriculture, or chemical manufacturing, our bulk salt solutions are designed to provide you with the quantity and quality you need, exactly when you need it. 
                        With flexible ordering options and prompt delivery services, we make it easy for you to keep your operations running smoothly. 
                      <br><br></p>
                  </div>
              </div>
          </article>
          <article class="accordion">
            <div class="accordion-head">
                <span>Custom Packaging</span>
                <span class="icon">
                    <i class="icon fa fa-chevron-right"></i>
                </span>
            </div>
            <div class="accordion-body">
                <div class="content">
                    <p>We understand that different businesses have different needs. That's why Dernan Salt Limited offers custom packaging solutions for our salt products. From small retail packs to large industrial sacks, we can package your order in the size and format that best suits your requirements.
                         Our packaging is designed to maintain product integrity, ensuring that you receive salt that is fresh and ready for use.</p>
                </div>
            </div>
          </article>
          <article class="accordion">
            <div class="accordion-head">
                <span>Competitive Pricing</span>
                <span class="icon">
                    <i class="icon fa fa-chevron-right"></i>
                </span>
            </div>
            <div class="accordion-body">
                <div class="content">
                    <p>At Dernan Salt Limited, we believe that quality salt doesn’t have to come with a high price tag. Our competitive pricing structure ensures that you get the best value for your money, whether you’re ordering in bulk or smaller quantities. We offer transparent pricing with no hidden fees, and our team is always available to discuss pricing options that align with your budget. 
                        Partner with us for cost-effective solutions that don’t compromise on quality.</p>
                </div>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>

  <section class="contact-us-form">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h6>Contact Us</h6>
            <h4>Feel free to message us</h4>
          </div>
        </div>
        <div class="col-lg-10 offset-lg-1">
          <form id="contact" action="{{url('/sales')}}" method="POST">
            @csrf
            <div class="row">
              <div class="col-lg-6">
                <fieldset>
                  <input type="name" name="name" id="name" placeholder="Your Name..." autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your E-mail..." required="">
                </fieldset>
              </div>
              <div class="col">
                <fieldset>
                  <input type="subject" name="subject" id="subject" placeholder="Subject..." autocomplete="on" >
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <textarea name="message" id="message" placeholder="Your Message"></textarea>
                </fieldset>
              </div>
              <div class="col-lg-12" style="margin-bottom: 50px">
                <fieldset>
                  <button type="submit" id="form-submit" class="orange-button">Send Message</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

@endsection