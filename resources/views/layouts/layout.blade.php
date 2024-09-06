<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Gerek</title>
    <!-- CSS files -->
    <link href="{{ asset('assets/dist/css/tabler.min.css')}}" rel="stylesheet"/>
    <link href="{{ asset('assets/dist/css/tabler-vendors.min.css')}}" rel="stylesheet"/>
    <link href="{{ asset('assets/dist/css/demo.min.css')}}" rel="stylesheet"/>
    <link rel="icon" href="{{ asset('assets/dist/img/favicon.ico')}}" type="image/x-icon">
    {{-- <style>
      @import url('https://rsms.me/inter/inter.css');
      :root {
      	--tblr-font-sans-serif: Inter, -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
      }
    </style> --}}
  </head>
  <body >
    <script src="{{ asset('assets/dist/js/demo-theme.min.js')}}"></script>
    <div class="page">
      <!-- Navbar -->
      <div class="sticky-top">

        @hasSection('no-header')
        <!-- Do not show header -->
        @else
            @include('layouts.header')
        @endif

                @yield('content')

        @hasSection('no-footer')
        <!-- Do not show footer -->
        @else
            @include('layouts.footer')
        @endif
        </div>
    </div>



    <script src="{{ asset('assets/dist/js/tabler.min.js')}}" defer></script>
    <script src="{{ asset('assets/dist/js/demo.min.js')}}" defer></script>
  </body>
</html>
