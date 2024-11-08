<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Love Notes To My Baby</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

</head>

<body class="index-page">
  <main class="main">
    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container hero-container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h1 data-aos="fade-up">Love Notes to My Baby</h1>
            <p data-aos="fade-up" data-aos-delay="100">Express your feelings with a heartfelt note for your special someone. Submit a love note, and create a beautiful memory that says it all.</p>
            <div class="d-flex flex-column flex-md-row" data-aos="fade-up" data-aos-delay="200">
              <a href="#lovenote" class="btn-get-started">Get Started <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out">
            <img src="{{ asset('assets/img/hero-image.png') }}" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="lovenote" class="contact section heart-bg">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-6 d-none d-md-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
        <img src="{{ asset('assets/img/love-note.png') }}" class="img-fluid" alt="">
    </div>


          <div class="col-lg-6 d-flex flex-column justify-content-center heart-image" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <div class="container section-title pb-0" data-aos="fade-up">
                <p>Share Your Love Note</p>
                <span class="heart-icon">&hearts;</span>
              </div><!-- End Section Title -->
                <form action="{{ route('submitnote') }}" method="post" class="love-note-form" data-aos="fade-up" data-aos-delay="200">
                @csrf
              <div class="row gy-4">
                <div class="col-12">
                  <input type="text" class="form-control" name="name" id="nameInput" placeholder="Your name" value="Anonymous">
                </div>

                <div class="col-md-6">
                  <select name="gender" class="form-select">
                    <option value="None">Your Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                </div>

                <div class="col-md-6 ">
                  <input type="text" class="form-control number" name="age" placeholder="Your Age">
                </div>

                <div class="col-12">
                  <textarea class="form-control" name="message" rows="10" placeholder="Write your love note here..." required=""></textarea>
                </div>

                <div class="col-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your note has been sent. Thank you!</div>

                  <button type="submit">Submit Love Note</button>
                </div>

              </div>
            </form>
            </div>
          </div><!-- End lovenote Form -->

        </div>
      </div>

    </section><!-- /About Section -->

  </main>

  <footer id="footer" class="footer">

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Love Notes</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <span class="heart-icon">&hearts;</span> Made with Love <span class="heart-icon">&hearts;</span>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
