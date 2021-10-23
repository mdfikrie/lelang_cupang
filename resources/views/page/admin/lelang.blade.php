@extends('layouts.master')
@section('title','Data Lelangan User')
@section('content')
<div class="main-panel">
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card bg-primary">
                        <div class="card-body">
                            <h1 class="text-white">DATA LELANGAN USER</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">  
                    <div class="card" style="margin-top:-10px;">
                        <div class="card-body">
                            <div class="table-responsive">
                            <table id="basic-datatables" class="display table table-bordered table-striped">
                            <thead>
                                <tr class="text-center bg-primary text-white">
                                    <th style="width: 5px!important;">No.</th>
                                    <th >Judul</th>
                                    <th >Pelelang</th>
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
                                    <td>{{$lelang->user->username}}</td>
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
                                        <a href="{{url('/beranda/'.$lelang->id)}}" class="btn btn-success btn-sm"><span class="fas fa-link"></span></a>
                                        <a href="{{url('lelang/delete/'.$lelang->id)}}" class="btn btn-danger btn-sm m-1"><span class="fas fa-trash"></span></a>
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