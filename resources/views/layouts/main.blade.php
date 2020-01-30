<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    @include('partials.header')

  </head>

  <body data-spy="scroll" data-target=".navbar" data-offset="71">
    <!-- WRAPPER
      ============================== -->
    <div class="wrapper">
      <!-- NAVBAR
        ============================== -->
        @include('partials.navbar')
      <!-- YOUTUBE VIDEO BACKGROUND-->
      @include('partials.shortcuts.bgvideo')



      @yield('content')




      <!-- FOOTER
        =================================== -->

        @include('partials.footer')

    <!-- PRELOADER
      ============================== -->
      @include('partials.shortcuts.preloader')

    <!-- JAVASCRIPT
      ================================================== -->
      @include('partials.scripts')

  </body>
</html>

