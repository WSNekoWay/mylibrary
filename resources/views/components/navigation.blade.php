<nav class="navbar navbar-expand-lg bg-dark ">
  <div class="container-fluid">
    <a class="navbar-brand text-light" href="http://127.0.0.1:8000/">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav text-light">
      <li class="nav-item ">
        <a class="nav-link text-light" href="http://127.0.0.1:8000/index">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="http://127.0.0.1:8000/about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="http://127.0.0.1:8000/contact">Contact</a>
      </li>
      <li class="nav-item">
        @auth 
        @if(auth()->user()->status == 'admin')
        <a class="nav-link" href="http://127.0.0.1:8000/admin">Admin</a>
        @endif
        @endauth
      </li>
      <li class="nav-item">
        @auth
        <form action="/logout" method="POST">
          @csrf
          <button type="submit" class="btn btn-danger">
            Logout
          </button>
        </form>
        @endauth
        @guest
        <a class="nav-link text-light" href="http://127.0.0.1:8000/login">Login</a>
        @endguest
      </li>
      </ul>
    </div>
  </div>
</nav>