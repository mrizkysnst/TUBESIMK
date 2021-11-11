<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- My Style -->
    <link rel="stylesheet" href="/css/style.css">
    <title></title>
  </head>
  <body class="text-center">

  <div class="row justify-content-center">
    <div class="col-lg-4">

      @if(session()->has('success'))
        <div class="alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

      @if(session()->has('loginError'))
        <div class="alert-danger alert-dismissible fade show" role="alert">
          {{ session('loginError') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif


      <main class="form-sign-in">
        <h1 class="h3 mb-3 fw-normal text-center">Login</h1>
      <form action="/login" method="post">
      @csrf
      <div class="form-floating mb-2">
        <input type="username" name="usename" class="form-control" @error('username') is-invalid @enderror id="username" placeholder="username" autofocus required value="{{ old ('username') }}">
        <label for="floatingInput">Username</label>
        @error('username')
          <div class="invalid feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="form-floating mb-2">
        <input type="password" name="password" class="form-control" id="Password" placeholder="Password" required>
        <label for="floatingPassword">Password</label>
      </div>

      <button class="w-100 btn btn-lg btn-primary" type="submit">Masuk</button>
    </form>
    <small class="d-block text-center mt-3"> Belum Punya Akun? <a href="/registrasi"> Registrasi Sekarang!</a></small>
  </main>


  </body>
</html>
