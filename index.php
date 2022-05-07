<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">


    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700" rel="stylesheet">

    <!-- JS/JQUERY -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
    <script type="text/javascript" src="animatescroll.js"></script>
    <script type="text/javascript">
      $(function () {
        $(document).scroll(function () {
          var $nav = $(".navbar");
          var $logoNav = $(".logo-nav");
          $nav.toggleClass('scrolled',$(this).scrollTop() > $nav.height());
          $logoNav.toggleClass('scrolled', $(this).scrollTop()>$nav.height()); 
        });

        $('#form1').submit(function(e){
  
            e.preventDefault(); // Prevent Default Submission
          
            $.ajax({
               url: 'insert.php',
               type: 'POST',
               data: $(this).serialize(), // it will serialize the form data
                      dataType: 'html'
                  });
          });
        
      });
    </script>

    <title>Mack Studios</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-md fixed-top">
      <a href="#" class="nav-logo-a" onclick="$('#home-con').animatescroll();" href="#"><img src="img/logo.png" class="logo-nav img-fluid"></a>
        <div class="mobShow">
          <h1 class="he11">MACK Studios</h1>
        </div>
        <a class="navbar-toggler" data-toggle="collapse" data-target="#nav-coll" aria-controls="nav-coll" aria-expanded="false" aria-label="Toggle navigation">
             &#9776
          </a>
      <div class="collapse navbar-collapse" id="nav-coll">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" onclick="$('#services-con').animatescroll();$('.navbar-collapse').collapse('hide');" href="#" >SERVICES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" onclick="$('#why-con').animatescroll();$('.navbar-collapse').collapse('hide');" href="#">ABOUT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" onclick="$('#port-con').animatescroll();$('.navbar-collapse').collapse('hide');" href="#">PORTFOLIO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" onclick="$('#contact-con').animatescroll();$('.navbar-collapse').collapse('hide');" href="#">CONTACT</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container-fluid con1 con-bg" id="home-con">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <h1 class="he1">
            Creating brands beyond the ordianry.
          </h1>
          <p class="p1">
            We are a group of professionally-talented individuals, providing services in web development, graphics and marketing.
          </p>
          <a href="#" onclick="$('#why-con').animatescroll();" class="btn btn1">Learn more   <span class="span1"> > </span></a>
        </div>
        <div class="col-sm-12 col-md-6">
          <img src="img/i1.png" class="i1" />
        </div>
      </div>

     <div class="row" id="services-con">
          <h2 class="mx-auto he2">Services</h2>

          <div class="card-deck card-deck1 mx-auto">
            <div class="card">
              <img class="card-img-top mx-auto" src="img/c1.png">
              <div class="card-body">
                <center><h5 class="card-title">Webdesign & Development</h5></center>
                <center><p class="card-text">
                  We provide front-end, back-end, full stack & e-commerce website solutions along with the most elegant and modern designs. 
              </p></center>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top mx-auto" src="img/c2.png">
              <div class="card-body">
                <center><h5 class="card-title">Photo & Video Editing</h5></center>
                <center><p class="card-text">
                      We offer a wide spectrum of custom designs for all printed media goods along with top notch video graphics curated to requirements.
                </p></center>
              </div>
            </div>
          </div>

          <div class="card-deck card-deck2 mx-auto">
            <div class="card">
              <img class="card-img-top mx-auto" src="img/c3.png">
              <div class="card-body">
                <center><h5 class="card-title">Marketing Solutions</h5></center>
                <center><p class="card-text">We provide top-end SEO and marketing solutions that help make it easier for people to find businesses and enhance business growth organically.

              </p></center>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top mx-auto" src="img/c4.png">
              <div class="card-body">
                <center><h5 class="card-title">Design Services</h5></center>
                <center><p class="card-text">We create dynamic UI/UX designs, web templates, logos & any other form of artwork necessary for all modern needs

                </p></center>
              </div>
            </div>
          </div>

      </div>

      <div class="row mx-auto">
        <div class="col-sm-12">
          <center><button type="button" class="btn btn-primary btn2" onclick="$('#contact-con').animatescroll();">Contact Us</button></center>
        </div>
      </div>
</div>
    </div>

    <div class="container-fluid con2 con-bg" id="why-con">
      <div class="row">
        <div class="col-sm-12 col-md-8 offset-md-4">
          <center><h1 class="he3">Why MACK Studios?</h1></center>
          <p class="p2">
            At MACK Studios, we apply our market sector insights and unique designs with services and SEO from scratch to launch while tailoring to the needs of all clients. Your requirements and needs define our approach as we strive to provide the best services in the industry. Here are 5 prominent reasons why partnering with us is an advantage:
1. Client Satisfaction- primary priority:  Our ultimate goal is to make our clients satisfied with our professional services.
2. Talented team- Competitive and collaborative: Highly experienced, intelligent, innovative and creative team of professionals collaborate with our clients in providing the best services possible
3. Personalized Service- timely and efficiently: We establish a constant connection with our clients and make sure they attain all necessary support in the quickest way possible.
4. Customized strategies- unique for every business: We tailor-make all services depending on the needs. Every campaign we implement, is devised while considering business’ overall goal.
5. Competitive Rates- value for money: MACK Studios packages are carefully curated and predetermined, to be worth the client’s investment.

          </p>
        </div>
      </div>
    </div>

    <div class="container-fluid con3 con-bg" id="port-con">
      <div class="row">
        <div class="col-sm-12">
          <center><h1 class="he4">PORTFOLIO</h1></center>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-12 car-col">
          <div id="carouselExampleControls" class="carousel slide mx-auto" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <center>
                  <img class="pi pi1" src="img/port5.png" alt="First slide">
                  <img class="pi pi2" src="img/port2.png" alt="Second slide">
                  <img class="pi pi3" src="img/port3.png" alt="Second slide">
                  <img class="pi pi4" src="img/port4.png" alt="Second slide">
               </center>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <img src="img/ar1.png">
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <img src="img/ar2.png">
            </a>
          </div>
        </div>
        
      </div>

    </div>

    <div class="container-fluid con4 con-bg" id="contact-con">
      <div class="row con-bg row-form">
        <div class="col-sm-5">
          <h1 class="he5">Contact Us</h1>
          <p class="p4">If you have any questions regarding our services
              or require a quote, please contact us</p>
        </div>
        <div class="col-sm-7">
              <form class="con-bg" action="" method="post" enctype="text/plain">
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <input type="text" class="form-control" name="name" id="name1" placeholder="Name*" required>
                  </div>
                  <div class="form-group col-md-12">
                    <input type="text" class="form-control" name="phone" id="phone1" placeholder="Phone">
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" id="email" name="email" placeholder="Email*" required>
                </div>
                <div class="form-group">
                  <textarea type="text" class="form-control" id="desc1" name="desc" placeholder="Description"></textarea> 
                </div>
                <button type="submit" class="btn btn-submit">Submit</button>
              </form>          
        </div>
      </div>
      <div class="row row-footer">
        <div class="col-md-6 col-sm-12">
          <p class="p5"> &#169; Copyright MACK Studios</p>
        </div>
        <div class="col-md-6 col-sm-12">
          <p class="p6"><i class="fa fa-facebook"></i><i class="fa fa-instagram"></i></p>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  </body>
</html>