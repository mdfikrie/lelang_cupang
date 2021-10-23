@extends('layouts.master')
@section('title','Edit Profile')
@section('content')
<div class="main-panel">
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-white bg-primary">
                        <h3>Edit Profile</h3>
                    </div>
                    <div class="card-body">
                    <form action="{{route('profile-update')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" value="{{$users->id}}" name="id" hidden>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" value="{{$users->email}}" name="email" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" name="username" value="{{$users->username}}">
                                    @error('username')
                                         <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>No. Telp</label>
                                    <!-- <input type="text" class="form-control" name="telp" value="{{$users->telp}}"> -->
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">+62</span>
                                        </div>
                                        <input type="text" class="form-control" name="telp" value="{{$users->telp}}" aria-describedby="basic-addon1">
                                    </div>
                                    @error('telp')
                                         <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Kota</label>
                                    <input type="text" class="form-control" name="kota" value="{{$users->kota}}">
                                    <small class="ml-2" style="color:grey">'Contoh: Pati'</small>
                                    @error('kota')
                                         <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Alamat Lengkap</label>
                                    <input type="text" class="form-control" name="alamat" value="{{$users->alamat}}">
                                    @error('alamat')
                                         <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Link Facebook</label>
                                    <input type="text" class="form-control" name="fb" value="{{$users->link_fb}}">
                                   
                                </div>
                                <div class="form-group">
                                    <label>Link Instagram</label>
                                    <input type="text" class="form-control" name="ig" value="{{$users->link_ig}}">
                                    
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

                                <div class="form-group">
                                <label for="">Gambar</label>
                                    <div class="input-file input-file-image">
                                        <img class="img-upload-preview" width="150" src="{{asset('gambar/profile/'. $users->gambar)}}" alt="preview" >
                                        <input type="file" class="form-control form-control-file" id="uploadImg2" name="gambar" >
                                        <label for="uploadImg2" class="  label-input-file btn btn-black btn-round">
                                            <span class="btn-label">
                                                <i class="fa fa-file-image"></i>
                                            </span>
                                            Upload a Image
                                        </label>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card-action">
                            <button class="btn btn-primary" type="submit">Save</button>
                            <a href="{{route('profile')}}" class="btn btn-danger">Cancel</a>
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