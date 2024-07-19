<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Admin - Yazilar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
            <h2>Edit Admin</h2>
            <form action="{{ route('admin.yazilar.update', $yazi->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $yazi->title }}">
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <input type="text" class="form-control" id="content" name="content" value="{{ $yazi->content }}">
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
