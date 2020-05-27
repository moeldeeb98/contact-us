<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [ 'name', 'email', 'user_id'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
