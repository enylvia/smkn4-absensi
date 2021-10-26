<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="{{ asset("assets/images/logo/smk4.png") }}"
        type="image/x-icon" />
    <title>Admin Page | SMK N 4 Pontianak</title>
    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset("assets/css/bootstrap.min.css") }}" />
    <link rel="stylesheet" href="{{ asset("assets/css/LineIcons.css") }}" />
    <link rel="stylesheet" href="{{ asset("assets/css/materialdesignicons.min.css") }}" />
    <link rel="stylesheet" href="{{ asset("assets/css/main.css") }}" />
    {{-- <link rel="stylesheet" href="assets/css/fullcalendar.css" />
    <link rel="stylesheet" href="assets/css/fullcalendar.css" /> --}}
</head>

<body>

    <div class="row g-0 auth-row justify-content-center bg-primary-100">
        <!-- end col -->
        <div class="col-lg-4">
            <div class="signin-wrapper">
                <div class="form-wrapper" >
                    <h6 class="mb-15">HALAMAN LOGIN</h6>
                    <hr>
                    <div class="logo-login text-center">
                        <img src="{{asset("assets/images/logo/smk4.png")}}" alt="logo" width="85px" />
                    </div>
                    <form action="{{route('login')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="input-style-1">
                                    <label>Email</label>
                                    <input type="email" placeholder="Email" name="email"/>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-12">
                                <div class="input-style-1">
                                    <label>Password</label>
                                    <input type="password" placeholder="Password" name="password" />
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-xxl-6 col-lg-12 col-md-6">
                                <div class="text-start text-md-end text-lg-start text-xxl-end mb-30">
                                    <a href="#0">Forgot Password?</a>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-12">
                                <div class="button-group d-flex justify-content-center flex-wrap">
                                    <button class="main-btn primary-btn btn-hover w-100 text-center" type="submit">
                                        Sign In
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </form>
                </div>
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
    </div>
    <script src="{{ asset("assets/js/bootstrap.bundle.min.js") }}"></script>
    <script src="{{ asset("assets/js/moment.min.js") }}"></script>
    <script src="{{ asset("assets/js/jvectormap.min.js") }}"></script>
    <script src="{{ asset("assets/js/world-merc.js") }}"></script>
    <script src="{{ asset("assets/js/polyfill.js") }}"></script>
    <script src="{{ asset("assets/js/main.js") }}"></script>
</body>
