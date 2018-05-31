<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;
use App\Card;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class NotesController extends Controller
{
    public function store(Request $request, Card $card){
        /*$note = new Note;
        $note->body = $request->body;
        $card->notes()->save($note);
        return redirect()->back();*/
        $note = new Note($request->all());
        $note->user_id =1;
        $card->addNote($note, 1); //in place of 1 we put $user
        return back();


    }

    public function edit(Note $note){
        return view('notes/edit', compact('note'));
    }
    public function update(Request $request, Note $note){

        $note->update($request->all());
        return back();

    }
}
