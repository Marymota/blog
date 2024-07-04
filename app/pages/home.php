<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="<?=ROOT?>/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Home - <?=APP_NAME?></title>
<!-- slider -->
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/slider.css"/>
    <script src="<?=ROOT?>/assets/js/slider.js"></script>
<!-- -->
    <link href="<?=ROOT?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <style>

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="<?=ROOT?>/assets/css/headers.css" rel="stylesheet">
  </head>
  <body>

  <header class="p-3 mb-3 border-bottom">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
          <img class="bi me-2" src="<?=ROOT?>/assets/images/logo.png" class="bi me-2" width="50" height="42" role="img" style="object-fit:cover;"></img>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2 link-secondary">Home</a></li>
          <li><a href="#" class="nav-link px-2 link-body-emphasis">Blog</a></li>
          <li><a href="#" class="nav-link px-2 link-body-emphasis">Contact</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
        </form>

        <div class="dropdown text-end">
          <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
          </a>
          <ul class="dropdown-menu text-small">
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><a class="dropdown-item" href="<?=ROOT?>/admin">Admin</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="<?=ROOT?>/login">Sign out</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>
<!-- end header -->
  <!-- slider -->
  <div class="ism-slider" id="my-slider">
  <ol>
    <li>
      <img src="<?=ROOT?>/assets/images/ai-generated-8406437_1280.jpg">
      <div class="ism-caption ism-caption-0">My slide caption text</div>
    </li>
    <li>
      <img src="<?=ROOT?>/assets/images/ai-generated-8674485_1280.png">
      <div class="ism-caption ism-caption-0">My slide caption text</div>
    </li>
    <li>
      <img src="<?=ROOT?>/assets/images/tv-8760953_1280.png">
      <div class="ism-caption ism-caption-0">My slide caption text</div>
    </li>
    <li>
      <img src="<?=ROOT?>/assets/images/tv-8760956_1280.png">
      <div class="ism-caption ism-caption-0">My slide caption text</div>
    </li>
  </ol>
</div>
<!-- end slider-->

<main class="p-4">
	<h3 class="mx-2 m-4">Featured</h3>
	
	<!-- Blog Posts -->
  <div class="row my-2">

	<!-- Blog Post 0 -->
  	<div class="col-md-6">
  	  <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
  	    <div class="col p-4 d-flex flex-column position-static">
  	      <strong class="d-inline-block mb-2 text-primary-emphasis">World</strong>
  	      <h3 class="mb-0">Featured post</h3>
  	      <div class="mb-1 text-body-secondary">Nov 12</div>
  	      <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
  	      <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
  	        Continue reading
  	      </a>
  	    </div>
  	    <div class="col-lg-6 col-12 d-lg-block">
  	      <img class="bd-placeholder-img w-100" height="250" style="object-fit:cover;" src="<?=ROOT?>/assets/images/ai-generated-8406437_1280.jpg"></img>
  	    </div>
  	  </div>
  	</div>

		<!-- Blog Post 1 -->
  	<div class="col-md-6">
  	  <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
  	    <div class="col p-4 d-flex flex-column position-static">
  	      <strong class="d-inline-block mb-2 text-success-emphasis">Design</strong>
  	      <h3 class="mb-0">Post title</h3>
  	      <div class="mb-1 text-body-secondary">Nov 11</div>
  	      <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
  	      <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
  	        Continue reading
  	      </a>
  	    </div>
  	    <div class="col-lg-6 col-12 d-lg-block">
					<img class="bd-placeholder-img w-100" height="250" style="object-fit:cover;" src="<?=ROOT?>/assets/images/ai-generated-8674485_1280.png"></img>
  	    </div>
  	  </div>
  	</div>

			<!-- Blog Post 2 -->
			<div class="col-md-6">
  	  <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
  	    <div class="col p-4 d-flex flex-column position-static">
  	      <strong class="d-inline-block mb-2 text-primary-emphasis">World</strong>
  	      <h3 class="mb-0">Featured post</h3>
  	      <div class="mb-1 text-body-secondary">Nov 12</div>
  	      <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
  	      <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
  	        Continue reading
  	      </a>
  	    </div>
  	    <div class="col-lg-6 col-12 d-lg-block">
  	      <img class="bd-placeholder-img w-100" height="250" style="object-fit:cover;" src="<?=ROOT?>/assets/images/tv-8760956_1280.png"></img>
  	    </div>
  	  </div>
  	</div>

		<!-- Blog Post 3 -->
  	<div class="col-md-6">
  	  <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
  	    <div class="col p-4 d-flex flex-column position-static">
  	      <strong class="d-inline-block mb-2 text-success-emphasis">Design</strong>
  	      <h3 class="mb-0">Post title</h3>
  	      <div class="mb-1 text-body-secondary">Nov 11</div>
  	      <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
  	      <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
  	        Continue reading
  	      </a>
  	    </div>
  	    <div class="col-lg-6 col-12 d-lg-block">
					<img class="bd-placeholder-img w-100" height="250" style="object-fit:cover;" src="<?=ROOT?>/assets/images/tv-8760953_1280.png"></img>
  	    </div>
  	  </div>
  	</div>

	</div>
	<!-- end blog posts-->
</main>

<!-- footer -->
  <div class="container">
  <footer class="py-5">
    <div class="row">
      <div class="col-6 col-md-2 mb-3">
        <h5>Section</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
          <li class="nav-item mb-2"><a href="<?=ROOT?>/login" class="nav-link p-0 text-body-secondary">Login</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
        </ul>
      </div>

      <div class="col-md-5 offset-md-1 mb-3">
        <form>
          <h5>Subscribe to our newsletter</h5>
          <p>Monthly digest of what's new and exciting from us.</p>
          <div class="d-flex flex-column flex-sm-row w-100 gap-2">
            <label for="newsletter1" class="visually-hidden">Email address</label>
            <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
            <button class="btn btn-primary" type="button">Subscribe</button>
          </div>
        </form>
      </div>
    </div>

    <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
      <p>&copy; 2024 Company, Inc. All rights reserved.</p>
      <ul class="list-unstyled d-flex">
        <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
        <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
        <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
      </ul>
    </div>
  </footer>
</div>

<script src="<?=ROOT?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    </body>
</html>

    <!-- All paths are changed to absolute paths by including "<?=ROOT?>/"-->