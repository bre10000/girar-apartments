<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Girar Apartments</title>




  <meta name="keywords"
    content="Apartments, Girar Apartments, Real Estate, Luxury Apartment in Addis Ababa, Amazing view in Addis Ababa">

  <meta data-hid="description" name="description"
    content="Luxurious modern apartments for sale near Israel Embassy in Addis Ababa. We build with uncompromising quality with your future in mind. " />
  <meta data-hid="og:title" name="og_title" content="" />
  <meta data-hid="og:title" name="og_title" property="og:title"
    content="Luxurious modern apartments for sale near Israel Embassy in Addis Ababa. We build with uncompromising quality with your future in mind. " />
  <!-- Twitter -->
  <meta name="twitter:title" content="Luxurious modern apartments for sale near Israel Embassy in Addis Ababa." />
  <meta name="twitter:description"
    content="Luxurious modern apartments for sale near Israel Embassy in Addis Ababa. We build with uncompromising quality with your future in mind. " />





  <link type="text/css" href="./vendor/bulma/dist/css/bulma.min.css" rel="stylesheet">
  <link type="text/css" href="./vendor/bulma/dist/css/bulma-pageloader.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">  
  <!-- <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet"> -->
  <link href="https://fonts.googleapis.com/css2?family=Forum&display=swap" rel="stylesheet">


  <link rel="stylesheet" href="./css/custom-general.css">
  <link rel="stylesheet" href="./css/custom-home.css">

  <link rel="stylesheet" href="vendor/owl-carousel/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="vendor/owl-carousel/assets/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendor/locomotive-scroll/locomotive-scroll.min.css">


  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">

</head>

<body id="body" data-scroll-container>

<?php

function strip_crlf($string)
{
    return str_replace("\r\n", "", $string);
}

if (! empty($_POST["send"])) {
    $name = $_POST["userName"];
    $email = $_POST["userEmail"];
    // $subject = $_POST["subject"];
    $content = $_POST["content"];

    $toEmail = "sales@girarapartments.com";
    // CRLF Injection attack protection
    $name = strip_crlf($name);
    $email = strip_crlf($email);
    if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "The email address is invalid.";
    } else {
        // appending \r\n at the end of mailheaders for end
        $mailHeaders = "From: " . $name . "<" . $email . ">\r\n";
        if (mail($toEmail, $subject, $content, $mailHeaders)) {
            $message = "Your contact information is received successfully.";
            $type = "success";
        }
    }
}
?>


  <div id="pageloader" class="pageloader is-active has-background-success"><span class="title display">GIRAR
      APARTMENTS</span></div>



  <div data-scroll-section>

    <div id="contact-info" data-scroll class="is-hidden-mobile px-6" style="height: 45px !important">
      <div  class="header is-flex is-align-items-center is-justify-content-space-between">
        <div class="p-1 mt-1"> <img src="./images/logo/girar-logo.svg" id="nav-logo2" class="minimize"></div>
        <a href="tel:+251901844448" class="is-size-7 light-gray">+(251) 901 84 44 48 </a>
        <a href="tel:+251901577775" class="is-size-7 light-gray">+(251) 901 57 77 75 </a>
        <a href="mailto:sales@girarapartments.com" class="is-size-7 light-gray">sales@girarapartments.com </a>
        <a href="https://goo.gl/maps/fjGoBCvdaCM1YJQv5" class="is-size-7 light-gray">Israel Embassy, Yeka, Addis
          Abeba
          Ethiopia </a>
      </div>
    </div>

    <!-- Navbar -->
    <div data-scroll id="nav-container" class="nav-container">

      <nav id="nav" class="navbar header px-4" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
          <a id="logo-container" href="#">
            <img src="./images/logo/girar-logo-text.svg" id="nav-logo" class="minimize">
          </a>
          <!-- <p class="only-mobile is-size-6 has-text-weight-semibold gray pt-4 px-3 is-italic">contact@verotech.ml</p> -->
          <!-- <button id="navbarBurger" class="navbar-burger" data-target="navMenuExpo">
          <img width="40" src="./images/icons/nav-icon@4x.png" alt="Email Icon">
        </button> -->

          <a role="button" class="navbar-burger" id="navbarBurger" aria-label="menu" aria-expanded="false"
            data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
          </a>
        </div>

        <div id="navbar-menu" class="navbar-menu">
          <div class="navbar-start is-size-6 is-hidden-mobile">

          </div>

          <div class="navbar-end is-size-7">
            <a href="http://360.girarapartments.com/" target="_blank" class="navbar-item is-light mr-5 px-3">
              <span class="underline  has-text-weight-bold">3D Tour</span>
            </a>

            <a href="https://goo.gl/maps/fjGoBCvdaCM1YJQv5" target="_blank" class="navbar-item is-light mr-5 px-3">
              <span class="underline  has-text-weight-bold">
                Location
              </span>
            </a>


            <a href="#" onclick="window.locomotive.scrollTo(document.getElementById('contact-info'))" class="navbar-item is-light px-3">
              <span class="underline  has-text-weight-bold">Contact Sales</span>
            </a>


          </div>

        </div>

      </nav>
    </div>

    <div id="spacer" class="is-hidden" style="height: 80px; width: 100%;">
      <br><br>
    </div>

    <div data-scroll data-scroll-speed="-1" class="main-banner is-relative" style="margin-top: -70px; height: 100vh; overflow: hidden;">



      <div id="main-slider"  class="owl-carousel is-hidden-mobile" style="width: 100%; height: 100%;">


        <div>
          <img src="./images/home/main-banner.jpg" alt="">
        </div>
        <div>
          <img src="./images/home/gallery/desktop/side-view.jpg" alt="">
        </div>
        <div>
          <img src="./images/home/gallery/desktop/modern-kitchen-(2).jpg" alt="">
        </div>
        <div>
          <img src="./images/home/gallery/desktop/traditional-kitchen-2.jpg" alt="">
        </div>

      </div>

      <div id="main-slider2" class="owl-carousel is-hidden-tablet" style="width: 100%; height: 100vh;">


        <div>
          <img src="./images/home/gallery/mobile/main-banner.jpg" alt="">
        </div>
        <div>
          <img src="./images/home/gallery/mobile/side-view.jpg" alt="">
        </div>
        <div>
          <img src="./images/home/gallery/mobile/modern-kitchen-(2).jpg" alt="">
        </div>
        <div>
          <img src="./images/home/gallery/mobile/traditional-kitchen-2.jpg" alt="">
        </div>


      </div>


      <div class="slider-title">
        <div class="header p-4">
          <div class="columns home-content is-align-items-end" style="height: 100vh; width: 100%;">



            <div class="column p-4" data-scroll data-scroll-speed="3">
              <h3 class="reveal ">
                <span class="is-size-1 display has-text-left has-text-white">
                  Live Modern
                </span>
              </h3>
              <h3 data-scroll class="reveal">
                <span class="is-size-5 has-text-left has-text-white">
                  At the heart of the city
                </span>
              </h3>
              <!-- <p data-scroll class="fade-in has-text-white is-size-7 has-text-weight-light">Enter your email for our
                latest updates.
              </p> -->
              <!-- <div data-scroll class="field fade-in" style="width: 350px;">
                <p class="control has-icons-right">
                  <input class="input is-light has-background-light has-text-weight-light"
                    style="border-radius: 10px; margin-left: -5px; padding-left: 10px;" type="email"
                    placeholder="Your Email Address">
                  <span class="icon is-small is-right is-clickable mx-2">
                    <svg width="24" height="24" stroke-width="1.5" viewBox="0 0 24 24" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path d="M6 12H18.5M18.5 12L12.5 6M18.5 12L12.5 18" stroke="black" stroke-linecap="round"
                        stroke-linejoin="round" />
                    </svg>

                  </span>
                </p>
              </div> -->
              <br class="is-hidden-mobile"><br class="is-hidden-mobile">
              <br class="is-hidden-mobile"><br class="is-hidden-mobile"><br><br>
            </div>

            <!-- <div class="column is-4 has-text-centered is-hidden-mobile" data-scroll data-scroll-speed="2">
              <a data-scroll href="#description-home">
                <img width="20" src="./images/home/icons/scroll.svg" alt="">
              </a>
              <p class="has-text-white">Scroll</p>

              <br><br><br><br>
            </div> -->


            <div data-scroll  data-scroll-speed="2" class="column has-text-right">
              <a target="_blank" class="remote-button"  href="http://360.girarapartments.com/">
                <img width="100" src="./images/home/icons/3d tour.svg" alt="">
              </a>
              <br>
              <a target="_blank" class="remote-button" href="the-view.html">
                <img width="100" src="./images/home/icons/the view.svg" alt="">
              </a>
              <br>
              <a target="_blank" class="remote-button" href="https://goo.gl/maps/fjGoBCvdaCM1YJQv5">
                <img width="100" src="./images/home/icons/location.svg" alt="">
              </a>
              <br><br><br><br><br><br>
            </div>

          </div>
        </div>
      </div>

    </div>

  </div>


  <div data-scroll-section class="description-home" id="description-home">
    <br><br>


    <div class="header">
      <br>
      <div class="columns">
        <div class="column" data-scroll data-scroll-speed="1">
          <div class="trigger1"></div>
          <div class="container has-text-centered apartments" style="max-width: 800px; margin: 0 auto;">
            <br><br><br>

            <img src="./images/home/icons/key.svg" width="35" alt="">
            <br>
            <h1 class="is-size-4 py-4  has-text-white is-uppercase has-text-weight-bold" style="line-height: 1;"><span
                class="has-text-weight-normal is-size-6 light-gray">We have </span><br> 10 Luxurious Apartments.</h1>
          </div>
        </div>

        <div class="column" data-scroll data-scroll-speed="1">
          <div class="trigger2"></div>

          <div class="container has-text-centered area" style="max-width: 800px; margin: 0 auto;">
            <br><br><br>
            <img src="./images/home/icons/ruler.svg" width="40" alt="">
            <br>
            <h1 class="is-size-4 py-4  has-text-white is-uppercase has-text-weight-bold" style="line-height: 1;"><span
                class="has-text-weight-normal is-size-6 light-gray">Each with 3 Bedrooms and <br
                  class="is-hidden-tablet">an area of </span><br>241 <span
                class="has-text-weight-normal is-size-5  has-text-white">&</span>
              252 Sqm. </h1>
          </div>
        </div>

        <div class="column" data-scroll data-scroll-speed="1">
          <div class="trigger3"></div>

          <div class="container has-text-centered parking" style="max-width: 800px; margin: 0 auto;">
            <br><br><br>
            <img src="./images/home/icons/parking.svg" width="60" alt="">
            <br>
            <h1 class="is-size-4 py-4  has-text-white is-uppercase has-text-weight-bold" style="line-height: 1;"><span
                class="has-text-weight-normal is-size-6 light-gray">Complete with a</span><br> spacious parking
              space.</h1>
          </div>
        </div>
      </div>

      <br><br><br>
    </div>
    <br><br>
  </div>



  <div data-scroll-section class="view-section">
    <div class="view">

      <img class="panorama-view is-hidden-mobile is-fullwidth" src="./images/home/panorama-view-girar.jpg" alt="">
      <img id="living-room" class="living-room is-hidden-mobile is-fullwidth" src="./images/home/living-room.png" alt="">

      <img class="panorama-view is-hidden-tablet is-fullwidth" src="./images/home/panorama-view-mobile.jpg" alt="">
      <img class="living-room is-hidden-tablet is-fullwidth" src="./images/home/living-room-mobile.png" alt="">
    </div>


    <main class="main-content mt-6">


      <div class="container-fluid px-4">
        <div data-scroll data-scroll-speed="2" class="columns header is-align-items-center">
          <div class="column is-align-items-center is-8">
            <!-- <h1 class="is-size-1 has-text-weight-bold is-red" style="line-height: 1;">VERO TECH</h1> -->
            <div style="max-width: 400px;" class="p-5">
              <br><br><br>
              <h1 class="">
                <span class="is-size-1 display has-text-white">
                  A
                </span>
                <br>
              </h1>
              <h1 class="">
                <span class="is-size-1 display has-text-white">
                  Breathtaking
                </span>
                <br>
              </h1>
              <h1 class=" ">
                <span class="is-size-1 display has-text-white">
                  View
                </span>
                <br>
              </h1>

              <br>
              <a target="_blank" class="remote-button" href="the-view.html">
                <img src="./images/home/icons/the view.svg" width="100" alt="">
              </a>
            </div>
          </div>
          <div data-scroll data-scroll-speed="3" class="column is-6 has-text-right">
            <br><br><br>
            <br class="is-hidden-mobile"><br class="is-hidden-mobile"><br class="is-hidden-mobile"><br
              class="is-hidden-mobile"><br class="is-hidden-mobile"><br class="is-hidden-mobile"><br
              class="is-hidden-mobile"><br><br><br><br>
            <div style="max-width: 350px; margin: 0 auto;" class="view-text-desc">
              <p class="is-size-7 has-text-weight-light has-text-white" style="line-height: 1.4;">
                Our open living spaces with relaxing views and a close distance to Addis Ababa’s hot spots makes us an
                easy choice. We are the ideal spot for your future to be built upon.</p>


              <br>
              <!-- <a target="_blank" href="./downloads/Girar Booklet Small.pdf"
                class="button is-dark has-text-weight-bold is-hoverable p-5">DOWNLOAD BROCHURE</a> -->

            </div>

          </div>
        </div>


      </div>
    </main>
  </div>



  <div data-scroll-section>
    <div class="columns is-align-items-center" style="height: 100vh;">
      <div class="column has-text-centered">
        <br><br><br>
        <a href=""><img data-scroll data-scroll-speed="2" width="450" src="./images/home/Video Presentation.jpg"
            alt=""></a>

        <h1 data-scroll data-scroll-speed="4" class="is-size-2 display has-text-center has-text-left-mobile p-5">Video Tour</h1>


      </div>
      <div class="column p-5">
        <br>
        <h5 data-scroll data-scroll-speed="4" class="is-size-5 has-text-weight-bold is-uppercase p-4">A Place Where you can find yourself</h5>
        
        <ul data-scroll data-scroll-speed="3" class="px-5">
          <li class="gray">
            <span class="icon mr-1">
              <img src="./images/home/icons/check_tiny.svg" width="12" alt="">
            </span>
            Modern and open design
          </li>
          <li class="gray">
            <span class="icon mr-1">
              <img src="./images/home/icons/check_tiny.svg" width="12" alt="">
            </span>
            Quiet and peaceful location
          </li>
          <li class="gray">
            <span class="icon mr-1">
              <img src="./images/home/icons/check_tiny.svg" width="12" alt="">
            </span>
            Recreation Center for various events
          </li>
          <li class="gray">
            <span class="icon mr-1">
              <img src="./images/home/icons/check_tiny.svg" width="12" alt="">
            </span>
            A spacious parking space
          </li>
        </ul>
      </div>
    </div>


  </div>



