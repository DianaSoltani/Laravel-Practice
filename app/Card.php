<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    //Add a relationship here
    public function notes(){
        return $this->hasMany('App\Note');
    }
    public function addNote(Note $note, $userID){
        $note->user_id = $userID; //Set id of user to note.
        return $this->notes()->save($note);
    }
}
