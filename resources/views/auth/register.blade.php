<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Register</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <style>
    body {
      background-color: #5bc0de; /* Warna latar biru toska */
    }

    .btn-primary {
      background-color: #5bc0de; /* Warna tombol biru toska */
      border-color: #5bc0de; /* Warna border tombol biru toska */
    }

    .btn-primary:hover {
      background-color: #46b8da; /* Warna tombol biru toska saat dihover */
      border-color: #46b8da; /* Warna border tombol biru toska saat dihover */
    }

    .container {
      max-width: 350px; /* Ukuran tempat registrasi yang lebih kecil */
    }
  </style>

</head>

<body>

  <div class="container mt-5">

    <div class="card o-hidden border-0 shadow-lg">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-12">
            <div class="p-4">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Register here</h1>
              </div>
              <form action="{{ route('register') }}" method="POST" class="user" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <input type="text" class="form-control form-control-user @error('name') is-invalid @enderror"
                    id="exampleFirstName" placeholder="Name" name="name" value="{{ old('name') }}">
                  @error('name')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror"
                    name="email" id="email" placeholder="Email Address" value="{{ old('email') }}">
                  @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
                <div class="form-group">
                  <input type="password"
                    class="form-control form-control-user @error('password') is-invalid @enderror"
                    id="exampleInputPassword" name="password" placeholder="Password">
                  @error('password')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-user" id="exampleRepeatPassword"
                    name="password_confirmation" placeholder="Repeat Password">
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  {{ __('Register') }}
                </button>
                <hr>
              </form>
              <div class="text-center">
                <a class="small" href="{{ route('login') }}">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
