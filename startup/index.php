<?php 
	require_once '../database/config.php';
	require_once '../database/function.php';

	$title = "Không tìm thấy trang";
	include '../public/inc/head.php';
?>
	<!-- wrapper -->
	<div class="wrapper">
		<nav class="navbar navbar-expand-lg navbar-light   shadow-none border-bottom bg-white rounded fixed-top rounded-0 shadow-sm">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">
					<img src="assets/images/logo-img.png" width="120" alt="">
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent1">
					<ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-3">
						<li class="nav-item"> <a class="nav-link active" aria-current="page" href="/"><i class="bx bx-home-alt me-1"></i>Home</a>
						</li>
						<li class="nav-item"> <a class="nav-link" href="#"><i class="bx bx-user me-1"></i>About</a>
						</li>
						<li class="nav-item"> <a class="nav-link" href="#"><i class="bx bx-category-alt me-1"></i>Features</a>
						</li>
						<li class="nav-item"> <a class="nav-link" href="#"><i class="bx bx-microphone me-1"></i>Contact</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="error-404 d-flex align-items-center justify-content-center">
			<div class="container">
				<div class="card radius-15 shadow-none">
					<div class="row g-0">
						<div class="col-lg-6">
							<div class="card-body p-5">
								<h1 class="display-1"><span class="text-primary">4</span><span class="text-danger">0</span><span class="text-success">4</span></h1>
								<h2 class="font-weight-bold display-4">Lạc trong không gian</h2>
								<p>Không tìm thấy trang
									<br>Trang bạn yêu cầu không được tìm thấy.
									<br>Đừng lo lắng và quay lại trang trước.</p>
								<div class="mt-5">
									<a href="/" class="btn btn-lg btn-primary px-md-5 radius-30">Go Home</a>
									<a href="/" class="btn btn-lg btn-outline-dark ms-3 px-md-5 radius-30">Back</a>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<img src="assets/images/errors-images/404-error.png" class="card-img" alt="">
						</div>
					</div>
					<!--end row-->
				</div>
			</div>
		</div>
	</div>
<?php 
	include '../public/inc/foot.php';
?>