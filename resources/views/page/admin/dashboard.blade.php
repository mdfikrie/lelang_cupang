@extends('layouts.master')
@section('title','Dashboard Admin')
@section('content')
<div class="main-panel">
    <div class="container">
        <div class="panel-header bg-primary-gradient">
            <div class="page-inner py-5">
                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                    <h1 class="text-white pb-2 f-bold">Halaman Dashboard Administrator</h1>
                </div>
            </div>
        </div>
        <div class="page-inner mt--5">
            <div class="card full-height">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card p-3 card-primary">
                                <div class="card-body skew-shadow">
                                    <h1>{{$user->count()}}</h1>
                                    <h5 class="op-8">Users</h5>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card p-3 card-dark bg-secondary-gradient">
                                <div class="card-body bubble-shadow">
                                    <h1>{{$lelangan->count()}}</h1>
                                    <h5 class="op-8">Lelangan</h5>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card p-3 card-danger">
                                <div class="card-body skew-shadow">
                                    <h1>{{$galery->count()}}</h1>
                                    <h5 class="op-8">Galery</h5>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection