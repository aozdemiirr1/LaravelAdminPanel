<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div>
        @include('admin.ustmenu')
    </div>
    <div class="container-fluid d-flex flex-row align-items-start px-0" style="height:94.2vh;">
        <div>
            @include('admin.yanmenu')
        </div>
        <div class="container d-flex flex-row align-items-center justify-content-between mt-5 mx-5">
            <div class="d-flex flex-column">
                <h1>Hoş geldiniz</h1>
                <div class="d-flex flex-row align-items-center gap-3 mt-5">
                    <a href="{{ url('admin/kullanicilar/adminler') }}" style="text-decoration: none; width:300px; height: 150px;" class="position-relative p-3 border border-gray rounded bg-primary d-flex flex-column align-items-start">
                        <h5 class="text-white">{{ $userCount }}</h5>
                        <p class="text-white">Adminler</p>
                        <div class="w-100 bg-light position-absolute bottom-0 dashboard-icon" style="height: 30px; left:0;"><i class="fa-solid fa-right-long fa-fw position-absolute bottom-0 tex-primary" style="right:20px; font-size:30px;"></i></div>
                    </a>
                    <a href="{{ url('admin/yazilar/yazilar') }}" style="text-decoration: none; width:300px; height: 150px;" class="position-relative p-3 border border-gray rounded bg-success d-flex flex-column align-items-start">
                        <h5 class="text-white">{{ $articleCount }}</h5>
                        <p class="text-white">Yazılar</p>
                        <div class="w-100 bg-light position-absolute bottom-0 dashboard-icon" style="height: 30px; left:0;"><i class="fa-solid fa-right-long fa-fw position-absolute bottom-0 text-success" style=" right:20px; font-size:30px;"></i></div>
                    </a>
                    <a href="{{ url('admin/bannerlar/bannerlar') }}" style="text-decoration: none; width:300px; height: 150px;" class="position-relative p-3  rounded bg-warning d-flex flex-column align-items-start">
                        <h5 class="text-white">{{ $bannerCount }}</h5>
                        <p class="text-white">Bannerlar</p>
                        <div class="w-100 bg-white position-absolute bottom-0 dashboard-icon" style="height: 30px; left:0;"><i class="fa-solid fa-right-long fa-fw position-absolute bottom-0 text-warning" style=" right:20px; font-size:30px;"></i></div>
                    </a>
                    <a href="{{ url('admin/menuler/menuler') }}" style="text-decoration: none; width:300px; height: 150px;" class="position-relative p-3  rounded bg-danger d-flex flex-column align-items-start">
                        <h5 class="text-white">{{ $menuCount }}</h5>
                        <p class="text-white">Menüler</p>
                        <div class="w-100 bg-white position-absolute bottom-0 dashboard-icon" style="height: 30px; left:0;"><i class="fa-solid fa-right-long fa-fw position-absolute bottom-0 text-danger" style=" right:20px; font-size:30px;"></i></div>
                    </a>
                </div>
            </div>    
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
