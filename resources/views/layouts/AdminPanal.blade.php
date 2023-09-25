<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- Head -->

<head>
    {{-- CSS --}}
    @include('backend.includes.css')
    @livewireStyles
</head>
<!-- End Head -->

<body>

    <!----- preloader ----->
    @include('backend.includes.preloader')

    <!----- /preloader ----->


    <!-- Header (Topbar) -->

    @include('backend.includes.topheader')
    <!-- End Header (Topbar) -->

    <main class="u-main" role="main">
        <!-- Sidebar -->

        @include('backend.includes.sidebar')
        <!-- End Sidebar -->

        <div class="u-content">
            @yield('content')
        </div>
    </main>
    {{-- SCRIPT --}}
    @livewireScripts
    @include('backend.includes.script')
    @yield('fotter_js')
</body>

</html>
