@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<div class="container">

    <div class="main-search">
    	@foreach($cards as $card)
    	<div class="main-cell">
    		<a href="{{url('/card/'.$card->id)}}">
	    		<img src="{{ asset('storage/publish/'.$card->image_name) }}">
	    		<div class="card-white">
	    			<div>View Card</div>
	    		</div>
    		</a>
    	</div>
    	@endforeach
    
    </div>



</div>


<style type="text/css">




    .main-cell{
        margin: 14px;
        transition-duration: .3s;
        border: solid 1px transparent;
        position: relative;
    }

    .main-cell img{
    	width: 245px;
    	transition: .3s ease;
    }

    .card-white{
    	transition: .3s ease;
  		opacity: 0;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		-ms-transform: translate(-50%, -50%);
		text-align: center;
		z-index: 3;
    }

    .card-white div{
    	background:#3490dc;
    	color: white;
    	padding:3px 10px;
    	border-radius: 4px;
    }

    .main-cell:hover .card-white{
    	opacity: 1;
    }

    .main-cell:hover img{
    	opacity: .3;
    }

    .main-search{
		display: flex;
		align-items: center;
		justify-content: center;
		flex-direction: row;
		flex-wrap: wrap;
		flex-flow: row wrap;
		align-content: flex-end;
		max-width: 1100px;
		margin: auto;
    }

/*    .card-container{
        max-width: 500px;
        margin: auto;
        display:flex;
    }

    .card-container img{
        width: 50%;
    }

    .comment{
        vertical-align:top;
        margin: 5px 0px;
    }

    .comment-block{
           display: inline-block;
           vertical-align:top;
    }

    .user-comment-ctn{
        background: #e8e8e8;
        padding: 10px;
        max-width: 80%;
    }

    .main-card{
        text-align: center;
    }

    .main-card img{
        margin: 10px;
    }*/

</style>



  
@endsection
