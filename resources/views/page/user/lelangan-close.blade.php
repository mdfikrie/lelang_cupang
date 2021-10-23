@extends('layouts.master')
@section('title','Lelangan Close')
@section('content')
<div class="main-panel">
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card bg-primary">
                        <div class="card-body">
                            <h1 class="text-white">DATA LELANGAN YANG DI TUTUP</h1>
                        </div>
                    </div>
                </div>
            </div>

            

            <div class="row">
                <div class="col-md-12">  
                    <div class="card" style="margin-top:-10px;">
                    <div class="card-header ">
                    <a href="{{url('/lelangan/export_pdf/')}}" class="btn btn-sm btn-danger"><span class="fas fa-download"></span> PDF</a>
                    <a href="{{url('/lelangan/export_excel/')}}" class="btn btn-sm btn-warning"><span class="fas fa-download"></span>  Excel</a>
                        <!-- <h3 class="text-white">Daftar Lelangan Tutup</h3> -->
                    </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <table id="basic-datatables" class="display table table-bordered table-striped">
                            <thead>
                                <tr class="text-center bg-primary text-white">
                                    <th style="width: 5px!important;">No.</th>
                                    <th >Judul</th>
                                    <th>Pemenang</th>
                                    <th>Tanggal</th>
                                    <th>Nominal</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                              <tbody>
                              @foreach($lelangans as $lelang)
                                <tr>
                                    <td>{{$loop->iteration}}.</td>
                                    <td>{{$lelang->judul}}</td>
                                    <td>{{$lelang->pemenang}}</td>
                                    <td>{{$lelang->created_at->format('d-m-Y')}}</td>
                                    <td>@currency($lelang->nominal)</td>
                                    <td class="text-center">
                                        @if($lelang->telp_pemenang !== null)
                                            <a href="https:\\wa.me\+62{{$lelang->telp_pemenang}}" class="btn btn-success btn-sm"><span class="fab fa-whatsapp"></span></a>
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