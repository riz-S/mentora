<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentora</title>
    <script src="{{asset('js/form-validation.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="{{asset('img/mentora-logo.svg')}}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
</head>

<body>
    <x-navbar></x-navbar>
    <div class="row m-5">
      <x-sidebar></x-sidebar>
      <div class="col-9">
        <div class="card bg-light text-dark">
          <form method="POST" action="{{route('changePass')}}" class="needs-validation" novalidate 
          oninput='inputConfirmPassword.setCustomValidity(inputConfirmPassword.value != inputPassword.value ? true : "")'>
            @csrf
            <div class="card-header bg-transparent border-0 m-3 mb-0">
              <h4>Ganti Password</h4>
            </div>
            <div class="card-body">
              <div class="form-group mt-0 m-3">
                <label>Password Lama</label>
                <input name="oldPass" type="password" class="form-control" required pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
                <div class="invalid-feedback" role="alert">
                    Password harus terdiri dari satu angka, satu huruf kapital dan huruf kecil, serta
                    minimal
                    mempunyai
                    panjang 8 karakter!
                </div>
              </div>
              <div class="form-group m-3 mt-0">
                <label>Password Baru</label>
                <input name="newPass" type="password" class="form-control"  id="inputPassword" required pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
                <div class="invalid-feedback" role="alert">
                    Password harus terdiri dari satu angka, satu huruf kapital dan huruf kecil, serta
                    minimal
                    mempunyai
                    panjang 8 karakter!
                </div>
              </div>
              <div class="form-group m-3 mt-0">
                <label>Konfirmasi Password Baru</label>
                <input name="newPass_confirmation" type="password" class="form-control" id="inputConfirmPassword" required>
                <div class="invalid-feedback" role="alert">
                    Password yang Anda masukkan tidak sama!
                </div>
              </div>
              <div class="card m-3 text-left">
                <button class="btn btn-primary">Ganti Password</button>
              </div>
            </div>
          </form>
        </div>
        @if ($message = Session::get('error'))
          <x-alert msg="{{$message}}"></x-alert>
        @elseif($errors->any())
          <x-alert msg="{{$errors->first()}}"></x-alert>
        @endif
      </div>
    </div>

    
</body>

</html>