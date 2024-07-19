<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menü Ekle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
    <body>

        <div>
            @include('admin.ustmenu')
        </div>
        <div class="container-fluid d-flex flex-row align-items-start px-0" style="height:94.2vh;">
            <div>
                @include('admin.yanmenu')
            </div>
            <div class="container mt-5 mx-5">
                <div class="d-flex flex-column justify-content-between">
                    <h2>Menü Ekle</h2>
                    <form method="POST" action="{{ route('admin.menuler.menuekle') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="menuname" class="form-label">Menü Name</label>
                            <input type="text" class="form-control" id="menuname" name="menuname" required>
                        </div>
                        <div class="mb-3">
                            <label for="downname" class="form-label">Down Name</label>
                            <input type="text" class="form-control" id="downname" name="downname" required>
                        </div>
                        <div class="mb-3">
                            <label for="href" class="form-label">Href</label>
                            <input type="text" class="form-control" id="href" name="href" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
