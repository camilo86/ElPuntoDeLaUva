<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $table = "products";
	protected $fillable = ["name", "description", "img", "price", "quantity", "tags", "notes"];
	protected $hidden = ["id", "notes"];
}
