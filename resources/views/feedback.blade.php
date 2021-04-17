<!doctype html>
<html lang="en">

<head>
    @include("layout.head")
</head>

<body>
    @include("layout.nav")
    
    <div class="container mt-5">
        <h2 class="mb-3">Kirim Feedback</h2>
        <form method="post" action="{{route("kirimfeedback")}}">
            @csrf
            <input type="hidden" name="id_pengguna" value="{{$pengguna->id}}">

            <div class="mb-3">
                {{-- <label for="exampleFormControlTextarea1" class="form-label">Feedback</label> --}}
                <textarea required name="feedback" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <button class="btn btn-primary">Kirim</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>