<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      href="{{asset("assets/images/logo/smk4.png")}}"
      type="image/x-icon"
    />
    <title>Admin Page | SMK N 4 Pontianak</title>
    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{asset("assets/css/bootstrap.min.css")}}" />
    <link rel="stylesheet" href="{{asset("assets/css/LineIcons.css")}}" />
    <link rel="stylesheet" href="{{asset("assets/css/materialdesignicons.min.css")}}" />
    <link rel="stylesheet" href="{{asset("assets/css/main.css")}}" />
    {{-- <link rel="stylesheet" href="assets/css/fullcalendar.css" />
    <link rel="stylesheet" href="assets/css/fullcalendar.css" /> --}}
  </head>
<body>
    @include('layout.sidebar')
    <!-- ======== main-wrapper start =========== -->
    <main class="main-wrapper">
      @include('layout.header')
      <!-- ========== content start ========== -->
      <section class="section">
        @yield('content')
      </section>

      <footer class="footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 order-last order-md-first">
              <div class="copyright text-center text-md-start">
                <p class="text-sm">
                  Customize By 
                  <a href="https://smkn4ptk.sch.id" rel="nofollow" target="_blank">
                    SMK N 4 Pontianak
                  </a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </main>







{{-- Link ALL JS LIB --}}
    @stack('script')
    <script src="{{asset("assets/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{asset("assets/js/moment.min.js")}}"></script>
    <script src="{{asset("assets/js/jvectormap.min.js")}}"></script>
    <script src="{{asset("assets/js/world-merc.js")}}"></script>
    <script src="{{asset("assets/js/polyfill.js")}}"></script>
    <script src="{{asset("assets/js/main.js")}}"></script>
</html>
