<div class="sidebar">
  <nav class="sidebar-nav">
    <ul class="nav">
      
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.home') }}"><i class="icon-speedometer"></i> Dashboard</a>
      </li>

      <li class="divider"></li>

      <li class="nav-title">
        Communication
      </li>

      <li class="nav-item">
        <a href="{{ route('messages.index') }}" class="nav-link {{ containsActiveRoute('message') }}">
          <i class="icon-drop"></i>Messages
        </a>
      </li>
{{--
      <li class="divider"></li>

      <li class="nav-title">
        Area 2
      </li>

      <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Link</a>
        <ul class="nav-dropdown-items">
          
          <li class="nav-item">
            <a class="nav-link" href="base-breadcrumb.html"><i class="icon-puzzle"></i> Sublink</a>
          </li>
          
        </ul>
      </li>

      <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-cursor"></i> Link 2</a>
        <ul class="nav-dropdown-items">
          <li class="nav-item">
            <a class="nav-link" href="buttons-buttons.html"><i class="icon-cursor"></i> Sublink</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="buttons-button-group.html"><i class="icon-cursor"></i> Sublink</a>
          </li>
          
        </ul>
      </li>
--}}
      {{--  Core UI Links  --}}
      <li class="nav-item mt-auto">
        <a class="nav-link nav-link-success" href="http://coreui.io/" target="_top"><i class="icon-cloud-download"></i> Download CoreUI</a>
      </li>

      <li class="nav-item">
        <a class="nav-link nav-link-danger" href="http://coreui.io/pro/" target="_top"><i class="icon-layers"></i> Try CoreUI <strong>PRO</strong></a>
      </li>

    </ul>
  </nav>
  <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
