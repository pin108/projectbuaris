@extends('layout.layout')
@section('content')
<div style="margin-top: 1%; margin-bottom:10%">
    @if (session('success'))
    <div class="alert alert-success" style="background-color: green;">
        {{ session('success') }}
    </div>
    @endif
    @if (session('error'))
    <div class="alert alert-danger" style="background-color: red;">
        {{ session('error') }}
    </div>
    @endif
    <div class="container" style="margin-top: 5%;">
        <div style="text-align: center;"> <img src="https://png.pngtree.com/element_our/md/20180515/md_5afb099d307d3.jpg" width="100" class="mb-4">
            <h3>{{$message}}</h3></span>
        </div>
    </div>
</div>
</div>
</div>
@stop