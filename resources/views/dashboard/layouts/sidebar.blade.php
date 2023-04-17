<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{Request::is('dashboard') ? 'active' : ''}}" aria-current="page" href="/dashboard">
            <span data-feather="home" ></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{Request::is('dashboard/posts') ? 'active' : ''}}" href="/dashboard/posts">
            <span data-feather="user" ></span>
            Anggota
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{Request::is('dashboard/posts') ? 'active' : ''}}" href="/dashboard/posts/rakbuku">
            <span data-feather="file-text" ></span>
            Data Buku
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{Request::is('dashboard/posts') ? 'active' : ''}}" href="/dashboard/posts/pinjaman">
            <span data-feather="file-text" ></span>
            Data peminjaman
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{Request::is('dashboard/posts') ? 'active' : ''}}"" href="/dashboard/posts/pengembalian">
            <span data-feather="file-text" ></span>
            Data Pengembalian
          </a>
        </li>
      </ul>
    </div>
  </nav>