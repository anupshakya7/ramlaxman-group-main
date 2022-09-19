@extends('frontend.layouts.main')

@section('main-container');
<!-- Header Start -->
<section id="home" class="jumbotron jumbotron-fluid position-relative overlay-bottom" style="margin-bottom: 90px;">
    <div class="container text-center my-5 py-5">
        <h1 class="text-white mt-4 mb-4">
            {{-- Work <span class="text-warning text-decoration-underline">
                efficiently
            </span> and
            <span class="text-warning text-decoration-underline">creatively</span> --}}
            @php
            echo($header->title)
            @endphp
        </h1>
        <h4 class="text-white mb-5">
            {{-- Ramlaxman Group provides flexible job options as well as the chance to
            strengthen your community while advancing the world economy. --}}
            {{-- {{ $header[0]->description }} --}}
            @php
            echo($header->description)
            @endphp
        </h4>

        <div class="mx-auto mb-5" style="width: 100%; max-width: 600px; display: inline;">

            <button type="button" class="btn btn-light mx-auto rounded-pill py-2 px-4 video-btn" data-bs-toggle="modal"
                data-src="{{$header->url}}" data-bs-target="#myModal">
                <i class="fa fa-film"></i>
                Watch
                Video
            </button>
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">


                        <div class="modal-body">

                            <!-- 16:9 aspect ratio -->
                            <div class="ratio">
                                <iframe class="embed-responsive-item w-100 " style="height: 550px;" src="" id="video"
                                    allowscriptaccess="always" allow="autoplay"></iframe>
                            </div>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal"
                                aria-label="Close">Close</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#aboutUs" class="btn btn-warning mx-auto rounded-pill py-2 px-4"> Learn More <i
                    class="fa fa-arrow-right"></i></a>
        </div>
    </div>
</section>
<!-- Header End -->


<!-- About Start -->
<section id="aboutUs" class="container-fluid py-5">
    <div class="container py-5">

        <div class="row">
            <div class="col-lg-7 mb-3">
                <div class="section-title position-relative mb-4">
                    <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">About Us</h6>
                    <h1 class="display-4">
                        @php
                        echo($about->title)
                        @endphp
                    </h1>
                </div>
                <p>
                    @php
                    echo($about->description)
                    @endphp
                </p>
                <div class="row pt-3 mx-0">
                    <div class="col-3 px-0">
                        <div class="bg-danger text-center p-4">
                            <h1 class="text-white" data-toggle="counter-up">
                                @php
                                echo($about->satisfied_clients)
                                @endphp
                            </h1>
                            <h6 class="text-uppercase text-white">Satisfied<span class="d-block">Clients</span>
                            </h6>
                        </div>
                    </div>
                    <div class="col-3 px-0">
                        <div class="bg-success text-center p-4">
                            <h1 class="text-white" data-toggle="counter-up">
                                @php
                                echo($about->successful_projects)
                                @endphp
                            </h1>
                            <h6 class="text-uppercase text-white">Successful<span class="d-block">Projects</span>
                            </h6>
                        </div>
                    </div>
                    <div class="col-3 px-0">
                        <div class="bg-warning
                             text-center p-4">
                            <h1 class="text-white" data-toggle="counter-up">
                                @php
                                echo($about->years_of_experience)
                                @endphp
                            </h1>
                            <h6 class="text-uppercase text-white">Years of<span class="d-block">Experience</span>
                            </h6>
                        </div>
                    </div>
                    <div class="col-3 px-0">
                        <div class="bg-primary text-center p-4">
                            <h1 class="text-white" data-toggle="counter-up">
                                @php
                                echo($about->present_experts)
                                @endphp
                            </h1>
                            <h6 class="text-uppercase text-white">Present<span class="d-block">Experts</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="@php
                        echo($about->image)
                    @endphp" style="object-fit: cover;">
                </div>
            </div>

        </div>
    </div>
</section>
<!-- About End -->


