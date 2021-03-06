<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">Learning Laravel</a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
    <!-- <ul class="navbar-nav mr-auto"></ul> -->
    <ul class="navbar-nav">
        <li class="nav-item active"><a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a></li>
        <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Member</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/users/register">Register</a>
                <a class="dropdown-item" href="/users/login">Login</a>
            </div>
        </li>
    </ul>
  </div>
</nav>