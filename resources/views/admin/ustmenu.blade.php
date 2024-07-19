<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid d-flex justify-content-between">
            <a class="navbar-brand" href="{{ url('admin/dashboard') }}">Admin</a>
            <div class="collapse navbar-collapse flex-grow-0 flex- flex-row gap-2 mx-5" id="mynavbar">
                <form class="d-flex">
                    <input class="form-control me-2" type="text" placeholder="Search">
                    <button class="btn btn-primary" type="button">Search</button>
                </form>
                <div class="dropdown">
                    <button type="button" class="btn btn-white dropdown-toggle text-white" data-bs-toggle="dropdown">
                        <i class="fa-solid fa-user"></i>
                    </button>
                    <ul class="dropdown-menu mt-3" style="left: -100px;">
                        <li>
                            <a class="dropdown-item" href="#">
                                <form class="d-flex justify-content-center" action="{{ route('admin.login.post') }}" method="POST">
                                    @csrf
                                    <button class="btn" type="submit">Logout</button>
                                </form>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

  


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>