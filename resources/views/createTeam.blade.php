<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Team</title>
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
    <div class="row justify-content-center mt-5">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">add Member</h1>
                </div>
                <div class="card-body">
                    @if(Session::get('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <form action="{{ route('team') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                          <label for="name" class="form-label">Name</label>
                          <input type="text" name="name" class="form-control" id="name" placeholder="John Doe" required>
                        </div>
                        <div class="mb-3">
                          <label for="email" class="form-label">Email</label>
                          <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" required>
                        </div>
                        <div class="mb-3">
                          <label for="password" class="form-label">Password</label>
                          <input type="password" name="password" class="form-control" id="password" required>
                        </div>
                        <div class="mb-3">
                          <label for="tanggal" class="form-label">Tanggal lahir</label>
                          <input type="tanggal" name="tanggal" class="form-control" id="tanggal" placeholder="dd-mm-yyyy" required>
                        </div>
                        <div class="mb-3">
                          <label for="line" class="form-label">Line Id</label>
                          <input type="line" name="line" class="form-control" id="line" required>
                        </div>
                        <div class="mb-3">
                          <label for="nomor" class="form-label">Nomor HP</label>
                          <input type="nomor" name="nomor" class="form-control" id="nomor" required>
                        </div>
                        <div class="mb-3">
                          <div class="d-grid">
                            <button class="btn btn-primary">Create</button>
                          </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>