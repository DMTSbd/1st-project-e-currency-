{{-- <!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html> --}}



<!DOCTYPE html>
<html lang="zxx">
    <head>
        <meta name="title" Content="Changey">
        <meta name="author" content="http://ideal.thesoftking.com/changey" />
        <meta property="og:image:type" content="image/jpeg" />
        <meta property="og:image:width" content="590" />
        <meta property="og:image:height" content="300" />


        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>   Home |   Changey  </title>
        <!-- favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/logo/favicon.png')}}" type="image/x-icon">

        <!-- bootstrap -->
        <link rel="stylesheet" href="{{asset('assets/front/css/bootstrap.min.css')}} ">
        <!-- fontawesome icon  -->
        <link rel="stylesheet" href="{{asset('assets/front/css/fontawesome.min.css')}} ">
        <!-- animate.css -->
        <link rel="stylesheet" href="{{asset('assets/front/css/animate.css')}} ">
        <!-- Owl Carousel -->
        <link rel="stylesheet" href="{{asset('assets/front/css/owl.carousel.min.css')}} ">
        <!-- magnific popup -->
        <link rel="stylesheet" href="{{asset('assets/front/css/magnific-popup.css')}} ">
        <!-- slick css -->
        <link rel="stylesheet" href="{{asset('assets/front/css/slick.min.css')}} ">
        <!-- stylesheet -->
        <link href="{{asset('assets/admin/css/toastr.min.css')}}" rel="stylesheet" />
        <link rel="stylesheet" href="{{asset('assets/front/css/style.css')}} ">
        {{-- <link rel="stylesheet" href="{{asset('assets/front/css/style.php?color=1B92B4&color2=000036')}}"> --}}
        <!-- responsive -->
        <link rel="stylesheet" href="{{asset('assets/front/css/responsive.css')}} ">
        <!-- jquery -->
        <script src="{{asset('assets/front/js/jquery-3.3.1.min.j')}}s "></script>

        <link rel="stylesheet" href="{{asset('assets/admin/css/sweetalert.css')}}">
        <link rel="stylesheet" href="{{asset('assets/admin/css/toastr.min.css')}}">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>

    <body>
        <div id="fb-root"></div>
        <script>
            (function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12&appId=205856110142667&autoLogAppEvents=1';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <!-- preloader begin-->
        <div class="preloader">
            <div class="loader">
                <hr>
                <hr>
            </div>
        </div>
        <!-- preloader end -->

        <!-- header begin-->
        <header class="header" style="background-color:cadetblue">
            <div class="container" >
                <div class="row">
                    <div class="col-xl-2 col-lg-2 d-xl-flex d-lg-flex align-items-center">
                        <div class="row">
                            <div class="col-6 col-xl-12 col-lg-12 d-flex d-xl-block d-lg-block align-items-center">
                                <div class="logo">
                                    <a href="http://ideal.thesoftking.com/changey">
                                        <img src=" http://ideal.thesoftking.com/changey/assets/images/logo/logo.png " alt="Changey">
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 d-block d-xl-none d-lg-none">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                    <i class="fas fa-bars"></i>
                                </button>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-10 col-lg-10" >
                        <div class="mainmenu">
                            <nav class="navbar navbar-expand-lg justify-content-center">
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav nav justify-content-end">


                                        <li class="nav-item">

                                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>

                                        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register </a></li>














                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header end -->


        <!-- domain begin-->
        <div class="domain" id="head_domain" style="padding-top:250px;padding-bottom:120px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <form action="http://ideal.thesoftking.com/changey/user/exchange" method="post">
                                <div class="col-md-12">
                                    <div class="row mt-5">
                                        <input type="hidden" name="_token" value="AbgfY9wLG4wVE3bKxOVWeQqVVCbATK6VYPGxATiK">                                    <div class="col-xl-12 col-lg-12">
                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label><h3> <i class="fa fa-arrow-down"></i> Send Us</h3> </label>
                                                        <select name="send_method_id" id="from_currency_id" class="form-control sendMethodCurrency form-control-lg prantoChange">
                                                            <option disabled selected>Select</option>
                                                            <option value="1" data-min="5.00" data-max="5000.00"> Payoneer USD</option>
                                                            <option value="3" data-min="25.00" data-max="1500000.00"> PayPal USD</option>
                                                            <option value="4" data-min="25.00" data-max="15000.00"> Payeer USD</option>
                                                            <option value="5" data-min="25.00" data-max="150000.00"> WebMoney USD</option>
                                                            <option value="6" data-min="25.00" data-max="50000.00"> NETELLER USD</option>
                                                            <option value="7" data-min="25.00" data-max="12500.00"> Skrill USD</option>
                                                            <option value="8" data-min="25.00" data-max="50000.00"> AdvCash USD</option>
                                                            <option value="9" data-min="25.00" data-max="15000.00"> BitCoin USD</option>
                                                            <option value="10" data-min="20.00" data-max="20000.00"> Etherium USD</option>
                                                            <option value="11" data-min="20.00" data-max="150000.00"> LiteCoin USD</option>
                                                            <option value="12" data-min="20.00" data-max="150000.00"> BitCoin Cash</option>
                                                            <option value="13" data-min="20.00" data-max="150000.00"> PayTM</option>
                                                            <option value="14" data-min="20.00" data-max="150000.00"> Mobile Banking</option>
                                                            <option value="15" data-min="50.00" data-max="500000.00"> Bank 001</option>
                                                        </select>

                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control form-control-lg" id="sendMan" name="send_amount" value="100">
                                                    </div>
                                                    <strong class="text-danger sendLimitAmo">Exchange Limit <span class="sendMinAmo"></span> - <span class="sendMaxAmo"></span></strong><br>

                                                </div>


                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6">

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label> <h3> <i class="fa fa-arrow-up"></i> You Receive </h3> </label>
                                                        <select name="receive_method_id" id="receive_currency_id" class="form-control  form-control-lg receiveMethodCurrency prantoReceiver">
                                                            <option disabled selected>Select</option>
                                                            <option value="1" data-reserve="3000"> Payoneer USD </option>
                                                            <option value="2" data-reserve="300000"> Perfect Money </option>
                                                            <option value="3" data-reserve="4454.67"> PayPal USD </option>
                                                            <option value="4" data-reserve="50000"> Payeer USD </option>
                                                            <option value="5" data-reserve="600000"> WebMoney USD </option>
                                                            <option value="6" data-reserve="50000"> NETELLER USD </option>
                                                            <option value="7" data-reserve="1524.56"> Skrill USD </option>
                                                            <option value="8" data-reserve="39900"> AdvCash USD </option>
                                                            <option value="9" data-reserve="50000"> BitCoin USD </option>
                                                            <option value="10" data-reserve="5000"> Etherium USD </option>
                                                            <option value="11" data-reserve="70000"> LiteCoin USD </option>
                                                            <option value="12" data-reserve="69911"> BitCoin Cash </option>
                                                            <option value="13" data-reserve="70000"> PayTM </option>
                                                            <option value="14" data-reserve="70000"> Mobile Banking </option>
                                                            <option value="15" data-reserve="1590000"> Bank 001 </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control  form-control-lg" name="receive_amount" id="receiveMan"  value="100" readonly>
                                                    </div>
                                                    <strong class="text-danger reserveMoney"> Reserve Amount : <span class="totalReserveAmo"></span></strong><br>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-12 text-center mt-2">
                                            <button type="submit" class="btn btn-info bnt-lg">Exchange</button>
                                        </div>

                                    </div>

                                </div>
                            </form>

                            <div class="col-md-12 mt-5">
                                <div class="card">
                                    <div class="card-header bg-info text-center">
                                        Our Reserve        </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4" style="margin-bottom:20px;">
                                                <img class="img-circle img-bordered float-left"
                                                     src="http://ideal.thesoftking.com/changey/assets/images/currency/currency_1553167225.jpg" style="height:42px;width:42px;"
                                                     alt="*">
                                                <span class="float-left" style="margin-left:10px;">
                                                    <span style="font-size:15px;font-weight:bold;"> Payoneer USD </span>
                                                    <br>
                                                    <span class="text-muted">3000</span>
                                                </span>
                                            </div>
                                            <div class="col-md-4" style="margin-bottom:20px;">
                                                <img class="img-circle img-bordered float-left"
                                                     src="http://ideal.thesoftking.com/changey/assets/images/currency/currency_1553166867.jpg" style="height:42px;width:42px;"
                                                     alt="*">
                                                <span class="float-left" style="margin-left:10px;">
                                                    <span style="font-size:15px;font-weight:bold;"> Perfect Money </span>
                                                    <br>
                                                    <span class="text-muted">300000</span>
                                                </span>
                                            </div>
                                            <div class="col-md-4" style="margin-bottom:20px;">
                                                <img class="img-circle img-bordered float-left"
                                                     src="http://ideal.thesoftking.com/changey/assets/images/currency/currency_1553167371.jpg" style="height:42px;width:42px;"
                                                     alt="*">
                                                <span class="float-left" style="margin-left:10px;">
                                                    <span style="font-size:15px;font-weight:bold;"> PayPal USD </span>
                                                    <br>
                                                    <span class="text-muted">4454.67</span>
                                                </span>
                                            </div>
                                            <div class="col-md-4" style="margin-bottom:20px;">
                                                <img class="img-circle img-bordered float-left"
                                                     src="http://ideal.thesoftking.com/changey/assets/images/currency/currency_1553167471.jpg" style="height:42px;width:42px;"
                                                     alt="*">
                                                <span class="float-left" style="margin-left:10px;">
                                                    <span style="font-size:15px;font-weight:bold;"> Payeer USD </span>
                                                    <br>
                                                    <span class="text-muted">50000</span>
                                                </span>
                                            </div>
                                            <div class="col-md-4" style="margin-bottom:20px;">
                                                <img class="img-circle img-bordered float-left"
                                                     src="http://ideal.thesoftking.com/changey/assets/images/currency/currency_1553167554.jpg" style="height:42px;width:42px;"
                                                     alt="*">
                                                <span class="float-left" style="margin-left:10px;">
                                                    <span style="font-size:15px;font-weight:bold;"> WebMoney USD </span>
                                                    <br>
                                                    <span class="text-muted">600000</span>
                                                </span>
                                            </div>
                                            <div class="col-md-4" style="margin-bottom:20px;">
                                                <img class="img-circle img-bordered float-left"
                                                     src="http://ideal.thesoftking.com/changey/assets/images/currency/currency_1553168384.jpg" style="height:42px;width:42px;"
                                                     alt="*">
                                                <span class="float-left" style="margin-left:10px;">
                                                    <span style="font-size:15px;font-weight:bold;"> NETELLER USD </span>
                                                    <br>
                                                    <span class="text-muted">50000</span>
                                                </span>
                                            </div>
                                            <div class="col-md-4" style="margin-bottom:20px;">
                                                <img class="img-circle img-bordered float-left"
                                                     src="http://ideal.thesoftking.com/changey/assets/images/currency/currency_1553168453.jpg" style="height:42px;width:42px;"
                                                     alt="*">
                                                <span class="float-left" style="margin-left:10px;">
                                                    <span style="font-size:15px;font-weight:bold;"> Skrill USD </span>
                                                    <br>
                                                    <span class="text-muted">1524.56</span>
                                                </span>
                                            </div>
                                            <div class="col-md-4" style="margin-bottom:20px;">
                                                <img class="img-circle img-bordered float-left"
                                                     src="http://ideal.thesoftking.com/changey/assets/images/currency/currency_1553168535.jpg" style="height:42px;width:42px;"
                                                     alt="*">
                                                <span class="float-left" style="margin-left:10px;">
                                                    <span style="font-size:15px;font-weight:bold;"> AdvCash USD </span>
                                                    <br>
                                                    <span class="text-muted">39900</span>
                                                </span>
                                            </div>
                                            <div class="col-md-4" style="margin-bottom:20px;">
                                                <img class="img-circle img-bordered float-left"
                                                     src="http://ideal.thesoftking.com/changey/assets/images/currency/currency_1553168648.jpg" style="height:42px;width:42px;"
                                                     alt="*">
                                                <span class="float-left" style="margin-left:10px;">
                                                    <span style="font-size:15px;font-weight:bold;"> BitCoin USD </span>
                                                    <br>
                                                    <span class="text-muted">50000</span>
                                                </span>
                                            </div>
                                            <div class="col-md-4" style="margin-bottom:20px;">
                                                <img class="img-circle img-bordered float-left"
                                                     src="http://ideal.thesoftking.com/changey/assets/images/currency/currency_1553168758.jpg" style="height:42px;width:42px;"
                                                     alt="*">
                                                <span class="float-left" style="margin-left:10px;">
                                                    <span style="font-size:15px;font-weight:bold;"> Etherium USD </span>
                                                    <br>
                                                    <span class="text-muted">5000</span>
                                                </span>
                                            </div>
                                            <div class="col-md-4" style="margin-bottom:20px;">
                                                <img class="img-circle img-bordered float-left"
                                                     src="http://ideal.thesoftking.com/changey/assets/images/currency/currency_1553168908.jpg" style="height:42px;width:42px;"
                                                     alt="*">
                                                <span class="float-left" style="margin-left:10px;">
                                                    <span style="font-size:15px;font-weight:bold;"> LiteCoin USD </span>
                                                    <br>
                                                    <span class="text-muted">70000</span>
                                                </span>
                                            </div>
                                            <div class="col-md-4" style="margin-bottom:20px;">
                                                <img class="img-circle img-bordered float-left"
                                                     src="http://ideal.thesoftking.com/changey/assets/images/currency/currency_1553169056.jpg" style="height:42px;width:42px;"
                                                     alt="*">
                                                <span class="float-left" style="margin-left:10px;">
                                                    <span style="font-size:15px;font-weight:bold;"> BitCoin Cash </span>
                                                    <br>
                                                    <span class="text-muted">69911</span>
                                                </span>
                                            </div>
                                            <div class="col-md-4" style="margin-bottom:20px;">
                                                <img class="img-circle img-bordered float-left"
                                                     src="http://ideal.thesoftking.com/changey/assets/images/currency/currency_1553169104.jpg" style="height:42px;width:42px;"
                                                     alt="*">
                                                <span class="float-left" style="margin-left:10px;">
                                                    <span style="font-size:15px;font-weight:bold;"> PayTM </span>
                                                    <br>
                                                    <span class="text-muted">70000</span>
                                                </span>
                                            </div>
                                            <div class="col-md-4" style="margin-bottom:20px;">
                                                <img class="img-circle img-bordered float-left"
                                                     src="http://ideal.thesoftking.com/changey/assets/images/currency/currency_1553169186.jpg" style="height:42px;width:42px;"
                                                     alt="*">
                                                <span class="float-left" style="margin-left:10px;">
                                                    <span style="font-size:15px;font-weight:bold;"> Mobile Banking </span>
                                                    <br>
                                                    <span class="text-muted">70000</span>
                                                </span>
                                            </div>
                                            <div class="col-md-4" style="margin-bottom:20px;">
                                                <img class="img-circle img-bordered float-left"
                                                     src="http://ideal.thesoftking.com/changey/assets/images/currency/currency_1554995987.jpg" style="height:42px;width:42px;"
                                                     alt="*">
                                                <span class="float-left" style="margin-left:10px;">
                                                    <span style="font-size:15px;font-weight:bold;"> Bank 001 </span>
                                                    <br>
                                                    <span class="text-muted">1590000</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mt-4">
                        <div class="card">
                            <div class="card-header bg-info text-white text-center">
                                Todays Rate        </div>
                            <div class="card-body" style="padding: 0 !important;">

                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">Currency</th>
                                            <th scope="col">Buy At</th>
                                            <th scope="col">Sell At</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Payoneer USD</td>
                                            <td>71 INR </td>
                                            <td>76 INR </td>
                                        </tr>
                                        <tr>
                                            <td>PayPal USD</td>
                                            <td>68 INR </td>
                                            <td>75 INR </td>
                                        </tr>
                                        <tr>
                                            <td>Payeer USD</td>
                                            <td>74 INR </td>
                                            <td>81 INR </td>
                                        </tr>
                                        <tr>
                                            <td>WebMoney USD</td>
                                            <td>66 INR </td>
                                            <td>76 INR </td>
                                        </tr>
                                        <tr>
                                            <td>NETELLER USD</td>
                                            <td>50 INR </td>
                                            <td>63 INR </td>
                                        </tr>
                                        <tr>
                                            <td>Skrill USD</td>
                                            <td>72 INR </td>
                                            <td>77 INR </td>
                                        </tr>
                                        <tr>
                                            <td>AdvCash USD</td>
                                            <td>82 INR </td>
                                            <td>82 INR </td>
                                        </tr>
                                        <tr>
                                            <td>BitCoin USD</td>
                                            <td>75 INR </td>
                                            <td>90 INR </td>
                                        </tr>
                                        <tr>
                                            <td>Etherium USD</td>
                                            <td>79 INR </td>
                                            <td>59 INR </td>
                                        </tr>
                                        <tr>
                                            <td>LiteCoin USD</td>
                                            <td>74 INR </td>
                                            <td>89 INR </td>
                                        </tr>
                                        <tr>
                                            <td>BitCoin Cash</td>
                                            <td>82 INR </td>
                                            <td>82 INR </td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>            </div>
            </div>
        </div>
        <!-- domain end -->




        <!-- dedicated plan begin-->
        <div class="dedicated-plan">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-8 text-center">
                        <div class="section-title">
                            <h2><span> Pending Orders  </span></h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="plan-table">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">USERNAME </th>
                                        <th scope="col">SENT </th>
                                        <th scope="col">RECEIVE </th>
                                        <th scope="col">AMOUNT </th>
                                        <th scope="col">STATUS </th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <th scope="row">admin</th>
                                        <td>BitCoin USD</td>
                                        <td>Perfect Money</td>
                                        <td>100  <i class="fas fa-exchange-alt"></i>  96.15</td>
                                        <td><i class="fa fa-spinner"></i> Processing </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">admin</th>
                                        <td>Bank 001</td>
                                        <td>NETELLER USD</td>
                                        <td>100  <i class="fas fa-exchange-alt"></i>  1.59</td>
                                        <td><i class="fa fa-spinner"></i> Processing </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">mkcoinlord</th>
                                        <td>Payoneer USD</td>
                                        <td>PayPal USD</td>
                                        <td>100  <i class="fas fa-exchange-alt"></i>  94.67</td>
                                        <td><i class="fa fa-spinner"></i> Processing </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">admin</th>
                                        <td>Payoneer USD</td>
                                        <td>Perfect Money</td>
                                        <td>100  <i class="fas fa-exchange-alt"></i>  91.03</td>
                                        <td><i class="fa fa-spinner"></i> Processing </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">zannatul</th>
                                        <td>Payoneer USD</td>
                                        <td>Perfect Money</td>
                                        <td>100  <i class="fas fa-exchange-alt"></i>  91.03</td>
                                        <td><i class="fa fa-spinner"></i> Processing </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">feifeixp</th>
                                        <td>PayPal USD</td>
                                        <td>NETELLER USD</td>
                                        <td>100  <i class="fas fa-exchange-alt"></i>  107.94</td>
                                        <td><i class="fa fa-spinner"></i> Processing </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">alamin99</th>
                                        <td>Payoneer USD</td>
                                        <td>Mobile Banking</td>
                                        <td>100  <i class="fas fa-exchange-alt"></i>  7100</td>
                                        <td><i class="fa fa-spinner"></i> Processing </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">yayankurniawan</th>
                                        <td>PayPal USD</td>
                                        <td>Bank 001</td>
                                        <td>100  <i class="fas fa-exchange-alt"></i>  6800</td>
                                        <td><i class="fa fa-spinner"></i> Processing </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">socialarmy</th>
                                        <td>PayTM</td>
                                        <td>Perfect Money</td>
                                        <td>100  <i class="fas fa-exchange-alt"></i>  1.28</td>
                                        <td><i class="fa fa-spinner"></i> Processing </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">mo2yasser</th>
                                        <td>BitCoin Cash</td>
                                        <td>Payoneer USD</td>
                                        <td>100  <i class="fas fa-exchange-alt"></i>  101.89</td>
                                        <td><i class="fa fa-spinner"></i> Processing </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                        <div class="plan-buttons">
                            <a href="http://ideal.thesoftking.com/changey/pending-orders" target="_blank">View All </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- dedicated plan end -->




        <!-- dedicated plan begin-->
        <div class="dedicated-plan" style="background-color: #f7fbff;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-8 text-center">
                        <div class="section-title">
                            <h2><span> Completed Exchanges  </span></h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="plan-table">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">USERNAME </th>
                                        <th scope="col">SENT </th>
                                        <th scope="col">RECEIVE </th>
                                        <th scope="col">AMOUNT </th>
                                        <th scope="col">STATUS </th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <th scope="row">ronnie</th>
                                        <td>AdvCash USD</td>
                                        <td>BitCoin Cash</td>
                                        <td>100  <i class="fas fa-exchange-alt"></i>  89</td>
                                        <td><i class="fa fa-check"></i> Completed </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">ronnie</th>
                                        <td>AdvCash USD</td>
                                        <td>BitCoin Cash</td>
                                        <td>100  <i class="fas fa-exchange-alt"></i>  89</td>
                                        <td><i class="fa fa-check"></i> Completed </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">ccccccccc</th>
                                        <td>AdvCash USD</td>
                                        <td>AdvCash USD</td>
                                        <td>50  <i class="fas fa-exchange-alt"></i>  37</td>
                                        <td><i class="fa fa-check"></i> Completed </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">ccccccccc</th>
                                        <td>AdvCash USD</td>
                                        <td>AdvCash USD</td>
                                        <td>100  <i class="fas fa-exchange-alt"></i>  85</td>
                                        <td><i class="fa fa-check"></i> Completed </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">ccccccccc</th>
                                        <td>AdvCash USD</td>
                                        <td>BitCoin Cash</td>
                                        <td>100  <i class="fas fa-exchange-alt"></i>  89</td>
                                        <td><i class="fa fa-check"></i> Completed </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">ccccccccc</th>
                                        <td>AdvCash USD</td>
                                        <td>BitCoin Cash</td>
                                        <td>100  <i class="fas fa-exchange-alt"></i>  89</td>
                                        <td><i class="fa fa-check"></i> Completed </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">ronnie</th>
                                        <td>AdvCash USD</td>
                                        <td>AdvCash USD</td>
                                        <td>100  <i class="fas fa-exchange-alt"></i>  85</td>
                                        <td><i class="fa fa-check"></i> Completed </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">ronnie</th>
                                        <td>AdvCash USD</td>
                                        <td>BitCoin Cash</td>
                                        <td>100  <i class="fas fa-exchange-alt"></i>  89</td>
                                        <td><i class="fa fa-check"></i> Completed </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">ronnie</th>
                                        <td>AdvCash USD</td>
                                        <td>BitCoin Cash</td>
                                        <td>100  <i class="fas fa-exchange-alt"></i>  89</td>
                                        <td><i class="fa fa-check"></i> Completed </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">ronnie</th>
                                        <td>AdvCash USD</td>
                                        <td>BitCoin Cash</td>
                                        <td>100  <i class="fas fa-exchange-alt"></i>  89</td>
                                        <td><i class="fa fa-check"></i> Completed </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                        <div class="plan-buttons">
                            <a href="http://ideal.thesoftking.com/changey/completed-exchange" target="_blank">View All </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- dedicated plan end -->



        <!-- testimonial begin-->
        <div class="testimonial" style="background-color:#fff">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-8 text-center">
                        <div class="section-title">
                            <h4>We care about our customers &amp; respect their Opinions</h4>
                            <h2>Testimonials</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="testimonial-slider">
                            <div class="single-testimonial">
                                <div class="d-flex">
                                    <div class="part-img">
                                        <img src=" http://ideal.thesoftking.com/changey/assets/images/testimonial/testimonial_1551613500.jpg " alt="">
                                    </div>
                                    <div class="part-info">
                                        <h3>William Hannah</h3>
                                        <h4> founder, themes llc.</h4>
                                    </div>
                                </div>
                                <div class="part-text">
                                    <p>“Suffered are many variation of passages  lorem availle there on alterati of some form by the injected for users.”</p>
                                </div>
                            </div>
                            <div class="single-testimonial">
                                <div class="d-flex">
                                    <div class="part-img">
                                        <img src=" http://ideal.thesoftking.com/changey/assets/images/testimonial/testimonial_1551613486.jpg " alt="">
                                    </div>
                                    <div class="part-info">
                                        <h3>Neque porro</h3>
                                        <h4> Fonder, Zigzag co</h4>
                                    </div>
                                </div>
                                <div class="part-text">
                                    <p>“Suffered are many variation of passages  lorem availle there on alterati of some form by the injected for users.”</p>
                                </div>
                            </div>
                            <div class="single-testimonial">
                                <div class="d-flex">
                                    <div class="part-img">
                                        <img src=" http://ideal.thesoftking.com/changey/assets/images/testimonial/testimonial_1551615102.jpg " alt="">
                                    </div>
                                    <div class="part-info">
                                        <h3>S A Pratik</h3>
                                        <h4> Manager</h4>
                                    </div>
                                </div>
                                <div class="part-text">
                                    <p>“Suffered are many variation of passages  lorem availle there on alterati of some form by the injected for users.”</p>
                                </div>
                            </div>
                            <div class="single-testimonial">
                                <div class="d-flex">
                                    <div class="part-img">
                                        <img src=" http://ideal.thesoftking.com/changey/assets/images/testimonial/testimonial_1551613529.jpg " alt="">
                                    </div>
                                    <div class="part-info">
                                        <h3>Ronnie Area</h3>
                                        <h4> CEO</h4>
                                    </div>
                                </div>
                                <div class="part-text">
                                    <p>“Suffered are many variation of passages  lorem availle there on alterati of some form by the injected for users.”</p>
                                </div>
                            </div>
                            <div class="single-testimonial">
                                <div class="d-flex">
                                    <div class="part-img">
                                        <img src=" http://ideal.thesoftking.com/changey/assets/images/testimonial/testimonial_1543142169.jpg " alt="">
                                    </div>
                                    <div class="part-info">
                                        <h3>Pranto Roy</h3>
                                        <h4> Developer</h4>
                                    </div>
                                </div>
                                <div class="part-text">
                                    <p>“Suffered are many variation of passages  lorem availle there on alterati of some form by the injected for users.”</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- testimonial end -->






        <!-- blog begin-->
        <div class="blog-post" style="background-color:#f7fbff;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-8 text-center">
                        <div class="section-title">
                            <h2>Latest Blog</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-blog">
                            <div class="part-img">
                                <img src="http://ideal.thesoftking.com/changey/assets/images/post/post_thumb1550128400.jpg" alt="It is a long established fact that a reader will be distracted">
                            </div>
                            <div class="part-text">
                                <h3><a href="http://ideal.thesoftking.com/changey/details/2/it-is-a-long-established-fact-that-a-reader-will-be-distracted">It is a long established fact that a reader will be distract...</a></h3>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page whe...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-blog">
                            <div class="part-img">
                                <img src="http://ideal.thesoftking.com/changey/assets/images/post/post_thumb1550128633.jpg" alt="labore et dolore magna aliqua Ut enim ad minim veniam">
                            </div>
                            <div class="part-text">
                                <h3><a href="http://ideal.thesoftking.com/changey/details/10/labore-et-dolore-magna-aliqua-ut-enim-ad-minim-veniam">labore et dolore magna aliqua Ut enim ad minim veniam</a></h3>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page whe...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-blog">
                            <div class="part-img">
                                <img src="http://ideal.thesoftking.com/changey/assets/images/post/post_thumb1550128621.jpg" alt="There is no one who loves pain itself, who seeks after it and wants to have it,">
                            </div>
                            <div class="part-text">
                                <h3><a href="http://ideal.thesoftking.com/changey/details/9/there-is-no-one-who-loves-pain-itself-who-seeks-after-it-and-wants-to-have-it">There is no one who loves pain itself, who seeks after it an...</a></h3>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page whe...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- blog end -->

        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="about-hoster">
                            <img src="http://ideal.thesoftking.com/changey/assets/images/logo/logo.png" alt="Changey">
                            <p>Easy and Fast eCurrency Exchange</p>
                            <div class="social">
                                <a href="https://www.facebook.com/thesoftking" target="_blank">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="http://thesoftking.com/contact#asda" target="_blank">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="http://thesoftking.com/contact#asda" target="_blank">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 offset-xl-1 offset-lg-1 col-md-6 offset-md-0">
                        <div class="usefull-link">
                            <h3>Useful Links</h3>
                            <ul>
                                <li><a href="http://ideal.thesoftking.com/changey">Home</a></li>
                                <li><a href="http://ideal.thesoftking.com/changey/about-us">About Us</a></li>
                                <li><a href="http://ideal.thesoftking.com/changey/blog">Blog</a></li>
                                <li><a href="http://ideal.thesoftking.com/changey/faqs">FAQS</a></li>
                                <li><a href="http://ideal.thesoftking.com/changey/contact-us">Contact</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="contact-hoster">
                            <h3>Contact Us</h3>
                            <ul>
                                <li>Company Address</li>
                                <li>support@thesoftking.com</li>
                                <li>+88-0100-44-22-00</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6">
                        <div class="copyright">
                            <p>Changey © 2019. All Rights Reserved. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer end -->




        <script src="{{asset('assets/front/js/jquery-3.3.1.min.js')}} "></script>
        <!-- bootstrap -->
        <script src="{{asset('assets/front/js/bootstrap.min.js')}} "></script>


        <script src="{{asset('assets/front/js/jquery-migrate-3.0.1.js')}} "></script>
        <!-- owl carousel -->
        <script src=" {{asset('assets/front/js/owl.carousel.js')}} "></script>
        <!-- magnific popup -->
        <script src="{{asset('assets/front/js/jquery.magnific-popup.js')}} "></script>
        <!-- way poin js-->
        <script src="{{asset('assets/front/js/waypoints.min.js')}} "></script>
        <!-- slick js -->
        <script src="{{asset('assets/front/js/slick.min.js')}} "></script>
        <!-- progress js -->
        <script src="{{asset('assets/front/js/jquery-asPieProgress.min.js')}} "></script>
        <script src="{{asset('assets/admin/js/toastr.min.js')}} "></script>


        <script src="{{asset('assets/admin/js/sweetalert.js')}}"></script>
        <!-- wow js-->
        <script src="{{asset('assets/front/js/wow.min.js')}} "></script>
        <!-- main -->
        <script src="{{asset('assets/front/js/main.js')}} "></script>
        <script type="text/javascript">
            $(document).ready(function () {

                var senderId = $(".prantoChange").val();
                var receiverId = $(".prantoReceiver").val();
                var sendingAmount = $("#sendMan").val();
                $('.sendLimitAmo').hide();
                $('.reserveMoney').hide();


                $('.prantoChange').on('change', function () {
                    var senderId = $(".prantoChange").val();
                    var receiverId = $(".prantoReceiver").val();
                    var sendingAmount = $("#sendMan").val();

                    var sendMaxAmo = $('.sendMethodCurrency option:selected').data('max');
                    var sendMinAmo = $('.sendMethodCurrency option:selected').data('min');

                    $('.sendMaxAmo').text(sendMaxAmo);
                    $('.sendMinAmo').text(sendMinAmo);
                    $('.sendLimitAmo').show();




                    ajaxReq(senderId, receiverId, sendingAmount);
                });


                $('.prantoReceiver').on('change', function () {
                    var senderId = $(".prantoChange").val();
                    var receiverId = $(".prantoReceiver").val();
                    var sendingAmount = $("#sendMan").val();


                    var totalReserveAmo = $('.receiveMethodCurrency option:selected').data('reserve');

                    $('.totalReserveAmo').text(totalReserveAmo);
                    $('.reserveMoney').show();


                    ajaxReq(senderId, receiverId, sendingAmount);
                });



                $('#sendMan').keyup(function () {

                    var senderId = $(".prantoChange").val();
                    var receiverId = $(".prantoReceiver").val();
                    var sendingAmount = $("#sendMan").val();
                    if ($(this).val() > 0) {
                        ajaxReq(senderId, receiverId, sendingAmount);
                    } else {
                        alert('Please Insert Valid Number')
                        $('#sendMan').val(1)

                        var senderId = $(".prantoChange").val();
                        var receiverId = $(".prantoReceiver").val();
                        var sendingAmount = $("#sendMan").val();
                        ajaxReq(senderId, receiverId, sendingAmount);
                    }
                });

                function ajaxReq(senderId, receiverId, sendingAmount) {
                    $.ajax({
                        url: "http://ideal.thesoftking.com/changey/get/rate",
                        type: "get",
                        data: {
                            'senderId': senderId,
                            'receiverId': receiverId,
                            'sendingAmount': sendingAmount,

                        },
                        success: function (response) {
                            $('#receiveMan').val(response)
                        }
                    });
                }



            });
        </script>







    </body>

</html>
