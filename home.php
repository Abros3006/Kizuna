<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>

        <!-- include navbar -->
        <?php include './navbar.html'; ?>

        <!-- INTRODUCTION -->

<section id="home" class="intro-section">
  <div class="container">
    <div class="row align-items-center text-white">

      <!-- START THE CONTENT FOR THE INTRO  -->
      <div class="col-md-6 intros text-start">
        <h1 class="display-2">
          <span class="display-2--intro">Welcome to KizunaFinds</span>
          <span class="display-2--description lh-base">
            Cultivating Minds, Connecting souls
          </span>
        </h1>
        <button id="Search" type="submit" class="rounded-pill btn-info btn">Search Jobs
          <span><i class="fas fa-arrow-right"></i></span>
        </button>
      </div>
      <div class="col-md-6 intros text-end">
        <div class="image-box">
          <img src='./assets/images/japan_home.jpg' alt="image illutration" class="img-fluid">
        </div>
      </div>
    </div>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,64L48,101.3C96,139,192,213,288,213.3C384,213,480,139,576,122.7C672,107,768,149,864,176C960,203,1056,213,1152,208C1248,203,1344,181,1392,170.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
</section>

<section id="companies" class="companies">
    <div class="container">
      <div class="row text-center">
        <h4 class="fw-bold lead mb-3">Jobs in Japan</h4>
        <div class="heading-line mb-5"></div>
      </div>
    </div>
    <!-- START THE COMPANIES CONTENT  -->
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-lg-2">
        <button id="Search" type="submit" class="btn btn-outline-primary">Education and Teaching</button>
        </div>
        <div class="col-md-4 col-lg-2">
        <button type="submit" class="btn btn-outline-primary" id="Search">Information Technology</button>
        </div>
        <div class="col-md-4 col-lg-2">
        <button type="submit" class="btn btn-outline-primary" id="Search">Labour and workforce</button>
        </div>
        <div class="col-md-4 col-lg-2">
        <button type="submit" class="btn btn-outline-primary" id="Search">Finance and accounts</button>
        </div>
        <div class="col-md-4 col-lg-2">
        <button type="submit" class="btn btn-outline-primary" id="Search">Foods and Bevarages</button>
        </div>
        <div class="col-md-4 col-lg-2">
        <button type="submit" class="btn btn-outline-primary" id="Search">Management and Lead</button>
        </div>
      </div>
    </div>
  </section>
  <br><br><br><br>


  <!-- ABOUT JAPAN -->
  <section id="about" class="about">
  <div class="container">
    <div class="row text-center">
      <h5 class="Lead fw-bold">About Japan</h5>
      <div class="heading-line mb-1"></div>
    </div>
  <!-- START THE DESCRIPTION CONTENT  -->
    <div>
        <div class="row bg-white text-start">
          <p class="fw-light text-center">
          Japan offers a diverse range of job opportunities across various industries. With its advanced technology sector, robust manufacturing base, and a strong emphasis on education and healthcare, the country presents a dynamic work environment for both locals and foreigners
          </p>
          <button id="Learn" type="submit" class="rounded-pill btn-info btn">Learn more
          <span><i class="fas fa-arrow-right"></i></span>
        </button>
        </div>
    </div>
  </div>
  <br><br><br>
  <?php include './footer.html'; ?>
  
</body>

        <!-- SCRIPT -->
        <script>
        document.getElementById("Search").addEventListener("click", redirectFunction);
        
        function redirectFunction(){
            window.location.href = "./job_listings.php";
        }
        </script>
</html>