<br><br>


  <div data-scroll-section class="header">

    <div class="columns stages is-align-items-center px-6">

      <div class="column has-text-centered">
        <div class="is-flex has-text-left">
          <img src="./images/home/icons/check-big.svg" class="mr-4" width="50" alt="">
          <div>
            <p class="gray is-size-7 has-text-weight-bold" style="line-height: 1;">1st stage</p>
            <h1 class="is-size-5 has-text-weight-bold" style="line-height: 1;">Planning</h1>
            <p class="gray is-size-7" style="line-height: 1;">Completed</p>
          </div>
        </div>
      </div>

      <div class="column has-text-centered">
        <div class="is-flex has-text-left">
          <img src="./images/home/icons/check-big.svg" class="mr-4" width="50" alt="">
          <div>
            <p class="gray is-size-7 has-text-weight-bold" style="line-height: 1;">2nd stage</p>
            <h1 class="is-size-5 has-text-weight-bold" style="line-height: 1;">Building</h1>
            <p class="gray is-size-7" style="line-height: 1;">Completed</p>
          </div>
        </div>
      </div>

      <div class="column has-text-centered">
        <div class="is-flex has-text-left">
          <img src="./images/home/icons/in-progress-big.svg" class="mr-4" width="50" alt="">
          <div>
            <p class="gray is-size-7 has-text-weight-bold" style="line-height: 1;">3rd stage</p>
            <h1 class="is-size-5 has-text-weight-bold" style="line-height: 1;">Finishing</h1>
            <p class="gray is-size-7" style="line-height: 1;">In Progress</p>
          </div>
        </div>
      </div>
      <div class="column has-text-centered">
        <div class="is-flex has-text-left">
          <img src="./images/home/icons/done-big.svg" class="mr-4" width="50" alt="">
          <div>
            <p class="gray is-size-7 has-text-weight-bold" style="line-height: 1;">4th stage</p>
            <h1 class="is-size-5 has-text-weight-bold" style="line-height: 1;">Project Done</h1>
            <p class="gray is-size-7" style="line-height: 1;">Not Completed</p>
          </div>
        </div>
      </div>

    </div>

  </div>



<br><br><br>
<br><br><br>


