<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentora</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" 
        crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="{{asset('img/mentora-logo.svg')}}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
    <script src="https://kit.fontawesome.com/849e46e659.js" crossorigin="anonymous"></script>
</head>

<body>
    <x-navbar></x-navbar>

    <div class="container mt-5">
    <h4 class="mb-3">Status Pemesanan</h4>
    @if($listTransaksi=='empty')
      <h1>Tidak ada status pemesanan</h1>
    @else
      @foreach($listTransaksi as $transaksi)
        <div class="card bg-light text-dark">
          <div class="card-body">
            <div class="row mt-3">
              <div class="col-2 my-2 d-flex justify-content-center">
                  @php
                    $picture = $transaksi->mentor->profilPicture;
                  @endphp
                  <img src="{{asset("img/$picture")}}" class="rounded-1" style="max-width: 130px; max-height: 130px;">
              </div>
              <div class="col-6">
                <div class="row">
                  <h4>{{$transaksi->mentor->name}}</h4>
                </div>
                  @foreach($transaksi->mentor->skill as $skill)
                    <button type="button" class="my-2 btn btn-outline-dark  btn-md">{{$skill->name}}</button>
                  @endforeach
              </div>
            </div>
            <span style="position: absolute; top: 28px; right: 28px; text-align: right;">
              <b>{{$transaksi->statusPemesanan}}<br><span style="font-size: smaller; ">Rp.{{number_format(($transaksi->mentor->price*$transaksi->jumlahSesi), 0,',','.')}}</span></b>
            </span>
          </div>
        </div>
      @endforeach
      <div class="card bg-light text-dark mt-3">
        <div class="card-body">
            <div class="row mt-3">
            <div class="col-2 my-2 d-flex justify-content-center">
                <img src="{{asset('bieber.jpg')}}" class="rounded-1" style="max-width: 130px; max-height: 130px;">
            </div>
            <div class="col-6">
                <h4>Andi Rafly</h4>
                <button type="button" class="my-2 btn btn-outline-dark  btn-md">UI/UX</button>
                <button type="button" class="my-2 btn btn-outline-dark  btn-md">Project Manager</button>
                <button type="button" class="my-2 btn btn-outline-dark  btn-md">Business & Management</button>
            </div>
            </div>
            <span style="position: absolute; top: 28px; right: 28px; text-align: right;">
              <b>Pending<br><span style="font-size: smaller; ">Rp100.000</span></b>
            </span>
        </div>
      </div>
    @endif
    </div>

</body>

</html>