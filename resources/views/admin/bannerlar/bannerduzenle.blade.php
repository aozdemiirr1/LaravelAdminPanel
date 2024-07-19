<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Banner Düzenle</title>
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
            <h2>Banner Düzenle</h2>
            <form action="{{ route('admin.bannerlar.update', $banner->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Başlık</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $banner->title }}" required>
                </div>
                <div class="mb-3">
                    <label for="explanation" class="form-label">Açıklama</label>
                    <input type="text" class="form-control" id="explanation" name="explanation" value="{{ $banner->explanation }}" required>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Resim</label>
                    <input type="file" class="form-control" id="image" name="image">
                    @if($banner->image)
                        <img src="{{ Storage::url($banner->image) }}" alt="Banner Image" width="100">
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Güncelle</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
