@extends('layouts.creator')


@section('content')
<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

<script src="https://unpkg.com/merge-images"></script>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>

<br>
<br>
<div class="creator-inner-container">
	<div>
		<canvas width="810" height="1125" id="myCanvas"></canvas>
		<img id="main-img" src="">
		<img id="attribute" src="">
		<img id="upload_img" src="">
		<img id="stars" src="">
		<div class="link">
			<img id="link-t-l" src="{{ asset('storage/page_img/cards/yugioh/icons/link-t-l.png') }}">
			<img id="link-t" src="{{ asset('storage/page_img/cards/yugioh/icons/link-t.png') }}">
			<img id="link-t-r" src="{{ asset('storage/page_img/cards/yugioh/icons/link-t-r.png') }}">
			<img id="link-l" src="{{ asset('storage/page_img/cards/yugioh/icons/link-l.png') }}">
			<img id="link-r" src="{{ asset('storage/page_img/cards/yugioh/icons/link-r.png') }}">
			<img id="link-b-l" src="{{ asset('storage/page_img/cards/yugioh/icons/link-b-l.png') }}">
			<img id="link-b" src="{{ asset('storage/page_img/cards/yugioh/icons/link-b.png') }}">
			<img id="link-b-r" src="{{ asset('storage/page_img/cards/yugioh/icons/link-b-r.png') }}">
		</div>
		<div>
			<img id="divine" src="{{ asset('storage/page_img/cards/yugioh/icons/DIVINE.png') }}">
			<img id="dark" src="{{ asset('storage/page_img/cards/yugioh/icons/DARK.png') }}">
			<img id="earth" src="{{ asset('storage/page_img/cards/yugioh/icons/EARTH.png') }}">
			<img id="fire" src="{{ asset('storage/page_img/cards/yugioh/icons/FIRE.png') }}">
			<img id="light" src="{{ asset('storage/page_img/cards/yugioh/icons/LIGHT.png') }}">
			<img id="water" src="{{ asset('storage/page_img/cards/yugioh/icons/WATER.png') }}">
			<img id="wind" src="{{ asset('storage/page_img/cards/yugioh/icons/WIND.png') }}">
		</div>
		<div>
			<img id="normal" src="{{ asset('storage/page_img/cards/yugioh/regular/Normal.png') }}">
			<img id="effect" src="{{ asset('storage/page_img/cards/yugioh/regular/Effect.png') }}">
			<img id="ritual" src="{{ asset('storage/page_img/cards/yugioh/regular/Ritual.png') }}">
			<img id="fusion" src="{{ asset('storage/page_img/cards/yugioh/regular/Fusion.png') }}">
			<img id="synchro" src="{{ asset('storage/page_img/cards/yugioh/regular/Synchro.png') }}">
			<img id="xyz" src="{{ asset('storage/page_img/cards/yugioh/regular/Xyz.png') }}">
			<img id="link" src="{{ asset('storage/page_img/cards/yugioh/regular/Link.png') }}">
			<img id="spell" src="{{ asset('storage/page_img/cards/yugioh/regular/Spell.png') }}">
			<img id="trap" src="{{ asset('storage/page_img/cards/yugioh/regular/Trap.png') }}">
			<img id="pendulum" src="{{ asset('storage/page_img/cards/yugioh/regular/Pendulum.png') }}">
		</div>


		<div>
			<button>New</button>
			<button>Save</button>
			<button>Open</button>
			<button data-toggle="modal" data-target="#exampleModal">Publish</button>
		</div>
	</div>

	<div>

		

		<div class="input-ctn">
			<h3>Card Type</h3>
			<select name="card_type" onchange="generate();">
				<option selected value="Normal">Normal</option>
				<option value="Effect">Effect</option>
				<option value="Fusion">Fusion</option>
				<option value="Synchro">Synchro</option>
				<option value="Link">Link</option>
				<option value="Ritual">Ritual</option>
				<option value="Xyz">Xyz</option>
				<option value="Spell">Spell</option>
				<option value="Trap">Trap</option>
			</select>
		</div>

		<div class="input-ctn">
			<h3>Attribute</h3>
			<select name="attribute" onchange="generate();">
				<option value="Dark">Dark</option>
				<option value="Divine">Divine</option>
				<option value="Earth">Earth</option>
				<option value="Fire">Fire</option>
				<option value="Light">Light</option>
				<option value="Water">Water</option>
				<option value="Wind">Wind</option>
			</select>
		</div>

		<div class="input-ctn">
			<h3>Name</h3>
			<input onkeyup="generate()" type="number" name="attack" placeholder="Enter Name">
		</div>
    	
  		<div class="input-ctn">
			<h3>Image</h3>
			<input type='file' name="upload_img" onchange="generate();" />
			<button onclick="generate();">Upload</button>
		</div>

		<div class="input-ctn">
			<h3>Level</h3>
			<select name="level" onchange="generate();">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
			</select>
		</div>

		<div class="input-ctn">
			<h3>Type</h3>
			<input onkeyup="generate()" type="number" name="attack" placeholder="Enter Type">
		</div>

		<div class="input-ctn">
			<h3>Spell/Trap Icon</h3>
			<select name="level" onchange="generate();">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
			</select>
		</div>

		<div class="input-ctn">
			<h3>Effect</h3>
			<textarea onkeyup="generate()" type="number" name="effect" placeholder="Enter Effect"></textarea>
		</div>

		<div class="input-ctn">
			<h3>Attack/Defense</h3>
			<div>
				<input onkeyup="generate()" type="number" name="attack" placeholder="Attack">
				<input onkeyup="generate()" type="number" name="defense" placeholder="Defense">
			</div>
		</div>

		<div class="input-ctn">
			<h3>Set ID</h3>
			<input onkeyup="generate()" type="number" name="id" placeholder="Enter ID">
		</div>

		<div class="input-ctn">
			<h3>Serial Number</h3>
			<input onkeyup="generate()" type="number" name="serialnumber" placeholder="Enter Serial Number">
		</div>

		<div class="input-ctn">
			<h3>Copyright</h3>
			<input onkeyup="generate()" type="number" name="copyright" placeholder="Enter Copyright">
		</div>

		<div class="input-ctn">
			<h3>Link Arrows</h3>
			<div>
				<table>
					<tr>
						<td><input class="link-arrow" type="checkbox" name="link-t-l"value="link-t-l" onchange="generate();"></td>
						<td><input class="link-arrow" type="checkbox" name="link-t" value="link-t" onchange="generate();"></td>
						<td><input class="link-arrow" type="checkbox" name="link-t-r" value="link-t-r" onchange="generate();"></td>
					</tr>
					<tr>
						<td><input class="link-arrow" type="checkbox" name="link-l" value="link-l" onchange="generate();"></td>
						<td></td>
						<td><input class="link-arrow" type="checkbox" name="link-r" value="link-r" onchange="generate();"></td>
					</tr>
					<tr>
						<td><input class="link-arrow" type="checkbox" name="link-b-l" value="link-b-l" onchange="generate();"></td>
						<td><input class="link-arrow" type="checkbox" name="link-b" value="link-b" onchange="generate();"></td>
						<td><input class="link-arrow" type="checkbox" name="link-b-r" value="link-b-r" onchange="generate();"></td>
					</tr>
				</table>
			</div>
		</div>

		<div class="input-ctn">
			<h3>Pendulum</h3>
			<div>
				<input type="checkbox" name="pendulum" onchange="generate();">
				<input type="text" name="blue_scale"onkeyup="generate();">
				<input type="text" name="red_scale"onkeyup="generate();">
				<textarea onkeyup="generate()" type="number" name="pendulum_effect" placeholder="Enter Pendulum Effect"></textarea>
			</div>
		</div>



	</div>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Publish Info</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Image Title:</label>
            <input type="text" class="form-control" name="image_title">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Image Description:</label>
            <textarea class="form-control" name="image_description"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" onclick="publish();" class="btn btn-primary">Publish Photo</button>
      </div>
    </div>
  </div>
