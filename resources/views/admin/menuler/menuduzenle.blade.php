<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Menü - Menüler</title>
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
            <h2>Edit Menu</h2>
            <form action="{{ route('admin.menuler.update', $menu->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="menuname" class="form-label">Menü Name</label>
                    <input type="text" class="form-control" id="menuname" name="menuname" value="{{ $menu->menuname }}">
                </div>
                <div class="mb-3">
                    <label for="downname" class="form-label">Down Name</label>
                    <input type="text" class="form-control" id="downname" name="downname" value="{{ $menu->downname }}">
                </div>
                <div class="mb-3">
                    <label for="href" class="form-label">Href</label>
                    <input type="text" class="form-control" id="href" name="href" value="{{ $menu->href }}">
                </div>
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
