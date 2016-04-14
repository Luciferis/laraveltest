<?php

namespace App\Http\Controllers;

use App\Note;
use App\Card;
use Illuminate\Http\Request;

use App\Http\Requests;

class CardNotesController extends Controller
{
	public function store(Request $request, Card $card){
	//	$card->notes()->save(
	//		new Note(['body' => $request->body])
	//	);
		//$card->notes()->create($request->all());
		// $card->notes()->create([
		//	'body' => $request->body
		// ]);
		$note = new Note(['body' => $request->body]);
		$card->addNote($note);
		return back();
	}		
}
