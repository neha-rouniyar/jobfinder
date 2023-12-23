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
        <a class="nav-link collapsed" href="">
            <i class="bi bi-person"></i>
            <span>Jobs Posted</span>
        </a>
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