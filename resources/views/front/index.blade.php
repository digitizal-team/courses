@extends('front.layouts.app')
@section('content')
    <main>
        <section class="mt-3">
            <div class="container-fluid">
                <div class="row d-flex">
                    <div class="col-md-6">
                        <div class="main-image" style="background-image:url('{{ asset('front/assets/images/ab.png') }}');">

                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <h3 class="main-heading">Upskilling teams across Australia</h3>
                        <h4>Nexacu, where knowledge and experience create next level learning.</h4>
                        <p class="first-p">As a Microsoft Gold Partner and Australia’s leading provider of Microsoft end-user
                            training, we
                            consistently deliver high quality, practical, instructor-led courses.
                        </p>
                        <p class="first-p">Our courses are available face-to-face in our classrooms and via remote login.
                            <strong>Remote Training</strong>
                            options will continue to be offered going forward:
                        </p>
                        <ul class="first-ul">
                            <li>Students can choose to attend any session remotely or in-person at our CBD offices.
                            </li>
                            <li>Remote training sessions run from 9am-4pm in the host city.
                            </li>
                            <li>Book a remote course - select "Remote/Online" as your location in Book Now.
                            </li>
                            <li>Book a face-to-face course - choose your city.
                            </li>
                        </ul>
                        <button type="submit" class="course-button">View Courses</button>
                    </div>
                </div>
            </div>
        </section>

        <section class="intro py-5">
            <div class="container">
                <div class="row" style="width: 70%;margin: auto;height: 120px;">
                    <div class="col-md-4">
                        <img class="company-img" src="{{ url('front/assets/images/ab2.png') }}" alt="">
                    </div>
                    <div class="col-md-4">
                        <img class="company-img" src="{{ url('front/assets/images/ab3.png') }}" alt="">
                    </div>
                    <div class="col-md-4">
                        <img class="company-img" src="{{ url('front/assets/images/ab4.png') }}" alt="">
                    </div>
                </div>
            </div>
        </section>


        <section>
            <div class="container-fluid first-center-div ">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6 ">
                        <div class="same-div-1">
                            <p class="same-div-p">Instructor-led Training Solutions</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="same-div-2">
                            <div class="same-div-body">
                                <p class="same-div-p2">In-class</p>
                                <p class="same-div-p3">We offer a wide range of one day Microsoft training courses, open for
                                    public participation at our central CBD sites across Australia. Upskill in-person or via
                                    remote login. Power BI, Office365, SharePoint, PowerApps, Excel, VBA, Project, Python, R
                                    & more… Check our dates and enroll online.</p>
                                <button class="same-div-button" type="submit"><strong>in</strong>class</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="same-div-2">
                            <div class="same-div-body">
                                <p class="same-div-p2">In-class</p>
                                <p class="same-div-p3">We offer a wide range of one day Microsoft training courses, open for
                                    public participation at our central CBD sites across Australia. Upskill in-person or via
                                    remote login. Power BI, Office365, SharePoint, PowerApps, Excel, VBA, Project, Python, R
                                    & more… Check our dates and enroll online.</p>
                                <button class="same-div-button" type="submit"><strong>in</strong>class</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="same-div-2">
                            <div class="same-div-body">
                                <p class="same-div-p2">In-class</p>
                                <p class="same-div-p3">We offer a wide range of one day Microsoft training courses, open for
                                    public participation at our central CBD sites across Australia. Upskill in-person or via
                                    remote login. Power BI, Office365, SharePoint, PowerApps, Excel, VBA, Project, Python, R
                                    & more… Check our dates and enroll online.</p>
                                <button class="same-div-button" type="submit"><strong>in</strong>class</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <p class="pl-5 pt-5 web-name">WHY LIFECOACH ?</p>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-3 mt-2 mb-5">
                        <img class="company-img-2" src="{{ url('front/assets/images/one.png') }}" alt="">
                    </div>
                    <div class="col-md-6 col-lg-3 mt-2 mb-5">
                        <img class="company-img-2" src="{{ url('front/assets/images/two.png') }}" alt="">
                    </div>
                    <div class="col-md-6 col-lg-3 mt-2 mb-5">
                        <img class="company-img-2" src="{{ url('front/assets/images/three.png') }}" alt="">
                    </div>
                    <div class="col-md-6 col-lg-3 mt-2 mb-5">
                        <img class="company-img-2" src="{{ url('front/assets/images/four.png') }}" alt="">
                    </div>
                    <div class="col-md-6 col-lg-3 mt-2 mb-5">
                        <img class="company-img-2" src="{{ url('front/assets/images/five.png') }}" alt="">
                    </div>
                </div>
            </div>
        </section>



        <section class="ftco-section testimony-section bg-secondary">
            <div class="container">
                <div class="row justify-content-center pb-5 mb-3">
                    <div class="col-md-7 heading-section heading-section-white text-center ftco-animate">
                        <h2>Happy Clients &amp; Feedbacks</h2>
                        <span class="subheading">Testimonies</span>
                    </div>
                </div>
                <div class="row ftco-animate">
                    <div class="col-md-12">
                        <div class="carousel-testimony owl-carousel ftco-owl">
                            <div class="item">
                                <div class="testimony-wrap py-4">
                                    <div class="icon d-flex align-items-center justify-content-center"><span
                                            class="fa fa-quote-left"></span></div>
                                    <div class="text">
                                        <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                            Vokalia and Consonantia, there live the blind texts.</p>
                                        <div class="d-flex align-items-center">
                                            <div class="user-img"
                                                style="background-image: url('{{ asset('front/assets/images/person_1.jpg') }}');">
                                            </div>
                                            <div class="pl-3">
                                                <p class="name">Roger Scott</p>
                                                <span class="position">Marketing Manager</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-wrap py-4">
                                    <div class="icon d-flex align-items-center justify-content-center"><span
                                            class="fa fa-quote-left"></span></div>
                                    <div class="text">
                                        <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                            Vokalia and Consonantia, there live the blind texts.</p>
                                        <div class="d-flex align-items-center">
                                            <div class="user-img"
                                                style="background-image: url('{{ asset('front/assets/images/person_2.jpg') }}');">
                                            </div>
                                            <div class="pl-3">
                                                <p class="name">Roger Scott</p>
                                                <span class="position">Marketing Manager</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-wrap py-4">
                                    <div class="icon d-flex align-items-center justify-content-center"><span
                                            class="fa fa-quote-left"></span></div>
                                    <div class="text">
                                        <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                            Vokalia and Consonantia, there live the blind texts.</p>
                                        <div class="d-flex align-items-center">
                                            <div class="user-img"
                                                style="background-image: url('{{ asset('front/assets/images/person_3.jpg') }}');">
                                            </div>
                                            <div class="pl-3">
                                                <p class="name">Roger Scott</p>
                                                <span class="position">Marketing Manager</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-wrap py-4">
                                    <div class="icon d-flex align-items-center justify-content-center"><span
                                            class="fa fa-quote-left"></span></div>
                                    <div class="text">
                                        <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                            Vokalia and Consonantia, there live the blind texts.</p>
                                        <div class="d-flex align-items-center">
                                            <div class="user-img"
                                                style="background-image: url('{{ asset('front/assets/images/person_1.jpg') }}');">
                                            </div>
                                            <div class="pl-3">
                                                <p class="name">Roger Scott</p>
                                                <span class="position">Marketing Manager</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-wrap py-4">
                                    <div class="icon d-flex align-items-center justify-content-center"><span
                                            class="fa fa-quote-left"></span></div>
                                    <div class="text">
                                        <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                            Vokalia and Consonantia, there live the blind texts.</p>
                                        <div class="d-flex align-items-center">
                                            <div class="user-img"
                                                style="background-image: url('{{ asset('front/assets/images/person_2.jpg') }}');">
                                            </div>
                                            <div class="pl-3">
                                                <p class="name">Roger Scott</p>
                                                <span class="position">Marketing Manager</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center pb-5 mb-3">
                    <div class="col-md-7 heading-section text-center ftco-animate">
                        <h2>Latest news from our blog</h2>
                        <span class="subheading">News &amp; Blog</span>
                    </div>
                </div>
                <div class="row d-flex">
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch">
                            <a href="blog-single.html" class="block-20 rounded"
                                style="background-image: url('{{ asset('front/assets/images/image_1.jpg') }}');">
                            </a>
                            <div class="text mt-3">
                                <div class="meta mb-2">
                                    <div><a href="#">January 30, 2020</a></div>
                                    <div><a href="#">Admin</a></div>
                                    <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a>
                                    </div>
                                </div>
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about
                                        the blind texts</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch">
                            <a href="blog-single.html" class="block-20 rounded"
                                style="background-image:url('{{ asset('front/assets/images/image_2.jpg') }}');">
                            </a>
                            <div class="text mt-3">
                                <div class="meta mb-2">
                                    <div><a href="#">January 30, 2020</a></div>
                                    <div><a href="#">Admin</a></div>
                                    <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a>
                                    </div>
                                </div>
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about
                                        the blind texts</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch">
                            <a href="blog-single.html" class="block-20 rounded"
                                style="background-image: url('{{ asset('front/assets/images/image_3.jpg') }}');">
                            </a>
                            <div class="text mt-3">
                                <div class="meta mb-2">
                                    <div><a href="#">January 30, 2020</a></div>
                                    <div><a href="#">Admin</a></div>
                                    <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a>
                                    </div>
                                </div>
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about
                                        the blind texts</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="ftco-section ftco-no-pb ftco-no-pt">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="bg-secondary w-100 rounded p-4">
                            <div class="row">
                                <div class="col-md-7 d-flex align-items-center">
                                    <h2 class="mb-3 mb-sm-0" style="color:black; font-size: 18px;">Subcribe for our weekly
                                        tips</h2>
                                </div>
                                <div class="col-md-5 d-flex align-items-center">
                                    <form action="#" class="subscribe-form">
                                        <div class="form-group d-flex">
                                            <input type="text" class="form-control" placeholder="Enter email address">
                                            <input type="submit" value="Subscribe" class="submit px-3">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="ftco-section bg-light">
            <div class="container">
                <div class="row justify-content-center pb-5 mb-3">
                    <div class="col-md-7 heading-section text-center ftco-animate">
                        <h2>Life saving packages</h2>
                        <span class="subheading">Price &amp; Plans</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="block-7">
                            <div class="text-center">
                                <span class="price"><sup>$</sup> <span class="number">49</span></span>
                                <span class="excerpt d-block">Single Session</span>

                                <ul class="pricing-text mb-5">
                                    <li><span class="fa fa-check mr-2"></span>1 month dedicated training</li>
                                    <li><span class="fa fa-check mr-2"></span>24/7 in touch on the phone</li>
                                    <li><span class="fa fa-check mr-2"></span>Consultation hours</li>
                                    <li><span class="fa fa-check mr-2"></span>Personal visit</li>
                                    <li><span class="fa fa-check mr-2"></span>meet &amp; greet</li>
                                </ul>

                                <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="block-7">
                            <div class="text-center">
                                <span class="price"><sup>$</sup> <span class="number">79</span></span>
                                <span class="excerpt d-block">Personal Session</span>

                                <ul class="pricing-text mb-5">
                                    <li><span class="fa fa-check mr-2"></span>1 month dedicated training</li>
                                    <li><span class="fa fa-check mr-2"></span>24/7 in touch on the phone</li>
                                    <li><span class="fa fa-check mr-2"></span>Consultation hours</li>
                                    <li><span class="fa fa-check mr-2"></span>Personal visit</li>
                                    <li><span class="fa fa-check mr-2"></span>meet &amp; greet</li>
                                </ul>

                                <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="block-7">
                            <div class="text-center">
                                <span class="price"><sup>$</sup> <span class="number">109</span></span>
                                <span class="excerpt d-block">Single Coaching</span>

                                <ul class="pricing-text mb-5">
                                    <li><span class="fa fa-check mr-2"></span>1 month dedicated training</li>
                                    <li><span class="fa fa-check mr-2"></span>24/7 in touch on the phone</li>
                                    <li><span class="fa fa-check mr-2"></span>Consultation hours</li>
                                    <li><span class="fa fa-check mr-2"></span>Personal visit</li>
                                    <li><span class="fa fa-check mr-2"></span>meet &amp; greet</li>
                                </ul>

                                <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="block-7">
                            <div class="text-center">
                                <span class="price"><sup>$</sup> <span class="number">149</span></span>
                                <span class="excerpt d-block">Life Coaching</span>

                                <ul class="pricing-text mb-5">
                                    <li><span class="fa fa-check mr-2"></span>1 month dedicated training</li>
                                    <li><span class="fa fa-check mr-2"></span>24/7 in touch on the phone</li>
                                    <li><span class="fa fa-check mr-2"></span>Consultation hours</li>
                                    <li><span class="fa fa-check mr-2"></span>Personal visit</li>
                                    <li><span class="fa fa-check mr-2"></span>meet &amp; greet</li>
                                </ul>

                                <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="course">
                <p class="course-p">Our Courses</p>
                <div class="course-child">
                    <div class="row course-row">
                        <div class="col-lg-6 course-col">
                            <div class="course-img-text">
                                <img class="course-img" src="{{ url('front/assets/images/powerbi.png') }}"
                                    alt="">
                                <p class="course-text">Power BI</p>
                            </div>
                            <div class="course-img-text">
                                <img class="course-img" src="{{ url('front/assets/images/powerbi.png') }}"
                                    alt="">
                                <p class="course-text">Power BI</p>
                            </div>
                            <div class="course-img-text">
                                <img class="course-img" src="{{ url('front/assets/images/powerbi.png') }}"
                                    alt="">
                                <p class="course-text">Power BI</p>
                            </div>
                            <div class="course-img-text">
                                <img class="course-img" src="{{ url('front/assets/images/powerbi.png') }}"
                                    alt="">
                                <p class="course-text">Power BI</p>
                            </div>
                        </div>
                        <div class="col-lg-6 course-col">
                            <div class="course-img-text">
                                <img class="course-img" src="{{ url('front/assets/images/powerbi.png') }}"
                                    alt="">
                                <p class="course-text">Power BI</p>
                            </div>
                            <div class="course-img-text">
                                <img class="course-img" src="{{ url('front/assets/images/powerbi.png') }}"
                                    alt="">
                                <p class="course-text">Power BI</p>
                            </div>
                            <div class="course-img-text">
                                <img class="course-img" src="{{ url('front/assets/images/powerbi.png') }}"
                                    alt="">
                                <p class="course-text">Power BI</p>
                            </div>
                            <div class="course-img-text">
                                <img class="course-img" src="{{ url('front/assets/images/powerbi.png') }}"
                                    alt="">
                                <p class="course-text">Power BI</p>
                            </div>
                        </div>
                  
                            <div class="col-lg-6 course-col">
                                <div class="course-img-text">
                                    <img class="course-img" src="{{ url('front/assets/images/powerbi.png') }}"
                                        alt="">
                                    <p class="course-text">Power BI</p>
                                </div>
                                <div class="course-img-text">
                                    <img class="course-img" src="{{ url('front/assets/images/powerbi.png') }}"
                                        alt="">
                                    <p class="course-text">Power BI</p>
                                </div>
                                <div class="course-img-text">
                                    <img class="course-img" src="{{ url('front/assets/images/powerbi.png') }}"
                                        alt="">
                                    <p class="course-text">Power BI</p>
                                </div>
                                <div class="course-img-text">
                                    <img class="course-img" src="{{ url('front/assets/images/powerbi.png') }}"
                                        alt="">
                                    <p class="course-text">Power BI</p>
                                </div>
                            </div>
                            <div class="col-lg-6 course-col">
                                <div class="course-img-text">
                                    <img class="course-img" src="{{ url('front/assets/images/powerbi.png') }}"
                                        alt="">
                                    <p class="course-text">Power BI</p>
                                </div>
                                <div class="course-img-text">
                                    <img class="course-img" src="{{ url('front/assets/images/powerbi.png') }}"
                                        alt="">
                                    <p class="course-text">Power BI</p>
                                </div>
                                <div class="course-img-text">
                                    <img class="course-img" src="{{ url('front/assets/images/powerbi.png') }}"
                                        alt="">
                                    <p class="course-text">Power BI</p>
                                </div>
                                <div class="course-img-text">
                                    <img class="course-img" src="{{ url('front/assets/images/powerbi.png') }}"
                                        alt="">
                                    <p class="course-text">Power BI</p>
                                </div>
                            </div>
                        
                    </div>
                </div>
            </div>


        </section>
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <h6 class="border-bottom pb-2 mb-0">Our Courses</h6>
            <div class="row">
                @foreach ($categories as $item)
                    @if ($item->course !== null)
                        <div class="col-3">
                            <div class="d-flex text-muted pt-3">
                                <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32"
                                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32"
                                    preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#007bff" /><text x="50%"
                                        y="50%" fill="#007bff" dy=".3em">32x32</text>
                                </svg>
                                <p class="pb-3 mb-0 small lh-sm border-bottom">
                                    <a href="{{ route('course.details', $item->id) }}"><strong
                                            class="d-block text-gray-dark">{{ $item->name }}</strong></a>
                                </p>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

            <small class="d-block text-end mt-3">
                <a href="#">All updates</a>
            </small>
        </div>

    </main>
@endsection
