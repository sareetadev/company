
        <!------------------------------------Nav Section------------------------------------>





        <!------------------------------------Hero Section------------------------------------>
@extends('frontend.layout.master')
@section('main-container')

@csrf
<div class="container-fluid c3 hero text-white">

    <div class="row">
        <div class="col-lg-5 col-12">
            <i class="fas fa-ambulance mb-3"></i>
            <h1 class="mb-3 font-weight-bold">WE CARE ABOUT YOUR HEALTH</h1>
            <p class="mb-sm-5 mb-3">Since the first days of operation of Hospital our teaming has been focused on building a high-qualities medicals service by Hospital.</p>
            <!-- <button class="btn btn1" onclick="location.href = 'contact.html'">Contact Us</button> -->
            <button class="btn btn2">Learn More</button>

        </div>
    </div>
</div>


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

                                <div class="card card1  text-center">
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
                    <img src="image/dummyImg.png" alt="doc-img" />
                    <div class="docPara">
                        <ul>
                            <li>Dr. XYZ </li>
                            <li>xyz</li>
                            <li><button class="btn btn5 text-white">View More</button></li>
                        </ul>

                    </div>
                </div>

                <div class="card card2 text-center">
                    <img src="image/dummyImg.png" alt="doc-img" />
                    <div class="docPara">
                        <ul>
                            <li>Dr. XYZ </li>
                            <li>xyz</li>
                            <li><button class="btn btn5 text-white">View More</button></li>
                        </ul>

                    </div>
                </div>

                <div class="card card3 text-center">
                    <img src="image/dummyImg.png" alt="doc-img" />
                    <div class="docPara">
                        <ul>
                            <li>Dr. XYZ </li>
                            <li>xyz</li>
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
                                <li>Rs. <span>****</span>  per month</li>
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
                                <li>Rs. <span>****</span>  per month</li>
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
                                <li>Rs. <span>****</span>  per month</li>
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


                    <div class="row slider3">

              <div class="col-md-12">
                <div class="card card1">
                  <img src="image/news1.jpg" alt="news-img" class="img-fluid" />
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

              <div class="col-md-12">
                <div class="card card1">
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

              </div>

              <div class="col-md-12">
                <div class="card card1">
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

              <div class="col-md-12">
                <div class="card card1">
                  <img src="image/news1.jpg" alt="news-img" class="img-fluid" />
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

              <div class="col-md-12">
                <div class="card card1">
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

              </div>


              <div class="col-md-12">
                <div class="card card1">
                  <img src="image/woman-doctor-wearing-lab-coat-with-stethoscope-isolated.jpg" alt="news-img" class="img-fluid" />
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



              <div class="col-md-12">
                <div class="card card1">
                  <img src="image/242036151_2031608060328441_4135998142499454341_n.jpg" alt="news-img" class="img-fluid" />
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
                                      <span class="fw-bolder">xyz xyz</span><br />xyz
                                    </p>
                                    <img
                                      src="image/dummyImg.png"
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
                                      <span class="fw-bolder">xyz xyz</span><br />xyz
                                    </p>
                                    <img
                                      src="image/dummyImg.png"
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
                                      <span class="fw-bolder">xyz xyz</span><br />xyz
                                    </p>
                                    <img
                                      src="image/dummyImg.png"
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
                                      <span class="fw-bolder">xyz xyz</span><br />xyz
                                    </p>
                                    <img
                                      src="image/dummyImg.png"
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
                                      <span class="fw-bolder">xyz xyz</span><br />xyz
                                    </p>
                                    <img
                                      src="image/dummyImg.png"
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
                                      <span class="fw-bolder">xyz xyz</span><br />xyz
                                    </p>
                                    <img
                                      src="image/dummyImg.png"
                                      alt="profile" class="img-fluid"
                                    />
                                  </div>
                                </div>
                              </div>



                            </div>
                    </div>



    <!------------------------------------footer Section------------------------------------>


    <!-
    @endsection
