<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </head>
  <body>
    <x-navbar/>
    <div class="row justify-content-center mt-5">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">Register</h1>
                </div>
                <div class="card-body">
                    @if(Session::get('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <form action="{{ route('register') }}" method="POST">
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
                          <label for="tim" class="form-label">Nama Tim</label>
                          <input type="tim" name="tim" class="form-control" id="tim" required>
                        </div>
                        <div class="mb-3">
                          <div class="d-grid">
                            <button class="btn btn-primary">Register</button>
                          </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>