<!DOCTYPE html>
<html lang="en">
@include('front.layouts.head')

  <body>
    @include('front.layouts.navbar')

   @yield('content')
    @include('front.layouts.footer')
    <!-- Back to Top -->
 <a href="#" class="btn btn-primary p-3 back-to-top"
 ><i class="fa fa-angle-double-up"></i
></a>


   @include('front.layouts.scripts')
  </body>
</html>
