 <!-- Navbar Start -->
 <div class="container-fluid bg-light position-relative shadow">
    <nav
      class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5"
    >
      <a
        href=""
        class="navbar-brand font-weight-bold text-secondary"
        style="font-size: 50px"
      >
        <i class="flaticon-043-teddy-bear"></i>
        <span class="text-primary">KidKinder</span>
      </a>
      <button
        type="button"
        class="navbar-toggler"
        data-toggle="collapse"
        data-target="#navbarCollapse"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div
        class="collapse navbar-collapse justify-content-between"
        id="navbarCollapse"
      >
        <div class="navbar-nav font-weight-bold mx-auto py-0">
          <a href="{{route('home')}}" class="nav-item nav-link @yield('home-active')">Home</a>
          <a href="{{route('about-us')}}" class="nav-item nav-link @yield('about-active')">About</a>
          <a href="{{route('classes')}}" class="nav-item nav-link @yield('classes-active')">Classes</a>
          <a href="{{route('teachers')}}" class="nav-item nav-link @yield('teacher-active')">Teachers</a>
          <a href="{{route('gallery')}}" class="nav-item nav-link @yield('gallery-active')">Gallery</a>
          <div class="nav-item dropdown">
            <a
              href="#"
              class="nav-link dropdown-toggle"
              data-toggle="dropdown"
              >Pages</a
            >
            <div class="dropdown-menu rounded-0 m-0">
              <a href="{{route('blog-grid')}}" class="dropdown-item">Blog Grid</a>
              <a href="{{route('blog-detail')}}" class="dropdown-item">Blog Detail</a>
            </div>
          </div>
          <a href="{{route('contact')}}" class="nav-item nav-link @yield('contact-active')">Contact</a>
        </div>
        <a href="" class="btn btn-primary px-4">Join Class</a>
      </div>
    </nav>
  </div>
  <!-- Navbar End -->