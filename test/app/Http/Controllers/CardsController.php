<?php

namespace App\Http\Controllers;

use DB;
use App\Card;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CardsController extends Controller
{
    public function index(){
        $cards = Card::all();
        return view('cards.index', compact('cards'));
    }

    public function show(Card $card){
        //Allows us to make a minimum number of retrievals while
        //obtaining information from one card
        $card->load('notes.user');//notes.user allows retrieval
                                          //of both notes and user
        return view('cards.show', compact('card'));
    }
}




/* php artisan tinker (to add new cards on the fly to test things out
DB::table('cards')->insert(['title' => 'Title of new card', 'created_at'=> new DateTime, 'updated_at'=> new DateTime]);
DB::table('cards')->get(); or App\Card::all();
DB::table('cards')->where('title', 'Title of new card')->first(); //returns first instance of that card with the same title
                                                       ->delete(); //deletes specific card
*/