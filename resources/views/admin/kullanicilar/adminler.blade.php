<!-- resources/views/admin/kullanicilar/adminler.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Adminler</title>
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
            <div class="d-flex flex-row justify-content-between">
                <h2>Adminler</h2>
                <button class="btn btn-primary">
                    <a style="text-decoration:none;" class="text-white" href="{{ route('admin.kullanicilar.adminekle') }}">Admin Ekle</a>
                </button>
            </div>
            <table class="table mt-5">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Oluşturulma Tarihi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($adminUsers as $admin)
                        <tr>
                            <td>{{ $admin->id }}</td>
                            <td>{{ $admin->name }}</td>
                            <td>{{ $admin->email }}</td>
                            <td class="d-flex flex-row justify-content-between align-items-center">
                                {{ $admin->created_at }}
                                <div class="d-flex flex-row gap-3">
                                    <a href="{{ route('admin.kullanicilar.edit', $admin->id) }}">
                                        <button class="btn btn-primary">Düzenle</button>
                                    </a>
                                    <form action="{{ route('admin.kullanicilar.delete', $admin->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Sil</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
