@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="gallery">Your Gallery</div>
                    <div class="favorite">Favorite</div>
                </div>
            </div>
        </div>
    </div>
</div>




<style>

    .gallery{
        background:white;
        padding: 15px;
        color:#1dbf73;
        border: solid 1px #1dbf73;
        transition: .3s;
        border-radius: 5px;
        margin-bottom: 10px;
        display: inline-block;
    }
    
    .gallery:hover{
        background:#1dbf73;
        color: white;
    }

    .favorite{
        background::white;
        padding: 15px;
        color:#e31768;
        border: solid 1px #e31768;
        transition: .3s;
        border-radius: 5px;
        display: inline-block;
    }

    .favorite:hover{
        background:#e31768;
        color: white;
    }

</style>
@endsection
