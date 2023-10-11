@extends('layouts.Frontend')
@section('frontend')
<div class="container">
    <style>
        .whatsapp-button {
            display: inline-block;
            background-color: #25d366; /* WhatsApp green color */
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
        }
    </style>
      <div class="row text-center">
             <div class="col-md-12">
                    <h1>Contuct Us</h1>
             </div>
      </div>
      <div class="row text-center">
           <div class="col-lg-12">
            <h1 class="text-center"><img src="{{asset('FrontEnd/images/all-icon/support.png')}}" alt=""> Call Us: 0183034908544</h1>
           </div>
      </div>

      <div class="row text-center" style="margin-top: 40px;">
           <div class="col-lg-8 mx-auto">
            <a class="whatsapp-button text-white" href="https://wa.me/1678012452" target="_blank"><img src="{{asset('FrontEnd/images/all-icon/whatsapp.svg')}}" alt=""> WhatsApp Us</a>
           </div>
      </div>

      <div class="row text-center" style="margin-top: 40px;">
           <div class="col-lg-8 mx-auto">
            <iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d6140.818539577537!2d90.47692612851!3d23.77044356373734!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m3!3m2!1d23.750907299999998!2d90.3842538!4m0!5e0!3m2!1sen!2sbd!4v1697013693757!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
           </div>
      </div>
</div>
@endsection
