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
  

      {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="pages-faq.html">
          <i class="bi bi-question-circle"></i>
          <span>F.A.Q</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.html">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-error-404.html">
          <i class="bi bi-dash-circle"></i>
          <span>Error 404</span>
        </a>
      </li><!-- End Error 404 Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-blank.html">
          <i class="bi bi-file-earmark"></i>
          <span>Blank</span>
        </a>
      </li><!-- End Blank Page Nav --> --}}

    </ul>

  </aside>