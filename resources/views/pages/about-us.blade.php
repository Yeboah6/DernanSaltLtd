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
                      <p>
                        To be the leading provider of sustainable and innovative salt solutions, setting the standard in responsible mining practices while contributing to a healthier and more prosperous world. 
                        We envision a future where our operations inspire positive change, protect the environment, and create lasting value for our communities, partners, and future generations.
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
                    <p>
                      Our mission is to responsibly and sustainably mine high-quality salt, providing essential minerals that support industries, enhance daily life, and promote global health. 
                      We are committed to innovation, environmental stewardship, and community engagement, ensuring our operations benefit our employees, customers, and the ecosystems we touch
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
                    <p>Safety First: Prioritize the health and safety of our employees, contractors, and communities by adhering to strict safety standards and practices.
                      <br><br>
                      Environmental Responsibility: Commit to sustainable mining practices that minimize environmental impact and protect natural resources for future generations.
                      <br><br>
                      Integrity and Accountability: Operate with honesty, transparency, and ethical standards in all business dealings, taking responsibility for our actions.
                      <br><br>
                      Operational Excellence: Strive for continuous improvement, efficiency, and innovation in our mining processes to deliver high-quality products.
                      <br><br>
                      Community Engagement: Foster strong relationships with local communities, contributing positively through employment opportunities, support, and respectful communication.
                      <br><br>
                      Employee Empowerment: Invest in our workforce by providing training, development opportunities, and a supportive work environment that values diversity and inclusion.
                      <br><br>
                      Customer Focus: Maintain a commitment to delivering reliable, high-quality salt products that meet the evolving needs of our customers.
                      <br><br>
                      Sustainability and Stewardship: Promote sustainable practices that ensure the long-term viability of our operations and the ecosystems we impact.
                    </p>
                </div>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>  
@endsection