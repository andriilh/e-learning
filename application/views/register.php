<body class="bg-gradient-primary">
   <div class="container vertical-center">

      <div class="card o-hidden border-0 shadow-lg my-5">
         <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
               <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
               <div class="col-lg-7">
                  <div class="p-5">
                     <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Buat Akun</h1>
                     </div>

                     <!-- form -->
                     <form action="<?= site_url("Welcome/register"); ?>" class="user" method="post">
                        <div class="form-group row">
                           <div class="col-sm-6 mb-3 mb-sm-0">
                              <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Nama Depan" name="namadepan">
                           </div>
                           <div class="col-sm-6">
                              <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Nama Belakang" name="namabelakang">
                           </div>
                        </div>
                        <div class="form-group">
                           <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Masukkan Nomor Induk" name="ni">
                        </div>
                        <div class="form-group row">
                           <div class="col-sm-6 mb-3 mb-sm-0">
                              <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                           </div>
                           <div class="col-sm-6">
                              <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password" name="pswd">
                           </div>
                        </div>
                        <div class="btn-group btn-group-toggle form-group" data-toggle="buttons">
                           <label class="btn btn-outline-primary btn-block active">
                              <input type="radio" name="options" id="dosen" autocomplete="off" checked value="1"> Dosen
                           </label>
                           <label class="btn btn-outline-primary">
                              <input type="radio" name="options" id="mahasiswa" autocomplete="off" value="2"> Mahasiswa
                           </label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block">
                           Register Akun
                        </button>
                     </form>
                     <!-- end form -->

                     <hr class="mt-5">
                     <div class="text-center">
                        <a class="small" href="<?= site_url("Welcome/pgForget"); ?>">Lupa Password</a>
                     </div>
                     <div class="text-center pb-5">
                        <a class="small" href="<?= site_url("Welcome/index"); ?>">Sudah Punya Akun? Login!</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

   </div>
   <?php
   $this->load->view("utility/sb-js");
   ?>
</body>