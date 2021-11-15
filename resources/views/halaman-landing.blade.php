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
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand d-lg-flex align-items-center" href="#">
                <img src="{{asset('img/mentora-logo.svg')}}" alt="" width="36" height="36" class="d-inline-block align-text-top"> Mentora
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto d-lg-flex align-items-center">
                    <a href="{{ route('register') }}"><button type="button" class="my-2 btn btn-outline-light  btn-md" >Register</button></a>
                    
                    <a href="{{ route('login') }}"><button type="button" class="my-2 btn btn-outline-light  btn-md">Login</button></a>
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center mb-4 mb-lg-0">
                    <div class="video-player">
                        <img class="img-fluid rounded" src="{{asset('img/mentoring.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 d-flex align-items-center">
                    <div class="block ">
                        <h2>1-on-1 Mentorship</h2>
                        <p>Dapatkan pengalaman dimentori oleh mentor terbaik dari perusahan-perusahaan besar dari berbagai bidang pekerjaan!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="center">
        <div class="container">
            <h4 class="text-center">DIMENTORI OLEH MENTOR BERPENGALAMAN</h4>
            <div class="d-flex justify-content-center">
                
                <div class="col-4 wrap-people">
                    <div class="row d-flex justify-content-between">
                        <div class="people p-0">
                            <img class="mentor-img" src="{{asset('img/mentor1.jpg')}}" alt="">
                        </div>
                        <div class="people p-0">
                            <img class="mentor-img" src="{{asset('img/mentor1.jpg')}}" alt="">
                        </div>
                        <div class="people p-0">
                            <img class="mentor-img" src="{{asset('img/mentor1.jpg')}}" alt="">
                        </div>
                        <div class="people p-0">
                            <img class="mentor-img" src="{{asset('img/mentor1.jpg')}}" alt="">
                        </div>
                        <div class="people p-0">
                            <img class="mentor-img" src="{{asset('img/mentor1.jpg')}}" alt="">
                        </div>
                        <div class="people p-0">
                            <img class="mentor-img" src="{{asset('img/mentor1.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="hero-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 align-self-center rounded mx-auto d-block mb-4 mb-lg-0">
                    <div class="video-player">
                        <img class="img-fluid rounded" src="{{asset('img/mentoring.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</body>

</html>