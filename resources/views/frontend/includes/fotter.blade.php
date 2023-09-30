<script src="{{asset('FrontEnd/script.js')}}"></script>

<!--====== FOOTER PART START ======-->
@php
$institute = App\Models\ganarel_information::latest()->first();
$branch = App\Models\branchdetails::latest()->first();
@endphp
<footer id="footer-part">
    <div class="footer-top pt-40 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-about mt-40">
                        <div class="logo">
                            @if ($institute != '')
                            <a href="/"><img src="{{asset('uploads/backend/logo')}}/{{$institute->logo}}"
                                    alt="Logo"></a>
                            @else
                            <div class="w-100 h-full text-center" style="background-color: #021d3a">
                                <h2 class="font-bold" style="color: red;">Please Set logos From Website Module <br>
                                    Or Active logos
                                </h2>
                            </div>
                            @endif
                        </div>
                        <p>{!!$institute->choosen_des!!}</p>
                        @foreach ($facebook as $faceboook)@endforeach
                        @foreach ($skype as $skypesfd)@endforeach
                        @foreach ($you_tube as $you_tubes)@endforeach
                        @foreach ($linkedin as $linkedins)@endforeach
                        <ul class="mt-20">
                            <li><a href="{{ $faceboook->url }}" target="_blank"><i class="fa fa-facebook-f"></i></a></li>

                            <li><a href="{{$skypesfd->url}}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="{{$you_tubes->url}}" target="_blank"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="{{$linkedins->url}}"  target="_blank"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div> <!-- footer about -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-link mt-40">
                        <div class="footer-title pb-25">
                            <h6>Manu</h6>
                        </div>
                        <ul>
                            <li><a href="{{url('/')}}"><i class="fa fa-angle-right"></i>Home</a></li>
                            <li><a href="{{route('about.index')}}"><i class="fa fa-angle-right"></i>About us</a></li>
                            <li><a href="{{route('braking.index')}}"><i class="fa fa-angle-right"></i>Breaking News</a></li>
                            <li><a href="{{route('boardresult')}}"><i class="fa fa-angle-right"></i>Result</a></li>
                        </ul>
                        <ul>
                            <li><a href="{{route('boarddirector')}}"><i class="fa fa-angle-right"></i>Board Director</a></li>
                        </ul>
                    </div> <!-- footer link -->
                </div>
                <div class="col-lg-2  col-md-6 col-sm-6">
                    <div class="d-none footer-link support mt-40">
                        <div class="footer-title pb-25">
                            <h6>Support</h6>
                        </div>
                        {{-- <ul>
                            <li><a href="#"><i class="fa fa-angle-right"></i>FAQS</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Privacy</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Policy</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Support</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Documentation</a></li>
                        </ul> --}}
                    </div> <!-- support -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-address mt-40">
                        <div class="footer-title pb-25">
                            <h6>Contact Us</h6>
                        </div>
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-home"></i>
                                </div>
                                <div class="cont">
                                    <p>{{$branch->address}}</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="cont">
                                    <p>{{$branch->number}}</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                                <div class="cont">
                                    <p>{{$branch->email}}</p>
                                </div>
                            </li>
                        </ul>
                    </div> <!-- footer address -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- footer top -->

    <div class="footer-copyright pt-10 pb-25">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright text-md-left text-center pt-15">
                        <p><a style="color: #fff;" target="_blank" href="https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.linkedin.com%2Fin%2Fmd-mahmudul-hasan-762290206%3Ffbclid%3DIwAR0oFZnFRRR9l7R_9w0vwkBjzCU0tg1nbwsp8JaIf5x4O1MhjmeJ2rK-J1M&h=AT3GFE5101osam-pJ6gvFENQsgvo7FbXthAJPsoHk8v0yTfyDqExYiVYFyh8GLI8DooQFpJ3AH8sHwLKw3pOLOkHjfwBy-DNkV_8yntTu8FHCZyKybqidbU9P-DAHqyGi79QiA"> All Right
                                Reserved By - DevHasssan</a> </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="copyright text-md-right text-center pt-15">

                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- footer copyright -->
</footer>

<!--====== FOOTER PART ENDS ======-->

<!--====== BACK TO TP PART START ======-->

<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

<!--====== BACK TO TP PART ENDS ======-->
