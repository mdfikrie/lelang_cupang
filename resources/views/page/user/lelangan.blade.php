@extends('layouts.master')
@section('title','Lelangan Open')
@section('content')
<div class="main-panel">
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card bg-primary">
                        <div class="card-body">
                            <h1 class="text-white">DATA LELANGAN YANG DIBUKA</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">  
                    <div class="card" style="margin-top:-10px;">
                    @if(session('pesan'))
                        <div class="alert alert-success">{{session('pesan')}}</div>
                    @endif
                    
                    <div class="card-header bg-primary"><h3 class="text-white">Daftar Lelangan Open</h3></div>
                        <div class="card-body">
                            <a href="{{route('create-lelang')}}" class="btn btn-primary btn-sm mb-2 ml-3"><span class="fas fa-plus"></span> Tambah data</a>
                            <div class="table-responsive">
                            <table id="basic-datatables" class="display table table-bordered table-striped">
                            <thead>
                                <tr class="text-center bg-primary text-white">
                                    <th style="width: 5px!important;">No.</th>
                                    <th >Judul</th>
                                    <th style="width: 5px!important;">Status</th>
                                    <th>Tanggal Close</th>
                                    <th>Pictur</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                              <tbody>
                              @foreach($lelang as $lelang)
                                <tr>
                                    <td>{{$loop->iteration}}.</td>
                                    <td>{{$lelang->judul}}</td>
                                    <td>
                                        @if($lelang->is_active == 1)
                                            <span class="badge badge-success">Di lelang</span>
                                        @else
                                            <span class="badge badge-danger">Di tutup</span>
                                        @endif
                                    </td>
                                    <td>
                                            {{$lelang->tgl_close->format('d-m-Y')}} <span class="badge badge-warning">{{$lelang->jam_close->format('H:i')}}</span>
                                        
                                    </td>
                                    <td>
                                    <img src="{{asset('gambar')}}/{{$lelang->gambar}}" alt="" class="img-fluid m-2" width="150">
                                    </td>
                                    <td class="text-center">
                                    @if($lelang->is_active == 1)
                                        <form action="{{url('/lelangan/close')}}" method="post">
                                            @csrf
                                            <input type="text" name="id" value="{{$lelang->id}}" hidden>
                                            <button class="btn btn-warning btn-sm m-1" type="submit"><span class="fas fa-times"></span></button>
                                        </form>
                                        <form action="{{url('/lelangan/edit/'.$lelang->id)}}" method="get">
                                            <button class="btn btn-primary btn-sm m-1" type="submit"><span class="fas fa-edit"></span></button>
                                        </form>
                                    @endif
                                        <a href="{{url('/beranda/'.$lelang->id)}}" class="btn btn-success btn-sm"><span class="fas fa-link"></span></a>
                                    @if($lelang->is_active == 0)   
                                        <form action="{{url('lelangan/delete/'.$lelang->id)}}" method="get">
                                        <!-- @csrf -->
                                            <button type="submit" class="btn btn-danger btn-sm m-1"><span class="fas fa-trash"></span></button>
                                        </form>
                                    @endif
                                    </td>
                                </tr>
                              @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')




	<!-- jQuery UI -->
	<!-- <script src="../../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="../../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script> -->
	<!-- Moment JS -->
	<!-- <script src="{{ asset('templates/js/plugin/moment/moment.min.js') }}"></script> -->
	<!-- Bootstrap Toggle -->
	<!-- <script src="../../assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script> -->
	<!-- jQuery Scrollbar -->
	<!-- <script src="../../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script> -->
	<!-- DateTimePicker -->
	<!-- <script src="../../assets/js/plugin/datepicker/bootstrap-datetimepicker.min.js"></script> -->
	<!-- Select2 -->
	<!-- <script src="{{ asset('templates/js/plugin/select2/select2.full.min.js') }}"></script> -->
	<!-- Bootstrap Tagsinput -->
	<!-- <script src="{{ asset('templates/js/plugin/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"></script> -->
	<!-- Atlantis JS -->
	<!-- <script src="{{ asset('templates/js/atlantis.min.js') }}"></script> -->
@endsection