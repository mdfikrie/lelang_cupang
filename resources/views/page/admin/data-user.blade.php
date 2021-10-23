@extends('layouts.master')
@section('title','Data User')
@section('content')
<div class="main-panel">
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card bg-primary">
                        <div class="card-body">
                            <h1 class="text-white">DAFTAR USER</h1>
                            <p class="text-white" style="margin:-10px 0;">Data-data user yang join ke website</p>
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
                    <div class="card-header ">
                    <a href="{{url('/data-user/export_pdf')}}" class="btn btn-sm btn-danger"><span class="fas fa-download"></span> PDF</a>
                    <a href="{{url('/data-user/export_excel/')}}" class="btn btn-sm btn-warning"><span class="fas fa-download"></span>  Excel</a>
                        <!-- <h3 class="text-white">Daftar Lelangan Tutup</h3> -->
                    </div>
                        <div class="card-body">
                            <!-- <a href="" class="btn btn-primary btn-sm mb-2 ml-3"><span class="fas fa-plus"></span> Tambah data</a> -->
                            <div class="table-responsive">
                            <table id="basic-datatables" class="display table table-bordered table-striped">
                            <thead>
                                <tr class="text-center bg-primary text-white">
                                    <th style="width: 5px!important;">No.</th>
                                    <th >Email</th>
                                    <th>Username</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($user as $user)
                                <tr>
                                    <td>{{$loop->iteration}}.</td>
                                    <td class="text-capitalize">{{$user->username}}</td>
                                    <td>{{$user->email}}</td>
                                    <td class="text-center">
                                        @if($user->is_active ==1)
                                        <span class="badge badge-success text-capitalize">Active</span>
                                        @else
                                        <span class="badge badge-danger text-capitalize">Tidak Active</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <a href="{{url('data-user/info/'.$user->id)}}" class="btn btn-primary btn-sm"><span class="fas fa-info"></span></a>
                                        <a href="{{url('/data-user/delete/'.$user->id)}}" class="btn btn-danger btn-sm"><span class="fas fa-trash"></span></a>
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
</div>
@endsection