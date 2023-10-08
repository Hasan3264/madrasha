@extends('layouts.Frontend')
@section('frontend')
<!--====== SLIDER PART START ======-->

@php
$bannrs = App\Models\slideshow::where('status', 'Active')->take(4)->get();
$isempty = $bannrs->isEmpty();
@endphp
@if ($isempty != 1)
<section id="slider-part" class="slider-active">
    @foreach ($bannrs as $value)
    <div class="single-slider bg_cover pt-150"
        style="background-image: url({{asset('uploads/website/slideshow')}}/{{$value->photo}})" data-overlay="4">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-9">
                    <div class="slider-cont">
                        <h1 data-animation="bounceInLeft" data-delay="1s">{{$value->title}}</h1>
                        <p data-animation="fadeInUp" data-delay="1.3s">{!!$value->description!!}</p>
                        <ul>
                            <li><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="{{route('about.index')}}">Read More</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div>
    @endforeach


    <!-- single slider -->
</section>

<!--====== SLIDER PART ENDS ======-->
@else


<div class="w-100 h-full text-center" style="background-color: #021d3a">
    <h2 class="font-bold" style="color: red;">Please Set Up Slider Or Bannar From Website Module <br>
        Or Active Banner
    </h2>
</div>



@endif

<!--====== CATEGORY PART ENDS ======-->

<!--====== ABOUT PART START ======-->
@php
$about = App\Models\ManuContent::latest()->first();
@endphp

@if ($about != '')
<section id="about-part" class="pt-65">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-title mt-50">
                    <h5>About us</h5>
                    <h2>Welcome to Abed Halima Dhakil Madrasha</h2>
                </div> <!-- section title -->
                <div class="about-cont">
                    <p>
                        {!!$about->content!!}
                    </p>
                    <a href="{{route('about.index')}}" class="main-btn mt-55">Learn More</a>
                </div>
            </div> <!-- about cont -->

        </div>
    </div> <!-- row -->
    <!-- container -->
    <div class="about-bg">
        <img src="{{asset('FrontEnd/images/about/Untitled.jpg')}}" alt="About">
        <img src="{{asset('FrontEnd/images/about/Untitled.jpg')}}" alt="About">
    </div>
</section>
@else

<div class=" w-28 h-full text-center" style="background-color: #021d3a; height:200px;">
    <h2 class="font-bold" style="color: red;">Please add Content From Website for about<br> </h2>
</div>

@endif

<!--====== ABOUT PART ENDS ======-->

<!--====== APPLY PART START ======-->

<section id="apply-aprt" class="pb-120">
    <div class="container">
        <div class="apply">
            <div class="row no-gutters">
                <div class="col-lg-12">
                    <div class="apply-cont apply-color-1">
                        <h3>Apply for new admission {{ date('Y F') }}</h3>
                        <p>প্রতিবছর ২০ ডিসেম্বর তারিখের মধ্যে ভর্তি বিজ্ঞপ্তি প্রকাশ করা হয় এবং ডিসেম্বর মাসের শেষ সপ্তাহে ভর্তি প্রক্রিয়া সমাপ্ত করে ১ জানুয়ারী বই উৎসবের মাধ্যমে ক্লাশ শুরু করা হয়। জানুয়ারী ও ফেব্রুয়ারীর মধ্যে বার্ষিক ক্রীড়ানুষ্ঠান ও ওয়া মাহফিল শেষ করে ১মার্চ থেকে পুরো শ্রেণির কার্যক্রম শুরু হয়। বছরে দুটি পরীক্ষা অনুষ্ঠিত হয়, যাগ্মাষিক ও বার্ষিক ।</p>
                        <a href="{{route('apply.index')}}" class="main-btn">Apply Now</a>
                    </div> <!-- apply cont -->
                </div>
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== APPLY PART ENDS ======-->

<!--====== BREAKING NEW PART START ======-->

@php
$Newsmanage = App\Models\Newsmanage::latest()->get();

$emptyNewsmanage = $Newsmanage->isEmpty();
@endphp
@if ($emptyNewsmanage != 1)
<section id="course-part" class="pt-115 pb-120 gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title pb-45">
                    <h5>Featured News</h5>
                    <h2>Latest News</h2>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row course-slied mt-30">

            @foreach ($Newsmanage as $newss)
            <div class="col-lg-4">
                <div class="singel-course">
                    <div class="thum">
                        <div class="image">
                            <img src="{{asset('uploads/website/newsmanage')}}/{{$newss->photo}}" alt="Course">
                        </div>

                    </div>
                    <div class="cont">
                        <a href="#">
                            <h4>{{Str::limit($newss->title, 25)}}</h4>
                        </a>
                        <div class="course-teacher">
                            <div class="name h-20 overflow-hidden">
                                    <p>{!!$newss->news!!}</p>
                            </div>
                        </div>
                    </div>
                </div> <!-- singel course -->
            </div>
            @endforeach
        </div> <!-- course slied -->
    </div> <!-- container -->
