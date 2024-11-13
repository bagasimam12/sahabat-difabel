<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a class="nav-link collapsed" href="/dashboard">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="/manageuser">
          <i class="bi bi-person"></i>
          <span>User Management</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="/data-disabilitas">
          <i class="bi bi-person-lines-fill"></i>
          <span>Data Disabilitas</span>
        </a>
      </li>

      @if (Auth::user()->role === 'admin')
        <li class="nav-item">
          <a class="nav-link collapsed" href="/layanan-keperluan">
            <i class="bi bi-card-checklist"></i>
            <span>Layanan/Alat Bantu</span>
          </a>
        </li>
      @endif
    </ul>
  </aside><!-- End Sidebar-->