@extends('layout.layout')
@section('utama')
<main>
    <div class="container">
        <img src="./images/bannerregister.png" class="d-block w-100" alt="Sunset Over the City" style="width: 400 px; height:600px" />
    </div>
</main>
@stop
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Consequuntur, quasi quis quia impedit distinctio nam
                    mollitia necessitatibus vel tenetur sapiente porro sit saepe dignissimos architecto. Natus sapiente architecto iure reprehenderit!</p>
            </div>
            <div>
                <a class="btn btn-danger" style="width: 100%; background-color:red; color:white" href="{{url('registerbeasiswa')}}">Daftar</a>
            </div>
        </div>
        <div class="col-md-8">
            <div>
                <h1>Program Beasiswa Djarum</h1>
            </div>
            <div>
                <img src="./images/bannerregister.png" class="d-block w-100" alt="Sunset Over the City" style="width: 400 px; height:400px" />
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui impedit in optio quos voluptas. Quisquam, deserunt consequatur earum eligendi corporis amet quis impedit vero ipsa dicta veritatis vitae, reiciendis corrupti!</p>
            </div>
        </div>
    </div>
</div>
@stop