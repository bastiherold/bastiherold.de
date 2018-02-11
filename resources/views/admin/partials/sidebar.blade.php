<nav class="col-md-2 d-none d-md-block bg-light sidebar">
  <div class="sidebar-sticky">
    
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link {{ isActiveRoute('admin.home') }}" href="{{ route('admin.home') }}">
          <i class="far fa-compass"></i>
          Dashboard
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ containsActiveRoute('messages') }}" href="{{ route('messages.index') }}">
          <i class="far fa-envelope"></i>
          Messages <span class="badge badge-success align-middle">{{ App\Message::unreadCount() }}</span>
        </a>
      </li>
    </ul>
{{--  
    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
      <span>Saved reports</span>
      <a class="d-flex align-items-center text-muted" href="#"></a>
    </h6>
    <ul class="nav flex-column mb-2">

      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="far fa-file-alt"></i>
          Current month
        </a>
      </li>

    </ul>  --}}
  </div>
</nav>
