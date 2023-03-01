@extends('front.layouts.app')
@section('content')
    <main>
         <p class="pl-5 pt-5 web-name">ABOUT US</p>
        <section class="mt-3"  >
            <div class="container-fluid">
                <div class="row d-flex">
                    <div class="col-md-6">
                        <div class="main-image" style="background-image:url('{{ asset('front/assets/images/ab.png') }}');">

                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <h3 class="main-heading">Creating next level learning </h3>
                        <h4 class="mt-4">discover IT. advance IT. </h4>
                        <p class="first-p mt-4">Since 2013, we have been delivering high quality, practical training in
                            Microsoft Applications to skilled end users across Australia and New Zealand. Whether training
                            is delivered at oursite, yoursite or online you get:

                        </p>
                        <ul class="first-ul mt-5">
                            <li>Expert Microsoft Certified Trainers who consistently deliver outstanding service to meet
                                your learning objectives

                            </li>
                            <li>Training material that is continually developed by our dedicated researchers to keep pace
                                with changing technology

                            </li>
                            <li>A respected organisation, with 50,000+ positive reviews, trusted by small and large
                                organisations

                            </li>
                            <li>Committed to discovering new technology and advancing all end users capability.

                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </section>
        <section  >
            <div class="container mt-5 pb-2">
                <div class="row"
                    style="border-top: 1px solid lightgrey;border-bottom: 1px solid lightgrey;width: 80%;margin: auto;">
                    <div class="col-lg-6">
                        <p class="mt-5" style="font-size: 28px;font-weight: 500">What sets us apart?</p>
                        <p style="font-size: 24px"><strong>We are</strong> Microsoft Partners
                        </p>
                        <p class="pt-3">This means we have demonstrated our expertise to Microsoft and achieved the
                            standard of Microsoft's partnership program. Our collaboration and close working relationship
                            with Microsoft benefit our students through our knowledge of today’s and tomorrow’s technology.
                        </p>
                        <p class="pt-3" style="font-size: 24px"><strong>We are</strong> supportive educators
                        </p>
                        <p class="pt-3">We are passionate about connecting with students and clients, sharing knowledge
                            and enabling understanding. As Microsoft Certified Trainers, we are experts in the technology we
                            teach, but even more importantly we are experts in helping you learn about the technology.

                        </p>
                    </div>
                    <div class="col-lg-6">
                        <p style="font-size: 24px;margin-top: 100px"><strong>We are</strong> innovators
                        </p>
                        <p>We are dynamic, constantly seeking new ways to update and improve our courses, curriculum and
                            service delivery. Our dedicated course writers are at the forefront of technology, designing
                            unique training to advance you to the next level of capability and give you a productivity
                            advantage.
                        </p>
                        <p style="font-size: 24px;"><strong>We are</strong> market leaders
                        </p>
                        <p>With a five star rating from over 20,000 reviews, we are Australia’s leading provider of
                            Microsoft Training Courses. Our clients include many of Australia’s largest and well-known
                            businesses such as Deloitte, Australia Post, NAB and Virgin Australia as well as local, state
                            and federal governments.
                        </p>
                    </div>
                    <img style="margin: auto;height: 77px;width: 77px;" src="{{ asset('front/assets/images/flag.png') }}"
                        alt="">

                    <p style="margin: auto;text-align: center;font-size: 16px; margin-bottom: 50px"><button
                            style="background-color: ;height: 46px;width: 150px;margin: auto;background-color: #0064F0;font-size: 16px;color: #FFFFFF">read
                            our reviews</button></p>
                </div>
            </div>
        </section>
        <section  >
            <div class="container">
                <div class="row " style="width: 80%;margin: auto;border-bottom: 1px solid lightgrey">
                    <div class="col-lg-12">
                        <p style="font-size: 32px">Nexacu joins the Lumify family
                        </p>
                        <p>In October 2022, we were thrilled to become part of Lumify (previously DDLS), Australia’s largest
                            provider of corporate ICT and digital skills training - merging the training prowess of our
                            successful organisations to form an IT Training powerhouse across the APAC region.
                        </p>
                        <p>It is the perfect union in terms of alignment, with both organisations providing live,
                            instructor-led, digital skills training across a similar geographic footprint, however with
                            Lumify focusing on technical courses for IT professionals, while we focus on Microsoft end-user
                            training. By combining our expertise, we have created stronger, more impactful training options
                            for both organisations and skilled workers across APAC.
                        </p>
                        <img class="pt-5 mb-3" src="{{ asset('front/assets/images/lumify.png') }}" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section  >

            <div class="container">

                <div class="row " style="width: 80%;margin: auto">
                    <p class="mt-4" style="font-weight: 500;font-size: 28px">Flexible instructor-led training
                    </p>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <p class="mt-4" style="font-weight: 700;font-size: 22px">in-class | remote
                        </p>
                        <p>We offer a wide range of one day Microsoft training courses, open for public participation at
                            central CBD locations across Australia. These courses are now also offered via remote login, so
                            students can join from their own desks!
                        </p>
                        <button style="background-color: #0064F0;height: 50px;width: 116px;color: white">see
                            courses</button>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <p class="mt-4" style="font-weight: 700;font-size: 22px">in-class | remote
                        </p>
                        <p>We offer a wide range of one day Microsoft training courses, open for public participation at
                            central CBD locations across Australia. These courses are now also offered via remote login, so
                            students can join from their own desks!
                        </p>
                        <button style="background-color: #0064F0;height: 50px;width: 116px;color: white">see
                            courses</button>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <p class="mt-4" style="font-weight: 700;font-size: 22px">in-class | remote
                        </p>
                        <p>We offer a wide range of one day Microsoft training courses, open for public participation at
                            central CBD locations across Australia. These courses are now also offered via remote login, so
                            students can join from their own desks!
                        </p>
                        <button style="background-color: #0064F0;height: 50px;width: 116px;color: white">see
                            courses</button>
                    </div>
                    
                </div>
            </div>
        </section>
       
        <section  >
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-3 mt-2 mb-5">
                        <img class="company-img-2" src="{{ asset('front/assets/images/one.png') }}" alt="">
                    </div>
                    <div class="col-md-6 col-lg-3 mt-2 mb-5">
                        <img class="company-img-2" src="{{ asset('front/assets/images/two.png') }}" alt="">
                    </div>
                    <div class="col-md-6 col-lg-3 mt-2 mb-5">
                        <img class="company-img-2" src="{{ asset('front/assets/images/three.png') }}" alt="">
                    </div>
                    <div class="col-md-6 col-lg-3 mt-2 mb-5">
                        <img class="company-img-2" src="{{ asset('front/assets/images/four.png') }}" alt="">
                    </div>
                    <div class="col-md-6 col-lg-3 mt-2 mb-5">
                        <img class="company-img-2" src="{{ asset('front/assets/images/five.png') }}" alt="">
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
