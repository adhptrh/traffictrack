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
        <a href="{{route("tambahperempatanform")}}" class="btn btn-primary mb-3">Tambah Perempatan</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Tingkat Macet</th>
                    <th>Kecepatan Maks</th>
                    <th>Lampu</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($perempatan as $d)
                <tr>
                    <td>{{$d->nama}}</td>
                    <td>{{$d->tingkatmacet}}</td>
                    <td>{{$d->kecepatanmaks}} KM/H</td>
                    <td>{{$d->lampu}}</td>
                    <td>
                        <a href="{{route("editperempatanform",["id"=>$d->id])}}" class="btn btn-warning">Edit</a>
                        <a href="{{route("deleteperempatan",["id"=>$d->id])}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>