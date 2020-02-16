<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\publish;

class FunctionController extends Controller
{
    public function publish(Request $request){



    	$img = $request->image;
    	// $image_link = "http://images5.fanpop.com/image/photos/31100000/random-random-31108109-500-502.jpg";
		// $split_image = pathinfo($image_link);

		// $ch = curl_init();
		// curl_setopt($ch, CURLOPT_URL , $image_link);
		// curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.13 (KHTML, like Gecko) Chrome/0.A.B.C Safari/525.13");
		// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		// $response= curl_exec ($ch);
		// curl_close($ch);
		// $file_name = time().".".$split_image['extension'];
		// $file = fopen($file_name , 'w') or die("X_x");
		// fwrite($file, $response);
		// fclose($file);
		$img = str_replace('data:image/png;base64,', '', $img);
		$img = str_replace(' ', '+', $img);
		$fileData = base64_decode($img);
		//saving
		$fileName = 'storage/publish/'.time().'.png';
		file_put_contents($fileName, $fileData);
		

    	$publish = new publish;
    	$publish->user_id = Auth::id();
    	$publish->image_name = time().'.png';
    	$publish->category = $request->category;
    	$publish->sub_category = $request->sub_category;
    	$publish->image_title = $request->title;
    	$publish->image_description = $request->description;
    	$publish->upvote = 0;
    	$publish->downvote = 0;
    	$publish->save();

    }
}
