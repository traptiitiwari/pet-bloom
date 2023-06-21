<?php
    session_start();

    if (!isset($_SESSION['username'])){ 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <link href="images/icon.png" rel="shortcut icon">
    <title>Pety-Paws</title>

    <!-- core CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500;700&family=Roboto&family=Shadows+Into+Light&family=Vujahday+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"/>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link rel="stylesheet" href="css/style.css" />
  </head><!--/head-->
  <body>
<!-- Navbar -->
    <nav class="navbar navbar-expand-custom navbar-mainbg sticky-top">
      <div class="container">
        <a class="navbar-brand navbar-logo" id="link-hover" href="index.php"
          ><strong>Pety <i class="fas fa-spin fa-paw"></i> Paws</strong></a
        >
        <button
          class="navbar-toggler"
          type="button"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <div class="hori-selector">
              <div class="left"></div>
              <div class="right"></div>
            </div>
            <li class="nav-item active">
              <a class="nav-link" href="#pets"
                ><strong><i class="fas fa-dog"></i>Pets For Adoption</strong></a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services"
                ><strong><i class="fas fa-concierge-bell"></i>Our Services</strong></a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#aboutus"><strong><i class="far fa-address-card"></i>About Us</strong></a>
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                href="#loginModal"
                data-toggle="modal"
                data-target="#loginModal"
                ><i class="fa fa-lock"></i><strong> Admin</strong></a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contactus"
                ><strong><i class="fas fa-id-card-alt"></i>Contact Us</strong></a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>

<!-- Image slider -->
    <div class="container-fluid">
      <div class="container">
        <br />
        <br />
        <div
          id="carouselExampleCaptions"
          class="carousel slide"
          data-ride="carousel"
        >
          <ol class="carousel-indicators">
            <li
              data-target="#carouselExampleCaptions"
              data-slide-to="0"
              class="active"
            ></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div
              class="carousel-item active"
              style="background-color: rgba(0, 0, 0, 0.445)"
            >
              <img src="./images/1.jpg" class="d-block w-100" alt="..." />
              <div
                style="background-color: rgba(0, 0, 0, 0.445); bottom: 250px"
                class="carousel-caption d-none d-md-block"
              >
                <h4>WELCOME TO PETY PAWS</h4>
                <p>
                  We offer all the best quality products and services for your
                  adorable pets.
                </p>
                <a
                  href="#services"
                  class="btn btn-lg"
                  style="background-color: orange; border-radius: 0"
                  >Our Services</a
                >
              </div>
            </div>
            <div class="carousel-item">
              <img src="./images/5.jpg" class="d-block w-100" alt="..." />
              <div
                style="background-color: rgba(0, 0, 0, 0.445); bottom: 250px"
                class="carousel-caption d-none d-md-block"
              >
                <h4>WE TAKE CARE OF YOUR PET</h4>
                <p>
                  Discover the amazing health services that we can offer to your
                  pets.
                </p>
                <a
                  href="#aboutus"
                  class="btn btn-lg"
                  style="background-color: orange; border-radius: 0"
                  >About Us</a
                >
              </div>
            </div>
            <div class="carousel-item">
              <img src="./images/6.jpg" class="d-block w-100" alt="..." />
              <div
                style="background-color: rgba(0, 0, 0, 0.445); bottom: 250px"
                class="carousel-caption d-none d-md-block"
              >
                <h4>ADOPT A PET</h4>
                <p>
                  We have many Adorable Pets who need a home. Share the love,
                  adopt!
                </p>
                <a
                  href="#pets"
                  class="btn btn-lg"
                  style="background-color: orange; border-radius: 0"
                  >Pets For Adoption</a
                >
              </div>
            </div>
          </div>
          <a
            class="carousel-control-prev"
            href="#carouselExampleCaptions"
            role="button"
            data-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a
            class="carousel-control-next"
            href="#carouselExampleCaptions"
            role="button"
            data-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <br />
        <br />
      </div>
    </div>

<!-- Services -->
    <div class="container" id="services">
      <br />
      <br />
      <h2 class="text-center" style="color: orange">
        <strong style="border-bottom: 3px dashed orange">Our Services</strong>
      </h2>
      <br />
      <br />
      <div class="row">
        <div class="col-sm">
          <div class="card" style="border: none">
            <img src="./images/7.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h4 class="card-title text-center">Pet Health</h4>
              <p class="card-text text-center text-muted">
                We offer the most amazing services for your Pet's health and
                High quality professionals ready to take care of your best
                friend.
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm">
          <div class="card" style="border: none">
            <img src="./images/8.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h4 class="card-title text-center">Pet Grooming</h4>
              <p class="card-text text-center text-muted">
                Lets talk through some ideas, look at some pictures and help you
                choose the next great look for your pet in out shop with the
                best.
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm">
          <div class="card" style="border: none">
            <img src="./images/10.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h4 class="card-title text-center">Pet Sitting</h4>
              <p class="card-text text-center text-muted">
                Now you can leave your pet here when you travel with safety and
                great care for all animals we host here are our hotel.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br />
    <br />

<!-- Pet Section -->
    <div class="container" id="pets">
      <br />
      <br />
      <h2 class="text-center" style="color: orange">
        <strong style="border-bottom: 3px dashed orange"
          >Pets For Adoption</strong
        >
      </h2>
      <br />
      <br />
      <iframe
        src="availableframe.php"
        width="100%;"
        height="700px;"
        style="border-style: none"
      ></iframe>
      <br />
      <br />
    </div>

<!-- About Us -->
    <div class="container-fluid" id="aboutus">
      <br />
      <br />
      <h2 class="text-center">
        <strong style="border-bottom: 3px dashed black">About Us</strong>
      </h2>
      <br />
      <br />
      <div class="container my-3">
        <div class="card" style="border: none; background-color: white">
          <div
            class="card-header"
            style="border: none; background-color: white; padding: 0"
          >
            <!-- START TABS DIV -->
            <div class="tabbable-responsive">
              <div class="tabbable">
                <ul
                  class="nav nav-tabs"
                  id="myTab"
                  role="tablist"
                  style="justify-content: space-around"
                >
                  <li class="nav-item pill-1">
                    <a
                      class="nav-link active tab-hover p-4"
                      style="text-transform: uppercase"
                      id="first-tab"
                      data-toggle="tab"
                      href="#first"
                      role="tab"
                      aria-controls="first"
                      aria-selected="true"
                      ><strong>Our Clinic</strong></a
                    >
                  </li>
                  <li class="nav-item pill-2">
                    <a
                      class="nav-link tab-hover p-4"
                      style="text-transform: uppercase"
                      id="second-tab"
                      data-toggle="tab"
                      href="#second"
                      role="tab"
                      aria-controls="second"
                      aria-selected="false"
                      ><strong>Our Philosophy</strong></a
                    >
                  </li>
                  <li class="nav-item pill-3">
                    <a
                      class="nav-link tab-hover p-4"
                      style="text-transform: uppercase"
                      id="third-tab"
                      data-toggle="tab"
                      href="#third"
                      role="tab"
                      aria-controls="third"
                      aria-selected="false"
                      ><strong>Our Team</strong></a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="tab-content">
              <div
                class="tab-pane fade show active"
                id="first"
                role="tabpanel"
                aria-labelledby="first-tab"
              >
                <div class="row">
                  <div class="col-md my-1">
                    <h2 class="card-title">We take care of your best friend</h2>
                    <p class="card-text">
                      Interdum donec eget metus auguen unc vel mauris ultricies,
                      vest ao ibulum orci eget, blandit quam elit, eu imperdiet
                      neque semper lorem ipsum dolores viverra elit Aliquam erat
                      volutpat phase llus ac sodales felis tiam non metus
                      aliquam eros accumsan mollis eget vitae tellusm. Sed in
                      lobortis nisl Phasellus ultrices gravida massa luctus
                      ornare. Aliquam erat volutpat phas ellus sodales felis
                      tiam non metus aliquam eros accumsan mollis eget vitae
                      tellusm Pellentesque turpis lectus, placerat a ultricies
                      a, posuere lorem ipsuet.
                    </p>
                  </div>
                  <div class="col-md my-1">
                    <img src="./images/2.jpg" alt="" class="card-img-top" />
                  </div>
                </div>
              </div>
              <div
                class="tab-pane fade"
                id="second"
                role="tabpanel"
                aria-labelledby="second-tab"
              >
                <div class="row">
                  <div class="col-md my-1">
                    <h2 class="card-title">Our Philosophy</h2>
                    <p class="card-text">
                      Pellentesque turpis lectus, placerat a ultricies a,
                      posuere a nibh imperdiet interdum. Sed in lobortis nisl
                      Phasellus ultrices gravida massa luctus ornare ellen
                      tesque turpis lectus, placerat a ultricies a, posuere a
                      nibh fusce mollis imperdiet interdum donec eget metus
                      auguen unc vel mauris ultricies, vestibulum orci eget,
                      viverra elit. Aliquam erat volutpat. Phasellus ac sodales
                      felis tiam non metus aliquam eros accumsan mollis eget
                      vitae tellusm.
                    </p>
                  </div>
                  <div class="col-md my-1">
                    <div
                      class="embed-responsive embed-responsive-4by3"
                      style="border-radius: 5px"
                    >
                      <iframe
                        class="embed-responsive-item"
                        src="https://www.youtube.com/embed/deN3nt3Sdhc"
                      ></iframe>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="tab-pane fade"
                id="third"
                role="tabpanel"
                aria-labelledby="third-tab"
              >
                <div class="card-columns">
                  <div class="card" style="border: none">
                    <img
                      src="./images/team-1.jpeg"
                      class="card-img-top"
                      style="border-radius: 20px"
                      alt="..."
                    />
                    <div class="card-body">
                      <h5 class="card-title text-center">
                        <strong>Taranpreet Kaur</strong>
                        <a href="https://www.instagram.com/taran_preet4348/"><i class="fab fa-spin fa-instagram"></i></a>
                      </h5>
                      <p class="card-text text-center">
                        People find me to be an upbeat, self-motivated team player with excellent communication skills.
                        I enjoy reading, and the knowledge and perspective that my reading gives me has strengthened my coding skills and presentation abilities. 
                      </p>
                    </div>
                  </div>
                  <div class="card" style="border: none">
                    <img
                      src="./images/team-2.jpeg"
                      class="card-img-top"
                      style="border-radius: 20px"
                      alt="..."
                    />
                    <div class="card-body">
                      <h5 class="card-title text-center">
                        <strong>Tripti Tiwari</strong>
                        <a href="https://www.instagram.com/acquiescentt/"><i class="fab fa-spin fa-instagram"></i></a>
                      </h5>
                      <p class="card-text text-center">
                        I am a dedicated person and I enjoy meeting new people and finding ways to help them have an uplifting experience.
                        One of my key accomplishments in my current role was helping my team in making this project and I’m confident about it.
                      </p>
                    </div>
                  </div>
                  <div class="card" style="border: none">
                    <img
                      src="./images/T3.jpg"
                      class="card-img-top"
                      style="border-radius: 20px"
                      alt="..."
                    />
                    <div class="card-body">
                      <h5 class="card-title text-center">
                        <strong>Umar Abrar</strong>
                        <a href="https://www.instagram.com/_.itsumar._"><i class="fab fa-spin fa-instagram"></i></a>
                      </h5>
                      <p class="card-text text-center">
                        I'm Umar Abrar and I m learning frontend. This website is one of my practiced work. 
                        I have enjoyed my work and gave a proper dedication to my project. I'm curious and little creative about my work in this project and want to keep learning everyday.
                      </p>
                    </div>
                  </div>
                  <div class="card" style="border: none">
                    <img
                      src="./images/T4.png"
                      class="card-img-top"
                      style="border-radius: 20px"
                      alt="..."
                    />
                    <div class="card-body">
                      <h5 class="card-title text-center">
                        <strong>Utkarsh Srivastava</strong>
                        <a href="https://www.instagram.com/utkarshsrivastava111/"><i class="fab fa-spin fa-instagram"></i></a>
                      </h5>
                      <p class="card-text text-center">
                        I believe my strongest trait is my attention to detail. This trait has helped me tremendously in this field of work.
                        I've always been a great team player. I'm good at keeping a team together and producing quality work in a team environment.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br />
      <br />
    </div>

<!-- Contact Us -->
    <div class="container" id="contactus">
      <br />
      <br />
      <h2 class="text-center" style="color: orange">
        <strong style="border-bottom: 3px dashed orange">Get In Touch</strong>
      </h2>
      <br />
      <br />
      <div class="row" style="justify-content: space-between">
        <div class="col-md-4 col-sm-6">
          <h2 class="card-title">Information</h2>
          <p class="text-muted">Contact for additional information:</p>
          <p class="text-muted">
            <span><i class="fas fa-envelope fa-spin m-1"></i></span>
            <a id="link-hover" href="mailto:youremailaddress"
              >petyshop@shop.com</a
            >
            or call us
          </p>
          <p class="text-muted">
            <span><i class="fas fa-phone-alt fa-spin m-1"></i></span> +91 123
            456 7890
          </p>
          <br />
          <br />
          <h2 class="card-title">Location & Time</h2>
          <p class="text-muted">Contact for additional information:</p>
          <p class="text-muted">
            <span><i class="fas fa-map-marker-alt fa-spin m-1"></i></span> We
            are located at Kanpur City, UP.
          </p>
          <p class="text-muted">
            <span><i class="far fa-clock fa-spin m-1"></i></span> Open from 9
            a.m to 10 p.m on weekdays and from 9 a.m to 2 p.m in weekends.
          </p>
        </div>
        <div class="col-md-7 col-sm-6 col-md-offset-1 align-content-end">
          <form action="">
            <div class="form-group">
              <input
                type="text"
                class="form-control"
                placeholder="NAME"
                style="border-bottom: 1px solid plack"
              />
            </div>
            <div class="form-group">
              <input type="email" class="form-control" placeholder="EMAIL ID" />
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="SUBJECT" />
            </div>
            <div class="form-group">
              <textarea
                type="text"
                cols="20"
                rows="6"
                class="form-control"
                placeholder="ENTER YOUR MESSAGE"
              ></textarea>
            </div>
            <div class="text-center margin-top-25">
              <button type="submit" class="btn btn-mod btn-border btn-large">
                Send Message
              </button>
            </div>
          </form>
        </div>
      </div>
      <br />
      <br />
    </div>

<!-- Map -->
    <iframe
      height="400"
      frameborder="0"
      style="width: 100%"
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57155.720509319144!2d80.29975643791312!3d26.44823249769199!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399c38a645603a8b%3A0x6f19ae5f63ac4fd5!2sZ%20Square%20Mall!5e0!3m2!1sen!2sin!4v1641050084851!5m2!1sen!2sin"
      allowfullscreen=""
      loading="lazy"
    ></iframe>

<!-- php end -->
    <?php include('loginModal.php');?>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <script src="js/nav1.js"></script>
  </body>
</html>

<?php 

} else if(isset($_SESSION['username'])) { 

    include('includes/admin.php');

} ?>
