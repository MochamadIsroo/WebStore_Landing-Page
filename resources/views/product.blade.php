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
              <a class="nav-link" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">Produk</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Bantuan</a>
            </li>
          </ul>
        </div>
      </div>

      <!-- Button trigger modal -->
      <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalLogin">
        Masuk
      </button>
    </div>
  </nav>
  <!-- End Header -->

  <!-- Content -->
  <div class="container-fluid product">
    <div class="container ">
      <div class="p-3 p-md-5 text-center prode">
        <div class="row">
          <h3 class="judul">ACCESORIES</h3>
          <div class="col mt-4">
            <div class="card" style="width: 15rem">
              <img src="{{asset('assets/img/koko.png')}}" class="card-img-top" alt="..." />
              <div class="card-body text-center">
                <h5 class="card-title title-name">Nama Produk</h5>
                <h5 class="card-title title-name">Harga</h5>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
              </div>
            </div>
          </div>
          <div class="col mt-4">
            <div class="card" style="width: 15rem">
              <img src="{{asset('assets/img/koko.png')}}" class="card-img-top" alt="..." />
              <div class="card-body text-center">
                <h5 class="card-title title-name">Nama Produk</h5>
                <h5 class="card-title title-name">Harga</h5>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
              </div>
            </div>
          </div>
          <div class="col mt-4">
            <div class="card" style="width: 15rem">
              <img src="{{asset('assets/img/koko.png')}}" class="card-img-top" alt="..." />
              <div class="card-body text-center">
                <h5 class="card-title title-name">Nama Produk</h5>
                <h5 class="card-title title-name">Harga</h5>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
              </div>
            </div>
          </div>
          <div class="col mt-4">
            <div class="card" style="width: 15rem">
              <img src="{{asset('assets/img/koko.png')}}" class="card-img-top" alt="..." />
              <div class="card-body text-center">
                <h5 class="card-title title-name">Nama Produk</h5>
                <h5 class="card-title title-name">Harga</h5>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
              </div>
            </div>
          </div>
          <div class="col mt-4">
            <div class="card" style="width: 15rem">
              <img src="{{asset('assets/img/koko.png')}}" class="card-img-top" alt="..." />
              <div class="card-body text-center">
                <h5 class="card-title title-name">Nama Produk</h5>
                <h5 class="card-title title-name">Harga</h5>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
              </div>
            </div>
          </div>
        </div>
      </div>
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




  <!-- Modal -->
  <div class="modal fade p-3" id="modalLogin" tabindex="-1" aria-labelledby="modalLogin" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title align-middle" id="modalLogin">Login</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <p class="modal-text">Belum punya akun? <a href="./register.html">Daftar disini</a></p>

            <div class="form-floating mb-3">
              <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
              <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
              <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
              <label for="floatingPassword">Password</label>
            </div>
          </form>
          <button type="button" class="btn btn-primary position-relative m-3">Login</button>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>