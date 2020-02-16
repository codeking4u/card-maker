<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreatorController extends Controller
{
    public function yugioh(){
    	return view('creator.yugioh');
    }

    public function yugioh_anime(){
    	return view('creator.yugioh-anime');
    }

    public function pokemongx(){
    	return view('creator.pokemon-gx');
    }
}
