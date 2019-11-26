<body id="page-top">

   <!-- Page Wrapper -->
   <div id="wrapper">

      <!-- Sidebar -->
      <?php $this->load->view("siswa/modul/sidebar"); ?>
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">

         <!-- Main Content -->
         <div id="content">

            <!-- Topbar -->
            <?php $this->load->view("siswa/modul/topbar"); ?>
            <!-- End of Topbar -->
            <!-- Begin Page Content -->
            <div class="container-fluid">

               <!-- Page Heading -->
               <div class="d-sm-flex align-items-center justify-content-between mb-4 col-xl-8 col-lg-7">
                  <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
               </div>

               <!-- Content Row -->
               <div class="row">

                  <!-- Area Chart -->
                  <div class="col-xl-8 col-lg-7">
                     <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                           <h6 class="m-0 font-weight-bold text-primary">Jadwal Kuliah Hari ini</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                           <div class="row">
                              <div class="card text-white bg-danger mb-3" style="max-width: 30rem;">
                                 <div class="card-header text-black-50">08.00 sd. 10.00</div>
                                 <div class="card-body">
                                    <h5 class="card-title">Web Programming 2</h5>
                                    <p class="card-text">R.2.6</p>
                                    <p class="card-text">Kampus 3</p>
                                 </div>
                              </div>
                              <div class="card text-white bg-success mb-3 ml-5" style="max-width: 30rem;">
                                 <div class="card-header text-black-50">08.00 sd. 10.00</div>
                                 <div class="card-body">
                                    <h5 class="card-title">Web Programming 2</h5>
                                    <p class="card-text">R.2.6</p>
                                    <p class="card-text">Kampus 3</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- Pie Chart -->

                  <div class="col-xl-4 col-lg-5">
                     <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                           <h6 class="m-0 font-weight-bold text-primary">Tugas!</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                           <div class="card">
                              <div class="card-header">
                                 Web Programming 1
                              </div>
                              <div class="card-body">
                                 <h5 class="card-title">Tugas 3</h5>
                                 <p class="card-text">Buatlah sebuah web sederhana. Waktu maksimal pengumoulan <b>Kamis, 28 November 2019, 23.00 WIB</b></p>
                                 <a href="#" class="btn btn-primary">Slot Pengumpulan</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- Content Row -->
               <div class="row">
                  <div class="col-lg-6 mb-4">


                  </div>
               </div>

            </div>
            <!-- /.container-fluid -->

         </div>
         <!-- End of Main Content -->

         <!-- Footer -->
         <?php
         $this->load->view("siswa/modul/foot");
         ?>
         <!-- End of Footer -->

      </div>
      <!-- End of Content Wrapper -->

   </div>
   <!-- End of Page Wrapper -->

   <!-- Scroll to Top Button-->
   <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
   </a>

   <!-- Logout Modal-->
   <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
               <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
               </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
               <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
               <a class="btn btn-primary" href="<?= site_url("Welcome/index"); ?>">Logout</a>
            </div>
         </div>
      </div>
   </div>

   <?php $this->load->view("utility/sb-js"); ?>
</body>