<div data-scroll-section>
  <div class="columns is-align-items-center" style="height: 100vh;">
    
    <div class="column">
      <div style="max-width: 300px; margin: 0 auto;">
        <h5 data-scroll data-scroll-speed="2" class="is-size-6 has-text-weight-bold is-uppercase">Modern and Open Design</h5>
      <p data-scroll  data-scroll-speed="3" class="gray is-size-7">
        Our apartments are architected to maximize your comfort and let you ease in to a good mood. The living space extends all the way to the kitchen creating a one of kind open space. Our kitchens are amazing to cook in and the smell of your strong Ethiopian spices are contained within the traditional kitchen.
      </p>
      <br><br>
      <h5 data-scroll data-scroll-speed="2" class="is-size-6 has-text-weight-bold is-uppercase">High Quality Build</h5>
      <p  data-scroll  data-scroll-speed="3" class="gray is-size-7">
        The master bedroom comes with its own bathroom and is truly a great place to rest. It is accompanied by two bedrooms, one for family or a guest and the other one for your children which can also be a great office space.
      </p>
      </div>
    </div>

    <div class="column is-6 has-text-centered p-5">

      <h1 data-scroll data-scroll-speed="3" class="is-size-3 display has-text-centered">Architecture and Design</h1>
      <a href=""><img data-scroll data-scroll-speed="2" width="450" src="./images/home/Video Presentation.jpg"
          alt=""></a>

      


    </div>
  </div>


</div>


<div data-scroll-section class="is-hidden-mobile">
  <h2 data-scroll data-scroll-speed="2" class="display is-size-1 px-6">Gallery</h2>
  <br>
  <div id="image_container" onclick="openGallery()" style="width: 100%;">
    
    <div id="gallery"  class="owl-carousel" style="width: 100%;">

      <div >
        <img data-bp="./images/home/main-banner.jpg" src="./images/home/main-banner.jpg" alt="">
        <p class="has-text-weight-bold  p-4">Living Room</p>
      </div>
      <div >
        <img data-bp="./images/home/gallery/desktop/side-view.jpg" src="./images/home/gallery/desktop/side-view.jpg" alt="">
        <p class="has-text-weight-bold  p-4">Side View</p>
      </div>
      <div>
        <img data-bp="./images/home/gallery/desktop/modern-kitchen-(2).jpg" src="./images/home/gallery/desktop/modern-kitchen-(2).jpg" alt="">
        <p class="has-text-weight-bold  p-4">Modern Kitchen</p>
      </div>
      <div>
        <img data-bp="./images/home/gallery/desktop/traditional-kitchen-2.jpg" src="./images/home/gallery/desktop/traditional-kitchen-2.jpg" alt="">
        <p class="has-text-weight-bold  p-4">Traditional Kitchen</p>
      </div>

      <div>
        <img data-bp="./images/home/gallery/desktop/dining-area-2.jpg" src="./images/home/gallery/desktop/dining-area-2.jpg" alt="">
        <p class="has-text-weight-bold  p-4">Dining Area</p>
      </div>

      <div>
        <img data-bp="./images/home/gallery/desktop/dining-area.jpg" src="./images/home/gallery/desktop/dining-area.jpg" alt="">
        <p class="has-text-weight-bold  p-4">Dining Area 2</p>
      </div>


      <div>
        <img data-bp="./images/home/gallery/desktop/parking.jpg" src="./images/home/gallery/desktop/parking.jpg" alt="">
        <p class="has-text-weight-bold  p-4">Parking</p>
      </div>


      <div>
        <img data-bp="./images/home/gallery/desktop/side-view-2.jpg" src="./images/home/gallery/desktop/side-view-2.jpg" alt="">
        <p class="has-text-weight-bold  p-4">Side View 2</p>
      </div>

      <div>
        <img data-bp="./images/home/gallery/desktop/side-view-3.jpg" src="./images/home/gallery/desktop/side-view-3.jpg" alt="">
        <p class="has-text-weight-bold  p-4">Side View 3</p>
      </div>
    </div>



    </div>

    <br><br><br><br>
</div>

<div data-scroll-section class="is-hidden-tablet">
  <h2  class="display is-size-1 px-6">Gallery</h2>
  <br>
  <div style="width: 100%;">
    
    <div  id="gallery2"  class="owl-carousel" style="width: 100%;">

      <div>
        <img src="./images/home/gallery/mobile/side-view.jpg" alt="">
        <p class="has-text-weight-bold  p-4">Side View</p>
      </div>
      <div>
        <img src="./images/home/gallery/mobile/modern-kitchen-(2).jpg" alt="">
        <p class="has-text-weight-bold  p-4">Modern Kitchen</p>
      </div>
      <div>
        <img src="./images/home/gallery/mobile/traditional-kitchen-2.jpg" alt="">
        <p class="has-text-weight-bold  p-4">Traditional Kitchen</p>
      </div>

      <div>
        <img data-bp="./images/home/gallery/mobile/dining-area-2.jpg" src="./images/home/gallery/mobile/dining-area-2.jpg" alt="">
        <p class="has-text-weight-bold  p-4">Dining Area</p>
      </div>

      <div>
        <img data-bp="./images/home/gallery/mobile/dining-area.jpg" src="./images/home/gallery/mobile/dining-area.jpg" alt="">
        <p class="has-text-weight-bold  p-4">Dining Area 2</p>
      </div>


      <div>
        <img data-bp="./images/home/gallery/mobile/parking.jpg" src="./images/home/gallery/mobile/parking.jpg" alt="">
        <p class="has-text-weight-bold  p-4">Parking</p>
      </div>


      <div>
        <img data-bp="./images/home/gallery/mobile/side-view-2.jpg" src="./images/home/gallery/mobile/side-view-2.jpg" alt="">
        <p class="has-text-weight-bold  p-4">Side View 2</p>
      </div>

      <div>
        <img data-bp="./images/home/gallery/mobile/side-view-3.jpg" src="./images/home/gallery/mobile/side-view-3.jpg" alt="">
        <p class="has-text-weight-bold  p-4">Side View 3</p>
      </div>

    </div>



    </div>

    <br><br><br><br>
</div>

<div data-scroll-section>
  
  <div class="columns header p-5 has-text-centered-mobile" style="width: 100%;">
    
    <div class="column">
      <br><br><br><br><br><br><br>
      <h1 data-scroll data-scroll-speed="3" class="is-size-1 display">
        Choose <br>Your <br>Apartment
      </h1>
    </div>

    <div class="column">
      <h4 class="has-text-weight-bold is-size-4 is-uppercase">East</h4>
      <br>
      <p class="light-gray">
        Net Area
      </p>
      <h6 class="has-text-weight-bold">185 m<sup>2</sup></h6>
      <p class="light-gray">
        Gross Area
      </p>
      <h6 class="has-text-weight-bold">241 m<sup>2</sup></h6>
      <p class="light-gray">
        Storage
      </p>
      <h6 class="has-text-weight-bold">18 m<sup>2</sup></h6>
      <p class="light-gray">
        Available
      </p>
      <h6 class="has-text-weight-bold">5</h6>

      <br>
      <a href="east.html" class="button is-black has-background-success has-text-weight-bold" style="border-radius: 10px;">Apartment Details</a>
    </div>

    <div class="column">
      <h4 class="has-text-weight-bold is-size-4 is-uppercase">West</h4>
      <br>
      <p class="light-gray">
        Net Area
      </p>
      <h6 class="has-text-weight-bold">182 m<sup>2</sup></h6>
      <p class="light-gray">
        Gross Area
      </p>
      <h6 class="has-text-weight-bold">252 m<sup>2</sup></h6>
      <p class="light-gray">
        Storage
      </p>
      <h6 class="has-text-weight-bold">30 m<sup>2</sup></h6>
      <p class="light-gray">
        Available
      </p>
      <h6 class="has-text-weight-bold">5</h6>

      <br>
      <a href="west.html" class="button is-black has-background-success has-text-weight-bold" style="border-radius: 10px;">Apartment Details</a>
    </div>

    



    </div>


    <br><br><br><br><br>
