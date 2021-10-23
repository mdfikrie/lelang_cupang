@extends('layouts.master')
@section('title','Lihat Profile')
@section('content')
<div class="main-panel">
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-profile">
                        <div class="card-header" style="background-image: url('https://via.placeholder.com/150')">
                            <div class="profile-picture">
                                <div class="avatar avatar-xl">
                                    <img src="{{asset('gambar/profile/'.$user->gambar)}}" alt="..." class="avatar-img rounded-circle">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="user-profile text-center">
                                <div class="name">{{$user->username}}</div>
                                <div class="social-media">
                                    <a class="btn btn-primary btn-sm btn-link" rel="publisher" href="#"> 
                                        <span class="btn-label just-icon"><i class="flaticon-facebook"></i> </span> 
                                    </a>
                                    <a class="btn btn-danger btn-sm btn-link" rel="publisher" href="#"> 
                                        <span class="btn-label just-icon"><i class="flaticon-instagram"></i> </span> 
                                    </a>
                                    <a class="btn btn-success btn-sm btn-link" rel="publisher" href="https://api.whatsapp.com/send?phone={{$user->telp}}"> 
                                        <span class="btn-label just-icon"><i class="flaticon-whatsapp"></i> </span> 
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-8">
                    <div class="card card-with-nav">
                        <div class="card-body">
                            <div class="row mt-3">
                                <div class="col-md">
                                    <div class="form-group form-group-default">
                                        <label>Username</label>
                                        <h4>{{$user->username}}</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group form-group-default">
                                        <label>No. Telp</label>
                                        <h4>{{$user->telp}}</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group form-group-default">
                                        <label>Alamat</label>
                                        <h4>{{$user->alamat}}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($lelangs as $lelang)
                    <div class="col-md-4">
                        <div class="card full-height hovered">
                        <a href="{{url('beranda/'.$lelang->id)}}" style="text-decoration:none!important">
                            <div class="card-body">
                                <img src="{{asset('gambar')}}/{{$lelang->gambar}}" alt="" class="img-fluid">
                                <div  class="text-center mt-2">
                                    <h1 class="text-black" style="font-weight:bold; text-decoration:none!important;color:black!important">{{$lelang->judul}}</h1>
                                    <p> <span class="badge badge-primary" style="font-size:16px">{{ $lelang->tgl_close->format('d/m/Y') }} - {{$lelang->jam_close->format('H:i')}} WIB -</span> </p>
                                    @if($lelang->is_active == true)
                                    <p><span class="badge badge-success" style="font-size:14px">Open</span> </p>
                                    @else
                                    <p><span class="badge badge-danger" style="font-size:14px">Close</span> </p>
                                    @endif
                                    <span class="badge badge-light fas fa-map-marker-alt" style="font-size:15px"> {{$lelang->user->alamat}}</span> </p>
                                </div>
                            </div>
                        </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="pull-right">
                {{$lelangs->links()}}
            </div>
        </div>
    </div>
    </div>
@endsection