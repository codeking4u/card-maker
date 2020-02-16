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
        <input type="file" id="uploadedImg"/>
        <br>
        <br>
        <!-- text controlss -->
        <button id="add_text">Add Text</button>
            <div class="text-controls">
            <input type="color" value="" id="text-color" size="10">
            <label for="font-family" style="display:inline-block">Font family:</label>
            <select id="font-family">
                <option value="arial">Arial</option>
                <option value="helvetica" selected>Helvetica</option>
                <option value="myriad pro">Myriad Pro</option>
                <option value="delicious">Delicious</option>
                <option value="verdana">Verdana</option>
                <option value="georgia">Georgia</option>
                <option value="courier">Courier</option>
                <option value="comic sans ms">Comic Sans MS</option>
                <option value="impact">Impact</option>
                <option value="monaco">Monaco</option>
                <option value="optima">Optima</option>
                <option value="hoefler text">Hoefler Text</option>
                <option value="plaster">Plaster</option>
                <option value="engagement">Engagement</option>
            </select>
            <br>
            <label for="text-align" style="display:inline-block">Text align:</label>
            <select id="text-align">
                <option value="left">Left</option>
                <option value="center">Center</option>
                <option value="right">Right</option>
                <option value="justify">Justify</option>
            </select>
            <div>
                <label for="text-bg-color">Background color:</label>
                <input type="color" value="" id="text-bg-color" size="10">
            </div>
            <div>
                <label for="text-lines-bg-color">Background text color:</label>
                <input type="color" value="" id="text-lines-bg-color" size="10">
            </div>
            <div>
                <label for="text-stroke-color">Stroke color:</label>
                <input type="color" value="" id="text-stroke-color">
            </div>
            <div>
            

                <label for="text-stroke-width">Stroke width:</label>
                <input type="range" value="1" min="1" max="5" id="text-stroke-width">
            </div>
            <div>
                <label for="text-font-size">Font size:</label>
                <input type="range" value="" min="1" max="120" step="1" id="text-font-size">
            </div>
            <div>
                <label for="text-line-height">Line height:</label>
                <input type="range" value="" min="0" max="10" step="0.1" id="text-line-height">
            </div>

            <input type='checkbox' name='fonttype' id="text-cmd-bold">
                Bold

            <input type='checkbox' name='fonttype' id="text-cmd-italic">
                Italic
            
            <input type='checkbox' name='fonttype' id="text-cmd-underline" >
                Underline
            
            <input type='checkbox' name='fonttype'  id="text-cmd-linethrough">
                Linethrough
            
            <input type='checkbox' name='fonttype'  id="text-cmd-overline" >
                Overline
            <br>
            <br>
            <button id="removeButton">Remove Selected</button>
            </div>
        </div>
        @endforeach
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
    #add_text.active{
        border: 2px solid green;
        
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
