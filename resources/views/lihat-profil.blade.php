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
    <link rel="shortcut icon" href="{{asset('img/mentora-logo.svg')}}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
    <script src="https://kit.fontawesome.com/849e46e659.js" crossorigin="anonymous"></script>
</head>

<body>
    <x-navbar></x-navbar>

    <div class="container mt-5">
        <div class="row">
            <h2 class="col-3" style="margin-left: 144px;">Lihat Profil</h2>
            <div class="col-9"></div>
        </div>
        <div class="row mt-3">
            <div class="col-3 my-3 d-flex justify-content-center">
                <img src="{{asset("img/$mentor->profilPicture")}}" class="rounded-3" style="max-width: 200px; max-height: 240px;">
            </div>
            <div class="col-6">
                <h4>{{$mentor->name}}</h4>
                <p>{{$mentor->category->name}}</p>
                <hr>
                <div class="my-3">
                    <a href="https://www.instagram.com" target="_blank" class="mx-2"
                        style="text-decoration: none; color: #102E44;"><i class="fab fa-twitter-square fa-lg"></i></a>
                    <a href="https://www.twitter.com" target="_blank" class="mx-2"
                        style="text-decoration: none; color: #102E44;"><i class="fab fa-instagram fa-lg"></i></a>
                    <a href="https://www.linkedin.com" target="_blank" class="mx-2"
                        style="text-decoration: none; color: #102E44;"><i class="fab fa-linkedin fa-lg"></i></a>
                </div>
                <hr>
                <button type="button" class="my-2 btn btn-outline-dark  btn-md">{{$mentor->category->name}}</button>
                <div class="desc my-2">
                    {{$mentor->description}}
                </div>
                <div class="core-skill my-5">
                    <h4>Core Skill</h4>
                    @foreach($mentor->skill as $skill)
                        <button type="button" class="my-2 me-4 btn btn-outline-dark  btn-md">{{$skill->name}}</button>
                    @endforeach
                </div>
            </div>
            <div class="col-3">
                <div class="mx-5 my-2 border border-radius-3 text-center" style="background-color: #F3F3F3;">
                    <div class="row my-5">
                        <h2>Rp.{{number_format($mentor->price, 0,',','.')}}/Sesi</h2>
                    </div>
                    <div class="row d-grid gap-2 mx-5 my-5">
                        <a href="/pesan-mentor/{{$mentor->id}}"><button type="button" class="btn btn-primary btn-lg">Pesan Sekarang</button></a>
                    </div>
                    
                </div>
            </div>
        </div>

    </div>
</body>

</html>