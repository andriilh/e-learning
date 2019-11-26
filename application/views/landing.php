<body class="bg-gradient-primary">

	<div class="container justify-content-center">

		<!-- Outer Row -->
		<div class="row justify-content-center">

			<div class="col-xl-10 col-lg-12 col-md-9">

				<div class="card o-hidden border-0 shadow-lg my-5">
					<div class="card-body p-0">
						<!-- Nested Row within Card Body -->
						<div class="row">
							<div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
							<div class="col-lg-6">
								<div class="p-5">
									<div class="text-center">
										<h1 class="h4 text-gray-900 mb-4 mt-5">Selamat Datang!</h1>
									</div>

									<!-- Form -->
									<form action="<?= site_url("Welcome/login"); ?>" class="user" method="post">
										<div class="form-group">
											<input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan Username..." name="username">
										</div>
										<div class="form-group">
											<input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="pass">
										</div>
										<div class="btn-group btn-group-toggle form-group" data-toggle="buttons">
											<label class="btn btn-outline-primary btn-block active">
												<input type="radio" name="options" id="dosen" autocomplete="off" checked> Dosen
											</label>
											<label class="btn btn-outline-primary">
												<input type="radio" name="options" id="mahasiswa" autocomplete="off"> Mahasiswa
											</label>
										</div>
										<div class="form-group">
											<div class="custom-control custom-checkbox small">
												<input type="checkbox" class="custom-control-input" id="customCheck">
												<label class="custom-control-label" for="customCheck">Remember Me</label>
											</div>
										</div>

										<button type="submit" class="btn btn-primary btn-user btn-block">
											Login
										</button>
									</form>
									<!-- end of form -->

									<hr class="mt-5">
									<div class="text-center">
										<a class="small" href="<?= site_url("Welcome/pgForget"); ?>">Forgot Password?</a>
									</div>
									<div class="text-center pb-5">
										<a class="small" href="<?= site_url("Welcome/pgRegister"); ?>">Create an Account!</a>
									</div>
								</div>
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