</section>
@else


<div class="w-100 h-full text-center" style="background-color: #021d3a">
    <h2 class="font-bold" style="color: red;">Please Set Up News From Website Module <br>
        Or Active News
    </h2>
</div>
@endif


<!--====== COURSE PART ENDS ======-->

<!--====== VIDEO FEATURE PART START ======-->
@php
    $institute = App\Models\ganarel_information::latest()->first();
@endphp
<section id="video-feature" class="bg_cover pt-60 pb-110"
    style="background-image: url({{ asset('uploads/backend/logo')}}/{{$institute->logo}})">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 offset-lg-1 order-first order-lg-last">
                <div class="feature pt-50">
                    <div class="feature-title">
                        <h3>Our Facilities</h3>
                    </div>
                    @php
                    $facilitys = App\Models\Facility::where('status', 'Active')->latest()->take(3)->get();
                    $emptyfacility = $facilitys->isEmpty();
                    @endphp
                    @if ($emptyfacility != 1)
                    <ul>
                       @foreach ($facilitys as $facility)
                            <li>
                            <div class="singel-feature">
                                <div class="icon">
                                    <img src="{{asset('FrontEnd/images/all-icon/f-1.png')}}" alt="icon">
                                </div>
                                <div class="cont">
                                    <h4>{{$facility->title}}</h4>
                                    <p>{!!$facility->details!!}</p>
                                </div>
                            </div> <!-- singel feature -->
                        </li>
                       @endforeach
                    </ul>
                    @else
                    <div class="w-100 h-full text-center" style="background-color: #021d3a">
                        <h2 class="font-bold" style="color: red;">Please Set Facilitys From Website Module <br>
                            Or Active Facilitys
                        </h2>
                    </div>
                    @endif
                </div> <!-- feature -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
    <div class="feature-bg"></div> <!-- feature bg -->
</section>

<!--====== VIDEO FEATURE PART ENDS ======-->

<!--====== TEACHERS PART START ======-->

<section id="teachers-part" class="pt-70 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-title mt-50">
                    <h5>Featured Teachers</h5>
                    <h2>Meet Our teachers</h2>
                </div> <!-- section title -->
                <div class="teachers-cont">
                    @php
                        $t_cont = App\Models\Teachercontent::where('status', 'Active')->latest()->first()
                    @endphp
                    @if ( $t_cont != '')
                           <p>{!! $t_cont->pera_1 !!} <br>

                        <br> {!! $t_cont->pera_2 !!}</p>
                        @else
                         <div class="w-100 h-full text-center" style="background-color: #021d3a">
                        <h2 class="font-bold" style="color: red;">Please Set Teacher Content From Website Module <br>
                            Or Active Teacher Content
                        </h2>
                    </div>
                    @endif


                </div> <!-- teachers cont -->
            </div>
            <div class="col-lg-6 offset-lg-1">
                <div class="teachers mt-20">
                    <div class="row">
                        @foreach (App\Models\Massagecorner::take(5)->get() as $teacher)
                        <div class="col-sm-4">
                            <div class="singel-teachers mt-30 text-center">
                                <div class="image">
                                    <img src="{{asset('uploads/website/masagecorner')}}/{{$teacher->photo}}" alt="Teachers">
                                </div>
                                <div class="cont">
                                    <a href="teachers-singel.html">
                                        <h6>{{$teacher->name}}</h6>
                                    </a>
                                    <span>{{$teacher->designation}}</span>
                                </div>
                            </div> <!-- singel teachers -->
                        </div>
                        @endforeach

                    </div> <!-- row -->
                </div> <!-- teachers -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== TEACHERS PART ENDS ======-->

<!--====== TEASTIMONIAL PART START ======-->

<section id="testimonial" class="bg_cover pt-115 pb-115" data-overlay="8"
    style="background-image: url(images/bg-2.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title pb-40">
                    <h5>Testimonial</h5>
                    <h2>What they say</h2>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row testimonial-slied mt-40">
            @foreach (App\Models\Testimonial::all() as $monial)
            <div class="col-lg-6">
                <div class="singel-testimonial">
                    <div class="testimonial-thum">
                        <img style="width: 100px" src="{{asset('uploads/website/testimonial')}}/{{$monial->photo}}" alt="Testimonial">
                        <div class="quote">
                            <i class="fa fa-quote-right"></i>
                        </div>
                    </div>
                    <div class="testimonial-cont">
                        <p>{!!$monial->comment!!}</p>
                        <h6>{{$monial->name}}</h6>
                        <span>{{$monial->designation}}</span>
                    </div>
                </div> <!-- singel testimonial -->
            </div>
            @endforeach

        </div> <!-- testimonial slied -->
    </div> <!-- container -->
</section>

<!--====== TEASTIMONIAL PART ENDS ======-->

@endsection
