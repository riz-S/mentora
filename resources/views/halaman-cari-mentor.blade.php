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
    <script src="https://kit.fontawesome.com/849e46e659.js" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css" /> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="shortcut icon" href="{{asset('img/mentora-logo.svg')}}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">

</head>

<body>
    <x-navbar></x-navbar>

    <div class="container mt-5">
        <div class="row">
          <div class="col-5">
            <form method="POST" action="{{route('getMentors')}}">
            @csrf
              @if($keyword=='')
                <input name="keyword" class="form-control mr-sm-2" type="search" placeholder="UI/UX, Front-end, ..." aria-label="Search">
              @else
                <input name="keyword" value="{{$keyword}}" class="form-control mr-sm-2" type="search" placeholder="UI/UX, Front-end, ..." aria-label="Search">
              @endif
          </div>
            <div class="col-2">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            </div>
          
          <div class="col-5 d-flex justify-content-end">
            <form method="POST" action="{{route('sortListMentor')}}">
              @csrf
              <select name="sort" class="form-select" style="width: 350px;" aria-label="Default select example" onchange="this.form.submit()">
                <option value="">Urutkan</option>
                @foreach(array('Newest','Most Experienced','Cheapest') as $option)
                  @if($sort==$option)
                    <option selected>{{$option}}</option>
                  @else
                    <option>{{$option}}</option>
                  @endif
                @endforeach
              </select>
              <input type="hidden" name="listMentor" value="{{json_encode($listMentor)}}">
              <input type="hidden" name="keyword" value="{{$keyword}}">
              <input type="hidden" name="filters" value="{{json_encode(array($filterCategory,$filterSkill, $filterHarga))}}">
            </form>
          </div>
        </div>
        <div class="row">
          <form method="POST" action="{{route('filterInput')}}">
            @csrf
            <div class="col d-flex justify-content-start">
              <select name="filterCategory" class="form-select me-3 mt-2" style="width: 150px;" aria-label="Default select example" onchange="this.form.submit()">
                <option value="">Kategori</option>
                @foreach($categories as $category)
                  @if($filterCategory==$category->name)
                    <option selected>{{$category->name}}</option>
                  @else
                    <option>{{$category->name}}</option>
                  @endif
                @endforeach
              </select>
              <select name="filterSkill" class="form-select me-3 mt-2" style="width: 150px;" aria-label="Default select example" onchange="this.form.submit()">
                <option value="">Skill</option>
                @foreach($skills as $skill)
                  @if($filterSkill==$skill->name)
                    <option selected>{{$skill->name}}</option>
                  @else
                    <option>{{$skill->name}}</option>
                  @endif
                @endforeach
              </select>
              <select name="filterHarga" class="form-select me-3 mt-2" style="width: 150px;" aria-label="Default select example" onchange="this.form.submit()">
                <option value="">Harga</option>
                @if($filterHarga=="100000,200000")
                  <option value="100000,200000" selected>Rp100k - 200k</option>
                @else
                  <option value="100000,200000">Rp100k - 200k</option>
                @endif
                @if($filterHarga=="200000,500000")
                  <option value="200000,500000" selected>Rp200k - 500k</option>
                @else
                  <option value="200000,500000">Rp200k - 500k</option>
                @endif
                @if($filterHarga=="500000")
                  <option value="500000,999999" selected>>Rp500k</option>
                @else
                  <option value="500000,999999">>Rp500k</option>
                @endif
              </select>
              <input type="hidden" name="listMentor" value="{{json_encode($listMentor)}}">
              <input type="hidden" name="keyword" value="{{$keyword}}">
              <input type="hidden" name="sort" value="{{$sort}}">
            </div>
          </form>
        </div>
    </div>
    <div class="container mt-5">
      <div class="card bg-light text-dark">
        <div class="card-body">
          @if($listMentor!='empty')
            @foreach($listMentor as $mentor)
              <div class="row mt-3">
                <div class="col-2 my-2 d-flex justify-content-center">
                    <img src="{{asset("img/$mentor->profilPicture")}}" class="rounded-1" style="max-width: 130px; max-height: 130px;">
                </div>
                <div class="col-6">
                  <div class="row">
                    <h4>{{$mentor->name}}</h4>
                    <p>{{$mentor->category->name}}</p>
                  </div>
                    <button type="button" class="my-2 btn btn-outline-dark  btn-md">{{$mentor->category->name}}</button>
                    <div class="desc my-2">
                      {{$mentor->description}}
                    </div>
                </div>
                <div class="col-3 border-start border-secondary border-5">
                  <div class="mx-5 my-2 bg-transparent text-center">
                      <div class="row my-4">
                          <h4>Rp.{{number_format($mentor->price, 0,',','.')}}</h4>
                      </div>
                      <div class="row mx-3 my-3 mt">
                          <a href="/mentor/{{$mentor->id}}"><button type="button" class="btn btn-primary btn-lg">Lihat Profil</button></a>
                      </div>
                  </div>
                </div>
              </div>
            @endforeach
          @else
            <h1>Tidak ada mentor ditemukan</h1>
          @endif
          <div class="row mt-5">
            <div class="col-2 my-2 d-flex justify-content-center">
                <img src="{{asset('img/pp.png')}}" class="rounded-1" style="max-width: 130px; max-height: 130px;">
            </div>
            <div class="col-6">
              <div class="row">
                <h4>Andi Rafly</h4>
                <p>Back-end Engineer di Tokopedia</p>
              </div>
                <button type="button" class="my-2 btn btn-outline-dark  btn-md">Back-end</button>
                <button type="button" class="my-2 btn btn-outline-dark  btn-md">Data Science</button>
                <button type="button" class="my-2 btn btn-outline-dark  btn-md">NodeJS</button>
                <div class="desc my-2">
                  Halo, saya adalah seorang Back-end Engineer di Tokopedia. Saya memiliki pengalaman dalam penelitian, strategi, perancangan algoritma, dan berkolaborasi dengan tim multi-disiplin dengan
                  menjunjung tinggi kerjasama. Silakan hubungi saya.
                </div>
            </div>
            <div class="col-3 border-start border-secondary border-5">
              <div class="mx-5 my-2 bg-transparent text-center">
                  <div class="row my-4">
                      <h4>Rp100.000</h4>
                  </div>
                  <div class="row mx-3 my-3">
                      <button type="button" class="btn btn-primary btn-lg">Lihat Profil</button>
                  </div>
                  
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

</body>

</html>