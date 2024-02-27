<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>replit</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.0/gsap.min.js"></script>

</head>

<body>
  <!-- Navbar -->
  <header>
    <h1>Cars</h1>
    <ul id="menu" class="desktop-menu">
      <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house"
          viewBox="0 0 16 16">
          <path
            d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z" />
        </svg></li>
      <li><a href="index.html">Home</a></li>
      <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera"
          viewBox="0 0 16 16">
          <path
            d="M15 12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h1.172a3 3 0 0 0 2.12-.879l.83-.828A1 1 0 0 1 6.827 3h2.344a1 1 0 0 1 .707.293l.828.828A3 3 0 0 0 12.828 5H14a1 1 0 0 1 1 1zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4z" />
          <path
            d="M8 11a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5m0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7M3 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0" />
        </svg></li>
      <li><a href="gallery.html">Gallery</a></li>
      <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen"
          viewBox="0 0 16 16">
          <path
            d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z" />
        </svg></li>
      <li onclick="regpop()">Register</li>
      <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-open"
          viewBox="0 0 16 16">
          <path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1" />
          <path
            d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117M11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5M4 1.934V15h6V1.077z" />
        </svg></li>
      <li onclick="loginpop()">Login</li>
      <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-newspaper"
          viewBox="0 0 16 16">
          <path
            d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5z" />
          <path
            d="M2 3h10v2H2zm0 3h4v3H2zm0 4h4v1H2zm0 2h4v1H2zm5-6h2v1H7zm3 0h2v1h-2zM7 8h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2z" />
        </svg></li>
      <li><a href="blog.html">Blog</a></li>
    </ul>

    <div id="menu-icon">&#9776;</div>
    <div id="mobile-menu" class="mobile-menu">
      <ul>
        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house"
            viewBox="0 0 16 16">
            <path
              d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z" />
          </svg></li>
        <li><a href="index.html">Home</a></li>
        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera"
            viewBox="0 0 16 16">
            <path
              d="M15 12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h1.172a3 3 0 0 0 2.12-.879l.83-.828A1 1 0 0 1 6.827 3h2.344a1 1 0 0 1 .707.293l.828.828A3 3 0 0 0 12.828 5H14a1 1 0 0 1 1 1zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4z" />
            <path
              d="M8 11a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5m0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7M3 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0" />
          </svg></li>
        <li><a href="gallery.html">Gallery</a></li>
        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen"
            viewBox="0 0 16 16">
            <path
              d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z" />
          </svg></li>
        <li onclick="regpop()">Register</li>
        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-open"
            viewBox="0 0 16 16">
            <path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1" />
            <path
              d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117M11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5M4 1.934V15h6V1.077z" />
          </svg></li>
        <li onclick="loginpop()">Login</li>
        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-newspaper"
            viewBox="0 0 16 16">
            <path
              d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5z" />
            <path
              d="M2 3h10v2H2zm0 3h4v3H2zm0 4h4v1H2zm0 2h4v1H2zm5-6h2v1H7zm3 0h2v1h-2zM7 8h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2z" />
          </svg></li>
        <li><a href="blog.html">Blog</a></li>
      </ul>
    </div>
  </header>

  <!-- Register Popup -->
  <div class="register-photo" style="display:none;">
    <div class="form-container">
      <div class="image-holder"></div>
      <form method="post">
        <h2 class="text-center"><strong>Create</strong> an account.</h2>
        <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Name" id="name2"></div>
        <div class="form-group"><input class="form-control" type="text" name="familyname" placeholder="Family Name"
            id="familyname2"></div>
        <div class="form-group"><input class="form-control" type="text" name="username" placeholder="Username"
            id="username2"></div>
        <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email" id="email2">
        </div>
        <div class="form-group"><input class="form-control" type="password" name="password2" placeholder="Password"
            id="password2"></div>
        <div class="form-group"><button class="btn btn-primary btn-block" type="button" onclick="registerForm()">Sign
            Up</button></div>
      </form>
    </div>
  </div>


  <!-- Login Popup -->
  <div class="login-photo" style="display:none;">
    <div class="form-container">
      <div class="image-holder"></div>
      <form method="post">
        <h2 class="text-center"><strong>Create</strong> an account.</h2>
        <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email" id="email1">
        </div>
        <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"
            id="password1"></div>
        <div class="form-group"><button class="btn btn-primary btn-block" type="button" onclick="loginForm()">Sign
            In</button></div>
      </form>
    </div>
  </div>

  <div id="mainpart">
    <!-- Filter -->
    <div class="col-md-3 text-center">
      <div>
        <h1>Filter</h1>

        <!-- Colors section -->
        <div>
          <h4>Colors</h4>
          <div class="row">
            <div class="col">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="" id="checkboxRed" checked>
                <label class="form-check-label" for="checkboxRed">Red</label>
              </div>
            </div>
            <div class="col">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="" id="checkboxBlue" checked>
                <label class="form-check-label" for="checkboxBlue">Blue</label>
              </div>
            </div>
            <div class="col">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="" id="checkboxGreen" checked>
                <label class="form-check-label" for="checkboxGreen">Green</label>
              </div>
            </div>
          </div>
        </div>
        <label for="customRange2" class="form-label">Example range</label>
        <input type="range" class="form-range" min="0" max="5" id="customRange2">
      </div>
    </div>



    <!-- Slide Show -->
    <div class="col-md-9">
      <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="photos/login_photo.jpg" class="d-block w-100" alt="Image 1">
          </div>
          <div class="carousel-item">
            <img src="photos/liverypoll.jpg" class="d-block w-100" alt="Image 2">
          </div>
          <div class="carousel-item">
            <img src="photos/92838.jpg" class="d-block w-100" alt="Image 3">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>

  <!-- Colapse 1 -->

  <div class="row">
    
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <a href="product1.html"><img
              src="photos/92838.jpg"
              alt="Your Photo 1" id="collapseTrigger1" class="img-thumbnail" style="cursor: pointer;"></a>
          <h5 class="card-title">Ferrari Enzo</h5>
          <div id="collapseOne" class="collapse">
            <p>Named after the great Enzo Ferrari</p>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <a href="product2.html"><img src="https://cdn.motor1.com/images/mgl/lxVGM/s3/ferrari-laferrari.jpg" alt="Your Photo 2"
            id="collapseTrigger2" class="img-thumbnail" style="cursor: pointer;"></a>

          <h5 class="card-title">Ferrari LaFerrari</h5>
          <div id="collapseTwo" class="collapse">
            <p>This car is made from carbon fiber and can accelerate from 0-100 kp/h in 2.6 seconds</p>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <a href="product3.html"><img
            src="https://www.motorsportretro.com/wp-content/uploads/2018/02/Works-Martini-Racing-1985-Lancia-Delta-S4-Corsa-Group-B-4.jpg"
            alt="Your Photo 3" id="collapseTrigger3" class="img-thumbnail" style="cursor: pointer;"></a>

          <h5 class="card-title">Lancia Delta S4 Corsa Group B</h5>
          <div id="collapseThree" class="collapse">
            <p>This can accelerate from 0-100 kp/h in 2.5 seconds <b>on gravel</b> (a bit scary)</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Collapse 2 -->

  <div class="row">

    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <a href="product4.html"><img
              src="photos/carpixel.net-2018-ferrari-488-pista-79795-wide.jpg"
              alt="Your Photo 4" id="collapseTrigger4" class="img-thumbnail" style="cursor: pointer;"></a>
          <h5 class="card-title">Ferrari F8 Tributo</h5>
          <div id="collapseFour" class="collapse">
            <p>Only Volkswagen holds around 10 brands</p>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <a href="product5.html"><img src="photos/961122.jpg" alt="Your Photo 5"
            id="collapseTrigger5" class="img-thumbnail" style="cursor: pointer;"></a>

          <h5 class="card-title">Ferrari F40</h5>
          <div id="collapseFive" class="collapse">
            <p>The car has the V12 of the 1990s F1 Ferrari cars and it's the first to use the technologies of the sport</p>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <a href="product6.html"><img
            src="photos/carpixel.net-2022-ferrari-daytona-sp3-108043-hd.jpg"
            alt="Your Photo 6" id="collapseTrigger6" class="img-thumbnail" style="cursor: pointer;"></a>

          <h5 class="card-title">Ferrari Daytona SP3</h5>
          <div id="collapseSix" class="collapse">
            <p>This can accelerate from 0-100 kp/h in 2.5 seconds <b>on gravel</b> (a bit scary)</p>
          </div>
        </div>
      </div>
    </div>
  </div>



  <!-- Footer -->
  <footer id="footer">
    <h2>Contact Us</h2>
    <div id="contact">
      <form>
        <label for="name" id="nameLabel">Name:</label>
        <input type="text" id="name" name="name">
        <br>
        <br>
        <label for="familyname" id="familynameLabel">Family name:</label>
        <input type="text" id="familyname" name="familyname">
      </form>
      <form>
        <label for="email" id="emailLabel">E-mail:</label>
        <input type="email" id="email" name="email">
        <br>
        <br>
        <label for="note" id="noteLabel">Note:</label>
        <textarea name="note" id="note" cols="40" rows="3"
          placeholder="Say what do you think about the website"></textarea>
      </form>
      <button id="send" onclick="ContactForm()">Send</button>
    </div>
  </footer>


  <script src="script.js"></script>
  <script src="register.js"></script>
  <script src="login.js"></script>
</body>

</html>