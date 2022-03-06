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





        <!---style--->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style/main.css">


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



       <!-- slick slider (img slider) script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href={{asset('css/main.css')}}" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />



    <title>LS Neuro | Home</title>
</head>
<body>

    <!----scroll Btn---->
    <div class="scroll-btn">
      <a href="#"><span><i class="fa fa-angle-up fa-2x" aria-hidden="true"></i></span></a>
        </div>


        <!------------------------------------Nav Section------------------------------------>

@include('frontend.layout.siteseting')

@include('frontend.layout.header')



        <!------------------------------------Hero Section------------------------------------>

@include('frontend.layout.herosection')


        <!------------------------------------about Section------------------------------------>

        <div class="container-fluid c4 about">
            <div class="row">
                <div class="col-lg-5 col-12 mb-lg-0 mb-5">
                    <img src="image/img2.png" alt="about-img" class="img-fluid" />
                </div>
                <div class="col-md col-12 my-auto">
                    <p class="">About L.S. Neuro</p>
                    <h1>We Provided Best</h1>
                    <h1>Service Health</h1>
                    <p>We provide the most full medical services, so every person could have theopportunity to receive qualitative medical help. Our Clinic has grown to providea world class facility for the treatment of tooth loss, dental cosmetics and bore.</p>
                    <h4>Our Special Features</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <ul>
                                <li><i class="fas fa-check-circle"></i> Adult Trauma Center</li>
                                <li><i class="fas fa-check-circle"></i> Treat minor illnesses</li>
                                <li><i class="fas fa-check-circle"></i> Dental and Oral Surgery</li>
                              </ul>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <li><i class="fas fa-check-circle"></i> Children Trauma Center</li>
                                <li><i class="fas fa-check-circle"></i> Heart and Vascular Institute</li>
                                <li><i class="fas fa-check-circle"></i> Plastic Surgery</li>
                              </ul>
                        </div>
                    </div>
                    <button class="btn btn3 text-white">View More</button>
                </div>
            </div>
        </div>

        <!------------------------------------image slide Section------------------------------------>

        <div class="container-fluid c5 imgSlide">
                        <div class="row slider">

                        <div class="col-md-12 m-auto">
                          <img src="image/imgslide1.jpg" class="img-fluid" alt="img-slide">
                        </div>

                        <div class="col-md-12 m-auto">
                          <img src="image/woman-doctor-wearing-lab-coat-with-stethoscope-isolated.jpg" class="img-fluid" alt="img-slide"/>
                        </div>

                        <div class="col-md-12 m-auto">
                          <img src="image/imgslide3.jpeg" class="img-fluid" alt="img-slide"/>
                        </div>

                        <div class="col-md-12 m-auto">
                          <img src="image/imgslide4.jpeg" class="img-fluid" alt="img-slide"/>
                        </div>

                        <div class="col-md-12 m-auto">
                          <img src="image/news1.jpg" class="img-fluid" alt="img-slide"/>
                        </div>

                        <div class="col-md-12 m-auto">
                          <img src="image/news2.JPG" class="img-fluid" alt="img-slide"/>
                        </div>


                      </div>
                </div>

        <!------------------------------------services Section------------------------------------>
                <div class="container-fluid c6 services">
                    <div class="row">
                        <div class="col-12 text-center">
                        <h1>Our Services</h1>
                        <p>Condimentum rutrum placerat egestas condimentum mi eros. Eleifend cras quirntum Feugiat elit placerat. Diam tempor malesuada.</p>
                        </div>
                    </div>

                        <div class="row">
                            <div class="serviceCard col">

                                <div class="card card1 text-center">
                                    <img src="Icons/Radiology.svg" alt="icon"/>
                                    <h5>Radiology Services</h5>
                                    <p>An Internists! to cure cancerwork with radiation oncologists& surgeons cure cancer.</p>
                                </div>

                                <div class="card card2 text-center">
                                    <img src="Icons/Pharmacy.svg" alt="icon"/>
                                    <h5>Pharmacy</h5>
                                    <p>An Internists! to cure cancerwork with radiation oncologists& surgeons cure cancer.</p>
                                </div>

                                <div class="card card3 text-center">
                                    <img src="Icons/Physiotheraphy.svg" alt="icon"/>
                                    <h5>Physiotherapy</h5>
                                    <p>An Internists! to cure cancerwork with radiation oncologists& surgeons cure cancer.</p>
                                </div>

                                <div class="card card4 text-center">
                                    <img src="Icons/OT Service.svg" alt="icon"/>
                                    <h5>OT Services</h5>
                                    <p>An Internists! to cure cancerwork with radiation oncologists& surgeons cure cancer.</p>
                                </div>

                            </div>
                        </div>

                        <div class="row srow1">
                            <div class="col-lg-5 col-12 mb-lg-0 mb-5">
                                <img src="image/simg1.png"  class="img-fluid"  alt="about-img" />
                            </div>
                            <div class="col-md col-12">
                                <h1>Treatments</h1>
                                <h4>Treatment we use at LSNGH</h4>
                                <p>Ridiculus elit amet sagittis arcu cras ornare, amet a amet urna vicras. Ipsumsociosqu. Mi consequat nec, per urna sed vitae mi lectusn egestas, in consectetuer sed. Nunc id venenatis</p>

                                        <ul>
                                            <li><i class="far fa-check-circle"></i> Liver Function Tests. The Liver Function Tests (LFT)ed</li>
                                            <li><i class="far fa-check-circle"></i> Full Blood Examination.</li>
                                            <li><i class="far fa-check-circle"></i> TSH (Thyroid Stimulating Hormone) Quantification Urinalysis.</li>
                                            <li><i class="far fa-check-circle"></i> INR (International Normalized Ratio)</li>
                                            <li><i class="far fa-check-circle"></i> Dental and Oral Surgery</li>
                                            <li><i class="far fa-check-circle"></i> Children's Trauma Center</li>

                                          </ul>

                            </div>
                            </div>

                </div>

    <!------------------------------------Department Section------------------------------------>

    <div class="container-fluid c7">

        <div class="row">
            <div class="col-12 text-center">
            <h1>Department</h1>
            </div>
        </div>

        <div class="row">
            <div class="DepartmentCard col">

                <div class="card card1 text-center active" id="call1">
                    <i class="fas fa-clinic-medical"></i>
                    <h5>Clinical Department</h5>
                </div>

                <div class="card card2 text-center" id="call2">
                    <i class="fas fa-home-lg-alt"></i>
                    <h5>Non Clinical Department</h5>
                </div>

                <div class="card card3 text-center" id="call3">
                    <i class="far fa-stethoscope"></i>
                    <h5>Diagnosis  Department</h5>
                </div>

                <div class="card card4 text-center" id="call4">
                    <i class="far fa-microscope"></i>
                    <h5>Laboratory Department</h5>
                </div>

            </div>
        </div>
    </div>
