<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
  <a class="navbar-brand" href="/">Hiiqaff</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link {{ ($judul === "Home") ? 'active' : ''}}" href="/">Home</a>
      </li>
      <li class="nav-item">
      <a class="nav-link {{ ($judul === "About") ? 'active' : ''}}" href="/about">About</a>
      </li>
      <li class="nav-item">
      <a class="nav-link {{ ($judul === "Blogs") ? 'active' : ''}}" href="/blogs">Blogs</a>
      </li>
    </ul>
  </div>
  </div>
</nav>