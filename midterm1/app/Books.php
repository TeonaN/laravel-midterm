<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $fillable=[
    	"author_name","description","title","genre_id"
    ];
}
