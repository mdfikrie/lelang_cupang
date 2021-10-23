@extends('layouts.master')
@section('title','Galery Informasi')
@section('content')
<div class="main-panel">
    <div class="container">
    <div class="panel-header bg-primary-gradient">
            <img src="{{asset('gambar/banner/galery.jpg')}}" alt="" class="img-fluid" width="100%" height="200">
        </div>
        <div class="page-inner mt--3">
            <div class="row mt-5 mb-5 justify-content-center">
                <div class="col-md-7">
                    <form action="{{Route('galery')}}" method="get">
                        <div class="input-group">
                            <input type="text" name="keyword" class="form-control sm"  value="{{old('keyword')}}">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-primary"> <span class="fas fa-search"></span> Cari</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            @foreach($galery as $galerys)
            <div class="row ">
                <div class="col-md-12">
                    <div class="card full-height hovered">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{asset('gambar/galery/'.$galerys->gambar)}}" alt="" class="img-fluid">
                                </div>
                                
                                <div class="col-md-8">
                                    <h1 class="font-weight-bold">{{$galerys->nama}}</h1>
                                    <p class="mt-2">{!! $galerys->deskripsi !!}</p>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
               <!-- paginate -->
               <div class="pull-right">
                {{$galery->links()}}
                </div>
        </div>
	</div>
</div>
@endsection