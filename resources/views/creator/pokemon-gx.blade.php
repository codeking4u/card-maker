@extends('layouts.creator')


@section('content')
<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

<script src="https://unpkg.com/merge-images"></script>


<br>
<br>
<div class="creator-inner-container">
	<div>
		<canvas width="750" height="1040" id="myCanvas"></canvas>
		<img id="main-img" src="{{ asset('storage/page_img/cards/pokemon/Normal/1_Basic.png') }}">
		<img id="evolution" src="">
		<img src="">
		<img id="weakness" src="">
		<img id="resistance" src="">
		<img id="retreat" src="{{asset('storage/page_img/cards/pokemon/icons/normal.png')}}">
		<img id="upload_img" src="">
		<div>
			<button>New</button>
			<button>Save</button>
			<button>Open</button>
			<button>Publish</button>
		</div>
	</div>

	<div>
		<select name="card_type">
			<option value="">Regular</option>
			<option value="GX">GX</option>
			<option value="UB">Ultra Beast</option>
			<option value="UBGX">Ultra Beast GX</option>
		</select>
		<select name="type">
			<option value="Dark">Dark</option>
			<option value="Dragon">Dragon</option>
			<option value="Electric">Electric</option>
			<option value="Fairy">Fairy</option>
			<option value="Fighting">Fighting</option>
			<option value="Fire">Fire</option>
			<option value="Grass">Grass</option>
			<option value="Normal">Normal</option>
			<option value="Psychic">Psychic</option>
			<option value="Steel">Steel</option>
			<option value="Water">Water</option>
		</select>
		<input onkeyup="generate()" type="text" name="name" placeholder="Name">
		<input onkeyup="generate()" type="number" name="hitpoint" placeholder="HP">
  		<input type='file' name="upload_img" onchange="generate();" />
    	

		<div class="input-ctn">
			<h3>Evolution</h3>
			<div class="inner-input-ctn">
				<select name="stage">
					<option value="Basic">Basic</option>
					<option value="Stage1">Stage 1</option>
					<option value="Stage2">Stage 2</option>
				</select>
			</div>
		</div>

		<div class="input-ctn">
			<h3>Ability</h3>
			<div class="inner-input-ctn">
				<input onkeyup="generate()" type="text" name="ability_name" placeholder="Ability Name">
				<input onkeyup="generate()" type="text" name="ability_description" placeholder="Ability Description">
			</div>
		</div>

		<div class="input-ctn">
			<h3>Attack 1</h3>
			<div class="inner-input-ctn">
				<input onkeyup="generate()" type="text" name="attack1_name" placeholder="Attack Name">
				<input onkeyup="generate()" type="text" name="attack1_damage" placeholder="Attack Damage">
				<input onkeyup="generate()" type="text" name="attack1_description" placeholder="Attack Description">
				<div>Require Energy(up to 5)</div>
			</div>
		</div>


		<div class="input-ctn">
			<h3>Attack 2</h3>
			<div class="inner-input-ctn">
				<input onkeyup="generate()" type="text" name="attack2_name" placeholder="Attack Name">
				<input onkeyup="generate()" type="text" name="attack2_damage" placeholder="Attack Damage">
				<input onkeyup="generate()" type="text" name="attack2_description" placeholder="Attack Description">
				<div>Require Energy(up to 5)</div>
			</div>
		</div>


		<div class="input-ctn">
			<h3>GX Attack</h3>
			<div class="inner-input-ctn">
				<input onkeyup="generate()" type="text" name="gxattack_name" placeholder="Attack Name">
				<input onkeyup="generate()" type="text" name="gxattack_damage" placeholder="Attack Damage">
				<input onkeyup="generate()" type="text" name="gxattack_description" placeholder="Attack Description">
				<div>Require Energy(up to 5)</div>
			</div>
		</div>

		<div class="input-ctn">
			<h3>Weakness, Resistance and Retreat Cost</h3>
			<div class="inner-input-ctn">
				<div>
					<select name="weakness">
						<option value="Dark">Dark</option>
						<option value="Dragon">Dragon</option>
						<option value="Electric">Electric</option>
						<option value="Fairy">Fairy</option>
						<option value="Fighting">Fighting</option>
						<option value="Fire">Fire</option>
						<option value="Grass">Grass</option>
						<option value="Normal">Normal</option>
						<option value="Psychic">Psychic</option>
						<option value="Steel">Steel</option>
						<option value="Water">Water</option>
					</select>
					<select name="weakness-effect">
						<option value="+10">+10</option>
						<option value="+20">+20</option>
						<option value="+30">+30</option>
						<option value="+40">+40</option>
						<option value="x2">x2</option>
					</select>
				</div>
				<div>
					<select name="resistance">
						<option value="Dark">Dark</option>
						<option value="Dragon">Dragon</option>
						<option value="Electric">Electric</option>
						<option value="Fairy">Fairy</option>
						<option value="Fighting">Fighting</option>
						<option value="Fire">Fire</option>
						<option value="Grass">Grass</option>
						<option value="Normal">Normal</option>
						<option value="Psychic">Psychic</option>
						<option value="Steel">Steel</option>
						<option value="Water">Water</option>
					</select>
					<select name="resistance-effect">
						<option value="+10">+10</option>
						<option value="+20">+20</option>
						<option value="+30">+30</option>
						<option value="+40">+40</option>
						<option value="x2">x2</option>
					</select>
				</div>
				<div>
					<select name="retreat">
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
					</select>
				</div>
			</div>
		</div>

		<img id="test" src="">


	</div>
