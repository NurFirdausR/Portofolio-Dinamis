<?php

include_once "connect.php";
session_start();

// include "connect.php";
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="asset/contact/vendor/animate/animate.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="asset/contact/vendor/css-hamburgers/hamburgers.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="asset/contact/vendor/animsition/css/animsition.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="asset/contact/vendor/select2/select2.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="asset/contact/vendor/daterangepicker/daterangepicker.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="asset/contact/css/util.css">
  <link rel="stylesheet" type="text/css" href="asset/contact/css/main.css">


  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Courgette&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Cabin+Condensed:wght@500&family=Patua+One&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Patua+One&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Bitter&family=Staatliches&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Bitter&family=Staatliches&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Bitter&display=swap" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="asset/cssnya.css">
  <link rel="stylesheet" href="asset/scssnya.scss">

  <title>Hello, world!</title>
</head>
<style>
  html {
  scroll-behavior: smooth;
}
#section1{

}
</style>

<body>
  <!-- //navbar -->
  <section>

  </section>
  <!-- end navbar -->
  <section>
    <header class="heroes">
      <nav class="navbar navbar-expand-lg  navbar-dark navbar-atas" style="background-color:transparent;">
        <div class="container">
          <a style="margin-left: -40px; padding-right: 20px; " href="http://medium.coanhelfi/">
            <span class="icon">
              <i class="fa fa-medium"></i>
            </span>
          </a>

          <a style="padding-left: 20px; padding-right: 20px; " href="http://github.com/helfi92">
            <span class="icon">
              <i class="fa fa-github"></i>
            </span>
          </a>


          <a style="padding-left: 20px;" href="https://twitter.canhelfi">
            <span class="icon">
              <i class="fa fa-twitter"></i>
            </span>
          </a>


          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto" style="margin-right: -80px;">
              <li class="nav-item">
                <a class="nav-rightt " aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-rightt " href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-rightt " href="#project">Project</a>
              </li>
              <li class="nav-item">
                <a class="nav-rightt " href="#service">Service</a>
              </li>
              <li class="nav-item">
                <a class="nav-rightt " href="#contact">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-right " href="login.php">Login</a>
              </li>


            </ul>
          </div>
        </div>
      </nav>
      <?php
      $sql = mysqli_query($conn, "SELECT * FROM `portofolio-dinamis`.admin");
      $row = mysqli_fetch_assoc($sql);
      // var_dump($row);
      ?>
      <!-- header -->
      <section>
        <div class=" d-flex justify-content-center ">
          <div class="row mt-5">
            <div class="col-5 mt-4">
              <h4 class=" hello-im  font4">Hello &nbsp; I'm</h4>
              <h1 class="text-white font3"><?= $row['nama_admin'] ?></h1>
              <h6 class="text-white font1"><?= $row['job_admin'] ?></h6>
            </div>
            <div class="col-6">
              <div class="foto">
                <div class="gradient-border" id="box">
                  <img style="width: 100%; height: 100%;  border-radius:  15px 50px 30px;" src="img/<?= $row['foto_admin'] ?>">

                </div>

              </div>
            </div>
          </div>


        </div>
      </section>
      <!-- header  end-->



    </header>
  </section>
  <!-- about -->
  <section style="margin-top: -40px;">
    <div class="about">
      <?php
      $sql = mysqli_query($conn, "SELECT * FROM `portofolio-dinamis`.about");
      $about = mysqli_fetch_assoc($sql);
      // var_dump($about);
      ?>
      <div class="pt-5">
        <div class="container px-5">
          <div class="container px-5 py-5">
            <div class="card text-center about-card px-md-5 text-white" style="background-color: transparent; ">
              <div class="row mx-lg-5">
                <div class="col-6 mt-3">
                  <div class="mx-lg-3" style="border: none; margin-bottom: -20px;">
                    <h4 class="font8 text-lg-start hello-about">About </h4>
                  </div>
                  <div class="card-body text-lg-start">
                    <h6> <small style="font-weight: 300; "> <?= $about['about_me'] ?></small></h6>

                  </div>
                </div>
                <div class="col-6 mt-5">
                  <div class="row" style="margin-bottom: 1px;">
                    <div class="col-3 font8  hello-about text-md-start">
                      <h6><small>Name</small></h6>
                    </div>
                    <div class="col-1">
                      :
                    </div>
                    <div class="col-8 text-md-start">
                      <span>
                        <h6 style="font-weight: 400; "><?= $about['name_me'] ?></h6>
                      </span>
                    </div>
                  </div>
                  <div class="row" style="margin-bottom: 1px;">
                    <div class="col-3 font8  hello-about text-md-start">
                      <h6><small>Email</small></h6>
                    </div>
                    <div class="col-1">
                      :
                    </div>
                    <div class="col-8 text-md-start">
                      <span>
                        <h6 style="font-weight: 400; "><?= $about['email_me'] ?></h6>
                      </span>
                    </div>
                  </div>
                  <div class="row" style="margin-bottom: 1px;">
                    <div class="col-3 font8  hello-about text-md-start">
                      <h6><small>Github</small></h6>
                    </div>
                    <div class="col-1">
                      :
                    </div>
                    <div class="col-8 text-md-start">
                      <span>
                        <h6 style="font-weight: 400; "><?= $about['github_me'] ?></h6>
                      </span>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="project">

    </div>
  </section>

  
  <!-- endd about -->


  <!-- project -->
  <section class="project">
    <center>
      <h4 class="font5 text-dark mb-4">Project</h4>
      <div class="hr-project mb-4">

      </div>
    </center>
    <div class="container px-md-5 mb-3">
      <div class="row d-flex justify-content-center">
        <?php
        include_once "connect.php";
        $query = "SELECT * FROM project";
        $sql = mysqli_query($conn, $query);
        // var_dump($sql);
        ?>
        <?php foreach ($sql as $row) : ?>
          <div class="card mb-3" style="width: 18rem;">
            <img src="imgproject/<?= $row['gambar_project'] ?>" style="width: 262px; height: 200px; border: 2px solid black; border-radius: 3px;" class="card-img-top mt-2" alt="...">
            <div class="card-body">
              <h5 class="card-title text-md-center"><?= $row['judul_project'] ?></h5>
            </div>

            <div class="card-body" style="margin-top: -15px;">
              <p class="card-text text-md-start text-black "><span><?= $row['deskripsi_project'] ?></span></p>
            </div>
          </div>
          &nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;
        <?php endforeach; ?>

      </div>
    </div>
    <div id="service">

