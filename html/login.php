<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Sport Center</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="../style/style.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center mb-4">
                            <img src="{{ asset('img/logoAdmin.png') }}" alt="Sport Center Logo" class="logo">
                        </div>
                        <h3 class="text-center">Login</h3>
                        <p class="text-center">Silahkan Login Sebelum Melakukan Reservasi</p>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email :</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Masukan Email" value="{{ old('email') }}">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">Password :</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Masukan Password">
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                <label class="form-check-label" for="remember">Ingat Saya</label>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-success">Login</button>
                                <button type="button" class="btn btn-primary" onclick="window.location.href='/register'">Registrasi</button>
                                <button type="reset" class="btn btn-danger" onclick="window.location.href='/'">Batalkan</button>
                            </div>
                        </form>
                    </div>
                </div>
                <footer class="text-center mt-4">
                    <small>2024 SPORT CENTER. All rights reserved.</small>
                    <div class="footer-links">
                        <a href="#">informasi</a> |
                        <a href="#">ketentuan</a> |
                        <a href="#">prosedur</a> |
                        <a href="#">jadwal</a>
                    </div>
                </footer>
            </div>
        </div>
    </div>
</body>

</html>
