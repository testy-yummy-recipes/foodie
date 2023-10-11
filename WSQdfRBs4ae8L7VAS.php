<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8" />
     
    <title>Article</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- google web fonts -->
    <link
      href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,300italic,500,400italic,700"
      rel="stylesheet"
      type="text/css"
    />

    <!-- CSS Styles -->

    <!-- bootstrap css -->
    <link href="./css/bootstrap.css" rel="stylesheet" />

    <!-- custom css -->
    <link href="./css/custom.css" rel="stylesheet" />

    <!-- standart theme css -->
    <link rel="stylesheet" id="theme" href="./css/theme1.css" type="text/css" />

    <!-- Font Awesome Icons css -->
    <link rel="stylesheet" href="./font-awesome/css/font-awesome.min.css" />

    <!-- BxSlider and Sequence Slider css -->
    <link rel="stylesheet" href="./css/jquery.bxslider.css" type="text/css" />
    <link rel="stylesheet" media="screen" href="./css/sequence-slider.css" />

    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="./css/magnific-popup.css" />

    <!-- Color Switch Panel css -->
    <link rel="stylesheet" href="./css/color.switch.css" type="text/css" />

    <!-- Back to Top Button css -->
    <link rel="stylesheet" href="./css/top.css" type="text/css" />
  </head>

  <body>
    <div class="button-top" id="top-bt">
      <a href="#top-slider"><i class="fa fa-sort-desc fa-3x"></i></a>
    </div>

    <nav class="navbar navbar-inverse navbar-static-top" role="navigation" id="menu">
      <div class="container">
        <div class="navbar-header">
          <button
            type="button"
            class="navbar-toggle"
            data-toggle="collapse"
            data-target=".navbar-collapse"
          >
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <!-- MENU LINKS -->
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav" id="navigation">
            <li><a href="index.php">Main</a></li>
            <li><a href="blog.php">Articles</a></li>
            <li><a href="contact.php">Contacts</a></li>
            <li><a href="privacy.php">Privacy policy</a></li>
            <li><a href="terms.php">Terms and conditions</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- NAVBAR END -->

    <!-- SEQUENCE SLIDER Change Styles at the sequence-slider.css file -->

    <div id="top-slider">
      <div class="slider-bg" style="background-image: url('./assets/images/bulksplash-carlosaranda-z2kxmlcf7tw.jpg')"></div>
      <div class="container">
        <div id="sequence">
          <ul class="sequence-canvas">
            <li class="animate-in">
              <h2 class="title">Article</h2>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div id="portfolio">
      <div class="container">
        <div class="clearfix"></div>
        <div class="col">
          <h3>Preparing and planning your meals ahead of time can save you time and money.</h3>
          <p><strong></strong> People often think that preparing their meals in advance takes a lot of time and effort, when in reality, it can be quite simple and cost-effective. By preparing your meals in advance, you can save yourself time in the kitchen and money on groceries.

Here are a few tips on how to prepare and plan your meals ahead of time:

1. Meal planning is essential. Without a plan, you’ll likely end up cooking and preparing meals out of habit, instead of thinking about what ingredients will work best together and what flavors you want to explore. A good way to get started is to create a grocery list of the ingredients you’ll need, and then rank them in importance. From there, narrow down your list to a specific meal plan, such as breakfast, lunch, dinner, or snacks.

2. Shop in bulk. Not only will this save you money on groceries, but it will also reduce the amount of waste you create. Store your groceries in large containers or bags, so you can easily see how much you have left and don’t have to worry about going shopping again for a while.

