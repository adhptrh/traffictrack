<nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
    <div class="container-fluid">
        <a class="navbar-brand ms-5" href="#">Traffic Track</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route("home")}}">Home</a>
                </li>
            </ul>
        </div>
        <form class="d-flex"><div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle me-5" style="min-width: 150px;" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              {{$pengguna->nama}}
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="{{route("listperempatan")}}">List Perempatan</a></li>
                <li><a class="dropdown-item" href="{{route("laporan")}}">Laporan</a></li>
                <li><a class="dropdown-item" href="{{route("chat")}}">Chat</a></li>
                <li><a class="dropdown-item" href="{{route("feedback")}}">Feedback</a></li>
                <li><a class="dropdown-item" href="{{route("riwayatlaporan")}}">Riwayat Laporan</a></li>
                <li><a class="dropdown-item" href="{{url("logout")}}">Log Out</a></li>
            </ul>
          </div>
        </form>
    </div>
</nav>