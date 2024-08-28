<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Welcome :: Mormugao Port Authority, Goa </title>
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}" />
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick-theme.min.css') }}" />
    <link href="{{ asset('css/aos.css') }}" rel="stylesheet" />
    <script src="{{ asset('js/countUp.js') }}"></script>
</head>

<body onload="hidePreloader()">

    {{-- ************************** header section ************************** --}}
    @include('layouts.header')
    {{-- ****************************** sidebar **************************************** --}}
    @include('layouts.sidebar')
    {{-- ********************** content ****************************** --}}
    @yield('content')

    <!-- FOOTER SECTION START -->
    <footer>
        <div class="container">
            <div class="row gy-4 justify-content-between">
                <div data-aos="fade-up" class="col-md-3 aos-init">
                    <div class="address">
                        <img class="img-fluid" src="./images/logosm.jpg" alt="logo" />
                        <h4>Contact</h4>
                        <small><strong>MORMUGAO PORT AUTHORITY,</strong> <br />
                            Finance Department, Administrative Building, Headland Sada,
                            Goa-403804</small>
                        <div class="social">
                            <h4>Follow us on</h4>
                            <div class="socila-icon">
                                <div class="social-link">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </div>
                                <div class="social-link">
                                    <i class="fab fa-twitter"></i>
                                </div>
                                <div class="social-link">
                                    <i class="fab fa-instagram"></i>
                                </div>
                                <div class="social-link">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-up" class="col-md-2 aos-init">
                    <div class="services">
                        <h4>Services</h4>
                        <ul>
                            <li><a href="#">Important Links</a></li>
                            <li><a href="#">Hindi Magazine</a></li>
                            <li><a href="#">Terms and Condition</a></li>
                            <li><a href="#">Hyperlinking Policy</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Disclaimer</a></li>
                            <li><a href="#">Copyright Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div data-aos="fade-up" class="col-md-4 aos-init">
                    <div class="contact">
                        <form class="row gy-3">
                            <div class="col-12">
                                <input required type="text" class="form-control shadow-none" placeholder="Your name"
                                    aria-label="Your name" />
                            </div>
                            <div class="col-12">
                                <input required type="email" class="form-control shadow-none"
                                    placeholder="Your email address" aria-label="Your email address" />
                            </div>
                            <div class="col-12">
                                <textarea required rows="5" class="form-control shadow-none" placeholder="Your message"
                                    aria-label="Your message"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="copyright">
                <p>Copyright © 2024 MPT Goa.</p>
                <p>
                    <span class="me-md-2">Visitors : 10003323,</span> Last Updated on:
                    08/03/2024 12:59:34
                </p>
            </div>
        </div>
    </footer>
    <!-- FOOTER SECTION END -->
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"> </script>
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/slick.min.js') }}">
    </script>
    <script type="text/javascript">
        // JavaScript to hide the preloader
    function hidePreloader() {
      setTimeout(() => {
        const preloader = document.getElementById("preloader");
        preloader.style.opacity = 0;
        preloader.style.visibility = "hidden";
      }, 500);
    }

    // Initialize CountUp.js
    // let daycounter = new CountUp('daycounter', 0, 82)
    // let hrcounter = new CountUp('hrcounter', 0, 44)
    // let toncounter = new CountUp('toncounter', 0, 19218)
    // let percounter = new CountUp('percounter', 0, 34)
    // let milcounter = new CountUp('milcounter', 0, 48)

    // daycounter.start()
    // hrcounter.start()
    // toncounter.start()
    // percounter.start()
    // milcounter.start()

    // AOS.init({
    //   offset: 50, // Offset (in pixels) from the original trigger point
    //   delay: 0, // Values from 0 to 3000, with step 50ms
    //   duration: 1000, // Values from 0 to 3000, with step 50ms
    //   easing: "ease", // Default easing for AOS animations
    //   once: true, // Whether animation should happen only once - while scrolling down
    //   mirror: false, // Whether elements should animate out while scrolling past them
    //   anchorPlacement: "top-bottom", // Defines which position of the element regarding to window should trigger the animation
    // });

    AOS.init({
      delay: 0,
      duration: 1000,
      easing: "ease",
      once: true,
      mirror: false,
    });

    // Function to handle intersection
    function handleIntersection(entries, observer) {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("aos-animate");
        } else {
          // entry.target.classList.remove('aos-animate');
        }
      });
    }

    // Create an intersection observer with the specified root margin
    const observer = new IntersectionObserver(handleIntersection, {
      root: null,
      rootMargin: "0px 0px -200px 0px",
      threshold: 0,
    });

    // Select all elements you want to animate and observe them
    document.querySelectorAll(".aos-init").forEach((element) => {
      observer.observe(element);
    });

    $(document).ready(function () {
      $(".news-slider").slick({
        dots: false,
        infinite: true,
        speed: 2000,
        slidesToShow: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        pauseOnHover: false,
      });
    });

    $(document).ready(function () {
      $(".overview-slider").slick({
        dots: false,
        infinite: true,
        speed: 500,
        slidesToShow: 4,
        autoplay: true,
        autoplaySpeed: 2000,
        pauseOnHover: false,
        responsive: [
          {
            breakpoint: 1200,
            settings: {
              slidesToShow: 3,
            },
          },
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 2,
            },
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 1,
            },
          },
        ],
      });
    });

    $(document).ready(function () {
      $(".service-slider").slick({
        dots: false,
        infinite: true,
        speed: 500,
        slidesToShow: 4,
        autoplay: true,
        autoplaySpeed: 3000,
        pauseOnHover: false,
        responsive: [
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 3,
            },
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 2,
            },
          },
          {
            breakpoint: 576,
            settings: {
              slidesToShow: 1,
            },
          },
        ],
      });
    });

    $(document).ready(function () {
      $(".client-slider").slick({
        dots: false,
        infinite: true,
        speed: 500,
        slidesToShow: 4,
        autoplay: true,
        autoplaySpeed: 2000,
        pauseOnHover: false,
        responsive: [
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 2,
            },
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 1,
            },
          },
        ],
      });
    });

    $(document).ready(function () {
      $(".gallery-slider").slick({
        dots: false,
        infinite: true,
        speed: 2000,
        slidesToShow: 1,
        autoplay: true,
        autoplaySpeed: 2000,
      });
    });

    document
      .querySelector(".menu_icon")
      .addEventListener("click", function () {
        document.querySelector("header").classList.add("show");
        document.querySelector(".header-overlay").classList.add("show");
      });

    document
      .querySelector(".close_menu_img")
      .addEventListener("click", function () {
        document.querySelector("header").classList.remove("show");
        document.querySelector(".header-overlay").classList.remove("show");
      });

    document
      .querySelector(".chat-bot-icon")
      .addEventListener("click", function () {
        document.querySelector(".chat-bot").classList.add("show");
      });

    document
      .querySelector(".chat-bot-close")
      .addEventListener("click", function () {
        document.querySelector(".chat-bot").classList.remove("show");
      });
    </script>
</body>

</html>
