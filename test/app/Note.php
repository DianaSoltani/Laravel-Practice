<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{

    protected $fillable=['body', 'user_id'];

    //If we want to fetch the card
    public function card(){
        return $this->belongsTo(Card::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
