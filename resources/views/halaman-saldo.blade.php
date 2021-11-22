<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentora</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="{{asset('img/mentora-logo.svg')}}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
    <style>
      input.transparent-input{
        background-color:transparent !important;
        border:none !important;
      }
  </style>
</head>

<body>
    <x-navbar></x-navbar>
    <div class="row m-5">
      <x-sidebar></x-sidebar>
      <div class="col-9">
        <div class="card-transparent">
          <form method="POST" action="{{route('tambahSaldo')}}" class="needs-validation" novalidate>
            @csrf
            <div class="card-header bg-transparent border-0 m-3 mb-0">
              <h3>Saldo</h3>
            </div>
            <div class="card-body bg-transparent border-0">
              <div class="form-group m-3 mt-0">
                <label><b>Saldo saat ini</b></label>
                <input type="" readonly class="form-control-plaintext" value="Rp.{{number_format(Auth::user()->saldo, 0,',','.')}}" required>
              </div>
              <div class="form-group m-3 mt-0">
                <label>Masukkan kode voucher: </label>
                <input name="kode" type="text" class="form-control" value="" required>
                <div class="invalid-feedback">
                  Oh no! Voucher is invalid.
                </div>
              </div>
              <div class="card m-3 text-left" style="width: 120px;">
                <button class="btn btn-primary">Submit</button>
              </div>
            </div>
          </form>
          @if ($message = Session::get('error'))
            <x-alert msg="{{$message}}"></x-alert>
          @elseif($errors->any())
            <x-alert msg="{{$errors->first()}}"></x-alert>
          @endif
        </div>
      </div>
    </div>

    
</body>

</html>