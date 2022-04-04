 <!-- partial -->
 <div class="container-fluid page-body-wrapper">
     <!-- partial:partials/_sidebar.html -->
     <nav class="sidebar sidebar-offcanvas" id="sidebar">
         <ul class="nav">
             <li class="nav-item ">
                 <a class="nav-link" href="<?php echo base_url(); ?>admin/peg_tamu_a">
                     <i class="menu-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
                             <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                             <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                         </svg></i>
                     <span class="menu-title">Tamu Bertemu</span>
                 </a>
             </li>
             <!-- <li class="nav-item">
                 <a class="nav-link" href="<?php echo base_url(); ?>admin/tambah_data">
                     <i class=" menu-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-folder-plus" viewBox="0 0 16 16">
                             <path d="m.5 3 .04.87a1.99 1.99 0 0 0-.342 1.311l.637 7A2 2 0 0 0 2.826 14H9v-1H2.826a1 1 0 0 1-.995-.91l-.637-7A1 1 0 0 1 2.19 4h11.62a1 1 0 0 1 .996 1.09L14.54 8h1.005l.256-2.819A2 2 0 0 0 13.81 3H9.828a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 6.172 1H2.5a2 2 0 0 0-2 2zm5.672-1a1 1 0 0 1 .707.293L7.586 3H2.19c-.24 0-.47.042-.683.12L1.5 2.98a1 1 0 0 1 1-.98h3.672z" />
                             <path d="M13.5 10a.5.5 0 0 1 .5.5V12h1.5a.5.5 0 1 1 0 1H14v1.5a.5.5 0 1 1-1 0V13h-1.5a.5.5 0 0 1 0-1H13v-1.5a.5.5 0 0 1 .5-.5z" />
                         </svg></i>
                     <span class="menu-title">Tambah Data</span>
                 </a>
             </li> -->
             <!-- <li class="nav-item">
                 <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                     <i class="ti-agenda menu-icon"></i>
                     <span class="menu-title">Data Tamu</span>
                     <i class="menu-arrow"></i>
                 </a>
                 <div class="collapse" id="ui-basic">
                     <ul class="nav flex-column sub-menu">
                         <li class="nav-item"> <a class="nav-link" href="admin/data_tamu">Bertemu</a></li>
                         <li class="nav-item"> <a class="nav-link" href="admin/data_tamu/tidak_bertemu">Tidak Bertemu</a></li>
                     </ul>
                 </div>
             </li> -->
             <li class="nav-item ">
                 <a class="nav-link" href="<?php echo base_url(); ?>admin/peg_tamu_b">
                     <i class="menu-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-dash" viewBox="0 0 16 16">
                             <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                             <path fill-rule="evenodd" d="M11 7.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5z" />
                         </svg></i>
                     <span class="menu-title">Tamu Tidak Bertemu</span>
                 </a>
             </li>
             <li class="nav-item ">
                 <a class="nav-link" href="<?php echo base_url(); ?>admin/data_pegawai">
                     <i class=" menu-icon"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                             <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                             <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
                             <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                         </svg></i>
                     <span class="menu-title">Data Pegawai</span>
                 </a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                     <i class="ti-agenda menu-icon"></i>
                     <span class="menu-title">Arsip Buku Tamu</span>
                     <i class="menu-arrow"></i>
                 </a>
                 <div class="collapse" id="auth">
                     <ul class="nav flex-column sub-menu">
                         <li class="nav-item"> <a class="nav-link" href="<?php echo base_url(); ?>admin/bukutamu_a"> Tamu Bertemu </a></li>
                         <li class="nav-item"> <a class="nav-link" href="<?php echo base_url(); ?>admin/bukutamu_b"> Tamu Tidak Bertemu </a></li>
                     </ul>
                 </div>
             </li>
         </ul>
     </nav>