<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;
use App\Card;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class NotesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth',['except' => null]);
    }

    public function store(Request $request, Card $card, User $user){
        //Validate the request
        $this->validate($request,
            ['body' => 'required']
        );
        /* Custom error message:
        $this->validate($request,
            ['body' => 'required|min:10'],
            ['required' => 'Please fill in the :attribute', 'min' => 'The :attribute should be of at least :min characters']
        );
        */

        $note = new Note($request->all());
        $id= $user -> id;
        $note->user_id = $id;//hardcoded 1
        $card->addNote($note, $user->id); //in place of 1 we put $user
        return back();


    }

    public function edit(Note $note){
        return view('notes/edit', compact('note'));
    }
    public function update(Request $request, Note $note){

        $note->update($request->all());
        //return back();
        return redirect('/dashboard');
    }
}
