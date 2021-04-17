<!doctype html>
<html lang="en">

<head>
    @include("layout.head")
</head>

<body>
    @include("layout.nav-admin")
    
    <div class="container mt-4">
        @if (session("success"))
        <div class="alert alert-success" role="alert">
           {{session("success")}}
          </div>
        @endif
        <a href="{{route("tambahpolantasform")}}"class="btn btn-primary mb-3">Tambah Polantas</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID Lantas</th>
                    <th>Password</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($polantas as $d)
                <tr>
                    <td>{{$d->id_lantas}}</td>
                    <td>{{$d->password}}</td>
                    <td>
                        <a href="{{route("editpolantasform",["id"=>$d->id])}}" class="btn btn-warning">Edit</a>
                        <a href="{{route("deletepolantas",["id"=>$d->id])}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>