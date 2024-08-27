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
                  <span>Our Vision</span>
                  <span class="icon">
                      <i class="icon fa fa-chevron-right"></i>
                  </span>
              </div>
              <div class="accordion-body">
                  <div class="content">
                      <p>To be the leading supplier of premium salt products in the global market, recognized for our commitment to quality, sustainability, and community development. 
                        We aspire to set the industry standard through innovation, excellence, and ethical practices.
                      </p>
                  </div>
              </div>
          </article>
          <article class="accordion">
            <div class="accordion-head">
                <span>Our Mission</span>
                <span class="icon">
                    <i class="icon fa fa-chevron-right"></i>
                </span>
            </div>
            <div class="accordion-body">
                <div class="content">
                    <p>At Dernan Salt Limited, our mission is to provide our customers with the highest quality salt products, tailored to meet the diverse needs of various industries. 
                      We are dedicated to upholding the principles of sustainability in all aspects of our operations, ensuring that our processes are environmentally friendly and socially responsible. We aim to foster long-term relationships with our clients by consistently delivering superior value and exceptional customer service.
                    </p>
                </div>
            </div>
          </article>
          <article class="accordion">
            <div class="accordion-head">
                <span>Our Core Values</span>
                <span class="icon">
                    <i class="icon fa fa-chevron-right"></i>
                </span>
            </div>
            <div class="accordion-body">
                <div class="content">
                    <p>Quality: We are committed to maintaining the highest standards in every product we deliver. Our rigorous quality control processes ensure that our customers receive pure, reliable, and consistent salt products.
<br><br>
                      Sustainability: We prioritize environmentally friendly practices and are dedicated to reducing our ecological footprint. Our sustainable approach encompasses everything from production to packaging, ensuring that we contribute positively to the environment.
                      <br><br>
                      Integrity: We operate with honesty, transparency, and ethical principles. Building trust with our customers, employees, and stakeholders is at the heart of our business.
                      <br><br>
                      Community: We believe in giving back to the communities where we operate. Through job creation, local development projects, and support for education, we strive to make a positive impact on society.
                      <br><br>
                      Innovation: We embrace continuous improvement and innovation in all aspects of our business. By staying ahead of industry trends and investing in advanced technologies, we ensure that we remain at the forefront of the salt industry.</p>
                </div>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>  
@endsection