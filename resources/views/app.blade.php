<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Font & Icon -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">

  <title>Ammu Collection</title>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light fs-5">
    <div class="container">
      <a class="navbar-brand fs-2 pe-5 " href="#">Ammu Collection</a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item pe-3">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item pe-3">
            <a class="nav-link" href="#">Produk</a>
          </li>
          <li class="nav-item pe-3">
            <a class="nav-link" href="#">Bantuan</a>
          </li>
        </ul>
      </div>
      <form class="d-flex">
        <input class="form-control me-2 fs-5" type="search" placeholder="Search..." aria-label="Search">
        <button class="icon">
          <span class="material-icons">
            shopping_cart
          </span>
        </button>
        <button class="icon">
          <span class="material-icons">
            account_circle
          </span>
        </button>
      </form>

      <!-- Button trigger modal -->
      <!-- <button type="button" class="btn btn-outline-primary fs-5" data-bs-toggle="modal" data-bs-target="#modalLogin">
        Masuk
      </button> -->
    </div>
  </nav>
  <!-- End Navbar -->

  <!-- Hero -->
  <div class="hero container-fluid">
    <div class="hero-content container d-flex justify-content-between">
      <div class="hero-text">
        <h1>Tampil Menarik <br> Untuk <br> Moment Terbaikmu</h1>
        <button type="button" class="btn btn-dark mt-4" style="padding: 15px 30px; ">Lihat Detail</button>
      </div>
      <div class="hero-img">
        <img src="{{asset('assets/img/koko.png')}}" alt="">
      </div>
    </div>
  </div>
  <!-- End Hero -->

  <!-- Content -->
  <div class="content container">
    <h1 class="text-center pb-5">Our Featured Collection</h1>
    <div class="row">
      <div class="col card p-0 m-3 border-0" style="width: 15rem;">
        <img src="{{asset('assets/img/koko.png')}}" class="w-100" alt="">
        <h5 class="pt-4 pb-1">Baju Muslim</h5>
        <h4 class="fw-bold ps-4">Rp 100.000</h4>
      </div>
      <div class="col card p-0 m-3 border-0" style="width: 15rem;">
        <img src="{{asset('assets/img/koko.png')}}" class="w-100" alt="">
        <h5 class="pt-4 pb-1">Baju Muslim</h5>
        <h4 class="fw-bold ps-4">Rp 100.000</h4>
      </div>
      <div class="col card p-0 m-3 border-0" style="width: 15rem;">
        <img src="{{asset('assets/img/koko.png')}}" class="w-100" alt="">
        <h5 class="pt-4 pb-1">Baju Muslim</h5>
        <h4 class="fw-bold ps-4">Rp 100.000</h4>
      </div>
      <!-- <div class="col mt-4">
        <div class="card" style="width: 15rem">
          <img src="{{asset('assets/img/koko.png')}}" class="card-img-top" alt="..." />
          <div class="card-body text-center">
            <h5 class="card-title title-name">Nama Produk</h5>
            <h5 class="card-title title-name">Harga</h5>
          </div>
        </div>
      </div> -->
    </div>
  </div>
  <!-- End Content -->

  <!-- Content 2 -->
  <div class="content-2 container-fluid">
    <div class="container d-flex justify-content-between mt-5 mb-5 pt-5 pb-5">
      <div>
        <img src="{{asset('assets/img/koko.png')}}" class="" alt="">
      </div>
      <div>
        <h1>Best Fashion <br> Brand</h1>
        <div class="col d-flex ">
          <div class="card p-3 me-3" style="width: 10rem; height:10rem;">asd</div>
          <div class="card p-3 me-3" style="width: 10rem; height:10rem;">asd</div>
          <div class="card p-3 me-3" style="width: 10rem; height:10rem;">asd</div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Content 2 -->

  <!-- Footer -->
  <div class="footer container-fluid">
    <div class="container">
      <div class="body-footer d-flex justify-content-between">
        <div>
          <h1>Ammu Collection</h1>
        </div>
        <div>
          <h3>Contact Us</h3>
          <ul>
            <li>admin@gmail.com</li>
            <li>081234567890</li>
          </ul>
        </div>
      </div>
      <p class="text-center p-3">Copyright &copy; Ammu Collection 2023</p>
    </div>
  </div>
  <!-- End Footer -->

  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>