</div>

<style type="text/css">

	canvas{
		width: 100%;
		padding: 10px;
	}

	img{
	
		display: none;
	}
	
	.creator-inner-container{
		display: grid;
		grid-template-columns: 1fr 1fr;
		width: 100%;
	}

	.creator-inner-container input,.creator-inner-container select{
		display: block;
		border: solid 1px #349eeb;
		margin: 2px 0px;
		padding: 0px 3px;
		font-size: 14px;
	}

	.input-ctn{
		border: solid 1px #349eeb;
		border-radius: 4px;
		margin: 5px 0px;
	}

	.input-ctn h3{
		font-size: 16px;
		background:#349eeb;
		color: white;
		margin: auto;
		padding: 6px;
	}

	.inner-input-ctn{
		margin: 5px;
	}

	#card_img{
		position: absolute;top: 4px;
	}

</style>
<script type="text/javascript">
	
	$(document).ready(function(){

		// mergeImages([
		//   { src: 'http://www.localhost/tcgcreator/public/storage/page_img/cards/pokemon/GX/basic/dark.png', x: 0, y: 0 },
		//   { src: 'http://www.localhost/tcgcreator/public/storage/page_img/cards/pokemon/GX/basic/dark.png', x: 32, y: 0 },
		//   { src: 'http://www.localhost/tcgcreator/public/storage/page_img/cards/pokemon/GX/basic/dark.png', x: 16, y: 0 }
		// ]).then(b64 => document.getElementById('main-img').src = b64);

		


	});



	window.onload = function() {
    var canvas = document.getElementById("myCanvas");
    var ctx = canvas.getContext("2d");
    var img = document.getElementById("main-img");


   	ctx.drawImage(img, 0, 0);
   	



	};

	function generate(input){

		var canvas = document.getElementById("myCanvas");
		var heightRatio = 1.39;
		canvas.height = canvas.width * heightRatio;

		var ctx = canvas.getContext("2d");

    	var card_type = document.getElementsByName('card_type')[0].value;
    	var type = document.getElementsByName('type')[0].value;
    	var stage = document.getElementsByName('stage')[0].value;
    	var name = document.getElementsByName('name')[0].value;
    	var hp = document.getElementsByName('hitpoint')[0].value;
    	var imgs = "http://www.localhost/tcgcreator/public/storage/page_img/cards/pokemon/"+type+"/"+card_type+stage+".png";
    	var main = document.getElementById("main-img").src = imgs;

    	var weakness = document.getElementsByName('weakness')[0].value;
    	var retreat = document.getElementsByName('retreat')[0].value;
    	

		var preview = document.getElementById('upload_img');
		var file    = document.querySelector('input[type=file]').files[0];
		var reader  = new FileReader();

		reader.onloadend = function () {
			preview.src = reader.result;
		}

		if (file) {
		reader.readAsDataURL(file);
		} else {
		preview.src = "";
		}
    	
		ctx.drawImage(preview, 60, 98,630,390);

		var img = document.getElementById("main-img");
		ctx.drawImage(img, 0, 0);

		var retreat = document.getElementById('retreat');
    	ctx.drawImage(retreat, 550, 895, retreat.width*.2, retreat.height*.2);
    	var retreat = document.getElementById('retreat');
    	ctx.drawImage(retreat, 585, 895, retreat.width*.2, retreat.height*.2);
    	var retreat = document.getElementById('retreat');
    	ctx.drawImage(retreat, 620, 895, retreat.width*.2, retreat.height*.2);
    	var retreat = document.getElementById('retreat');
    	ctx.drawImage(retreat, 655, 895, retreat.width*.2, retreat.height*.2);


    	ctx.font = "30px Arial";
		ctx.fillText(name,140,70);
		ctx.font = "30px Arial";
		ctx.fillText('HP'+hp,560,70);
	}


</script>
@endsection