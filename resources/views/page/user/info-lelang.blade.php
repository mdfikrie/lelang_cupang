@extends('layouts.master')
@section('title','Info Lelangan')
@section('content')
<div class="main-panel">
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-7">
                    <div class="card card-header">
                        <img src="{{asset('gambar')}}/{{$lelangs->gambar}}" class="img-fluid" alt="">
                        <div class="card-body">
                            <div class="user-profile ">
                                <h2 style="font-weight:bold" class="text-center mb-3">{{ $lelangs->judul }}</h2>
                                <div class="text-center mb-3">
                                @if($lelangs->is_active == 1)
                                    <span class="badge badge-success">Open</span>
                                @else
                                    <span class="badge badge-danger">Close</span>
                                @endif
                                </div>
                                {!! $lelangs->deskripsi !!}
                                <a href="{{url('/beranda/show-profile/'.$lelangs->user->id)}}" style="color:black!important;text-decoration:none!important;"><span class="fas fa-user"></span> {{$lelangs->user->username}}</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-5">
                    <div class="card ">
                        <div class="card-header" >
                            <h3 style="margin-bottom:-5px !important;"> Daftar Bid dari Teratas</h3>
                        </div>
                        <div class="card-body">
                            <div class="card-body">
                                <table class="table">
                                    @foreach($bids as $bid)
                                    <tr>
                                        <th>{{$loop->iteration}}.</th>
                                        <th><a href="{{url('/beranda/show-profile/'.$bid->user->id)}}">{{$bid->user->username}}</a> </th>
                                        <th>@currency($bid->nominal)</th>
                                    </tr>
                                    @endforeach
                                </table>
                            </div>
                                <div class=" mt-3 mb-3">
                                @if(session('error'))
                                <div class="alert alert-danger">{{session('error')}}</div>
                                @endif
                                <form action="{{Route('proses-bid')}}" method="post">
                                @csrf
                                @if($lelangs->user->id != Auth()->user()->id)
                                @if($lelangs->is_active == 1)
                                <div class="form-group mb-3">
                                    <div class="input-group ">
                                        <input type="hidden" name="id_lelangan" value="{{$lelangs->id}}">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Rp.</span>
                                        </div>
                                        <input type="number" min="0" class="form-control" placeholder="Nominal" name="nominal">
                                    </div>
                                        <small class="ml-5" style="color:grey;font-style:italic;">*Contoh : 50000</small>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-primary" type="submit"> Bid</button>
                                </div>
                                @endif
                                @endif
                                </form>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('footer')
<script src="{{ asset('templates/js/jquery.mask.min.js') }}"></script>
<script>
$(document).ready(function(){
    // Format mata uang.
    $( '#uang' ).mask('000.000.000', {reverse: true});
})
</script>
@endsection