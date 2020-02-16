<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
        <!-- Styles -->

    </head>
    <body>
        <div class="flex-center position-ref full-height">

            @include('include.nav')
            <div class="banner-container">
                <img class="banner-img" src="{{ asset('storage/page_img/banner.jpg') }}">
            </div>
<div class="top-voted-title">Top Voted Of The Week</div>
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
<div class="recently-made">Recently Made</div>
<div class="main-carousel">
  @foreach($new as $new)
  <div class="carousel-cell">
    <a href="{{url('/card/'.$new->id)}}">
      <img src="{{ asset('storage/publish/'.$new->image_name) }}">
    </a>
  </div>
  @endforeach
</div>
<div class="create-your-own">Create Your Own</div>
<div class="card-container">
    <img src="https://crystal-cdn3.crystalcommerce.com/photos/6476841/cardback.jpg">
    <img src="https://crystal-cdn3.crystalcommerce.com/photos/6523950/ygo-cardback.jpg">
</div>




@include('include.footer')
        </div>
    </body>
</html>

<style type="text/css">
    
    .top-voted-title,.recently-made,.create-your-own{
        text-align: center;
        font-size: 40px;
    }


    .banner-img{
        height: 100vh;
        object-fit: cover;
        width: 100%;
    }

    .carousel-cell{
        padding: 15px;
    }

    .carousel-cell img{
        height: 300px;
    }

    .card-container{
        max-width: 500px;
        margin: auto;
        display:flex;
    }

    .card-container img{
        width: 50%;
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