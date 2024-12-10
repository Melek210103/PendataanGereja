<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
  <ul class="sidebar-nav" id="sidebar-nav">
    <!-- Dashboard -->
    <li class="nav-item <?= ($activeMenu == 'home') ? 'active' : ''; ?>">
      <a class="nav-link" href="/">
        <i class="bi bi-house-door"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-heading">Pages</li>

    <!-- Anggota -->
    <li class="nav-item <?= ($activeMenu == 'anggota') ? 'active' : ''; ?>">
      <a class="nav-link" href="/anggota">
        <i class="bi bi-person"></i>
        <span>Anggota</span>
      </a>
    </li>

    <!-- Baptis -->
    <li class="nav-item <?= ($activeMenu == 'baptis') ? 'active' : ''; ?>">
      <a class="nav-link" href="/baptis">
        <i class="bi bi-water"></i>
        <span>Baptis</span>
      </a>
    </li>

    <!-- Gereja -->
    <li class="nav-item <?= ($activeMenu == 'gereja') ? 'active' : ''; ?>">
      <a class="nav-link" href="/gereja">
        <i class="bi bi-building"></i>
        <span>Gereja</span>
      </a>
    </li>

    <!-- Jemaat -->
    <li class="nav-item <?= ($activeMenu == 'jemaat') ? 'active' : ''; ?>">
      <a class="nav-link" href="/jemaat">
        <i class="bi bi-people"></i>
        <span>Jemaat</span>
      </a>
    </li>

    <!-- Wijk -->
    <li class="nav-item <?= ($activeMenu == 'wijk') ? 'active' : ''; ?>">
      <a class="nav-link" href="/wijk">
        <i class="bi bi-house"></i>
        <span>Wijk</span>
      </a>
    </li>

    <!-- KSP -->
    <li class="nav-item <?= ($activeMenu == 'ksp') ? 'active' : ''; ?>">
      <a class="nav-link" href="/ksp">
        <i class="bi bi-card-list"></i>
        <span>Ksp</span>
      </a>
    </li>

    <!-- Kartu Keluarga -->
    <li class="nav-item <?= ($activeMenu == 'kk') ? 'active' : ''; ?>">
      <a class="nav-link" href="/kk">
        <i class="bi bi-card-text"></i>
        <span>Kartu keluarga</span>
      </a>
    </li>

    <!-- Majelis -->
    <li class="nav-item <?= ($activeMenu == 'majelis') ? 'active' : ''; ?>">
      <a class="nav-link" href="/majelis">
        <i class="bi bi-person-badge"></i>
        <span>Majelis</span>
      </a>
    </li>

    <!-- Logout -->
    <li class="nav-item">
      <a class="nav-link" href="/logout">
        <i class="bi bi-box-arrow-right"></i>
        <span>Logout</span>
      </a>
    </li><!-- End Logout Nav -->
  </ul>
</aside><!-- End Sidebar -->

<main id="main" class="main">
