<!DOCTYPE html>
<html lang="en">
   <head>
    <!-- Css -->
     @include('home.homecss')
   </head>
   <body>
      <!-- header section -->
      <div class="header_section">
      @include('home.header')
      <!-- banner section -->
      @include('home.banner')
      </div>
      <!-- services section -->
      @include('home.services')
      <!-- about section  -->
      @include('home.about')
      <!-- footer section  -->
      @include('home.footer')
   </body>
</html>