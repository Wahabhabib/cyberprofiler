<?php 
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel='icon' href='src/img/favicon1.ico' type='image/x-icon'/ >
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="src/styles/styles.css" />
    <title>Cyberprofilier</title>
  </head>
  <body>
    <div class="loader">
      <div>
        <div class="loader-titile">
        <p>Cyberprofilier</p>
        </div>
        <div class="sk-cube-grid">
            <div class="sk-cube sk-cube1"></div>
            <div class="sk-cube sk-cube2"></div>
            <div class="sk-cube sk-cube3"></div>
            <div class="sk-cube sk-cube4"></div>
            <div class="sk-cube sk-cube5"></div>
            <div class="sk-cube sk-cube6"></div>
            <div class="sk-cube sk-cube7"></div>
            <div class="sk-cube sk-cube8"></div>
            <div class="sk-cube sk-cube9"></div>
        </div>
      </div>
  </div>


    <div class="containers">

    <!-- <div id="particles-js"></div> -->

      <div class="container-fluid header">
      <div class="container pt-5">
        <!-- logo -->
        <div class="row text-center text-md-left">
          <div class="col-12" >
            <div class="logo" ">
              <img src="src/img/Logo.png"  />
            </div>
          </div>
        </div>
        <!-- logo ends -->

        <!-- vision -->
        <div class="row">
          <div class="col-12 col-md-7 col-lg-7 col-xl-6 vision">
            <h5 class="vision-title">Our Vision</h5>
            <p class="vision-text">
              To develop a cyber security program that supports all areas of
              ACME's business and efficiently mitigates all attempts at cyber
              attack or data loss for individual and organizations.
            </p>
            <div class="row subscribe-section" >
              <div class="col-12 col-md-9">
                <form action="submit.php" method="POST">
                  <div class="input-group">
                    <input
                      type="email"
                      class="form-control email-input"
                      name="email"
                      placeholder="Enter your Email..."
                      required
                      aria-label="Recipient's username"
                      aria-describedby="basic-addon2"
                    />
                    <div class="input-group-append">
                      <button
                        class="btn subscribe-btn animation-delay"
                        type="submit"
                        name="submit"
                        id="basic-addon2"
                        
                      >
                        Notify Me
                      </button>
                    </div>
                  </div>
                  <?php
                if(isset($_SESSION["error"])){
                    $error = $_SESSION["error"];
                    echo "<p id='error' class='text-center mt-1 bg-danger p-3 text-white col-md-8 mx-auto'>$error</p>";
                    echo "<script>setTimeout(function() { document.getElementById('error').style.display='none'; }, 5000);</script>";
                    unset($_SESSION["error"]);
                }
                if(isset($_SESSION["success"])){
                    $success = $_SESSION["success"];
                    echo "<p id='success' class='text-center mt-1 bg-success p-3 text-white col-md-8 mx-auto'>$success</p>";
                    echo "<script>setTimeout(function() { document.getElementById('success').style.display='none'; }, 5000);</script>";
                    unset($_SESSION["success"]);
                }
            ?>
                </form>
              </div>
            </div>
          </div>

          <div class="col-12 text-center col-md-3 col-lg-3 offset-lg-1 offset-xl-2 text-md-right">
            <img src="src/img/phone-1.png" class="img-fluid phone-img popup" alt="" />
          </div>
        </div>
        <!-- vision ends -->
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-12 col-md-5 col-lg-5 col-xl-4 " >
          <div class="iphone-1">
            <img src="src/img/iphone3.png" class="popup" alt="" />
          </div>
          <div class="iphone-2">
            <img src="src/img/iphone-2.png" class="popup" alt="" />
          </div>
          <div class="iphone-3" >
            <img src="src/img/iphone-1.png" class="popup" alt="" />
          </div>
        </div>

        <div class="col-md-6 col-lg-5 col-xl-4 our-apporach">
          <div class="">
            <h5>our apporach</h5>
            <p>
              Cyber Profiler will identify and address the grand challenges in
              cybersecurity and privacy. We will educate and train students and
              professionals through degree and life-long learning programs.
            </p>
          </div>
        </div>

        <div class="col-md-2 d-none d-xl-block">
          <div class="side-vector">
            <img src="src/img/side-vector.png" alt="" />
          </div>
        </div>
      </div>
    </div>
    <!-- procedures -->

    <div class="container-fluid works">
      <div class="container">
        <div class="row">
          <div class="col">
            <h5 class="works-title">how the app works</h5>
          </div>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="row d-flex analize">
              <div class="col-md-6 align-self-center">
                <p class="analize-text">
                  It analize how your friends impact your social security
                  through the means of social media and other platforms.
                </p>
              </div>
              <div class="col-md-6">
                <div>
                  <img src="src/img/works1.png" class="popup" alt="" />
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="row d-flex report">
              <div class="col-md-6">
                <div>
                  <img src="src/img/works1.png" class="popup" alt="" />
                </div>
              </div>

              <div class="col-md-6 align-self-center">
                <p class="analize-text">
                  See the report of analysis conducted classified by social
                  media activities. Get security badge on your friend’s profile.
                </p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!-- procedures ends -->

    <!-- almost reddy -->
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="almost-ready text-center pt-5">
            <h3 class="ready-title">Our App is Almost Ready</h3>
            <p>Get Notified</p>
            <div class="row justify-content-center subscribe-section">
              <div class="col-11 col-md-7 col-lg-5">
              <form action="submit.php" method="POST">
                  <div class="input-group">
                    <input
                      type="email"
                      class="form-control email-input"
                      name="email"
                      placeholder="Enter your Email..."
                      required
                      aria-label="Recipient's username"
                      aria-describedby="basic-addon2"
                    />
                    <div class="input-group-append">
                      <button
                        class="btn subscribe-btn"
                        type="submit"
                        name="submit"
                        id="basic-addon2"
                      >
                        Notify Me
                      </button>
                    </div>
                  </div>

                  <?php
                if(isset($_SESSION["error"])){
                    $error = $_SESSION["error"];
                    echo "<p id='error' class='text-center mt-1 bg-danger p-3 text-white col-md-8 mx-auto'>$error</p>";
                    echo "<script>setTimeout(function() { document.getElementById('error').style.display='none'; }, 5000);</script>";
                    unset($_SESSION["error"]);
                }
                if(isset($_SESSION["success"])){
                    $success = $_SESSION["success"];
                    echo "<p id='success' class='text-center mt-1 bg-success p-3 text-white col-md-8 mx-auto'>$success</p>";
                    echo "<script>setTimeout(function() { document.getElementById('success').style.display='none'; }, 5000);</script>";
                    unset($_SESSION["success"]);
                }
            ?>

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- almost reddy ends -->

    <div class="container" style="overflow-x: visible !important;">
      <div class="row" style="overflow-x: visible !important;" >
        <div class="col-10">
          <div class="modal">
            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog border-none" role="document">
                <div class="modal-content border-none" style="background-color: transparent !important;">
               
                
                <div class="modal-header border-none" >
              <button type="button" class="close border-none" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" class="text-white border-none">&times;</span>
              </button>
            </div>
      
                  <img id="popup-img" src="" style="width: 50%; margin-left: 25%;  margin-right: 25%;" class="img-fluid" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="container-fluid">
      <div class="row">
        <!-- coming soon  -->
        <div class="col-12 text-center coming-soon">
          <h5 class="animated-text">
          <a href="" class="typewrite" data-period="2000" data-type='[ "Coming soon.", "subscribe to get notified.", "your best security app.", "you can never be too careful....." ]'>
              <span class="wrap"></span>
            </a>
          </h5>
          
        </div>
        <!-- coming soon ends -->

        <!-- countdown -->
        <div class="col-12 countdown-wrapper">
          <div class="row justify-content-center text-center">
            <div class="col-6 mt-4 col-md-2 mt-md-0">
              <span class="countdown countdown-day">00</span> <br />
              <span class="tags">day(s)</span>
            </div>
            <div class="col-6 mt-4 col-md-2 mt-md-0">
              <span class="countdown countdown-hour">00</span> <br />
              <span class="tags">hour(s)</span>
            </div>
            <div class="col-6 mt-4 col-md-2 mt-md-0">
              <span class="countdown countdown-minutes">00</span> <br />
              <span class="tags">minute(s)</span>
            </div>
            <div class="col-6 mt-4 col-md-2 mt-md-0">
              <span class="countdown countdown-seconds">00</span> <br />
              <span class="tags">second(s)</span>
            </div>
          </div>
        </div>
        
        <!-- coundown ends -->

        <!-- socials -->
        <div class="col-md-12 socials">
          <div class="row justify-content-center">
            <div class="col-3 col-md-1 text-center">
              <svg
                width="34"
                height="34"
                viewBox="0 0 34 34"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M33.4688 17.25C33.4688 21.3229 32.1406 24.9089 29.4844 28.0078C26.8281 31.0625 23.5299 32.8997 19.5898 33.5195V22.0312H23.4414L24.1719 17.25H19.5898V14.1289C19.5898 12.4466 20.4753 11.6055 22.2461 11.6055H24.3047V7.55469C23.0651 7.33333 21.8477 7.22266 20.6523 7.22266C19.3685 7.22266 18.2617 7.46615 17.332 7.95312C16.4466 8.4401 15.7383 9.17057 15.207 10.1445C14.6758 11.1185 14.4102 12.2695 14.4102 13.5977V17.25H10.2266V22.0312H14.4102V33.5195C10.4701 32.8997 7.17188 31.0625 4.51562 28.0078C1.85938 24.9089 0.53125 21.3229 0.53125 17.25C0.53125 12.6901 2.125 8.81641 5.3125 5.62891C8.54427 2.39714 12.4401 0.78125 17 0.78125C21.5599 0.78125 25.4336 2.39714 28.6211 5.62891C31.8529 8.81641 33.4688 12.6901 33.4688 17.25Z"
                  fill="white"
                />
              </svg>
            </div>
            <div class="col-3 col-md-1 text-center">
              <svg
                width="30"
                height="31"
                viewBox="0 0 30 31"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M9.62109 9.87109C11.1263 8.36589 12.9414 7.61328 15.0664 7.61328C17.1914 7.61328 18.9844 8.36589 20.4453 9.87109C21.9505 11.332 22.7031 13.125 22.7031 15.25C22.7031 17.375 21.9505 19.1901 20.4453 20.6953C18.9844 22.1562 17.1914 22.8867 15.0664 22.8867C12.9414 22.8867 11.1263 22.1562 9.62109 20.6953C8.16016 19.1901 7.42969 17.375 7.42969 15.25C7.42969 13.125 8.16016 11.332 9.62109 9.87109ZM11.5469 18.7695C12.5208 19.7435 13.694 20.2305 15.0664 20.2305C16.4388 20.2305 17.612 19.7435 18.5859 18.7695C19.5599 17.7956 20.0469 16.6224 20.0469 15.25C20.0469 13.8776 19.5599 12.7044 18.5859 11.7305C17.612 10.7565 16.4388 10.2695 15.0664 10.2695C13.694 10.2695 12.5208 10.7565 11.5469 11.7305C10.5729 12.7044 10.0859 13.8776 10.0859 15.25C10.0859 16.6224 10.5729 17.7956 11.5469 18.7695ZM24.2305 6.08594C24.5846 6.39583 24.7617 6.79427 24.7617 7.28125C24.7617 7.76823 24.5846 8.1888 24.2305 8.54297C23.9206 8.89714 23.5221 9.07422 23.0352 9.07422C22.5482 9.07422 22.1276 8.89714 21.7734 8.54297C21.4193 8.1888 21.2422 7.76823 21.2422 7.28125C21.2422 6.79427 21.4193 6.39583 21.7734 6.08594C22.1276 5.73177 22.5482 5.55469 23.0352 5.55469C23.5221 5.55469 23.9206 5.73177 24.2305 6.08594ZM29.875 9.14062C29.9193 10.3359 29.9414 12.3724 29.9414 15.25C29.9414 18.1276 29.9193 20.1641 29.875 21.3594C29.7422 24.0599 28.9232 26.1628 27.418 27.668C25.957 29.1289 23.8763 29.9036 21.1758 29.9922C19.9805 30.0807 17.944 30.125 15.0664 30.125C12.1888 30.125 10.1523 30.0807 8.95703 29.9922C6.25651 29.8594 4.17578 29.0625 2.71484 27.6016C2.13932 27.0703 1.67448 26.4505 1.32031 25.7422C0.966146 25.0339 0.700521 24.3477 0.523438 23.6836C0.390625 23.0195 0.324219 22.2448 0.324219 21.3594C0.235677 20.1641 0.191406 18.1276 0.191406 15.25C0.191406 12.3724 0.235677 10.3138 0.324219 9.07422C0.457031 6.41797 1.25391 4.35938 2.71484 2.89844C4.17578 1.39323 6.25651 0.574219 8.95703 0.441406C10.1523 0.397135 12.1888 0.375 15.0664 0.375C17.944 0.375 19.9805 0.397135 21.1758 0.441406C23.8763 0.574219 25.957 1.39323 27.418 2.89844C28.9232 4.35938 29.7422 6.4401 29.875 9.14062ZM26.6875 24.0156C26.8203 23.6615 26.931 23.2188 27.0195 22.6875C27.1081 22.112 27.1745 21.4479 27.2188 20.6953C27.263 19.8984 27.2852 19.2565 27.2852 18.7695C27.2852 18.2826 27.2852 17.5964 27.2852 16.7109C27.2852 15.8255 27.2852 15.3385 27.2852 15.25C27.2852 15.1172 27.2852 14.6302 27.2852 13.7891C27.2852 12.9036 27.2852 12.2174 27.2852 11.7305C27.2852 11.2435 27.263 10.6237 27.2188 9.87109C27.1745 9.07422 27.1081 8.41016 27.0195 7.87891C26.931 7.30339 26.8203 6.83854 26.6875 6.48438C26.1562 5.11198 25.2044 4.16016 23.832 3.62891C23.4779 3.49609 23.013 3.38542 22.4375 3.29688C21.9062 3.20833 21.2422 3.14193 20.4453 3.09766C19.6927 3.05339 19.0729 3.03125 18.5859 3.03125C18.1432 3.03125 17.457 3.03125 16.5273 3.03125C15.6419 3.03125 15.1549 3.03125 15.0664 3.03125C14.9779 3.03125 14.4909 3.03125 13.6055 3.03125C12.7201 3.03125 12.0339 3.03125 11.5469 3.03125C11.0599 3.03125 10.418 3.05339 9.62109 3.09766C8.86849 3.14193 8.20443 3.20833 7.62891 3.29688C7.09766 3.38542 6.65495 3.49609 6.30078 3.62891C4.92839 4.16016 3.97656 5.11198 3.44531 6.48438C3.3125 6.83854 3.20182 7.30339 3.11328 7.87891C3.02474 8.41016 2.95833 9.07422 2.91406 9.87109C2.86979 10.6237 2.84766 11.2435 2.84766 11.7305C2.84766 12.1732 2.84766 12.8594 2.84766 13.7891C2.84766 14.6745 2.84766 15.1615 2.84766 15.25C2.84766 15.4271 2.84766 15.8477 2.84766 16.5117C2.84766 17.1315 2.84766 17.6628 2.84766 18.1055C2.84766 18.5039 2.84766 19.0352 2.84766 19.6992C2.89193 20.3633 2.9362 20.9388 2.98047 21.4258C3.02474 21.8685 3.09115 22.3333 3.17969 22.8203C3.26823 23.3073 3.35677 23.7057 3.44531 24.0156C4.02083 25.388 4.97266 26.3398 6.30078 26.8711C6.65495 27.0039 7.09766 27.1146 7.62891 27.2031C8.20443 27.2917 8.86849 27.3581 9.62109 27.4023C10.418 27.4466 11.0378 27.4688 11.4805 27.4688C11.9674 27.4688 12.6536 27.4688 13.5391 27.4688C14.4688 27.4688 14.9779 27.4688 15.0664 27.4688C15.1992 27.4688 15.6862 27.4688 16.5273 27.4688C17.4128 27.4688 18.099 27.4688 18.5859 27.4688C19.0729 27.4688 19.6927 27.4466 20.4453 27.4023C21.2422 27.3581 21.9062 27.2917 22.4375 27.2031C23.013 27.1146 23.4779 27.0039 23.832 26.8711C25.2044 26.2956 26.1562 25.3438 26.6875 24.0156Z"
                  fill="white"
                />
              </svg>
            </div>
            <div class="col-3 col-md-1 text-center">
              <svg
                width="34"
                height="29"
                viewBox="0 0 34 29"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M30.4805 7.34375C30.5247 7.52083 30.5469 7.80859 30.5469 8.20703C30.5469 10.5534 30.1042 12.8997 29.2188 15.2461C28.3333 17.5482 27.0716 19.6732 25.4336 21.6211C23.8398 23.5247 21.7591 25.0742 19.1914 26.2695C16.6237 27.4648 13.7904 28.0625 10.6914 28.0625C6.79557 28.0625 3.23177 27.0221 0 24.9414C0.486979 24.9857 1.04036 25.0078 1.66016 25.0078C4.89193 25.0078 7.79167 24.0117 10.3594 22.0195C8.8099 22.0195 7.4375 21.5768 6.24219 20.6914C5.09115 19.7617 4.29427 18.6107 3.85156 17.2383C4.29427 17.2826 4.71484 17.3047 5.11328 17.3047C5.73307 17.3047 6.35286 17.2383 6.97266 17.1055C5.91016 16.8841 4.95833 16.4414 4.11719 15.7773C3.27604 15.1133 2.61198 14.3164 2.125 13.3867C1.63802 12.4128 1.39453 11.3724 1.39453 10.2656V10.1328C2.36849 10.7083 3.40885 11.0182 4.51562 11.0625C2.4349 9.64583 1.39453 7.69792 1.39453 5.21875C1.39453 3.97917 1.72656 2.80599 2.39062 1.69922C4.11719 3.86849 6.22005 5.59505 8.69922 6.87891C11.2227 8.16276 13.901 8.87109 16.7344 9.00391C16.6458 8.47266 16.6016 7.94141 16.6016 7.41016C16.6016 5.50651 17.2656 3.86849 18.5938 2.49609C19.9661 1.1237 21.6042 0.4375 23.5078 0.4375C25.5443 0.4375 27.2487 1.16797 28.6211 2.62891C30.2148 2.31901 31.6979 1.76562 33.0703 0.96875C32.5391 2.60677 31.5208 3.89062 30.0156 4.82031C31.3438 4.64323 32.6719 4.26693 34 3.69141C33.026 5.10807 31.8529 6.32552 30.4805 7.34375Z"
                  fill="white"
                />
              </svg>
            </div>
          </div>
        </div>
        <!-- socials ends -->

        <div class="col-12 credit text-center">
          <p>Designed by @DeboraT, Coded by @CodeHub</p>
        </div>
      </div>
    </footer>


    </div>

    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
      integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
      crossorigin="anonymous"
    ></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="src/js/index.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.js"></script>
    <script>

      $(".popup").click(function () {
        let src = $(this).attr("src");
        $(".modal").modal("show");
        $("#popup-img").attr("src", src);
      });

        let TxtType = function(el, toRotate, period) {
          this.toRotate = toRotate;
          this.el = el;
          this.loopNum = 0;
          this.period = parseInt(period, 10) || 2000;
          this.txt = '';
          this.tick();
          this.isDeleting = false;
      };

      TxtType.prototype.tick = function() {
          var i = this.loopNum % this.toRotate.length;
          var fullTxt = this.toRotate[i];

          if (this.isDeleting) {
          this.txt = fullTxt.substring(0, this.txt.length - 1);
          } else {
          this.txt = fullTxt.substring(0, this.txt.length + 1);
          }

          this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

          let that = this;
          let delta = 200 - Math.random() * 100;

          if (this.isDeleting) { delta /= 2; }

          if (!this.isDeleting && this.txt === fullTxt) {
          delta = this.period;
          this.isDeleting = true;
          } else if (this.isDeleting && this.txt === '') {
          this.isDeleting = false;
          this.loopNum++;
          delta = 500;
          }

          setTimeout(function() {
          that.tick();
          }, delta);
      };

      window.onload = function() {
          var elements = document.getElementsByClassName('typewrite');
          for (var i=0; i<elements.length; i++) {
              var toRotate = elements[i].getAttribute('data-type');
              var period = elements[i].getAttribute('data-period');
              if (toRotate) {
                new TxtType(elements[i], JSON.parse(toRotate), period);
              }
          }
          // INJECT CSS
          var css = document.createElement("style");
          css.type = "text/css";
          css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
          document.body.appendChild(css);
      };
 
    </script>
  </body>
</html>
