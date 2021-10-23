@extends('layouts.master')
@section('title','History Saya')
@section('content')
<div class="main-panel">
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card bg-primary">
                        <div class="card-body">
                            <h1 class="text-white">HISTORY SAYA</h1>
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
                                    <th style="width: 5px!important;">Status</th>
                                    <th>Tanggal Close</th>
                                    <th>Nominal</th>
                                    <th>Kunjungi</th>
                                </tr>
                            </thead>
                            @foreach($historys as $history)
                            <tbody>
                                <tr>
                                    <td>{{$loop->iteration}}.</td>
                                    <td>{{$history->lelangan->judul}}</td>
                                    <td>
                                        @if($history->lelangan->is_active == 1)
                                            <span class="badge badge-success">Di lelang</span>
                                        @else
                                            <span class="badge badge-danger">Di tutup</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        {{$history->lelangan->tgl_close->format('d-m-Y')}} <span class="badge badge-warning">{{$history->lelangan->jam_close->format('H:i')}}</span>
                                    </td>
                                    <td>@currency($history->nominal)</td>
                                    <td class="text-center"><a href="{{url('beranda/'.$history->lelangan->id)}}" class="btn btn-sm btn-primary"><span class="fas fa-external-link-alt"></span></a></td>
                                </tr>
                            </tbody>
                            @endforeach 
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection