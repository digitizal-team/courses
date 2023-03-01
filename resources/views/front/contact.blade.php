@extends('front.layouts.app')
@section('content')
    <main>
               <p class="pl-5 pt-5 web-name">CONTACT US</p>
        <section>
            <div class="contact pb-4">
                <p style="font-size: 36px;color: #0064F0">Contact Us
                </p>
                <p style="font-weight: bold;font-size: 22px">We'd love to hear from you...
                </p>
                <p style="font-size: 16px">Submit your enquiry below.
                </p>
              <div class="container">
                <div class="row" style="text-align: start">
                    <div class="col-lg-6 col-md-12 so-sm-12">
                        <label for="" class="form-label">First Name</label>
                        <input type="text" name="" id="" class="form-control" placeholder="Enter First Name" aria-describedby="helpId">
                   
                      </div>
                    
                      <div class="col-lg-6 col-md-12 so-sm-12">
                        <label for="" class="form-label">Last Name</label>
                        <input type="text" name="" id="" class="form-control" placeholder="Enter Last Name" aria-describedby="helpId">
                        
                      </div>
                      <div class="col-lg-6 col-md-12 so-sm-12">
                        <label for="" class="form-label">City</label>
                        <input type="text" name="" id="" class="form-control" placeholder="Enter Your City" aria-describedby="helpId">
               
                      </div>
                      <div class="col-lg-6 col-md-12 so-sm-12">
                        <label for="" class="form-label">Phone</label>
                        <input type="text" name="" id="" class="form-control" placeholder="Enter Your Phone" aria-describedby="helpId">
               
                      </div>
                      <div class="col-lg-12 col-md-12 so-sm-12">
                        <label for="" class="form-label">Email</label>
                        <input type="text" name="" id="" class="form-control" placeholder="Enter Email Address" aria-describedby="helpId">
                   
                      </div>
                      <div class="col-lg-12 col-md-12 so-sm-12">
                        <label for="" class="form-label">Description</label>
                        <textarea name="" class="form-control" id="" cols="30" rows="10" placeholder="Description"></textarea>
                   
                      </div>
                      <p class="mt-3">By submitting my details, I acknowledge you will use my personal information in accordance with the Collection Notification Statement.
                        This site is protected by reCAPTCHA and the Google Privacy Policy and Terms of Service apply.</p>
                      <p>This site is protected by reCAPTCHA and the Google Privacy Policy and Terms of Service apply.</p>
                      <button type="submit" style="background-color: #0064F0;color: #FFFFFF;width: 100%;height: 38px;border: 1px solid #0064F0">Submit</button>
                </div>
              </div>
                
            </div>

        </section>
 
        <section>
            <div class="container"  >
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
