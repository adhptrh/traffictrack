<!doctype html>
<html lang="en">

<head>
    @include("layout.head")
</head>

<body>
    @include("layout.nav")
    
    <div class="container mt-4">
        @if (session("success"))
        <div class="alert alert-success" role="alert">
            {{session("success")}}
        </div>
        @endif
        <form method="POST" action="{{route("kirimlaporan")}}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id_pengguna" value="{{$pengguna->id}}">

            <h2>Lapor</h2>

            <div class="mb-3">
                <label for="a" class="form-label">Jenis Laporan</label>
                <select required name="jenis" class="form-select" aria-label="Default select example">
                    <option value="kecelakaan" selected>Kecelakaan</option>
                    <option value="banjir">Banjir</option>
                    <option value="kebakaran">Kebakaran</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="a" class="form-label">Berat Kecelakaan</label>
                <select required name="berat" class="form-select" aria-label="Default select example">
                    <option value="kecil"selected>Kecil</option>
                    <option value="besar">Besar</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="formFile" class="form-label">Foto</label>
                <input required name="foto" class="form-control" type="file" id="formFile">
            </div>
            
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Komentar</label>
                <textarea required name="komentar" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>