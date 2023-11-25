@extends('frontent.master')
@section('title', 'About Page')
@section('content')
    <div class="container-fluid py-5" id="about">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">About</h1>
                <h1 class="position-absolute text-uppercase text-primary">About Me</h1>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-5 pb-4 pb-lg-0">
                    <img class="img-fluid rounded w-100" src="{{ asset('frontent') }}/img/about.jpg" alt="">
                </div>
                <div class="col-lg-7">
                    <h3 class="mb-4">UI/UX Designer & Web Developer</h3>
                    <p>Tempor eos dolore amet tempor dolor tempor. Dolore ea magna sit amet dolor eirmod. Eos ipsum est
                        tempor dolor. Clita lorem kasd sed ea lorem diam ea lorem eirmod duo sit ipsum. Amet dolor stet
                        lorem diam dolor justo et dolor dolor dolor</p>
                    <div class="row mb-3">
                        <div class="col-sm-6 py-2">
                            <h6>Name: <span class="text-secondary">Kate Winslet</span></h6>
                        </div>
                        <div class="col-sm-6 py-2">
                            <h6>Birthday: <span class="text-secondary">1 April 1990</span></h6>
                        </div>
                        <div class="col-sm-6 py-2">
                            <h6>Degree: <span class="text-secondary">Master</span></h6>
                        </div>
                        <div class="col-sm-6 py-2">
                            <h6>Experience: <span class="text-secondary">10 Years</span></h6>
                        </div>
                        <div class="col-sm-6 py-2">
                            <h6>Phone: <span class="text-secondary">+012 345 6789</span></h6>
                        </div>
                        <div class="col-sm-6 py-2">
                            <h6>Email: <span class="text-secondary">info@example.com</span></h6>
                        </div>
                        <div class="col-sm-6 py-2">
                            <h6>Address: <span class="text-secondary">123 Street, New York, USA</span></h6>
                        </div>
                        <div class="col-sm-6 py-2">
                            <h6>Freelance: <span class="text-secondary">Available</span></h6>
                        </div>
                    </div>
                    <a href="" class="btn blue btn-outline-primary mr-4">Hire Me</a>
                    <a href="" class="btn btn-outline-primary">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Skill Start -->
    <div class="container-fluid py-5" id="skill">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Skills</h1>
                <h1 class="position-absolute text-uppercase text-primary">My Skills</h1>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">HTML</h6>
                            <h6 class="font-weight-bold">95%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="95" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">CSS</h6>
                            <h6 class="font-weight-bold">85%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="85" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">PHP</h6>
                            <h6 class="font-weight-bold">90%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">Javascript</h6>
                            <h6 class="font-weight-bold">90%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">Angular JS</h6>
                            <h6 class="font-weight-bold">95%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="95" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">Wordpress</h6>
                            <h6 class="font-weight-bold">85%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="85" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Skill End -->




    <!-- Qualification Start -->
    <div class="container-fluid py-5" id="qualification">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Quality</h1>
                <h1 class="position-absolute text-uppercase text-primary">Education & Expericence</h1>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h3 class="mb-4">My Education</h3>
                    <div class="border-left border-primary pt-2 pl-4 ml-2">
                        <div class="position-relative ex-me mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute"
                                style="top: 2px; left: -35px; font-size: 22px;"></i>
                            <h5 class="font-weight-bold mb-1">Bachelor of Science</h5>
                            <p class="mb-2"><strong>Cambridge University</strong> | <small>2005 - 2009</small></p>
                            <p>Tempor eos dolore amet tempor dolor tempor. Dolore ea magna sit amet dolor eirmod. Eos ipsum
                                est tempor dolor. Clita lorem kasd sed ea lorem diam ea lorem eirmod duo sit ipsum stet
                                lorem diam</p>
                        </div>
                        <div class="position-relative ex-me mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute"
                                style="top: 2px; left: -35px;  font-size: 22px;"></i>
                            <h5 class="font-weight-bold mb-1">Master In CSE</h5>
                            <p class="mb-2"><strong>Cambridge University</strong> | <small>2009 - 2011</small></p>
                            <p>Tempor eos dolore amet tempor dolor tempor. Dolore ea magna sit amet dolor eirmod. Eos ipsum
                                est tempor dolor. Clita lorem kasd sed ea lorem diam ea lorem eirmod duo sit ipsum stet
                                lorem diam</p>
                        </div>
                        <div class="position-relative ex-me mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute"
                                style="top: 2px; left: -35px;  font-size: 22px;"></i>
                            <h5 class="font-weight-bold mb-1">IIT Kharagpur</h5>
                            <p class="mb-2"><strong>Cambridge University</strong> | <small>2011 - 2015</small></p>
                            <p>Tempor eos dolore amet tempor dolor tempor. Dolore ea magna sit amet dolor eirmod. Eos ipsum
                                est tempor dolor. Clita lorem kasd sed ea lorem diam ea lorem eirmod duo sit ipsum stet
                                lorem diam</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h3 class="mb-4">My Expericence</h3>
                    <div class="border-left border-primary pt-2 pl-4 ml-2">
                        <div class="position-relative ex-me mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute"
                                style="top: 2px;left: -35px;  font-size: 22px;"></i>
                            <h5 class="font-weight-bold mb-1">Web Designer</h5>
                            <p class="mb-2"><strong>Soft Company</strong> | <small> Excellent</small></p>
                            <p>Tempor eos dolore amet tempor dolor tempor. Dolore ea magna sit amet dolor eirmod. Eos ipsum
                                est tempor dolor. Clita lorem kasd sed ea lorem diam ea lorem eirmod duo sit ipsum stet
                                lorem diam</p>
                        </div>
                        <div class="position-relative ex-me mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute"
                                style="top: 2px;left: -35px;  font-size: 22px;"></i>
                            <h5 class="font-weight-bold mb-1">Artificial Intelligence</h5>
                            <p class="mb-2"><strong>Soft Company</strong> | <small> Good</small></p>
                            <p>Tempor eos dolore amet tempor dolor tempor. Dolore ea magna sit amet dolor eirmod. Eos ipsum
                                est tempor dolor. Clita lorem kasd sed ea lorem diam ea lorem eirmod duo sit ipsum stet
                                lorem diam</p>
                        </div>
                        <div class="position-relative ex-me mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute"
                                style="top: 2px;left: -35px;  font-size: 22px;"></i>
                            <h5 class="font-weight-bold mb-1">Web Development</h5>
                            <p class="mb-2"><strong>Soft Company</strong> | <small> Excellent</small></p>
                            <p>Tempor eos dolore amet tempor dolor tempor. Dolore ea magna sit amet dolor eirmod. Eos ipsum
                                est tempor dolor. Clita lorem kasd sed ea lorem diam ea lorem eirmod duo sit ipsum stet
                                lorem diam</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Qualification End -->
@endsection
