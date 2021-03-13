<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\User;

class Article extends Model
{
    public function Category(){
        return $this->belongsTo(Category::class);
    }
    public function User(){ 
        return $this->belongsTo(User::class); 
    }
}
