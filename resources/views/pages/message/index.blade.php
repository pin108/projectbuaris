@extends('layout.layout')
@section('content')
<div style="margin-top: 1%;">
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
        <div style="text-align: center;"> <img src="https://i.imgur.com/O18mJ1K.png" width="100" class="mb-4">
            <h3>terimakasih telah registrasi galang dana!</h3> <span>kami akan menghubungi anda!</span>
        </div>
    </div>
</div>
</div>
</div>
@stop