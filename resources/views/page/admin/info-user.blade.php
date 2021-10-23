@extends('layouts.master')
@section('title','Halaman Profile')
@section('content')
<div class="main-panel">
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-profile">
                        <div class="card-header" >
                            <div class="profile-picture">
                                <div class="">
                                @if($user->gambar == null)
                                    <img src="{{asset('images/user.png')}}" alt="..." class="img-fluid rounded-circle" width="100">
                                @else
                                    <img src="{{asset('gambar/profile/'.$user->gambar)}}" alt="..." class="img-fluid rounded-circle" width="100">
                                @endif
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="user-profile text-center">
                                <div class="name">{{ $user->username }}</div>
                                <div class="desc">{{ $user->email }}</div>
                                <div class="social-media">
                                    <a class="btn btn-primary btn-sm btn-link" rel="publisher" href="{{$user->link_fb}}"> 
                                        <span class="btn-label just-icon"><i class="flaticon-facebook"></i> </span> 
                                    </a>
                                    <a class="btn btn-danger btn-sm btn-link" rel="publisher" href="{{$user->link_ig}}"> 
                                        <span class="btn-label just-icon"><i class="flaticon-instagram"></i> </span> 
                                    </a>
                                    <a class="btn btn-success btn-sm btn-link" rel="publisher" href="{{$user->link_yt}}"> 
                                        <span class="btn-label just-icon"><i class="flaticon-youtube"></i> </span> 
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-8">
                    <div class="card card-with-nav">
                        <div class="card-body">
                        <form action="{{route('update-user')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" value="{{$user->id}}" name="id" hidden>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" value="{{$user->email}}" name="email" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" name="username" value="{{$user->username}}">
                                    @error('username')
                                         <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>No. Telp</label>
                                    <!-- <input type="text" class="form-control" name="telp" value="{{$user->telp}}"> -->
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">+62</span>
                                        </div>
                                        <input type="text" class="form-control" name="telp" value="{{$user->telp}}" aria-describedby="basic-addon1">
                                    </div>
                                    @error('telp')
                                         <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Kota</label>
                                    <input type="text" class="form-control" name="kota" value="{{$user->kota}}">
                                    <small class="ml-2" style="color:grey">'Contoh: Pati'</small>
                                    @error('kota')
                                         <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Alamat Lengkap</label>
                                    <input type="text" class="form-control" name="alamat" value="{{$user->alamat}}">
                                    @error('alamat')
                                         <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="is_active" class="form-control">
                                        @if($user->is_active == 1)
                                        <option value="1">Aktif</option>
                                        <option value="0">Tidak Aktif</option>
                                        @else
                                        <option value="0">Tidak Aktif</option>
                                        <option value="1">Aktif</option>
                                        @endif
                                    </select>
                                   
                                </div>

                            </div>
                            <div class="col-md-6">
                                
                                <div class="card card-body mt-3">
                                    <div class="form-group">
                                        <label>Password Baru</label>
                                        <input type="text" class="form-control" name="pass1" value="{{old('pass1')}}">
                                        <small class="ml-2" style="color:grey">'Optional'</small>
                                        @error('pass1')
                                         <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Konfirmasi Password Baru</label>
                                        <input type="text" class="form-control" name="pass2" value="{{old('pass2')}}">
                                        @error('pass2')
                                         <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card-action">
                            <button class="btn btn-primary" type="submit">Save</button>
                            <a href="{{route('data-user')}}" class="btn btn-danger">Cancel</a>
                        </div>
                    </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
@endsection