<!doctype html>
<html lang="en">

<head>
    @include("layout.head")
</head>

<body>
    @include("layout.nav")
    
    <div class="container mt-4">
        <h2 class="mb-3">List Perempatan</h2>
        <table class="table">
            <thead>
                <th>Nama Perempatan</th>
                <th>Tingkat Kemacetan</th>
                <th>Kecepatan Maksimum</th>
            </thead>
            <tbody>
                @foreach ($perempatan as $d)
                <tr>
                    <td>{{$d->nama}}</td>
                    <td>{{$d->tingkatmacet}}</td>
                    <td>{{$d->kecepatanmaks}} km/h</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>