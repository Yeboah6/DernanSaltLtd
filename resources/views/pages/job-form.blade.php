<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Dernan</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../assets/css/fontawesome.css">
    <link rel="stylesheet" href="../assets/css/templatemo-574-mexant.css">
    <link rel="stylesheet" href="../assets/css/owl.css">
    <link rel="stylesheet" href="../assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<style>
        /* .footer-text{
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
        .plane-icon{
          filter: invert(1);
        }
        .footerInput-container{
          width: fit-content;
        } */

        .form-section {
        padding-left: 15px;
        display: none;
        }

        .form-section.current {
            display: inline;
        }
        .section {
            padding-top: 100px;
        }

        .btn-info, .btn-btn-success {
            margin-top: 10px;
        }

        .parsley-errors-list {
            margin: 2px 0 3px;
            padding: 0;
            list-style-type: none;
            color: red;
        }
</style>
  </head>

  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
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

<body>


<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card" style="margin-top: 30px;margin-bottom:30px">
                    <div class="card-header text-white bg-info">
                        <h2>Job Application Form</h2>
                    </div>
                    <div class="card-body">
                        <form action="" class="contact-form">
                            @csrf
                            <div class="form-section">
                                <legend>Personal Information</legend>
                                {{-- <div class="form-group"> --}}
                                    <label for="first-name">First Name <span>*</span></label>
                                    <input type="text" class="form-control" name="first_name" required>
                                    <span class="text-danger">@error('first_name'){{ $message }} @enderror</span>
                                {{-- </div> --}}
                                {{-- <div class="form-group"> --}}
                                    <label for="middle-name">Middle Name <span></span></label>
                                    <input type="text" name="middle_name" class="form-control">
                                    <span class="text-danger">@error('first_name'){{ $message }} @enderror</span>
                                {{-- </div> --}}
                                {{-- <div class="form-group"> --}}
                                    <label for="last-name">Last Name <span>*</span></label>
                                    <input type="text" name="last_name" class="form-control" required>
                                    <span class="text-danger">@error('middle_name'){{ $message }} @enderror</span>
                                {{-- </div> --}}
                                {{-- <div class="form-group"> --}}
                                    <label for="dob">Date of Birth <span>*</span></label>
                                    <input type="date" name="dob" class="form-control" required>
                                    <span class="text-danger">@error('dob'){{ $message }} @enderror</span>
                                {{-- </div> --}}
                                {{-- <div class="form-group"> --}}
                                    <label>Gender <span>*</span></label>
                                    <input type="radio" name="gender" value="male"> Male
                                    <input type="radio" name="gender" value="female"> Female
                                    <span class="text-danger">@error('gender'){{ $message }} @enderror</span>
                                {{-- </div> --}}
                                {{-- <div class="form-group"> --}}
                                    <label for="nationality">Nationality <span>*</span></label>
                                    <input type="text" name="nationality" class="form-control" required>
                                    <span class="text-danger">@error('nationality'){{ $message }} @enderror</span>
                                {{-- </div> --}}
                                {{-- <div class="form-group"> --}}
                                    <label for="full-name">Address <span>*</span></label>
                                    <input type="text" name="address" class="form-control" required>
                                    <span class="text-danger">@error('address'){{ $message }} @enderror</span>
                                {{-- </div> --}}
                                {{-- <div class="form-group"> --}}
                                    <label for="full-name">Phone Number <span>*</span></label>
                                    <input type="text" name="number" class="form-control" required>
                                    <span class="text-danger">@error('number'){{ $message }} @enderror</span>
                                {{-- </div> --}}
                                {{-- <div class="form-group"> --}}
                                    <label for="full-name">Email <span>*</span></label>
                                    <input type="email" name="email" class="form-control" required>
                                    <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                                {{-- </div> --}}
                            </div>
                            <div class="form-section">
                                <legend>Work Experience</legend>
                                {{-- <div class="form-group"> --}}
                                    <label for="first-name">Current/Most Recent Employer <span>*</span></label>
                                    <input type="text" name="current_employer" class="form-control" required>
                                    <span class="text-danger">@error('current_employer'){{ $message }} @enderror</span>
                                {{-- </div> --}}
                                {{-- <div class="form-group"> --}}
                                    <label for="middle-name">Position Held <span>*</span></label>
                                    <input type="text" name="position_held" class="form-control" required>
                                    <span class="text-danger">@error('position_held'){{ $message }} @enderror</span>
                                {{-- </div> --}}
                                {{-- <div class="form-group"> --}}
                                    <label for="last-name">Duration of Employment (From - To) <span>*</span></label>
                                    <input type="text" name="duration_of_employment" class="form-control" required>
                                    <span class="text-danger">@error('duration_of_employment'){{ $message }} @enderror</span>
                                {{-- </div> --}}
                                {{-- <div class="form-group"> --}}
                                    <label for="dob">Responsibilities <span>*</span></label>
                                    <textarea name="responsilibities" class="form-control" cols="70" rows="6"></textarea>
                                    <span class="text-danger">@error('responsilibities'){{ $message }} @enderror</span>
                                {{-- </div> --}}
                                {{-- <div class="form-group"> --}}
                                    <label>Previous Employer <span>*</span></label>
                                    <input type="text" name="current_employer2" class="form-control" required>
                                    <span class="text-danger">@error('current_employer2'){{ $message }} @enderror</span>
                                {{-- </div> --}}
                                {{-- <div class="form-group"> --}}
                                    <label for="nationality">Position Held <span>*</span></label>
                                    <input type="text" name="position_held2" class="form-control" required>
                                    <span class="text-danger">@error('position_held2'){{ $message }} @enderror</span>
                                {{-- </div> --}}
                                {{-- <div class="form-group"> --}}
                                    <label for="full-name">Duration of Employment (From - To) <span>*</span></label>
                                    <input type="text" name="duration_of_employment2" class="form-control" required>
                                    <span class="text-danger">@error('duration_of_employment2'){{ $message }} @enderror</span>
                                {{-- </div> --}}
                                {{-- <div class="form-group"> --}}
                                    <label for="full-name">Responsibilities <span>*</span></label>
                                    <textarea name="responsilibities2" class="form-control" cols="70" rows="6" required></textarea>
                                    <span class="text-danger">@error('responsilibities2'){{ $message }} @enderror</span>
                                {{-- </div> --}}
                            </div>

                            <div class="form-section">
                                <legend>Educational Background</legend>
                                {{-- <div class="form-group"> --}}
                                    <label for="first-name">Institution Name <span>*</span></label>
                                    <input type="text" name="institution_name" class="form-control" required>
                                    <span class="text-danger">@error('institution_name'){{ $message }} @enderror</span>
                                {{-- </div> --}}
                                {{-- <div class="form-group"> --}}
                                    <label for="middle-name">Degree/Diploma Obtained <span>*</span></label>
                                    <input type="text" name="certificate" class="form-control" required>
                                    <span class="text-danger">@error('certificate'){{ $message }} @enderror</span>
                                {{-- </div> --}}
                                {{-- <div class="form-group"> --}}
                                    <label for="last-name">Highest Qualification <span>*</span></label>
                                    <input type="text" name="highest_qualification" class="form-control">
                                {{-- </div> --}}
                                {{-- <div class="form-group"> --}}
                                    <label for="dob">Year of Graduation <span>*</span></label>
                                    <input type="date" name="year_of_graduation" class="form-control" required>
                                    <span class="text-danger">@error('year_of_graduation'){{ $message }} @enderror</span>
                                {{-- </div> --}}
                                {{-- <div class="form-group"> --}}
                                    <label>Secondary Education <span>*</span></label>
                                    <hr>
                                {{-- </div> --}}
                                {{-- <div class="form-group"> --}}
                                    <label for="nationality">School Name <span>*</span></label>
                                    <input type="text" name="school_name" class="form-control" required>
                                    <span class="text-danger">@error('school_name'){{ $message }} @enderror</span>
                                {{-- </div> --}}
                                {{-- <div class="form-group"> --}}
                                    <label for="full-name">Certificate Obtained <span>*</span></label>
                                    <input type="text" name="secondary_certificate" class="form-control" required>
                                    <span class="text-danger">@error('secondary_certificate'){{ $message }} @enderror</span>
                                {{-- </div> --}}
                                {{-- <div class="form-group"> --}}
                                    <label for="full-name">Year of Completion <span>*</span></label>
                                    <input type="date" name="year_of_completion" class="form-control" required>
                                    <span class="text-danger">@error('year_of_completion'){{ $message }} @enderror</span>
                                {{-- </div> --}}
                            </div>

                            <div class="form-section">
                                <legend>Referees</legend>
                                {{-- <div class="form-group"> --}}
                                    <label for="first-name">Name <span>*</span></label>
                                    <input type="text" name="referee_name" class="form-control" required>
                                    <span class="text-danger">@error('referee_name'){{ $message }} @enderror</span>
                                {{-- </div> --}}
                                {{-- <div class="form-group"> --}}
                                    <label for="middle-name">Position <span>*</span></label>
                                    <input type="text" name="referee_position" class="form-control" required>
                                    <span class="text-danger">@error('referee_position'){{ $message }} @enderror</span>
                                {{-- </div> --}}
                                {{-- <div class="form-group"> --}}
                                    <label for="last-name">Company/Organization <span>*</span></label>
                                    <input type="text" name="referee_company" class="form-control" required>
                                    <span class="text-danger">@error('referee_company'){{ $message }} @enderror</span>
                                {{-- </div> --}}
                                {{-- <div class="form-group"> --}}
                                    <label for="dob">Contact Number <span>*</span></label>
                                    <input type="text" name="referee_number" class="form-control" required>
                                    <span class="text-danger">@error('referee_number'){{ $message }} @enderror</span>
                                {{-- </div> --}}
                                {{-- <div class="form-group"> --}}
                                    <label for="dob">Email Address <span>*</span></label>
                                    <input type="email" name="referee_email" class="form-control" required>
                                    <span class="text-danger">@error('referee_email'){{ $message }} @enderror</span>
                                {{-- </div> --}}
                                {{-- <div class="form-group"> --}}
                                    <label>Other Referee<span></span></label>
                                {{-- </div> --}}
                                    <hr>
                                {{-- <div class="form-group"> --}}
                                    <label for="first-name">Name <span>*</span></label>
                                    <input type="text" name="referee_name2" class="form-control" required>
                                    <span class="text-danger">@error('referee_name2'){{ $message }} @enderror</span>
                                {{-- </div> --}}
                                {{-- <div class="form-group"> --}}
                                    <label for="middle-name">Position <span>*</span></label>
                                    <input type="text" name="referee_position2" class="form-control" required>
                                    <span class="text-danger">@error('referee_positiion2'){{ $message }} @enderror</span>
                                {{-- </div> --}}
                                {{-- <div class="form-group"> --}}
                                    <label for="last-name">Company/Organization <span></span></label>
                                    <input type="text" name="referee_company2" class="form-control" required>
                                    <span class="text-danger">@error('referee_company2'){{ $message }} @enderror</span>
                                {{-- </div> --}}
                                {{-- <div class="form-group"> --}}
                                    <label for="dob">Contact Number <span>*</span></label>
                                    <input type="text" name="referee_number2" class="form-control" required>
                                    <span class="text-danger">@error('referee_number2'){{ $message }} @enderror</span>
                                {{-- </div> --}}
                                {{-- <div class="form-group"> --}}
                                    <label for="dob">Email Address <span>*</span></label>
                                    <input type="email" name="referee_email2" class="form-control" required>
                                    <span class="text-danger">@error('referee_email2'){{ $message }} @enderror</span>
                                {{-- </div> --}}
                            </div>

                            <div class="form-section">
                                <legend>Other Relevant Information</legend>
                                {{-- <div class="form-group"> --}}
                                    <label for="first-name">Skills and Certifications <span>*</span></label>
                                    <input type="text" name="skills_certificate" class="form-control" required>
                                    <span class="text-danger">@error('skills_certificate'){{ $message }} @enderror</span>
                                {{-- </div> --}}
                                {{-- <div class="form-group"> --}}
                                    <label for="middle-name">Why do you want to work at Dernan Salt Limited? <span>*</span></label>
                                    <textarea name="reason" cols="70" rows="6" class="form-control" required></textarea>
                                    <span class="text-danger">@error('reason'){{ $message }} @enderror</span>
                                {{-- </div> --}}
                                {{-- <div class="form-group"> --}}
                                    <label for="last-name">Availability <span>*</span></label>
                                    <input type="text" name="availability" class="form-control" required>
                                    <span class="text-danger">@error('availability'){{ $message }} @enderror</span>
                                {{-- </div> --}}
                            </div>

                            <div class="form-section">
                                <legend>Document Uploads</legend>
                                {{-- <div class="form-group"> --}}
                                    <label for="first-name">Upload your Image <span>*</span></label>
                                    <input type="file" name="image" class="form-control" required>
                                    <span class="text-danger">@error('image'){{ $message }} @enderror</span>
                                {{-- </div> --}}
                                {{-- <div class="form-group"> --}}
                                    <label for="first-name">Upload your CV <span>*</span></label>
                                    <input type="file" name="cv" class="form-control" required>
                                    <span class="text-danger">@error('cv'){{ $message }} @enderror</span>
                                {{-- </div> --}}
                                {{-- <div class="form-group"> --}}
                                    <label for="middle-name">Upload your Certificates <span></span></label>
                                    <input type="file" name="cerificates_acquired" class="form-control">
                                    <span class="text-danger">@error('cerificates_acquired'){{ $message }} @enderror</span>
                                {{-- </div> --}}
                                {{-- <div class="form-group"> --}}
                                    <label for="last-name">Upload your Cover Letter <span>*</span></label>
                                    <input type="file" name="cover_letter" class="form-control" required>
                                    <span class="text-danger">@error('cover_letter'){{ $message }} @enderror</span>
                                {{-- </div> --}}
                                {{-- <div class="form-group"> --}}
                                    <label for="last-name">Upload any other relevant documents <span></span></label>
                                    <input type="file" name="other_relevant_doc" class="form-control">
                                    <span class="text-danger">@error('other_relevant_doc'){{ $message }} @enderror</span>
                                {{-- </div> --}}
                            </div>

                            <div class="form-section">
                                <legend>Agreement and Declaration</legend>
                                {{-- <div class="form-group"> --}}
                                    <label>Agreement <span>*</span></label>
                                    <p>By selecting "I agree," I certify that the information provided is true and accurate to the 
                                       best of my knowledge. I understand that providing false
                                       information may lead to the disqualification of my application
                                       or termination of my employment if discovered after being hired.
                                    </p>
                                    <input type="checkbox" name="agreement" value="I Agree"> I Agree
                                    <input type="checkbox" name="agreement" value="I Disagree"> I Disagree
                                    <span class="text-danger">@error('agreement'){{ $message }} @enderror</span>
                                {{-- </div> --}}
                                {{-- <div class="form-group"> --}}
                                    <label for="middle-name">Applicant's Signature <span>*</span></label>
                                    <input type="text" name="signature" class="form-control" placeholder="Please type your full name as a digital signature." required>
                                    <span class="text-danger">@error('signature'){{ $message }} @enderror</span>
                                {{-- </div> --}}
                                {{-- <div class="form-group"> --}}
                                    <label for="last-name">Date <span>*</span></label>
                                    <input type="date" name="date" class="form-control" required>
                                    <span class="text-danger">@error('date'){{ $message }} @enderror</span>
                                {{-- </div> --}}
                                <input type="text" name="status" hidden>
                            </div>

                            <div class="form-navigation">
                                <button type="button" class="previous btn btn-info float-left">Previous</button>
                                <button type="button" class="next btn btn-info float-right">Next</button>
                                <button type="submit" class="btn btn-success float-right">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<footer>
    <div class="container-lg px-md-4">
      <div class="row justify-content-md-between justify-content-center text-md-start my-5 flex-column flex-md-row text-center">
        <div class="col-lg-4 h-100 d-flex flex-column mx-auto mx-md-0 mb-lg-0 mb-5">
          <a href="/" class="logo">
            <img src="../assets/images/Asset4@4x.png" style="width:130px" alt="">
          </a>
          <p style="font-size: 14px;" class="mt-5">Copyright © 2024 Dernan Co., Ltd.
            <br>All Rights Reserved.
          </p>
        </div>
        <div class="col-lg-7 col-9 d-flex flex-column flex-md-row px-0 justify-content-lg-end mx-auto mx-md-0">
          <div class="col-lg-3 footerLinks-section">
            <h6 class="footer-text text-white mb-md-4 mb-2 mt-3 mt-md-0">Company</h6>
            <p>About us</p>
            <p>Job</p>
            <p>Contact us</p>
          </div>
          <div class="col-lg-3 footerLinks-section">
            <h6 class="footer-text text-white mb-md-4 mb-2 mt-3 mt-md-0">Support</h6>
            <p>Help center</p>
            <p>Terms of service</p>
            <p>Legal</p>
          </div>
          <div class="col-lg-4 me-3 me-lg-0">
            <h6 class="footer-text text-white mb-md-4 mb-2 mt-3 mt-md-0">Stay up to date</h6>
            <div class="position-relative footerInput-container mx-auto mx-md-0">
              <input type="email" name="" id="" placeholder="Your email address" class="footer-input px-2 py-2 pe-4 rounded-3">
              <div class="position-absolute top-0 end-0 h-100 d-flex align-items-center justify-content-center pe-2">
                <img src="../assets/icons/Vector.png" class="plane-icon text-white" style="width: 20px; height: 20px;" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

 <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="../assets/js/isotope.min.js"></script>
  <script src="../assets/js/owl-carousel.js"></script>

  <script src="../assets/js/tabs.js"></script>
  <script src="../assets/js/swiper.js"></script>
  <script src="../assets/js/custom.js"></script>

  <script>

    $(function() {
        var $sections = $('.form-section');
    
        function navigateTo(index) {
            $sections.removeClass('current').eq(index).addClass('current');
            $('.form-navigation .previous').toggle(index>0);
            var atTheEnd = index >= $sections.length-1;
            $('.form-navigation .next').toggle(!atTheEnd);
            $('.form-navigation [type = submit]').toggle(atTheEnd);
        }
    
        function curIndex() {
            return $sections.index($sections.filter('.current'));
        }
    
        $('.form-navigation .previous').click(function() {
            navigateTo(curIndex()-1);
        });
    
        $('.form-navigation .next').click(function() {
            $('.contact-form').parsley().whenValidate({
                group: 'block-'+curIndex()
            }).done(function() {
                navigateTo(curIndex()+1);
            });
        });
    
        $sections.each(function(index,section) {
            $(section).find(':input').attr('data-parsley-group', 'block-'+index);
        });
    
        navigateTo(0);
    });
    
    </script>

</body>
</html>