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
    <title></title>
  </head>
  <body class="text-center">

  <div class="row justify-content-center">
    <div class="col-lg-10">
      <main class="form-registration">
        <h1 class="h3 mb-3 fw-normal text-center">Registrasi</h1>
      <form>
      @csrf
      <div class="form-floating">
        <input type="text" name="name" class="form-control mb-2" @error('name') is-invalid @enderror id="name" placeholder="Name" required value="{{ old('name') }}">
        <label for="name">Nama</label>
        @error('name')
          <div class="invalid-feedback">
            {{ $message}}
          </div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="text" name="username" class="form-control mb-2" @error('username') is-invalid @enderror id="username" placeholder="Username" required value="{{ old('username') }}">
        <label for="name">Username</label>
        @error('username')
          <div class="invalid-feedback">
            {{ $message}}
          </div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="text" name="email" class="form-control mb-2" @error('email') is-invalid @enderror id="email" placeholder="nama@example.com" required value="{{ old('email') }}">
        <label for="name">Email</label>
        @error('email')
          <div class="invalid-feedback">
            {{ $message}}
          </div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="text" name="password" class="form-control mb-2" @error('password') is-invalid @enderror id="password" placeholder="Password" required value="{{ old('password') }}">
        <label for="name">Password</label>
        @error('password')
          <div class="invalid-feedback">
            {{ $message}}
          </div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="url" name="ponsel" class="form-control mb-2" @error('ponsel') is-invalid @enderror id="website" placeholder="Masukkan nomor ponsel aktif" required value="{{ old('ponsel') }}">
        <label for="name">Ponsel</label>
        @error('ponsel')
          <div class="invalid-feedback">
            {{ $message}}
          </div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="name" name="alamat" class="form-control mb-2" @error('alamat') is-invalid @enderror id="Street" placeholder="Masukkan alamat lengkap" required value="{{ old('alamat') }}">
        <label for="Street">Alamat</label>
        @error('alamat')
        <div class="invalid-feedback">
          {{ $message}}
        </div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="text" name="kodepos" class="form-control mb-2" @error('kodepos') is-invalid @enderror id="zIp" placeholder="Masukkan kode pos" required value="{{ old('kodepos') }}">
        <label for="zIp">Kode Pos</label>
        @error('kodepos')
          <div class="invalid-feedback">
            {{ $message}}
          </div>
        @enderror
      </div>

      <button class="w-100 btn btn-lg btn-primary" type="submit">Daftar</button>
    </form>
    <small class="d-block text-center mt-3"> Sudah Punya Akun? <a href="/login"> Login </a></small>
  </main>


  </body>
</html>
