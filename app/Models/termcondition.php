<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class termcondition extends Model
{
    use HasFactory;

    public function user(){
        return $this->hasOne(User::class,'id','ani1');
    }
}