<!-- Feature Start -->
<div class="container-fluid bg-image" style="margin: 90px 0;">
    <div class="container">
        <div class="row">

            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="{{$benefit_title->icon}}"
                        style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-7 my-5 pt-5 pb-lg-5">
                <div class="section-title position-relative mb-4">
                    <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">
                        {{$benefit_title->title}}
                    </h6>
                    <h1 class="display-4">{{$benefit_title->description}}</h1>
                </div>
                @foreach ($benefit as $working_benefit)
                <div class="d-flex mb-3">
                    <div class="{{$working_benefit->background_color}}">
                        @php
                        echo($working_benefit->icon)
                        @endphp
                    </div>
                    <div class="mt-n1">
                        <h4>{{$working_benefit->title}}</h4>
                        <p>{{$working_benefit->description}}</p>
                    </div>
                </div>
                @endforeach
                {{-- <div class="d-flex mb-3">
                    <div class="btn-icon rounded-pill bg-primary mr-4">
                        <i class="fa fa-2x fa-credit-card text-white"></i>
                    </div>
                    <div class="mt-n1">
                        <h4>Timely Payment</h4>
                        <p>Our employees receive monthly direct deposit payments.</p>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="btn-icon rounded-pill bg-danger mr-4">
                        <i class="fa fa-2x fa-fire text-white"></i>
                    </div>
                    <div class="mt-n1">
                        <h4>Be The Change</h4>
                        <p class="m-0">Develop your own leadership abilities so that you may better your community
                            and the world economy.</p>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</div>
<!-- Feature Start -->


<!-- Team Start -->
<section id="team" class="container-fluid py-5">
    <div class="container py-5">
        <div class="section-title text-center position-relative mb-5">
            <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Our Team</h6>
            <h1 class="display-4">Meet Our Team</h1>
        </div>
        <div class="owl-carousel team-carousel position-relative" style="padding: 0 30px;">
            @foreach ($ourTeam as $member)
            <div class="team-item">
                <img class="img-fluid w-100" src="{{$member->image}}" alt="">
                <div class="bg-light text-center p-4">
                    <h5 class="mb-3">{{$member->emp_name}}</h5>
                    <p class="mb-2">{{$member->role}}</p>
                    <div class="d-flex justify-content-center">
                        <a class="mx-1 p-1" href="{{$member->twitter}}"><i class="fab fa-twitter"></i></a>
                        <a class="mx-1 p-1" href="{{$member->facebook}}"><i class="fab fa-facebook-f"></i></a>
                        <a class="mx-1 p-1" href="{{$member->linkIn}}"><i class="fab fa-linkedin-in"></i></a>
                        <a class="mx-1 p-1" href="{{$member->instagram}}"><i class="fab fa-instagram"></i></a>
                        <a class="mx-1 p-1" href="{{$member->youtube}}"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Team End -->

<!-- Testimonial Start -->
<div class="container-fluid bg-image py-5" style="margin: 90px 0;">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-5 mb-5 mb-lg-0">
                <div class="section-title position-relative mb-4">
                    <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Testimonial</h6>
                    <h1 class="display-4">What Say Our Members</h1>
                </div>
                <p class="m-0">Our goal is to make difficult issues solvable for anybody, everywhere. Customers pick
                    us because, with the help of best engineers and reducing product engineering techniques, we
                    facilitate innovation and better adaptation.</p>
            </div>
            <div class="col-lg-7">
                <div class="owl-carousel testimonial-carousel">
                    <div class="bg-white p-5">
                        <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                        <p>
                            Hari leads Ramlaxman product R&D and the AI team. He is a startup and product knowledge
                            powerhouse. He currently leads Caboom, a Ramlaxman product that accelerates
                            recommendation engine adoption for enterprises and startups.
                        </p>
                        <div class="d-flex flex-shrink-0 align-items-center mt-4">
                            <img class="img-fluid mr-4" src="{{url('frontend/img/testimonial-2.jpg')}}" alt="">
                            <div>
                                <h5>Employees Name</h5>
                                <span>AI Developer</span>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-5">
                        <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                        <p>
                            Sita leads EdTech initiatives at Ramlaxman and its sister company, Eduphoric. Pam has
                            led teams to deliver EdTech products with Agilix, ACT, The College Board, NSF, Michael
                            and Susan Dell Foundation, and Bill and Melinda Gates Foundation.
                        </p>
                        <div class="d-flex flex-shrink-0 align-items-center mt-4">
                            <img class="img-fluid mr-4" src="{{url('frontend/img/testimonial-1.jpg')}}" alt="">
                            <div>
                                <h5>Employees Name</h5>
                                <span>Web Developer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial Start -->

<!-- Services Start -->
<section id="services" class="container-fluid px-0 py-5">
    <div class="row mx-0 justify-content-center pt-5">
        <div class="col-lg-6">
            <div class="section-title text-center position-relative mb-4">
                <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Our Services</h6>
                <h1 class="display-4">Checkout Services We Offer</h1>
            </div>
        </div>
    </div>
    <div class="owl-carousel courses-carousel">
        <div class="courses-item position-relative">
            <img class="img-fluid" src="{{url('frontend/img/courses-1.jpg')}}" alt="">
            <div class="courses-text">
                <h4 class="text-center text-white px-3">GPS Vehicle Tracking System</h4>
                {{-- <div class="border-top w-100 mt-3">
                    <div class="d-flex justify-content-between p-4">
                        <span class="text-white"><i class="fa fa-user mr-2"></i>Jhon Doe</span>
                        <span class="text-white"><i class="fa fa-star mr-2"></i>4.5 <small>(250)</small></span>
                    </div>
                </div> --}}
                <div class="w-100 bg-white text-center p-4">
                    <a class="btn btn-primary" href="details">Service Detail</a>
                </div>
            </div>
        </div>
        <div class="courses-item position-relative">
            <img class="img-fluid" src="{{url('frontend/img/courses-2.jpg')}}" alt="">
            <div class="courses-text">
                <h4 class="text-center text-white px-3">Web Design & Development</h4>
                <div class="border-top w-100 mt-3">
                    <div class="d-flex justify-content-between p-4">
                        <span class="text-white"><i class="fa fa-user mr-2"></i>Jhon Doe</span>
                        <span class="text-white"><i class="fa fa-star mr-2"></i>4.5 <small>(250)</small></span>
                    </div>
                </div>
                <div class="w-100 bg-white text-center p-4">
                    <a class="btn btn-primary" href="details">Service Detail</a>
                </div>
            </div>
        </div>
        <div class="courses-item position-relative">
            <img class="img-fluid" src="{{url('frontend/img/courses-3.jpg')}}" alt="">
            <div class="courses-text">
                <h4 class="text-center text-white px-3">Mobile Application Development</h4>
                <div class="border-top w-100 mt-3">
                    <div class="d-flex justify-content-between p-4">
                        <span class="text-white"><i class="fa fa-user mr-2"></i>Jhon Doe</span>
                        <span class="text-white"><i class="fa fa-star mr-2"></i>4.5 <small>(250)</small></span>
                    </div>
                </div>
                <div class="w-100 bg-white text-center p-4">
                    <a class="btn btn-primary" href="details">Service Detail</a>
                </div>
            </div>
        </div>
        <div class="courses-item position-relative">
            <img class="img-fluid" src="{{url('frontend/img/courses-4.jpg')}}" alt="">
            <div class="courses-text">
                <h4 class="text-center text-white px-3">Graphics & Creative Designing</h4>
                <div class="border-top w-100 mt-3">
                    <div class="d-flex justify-content-between p-4">
                        <span class="text-white"><i class="fa fa-user mr-2"></i>Jhon Doe</span>
                        <span class="text-white"><i class="fa fa-star mr-2"></i>4.5 <small>(250)</small></span>
                    </div>
                </div>
                <div class="w-100 bg-white text-center p-4">
                    <a class="btn btn-primary" href="details">Service Detail</a>
                </div>
            </div>
        </div>
        <div class="courses-item position-relative">
            <img class="img-fluid" src="{{url('frontend/img/courses-5.jpg')}}" alt="">
            <div class="courses-text">
                <h4 class="text-center text-white px-3">Logo Design</h4>
                <div class="border-top w-100 mt-3">
                    <div class="d-flex justify-content-between p-4">
                        <span class="text-white"><i class="fa fa-user mr-2"></i>Jhon Doe</span>
                        <span class="text-white"><i class="fa fa-star mr-2"></i>4.5 <small>(250)</small></span>
                    </div>
                </div>
                <div class="w-100 bg-white text-center p-4">
                    <a class="btn btn-primary" href="details">Service Detail</a>
                </div>
            </div>
        </div>
        <div class="courses-item position-relative">
            <img class="img-fluid" src="{{url('frontend/img/courses-6.jpg')}}" alt="">
            <div class="courses-text">
                <h4 class="text-center text-white px-3">Id & vCard Design</h4>
                <div class="border-top w-100 mt-3">
                    <div class="d-flex justify-content-between p-4">
                        <span class="text-white"><i class="fa fa-user mr-2"></i>Jhon Doe</span>
                        <span class="text-white"><i class="fa fa-star mr-2"></i>4.5 <small>(250)</small></span>
                    </div>
                </div>
                <div class="w-100 bg-white text-center p-4">
                    <a class="btn btn-primary" href="details">Service Detail</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services End -->

<!-- Customer Start -->
<section id="customer" class="container-fluid py-5">
    <div class="py-5">
        <div class="section-title text-center position-relative mb-5">
            <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Our Customer</h6>
            <h1 class="display-4">Explore Our Customers</h1>
        </div>
        <div class="owl-carousel customer-carousel position-relative" style="padding: 0 30px;">
            @foreach ($ourCustomer as $customer)
            <div class="customer-item card">
                <img class="img-fluid w-100" style="height: 235px !important;" src="{{$customer->profile}}" alt="">
                <div class="bg-white text-center p-4">
                    <h5 class="mb-3">{{$customer->customer_name}}</h5>
                    <p class="mb-2">{{$customer->project_name}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Team End -->


<!-- Contact Start -->
<section id="contact" class="container-fluid py-5">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-5 mb-5 mb-lg-0">
                <div class="bg-light d-flex flex-column justify-content-center px-5" style="height: 450px;">
                    <div class="d-flex align-items-center mb-5">
                        <div class="btn-icon rounded-pill bg-primary mr-4">
                            <i class="fa fa-2x fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="mt-n1">
                            <h4>Our Location</h4>
                            <p class="m-0">Neel Saraswati Marga, Lazimpat, Kathmandu</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-5">
                        <div class="btn-icon rounded-pill bg-secondary mr-4">
                            <i class="fa fa-2x fa-phone-alt text-white"></i>
                        </div>
                        <div class="mt-n1">
                            <h4>Call Us</h4>
                            <p class="m-0">014416900</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="btn-icon rounded-pill bg-warning mr-4">
                            <i class="fa fa-2x fa-envelope text-white"></i>
                        </div>
                        <div class="mt-n1">
                            <h4>Email Us</h4>
                            <p class="m-0">info@ramlaxmangroup.com</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="section-title position-relative mb-4">
                    <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Need Help?</h6>
                    <h1 class="display-4">Send Us A Message</h1>
                </div>
                <div class="contact-form">
                    <form>
                        <div class="row">
                            <div class="col-6 form-group">
                                <input type="text" class="form-control border-top-0 border-right-0 border-left-0 p-0"
                                    placeholder="Your Name" required="required">
                            </div>
                            <div class="col-6 form-group">
                                <input type="email" class="form-control border-top-0 border-right-0 border-left-0 p-0"
                                    placeholder="Your Email" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 p-0"
                                placeholder="Subject" required="required">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control border-top-0 border-right-0 border-left-0 p-0" rows="5"
                                placeholder="Message" required="required"></textarea>
                        </div>
                        <div>
                            <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">Send
                                Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact End -->


@endsection