<div class="container-fluid hideandShowTab">
        <div class="hideShow">
          <div class="col" id="card1" style="display: block;">
            <div class="row">
              <div class="col-md-7">
                  <h4>Clinical Department</h4>
                <div class="row">

                  <div class="col-sm-6">
                    <li><i class="fas fa-check-circle"></i> Adult Trauma Center</li>
                    <li><i class="fas fa-check-circle"></i> Treat minor illnesses</li>
                    <li><i class="fas fa-check-circle"></i> Dental and Oral Surgery</li>
                  </div>

                  <div class="col-sm-6">
                    <li><i class="fas fa-check-circle"></i> Children's Trauma Center</li>
                    <li><i class="fas fa-check-circle"></i> Heart and Vascular Institute</li>
                    <li><i class="fas fa-check-circle"></i> Plastic Surgery</li>
                  </div>
                </div>


                <button onclick="location.href = 'contact.html'">Contact Us</button>


              </div>
              <div class="col-md-5 mt-3 mt-md-0">
                <img src="image/Dep1.png" alt="img" class="departimg img-fluid" />
              </div>
            </div>
          </div>
        </div>

        <div class="hideShow">
          <div class="col" id="card2" style="display: none">
            <div class="row">
              <div class="col-md-7">
                  <h4>Non Clinical Department</h4>
                <div class="row">

                  <div class="col-sm-6">
                    <li><i class="fas fa-check-circle"></i> Adult Trauma Center</li>
                    <li><i class="fas fa-check-circle"></i> Treat minor illnesses</li>
                    <li><i class="fas fa-check-circle"></i> Dental and Oral Surgery</li>
                  </div>

                  <div class="col-sm-6">
                    <li><i class="fas fa-check-circle"></i> Children's Trauma Center</li>
                    <li><i class="fas fa-check-circle"></i> Heart and Vascular Institute</li>
                    <li><i class="fas fa-check-circle"></i> Plastic Surgery</li>
                  </div>
                </div>


                <button onclick="location.href = 'contact.html'">Contact Us</button>


              </div>
              <div class="col-md-5 mt-3 mt-md-0">
                <img src="image/Dep1.png" alt="img" class="departimg img-fluid" />
              </div>
            </div>
          </div>
        </div>


        <div class="hideShow">
          <div class="col" id="card3" style="display: none">
            <div class="row">
              <div class="col-md-7">
                  <h4>Diagnosis  Department</h4>
                <div class="row">

                  <div class="col-sm-6">
                    <li><i class="fas fa-check-circle"></i> Adult Trauma Center</li>
                    <li><i class="fas fa-check-circle"></i> Treat minor illnesses</li>
                    <li><i class="fas fa-check-circle"></i> Dental and Oral Surgery</li>
                  </div>

                  <div class="col-sm-6">
                    <li><i class="fas fa-check-circle"></i> Children's Trauma Center</li>
                    <li><i class="fas fa-check-circle"></i> Heart and Vascular Institute</li>
                    <li><i class="fas fa-check-circle"></i> Plastic Surgery</li>
                  </div>
                </div>


                <button onclick="location.href = 'contact.html'">Contact Us</button>


              </div>
              <div class="col-md-5 mt-3 mt-md-0">
                <img src="image/Dep1.png" alt="img" class="departimg img-fluid" />
              </div>
            </div>
          </div>
        </div>


        <div class="hideShow ">
          <div class="col" id="card4" style="display: none">
            <div class="row">
              <div class="col-md-7">
                  <h4>Laboratory Department</h4>
                <div class="row">

                  <div class="col-sm-6">
                    <li><i class="fas fa-check-circle"></i> Adult Trauma Center</li>
                    <li><i class="fas fa-check-circle"></i> Treat minor illnesses</li>
                    <li><i class="fas fa-check-circle"></i> Dental and Oral Surgery</li>
                  </div>

                  <div class="col-sm-6">
                    <li><i class="fas fa-check-circle"></i> Children's Trauma Center</li>
                    <li><i class="fas fa-check-circle"></i> Heart and Vascular Institute</li>
                    <li><i class="fas fa-check-circle"></i> Plastic Surgery</li>
                  </div>
                </div>


                <button onclick="location.href = 'contact.html'">Contact Us</button>


              </div>
              <div class="col-md-5 mt-3 mt-md-0">
                <img src="image/Dep1.png" alt="img" class="departimg img-fluid" />
              </div>
            </div>
          </div>
        </div>
