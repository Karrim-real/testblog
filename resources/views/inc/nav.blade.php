<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Testblog</a>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ url('/about') }}">About us</a>
          </li>

          <li class="nav-item">
            <a class="nav-link"  href="{{ url('/apitest') }}">Api Test</a>
          </li>

          <li class="nav-item">
            <a class="nav-link"  href="{{ url('show-message') }}">Show Message</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="{{ url('/contact') }}">Contact us</a>
          </li>
        </ul>

      </div>
    </div>
  </nav>
