<!doctype html>
<html lang="en">

<head>
    @include("layout.head")
</head>

<body>
    @include("layout.nav")
    
    <div class="container mt-4">
        <h2>Riwayat Laporan</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Jenis</th>
                    <th>Berat</th>
                    <th>Foto</th>
                    <th>Komentar</th>
                </tr>
            </thead>
            <tbody>
                @if ($riwayat != null)
                @foreach ($riwayat as $d)
                <tr>
                    <td>{{$d->jenis}}</td>
                    <td>{{$d->berat}}</td>
                    <td><img src="{{url("laporan_img")."/".$d->foto}}" width="150px"></td>
                    <td style="white-space: pre-wrap;">{{$d->komentar}}</td>
                </tr>
                @endforeach
                @endif
            </tbody>
            
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>