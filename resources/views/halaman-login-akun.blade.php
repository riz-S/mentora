<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentora</title>

    <script src="{{asset('js/form-validation.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
        
    <link rel="shortcut icon" href="{{asset('img/mentora-logo.svg')}}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body class="overflow-hidden">
    <div class="container" style="max-width: 100%;">
        <div class="row">
            <div class="col-4 d-flex align-items-center justify-content-center"
                style="background-color: #102E44; height: 1024px;">
                <img src="{{asset('img/mentora-logo.svg')}}" height="160">
            </div>
            <div class="col mt-5" style="height: 1024px;">
                <form method="POST" action="{{route('login')}}" class="needs-validation" novalidate>
                    @csrf
                    <div class="mx-5 d-grid gap-3">
                        <h3 class="mt-5">Login</h3>
                        <div class="form-group">
                            <label for="inputEmail">Email</label>
                            <input type="email" name="email" class="form-control" id="inputEmail" required>
                            <div class="invalid-feedback" role="alert">
                                Mohon masukan email Anda dengan benar!
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword">Password</label>
                            <input type="password" name="password" class="form-control" id="inputPassword" required
                                pattern="(?=^.{1,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
                            <div class="invalid-feedback" role="alert">
                                Password harus terdiri dari satu angka, satu huruf kapital dan huruf kecil, serta
                                minimal
                                mempunyai
                                panjang 8 karakter!
                            </div>
                        </div>

                        <div class="d-grid">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                        <p class="fw-light fs-6 text-center">Belum mempunyai akun? <a href="register"
                                class="text-decoration-none">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>