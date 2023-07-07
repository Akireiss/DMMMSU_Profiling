<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{ url('admin/dashboard') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard  Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-people"></i><span>Cocoon Producers</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="cocoonproducers.html">
              <i class="bi bi-circle"></i><span>Add Rearer</span>
            </a>
          </li>

</ul>
      </li>



      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.html">
          <i class="bi bi-house"></i>
          <span>Project Site</span>
        </a>
      </li><!-- End Register Page Nav -->

        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-gear"></i><span>Settings</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="{{ url('admin/user-view') }}">
                  <i class="bi bi-circle"></i><span>View Account</span>
                </a>
              </li>
              <li>
                <a href="{{ url('admin/user-add') }}">
                  <i class="bi bi-circle"></i><span>Add Account</span>
                </a>
              </li>
            <li>
              <a href="profile.html">
                <i class="bi bi-circle"></i><span>Profile</span>
              </a>
            </li>
            <li>
              <a href="charts-apexcharts.html">
                <i class="bi bi-circle"></i><span>Back up Data</span>
              </a>
            </li>
  </ul>

      </li><!-- End Settings Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav1" data-bs-toggle="collapse" href="#">
          <i class="bx bxs-report"></i><span>Reports</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav1" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="profile.html">
              <i class="bi bi-circle"></i><span>List of Cocoon Producers</span>
            </a>
          </li>
          <li>
            <a href="charts-apexcharts.html">
              <i class="bi bi-circle"></i><span>List of Rearing House</span>
            </a>
          </li>
          <ul id="forms-nav1" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
              <a href="charts-chartjs.html">
                <i class="bi bi-circle"></i><span>Production</span>
              </a>
            </li>
            <li>
              <a href="charts-apexcharts.html">
                <i class="bi bi-circle"></i><span>Print/Download</span>
              </a>
            </li>
  </ul>
</ul>

    </li><!-- End Reports Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-blank.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Log out</span>
        </a>
      </li><!-- End Blank Page Nav -->

    </ul>

  </aside>
