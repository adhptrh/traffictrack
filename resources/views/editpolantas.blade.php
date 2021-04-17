<!doctype html>
<html lang="en">

<head>
    @include("layout.head")
</head>

<body>
    @include("layout.nav-admin")
    <div class="container mt-4">
        <form method="post" action="{{route("editpolantas")}}">
            @csrf
            <input type="hidden" name="id" value="{{$polantas->id}}">
            
            <div class="mb-3">
                <label for="a" class="form-label">ID Lantas</label>
                <input required value="{{$polantas->id_lantas}}" name="id_lantas" type="text" class="form-control" id="a">
            </div>
            <div class="mb-3">
                <label for="a" class="form-label">Password</label>
                <input required value="{{$polantas->password}}" name="password" type="text" class="form-control" id="a">
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>