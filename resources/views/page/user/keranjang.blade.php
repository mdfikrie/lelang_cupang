@extends('layouts.master')
@section('title','Keranjang Saya')
@section('content')
<div class="main-panel">
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="card bg-primary">
                        <div class="card-body">
                            <h1 class="text-white">KERANJANG SAYA</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">  
                    <div class="card" style="margin-top:-10px;">
                        <div class="card-body">
                            <div class="table-responsive">
                            <table id="basic-datatables" class="display table table-bordered table-striped">
                            <thead>
                                <tr class="text-center bg-primary text-white">
                                    <th style="width: 5px!important;">No.</th>
                                    <th >Judul</th>
                                    <th >Pelelang</th>
                                    <th >Nominal</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            @foreach($keranjangs as $keranjang)
                            <tbody>
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$keranjang->judul}}</td>
                                    <td>{{$keranjang->pelelang}}</td>
                                    <td>@currency($keranjang->nominal)</td>
                                    <td class="text-center">
                                        <a href="https:\\wa.me\+62{{$keranjang->telp_pelelang}}" class="btn btn-success btn-sm"><span class="fab fa-whatsapp"></span></a>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
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