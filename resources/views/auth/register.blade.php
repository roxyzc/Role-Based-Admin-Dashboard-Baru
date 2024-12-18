<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background-color: #E6F4FE;
        }

        .form-control {
            border-radius: 18px;
            width: 100%;
            max-width: 542px;
            margin: 0 auto;
        }

        .btn-register {
            background-color: #19508C;
            color: white;
            padding: 7px 0;
            font-size: 1.1rem;
            width: 38%;
            height: 45px;
            border-radius: 18px;
        }

        .btn-register:hover {
            background-color: #174171;
            color: #E6F4FE;
        }

        .btn-login {
            border: 2px solid #1098F7;
            color: white;
            background-color: rgba(16, 152, 247, 0.2);
            border-radius: 18px;
            padding: 7px 40px;
            font-size: 1.1rem;
            width: 24%;
            height: 45px;
        }

        .btn-login:hover {
            background-color: rgba(16, 152, 247, 0.4);
        }

        .form-container {
            width: 75%;
            max-width: 500px;
        }

        .bg-light-custom {
            background-color: #E6F4FE;
        }

        .fs-jadilah {
            font-size: 3rem;
        }

        @media (max-width: 768px) {
            body {
                flex-direction: column;
            }

            .col-12.col-md-6 {
                width: 100%;
                padding: 0;
            }

            .fs-jadilah {
                font-size: 2.5rem;
            }

            .form-container {
                width: 90%;
                max-width: 100%;
            }

            .btn-register {
                width: 100%;
            }

            .btn-login {
                width: 100%;
            }

            .form-control {
                padding: 12px;
            }

            .d-flex.align-items-center.my-4 {
                flex-direction: column;
            }

            .d-flex.justify-content-center.gap-3 {
                gap: 20px;
            }

            .form-container h2 {
                font-size: 1.5rem;
            }
        }

        @media (max-width: 480px) {
            .fs-jadilah {
                font-size: 2rem;
            }

            .form-container h2 {
                font-size: 1.25rem;
            }

            .btn-register {
                font-size: 1rem;
            }

            .btn-login {
                font-size: 1rem;
            }

            .form-control {
                padding: 10px;
            }

            .d-flex.justify-content-center.gap-3 {
                gap: 15px;
            }
            .form-container h2 {
                margin-top: 80px; 
            }
        }
    </style>
</head>

<body class="d-flex vh-100 flex-column flex-md-row">
    <div class="col-12 col-md-6 d-flex flex-column justify-content-center align-items-center text-white text-center"
        style="background-image: url('{{ asset('images/login.png') }}'); background-size: cover; background-position: center;">
        <h2 class="fs-jadilah fw-bold mb-6">
            <div>Jadilah Bagian</div>
            <div>Dari Kami</div>
        </h2>

        <p class="mb-4">
            <div>Jika sudah memiliki akun, langsung masuk dan mulai</div>
            <div>pantau kinerja tim Anda</div>
        </p>

        <a href="{{ route('login') }}" class="btn btn-login">Login</a>
    </div>

    <div class="col-12 col-md-6 d-flex flex-column justify-content-center align-items-center bg-light-custom position-relative">
        <a href="{{ route('landing.page') }}" class="position-absolute top-0 start-0 p-4 text-primary fs-4 fw-bold">
            <img src="{{ asset('images/tracking.id.png') }}" alt="logo" class="img-fluid" style="max-width: 200px">
        </a>

        <div class="form-container mt-4">
            <h2 class="fs-2 fw-bold mb-4 text-center text-dark">Register disini</h2>
            @if($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li class="small">{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <form action="{{ route('register') }}" method="POST" class="d-flex flex-column align-items-center gap-3">
                @csrf
                <input type="text" name="username" placeholder="Username" class="form-control p-3" required>
                <input type="email" name="email" placeholder="Email" class="form-control p-3" required>
                <input type="password" name="password" placeholder="Password" class="form-control p-3" required>
                <input type="password" name="confirm_password" placeholder="Konfirmasi Password" class="form-control p-3" required>
                <button type="submit" class="btn fw-semibold btn-register mx-auto">Register</button>
            </form>
        </div>

        <div class="d-flex align-items-center my-4 w-75">
            <hr class="flex-grow-1">
            <span class="mx-3 text-secondary">Atau</span>
            <hr class="flex-grow-1">
        </div>

        <div class="d-flex justify-content-center gap-3">
            <a href="https://www.facebook.com" target="_blank">
                <img src="{{ asset('images/logofacebook.png') }}" alt="Facebook" style="width: 40px; height: 40px;">
            </a>
            <a href="https://www.login.com" target="_blank">
                <img src="{{ asset('images/logogoogle.png') }}" alt="Google" style="width: 40px; height: 40px;">
            </a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>