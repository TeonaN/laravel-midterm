<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable=[
    	"title","description","short_description","category_id","image","creation_date","price","manufacturer"
    ];
}
