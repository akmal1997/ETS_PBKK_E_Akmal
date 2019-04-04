<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <!-- Dashboard Start-->
    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('page') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <!-- Dashboard End -->
    <?php if($this->session->userdata('akses')=='1'):?>
    <!-- Skripsi Mahasiswa (Kaprodi) Start -->
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'products' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="far fa-clipboard"></i>
            <span>Skripsi Mahasiswa</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('admin/products') ?>">Pengajuan Mahasiswa</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/dosen_pembimbing') ?>">Pemilihan Dosen Pembimbing</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/jadwal_sidang/isi_jadwal_sidang') ?>">Isi Jadwal Sidang</a>
        </div>
    </li>
    <!-- Skripsi Mahasiswa (Kaprodi) End -->
    <?php elseif($this->session->userdata('akses')=='2'):?>
    <!-- Skripsi Mahasiswa (Dosen) Start -->
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'products' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="far fa-clipboard"></i>
            <span>Skripsi Mahasiswa</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('admin/products') ?>">Pengajuan Mahasiswa</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/jadwal_sidang/isi_jadwal_sidang') ?>">Isi Jadwal Sidang</a>
        </div>
    </li>
    <!-- Skripsi Mahasiswa (Dosen) End -->
    <?php else:?>
    <!-- Pengajuan Skripsi Start -->
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'products' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-file-signature"></i>
            <span>Pengajuan Skripsi</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('admin/products/add') ?>">Pengajuan Judul</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/seminar_proposal') ?>">Seminar Proposal</a>
        </div>
    </li>
    <!-- Pengajuan Skripsi End -->
    <?php endif;?>
    <!-- Jadwal Sidang Start-->
    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/jadwal_sidang') ?>">
        <i class="far fa-clock"></i>
            <span>Jadwal Sidang</span>
        </a>
    </li>
    <!-- Jadwal Sidang End-->
    <?php if($this->session->userdata('akses')=='1'):?>
    <?php elseif($this->session->userdata('akses')=='2'):?>
    <?php else:?>
    <!-- Riwayat Pengajuan Start-->
    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/riwayat') ?>">
        <i class="fas fa-history"></i>
            <span>Riwayat Pengajuan</span>
        </a>
    </li>
    <!-- Riwayat Pengajuan End-->
    <?php endif;?>


    <!-- other menu
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-users"></i>
            <span>Users</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-cog"></i>
            <span>Settings</span></a>
    </li>
    <!-- other menu -->
</ul>
