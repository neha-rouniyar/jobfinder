<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>
      @if (Auth::check() && Auth::user()->usertype == 'admin')
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('admin.users.list')}}">
            <i class="bi bi-person"></i>
            <span>User's List</span>
        </a>
      </li>
  @endif
  @if (Auth::check() && Auth::user()->usertype == 'employer')
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('company.profile')}}">
            <i class="bi bi-person"></i>
            <span>Company Profile</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Jobs</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>Post new Job</span>
            </a>
          </li>
          <li>
            <a href="components-accordion.html">
              <i class="bi bi-circle"></i><span>View Jobs</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="">
            <i class="bi bi-person"></i>
            <span>Applicants</span>
        </a>
      </li>
  @endif
  

 

    </ul>

  </aside>