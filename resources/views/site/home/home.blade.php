<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <div class="header">
        @include('header&footer.header')
    </div>

    <div class="banner d-flex py-5" style="background-size:cover; height:60vh; background-image: url('https://themezinho.net/steaque/images/slide01.jpg'); background-repeat:no-repeat;">
        @foreach($bannerlar as $banner)
            <div class="container d-flex flex-column justify-content-center align-items-center">
                <h1 class="text-white">{{ $banner->title }}</h1>
                <p class="text-white fs-4">{{ $banner->explanation }}</p>
                <button class="btn btn-danger">Ürünleri Gör</button>
            </div>
        @endforeach
    </div>

    <div class="yazilar mt-5">
        <div class="container d-flex flex-row align-items-center gap-3 flex-wrap">
            @foreach($yazilar as $yazi)
                <div class="card" style="width: 18rem;">
                    <img style="height: 180px; object-fit:cover;" class="card-img-top" src="https://themezinho.net/steaque/images/menu-pack-thumb01.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{ $yazi->title }}</h5>
                        <p class="card-text">{{ $yazi->content }}</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
              </div>
            @endforeach
        </div>
    </div>

    <div class="footer">
        @include('header&footer.footer')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
