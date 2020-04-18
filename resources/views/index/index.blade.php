@extends('layouts.index')
@section('title')
    Let's Fight Against Corona. Stay Home. Stay Safe.
@endsection

@section('css')
    <style type="text/css">
        body {
            overflow: hidden;
        }

        /* Preloader */
        #preloader {
            position: fixed;
            top:0;
            left:0;
            right:0;
            bottom:0;
            background-color:#fff; /* change if the mask should have another color then white */
            z-index:99999;
        }

        #status {
            width:200px;
            height:200px;
            position:absolute;
            left:50%;
            top:50%;
            background-image:url({{ asset('/images/3362406.gif') }}); /* path to your loading animation */
            background-repeat:no-repeat;
            background-position:center;
            margin:-100px 0 0 -100px;
        }
    </style>
@endsection

@section('content')
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    {{-- @include('partials._slider') --}}
    <!-- about section -->
    <section class="fix-background white-text content-top-margin wow fadeIn" style="background-image:url('/images/banner_back.png');">
        {{-- <img class="parallax-background-img" src="/images/banner_back.png" alt="" />
        <div class="slider-overlay bg-slider"></div> --}}
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 text-center center-col">
                    {{-- <span class="margin-five no-margin-top display-block letter-spacing-2">EST. 2016</span> --}}
                    <h1 class="white-text">DUITS Againts Corona</h1><br/><br/>
                    <p class="text-med width-90 center-col white-text margin-five no-margin-bottom">
                        ঢাকা ইউনিভার্সিটি আইটি সোসাইটি (ডিইউআইটিএস) বিশ্ববিদ্যালয়ের শিক্ষার্থীদের দ্বারা পরিচালিত টিএসসি ভিত্তিক একটি সংগঠন। প্রতিষ্ঠার পর থেকেই সংগঠনটি তথ্যপ্রযুক্তি নির্ভর ক্যাম্পাস গঠনের পাশাপাশি বিভিন্ন সামাজিক কার্যক্রম করে আসছে। এরই ধারাবাহিকতায়, চলমান মহামারী করোনা পরিস্থিতিতে সংগঠনের আর্থিকভাবে অস্বচ্ছল সদস্যদের প্রতি সহযোগিতার হাত বাড়ানোর জন্য একটি 'আর্থিক সহায়তা প্রদান তহবিল' গঠন করা হয়েছে।<br/><br/>

                        আমরা দৃঢ়ভাবে বিশ্বাস করি, সকল ব্যক্তি, প্রতিষ্ঠান বা সংগঠনগুলোর এই বিপর্যয়ে বিপদগ্রস্থ মানুষের পাশে দাড়ানো এখন একটি মানবিক, নৈতিক ও সামাজিক দায়িত্ব। তাই আমাদের উদাত্ত আহবান, সামর্থ্য অনুযায়ী আর্থিকভাবে আপনার একটুখানি সহযোগিতা এমতাবস্থায় বিশ্ববিদ্যালয়ের তথা সংগঠনের সদস্যদের স্বাভাবিক জীবনযাপনে সহায়ক হতে পারে। আসুন সম্মিলিতভাবে করোনা প্রতিরোধ করি।<br/><br/>

                        Let’s Donate and Fight Against CORONA. Stay Home. Stay Safe.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="xs-onepage-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center no-padding">
                    <h1 class="text-transform-none title margin-two no-margin-lr no-margin-top orange-light-text">
                        Donate
                        <!-- <span class="underline-bg bg-light-orange"></span> -->
                    </h1>
                    <h4 class=" margin-ten no-margin-lr no-margin-top font-weight-300 gray-text">Please fill up the form</h4>
                </div>
            </div> 
            <div class="col-md-6 col-sm-6 bg-gray contact-map contact-map-bottom map" id="canvas1" @desktop style="height: 460px !important;" @enddesktop>
                <!-- form -->
                
                {!! Form::open(['route' => 'index.donatestore', 'method' => 'POST']) !!}
                    {{-- <div id="success" class="no-margin-lr"></div> --}}
                    <input name="name" type="text" value="{{ old('name') }}" placeholder="Your Name (আপনার নাম)" required="" />
                    <input name="amount" id="amount" type="text" value="{{ old('amount') }}" placeholder="Donation Amount (অনুদানের পরিমাণ)" onchange="checkAmount()" required="" />
                    <input name="duits_batch" type="text" value="{{ old('duits_batch') }}" placeholder="DUITS Batch (ডিইউআইটিএস ব্যাচ)"  required="" />
                    <input name="phone" type="text" value="{{ old('phone') }}" placeholder="Contact Number (যোগাযোগের নাম্বার)"  required="" />
                    
                    @php
                      $contact_num1 = rand(1,20);
                      $contact_num2 = rand(1,20);
                      $contact_sum_result_hidden = $contact_num1 + $contact_num2;
                    @endphp
                    <input type="hidden" name="contact_sum_result_hidden" value="{{ $contact_sum_result_hidden }}">
                    <input type="text" name="contact_sum_result" id="" class="form-control" placeholder="{{ $contact_num1 }} + {{ $contact_num2 }} = ?" required="">
                    
                    <button type="submit" class="highlight-button-dark btn button xs-margin-bottom-five"><i class="fa fa-paper-plane"></i> Donate Now</button>
                {!! Form::close() !!}
                <!-- end form -->
            </div>
            <div class="map-contact col-md-6 col-sm-6 bg-light-orange" @desktop style="height: 460px !important;" @enddesktop>
                <ul>
                    <li>
                        <span><i class="fa fa-home"></i></span>
                        ঘরে বসেই আপনার সামর্থ্য অনুযায়ী অর্থ দিয়ে এই লড়াইয়ে অংশ নিন।                        
                    </li>
                    <li>
                        <span><i class="fa fa-university"></i></span>
                        অনুদান জমা হবে ঢাকা ইউনিভার্সিটি আইটি সোসাইটি (ডিইউআইটিএস) এর শিক্ষার্থীদের উদ্যোগ "আর্থিক সহায়তা প্রদান তহবিল"-এ। এই অর্থ পৌঁছে যাবে বিদ্যানন্দ  ও গিফট ফর গুডস এ ধরণের স্বেচ্ছাসেবী সংগঠনগুলোর কাছে।
                    </li> 
                    <li>
                        <span><i class="fa fa-ambulance"></i></span>
                        এ অনুদান সঠিকভাবে পৌঁছে যাবে বিপদগ্রস্থ অসহায় মানুষদেড় পাশে । লকডাউনের দিনগুলোয় তাদের স্বাভাবিক জীবনযাপনে সহায়ক হবে আপনার এ প্রয়াস।
                    </li>
                </ul>
            </div> 
        </div>
    </section>

    <section class="fix-background black-text bg-gray" {{-- style="background-image:url('/images/donation_background.jpg'); --}}">
        {{-- <img class="parallax-background-img" src="/images/donation_background.jpg" alt="" />
        <div class="slider-overlay bg-slider"></div> --}}
        <div class="container">
            <div class="row">
                <!-- counter -->
                <div class="col-md-4 col-sm-4 bottom-margin text-center counter-section wow fadeInUp sm-margin-bottom-ten" data-wow-duration="600ms">
                    <i class="icon-happy medium-icon black-text"></i>
                    <span class="timer counter-number black-text" data-to="{{ $totaldonations }}" data-speed="7000"></span>
                    <span class="counter-title black-text">Donors</span>
                </div>
                <!-- end counter -->
                <!-- counter -->
                <div class="col-md-4 col-sm-4 bottom-margin text-center counter-section wow fadeInUp sm-margin-bottom-ten" data-wow-duration="300ms">
                    <i class="icon-heart medium-icon black-text"></i>
                    <span class="timer counter-number black-text" data-to="{{ $totaldonationamount->total - $totalcharge->total }}" data-speed="5000"></span>
                    <span class="counter-title black-text">Donation (Tk.)</span>
                </div>
                <!-- end counter -->
                <!-- counter -->
                <div class="col-md-4 col-sm-4 bottom-margin-small text-center counter-section wow fadeInUp xs-margin-bottom-ten" data-wow-duration="900ms">
                    <i class="icon-anchor medium-icon black-text"></i>
                    <span class="timer counter-number black-text" data-to="3" data-speed="7000"></span>
                    <span class="counter-title black-text">Partners</span>
                </div>
                <!-- end counter -->
            </div>
        </div>
    </section>

    {{-- <section id="approach" class="approach parallax1 parallax-fix  parallax-section-main">
        <div class="carousel slide carousel-slide" id="partnersCarousal"> 
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h3 class="section-title section-title-services no-padding-bottom">Our Partners</h3>
                    </div>
                </div>
                <div class="carousel-inner margin-seven no-margin-bottom">
                    <div class="item active"> 
                        <div class="col-md-3 col-sm-6 text-center xs-margin-bottom-ten"><a href="#"><img alt="Gift for Good" src="/images/partners/gfg.png"></a><h5 class="margin-ten no-margin-bottom xs-margin-top-five">Gift for Good</h5></div>
                        <div class="col-md-3 col-sm-6 text-center xs-margin-bottom-ten"><a href="#"><img alt="Feni Muhuri Leo Club" src="/images/partners/feni_leo.jpg"></a><h5 class="margin-ten no-margin-bottom xs-margin-top-five">Feni Muhuri Leo Club</h5></div>
                        <div class="col-md-3 col-sm-6 text-center xs-margin-bottom-ten"><a href="#"><img alt="Heroes of COVID19, Thakurgaon" src="/images/partners/tg.jpg"></a><h5 class="margin-ten no-margin-bottom xs-margin-top-five">Heroes of COVID19, Thakurgaon</h5></div>
                        <div class="col-md-3 col-sm-6 text-center"><a href="#"><img alt="Gazipur Local Club" src="/images/partners/gazipur_local.jpg"></a><h5 class="margin-ten no-margin-bottom xs-margin-top-five">Gazipur Local Club</h5></div>
                    </div>
                </div>
            </div> 
            <a data-slide="prev" href="#partnersCarousal" class="left carousel-control"> <img alt="" src="/images/arrow-pre.png"> </a> <a data-slide="next" href="#partnersCarousal" class="right carousel-control"> <img alt="" src="/images/arrow-next.png"> </a>
        </div>
    </section> --}}

    <section class="fix-background white-text" style="background-image:url('/images/iit_du.jpg');">
        {{-- <div class="opacity-full bg-white"></div> --}}
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 text-center center-col">
                    {{-- <span class="margin-five no-margin-top display-block letter-spacing-2">EST. 2016</span> --}}
                    <h1 class="white-text">About Us</h1><br/>
                    <p class="text-med width-90 center-col white-text smargin-five no-margin-bottom">
                        ঢাকা ইউনিভার্সিটি আইটি সোসাইটি (ডিইউআইটিএস) বিশ্ববিদ্যালয়ের শিক্ষার্থীদের দ্বারা পরিচালিত টিএসসি ভিত্তিক একটি সংগঠন। প্রতিষ্ঠার পর থেকেই সংগঠনটি তথ্যপ্রযুক্তি নির্ভর ক্যাম্পাস গঠনের পাশাপাশি বিভিন্ন সামাজিক কার্যক্রম করে আসছে। এরই ধারাবাহিকতায়, চলমান মহামারী করোনা পরিস্থিতিতে সংগঠনের আর্থিকভাবে অস্বচ্ছল সদস্যদের প্রতি সহযোগিতার হাত বাড়ানোর জন্য একটি 'আর্থিক সহায়তা প্রদান তহবিল' গঠন করা হয়েছে।<br/><br/>

                        আমরা দৃঢ়ভাবে বিশ্বাস করি, সকল ব্যক্তি, প্রতিষ্ঠান বা সংগঠনগুলোর এই বিপর্যয়ে বিপদগ্রস্থ মানুষের পাশে দাড়ানো এখন একটি মানবিক, নৈতিক ও সামাজিক দায়িত্ব। তাই আমাদের উদাত্ত আহবান, সামর্থ্য অনুযায়ী আর্থিকভাবে আপনার একটুখানি সহযোগিতা এমতাবস্থায় বিশ্ববিদ্যালয়ের তথা সংগঠনের সদস্যদের স্বাভাবিক জীবনযাপনে সহায়ক হতে পারে। আসুন সম্মিলিতভাবে করোনা প্রতিরোধ করি।<br/><br/>

                        Let’s Donate and Fight Against CORONA. Stay Home. Stay Safe.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
<!-- Preloader -->
<script type="text/javascript">
    //<![CDATA[
        $(window).load(function() { // makes sure the whole site is loaded
            $('#status').fadeOut(); // will first fade out the loading animation
            $('#preloader').delay(1000).fadeOut('slow'); // will fade out the white DIV that covers the website.
            $('body').delay(1000).css({'overflow':'visible'});
        })
    //]]>
</script>

<script type="text/javascript">
    function checkAmount() {
        if($('#amount').val() < 10) {
            $('#amount').val('');
            if($(window).width() > 768) {
              toastr.warning('Amount less then 10 will return error from the payment gateway! Please increase the amount.', 'WARNING').css('width', '400px');
            } else {
              toastr.warning('Amount less then 10 will return error from the payment gateway! Please increase the amount.', 'WARNING').css('width', ($(window).width()-25)+'px');
            }
        }
    }
</script>
@endsection