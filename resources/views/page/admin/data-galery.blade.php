@extends('layouts.master')
@section('title','Data Galery')
@section('content')
<div class="main-panel">
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card bg-primary">
                        <div class="card-body">
                            <h1 class="text-white">DATA GALERY</h1>
                            <p class="text-white" style="margin:-10px 0;">Data-data galery</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">  
                    <div class="card" style="margin-top:-10px;">
                        <div class="card-body">
                            <a href="{{route('create-galery')}}" class="btn btn-primary btn-sm mb-2 ml-3"><span class="fas fa-plus"></span> Tambah data</a>
                            <div class="table-responsive">
                            <table id="basic-datatables" class="display table table-bordered">
                            <thead>
                                <tr class="text-center bg-primary text-white">
                                    <th style="width: 5px!important;">No.</th>
                                    <th >Jenis</th>
                                    <th>Gambar</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($galery as $galery)
                                <tr>
                                    <td>{{$loop->iteration}}.</td>
                                    <td>{{$galery->nama}}</td>
                                    <td class="text-center">
                                    <img src="{{asset('gambar/galery')}}/{{$galery->gambar}}" alt="" class="img-fluid m-2" width="150">
                                    </td>
                                    <td class="text-center">
                                        <a href="{{url('data-galery/edit/'.$galery->id)}}" class="btn btn-success btn-sm"> <span class="fas fa-edit"></span> </a>
                                        <form action="{{url('data-galery/delete/'.$galery->id)}}" method="get">
                                        <button class="btn btn-danger btn-sm m-1" type="submit"> <span class="fas fa-trash"></span> </button>
                                        </form>
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