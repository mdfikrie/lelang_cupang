@extends('layouts.master')
@section('title','Halaman Beranda')
@section('content')
<div class="main-panel">
    <div class="container">
        <div class="panel-header bg-primary-gradient">
            <img src="{{asset('gambar/banner/banner3.jpg')}}" alt="" class="img-fluid" width="100%" height="200">
        </div>
        <div class="page-inner mt--5">
            <div class="row mt-5 justify-content-center">
                <div class="col-md-7">
                    <form action="{{Route('beranda')}}" method="get">
                        <div class="input-group">
                            <input type="text" name="keyword" class="form-control sm" placeholder="Cari lelangan disini" value="{{old('keyword')}}">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-primary"> <span class="fas fa-search"></span> Cari</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row mt-3">
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
                                <span class="badge badge-light fas fa-map-marker-alt" style="font-size:15px"> {{$lelang->user->kota}}</span> </p>
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
@section('footer')
<script src="{{ asset('templates/js/plugin/owl-carousel/owl.carousel.min.js') }}"></script>
@endsection