@extends('layouts.master')
@section('title','Pesan Pengaduan')
@section('content')
<div class="main-panel">
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card bg-primary">
                        <div class="card-body">
                            <h1 class="text-white">Pesan Pengaduan</h1>
                            <p class="text-white" style="margin:-10px 0;">Pesan Pengaduan</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">  
                @if(session('pesan'))
                        <div class="alert alert-success style="margin-bottom:20px!important;">{{session('pesan')}}</div>
                    @endif
                    <div class="card" style="margin-top:-10px;">
                        <div class="card-body">
                            <div class="table-responsive">
                            <table id="basic-datatables" class="display table table-bordered">
                                <thead>
                                    <tr class="text-center bg-primary text-white">
                                        <th style="width: 5px!important;">No.</th>
                                        <th >Pelapor</th>
                                        <th>Terlapor</th>
                                        <th>Alasan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($pengaduan as $pengaduans)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$pengaduans->user->username}}</td>
                                            <td>{{$pengaduans->terlapor}}</td>
                                            <td>{!! $pengaduans->alasan !!}</td>
                                            <td class="text-center"><a href="{{url('/pesan-pengaduan/hapus/'.$pengaduans->id)}}" class="btn btn-danger btn-sm"><span class="fas fa-trash"></span></a></td>
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
</div>
@endsection