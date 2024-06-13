@extends('template.main')
@section('konten')

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Forms - Atlantis Lite Bootstrap 4 Admin Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="{{asset('Atlantis')}}/assets/img/icon.ico" type="image/x-icon"/>
	
	<!-- Fonts and icons -->
	<script src="{{asset('Atlantis')}}/assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['{{asset('Atlantis')}}/assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="{{asset('Atlantis')}}/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{asset('Atlantis')}}/assets/css/atlantis.min.css">
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="{{asset('Atlantis')}}/assets/css/demo.css">
</head>
<body data-background-color="dark">
	<div class="wrapper sidebar_minimize">
        <div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Forms</h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="#">
									<i class="flaticon-home"></i>
								</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Forms</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Basic Form</a>
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Tambah Surat Masuk</div>
								</div>
								<form method="POST"  action={{route('storesuratmasuk')}} enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6 col-lg-6">
                                                <div class="form-group">
                                                    <label for="largeInput">No Surat</label>
                                                    <input type="text" class="form-control form-control" name="nosurat" id="defaultInput" placeholder="No Surat">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6">
                                                <div class="form-group">
                                                    <label for="largeInput">Tujuan</label>
                                                    <input type="text" class="form-control form-control" name="tujuan" id="defaultInput" placeholder="Tujuan">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6 col-lg-6">
                                                <div class="form-group">
                                                    <label for="largeInput">Perihal</label>
                                                    <input type="text" class="form-control form-control" name="perihal" id="defaultInput" placeholder="Perihal">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6">
                                                <div class="form-group">
                                                    <label for="largeInput">Pengirim</label>
                                                    <input type="text" class="form-control form-control" name="pengirim" id="defaultInput" placeholder="Pengirim">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
									<div class="card-body">
                                        <div class="row">
											<div class="col-md-6 col-lg-6">
												<div class="form-group">
													<label for="exampleFormControlFile1">Example file input</label>
													<input type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
												</div>
												<div class="card-action">
													<button type="submit" class="btn btn-success">Tambah</button>
													<a class="btn btn-warning">Draft</a>
													<a class="btn btn-danger">Batal</a>
												</div>
											</div>
										</div>
									</div>
                                </form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<footer class="footer">
				<div class="container-fluid">
					<nav class="pull-left">
						<ul class="nav">
							<li class="nav-item">
								<a class="nav-link" href="https://www.themekita.com">
									ThemeKita
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									Help
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									Licenses
								</a>
							</li>
						</ul>
					</nav>
					<div class="copyright ml-auto">
						2018, made with <i class="fa fa-heart heart text-danger"></i> by <a href="https://www.themekita.com">ThemeKita</a>
					</div>				
				</div>
			</footer>
		</div>
    </div>
	<!--   Core JS Files   -->
	<script src="{{asset('Atlantis')}}/assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="{{asset('Atlantis')}}/assets/js/core/popper.min.js"></script>
	<script src="{{asset('Atlantis')}}/assets/js/core/bootstrap.min.js"></script>
	<!-- jQuery UI -->
	<script src="{{asset('Atlantis')}}/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="{{asset('Atlantis')}}/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
	
	<!-- jQuery Scrollbar -->
	<script src="{{asset('Atlantis')}}/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
	<!-- Atlantis JS -->
	<script src="{{asset('Atlantis')}}/assets/js/atlantis.min.js"></script>
	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="{{asset('Atlantis')}}/assets/js/setting-demo2.js"></script>
</body>
</html>
@endsection
        