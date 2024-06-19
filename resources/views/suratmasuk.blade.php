@extends('layouts.main')
@section('konten')



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
                                <a class="btn btn-primary btn-round ml-auto" href="{{ route('tambahsuratmasuk') }}">
                                    <i class="fa fa-plus"></i>
                                    Tambah Data
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="add-row" class="display table table-striped table-hover">
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
                                    <tbody>
                                        @php
                                            $number = 1;                           
                                        @endphp
                                        @foreach ($query as $item)
                                        <tr>
                                            <td>{{ $number }}</td>
                                            <td>{{ $item->created_at->format('d/m/Y') }}</td>
                                            <td>{{ $item->nosurat }}</td>
                                            <td>{{ $item->perihal }}</td>
                                            <td>{{ $item->tujuan }}</td>
                                            <td>{{ $item->pengirim }}</td>
                                            <td>
                                                <div class="form-button-action">
                                                    <a href="#" class="btn btn-link btn-primary btn-lg toggle-edit" data-toggle="modal" data-target="#detailsuratmasuk_{{ $item->id }}" data-original-title="Detail" data-id="{{ $item->id }}">
                                                        <i class="fa fa-info-circle fa-lg"></i>
                                                    </a>
                                                    <a href="{{ route('hapussuratmasuk', $item->id) }}" class="btn btn-link btn-danger" onclick="return confirm('Yakin?')" data-original-title="Hapus">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        @php
                                            $number++;
                                        @endphp
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
    


    @foreach ($query as $item)
    <div class="modal fade" id="detailsuratmasuk_{{ $item->id }}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="background-color: ">
                <div class="modal-header no-bd">
                    <h5 class="modal-title">
                        <span class="fw-mediumbold">Detail Data</span> 
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="detail-view">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group form-group-default" style="background-color: #bdbdbd">
                                    <label>Tanggal Surat</label>
                                    <label>{{ $item->created_at->format('d/m/Y') }}</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-group-default" style="background-color: #bdbdbd">
                                    <label>Terakhir Diubah</label>
                                    <label>{{ $item->updated_at->format('d/m/Y') }}</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-group-default" style="background-color: #bdbdbd">
                                    <label>No Surat</label>
                                    <label>{{ $item->nosurat }}</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-group-default" style="background-color: #bdbdbd">
                                    <label>Perihal</label>
                                    <label>{{ $item->perihal }}</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-group-default" style="background-color: #bdbdbd">
                                    <label>Pengirim</label>
                                    <label>{{ $item->pengirim }}</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-group-default" style="background-color: #bdbdbd">
                                    <label>Tujuan</label>
                                    <label>{{ $item->tujuan }}</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group form-group-default" style="background-color: #bdbdbd">
                                    <label class="text-center">File</label>
                                    <label class="text-center"><a href="{{ route('view', $item->id) }}">View File</a></label>
                                    <label class="text-center"><a href="{{ route('download', $item->file) }}">Download File</a></label>
                                    <iframe src="storage/{{ $item->file }}"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="edit-form" style="display: none">
                        <form method="post" action="{{route('updatesuratmasuk', $item->id)}}">
                            @method('put')
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group form-group-default" style="background-color: #bdbdbd">
                                        <label>No Surat</label>
                                        <input name="nosurat" type="text" class="form-control" value="{{ $item->nosurat }}" style="background-color: #bdbdbd">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-group-default" style="background-color: #bdbdbd">
                                        <label>Perihal</label>
                                        <input name="perihal" type="text" class="form-control" value="{{ $item->perihal }}" style="background-color: #bdbdbd">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-group-default" style="background-color: #bdbdbd">
                                        <label>Pengirim</label>
                                        <input name="pengirim" type="text" class="form-control" value="{{ $item->pengirim }}" style="background-color: #bdbdbd">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-group-default" style="background-color: #bdbdbd">
                                        <label>Tujuan</label>
                                        <input name="tujuan" type="text" class="form-control" value="{{ $item->tujuan }}" style="background-color: #bdbdbd">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group form-group-default" style="background-color: #bdbdbd">
                                        <label for="exampleFormControlFile1">Upload File</label>
                                        <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
                                        <iframe src="storage/{{ $item->file }}" style="margin-left: 70px"></iframe>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-info edit-form" style="display: none">Simpan</button>
                        </form>
                    </div>
                </div>
                <div class="modal-footer no-bd">
                    <button type="button" id="edit_{{ $item->id }}" class="btn btn-primary toggle-edit detail-view">Edit</button>
                    <button type="button" id="edit_{{ $item->id }}" class="btn btn-primary toggle-edit edit-form" style="display: none">Detail</button>
                    <button type="button" class="btn btn-danger detail-view" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <!-- Core JS Files -->
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

    <script>
        $(document).ready(function() {
            $('.toggle-edit').click(function() {
                var modalId = $(this).attr('id').split('_')[1];
                $('#detailsuratmasuk_' + modalId + ' .detail-view').toggle();
                $('#detailsuratmasuk_' + modalId + ' .edit-form').toggle();
            });

            // Initialize DataTable
            $('#add-row').DataTable({
                "pageLength": 5,
            });
        });
    </script>
@endsection
