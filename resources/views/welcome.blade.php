<!DOCTYPE html>
<html lang="en">
<head>

     <title>Ambeso Coffee Shop Member {{ $title }}</title>
<!-- 

Get Ready Template

https://templatemo.com/tm-521-get-ready

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="team" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href=" {{ asset('AmbesoLP') }}/css/bootstrap.min.css">
     <link rel="stylesheet" href=" {{ asset('AmbesoLP') }}/css/vegas.min.css">
     <link rel="stylesheet" href=" {{ asset('AmbesoLP') }}/css/font-awesome.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="{{ asset('AmbesoLP') }}/css/templatemo-style.css">

</head>
<body>

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- GRID LINE
    <section class="grid">
         <div class="container">
            <div class="row">

              <div class="col-md-2 col-sm-2">
                <div class="grid-line"></div>
              </div>
              <div class="col-md-2 col-sm-2">
                <div class="grid-line"></div>
              </div>
              <div class="col-md-2 col-sm-2">
                <div class="grid-line"></div>
              </div>
              <div class="col-md-2 col-sm-2">
                <div class="grid-line"></div>
              </div>
              <div class="col-md-2 col-sm-2">
                <div class="grid-line"></div>
              </div>

            </div>
         </div>
    </section> -->


    <div class="menu-bg"></div>
    <div class="menu-burger"> ☰</div>

    <div class="menu-items">
       <div class="container">
         <div class="row">
           <div class="col-md-offset-2 col-md-4 col-sm-6">
            <h1>Navigations</h1>
             <ul class="menu">
                <li><a href="">Home</a></li>
                <li><a href="/Admin-Login">Admin Login</a></li>
                <!-- <li><a href="#">Our Studio</a></li>
                <li><a href="#">Journal</a></li>
                <li><a href="#">Start a project</a></li>
                <li><a href="#">Email Us</a></li> -->
            </ul>
           </div>

           <div class="col-md-4 col-sm-6">
             <address>
               <h1>Our Coffee Shop</h1>
               <p>Jl. Toddopuli 7 No.23, Borong,<br> Kec. Manggala, Kota Makassar, Sulawesi Selatan 90233</p>
               <div class="google-map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15894.468138764832!2d119.4545626!3d-5.1651493!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xedbc413f76ed576!2sAmbeso%20Coffee%20Shop!5e0!3m2!1sid!2sid!4v1629465981309!5m2!1sid!2sid" allowfullscreen></iframe>
               </div>
             </address>
           </div> 

           <div class="col-md-12 col-sm-12">
             <ul class="social-icon">
              <li class="line"></li>
               <li><a href="https://www.facebook.com/AmbesoCoffeeshop/" class="fa fa-facebook"></a></li>
               <li><a href="https://www.instagram.com/ambesocoffeeshop/?hl=id" class="fa fa-instagram"></a></li>
               <li><a href="http://ambeso.id/" class="fa fa-wordpress"></a></li>
               <li><a href="https://gofood.co.id/bahasa/makassar/restaurant/ambeso-coffee-shop-toddopuli-7-d738e829-4f9c-4dd0-91ed-fcd1f166fef6" class="fa fa-shopping-basket"></a></li>
             </ul>
           </div>
         </div>
       </div>
    </div>


     <!-- HOME -->
     <section id="home">
        <div class="overlay"></div>
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="home-info">
                              <img class="lnXdpd" alt="Ambeso Coffee Shop" height="92" src="{{ asset('AmbesoLP') }}/images/Ambeso-White.png" width="272" data-atf="1" data-frt="0">
                              <h1>Member Pass</h1>
                              <!-- You can change the date time in init.js file -->
                              <!-- <ul class="countdown">
                                   <li>
                                        <span class="days">14</span>
                                        <h3>Days</h3>
                                   </li>
                                   <li>
                                        <span class="hours">10</span>
                                        <h3>hours</h3>
                                   </li>
                                   <li>
                                        <span class="minutes">15</span>
                                        <h3>minutes</h3>
                                   </li>
                                   <li>
                                        <span class="seconds">34</span>
                                        <h3>seconds</h3>
                                   </li>     
                              </ul> -->
                              <div class="subscribe-form">
                                <form action="/postlogin" method="POST">
                                  {{ csrf_field() }}
                                  <input type="PN" name="PN" class="form-control" placeholder="Enter your Phone Number" required="">
                                  <button type="button" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-search"></i>
                                    {{-- <script>
                                    function myFunction(){
                                    let person = prompt("Please enter your PIN");
                                    let text;
                                    if (person == null || person == "") {
                                      text = "User cancelled the prompt.";
                                    } 
                                    else {
                                      text = "Hello " + person + "! How are you today?";
                                    }
                                    }
                                    </script> --}}
                                    </button>
                                </form>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </section>

     <!-- Modal -->
<form action="/postlogin" method="POST">
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Masukkan PIN Anda</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="PIN anda">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </div>
  </div>
</form>

     <!-- SCRIPTS -->
     <script src="{{ asset('AmbesoLP') }}/js/jquery.js"></script>
     <script src="{{ asset('AmbesoLP') }}/js/bootstrap.min.js"></script>
     <script src="{{ asset('AmbesoLP') }}/js/vegas.min.js"></script>
     <script src="{{ asset('AmbesoLP') }}/js/countdown.js"></script>
     <script src="{{ asset('AmbesoLP') }}/js/init.js"></script>
     <script src="{{ asset('AmbesoLP') }}/js/custom.js"></script>

</body>
</html>