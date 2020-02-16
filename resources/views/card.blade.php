@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<div class="container">
	@foreach($card as $card)
	<div class="main-card-ctn">
	    <div class="main-card">
            <canvas id="card_canvas" data-src="{{ asset('storage/publish/'.$card->image_name) }}" width="600" height="800"></canvas>
	    </div>
	    <div class="main-card-info">
	    	<p class="bold">Created By: Sngn123213</p>
	    	<p class="bold">{{$card->created_at}}</p>
	    	<p class="bold">Name:</p>
	    	<h1>{{ $card->image_title }}</h1>
	    	<p class="bold">Description:</p>
	    	<h2>{{ $card->image_description }}</h2>
            <input type="text" name="heading" id="heading">
	    </div>
	</div>
    <div class="button-ctn">
    	<div class="action-ctn">
    		<div>FAVOURITES</div>
    		<div><button class="report-btn">REPORT</button></div>
    		<div>UPVOTE</div>
    		<div>DOWNVOTE</div>
        <div>COMMENT</div>
    	</div>
    </div>
    @endforeach
    <div class="main-carousel">
      <div class="carousel-cell">
          <img src="https://assets.pokemon.com/assets//cms2/img/cards/web/SM12/SM12_EN_75.png">
      </div>
      <div class="carousel-cell">
          <img src="https://assets.pokemon.com/assets//cms2/img/cards/web/SM12/SM12_EN_75.png">
      </div>
      <div class="carousel-cell">
          <img src="https://assets.pokemon.com/assets//cms2/img/cards/web/SM12/SM12_EN_75.png">
      </div>
      <div class="carousel-cell">
          <img src="https://assets.pokemon.com/assets//cms2/img/cards/web/SM12/SM12_EN_75.png">
      </div>
      <div class="carousel-cell">
          <img src="https://assets.pokemon.com/assets//cms2/img/cards/web/SM12/SM12_EN_75.png">
      </div>
      <div class="carousel-cell">
          <img src="https://assets.pokemon.com/assets//cms2/img/cards/web/SM12/SM12_EN_75.png">
      </div>
      <div class="carousel-cell">
          <img src="https://assets.pokemon.com/assets//cms2/img/cards/web/SM12/SM12_EN_75.png">
      </div>
      <div class="carousel-cell">
          <img src="https://assets.pokemon.com/assets//cms2/img/cards/web/SM12/SM12_EN_75.png">
      </div>
      <div class="carousel-cell">
          <img src="https://assets.pokemon.com/assets//cms2/img/cards/web/SM12/SM12_EN_75.png">
      </div>
    </div>

    <div>Comments</div>
    <div class="comment">
        <div class="comment-block">
            <img src="https://a.deviantart.net/avatars-big/a/l/aledjonesdigitalart.jpg?1">
        </div>
        <div class="comment-block user-comment-ctn">
            <p class="comments">wtf lmao xff weqweqw eqweqweq ewtf lmao xff weqweqw eqweqweq ewtf lmao xff weqweqw eqweqweq ewtf lmao xff weqweqw eqweqweq ewtf lmao xff weqweqw eqweqweq ewtf lmao xff weqweqw eqweqweq ewtf lmao xff weqweqw eqweqweq ewtf lmao xff weqweqw eqweqweq ewtf lmao xff weqweqw eqweqweq ewtf lmao xff weqweqw eqweqweq ewtf lmao xff weqweqw eqweqweq ewtf lmao xff weqweqw eqweqweq ewtf lmao xff weqweqw eqweqweq ewtf lmao xff weqweqw eqweqweq ewtf lmao xff weqweqw eqweqweq ewtf lmao xff weqweqw eqweqweq ewtf lmao xff weqweqw eqweqweq ewtf lmao xff weqweqw eqweqweq ewtf lmao xff weqweqw eqweqweq ewtfeqweqweq e</p>
        </div>
    </div>

</div>


<style type="text/css">
    


    .carousel-cell{
        padding: 10px;
    }

    .carousel-cell img{
      height: 250px;
    }

    .comment{
        vertical-align:top;
        margin: 5px 0px;
    }

    .comment-block{
           display: inline-block;
           vertical-align:top;
    }

    .main-card-info{
      padding: 10px;
    }

    .user-comment-ctn{
        background: #e8e8e8;
        padding: 10px;
        max-width: 80%;
    }

    .main-card-ctn{
    	display: flex;
    }

    .main-card{
        text-align: center;
        max-width: 600px;
    }

    .main-card img{
        padding: 10px;
        max-width: 100%;
    }

    /*controls*/

    .button-ctn{
    	display: flex;
    	font-size: 12px;
    }

    .action-ctn div{
    	display: inline-block;
    }

    .container h1,.container h2, .container p{
    	margin: 0px !important;
    	font-size: 14px;
    	font-weight: normal;
    }

    .bold{
    	font-weight: bold !important;
    }

    .report-btn{
    	border: none;
    	background: #dc3545;
    	padding: 2px 12px;
    	color: white;
    	outline:none !important;
    	border-radius: 3px;
    }


</style>

<script type="text/javascript">
    
    $(document).ready(function(){

      $('.main-carousel').flickity({
          cellAlign: 'center',
          contain: true,
          pageDots: false,
          wrapAround: true,
          imagesLoaded: true,
          asNavFor: '.carousel-main',
      });

  
    });

</script>



  
@endsection
