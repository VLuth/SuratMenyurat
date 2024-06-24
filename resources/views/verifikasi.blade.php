@extends('layouts.main')
@section('konten')



            <div class="page-inner">
                <div class="page-header">
                    <h4 class="page-title">Verifikasi Surat Masuk</h4>
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

                <div class="col-md-16">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <form class="row" method="GET" action="{{route('filter')}}" style="display:flex; max-width: 1000px">
                                    <div style="width: 200px; margin-left:10px">
                                        <label> Perihal </label>
                                        <input type="text" name="filterperihal" class="form-control">
                                    </div>
                                    <div style="width: 200px; margin-left:10px">
                                        <label> Tanggal Awal </label>
                                        <input type="date" name="tanggalawal" class="form-control">
                                    </div>
                                    <div style="width: 200px; margin-left:10px">
                                        <label> Tanggal Akhir </label>
                                        <input type="date" name="tanggalakhir" class="form-control">
                                    </div>
                                    <div class="col-sm" style="align-items: center">
                                        <button type="submit" class="btn btn-success btn-sm"> Cari </button>
                                    </div>
                                    <div class="col-sm" style="align-items:center">
                                        <button href="{{route('suratmasuk')}}" class="btn btn-danger btn-sm"> reset </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>No Surat</th>
                                            <th>Perihal</th>
                                            <th>Tujuan</th>
                                            <th>Pengirim</th>
                                            <th>Status</th>
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
                                            <td>{{ $item->tanggalsurat}}</td>
                                            <td>{{ $item->nosurat }}</td>
                                            <td>{{ $item->perihal }}</td>
                                            <td>{{ $item->tujuan }}</td>
                                            <td>{{ $item->pengirim }}</td>
                                            <td>{{ $item->status }}</td>
                                            <td>
                                                <div class="form-button-action">
                                                    <a href="#" class="btn btn-link btn-primary btn-lg toggle-edit" data-toggle="modal" data-target="#detailsuratmasuk_{{ $item->id }}" data-original-title="Detail" data-id="{{ $item->id }}">
                                                        <i class="fa fa-info-circle fa-lg"></i>
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
                    <ul class="nav nav-pills nav-secondary" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-suratmasuk-tab" data-toggle="pill" href="#pills-suratmasuk_{{$item->id}}" role="tab" aria-controls="pills-suratmasuk" aria-selected="true">Surat Masuk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-verifikasi-tab" data-toggle="pill" href="#pills-verifikasi_{{$item->id}}" role="tab" aria-controls="pills-verifikasi" aria-selected="false">Verifikasi</a>
                        </li>
                    </ul>
                    <div class="tab-content mt-2 mb-3" id="pills-tabContent">
                        <div class="detail-suratmasuk tab-pane fade show active" id="pills-suratmasuk_{{$item->id}}" role="tabpanel" aria-labelledby="pills-suratmasuk-tab">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group form-group-default" style="background-color: #bdbdbd">
                                        <b>Tanggal Surat</b>
                                        <label>{{ $item->tanggalsurat}}</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-group-default" style="background-color: #bdbdbd">
                                        <b>No Surat</b>
                                        <label>{{ $item->nosurat }}</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-group-default" style="background-color: #bdbdbd">
                                        <b>Perihal</b>
                                        <label>{{ $item->perihal }}</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-group-default" style="background-color: #bdbdbd">
                                        <b>Tujuan</b>
                                        <label>{{ $item->tujuan }}</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group form-group-default" style="background-color: #bdbdbd">
                                        <b><center>Pengirim</center></b>
                                        <label class="text-center">{{ $item->pengirim }}</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group form-group-default" style="background-color: #bdbdbd">
                                        <b class="text-center"><center>File</center></b>
                                        <label class="text-center"><a href="{{ route('view', $item->id) }}">View File</a></label>
                                        <iframe src="storage/{{ $item->file }}" style="margin-left: 70px"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-verifikasi_{{$item->id}}" role="tabpanel" aria-labelledby="pills-verifikasi-tab">
                            <div>
                                <form method="post" action="{{route('verifikasisuratmasuk', $item->id)}}">
                                    @method('put')
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group form-group-default" style="background-color: #bdbdbd">
                                                <b>Tanggal Verifikasi</b>
                                                <input name="tanggalverifikasi" type="date" class="form-control" style="background-color: #bdbdbd">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group form-group-default" style="background-color: #bdbdbd">
                                                <b>Verifikasi</b>
                                                <select class="form-control" name="verifikasi">
                                                    <option hidden >Pilih Aksi</option>
                                                        <option value="Verifikasi Sekretaris">Lanjut</option>
                                                        <option value="Revisi Staff">Tidak</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group form-group-default" style="background-color: #bdbdbd">
                                                <b>Keterangan</b>
                                                <input name="keteranganverifikasi" type="text" class="form-control" style="background-color: #bdbdbd">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12" style="display: flex; justify-content: flex-end; margin-top: 50px; margin-bottom: -30px">
                                        <button type="submit" class="btn btn-success" style="margin-right: 10px">Verifikasi</button>
                                        <button type="button" class="btn btn-primary" style="margin-right: -15px">Selesai</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer no-bd">
                    <button type="button" class="btn btn-danger detail-suratmasuk" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <script src="{{asset('Atlantis')}}/assets/js/core/jquery.3.2.1.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.tampilkan-edit').click(function() {
                var modalId = $(this).attr('id').split('_')[1];
                $('#detailsuratmasuk_' + modalId + ' .detail-suratmasuk').toggle();
                $('#detailsuratmasuk_' + modalId + ' .edit-suratmasuk').toggle();
            });
        });
    </script>
@endsection
