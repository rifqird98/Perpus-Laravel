<div class="sidebar close">
    <div class="logo-details">
        <i class='bx bx-library'></i>
        <span class="logo_name">Perpustakaan</span>
    </div>
        <ul class="nav-links">
          <!-- MENU DATA -->
          <li>
            <div class="iocn-link">
              <a href="#">
                <i class='bx bx-cabinet' ></i>
                <span class="link_name">Data</span>
              </a>
                <i class='bx bxs-chevron-down arrow' ></i>
            </div>

            <ul class="sub-menu">
              <li><a class="link_name" href="#">Data</a></li>
              <li><a href="home.php?page=data-siswa">Data Siswa</a></li>
              <li><a href="{{ route('databuku.index') }}">Data Buku</a></li>
              <li><a href="home.php?page=data-petugas">Data Petugas</a></li>
            </ul>
            </li>
          
          <!-- MENU TRANSAKSI -->
          <li>
            <div class="iocn-link">
              <a href="#">
                <i class='bx bx-bookmark-plus'></i>
                <span class="link_name">Transaksi</span>
              </a>
                <i class='bx bxs-chevron-down arrow' ></i>
            </div>

              <ul class="sub-menu">
                  <li><a class="link_name" href="#">Transaksi</a></li>
                  <li><a href="home.php?page=data-pengembalian">Data Pengembalian</a></li>
                  <li><a href="home.php?page=data-peminjaman">Data Peminjaman</a></li>
              </ul>
          </li>

        
          
          <!-- ISI PROFILE -->
          <li>
            <div class="profile-details">
              <div class="profile-content">
                {{-- <img src="{{ asset('/') }}/asset/images/profile.png" alt="profileImg"> --}}
              </div>
              <div class="name-job">
                <div class="profile_name">Rifqi</div>
                <div class="job">Malang</div>
              </div>
              <a href="logout.php">
                <i class='bx bx-log-out'></i>
              </a>
            </div>
          </li>
        </ul>
  </div>