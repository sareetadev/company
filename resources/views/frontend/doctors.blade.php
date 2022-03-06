@extends('frontend.layout.mater')
@section('main-container')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <!---fontawsome--->

            <link
            rel="stylesheet"
            href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
            integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
            crossorigin="anonymous"
            />

            <link rel="icon" href="image/BlueLogo.png" />




            <!---style--->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <link rel="stylesheet" href="style/main.css">
            <link rel="stylesheet" href="style/pnv.css">
            <link rel="stylesheet" href="style/subpage.css">


            <script
            src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"
          ></script>
          <script
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"
          ></script>
          <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"
          ></script>
    <title>LS Neuro | Doctor</title>
</head>
<body>


      <!----scroll Btn---->
  <div class="scroll-btn">
    <a href="#"><span><i class="fa fa-angle-up fa-2x" aria-hidden="true"></i></span></a>
      </div>

            <!------------------------------------Nav Section------------------------------------>


            <div class="container-fluid c1 topnav d-none d-xl-block pb-0"> <!--p-0 changed-->
              <div class="row">
                  <div class="navbar navbar-expand-lg mr-auto pt-3 pb-0">

                      <ul class="navbar-nav">
                        <li class="ml-4" style="text-align: left;">
                          <a href="index.html" class="navbar-brand bg-white "><img src="image/logoslogonNew.png" alt='logo' height="60px" width="100%"/></a>
                        </li>
                      </ul>
              </div>
              <div class="navbar navbar-expand-lg ml-auto">
                <ul class="navbar-nav">
                <li class="nav-item"><i class="fas fa-ambulance"></i> 24 × 7 Ambulance Support</li>
              </ul>
              </div>
              </div>
          </div>


          <div class="container-fluid mainnav sticky-top c2 ">
            <div class="navbar navbar-expand-lg navbar-light ">
                <button class="navbar-toggler" data-toggle="collapse" data-target="#mynavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse"  id="mynavbar">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item"><a href="index.html" class="nav-link  text-white">Home</a></li>
                        <li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle  text-white" data-toggle="dropdown">About Us</a>
                          <div class="dropdown-menu">
                            <a href="aboutLSNGH.html"  class="dropdown-item">About LSNGH</a>
                            <a href="missionNvision.html"  class="dropdown-item">Vision & Mission</a>
                            <a href="History.html"  class="dropdown-item">History</a>
                            <a href="obd.html"  class="dropdown-item">Board of Directors</a>
                            <a href="msgCM.html"  class="dropdown-item">Message From Chairman</a>
                            <a href="msgDM.html"  class="dropdown-item">Message From MD</a>
                            <a href="equipment.html"  class="dropdown-item">Equipment</a>
                          </div>
                        </li>
                        <li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle  text-white" data-toggle="dropdown">Service</a>
                          <div class="dropdown-menu">
                            <a href="serviceLSNGH.html"  class="dropdown-item">Services at LSNGH</a>
                            <a href="techNIno.html"  class="dropdown-item">Technology & Innovation</a>
                          </div>
                        </li>
                        <li class="nav-item"><a href="treatment.html" class="nav-link  text-white">Treatment</a></li>
                        <li class="nav-item active"><a href="doctors.html" class="nav-link  text-white">Doctors</a></li>
                        <li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle  text-white" data-toggle="dropdown">Department</a>
                          <div class="dropdown-menu">
                            <a href="clinical.html"  class="dropdown-item">Clinical</a>
                            <a href="nonClinical.html"  class="dropdown-item">Non-Clinical</a>
                            <a href="Diagonsis.html"  class="dropdown-item">Diagonsis</a>
                            <a href="laboratory.html"  class="dropdown-item">Laboratory</a>
                          </div>
                        </li>
                        <li class="nav-item"><a href="PnV.html" class="nav-link  text-white">Patients & Visitors</a></li>
                        <li class="nav-item"><a href="career.html" class="nav-link  text-white">Career</a></li>
                        <li class="nav-item"><a href="newsNevents.html" class="nav-link  text-white">News & Event</a></li>
                        <li class="nav-item"><a href="contact.html" class="nav-link  text-white">Contact Us</a></li>
                    </ul>
                </div>
            </div>
          </div>




        <!-----Breadcrumb section------>

        <div class="container-fluid pnvc1 breadcrumb m-0">
            <nav class="breadcrumbEx">
              <h1 class="text-center text-white"> Doctor</h1>
              <div class="breadcrumb-wrapper text-white text-center">
                <span>
                    <a title="Homepage" href="index.html"><i class="fas fa-home"></i>&nbsp;&nbsp;Home</a>
                </span>
                <span class="">&nbsp; : : &nbsp;</span>
                <span class="" id="breadcrumbActive">
                    Doctor
                </span>
            </div>
            </nav>
          </div>

    <!------------------------------------Doctor------------------------------------>
    <div class="container-fluid pnvc2">
        <div class="row heading">
            <div class="col text-center">
            <h1>Doctor</h1>
        </div>
        </div>

    </div>
    <!------------------------------------footer Section------------------------------------>

    <div class="container-fluid c12 footer">
      <div class="row mx-auto">
        <div class="col-sm ">
          <img src="image/whiteLogo.png" class="ml-sm-5 ml-0 " alt="logo" />
          <p>The relentless service of Hospitals inthe past 25 years taken health careto the most modern levels in the regioncatering to urban & rural.</p>
        </div>
        <div class="col-sm">
          <h3>Quick Link</h3>
          <ul class="navbar-nav">
            <li class="nav-item"><a href="#" class="nav-link  text-white"><i class="fal fa-angle-right"></i> About Us</a></li>
            <li class="nav-item"><a href="#" class="nav-link  text-white"><i class="fal fa-angle-right"></i> Doctors</a></li>
            <li class="nav-item"><a href="#" class="nav-link  text-white"><i class="fal fa-angle-right"></i> Appointment</a></li>
            <li class="nav-item"><a href="#" class="nav-link  text-white"><i class="fal fa-angle-right"></i> Service</a></li>
            <li class="nav-item"><a href="#" class="nav-link  text-white"><i class="fal fa-angle-right"></i> Department</a></li>
        </ul>
        </div>
        <div class="col contact">
          <h3>Contact</h3>
          <ul>
            <li><i class="fas fa-phone-alt"></i> 051523780, 9855020917 </li>
            <li><i class="fa fa-envelope" aria-hidden="true"></i> info@lsneuronepal.com</li>
            <li><i class="fas fa-map-marker-alt"></i> parwanipur-5, Bara, Nepal</li>
            <li onclick="location.href = 'http://www.lsneuronepal.com'"><i class="fa fa-globe"></i> www.lsneuronepal.com</li>

          </ul>
        </div>
        <div class="col follow">
          <h3>Follow US</h3>
          <div class="social">
            <i class="fab fa-facebook-f" id="fb"  onclick="location.href = 'https://www.facebook.com/LSNAGH'"></i>  <i class="fab fa-linkedin-in"></i>  <i class="fab fa-twitter"></i> <i class="fab fa-instagram"></i>
          </div>
          <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3554.4380342543004!2d84.88343481501377!3d27.01632118308306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399355467435ab11%3A0x18ca7f60048f5a5c!2sLs%20neuro%20hospital!5e0!3m2!1sen!2snp!4v1644548681568!5m2!1sen!2snp" width="165" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col text-center">
        <p>Copyright@dynamictechnosoft . All right reserved</p>
      </div>
    </div>
  </div>

</body>
</html>
@endsection
