 <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
     <ul id="sidebarnav">
         <li class="nav-small-cap">
             <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
             <span class="hide-menu">Home</span>
         </li>
         <li class="sidebar-item">
             <a class="sidebar-link" href="{{ route('home') }}" aria-expanded="false">
                 <span>
                     <i class="ti ti-layout-dashboard"></i>
                 </span>
                 <span class="hide-menu">Dashboard</span>
             </a>
         </li>
         <li class="sidebar-item">
             <a class="sidebar-link" href="{{ route('informasi.index') }}" aria-expanded="false">
                 <span>
                     <i class="ti ti-cards"></i>
                 </span>
                 <span class="hide-menu">Informasi</span>
             </a>
         </li>
         <li class="sidebar-item">
             <a class="sidebar-link" href="{{ route('karyawan.index') }}" aria-expanded="false">
                 <span>
                     <i class="ti ti-cards"></i>
                 </span>
                 <span class="hide-menu">Karyawan</span>
             </a>
         </li>
         <li class="sidebar-item">
             <a class="sidebar-link" href="{{ route('eskul.index') }}" aria-expanded="false">
                 <span>
                     <i class="ti ti-cards"></i>
                 </span>
                 <span class="hide-menu">Eskul</span>
             </a>
         </li>
         <li class="sidebar-item">
             <a class="sidebar-link" href="{{ route('fasilitas.index') }}" aria-expanded="false">
                 <span>
                     <i class="ti ti-cards"></i>
                 </span>
                 <span class="hide-menu">Fasilitas</span>
             </a>
         </li>
         <li class="nav-small-cap">
             <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
             <span class="hide-menu">AUTH</span>
         </li>
         <li class="sidebar-item">
             <a class="sidebar-link" href="{{ url('/login') }}" aria-expanded="false">
                 <span>
                     <i class="ti ti-login"></i>
                 </span>
                 <span class="hide-menu">Masuk</span>
             </a>
         </li>
         <li class="sidebar-item">
             <a class="sidebar-link" href="{{ url('register') }}" aria-expanded="false">
                 <span>
                     <i class="ti ti-user-plus"></i>
                 </span>
                 <span class="hide-menu">Daftar</span>
             </a>
         </li>
     </ul>
 </nav>