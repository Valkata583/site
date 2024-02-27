<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width">
      <title>Gallery</title>
      <link href="galerry.css" rel="stylesheet" type="text/css" />
    </head>
  <body>
    <header>
      <h1>Cars</h1>
      <ul id="menu" class="desktop-menu">
        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
          <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
        </svg></li>
        <li><a href="index.html">Home</a></li>
        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera" viewBox="0 0 16 16">
          <path d="M15 12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h1.172a3 3 0 0 0 2.12-.879l.83-.828A1 1 0 0 1 6.827 3h2.344a1 1 0 0 1 .707.293l.828.828A3 3 0 0 0 12.828 5H14a1 1 0 0 1 1 1zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4z"/>
          <path d="M8 11a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5m0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7M3 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0"/>
        </svg></li>
        <li><a href="gallery.html">Gallery</a></li>
        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
          <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z"/>
        </svg></li>
        <li onclick="regpop()">Register</li>
        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-open" viewBox="0 0 16 16">
          <path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1"/>
          <path d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117M11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5M4 1.934V15h6V1.077z"/>
        </svg></li>
        <li onclick="loginpop()">Login</li>
        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-newspaper" viewBox="0 0 16 16">
          <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5z"/>
          <path d="M2 3h10v2H2zm0 3h4v3H2zm0 4h4v1H2zm0 2h4v1H2zm5-6h2v1H7zm3 0h2v1h-2zM7 8h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2z"/>
        </svg></li>
        <li><a href="blog.html">Blog</a></li>
      </ul>
    </header>

    <!-- Register Popup -->
    <div class="register-photo" style="display:none;">
        <div class="form-container">
            <div class="image-holder"></div>
            <form method="post">
                <h2 class="text-center"><strong>Create</strong> an account.</h2>
                <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Name" id="name2"></div>
                <div class="form-group"><input class="form-control" type="text" name="familyname" placeholder="Family Name" id="familyname2"></div>
                <div class="form-group"><input class="form-control" type="text" name="username" placeholder="Username" id="username2"></div>
                <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email" id="email2"></div>
                <div class="form-group"><input class="form-control" type="password" name="password2" placeholder="Password" id="password2"></div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="button" onclick="registerForm()">Sign Up</button></div>
            </form>
        </div>
    </div>

    <!-- Login Popup -->
    <div class="login-photo" style="display:none;">
      <div class="form-container">
          <div class="image-holder"></div>
          <form method="post">
              <h2 class="text-center"><strong>Create</strong> an account.</h2>
              <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email" id="email1"></div>
              <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password" id="password1"></div>
              <div class="form-group"><button class="btn btn-primary btn-block" type="button" onclick="loginForm()">Sign In</button></div>
          </form>
      </div>
    </div>
    <table>
      <tr>
        <td><img id="img1" src="photos/carpixel.net-2022-ferrari-daytona-sp3-108043-hd.jpg" alt="none"></td>
        <td><img id="img2" src="photos/liverypoll.jpg" alt="none"></td>
        <td><img id="img3" src="photos/carpixel.net-2018-ferrari-488-pista-79795-wide.jpg" alt="none"></td>
        <td><img id="img4" src="photos/wp2012840.jpg" alt="none"></td>

      </tr>
      <tr>
        <td><img id="img5" src="photos/wallpaperflare.com_wallpaper.jpg" alt="none"></td>
        <td><img id="img6" src="photos/961122.jpg" alt="none"></td>
        <td><img id="img7" src="https://images.squarespace-cdn.com/content/v1/5a8227a58fd4d2d73f0e95c4/1519959977904-DZYGM1C7HDV2TOD5NAPC/Drift-Rides-017.png?format=1000w" alt="none"></td>
        <td><img id="img8" src="https://i.kinja-img.com/image/upload/c_fill,h_675,pg_1,q_80,w_1200/e726ff6f0acca34c87226a386e695c83.jpg" alt="none"></td>
      </tr>

      <tr>
        <td><img id="img9" src="https://getwallpapers.com/wallpaper/full/9/b/1/122214.jpg" alt="none"></td>
        <td><img id="img10" src="https://images4.alphacoders.com/967/96758.jpg" alt="none"></td>
        <td><img id="img11" src="https://www.supercars.net/blog/wp-content/uploads/2020/09/wallpaperflare.com_wallpaper-1-1.jpg" alt="none"></td>
        <td><img id="img12" src="https://www.nastarta.com/wp-content/uploads/2018/10/ed893d2f-2002-renault-clio-v6-1.jpg" alt="none"></td>
      </tr>
    </table>
  </body>
</html>