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
        //Validate the request
        $this->validate($request,
            ['body' => 'required']
        );

        /* Custom error message:
        $this->validate($request,
            ['body' => 'required|min:10'],
            ['required' => 'Please fill in the :attribute', 'min' => 'The :attribute shoud be of atleast :min characters']
        );
        */

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