</div>

<style type="text/css">

	@font-face {
	  font-family: 'nisejsrf';
	  src: url('{{asset('font/nisejsrf/nisejsrf-webfont.eot')}}'); /* IE9 Compat Modes */
	  src: url('{{asset('font/nisejsrf/nisejsrf-webfont.?#iefix')}}') format('embedded-opentype'), /* IE6-IE8 */
       url('{{asset('font/nisejsrf/nisejsrf-webfont.woff')}}') format('woff'), /* Modern Browsers */
       src: url("{{asset('font/nisejsrf/nisejsrf-webfont.ttf')}}")  format('truetype'), /* Safari, Android, iOS */
	   url("{{asset('font/nisejsrf/nisejsrf-webfont.svg#nisejsrf')}}") format('svg'); /* Legacy iOS */
	}

	@font-face {
	  font-family: 'phonetica';
	  src: url('{{asset('font/phonetica/phonetica-webfont.eot')}}'); /* IE9 Compat Modes */
	  src: url('{{asset('font/phonetica/phonetica-webfont.?#iefix')}}') format('embedded-opentype'), /* IE6-IE8 */
       url('{{asset('font/phonetica/phonetica-webfont.woff')}}') format('woff'), /* Modern Browsers */
       src: url("{{asset('font/phonetica/phonetica-webfont.ttf')}}")  format('truetype'), /* Safari, Android, iOS */
	   url("{{asset('font/phonetica/phonetica-webfont.svg#phonetica')}}") format('svg'); /* Legacy iOS */
	}

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
	

	generate();

	function generate(input){
		var canvas = document.getElementById("myCanvas");
		var heightRatio = 1.46;
		canvas.height = canvas.width * heightRatio;

		var ctx = canvas.getContext("2d");

		var attack = document.getElementsByName('attack')[0].value;
		var defense = document.getElementsByName('defense')[0].value;
    	var card_type = document.getElementsByName('card_type')[0].value;
    	var attribute_type = document.getElementsByName('attribute')[0].value;
    	var levels = document.getElementsByName('level')[0].value;

    	var imgs = "http://www.localhost/tcgcreator/public/storage/page_img/cards/yugioh/anime/"+card_type+".png";
    	var attribute = "http://www.localhost/tcgcreator/public/storage/page_img/cards/yugioh/icons/"+attribute_type+".png";
    	var level_img = "http://www.localhost/tcgcreator/public/storage/page_img/cards/yugioh/icons/star"+levels+".png";

    	var main = document.getElementById("main-img");    	
    	var attribute_img = document.getElementById("attribute").src = attribute;
    	// var level_star = document.getElementById("stars").src = level_img;

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
    
		ctx.drawImage(preview, 18, 18,776,849);

		switch(card_type){
			case "Effect":
				ctx.drawImage(document.getElementById('effect'), 0, 0);
				break;
			case "Normal":
				ctx.drawImage(document.getElementById('normal'), 0, 0);
				break;
			case "Ritual":
				ctx.drawImage(document.getElementById('ritual'), 0, 0);
				break;
			case "Fusion":
				ctx.drawImage(document.getElementById('fusion'), 0, 0);
				break;
			case "Synchro":
				ctx.drawImage(document.getElementById('synchro'), 0, 0);
				break;
			case "Xyz":
				ctx.drawImage(document.getElementById('xyz'), 0, 0);
				break;
			case "Link":
				ctx.drawImage(document.getElementById('link'), 0, 0);
				break;
			case "Spell":
				ctx.drawImage(document.getElementById('spell'), 0, 0);
				break;
			case "Trap":
				ctx.drawImage(document.getElementById('trap'), 0, 0);
				break;
		}



	if (card_type != "Trap"  && card_type != "Spell") {
		switch(attribute_type){
			case "Dark":
				attribute_img = document.getElementById('dark');
				ctx.drawImage(attribute_img, 642,898,attribute_img.width*.25, attribute_img.height*.25);
				break;
			case "Divine":
				attribute_img = document.getElementById('divine');
				ctx.drawImage(attribute_img, 642,898,attribute_img.width*.25, attribute_img.height*.25);
				break;
			case "Earth":
				attribute_img = document.getElementById('earth');
				ctx.drawImage(attribute_img, 642,898,attribute_img.width*.25, attribute_img.height*.25);
				break;
			case "Fire":
				attribute_img = document.getElementById('fire');
				ctx.drawImage(attribute_img, 642,898,attribute_img.width*.25, attribute_img.height*.25);
				break;
			case "Light":
				attribute_img = document.getElementById('light');
				ctx.drawImage(attribute_img, 642,898,attribute_img.width*.25, attribute_img.height*.25);
				break;
			case "Water":
				attribute_img = document.getElementById('water');
				ctx.drawImage(attribute_img, 642,898,attribute_img.width*.25, attribute_img.height*.25);
				break;
			case "Wind":
				attribute_img = document.getElementById('wind');
				ctx.drawImage(attribute_img, 642,898,attribute_img.width*.25, attribute_img.height*.25);
				break;
		}
	}



		function levels_ac(){
			switch(levels){
			case "1":
				ctx.drawImage(star_img, (canvas.width)/2.18, 930,star_img.width*.6, star_img.height*.6);
				break;
			case "2":
				ctx.drawImage(star_img, (canvas.width)/2.35, 930,star_img.width*.6, star_img.height*.6);
				break;
			case "3":
				ctx.drawImage(star_img, (canvas.width)/2.45, 930,star_img.width*.6, star_img.height*.6);
				break;
			case "4":
				ctx.drawImage(star_img, (canvas.width)/2.75, 930,star_img.width*.6, star_img.height*.6);
				break;
			case "5":
				ctx.drawImage(star_img, (canvas.width)/3, 930,star_img.width*.6, star_img.height*.6);
				break;
			case "6":
				ctx.drawImage(star_img, (canvas.width)/3.32, 930,star_img.width*.6, star_img.height*.6);
				break;
			case "7":
				ctx.drawImage(star_img, (canvas.width)/3.65, 930,star_img.width*.6, star_img.height*.6);
				break;
			case "8":
				ctx.drawImage(star_img, (canvas.width)/4.2, 930,star_img.width*.6, star_img.height*.6);
				break;
			case "9":
				ctx.drawImage(star_img, (canvas.width)/4.7, 930,star_img.width*.6, star_img.height*.6);
				break;
			case "10":
				ctx.drawImage(star_img, (canvas.width)/6.5, 930,star_img.width*.6, star_img.height*.6);
				break;
			case "11":
				ctx.drawImage(star_img, (canvas.width)/12, 930,star_img.width*.6, star_img.height*.6);
				break;
			case "12":
				ctx.drawImage(star_img, (canvas.width)/24, 930,star_img.width*.6, star_img.height*.6);
				break;
			}
		}

		var level_st = document.getElementById("stars");
		if (card_type != "Link" && card_type != "Trap"  && card_type != "Spell") {
			if (level_img != level_st.src) {
				level_st.src = level_img;
				star_img = new Image();
				star_img.src = level_img;
				star_img.onload = function(){
					levels_ac();
							
				};
			}else{
				star_img = new Image();
				star_img.src = level_img;
				levels_ac();
			}
		}

		// Link Cards
		if (card_type == "Link") {

			if (document.getElementsByName('link-t-l')[0].checked) {
				var link_t_l = document.getElementById("link-t-l");
				ctx.drawImage(link_t_l,9.5,9.5)
			}

			if (document.getElementsByName('link-t')[0].checked) {
				var link_t = document.getElementById("link-t");
				ctx.drawImage(link_t,345,-2)
			}

			if (document.getElementsByName('link-t-r')[0].checked) {
				var link_t_r = document.getElementById("link-t-r");
				ctx.drawImage(link_t_r,730,9)
			}

			if (document.getElementsByName('link-l')[0].checked) {
				var link_l = document.getElementById("link-l");
				ctx.drawImage(link_l,-2,390)
			}

			if (document.getElementsByName('link-r')[0].checked) {
				var link_r = document.getElementById("link-r");
				ctx.drawImage(link_r,773,390)
			}

			if (document.getElementsByName('link-b-l')[0].checked) {
				var link_b_l = document.getElementById("link-b-l");
				ctx.drawImage(link_b_l,7.5,799)
			}

			if (document.getElementsByName('link-b')[0].checked) {
				var link_b = document.getElementById("link-b");
				ctx.drawImage(link_b,348,843)
			}

			if (document.getElementsByName('link-b-r')[0].checked) {
				var link_b_r = document.getElementById("link-b-r");
				ctx.drawImage(link_b_r,729,799)
			}

			var inputElems = document.getElementsByClassName("link-arrow"),
		    count = 0;

		    for (var i=0; i<inputElems.length; i++) {       
		       if (inputElems[i].type == "checkbox" && inputElems[i].checked == true){
		          count++;
		       }
		    }
			ctx.textAlign="center";
			ctx.font = "95px phonetica";
			ctx.fillText(count,587,1110);
		}


		// Pendulum
		if (document.getElementsByName('pendulum')[0].checked  && card_type != "Link" && card_type != "Trap"  && card_type != "Spell") {
			ctx.drawImage(document.getElementById('pendulum'), 0, 0);

			var blue_scale_num = document.getElementsByName('blue_scale')[0].value;
			var red_scale_num = document.getElementsByName('red_scale')[0].value;
			ctx.textAlign="center";
			ctx.font = "bold 52px bold phonetica";
			ctx.fillText(blue_scale_num,47,848);
			ctx.font = "bold 52px phonetica";
			ctx.fillText(red_scale_num,767,848);
		}else{

		}
		


		ctx.textAlign="center";

    	ctx.font = "95px phonetica";
		ctx.fillText(attack,220,1110);
		ctx.font = "95px phonetica";
		ctx.fillText(defense,590,1110);
	}

	function publish(){
		var canvas = document.getElementById("myCanvas");
		var image = canvas.toDataURL();

		$.ajax({
			url:"publish",
			headers: {
	            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        },
	        method: "POST",
	        data:{
	        	image:image,
	        	title:$('input[name=image_title]').val(),
	        	description:$('textarea[name=image_description]').val(),
	        	category:"yu-gi-oh",
	        	sub_category:"yu-gi-oh anime",
	        },
	        beforeSend: function(){
	        	// $('.loading').fadeIn();
	        },
	        success: function(result){
	        	alert('save');
	        	console.log(result);
	        },
	        error: function(request, status, error){
	        	console.log(request);
	        }
		});
	}


</script>
@endsection