</div>
    <br> <br>
    <br> <br>
    <br> <br>
    <!-- ican do -->


    <div class="ican">
      <div>
        <div class="container px-md-5 ">
          <div class="container">
            <div class="row ">
              <div class="card bg-transparent card-icando" style="border: none;">
                <h5 class="card-header text-xl-center font6 text-white mb-5 border:none;">LOOK WHAT I CAN DO</h5>
                
                <div class="card-body">
                  <div class="row">
                    <?php
                    include_once "connect.php";
                    $query = "SELECT * FROM icando";
                    $sql = mysqli_query($conn, $query);
                    // $q = mysqli_fetch_assoc($sql);
                    // $skill = explode(',',$q['skill_service']);
                    // var_dump($skill);


                    ?>
                    <?php foreach ($sql as $row) : ?>
                      <div class="card mb-2" style="width: 20rem; ">
                        <center>
                          <img src="imgservice/<?= $row['gambar_service'] ?>" style="width: 110px; height: 120px;" class="card-img-top " alt="...">
                        </center>
                        <div class="card-body">
                          <h5 class="card-title text-lg-center"><?= $row['nama_service'] ?></h5>
                          <p class="card-text text-lg-center">
                            <?php $skill = explode(',', $row['skill_service']); ?>
                            <?php foreach ($skill as $skil) : ?>
                              <button class="icando btn btn-sm hello-ican" style="border-radius: 8px 50px; margin-bottom: 8px;">
                                <?= $skil ?></button>
                            <?php endforeach; ?>
                          </p>
                        </div>
                      </div>
                      &nbsp;&nbsp;
                      &nbsp;&nbsp;
                    <?php endforeach; ?>



                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br><br><br><br>
      <div id="contact">