</div>



  <div data-scroll-section class="map trigger6" id="location">




    <img data-scroll id="map-image" class="is-fullwidth map is-hidden-mobile" src="./images/home/map.jpg" alt="">
    <img data-scroll id="map-image" class="is-fullwidth map is-hidden-tablet" src="./images/home/map-mobile.jpg" alt="">




    <div data-scroll data-scroll-speed="2" class="city-center">
      <br>
      <h1 class="reveal-3">
        <span class="is-size-1 display">
          City
        </span>
        <br>
      </h1>
      <h1 class="reveal-3">
        <span class="is-size-1 display">
          Center
        </span>
        <br>
      </h1>
      <br>

      <div style="max-width: 300px;">
        <p class="is-size-7 gray reveal-4" style="line-height: 1;">
          Located near to the center of the city at the base of the Yeka Mountains lies our luxurious apartment
          building.
        </p>
      </div>



      <br>
      <a href="https://goo.gl/maps/fjGoBCvdaCM1YJQv5" class="button is-white p-5 has-text-weight-bold has-text-success"> <img
          src="./images/home/map__icon.png" width="15" alt=""> <span
          class="has-text-weight-bold has-text-success ml-3">Go to Google Maps</span></a>

    </div>

    <svg data-scroll id="mapPath" class="is-hidden-mobile" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 1203">

      <path fill="transparent" stroke="#db8d37" stroke-width="6"
        d="M982,443a141.06,141.06,0,0,0,30-25c5-5.52,10.93-13.18,22-19,8.71-4.58,11-5.56,13-5,6.09,1.69,7,10.55,13,25,.24.58,4.16,8.06,12,23,16.31,31.1,21.06,38,34,63,3.45,6.67,8.74,17,15,30-4.65,3-9.65,6-15,9a259.53,259.53,0,0,1-27,13c11,14,20.57,24.91,27,32,19.76,21.79,26.27,25.67,41,44,14.61,18.18,9.91,16.48,23,32,13.36,15.83,24.14,24.56,35,44,2.81,5,4.8,9.29,6,12-9-.43-23.37-1.11-41-2-100-5-84-5.38-151-9-35.54-1.92-38.4-1.74-47-4-14.81-3.9-29.37-10.51-34-5-1.63,1.94-1.75,5.62-2,13-.18,5.4-.27,8.1,1,10,3.54,5.29,14.63,3.61,19,3,16.19-2.26,32.71-.69,49-2,17.59-1.41,17,1.71,55,5,33.14,2.87,37.9.86,72,3,22.09,1.38,32.89,3,66,7,119.93,14.39,123.76,10.28,168,20,11.19,2.46,32.13,7.38,65,14,27,5.44,42.09,8,48,9,20.4,3.41,36.33,6.08,56,8,22.6,2.21,52.09,4.93,89,1,14.9-1.59,5.67-1.56,56-10,37.69-6.32,49.21-7.4,68-15,10.07-4.07,13.16-6.35,28-12,17.91-6.81,36.33-12.22,39-13,18-5.27,23.21-5.79,32-11a75,75,0,0,0,18-15" />

      <path fill="transparent" stroke="#db8d37" stroke-width="6"
        d="M918,405l40,1c21.64,23.74,32.28,45.53,38,61,9.33,25.22,5.52,33.51,18,65,10.86,27.42,18.56,33.28,15,43-3.26,8.88-13.23,13.64-67,24-45.5,8.77-68.25,13.15-89,13-28.58-.21-25.67-4.78-76-11-37.67-4.65-67.4-5.57-114-7-22-.68-39.58-1.22-59-1-55,.61-108.77,10.08-214,29-64.79,11.65-75.65,14.87-90,22-27.46,13.65-38.2,27-66,31-23.66,3.43-42.54-2.35-61-8-19.06-5.84-37.38-17.89-74-42-13.39-8.82-22-15.18-25-26-1.86-6.82-.5-11.91-5-19-1.34-2.11-6.78-10.69-17-12-10.67-1.37-18.26,6.25-20,8-2.42,2.43-7.69,7.72-7,14,.65,5.93,6,7.45,12,15,3.67,4.65,5.49,9.83,9,20a254.93,254.93,0,0,1,9,34c2.66,13.3,3.94,23.38,6,40,1.39,11.21,2.37,20.53,3,27" />

      <!-- <rect class="cls-b" width="1920" height="1203"/> -->


    </svg>


    

    <div data-scroll>

      <svg id="labels" class="is-hidden-mobile" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 1203">
        <defs>
          <style>
            .cls-1 {
              fill: #58595b;
            }

            .cls-2 {
              fill: none;
              opacity: 0;
            }
          </style>
        </defs>
        <title>Girar Location</title>
        <g id="Layer_2" data-name="Layer 2">
          <g id="Layer_1-2" data-name="Layer 1">
            <path class="cls-1"
              d="M88,706a12.53,12.53,0,0,0-7.65,22.47l7.2,14.36a.49.49,0,0,0,.45.29.51.51,0,0,0,.45-.29l7.18-14.36a12.36,12.36,0,0,0,4.91-9.92A12.56,12.56,0,0,0,88,706ZM95,727.75a.54.54,0,0,0-.15.18L88,741.48l-6.8-13.55a.42.42,0,0,0-.14-.18,11.54,11.54,0,1,1,13.87,0Z" />
            <path class="cls-1"
              d="M88,707a11.52,11.52,0,0,0-6.94,20.74.42.42,0,0,1,.14.18L88,741.48l6.78-13.55a.54.54,0,0,1,.15-.18,11.42,11.42,0,0,0,4.6-9.18A11.56,11.56,0,0,0,88,707Zm0,16a4.49,4.49,0,1,1,4.49-4.48A4.48,4.48,0,0,1,88,723.05Z" />
            <path class="cls-1"
              d="M88,714.08a4.49,4.49,0,1,0,4.49,4.49A4.48,4.48,0,0,0,88,714.08ZM88,722a3.47,3.47,0,1,1,3.46-3.46A3.47,3.47,0,0,1,88,722Z" />
            <path class="cls-1"
              d="M1856.54,684.78a12.72,12.72,0,0,0-7.76,22.81l7.3,14.57a.51.51,0,0,0,.46.29.51.51,0,0,0,.45-.29l7.29-14.57a12.56,12.56,0,0,0,5-10.07A12.74,12.74,0,0,0,1856.54,684.78Zm7,22.07a.49.49,0,0,0-.15.19l-6.88,13.74-6.9-13.74a.41.41,0,0,0-.15-.19,11.7,11.7,0,1,1,14.08,0Z" />
            <path class="cls-1"
              d="M1856.54,685.8a11.7,11.7,0,0,0-7,21.05.41.41,0,0,1,.15.19l6.9,13.74,6.88-13.74a.49.49,0,0,1,.15-.19,11.58,11.58,0,0,0,4.66-9.31A11.73,11.73,0,0,0,1856.54,685.8Zm0,16.28a4.55,4.55,0,1,1,4.56-4.54A4.55,4.55,0,0,1,1856.54,702.08Z" />
            <path class="cls-1"
              d="M1856.54,693a4.55,4.55,0,1,0,4.56,4.56A4.55,4.55,0,0,0,1856.54,693Zm0,8.07a3.53,3.53,0,1,1,3.51-3.51A3.52,3.52,0,0,1,1856.54,701.05Z" />
            <path class="cls-1"
              d="M476.16,561.12l-7.47.58.31,4.94a6,6,0,0,1,8.62,5,6,6,0,0,1-5.81,6.56,5.56,5.56,0,0,1-5.66-2.91l2.11-1a3.74,3.74,0,0,0,3.59,2,4,4,0,0,0,3.6-4.52c-.2-2.69-2.28-4-4.84-3.81a7.73,7.73,0,0,0-3.64,1.42l-.55-9.52,9.59-.74Z" />
            <path class="cls-1"
              d="M487.59,558.21l3.23-.25,7.31,13.87h.05L503.33,557l3.15-.25,1.42,18.3-2.18.17-1.18-15.35h-.05l-5.38,15.86-1.32.1L490,561H490l1.18,15.36-2.17.16Z" />
            <path class="cls-1"
              d="M511.86,556.34a1.47,1.47,0,0,1,1.58,1.36,1.47,1.47,0,0,1-2.94.23A1.47,1.47,0,0,1,511.86,556.34Zm-.53,6.28,2-.16.93,12.1-2,.16Z" />
            <path class="cls-1"
              d="M517.57,565c-.09-1.11-.26-2.06-.32-2.86l1.91-.15c.05.65.15,1.32.21,2h0a4.42,4.42,0,0,1,3.85-2.62c3.18-.24,4.76,1.66,5,4.59l.58,7.47-2,.15-.56-7.26c-.15-2-1.13-3.22-3-3.07-2.61.2-3.6,2.18-3.39,4.94l.46,5.9-2,.15Z" />
            <path class="cls-1"
              d="M543,569.46c.09,1.11.26,2.06.32,2.86l-1.91.15c0-.65-.15-1.32-.2-2h-.06a4.42,4.42,0,0,1-3.85,2.62c-3.18.24-4.76-1.66-5-4.59l-.58-7.47,2-.15.56,7.26c.15,2,1.13,3.22,3,3.07,2.61-.2,3.6-2.18,3.39-4.94l-.46-5.9,2-.15Z" />
            <path class="cls-1"
              d="M552.84,561.13l-3.57.27.47,6.05c.12,1.55.24,2.79,2,2.65a3.82,3.82,0,0,0,1.75-.55l.22,1.83a5.94,5.94,0,0,1-2.32.62c-2.87.23-3.46-1.29-3.65-3.8l-.51-6.64-2.64.2-.13-1.7,2.64-.21-.27-3.43,2-.16.26,3.44,3.57-.28Z" />
            <path class="cls-1"
              d="M566.76,568.3a6.22,6.22,0,0,1-5.18,2.92c-3.8.29-6.35-2.37-6.62-5.89a6.06,6.06,0,0,1,5.71-6.83c3.41-.27,5.92,1.88,6.23,5.88l.05.65-9.77.76a4.05,4.05,0,0,0,4.25,3.57,4.54,4.54,0,0,0,3.71-2.14Zm-2.12-4.81a3.37,3.37,0,0,0-3.9-3.13,3.76,3.76,0,0,0-3.69,3.72Z" />
            <path class="cls-1"
              d="M570.51,567a3.75,3.75,0,0,0,3.23,1.39c1.26-.1,2.62-.75,2.51-2.07s-1.41-1.53-2.73-1.71c-2.34-.34-4.34-.68-4.54-3.19-.18-2.35,2-3.74,4.25-3.91a4.39,4.39,0,0,1,4.28,1.88l-1.59,1.24a2.86,2.86,0,0,0-2.67-1.25c-1.12.08-2.34.72-2.25,1.86s1.56,1.34,3.18,1.52c2.18.25,4.05.89,4.24,3.31.21,2.74-2.14,4-4.54,4.18a5.11,5.11,0,0,1-4.88-1.89Z" />
            <path class="cls-1"
              d="M1271.87,697.13c2.84.46,4.74,2.67,4.29,5.43a4.12,4.12,0,0,1-3.53,3.43v0a4.53,4.53,0,0,1,2.76,5.1c-.52,3.22-3.33,4.76-6.48,4.25s-5.32-2.86-4.79-6.08a4.53,4.53,0,0,1,4.22-4v-.05a4.09,4.09,0,0,1-2.26-4.36C1266.53,698.16,1269,696.67,1271.87,697.13Zm-2.67,16.46a3.56,3.56,0,1,0-3-4.09A3.49,3.49,0,0,0,1269.2,713.59Zm1.43-8.82a3,3,0,1,0-2.47-3.4A2.86,2.86,0,0,0,1270.63,704.77Z" />
            <path class="cls-1"
              d="M1287.88,700l3.12.5,3.74,14.82h0l8.28-12.87,3,.5-2.86,17.66-2.1-.34,2.4-14.82h0l-8.74,13.79-1.27-.21-3.93-15.84h0l-2.4,14.82-2.1-.34Z" />
            <path class="cls-1"
              d="M1309.35,709.67l1.94.31-1.89,11.67-1.94-.31Zm1.94-5.83a1.45,1.45,0,0,1,1.2,1.65,1.44,1.44,0,0,1-2.85-.46A1.45,1.45,0,0,1,1311.29,703.84Z" />
            <path class="cls-1"
              d="M1314.71,713.38c.17-1.07.23-2,.35-2.79l1.85.3c-.1.63-.16,1.28-.27,1.93h0a4.33,4.33,0,0,1,4.26-1.59c3.06.5,4.12,2.67,3.66,5.49l-1.17,7.2-1.94-.31,1.13-7c.32-2-.33-3.31-2.15-3.6-2.52-.41-3.91,1.23-4.35,3.9l-.92,5.69-1.94-.32Z" />
            <path class="cls-1"
              d="M1337.76,723.42c-.18,1.07-.23,2-.35,2.78l-1.85-.3c.1-.62.16-1.28.26-1.93h0a4.28,4.28,0,0,1-4.25,1.59c-3.06-.5-4.12-2.66-3.66-5.48l1.17-7.21,1.94.32-1.14,7c-.31,2,.34,3.31,2.16,3.6,2.52.41,3.91-1.23,4.34-3.9l.93-5.68,1.94.31Z" />
            <path class="cls-1"
              d="M1349,717.79l-3.44-.56-1,5.84c-.24,1.5-.41,2.7,1.31,3a3.89,3.89,0,0,0,1.79-.12l-.22,1.78a6.14,6.14,0,0,1-2.34.06c-2.77-.45-3-2-2.58-4.44l1-6.41-2.54-.42.27-1.64,2.54.41.54-3.32,1.94.32-.54,3.32,3.45.56Z" />
            <path class="cls-1"
              d="M1360.55,727.78a6.09,6.09,0,0,1-5.59,1.58c-3.66-.6-5.46-3.71-4.91-7.1a5.91,5.91,0,0,1,7-5.16c3.29.53,5.17,3.14,4.55,7l-.11.62-9.42-1.53a4,4,0,0,0,3.21,4.36,4.38,4.38,0,0,0,4-1.17Zm-.9-5a3.29,3.29,0,0,0-3-3.86,3.66,3.66,0,0,0-4.36,2.67Z" />
            <path class="cls-1"
              d="M1364.39,727.43a3.68,3.68,0,0,0,2.74,2.06c1.22.19,2.65-.11,2.86-1.38s-1-1.78-2.2-2.25c-2.14-.86-4-1.64-3.56-4.06.36-2.27,2.75-3.09,4.92-2.74a4.29,4.29,0,0,1,3.62,2.77l-1.79.81a2.83,2.83,0,0,0-2.25-1.8c-1.07-.17-2.38.15-2.55,1.25s1.17,1.62,2.66,2.17c2,.74,3.63,1.77,3.25,4.11-.42,2.65-2.94,3.29-5.26,2.91a5,5,0,0,1-4.18-2.9Z" />
            <path class="cls-1"
              d="M118.23,730.26l6-14.54H127V733.6h-1.82V718.14h0l-6.46,15.46h-1l-6.47-15.46h0V733.6h-1.81V715.72h2.77Z" />
            <path class="cls-1"
              d="M132.45,728.14a4.41,4.41,0,0,0,8.13,2.2l1.29,1.06a6.16,6.16,0,0,1-5.08,2.5,6.22,6.22,0,0,1-.15-12.43c3.59,0,5.66,2.68,5.66,5.91v.76Zm8-1.36a3.57,3.57,0,0,0-3.84-3.79,4.16,4.16,0,0,0-4.14,3.79Z" />
            <path class="cls-1"
              d="M146.24,736a5.6,5.6,0,0,0,4.52,2.17c3.38,0,4.59-2.1,4.59-4.64v-2.13h0a5.08,5.08,0,0,1-4.42,2.23,6,6,0,0,1-6.16-6,5.93,5.93,0,0,1,6-6.11,5.43,5.43,0,0,1,4.57,2.28h0v-2H157V733.5c0,2.57-1,6.16-6.34,6.16a7.29,7.29,0,0,1-5.68-2.38Zm4.69-3.89a4.55,4.55,0,0,0,0-9.09,4.55,4.55,0,0,0,0,9.09Z" />
            <path class="cls-1"
              d="M161.92,728.14a4.41,4.41,0,0,0,8.13,2.2l1.29,1.06a6.16,6.16,0,0,1-5.08,2.5,6.22,6.22,0,0,1-.15-12.43c3.59,0,5.66,2.68,5.66,5.91v.76Zm8-1.36a3.57,3.57,0,0,0-3.84-3.79,4.16,4.16,0,0,0-4.14,3.79Z" />
            <path class="cls-1"
              d="M176.39,721.78a14.94,14.94,0,0,1,.08,1.89h.05a4.75,4.75,0,0,1,4-2.2c3,0,4.45,1.7,4.45,4.63v7.5h-1.67v-6.55c0-2.62-.73-4.06-3.21-4.06-.35,0-3.58.23-3.58,4.55v6.06H174.8v-9.22c0-.63-.08-1.74-.13-2.6Z" />
            <path class="cls-1"
              d="M196.42,726.35V726c0-2-1-3-3-3a5.24,5.24,0,0,0-3.61,1.39l-1-1.19a6.75,6.75,0,0,1,5-1.72,4,4,0,0,1,4.31,4.2v5.27a19.54,19.54,0,0,0,.21,2.66h-1.62a12,12,0,0,1-.15-1.92h-.05a4.43,4.43,0,0,1-4.17,2.22c-2.09,0-4.06-1.16-4.06-3.46,0-3.84,4.52-4.09,7.34-4.09Zm-.86,1.36c-1.69,0-5.51.13-5.51,2.5,0,1.57,1.44,2.17,2.78,2.17,2.43,0,3.59-1.71,3.59-3.81v-.86Z" />
            <path class="cls-1"
              d="M202.86,736a5.6,5.6,0,0,0,4.52,2.17c3.38,0,4.59-2.1,4.59-4.64v-2.13h-.05a5.08,5.08,0,0,1-4.42,2.23,6,6,0,0,1-6.16-6,5.93,5.93,0,0,1,6-6.11,5.43,5.43,0,0,1,4.57,2.28H212v-2h1.67V733.5c0,2.57-1,6.16-6.34,6.16a7.3,7.3,0,0,1-5.68-2.38Zm4.7-3.89a4.55,4.55,0,0,0,0-9.09,4.55,4.55,0,0,0,0,9.09Z" />
            <path class="cls-1"
              d="M219,721.78a14.94,14.94,0,0,1,.08,1.89h0a4.75,4.75,0,0,1,4-2.2c3,0,4.45,1.7,4.45,4.63v7.5h-1.67v-6.55c0-2.62-.73-4.06-3.21-4.06-.35,0-3.58.23-3.58,4.55v6.06h-1.67v-9.22c0-.63-.08-1.74-.13-2.6Z" />
            <path class="cls-1"
              d="M239,726.35V726c0-2-1-3-3-3a5.24,5.24,0,0,0-3.61,1.39l-1-1.19a6.78,6.78,0,0,1,5-1.72c2.33,0,4.32,1.32,4.32,4.2v5.27a18.06,18.06,0,0,0,.21,2.66h-1.62a12,12,0,0,1-.15-1.92h0a4.44,4.44,0,0,1-4.17,2.22c-2.1,0-4.07-1.16-4.07-3.46,0-3.84,4.52-4.09,7.35-4.09Zm-.86,1.36c-1.69,0-5.51.13-5.51,2.5,0,1.57,1.44,2.17,2.78,2.17,2.42,0,3.59-1.71,3.59-3.81v-.86Z" />
            <path class="cls-1"
              d="M1662.23,686.32a4,4,0,0,0-3.52-1.77c-1.89,0-3.87,1-3.87,3.28,0,4.89,9.31,2.3,9.31,8.84,0,3.31-3.1,5.26-6,5.26a6.84,6.84,0,0,1-5.72-2.69l1.67-1.21a4.58,4.58,0,0,0,4.12,2.21c1.82,0,3.9-1.18,3.9-3.31,0-5.13-9.31-2.28-9.31-8.92,0-3.51,2.93-5.15,5.87-5.15a6.24,6.24,0,0,1,5.13,2.2Z" />
            <path class="cls-1"
              d="M1675,694.11v-.31c0-2.08-1-3.1-3.07-3.1a5.36,5.36,0,0,0-3.67,1.41l-1-1.21a6.89,6.89,0,0,1,5.07-1.74c2.36,0,4.38,1.33,4.38,4.26v5.35a19.91,19.91,0,0,0,.21,2.7h-1.64a12.33,12.33,0,0,1-.15-2H1675a4.47,4.47,0,0,1-4.23,2.25c-2.12,0-4.12-1.18-4.12-3.51,0-3.89,4.59-4.15,7.46-4.15Zm-.87,1.38c-1.72,0-5.59.13-5.59,2.54,0,1.59,1.46,2.21,2.82,2.21,2.46,0,3.64-1.75,3.64-3.88v-.87Z" />
            <path class="cls-1"
              d="M1681.8,686.08a1.23,1.23,0,1,1,1.23-1.23A1.25,1.25,0,0,1,1681.8,686.08Zm.85,15.39H1681v-12h1.69Z" />
            <path class="cls-1" d="M1688.8,701.47h-1.69V682.09h1.69Z" />
            <path class="cls-1"
              d="M1694.05,695.93a4.48,4.48,0,0,0,8.26,2.23l1.31,1.08a6.27,6.27,0,0,1-5.16,2.53,6.31,6.31,0,0,1-.15-12.61c3.64,0,5.74,2.72,5.74,6v.77Zm8.16-1.39a3.62,3.62,0,0,0-3.9-3.84,4.22,4.22,0,0,0-4.21,3.84Z" />
            <path class="cls-1"
              d="M1713.33,691h-3.46v7.07c0,1.8.69,2.16,1.74,2.16a3.66,3.66,0,0,0,1.74-.47l.08,1.57a5.72,5.72,0,0,1-2.28.43c-1.28,0-3-.56-3-3.2V691h-2.53v-1.54h2.53v-3.39h1.7v3.39h3.46Z" />
            <path class="cls-1"
              d="M1716.81,695.93a4.48,4.48,0,0,0,8.26,2.23l1.3,1.08a6.26,6.26,0,0,1-5.15,2.53,6.31,6.31,0,0,1-.15-12.61c3.64,0,5.74,2.72,5.74,6v.77Zm8.15-1.39a3.61,3.61,0,0,0-3.89-3.84,4.22,4.22,0,0,0-4.21,3.84Z" />
            <path class="cls-1"
              d="M1746.57,698.08l6.12-14.76h2.82v18.15h-1.84V685.78h-.05l-6.57,15.69h-1l-6.56-15.69h0v15.69h-1.85V683.32h2.82Z" />
            <path class="cls-1"
              d="M1761,695.93a4.48,4.48,0,0,0,8.26,2.23l1.31,1.08a6.27,6.27,0,0,1-5.16,2.53,6.31,6.31,0,0,1-.15-12.61c3.64,0,5.74,2.72,5.74,6v.77Zm8.16-1.39a3.62,3.62,0,0,0-3.9-3.84,4.22,4.22,0,0,0-4.21,3.84Z" />
            <path class="cls-1"
              d="M1774.06,682.09h1.7v9.3h0a4.81,4.81,0,0,1,4-2.23c3.05,0,4.51,1.72,4.51,4.69v7.62h-1.69v-6.64c0-2.67-.74-4.13-3.25-4.13-.36,0-3.64.23-3.64,4.61v6.16h-1.7Z" />
            <path class="cls-1"
              d="M1789.49,695.93a4.48,4.48,0,0,0,8.26,2.23l1.3,1.08a6.25,6.25,0,0,1-5.15,2.53,6.31,6.31,0,0,1-.15-12.61c3.64,0,5.74,2.72,5.74,6v.77Zm8.15-1.39a3.61,3.61,0,0,0-3.89-3.84,4.22,4.22,0,0,0-4.21,3.84Z" />
            <path class="cls-1"
              d="M1802.74,693.21c0-1.08,0-2-.1-3.74h1.66v2.23h.06a3.94,3.94,0,0,1,3.84-2.54,4.68,4.68,0,0,1,1.26.15l-.34,1.67a2.73,2.73,0,0,0-1-.13,3.76,3.76,0,0,0-3.72,3.85v6.77h-1.69Z" />
            <path class="cls-1"
              d="M1811.79,695.93a4.47,4.47,0,0,0,8.25,2.23l1.31,1.08a6.26,6.26,0,0,1-5.15,2.53,6.31,6.31,0,0,1-.16-12.61c3.64,0,5.75,2.72,5.75,6v.77Zm8.15-1.39a3.62,3.62,0,0,0-3.9-3.84,4.22,4.22,0,0,0-4.2,3.84Z" />
            <path class="cls-1"
              d="M1831.06,691h-3.46v7.07c0,1.8.69,2.16,1.74,2.16a3.69,3.69,0,0,0,1.75-.47l.07,1.57a5.65,5.65,0,0,1-2.28.43c-1.28,0-3-.56-3-3.2V691h-2.54v-1.54h2.54v-3.39h1.69v3.39h3.46Z" />
            <path class="cls-1"
              d="M1694.36,727.09h-1.84V708.94h5.59c3.69,0,6,1.59,6,4.85,0,2.51-1.67,4.43-4.64,4.69l5.23,8.61h-2.26l-5-8.43h-3.08Zm0-10.12h3.28c3.31,0,4.44-1.44,4.44-3.18s-1.13-3.15-4.44-3.15h-3.28Z" />
            <path class="cls-1"
              d="M1712.84,727.4a6.31,6.31,0,1,1,6.38-6.3A6.13,6.13,0,0,1,1712.84,727.4Zm0-11.07a4.77,4.77,0,1,0,4.54,4.77A4.44,4.44,0,0,0,1712.84,716.33Z" />
            <path class="cls-1"
              d="M1731,727.09a15.41,15.41,0,0,1-.08-1.92h-.05a4.81,4.81,0,0,1-4,2.23c-3,0-4.51-1.72-4.51-4.69V715.1H1724v6.64c0,2.66.74,4.12,3.25,4.12.36,0,3.64-.23,3.64-4.61V715.1h1.7v9.35c0,.64.07,1.77.12,2.64Z" />
            <path class="cls-1"
              d="M1738.16,715.1a15.41,15.41,0,0,1,.08,1.92h0a4.81,4.81,0,0,1,4-2.23c3,0,4.51,1.72,4.51,4.69v7.61h-1.69v-6.64c0-2.66-.74-4.12-3.25-4.12-.36,0-3.64.23-3.64,4.61v6.15h-1.7v-9.35c0-.64-.07-1.77-.12-2.64Z" />
            <path class="cls-1"
              d="M1762.77,727.09h-1.7v-2h0a5.71,5.71,0,0,1-4.66,2.31,6.31,6.31,0,1,1,0-12.61,5.71,5.71,0,0,1,4.66,2.31h0v-9.39h1.7Zm-6.41-1.23a4.77,4.77,0,1,0,0-9.53,4.77,4.77,0,0,0,0,9.53Z" />
            <path class="cls-1"
              d="M1774.14,719.74v-.31c0-2.08-1-3.1-3.07-3.1a5.32,5.32,0,0,0-3.67,1.41l-1-1.21a6.85,6.85,0,0,1,5.07-1.74c2.36,0,4.38,1.33,4.38,4.25v5.36a19.75,19.75,0,0,0,.21,2.69h-1.64a12.2,12.2,0,0,1-.15-1.94h-.06a4.49,4.49,0,0,1-4.23,2.25c-2.12,0-4.12-1.18-4.12-3.51,0-3.9,4.59-4.15,7.46-4.15Zm-.87,1.38c-1.72,0-5.59.13-5.59,2.54,0,1.59,1.46,2.2,2.82,2.2,2.46,0,3.64-1.74,3.64-3.87v-.87Z" />
            <path class="cls-1"
              d="M1779.75,707.71h1.7v9.39h0a5.71,5.71,0,0,1,4.66-2.31,6.31,6.31,0,1,1,0,12.61,5.71,5.71,0,0,1-4.66-2.31h0v2h-1.7Zm6.41,8.62a4.77,4.77,0,1,0,0,9.53,4.77,4.77,0,0,0,0-9.53Z" />
            <path class="cls-1"
              d="M1801.15,727.4a6.31,6.31,0,1,1,6.39-6.3A6.12,6.12,0,0,1,1801.15,727.4Zm0-11.07a4.77,4.77,0,1,0,4.54,4.77A4.44,4.44,0,0,0,1801.15,716.33Z" />
            <path class="cls-1"
              d="M1819.27,727.09a17.6,17.6,0,0,1-.07-1.92h-.06a4.81,4.81,0,0,1-4,2.23c-3,0-4.51-1.72-4.51-4.69V715.1h1.69v6.64c0,2.66.74,4.12,3.26,4.12.36,0,3.64-.23,3.64-4.61V715.1h1.69v9.35c0,.64.07,1.77.13,2.64Z" />
            <path class="cls-1"
              d="M1831.06,716.63h-3.46v7.08c0,1.79.69,2.15,1.74,2.15a3.8,3.8,0,0,0,1.75-.46l.07,1.57a5.65,5.65,0,0,1-2.28.43c-1.28,0-3-.56-3-3.2v-7.57h-2.54V715.1h2.54v-3.39h1.69v3.39h3.46Z" />
            <path class="cls-1"
              d="M1308.27,689.24l-.16.65c-.47,2-.93,4,0,5.83a.53.53,0,0,0,.36.27l1.87.42.61.14a.52.52,0,0,0,.58-.3l0-.09a.52.52,0,0,0-.39-.61l-.36-.07-1.9-.43c-.64-1.49-.26-3.09.16-4.93l.16-.66a8.91,8.91,0,0,1,10.66-6.72l7.74,1.75a9,9,0,0,1,6.93,8.08.48.48,0,0,0,.39.46l3.19.74a5.14,5.14,0,0,1,3.88,6.14,5.24,5.24,0,0,1-1.23,2.34l-4.46-1-.36-.07a.51.51,0,1,0-.23,1l.59.13,4.51,1a.5.5,0,0,0,.48-.13,6.16,6.16,0,0,0-2.95-10.41l-2.82-.64a10,10,0,0,0-7.7-8.64l-7.74-1.76A10,10,0,0,0,1308.27,689.24Z" />
            <path class="cls-1"
              d="M1317.39,697.47a.45.45,0,0,0,0,.2.51.51,0,0,0,.39.42l.6.13,10,2.27.48.11a.51.51,0,0,0,.61-.39.5.5,0,0,0-.38-.61l-.23-.06-10.48-2.38-.36-.08A.54.54,0,0,0,1317.39,697.47Z" />
            <path class="cls-1"
              d="M1328.36,700.49l-.13.44a4.14,4.14,0,1,0,8.08,1.84,2.74,2.74,0,0,0,.06-.48,3.42,3.42,0,0,0,0-1.06,4.14,4.14,0,0,0-7.53-1.69A4,4,0,0,0,1328.36,700.49Zm4.6-1.68a3.12,3.12,0,1,1-3.71,2.35A3.13,3.13,0,0,1,1333,698.81Z" />
            <path class="cls-1"
              d="M1310.37,696.41a2.32,2.32,0,0,0-.13.45,4.15,4.15,0,1,0,8.09,1.83,3.75,3.75,0,0,0,.05-.47l-.6-.13a.51.51,0,0,1-.39-.42h0a2.81,2.81,0,0,1-.07.81,3.11,3.11,0,1,1-6.06-1.38,2.7,2.7,0,0,1,.34-.84h0a.52.52,0,0,1-.58.3Zm0,0a2.32,2.32,0,0,0-.13.45,4.15,4.15,0,1,0,8.09,1.83,3.75,3.75,0,0,0,.05-.47,2.9,2.9,0,0,0,0-1.06,4.12,4.12,0,0,0-7.51-1.68A4.09,4.09,0,0,0,1310.37,696.41Zm1.21-.16a3.09,3.09,0,0,1,5.79,1.41,2.81,2.81,0,0,1-.07.81,3.11,3.11,0,1,1-6.06-1.38A2.7,2.7,0,0,1,1311.58,696.25Z" />
            <path class="cls-1"
              d="M1309.27,689.46l-.16.66c-.42,1.84-.8,3.44-.16,4.93l1.9.43a4.12,4.12,0,0,1,7.51,1.68l10.48,2.38a4.14,4.14,0,0,1,7.53,1.69l4.46,1a5.24,5.24,0,0,0,1.23-2.34,5.14,5.14,0,0,0-3.88-6.14L1335,693a.48.48,0,0,1-.39-.46,9,9,0,0,0-6.93-8.08l-7.74-1.75A8.91,8.91,0,0,0,1309.27,689.46Z" />
            <path class="cls-1"
              d="M538,540.12v.7c0,2.14,0,4.17-1.4,5.81a.54.54,0,0,1-.42.18l-2,0h-.63a.54.54,0,0,1-.51-.44l0-.09a.53.53,0,0,1,.54-.52H534l2,0c1-1.34,1-3,1-5v-.7a9.14,9.14,0,0,0-9.06-9.22l-8.14-.07a9.23,9.23,0,0,0-8.83,6.44.49.49,0,0,1-.5.36h-3.36a5.28,5.28,0,0,0-4.64,7.85l4.7,0h.38a.54.54,0,0,1,.52.53.52.52,0,0,1-.53.52h-.62l-4.74,0a.5.5,0,0,1-.46-.24,6.4,6.4,0,0,1-1-3.44,6.31,6.31,0,0,1,6.38-6.26l3,0a10.26,10.26,0,0,1,9.72-6.81l8.14.06A10.2,10.2,0,0,1,538,540.12Z" />
            <path class="cls-1"
              d="M527,546.2a1,1,0,0,1,0,.2.51.51,0,0,1-.49.32h-.64l-10.5-.08h-.5a.55.55,0,0,1-.53-.53.53.53,0,0,1,.54-.52H515l11,.09h.38A.55.55,0,0,1,527,546.2Z" />
            <path class="cls-1"
              d="M515,545.57a4.25,4.25,0,0,0-7.92-.08,3.73,3.73,0,0,0-.25,1.06,3.69,3.69,0,0,0-.05.49,4.25,4.25,0,1,0,8.5.06c0-.14,0-.31,0-.46A4.28,4.28,0,0,0,515,545.57Zm-.79,1.53a3.19,3.19,0,1,1-3.16-3.22A3.2,3.2,0,0,1,514.24,547.1Z" />
            <path class="cls-1"
              d="M533.57,546.79a.54.54,0,0,1-.51-.44h0a2.77,2.77,0,0,1,.14.92,3.19,3.19,0,1,1-6.38,0,2.88,2.88,0,0,1,.13-.83h0a.51.51,0,0,1-.49.32h-.64a3.54,3.54,0,0,0,0,.48,4.25,4.25,0,1,0,8.5.08,2,2,0,0,0,0-.49Zm.38-1a4.23,4.23,0,0,0-7.9-.09,3.07,3.07,0,0,0-.27,1.06,3.54,3.54,0,0,0,0,.48,4.25,4.25,0,1,0,8.5.08,2,2,0,0,0,0-.49A4,4,0,0,0,534,545.75Zm-.77,1.52a3.19,3.19,0,1,1-6.38,0,2.88,2.88,0,0,1,.13-.83,3.17,3.17,0,0,1,6.11,0A2.77,2.77,0,0,1,533.18,547.27Z" />
            <path class="cls-1"
              d="M536.94,540.11v.7c0,1.93,0,3.62-1,5l-2,0a4.23,4.23,0,0,0-7.9-.09l-11-.09a4.25,4.25,0,0,0-7.92-.08l-4.7,0a5.28,5.28,0,0,1,4.64-7.85h3.36a.49.49,0,0,0,.5-.36,9.23,9.23,0,0,1,8.83-6.44l8.14.07A9.14,9.14,0,0,1,536.94,540.11Z" />
            <rect class="cls-2" width="1920" height="1203" />
          </g>
        </g>
      </svg>



      
    </div>


  </div>

  
  <div  data-scroll-section>
