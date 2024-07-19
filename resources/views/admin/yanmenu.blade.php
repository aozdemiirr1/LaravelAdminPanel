<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .dropdown-item:hover {
            color: #212529 !important;
        }
    </style>

</head>
<body>
    
    <nav class="navbar navbar-expand-lg bg-body-tertiary align-items-start" style="height:94.2vh; background-color: #212529 !important; width:200px;">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav flex-column">
                <p style="color:#656565;">Core</p>
                <li class="nav-item">
                    <a class="nav-link active text-white d-flex align-items-center" style="gap: 10px;" aria-current="page" href="{{ url('admin/dashboard') }}"><i class="fa-solid fa-gauge"></i> Dashboard</a>
                </li>
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle text-white d-flex align-items-center" style="gap:10px;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-bars"></i> Menuler
                    </a>
                    <ul class="dropdown-menu" style="background-color: transparent !important; border: none; position: relative;">
                        <li><a class="dropdown-item text-white" href="{{ url('admin/menuler/menuler') }}">Menuler</a></li>
                        <li><a class="dropdown-item text-white" href="{{ url('admin/menuler/menuekle') }}">Menu Ekle</a></li>
                    </ul>
                </li>
                <p style="color:#656565;" class="mt-5">Yöneticiler</p>
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle text-white d-flex align-items-center" style="gap:10px;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-user"></i> Adminler
                    </a>
                    <ul class="dropdown-menu" style="background-color: transparent !important; border: none; position: relative;">
                        <li><a class="dropdown-item text-white" href="{{ url('admin/kullanicilar/adminler') }}">Adminler</a></li>
                        <li><a class="dropdown-item text-white" href="{{ url('admin/kullanicilar/adminekle') }}">Admin Ekle</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white d-flex align-items-center" style="gap:10px;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-image"></i> Bannerlar
                    </a>
                    <ul class="dropdown-menu" style="background-color: transparent !important; border: none; position: relative;">
                        <li><a class="dropdown-item text-white" href="{{ url('admin/bannerlar/bannerlar') }}">Bannerlar</a></li>
                        <li><a class="dropdown-item text-white" href="{{ url('admin/bannerlar/bannerekle') }}">Banner Ekle</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white d-flex align-items-center" style="gap: 10px;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-book-open"></i> Yazılar
                    </a>
                    <ul class="dropdown-menu" style="background-color: transparent !important; border: none; position: relative;">
                        <li><a class="dropdown-item text-white" href="{{ url('admin/yazilar/yazilar') }}">Yazılar</a></li>
                        <li><a class="dropdown-item text-white" href="#">Yazı Ekle</a></li>
                    </ul>
                </li>
                <p style="color:#656565;" class="mt-5">Settings</p>
                <li class="nav-item">
                    <a class="nav-link  text-white d-flex align-items-center" style="gap: 10px;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-gear"></i> Ayarlar
                    </a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

  


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>