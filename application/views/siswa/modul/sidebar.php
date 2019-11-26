<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

   <!-- Sidebar - Brand -->
   <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-icon rotate-n-15">
         <!-- <i class="fas fa-laugh-wink"></i> -->
         <i class="fas fa-school miring"></i>
      </div>
      <div class="sidebar-brand-text mx-3">E-Learning STT Bandung</sup></div>
   </a>

   <!-- Divider -->
   <hr class="sidebar-divider my-0">

   <!-- Nav Item - Dashboard -->
   <li class="nav-item active">
      <a class="nav-link" href="<?= site_url("Welcome/indexMhs"); ?>">
         <i class="fas fa-fw fa-tachometer-alt"></i>
         <span>Beranda</span></a>
   </li>

   <!-- Divider -->
   <hr class="sidebar-divider">

   <!-- Heading -->
   <div class="sidebar-heading">
      Perkuliahan
   </div>

   <!-- Nav Item - Pages Collapse Menu -->
   <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
         <!-- <i class="fas fa-fw fa-cog"></i> -->
         <i class="fas fa-swatchbook"></i>
         <span>Semester 5</span>
      </a>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Mata Kuliah:</h6>

            <?php
            $maku = ["OOP", "Desain Kreatif", "Mobile Programming", "Web Programming 2", "Arkom & Orkom", "Bahasa Indonesia", "AR & VR"];
            foreach ($maku as $mk) :
               ?>
               <a class="collapse-item" href="#"><?= $mk; ?></a>
            <?php endforeach ?>
         </div>
      </div>
   </li>

   <!-- Nav Item - Utilities Collapse Menu -->
   <li class="nav-item">
      <a class="nav-link" href="#" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
         <!-- <i class="fas fa-fw fa-wrench"></i> -->
         <i class="fas fa-star"></i>
         <span>Nilai</span>
      </a>
      <a class="nav-link" href="#" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
         <i class="fas fa-clipboard-list"></i>
         <span>Absensi</span>
      </a>
      <a class="nav-link" href="#" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
         <i class="fas fa-book"></i>
         <span>KRS</span>
      </a>
   </li>

   <!-- Divider -->
   <hr class="sidebar-divider">

   <!-- Heading -->
   <div class="sidebar-heading">
      Lainnya
   </div>

   <!-- Nav Item - Pages Collapse Menu -->
   <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
         <i class="fas fa-fw fa-folder"></i>
         <span>Pages</span>
      </a>
      <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Informasi Kampus:</h6>
            <a class="collapse-item" href="login.html">OASIS</a>
         </div>
      </div>
   </li>
   <!-- Sidebar Toggler (Sidebar) -->
   <div class="text-center d-none d-md-inline mt-5">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
   </div>

</ul>