@extends('layout.layout')
@section('content')
<div class="container rounded bg-white mt-5 mb-5" style="margin-top: 30%;">
    @if (session('success'))
    <div class="alert alert-success" style="background-color:green">
        {{ session('success') }}
    </div>
    @endif
    @if (session('error'))
    <div class="alert alert-danger" style="background-color: red">
        {{ session('error') }}
    </div>
    @endif
    <div class="row">
        <div class="col-md-8 border-right">
            <form action="{{ route('profile.updatepassword') }}" method="POST" enctype="multipart/form-data">
                <div class="p-3 py-5">
                    <input type="hidden" name="id" id="id" value="{{ $user->id }}">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">ubah password</h4>
                    </div>
                    @csrf
                    @method('PUT')
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <label class="labels">Password</label>
                            <input type="password" class="form-control" placeholder="Password" name="password">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <label class="labels">Confirm Password</label>
                            <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation">
                        </div>
                    </div>
                    
                    <div class="mt-5 text-center"> <button type="submit" class="btn btn-primary btn-block mb-4" style="width: 100%;">save</button></div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
@stop