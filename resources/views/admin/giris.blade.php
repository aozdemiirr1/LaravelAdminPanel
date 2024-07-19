<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel Giriş</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container d-flex flex-column align-items-center border border-gray bg-gray" style="margin-top:150px; width:380px; padding:50px; border-radius:10px;">
        <h2 class="text-center text-dark">Admin Panel Giriş</h2>
        <form class="d-flex flex-column gap-1" action="{{ route('admin.login.post') }}" method="POST">
            @csrf
            <div class="d-flex flex-column align-items-start gap-2">
                <label class="text-dark" for="email">E-posta:</label>
                <input class="border border-gray rounded" type="email" id="email" name="email">
            </div>
            <div class="d-flex flex-column align-items-start gap-2">
                <label class="text-dark" for="password">Şifre:</label>
                <input class="border border-gray rounded" type="password" id="password" name="password">
            </div>
            <button class="btn mt-4  btn-primary" type="submit">Giriş Yap</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
