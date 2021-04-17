<!doctype html>
<html lang="en">

<head>
    @include("layout.head")
</head>

<body>
    @if (session("role") == "pengguna")
    @include("layout.nav")
    @endif
    @if (session("role") == "polantas")
    @include("layout.nav-polantas")
    @endif
    @if (session("role") == "admin")
    @include("layout.nav-admin")
    @endif

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <div class="container mt-3 mb-3 vh-100">
        <script id="cid0020000279613725959" data-cfasync="false" async src="//st.chatango.com/js/gz/emb.js" style="width: 100%;height: 100%;" class="shadow">{"handle":"traffictrack","arch":"js","styles":{"a":"0084EF","b":100,"c":"FFFFFF","d":"FFFFFF","k":"0084EF","l":"0084EF","m":"0084EF","n":"FFFFFF","p":"10","q":"0084EF","r":100,"t":0,"cnrs":"0.35","fwtickm":1}}</script>
    </div>
    
</body>

</html>