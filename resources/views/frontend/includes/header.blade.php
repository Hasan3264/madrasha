 <!--====== PRELOADER PART START ======-->

 <div class="preloader">
     <div class="loader rubix-cube">
         <div class="layer layer-1"></div>
         <div class="layer layer-2"></div>
         <div class="layer layer-3 color-1"></div>
         <div class="layer layer-4"></div>
         <div class="layer layer-5"></div>
         <div class="layer layer-6"></div>
         <div class="layer layer-7"></div>
         <div class="layer layer-8"></div>
     </div>
 </div>

 <!--====== PRELOADER PART START ======-->

 <!--====== HEADER PART START ======-->


 @php
 $institute = App\Models\ganarel_information::latest()->first();
 $branch = App\Models\branchdetails::latest()->first();
 @endphp
 @if ($institute != '' && $branch != '')
 <header id="header-part">

     <div class="header-top d-none d-lg-block">
         <div class="container">
             <div class="row">
                 <div class="col-lg-6">



                     <div class="header-contact text-lg-left text-center">
                         <ul>
                             <li><img src="{{asset('FrontEnd/images/all-icon/map.png')}}"
                                     alt="icon"><span>{{ $branch->address}}</span></li>
                             <li><img src="{{asset('FrontEnd/images/all-icon/email.png')}}"
                                     alt="icon"><span>{{ $institute->email}}</span></li>
                         </ul>
                     </div>
                 </div>
                 <div class="col-lg-6">
                     <div class="header-opening-time text-lg-right text-center">
                         <p>Opening Hours : Saturay to Thursday- 8 Am to 3 Pm</p>
                     </div>
                 </div>
             </div> <!-- row -->
         </div> <!-- container -->
     </div> <!-- header top -->

     <div class="header-logo-support">
         <div class="container">
             <div class="row">
                 <div class="col-lg-2 col-md-4">
                     <div class="logo" style="width:200px;">
                         <a href="{{url('/')}}">
                             <img class="w-100 img-fluid" src="{{asset('uploads/backend/logo')}}/{{$institute->logo}}" alt="Logo">
                         </a>
                     </div>
                 </div>
                 <div class="col-lg-5 col-md-8">
                     <div class="float-right d-none d-md-block top-login-button">
                         <div class="support float-left">
                             <div class="login-btn" style="text-align: center; justify-content: center; font-size:70px;">
                                   <marquee behavior="scroll" direction="left" loop="true">{{$institute->institute_name}}</marquee>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-5 col-md-8">
                     <div class="support-button float-right d-none d-md-block">
                         <div class="support float-left">
                             <div class="icon">
                                 <img src="{{asset('FrontEnd/images/all-icon/support.png')}}" alt="icon">
                             </div>
                             <div class="cont">
                                 <p>Need Help? call us free</p>
                                 <span>{{$branch->number}}</span>
                             </div>
                         </div>
                         <div class="button float-left">
                             <a href="{{route('apply.index')}}" class="main-btn">Apply Now</a>
                         </div>
                     </div>
                 </div>

             </div> <!-- row -->
         </div> <!-- container -->
     </div> <!-- header logo support -->

     <div class="navigation">
         <div class="container">
             <div class="row">
                 <div class="col-lg-10 col-md-10 col-sm-9 col-8">
                     <nav id="navbar" class="navbar navbar-expand-lg">
                         <button class="navbar-toggler" type="button" data-toggle="collapse"
                             data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                             aria-expanded="false" aria-label="Toggle navigation">
                             <span class="icon-bar"></span>
                             <span class="icon-bar"></span>
                             <span class="icon-bar"></span>
                         </button>

                         <div class="collapse navbar-collapse sub-menu-bar w-100" id="navbarSupportedContent">
                             <ul class="navbar-nav mr-auto ">
                                 <li class="nav-item">
                                     <a class="active" href="{{url('/')}}">Home</a>
                                 </li>
                                 <li class="nav-item">
                                     <a>About Us</a>
                                     <ul class="sub-menu">
                                        <li><a href="{{route('teachers.index')}}">Teachers</a></li>
                                        <li><a href="{{route('princ_masage')}}">Principal Massage</a></li>
                                    </ul>
                                 </li>
                                 <li class="nav-item">
                                     <a href="{{route('braking.index')}}">Admittion</a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="#">Result</a>
                                     <ul class="sub-menu">
                                         <li><a href="{{route('boardresult')}}">Board Result</a></li>
                                         <li><a href="{{route('AcademicBoardresult')}}">Academic Result</a></li>
                                     </ul>
                                 </li>
                                 <li class="nav-item">
                                     <a href="#">Academic</a>
                                     <ul class="sub-menu">
                                         <li><a href="{{route('boarddirector')}}">Board Of Director</a></li>
                                         <li><a href="{{route('about.index')}}">Academic Information</a></li>
                                     </ul>
                                 </li>
                                 <li class="nav-item">
                                     <a href="">Notice</a>
                                     <ul class="sub-menu">
                                        <li><a href="{{route('notice')}}">Notice</a></li>
                                        <li><a href="{{route('Routine')}}">Exam Routine</a></li>
                                    </ul>
                                 </li>
                                 <li class="nav-item">
                                     <a href= "{{route('Contuct.Us')}}">Contuct Us</a>
                                 </li>
                             </ul>
                         </div>
                     </nav> <!-- nav -->
                 </div>

             </div> <!-- row -->
         </div> <!-- container -->
     </div>

 </header>

 <!--====== HEADER PART ENDS ======-->
 <div class="popup">
     <div class="popup__content">
         <div class="popup__body">
             <button class="popup__close" type="button"></button>
             <div class="popup__text">

                 <div class="mb-4">
                     <a href="/"> <button class="popup__close" type="button"></button></a>
                     <h3 style="text-align: center; margin-bottom: 60px;"><strong> Teacher Login</strong></h3>

                     <form action="#" method="post">
                         <div class="form-group first">
                             <select name="Branch" id="branch">
                                 <option value="Abc_Branch-1">Select Your Branch</option>
                                 <option value="Abc_Branch-2">Abc Branch-1</option>
                                 <option value="Abc_Branch-3">Abc Branch-2</option>
                                 <option value="Abc_Branch-4">Abc Branch-3</option>
                                 <option value="Abc_Branch-5">Abc Branch-4</option>
                             </select>
                         </div>
                         <div class="form-group first" style="margin-top: 10px;">
                             <input type="text" class="form-control" id="username" placeholder="Username">
                         </div>
                         <div class="form-group last mb-4 " style="margin-top: 10px;">
                             <input type="password" class="form-control" id="password" placeholder="Password">
                         </div>



                         <input type="submit" value="Log In" class="btn btn-pill text-white btn-block"
                             style="background: #021d3a;">
                     </form>
                 </div>


             </div>
         </div>
     </div>
 </div>



 <div class="popu">
     <div class="popu__content">
         <div class="popu__body">
             <button class="popu__close" type="button"></button>
             <div class="popu__text">

                 <div class="mb-4">
                     <a href="/"> <button class="popu__close" type="button"></button></a>
                     <h3 style="text-align: center; margin-bottom: 60px;"><strong> Student Login</strong></h3>

                     <form action="#" method="post">
                         <div class="form-group first">
                             <select name="Branch" id="branch">
                                 <option value="Abc_Branch-1">Select Your Branch</option>
                                 <option value="Abc_Branch-2">Abc Branch-1</option>
                                 <option value="Abc_Branch-3">Abc Branch-2</option>
                                 <option value="Abc_Branch-4">Abc Branch-3</option>
                                 <option value="Abc_Branch-5">Abc Branch-4</option>
                             </select>
                         </div>
                         <div class="form-group first" style="margin-top: 10px;">
                             <input type="text" class="form-control" id="username" placeholder="Username">
                         </div>
                         <div class="form-group last mb-4 " style="margin-top: 10px;">
                             <input type="password" class="form-control" id="password" placeholder="Password">
                         </div>



                         <input type="submit" value="Log In" class="btn btn-pill text-white btn-block"
                             style="background: #021d3a;">
                     </form>
                 </div>


             </div>
         </div>
     </div>
 </div>
 @else


<div class="w-100 h-full text-center" style="background-color: #021d3a">
     <h2 class="font-bold" style="color: red;">Please Set Up Branch And Ganarel Information</h2>
 </div>

 @endif
