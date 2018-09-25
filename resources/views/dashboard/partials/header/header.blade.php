<nav class="navbar is-white">
  <div class="container">
    <div class="navbar-brand">
      <a class="navbar-item brand-text" href="{{ route('admin.home') }}">
          Dashboard
        </a>
      <div class="navbar-burger burger" data-target="navMenu">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <div id="navMenu" class="navbar-menu">

      <div class="navbar-start">
        <a class="navbar-item" href="{{ route('home') }}">
            Frontpage
          </a>
      </div>

    </div>
  </div>
</nav>
