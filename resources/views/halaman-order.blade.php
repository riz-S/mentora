<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentora</title>
    <script>
      var updateTotal = (harga) =>{
        
        total = document.getElementById('sel1').value * harga
        document.getElementById('total').textContent = "Rp."+new Intl.NumberFormat('id-ID').format(total)
      }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="{{asset('img/mentora-logo.svg')}}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
</head>

<body>
    <x-navbar></x-navbar>
    <form method="POST" action="{{route('pay', $mentor->id)}}" class="needs-validation" novalidate>
    @csrf
    <div class="row m-5">
      <div class="col-8">
        <div class="card bg-light text-dark">
            <div class="card-header bg-transparent border-0 m-3 mb-0">
              <h4>Informasi Kontak</h4>
            </div>
            <div class="card-body">
              <div class="form-group mt-0 m-3">
                <label>Nama</label>
                <input value="{{Auth::user()->name}}" name="name" type="text" class="form-control" required>
                <div class="invalid-feedback">
                  What's your name?
                </div>
              </div>
              <div class="form-group m-3 mt-0">
                <label>E-Mail</label>
                <input value="{{Auth::user()->email}}" name="email" type="email" class="form-control" required>
                <div class="invalid-feedback">
                  Oh no! Email is invalid.
                </div>
              </div>
              <div class="form-group m-3 mt-5">
                <label for="exampleFormControlTextarea1">Ekspektasi dari Mentor</label>
                <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="7"></textarea>
              </div>
            </div>
          </div>

        </div>
        <div class="col-4">
          <div class="card bg-light text-dark">
            <div class="card-header bg-transparent border-0 mt-2 mb-0">
              <h4>Detail Pesanan</h4>
          </div>
          <div class="row m-3">
            <div class="col-3 m-2 d-flex justify-content-center">
                <img src="{{asset('img/pp.png')}}" class="rounded-1" style="max-width: 50px; max-height: 50px;">
            </div>
            <div class="col-6">
              <div class="row">
                <h4>{{$mentor->name}}</h4>
                <p>{{$mentor->category->name}}</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <p style="text-align: left; margin-left: 20px;">Harga per sesi</p>
            </div>
            <div class="col">
              <p style="text-align: right; margin-right: 20px;">Rp.{{number_format($mentor->price, 0,',','.')}}</p>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <p style="text-align: left; margin-left: 20px;">Durasi per sesi</p>
            </div>
            <div class="col">
              <p style="text-align: right; margin-right: 20px;">60 menit</p>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <p style="text-align: left; margin-left: 20px;">Jumlah sesi</p>
            </div>
            <div class="col-2 me-3">
              <div class="form-group ">
                <!-- <label for="sel1" class="float-start"></label> -->
                <select name="jumlahSesi" class="form-control" id="sel1" name="sellist1" onchange="updateTotal({{$mentor->price}})">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                </select>
                </select>
              </div>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col">
              <p style="text-align: left; margin-left: 20px;"><b>Total</b></p>
            </div>
            <div class="col">
              <p style="text-align: right; margin-right: 20px;"><b id="total">Rp.{{number_format($mentor->price, 0,',','.')}}</b></p>
            </div>
          </div>
          <div class="card m-3 text-left">
            <button class="btn btn-primary">Submit</button>
          </div>
        </div>
      </div>
    </div>
    </form>

    
</body>

</html>