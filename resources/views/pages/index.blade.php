
@extends('layouts.app_user')
@section('content')
    <!-- Video Modal Start -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>        
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">


                        @if (App::getLocale() == 'en')
                    <iframe width="560" height="315" src="{{asset('/assets/en.mp4')}}" frameborder="0" allowfullscreen></iframe>
                    @else
                    <iframe width="560" height="315" src="{{asset('/assets/ar.mp4')}}" frameborder="0" allowfullscreen></iframe>
                    @endif


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- Header Start -->
    <div class="container-fluid bg-primary d-flex align-items-center mb-5 py-5" id="home" style="min-height: 80vh;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 px-5 pl-lg-0 pb-5 pb-lg-0">
                    <img class="img-fluid w-100 rounded-circle shadow-sm" style="width:60%" src="{{asset('/assets/img/personal.jpg')}}" alt="">
                </div>
                <div class="col-lg-7 text-center text-lg">
                    <h3 class="text-white font-weight-normal mb-3">{{trans("main.I'm")}}</h3>
                    <h1 class="display-3 text-uppercase text-primary mb-2" style="-webkit-text-stroke: 2px #ffffff;">{{trans('main.Mohammed Abdullah')}} </h1>
                    <h1 class="typed-text-output d-inline font-weight-lighter text-white"></h1>
                    <div class="typed-text d-none"> {{trans('main.Web Developer')}}, {{trans('main.Full stack Developer')}}</div>
                    <div class="d-flex align-items-center justify-content-center justify-content-lg-start pt-5">
                        <a target="_blank" href="{{asset('/assets/doc/cv.pdf')}}" class="btn btn-outline-light mr-5">{{trans('main.Download CV')}}</a>
                        <button type="button" class="btn-play" data-toggle="modal"
                            data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
                            <span></span>
                        </button>
                        <h5 class="font-weight-normal text-white m-0 ml-4 d-none d-sm-block">{{trans('main.Play Video')}}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <div class="container-fluid py-5" id="about">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">{{trans('main.About')}}</h1>
                <h1 class="position-absolute text-uppercase text-primary">{{trans('main.About Me')}}</h1>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-5 pb-4 pb-lg-0">
                    <img class="img-fluid rounded w-100" src="{{asset('/assets/img/personal1.jpg')}}" alt="">
                </div>
                <div class="col-lg-7">
                    <h3 class="mb-4">{{trans('main.UI/UX Designer & Web Developer')}}</h3>
                    <p>{{trans('main.I am Muhammad Abdullah, a web developer, I graduated from the Faculty of Computer Science and Information Technology, Omdurman Islamic University, and now I work as a programmer at EtooPlay for Information Technology.')}}</p>
                    <div class="row mb-3">
                        <div class="col-sm-6 py-2"><h6>{{trans('main.Name')}}: <span class="text-secondary">{{trans('main.Mohammed Abdullah Mohammed')}}</span></h6></div>
                        <div class="col-sm-6 py-2"><h6>{{trans('main.Birthday')}}: <span class="text-secondary">{{trans('main.11 May 1998')}}</span></h6></div>
                        <div class="col-sm-6 py-2"><h6>{{trans('main.Degree')}}: <span class="text-secondary">{{trans('main.Bachelor\'s')}}</span></h6></div>
                        <div class="col-sm-6 py-2"><h6>{{trans('main.Experience')}}: <span class="text-secondary">{{trans('main.2 Years')}}</span></h6></div>
                        <div class="col-sm-6 py-2"><h6>{{trans('main.Phone')}}: <span class="text-secondary">{{trans('main.+249 9199 77 513')}}</span></h6></div>
                        <div class="col-sm-6 py-2"><h6>{{trans('main.Email')}}: <span class="text-secondary">{{trans('main.mohammed10257883@gmail.com')}}</span></h6></div>
                        <div class="col-sm-6 py-2"><h6>{{trans('main.Address')}}: <span class="text-secondary">{{trans('main.shanaqiti Street, Omdurman , Khartoum')}}</span></h6></div>
                        <div class="col-sm-6 py-2"><h6>{{trans('main.Freelance')}}: <span class="text-secondary">{{trans('main.Available')}}</span></h6></div>
                    </div>
                    <a href="" class="btn btn-outline-primary mr-4">{{trans('main.Hire Me')}}</a>
                    <a href="" class="btn btn-outline-primary">{{trans('main.Learn More')}}</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Qualification Start -->
    <div class="container-fluid py-5" id="qualification">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">{{trans('main.Quality')}}</h1>
                <h1 class="position-absolute text-uppercase text-primary">{{trans('main.Education')}} & {{trans('main.Expericence')}}</h1>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h3 class="mb-4">{{trans('main.My Education')}}</h3>
                    <div class="border-left border-primary pt-2 pl-4 ml-2">
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1">{{trans('main.Bachelor\'s In IS')}}</h5>
                            <p class="mb-2"><strong> {{trans('main.Omdurman Islamic University')}}</strong> | <small>2015 - 2021</small></p>
                            <p>{{trans('main.I studied at Omdurman Islamic University, Faculty of Computer Science and Information Technology, Department of Information Systems, from 2015-2021, and received my Bachelor’s degree from it with a grade of 78.77, very good, honors')}}</p>
                        </div>
                       
                    </div>
                </div>
                <div class="col-lg-6">
                    <h3 class="mb-4">{{trans('main.My Expericence')}}</h3>
                    <div class="border-left border-primary pt-2 pl-4 ml-2">

                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1">{{trans('main.Web Developer')}}</h5>
                            <p class="mb-2"><strong>{{trans('main.Freelancer')}}</strong> | <small>2020 - 2022</small></p>
                            <p>{{trans('main.I worked as a freelancer in programming and web design')}} </p>
                        </div>
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1">{{trans('main.Web Developer')}}</h5>
                            <p class="mb-2"><strong>{{trans('main.EtooPlay Company')}}</strong> | <small>2022 - Now</small></p>
                            <p>{{trans('main.I am working now at EtooPlay Company for web development')}} </p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Qualification End -->


    <!-- Skill Start -->
    <div class="container-fluid py-5" id="skill">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">{{trans('main.Skills')}}</h1>
                <h1 class="position-absolute text-uppercase text-primary">{{trans('main.My Skills')}}</h1>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">HTML</h6>
                            <h6 class="font-weight-bold">95%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">CSS</h6>
                            <h6 class="font-weight-bold">85%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">PHP</h6>
                            <h6 class="font-weight-bold">90%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">laravel</h6>
                            <h6 class="font-weight-bold">90%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold"> Javascript</h6>
                            <h6 class="font-weight-bold">70%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">jquery</h6>
                            <h6 class="font-weight-bold">80%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Skill End -->


    <!-- Services Start -->
    <div class="container-fluid pt-5" id="service">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">{{trans('main.Services')}}</h1>
                <h1 class="position-absolute text-uppercase text-primary">{{trans('main.My Services')}}</h1>
            </div>
            <div class="row pb-3">
                <div class="col-lg-4 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <i class="fa fa-2x fa-laptop service-icon bg-primary text-white mr-3"></i>
                        <h4 class="font-weight-bold m-0">{{trans('main.Web Design')}}</h4>
                    </div>
                    <p>Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem lorem lorem est amet labore eirmod erat clita</p>
                    <a class="border-bottom border-primary text-decoration-none" href="">{{trans('main.Read More')}}</a>
                </div>
                <div class="col-lg-4 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <i class="fa fa-2x fa-laptop-code service-icon bg-primary text-white mr-3"></i>
                        <h4 class="font-weight-bold m-0">{{trans('main.Web Development')}}</h4>
                    </div>
                    <p>Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem lorem lorem est amet labore eirmod erat clita</p>
                    <a class="border-bottom border-primary text-decoration-none" href="">{{trans('main.Read More')}}</a>
                </div>
                <div class="col-lg-4 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <i class="fab fa-2x fa-android service-icon bg-primary text-white mr-3"></i>
                        <h4 class="font-weight-bold m-0">{{trans('main.Apps Design')}}</h4>
                    </div>
                    <p>Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem lorem lorem est amet labore eirmod erat clita</p>
                    <a class="border-bottom border-primary text-decoration-none" href="">{{trans('main.Read More')}}</a>
                </div>
                <div class="col-lg-4 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <i class="fab fa-2x fa-apple service-icon bg-primary text-white mr-3"></i>
                        <h4 class="font-weight-bold m-0">{{trans('main.Apps Development')}}</h4>
                    </div>
                    <p>Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem lorem lorem est amet labore eirmod erat clita</p>
                    <a class="border-bottom border-primary text-decoration-none" href="">{{trans('main.Read More')}}</a>
                </div>
                <div class="col-lg-4 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <i class="fa fa-2x fa-search service-icon bg-primary text-white mr-3"></i>
                        <h4 class="font-weight-bold m-0">{{trans('main.SEO')}}</h4>
                    </div>
                    <p>Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem lorem lorem est amet labore eirmod erat clita</p>
                    <a class="border-bottom border-primary text-decoration-none" href="">{{trans('main.Read More')}}</a>
                </div>
                <div class="col-lg-4 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <i class="fa fa-2x fa-edit service-icon bg-primary text-white mr-3"></i>
                        <h4 class="font-weight-bold m-0">{{trans('main.Content Creating')}}</h4>
                    </div>
                    <p>Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem lorem lorem est amet labore eirmod erat clita</p>
                    <a class="border-bottom border-primary text-decoration-none" href="">{{trans('main.Read More')}}</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Portfolio Start -->
    <div class="container-fluid pt-5 pb-3" id="portfolio">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">{{trans('main.Gallery')}}</h1>
                <h1 class="position-absolute text-uppercase text-primary">{{trans('main.My Portfolio')}}</h1>
            </div>
            <div class="row">
                <div class="col-12 text-center mb-2">
                    <ul class="list-inline mb-4" id="portfolio-flters">
                        <li class="btn btn-sm btn-outline-primary m-1 active"  data-filter="*">{{trans('main.All')}}</li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".first">{{trans('main.Design')}}</li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".second">{{trans('main.Development')}}</li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".third">{{trans('main.Marketing')}}</li>
                    </ul>
                </div>
            </div>
            <div class="row portfolio-container">
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid rounded w-100" src="{{asset('/assets/img/portfolio-1.jpg')}}" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="img/portfolio-1.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid rounded w-100" src="{{asset('/assets/img/portfolio-2.jpg')}}" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="img/portfolio-2.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item third">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid rounded w-100" src="{{asset('/assets/img/portfolio-3.jpg')}}" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="img/portfolio-3.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid rounded w-100" src="{{asset('/assets/img/portfolio-4.jpg')}}" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="img/portfolio-4.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid rounded w-100" src="{{asset('/assets/img/portfolio-5.jpg')}}" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="img/portfolio-5.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item third">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid rounded w-100" src="{{asset('/assets/img/portfolio-6.jpg')}}" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="img/portfolio-6.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5" id="testimonial" style="direction: ltr">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">{{trans('main.Review')}}</h1>
                <h1 class="position-absolute text-uppercase text-primary">{{trans('main.Clients Say')}}</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-light mb-4">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum elitr dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet accusam amet eirmod eos, labore diam clita</h4>
                            <img class="img-fluid rounded-circle mx-auto mb-3" src="{{asset('/assets/img/testimonial-1.jpg')}}" style="width: 80px; height: 80px;">
                            <h5 class="font-weight-bold m-0">Client Name</h5>
                            <span>Profession</span>
                        </div>
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-light mb-4">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum elitr dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet accusam amet eirmod eos, labore diam clita</h4>
                            <img class="img-fluid rounded-circle mx-auto mb-3" src="{{asset('/assets/img/testimonial-2.jpg')}}"  style="width: 80px; height: 80px;">
                            <h5 class="font-weight-bold m-0">Client Name</h5>
                            <span>Profession</span>
                        </div>
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-light mb-4">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum elitr dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet accusam amet eirmod eos, labore diam clita</h4>
                            <img class="img-fluid rounded-circle mx-auto mb-3" src="{{asset('/assets/img/testimonial-3.jpg')}}"  style="width: 80px; height: 80px;">
                            <h5 class="font-weight-bold m-0">Client Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <div class="container-fluid pt-5" id="blog">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">{{trans('main.Blog')}}</h1>
                <h1 class="position-absolute text-uppercase text-primary">{{trans('main.Latest Blog')}}</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-5">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded w-100" src="{{asset('/assets/img/blog-1.jpg')}}" alt="">
                        <div class="blog-date">
                            <h4 class="font-weight-bold mb-n1">01</h4>
                            <small class="text-white text-uppercase">Jan</small>
                        </div>
                    </div>
                    <h5 class="font-weight-medium mb-4">Rebum lorem no eos ut ipsum diam tempor sed rebum elitr ipsum</h5>
                    <a class="btn btn-sm btn-outline-primary py-2" href="">{{trans('main.Read More')}}</a>
                </div>
                <div class="col-lg-4 mb-5">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded w-100" src="{{asset('/assets/img/blog-2.jpg')}}" alt="">
                        <div class="blog-date">
                            <h4 class="font-weight-bold mb-n1">01</h4>
                            <small class="text-white text-uppercase">Jan</small>
                        </div>
                    </div>
                    <h5 class="font-weight-medium mb-4">Rebum lorem no eos ut ipsum diam tempor sed rebum elitr ipsum</h5>
                    <a class="btn btn-sm btn-outline-primary py-2" href="">{{trans('main.Read More')}}</a>
                </div>
                <div class="col-lg-4 mb-5">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded w-100" src="{{asset('/assets/img/blog-3.jpg')}}" alt="">
                        <div class="blog-date">
                            <h4 class="font-weight-bold mb-n1">01</h4>
                            <small class="text-white text-uppercase">Jan</small>
                        </div>
                    </div>
                    <h5 class="font-weight-medium mb-4">Rebum lorem no eos ut ipsum diam tempor sed rebum elitr ipsum</h5>
                    <a class="btn btn-sm btn-outline-primary py-2" href="">{{trans('main.Read More')}}</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5" id="contact">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">{{trans('main.Contact')}}</h1>
                <h1 class="position-absolute text-uppercase text-primary">{{trans('main.Contact Me')}}</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form text-center">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate">
                            <div class="form-row">
                                <div class="control-group col-sm-6">
                                    <input type="text" class="form-control p-4" id="name" placeholder="{{trans('main.Your Name')}}"
                                        required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group col-sm-6">
                                    <input type="email" class="form-control p-4" id="email" placeholder="{{trans('main.Your Email')}}"
                                        required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control p-4" id="subject" placeholder="{{trans('main.Subject')}}"
                                    required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control py-3 px-4" rows="5" id="message" placeholder="{{trans('main.Message')}}"
                                    required="required"
                                    data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-outline-primary" type="submit" id="sendMessageButton">
                                    {{trans('main.Send Message')}}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection