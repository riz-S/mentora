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
    <link rel="stylesheet" href="{{asset('css/halaman-utama.css')}}">
</head>

<body>
    <x-navbar></x-navbar>
    <div class="welcome">
        <h2>Hello, {{Auth::user()->name}}</h2>
    </div>

    <div id="carousel-halaman-utama" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('img/quotes-1.png')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>“A mentor is someone who sees more talent and ability within you, than you see in yourself, and helps bring it out of you.” — Bob Proctor.</h5>

                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('img/quotes-2.png')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>"Every great achiever is inspired by a mentor." – Lailah Gifty Akita</h5>

                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('img/quotes-3.png')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>"Regardless of our titles or years of experience, we can learn from each other. Through mentoring and by being open to learn where we can reach our ultimate potential." – Lily Benjamin</h5>

                </div>
            </div>
        </div>
    </div>

    
</body>

</html>