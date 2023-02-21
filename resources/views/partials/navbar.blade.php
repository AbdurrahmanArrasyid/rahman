<nav class="navbar navbar-default bg-info">
  <div class="container justify-content-between">
    <a class="navbar-brand text-light fw-bold fs-3" href="/">
      Pengaduan Siswa
    </a>
    <a class="navbar-brand text-light fw-bold fs-3" href="" data-bs-toggle="modal" data-bs-target="#exampleModal">
      <i class="bi bi-person-circle d-inline-block align-text-top "></i>
    </a>

  </div>
</nav>
<div class="container">  @if (session()->has('LoginError'))
  <div class="alert alert-danger my-3 alert-dismissible fade show" role="alert">
    {{ session('LoginError') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Login Admin</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/login" method="post">
          @csrf
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Username</label>
            <input type="text" value="{{ old('username') }}" class="form-control @error('username') is-invalid @enderror" autofocus name="username" id="recipient-name">
            @error('username')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Password:</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" autofocus name="password" id="">
            @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
          </div>
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Login</button>
      </form>
      </div>
    </div>
  </div>
</div>
