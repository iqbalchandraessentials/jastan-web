<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="icon" type="image/x-icon" href="{{url('images/favicon.ico')}}">
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield('title')</title>

    {{-- style --}}
    @stack('prepend-style')
    @include('include.style')
    @stack('addon-style')
  </head>
  
  <body>
    {{-- navbar --}}
    @include('include.navbar-dropdown')


   {{-- page --}}
   @yield('content')
   
   
   {{-- footer --}}
   @include('include.footer')

 {{-- script --}}
 @stack('prepend-script')
 @include('include.script')
 @stack('addon-script')
  </body>
</html>
