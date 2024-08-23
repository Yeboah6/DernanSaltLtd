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
            <h2>Marketing</h2>
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
                  <span>Our Products</span>
                  <span class="icon">
                      <i class="icon fa fa-chevron-right"></i>
                  </span>
              </div>
              <div class="accordion-body">
                  <div class="content">
                      <p>At Dernan Salt Limited, we are committed to providing the highest quality salt products for various industries. Whether you need salt for food processing, water treatment, or industrial use, our products meet rigorous quality standards to ensure purity and consistency. Our state-of-the-art production facilities and meticulous
                        processes guarantee that our salt is free from impurities, making it the preferred choice for customers across multiple sectors. 
                      <br><br></p>
                  </div>
              </div>
          </article>
          <article class="accordion">
            <div class="accordion-head">
                <span>Why Choose Us?</span>
                <span class="icon">
                    <i class="icon fa fa-chevron-right"></i>
                </span>
            </div>
            <div class="accordion-body">
                <div class="content">
                    <p>With years of experience in the salt industry, Dernan Salt Limited has built a reputation for reliability and excellence. We pride ourselves on delivering exceptional customer service, timely deliveries, and competitive pricing. Our deep understanding of the market, coupled with a commitment to innovation, allows us to tailor our products and services to meet the unique needs of each client.
                        Partner with us and experience the difference that quality, expertise, and dedication can make.</p>
                </div>
            </div>
          </article>
          <article class="accordion">
            <div class="accordion-head">
                <span>Sustainability and Community</span>
                <span class="icon">
                    <i class="icon fa fa-chevron-right"></i>
                </span>
            </div>
            <div class="accordion-body">
                <div class="content">
                    <p>At Dernan Salt Limited, sustainability is at the heart of everything we do. We employ environmentally friendly practices in our production processes to minimize our ecological footprint.
                        Additionally, we are deeply committed to the communities where we operate. By investing in local development projects, providing employment opportunities, and supporting educational initiatives, we strive to make a positive impact.
                        Choose Dernan Salt Limited not just for our products, but for our commitment to a better, more sustainable future.</p>
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
          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-lg-6">
                <fieldset>
                  <input type="name" name="name" id="name" placeholder="Your Name..." autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <input type="phone" name="phone" id="phone" placeholder="Your Phone..." autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your E-mail..." required="">
                </fieldset>
              </div>
              <div class="col-lg-6">
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