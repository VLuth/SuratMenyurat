@extends('template.main')
@section('konten')


<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Tables - Atlantis Lite Bootstrap 4 Admin Dashboard</title>
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


    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h4 class="page-title">Index Surat Masuk</h4>
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
                            <a href="#">Tables</a>
                        </li>
                        <li class="separator">
                            <i class="flaticon-right-arrow"></i>
                        </li>
                        <li class="nav-item">
                            <a href="#">Datatables</a>
                        </li>
                    </ul>
                </div>
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="d-flex align-items-center">
                <h4 class="card-title">Surat Masuk</h4>
                <a class="btn btn-primary btn-round ml-auto" href="{{route('tambahsuratmasuk')}}">
                    <i class="fa fa-plus"></i>
                    Add Row
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="add-row" class="display table table-striped table-hover" >
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>No Surat</th>
                            <th>Perihal</th>
                            <th>Tujuan</th>
                            <th>Pengirim</th>
                            <th style="width: 10%">Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>No Surat</th>
                            <th>Perihal</th>
                            <th>Tujuan</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @php
                            $number = 1;                           
                        @endphp
                        @foreach ($query as $item)
                        <tr>
                            <td>{{$number}}</td>
                            <td>{{$item->created_at->format('d/m/Y')}}</td>
                            <td>{{$item->nosurat}}</td>
                            <td>{{$item->perihal}}</td>
                            <td>{{$item->tujuan}}</td>
                            <td>{{$item->pengirim}}</td>
                            <td>
                                <div class="form-button-action">
                                    <a title="" class="btn btn-link btn-primary btn-lg" data-toggle="modal" data-target="#detailsuratmasuk" data-original-title="Detail">
                                        <i class="fa fa-info-circle fa-lg"></i>
                                    </a>
                                    <div class="modal fade" id="detailsuratmasuk" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header no-bd">
													<h5 class="modal-title">
														<span class="fw-mediumbold">
														Detail Data</span> 
													</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<p class="small">Create a new row using this form, make sure you fill them all</p>

													{{-- <form>
														<div class="row">
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label>Name</label>
																	<input id="addName" type="text" class="form-control" placeholder="fill name">
																</div>
															</div>
															<div class="col-md-6 pr-0">
																<div class="form-group form-group-default">
																	<label>Position</label>
																	<input id="addPosition" type="text" class="form-control" placeholder="fill position">
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group form-group-default">
																	<label>Office</label>
																	<input id="addOffice" type="text" class="form-control" placeholder="fill office">
																</div>
															</div>
														</div>
													</form> --}}
												</div>
												<div class="modal-footer no-bd">
													<button type="button" id="addRowButton" {{route('editsuratmasuk', $item->id)}} class="btn btn-primary">Edit</button>
													<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
                                    <a data-toggle="tooltip" title="" class="btn btn-link btn-danger" href="{{route('hapussuratmasuk', $item->id)}}" onclick="return confirm('Yakin?')" data-original-title="Hapus">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @php
                            $number++
                        @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
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
<!-- Datatables -->
<script src="{{asset('Atlantis')}}/assets/js/plugin/datatables/datatables.min.js"></script>
<!-- Atlantis JS -->
<script src="{{asset('Atlantis')}}/assets/js/atlantis.min.js"></script>
<!-- Atlantis DEMO methods, don't include it in your project! -->
<script src="{{asset('Atlantis')}}/assets/js/setting-demo2.js"></script>
<script >

$(document).ready(function() {
// Add Row
			$('#add-row').DataTable({
				"pageLength": 5,
			});

			var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

			$('#addRowButton').click(function() {
				$('#add-row').dataTable().fnAddData([
					$("#addName").val(),
					$("#addPosition").val(),
					$("#addOffice").val(),
					action
					]);
				$('#addRowModal').modal('hide');

			});
		});
	</script>
</body>
</html>
@endsection