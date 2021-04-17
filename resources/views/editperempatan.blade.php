<!doctype html>
<html lang="en">

<head>
    @include("layout.head")
</head>

<body>
    @include("layout.nav-admin")
    <div class="container mt-4">
        <form method="post" action="{{route("editperempatan")}}">
            @csrf
            <input type="hidden" name="id" value="{{$perempatan->id}}">
            <div class="mb-3">
                <label for="a" class="form-label">Nama</label>
                <input name="nama" value="{{$perempatan->nama}}" type="text" class="form-control" id="a">
            </div>
            <div class="mb-3">
                <label for="a" class="form-label">Tingkat Macet</label>
                <select required name="tingkatmacet" class="form-select" aria-label="Default select example">
                    <option value="rendah" {{($perempatan->tingkatmacet == "rendah") ? "selected":""}}>Rendah</option>
                    <option value="sedang" {{($perempatan->tingkatmacet == "sedang") ? "selected":""}}>Sedang</option>
                    <option value="tinggi" {{($perempatan->tingkatmacet == "tinggi") ? "selected":""}}>Tinggi</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="a" class="form-label">Maks Kecepatan (km/h)</label>
                <input name="kecepatanmaks" value="{{$perempatan->kecepatanmaks}}" type="number" class="form-control" id="a">
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>