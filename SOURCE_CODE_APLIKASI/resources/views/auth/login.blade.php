<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Masuk - LaundryPro | FokusKonten Official</title>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('icon-32.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('favicon.png') }}">
    <link rel="icon" type="image/png" sizes="512x512" href="{{ asset('logo.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-icon.png') }}">
    <link rel="manifest" href="{{ asset('manifest.json') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body {
            background-color: #f4f6f9;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        }
        .bg-image {
            background: scroll center url('{{ asset("images/king_bg.jpg") }}');
            background-size: cover;
        }
        .card {
            border-radius: 12px;
        }
    </style>
</head>
<body>
<div class="container-fluid min-vh-100 d-flex flex-column justify-content-center py-4">
    <div class="row no-gutter justify-content-center">
        <div class="col-md-10 col-lg-10 col-xl-9 mx-auto">
            <div class="card flex-row border-0 shadow-lg rounded-4 overflow-hidden">
                <!-- The image half -->
                <div class="col-md-6 d-none d-md-flex bg-image flex-column justify-content-center align-items-center text-center p-5 text-white">
                    <div class="bg-white rounded-circle shadow-lg mb-3 d-inline-flex justify-content-center align-items-center overflow-hidden" style="width: 150px; height: 150px; padding: 10px;">
                        <img src="{{ asset('logo.png') }}" alt="LaundryPro Logo" class="img-fluid rounded-circle" style="width: 100%; height: 100%; object-fit: contain;">
                    </div>
                    <h2 class="fw-bold text-white mb-2" style="letter-spacing: 0.5px;">LaundryPro</h2>
                    <p class="text-white-50 small mb-0 px-2" style="max-width: 300px; line-height: 1.6;">
                        Sistem Kasir & Manajemen Laundry Profesional
                    </p>
                </div>

                <!-- The content half -->
                <div class="col-md-6 bg-white">
                    <div class="login d-flex align-items-center py-4">
                        <div class="container px-4 px-md-5">
                            <div class="row">
                                <div class="col-12 mx-auto">
                                    <div class="text-center mb-4">
                                        <div class="d-block d-md-none mb-3">
                                            <div class="bg-white rounded-circle p-2 shadow-sm d-inline-flex justify-content-center align-items-center overflow-hidden" style="width: 72px; height: 72px;">
                                                <img src="{{ asset('logo.png') }}" alt="LaundryPro Logo" class="img-fluid rounded-circle" style="width: 100%; height: 100%; object-fit: contain;">
                                            </div>
                                            <h4 class="fw-bold text-dark mt-2 mb-0">LaundryPro</h4>
                                        </div>
                                        <h3 class="fw-bold text-dark mt-2">Selamat Datang!</h3>
                                        <p class="text-muted small">Masukkan kredensial untuk mengakses sistem LaundryPro</p>
                                    </div>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group mb-3">
                                            <label class="form-label small fw-semibold text-secondary">Username</label>
                                            <input id="inputUser" type="text" placeholder="Masukkan username" required=""
                                                autofocus=""
                                                class="form-control form-control-lg shadow-sm px-3 @error('username') is-invalid @enderror"
                                                name="username" value="{{ old('username') }}">
                                            @error('username')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="form-label small fw-semibold text-secondary">Password</label>
                                            <input id="inputPassword" type="password" placeholder="Masukkan password" required=""
                                                class="form-control form-control-lg shadow-sm px-3 @error('password') is-invalid @enderror"
                                                name="password">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" name="remember"
                                                id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label small text-secondary" for="remember">
                                                Ingat Saya di Perangkat Ini
                                            </label>
                                        </div>
                                        <div class="d-grid gap-2 mb-3">
                                            <button type="submit"
                                                class="btn btn-primary btn-lg fw-bold shadow-sm">MASUK KE DASHBOARD</button>
                                        </div>
                                    </form>

                                    <div class="text-center pt-3 border-top mt-4 text-muted small">
                                        <div>Power by <a href="https://fokuskonten.my.id" target="_blank" class="fw-bold text-decoration-none text-primary">FokusKonten</a></div>
                                        <div class="mt-1" style="font-size: 0.8rem;">Bantuan Teknis WA: <a href="tel:085183011318" target="_blank" class="text-success text-decoration-none fw-semibold">+62 851-8301-1318</a></div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End -->
                    </div>
                </div><!-- End -->
            </div>
        </div>
    </div>
</div>
</body>
</html>