<br><br><br><br>
    <div class="header">
      <h1 class="is-size-3 display">Contact</h1>
      <div class="columns">
        <div class="column">
          <br><br>
          <h3 class="is-size-5">Address</h3>
          <p class="light-gray is-size-7">Israel Embassy, Yeka, Addis Abeba, Ethiopia</p>
          <br>
          <h3 class="is-size-5">Phone</h3>
          <a href="tel:+251901844448" class="light-gray is-size-7">+(251) 901 84 44 48</a><br>
          <a href="tel:+251901577775" class="light-gray is-size-7">+(251) 901 57 77 75</a>
          <br>
          <h3 class="is-size-5">Email</h3>
          <a href="mailto:sales@girarapartments.com" class="light-gray is-size-7">sales@girarapartments.com</a>
        </div>

        <div class="column">
          <br><br>
          <h3 class="is-size-5">Social</h3>
          <a href="https://www.facebook.com/girarapartments/" class="light-gray is-size-7"> <span class="icon">
            <img src="./images/home/icons/facebook.svg" width="15" alt="">
          </span> FACEBOOK</a><br>
          <a href="https://www.instagram.com/girarapartments/" class="light-gray is-size-7"><span class="icon">
            <img src="./images/home/icons/instagram.svg" width="15" alt="">
          </span> INSTAGRAM</a><br>
          <a href="https://www.tiktok.com/@girarapartments" class="light-gray is-size-7"><span class="icon">
            <img src="./images/home/icons/tiktok.svg" width="15" alt="">
          </span> TIKTOK</a><br>
          <a href="tel:+251901844448" class="light-gray is-size-7"><span class="icon">
            <img src="./images/home/icons/whatsapp.svg" width="15" alt="">
          </span> WHATSAPP</a><br>
          <a href="https://t.me/girarapartments" class="light-gray is-size-7"><span class="icon">
            <img src="./images/home/icons/telegram.svg" width="15" alt="">
          </span> TELEGRAM</a>
        </div>

        <div class="column is-6">
          <br><br>
          <h3 class="is-size-5">Contact Form</h3>

          <form name="frmContact" id="" frmContact"" method="post" action=""
			enctype="multipart/form-data" onsubmit="return validateContactForm()">

            <div class="columns">
              <div class="column">
                <div class="field">
                  <input type="text" name="userName" id="userName" class="input is-light has-background-light" placeholder="Name">
                </div>
              </div>
              <div class="column">
                <div class="field">
                  <input type="email" name="userEmail"
					id="userEmail" class="input is-light has-background-light" placeholder="Email Address">
                </div>
              </div>
            </div>

            <div class="columns">
              <div class="column my-0 py-0">
                <div class="field">
                  <textarea  name="content" id="content" class="textarea is-light has-background-light" placeholder="Message"></textarea>
                </div>
              </div>
            </div>

            <div class="has-text-right">
              <button type="submit" style="border-radius: 10px;" class="button is-black has-background-success has-text-weight-bold">Send</button>
            </div>

            <div id="statusMessage"> 
                        <?php
                        if (! empty($message)) {
                            ?>
                            <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                        <?php
                        }
                        ?>
                    </div>

          </form>
        </div>


      </div>
    </div>

    <br><br><br><br>
  </div>


  <!-- Main Content End -->

