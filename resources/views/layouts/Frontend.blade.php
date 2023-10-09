<!doctype html>
<html lang="en">
<head>
  @include('frontend.includes.css')

  @yield('frontend_style')
</head>
<body data-bs-spy="scroll" data-bs-target="#navber">
    @include('frontend.includes.header')


        <div class="u-content">
            @yield('frontend')
        </div>
    @include('frontend.includes.fotter')

    @include('frontend.includes.scrift')


     @yield('frontend_scrift')
</body >
</html>
