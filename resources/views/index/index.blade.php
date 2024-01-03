

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="author" content="templatemo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    

    <title>SnapX Photography by TemplateMo</title>

    <!-- Bootstrap core CSS -->
    


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-snapx-photography.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 576 SnapX Photography

https://templatemo.com/tm-576-snapx-photography

-->

<style>
    main.gallery {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        padding: 20px;
    }

    .performance {
        width: 48%;
        margin-bottom: 20px;
        border: 3px solid #3498db; /* Цвят на рамката */
        background-color: #aed6f1;
        padding: 10px;
        border-radius: 15px; /* Заоблете крайщата на прозореца */
        overflow: hidden; /* Скрийте част от известната част */
    }

    .performance img {
        width: 100%;
        height: auto;
        margin-bottom: 10px;
    }

    .performance h3{
      color: # 000000; 
      background-color: #CEE8F7;
      border-radius: 15px;
      padding: 10px;
      font-family: Verdana;
    }
    .performance p {
        background-color: #aed6f1; /* Цвят на фона на текста */
        padding: 5px; /* Добавете подходящ вътрешен паддинг */
        font-family: sans-serif; /* Заменете 'Your Chosen Font' със стойността на предпочитания от вас шрифт */
        color: # 000000; 
    }

    .additional-info {
        white-space: pre-line;
    }

</style>

  </head>

<body>


  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                  
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                    <img src="assets/images/image1.png" alt="Teater" style="width: 80px; height: auto;">
                    </a>
                    <!-- ***** Logo End ***** -->

                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="index.html" class="active">Система за Театрални постановки </a></li>
                        
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <!-- <div id="modal" class="popupContainer" style="display:none;">
    <div class="popupHeader">
        <span class="header_title">Login</span>
        <span class="modal_close"><i class="fa fa-times"></i></span>
    </div> -->

    <!-- <section class="popupBody"> -->
        <!-- Social Login -->
        <!-- <div class="social_login">
            <div class="">
                <a href="#" class="social_box fb">
                    <span class="icon"><i class="fab fa-facebook"></i></span>
                    <span class="icon_title">Connect with Facebook</span>

                </a>

                <a href="#" class="social_box google">
                    <span class="icon"><i class="fab fa-google-plus"></i></span>
                    <span class="icon_title">Connect with Google</span>
                </a>
            </div>

            <div class="centeredText">
                <span>Or use your Email address</span>
            </div>

            <div class="action_btns">
                <div class="one_half"><a href="#" id="login_form" class="btn">Login</a></div>
                <div class="one_half last"><a href="#" id="register_form" class="btn">Sign up</a></div>
            </div>
        </div>

        Username & Password Login form
        <div class="user_login">
            <form action="" method="post">
                <label>Email / Username</label>
                <input name="username" type="text" id="username" />
              <br />

                <label>Password</label>
                <input name="password" type="password" id="password" />
              <br />

                <div class="checkbox">
                    <input id="remember" type="checkbox" />
                    <label for="remember">Remember me on this computer</label>
                </div>

                <div class="action_btns">
                    <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
                    <div class="one_half last"><button type="submit" class="btn btn_red">Login</button></div>
                </div>
            </form>

            <a href="#" class="forgot_password">Forgot password?</a>
        </div>

        Register Form
        <div class="user_register">
            <form action="" method="post">
                <label>Username</label>
                <input name="username" type="text" id="username" />
                <br />

                <label>Email Address</label>
                <input name="email" type="email" id="email" />
                <br />

                <label>Password</label>
                <input name="password" type="password" id="password" />
                <br />

                <div class="checkbox">
                    <input id="send_updates" type="checkbox" />
                    <label for="send_updates">Send me occasional email updates</label>
                </div>

                <div class="action_btns">
                    <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
                    <div class="one_half last"><button type="submit" class="btn btn_red">Register</button></div>
                </div>
            </form>
        </div>
        
    </section>
  </div>

  <!-- ***** Main Banner Area Start ***** -->
  <div class="main-banner" style="background-image: url('assets/images/image3.jpg'); opacity: 0.7;">
  <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <div class="header-text">
            <h2>Добре дошли <em> в света</em> </h2>
            <h2> на</h2>
            <h2> <em>Театъра</em></h2>
          </div>
        </div>
    </div>
</div>
  </div> -->
  <!-- ***** Main Banner Area End ***** -->

  <main class="gallery">
    @foreach($latestPerformances as $performance)
        <div class="performance">
        <img src="{{ asset('storage/teaterperformances/' . $performance->image) }}" alt="{{ $performance->name }}">
          <h3>{{ $performance->name }}</h3>
            <p><strong>Date:</strong> <br>{{ $performance->date }}</p>
            <p><strong>Venue:</strong> <br>{{ $performance->venue }}</p>
            <p><strong>Ticket:</strong><br> {{ $performance->bilety }}</p>
            <div class="performance-content">
                <p><strong>Additional Info:</strong><br> {{ $performance->additional_info }}</p>
            </div>
        </div>
    @endforeach
</main>

    <footer>

    </footer>
  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <!-- <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>

  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script> -->

  </body>
</html>