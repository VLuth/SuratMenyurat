@extends('layouts.main')
@section('konten')

<!DOCTYPE html>

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
									<div class="card-title">Tambah Surat Keluar</div>
								</div>
								<form method="POST"  action={{route('storesuratkeluar')}} enctype="multipart/form-data">
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
                                                    <label for="largeInput">Tanggal Surat</label>
                                                    <input type="date" class="form-control form-control" name="tanggal">
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
                                                    <label for="largeInput">Tujuan</label>
                                                    <input type="text" class="form-control form-control" name="tujuan" id="defaultInput" placeholder="Tujuan">
                                                </div>
                                            </div>
											<div class="col-md-6 col-lg-6">
												<div class="form-group">
													<label for="exampleFormControlFile1">Upload File (PDF) </label>
													<input type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
											</div>
										</div>
									</div>
									<div class="card-body">
                                        <div class="row">
											<div class="col-md-6 col-lg-6">
												<div class="card-action">
													<button type="submit" class="btn btn-success">Tambah</button>
													<a class="btn btn-danger" style="-webkit-text-fill-color: white">Batal</a>
												</div>
											</div>
										</div>
									</div>
                                </form>
							</div>
						</div>
					</div>
				</div>
@endsection
        