<div  data-scroll-section>


  <footer class="footer">
    <div class="header" data-scroll>

      <div  class="columns">
        <div class="column has-text-centered-mobile">
          <img src="./images/logo/girar-logo-text.svg" alt="logo large" width="150" class="pr-5 mb-5" style="filter: brightness(100);">

          <p class="has-text-white is-size-7">
            Luxurious modern apartments for sale near Israel Embassy in Addis Ababa. We build with uncompromising quality with your future in mind.
          </p>

          <br>
          <p class="is-size-7 has-text-weight-bold py-2 has-text-white">&copy; 2022 GIRAR APARTMENTS</p>
          <p class="is-size-7 has-text-white">Addis Ababa, Ethiopia</p>
          <p class="is-size-7 has-text-white">All Rights Reserved</p>
        </div>

        <div class="column has-text-centered-mobile">
          
        </div>
        <div class="column has-text-right has-text-centered-mobile">
          <a href="#" onclick="window.locomotive.scrollTo(document.getElementById('contact-info'))">
            <img src="./images/home/icons/up-arrow.svg" width="70" alt="">
          </a>
        </div>
      </div>

       



    </div>

  </footer>

  

<div class="is-hidden-mobile"  data-scroll-section style="height: 320px;">

</div>


  <script src="./js/script-nav.js"></script>

  <!-- Get minor updates and patch fixes within a major version -->
  <script src="./vendor/jquery.min.js"></script>
  <script src="./vendor/bigpicture/BigPicture.min.js"></script>
  <script src="./vendor/locomotive-scroll/locomotive-scroll.min.js"></script>


  <script>
    

    try {
      const dataScrollContainer = document.querySelector(
        '[data-scroll-container]',
      )

      if (!dataScrollContainer) {
        console.warn(
          'locomotive-scroll: [data-scroll-container] dataset was not found. You likely forgot to add it which will prevent Locomotive Scroll to work.',
        )
      }

      window.locomotive = new LocomotiveScroll({
        el: dataScrollContainer ?? undefined,
        smooth: true,
      })
    } catch (error) { }




    function openGallery() {
      BigPicture({
        el: document.getElementById("gallery"),
        gallery: '#image_container',
        loop: true,
        allowfullscreen: true
      })
    }
  </script>

  <!-- <script src="./vendor/gsap/minified/gsap.min.js"></script> -->
  <!-- <script src="./vendor/gsap/minified/ScrollTrigger.min.js"></script> -->


  <script src="./vendor/owl-carousel/owl.carousel.js"></script>

  <!-- <script src="./js/script-animation.js"></script> -->

  <!-- <script src="./vendor/bigpicture/BigPicture.min.js"></script> -->

  <!-- <script src="./js/bigpicture.js"></script> -->

  <script>
    


    $(document).ready(function () {
      $("#main-slider").owlCarousel({
        loop: true,
        margin: 10,
        nav: true,

        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        drag: false,
        autoplaySpeed: 2000,
        autoplay: 1,
        responsive: {
          0: {
            items: 1
          },
        }
      });

      $("#main-slider2").owlCarousel({
        loop: true,
        margin: 10,
        nav: true,

        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        drag: false,
        autoplaySpeed: 2000,
        autoplay: 1,
        responsive: {
          0: {
            items: 1
          },
        }
      });

      $("#gallery").owlCarousel({
        margin: 2,
        // // loop: true,
        // nav: true,
        // drag: true,
        responsive: {
         
          0 : {
        items: 1
          },
          // breakpoint from 480 up
          480 : {
            items: 1
          },
          // breakpoint from 768 up
          768 : {
            items: 1
          },
          1024 : {
            items: 3
          }
        }
      });

      $("#gallery2").owlCarousel({
        margin: 2,
        // // loop: true,
        // nav: true,
        // drag: true,
        responsive: {
         
          0 : {
        items: 1
          },
          // breakpoint from 480 up
          480 : {
            items: 1
          },
          // breakpoint from 768 up
          768 : {
            items: 1
          },
          1024 : {
            items: 3
          }
        }
      });
    });


    function validateContactForm() {
	var valid = true;

	$(".info").html("");
	$(".input-field").css('border', '#e0dfdf 1px solid');
	var userName = $("#userName").val();
	var userEmail = $("#userEmail").val();
	var subject = $("#subject").val();
	var content = $("#content").val();

	if (userName == "") {
		$("#userName-info").html("Required.");
		$("#userName").css('border', '#e66262 1px solid');
		valid = false;
	}
	if (userEmail == "") {
		$("#userEmail-info").html("Required.");
		$("#userEmail").css('border', '#e66262 1px solid');
		valid = false;
	}
	if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
		$("#userEmail-info").html("Invalid Email Address.");
		$("#userEmail").css('border', '#e66262 1px solid');
		valid = false;
	}

	if (subject == "") {
		$("#subject-info").html("Required.");
		$("#subject").css('border', '#e66262 1px solid');
		valid = false;
	}
	if (content == "") {
		$("#userMessage-info").html("Required.");
		$("#content").css('border', '#e66262 1px solid');
		valid = false;
	}
	return valid;
}



    document.getElementById("living-room").classList.toggle("zoomed")
    setInterval(() => {
      document.getElementById("living-room").classList.toggle("zoomed")
    }, 5000);

    const wait = (delay = 0) =>
  new Promise(resolve => setTimeout(resolve, delay));

    document.addEventListener('DOMContentLoaded', () =>
  wait(1000).then(() => {
    document.getElementById("pageloader").classList.remove("is-active");
    document.getElementsByTagName("body")[0].classList.add("loaded");
  }));
  </script>


  <script nomodule src="https://cdnjs.cloudflare.com/ajax/libs/babel-polyfill/7.6.0/polyfill.min.js"
    crossorigin="anonymous"></script>
  <script nomodule
    src="https://polyfill.io/v3/polyfill.min.js?features=Object.assign%2CElement.prototype.append%2CNodeList.prototype.forEach%2CCustomEvent%2Csmoothscroll"
    crossorigin="anonymous"></script>
</body>

</html>