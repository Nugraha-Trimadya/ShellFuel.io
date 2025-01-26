  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>SPBU Online System</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
      <style>
          body {
              background: #f8f9fa;
              min-height: 100vh;
          }
          .navbar {
              background-color: #d63031 !important;
              box-shadow: 0 2px 4px rgba(0,0,0,0.1);
          }
          .navbar-brand {
              color: white !important;
              font-weight: bold;
          }
          .nav-link {
              color: white !important;
              margin: 0 10px;
          }
          .nav-link:hover {
              color: #ffd700 !important;
          }
          .hero-section {
              background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://source.unsplash.com/random/1920x1080?gas-station');
              background-size: cover;
              background-position: center;
              height: 100vh;
              display: flex;
              align-items: center;
              color: white;
          }
          .feature-box {
              padding: 2rem;
              text-align: center;
              transition: transform 0.3s;
              background: #f8f9fa;
              border-radius: 10px;
              margin: 10px;
              box-shadow: 0 4px 6px rgba(0,0,0,0.1);
          }
          .feature-box:hover {
              transform: translateY(-10px);
          }
          .cta-section {
              background-color: #d63031;
              padding: 5rem 0;
              color: white;
          }
          .price-board {
              background: #fff;
              padding: 20px;
              border-radius: 15px;
              margin: 20px 0;
              box-shadow: 0 4px 6px rgba(0,0,0,0.1);
          }
          .price-item {
              display: flex;
              justify-content: space-between;
              padding: 10px 0;
              border-bottom: 1px solid #eee;
          }
      </style>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  </head>
  <body>
      <nav class="navbar navbar-expand-lg navbar-dark">
          <div class="container">
              <a class="navbar-brand" href="#"><i class="bi bi-fuel-pump me-2"></i>SPBU Online System</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav ms-auto">
                      <li class="nav-item">
                          <a class="nav-link" href="index.php"><i class="bi bi-cart me-1"></i>Beli BBM</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="dashboard.php"><i class="bi bi-clock-history me-1"></i>Riwayat</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#"><i class="bi bi-person me-1"></i>Profil</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#"><i class="bi bi-box-arrow-right me-1"></i>Logout</a>
                      </li>
                  </ul>
              </div>
          </div>
      </nav>

      <section class="hero-section" id="home">
          <div class="container text-center">
              <h1 class="display-1 mb-4">Quality Fuel for Your Journey</h1>
              <p class="lead mb-4">Premium fuel products and excellent service 24/7</p>
              <a href="#prices" class="btn btn-light btn-lg">Check Today's Prices</a>
          </div>
      </section>

      <section class="py-5" id="prices">
          <div class="container">
              <h2 class="text-center mb-5">Today's Fuel Prices</h2>
              <div class="row">
                  <div class="col-lg-8 mx-auto">
                      <div class="price-board">
                          <div class="price-item">
                              <h4>Pertamax</h4>
                              <h4>Rp 15.000/liter</h4>
                          </div>
                          <div class="price-item">
                              <h4>Pertalite</h4>
                              <h4>Rp 13.000/liter</h4>
                          </div>
                          <div class="price-item">
                              <h4>Solar</h4>
                              <h4>Rp 12.000/liter</h4>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>

      <section class="py-5 bg-light" id="services">
          <div class="container">
              <h2 class="text-center mb-5">Our Services</h2>
              <div class="row">
                  <div class="col-md-4">
                      <div class="feature-box">
                          <i class="bi bi-fuel-pump stats-icon"></i>
                          <h3>Fuel Services</h3>
                          <p>High-quality fuel for all types of vehicles</p>
                      </div>
                  </div>
                  <div class="col-md-4">
                      <div class="feature-box">
                          <i class="bi bi-tools stats-icon"></i>
                          <h3>Oil Change</h3>
                          <p>Professional oil change and maintenance services</p>
                      </div>
                  </div>
                  <div class="col-md-4">
                      <div class="feature-box">
                          <i class="bi bi-shop stats-icon"></i>
                          <h3>Mini Market</h3>
                          <p>Convenience store for all your needs</p>
                      </div>
                  </div>
              </div>
          </div>
      </section>

      <section class="cta-section" id="contact">
          <div class="container text-center">
              <h2 class="mb-4">Visit Us Today</h2>
              <p class="lead mb-4">Experience our premium fuel and excellent service</p>
              <button class="btn btn-light btn-lg">Find Nearest Station</button>
          </div>
      </section>

      <footer class="bg-dark text-white py-4">
          <div class="container">
              <div class="row">
                  <div class="col-md-6">
                      <h5>About Us</h5>
                      <p>Your trusted fuel station partner, providing quality fuel and services 24/7.</p>
                  </div>
                  <div class="col-md-6">
                      <h5>Contact</h5>
                      <p>Email: info@spbuonline.com<br>Phone: (021) 456-7890</p>
                  </div>
              </div>
              <div class="text-center mt-4">
                  <p>© 2023 SPBU Online System. All rights reserved.</p>
              </div>
          </div>
      </footer>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
  </html>