</div>
      <!-- what any -->
      <div class="container text-xl-center">
        <center>
          <div class="hr-any">

          </div>
        </center>
        <div class="py-5">
          <h4 class="text-white">WHAT ANY PROJECT IN YOU'RE MIND?</h4>
          <center>

            <div class="wrap-contact100">
            <?php 
                  if(isset($_SESSION['message'])){
        echo "
        <div class='alert alert-success' role='alert'>
                
        <strong>Success!</strong>&nbsp;".$_SESSION['message']."
      </div>
        " ;
        unset($_SESSION['message']);
    }
                ?>
             
              <form action="admin/function/contact/tambah_contact.php" method="POST" class="contact100-form validate-form">

                <div class="row">
                  <div class="col-6">
                    <div class="wrap-input100 validate-input" data-validate="Name is required">
                      <span class="label-input100">Your Name</span>
                      <input class="input100" type="text" name="nama_contact" placeholder="Enter your name">
                      <span class="focus-input100"></span>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ***@mail.com">
                      <span class="label-input100">Email</span>
                      <input class="input100" type="email" name="email_contact" placeholder="Enter your email addess">
                      <span class="focus-input100"></span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-6">
                    <div class="wrap-input100 input100-select">
                      <span class="label-input100">Needed Services</span>
                      <div>
                        <select class="selection-2" name="service_contact">
                          <option >Choose Services</option>
                          <option value="Online Store">Online Store</option>
                          <option value="eCommerce Bussiness">eCommerce Bussiness</option>
                          <option value="UI/UX Design">UI/UX Design</option>
                          <option value="Online Services">Online Services</option>
                        </select>
                      </div>
                      <span class="focus-input100"></span>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="wrap-input100 input100-select">
                      <span class="label-input100">Budget</span>
                      <div>
                        <select class="selection-2" name="budget_contact">
                          <option >Select Budget</option>
                          <option value="2500000">Rp 2.500.000,00</option>
                          <option value="7500000">Rp 7.500.000,00</option>
                          <option value="10000000">Rp 10.500.000,00</option>
                        </select>
                      </div>
                      <span class="focus-input100"></span>
                    </div>
                  </div>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Message is required">
                  <span class="label-input100">Message</span>
                  <textarea class="input100" style="border: 1px solid black; border-radius: 5px;" name="message_contact" placeholder="Your message here..."></textarea>
                  <span class="focus-input100"></span>
                </div>

                <div class="containers-contact100-form-btn">
                  <div class="wrap-contact100-form-btn">
                    <div class="contact100-form-bgbtn"></div>
                    <button class="contact100-form-btn" name="contact">
                      <span>
                        Contact me
                        <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                      </span>
                    </button>
                  </div>
                </div>
              </form>
            </div>

          </center>


          <div id="dropDownSelect1"></div>

        </div>
        <center>
          <div class="hr-any">

          </div>
        </center>
      </div>

      <!-- end what any -->
    </div>
    <!-- end ican do -->

    <!-- footer -->


    <div>
      <!-- Footer -->
      <footer class=" text-center text-lg-start">
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3 text-white" style="background-color: black">
          © 2020 Copyright:
          <a class="text-white" href="https://mdbootstrap.com/">Nur Firdaus Ramandani</a>
        </div>
        <!-- Copyright -->
      </footer>
      <!-- Footer -->
    </div>
    <!-- end footer -->
  </section>




  <!-- ENd project -->





















  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <script src="http://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
  <!--
    sc
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  <script>
    // init controller
    var controller = new ScrollMagic.Controller();

    // create a scene
    new ScrollMagic.Scene({
        duration: 100, // the scene should last for a scroll distance of 100px
        offset: 50 // start this scene after scrolling for 50px
      })
      .setPin('#my-sticky-element') // pins the element for the the scene's duration
      .addTo(controller); // assign the scene to the controller
  </script>



  <!--===============================================================================================-->
  <script src="asset/contact/vendor/jquery/jquery-3.2.1.min.js"></script>
  <!--===============================================================================================-->
  <script src="asset/contact/vendor/animsition/js/animsition.min.js"></script>
  <!--===============================================================================================-->
  <script src="asset/contact/vendor/bootstrap/js/popper.js"></script>
  <script src="asset/contact/vendor/bootstrap/js/bootstrap.min.js"></script>
  <!--===============================================================================================-->
  <script src="asset/contact/vendor/select2/select2.min.js"></script>
  <script>
    $(".selection-2").select2({
      minimumResultsForSearch: 20,
      dropdownParent: $('#dropDownSelect1')
    });
  </script>
  <!--===============================================================================================-->
  <script src="asset/contact/vendor/daterangepicker/moment.min.js"></script>
  <script src="asset/contact/vendor/daterangepicker/daterangepicker.js"></script>
  <!--===============================================================================================-->
  <script src="asset/contact/vendor/countdowntime/countdowntime.js"></script>
  <!--===============================================================================================-->
  <script src="asset/contact/js/main.js"></script>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
  </script>
</body>

</html>