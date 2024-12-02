
<?php
/*Start a session*/
  session_start();
?>
<!DOCTYPE html>

<html lang="en">

  <head>
      <title>Home</title>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="">
      <meta name="author" content="">


      <!-- Bootstrap Core CSS -->
      <link href="../css/bootstrap.min.css" rel="stylesheet">
      <link href="../css/tempuserhome.css" rel="stylesheet">
      <!-- Custom CSS -->
      <link href="../css/main.css" rel="stylesheet">

  </head>

  <body class = "index">
    <div id = "page-wrapper">

      <!-- Header -->
        <header id = "header" class = "alt" style="background-color:#f3f6fa;color:black;height:4%">
          <h1 id = "logo"><a href = "javascript:history.back()" class="button special">Back</a></h1>
          <nav id = "nav">
            <ul>
              <li class = "current"><a href = "#">Home</a></li>
              <li class = "submenu">
                <a href = "#">Applications</a>
                <ul>
                  <li><a href = "tempPendingApp.php">Pending Students</a></li>
                  <li><a href = "tempAcceptedApp.php">Accepted Students</a></li>
                  <li><a href = "tempRejectedApp.php">Rejected Students</a></li>
                </ul>
              </li>
              <li class = "submenu">
                <a href = "tempScholarship.php">Scholarships</a>
                <ul>
                  <li><a href = "tempScholarship.php?scholarship=Pending">Pending Scholarships</a></li>
                  <li><a href = "tempScholarship.php?scholarship=Approved">Accepted Scholarships</a></li>
                  <li><a href = "tempScholarship.php?scholarship=Rejected">Rejected Scholarships</a></li>
                </ul>
              </li>
              <li class = "submenu">
                <a href = "">Users</a>
                <ul>
                  <li><a href = "tempAdminShow.php">Admin</a></li>
                  <li><a href = "tempSignatoryShow.php">Signatory</a></li>
                  <li><a href = "tempStudentShow.php">Students</a></li>
                </ul>
              </li>
              <li><a href = "../backend/logout.php" class = "button special">Logout</a></li>
            </ul>
          </nav>
        </header>

        <!-- Banner 
        <section id="test">
        <div class="slideshow-container">

        <div class="mySlides fade">
          <div class="numbertext">1 / 3</div>
          <img src="../images/bg1.jpg">
          <div class="text">Caption Text</div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">2 / 3</div>
          <img src="../images/bg2.jpg">
          <div class="text">Caption Two</div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">3 / 3</div>
          <img src="../images/bg3.jpg">
          <div class="text">Caption Three</div>
        </div>

        </div>
        <br>

        <div style="text-align:center">
          <span class="dot"></span>
          <span class="dot"></span>
          <span class="dot"></span>
        </div>

        <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
          }
          slideIndex++;
          if (slideIndex > slides.length) {slideIndex = 1}
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";
          dots[slideIndex-1].className += " active";
          setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
        </script>
        </section>-->
        <section id="test">
        <div class="slideshow-container">
        <div class="mySlides fade">
          <div class="numbertext">1 / 3</div>
          <img src="../images/Symbiosis.jpg">
          <div class="text"></div>
        </div>
        <div class="mySlides fade">
          <div class="numbertext">2 / 3</div>
          <img src="../images/symbilogo.jpg">
          <div class="text"></div>
        </div>
        <div class="mySlides fade">
          <div class="numbertext">3 / 3</div>
          <img src="../images/MAPS logo.png">
          <div class="text"></div>
        </div>
        </div>
        <br>
        <div style="text-align:center">
          <span class="dot"></span>
          <span class="dot"></span>
          <span class="dot"></span>
        </div>
        <script>
        var slideIndex = 0;
        showSlides();
        function showSlides() {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
          }
          slideIndex++;
          if (slideIndex > slides.length) {slideIndex = 1}
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";
          dots[slideIndex-1].className += " active";
          setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
        </script>
        </section>

        <article id = "main">
          <!--<header class = "special container">
            <span class = "icon fa-bar-chart-o"></span>
            <h2>Some text here</h2>
            <p>Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu comteger ut <br>
            fermentum lorem. Lorem ipsum dolor sit amet. Sed tristique purus vitae volutpat ultrices. <br>
            eu elit eget commodo. Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget <br>
            arcu commodo. </p>

          </header>-->

          <section class="wrapper style2 container special-alt">
            <div class="row 50%">
              <div class="8u 12u(narrower)">

              <header>
                  <h2>INDIA'S LARGEST SCHOLARSHIP PLATFORM</h2>
                </header>
                <p><br><br><h2>INDIA'S LARGEST SCHOLARSHIP PLATFORM</h2></p>
                <p><a href="https://scholarships.gov.in/">Government Scholarships </a><br><br><br></p>
                <footer>
                  <ul class="buttons">
                    <li><a href="tempUserApply.php" class="button">Find Out More</a></li>
                  </ul>
                </footer>

              </div>
            </div>
          </section>

          <!--<section class="wrapper style3 container special">

            <header class="major">
              <h2>Next look at this <strong>cool stuff</strong></h2>
            </header>

            <div class="row">
              <div class="6u 12u(narrower)">

                <section>
                  <a href="#" class="image featured"><img src="images/pic01.jpg" alt="" /></a>
                  <header>
                    <h3>A Really Fast Train</h3>
                  </header>
                  <p>Sed tristique purus vitae volutpat commodo suscipit amet sed nibh. Proin a ullamcorper sed blandit. Sed tristique purus vitae volutpat commodo suscipit ullamcorper sed blandit lorem ipsum dolore.</p>
                </section>

              </div>

              <div class="6u 12u(narrower)">

                <section>
                  <a href="#" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
                  <header>
                    <h3>An Airport Terminal</h3>
                  </header>
                  <p>Sed tristique purus vitae volutpat commodo suscipit amet sed nibh. Proin a ullamcorper sed blandit. Sed tristique purus vitae volutpat commodo suscipit ullamcorper sed blandit lorem ipsum dolore.</p>
                </section>

              </div>
            </div>

            <div class="row">
              <div class="6u 12u(narrower)">

                <section>
                  <a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
                  <header>
                    <h3>Hyperspace Travel</h3>
                  </header>
                  <p>Sed tristique purus vitae volutpat commodo suscipit amet sed nibh. Proin a ullamcorper sed blandit. Sed tristique purus vitae volutpat commodo suscipit ullamcorper sed blandit lorem ipsum dolore.</p>
                </section>

              </div>

              <div class="6u 12u(narrower)">

                <section>
                  <a href="#" class="image featured"><img src="images/pic04.jpg" alt="" /></a>
                  <header>
                    <h3>And Another Train</h3>
                  </header>
                  <p>Sed tristique purus vitae volutpat commodo suscipit amet sed nibh. Proin a ullamcorper sed blandit. Sed tristique purus vitae volutpat commodo suscipit ullamcorper sed blandit lorem ipsum dolore.</p>
                </section>

              </div>
            </div>

            <footer class="major">
              <ul class="buttons">
                <li><a href="#" class="button">See More</a></li>
              </ul>
            </footer>

          </section>-->
          <section class="wrapper style3 container special">
            <header class="major">
              <h2><strong>Find the best-fit scholarship</strong></h2>
              <h4>Choosing the right scholarship is a daunting task. Pick relevant scholarships and stand a chance to win.</h4>
            </header>
            <div class="row">
              <div class="6u 12u(narrower)">
                <section>
                  <a href="#" class="image featured"><img src="../images/merit-based-scholarship.jpg" alt="11" /></a>
                  <header>
                    <h3>Scholarships for merit students</h3>
                  </header>
                  <p>Aspirants whose score is high in the academic, artistic, atheletic and in other activities will be provided with scholarship wither by the private organization or by student intended institutes. Purely , this king is based on thee mmerit score of the aspirants</p>
                </section>
              </div>
              <div class="6u 12u(narrower)">
                <section>
                  <a href="#" class="image featured"><img src="../images/PHYSICALLY-CHALLENGED-SCHOLARSHIPS.jpg" alt="22" /></a>
                  <header>
                    <h3>Need based scholarships</h3>
                  </header>
                  <p>Aspirant who has financial economic problem to continue studies are given need based scholarship. Basically this scholarship is for aspirants who are ecnomically backward. The aspirants need to apply for this scholarship by filling the <b title="Free Application For Federal Students Aid">FAFSA</b></p>
                </section>
              </div>
            </div>
            <div class="row">
              <div class="6u 12u(narrower)">
                <section>
                  <a href="#" class="image featured"><img src="../images/MINORITIES-SCHOLARSHIPS.jpg" alt="" /></a>
                  <header>
                    <h3>Student specific scholarship</h3>
                  </header>
                  <p>The specific scholarships are provided to specify category of the students with respected to race, sex, religion, family, medical history and many other factors. The most common category in this category is Minority scholarship.</p>
                </section>
              </div>
              <div class="6u 12u(narrower)">
                <section>
                  <a href="#" class="image featured"><img src="../images/STUDY-BASED-SCHOLARSHIPS.jpg" alt="" /></a>
                  <header>
                    <h3>Career specific Scholarship</h3>
                  </header>
                  <p>The career specific scholarships mainly focuses on aspirants who wants to go for a specific field of study. Career specific scholarship will be provided by the college/university.</p>
                </section>
              </div>
            </div>
            <footer class="major">
              <ul class="buttons">
                <li><a href="#" class="button">Suggested Scholarships</a></li>
              </ul>
            </footer>
          </section>
          <section class="wrapper style5 container special">
            <header>
              <h2><strong>Most popular Cities</Strong></h2>
            <header>
            <div class="row1">
              <div class="column1">
                <a href="#">
                  <img src="../images/ahm.jpg" alt="Ahmedabad" style="width:100%" >
                  <span style="display:block;">Scholarship in </span><b>Ahmedabad</b>
                </a>
              </div>
              <div class="column1">
                <a href="#">
                  <img src="../images/mumbai.jpg" alt="Mumbai" style="width:100%">
                  <span style="display:block;">Scholarship in </span><b>Mumbai</b>
                </a>
              </div>
              <div class="column1">
               <a href="#">
                 <img src="../images/chennai.jpg" alt="Chennai" style="width:100%">
                 <span style="display:block;">Scholarship in </span><b>Chennai</b>
               </a>
             </div>
            </div>
        </section>


        </article>

        <section id="cta">
          <header>
            <h2>Ready to do <strong>something</strong>?</h2>
            
          </header>
          <footer>
            <ul class="buttons">
              <li><a href="../tempAboutUs.php" class="button special">About Us</a></li>
            </ul>
          </footer>
        </section>

      <!-- Footer -->
        <footer id="footer">

          <ul class="icons">
            <li><a href="#" class="icon circle fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon circle fa-facebook"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="icon circle fa-google-plus"><span class="label">Google+</span></a></li>
            <li><a href="#" class="icon circle fa-github"><span class="label">Github</span></a></li>
            <li><a href="#" class="icon circle fa-dribbble"><span class="label">Dribbble</span></a></li>
          </ul>

          <ul class="copyright">
            <li>&copy; MAPS Scholarship System</li>
          </ul>

        </footer>


    </div>

    <!-- Scripts -->
      <script src="../js/jquery.min.js"></script>
      <script src="../js/jquery.dropotron.min.js"></script>
      <script src="../js/jquery.scrolly.min.js"></script>
      <script src="../js/jquery.scrollgress.min.js"></script>
      <script src="../js/skel.min.js"></script>
      <script src="../js/util.js"></script>
      <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
      <script src="../js/main.js"></script>

  </body>
</html>
