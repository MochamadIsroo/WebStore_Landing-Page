<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- CSS Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

  <title>Ammu Collection</title>
</head>

<body>
  <!-- Header -->
  <nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container">
      <a class="navbar-brand" href="#">Ammu Collection</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Produk</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Bantuan</a>
            </li>
          </ul>
        </div>
      </div>
      <button type="button" class="btn btn-outline-primary">Masuk</button>
    </div>
  </nav>
  <!-- End Header -->

  <!-- Hero -->
  <div class="container-fluid">
    <div class="container">
      <div class="hero-menu">
        <div class="hero-text">
          <h3>
            Pakaian Muslim <br />
            Berkualitas hanya di
          </h3>
          <h2>Ammu Collection</h2>
        </div>
        <div class="hero-img">
          <img src="{{asset('assets/img/sarung.png')}}" alt="image" class="img-sarung" />
          <img src="{{asset('assets/img/baju.png')}}" class="img-baju" />
        </div>
      </div>
    </div>
  </div>
  <!-- End Hero -->

  <!-- Content -->
  <div class="container content">
    <h2>Produk</h2>
    <div class="search-pro">
      <input class="search" type="search" placeholder="Search..." aria-label="Search">
    </div>
    <div class="content-card row">
      <div class="card col" style="width: 15rem;">
        <img src="{{asset('assets/img/baju.png')}}" class="card-img-top " alt="...">
        <div class="card-body">
          <h6 class="card-title">Baju Muslim Pria</h6>
          <p class="card-price">Rp 100.000</p>
        </div>
      </div>
      <div class="card col" style="width: 15rem;">
        <img src="{{asset('assets/img/baju.png')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h6 class="card-title">Baju Muslim Pria</h6>
          <p class="card-price">Rp 100.000</p>
        </div>
      </div>
      <div class="card col" style="width: 15rem;">
        <img src="{{asset('assets/img/baju.png')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h6 class="card-title">Baju Muslim Pria</h6>
          <p class="card-price">Rp 100.000</p>
        </div>
      </div>
      <div class="card col" style="width: 15rem;">
        <img src="{{asset('assets/img/baju.png')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h6 class="card-title">Baju Muslim Pria</h6>
          <p class="card-price">Rp 100.000</p>
        </div>
      </div>
      <div class="card col" style="width: 15rem;">
        <img src="{{asset('assets/img/baju.png')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h6 class="card-title">Baju Muslim Pria</h6>
          <p class="card-price">Rp 100.000</p>
        </div>
      </div>
    </div>
    <div class="d-grid gap-2 col-3 mx-auto mt-3">
      <button class="btn btn-primary" style="color:white" type="button">Tampilkan semua produk</button>
    </div>
  </div>
  <!-- End Content -->

  <!-- Footer -->
  <div class="card-footer">
    <div class="container">
      <div class="menu-footer text-center">
        <h2 class="text-uppercase">Ammu Collection</h2>
        <p>Ammu Collection adalah E-Commerce yang menyediakan berbagai model pakaian muslim <br> seperti baju muslim pria, sorban pria, gamis, dan abaya.</p>
      </div>
      <div class="footer text-center">
        <span class="fw-bold">&copy; Ammu Collection 2023</span>
      </div>
    </div>
  </div>
  <!-- End Footer -->



  <script src="{{asset('assets/js/app.js')}}"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>