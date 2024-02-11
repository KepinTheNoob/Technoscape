<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('team') }}">Add</a>
              </li>
            </ul>
            <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Logout</button>
            </form>
          </div>
        </div>
      </nav>

      <div class="container">
        <h1>Welcome, Tim {{Auth::user()->tim}}</h1>
        <br><br>
        <div style="margin-left: 10px" class="d-flex">
            {{-- @forelse($potato as $x) --}}
            <div class="card" style="width: 18rem; margin:10px;">
              <h3>Nama Leader   : {{Auth::user()->name}}</h3>
              <h3>Email         : {{Auth::user()->email}}</h3>
              <h3>Tanggal lahir : {{Auth::user()->tanggal}}</h3>
              <h3>Line ID       : {{Auth::user()->line}}</h3>
              <h3>Nomor HP      : {{Auth::user()->nomor}}</h3>
            </div>
            {{-- @empty
              <p>Data is empty</p>    
            @endforeach --}}
            {{-- @endforelse --}}
        </div>
      </div>

      <div class="container">
        <br>
        <div style="margin-left: 10px" class="d-flex">
            @forelse($potato as $x)
            <br><hr>
            <div class="card" style="width: 18rem; margin:10px;">
              <h3>Nama          : {{$x->name}}</h3>
              <h3>Email         : {{$x->email}}</h3>
              <h3>Tanggal lahir : {{$x->tanggal}}</h3>
              <h3>Line ID       : {{$x->line}}</h3>
              <h3>Nomor HP      : {{$x->nomor}}</h3>
            </div>
            @empty
              <p>Data is empty</p>    
            @endforelse
        </div>
      </div>
  </body>
</html>