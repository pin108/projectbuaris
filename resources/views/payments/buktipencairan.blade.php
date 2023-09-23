@extends('layout.layout')
@section('utama')
<main>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
<div class="container" style="margin-top:5%">
    @foreach ($data as $item)
        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset('storage/' . $item->foto_pencairan) }}" style="width: 400px; height: 400px" alt="Pencairan dana Image">
            </div>
            <div class="col-md-4">
                <h2>Pencairan dana</h2>
                <p>Tanggal pencairan: {{ $item->created_at }}</p>
            </div>
        </div>
        <div class="row" style="margin-top:2%">
            <div class="col-md-4">
                <img src="{{ asset('storage/' . $item->foto_penyerahan) }}" style="width: 400px; height: 400px" alt="Penyerahan dana Image">
            </div>
            <div class="col-md-4">
                <h2>Penyerahan dana</h2>
            </div>
        </div>
    @endforeach
</div>
</main>
@endsection