</div>


    <!------------------------------------our Doctor Section------------------------------------>

    <div class="container-fluid c8 doctor">
        <div class="row">
            <div class="col-12 text-center">
            <h1>Our Doctor</h1>
            <p>Condimentum rutrum placerat egestas condimentum mi eros. Eleifend cras quirntum Feugiat elit placerat. Diam tempor malesuada.</p>
            </div>
        </div>


        <div class="row">
            <div class="DocCard col">

                <div class="card card1 text-center">
                    <img src="image/card1.png" alt="doc-img" />
                    <div class="docPara">
                        <ul>
                            <li>Dr. Hari Acharya</li>
                            <li>Heart Patients</li>
                            <li><button class="btn btn5 text-white">View More</button></li>
                        </ul>

                    </div>
                </div>

                <div class="card card2 text-center">
                    <img src="image/card2.png" alt="doc-img" />
                    <div class="docPara">
                        <ul>
                            <li>Dr. Hari Acharya</li>
                            <li>MBBS MS</li>
                            <li><button class="btn btn5 text-white">View More</button></li>
                        </ul>

                    </div>
                </div>

                <div class="card card3 text-center">
                    <img src="image/card3.png" alt="doc-img" />
                    <div class="docPara">
                        <ul>
                            <li>Dr. Hari Acharya</li>
                            <li>MBBS MS</li>
                            <li><button class="btn btn5 text-white">View More</button></li>
                        </ul>

                    </div>
                </div>

            </div>
        </div>

    </div>


        <!------------------------------------our plan Section------------------------------------>

        <div class="container-fluid c9 plans">
            <div class="row">
                <div class="col-12 text-center">
                <h1>Choose Pricing Plan</h1>
                <p>Condimentum rutrum placerat egestas condimentum mi eros. Eleifend cras quirntum Feugiat elit placerat. Diam tempor malesuada.</p>
                </div>
            </div>


            <div class="row">
                <div class="planCard col">

                    <div class="card card1">
                        <div class="planPrice  text-center">
                            <ul>
                                <li>Basic</li>
                                <li>Rs. <span>5000</span>  per month</li>
                            </ul>
                        </div>

                        <div class="planList mx-auto">
                            <ul class="">
                                <li><i class="fas fa-check-circle"></i> Liver Function Tests.</li>
                                <li><i class="fas fa-check-circle"></i> Full Blood Examination.</li>
                                <li><i class="fas fa-check-circle"></i> TSH (Thyroid Stimulating</li>
                                <li><i class="fas fa-check-circle"></i> INR (International Normalized</li>
                            </ul>

                        </div>
                    </div>

                    <div class="card card2">
                        <div class="planPrice  text-center">
                            <ul>
                                <li>Standard</li>
                                <li>Rs. <span>7000</span>  per month</li>
                            </ul>
                        </div>

                        <div class="planList mx-auto">
                            <ul>
                                <li><i class="fas fa-check-circle"></i> Liver Function Tests.</li>
                                <li><i class="fas fa-check-circle"></i> Full Blood Examination.</li>
                                <li><i class="fas fa-check-circle"></i> TSH (Thyroid Stimulating</li>
                                <li><i class="fas fa-check-circle"></i> INR (International Normalized</li>
                            </ul>

                        </div>
                    </div>

                    <div class="card card3">
                        <div class="planPrice  text-center">
                            <ul>
                                <li>Premium</li>
                                <li>Rs. <span>9000</span>  per month</li>
                            </ul>
                        </div>

                        <div class="planList mx-auto">
                            <ul>
                                <li><i class="fas fa-check-circle"></i> Liver Function Tests.</li>
                                <li><i class="fas fa-check-circle"></i> Full Blood Examination.</li>
                                <li><i class="fas fa-check-circle"></i> TSH (Thyroid Stimulating</li>
                                <li><i class="fas fa-check-circle"></i> INR (International Normalized</li>
                            </ul>

                        </div>
                    </div>

                </div>
            </div>

        </div>


                <!------------------------------------our News Section------------------------------------>

                <div class="container-fluid c10 plans">
                    <div class="row">
                        <div class="col-12 text-center">
                        <h1>News & Events</h1>
                        <p>Condimentum rutrum placerat egestas condimentum mi eros. Eleifend cras quirntum Feugiat elit placerat. Diam tempor malesuada.</p>
                        </div>
                    </div>


                    <div class="row">
                        <div class="newsCard col">

                            <div class="card card1">
                                <img src="image/news1.jpg" alt="news-img" class="img-fluid" />
                                <div class="newsText">
                                    <p class="text-center">Operation theatres are equipped with</p>
                                    <div class="row">
                                        <div class="col my-1 my-lg-0 text-center">
                                    <button class="btn btn6 ">10 Feb 2021</button>
                                        </div>
                                        <div class="col  text-center">
                                    <button class="btn btn6 ">See More</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card card2">
                                <img src="image/news2.jpg" alt="news-img" class="img-fluid" />
                                <div class="newsText">
                                    <p  class="text-center">Operation theatres are equipped with</p>
                                    <div class="row">
                                        <div class="col my-1 my-lg-0 text-center">
                                    <button class="btn btn6 ">10 Feb 2021</button>
                                        </div>
                                        <div class="col text-center">
                                    <button class="btn btn6 ">See More</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card card3">
                                <img src="image/news3.jpg" alt="news-img" class="img-fluid" />
                                <div class="newsText">
                                    <p  class="text-center">Operation theatres are equipped with</p>
                                    <div class="row">
                                        <div class="col my-1 my-lg-0 text-center">
                                    <button class="btn btn6 ">10 Feb 2021</button>
                                        </div>
                                        <div class="col text-center">
                                    <button class="btn btn6 ">See More</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>


    <!----------------------------------- comment Section------------------------------------>

                  <div class="container-fluid c11 plans">
                            <div class="row text-white">
                                <div class="col-12 text-center">
                                <h1>Patient Feedback</h1>
                                <p>Condimentum rutrum placerat egestas condimentum mi eros. Eleifend cras quirntum Feugiat elit placerat. Diam tempor malesuada.</p>
                                </div>
                            </div>

                            <div class="row slider2">
                              <div class="col-md-12 mx-auto px-3 pb-5">
                                <div class="feedback">
                                  <div class="feedbackcard1 py-3  text-center">
                                    <i class="fas fa-quote-left"></i>
                                    <p class="text-center">We offer extensive medical procedures tooutbound and inbound patients what it is andwe are very proud of achievement of our staffWe are all work.
                                    </p>
                                    <p class="">
                                      <span class="fw-bolder">Hari Acharya</span><br />Heart Patients
                                    </p>
                                    <img
                                      src="image/men.jpg"
                                      alt="profile" class="img-fluid"
                                    />
                                  </div>
                                </div>
                              </div>


                              <div class="col-md-12 mx-auto px-3 pb-5">
                                <div class="feedback">
                                  <div class="feedbackcard1 py-3  text-center">
                                    <i class="fas fa-quote-left"></i>
                                    <p class="text-center">We offer extensive medical procedures tooutbound and inbound patients what it is andwe are very proud of achievement of our staffWe are all work.
                                    </p>
                                    <p class="">
                                      <span class="fw-bolder">Hari Acharya</span><br />Heart Patients
                                    </p>
                                    <img
                                      src="image/men.jpg"
                                      alt="profile" class="img-fluid"
                                    />
                                  </div>
                                </div>
                              </div>


                              <div class="col-md-12 mx-auto px-3 pb-5">
                                <div class="feedback">
                                  <div class="feedbackcard1 py-3  text-center">
                                    <i class="fas fa-quote-left"></i>
                                    <p class="text-center">We offer extensive medical procedures tooutbound and inbound patients what it is andwe are very proud of achievement of our staffWe are all work.
                                    </p>
                                    <p class="">
                                      <span class="fw-bolder">Hari Acharya</span><br />Heart Patients
                                    </p>
                                    <img
                                      src="image/men.jpg"
                                      alt="profile" class="img-fluid"
                                    />
                                  </div>
                                </div>
                              </div>


                              <div class="col-md-12 mx-auto px-3 pb-5">
                                <div class="feedback">
                                  <div class="feedbackcard1 py-3  text-center">
                                    <i class="fas fa-quote-left"></i>
                                    <p class="text-center">We offer extensive medical procedures tooutbound and inbound patients what it is andwe are very proud of achievement of our staffWe are all work.
                                    </p>
                                    <p class="">
                                      <span class="fw-bolder">Hari Acharya</span><br />Heart Patients
                                    </p>
                                    <img
                                      src="image/men.jpg"
                                      alt="profile" class="img-fluid"
                                    />
                                  </div>
                                </div>
                              </div>


                              <div class="col-md-12 mx-auto px-3 pb-5">
                                <div class="feedback">
                                  <div class="feedbackcard1 py-3  text-center">
                                    <i class="fas fa-quote-left"></i>
                                    <p class="text-center">We offer extensive medical procedures tooutbound and inbound patients what it is andwe are very proud of achievement of our staffWe are all work.
                                    </p>
                                    <p class="">
                                      <span class="fw-bolder">Hari Acharya</span><br />Heart Patients
                                    </p>
                                    <img
                                      src="image/men.jpg"
                                      alt="profile" class="img-fluid"
                                    />
                                  </div>
                                </div>
                              </div>


                              <div class="col-md-12 mx-auto px-3 pb-5">
                                <div class="feedback">
                                  <div class="feedbackcard1 py-3  text-center">
                                    <i class="fas fa-quote-left"></i>
                                    <p class="text-center">We offer extensive medical procedures tooutbound and inbound patients what it is andwe are very proud of achievement of our staffWe are all work.
                                    </p>
                                    <p class="">
                                      <span class="fw-bolder">Hari Acharya</span><br />Heart Patients
                                    </p>
                                    <img
                                      src="image/men.jpg"
                                      alt="profile" class="img-fluid"
                                    />
                                  </div>
                                </div>
                              </div>



                            </div>
                    </div>

@yield('main-container')

    <!------------------------------------footer Section------------------------------------>

      @include('frontend.layout.footer')

</body>
</html>