3. Get creative with your meals. There are always ways to sneak in flavor and nutrients without</p>
        </div>
      </div>
    </div>

    <div id="foot">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 footer">
            <p>
              ©
              <script>
                document.write(new Date().getFullYear());
              </script>
              Copyright
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="cookie-banner">
      <p style="color: #000000">
        The site uses cookies. They allow us to recognize you and get information about your user experience.By continuing to browse the site, I agree to the use of cookies by the site owner in accordance with 
        <a target="_blank" href="https://en.wikipedia.org/wiki/HTTP_cookie"
          >Cookie policy</a
        >
      </p>

      <button class="close-cookie">×</button>
    </div>

    <script>
      window.onload = function () {
        $('.close-cookie').click(function () {
          $('.cookie-banner').fadeOut();
        });
      };
    </script>

    <script>
      let elems = document.querySelectorAll('.server-name');
      elems.forEach((elem) => {
        elem.innerHTML = window.location.hostname;
      });
    </script>

    <!-- FOOTER END -->

    <!-- COLOR SWITCH. Change Styles at the color.switch.css file -->

    <div class="editor">
      <div class="panel">
        <h5>Choose your Color</h5>

        <div id="changecss">
          <div class="row">
            <div class="circle-skin">
              <a href="javascript: void(0)" title="switch styling" id="theme1"
                ><div class="left skin1-l"></div>
                <div class="right skin1-r"></div
              ></a>
            </div>

            <div class="circle-skin">
              <a href="javascript: void(0)" title="switch styling" id="theme2"
                ><div class="left skin2-l"></div>
                <div class="right skin2-r"></div
              ></a>
            </div>

            <div class="circle-skin">
              <a href="javascript: void(0)" title="switch styling" id="theme3"
                ><div class="left skin3-l"></div>
                <div class="right skin3-r"></div
              ></a>
            </div>

            <div class="circle-skin">
              <a href="javascript: void(0)" title="switch styling" id="theme4"
                ><div class="left skin4-l"></div>
                <div class="right skin4-r"></div
              ></a>
            </div>

            <div class="circle-skin">
              <a href="javascript: void(0)" title="switch styling" id="theme5"
                ><div class="left skin5-l"></div>
                <div class="right skin5-r"></div
              ></a>
            </div>

            <div class="circle-skin">
              <a href="javascript: void(0)" title="switch styling" id="theme6"
                ><div class="left skin6-l"></div>
                <div class="right skin6-r"></div
              ></a>
            </div>
          </div>
        </div>

        <div class="clearfix"></div>
      </div>

      <div class="switch">
        <i class="fa fa-cog fa-spin fa-2x"></i>
      </div>
    </div>

    <!-- COLOR SWITCH END -->

    <!-- END PRIMARY LAYOUT
====================== -->

    <!-- JAVASCRIPT
================================================== -->

    <!-- BOOTSTRAP JAVASCRIPT -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="./js/bootstrap.min.js"></script>

    <!-- CUSTOM JAVASCRIPT -->
    <!-- Custom Functions -->
    <script type="text/javascript" src="./js/functions.js"></script>

    <!-- Portfolio with mixitup filter and prettyphoto -->
    <script type="text/javascript" src="./js/jquery.mixitup.min.js"></script>
    <!-- Magnific Popup core JS file -->
    <script type="text/javascript" src="./js/magnific.js"></script>

    <!-- BxSlider -->
    <script type="text/javascript" src="./js/jquery.bxslider.min.js"></script>

    <!-- Sequence Slider -->
    <script type="text/javascript" src="./js/jquery.sequence-min.js"></script>

    <!-- Parallax Background -->
    <script type="text/javascript" src="./js/nbw-parallax.js"></script>
    <script type="text/javascript" src="./js/jquery.inview.js"></script>

    <!-- Smooth Scrolling -->
    <script type="text/javascript" src="./js/smoothscroll.js"></script>

    <!-- Sticky Navigation -->
    <script type="text/javascript" src="./js/jquery.sticky.js"></script>

    <!-- Style Switcher -->
    <script type="text/javascript" src="./js/jquery.style-switcher.js"></script>

    <!-- Clients Slider -->
    <script type="text/javascript" src="./js/jquery.flexisel.js"></script>
  </body>
</html>
