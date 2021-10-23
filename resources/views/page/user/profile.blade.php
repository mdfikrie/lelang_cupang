@extends('layouts.master')
@section('title','Halaman Profile')
@section('content')
<div class="main-panel">
    <div class="container">
        <div class="page-inner">
        <!-- <div class="row">
            <div class="col-6">
                <div class="card card-stats card-round">
                    <div class="card-body ">
                        <div class="row align-items-center">
                            <div class="col-icon">
                                <div class="icon-big text-center icon-primary bubble-shadow-small">
                                    <i class="fas fa-fish"></i>
                                </div>
                            </div>
                            <div class="col col-stats ml-3 ml-sm-0">
                                <div class="numbers">
                                    <p class="card-category">Lelangan</p>
                                    <h4 class="card-title">1,294</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card card-stats card-round">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-icon">
                                <div class="icon-big text-center icon-info bubble-shadow-small">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                            </div>
                            <div class="col col-stats ml-3 ml-sm-0">
                                <div class="numbers">
                                    <p class="card-category">Bid</p>
                                    <h4 class="card-title">1303</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        @if(session('pesan'))
            <div class="alert alert-success">{{session('pesan')}}</div>
        @endif
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-profile">
                        <div class="card-header" >
                            <div class="profile-picture">
                                <div class="">
                                @if(Auth()->user()->gambar == null)
                                    <img src="{{asset('images/user.png')}}" alt="..." class="img-fluid rounded-circle" width="100">
                                @else
                                    <img src="{{asset('gambar/profile/'.auth()->user()->gambar)}}" alt="..." class="img-fluid rounded-circle" width="100">
                                @endif
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="user-profile text-center">
                                <div class="name">{{ auth()->user()->username }}</div>
                                <div class="desc">{{ auth()->user()->email }}</div>
                                <div class="social-media">
                                    <a class="btn btn-primary btn-sm btn-link" rel="publisher" href="{{Auth()->user()->link_fb}}"> 
                                        <span class="btn-label just-icon"><i class="flaticon-facebook"></i> </span> 
                                    </a>
                                    <a class="btn btn-danger btn-sm btn-link" rel="publisher" href="{{Auth()->user()->link_ig}}"> 
                                        <span class="btn-label just-icon"><i class="flaticon-instagram"></i> </span> 
                                    </a>
                                    <a class="btn btn-success btn-sm btn-link" rel="publisher" href="https://wa.me/+62{{Auth()->user()->telp}}"> 
                                        <span class="btn-label just-icon"><i class="flaticon-whatsapp"></i> </span> 
                                    </a>
                                </div>
                                <div class="view-profile">
                                    <a href="{{url('profile/edit-profile/'.auth()->user()->id)}}" class="btn btn-secondary btn-block">Edit Profile</a>
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
                                        <h4>{{Auth()->user()->username}}</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group form-group-default">
                                        <label>Email</label>
                                        <h4>{{Auth()->user()->email}}</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group form-group-default">
                                        <label>No. WA</label>
                                        @if(Auth()->user()->telp)
                                        <h4>+62{{Auth()->user()->telp}}</h4>
                                        @else
                                        <h4>-</h4>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group form-group-default">
                                        <label>Alamat</label>
                                        @if(Auth()->user()->alamat)
                                        <h4>{{Auth()->user()->alamat}}</h4>
                                        @else
                                        <h4>-</h4>
                                        @endif
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